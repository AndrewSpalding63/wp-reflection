<?php
/**
 * Displays the footer widget area
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */
?>
<!-- Whubs.com - Download Free Responsive Website Layout Templates designed on HTML5 CSS3,Bootstrap which are 100% Mobile friendly. w3Hubs all Layouts are responsive cross browser supported, best quality world class designs. -->
<!DOCTYPE html>
<html>
<head>
	<title>Simple Footer In Html - w3hubs.com</title>
<meta charset="UTF-8">
  <meta name="description" content="Free Web tutorials">
  <meta name="keywords" content="HTML,CSS,XML,JavaScript">
  <meta name="author" content="W3HUBS">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="footer.css">
</head>
<body>

<style>
	


*{
	margin: 0px;
	padding: 0px;
	box-sizing: border-box;
}

h1 {
	position: absolute;
	top: 40%;
	left: 50%;
	transform: translate(-50%,-50px);
	margin: 0px;
	padding: 0px;
	text-align: center;
	font-size: 10em;
	color: #fff;
	text-transform: uppercase;
	text-shadow: 0 5px 10px rgba(0,0,0,1);
	mix-blend-mode: overlay;
	font-family: 'Roboto Slab', serif;
	box-shadow: 0 5px 10px rgba(0,0,0,1);
	text-decoration: none;
}
.w3hubs-footer{
	width: 100%;
	height: auto;
	margin: auto;
	background:#272727;
	padding: 20px 0px;
	
}
.w3hubs-icon{
	width: 100%;
	height: auto;
	margin: auto;
}
.w3hubs-icon ul{
	margin: 0px;
	padding: 0px;
	text-align: center;
}

.w3hubs-icon ul li{
	display: inline-block;
	width: 50px;
	height: 50px;
	margin: 0px 10px;
	border-radius: 100%;
	background:#7DCEA0; 
}
.w3hubs-icon ul li a{
	text-decoration: none;
	color: #272727;
	font-size: 25px;
	display: block;
}
.w3hubs-icon ul li a i{
	line-height: 50px;
}
.w3hubs-icon ul li:hover{
	background: #e67e22;
}
.w3hubs-icon ul li a:hover >i{
	transform: scale(1.6) rotate(25deg);
}
.w3hubs-nav{
	width: 100%;
	height: auto;
	margin: auto;
	margin-top: 25px;
}
.w3hubs-nav ul{
	margin: 0px;
	padding: 0px;
	text-align: center;
}


.w3hubs-nav ul li{
	display: inline-block;
	margin: 10px 20px;	 
}
.w3hubs-nav ul li a{
	text-decoration: none;
	outline: none;
	font-family: 'Roboto Slab', serif;
	font-size: 20px;
	color: #fff;
	font-weight: bold;
	text-transform: uppercase;
	letter-spacing: 1px;
}
.w3hubs-nav ul li a:hover{
	color:  #e67e22;
}

.w3hubs-nav1{
	width: 100%;
	height: auto;
	margin: auto;
	margin-top: 15px;
}
.w3hubs-nav1 ul{
	margin: 0px;
	padding: 0px;
	text-align: center;
}


.w3hubs-nav1 ul li{
	display: inline-block;
	margin: 0px 20px;	 
}
.w3hubs-nav1 ul li a{
	text-decoration: none;
	outline: none;
	font-family: 'Roboto Slab', serif;
	font-size: 20px;
	color: #fff;
	font-weight: bold;
	text-transform: uppercase;
	letter-spacing: 1px;
}
.w3hubs-nav1 ul li a:hover{
	color:  #e67e22;
}
.w3hubs-nav2{
	width: 100%;
	height: auto;
	margin: auto;
}
.w3hubs-nav2 ul{
	
	text-align: center;
}

