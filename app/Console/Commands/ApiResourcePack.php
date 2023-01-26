<?php

namespace App\Console\Commands;

use Illuminate\Support\Str;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use App\Services\ApiResourcePackService;

class ApiResourcePack extends Command
{
    /**
     * Base name of Reource Pack
     *
     * @var String
     */
    protected $name;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'apiResource:pack';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Creates Full Default Resource pack of Model';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle(): void
    {

        $this->name = $this->setProjectName();

        ($this->wantFullPack())
            ? $this->createFullPack()
            : $this->createBySteps();
    }

    /**
     * Convert given name to plural
     *
     * @return string
     */
    private function setProjectName()
    {
        return Str::plural($this->ask("message from service using Command Parent"));
    }

    /**
     * Where you want a full pack or not
     *
     * @return boolean
     */
    private function wantFullPack()
    {
        return $this->confirm("Do you need a full package of Resource");
    }

    /**
     * Create full set of apiResource needed files
     *
     * @return void
     */
    private function createFullPack()
    {
        $this->info("Creating full pack immediatelly");

        $this->createMigration();
    }

    /**
     * Create Migration
     *
     * @return void
     */
    private function createMigration()
    {
        Artisan::call('make:migration', [
            'name' => $this->handleMigrationFileName(),
            '--create' => $this->handleDatabaseTableName(),
        ]);
    }

    /**
     * Create package step by step
     *
     * @return void
     */
    private function createBySteps()
    {
        $this->info("Creating package step by step");
    }

    /**
     * Handle migration file name
     *
     * @return string
     */
    private function handleMigrationFileName()
    {
        return 'create_'.Str::ucfirst(Str::plural($this->name)).'_table';
    }

    /**
     * Handle Database table name
     *
     * @return string
     */
    private function handleDatabaseTableName()
    {
        return Str::lower(Str::plural($this->name));
    }
}
