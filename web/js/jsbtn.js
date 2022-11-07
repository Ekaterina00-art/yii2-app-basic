var button = document.querySelector("button");
button.addEventListener("click", function() {
    alert("Кнопка нажата.");
});
function square(number) {
    return number+1;
}
//var test = document.getElementById('test');
/*;document.addEventListener("DOMContentLoaded", function(event){
  document.getElementById('1').onclick = function (){
    document.l
  };
});*/
function clickMe(){
  //var result ="<?php echo $i = $i+1; ?>";
  alert("Кнопка нажата.");
  $.pjax.reload({container: '#pjaxContent'});
  }
