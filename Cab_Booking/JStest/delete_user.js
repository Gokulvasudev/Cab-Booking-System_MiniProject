 function delete_user(id){
            
        var id=id;    
       
       var option=alert("Do you want to delete "+id);
        
        
        var dataString = 'id='+ id;
        
         $.ajax({
          type: "POST",
          url: "delete_usertest.php",
          data: dataString,
          
      
});
$(document).ajaxStop(function(){
    window.location.reload();
});
        }  