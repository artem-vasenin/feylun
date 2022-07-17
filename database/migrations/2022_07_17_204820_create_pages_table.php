<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagesTable extends Migration
{
  /** Run the migrations.
   * @return void
   */
  public function up()
  {
    Schema::create('pages', function (Blueprint $table) {
      $table->id();
      $table->string('title');
      $table->string('slug')->unique();
      $table->text('description');
      $table->text('content');
      $table->integer('category_id')->nullable();
      $table->integer('user_id');
      $table->tinyInteger('is_active')->default(1);
      $table->string('img')->nullable();
      $table->integer('counter')->default(0);
      $table->timestamps();
    });
  }

  /** Reverse the migrations.
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('pages');
  }
}
