<?php

namespace App\Http\Controllers;
use Input;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Mst_im_reg;
use App\User;
use Auth;

class IN_PrnController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function in1(Request $request,$im_no)
    {

         $mst_im = new Mst_im_reg;
        $mst_im->im_no = Input::get('im_no');
        //echo $im_no;
        
        $mst_im_reg = DB::table('mst_im_regs')
             ->join('users', 'mst_im_regs.user_id', '=', 'users.id')
             ->select('mst_im_regs.*', 'users.*')
             ->where('im_no' ,$im_no)     
            ->get();
         
      return view('IN_1')->with(['mst_im_reg' => $mst_im_reg]);
       }
    public function in()
    {
        return view("IN_1");
    }

    
    public function action()
    {
        return view("action");
    }
    // upload file function
    public function multiple_upload() {
    // getting all of the post data
    $files = Input::file('file');
    // Making counting of uploaded images
    $file_count = count($files);
    // start count how many uploaded
    $uploadcount = 0;
    foreach($files as $file) {
      $rules = array('file' => 'required'); //'required|mimes:png,gif,jpeg,txt,pdf,doc'
      $validator = Validator::make(array('file'=> $file), $rules);
      if($validator->passes()){
        $destinationPath = 'uploads';
        $filename = $file->getClientOriginalName();
        $upload_success = $file->move($destinationPath, $filename);
        $uploadcount ++;
      }
    }
    if($uploadcount == $file_count){
      Session::flash('success', 'Upload successfully'); 
      return Redirect::to('upload');
    } 
    else {
      return Redirect::to('upload')->withInput()->withErrors($validator);
    }
  }
    
 
    public function in2(Request $request,$im_no,$im_prems)
    {
        $mst_im1 = new Mst_im_reg;
        $mst_im1->im_no = Input::get('im_no');
        $mst_im1->im_prems = Input::get('im_prems');
        echo $im_no;  
        echo $im_prems;
        
        $mst_im_reg3 = DB::table('mst_im_regs')
           ->join('users', 'mst_im_regs.user_id', '=', 'users.id')
             ->where('im_no' ,$im_no)
             ->update(['im_prems' => $im_prems]);  
         
        //return view("home");
         
            
        
        $mst_im_reg = DB::table('mst_im_regs')
             ->join('users', 'mst_im_regs.user_id', '=', 'users.id')
             ->select('mst_im_regs.*', 'users.*')
             ->where('im_no' ,$im_no)     
            ->get();
         
      return view('IN_2')->with(['mst_im_reg' => $mst_im_reg]); 
       }

    public function in3()
    {
        return view("IN_2");
    }
    
    
    
    public function index(Request $request,$im_no)
    {
         $mst_im1 = new Mst_im_reg;
        $mst_im1->im_no = Input::get('im_no');
        //echo $im_no;
        
        $mst_im_reg = DB::table('mst_im_regs')
             ->join('users', 'mst_im_regs.user_id', '=', 'users.id')
             ->select('mst_im_regs.*', 'users.*')
             ->where('im_no' ,$im_no)     
            ->get();
         
      return view('format_II')->with(['mst_im_reg' => $mst_im_reg]);
       }

    public function in_app()
    {
        return view("format_II");
    }
     
    public function in_format3()
    {
        return view("format_III_1");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$im_no)
    {
       $this->validate($request, [
    'im_bank_name' => 'required',
    'im_bank_branch' => 'required',
    'im__bank_add' => 'required',
    'im_bank_pin' => 'required',     
    'im_bank_mob' => 'required',
    'im_bank_acc'  => 'required',
    'im_bank_ifsc'  => 'required',  
    
          
]); 
       
       $mst_im_reg = new Mst_im_reg;
     $mst_im_reg->user_id = Input::get('im_bank_name');
     $mst_im_reg->im_unit_name = Input::get('im_bank_branch');
     $mst_im_reg->im_unit_add = Input::get('im__bank_add');
     $mst_im_reg->im_unit_tal = Input::get('im_bank_pin');
     $mst_im_reg->im_unit_dist = Input::get('im_bank_mob');
     $mst_im_reg->im_unit_state = Input::get('im_bank_acc');
     $mst_im_reg->im_unit_pin = Input::get('im_bank_ifsc');
     $mst_im_reg->im_no = Input::get('im_no');
       
       
      
     $mst_im_reg2 = DB::table('mst_im_regs')
             ->join('users', 'mst_im_regs.user_id', '=', 'users.id')
             ->select('mst_im_regs.*', 'users.*')
             ->where('im_no' ,$im_no)     
            ->get();
         
      return view('IN_3')->with(['mst_im_reg2' => $mst_im_reg2]);
       
       
       
       
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
