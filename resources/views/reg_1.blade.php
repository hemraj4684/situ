
<script type="text/javascript">
    
   function addRow(tableID) {

			var table = document.getElementById(tableID);

			var rowCount = table.rows.length;
			var row = table.insertRow(rowCount);

			var colCount = table.rows[1].cells.length;

			for(var i=0; i<colCount; i++) {

				var newcell	= row.insertCell(i);

				newcell.innerHTML = table.rows[1].cells[i].innerHTML;
				//alert(newcell.childNodes);
				switch(newcell.childNodes[0].type) {
					case "text":
							newcell.childNodes[0].value = "";
							break;
					case "select-one":
							newcell.childNodes[0].selectedIndex = 0;
							break;
                                                        
                                        case "select-one":
							newcell.childNodes[0].selectedIndex = 0;
							break;
					case "select-one":
							newcell.childNodes[0].selectedIndex = 0;
							break;
				}
			}
		}

		function deleteRow(x,tableID) {
			try {
			 var row = x.parentNode.parentNode;
    document.getElementById(tableID).deleteRow(row.rowIndex);
    console.log(row);
			}catch(e) {
				alert(e);
			}
		}
       
       function PropDiv() {
        var prop = document.getElementById("prop");
        var add_row = document.getElementById("add_row");
        add_row.style.display = prop.checked ? "none" : "block";
    }
                
  function ShowHideDiv() {
        var prop = document.getElementById("prop");
        var delete_row = document.getElementById("delete_row");
        delete_row.style.display = prop.checked ? "none" : "block";
    } 
