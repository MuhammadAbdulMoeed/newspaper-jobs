<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateUsersTable.
 */
class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(config('access.table_names.users'), function (Blueprint $table) {
            $table->increments('id');
            $table->uuid('uuid');
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('email')->unique();
            $table->string('avatar_type')->default('gravatar');
            $table->string('avatar_location')->nullable();
            $table->string('password')->nullable();
            $table->timestamp('password_changed_at')->nullable();
            $table->tinyInteger('active')->default(1)->unsigned();
            $table->string('confirmation_code')->nullable();
            $table->boolean('confirmed')->default(config('access.users.confirm_email') ? false : true);
            $table->string('timezone')->nullable();
            $table->timestamp('last_login_at')->nullable();
            $table->string('last_login_ip')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
            // Additional Information
            $table->string('cv')->nullable();
            $table->string('gendar')->nullable();
            $table->datetime('dob')->nullable();
            $table->string('city')->nullable();
            $table->string('mobile_no')->nullable();
            $table->string('degree_title_one')->nullable();
            $table->string('specialization_one')->nullable();
            $table->string('institution_one')->nullable();
            $table->string('passing_year_one')->nullable();
            $table->string('degree_title_two')->nullable();
            $table->string('specialization_two')->nullable();
            $table->string('institution_two')->nullable();
            $table->string('passing_year_two')->nullable();
            $table->string('total_exp')->nullable();
            $table->string('annual_salary')->nullable();
            $table->string('industry')->nullable();
            $table->string('functional_area')->nullable();
            $table->string('key_skills')->nullable();
            $table->string('company_name')->nullable();
            $table->string('designation')->nullable();
            $table->string('company_logo')->nullable();
            $table->string('company_description')->nullable();
            $table->string('website')->nullable();
            $table->string('sector')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(config('access.table_names.users'));
    }
}
