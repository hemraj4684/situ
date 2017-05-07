<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mst_im_reg extends Model
{
     protected $table = 'mst_im_regs';
     
   protected $fillable = [
        'im_unit_name','im_unit_add','im_unit_tal','im_unit_dist',
        'im_unit_state','im_unit_pin','im_unit_fax','im_unit_mob','im_unit_email','im_unit_web',
        'im_unit_ssi','im_unit_for','im_unit_firm','user_id','im_status'];
   
   
   protected $hidden = [
        'user_id',
    ];
   
    public function __toString()
    {
        return $this->Mst_im_reg;
    }
}
