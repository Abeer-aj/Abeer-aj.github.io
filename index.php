<?php
  // First we start a session which allow for us to store information as SESSION variables.
  session_start();
  // "require" creates an error message and stops the script. "include" creates an error and continues the script.
  require "includes/dbh.inc.php";
?>

<!DOCTYPE html>
<html lang="ar">
<head>
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="UTF-8">
  <title>الرئيسية</title>
  <link rel="stylesheet" href="css/style.css">
  <script src="https://kit.fontawesome.com/34e6ce8f2f.js" crossorigin="anonymous"></script>
</head>
<body>
  <section class="banner" >
    <header >
      
       
       <?php
        if (isset($_SESSION['uid'])) {
        echo '
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
                <li><a  href="#">الصفحة الرئيسية</a></li>
                <li><a  href="CS.html">المساحات المشتركة</a></li>
                <li><a  href="news.html">البرامج والأنشطة</a></li>
                <li><a href="office.html">مكاتب الإستثمار</a></li>
                <li><a href="logisticsSNA.html">الخدمات اللوجستية</a></li>
				
                <li> <form action="includes/logout.inc.php" method="post">
                 <button class="loguotBtn">تسجيل الخروج</button>
                  </form>
				</li>
          </ul>
		  
    </div>

</nav>
        

</div>
        ';
        
      }
         
       else{
         echo ' <div class="headerContainer">
        

         <nav>
           <input type="checkbox" id="nav" class="hidden">
           <label for="nav" class="nav-btn">
                 <i></i>
                 <i></i>
                 <i></i>
           </label>
         <div class="nav-wrapper">
           <ul>
                 <li><a  class="act" href="#">الصفحة الرئيسية</a></li>
                 <li><a  href="CS.html">المساحات المشتركة</a></li>
                 <li><a  href="news.html">البرامج والأنشطة</a></li>
                 <li><a href="office.html">مكاتب الإستثمار</a></li>
                 <li><a href="logisticsSNA.html">الخدمات اللوجستية</a></li>
                 <li><a href="login.php">تسجيل الدخول</a></li>
           </ul>
     </div>

</nav>

</div>';
         
       }
    
    ?>


     

  </header>
    <img class="backimage" src="img/grey-background.png" alt="background gray image">
    <div class="BannerLogo"></div>
    <img class="responsiveLogo" src="img/smallLogo.jpg" alt="logo">
    <img class="responsivename" src="img/nameSNA-removebg.png" alt="name">
	

    
    
  </section>

  <section class="about">
    <div class="contentBx">
      <h2 class="heading">عن سنا</h2>
      <p class="text">مبادرة لجنة التنمية الاجتماعية الأهلية بحي الريان والنهضة بمدينة بريدة لإنشاء كيان اجتماعي استثماري يهدف لخلق بيئة عمل آمنة فعالة ومحفزة من خلال دعم المشاريع الصغيرة والمتوسطة
         لسيدات ورائدات الأعمال وصاحبات المشاريع الصغيرة والناشئة،
         بتقديم خدمات التمكين والتأهيل والتسهيلات وفرص التمويل 
        التي تحتاجها لتنفيذ وإنجاح مشروعها التجاري<br><br>
        وتشمل خدمات التمكين في مجمع سنا للأعمال النسائية توفير مكاتب ومقرات للعمل،
 وتوفير مساحات عمل مشتركة وتقديم خدمات دراسة الجدوى والدعم اللوجستي والجلسات الاستشارية الريادية المتخصصة <br><br>
 وتوفر خدمات التأهيل برامج وورش عمل تعليمية إرشادية تطويرية؛ تؤهل السيدات والفتيات لسوق العمل وسد احتياج الإرشاد المهني والوظيفي، وبناء الفعاليات الممكنة للطاقات والمعززة للشركات
