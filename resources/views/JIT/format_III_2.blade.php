<html><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
     <link rel="stylesheet" href="{{URL::asset('assets/css/bootstrap.min.css')}}">
     <link rel="stylesheet" href="{{URL::asset('http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css')}}">
        <script type="text/javascript" src="{{URL::asset('assets/js/jquery.min.js')}}"></script>
         <script type="text/javascript" src="{{URL::asset('assets/js/custom_script.js')}}"></script>
        <link rel="stylesheet" href="{{URL::asset('assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{URL::asset('assets/css/custom2.css')}}"> 
        <link rel="stylesheet" href="{{URL::asset('assets/css/bootstrap.css')}}">
    
    
     <!--  
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="custom_script.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="custom2.css" rel="stylesheet" type="text/css">
    <link href="bootstrap\css\bootstrap.css" rel="stylesheet" type="text/css">
    <link href="login\custom.css" rel="stylesheet" type="text/css"> -->
  </head><body>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
             <label><center>Format-III
			<br>
              </center>
			 Certification Installation and Commissioning of Attachments / Kits by Joint Inspection Team under In-situ Upgradation of plain Plowerlooms for SSI Powerloom Sector
   </label>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="modal-content">
          <div class="modal-header">
           
            <label>Certification on Installation aof attachments by JIT  </label>
          </div>
          <form action="" method="post">
            <div class="modal-body">
			
			 <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="control-label" for="fadd">Attachments/ Kits applied for with Details:</label>
                  </div>
                </div>
              </div>
			
            <div class="row">
              <div class="col-lg-12">
               
                <table class="table table-bordered table-hover" name="tab_logic" id="table1">
                  <thead>
                    <tr>
						<th>Sr.No</th>
                      <th>Attachments</th>
					  <th>Quantity</th>
                      <th>Rate</th>
                      <th>Total Amount</th>
					   <th>Eligible Amount</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                    <tr id="addr0">
					<td></td>
                      <td>
                       
                      </td>
                      
					  <td>
                   
                      </td>
                      <td>
                      
                      </td>
                      <td>
                    
                      </td>
                    
					  <td>
                    
                      
                       
                      </td>
                    </tr>
					  <tr id='tab1'></tr>
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
			
			
			
              <div class="row">
                <div class="col-md-8">
                  <div class="form-group">
                    <label class="control-label" for="fadd"> Please attach a copy of Final Invoice/ Bill,stamped by the unit & signed by all JIT members</label>
                  </div>
                </div>
				
				
				  
		  
				<div class="col-md-4">
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
			<hr></hr>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="control-label" for="fadd">Payment Details:</label>
                  </div>
                </div>
              </div>
           
		   <div class="row">
                <div class="col-md-8">
                  <div class="form-group">
                    <label class="control-label" for="fadd">Please attach payment 
					receipts acknowledged by the attachments/kits supplier duly stamped and signed by unit & countersigned by JIT members</label>
                  </div>
                </div>
				<div class="col-md-4">
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
           
		   
		   
            <div class="row">
              <div class="col-lg-12">
               
                <table class="table table-bordered table-hover" name="tab_logic" id="tab_logic">
                  <thead>
                    <tr>
						<th>Sr.No</th>
                      <th>Manufacturer</th>
					  <th>Invoice Value</th>
                      <th>Payment Receipts No</th>
                      <th>Payment Date</th>
					   <th>Amount on Receipts</th>
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
                        <input type="text" class="form-control" size="5" value="" name="cost" id="cost" >
                      </td>
                      <td>
                        <input type="text" class="form-control" size="5" value=""  name="qunt" id="qunt" >
                      </td>
                      <td>
                        <input type="text" class="form-control" size="5" value=""  name="rate" id="rate" >
                      </td>
                    
					  <td>
                        <input type="text" class="form-control" size="5" value=""  name="eligible_cost" id="sub" >
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
					 
					   </tr>
                  </tbody>
                </table>
              </div>
            </div>
			
				
          </form>
          <div class="row">
            <div class="col-md-6 col-md-offset-1">
              <div class="form-group">
                <label for="fadd" class="control-label">Please attach a copy of Quotation/Proforma Invoice</label>
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
		  
		  	<hr></hr>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="control-label" for="fadd">Recommendation/ Remarks of Joint Inspection Team on eligibility of the claim :</label>
				
                  </div>
                </div>
              </div>
			  
			   <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                
					<textarea id="remark" rows="2" cols="150"></textarea>
                  </div>
                </div>
              </div>
			  
			  
			   <div class="row">
                <div class="col-md-3">
                  <div class="form-group">
                 <label class="control-label" for="fadd">Certified by JIT Members:</label>
				 </div>
                </div>
				
				
				  <div class="col-md-3">
                  <div class="form-group">
                    <input type="text" class="form-control" size="5" value=""  name="qunt" id="qunt" readonly >
				 </div>
                </div>
				
				  <div class="col-md-3">
                  <div class="form-group">
                   <input type="text" class="form-control" size="5" value=""  name="qunt" id="qunt" >
				 </div>
                </div>
				
				  <div class="col-md-3">
                  <div class="form-group">
                    <input type="text" class="form-control" size="5" value=""  name="qunt" id="qunt" >
				 </div>
                </div>
				
              </div>
			  
			  
			  
			  
			   </div>
 </div>
        <div class="modal-footer">
          <ul class="pager">
            <li>
              <a href="format_III_1">←  Prev</a>
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

</body></html>