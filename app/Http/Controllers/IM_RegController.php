<?php

namespace App\Http\Controllers;
use Input;
//use Illuminate\Http\Request as Input;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
//use App\Http\Controllers\DB;
use App\Http\Requests;
use App\Mst_im_reg;
use App\User;
use App\Trn_applicant_details;
use Auth;
use DateTime;

class IM_RegController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     protected $input; 
    
    public function reg2()
    {
        return view("reg_2");
    }

    public function reg3()
    {
        return view("reg_3");
    }
    
     public function RO_IM_list()
    {
           
        //$mst_im_reg = Mst_im_reg::all();
       $mst_im_reg = DB::table('mst_im_regs')
            ->join('users', 'mst_im_regs.user_id', '=', 'users.id')
             ->select('mst_im_regs.*', 'users.co_name')
              ->orderby('mst_im_regs.user_id')
                 
            ->get();
         return view('RO.RO_pend_IM')->with(['mst_im_reg' => $mst_im_reg]);
    }

    
    public function index()
    {
       $user = Auth::user();
    return view('reg_1')->with(['user' => $user]);

    
    }

  
    public function create()
    {
        return view("reg_2");
    }

 
    public function store(Request $request)
    {
      
        
        
      $this->validate($request, [
    'im_unit_name' => 'required',
    'im_unit_add' => 'required',
    'im_unit_tal' => 'required',
    'im_unit_dist' => 'required', 
    'im_unit_state' => 'required',     
    'im_unit_fax' => 'required',
    'im_unit_ssi'  => 'required',
    'im_unit_for'  => 'required',  
    'im_unit_firm'  => 'required',  
    'im_unit_mob' => 'required|unique:mst_im_regs|numeric',
    'im_unit_email' =>'required|unique:mst_im_regs',   
          
]); 
    
    // return request()->all();
     
     
   // Mst_im_reg::create($request->all());
   
      
      
     // $data = Mst_im_reg::create($request->all());
      
      $mst_im_reg = new Mst_im_reg;
     $mst_im_reg->user_id = Input::get('user_id');
     $mst_im_reg->im_unit_name = Input::get('im_unit_name');
     $mst_im_reg->im_unit_add = Input::get('im_unit_add');
     $mst_im_reg->im_unit_tal = Input::get('im_unit_tal');
     $mst_im_reg->im_unit_dist = Input::get('im_unit_dist');
     $mst_im_reg->im_unit_state = Input::get('im_unit_state');
     $mst_im_reg->im_unit_pin = Input::get('im_unit_pin');
     $mst_im_reg->im_unit_fax = Input::get('im_unit_fax');
     $mst_im_reg->im_unit_for = Input::get('im_unit_for');
     $mst_im_reg->im_unit_ssi = Input::get('im_unit_ssi');
     $mst_im_reg->im_unit_mob = Input::get('im_unit_mob');
     $mst_im_reg->im_unit_email = Input::get('im_unit_email');
     $mst_im_reg->im_unit_web = Input::get('im_unit_web');
     $mst_im_reg->im_unit_firm = Input::get('im_unit_firm');
      
      
        $user = Auth::User();     
        $userId = $user->id;
        
        
     //$user = User::where('id', '=', Input::get('user_id'))->get();
     
     $users = DB::table('mst_im_regs')
                     ->select('im_no')
                     ->where('user_id', '=', $userId)
                     ->get();
     
     
     
     
     
    
if(count($users) > 0)
{ 
 //DB::table('mst_im_regs')->update(
 // ['im_status' => 'pending'); 
$mst_im_reg->im_status = 'pending';
     //$mst_im_reg->save();
   
    
    // return view("reg_2");

}
else
{
    // DB::table('mst_im_regs')->update(
    //['im_status' => 'active'] ); 
   
     $mst_im_reg->im_status = 'active';
    // $mst_im_reg->save();
  //   return view("reg_2");
    

 
}

$mst_im_reg->save();

//$lastInsertedId = $mst_im_reg->im_no;
//echo  $lastInsertedId ;
 //$id=DB::table('mst_im_regs')->insertGetId($insert);


$users1 = DB::table('mst_im_regs')
                     ->select('im_no')
                     ->where('user_id', '=', $userId)
                     ->get()
                     ;

if (count($users1)>0)
{ 
    $im_count=count($users1);
   // echo "$im_count";
   // echo " user";
    $im_no = $users1[$im_count-1]->im_no;
   // echo $im_no;


foreach($request['app_name'] as $index => $value) {
    $trn_applicant_details = new Trn_applicant_details;
    
    $trn_applicant_details->app_gen = $request['app_gen'][$index];
    $trn_applicant_details->app_rel = $request['app_rel'][$index];
    $trn_applicant_details->app_cat = $request['app_cat'][$index];
    $trn_applicant_details->app_name = $request['app_name'][$index];
    $trn_applicant_details->im_no = $im_no;
   $trn_applicant_details->save();
}


}
else
{
 echo "test1";

    
}

return view("reg_2");

    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function show($user_id)
    {
      
        
      
    }

   
    public function edit($id)
    {
        //
    }

    public function update(Request $request,$im_no)
    {
         //$im_no = $request->input('im_no');
         $mst_im = new Mst_im_reg;
        $mst_im->im_no = Input::get('im_no');
        // echo $im_no;
     
       
       $mst_im_reg = DB::table('mst_im_regs')
                    ->where('im_no' ,$im_no)
                    ->update(['im_status' => 'active']);
                     
           return redirect()->back();
       
        
    }
    
    public function reject(Request $request,$im_no)
    {
         //$im_no = $request->input('im_no');
         $mst_im = new Mst_im_reg;
        $mst_im->im_no = Input::get('im_no');
         //echo $im_no;
     
       
       $mst_im_reg = DB::table('mst_im_regs')
                    ->where('im_no' ,$im_no)
                    ->update(['im_status' => 'reject']);
                    return redirect()->back();
        
    }

   
    public function destroy($id)
    {
        //
    }
    
    
}
