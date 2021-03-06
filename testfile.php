<!DOCTYPE html>
<html >
<head>
  <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<style>
  html{
    scroll-behavior: smooth;
  }
body {
  margin: 0;
  background: url(musem.jpg);
  background-size: cover;
  opacity:none;
  background-repeat: no-repeat;
  background-size: cover;
  background-color: black;
  background-attachment: fixed;
  overflow: auto;
}

element {
    -ms-overflow-style: none; /* for Internet Explorer, Edge */
    scrollbar-width: none; /* for Firefox */
    overflow-y: scroll; 
}

element::-webkit-scrollbar {
    display: none; /* for Chrome, Safari, and Opera */
}

/*Remove the below line to show scrollbar on page*/

::-webkit-scrollbar {
  width: 1px;
}


.topnav {
  background-color: #333;
  position: fixed;
  top: 0;
  width: 100%;
  display: block;
  transition: top 0.3s;
  overflow: hidden;
  background-color: black;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 14px;
  text-decoration: none;
  font-size: 16px;  
}

.topnav a:hover {
  background-color: cyan;
  color: black;
}

.topnav-right {
  float: right;
}

#container
{
    position:relative;
    width:900px;
    padding:0px;
    margin:0px auto;
    height:703px;
    z-index:10;
}

#button1:hover {
  background-color: #555555;
  color: white;
}


/*Virtual exhibitions and events & Virtual visit*/
  .card {
  max-width: 230px;
  text-align: center;
  font-family: sans-serif;
  display: inline-block;
  padding: 15px;
  background-color:white;
}
.price {
  color: darkblue;
  font-size: 22px;
}

.card button:hover {
  color: white;
}

.i:hover{
  opacity: 0.9;
}
#container
{    
}

#container DIV
{ 
}

.hideme
{
    opacity:1;
}

</style>

<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<<script>
    $(function(){  // $(document).ready shorthand
  $('.monster').fadeIn('fast');
});

$(document).ready(function() {
    
    /* Every time the window is scrolled ... */
    $(window).scroll( function(){
    
        /* Check the location of each desired element */
        $('.hideme').each( function(i){
            
            var bottom_of_object = $(this).position().top + $(this).outerHeight();
            var bottom_of_window = $(window).scrollTop() + $(window).height();
            
            /* If the object is completely visible in the window, fade it it */
            if( bottom_of_window > bottom_of_object ){
                
                $(this).animate({'opacity':'1'},500);
                    
            }
            
        }); 
    
    });
    
});
  </script>

<script>
var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("topnav").style.top = "0";
  } else {
    document.getElementById("topnav").style.top = "-50px";
  }
  prevScrollpos = currentScrollPos;
}
</script>
-->
</head>
<body>

<div class="topnav">
  <a class="active" href="#museum">Museum</a>
  <a href="#visit">Visit</a>
  <a href="#collection">Collection</a>
  <a href="#exhibitions">Exhibitions & Events</a>
  <div class="topnav-right">
    <a href="contactus.html">Contact</a>
    <a href="#about">About</a>
  </div>
</div>

<div id="container">
<!-- content panels here -->
</div>
<br>

  <div id="monster">
<div class="hideme" style="background-color: black;">
<br>
<p style="color: white;text-align: center; border-radius: 4px; font-size: 200%;">Discover 10 Thousands years of human history.</p>

<hr style="height:2px;width: 50%; border-width:0;color:gray;background-color:gray">
<br><br>
<h1 style="color: white; padding-left: 2%;">Explore Countries</h1>
<br><br>

<div class="card" style="margin-left: 5%;">

<!--  <img src="workplace.jpg" alt="Workplace" usemap="#workmap" width="400" height="379">

<map name="workmap">
  <area shape="circle" coords="337,300,44" alt="Cup of coffee" href="coffee.htm">
</map>
-->

  <a href="egyptall.html" style="text-decoration: none; color: black;"><img onclick="" src="egyptmain.webp" alt="Workplace" usemap="#workmap" class="i" height="274" width="230">
  <h1>Egypt</h1>
    <hr>
  <p class="price">3100 B.C</p></div></a>


  <div class="card" style="margin-left: 5%;">
  <a href="americaall.html" style="text-decoration: none; color: black;"><img src="mayacivil.jpg" height="274" width="200"  class="i" style="width:100%">
  <h1>America</h1>
    <hr>
  <p class="price">1800 B.C</p></div></a>

  <div class="card" style="margin-left: 5%;">
  <a href="#" style="text-decoration: none; color: black;"><img src="greekcivil.jpg" height="274" width="200" class="i" style="width:100%">
  <h1>Greek</h1>
    <hr>
  <p class="price">600 B.C</p></div></a>

  <div class="card"  style="margin-left: 5%;">
  <a href="#" style="text-decoration: none; color: black;"><img src="harrapancivil.jpg" height="274" width="200" class="i" style="width:100%">
  <h1>Harrapan</h1>
    <hr>
  <p class="price">2500 B.C</p></div></a>

  <br><br><br><br><br>
