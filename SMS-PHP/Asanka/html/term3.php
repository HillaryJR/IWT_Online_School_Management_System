<!DOCTYPE HTML>

<html>

    <head>

    <?php require '../../extra/html/config.php'; 
    
    
    ?>

        <title>

          add mark for term3

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
                    <form method="post" action="updateterm3.php">
                    <table class="pro" align="center"  >
                            
                        <?php
                            session_start();
                            $sid = $_POST['sid'];

                            $term = "term3Mark";
                                              
                            $sql = "SELECT s.Subjectname , s.Subjectcode 
                            from student st , subject s 
                            WHERE s.ClassId = st.ClassId AND st.StudentId='$sid' ";

                            $result = $con->query($sql);                          
                            $subcode = array();
                            $i = 0;
                            if($result -> num_rows > 0)
                            {
                                    
                                    while($row = $result->fetch_assoc())
                                    {
                                        
                                        $subcode[$i]= $row['Subjectcode']; 
                                        echo "<tr><td>" . $row['Subjectname'] . "</td><td><input type='number' name='$i' min='0' max='100' required ></td></tr>";
                                        $i++;
                                        
                                    }
                                    echo "</table><br>";
                                    echo "<input type='submit' value='insert' id='tup'></form>";
                         
                            }
                         
                            else
                            {
                                echo "<p id='res'>The student name Enterd Is Not In The System</p><br>";
                                echo "<a href='beforeterm1.php'><input type='button' value='continue' id='coni'></a>";
                            }
                            
                            $_SESSION['sid'] = $sid;
                            $_SESSION['term'] = $term;
                            $_SESSION['subcode'] = $subcode;
                            $_SESSION['i'] = $i;
                          
                           
                        ?>
                        </form>
                  
                   

    </body>

</html>