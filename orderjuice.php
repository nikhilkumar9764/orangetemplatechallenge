<?php
session_start();
$link= mysqli_connect("localhost","id8084789_nik9764","NikhilKumar1#","id8084789_juicedb");
if (! $link)
{
    die("Connection failed: " .mysqli_connect_error());
} 
if(array_key_exists('submitbutton',$_POST))
{
    $query="INSERT INTO `orderjuice` (`bname`,`jtype`,`cname`,`caddress`,`mno`,`emailadd`) VALUES ('".mysqli_real_escape_string($link,$_POST['bchoice'])."', '".mysqli_real_escape_string($link,$_POST['jchoice'])."', '".mysqli_real_escape_string($link,$_POST['nameentry'])."', '".mysqli_real_escape_string($link,$_POST['addentry'])."','".mysqli_real_escape_string($link,$_POST['mobileentry'])."','".mysqli_real_escape_string($link,$_POST['mailentry'])."')";
    mysqli_query($link,$query);
    $_SESSION['branch']=$_POST['bchoice'];
    $_SESSION['juice_ch']=$_POST['jchoice'];
    $_SESSION['name-entered']=$_POST['nameentry'];
    $_SESSION['add-entry']=$_POST['addentry'];
    $_SESSION['mobile-entry']=$_POST['mobileentry'];
    $_SESSION['mailobt']=$_POST['mailentry'];
    $query2="SELECT * FROM orderjuice WHERE cname='".mysqli_real_escape_string($link,$_POST['nameentry'])."'";
    $result=mysqli_query($link,$query2);
    $finalone=mysqli_fetch_array($result);
    $_SESSION['oidobt']=$finalone['oid'];
      header("Location:orderstatus.php");
}

?>
<html>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
        left:-50px;
        top:-20px;
        font-size:360%;
      }
      #qwe
      {
        color:#C4F8C8;
        position:relative;
        top:-40px;
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
           <center>
                  <legend><b><u>JUICE DELIVERY DETAILS:</u></b></legend>
          <form method="post">
          <label id="usn" for="branch_choice"><strong>Branch:</strong></label>
          
          <select id="branch_choice" name="bchoice" required>
              <option>AREKERE</option>
              <option select>BASAVANGUDI</option>
              <option>BTM LAYOUT</option>
              <option>HBR LAYOUT</option>
              <option>JALAHALLI CROSS</option>
              <option>HSR LAYOUT</option>
              <option>INDIRANAGAR</option>
          </select>
          <br><br>
          
          <label id="usn" for="branch_choice"><strong>Type of Juice:</strong></label>
          
          <select id="juice_choice" name="jchoice" required>
              <option>APPLE</option>
              <option default>ORANGE</option>
              <option>LITCHI</option>
              <option>MANGO</option>
              <option>GUAVA</option>
              <option>BLUEBERRY</option>
              <option>PINEAPPLE</option>
          </select>
          <br><br>
          
          <label id="usn" for="usn-box"><strong>Customer Name:</strong></label>
          <input type="text" id="usn" name="nameentry" placeholder="For ex:YZX" style="border-radius:6px;" autofocus required><br><br>
          
          <label id="usn" for="usn-box"><strong>Address:</strong></label>
          <textarea id="usn" name="addentry" placeholder="For ex:street no,street name city" style="border-radius:6px;" rows="3" autofocus  required></textarea><br><br>
          
          <label id="usn" for="usn-box"><strong>Mobile No:</strong></label>
          <input type="number" id="usn" name="mobileentry" placeholder="For ex: 98XXXXXXXX" style="border-radius:6px;" autofocus  required><br><br>
          
          <label id="usn" for="usn-box"><strong>Email Address:</strong></label>
          <input type="email" id="usn" name="mailentry"  placeholder="For ex:asdf@xyz.com" style="border-radius:6px;" autofocus  required><br><br>
          
         <button type="submit" name="submitbutton" id="button-submit" class="btn btn-success" >SUBMIT AND PLACE ORDER</button><br>
        </form>
        </center>
        <legend></legend>
    </fieldset>
  </body>
</html>