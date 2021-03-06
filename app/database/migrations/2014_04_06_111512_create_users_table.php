<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    Schema::create('users', function(Blueprint $table) {
      $table -> string('id', 64) -> primary();
      $table -> string('password', 64);
      $table -> string('first_name', 50);
      $table -> string('last_name', 50);
      $table -> timestamps();
    });

  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
    Schema::drop('users');
  }

}
