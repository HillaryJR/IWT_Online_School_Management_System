<!DOCTYPE html>
<html>

    <head>
            <title>
                Forgot Password
            </title>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <link rel="stylesheet" href="../css/stylesheet.css" >
            <script src="../javascript/myscript.js"></script>

    </head>
    <body style="background-image: url(../images/sd.jpeg);">

        <div class="border">
            <?php
                    if(isset($_GET["de"]))
                    {
                        $res = $_GET["de"];

                        if($res=='f')
                        {
                            echo "<h3 style='color:white;font-family:Candara;'>Email address does not match username</h3>";
                        }
                    }
                ?>
            <form name="myfo" method="POST" action="f_pass.php">
	            Enter Username:<br />
	            <input type="text" name="uname" class="pass"><br />
	            Enter Email Address:<br />
	            <input type="text" name="email" class="pass"><br />
	            <button type="submit" class="confirm">Confirm</button>
            </form>

        </div>
        

    </body>

</html>