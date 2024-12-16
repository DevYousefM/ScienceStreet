<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string("student_name");
            $table->string("parent_name");
            $table->string("parent_number");
            $table->string("parent_email");
            $table->string("school_name");
            $table->integer("age");
            $table->string("course");
            $table->string("price");
            $table->string("time");
            $table->string("promo")->nullable();
            $table->string('payment_id')->nullable();
            $table->string("status")->default("Pending");
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
