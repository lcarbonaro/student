<!DOCTYPE html>
<html>
    <head>
        <title>Student</title>    
        
        <!-- 3rd party Javascript libraries  -->
        <script src="../js/jquery-1.10.2.js"></script> 
 
        <!-- custom Javascript -->
        <script>
             $(document).ready(function() { 
                 //console.log('ok - all set');
                 
                 $.ajax({
                     url: 'getStudents.php',
                     type: 'POST',
                     data: {},   // not passing anything in, in this case
                     success: function (response) {
                         // assuming response.success===true
                         var students = $.parseJSON(response).students;
                         $.each(students, function(i, student) {
                             $('<tr>').html("<td>" + student.id + "</td><td>" + student.first_name + "</td><td>" + student.last_name + "</td>").appendTo('#tblStudent tbody');
                         });  // .each loop 
                     }
			     });    // ajax call              
                     
             });  // document.ready function 
			 
        </script> 
        
    </head>
    <body>
        <div>
            <table id="tblStudent">
                <thead>
                    <tr>
                        <th>Id.</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                    </tr>
                </thead>
				<tbody>
				</tbody>
            </table>
        </div> 
    </body>
</html>
