<?php

function saveImage($url){
    while (true) {
        $uid = substr( base_convert( time(), 10, 36 ) . md5( microtime() ), 0, 32 ) . '.jpg';
        $img ='photos/'.$uid;
    	if (!file_exists(__DIR__. '/' .$img)) break;
    }
    $image = file_get_contents($url);
    file_put_contents( __DIR__. '/' .$img, $image);
    return $img;
}

function urlGen($id){
 $url_gen = "https://graph.facebook.com/$id/picture?width=400";
 return $url_gen;
}
set_time_limit(0); 
if(!isset($_SESSION)){
    session_start();
}
if($_SESSION['user-agent']!=$_SERVER['HTTP_USER_AGENT']){
    die(header('location: ./destroy.php'));
}


if(isset($_SESSION['oneclickid'])&&isset($_SESSION['indexid'])){

}else{
   // die('no 1');
    die(header('location: ./destroy.php'));    
}

if(isset($_SESSION['data'])){
    $data = $_SESSION['data'];
}
else{
  //  die('no 2');
    die(header('location: ./destroy.php'));
}
if($data == 1 || $data == 3 || $data == 4 || $data == 6){
    if(isset($_SESSION['user_name'])&&isset($_SESSION['user_id'])&&isset($_SESSION['friend_name'])&&isset($_SESSION['friend_id'])){
        $user_name = $_SESSION['user_name'];
        $user_id = $_SESSION['user_id'];
        $friend_name = $_SESSION['friend_name'];
        $friend_id = $_SESSION['friend_id'];
        $user_url = urlGen($user_id);
        $friend_url = urlGen($friend_id);
        $user_img = saveImage($user_url);
        $friend_img = saveImage($friend_url);

    }else{
       //  die('no 3');
        die(header('location: ./destroy.php'));    
    }
}
elseif ($data == 2) {
     if(isset($_SESSION['user_name'])&&isset($_SESSION['user_id'])){
        $user_name = $_SESSION['user_name'];
        $user_id = $_SESSION['user_id'];    
        $user_url = urlGen($user_id);
        $user_img = saveImage($user_url);

     }
     else{
        //  die('no 4');
         die(header('location: ./destroy.php'));
     }
     
}
elseif($data == 7){
	if(isset($_SESSION['user_name'])&&isset($_SESSION['user_id'])){
        $user_name = $_SESSION['user_name'];
        $user_id = $_SESSION['user_id'];    
        $user_url = urlGen($user_id);
        $user_img = saveImage($user_url);

     }
     else{
        //  die('no 4');
         die(header('location: ./destroy.php'));
     }
}
elseif($data == 5){
    if(isset($_SESSION['user_name'])&&isset($_SESSION['user_id'])){
        $user_name = $_SESSION['user_name'];
        $user_id = $_SESSION['user_id']; 
        $user_url = urlGen($user_id);
        $user_img = saveImage($user_url);
        $color = array('white' , 'red' , 'black' , 'pink' , 'blue' , 'orange' , 'purple' , 'green' , 'yellow');
        $letter = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');
        $day = array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
        $lucky_color = $color[rand(0,8)];
        $lucky_letter = $letter[rand(0,25)];
        $lucky_day = $day[rand(0,6)]; 
     }
     else{
       //   die('no 5');
         die(header('location: ./destroy.php'));
     }
}
elseif($data == 14){
    if(isset($_SESSION['user_name'])&&isset($_SESSION['user_id'])&&isset($_SESSION['top_friends_name_array'])&&isset($_SESSION['top_friends_id_array'])){
        $user_name = $_SESSION['user_name'];
        $user_id = $_SESSION['user_id'];
        $top_friends_name_array = $_SESSION['top_friends_name_array'];
        $top_friends_id_array = $_SESSION['top_friends_id_array'];
        $friend_name1 = $top_friends_name_array[0];
        $friend_name2 = $top_friends_name_array[1];
        $friend_name3 = $top_friends_name_array[2];
        $friend_name4 = $top_friends_name_array[3];
        $friend_id1 = $top_friends_id_array[0];
        $friend_id2 = $top_friends_id_array[1];
        $friend_id3 = $top_friends_id_array[2];
        $friend_id4 = $top_friends_id_array[3];
        $user_url = urlGen($user_id);
        $friend_url1 = urlGen($friend_id1);
        $friend_url2 = urlGen($friend_id2);
        $friend_url3 = urlGen($friend_id3);
        $friend_url4 = urlGen($friend_id4);
        $user_img = saveImage($user_url);
        $friend_img1 = saveImage($friend_url1);
        $friend_img2 = saveImage($friend_url2);
        $friend_img3 = saveImage($friend_url3);
        $friend_img4 = saveImage($friend_url4);
    }
}
else{
   // die('no 6');
   die(header('location: ./destroy.php'));
}
   
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
        <link rel="stylesheet" href="css/share.css">
        
	</head>

