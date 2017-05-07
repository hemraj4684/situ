<html><head>
       <script>
    var selDiv = "";
        
    document.addEventListener("DOMContentLoaded", init, false);
    
    function init() {
        document.querySelector('#files').addEventListener('change', handleFileSelect, false);
        selDiv = document.querySelector("#selectedFiles");
    }
        
    function handleFileSelect(e) {
        
        if(!e.target.files) return;
        
        selDiv.innerHTML = "";
        
        var files = e.target.files;
        for(var i=0; i<files.length; i++) {
            var f = files[i];
            
            selDiv.innerHTML += f.name + "<br/>";

        }
        
    }
    </script>
      
  </head>
  @extends('layouts.app')
  <body>
      @section('content')
  
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
          <label><center>Format-I
			<br>
              </center>
		  Application for obtaining IM-Principal Approval for claim under In-situ
                Upgradation of plain Powerlooms for SSI Powerloom Sector</label>
            
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="modal-content">
          <div class="modal-header">
           
         <label> Application Form for obtaining IM-Principal Approval </label>
          </div>
          <form id="myForm" method="post" enctype="multipart/form-data">
               {{ csrf_field() }}

                 <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
            <div class="modal-body">
                 @foreach($mst_im_reg2 as $mst_im_regs)
                 
                    <input type="hidden" name="im_no" value="{{ $mst_im_regs->im_no}}">
                    <h3>{{ $mst_im_regs->im_no}}</h3>
              <div class="row">
                 
                 
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="control-label" for="fadd">Attachments/ Kits applied for with Details</label>
                  </div>
                </div>
              </div>
            
            <div class="row">
              <div class="col-md-12 col-sm-12">
               
                <table class="table table-bordered table-hover" name="tab_logic" id="tab_logic">
                  <thead>
                    <tr>
						<th>Sr.No</th>
                      <th>Attachments</th>
                      <th>Sub/ Model</th>
                      <th>Quantity</th>
                      <th>Rate/ Unit</th>
                      <th>Total Cost</th>
                      <th style="width:10px">
                        <span class="glyphicon glyphicon-plus addBtn" name="add_row" id="add_row"></span>
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr id="addr0">
					<td>1</td>
                      <td>
                          <div class="select">
                        <select  name="attach" id="attach" class="form-control">
                          <option id="o1">Select</option>
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                        </select>
                          </div>
                      </td>
                      <td>
                        <input type="text" class="form-control" size="5" value=""  name="sub" id="sub">
                      </td>
                      <td>
                        <input type="text" class="form-control" size="5" value=""  name="qunt" id="qunt">
                      </td>
                      <td>
                        <input type="text" class="form-control" size="5" value=""  name="rate" id="rate">
                      </td>
                      <td>
                        <input type="text" class="form-control" size="5" value="" name="cost" id="cost">
                      </td>
                      <td>
                        <span class="glyphicon glyphicon-minus addBtnRemove"  name="delete_row" id="delete_row"></span>
                      </td>
                    </tr>
					  
                  </tbody>
                </table>
              </div>
            </div>
		
             <div class="row">
              <div class="col-md-1 col-md-offset-8 col-sm-1 col-sm-offset-8">
               <label> Total </label>
			   
		 </div>
		<div class="col-md-2 col-sm-2">
		  <input type="text" class="form-control" size="5" value=""  name="toal" id="total" readonly>
		 </div>
		  </div>
			<br> 
              
          <div class="row">
            <div class="col-md-6 col-md-offset-1">
              <div class="form-group">
                <label>Please attach a copy of Quotation/Proforma Invoice</label>
              </div>
            </div>
            <div class="col-md-5">
              <div class="form-group">
               <input type="file" name="file[]" multiple><br>
                      
        <div id="selectedFiles"></div>
              </div>
            </div>
         
         
              </div>
        <div class="modal-footer">
          <ul class="pager">
            <li>
                <a href="IN_2">←  Prev</a>
              <input type="hidden" name="isEmpty" value="">
              <button type="input" name="submit" value="newAccount" class="btn btn-success btn-icon">
                <i class="fa fa-check"></i>Submit</button>
              <button type="button" class="btn btn-default btn-icon" data-dismiss="modal">
                <i class="fa fa-times-circle"></i>Cancel</button>
            </li>
          </ul>
            
        </div>
           @endforeach
          </div>
              </form>
        </div>

      </div>
        
    </div>
  
@endsection
</body>

</html>