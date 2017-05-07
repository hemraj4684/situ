<html><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
     <link rel="stylesheet" href="{{URL::asset('assets/css/bootstrap.min.css')}}">
     <link rel="stylesheet" href="{{URL::asset('http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css')}}">
        <script type="text/javascript" src="{{URL::asset('assets/js/jquery.min.js')}}"></script>
         <script type="text/javascript" src="{{URL::asset('assets/js/custom_script_3.js')}}"></script>
        <link rel="stylesheet" href="{{URL::asset('assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{URL::asset('assets/css/custom2.css')}}"> 
        <link rel="stylesheet" href="{{URL::asset('assets/css/bootstrap.css')}}">
       <!--    <link rel="stylesheet" href="{{URL::asset('assets/css/custom.css')}}">
    
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.css" rel="stylesheet" type="text/css" class="cust">
    <link href="custom2.css" rel="stylesheet" type="text/css">
    <link href="bootstrap\css\bootstrap.css" rel="stylesheet" type="text/css">
    <link href="login\custom.css" rel="stylesheet" type="text/css"> -->
  </head> @extends('layouts.app')
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

           <label>Application  Form for obtaining IM Number</label>
          </div>
          <form action="" method="post">
            <div class="modal-body">
            {{ csrf_field() }}
                 <input type="hidden" name="_token" value="{{ csrf_token() }}">
               <div class="col-md-12 col-sm-12">
               
                <table border="2" class="table boredered table-hover" name="tab_logic" id="tab_logic">
                  <thead>
                    <tr>
		      <th>Item of Manufacture</th>
                      <th>Unit of Cap(Sq.mtrs)for woven fabrics Kgs,tons for Yarn</th>
                       <th colspan="3">Annual capacity
                       </th>
                       <th>Date of Commencement of commercial pordn.</th>
                     
                      
                    </tr>
                     <tr>
		      
                         <th></th>
                         <th></th>
                      <th>Covered</th>
                      <th>Installed</th>
                      <th>Balance</th>
                      <th></th>
                  </thead>
                  <tbody>
                    <tr id="addr0">
					<td> <input type="text" class="form-control" size="5" value=""  name="part" id="part"></td>
                      <td> <input type="text" class="form-control" size="5" value=""  name="part" id="part"></td>
                     <td> <input type="text" class="form-control" size="5" value=""  name="part" id="part"></td>
                      <td> <input type="text" class="form-control" size="5" value=""  name="part" id="part"></td>
                    
                     <td> <input type="text" class="form-control" size="5" value=""  name="part" id="part"></td>
                      <td> <input type="text" class="form-control" size="5" value=""  name="part" id="part"></td>
                    </tr>
					
                  </tbody>
                </table>
              </div>    
                
                  <div class="col-md-12 col-sm-12">
                      <label>Incase of Expansion of an Existing Unit - Not Aplicable</label>
                  </div>
                
                
                 <div class="col-md-12 col-sm-12">
                      <label>List of Machinery (In Separate groups for spinning, weaving, kniting, processing, finishing, stitching, pollution control etc.(Space below is not adequate attach paper at sheet).</label>
                  </div>
                
                
                <div class="col-md-12 col-sm-12">
               
                <table border="2" class="table boredered table-hover" name="tab_logic" id="tab_logic">
                  <thead>
                    <tr>
		      <th>A Group</th>
                      <th>Name of the Machine</th>
                       <th colspan="5">Number Of machines
                       </th>
                       <th>Total</th>
                       <th colspan="2">Details of the Manufacturers Units</th>
                    </tr>
                     <tr>
		      
                         <th></th>
                         <th></th>
                      <th>New</th>
                      <th>2nd hand</th>
                      <th>2nd hand</th>
                      <th>Imported</th>
                       <th>Indige nous</th>
                       <th></th>
                       <th>Name</th>
                       <th>No of machines</th>
                  </thead>
                  <tbody>
                    <tr isd="addr0">
					<td> <input type="text" class="form-control" size="5" value=""  name="part" id="part"></td>
                      <td> <input type="text" class="form-control" size="5" value=""  name="part" id="part"></td>
                     <td> <input type="text" class="form-control" size="5" value=""  name="part" id="part"></td>
                      <td> <input type="text" class="form-control" size="5" value=""  name="part" id="part"></td>
                     <td> <input type="text" class="form-control" size="5" value=""  name="part" id="part"></td>
                     <td> <input type="text" class="form-control" size="5" value=""  name="part" id="part"></td>
                      <td> <input type="text" class="form-control" size="5" value=""  name="part" id="part"></td>
                       <td> <input type="text" class="form-control" size="5" value=""  name="part" id="part"></td>
                        <td> <input type="text" class="form-control" size="5" value=""  name="part" id="part"></td>
                         <td> <input type="text" class="form-control" size="5" value=""  name="part" id="part"></td>
                    </tr>
					
                  </tbody>
                </table>
              </div>  
                
                
              <div class="col-md-12 col-sm-12">
                      <label>Pollution Control, Measures (if applicable)</label>
                  </div>
                
                    <div class="col-md-12 col-sm-12">
                      <label>Final Production during the preceeding TWP Financial years - NA</label>
                  </div>
                
                
       
                 <div class="modal-footer">
                <ul class="pager">
                 
                  <li>
                       <a href="reg_1">←  Prev</a>
                    <a href="reg_3">Next  →</a>
                  </li>
                </ul>
              </div>
                
                
</div>
          </form>
        </div>
      </div>
   
   @endsection
  </body>
</html>
                
                
                

