<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOsaRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('osa_registrations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('father_name');
            $table->string('subject');
            $table->string('passing_year');
            $table->string('qualification');
            $table->string('contact_number');
            $table->string('whatsappNumber');
            $table->string('email');
            $table->text('permanent_address');
            $table->text('Employment_status');
            $table->string('place_of_posting')->nullable();
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
        Schema::dropIfExists('osa_registrations');
    }
}
