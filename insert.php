
<?php
$username = $_POST['username'];
$email = $_POST['email'];
if (!empty($username) || !empty($email)) {

  require 'db_connect.php';

     $SELECT = "SELECT email From newsletter Where email = ? Limit 1";
     $INSERT = "INSERT Into newsletter (username, email) values(?, ?)";
     //Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $email);
     $stmt->execute();
     $stmt->bind_result($email);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("ss", $username, $email);
      $stmt->execute();
	  echo '<h1 class="signupsuccessNewsletter">تم تسجيلك بنجاح</h1>'; 
    
     } else {
      echo '<h1 class="signuperrorNewsletter"> انت مسجل بقائمتنا مسبقا , شكرا لك </h1>';
     }
     $stmt->close();
     $conn->close();
    
} 

else {
 echo "يجب ملئ كل الحقول";
 die();
}
?>

<!DOCTYPE HTML>
<html>
<head>
    <style>
        body{
	width: 100%;
	height:100%;
  background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(img/s.jpg);
background-size:cover;
background-position:center;
}
    </style>
  <title>حالة التسجيل </title>
  <link rel="stylesheet" href="css/style.css"> 
</head>
<body>


 
</body>
</html>

