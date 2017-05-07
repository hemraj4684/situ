  
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Pending IM Numbers</div>
                
                <div class="panel-body">
                    <form method="post">  
                    
                   <table class="table table-bordered">
              
        <tr>
            <th>Company Name</th>
            <th>Unit Name</th>
            <th>Unit Address</th>
            <th>IM Number</th>
            <th>Status</th>
     

        </tr>
        @foreach($mst_im_reg as $mst_im_regs)
         
        
        <tr>
          
        <td>{{$mst_im_regs->co_name}}</td>
        <td>{{$mst_im_regs->im_unit_name}}</td>
        
        
        <td>{{$mst_im_regs->im_unit_add}}, {{$mst_im_regs->im_unit_tal}}, 
            {{$mst_im_regs->im_unit_dist}}, {{$mst_im_regs->im_unit_state}}, 
            {{$mst_im_regs->im_unit_pin}}.
        </td>
        
        <td>No.4(80)/IMBHI/{{ date('Y', strtotime($mst_im_regs->created_at)) }}/ROM/{{$mst_im_regs->im_no}}</td>
         <input type="hidden" name="im_no" value="{{ $mst_im_regs->im_no}}">
         @if($mst_im_regs->im_status =='active')    
           <td>  
         {{$mst_im_regs->im_status}}
       
     </td>
     
     @elseif ($mst_im_regs->im_status =='pending')
     <td>
     <a class="btn btn-info" href="{!! route('admin.dashboard.update.im_no', [$mst_im_regs->im_no]) !!}"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></a>
     <a class="btn btn-primary" href="{!! route('admin.dashboard.reject.im_no', [$mst_im_regs->im_no]) !!}"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
     </td>
     @else
     <td>{{$mst_im_regs->im_status}}
       </td>
    
     @endif
     </tr>

    @endforeach

    </table>
</form>
    </div>

            </div>
        </div>
    </div>
</div>
@endsection






