<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('student_complains', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('class');
            $table->string('roll_number');
            $table->string('phone_number');
            $table->string('email');
            $table->longText('message');
            $table->string('status')->default('pending')->comment('pending, resolved');
            $table->string('remark')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('student_complains');
    }
};
