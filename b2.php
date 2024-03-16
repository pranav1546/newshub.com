<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>NewsSpot - Homepage</title>
  <link rel="stylesheet" href="../css/style.css">

</head>
<body>
    <?php
  $conn=mysqli_connect("localhost","root","","newssite");
  $query=mysqli_query($conn,"select * from business_news where nid='2'");
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
                    <li><a href="business.php">Business</a></li>
                    <li><a href="../politics/politics.php">Politics</a></li>
                    <li><a href="../sports/sports.php">Sports</a></li>
                    <li><a href="../login.php">Login</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

        <div class="main-news">
        <div class="n-image2">
            <?php $img1=$op['news_img']; ?><img src="<?php echo $img1; ?>" alt="img">
        </div>
        <div class="n-title">
        <h3><?php echo $op['news_title']; ?></h3>
            <h6>TIMESOFINDIA.COM | <?php echo $op['date_and _time']; ?></h6>
            <p><?php echo $op['news_details']; ?></p>
        </div>
    </div>

        <div class="response-form2">
            <form method="POST">
                <div class="headmoto"><span>Leave your Comment..!</span></div>
                <div id="tb1">
                <input type="text" name="tb1" placeholder="Enter Name..!"><br>
                </div>
                <div id="tb2">
                <input type="textarea" name="tb3" placeholder="Enter Your Opinion..!">
            </div>
            <input type="submit" name="submit">
            </form>
        </div>
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
        <p>V-Mart Bajinagar Road, Delhi.</p>
        <p>For Enquiry: newzhub@gmail.com</p>
        <p>PinCode: 304512</p>
</footer>  
</body>
</html>
<?php
if(isset($_POST['submit'])){
    $tb1=$_POST['tb1'];
    $tb2=date("y-m-d h:i:s");
    $tb3=$_POST['tb3'];
    $conn=mysqli_connect("localhost","root","","newssite");
    $query=mysqli_query($conn,"insert into feedbacks values('$tb1','$tb2','$tb3')");
    if($query){
        echo"<script>alert('feedback successfull..!');</script>";
    }
}
?>