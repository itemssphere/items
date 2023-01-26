<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Response;
use Illuminate\Database\Eloquent\Builder;

class MacroServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        /**
         * Response Macros
         */
        Response::macro('success', function($data){
            $array = [
                'success' => true,
                'data' => $data,
            ];

            return (!request()->has(config('request.pagination')))
                ? response()->json($array)
                : response()->json(array_merge([
                    "total" => $data->total(),
                    "count" => $data->count(),
                    "per_page" => $data->perPage(),
                    "current_page" => $data->currentPage(),
                    "last_page" => $data->lastPage(),
                    "first_page_url" => $data->appends(request()->input())->url(1),
                    "last_page_url" => $data->appends(request()->input())->url($data->lastPage()),
                    "next_page_url" => $data->appends(request()->input())->nextPageUrl(),
                    "prev_page_url" => $data->appends(request()->input())->previousPageUrl(),
                ], $array));
        });

        /**
         * Dinamically add pagination
         *
         * \Illuminate\Database\Eloquent\Builder macro
         */
        Builder::macro('customPaginate', function () {
            return (!request()->has(config('request.pagination')))
                ? $this->get()
                : $this->paginate(request()[config('request.pagination')]);
        });

        /**
         * Dinamically add pagination
         *
         * \Illuminate\Database\Eloquent\Builder macro
         */
        Builder::macro('byRole', function () {
            return (!request()->has(config('request.role')))
                ? $this->with('roles')->get()
                : $this->paginate(request()[config('request.role')]);
        });
    }
}
