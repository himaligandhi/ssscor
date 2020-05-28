<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <!--Site Metas-->
    <meta name="description" content="A boutique non-bank financial services company specializing in providing growth solutions to small and medium-sized business" />
    <meta name="keywords" content="Financial, CorFinancial,Business, small business, medium business " />
    <meta name="author" content="" />
    <meta name="viewport" content="width=device-width, intial-scale=1.0" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
       <link rel="stylesheet" href="css/bootstrap.min.css">
    <script type="text/javascript" src="js/timeline.js"></script>
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

    <title>COR Solutions</title>
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window,document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
 fbq('init', '691197158357706'); 
fbq('track', 'PageView');
</script>
<noscript>
 <img height="1" width="1" 
src="https://www.facebook.com/tr?id=691197158357706&ev=PageView
&noscript=1"/>
</noscript>
<!-- End Facebook Pixel Code -->
    <link rel="stylesheet" href="style.css" />
   
    <link rel="stylesheet" href="css/footer.css" />
    <link rel="stylesheet" href="css/main.css" />
    <style>
        .centered{
            text-align: center;
  position: absolute;
  top: 10%;
  left: 50%;
  transform: translate(-50%, -50%);
  
  padding-left: 20px;
  padding-right: 20px;
 
        }
       .container img{
           opacity: 0.9;
        }
      

        </style>
   </head>
<body id="page-top">

    <?php include('header.php'); ?>
<div id="services">
<div class="container">
            <img src="images/CORRevised.jpg" alt="CORsolutions" style="width:100%;"/>
           
                <div class="centered">
                <h1 style="color:white;text-align:center;letter-spacing:1px; font-size:3.5em; font-weight:bold;"><u>CORS<span style="font-size:0.8em;">OLUTIONS</span></u>
            </h1>
</div>



                <div class="section-title">
                                            <p style="margin-top:80px;">
                                            Business is not a perfect science often exposed to peaks and valleys and growth pains. At <span style="color:#8B040b;">COR</span>Solutions we understand these trends and how to minimize the stress that comes with adjusting. As the advisory division of <span style="color:#8B040B;">COR</span>Financial, our expertise across many industries allows us to quickly assess the key issues and to react immediately on behalf of our clients in order to find solutions to help maximize the potential of a business.
                            
                                            </p>
                                        </div>
                         
                            </div>
<div class="container text-center" style="margin-top:150px;">
        <a href="Contact.php" class="sim-btn hvr-bounce-to-top"><span style="font-size: 1.2em;">CONTACT US</span></a>
                        <a href="cred.php" class="sim-btn hvr-bounce-to-top"><span style="font-size: 1.2em;">APPLY NOW</span></a>
</div>
 <!-- Site footer -->
 <?php include('foo.php'); ?>
    <script>
      


        function openWin(){
            window.open("LendingSolutions.php");
        }

        function fade($ele) {
    $ele.fadeIn(1000).delay(3000).fadeOut(1000, function() {
        var $next = $(this).next('.quote');
        fade($next.length > 0 ? $next : $(this).parent().children().first());
   });
}
fade($('.quoteLoop > .quote').first());
    </script>
</body>
</html >