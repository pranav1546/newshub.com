<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>NewsHub - Business</title>
  <link rel="stylesheet" href="../css/style.css">

</head>
<body>
  <?php
  $conn=mysqli_connect("localhost","root","","newssite");
  $query=mysqli_query($conn,"select * from business_news where nid='1'");
  $op=mysqli_fetch_array($query);
  ?>
<div class="wrapper1">
  <div class="Container">
        <div class="nav1">
            <div class="logo">
                NEWS<span>SPOT</span>
            </div>
            <div class="menu">
                <ul class="navMenu">
                    <li><a href="../index.html">Home</a></li>
                    <li><a href="../business/business.php">Business</a></li>
                    <li><a href="../politics/politics.php">Politics</a></li>
                    <li><a href="../sports/sports.php">Sports</a></li>
                    <li><a href="#">Login</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="heading1">
<strong>Business</strong>
<p>Here are Today's some news from all over India..!</p> 
<!-- partial -->
</div>
<main>
<div class="cards-container" id="cards-container">
  <div class="card">
    <div class="card-container" >
      <a href="b1.php"><?php $img1=$op['news_img']; ?><img src="<?php echo $img1; ?>" alt="news" id="news-img"></a>
  </div>
      <div class="card-content">
        <h6 id="news-source">TimesOfIndia | <?php echo $op['date_and _time']; ?></h6>
        <h3 id="news-title"><?php echo $op['news_title']; ?></h3>
        <p class="news-desc" id="description"><?php echo $op['news_desc']; ?></p>
        </div>
</div>
<!------------------------------------------------------------------------------------------------------>
<?php
  $conn=mysqli_connect("localhost","root","","newssite");
  $query=mysqli_query($conn,"select * from business_news where nid='2'");
  $op=mysqli_fetch_array($query);
  ?>
 <div class="card">

    <div class="card-container">
      <a href="b2.php"><?php $img2=$op['news_img']; ?><img src="<?php echo $img2; ?>" alt="news"></a>
  </div>
      <div class="card-content">
        <h6 id="source">TIMESOFINDIA.COM | <?php echo $op['date_and _time']; ?></h6>
        <h3 id="title"><?php echo $op['news_title']; ?></h3>
        <p class="description" id="description"><?php echo $op['news_desc']; ?></p>
        
  </div>
</div>
<!------------------------------------------------------------------------------------------------------>
<?php
$query=mysqli_query($conn,"select * from business_news where nid='3'");
$op=mysqli_fetch_array($query);
?>
 <div class="card">
    <div class="card-container">
      <a href="b3.php"><?php $img=$op['news_img']; ?><img src="<?php echo $img; ?>" alt="news"></a>
  </div>
      <div class="card-content">
        <h6 id="source">TIMESOFINDIA.COM | <?php echo $op['date_and _time']; ?></h6>
        <h3 class="news-title" id="title"><?php echo $op['news_title']; ?></h3>
        <p class="description" id="description"><?php echo $op['news_desc']; ?></p>
        
  </div>
</div>
<!------------------------------------------------------------------------------------------------------>
<?php
$query=mysqli_query($conn,"select * from business_news where nid='4'");
$op=mysqli_fetch_array($query);
?>
 <div class="card">
    <div class="card-container">
      <a href="b4.php"><?php $img=$op['news_img']; ?><img src="<?php echo $img; ?>" alt="news"></a>

  </div>
      <div class="card-content">
        <h6 id="source">TIMESOFINDIA.COM | <?php echo $op['date_and _time']; ?></h6>
        <h3 class="news-title" id="title"><?php echo $op['news_title']; ?></h3>
        <p class="news-description" id="description"><?php echo $op['news_desc']; ?></p>
        
  </div>
</div>
</div>
</main>
<main>
  <!------------------------------------------------------------------------------------------------>
<?php
$query=mysqli_query($conn,"select * from business_news where nid='5'");
$op=mysqli_fetch_array($query);
?>
<div class="cards-container" id="cards-container">
  <div class="card">
    <div class="card-container" >
      <a href="b5.php"><?php $img=$op['news_img']; ?><img src="<?php echo $img; ?>" alt="news" id="news-img"></a>
  </div>
      <div class="card-content">
        <h6 id="news-source">TIMESOFINDIA.COM | <?php echo $op['date_and _time']; ?></h6>
        <h3 id="news-title"><?php echo $op['news_title']; ?></h3>
        <p class="news-desc" id="description"><?php echo $op['news_desc']; ?>
</p>
        
  </div>
</div>
<!------------------------------------------------------------------------------------------------>
<?php
$query=mysqli_query($conn,"select * from business_news where nid='6'");
$op=mysqli_fetch_array($query);
?>
 <div class="card">
    <div class="card-container">
      <a href="b6.php"><?php $img=$op['news_img']; ?><img src="<?php echo $img; ?>" alt="news"></a>
  </div>
      <div class="card-content">
        <h6 id="source"><br>TIMESOFINDIA.COM | <?php echo $op['date_and _time']; ?></h6>
        <h3 id="title"><?php echo $op['news_title']; ?></h3>
        <p class="description" id="description"><?php echo $op['news_desc']; ?></p>
        
  </div>
</div>
<!------------------------------------------------------------------------------------------------>
<?php
$query=mysqli_query($conn,"select * from business_news where nid='7'");
$op=mysqli_fetch_array($query);
?>
 <div class="card">
    <div class="card-container">
      <a href="b7.php"><?php $img=$op['news_img']; ?><img src="<?php echo $img; ?>" alt="news"></a>
  </div>
      <div class="card-content">
        <h6 id="source">TIMESOFINDIA | <?php echo $op['date_and _time']; ?></h6>
        <h3 id="title"><?php echo $op['news_title']; ?></h3>
        
        <p class="description" id="description"><?php echo $op['news_desc']; ?></p>
        
  </div>
</div>
<!------------------------------------------------------------------------------------------------>
<?php
$query=mysqli_query($conn,"select * from business_news where nid='8'");
$op=mysqli_fetch_array($query);
?>
 <div class="card">
    <div class="card-container">
      <a href="b8.php"><?php $img=$op['news_img']; ?><img src="<?php echo $img; ?>" alt="news"></a>
  </div>
      <div class="card-content">
        <h6 class="news-source" id="source">Gadgets Now Bureau | <?php echo $op['date_and _time']; ?></h6>
        <h3 class="news-title" id="title"><?php echo $op['news_title']; ?></h3>
        
        <p class="news-description" id="description"><?php echo $op['news_desc']; ?></p>
        
  </div>
</div>
</div>
</main>
<footer>
    <div class="contact-us">
    <div class="contact">
      <h5>Follow Us</h5>
      <a href="www.facebook.com"><img src="../social img/facebook.png" alt="facebook"></a>
      <a href="www.google.com"><img src="../social img/googlell.png" alt="google"></a>
      <a href="www.twitter.com"><img src="../social img/twitter.png" alt="twitter"></a>
      <a href="www.instagram.com"><img src="../social img/instagram.png" alt="instagram"></a>
    </div>
      <div class="hr">
        <hr>
      </div>
      <div class="address">
        <h5>Locate Us</h5>
        <p>Wakadi Road,Maharashtra.</p>
        <p>For Enquiry: newzhub@gmail.com</p>
        <p>PinCode: 413719</p>
      </div>
</footer>   
</body>
</html>
