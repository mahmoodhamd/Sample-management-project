<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

<script>
$(document).ready(function(){
  
    $('.confirm-delete').click(function(e){
        e.preventDefault();
        confirmDialog=confirm('Are you sure ? you want to delete data');
       if(confirmDialog){
        var id=$(this).val();
        //alert(id);
        $.ajax({
         type:'DELETE',
         url:'employee/confirmdelete/'+id,
      
         success :function(response){
          alert('data deleted successfully');
          window.location.reload();
     
         }

        });
       }
   
    });

});


</script>




</body>
</html>
