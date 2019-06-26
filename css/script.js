



$(".canselect").on("change",function(){
  $(".selected").html($(".canselect:checked").length)
})

$('.openSidenav').click(function() {
  $('.sidenav').css('padding', '12px');
  $('.sidenav').css('width', '200px');
  $('.content').css('marginLeft', '215px');
});
$('.close').click(function() {
  $('.sidenav').css('padding', '0px');
  $('.sidenav').css('width', '0px');
  $('.content').css('marginLeft', '34px');
});