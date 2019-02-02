<?php
$conn = mysqli_connect("localhost","id8084789_rawmaterials","NikhilKumar1#","id8084789_nikhilkumar9764");
if (! $conn)
{
    die("Connection failed: " .mysqli_connect_error());
} 
?>
<html>
  <head>
    <title>LCO ORANGE JUICE</title>
    <link rel="icon" href="lco_logo.png" type="image/png">
    <style type="text/css">
   body {
    background: url(juice_background.jpg) no-repeat center center fixed;
    -webkit-background-size: cover; /* For WebKit*/
    -moz-background-size: cover;    /* Mozilla*/
    -o-background-size: cover;      /* Opera*/
    background-size: cover;         /* Generic*/
}
      #imges
      {
        width:140px;
        height:140px;
      }
      #header-box
      {
        width:1750px;
        height:170px;
      }
      #green-box
      {
        width:1350px;
        height:140px;
        position:relative;
        top:-130px;
        left:140px;
        border:2px ridge black;
      }
      h1
      {
        color:#C4F8C8;
        position:relative;
        top:-40px;
        left:-50px;
        font-size:360%;
      }
      #qwe
      {
        color:#C4F8C8;
        position:relative;
        top:-83px;
        font-size:150%;
      }
      .wrapper
      {
        width:300px;
      }
      #red-marquee
      {
        width:1500px;
        height:36px;
        background-color:maroon;
        margin-left:6px;
      }
      #mar-text
      {
        font-size:20px;
        margin:6px 3px;
      }
      h2
      {
        font-size:20px;
      }
      #usn
      {
        font-size:200%;
      }
      #usn-box
      {
        font-size:24px;
        position:relative;
        top:-4px;
      }
      #button-submit
      {
        font-size:30px;
      }
      B
      {
         left:100px;
      }
    </style>
  </head>
  <body>
    <header>
      <div id="header-box" name="header-box" style="background-color:rgb(255,69,0);">
      <img src="lco_logo.png" id="imges">
        <div id="green-box" name="gr-box" style="background-color:#FF4500;">
          <h1><center>LCO JUICE CENTRE</center></h1>
      <center id="qwe">(LCO Juice Centre,one of the finest juice serving agencies<br>
         in the country has several branches located at various spots 
        in and around Bengaluru)<br>
         <B>REGISTERED ADDRESS:</B> 118, Koramangala Industrial Area, Koramangala 7th Block, Bengaluru-543321.</center>
      </div>
      </div>
      </header>
    <h2>LCO JUICE SHOP WEBSITE:</h2>
      <div id="red-marquee">
        <marquee direction="left" id="mar-text" behavior="scroll" onMouseOver="document.all.mar-text.stop()" onMouseOut="document.all.mar-text.stop()" style="color:white;">Juices served at our outlets are made out of fresh oragnic farm fruits.</marquee>
      </div>
      <fieldset>
        <legend>Website Contents:</legend>
        <center>
          <form method="post">
            <B>1).</B><a href="listbranch.php">LIST OF OUR BRANCHES</a><br><br>
            <B>2).</B><a href="orderjuice.php">ORDER FRESH JUICE </a><br><br>
              <p>&copy;2019,LCO JUICE FRAMEWORKS</p>
        </form>
           </center>
        <legend></legend>
    </fieldset>
  </body>
</html>