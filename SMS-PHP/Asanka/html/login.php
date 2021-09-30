<html>
    <head>
        <style>
            form{
                color:rgb(255, 255, 255);

            }
            legend{
                color:rgb(255, 255, 255);
                font-size: 25px;
                font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
                font-style:inherit;
            }
            fieldset{
                
                margin-left:auto;
                margin-right: auto;
                margin-top:80px;
                width:450px;
                height:450px;
                background-color: rgb(16, 1, 31); /* Fallback color */
                background-color: rgba(0, 0, 0, 0.459); /* Black w/opacity/see-through */
                
                border:none;
                
            }
            input{

                padding:10px;

            }
            form{
                padding:8px;
            }
            input[type="text"],input[type="password"],input[type="submit"]{
                width:400px;
                margin-top:10px;
            }
            #b1{
                background-color: rgb(36, 177, 48);
                margin-top:30px;
                border: none;
                font-size: 20px;
                width: 80px;
                height: 40px;
                color: aliceblue;
                border-radius: 5px;
            }
            #c1{
                margin-top:30px;
                background-color:red;
                width:100px;
                color:white;
                border:none;
                font-size: 20px;
            }
            img{
                margin-left:10px;
            }
             
           body{
                position: fixed;
                top: 0; 
                left: 0; 
                background-image: url(../images/sd.jpeg);
               
  
                /* Preserve aspet ratio */
                min-width: 100%;
                min-height: 100%;
                background-attachment: fixed;
                background-position: center;
              
            } 
            #login{
                margin-top:10px;
                height:30px;
                width:130px;
                border: #fff solid 3px;
                font-size: 13px;
                border-radius:5px;
               
                outline: none;
                background-color: red;
                color: antiquewhite;
            }
        #login:hover{
            background-color: purple;
            color: #fff;
          } 

            input{
                border: none;
            }
            div.form{
                font-size: 18px;
                font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', 'sans-serif';
            }
                    ul.topnav {
                        list-style-type: none;
                        margin: 0;
                        padding: 0;
                        overflow: hidden;
                        background-color: rgba(155, 60, 158, 0.644);
                        /*position: -webkit-sticky;  Safari */
                        /*position: sticky;*/
                        top: 0;
                    }    
                    ul.topnav li {float:left;}
                    ul.topnav li a {
                        display: block;
                        font-size: 30px;
                        color: rgb(35, 195, 235);
                        text-align: center;
                        padding: 7px 40px;
                        text-decoration:aquamarine;
                    
                    }
                    
                    ul.topnav li a:hover{background-color: #111;}            
                    ul.topnav li.right {float: right;} 
            .reset{
               color: rgb(0, 0, 0);
               background-color: rgb(200, 173, 226);

            }      
            </style>
            <title>Login Page</title>
    </head>

    <body>

        <div class="background-image"></div>

        <!--<ul type="disk" class="topnav">
		
                <li><a href="../index.html">Home</a></li>
                <li><a href="events.html">Event</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="#about">About Us</a></li>
               
                      
                </ul>-->
                
        <fieldset>
            
            <img src="../../img/govt.png" height="100px" width="100px;" />
            <form name="fop" class="form" method="POST"action="checkLogin.php">
                Username:<br />
                <input type="text" name="uname" id="name" required /><br />
                Password:<br />
                <input type ="password" name="pass" id="password" required /><br /><br />

                <button style="background-color: white;border: 2px black solid;"><a style="text-decoration: none;color:black;font-family: Calibri;" href="retry.php">Forgot password?</a></button><br>

                <center><button width="150px" id="b1" type="submit">Log In</button><br /><br />

                <?php
                    if(isset($_GET["msg"]))
                    {
                        $res = $_GET["msg"];

                        if($res=='f')
                        {
                            echo "<h3 style='color:white;font-family:Candara;'>Incorrect username or password!</h3>";
                        }
                    }

                    if(isset($_GET["pr"]))
                    {
                        $res1 = $_GET["pr"];

                        if($res1=='s' || $res1=='a')
                        {
                            echo "<h3 style='color:white;font-family:Candara;'>Password has been changed!</h3>";
                        }
                        else
                        {
                            echo "<h3 style='color:rgb(237,85,85);font-family:Candara;'>Password was not changed!</h3>"; 
                        }
                    }

                ?>

        </form>
        <center><a href="../../Chandula/html/home.php" style="text-decoration: none; color: white;font-family: Calibri;font-size: 20px;">Home</a></center>
        </fieldset>
    </body>


</html>






