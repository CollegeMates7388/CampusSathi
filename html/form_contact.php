<?php
 
 $con=mysqli_connect('localhost','root','');
 if(!$con){
     echo 'Not Connected to server';
 }
 if(!mysqli_select_db($con,'AxisUpdate')){
     echo 'Database not selected';
 }

 $email=$_POST['email'];
 $subject=$_POST['subject'];
 $message=$_POST['message'];

 $sql="INSERT INTO contactform (Email,Subject,Message) VALUES('$email','$subject','$message')";
 if(!mysqli_query($con,$sql)){
     echo 'Not Inserted';
 }
 else
 {
    // header("Location:contact.html");
     echo '<script>
     alert("Than You for contacting us.");
     window.location.href="contact.html";
     </script>';
     
 }

?>