<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUserIdToPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->foreignId('user_id')
            ->nullable()
            -> constrained();

            // # new cloumn + unsign  + name=user_id
            // $table->unsignedBigInteger('user_id');
            // # add constriants --> foreign key
            // $table->foreign('user_id')->references('id')->on('users')->nullable();
        });
    }

}
