<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

use Illuminate\Support\Facades\DB;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('state')->nullable();
            $table->string('tribe')->nullable();
            $table->integer('age')->nullable();
            $table->string('residence')->nullable();
            $table->text('preference')->nullable();
            $table->timestamps();

            $table->index('user_id');
        });

        // Full Text Index
    DB::statement('ALTER TABLE profiles ADD FULLTEXT fulltext_index (tribe, residence)');
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
}
