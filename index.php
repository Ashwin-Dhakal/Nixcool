<?php
if(!isset($_SESSION)){
    session_start();
    session_destroy();
    session_start();
}
$_SESSION['user-agent'] = $_SERVER['HTTP_USER_AGENT'];
function id()
{
   $id = md5(uniqid());
   $_SESSION['indexid'] = $id;
}
id();
?>
<html>
	<head>
	     <title>
	     	Nix Cool
	     </title>
	    <link rel="stylesheet" href="css/normalize.css">
	    <link rel="stylesheet" href="css/skeleton.css">
	     <link rel="stylesheet" href="css/hover.css">
         <link rel="stylesheet" href="css/index.css">
        <link rel="shortcut icon" type="image/png" href="/img/fevicon.jpg"/>

        
	</head>

<body>

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
                  <li><a href="#" class="current">Home</a></li>
                  <li><a href="ad_with_us.html">Advertise with us</a></li>
                  <li><a href="terms_n_conditions.html">Terms and conditions</a></li>
                  <li><a href="contact_us.html">contact us </a></li>
                  
                </ul>
        
            </div>
        
	</div>

    <!---------------------side AD + Most Favroit ---------------->
    <div class="row">
    <div class ="two columns "> <a href="#"> <img class="adsidefir" src="img/Bright-Sample-Vertical-Banner-Template.jpg">                       </a>      </div> 
    <div class="five columns "> <a href="one_clicked.php?data=1" >
    <img class="id1h hvr-float" src="img/game/id1/id1h.jpg"> </a>      </div>
        
    <div class="five columns"> <a href="one_clicked.php?data=2"> 
    <img class="id2h hvr-float" id="id1h" src="img/game/id2/id2h.jpg">   </a>      </div>
 
        
        
    </div>   

    <div class="row" style="margin-right: 30px">
        <div class="twelve columns lets_play">
            <p>Choose to Play</p>
        </div>
    </div>
    <!------------------  nine box -------------------------------->    
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
    
    <!-------------------footer ------------------------------------>    
    <div class="row"  style="margin-right: 30px">
        <div class="twelve columns footer_bg">
            <div class="three columns footer_logo"></div>
            <div class="six columns s4s"><p>copyright : Nix Cool  &#169; 2016  &nbsp; &nbsp; All rights reserved.<br> </p></div>
            <div class="three columns up_arrow "> </div>        
            
            
        </div> 
                    
                
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




