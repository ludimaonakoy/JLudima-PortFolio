<?php  
$host = 'localhost';  
$username = 'root';  
$password = '';  
$dbname = 'portfolio'; 
if ($_SERVER ['REQUEST_METHOD'] =='POST'){
    $name = $_POST['name'];
    $email= $_POST['email'];
    $Message= $_POST['Message']; 
$conn = mysqli_connect($host, $username, $password,$dbname);  
if(!$conn){  
  die('Could not connect: '.mysqli_connect_error());  
}  
// echo 'Connected successfully<br/>';  
  
$sql = "INSERT INTO data(name,email,Message) VALUES ('$name','$email','$Message')";  
$result= mysqli_query($conn,$sql);
if($result){  
 echo "data inserted successfully";  
 echo "<script> alert('Your request has been sent Successfully, Wait for a FeedBack plz')</script>";
 
}else{  
echo "Could not insert record: ". mysqli_error($conn);  
}  
  
mysqli_close($conn);  
}
echo "<script>window.location.href='index.php'</script>";
?>