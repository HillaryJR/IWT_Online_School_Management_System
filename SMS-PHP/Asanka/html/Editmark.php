<!DOCTYPE HTML>

<html>

    <head>

    <?php require '../../extra/html/config.php'; 
    
    
    ?>

        <title>

            Edit Student Marks

        </title>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


        <link rel="stylesheet" href="../css/stylesheet.css">

        <style>

            .pro td
            {

                    width:200px;

            }

        </style>

    </head>

    <body>
        
                    <table class="pro" align="center"  >
                            
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

                            if($result -> num_rows > 0)
                            {

                                    while($row = $result->fetch_assoc())
                                    {
                                        
                                        $subcode = $row['subCode']; 
                                        echo "<tr><td>" . $row['Subjectname'] . "</td><td>" . $row[$term] . "</td><td><a href='sumbmitdelete.php?subid=$subcode'><button type='submit'>DELETE</button></a></td><td><a href='sumbmitup.php?subid=$subcode'><button type='submit'>UPDATE</button></a></td></tr>";
                                       
                                    }

                            }
                         
                            else
                            {
                                echo "no Data";
                            }
                           
                        ?>
                  
                    </table>

    </body>

</html>