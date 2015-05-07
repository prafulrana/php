<script src="http://code.jquery.com/jquery-latest.js"></script>
<script>
 $(document).ready(function(){
     setInterval(ajaxcall, 1000);
 });
 function ajaxcall(){
     $.ajax({
         url: 'gettime.php',
         success: function(data) {
             data = data.split(':');
             $('#hours').html(data[0]);
             $('#minutes').html(data[1]);
             $('#seconds').html(data[2]);
         }
     });
 }
</script>
<span id="hours">0</span>:<span id="minutes">0</span>:<span id="seconds">0</span>
