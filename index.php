<?php
$intert = false;
 
 if(isset($_POST['name'])){
 $server = "localhost";
 $username = "root";
 $password = "";

 $con = mysqli_connect( $server  , $username , $password ); // conncetion form with database

 if(!$con){

    die("connceton" . mysqli_connect_error());
 
     }
       
      // echo "suction";
      
     $name = $_POST['name'];
      
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $dsc = $_POST['dsc'];
 
     $sql  = "INSERT INTO  `trip` . `trip` ( `name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ( '$name', '$age', '$gender', '$email', '$phone', '$dsc', current_timestamp());";

   


       if($con-> query($sql) == true){
            // echo "succeesfull";
            $intert = true;
       }
     else{
       echo "ERROR: $sql <br> $con->error";
     }

     $con->close();
}


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter&family=Nunito&family=Readex+Pro:wght@600&family=Roboto+Mono:wght@100&family=Roboto:ital@1&family=Source+Sans+Pro:ital@0;1&display=swap" rel="stylesheet">
    <title>welcome to trevel </title>
</head>
<body>
    
     <div class="container">
         <h1>fill the form</h1>
         <?php

         if($intert == true){
           echo "<p class = 'submitmsg'>Thanku for submition</p>";

}
         ?>

        <form action="index.php" method="post">


            <input type="text"  name="name" id="name" placeholder="Enter name">
            <input type="text"  name="age" id="age" placeholder="Enter Age" >
            <input type="text" name="gender" id="gender" placeholder="Enter gender">
            <input type="email"  name="email" id="email" placeholder="Email">
            <input type="phone"  name="phone" id="phone" placeholder="phone no.">
            <textarea name="dsc" id="" cols= "30" rows="10"  placeholder="Quary" ></textarea>
            <button class="btn">Submit</button>
      
        </form>
     </div>


     <script src="index.js"></script>  
   
</body>
</html>