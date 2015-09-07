
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>

</head>
  
<body>
<?php
$date=date('d/m/y G:i:s');
?>
<form name="connexionForm" id="connexionForm">  
	<span id="erreur"></span>
 
	<input type='hidden' name='test' id='test'value="<?php echo $date ?>">
 
        <input type="submit" value="test1" class="bouton" />
</form>
<div name="connexion" id="connexion" style="color:blue"></div>
   
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
  <script src='jquery.js'>
 
  </script>  



</body>
</html>