.w3hubs-nav2 ul li{
	
	width: 50px;
	height: 50px;
	margin: 0px 10px;
	border-radius: 100%;
	background:#fff; 
}
.w3hubs-nav2 ul li a{
	text-decoration: none;
	color: #272727;
	font-size: 25px;
	display: block;
}
.w3hubs-nav2 ul li a i{
	line-height: 50px;
}
.w3hubs-nav2 ul li:hover{
	background: #e67e22;
}
.w3hubs-nav2 ul li a:hover >i{
	transform: scale(1.6) rotate(180deg);
}
.footer-end{
	width: 100%;
	height: auto;
	margin: auto;
	background: #7DCEA0;
	padding: 10px;
	font-family: 'Roboto Slab', serif;
	font-size: 16px;
	text-align: center;
}
.footer-end p{
	font-family: 'Roboto Slab', serif;
	font-size: 16px;
	text-align: center;
	color: #fff;
	font-weight: bold;
	letter-spacing: 2px;

}
.footer-end a{

text-decoration: none;
color: #fff
}
.footer-end a:hover{
	color:  #e67e22;
}

@media(max-width:691px ){
.w3hubs-nav1 ul li a,.w3hubs-nav ul li a{
	font-size: 16px;
}
}
@media(max-width:604px ){
.w3hubs-nav1 ul li a,.w3hubs-nav ul li a{
	font-size: 14px;
}
.w3hubs-nav ul li{
	padding: 0px ;
}
}
@media(max-width:559px ){

.w3hubs-nav1 ul li a,.w3hubs-nav ul li a{
	font-size: 13px;
}

}
@media(max-width:539px ){
.w3hubs-nav1 ul li a,.w3hubs-nav ul li a{
	font-size: 11px;
}
.w3hubs-nav ul li{
	margin: 5px 20px;
}
.w3hubs-nav ul li.p1 {
    padding-top: 10px;
}
}
@media(max-width:380px ){
	.w3hubs-nav ul li,.w3hubs-nav1 ul li{
		display: block;
		padding: 5px;
	}
.w3hubs-nav2 ul li{
	display: none;
}
.w3hubs-icon ul li a i {
    line-height: 38px;
}
.w3hubs-icon ul li a{
	font-size: 20px;
}
.w3hubs-icon ul li{
width: 40px;
    height: 40px;
}
}
@media(max-width: 375px){
	.w3hubs-nav ul li.p1 {
    padding-top: 0px;
}
}

	
</style>

   <div class="w3hubs-footer">
   	  
   	  <div class="w3hubs-icon">
   	  	<ul>
   	  		<li><a href="#" target="black"><i class="fa fa-facebook"></i></a></li>
   	  		<li><a href="#" target="black"><i class="fa fa-google-plus"></i></a></li>
   	  		<li><a href="#" target="black"><i class="fa fa-twitter"></i></a></li>
   	  		<li><a href="#" target="black"><i class="fa fa-instagram"></i></a></li>
   	  		<li><a href="#" target="black"><i class="fa fa-youtube-play"></i></a></li>
   	  	</ul>
   	  </div>
   	  <div class="w3hubs-nav">
   	  	<ul>
   	  		<li><a href="#">Home</a></li>
   	  		<li><a href="#">About</a></li>
   	  		<li><a href="#">Services</a></li>
   	  		<li><a href="#">Gallery</a></li>
   	  		<li class="p1"><a href="#">Contact Us</a></li>
   	  		

   	  	</ul>
   	  </div>
   	  <div class="w3hubs-nav1">
   	  	<ul>
   	  		<li><a href="#">Product</a></li>
   	  		<li><a href="#">new</a></li>
   	  		<li><a href="#">Blog</a></li>
   	  		<li><a href="#">Media</a></li>
   	  		
   	  		
   	  	</ul>
   	  </div>

   	  <div class="w3hubs-nav2">
   	  	<ul>
   	  		
   	  		<li><a href="#" title="To Top"><i class="fa fa-chevron-down"></i></a></li>
   	  		
   	  	</ul>
   	  </div>
   </div>

   <div class="footer-end">
   	  <p>Desing By: <a href="">Faizi</a></p>
   </div>
</body>
</html>
