

<?php 

$result = "";
$error  = "";
if(isset($_POST['submit']))
{
require 'phpmailer/PHPMailerAutoload.php';
$mail = new PHPMailer;
//smtp settings
$mail->isSMTP(); // send as HTML
$mail->Host = "smtp.gmail.com"; // SMTP servers
$mail->SMTPAuth = true; // turn on SMTP authentication
$mail->Username = "binhussein050@gmail.com"; // Your mail
$mail->Password = 'alattas5812812'; // Your password mail
$mail->Port = 587; //specify SMTP Port
$mail->SMTPSecure = 'tls';                               
$mail->setFrom($_POST['email'],$_POST['name']);
$mail->addAddress('binhussein050@gmail.com');
$mail->addReplyTo($_POST['email'],$_POST['name']);
$mail->isHTML(true);
$mail->Subject='Form Submission:' .$_POST['subject'];
$mail->Body='<h3>Name :'.$_POST['name'].'<br> Email: '.$_POST['email'].'<br>Message: '.$_POST['message'].'</h3>';
if(!$mail->send())
{
    $error = "Something went worng. Please try again.";
}
else 
{
    $result="Thanks\t" .$_POST['name']. " for contacting us.";
}
}


?>






<html>
<head>
<meta charset="utf-8">
<title>My project</title>
<meta http-equiv="X-UA-Compatible" content="IE-edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="shortcut icon" href="img/icon.png">
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<script src="js/typed.min.js"></script>

<script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
</head>

