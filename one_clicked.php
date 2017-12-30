<?php

if(!isset($_SESSION)){
    session_start();
   // session_regenerate_id();
}
if($_SESSION['user-agent']!=$_SERVER['HTTP_USER_AGENT']){
    die(header('location: ./destroy.php'));
}

function id()
{
   $id = md5(uniqid().time());
   $_SESSION['oneclickid'] = $id;
}
 if(isset($_SESSION['indexid'])){
   
     }else{
         die(header('location: ./destroy.php'));
     }
     if(isset($_GET['data']))
    {
        $data_temp = $_GET['data'];
        if(ctype_digit($data_temp) && $data_temp!=0 && ($data_temp>0 && $data_temp<15)){
           $data = $data_temp;
           $_SESSION['data'] = $data;    
        }else{
            die(header('location: ./destroy.php'));            
        }
        
    }
elseif(isset($_SESSION['data'])){
    $data = $_SESSION['data'];
}
else{
        die(header('location: ./destroy.php'));
}

id();
?>

<html>
	<head>
	     <title>
	     	Nix Cool
	     </title>
	    <link rel="stylesheet" href="css/normalize.css">
	    <link rel="stylesheet" href="css/skeleton.css ">
	    <link rel="stylesheet" href="css/index.css ">
        <link rel="stylesheet" href="css/hover.css">
        <link rel="stylesheet" href="css/one_clicked.css">
        
	</head>

<body>
       <script type="text/javascript" src="fbapp/fb.js?v=1.1"></script>

    
	<div class= "container">
	<!-------------------logo and AD ----------------> 
        <div class ="twelve columns">
			<div class ="three columns">
				<a href="index.php"><img class="logo" src="img/logo.jpg"></a>
			</div>
			<div class="nine columns main_AD">
				<div >
                    <img class="main_AD"  src= "img/ad.jpg">
                </div>
			</div>
	</div>
	
    <!-------------------Menu ------------------------>   
        <div class="row" style="margin-right: 30px">
             <div class="twelve columns menu">
                <ul>
                  <li><a href="index.php">Home</a></li>
                  <li><a href="#">Advertise with us</a></li>
                  <li><a href="terms_n_conditions.html">Terms and conditions</a></li>
                  <li><a href="contact_us.html" class="current">contact us </a></li>
                  
                </ul>
                    
            </div>
       	</div>
        
<!------------------    content    ---------------------->
        <div class="row" style="margin-right: 30px">
        <div class="eight columns">
        <?php if($data == 1) {?>
            <img  class="id1s" src="img/game/id1/id1s.jpg">  
        
        <?php } 
            
            
            elseif($data == 2) {?>
        
            <img  class="id2s" src="img/game/id2/id2s.jpg">  
        
        <?php } 
                
        
       elseif($data == 3) {?>
        
            <img  class="id3s" src="img/game/id3/id3s.jpg">  
        
        <?php } 
                
            elseif($data == 4) {?>
        
            <img  class="id4s" src="img/game/id4/id4s.jpg">  
        
        <?php }
                

             elseif($data == 5) {?>
        
            <img  class="id5s" src="img/game/id5/id5s.jpg">  
        
        <?php }
                

             elseif($data == 6) {?>
        
            <img  class="id6s" src="img/game/id6/id6s.jpg">  
        
        <?php } 
                

             elseif($data == 7) {?>
        
            <img  class="id7s" src="img/game/id7/id7s.jpg">  
        
        <?php } 
                

             elseif($data == 8) {?>
                
        
            <img  class="id8s" src="img/game/id8/id8s.jpg">  

        <?php } 
                

             elseif($data == 9) {?>
                
        
            <img  class="id9s" src="img/game/id9/id9s.jpg">  
            
            <?php } 
                

             elseif($data == 10) {?>
                
        
            <img  class="id10s" src="img/game/id10/id10s.jpg">  

            <?php } 
                

             elseif($data == 11) {?>
                
        
            <img  class="id11s" src="img/game/id11/id11s.jpg">  

            <?php } 
                

             elseif($data == 12) {?>
                
        
            <img  class="id12s" src="img/game/id12/id12s.jpg">  

            <?php } 
                

             elseif($data == 13) {?>
                
        
            <img  class="id13s" src="img/game/id13/id13s.jpg">  

            <?php } 
                

             elseif($data == 14) {?>
                
        
            <img  class="id14s" src="img/game/id14/id14s.jpg">  

                    
            
            
            
        <?php }else{} ?>
    
            
        <div class="fb-login-button login" 
             data-max-rows="1"
             data-size="xlarge" 
             data-show-faces="false" 
             data-auto-logout-link="false" 
             data-scope="public_profile,email,user_friends,user_posts" 
             onlogin="checkLoginState();">Create your own
        </div>


        </div>
          
                

            
      
            
       
           
          
            
            
            
            
            
            
            
            
        <div class="four columns">
        <img class="one_clicked_ad" src="img/7588864125167831078.jpg">   
            
        </div>    
        
        
        
        </div>
        
