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
    <!--Bootstrap-->
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
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
<script type="text/javascript">
_linkedin_partner_id = "1996148";
window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || [];
window._linkedin_data_partner_ids.push(_linkedin_partner_id);
</script><script type="text/javascript">
(function(){var s = document.getElementsByTagName("script")[0];
var b = document.createElement("script");
b.type = "text/javascript";b.async = true;
b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
s.parentNode.insertBefore(b, s);})();
</script>
<noscript>
<img height="1" width="1" style="display:none;" alt="" src="https://px.ads.linkedin.com/collect/?pid=1996148&fmt=gif" />
</noscript>

    <title>CorFinancial Corp</title>

    <link rel="stylesheet" href="style.css" />
   
    <link rel="stylesheet" href="css/footer.css" />
<style>
.container {
  border-radius: 2rem;
  padding: 1rem;
  margin: 1rem auto;
}

.preview {
  display: grid;
  grid-template-columns: 200px 1fr;
  grid-gap: 1rem;
  transition: transform 200ms;
}


.content h2 {
  /* font-family: sans-serif; */
  margin: .5rem 0 .5rem;
}

.content p {
  /* font-family: sans-serif; */
  font-weight: lighter;
  margin: .75rem 0 .25rem;
  letter-spacing: .0375rem;
  line-height: 1.5rem;
}
.content a {
  /* display: block; */
  text-decoration: none;
  text-transform: uppercase;
  color: #8E0414;
  /* font-family: sans-serif; */
  font-weight: bold;
  /* font-size: .75rem; */
  margin: .5rem 0 0;
  padding: .25rem .5rem;
  border: 1px solid #8E0414;
  border-radius: 1rem;
  /* width: 10ch; */
  line-height: 1rem;
  transition: background 200ms, color 200ms;
  
}

.container:hover {
  cursor: pointer;
}
.container:hover .preview {
  transform: translateX(0.25rem);
  transition: transform 200ms;
}
.container:hover .thumb::before {
  left: -1.25rem;
  top: -.65rem;
  transition: left 200ms, top 200ms;
}
.container:hover .thumb::after {
  left: calc(-1.25rem + 1px);
  top: calc(-.65rem + 1px);
  transition: left 200ms, top 200ms;
}
.container:hover .content > a {
  background: #44444C;
  color: white;
  /* width: 10ch; */
}

@media screen and (max-width: 540px) {
  .preview {
    grid-template-columns: 1fr;
    grid-template-rows: 2fr;
    grid-gap: 0;
  }
}

</style>
</head>
<body>
   <?php include('header.php'); ?>
    <div id="blog" class="section lb">
        <div class="container">
            <div class="section-title">
                <h1 style="text-align: center;"><u>BLOG & SOCIAL MEDIA</u></h1>
                <p style="margin-top:50px;">
                <span style="color:#8B040B;">COR</span>Financial Corp is active on Social Media through Facebook, LinkedIn & Instagram with ad campaigns and blog posts. Here are our posts and ads that have been posted.</p>
            </div><!-- end title -->
        <?php
        session_start();
        include_once('connect.php');

        $sql="SELECT * FROM blog ORDER BY blogid DESC";
        // $result=$conn->query($sql);
        $result=mysqli_query($conn,$sql) or die("Error");
        if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result)){
            $id=$row['blogid'];
            $title=$row['title'];
            $subtitle=$row['subtitle'];

            $description=$row['description'];
            $images=$row['images'];

            ?>
       
            <div class="container" >
 <div class="preview">
 <!-- <div style="background-image: url('images/covid19.jpg')" class="thumb"></div> -->
 <div class="thumb">
      <img src="images/covid.jpg" alt="covid-19" height="200" width="200"/>
  </div>
  <div class="content">
      
   <h2><?php echo $title; ?></h2>
   <h4 style="color:#8B040B;"><?php echo $subtitle; ?></h4>
   <p><?php echo $description; ?></p>
   <div class="tag">
    <a href="login.php" style="border:none;font-weight:100; text-transform:none;">Posted by Admin</a>
   
   </div>
   <a href="blog1.php" style="float:right;">Read More</a>
   <a href="admin.php?del=<?php echo $row['blogid']; ?>" class="del_btn">Delete</a>
  </div>
 </div>

</div>


        
            <?php
        }
    }
            ?>
         </div>  
       
          <!-- Site footer -->
    <?php include('foo.php'); ?>
</body>
</html>