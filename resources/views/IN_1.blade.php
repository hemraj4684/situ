 <!DOCTYPE html>
 <html lang="en">
 <head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <style type="text/css">
	#regiration_form fieldset:not(:first-of-type) {
		display: none;
	}
  </style>
  
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
					
					case "select-one":
							newcell.childNodes[0].selectedIndex = 0;
							break;
                                                        
                                       case "text":
							newcell.childNodes[0].value = "";
							break;
					case "text":
							newcell.childNodes[0].value = "";
							break;
                                        case "text":
							newcell.childNodes[0].value = "";
							break;
                                        case "text":
							newcell.childNodes[0].value = "";
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
       
     
</script>
 
 
  <title>SITU</title>
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
              
			Application for obtaining IN-Principal Approval for claim under In-situ Upgradation of plain Powerlooms for SSI Powerloom Sector</center></label>
			
	 </div>
        </div>
      
          <hr>
          <br>
     <div class="progress">
    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
  </div>

  <form id="regiration_form" action="{{ url('action') }}" method="post" enctype="multipart/form-data">
       {{ csrf_field() }}

                 <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
       <!--  1st fieldset -->
    <div class="row">
        <div class="modal-content">
         <div class="modal-body">
                <fieldset>
                 @foreach($mst_im_reg as $mst_im_regs)
     <input type="hidden" name="im_no" value="{{ $mst_im_regs->im_no}}">
         
   
                <div class="row">
		  
                  <div class="col-md-3">
                  <div class="form-group">
                      <label class="control-label" for="im_no">IM Number</label>
                      <input type="text" class="form-control" id="im_no" placeholder="" name="im_no1" value="{{ $mst_im_regs->im_no}}" readonly>
                    
                 </div>
                </div>
			
                <div class="col-md-3">
                  <div class="form-group">
                      <label class="control-label" for="im_unit_name">Unit Name</label>
                      <input type="text" class="form-control" id="im_unit_name" placeholder="" name="im_unit_name" value="{{ $mst_im_regs->im_unit_name}}" readonly>
                    
                  </div>
                </div>
                    <div class="col-md-3">
                  <div class="form-group">
                    <label class="control-label" for="im_unit_add">Address of Factory</label>
                    <input type="text" class="form-control" id="im_unit_add" placeholder="" name="im_unit_add" value="{{ $mst_im_regs->im_unit_add}}" readonly>
                  </div>
                </div>
				
				
				
                <div class="col-md-3">
                  <div class="form-group">
                    <label class="control-label" for="im_unit_tal">Taluka / Tahashil / Mandal</label>
                    <input class="form-control" id="im_unit_tal" placeholder=""  name="im_unit_tal" type="text" value="{{ $mst_im_regs->im_unit_tal}}" readonly>
                  </div>
                </div>
				</div>
				
				
				 <div class="row">
                <div class="col-md-3">
                  <div class="form-group">
                  <label class="control-label" for="im_unit_dist">District</label>
                   <input class="form-control" id="im_unit_dist" placeholder=""  name="im_unit_dist" type="text" value="{{ $mst_im_regs->im_unit_dist}}" readonly>
                  
                </div>
				</div>
              
            
                <div class="col-md-3">
                  <div class="form-group">
                   <label class="control-label" for="im_unit_state">State</label>
                   <input class="form-control" id="im_unit_state" placeholder=""  name="im_unit_state" type="text" value="{{ $mst_im_regs->im_unit_state}}" readonly>
                  </div>
                </div>
				
                <div class="col-md-3">
                  <div class="form-group">
                    <label class="control-label" for="fadd">Pincode</label>
                    <input class="form-control" id="im_unit_pin" placeholder="" name="im_unit_pin" type="text" value="{{ $mst_im_regs->im_unit_pin}}" readonly>
                    </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label class="control-label" name="data[im_prems]" for="fprem">Whether premises is Owned or Rented</label>
                    <label class="radio-inline">
                      <input type="radio" name="optradio" name="im_prems" value="Owned">Owned</label>
                    <label class="radio-inline">
                      <input type="radio" name="optradio" name="im_prems" value="Rented">Rented</label>
                  </div>
                </div>
				</div>
				
				 <div class="row">
                <div class="col-md-3">
                  <div class="form-group">
                    <label class="control-label" for="att_elc_bill">Please attach copy of electricity bill of the unit</label>
                   
                  </div>
                </div>
				
				<div class="col-md-9">
                  <div class="form-group">
				   <div class="fileupload fileupload-new" data-provides="fileupload">
                      <span class="btn btn-primary btn-file">
                       <!-- <span class="fileupload-new">Select file</span>
                        <span class="fileupload-exists">Change</span> -->
                          <input type="file" name="file[]" multiple><br>
                      </span>
                      <span class="fileupload-preview"></span>
                    </div>
				  
				   </div>
                </div>
				  
				
              </div>
              <div class="row">
                <div class="col-md-3">
                  <div class="form-group">
                    <label for="im_unit_mob" class="control-label">Mobile Number/ Phone Number</label>
                    <input class="form-control" id="im_unit_mob" placeholder="" name="im_unit_mob" type="text" value="{{ $mst_im_regs->im_unit_mob}}" readonly>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                   <label class="control-label" for="im_unit_fax">Fax Number</label>
                    <input class="form-control" id="im_unit_fax" placeholder="" name="im_unit_fax" type="text" value="{{ $mst_im_regs->im_unit_fax}}" readonly>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                     <label for="im_unit_email" class="control-label">Email</label>
                    <input class="form-control" id="im_unit_email" placeholder=""  name="im_unit_email" type="email" value="{{ $mst_im_regs->im_unit_email}}" readonly>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label class="control-label" for="username">PAN Number</label>
                      <input class="form-control" id="username" placeholder=""  name="username" type="text" value="{{ $mst_im_regs->name}}" readonly>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3">
                  <div class="form-group">
                    <label for="co_cont_name" class="control-label">Name of Contact Person</label>
                    <input class="form-control" id="co_cont_name"  type="text" name="co_cont_name" value="{{ $mst_im_regs->co_cont_name}}"  readonly>
                   </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label class="control-label" for="co_cont_no">Contact Number/ Mobile Number</label>
                    <input class="form-control" id="co_cont_no" type="text" name="co_cont_no" value="{{ $mst_im_regs->co_cont_no}}" readonly>
                   </div>
                </div>
                  <!--
                <div class="col-md-3">
                  <div class="form-group">
                    <label for="fname" class="control-label">Powerloom Permit Number</label>
                    <input type="text" class="form-control" id="fcp" placeholder="">
                    <span class="help-block">.</span>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label for="fname" class="control-label">Powerloom Permit date</label>
                    <input type="text" class="form-control" id="fcp" placeholder="DD/MM/YYYY">
                    <span class="help-block">Enter Powerloom Permit date.</span>
                  </div>
                </div> -->
                
              </div>
             
                <!--   <ul class="pager">
                 
                  <li> -->
                <input type="button" name="next" class="next btn btn-info" value="Next" style="float:right;"/>
                    <!--  <a href ="{!!route('im2.index',['im_no'=>$mst_im_regs->im_no,'im_prems'=>$mst_im_regs->im_prems])!!}">Next -> </a>
                     -->
              <!--     </li>
                </ul>-->
            
                @endforeach
               </fieldset>
           
          
        
     
      <!--  2nd fieldset -->
      
     
              <fieldset>
                 @foreach($mst_im_reg as $mst_im_regs)
                 
                    <input type="hidden" name="im_no" value="{{ $mst_im_regs->im_no}}">
                 
                 <div class="col-md-2">
                  <div class="form-group">
                    <label for="im_reg_auth" class="control-label">Registering Authority</label>
                    <input type="text" class="form-control" id="im_reg_auth" placeholder=""  name="im_reg_auth" readonly>
                    
                  </div>
                </div>
                 
                 
                <div class="col-md-2">
                  <div class="form-group">
                     <label for="im_unit_firm" class="control-label">Constitution of Firm</label>
                       <input class="form-control" id="im_unit_firm" placeholder="" name="im_unit_firm" type="text" value="{{ $mst_im_regs->im_unit_firm}}" readonly>
                   </div></div>
                 
                <div class="col-md-2">
                  <div class="form-group">
                        <label for="own_name" class="control-label">Name of Proprietor</label>
					 
                        <input type="text" class="form-control" id="own_name" name="own_name" placeholder=" " value="" readonly>
                
                  </div>
                </div>
                
                <div class="col-md-2">
                  <div class="form-group">
                     <label for="own_gen" class="control-label">Gender</label><br>
                     <input type="text" class="form-control" id="own_gen" name="own_gen" placeholder=" " value="" readonly>
                
                    </div>
                </div>
                  
                   <div class="col-md-2">
                  <div class="form-group">
                  <label for="own_rel" class="control-label">Religion</label>
			<input type="text" class="form-control" id="own_rel" name="own_rel" placeholder=" " readonly>
                
                  </div>
                </div>
				
            
               
                    <div class="col-md-2">
                  <div class="form-group">
                  <label for="own_cat" class="control-label">Category</label>
			<input type="text" class="form-control" id="own_cat" name="own_cat" placeholder=" " readonly>
                 
                  </div>
                </div>
				
                  
                  <!--<div class="col-md-12 col-sm-12">
               
                <table class="table  table-hover" name="tab_logic" id="tab_logic">
                  <thead>
                    <tr>
		      <th>Name of Partners/Managing Director(s)</th>
                      <th>Gender</th>
                      <th>Religion</th>
                      <th>Category</th>
                      <th style="width:10px">
                        <span class="glyphicon glyphicon-plus addBtn" name="add_row" id="add_row"></span>
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr id="addr0">
					<td> <input type="text" class="form-control" size="5" value=""  name="part" id="part"></td>
                      <td>

                        <select  name="gen" id="gen" class="form-control match-content">
                          <option id="o1">Select</option>
                          <option>Male</option>
                          <option>Female</option>
                          <option>Others</option>
                        </select>
                         
                      </td>
                      <td>
                     
                        <select  name="rel" id="rel" class="form-control match-content">
                          <option id="o1">Select</option>
                          <option>Hindu</option>
                         </select>
                         
                      </td>
                      <td>
                     
                        <select  name="cat" id="cat" class="form-control match-content">
                          <option id="o1">Select</option>
                          <option>SC/ST</option>
                          <option>OBC</option>
                          <option>OPEN</option>
                        </select>
                        
                      </td>
                    
                      <td>
                        <span class="glyphicon glyphicon-minus addBtnRemove"  name="delete_row" id="delete_row"></span>
                      </td>
                    </tr>
					  <tr id='addr1'></tr>
					    
                  </tbody>
                </table> 
              </div> -->
                    <div class="row">
            
                 <div class="col-md-3">
                  <div class="form-group">
                       <label for="im_bank_name" class="control-label">Bank Name</label>
			<input type="text" class="form-control" id="im_bank_name" name="data[im_bank_name]" placeholder="Enter Bank Name">
                 
                   </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                 <label for="im_bank_branch" class="control-label">Branch Name</label>
                <input type="text" class="form-control" id="im_bank_branch" name="data[im_bank_branch]" placeholder="Enter Bank Branch Name">
                   </div>
                </div>
             
                <div class="col-md-3">
                  <div class="form-group">
                  <label for="im_bank_add" class="control-label">Address of Bank</label>
                <input type="text" class="form-control" id="im__bank_add" name="data[im_bank_add]" placeholder="Enter Address of Bank ">
               
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                      <label for="im_bank_pin" class="control-label">Pincode</label>
                    <input type="text" class="form-control" id="im_bank_pin" name="data[im_bank_pin]" placeholder=" Enter pincode ">
               </div>
                </div>
                   </div>
              <div class="row">
                <div class="col-md-3">
                  <div class="form-group">
                     <label class="control-label" for="im_bank_phone">Bank Phone Number</label>
                    <input type="text" class="form-control" id="im_bank_mob" name="data[im_bank_mob]" placeholder="Enter Bank Phone Number ">
               </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                 <label for="im_bank_acc" class="control-label">Account Number</label>
                    <input type="text" class="form-control" id="im_bank_acc" name="data[im_bank_acc]" placeholder=" Enter Bank Account Number ">
               </div>
                </div>
              
              
                <div class="col-md-3">
                  <div class="form-group">
                   <label class="control-label" for="im_bank_ifsc">IFSC Number</label>
                  <input type="text" class="form-control" id="im_bank_ifsc" name="data[im_bank_ifsc]" placeholder="Enter Bank IFSC Number ">
               </div>
                </div>
               @endforeach
               </div>
               <!-- <ul class="pager">
                  <li>
                   <!-- <a href="{!! route('form.in1.im_no', [$mst_im_regs->im_no]) !!}">← Prev</a>-->
                   
    
               <!--   </li>
                  <li>
                   <!-- <a href="IN_3">Next  →</a> -->
                   <input type="button" name="next" class="next btn btn-info" value="Next" style="float:right;" />
                      <input type="button" name="previous" class="previous btn btn-default" value="Previous" style="float:right;" />
                 <!-- </li>
                </ul>-->
              
              </fieldset>
           
          
      <!-- 3rd fieldset -->
      
                <fieldset>
              
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
						
                      <th>Attachments</th>
                      <th>Sub/ Model</th>
                      <th>Quantity</th>
                      <th>Rate/ Unit</th>
                      <th>Total Cost</th>
                      <th style="width:10px">
                          <span class="glyphicon glyphicon-plus addBtn" name="add_row" id="add_row" onclick="addRow('tab_logic');"></span>
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr id="addr0">
				
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
                        <input type="text" class="form-control" size="5" value=""  name="sub[]" id="sub">
                      </td>
                      <td>
                        <input type="text" class="form-control" size="5" value=""  name="qunt[]" id="qunt">
                      </td>
                      <td>
                        <input type="text" class="form-control" size="5" value=""  name="rate[]" id="rate">
                      </td>
                      <td>
                        <input type="text" class="form-control" size="5" value="" name="cost[]" id="cost">
                      </td>
                      <td>
                        <span class="glyphicon glyphicon-minus addBtnRemove"  name="delete_row" id="delete_row" onclick="deleteRow(this,'tab_logic')"></span>
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
		  <input type="text" class="form-control" size="5" value=""  name="data[toal]" id="total" readonly>
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
       
         <!-- <ul class="pager">
            <li>-->
            
             <input type="submit" name="submit" class="submit btn btn-success" value="Submit" style="float:right;" />
               <input type="button" name="previous" class="previous btn btn-default" value="Previous" style="float:right;" />
               <!-- <a href="IN_2">←  Prev</a>-->
              <input type="hidden" name="isEmpty" value="">
              <!--<button type="input" name="submit" value="newAccount" class="btn btn-success btn-icon">
                <i class="fa fa-check"></i>Submit</button>-->
              <!--<button type="button" class="btn btn-default btn-icon" data-dismiss="modal">
                <i class="fa fa-times-circle"></i>Cancel</button>-->
          <!--  </li>
          </ul>-->
            
      
       
           </fieldset>
          </div>
        </div>
        </div>
         <!--form close -->
          </form>
    </div>
  </div>
  
          
        
       
    
@endsection

 
</body></html>
<script type="text/javascript">
$(document).ready(function(){
	var current = 1,current_step,next_step,steps;
	steps = $("fieldset").length;
	$(".next").click(function(){
		current_step = $(this).parent();
		next_step = $(this).parent().next();
		next_step.show();
		current_step.hide();
		setProgressBar(++current);
            	});
	$(".previous").click(function(){
		current_step = $(this).parent();
		next_step = $(this).parent().prev();
		next_step.show();
		current_step.hide();
		setProgressBar(--current);
	});
	setProgressBar(current);
	// Change progress bar action
	function setProgressBar(curStep){
		var percent = parseFloat(100 / steps) * curStep;
		percent = percent.toFixed();
		$(".progress-bar")
			.css("width",percent+"%")
			.html(percent+"%");		
	}
});
</script>