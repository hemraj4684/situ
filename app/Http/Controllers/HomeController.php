<?php

namespace App\Http\Controllers;
//namespace App\Http\Controllers\Auth;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Mst_im_reg;
use Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    
     public function RO_dashboard()
    {
        return view("RO/RO_dashboard");
    }
    
     public function JIT_dashboard()
    {
        return view("JIT/JIT_dashboard");
    }
    
     public function JIT_app_form()
    {
        return view("JIT/JIT_Format_III");
    }
    
     public function OIC_dashboard()
    {
        return view("OIC/OIC_dashboard");
    }
    
     public function OIC_app_form()
    {
        return view("OIC/OIC_Format_IV");
    }

    
    
    public function index()
    {
       $user = Auth::User();     
        $userId = $user->id;
       // echo  $userId;
        $userrole = $user->role;
        
        
        if ($userrole=='user')
        {
         $mst_im_reg = DB::table('mst_im_regs')
             ->select('im_no', 'im_status','created_at')
             ->where('user_id' ,$user->id)   
              ->orderby('user_id')
              ->groupby('im_status')   
            ->get();
         //echo $mst_im_reg;
         return view('home')->with(['mst_im_reg' => $mst_im_reg]);
       
            
            
        //return view('home');
        }
        elseif ($userrole=='RO')
        {
          return view('RO/RO_dashboard');  
        }
        elseif ($userrole=='JIT')
        {
          return view('JIT/JIT_dashboard');  
        }
        else 
        {
          return view('OIC/OIC_dashboard');  
        }
        
        
}
    
       
    }
