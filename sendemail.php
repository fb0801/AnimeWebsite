<!DOCTYPE html>
<html lang="en"><!--declare the language of the page-->
<head>
<title>Anime Addict-Feedback</title><!--Display as site tab title-->
<link rel="shortcut icon" type="image/x-icon" href="images/anime_logo.ico"> <!--adds a image to the title-->

<link rel="stylesheet" type="text/css" href="anime_style.css">
			<!-- link css and html-->
<meta name ="viewport" content="width=device-width, initial-scale=1.0">
<!--make the webpage fit the screen-->
</head>
<body>

<div class="dif">

<a href="index.html"><img class ="logo" src="images/logo.jpg" alt="Logo" title="return to mainpage"></a>
<h1 id="no_head">Anime Addict</h1>
<br><br><br><br></div>
<div class="navbar">
<a href="index.html">Home</a>
<a href="why_anime.html">Why you should watch anime?</a>
<a href="anime.html">Anime</a>
<div class="dropdown">
    <button class="dropbtn">Books 
    </button>
    <div class="dropdown-content">
	  <a href="books.html">Books</a>
      <a href="manga.html">Manga</a>
      <a href="light_novel.html">Light novel</a>
      <a href="webtoons.html">Webtoons</a>
    </div>
	</div> 
<a href="service.html">Anime services</a>
<a href="feedback.html">Feedback</a>
<img id="theme" src="images/moonedit.jpg" onclick="changeBGC('#000000')" ondblclick="changeBGC('#ffffff')" title="change theme" alt="change theme">
<img class="theme_2" src="images/website_font.jpg" onclick="changesize()" ondblclick="changeback()" title="change font" alt="change font">
</div>
<h1 id="anime_head">Anime Addict Feedback</h1>
<div class="area">
<?php

// FIX THIS
$message = $_POST['message'];

// CHANGE THE LINE BELOW TO AN EMAIL ADDRESS YOU RECEIVE MESSAGES AT.
$toaddress = "farhanbhattilsbu@gmail.com";    // PLEASE don't leave noOne@NoWhere in this - it won't work...
$rep=$_POST['useremail'];
// create a subject line for the email - THIS SHOULD GIVE THE NAME ENTERED INTO THE FORM
$subjectline = "Message from" .$_POST['firstname'];
$sub= "Message from Anime Addict";
// set the from address for the email; this is required
$headers = "from: Admin@AnimeAddict.com\n"; // Daydream will send an email only if this header is present

$success = false; 
// Send the email. The mail command is commented out. Remove the // to activate it.
// It is commented out because if the server does not support sending mails it might crash the script.
$success = mail( $toaddress, $subjectline, $message, $headers);
$success=mail($rep, $sub, $message, $headers);


// THIS TEXT SHOULD ALSO GIVE THE NAME ENTERED BY THE USER, NOT John Smith.
print "<p>Thank you ".$_POST['firstname'].", the following message has been sent to the website owner, a version will be sent to you:</p>";

print "<p><b>Subject:</b> ".$subjectline."</p>\n";
print "<p>".$message."</p>\n";
print "<d/div>\n";

if ( !$success) {
  print "<h2>Error: Message not sent!</h2>\n";
}

?>
</div>
<div class="bottom_sec">
<p>&copy; This is a demonstration website for LSBU (London Southbank University) all images and text is from, wikipedia, myanimelist, Crunchyroll, tenor, mangarock</p>
</div>

<script>
function changeBGC(color){
if (color=='#000000'){
		document.body.style.backgroundColor = color;
		document.getElementById('theme').src='images/sunedit.jpg';
		document.getElementById('anime_head').style.color='white';
		
	}else{
		document.body.style.backgroundColor = color;
		document.getElementById('theme').src='images/moonedit.jpg';
		document.getElementById('anime_head').style.color='black';
		document.getElementById('anime_intro').style.color='black';
		
  //document.getElementById("theme").style.display= "block";}
  }}
function changesize(){
// loop through the document to find all p and change the size
var i,text= document.querySelectorAll('p');
for (i=0; i< text.length; i++){ 
 text[i].style.fontSize='20px';
		
}}
function changeback(){
// loop through the document to find all <p> and change the size back
var i,text= document.querySelectorAll('p');
for (i=0; i< text.length; i++){ 
 text[i].style.fontSize='16px';
		
}}
</script>

</body>
</html>