<!---------------------- check similar ---------------->
        <div class="row">
   
            <div class="four columns "> <a href="one_clicked.php?data=3" ><img class="id3h hvr-float" src="img/game/id3/id3h.jpg"></a> </div>
            <div class="four columns "> <a href="one_clicked.php?data=4" ><img class="id4h hvr-float" src="img/game/id4/id4h.jpg"></a> </div>
            <div class="four columns "> <a href="one_clicked.php?data=5" ><img class="id5h hvr-float" src="img/game/id5/id5h.jpg"></a> </div>
            
        <div class="row">
            <div class="four columns "> <a href="one_clicked.php?data=6" ><img class="id6h hvr-float" src="img/game/id6/id6h.jpg"></a></div>
            <div class="four columns "> <a href="one_clicked.php?data=7" ><img class="id7h hvr-float" src="img/game/id7/id7h.jpg"></a></div>
            <div class="four columns "> <a href="one_clicked.php?data=8" > <img class="id8h hvr-float" src="img/game/id8/id8h.jpg"></a></div>
            
        </div>
            <div class="row">
            <div class="four columns "> <a href="one_clicked.php?data=9" > <img class="id9h hvr-float" src="img/game/id9/id9h.jpg"></a></div>
            <div class="four columns "> <a href="one_clicked.php?data=10" ><img class="id10h hvr-float" src="img/game/id10/id10h.jpg"></a></div>
            <div class="four columns "> <a href="one_clicked.php?data=11" > <img class="id11h hvr-float" src="img/game/id11/id11h.jpg"></a></div>
            
        </div>
        <div class="row">
            <div class="four columns "> <a href="one_clicked.php?data=12" ><img class="id12h hvr-float" src="img/game/id12/id12h.jpg"></a></div>
            <div class="four columns "> <a href="one_clicked.php?data=13" ><img class="id13h hvr-float" src="img/game/id13/id13h.jpg"></a></div>
            <div class="four columns "> <a href="one_clicked.php?data=14" > <img class="id14h hvr-float" src="img/game/id14/id14h.jpg"></a></div>
            
        </div>
            
     </div>
    <!---------------- footer------------------------------>
        <div class="row"  style="margin-right: 30px">
        <div class="twelve columns footer_bg">
            <div class="three columns footer_logo"></div>
            <div class="six columns s4s"><p>copyright : Nix Cool  &#169; 2016  &nbsp; &nbsp; All rights reserved.<br> </p></div>
            <div class="three columns up_arrow "> </div>        
            
            
        </div> 
                    
                
        </div>
     <script src="http://html2canvas.hertzen.com/build/html2canvas.js"></script>
 <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
 <script type="text/javascript" src="js/custom.js?v=1"></script>
    
        
        <!--    for analytics-->

    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-91472311-1', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>
    
    