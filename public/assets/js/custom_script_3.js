   $(document).ready(function(){
      var i=1;
     $("#add_row").click(function(){
      $('#addr'+i).html("<td><input name='part"+i+"' type='text'  class='form-control input-md'/></td><td><select id='gen"+i+"' class='form-control input-md'/></td><td><select id='rel"+i+"' class='form-control input-md'/></td><td><select id='attach"+i+"' class='form-control input-md'/></td><td><span class='glyphicon glyphicon-minus addBtnRemove'  name='delete_row"+i+"' ></span></td>");

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



