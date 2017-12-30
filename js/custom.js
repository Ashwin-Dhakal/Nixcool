$(".btnShare").click(function(e){
    e.preventDefault();
    elem = $(this);
		postToFeed(elem.data('title'), elem.data('desc'), elem.prop('href'), elem.data('image'));
    return false;			 
});

$(document).ready(function(){
   photo();
});


function photo() {
   html2canvas([document.getElementById('mydiv')], {
    onrendered: function (canvas) {
    var dataURL = canvas.toDataURL('image/png');
     var image = new Image();
    image.src = dataURL;

$.ajax({
  type: 'POST',
  url: 'script.php',
  data: {
    dataURL: dataURL
  }
}).done(function(o) {
   if(o == 'ok'){
     window.location = "./share-final.php";
   }
   else{
     alert("An error occured");
   }
 });

}

});



}
