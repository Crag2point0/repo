<?php


$hostname = "sql104.epizy.com";
$username = "epiz_32698416";
$password = "APPLEfifo1";
$dbname = "epiz_32698416_DB"; /*
$hostname = "localhost:3306";
$username = "root";
$password = "root";
$dbname = "test";
*/
$conn = mysqli_connect($hostname, $username, $password, $dbname);
if (!$conn) {
  echo "Database connection error".mysqli_connect_error();
}
?>

<html>
<head>
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-V9D9PD0LH9"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-V9D9PD0LH9');
  </script>
  <title>cooliteks.com</title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="google-site-verification" content="HKw8qk-cs0PVNClKEWEK4mPlvOvNW-xSLDdMIS7QnKE" />
<meta name="description" content="welcome to cooliteks were will bring you the latest tips, hacks, Skills and learning in the tech industry." />
<meta name="robots" content="noindex" />
<meta name="googlebot" content="noindex" />
<meta name="googlebot-news" content="noindex" />
<meta name="slurp" content="noindex" />
<meta name="msnbot" content="noindex" />
<link rel="icon" href="logo.jpg">
<link rel="stylesheet" href="http://Collins.42web.io/blog/paragraph.css">

<style>
* {
margin: 0;
padding: 0;
box-sizing: border-box;
font-family: Sans-Serif;
}
h1 {
font-family: cursive;

}
h2 {
text-align: center;
}
.p {
color: #3c3d3d;
font-family: 'Lucida Sans', Arial, sans-serif;
font-size: 16px;
line-height: 20px;
text-indent: 30px;
font: bolder;
display: -webkit-box;
max-width: 98%;
text-align: center;
-webkit-line-clamp: 3;
-webkit-box-orient: vertical;
overflow: hidden;
}
a {
color: #0f77a1fd;
text-decoration: underline;
}
a:hover {
color: #441d92;
}
.date {
background: #fe921f;
color: #ffffff;
display: inline-block;
font-family: 'Lato', sans-serif;
font-size: 12px;
font-weight: bold;
line-height: 12px;
letter-spacing: 1px;
margin: 0 0 30px;
padding: 10px 15px 8px;
text-transform: uppercase;
}
.title-heading {
width: 100%;
height: 25px;
color: white;
background-color: #152529;
}
.logo {
width: 100%;
height: 200px;
border-radius: 1px;
object-fit: initial;
}
.wrapper {
width: 100%;
height: auto;
background-color: white;
}
.readmore {
border: 3px solid #626f72;
border-top: none;
border-left: none;
border-right: none;
border-bottom-style: dashed;
padding: 6.5px;
}


/*.post {
      width: 95%;
      height: 200px;
      background-color: #68d3ee94;
      border-radius: 20px;
      margin: 5px auto;
    }*/
.recently-posted {
width: 100%;
height: auto;
display: block;
margin: 0 auto;
text-align: center;
padding-top: 20px;
}
.recently-links {
font-size: 20px;
font-weight: 500;
margin: 0;
text-align: center;
text-decoration: none;
text-decoration-line: none;
text-decoration-color: none;
line-height: 20px;

}
.recently-posted {
background-color: #ebeff0;
border: 1px solid;
}


/*-----footer----*/
footer {
width: 100%;
height: 200px;
background-color: #3f4547;
}
.copyright {
color: #f6f6f8;
}
.footer-info {
text-align: center;
padding-top: 20px;
}
h4 {
color: white;
}
.f-links {
list-style: none;
}
.useful-links {
margin: 10px auto;
}
.social-media {
width: 100%;
height: auto;
}
.icon {
width: 40px;
height: 40px;
display: inline-block;
margin: auto auto;
}
</style>
</head>
<body>
<header>
<div class="wrapper">
<h1>cooliteks</h1>
<img class="logo" src="logo.jpg" alt="cooliteks logo here ">
<!--posts -->
<div class="newsFeed">
<h2 class="title-heading">News Feed</h2>
<?php

$sql1 = "SELECT * FROM `test`";
$result = $conn->query($sql1);

if ($result->num_rows > 0) {
// output data of each row
while ($row1 = $result->fetch_assoc()) {
?>
<div class="readmore">
<a href="page.php?id=<?php echo $row1['Title']; ?>">
<h2 class="post-heading"><?php echo $row1['Title']; ?>
</a>
</h2>
<small>
posted on <?php echo $row1['Date']; ?>
</small>
<div class="p">
<p>
<?php echo $row1['Text']; ?>
</p>
</div>
</div>
<?php
}}
?>

</div>
<div class="recently-posted">
<h3 class="title-heading">Recently posted</h3>
<?php
$sql2 = "SELECT * FROM `test` LIMIT 5";
$result2 = $conn->query($sql2);

if ($result2->num_rows > 0) {
while ($row2 = $result2->fetch_assoc()) {
?>
<a class="recently-links" href="page.php?id=<?php echo $row2['Title']; ?>"><?php echo $row2['Title']; ?></a><br><br>

<?php
}} ?>
</div>
</div>
</header>
<footer>
<div class="footer-info">
<h5 class="copyright">
&copy;2021-20<?php echo date("y"); ?> All Rights Reserved.<br>
This site designed by <i>Coolcollinsitek, inc </i>
</h5>
<center>
<div class="social-media">
<a href="https://www.facebook.com/profile.php?id=100089145306800"><img src="http://Collins.42web.io/cooliteks/facebook.jpg" class="icon"></a>
<a href="https://twitter.com/Cooliteks"><img src="http://Collins.42web.io/cooliteks/twitter.jpg" class="icon"></a>
<a href="https://pin.it/3WofyfR"><img src="http://Collins.42web.io/cooliteks/pinterest.jpg" class="icon"></a>
</div>
</center>

</div>

<div class="useful-links">
<h4>useful links</h4>
<a class="f-links" href="http://Collins.42web.io/cooliteks/privacy-policy.html">privacy policy</a> <i>|</i>
<a class="f-links" href="http://Collins.42web.io/cooliteks/terms-and-conditions.html">terms and conditions</a> <i>|</i>
<a class="f-links" href="http://Collins.42web.io/cooliteks/site-map.php">site map</a><i>|</i>
<a class="f-links" href="http://Collins.42web.io/cooliteks/mail.html">contact us</a> <i>|</i>
<a class="f-links" href="http://Collins.42web.io/cooliteks/about.html">about us</a> <i>|</i>
</div>
</footer>
</body>
</html>