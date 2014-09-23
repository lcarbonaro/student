<!DOCTYPE html>
<html>
    <head>
        <title>Student</title>    
        
        <!-- 3rd party Javascript libraries  -->
        <script src="../js/jquery-1.10.2.js"></script> 
 
        <!-- custom Javascript -->
        <script>
             $(document).ready(function() { 
                 // build class drop-down    
                 $.ajax({
                     url: 'getItems.php',
                     type: 'POST',
                     data: {
                         fromTable: 'class',
                         fieldValue: 'id',
                         fieldText: 'class_name'
                     },   
                     success: function (response) {
                         // assuming response.success===true
                         var items = $.parseJSON(response).items;
                         $.each(items, function(i, item) {
                             $('<option>').val(item.value).text(item.text).appendTo('#selClass');
                         });  // .each loop 
                     }
			     });    // ajax call to build class drop-down

                 // build teacher drop-down                 
                 $.ajax({
                     url: 'getItems.php',
                     type: 'POST',
                     data: {
                         fromTable: 'teacher',
                         fieldValue: 'id',
                         fieldText: ['first_name','last_name']
                     },   
                     success: function (response) {
                         // assuming response.success===true
                         var items = $.parseJSON(response).items;
                         $.each(items, function(i, item) {
                             $('<option>').val(item.value).text(item.text).appendTo('#selTeacher');
                         });  // .each loop 
                     }
			     });    // ajax call to build class drop-down
                 
                     
             });  // document.ready function 
			 
        </script> 
        
    </head>
    <body>
        <div>
            <form id="frmStudent">
                Class: <select id="selClass"></select>&nbsp;&nbsp;
                Teacher: <select id="selTeacher"></select>
            </form>
        </div> 
    </body>
</html>
