<?php
    if(isset($_REQUEST["data"])){
        $fname = $_REQUEST["fname"];
        $lname = $_REQUEST["lname"];
        $city =  $_REQUEST["city"];
        echo "Welcome $fname $lname to $city";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="get">
        <input type="text" name="fname" id="fn" placeholder="Enter First Name" required><br>
        <input type="text" name="lname" id="ln" placeholder="Enter Last Name" required><br>
        <input type="text" name="city" id="ct" placeholder="Enter City Name" required><br>
        <input type="submit" value="Send Data" name="data">
        <input type="reset" value="Reset">
    </form>
</body>
</html>