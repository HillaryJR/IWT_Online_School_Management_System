<!DOCTYPE HTML>

<html>

    <head>

    <?php require '../../extra/html/config.php'; 
    
    
    ?>

        <title>

            Edit Student Marks

        </title>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


        <link  href="../css/stylesheet.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" >

        <style>

            .pro td
            {

                    width:200px;

            }

        </style>
  
    </head>

    <body>
              
                            
                        <?php
                            session_start();  
                      
                            $sid = $_SESSION['sid'];
                            
                            $term = $_SESSION['term'];

                            $subcode = $_GET['subid'];

                            $_SESSION['subcode'] = $subcode;
                                              
                            $sql = "SELECT s.Subjectname , sm.subCode , sm.$term
                                    FROM studentmarks sm , subject s 
                                    WHERE s.Subjectcode = sm.subCode AND sm.studentId='$sid' AND subCode='$subcode' AND s.ClassId=(SELECT ClassId FROM student WHERE StudentId='$sid') ";

                            $result = $con->query($sql);  
                                                    

                            if($result -> num_rows > 0)
                            {

                                    while($row = $result->fetch_assoc())
                                    {
                                        
                                        $subcode = $row['subCode']; 
                                        $subname = $row['Subjectname'] ;
                                        $upterm = $row[$term] ;
                                       
                                    }

                            }
                     
                        ?>
            <form method="post" action="submitupdatedatemsg.php">
                    <table class="pro" align="center"  >
                        <tr>
                            <td><?php echo $subname ?></td>
                            <td><input type="number" value="<?php echo $upterm ?>"  name="updamark" min="0" max="100" required></td>
                        </tr>
                       
                    </table><br>
                    <input type='submit' value='Update' class='tup' style="margin-left:555px;">
            </form>
                   

    </body>

</html>