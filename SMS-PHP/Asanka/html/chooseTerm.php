<!DOCTYPE html>
<html>
    <head>
        <title>Choose Term to add marks</title>
        <link  href="../css/stylesheet.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" >
        <script>
                function closewin()
                {
                    window.close('chooseterm.php');
                }

        </script>
    </head>
    <body>

      <center><div class="term">

            <a href="beforeterm1.php"><input type="button" id="term" value="Term 1 Marks"></a><br />
            <a href="beforeterm2.php"><input type="button" id="term" value="Term 2 Marks"></a><br />
            <a href="beforeterm3.php"><input type="button" id="term" value="Term 3 Marks"></a><br />
            <input type="button" id="term" value="close window" style='background:orange;color:black' onclick='closewin()'><br />

        </div></center>

    </body>

</html>