<?php

// establishing DB Connection

    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "bbdms";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  

    // retriving user credintial from the database
    
         $email = $_POST['email'];
         $password = $_POST['password'];

         $sql = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";  
         $result = mysqli_query($con, $sql);  
         $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
         $count = mysqli_num_rows($result);

         if($count == 1){  
            header("Location: search-donor.php");  
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     
         
    ?>