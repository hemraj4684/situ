
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">User Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                    <br>
                    <br>
                    <a href="home/reg_1"> Generation Of IM Number</a>
                    <br><br>
                   <hr>
                    
                    <table class="table table-bordered">
              
        <tr>
            <th>IM Number</th>
            <th>Status</th>
            <th>Action</th>

        </tr>
         @foreach($mst_im_reg as $mst_im_regs)
        <tr>
          
        <td>No.4(80)/IMBHI/{{ date('Y', strtotime($mst_im_regs->created_at)) }}/ROM/{{$mst_im_regs->im_no}}</td>
         <input type="hidden" name="im_no" value="{{ $mst_im_regs->im_no}}">
           <td>  
         {{$mst_im_regs->im_status}}
        
     </td>
     <td> 
         @if($mst_im_regs->im_status =='active')    
         
      <a class="btn btn-info" href="{!! route('form.in1.im_no', [$mst_im_regs->im_no]) !!}">Generate IN Principal Number</a>   
                   
     
     @else
     
         You are not allow to generate IN Principal Number 
     </td>
     @endif
    
      <td> 
         @if($mst_im_regs->im_status =='active')    
         
      <a class="btn btn-info" href="{!! route('form.sub.im_no', [$mst_im_regs->im_no]) !!}">Application for subsidy after installation</a>   
                   
     
     @else
     
         You are not allow to apply 
     </td>
    
     
     </tr>
     @endif
     
    @endforeach

    </table>

                    
                    
                    
                    
                    
                    
                    
          
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
