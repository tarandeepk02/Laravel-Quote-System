<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('logo');
            $table->string('stitle');
            $table->text('metakey');
            $table->text('metadesc');
            $table->text('address');
            $table->string('contact');
            $table->string('email');
            $table->string('website');
            $table->text('video');
            $table->text('about');
            $table->string('facebook');
            $table->string('twitter');
            $table->string('linkedin');
            $table->string('gplus');
            $table->string('adminemail');
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
};
