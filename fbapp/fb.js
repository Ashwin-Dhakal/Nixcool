function statusChangeCallback(response) {
      if (response.status === 'connected') {
        window.location.replace('./fbapp/callback.php');
    } else if (response.status === 'not_authorized') {
        alert("Please login to our app first")
             window.location.replace('../destroy.php');
    } else {
        alert("Please log in to facebook");
        window.location.replace('../destroy.php')
      }
}

function checkLoginState() {
    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
    });
}


window.fbAsyncInit = function(){
FB.init({
    appId: '1884206581865651',
    status: true,
    cookie: true,
    xfbml: true,
    version: 'v2.8'
   }); 
};
(function(d, debug){var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
    if(d.getElementById(id)) {return;}
    js = d.createElement('script'); js.id = id; 
    js.async = true;js.src = "//connect.facebook.net/en_US/all" + (debug ? "/debug" : "") + ".js";
    ref.parentNode.insertBefore(js, ref);}(document, /*debug*/ false));
function postToFeed(title, desc, url, image){
    var imagelink = 'http://www.nixcool.com/'+image;
var obj = {method: 'feed', link: url, picture: imagelink, name: title , description: desc};
function callback(response){
       window.location = "./destroy.php";
}
FB.ui(obj, callback);
}
