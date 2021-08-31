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
  
  </style>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="UTF-8">
  <title>تسجيل جديد</title>
  <link rel="stylesheet" href="css/s.css">
  <script src="https://kit.fontawesome.com/34e6ce8f2f.js" crossorigin="anonymous"></script>
</head>
<body>
    <header >
        <div class="headerContainer">
          <nav>
                <input type="checkbox" id="nav" class="hidden">
                <label for="nav" class="nav-btn">
                      <i></i>
                      <i></i>
                      <i></i>
                </label>
                <div class="nav-wrapper">
                      <ul>
                            <li><a   href="index.html">الصفحة الرئيسية</a></li>
                            <li><a  href="CS.html">المساحات المشتركة</a></li>
                            <li><a  href="news.html">البرامج والأنشطة</a></li>
                            <li><a href="office.html">مكاتب الإستثمار</a></li>
                            <li><a href="logisticsSNA.html">الخدمات اللوجستية</a></li>
                            <li><a  href="login.php">تسجيل الدخول</a></li>
                      </ul>
                </div>
          </nav>
    </div>
    </header>
    <main>
	  <div class="hero">
	     <div class="form-box">
	     <h1>تسجيل جديد</h1>
		 <?php
		    if (isset($_GET["error"])) {
				
				if ($_GET["error"] == "emptyfields") {
                   echo '<p class="signuperror">يجي ملئ كل الحقول</p>';
                  }
				  
				else if ($_GET["error"] == "invaliduidmail") {
                  echo '<p class="signuperror">اسم مستخدم والإيميل غير صحيح</p>';
                 }
              else if ($_GET["error"] == "invaliduid") {
                 echo '<p class="signuperror">اسم المستخدم غير صحيح</p>';
                 }
              else if ($_GET["error"] == "invalidmail") {
                  echo '<p class="signuperror">الإيميل غير صحيح</p>';
                 }
               else if ($_GET["error"] == "passwordcheck") {
                  echo '<p class="signuperror">كلمة المرور وتأكديها غير متطابقين</p>';
              }
               else if ($_GET["error"] == "usertaken") {
                  echo '<p class="signuperror">اسم المستخدم غير متاح</p>';
                  }
				
			}//ifset end
			
			else if (isset($_GET["signup"])) {
            if ($_GET["signup"] == "success") {
              echo '<p class="signupsuccess">تم تسجيلك بنجاح</p>';
            }
          }
		 
		 ?>
		 
	      <form id="register" class="input-group-register" action="includes/signup.inc.php" method="post">
            <input type="text" class="input-field-register" name="uid" placeholder="اسم المستخدم">
            <input type="text" class="input-field-register" name="mail" placeholder="الإيميل">
            <input type="password" class="input-field-register" name="pwd" placeholder="كلمة المرور">
            <input type="password" class="input-field-register" name="pwd-repeat" placeholder="تأكيد كلمة المرور">
            <button type="submit" class="submit-btn-register" name="signup-submit">تسجيل</button>
          </form>
		  
		  </div>
		  </div>
	  </main>
    </body>
    </html>