</p>
    </div>
    <div class="imgBx "></div>
  </section>
  
  <section class="services">
      <h2 class="heading" style="text-align: center;">خدماتنا</h2>
      <p class="text" style="text-align: center;">يسعد المجمع بالانضمام لقائمة شركاؤنا لكل من كان لديها مشروعها الخاص سواء كنت مؤسسه او جمعية نسائية او رائدة اعمال صغيره مبتدئة وتملك روح التطوير والمبادرة فنحن في انتظار كل من أراد ان ينضم معنا لنرتقي سويا سلم النجاح</p>
      <div class="container">
        <div class="serviceBx" >
          <a href="office.html">
          <div>
            <img src="img/table.png" alt="table picture">
            <h3>مكاتب للإستثمار</h3>
          </div>
        </a>
        </div>
        <div class="serviceBx">
          <a href="">
          <div>
            <img src="img/chart.png" alt="chart picture">
            <h3>خدمات لوجستية</h3>
          </div>
          </a>
        </div>
        <div class="serviceBx">
          <a href="CS.html">
          <div>
            <img src="img/handshake.png" alt="handshake picture">
            <h3>مساحات مشتركة</h3>
            </div>
            </a>
          </div>
        </div>
  </section>
  <section class="additionService">
    <div class="contentBx">
      <h2 class="heading" style="text-align: left; ">يوجد ايضا حضانة للأطفال</h2>
      <p class="text">لستي بالحاجة للقلق على أطفالك فنحن نقدم لهم العناية بحرض وايضا  تقام فعاليات لطفلك لدينا </p>
    </div>
    <div class="imgBx">
      <img src="img/line-art-children.png" alt="line art children">
    </div>
  </section>

  <section class="client">
      <h2 class="heading" style="text-align: center;" >شركاء النجاح</h2>
      <p class="text" style="text-align: center;">يفخر مجمع سنا للأعمال النسائية بجميع شركاء نجاحه
         وهم المستثمرين في مقرات مجمع سنا والمستفيدين من خدماته، كما يسعد المجمع بالانضمام لقائمة شركاؤنا 
        لكل من كان لديها مشروعها الخاص سواء كنت مؤسسه او جمعية نسائية او رائدة اعمال صغيره
         مبتدئة وتملك روح التطوير والمبادرة فنحن في انتظار كل
         .من أراد ان ينضم معنا لنرتقي سويا سلم النجاح</p>
      <div class="imgBx">
        <a href="https://www.tatweer.org.sa/"><img src="img/tatweer-removebg.png" alt="موقع تطوير" ></a>
        <a href="http://knooz.org/"><img src="img/Knooz-removebg-preview.png" alt="موقع كنوز"></a>
        <a href=""><img src="img/Lila-removebg.png" alt="اسم ليلى"></a>
        <a href="https://twitter.com/ethraalhyat?lang=ar"><img src="img/Ethra-removebg.png" alt="تويتر اثراء"></a>
        <a href="http://ssq.org.sa/"><img src="img/Jawdah-removebg.png" alt="الجمعية السعودية للجودة"></a>
      </div>
  </section>
  
  <section class="contact">
    <h2 class="heading" style="text-align: center;" >اشترك في نشرتنا البريدية</h2>
    <p class="text" style="text-align: center;">اشترك في نشرتنا لكي يصلك كل جديدنا من الأنشطة والبرامج وحول مجمعنا</p>
  </section>
  
  <section class="about">
    <div class="contentBx redbg">
      <form action="insert.php" method="POST" class="form" >
        <div class="inputBx">
          <input type="text" name="username" placeholder="الإسم">
        </div>
        <div class="inputBx">
          <input type="text" name="email" placeholder="الإيميل الألكتروني">
        </div>
        <div class="inputBx">
          <input type="submit" name="Submit" value="اشتراك">
        </div>
      </form>
    </div>
    <div class="imgBx2"> <img src="img/contact-removebg.png" alt=""></div>
  </section>
  <section class="footer">
    <p class="text">جميع الحقوق محفوظة لمركز سنا للأعمال النسائية</p>
    <ul>
      
      <li><a href="https://www.snapchat.com/add/sna_center"><i class="fab fa-snapchat-ghost  fa-lg "></i></a></li>
      <li><a href="https://twitter.com/sna_center?lang=ar"><i class="fab fa-twitter fa-lg "></i></a></li>
      <li><a href="https://instagram.com/sna_center?igshid=1lapzgdyrktl8"><i class="fab fa-instagram fa-lg  "></i></a></li>
      <li><a href="https://wa.me/966502311888"><i class="fab fa-whatsapp fa-lg "></i></a></li>
    <li><a href="mailto:sna.center@gmail.com"><i class="far fa-envelope fa-lg  "></i></a></li>
    <li><a href="https://g.page/sna_center?share"><i class="fas fa-map-marker-alt fa-lg  "></i></a></li>
    </ul>
  </section>

  
</body>
</html>