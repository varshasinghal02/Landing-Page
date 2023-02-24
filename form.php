<?php
	error_reporting(0);
    if(isset($_POST['submit']))
    {
        $fname = $_POST['fname'];
        $email = $_POST['email'];
        $Pnumber = $_POST['Pnumber'];
		$Cname = $_POST['Cname'];
		$resources = $_POST['resources'];
    }

    // database details
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "form";

    $con = mysqli_connect($host, $username, $password, $dbname);

    if (!$con)
    {
        die("Connection failed!" . mysqli_connect_error());
    }

    $sql = "INSERT INTO hire a talent (fname,email,Pnumber,Cname,resources) VALUES ('$fname','$email','$Pnumber,'$Cname','$resources')";
    $rs = mysqli_query($con, $sql);
    if($rs)
    {
        echo "Entries added!";
    }
  
    // close connection
    mysqli_close($con);

?>