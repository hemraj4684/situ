<html><head>
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
		   Application for obtaining IM-Principal Approval for claim under In-situ Upgradation of plain Powerlooms for SSI Powerloom Sector
        
		  </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
            
        <div class="modal-content">
          <div class="modal-header">

           <label>Application  Form for obtaining IN-Principal Approval</label>
          </div>
          <form action="" method="post">
            <div class="modal-body">
              <div class="row">
                   {{ csrf_field() }}

                 <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
         
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
			<input type="text" class="form-control" id="im_bank_name" name="im_bank_name" placeholder="Enter Bank Name">
                 
                   </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                 <label for="im_bank_branch" class="control-label">Branch Name</label>
                <input type="text" class="form-control" id="im_bank_branch" name="im_bank_branch" placeholder="Enter Bank Branch Name">
                   </div>
                </div>
             
                <div class="col-md-3">
                  <div class="form-group">
                  <label for="im_bank_add" class="control-label">Address of Bank</label>
                <input type="text" class="form-control" id="im__bank_add" name="im_bank_add" placeholder="Enter Address of Bank ">
               
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                      <label for="im_bank_pin" class="control-label">Pincode</label>
                    <input type="text" class="form-control" id="im_bank_pin" name="im_bank_pin" placeholder=" Enter pincode ">
               </div>
                </div>
                   </div>
              <div class="row">
                <div class="col-md-3">
                  <div class="form-group">
                     <label class="control-label" for="im_bank_phone">Bank Phone Number</label>
                    <input type="text" class="form-control" id="im_bank_mob" name="im_bank_mob" placeholder="Enter Bank Phone Number ">
               </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                 <label for="im_bank_acc" class="control-label">Account Number</label>
                    <input type="text" class="form-control" id="im_bank_acc" name="im_bank_acc" placeholder=" Enter Bank Account Number ">
               </div>
                </div>
              
              
                <div class="col-md-3">
                  <div class="form-group">
                   <label class="control-label" for="im_bank_ifsc">IFSC Number</label>
                  <input type="text" class="form-control" id="im_bank_ifsc" name="im_bank_ifsc" placeholder="Enter Bank IFSC Number ">
               </div>
                </div>
               @endforeach
               </div>
                   
              </div>
              <div class="modal-footer">
                <ul class="pager">
                  <li>
                    <a href="{!! route('form.in1.im_no', [$mst_im_regs->im_no]) !!}">← Prev</a>
                   
                  </li>
                  <li>
                    <a href="IN_3">Next  →</a>
                  </li>
                </ul>
              </div>
            </div>
          </form>
        </div>
      </div>
    
  
@endsection
</body></html>