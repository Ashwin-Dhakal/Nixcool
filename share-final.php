<?php
if(!isset($_SESSION)){
    session_start();
}
if($_SESSION['user-agent']!=$_SERVER['HTTP_USER_AGENT']){
    die(header('location: ./destroy.php'));
}


set_time_limit(0);
if(isset($_SESSION['oneclickid'])&&isset($_SESSION['indexid'])){

}else{
    die(header('location: ./destroy.php'));    
}
    if(isset($_SESSION['data']) && $_SESSION['filename']){
    $data = $_SESSION['data'];
    $filename = $_SESSION['filename'];
    $result_path = "photos/$filename";
}
else{
    die(header('location: ./destroy.php'));
}

$titles = array('',
                'Who is writing a beautiful love letter to you? | Click Here',
                'How good kisser are you? | Click Here',
                'Who dreamed you last night? | Click Here',
                'Which one of your friend is having a baby soon? | Click Here',
                'Find your lucky color, letter and number. | Click Here',
                'Who visits your profile often? | Click Here',
                'How beautiful are your body organs? | Click Here',
                'Who were you in past life? | Click Here',
                'Who is jealous of your Sweet-heart? | Click Here',
                'Who is going to Cheat on you? | Click Here',
                'What secret is your sweetheart hiding from you? | Click Here',
                'Find three things to be happened in coming month | Click Here',
                'Find your another half | Click Here',
                'Design your own rocking band | Click Here');
$desc = 'For more fun apps, visit us';

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
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
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
        <div class="eight columns" style="align-content : center;"> 

         <img class="result" src="<?php echo $result_path; ?>">
        <!--<a class="btnShare" href="share.php" >Share</a> -->
        <div class="share_button">
            <a class="btnShare btnz share facebook" 
                href="#" 
                data-image="<?php echo $result_path; ?>" 
                data-title="<?php echo $titles[$data]; ?>" 
                data-desc="<?php echo $desc; ?>">
                    <i class="fa fa-facebook"></i>&nbsp &nbsp&nbsp Share on facebook
            </a>
        </div>

    </div>      

 <div class="four columns ">
        <img class="one_clicked_ad" src="img/7588864125167831078.jpg">   
            
        </div>    
        
        
        
        </div>
        <!--script-->
<script src="http://html2canvas.hertzen.com/build/html2canvas.js"></script>
 <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
 <script type="text/javascript" src="js/custom.js?v=1>"></script>

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
     
