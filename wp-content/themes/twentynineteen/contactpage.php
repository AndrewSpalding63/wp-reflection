<?php /* Template Name: ContactPage */ ?>



  
<?php
/**
 * Displays header site branding
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

get_header();
?>





  <!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 160px;}

  .h21{

text-align: center;
  }
</style>
</head>
<body>



<div class="container">
	<div class="h21">
		<h3>How Can We Help You!</h3>
	</div>
  <form class="contact-form" action="../mail.php" method="post">

    <label for="fname">First Name</label>
    <input type="text" id="fname" name="name" placeholder="Your name.." required>

    <label for="lname">Mail</label>
    <input type="text" id="lname" name="mail" placeholder="Your Mail.." required>

    

    <label for="subject">Subject</label>
    <textarea id="subject" name="message" placeholder="Write something.." style="height:200px" required></textarea>

    <input type="submit" name="submit">
  </form>
</div>

</body>
</html>


 


<?php
get_footer();




