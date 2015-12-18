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
<?php
    $date = date('h:i:s A');
    $date = explode(':', $date);
    $hrs = $date[0];
    $min = $date[1];
    $sec = $date[2];
?>
<h3> Hello there </h3>
<p> Current time is: <span id="hours"><?php echo $hrs; ?></span>:<span id="minutes"><?php echo $min; ?></span>:<span id="seconds"><?php echo $sec; ?></span> </p>
