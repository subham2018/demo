<?php include_once 'config/config.php';?>
<?php include_once 'function/function.php';?>
<html>
<title>GST Accounting Enquiry | SOINIT-TS</title>
<head>
    <style type="text/css">
.register{
    background: -webkit-linear-gradient(left, #3931af, #00c6ff);
    margin-top: 3%;
    padding: 3%;
}
.register-left{
    text-align: center;
    color: #fff;
    margin-top: 4%;
}
.register-left input{
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    width: 60%;
    background: #f8f9fa;
    font-weight: bold;
    color: #383d41;
    margin-top: 30%;
    margin-bottom: 3%;
    cursor: pointer;
}
.register-right{
    background: #f8f9fa;
    border-top-left-radius: 10% 50%;
    border-bottom-left-radius: 10% 50%;
}
.register-left img{
    margin-top: 15%;
    margin-bottom: 5%;
    width: 25%;
    -webkit-animation: mover 2s infinite  alternate;
    animation: mover 1s infinite  alternate;
}
@-webkit-keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
@keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
.register-left p{
    font-weight: lighter;
    padding: 12%;
    margin-top: -9%;
}
.register .register-form{
    padding: 10%;
    margin-top: 10%;
}
.btnRegister{
    float: right;
    margin-top: 10%;
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    background: #0062cc;
    color: #fff;
    font-weight: 600;
    width: 50%;
    cursor: pointer;
}
.register .nav-tabs{
    margin-top: 3%;
    border: none;
    background: #0062cc;
    border-radius: 1.5rem;
    width: 28%;
    float: right;
}
.register .nav-tabs .nav-link{
    padding: 2%;
    height: 34px;
    font-weight: 600;
    color: #fff;
    border-top-right-radius: 1.5rem;
    border-bottom-right-radius: 1.5rem;
}
.register .nav-tabs .nav-link:hover{
    border: none;
}
.register .nav-tabs .nav-link.active{
    width: 100px;
    color: #0062cc;
    border: 2px solid #0062cc;
    border-top-left-radius: 1.5rem;
    border-bottom-left-radius: 1.5rem;
}
.register-heading{
    text-align: center;
    margin-top: 8%;
    margin-bottom: -15%;
    color: #495057;
}
.class-navbar
{
background-color: #000;
height: auto;
padding: 20px;

}
a:hover {

  text-decoration: none;

}
.footer-navbar
{
background-color: #000;
padding: 20px;
padding-top: 25px;
margin-top: 20px;
}
.gap
    {
        margin-left:30px;


    }
                </style>    
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="css/style.css" type="text/css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">


<!------ Include the above in your HEAD tag ---------->
</head>
<body>
  <div class="class-navbar">
            <div class="row">
                <div class="col-md-2 col-sm-12">
                     <center><a  href="index.php" class="gap"><img src="image/trans-logo.png"></a></center>
                </div>
                <div class="col-sm-1"><hr></div>
                 <div class="col-md-5 col-sm-12">
                   
                <a class="gap" href="index.php" target="_blank"><font color="white"> 
                    <i class="fa fa-home"></i> </font></a>
                <a class="gap" href="profile.html" target="_blank"><font color="white"> Company Profile</font></a>
                <a class="gap" href="#" target="_blank"><font color="white">Banking partners</font></a>
                <a class="gap" href="#" target="_blank"><font color="white">Valuable Clients</font></a>
                 
                 
                
                
                </div>  
                <div class="col-md-4 col-sm-12">
                <p class="gap"><font color="white" size="+1"><i class="fa fa-phone"></i> +91-8697913566 | +91-6291188087</font> <br>
                      <font color="white">   <i class="fa fa-envelope-open"></i> info@soinit-ts.com</font></p> 
                   
                
                </div>
               
            </div>
       </div>

     <!-- Button trigger modal -->

<div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                        <h3>Welcome</h3>
                        <p>You are 30 seconds away from earning your own money!</p>
                        
                    </div>
                     <div class="col-md-9 register-right">
                        
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
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
                                <h3 class="register-heading">Start as a Digital Market Entrepreneur</h3>
                                <form action="" method="post">
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <input type="hidden" name="topic" value="GST Accounting Software">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="business_name" placeholder="Enter Your Business Name" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Enter Your  Name" name="name" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Enter Your Email" name="email" required>
                                        </div>
                                        
                                        
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="number" class="form-control" name="phone" placeholder="Enter Your Phone No" required>
                                        </div>
                                        
                                       <textarea cols="42" name="note" placeholder="Leave a Note"></textarea>
                                        <input type="submit" name="submit" class="btnRegister"  value="Register"/>
                                    </div>
                                </div>
                            </form>
                            </div>
                            
                        </div>
                    </div>
                </div>

            </div>
            
              <div class="footer-navbar">
            <div class="row">
                
                <div class="col-md-12">

                <center>
                    <a href="#" class="gap5 color" ><font color="white">Terms & Coditions </a>  &bull;</font>
                <a href="#" class="gap5 color"><font color="white">Privacy policy</a> &bull; </font>
                <a href="#" class="gap5 color"><font color="white">FAQ</a></font>
                <p><font color="white"> 2015-18 &copy; All Right Reserved By Soinit Technology Solutions Pvt. Ltd.</font></p>
                </center>
                
                </div>  
            </div>
        </div>
<!-- Popper JS -->



            </body>


