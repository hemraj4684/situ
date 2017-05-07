<html>
    

    <head>
  </head>
  @extends('layouts.app')
  <body>
   
   @section('content')
       
  </head><body>
    <div class="section">
       <div class="container">
        <div class="row">
          <div class="col-md-12">
		  <div class="head">
            <label><center>Format-II
			<br>
              </center>
			  Application for submitting the claim for subsidy after installation of Attachments/Kits under In-Situ Upgradation of Plain Powerlooms for SSI Powerloom Sector
   </label>
   </div>
   </div>
          </div>
        </div>
      </div>
   
    <div class="container">
      <div class="row">
        <div class="modal-content">
          <div class="modal-header">
         
            <label>Application Form for submitting the claim for subsidy after installation of attachments  </label>
          </div>
          <form action="" method="post">
              {{ csrf_field() }}

                 <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
            <div class="modal-body">
                 @foreach($mst_im_reg as $mst_im_regs)

               
                  <input type="hidden" name="im_no" value="{{ $mst_im_regs->im_no}}">
                
              <div class="row">
                <div class="col-md-3">
                  <div class="form-group">
                    <label for="fname" class="control-label">IN-Principal Registration Number 
					 </label>
                    <input type="text" class="form-control" id="fcp" placeholder="" readonly>
                   
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                   
	 <label for="fname" class="control-label">
					Registration date </label>
					
                    <input class="form-control" id="fname" placeholder="" type="text" readonly>
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
              </div>
              <div class="row">
                <div class="col-md-3">
                  <div class="form-group">
                    <label class="control-label" for="im_unit_tal">Taluka / Tahashil / Mandal</label>
                    <input class="form-control" id="im_unit_tal" placeholder=""  name="im_unit_tal" type="text" value="{{ $mst_im_regs->im_unit_tal}}" readonly>
                  </div>
                </div>
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
              </div>
              <div class="row">
                <div class="col-md-3">
                  <div class="form-group">
                 <label class="control-label" for="fprem">Premises is Owned or Rented</label>
				   <input class="form-control" id="fadd3" placeholder="" type="text" readonly>
                  </div>
                </div>
               
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
                </div>                </div>
              
              <div class="row">
                <div class="col-md-3">
                  <div class="form-group">
                    <label class="control-label" for="username">PAN Number</label>
                      <input class="form-control" id="username" placeholder=""  name="username" type="text" value="{{ $mst_im_regs->name}}" readonly>
                  </div>
                </div>
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
                <div class="col-md-3">
                  <div class="form-group">
                      <label class="control-label" for="im_no">IM Number</label>
                      <input type="text" class="form-control" id="im_no" placeholder="" name="im_no1" value="{{ $mst_im_regs->im_no}}" readonly>
                    
                 </div>
                </div>
              </div>
              <div class="row">
                  <!--
                <div class="col-md-3">
                  <div class="form-group">
                   <label for="fname" class="control-label">Powerloom Permit Number</label>
                    <input type="text" class="form-control" id="fcp" placeholder="" readonly>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label for="fname" class="control-label">Powerloom Permit date</label>
                    <input type="text" class="form-control" id="fcp" readonly>
                  </div>
                </div> -->
                <div class="col-md-3">
                  <div class="form-group">
                    <label for="im_reg_auth" class="control-label">Registering Authority</label>
                    <input type="text" class="form-control" id="im_reg_auth" placeholder=""  name="im_reg_auth" readonly>
                    
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                     <label for="im_unit_firm" class="control-label">Constitution of Firm</label>
                       <input class="form-control" id="im_unit_firm" placeholder="" name="im_unit_firm" type="text" value="{{ $mst_im_regs->im_unit_firm}}" readonly>
                   </div></div>
              </div>
			  
			  <div class="row">
                <div class="col-md-3">
                  <div class="form-group">
                        <label for="own_name" class="control-label">Name of Proprietor</label>
					 
                        <input type="text" class="form-control" id="own_name" name="own_name" placeholder=" " value="" readonly>
                
                  </div>
                </div>
                
                <div class="col-md-3">
                  <div class="form-group">
                     <label for="own_gen" class="control-label">Gender</label><br>
                     <input type="text" class="form-control" id="own_gen" name="own_gen" placeholder=" " value="" readonly>
                
                    </div>
                </div>
                  
                   <div class="col-md-3">
                  <div class="form-group">
                  <label for="own_rel" class="control-label">Religion</label>
			<input type="text" class="form-control" id="own_rel" name="own_rel" placeholder=" " readonly>
                
                  </div>
                </div>
                     
                               <div class="col-md-3">
                  <div class="form-group">
                  <label for="own_cat" class="control-label">Category</label>
			<input type="text" class="form-control" id="own_cat" name="own_cat" placeholder=" " readonly>
                 
                  </div>
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
			<input type="text" class="form-control" id="im_bank_name" name="im_bank_name" readonly>
                 
                   </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                 <label for="im_bank_branch" class="control-label">Branch Name</label>
                <input type="text" class="form-control" id="im_bank_branch" name="im_bank_branch" readonly >
                   </div>
                </div>
             
                <div class="col-md-3">
                  <div class="form-group">
                  <label for="im_bank_add" class="control-label">Address of Bank</label>
                <input type="text" class="form-control" id="im__bank_add" name="im_bank_add" readonly>
               
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                      <label for="im_bank_pin" class="control-label">Pincode</label>
                    <input type="text" class="form-control" id="im_bank_pin" name="im_bank_pin" readonly >
               </div>
                </div>
                   </div>
              <div class="row">
                <div class="col-md-3">
                  <div class="form-group">
                     <label class="control-label" for="im_bank_phone">Bank Phone Number</label>
                    <input type="text" class="form-control" id="im_bank_pin" name="im_bank_pin" readonly>
               </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                 <label for="im_bank_acc" class="control-label">Account Number</label>
                    <input type="text" class="form-control" id="im_bank_acc" name="im_bank_acc" readonly >
               </div>
                </div>
              
              
                <div class="col-md-3">
                  <div class="form-group">
                   <label class="control-label" for="im_bank_ifsc">IFSC Number</label>
                  <input type="text" class="form-control" id="im_bank_ifsc" name="im_bank_ifsc" readonly>
               </div>
                </div>
			  
			  
			  
			  <hr></hr>
			  <div class="row">
                <div class="col-md-10 ">
                  <div class="form-group">
                    <label class="control-label" for="fadd">Attachments/ Kits applied for with Details</label>
                  </div>
                </div>
              </div>
                          
                @endforeach           
            </div>
            <div class="row">
              <div class="col-md-12">
               
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
					  <div class="select-style">
                        <select  name="attach" id="attach" class="form-control match-content">
                          <option id="o1" selected="">Select</option>
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
					  <tr id='addr1'></tr>
					  
					    <tr>
					  <td></td>
					 
					  <th class="text-right">Total</th>
					  <td></td>
					  <td></td>
					  <td></td>
					  <td></td>
					   </tr>
                  </tbody>
                </table>
              </div>
            </div>
			
		  <hr></hr>
          <div class="row">
            <div class="col-md-6 col-md-offset-1">
              <div class="form-group">
                <label for="fadd" class="control-label">Please attach a copy of Final/Bill and the payment receipts suly stamped and signed by unit</label>
              </div>
            </div>
            <div class="col-md-5">
              <div class="form-group">
                <div class="fileupload fileupload-new" data-provides="fileupload">
                  <span class="btn btn-primary btn-file">
                    <!-- <span class="fileupload-exists">Change</span> -->
                    <input type="file">
                  </span>
                  <span class="fileupload-preview"></span>
                  <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none">×</a>
                </div>
              </div>
            </div>
          </div>
		  </form>
        </div>
		 
        <div class="modal-footer">
          <ul class="pager">
            <li>

              <input type="hidden" name="isEmpty" value="">
              <button type="input" name="submit" value="newAccount" class="btn btn-success btn-icon">
                <i class="fa fa-check"></i>Submit</button>
              <button type="button" class="btn btn-default btn-icon" data-dismiss="modal">
                <i class="fa fa-times-circle"></i>Cancel</button>
            </li>
          </ul>
        </div>
			  
			  
			  
			  
			  
			  
			  
			  
			
            </div>
          
        </div>
      
  @endsection

</body></html>