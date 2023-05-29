<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();

            /**
             * Account Information
             * name json (en, ge) default en... (stands for shop & charity name also)
             * legal form (no need for shops and charity)
             * sex (no need for shops and charity)
             * dob (no need for shops and charity)
             *
             * about (en, ge) (textarea only for charities)
             * <categories> will be relation hasMany.
             * Contact Information
             * Phone (for all types of accounts)
             * email ********* (not fillable) comes from user email
             * City (en, ge) (same for shop and charity)
             * Street Address (en, ge) (same for shop and charity)
             * Post Code (same for shop and charity)
             *
             * Website
             * Facebook
             * Instagram
             * Youtube
             *
             * contact_person_name (only for shops and charitys)
             * contact_person_mobile (only for shops and charitys)
             *
             * Legal Information
             *
             * ID Number (for all types of accounts)
             * IBAN (for all types of accounts)
             */
            $table->foreignId('user_id')
                ->nullable()
                ->constrained('users');
            $table->json("name");
            $table->boolean("legal_type")->nullable();
            $table->boolean("sex")->nullable();
            $table->date("dob")->nullable();
            $table->json("about")->nullable();
            $table->string("phone")->nullable();
            $table->json("city")->nullable();
            $table->json("address")->nullable();
            $table->string("post_code")->nullable();
            $table->string("facebook")->nullable();
            $table->string("instagram")->nullable();
            $table->string("youtube")->nullable();
            $table->string("contact_name")->nullable();
            $table->string("contact_phone")->nullable();
            $table->string("id_number")->nullable();
            $table->string("iban")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
};