</script>
@extends('layouts.app')
  <body>
   @section('content')
  
  <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
           <center> <label>Form-IA
			<br>
                        INFORMATION MEMORANDUM
                        <br> (SEE CLAUSE 4)<br>
              
			Please read instructions carefully before filling this form</label></center>
			
		 </div>
        </div>
      </div>
    </div>
  
  
    <div class="container">
      <div class="row">
        <div class="modal-content">
          <div class="modal-header">
       
         <label>Application Form for obtaining IM Number</label>
          </div>
          <form  method="POST" action="{{ url('/home/registered') }}">
            <div class="modal-body">
              <div class="row">
		{{ csrf_field() }}
                 <input type="hidden" name="_token" value="{{ csrf_token() }}">
                 
                 
                 
                 
                 
                 
			   <div class="col-md-3">
                 <div class="form-group{{ $errors->has('im_unit_name') ? ' has-error' : '' }}">
                    <label for="im_unit_name" class="control-label">Name of the applicant Textile Unit Block Letters</label>
                    <input type="text" class="form-control" id="im_unit_name" name="im_unit_name" value="{{ old('im_unit_name') }}">
                    @if ($errors->has('im_unit_name'))
                                    <span class="help-block">
                                      <!--  <strong>{{ $errors->first('co_name') }}</strong>-->
                                        <strong>Unit Name is Required</strong>
                                    </span>
                                @endif
                  </div>
                </div>
                              
                 <input type="hidden" name="user_id" value="{{ $user->id }}">
                
                <div class="col-md-3">
                    <div class="form-group{{ $errors->has('im_unit_add') ? ' has-error' : '' }}">
                    <label class="control-label" for="im_unit_add">Address of Factory</label>
                    <input type="text" class="form-control" id="im_unit_add" placeholder="" name="im_unit_add" value="{{ old('im_unit_add') }}">
                   @if ($errors->has('im_unit_name'))
                                    <span class="help-block">
                                      <!--  <strong>{{ $errors->first('co_name') }}</strong>-->
                                        <strong>Unit Name is Required</strong>
                                    </span>
                                @endif
                  </div>
                </div>
				
				
				
                <div class="col-md-3">
                 <div class="form-group{{ $errors->has('im_unit_tal') ? ' has-error' : '' }}">
                    <label class="control-label" for="im_unit_tal">Taluka / Tahashil / Mandal</label>
                    <input class="form-control" id="im_unit_tal" placeholder=""  name="im_unit_tal" type="text" value="{{ old('im_unit_tal') }}">
                    @if ($errors->has('im_unit_tal'))
                                    <span class="help-block">
                                      <!--  <strong>{{ $errors->first('co_name') }}</strong>-->
                                        <strong>Unit Taluka is Required</strong>
                                    </span>
                                @endif
                  </div>
                </div>
                  
                   <div class="col-md-3">
                   <div class="form-group{{ $errors->has('im_unit_dist') ? ' has-error' : '' }}">
                    <label class="control-label" for="im_unit_dist">District</label>
					<div class="select-style">
                    <select class="form-control match-content" name="im_unit_dist" value="{{ old('im_unit_dist') }}">
                      <option selected="">Select</option>
                      <option>Mumbai</option>
                      <option>Pune</option>
                      <option>Thane</option>
                    </select>
                      @if ($errors->has('im_unit_dist'))
                                    <span class="help-block">
                                      <!--  <strong>{{ $errors->first('co_name') }}</strong>-->
                                        <strong>Unit District is Required</strong>
                                    </span>
                                @endif                       
                  </div>
                </div>
				</div>
              
                  
				</div>
				
				
				 <div class="row">
               
            
                <div class="col-md-3">
                 <div class="form-group{{ $errors->has('im_unit_state') ? ' has-error' : '' }}">
                    <label class="control-label" for="im_unit_state">State</label>
					<div class="select-style">
                    <select class="form-control match-content" name="im_unit_state">
                      <option selected="">Select</option>
                      <option>Maharashtra</option>
                    </select>
                          @if ($errors->has('im_unit_state'))
                                    <span class="help-block">
                                      <!--  <strong>{{ $errors->first('co_name') }}</strong>-->
                                        <strong>Unit State is Required</strong>
                                    </span>
                                @endif                             
                                            
                  </div>
                </div>
				</div>
                <div class="col-md-3">
               <div class="form-group{{ $errors->has('im_unit_pin') ? ' has-error' : '' }}">
                    <label class="control-label" for="im_unit_pin">Pincode</label>
                    <input class="form-control" id="im_unit_pin" placeholder="" name="im_unit_pin" type="text" value="{{ old('im_unit_pin') }}">
                    @if ($errors->has('im_unit_pin'))
                                    <span class="help-block">
                                      <!--  <strong>{{ $errors->first('co_name') }}</strong>-->
                                        <strong>Unit Pincode is Required</strong>
                                    </span>
                                @endif   
                  </div>
                </div>
               <div class="col-md-3">
                  <div class="form-group{{ $errors->has('im_unit_fax') ? ' has-error' : '' }}">
                    <label class="control-label" for="im_unit_fax">Fax Number</label>
                    <input class="form-control" id="im_unit_fax" placeholder="" name="im_unit_fax" type="text" value="{{ old('im_unit_fax') }}">
                  @if ($errors->has('im_unit_fax'))
                                    <span class="help-block">
                                      <!--  <strong>{{ $errors->first('co_name') }}</strong>-->
                                        <strong>Unit Pincode is Required</strong>
                                    </span>
                                @endif   
                  </div>
                </div>
                                     
                   <div class="col-md-3">
                  <div class="form-group{{ $errors->has('im_unit_mob') ? ' has-error' : '' }}">
                    <label for="im_unit_mob" class="control-label">Mobile Number/ Phone Number</label>
                    <input class="form-control" id="im_unit_mob" placeholder="" name="im_unit_mob" type="text" value="{{ old('im_unit_mob') }}">
                 @if ($errors->has('im_unit_mob'))
                                    <span class="help-block">
                                      <!--  <strong>{{ $errors->first('co_name') }}</strong>-->
                                        <strong>Unit Phone Number is Required</strong>
                                    </span>
                                @endif   
                  </div>
                </div>                  
				</div>
				
				
              <div class="row">
                
                
                <div class="col-md-3">
                   <div class="form-group{{ $errors->has('im_unit_email') ? ' has-error' : '' }}">
                    <label for="im_unit_email" class="control-label">Email</label>
                    <input class="form-control" id="im_unit_email" placeholder=""  name="im_unit_email" type="email" value="{{ old('im_unit_email') }}">
                 @if ($errors->has('im_unit_email'))
                                    <span class="help-block">
                                      <!--  <strong>{{ $errors->first('co_name') }}</strong>-->
                                        <strong>Unit Email ID is Required</strong>
                                    </span>
                                @endif 
                   </div>
                </div>
                <div class="col-md-3">
                   <div class="form-group{{ $errors->has('im_unit_web') ? ' has-error' : '' }}">
                    <label class="control-label" for="im_unit_web">Website</label>
                    <input class="form-control" id="im_unit_web" placeholder="" name="im_unit_web" type="text" value="{{ old('im_unit_web') }}">
                  @if ($errors->has('im_unit_web'))
                                    <span class="help-block">
                                      <!--  <strong>{{ $errors->first('co_name') }}</strong>-->
                                        <strong>If Any.</strong>
                                    </span>
                                @endif 
                  </div>
                </div>
                  
                  
                  <div class="col-md-3">
                  <div class="form-group{{ $errors->has('im_unit_ssi') ? ' has-error' : '' }}">
                    <label class="control-label" for="im_unit_ssi">SSI / Non-SSI</label>
					<div class="select-style">
                    <select class="form-control match-content" name="im_unit_ssi">
                        <option selected="">Select</option>
                      <option>SSI</option>
                      <option>Non SSI</option>
                    </select>
                       @if ($errors->has('im_unit_ssi'))
                                    <span class="help-block">
                                      <!--  <strong>{{ $errors->first('co_name') }}</strong>-->
                                        <strong>Unit SSI is Required</strong>
                                    </span>
                                @endif 
                  </div>
                </div>
				</div>
                  
                  <div class="col-md-3">
                   <div class="form-group{{ $errors->has('im_unit_for') ? ' has-error' : '' }}">
                    <label class="control-label" for="im_unit_for">Whether the information memorandum for</label>
					<div class="select-style">
                    <select class="form-control match-content" name="im_unit_for">
                        <option selected="">Select</option>
                      <option>New Unit</option>
                      <option>Existing Unit</option>
                    </select>
                       @if ($errors->has('im_unit_for'))
                                    <span class="help-block">
                                      <!--  <strong>{{ $errors->first('co_name') }}</strong>-->
                                        <strong>IM is for  is Required</strong>
                                    </span>
                                @endif                       
                  </div>
                </div>
				</div>
   
              </div>
                <div class="row">
                <div class="col-md-3">
                  <div class="form-group{{ $errors->has('im_unit_firm') ? ' has-error' : '' }}">
                    <label for="im_unit_firm" class="control-label">Constitution of Firm</label></div></div>
                     <div class="col-md-9">
                  <div class="form-group">
		 <label class="radio-inline">
                    <input type="radio"  value="Proprietorship" name="im_unit_firm" id="prop" onclick="PropDiv(); ShowHideDiv();">Proprietorship</label>
                    <label class="radio-inline" >
                      <input type="radio"  value="Partnership" name="im_unit_firm" id="chkYes" onclick="PropDiv(); ShowHideDiv();" >Partnership</label>
                    <label class="radio-inline" >
                        <input type="radio"  value="Pvt.Ltd" name="im_unit_firm" id="chkYes" onclick="PropDiv(); ShowHideDiv(); ">Pvt.Ltd</label>
                    <label class="radio-inline" >
                      <input type="radio" name="im_unit_firm"  value="Co-Operative" id="chkYes" onclick="PropDiv(); ShowHideDiv();"> Co-Operative</label>
                    <label class="radio-inline" >
                      <input type="radio" name="im_unit_firm" id="chkYes" value="Others" onclick="PropDiv(); ShowHideDiv();" >Others</label>
                    @if ($errors->has('im_unit_firm'))
                                    <span class="help-block">
                                      <!--  <strong>{{ $errors->first('co_name') }}</strong>-->
                                        <strong>Constitution of  firm  is Required</strong>
                                    </span>
                                @endif          
                  </div>
                </div>
                </div>
                
                <!--
                <div class="row" id="dvprop" style="display: none">
               
                    
                <div class="col-md-3" >
                  <div class="form-group">
                     <label for="app_name" class="control-label">Name of Proprietor</label>
					 
                    <input type="text" class="form-control" id="app_name" name="app_name[]" placeholder=" ">
                
                  </div>
                </div>
                
                <div class="col-md-3">
                  <div class="form-group">
                      <label for="app_gen[]" class="control-label">Gender</label><br>
                   <label class="radio-inline">
                      <input type="radio" name="app_gen[]" value="Male">Male</label>
                    <label class="radio-inline">
                      <input type="radio" name="app_gen[]" value="Female">Female</label>
                    <label class="radio-inline">
                      <input type="radio" name="app_gen[]" value="Others">Others</label>
                  </div>
                </div>
                  
                   <div class="col-md-3">
                  <div class="form-group">
                  <label for="app_rel" class="control-label">Religion</label>
		<div class="select-style">
                    <select class="form-control match-content" id="app_rel" name="app_rel[]">
                      <option selected="">Select</option>
                      <option>Hindu</option>
                    </select>
                    
                  </div>
                </div>
				</div>
                    <div class="col-md-3">
                  <div class="form-group">
                    <label for="app_cat" class="control-label">Category</label>
					<div class="select-style">
                    <select class="form-control match-content"  name="app_cat[]">
                      <option selected="">Select</option>
                      <option>SC/ ST</option>
                      <option>OBC</option>
                      <option>OPEN</option>
                    </select>
                   
                  </div>
                </div>
				</div>
              </div>
                -->
			  
			  <div class="row">
             
                  
                <div class="col-md-12 col-sm-12" id="dvcost">
               
                <table class="table table-bordered table-hover" name="tab_logic" id="tab_logic">
                  <thead>
                    <tr>
                    
		      <th>Name of Proprietor/Partners/Managing Director(s)</th>
                      <th>Gender</th>
                      <th>Religion</th>
                      <th>Category</th>
                      <th style="width:10px">
                         <span class="glyphicon glyphicon-plus addBtn" name="add_row" id="add_row" onclick="addRow('tab_logic');"></span>
                      </th>
                      
                    </tr>
                  </thead>
                  <tbody>
                    <tr id="addr0">
				
                     
		<td> <input type="text" class="form-control" size="5" value=""  name="app_name[]" id="app_name"></td>
                      <td>

                        <select  name="app_gen[]" id="app_gen" class="form-control match-content">
                          
                          
                    <option value="">Select</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Others">Others</option>
        
                          
                        </select>
                         
                      </td>
                      <td>
                     
                        <select  name="app_rel[]" id="app_rel" class="form-control match-content">
                          <option value="">Select</option>
                         <option value="Hindu">Hindu</option>
                         </select>
                         
                      </td>
                      <td>
                     
                        <select  name="app_cat[]" id="app_cat" class="form-control match-content">
                          <option value="">Select</option>
                          <option value="SC/ST">SC/ST</option>
                          <option value="OBC">OBC</option>
                          <option value="OPEN">OPEN</option>
                        </select>
                        
                      </td>
                    
                      <td>
                         
                        <span class="glyphicon glyphicon-minus addBtnRemove"  name="delete_row" id="delete_row" onclick="deleteRow(this,'tab_logic')"></span>
                      </td>
                    </tr>
					  <tr name='1' id='addr1'></tr>
					    
                  </tbody>
                </table>
              </div>
              <div>  
               
                    
                    
              <div class="modal-footer">
                <ul class="pager">
                 
                    <div class="form-group">
                           <!-- <div class="col-md-6 col-md-offset-4">
                                 <a href="reg_2">Next  →</a> -->
                                
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> Next  →
                                </button>
                            </div>
                        </div>
                    
                    
                  <!--<li>
                    <a href="reg_2">Next  →</a> -->
                  </li>
                </ul>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  
@endsection
</body></html>

