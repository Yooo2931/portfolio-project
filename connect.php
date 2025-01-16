<?php
 $name =@$_POST['name'];
 $email =@$_POST['email'];
 $phno =@$_POST['phno'];
 $subject =@$_POST['subject'];
 $message =@$_POST['message'];

 $conn = new mysqli('localhost','root','','test1');
  if ($conn->connect_error){
    die('connection Failed :' $conn->connect_error)
  }
  else{
    $stmt $conn=>prepare("insert into contactme(name,email,phno,subject,message)vales(?,?,?,?,?)");
$stmt ->bind_param("ssiss",$name,$email,$phno,$subject,$message);
$stmt->execute();
echo "registeration successfully";
$stmt->close();
$conn->close();  
}
 ?>