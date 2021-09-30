<!DOCTYPE html>
<html>

    <head>
            <title>
                
            </title>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <link rel="stylesheet" href="../css/stylesheet.css" >
            <script>
                function checkPass(){

                    var pass1 = document.getElementById("pass1").value;
                    var pass2 = document.getElementById("pass2").value;

                    if(pass1 == pass2)
                    {
                        open("../html/f_pass1.php");
                    }
                    else
                    {
                        alert("Password mismatch!");
                        window.open("retry1.php","_self");
                    }
                }

                function passStrength(){
                    var pass1 = document.myfo.pass1.value.length;
                    var msg;

                    if(pass1 <= 3)
                    {
                        msg = "poor";
                    }
                    else if(pass1 > 3 && pass1 <= 6)
                    {
                        msg = "good";
                    }
                    else if(pass1 > 6 && pass1 <= 20)
                    {
                        msg = "strong";
                    }
                    document.getElementById("sp1").innerHTML = "Password strength " + msg;
                    
                }

            </script>

    </head>
    <body style="background-image: url(../images/sd.jpeg);">

        <div class="border">
            <form name="myfo" method="POST" action="f_pass1.php">
            Enter New Password:<br />
            <input type="password" name="pass1" id="pass1" class="pass" onkeyup="passStrength()"><span id="sp1" style="color:white;font-size: 20px;background-color: black;padding: 4px;"></span><br />
            Re-enter Password:<br />
            <input type="password" name="pass2" id="pass2" class="pass"><br />
            <button type="submit" class="confirm" name="confirm" onclick="checkPass()">Confirm</button>
            </form>

        </div>
        

    </body>

</html>