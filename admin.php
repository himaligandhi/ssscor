;
<?php
 include("connect.php");

    session_start();
    $errmsg_arr = array();
    $errflag = false;	

	
        if($_POST['submit']){
            $title=filter_var($_POST['title'], FILTER_SANITIZE_STRING);
            $subtitle=filter_var($_POST['subtitle'], FILTER_SANITIZE_STRING);
            $description=filter_var($_POST['description'], FILTER_SANITIZE_STRING);
             $images=rand(1000,10000)."-".$_FILES["images"]["name"];
            $file=addslashes(file_get_contents($_FILES["images"]["tmp_name"]));
           
                move_uploaded_file($file, "images/".$images);
                $sql="INSERT INTO blog(title,subtitle,description,images) VALUES('$title','$subtitle','$description','$images')";   
                if ($conn->query($sql) === TRUE) {
                    $_SESSION['msg']="New Blog Inserted successfully";
                  } else {
                    //   header('Location:login.php');
                    echo "Error: " . $sql . "<br>" . $conn->error;
                  }
    

            // }

            if($title == '') {
                $errmsg_arr[] = ' Title of the blog  is missing';
                $errflag = true;
            }
            if($subtitle == '') {
                $errmsg_arr[] = ' Subtitle of the blog is missing';
                $errflag = true;
            }	
            if($description == '') {
                $errmsg_arr[] = ' Description of the blog is missing';
                $errflag = true;
            }	
        

                            // $sql="INSERT INTO blog(title,subtitle,description,images) VALUES('$title','$subtitle','$description','$images')";   
                            // if ($conn->query($sql) === TRUE) {
                            //     $_SESSION['msg']="New Blog Inserted successfully";
                            //   } else {
                            //     header('Location:login.php');
                            //     echo "Error: " . $sql . "<br>" . $conn->error;
                            //   }
                
            

         
                            }
          
          

           


        if(isset($_GET['del'])){
            $id=$_GET['del'];
            $sqldel="DELETE FROM blog where blogid=$id";
            if($conn->query($sqldel)=== TRUE){
                $_SESSION['msg']="blog Deleted Sucessfully";
            header('location:admin.php');
            }else{
                echo "Error: " . $sqldel . "<br>" . $conn->error;
            }
            
        }

        
?>

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

    <title>Admin</title>
    <!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window,document,'script','https://connect.facebook.net/en_US/fbevents.js');
 fbq('init', '691197158357706'); 
fbq('track', 'PageView');
</script>
<noscript>
 <img height="1" width="1" src="https://www.facebook.com/tr?id=691197158357706&ev=PageView&noscript=1"/>
</noscript>
<!-- End Facebook Pixel Code -->
    <link rel="stylesheet" href="style.css" />
   
    <link rel="stylesheet" href="css/footer.css" />
    <link rel="stylesheet" href="css/main.css" />
   </head>
<body id="page-top" class="politics_version">

<?php
include("header.php");
 if (isset($_SESSION['msg'])); ?>
    <div class="msg">
    <?php
        echo $_SESSION['msg']; ?>
    </div>

<h1>Welcome <?php echo $_SESSION['user']; ?></h1>
<br/>
<form method="post" action="admin.php">
    Title: <input type="text" name="title"/><br>
    Subtitle: <input type="text" name="subtitle"/><br>
    Description:<textarea name="description"></textarea><br>
    Blog Images:<input type="file"  name="images"/>
    <input type="submit" name="submit" value="Post a blog"/>
</form>
<a href="blogadmin.php"> View Blog</a>| <a href="logout.php">Logout</a>

<?php include('foo.ph'); ?>
    </body>
</html >