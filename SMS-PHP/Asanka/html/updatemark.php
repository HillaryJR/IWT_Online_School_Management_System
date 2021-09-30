<!DOCTYPE html>

<html>

    <head>

        <?php require '../../extra/html/config.php'  ?>
        
        <title>Upadate Marks</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="../css/stylesheet2.css">
     
        
       
    </head>

    <body>
    <center>
    <form method="post" action="submitupdatemark.php">
    <table class="pro">
    <tr><td>Student ID</td><td><input type="text" name='stid'></td></tr>
    <tr><td>Grade</td><td>
                        <select class="Class" name="class">
                        <option value="06A">06A</option>
                        <option value="06B">06B</option>
                        <option value="06C">06C</option>
                        <option value="06D">06D</option>
                        <option value="07A">07A</option>
                        <option value="07B">07B</option>
                        <option value="07C">07C</option>
                        <option value="07D">07D</option>
                        <option value="08A">08A</option>
                        <option value="08B">08B</option>
                        <option value="08C">08C</option>
                        <option value="08D">08D</option>
                        <option value="09A">09A</option>
                        <option value="09B">09B</option>
                        <option value="09C">09C</option>
                        <option value="09D">09D</option>
                        <option value="10A">10A</option>
                        <option value="10B">10B</option>
                        <option value="10C">10C</option>
                        <option value="10D">10D</option>
                        </td></tr>
    <tr><td>Term</td><td> <select class="Term" name="term">
                    <option value="term1Mark">1st-Term</option>
                    <option value='term2Mark'>2nd-Term</option>
                    <option value='term3Mark'>3rd-Term</option>
                </select></td></tr>
    <tr><td>Maths</td><td><input type="number" name='maths'></td></tr>
    <tr><td>Science</td><td><input type="number" name='science'></td></tr>
    <tr><td>English</td><td><input type="number" name='english'></td></tr>
   
    </table>
           
    <input type="submit" value="Update" id="insert-mark">
    </form></center>
      
    </body>


</html>