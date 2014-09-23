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
                         $('#tblStudent tbody').append(response);
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
