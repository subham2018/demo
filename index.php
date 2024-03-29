<?php include_once 'config/config.php';?>
<?php include_once 'function/function.php';?>
<!DOCTYPE html>
<html>
<head>
	<title>Home | SOINIT-TS</title>
  <link rel="shortcut icon" type="image/x-icon" href="image/favicon.ico">

	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome-animation/0.2.1/font-awesome-animation.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="js/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="js/slick.js"></script>


</head>
<body>

<div id="columnLeft">
	<div id="mobilespace"></div>
	<center><h2 style="margin-top: 30px;color: black;" class="font-selected">Start as a Digital Market Entrepreneur</h2>
		<br>
	


<div class="container">
	<center><h4><font color="white" class="font-med-selected">Specialist in</font></h4>
	<center>
<a class="font-med-selected"><font color="black">Android & iOS Mobile Applications</font>  </a><br>
<a class="font-med-selected"><font color="black">Web Applications & API Services</font></a><br>

<a class="font-med-selected"><font color="black">Digital Marketing & Promotions </font></a><br>
<a class="font-med-selected"><font color="black">Mobile Fluid Responsive WebDesign </font></a><br>
<a class="font-med-selected"><font color="black">Custom Desktop Software Applications</font></a><br>
<a class="font-med-selected"><font color="black">Internet Of Things [iOT]</font> </a>
</center>
</div>
<button type="button" class="btn btn-default button" data-toggle="modal" data-target="#myModal"><font class="font-small-selected">JOIN US TODAY &nbsp;<i class="fas fa-angle-double-right faa-horizontal animated"></i></font></button></center>
	<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
      	<h4 class="modal-title">You are about to be an Entrepreneur</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>

        
      </div>
      <?php 
            if(isset($_POST['submit'])){
                check_all_var(); 
                //generate query from post
                $query='';
                foreach($_POST as $key=>$value) if($key != "submit") $query .="`$key`='$value',";
                $query = substr($query, 0, -1);
                
                if(mysql_query("INSERT INTO `".$prefix."contact` SET ".$query)){
                    $to = $_POST['email'];
                    $to1 = 'info@soinit-ts.com'; 
                    $subject = "Contact Query";
                    
                    
                    $headers = 'From: noreply@soinit-ts.com' . "\r\n";
                    $headers.= 'MIME-Version: 1.0' . "\r\n";
                    $headers.= 'Content-type: text/html;charset=UTF-8' . "\r\n";
                    $message="Contact Enquiry Received with below details,<br> ";
                    $message.="Business Name: ".$_POST['business_name']."<br>";
                    $message.="Name: ".$_POST['name']."<br>";
                    $message.="Email: ".$_POST['email']."<br>";
                     $message.="Phone: ".$_POST['phone']."<br>";
                      $message.="Note: ".$_POST['note']."<br><br>";
                       $message.="This is an autogenerated email, please do not reply to this email.";
                    mail($to, $subject, $message, $headers);
                     mail($to1, $subject, $message, $headers);
                //insert all text info

                    echo '<p class="alert alert-success"><i class="fa fa-check fa-fw"></i>  Thank you. We will get back to you soon.</p>';
                  }
                else { 
                    
                    echo '<p class="alert alert-danger"><i class="fa fa-warning fa-fw"></i> Sorry! There is an error while adding details!</p>';   
                  }

            }
        ?>
      <div class="modal-body">
        <form action="" method="post">
        <div class="container">
     <input type="hidden" name="topic" value="Join With Us">
    <input type="text" placeholder="Enter Your Business Name" name="business_name" required>
    
    <input type="text" placeholder="Enter Your Name" name="name" required>
    
    <input type="text" placeholder="Enter Your Business Email" name="email" required>
    
    <input type="text" placeholder="Enter Your Business Phone Number" name="phone" required>
    <textarea cols="59" name="note" placeholder="Leave a Note"></textarea>

    <p>By signing up you agree to our <a target="_blank" href="http://soinit-ts.com/pages/3/"> Terms & Conditions</a>, <a target="_blank" href="http://soinit-ts.com/pages/5/"> NDA Outsourcing Terms</a> & <a target="_blank" href="http://soinit-ts.com/pages/4/"> Privacy Policy</a></p>
    <button type="submit" name="submit" class="btn btn-dark" style="float:right;">SIGN UP &nbsp;<i class="fas fa-arrow-right"></i></button>
    </div>

        	
        </form>

      </div>
      
    </div>

  </div>
