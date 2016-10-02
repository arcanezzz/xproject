
$('.sm-msg').delay(3000).slideUp();

$('.type-auto').on('keyup',function(){
    
    var text = $(this).val().trim().replace(/\s/g,'-').toLowerCase();
    $('.url-field').val(text);
});


$('.add-to-cart').on('click',function(){
  
  
   
   $.ajax({
       
      url: BASE_URL + "shop/add-to-cart",
      type:"GET",
      dataType:"html",
      data:{id: $(this).data('id')},
      success:function(response){
          
         location.reload();
      }
       
       
   });
    
});

$('.update-cart').on('click',function(){
    
     $.ajax({
       
      url: BASE_URL + "shop/update-cart",
      type:"GET",
      dataType:"html",
      data:{id: $(this).data('id'),op: $(this).data('op')},
      success:function(response){
        
          location.reload();
         
      }
       
       
   });
    
});