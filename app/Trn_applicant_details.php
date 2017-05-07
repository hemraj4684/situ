<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trn_applicant_details extends Model
{
     protected $table = 'trn_applicant_details';
     
   protected $fillable = [
        'im_no','app_name','app_gen','app_rel',
        'app_cat'];
}
