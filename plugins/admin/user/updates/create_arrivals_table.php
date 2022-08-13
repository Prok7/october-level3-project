<?php namespace Admin\User\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateArrivalsTable extends Migration
{
    public function up()
    {
        Schema::create('admin_user_arrivals', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer("user_id");
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('admin_user_arrivals');
    }
}
