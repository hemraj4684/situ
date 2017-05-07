<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrnOwnerDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('trn_owner_details', function (Blueprint $table) {
            $table->increments('own_id');
            
            $table->string('own_name');
            $table->string('own_gen');
            $table->string('own_rel');
            $table->string('own_cat');
            $table->timestamps();
        });
        
        
        Schema::table('trn_owner_details', function (Blueprint $table) {
            $table->string('own_im_no');
            $table->foreign('own_im_no')->references('im_no')->on('mst_im_regs');
            $table->integer('own_im_user_id')->unsigned();
            $table->foreign('own_im_user_id')->references('im_user_id')->on('mst_im_regs');
             });
}
        
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('trn_owner_details');
       //$table->dropForeign('gallery_user_id_foreign');
    }
}
