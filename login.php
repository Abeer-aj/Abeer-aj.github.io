<?php
  // First we start a session which allow for us to store information as SESSION variables.
  session_start();
  // "require" creates an error message and stops the script. "include" creates an error and continues the script.
  require "includes/dbh.inc.php";
?>

<!DOCTYPE html>
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
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="UTF-8">
  <title>تسجيل الدخول</title>
  <link rel="stylesheet" href="css/s.css">
  <script src="https://kit.fontawesome.com/34e6ce8f2f.js" crossorigin="anonymous"></script>
</head>
<body>
    <header >
        <div class="headerContainer">
          <nav>
                <input type="checkbox" id="nav" class="hidden">
                <label for="nav" class="nav-btn">
                      <i style="background: #7DD1E6;"></i>
                      <i style="background: #7DD1E6;"></i>
                      <i style="background: #7DD1E6;"></i>
                </label>
                <div class="nav-wrapper">
                      <ul>
                            <li><a   href="index.html">الصفحة الرئيسية</a></li>
                            <li><a  href="CS.html">المساحات المشتركة</a></li>
                            <li><a  href="news.html">البرامج والأنشطة</a></li>
                            <li><a href="office.html">مكاتب الإستثمار</a></li>
                            <li><a href="logisticsSNA.html">الخدمات اللوجستية</a></li>
                            <li><a class="act" href="#">تسجيل الدخول</a></li>
                      </ul>
                </div>
          </nav>
    </div>
    
    </header>

    <div class="hero">
	       <div class="form-box">
	        <h1>تسجيل الدخول</h1>
			 
			 <?php
          if (!isset($_SESSION['uid'])) {
            echo '
			<form id="login" class="input-group-register" action="includes/login.inc.php" method="post">
            <input type="text" class="input-field-register" name="mailuid" placeholder="اسم المستخدم أو الإيميل">
            <input type="password" class="input-field-register" name="pwd" placeholder="كلمة المرور">
            <button type="submit" class="submit-btn-register" name="login-submit">تسجيل الدخول</button>
          </form>
		  
		  <div class="newRegTitle">
		  <h3>أو<br><br></h3>
		  <a href="signup.php" class="toggle-btn">تسجيل جديد</a>
		  </div>  
          ';
          }
		  
          else if (isset($_SESSION['uid'])) {
            echo '<script>

              window.location="index.php";

               </script>
               
               ';		   
          }
          ?>
			 
			 
			  
		   </div>
	       </div>

</body>
</html>