<body>
    
    <section id="main">
   
    <nav>
    
    <a href="#" class="logo">Mr.Hussein</a>
   
    <div class="toggle"></div>
    <ul class="menu">
    <li class="active"><a href="#main" >Home</a></li>   
    <li><a href="#about">About</a></li> 
    <li><a href="#services">Services</a></li>   
    <li><a href="#portfolio">Portfolio</a></li>     
    <li><a href="#contact-form">Contact</a></li>    
    </ul>
    
    <a href="#" class="lang">En</a>
    </nav>
    
    <div class="name">
    
    <p>Hello</p>
    
    <h1>I'm <font color="#6C63FF">Hussein</font> <span id="ani" style="color:#6C63FF;"> </span> </h1>
    
    <p class="details">In this Video I am gonna show you how to create a personal website with all pages.After Watching this tutorial you will be able to craete website like this</p>
    
    <a href="#" class="cv-btn">Download Cv</a>
    
        
    </div>
       
    <div class="black-line" ></div>
    
    <div class="social">
    <a href="#"><i class="fab fa-facebook-f"></i></a>   
    <a href="#"><i class="fab fa-twitter"></i></a>
    <a href="#"><i class="fab fa-instagram"></i></a>
    <a href="#"><i class="fab fa-youtube"></i></a>  
    </div>
    
    </section>
    
        <section id="about">
   
    <div class="about-text">
    <h1>About Us</h1>
    <h2>FreeLancing FrontEnd Developer</h2>
    <p>Enjoy the ultimate web design editor. Divi is like Photoshop or Sketch for the web. It brings an advanced design interface to WordPress that both beginners and experts will fall in love with. It's incredibly smart, super flexible, amazingly powerful and visual by nature. This is how designing for the web is meant to be done.</p>
    <button>View More Details</button>
    </div>
    
    <div class="about-_Note_list_l1">
    <img src="img/_Note_list_11.png" alt="_Note_list_11"/> 
    </div>
    
    
    </section>
  
    <section id="services">
    
    <div class="s-heading">
    <h1>Services</h1>
    <p>Here Is The Some Servies Which We Provide You.</p>
    </div>
   
    <div class="b-container">
    
    <div class="s-box">
   
    <div class="s-b-img">
        
        <div class="s-type">Front-End</div>
        
        <img src="img/pic1.png">
    </div>
   
    <div class="s-b-text">
    <a href="#">With Divi, every part of your website is customizable. You have complete freedom to create the perfect website for you or your clients. Easily change colors, fonts and text styles. Apply stunning animations.</a> 
    </div>
    </div>
       
    <div class="s-box">
   
    <div class="s-b-img">
    
        <div class="s-type">Back-End</div>
        
        <img src="img/project team.png">
    </div>
    
    <div class="s-b-text">
    <a href="#">With Divi, every part of your website is customizable. You have complete freedom to create the perfect website for you or your clients. Easily change colors, fonts and text styles. Apply stunning animations.</a> 
    </div>
    </div>
        
    <div class="s-box">
    
    <div class="s-b-img">
       
        <div class="s-type">SEO</div>
       
        <img src="img/Domain_names.png">
    </div>
    
    <div class="s-b-text">
    <a href="#">With Divi, every part of your website is customizable. You have complete freedom to create the perfect website for you or your clients. Easily change colors, fonts and text styles. Apply stunning animations.</a> 
    </div>
    </div>
    </div>
    </section>
   
    <section id="portfolio">
    
    <h1 class="p-headind">Portfolio</h1>
    
    <div class="p-container">
   
    <div class="p-box">
    
    <div class="overlay-text">
    <h1>Social_strategy</h1>
    <p>Client Project</p>   
    </div>
    
    <img src="img/Social_strategy.png">
        
    </div>
    
    <div class="p-box">
       
    <div class="overlay-text">
    <h1>User_flow</h1>
    <p>Client Project</p>   
    </div>
   
    <img src="img/User_flow.png">
    </div>
   
    <div class="p-box">
    
    <div class="overlay-text">
    <h1>Group_chat</h1>
    <p>Client Project</p>   
    </div>
   
    <img src="img/Group_chat_.png">
    </div>
   
    <div class="p-box">
    
    <div class="overlay-text">
    <h1>Social_media</h1>
    <p>Domain_names</p>   
    </div>
    
    <img src="img/Social_media.png">
    </div>
    
    <div class="p-box">
   
    <div class="overlay-text">
    <h1>Reviewed_docs</h1>
    <p>Client Project</p>   
    </div>
    
    <img src="img/Reviewed_docs.png">
    </div>
   
    <div class="p-box">
   
    <div class="overlay-text">
    <h1>_Add_user</h1>
    <p>Client Project</p>   
    </div>
     
    <img src="img/_Add_user.png">
    </div>
        
    </div>
    </section>
    
    <section id="contact-btn">
   
    <h1 class="c-b-heading">If You Have Any Project In Your Mind ?</h1>
   
        <button >Contact Me</button>
    </section>
   
    <section id="contact-form">
    <form action="" method="post" >
    
    <div class="contact-left">
    <h1 class="c-l-heading"><font style="border-bottom: 3px solid #6c63ff;">Writ</font>e us</h1>
    
    <div class="f-name">
    <font >Name</font>
    <input type="text" name="name" placeholder="Full Name"/>
    </div>
    
    <div class="f-email">
    <font >Email</font>
    <input type="email" name="email"placeholder="Example@gmail.com"/>
    </div>
    
    
    <div class="f-subject">
    <font >Subject</font>
    <input type="subject" name="subject" placeholder="Subject"/>
    </div>
    </div>
    
    <div class="contact-right">
    
    <div class="message">
    <font >Message</font>
    <textarea name="message"  name="message" rows="5" cols="20" placeholder="Write Message..."></textarea>
    </div>
   
    <button type="submit" name="submit"   >  Send </button>
    </div>
        
    </form>
    
    </section>
    
    <script type="text/javascript" src="js/JQuery3.3.1.js"></script>
    <script type="text/javascript">
    
         
      $(document).ready(function(){
     $('.toggle').click(function(){
         $('.toggle').toggleClass('active')
         
         $('nav ul').toggleClass('active-menu')
        
         
     })
 });
    
    </script>

<script>

        var animate = new Typed('#ani', {
            strings: ["Alattas", "Ahmed", "Alattas"],
            typeSpeed: 100,
            backSpeed: 100,
            loop: true

        })


    </script>




</body>
</html>
