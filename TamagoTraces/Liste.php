<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>title</title>
   <link rel="stylesheet" href="style.css" />
   <script src="jquery.js"></script>
     <script>
    $(document).ready(function() {
    $("p:lt(2)").remove();
    $("p").click(function() {
    	var stockagechemin = $(this).attr("id");
    	var doc = $('<embed src="' + stockagechemin + '"/>').width("800").height("600");
    	$('#pdf').empty().append(doc);
    	}
		)})
       	</script>
      </head>
  <body>
    <header>
      <div class="header_images">
<img class="logo" id="logoEductice" src="images/logo_eductice.jpg">
<img class="logo" id="logoENS" src="images/logo_ens.jpg">
<img class="logo" id="logoIFE" src="images/logo_ife.jpg">
      </div>
    <div class="header_titre">
      <h1>TAMAGOCOURS-FORMATEURS</h1>
    </div>
   </header>
    <h1>Archives des exports pdf</h1>

<?php
if ($handle = opendir('/pdf')) {
       while (false !== ($entry = readdir($handle))) {
        echo "<p id='pdf/$entry'>$entry</p>";
    }
    closedir($handle);

    echo "<div id='pdf'></div>";


}  
?>