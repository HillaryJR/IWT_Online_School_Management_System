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
          <script>
            function msg()
            {
            var v = confirm( "Do you really want to clear all the marks related to This student?" );

            if (v == true)
            {
                alert("clear");
            }
            else
            {
                alert("cancel");
            }
            }
            
            function closewin()
            {
                window.close('chooseterm.php');
            }

        </script>

        </script>


    </head>

    <body>
        
                    <table class="pro" align="center" action="submitupdate.php" >
                            
                        <?php
                            session_start();  
                      
                            $_SESSION['sid'] = $_POST['sid'];
                            $_SESSION['term'] = $_POST['term'];
                        
                            $sid = $_SESSION['sid'];

                            $term = $_SESSION["term"];
                                              
                            $sql = "SELECT s.Subjectname , sm.subCode , sm.$term
                                    FROM studentmarks sm , subject s 
                                    WHERE s.Subjectcode = sm.subCode AND sm.studentId='$sid' AND s.ClassId=(SELECT ClassId FROM student WHERE StudentId='$sid') ";

                            $result = $con->query($sql);    
                                                 
                            $i = 0 ;
                            if($result -> num_rows > 0)
                            {

                                    while($row = $result->fetch_assoc())
                                    {
                                        
                                        $subcode = $row['subCode']; 
                                        echo "<tr><td>" . $row['Subjectname'] . "</td><td>" . $row[$term] . "</td></a></td><td><a href='sumbmitupdate.php?subid=$subcode' target='_blank'><button type='submit'>UPDATE</button></a></td></tr>";
                                        $i++;
                                    }

                            }
                            else
                            {
                                header("Location:notfound.php");
                            }
                            echo "</table><br>";
                            echo "<a href='clear.php?id=$sid' target='_blank'><input type='button' value='Clear Mark' class='tup' style='margin-left:455px;' onclick='msg()'></a>";
                            echo "<input type='button' value='Close Page' class='tup' style='margin-left:340px;' onclick='closewin()'>";
                        
                        ?>
                  
                    

    </body>

</html>