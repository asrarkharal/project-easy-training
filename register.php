 
<!DOCTYPE html>
<html lang="en">
<head>
<link href="css/style-register.css" rel="stylesheet" type="text/css">
<link href="css/style-homepage.css" rel="stylesheet" type="text/css">
<link href="css/promotionFade.css" rel="stylesheet" type="text/css">
<link href="css/main.css" rel="stylesheet" type="text/css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<?php include('include/header.php'); ?>
</head>
<body> 
   

<main class="containerR">
 <section class="topBar">
 <div class= "navi"  >
         <div class="topnav" id="myTopnav">
  <a href="index.php" class="active">Home</a>
  <a href="#">Be Inspired</a>
  <a href="#">Be Cozy</a>
  <a href="#">Be Strong</a>
  <a href="register.php">Join us</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i></a>
  
</div>
</div>
         <div class="logo">
          	<img class="img-strech" src="img/logo-bootStrap2.png"/>  
        </div>
       </section> 
 
      <section class="slide">
      <div class="slider">
	<ul>
		<li>
			<div class="image_header">
				<a href="#">Text Promotion 1</a>
			</div>
			<a href="#">
				<img src="img/slide1.jpg"/>
			</a>
		</li>
		<li>
			<div class="image_header">
				<a href="#">Text Promotion 2</a>
			</div>
			<a href="#">
				<img src="img/slide2.jpg"/>
			</a>
		</li>
		<li>
			<div class="image_header">
				<a href="#">Text Promotion 3</a>
			</div>
			<a href="#">
				<img src="img/slide3.jpg"/>
			</a>
		</li>
		<li>
			<div class="image_header">
				<a href="#">Text Promotion 4</a>
			</div>
			<a href="#">
				<img src="img/slide4.jpg"/>
			</a>
		</li>
	</ul>
</div>
      </section>



	  
	  
      

      <section class="registerArea">
         <div><h1> Be member with us</h1></div> 
         <p class="line-break margin-top-10"></p>
	 <div>
	 <form name="contactus" method="get">		 
	 <fieldset>
		 <legend>EMAIL SIGN UP FORM</legend>	 
	<div class="wrapper">
  <div class="grid-item1">Please complete all information below:</div>
 <div class="grid-item">
	
	  <label for="firstname" required>Your name</label>
	  <label><input type="text" name="firstname" id="firstname" value="" placeholder="write your firstname here" required> </label>
	  <label><input type="text" name="lastname" id="lastname" value="" placeholder="write your lastname here"> </label>
	  <br>
</div>
		<div class="grid-item"> 
			Your Email : <input type="email" name="emailaddress" value="">
	<br>
	  		Your telephone number : 
		 	<input type="text" name="telefon" id="telefon" value="" placeholder="write your telephone here please"> 
		</div>
		<div class="grid-item">
			  What kind of being healthy are you?
	<select name="subject">
    <option value="subject1">I am a new beginner , want to be more healthy</option>
    <option value="subject2">I am a fitness lover</option>
    <option value="subject3">I am a yoga lover</option>
    <option value="subject4">I love all kind of sports</option>
  </select>
		</div>		 
<div class="grid-item">More comment to us <br>
<textarea rows="4" cols="50" name="comment" form="contactusform">
Enter more request here...</textarea>
</div>
<div class="grid-item">
	  <input class="button2" type="submit" value="Register me" >
	  <input class="button2" type="reset" value="Reset"> 
</div>
	</div>
		 </fieldset>
	  </form>
	</div>



	 


  

      </section>

	  <section class="boxPromotion">
        
		<div class="container2" >
		   <img src="img/promotion1.jpg" alt="Promotion" class="image img-strech"  >
		 <div >
		   <div class="promotion middle"><a href="#">Click to see more</a></div>
		 </div>
		 </div>
		 <div class="container2" >
		   <img src="img/promotion3.jpg" alt="Promotion" class="image img-strech"  >
		 <div>
		   <div class="promotion middle"><a href="#">Click to see more</a></div>
		 </div>
		 </div>
		 <div class="container2" >
		   <img src="img/promotion4.jpg" alt="Promotion" class="image img-strech"  >
		 <div >
		   <div class="promotion middle"><a href="#">Click to see more</a></div>
		 </div>
		 </div>
		 <div class="container2" >
		   <img src="img/promotion5.jpg" alt="Promotion" class="image img-strech"  >
		 <div  >
		   <div class="promotion middle"><a href="#">Click to see more</a></div>
		 </div>
		 </div>  
	   </section>
 
	   <section class="box10"> 
 
 <footer class="box10">	
		 <div class="box6" > 		
			   <div  > 
			   <img src="img/logoEhealthy-footer.png"/><br>  <h5>  E-healthy.com <i>BE HEALTHY   </i><br> Åsögatan 117, Stockholm	 </h5>
 
			 </div>
				   
			  
		 <div class="iconSocial"> 
		 <a href="#!"><img src="img/online_social_media_facebook-128.png"/>  </a>
		 <a href="#!"> <img src="img/twitter_online_social_media-128.png"/>  </a>
		 <a href="#!"> <img src="img/instagram_online_social_media_photo-128.png"/>  </a>
		 <a href="#!"> <img src="img/online_social_media_google_plus-128.png"/>
		   </div>
		 </div>
	 
				
		 <div class="box7"  >
			 <h3>Categories</h3>
			 <ul >
			   <li><a href="#!">Be Inspired</a></li>
			   <li>
				 <a href="#!">Be Cozy</a>
			   </li>
			   <li>
				 <a href="#!">Be Strong</a>
			   </li>
			 </ul>
		 </div>
 
 
 
		   <div class="box8"  >
			 <h3>Quick Links</h3>
			 <ul  >
			   <li><a href="#!">About Us</a></li>
			   <li><a href="#!">Contact Us</a></li>
			   <li>
				 <a href="#!">Work with us</a>
			   </li>
			   <li>
				 <a href="register.php">Join us</a>
			   </li>
			 </ul>
		   </div>
					 
		   </div>
		   <div class="box9" >
			   Copyright &copy; 2020 All Rights Reserved by
			   <a href="#">E-Healthy.com</a>
		   </div>
		
		 </footer> 
	   </section>
 
 
	 </main>
 
	 
 
 
	 <script>
 function myFunction() {
   var x = document.getElementById("myTopnav");
   if (x.className === "topnav") {
	 x.className += " responsive";
   } else {
	 x.className = "topnav";
   }
 }
 </script>
 
 
 </body>
 </html>