</div>
<div class="gap3"></div>

<div class="gap3"></div>
<center><h4><font color="white" class="font-med-selected">Our Business Associates</font></h4>

<div class="container ">
  
<section class="customer-logos slider">
      <div class="slide"><img src="image/royal.png"></div>
      <div class="slide"><img src="image/shopping.png"></div>
      <div class="slide"><img src="image/smc.png"></div>
      <div class="slide"><img src="image/skrealtors.png"></div>
      <div class="slide"><img src="image/netlink.png"></div>
      <div class="slide"><img src="image/mongodb.png"></div>
      <div class="slide"><img src="image/mysql.png"></div>
      <div class="slide"><img src="image/nodejs.png"></div>
      
   </section>
</div>  
</div>








<img src="image/stslogo1.png" class="img1">


<div id="columnRight">
	
	<center><h2 style="margin-top: 30px;color: white;" class="font-selected">Our Wide Range of Products</h2>
		<br>
		<button type="button" class="btn btn-primary button " data-toggle="modal" data-target="#myModal"><a href="interest.php" style="text-decoration: none;"><font class="font-med-selected" color="white">EXPRESS INTEREST   &nbsp;<i class="fas fa-angle-double-right faa-horizontal animated"></i></font></a></button>
	</center>
	
	
	<div class="container">
	<center><h4><font color="white" class="font-med-selected">For Business Domains of</font></h4>
	<center>
<a class="font-med-selected">
	<font color="#05519d">Hotel Management Software</font></a><br>
<a class="font-med-selected">
	<font color="#05519d">School Management Software</font></a><br>
<a class="font-med-selected"><font color="#05519d">Recharge Portal & HDFC AEPS Solution</font></a><br>
<a class="font-med-selected"><font color="#05519d">Student Management Android App for Institutes</font></a><br>
<a class="font-med-selected"><font color="#05519d">Complete Accounting GST integrated SAS</font></a><br>
<a class="font-med-selected"><font color="#05519d">SSD Shared Hosting + SSL SAS</font></a><br>
<a class="font-med-selected"><font color="#05519d">Transactional & Promotional Bulk SMS Credits & API</font></a>


</center>

</div>
<div class="gap"></div>
<center><h4><font color="white" class="font-med-selected">Technology is our strength, we use</font></h4>
	<div class="gap4"></div>
<div class="container ">
	
<section class="customer-logos slider">
      <div class="slide"><img src="image/angularjs.png"></div>
      <div class="slide"><img src="image/aspnet.png"></div>
      <div class="slide"><img src="image/aws.png"></div>
      <div class="slide"><img src="image/ionic.png"></div>
      <div class="slide"><img src="image/laravel.png"></div>
      <div class="slide"><img src="image/mongodb.png"></div>
      <div class="slide"><img src="image/mysql.png"></div>
      <div class="slide"><img src="image/nodejs.png"></div>
      <div class="slide"><img src="image/php7.png"></div>
      <div class="slide"><img src="image/reactjs.png"></div>
      <div class="slide"><img src="image/restapi.png"></div>
      <div class="slide"><img src="image/firebase.png"></div>
   </section>
</div>	
<style type="text/css">
	* {box-sizing: border-box}

/* Add padding to containers */
.container {
  padding: 16px;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}


input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit/register button */
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity:1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>

</body>
<script language="JavaScript">
window.onbeforeunload = confirmExit;
    function confirmExit() {
        if (isAnyTaskInProgress) {
           return "Some task is in progress. Are you sure, you want to close?";
        }
    }
</script>
<script type="text/javascript">
	$(document).ready(function(){
    $('.customer-logos').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 4
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 3
            }
        }]
    });
});
</script>
</html>
