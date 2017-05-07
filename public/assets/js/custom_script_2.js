   $(document).ready(function(){
      var i=1;
     $("#add_row").click(function(){
      $('#addr'+i).html("<td>"+ (i+1) +"</td><td><select id='item"+i+"' class='form-control input-md'/></td><td><select id='manufact"+i+"' class='form-control input-md'/></td><td><input  name='quant"+i+"' type='text'   class='form-control input-md'></td><td><input  name='rate"+i+"' type='text'  class='form-control input-md'></td><td><input name='cost"+i+"' type='text'  class='form-control input-md'/></td><td><span class='glyphicon glyphicon-minus addBtnRemove'  name='delete_row"+i+"' ></span></td>  ");

      $('#tab_logic').append('<tr id="addr'+(i+1)+'"></tr>');
      i++; 
  });
     $("#delete_row").click(function(){
    	 if(i>1){
		 $("#addr"+(i-1)).html('');
		 i--;
		 }
	 });

});