</div>
 <br><br><br>
<!-- work in progress for virtual visit -->
<h1 style="color: white;"></h1>
<br><br>
 <div align="center">
   <button style="border-radius: 30px; align-content: center; padding: 1%; font-size: 30px;">Donate</button>
 </div>
</div>

</div>

<br><br><br><br><br>
<div>
  <div style="background-color: black;">
<br>
<p style="color: white;text-align: center; border-radius: 4px; font-size: 200%;">Discover one Million years of Animal History</p>

<hr style="height:2px;width: 75%; border-width:0;color:gray;background-color:gray">
<br><br>
<h1 style="color: white; padding-left: 2%;">EXTINTED ANIMALS</h1>
<br><br>

<a href="animals.html"  style="color: black;"><div class="card" style="margin-left: 5%;">
  <img src="mammoth.jpg" class="i" height="274" width="240">
  <h1>LAND-ANIMALS</h1>
  <hr>
  <p class="price">EXTINTED</p></div></a>


  <a href="marine animals.html"  style="color: black;"><div class="card" style="margin-left: 5%;">
  <img src="Dunkleosteus.jpg" class="i" height="274" width="240">
  <h1>MARINE-ANIMALS</h1>
  <hr>
  <p class="price">EXTINTED</p></div></a>

  <a href="flying.html" style="color: black;"><div class="card" style="margin-left: 5%;">
  <img src="flyingsquirell.jpg" class="i" height="274" width="240">
  <h1>FLYING-ANIMALS</h1>
  <hr>
  <p class="price">EXTINTED</p></div></a>

   <a href="jurassic.html" style="color: black;"><div class="card"  style="margin-left: 5%;">
  <img src="dracorex.jpg" class="i" height="254" width="240">
  <h1>JURASSIC-</h1>
  <h1>AGE</h1>
    <hr>
  <p class="price">EXINTED</p></div></a>

 

<h1 style="color: white;">DANGER ZONE</h1>
<br><br>
  <a href="#" style="color: black;"><div class="card"  style="margin-left: 5%;">
  <img src="dracorex.jpg" class="i" height="254" width="240">
  <h1>ENDANGERED</h1>

 </div>

  <a href="#" style="color: black;"><div class="card"  style="margin-left: 5%;">
  <img src="dracorex.jpg" class="i" height="254" width="240">
  <h1>ENDANGERED</h1>
  </div>
 
     <a href="#" style="color: black;"><div class="card"  style="margin-left: 5%;">
  <img src="dracorex.jpg" class="i" height="254" width="240">
  <h1>ENDANGERED</h1>
</div>


<!--
<div style="background-color: black;">
<br>
<p style="color: white;text-align: center; border-radius: 4px; font-size: 200%;">Virtual Visit</p>

<hr style="height:2px;width: 15%; border-width:0;color:gray;background-color:gray">
<br><br>
<h1 style="color: white; padding-left: 2%;">Revolutionary way to visit musuem.</h1>
<br><br>

<div class="card" style="margin-left: 5%;">
  <img src="musem.jpg" class="i" style="width:100%">
  <h1>toachan</h1>
    <hr>
  <p class="price">toachan</p></div>

  <div class="card" style="margin-left: 5%;">
  <img src="musem.jpg" class="i" style="width:100%">
  <h1>toachan</h1>
    <hr>
  <p class="price">toachan</p></div>

  <div class="card" style="margin-left: 5%;">
  <img src="musem.jpg" class="i" style="width:100%">
  <h1>toachan</h1>
    <hr>
  <p class="price">toachan</p></div>

  <div class="card"  style="margin-left: 5%;">
  <img src="musem.jpg" class="i" style="width:100%">
  <h1>toachan</h1>
    <hr>
  <p class="price">toachan</p></div>

 

<h1 style="color: white;">TOACHAN</h1>
<br><br>
 <div class="card" style="margin-left: 10%; ">
  <img src="musem.jpg" class="i" style="width:100%">
  <h1>toachan</h1>
    <hr>
  <p class="price">toachan</p></div>
   <div class="card" style="margin-left: 10%; ">
  <img src="musem.jpg" class="i" style="width:100%">
  <h1>toachan</h1>
    <hr>
  <p class="price">toachan</p></div>
   <div class="card" style="margin-left: 10%; ">
  <img src="musem.jpg" class="i" style="width:100%">
  <h1>toachan</h1>
    <hr>
  <p class="price">toachan</p>
</div><br><br><br>


</div>
-->

</div>

</body>
</html>
