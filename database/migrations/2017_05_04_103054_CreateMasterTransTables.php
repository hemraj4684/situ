<<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMasterTransTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mst_im_regs', function (Blueprint $table) {
            $table->increments('im_no');
            $table->integer('user_id');
            
            $table->string('im_status')->default('pending');
            $table->text('im_unit_name'); 
            $table->text('im_unit_add');
            $table->string('im_unit_tal');
            $table->string('im_unit_dist');
            $table->string('im_unit_state');
            $table->integer('im_unit_pin');
            $table->string('im_unit_fax');
            $table->string('im_unit_mob');
            $table->string('im_unit_email');    
            $table->string('im_unit_web');
            $table->string('im_unit_ssi');
            $table->string('im_unit_for');
            $table->integer('im_unit_cat');
            $table->string('im_unit_firm');
            
            $table->string('im_reg_auth');
            $table->string('im_prems');
            
            $table->string('im_bank_name');
            $table->string('im_bank_branch');
            $table->string('im__bank_add');
            $table->string('im_bank_pin');
            $table->string('im_bank_mob');
            $table->string('im_bank_acc');
            
            $table->string('im_bank_ifsc');
            
            $table->timestamps();
             });
       
         Schema::create('trn_applicant_details', function (Blueprint $table) {
            $table->increments('app_id');
            $table->string('im_no');
            $table->string('app_name');
            $table->string('app_gen');
            $table->string('app_rel');
            $table->string('app_cat');
            $table->timestamps();
        });
        
         Schema::create('trn_attachments_details', function (Blueprint $table) {
           
            $table->increments('inprinc_no');
            $table->string('im_no');
            $table->integer('user_id'); 
            $table->string('attachment');
            $table->string('sub_model');
            $table->integer('quant');
            $table->integer('rate_unit');
            $table->integer('total_cost');
            $table->timestamps();
        });
        
        Schema::create('mst_manufacturer', function (Blueprint $table) {
            $table->increments('manf_id');
            $table->string('manf_name');
            $table->string('manf_add');
            $table->string('manf_dist');
            $table->string('manf_state');
            $table->integer('manf_pin');
            $table->string('manf_bank_name');
            $table->string('manf_bank_add');
            $table->string('manf_bank_branch');
            $table->integer('manf_acc_no');
            $table->string('manf_bank_ifsc');
            $table->timestamps();
        });
        
        Schema::create('mst_attachment', function (Blueprint $table) {
            $table->increments('att_id');
            $table->string('att_name');
            $table->string('att_code');
            $table->string('att_sub_name');
            $table->string('att_sub_code');
            
            $table->timestamps();
        });
        
        Schema::create('mst_kit', function (Blueprint $table) {
            $table->increments('kit_id');
            $table->integer('att_id')->unsigned();
            $table->foreign('att_id')->references('att_id')->on('mst_attachment');
            $table->timestamps();
            
        });
        
        Schema::create('mst_eligible_rate', function (Blueprint $table) {
            $table->increments('rate_id');
            $table->integer('att_id')->unsigned();
            $table->foreign('att_id')->references('att_id')->on('mst_attachment');
            $table->integer('manf_id')->unsigned();
            $table->foreign('manf_id')->references('manf_id')->on('mst_manufacturer');
            $table->integer('elg_rate_unit');
            $table->timestamps();
            
        });
        
        Schema::create('mst_upgrade_type', function (Blueprint $table) {
            $table->increments('up_id');
            $table->string('up_name');
            
            $table->timestamps();
        }); 
        
         Schema::create('trn_cats', function (Blueprint $table) {
            $table->increments('caste_id');
            $table->string('caste_name');
            $table->string('caste_cat');
            $table->integer('caste_rank');
            $table->timestamps();
        });
        
        Schema::create('mst_sub_rule', function (Blueprint $table) {
            $table->increments('sub_id');
            $table->integer('caste_id')->unsigned();
            $table->foreign('caste_id')->references('caste_id')->on('trn_cats');
            $table->integer('up_id')->unsigned();
            $table->foreign('up_id')->references('up_id')->on('mst_upgrade_type');
            $table->integer('sub_percent');
            $table->integer('sub_cap_amt');
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
        Schema::drop('mst_im_regs');
        Schema::drop('trn_applicant_details');
        Schema::drop('trn_attachment_details');
        Schema::drop('mst_manufacturer');
        Schema::drop('mst_attachment');
        Schema::drop('mst_kit');
        Schema::drop('mst_eligible_rate');
        Schema::drop('mst_upgrade_type');
        Schema::drop('trn_cats');
        Schema::drop('mst_sub_rule');
       
        
          
    }
}

