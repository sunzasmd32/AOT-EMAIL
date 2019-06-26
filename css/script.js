



$(".canselect").on("change",function(){
  $(".selected").html($(".canselect:checked").length)
})