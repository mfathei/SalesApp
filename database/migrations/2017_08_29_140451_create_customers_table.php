<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 199)->unique();
            $table->string('address', 199);
            $table->string('email', 199)->unique()->nullable();
            $table->string('phone', 100);
            $table->string('fax', 100)->nullable();
            $table->decimal('first_balance')->default(0);
            $table->decimal('balance')->default(0);
            $table->decimal('limit')->default(0)->nullable();
            $table->string('notes', 300)->nullable();
            $table->tinyInteger('active')->default(1);
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
        Schema::dropIfExists('customers');
    }
}
