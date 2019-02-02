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
        <legend>Juice Centre Locations:</legend>
        <center>
              <center>
             <table style="width:100%;background-color:grey" cellpadding="3" border="5" >
  <tr  width="20">
    <th>LOCATION</th>
    <th>COMPLETE ADDRESS</th> 
    <th>PHONE NUMBER</th>
  </tr>
  <tr>
    <td><?php echo "AREKERE"?></td>
    <td><?php echo "No 7, Ground Floor, Near RTO, 
SRI M VISHWASARAIAH Road (80ft Road), 
Nyanappana Halli,2nd Phase, 
6th stage Arekere, Hulimavu, DLF City Road, Near Arekere Saibaba Temple, OFF BANNARGHATTA Road
Bangalore 560076 (Opp to Nano Hospital)" ?></td>
    <td><?php echo "9901119407" ?></td>
  </tr>
  <tr>
    <td><?php echo "BASAVANGUDI"?></td>
    <td><?php echo "Bo. 20, EAT. Road ,
Near bms womens college ,
Basavanagudi 
BANGALORE-560004" ?></td>
    <td><?php echo "080-26608239, 7760116500, 9740168239," ?></td>
  </tr>
  <tr>
    <td><?php echo "BTM LAYOUT"?></td>
    <td><?php echo "773, Near Udupi Garden
16th main,
BTM LAYOUT 2nd stage Bangalore-560076" ?></td>
    <td><?php echo "080-26780727 / 9243010105" ?></td>
  </tr>
  <tr>
    <td><?php echo "HBR LAYOUT"?></td>
    <td><?php echo "No 111/B 'TUSCUN SIGNATURE',
Ground floor, 1st Main, 1st Stage, 1st Block, HBR Layout,
Opp Rama Temple Complex,
Kalyan Nagar Post,Bangalore 560043" ?></td>
    <td><?php echo "080-22905333/25445003" ?></td>
  </tr>
  
  <tr>
    <td><?php echo "HSR LAYOUT"?></td>
    <td><?php echo "NO 218, 9TH MAIN 6th SECTOR,
NEAR LAWRENCE SCHOOL, 
HSR LAYOUT, 
BANGALORE 560102" ?></td>
    <td><?php echo "95906 07750" ?></td>
  </tr>
  
  <tr>
    <td><?php echo "INDIRANAGAR"?></td>
    <td><?php echo "# 60, APPAREDDY PALYA,
DOUBLE ROAD
INDIRANAGAR
Bangalore - 560038" ?></td>
    <td><?php echo "08025269797" ?></td>
  </tr>
  
  <tr>
    <td><?php echo "JALAHALLI CROSS"?></td>
    <td><?php echo "No. 10/2 & 10/5, NH-4, Jalahalli Cross,
Next To Metro Station,
Bangalore- 560 057" ?></td>
    <td><?php echo "Phone no:080-65333428
Mob: 7795051880" ?></td>
  </tr>
</table>
        </center>
        <legend></legend>
    </fieldset>
  </body>
</html>