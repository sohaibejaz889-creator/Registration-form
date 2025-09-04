<?php
 $servername = "localhost";
 $username = "root"; 
$password = ""; 
 $dbname = "student_db";

 // Create connection8 $conn = new mysqli(hostname: $servername, username: $username, password: $password, database: $dbname);

 // Check connection
 if ($conn->connect_error) {
 die("Connection failed: $conn->connect_error);
}

 // Get data from form
 $name = $_POST['fullname'];
 $email = $_POST['email'];
 $course = $_POST['course'];
  $gender = $_POST['gender'];
   $birthdate = $_POST['birthdate'];
    $phone = $_POST['phone'];
     $address = $_POST['address'];


// Insert into database
 $sql = "INSERT INTO students (fullname, email, course, gender, birthdate, phone, address)
 VALUES ('$name', '$email', 'course')";

 if ($conn->query(query: $sql) === TRUE) {
 echo "New student registered successfully!";
 } else {
 echo "Error: $sql. "<br>".$conn->error;
 }
 $conn->close();
 ?>