<body>
       <script type="text/javascript" src="fbapp/fb.js?v=1.1"></script>

    
	<div class= "container">
	<!-------------------logo and AD ----------------> 
        <div class ="twelve columns">
			<div class ="three columns">
				<img class="logo" src="img/logo.jpg">
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
         
<!------------------    content    -------------------->
        <div class="row" style="margin-right: 30px">
       
            <div class="eight columns"> 
           
            <?php
            if($data == 1){?>
                
                  <div id="mydiv" class="share1">
                        
                <div class="user" style="background-image:url(<?php echo $user_img; ?>);" >
                    <p class="nam_format"><?php echo $user_name; ?></p>   
                </div> 
                <div class="frn" style="background-image:url(<?php echo $friend_img; ?>);">
                    <p class="nam_format"><?php echo $friend_name; ?></p>   
                </div>
                <div class="descp"><p> <?php echo $user_name; ?>, <br> <?php echo $friend_name; ?> is busy <br> writing a masterpiece<br> to you.</p></div>    
                    

              
               </div>   
               
                <?php


            } elseif($data==2){?>
                <div id="mydiv" class="share2">
                    
                    
                 <div class="user" style="background-image:url(<?php echo $user_img; ?>);" >
                    <p class="nam_format"><?php echo $user_name; ?></p>   
                </div> 
                <div class="random"><p><?php echo rand(70,99).'%'; ?><br><?php echo rand(70,99).'%'; ?><br><?php echo rand(70,99).'%'; ?><br><?php echo rand(70,99).'%'; ?></p></div>    
                    
               </div>   
        <?php 
        } elseif($data==3){?>
         <div id="mydiv" class="share3">
            
              <div class="user" style="background-image:url(<?php echo $user_img; ?>);" > </div> 
                <div class="frn" style="background-image:url(<?php echo $friend_img; ?>);"></div>
                <div class="descp"><p> <?php echo $user_name; ?>, <br> <?php echo $friend_name; ?> dreamed <br> you last night ! !</p></div>    
                
              
               </div>   
        <?php 
        } elseif($data==4){?>
          <div id="mydiv" class="share4">

              
                <div class="user" style="background-image:url(<?php echo $user_img; ?>);" > </div> 
                <div class="frn" style="background-image:url(<?php echo $friend_img; ?>);">
                    <p class="nam_format"><?php echo $friend_name; ?></p>   </div>
                <div class="descp"><p><?php echo $user_name; ?>, <br> <?php echo $friend_name; ?> is expecting <br> a cute baby <br> soon ! !</p></div>    
              
              
               </div>   
  <?php 
        } elseif($data==5){?>
         <div id="mydiv" class="share5">
             
             <div class="user" style="background-image:url(<?php echo $user_img; ?>);" >
                    <p class="nam_format"><?php echo $user_name; ?></p>   
                </div> 
                <div class="random"><p><?php echo $lucky_color; ?><br>"<?php echo $lucky_letter; ?>"<br><?php echo $lucky_day; ?><br><?php echo rand(0,9); ?></p></div>    
               </div>   

        <?php  }  elseif($data==6){?>
         <div id="mydiv" class="share6">
             
                 <div class="user" style="background-image:url(<?php echo $user_img; ?>);" >
                    <p class="nam_format"><?php echo $user_name; ?></p> 
                </div> 
                <div class="frn" style="background-image:url(<?php echo $friend_img; ?>);" >
                    <p class="nam_format"><?php echo $friend_name; ?></p>   
                </div>
                <div class="descp"><p>AMAZING ! !</p></div>
            <div class="random"><p><?php echo rand(6,13); ?></p></div>

              
               </div>   

        <?php  }  elseif($data==7){?>
        <div id="mydiv" class="share7">
             
            <div class="user" style="background-image:url(<?php echo $user_img; ?>);" >
                    <p class="nam_format"><?php echo $user_name; ?></p> 
                </div> 
             <div class="random"><p><?php echo rand(75,99); ?><br><?php echo rand(75,99); ?><br><?php echo rand(75,99); ?></p></div> 
             
               </div>

        <?php  }  elseif($data==8){?>
         <div id="mydiv" class="share8">
             
              <div class="user" style="background-image:url(<?php echo $user_img; ?>);" >
                    <p class="nam_format"><?php echo $user_name; ?></p> 
                </div> 
                <div class="frn" style="background-image:url(<?php echo $friend_img; ?>);" >
                    <p class="nam_format"><?php echo $friend_name; ?></p>   
                </div>
             <div class="descp"><p>UNBELIVABLE</p></div> 
             

              
               </div>   

        <?php  }  elseif($data==9){?>
         <div id="mydiv">
                  <img class="user_photo" src="<?php echo $user_img; ?>"/>
                  <img class='frn_photo' src='<?php echo $friend_img; ?>'>
              
               </div>   

        <?php  }  elseif($data==10){?>
        <div id="mydiv" class="share10">
               <div class="user" style="background-image:url(<?php echo $user_img; ?>);" >
                </div> 
                <div class="frn" style="background-image:url(<?php echo $friend_img; ?>);" >
                </div>
                <div class="descp"><p><?php echo $user_name; ?>, <br> <?php echo $friend_name; ?> is going to cheat on you ! !</p></div>    
                    
              
               </div>   

        <?php  }  elseif($data==11){?>
         <div id="mydiv" class="share11">
             
             <div class="user" style="background-image:url(<?php echo $user_img; ?>);" >
                    <p class="nam_format"><?php echo $user_name; ?></p> 
                </div> 
             <div class="descp"><p>FILL THE <br> FUCKING TRAGEDY</p></div> 
              
          </div>   

        <?php  }  elseif($data==12){?>
         <div id="mydiv" class="share12">
             
             <div class="user" style="background-image:url(<?php echo $user_img; ?>);" >
                    <p class="nam_format"><?php echo $user_name; ?></p> 
                </div> 
             <div class="descp"><p>FILL THE <br> FUCKING TRAGEDY</p></div> 
              
          </div>   

        <?php  }  elseif($data==13){?>
          <div id="mydiv" class="share13">
             
            <div class="user" style="background-image:url(<?php echo $user_img; ?>);" >
                </div> 
                <div class="frn" style="background-image:url(<?php echo $friend_img; ?>);" >
                    <p class="nam_format"><?php echo $friend_name; ?></p>   
                </div>
             <img class="heart" src ="img/heart.jpg"> 
              
          </div>   


        <?php  }  elseif($data==14){?>
          <div id="mydiv" class="share14">
             
             
            
            <div class="frn1" style="background-image:url(<?php echo $friend_img1; ?>);" ></div>
            <div class="frn2" style="background-image:url(<?php echo $friend_img2; ?>);" ></div>
            <div class="user" style="background-image:url(<?php echo $user_img; ?>);" ></div> 
            <div class="frn4" style="background-image:url(<?php echo $friend_img3; ?>);" ></div>
            <div class="frn5" style="background-image:url(<?php echo $friend_img4; ?>);" ></div>
            
                  <?php 
                  //echo $user_name;
                  //echo $friend_name1;
                  //echo $friend_name2;
                 // echo $friend_name3;
                  //echo $friend_name4;
                   ?>
              
               </div>   

        <?php  } 
        else{} ?>
       
                
       
             </div>      
              
            
            
             
            
        <div class="four columns ">
        <img class="one_clicked_ad" src="img/7588864125167831078.jpg">   
            
        </div>    
        
        
        
        </div>
        <!--script-->
<script src="http://html2canvas.hertzen.com/build/html2canvas.js"></script>
 <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
 <script type="text/javascript" src="js/custom.js"></script>

<!---------------------- check similar ------------------>
  
        <div class="row">
   
            <div class="four columns "> <a href="one_clicked.php?data=3" ><img class="id3h hvr-float" src="img/game/id3/id3h.jpg"></a> </div>
            <div class="four columns "> <a href="one_clicked.php?data=4" ><img class="id4h hvr-float" src="img/game/id4/id4h.jpg"></a> </div>
            <div class="four columns "> <a href="one_clicked.php?data=5" ><img class="id5h hvr-float" src="img/game/id5/id5h.jpg"></a> </div>
            
        <div class="row">
            <div class="four columns "> <a href="one_clicked.php?data=6" ><img class="id6h hvr-float" src="img/game/id6/id6h.jpg"></a></div>
            <div class="four columns "> <a href="one_clicked.php?data=7" ><img class="id7h hvr-float" src="img/game/id7/id7h.jpg"></a></div>
            <div class="four columns "> <a href="one_clicked.php?data=8" > <img class="id8h hvr-float" src="img/game/id8/id8h.jpg"></a></div>
            
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
     

