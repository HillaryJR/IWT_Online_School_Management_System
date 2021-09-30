<!DOCTYPE html>
<html>
<head>
    <title>search students</title>
<link  href="../css/stylesheet.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" >
</head>
    <body>
    <div class="rio">
        <form method="post"  action=term1.php><br />
        <label id="lbn">Enter Student ID : </label><br />
        <input type="text" name="sid" class="sid" placeholder="STXXXX" pattern="ST[0-9][0-9][0-9][0-9]" required><br />
        <input type="submit" class="ut" value="Add"><a href='chooseterm.php'><input type='button' value='back' class='ut' style='margin-left:69px;'></a>
        
        </form>
        </div>
    </body>

</html>