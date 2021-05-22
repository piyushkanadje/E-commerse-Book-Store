<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplyformTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applys', function (Blueprint $table) {
            $table->id();
            $table->integer('userid');
            $table->string('name');
            $table->string('mobile');
            $table->string('email');
            $table->string('university');
            $table->string('course');
            $table->string('passing');
            $table->integer('sets');
            $table->integer('price');
            $table->string('shipping');
            $table->string('delivery');
            $table->string('status')->nullable()->change();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apply');
    }
}
