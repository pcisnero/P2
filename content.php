


<div id="container" class= "well" >
<h2>  My Super Password Generator</h2>

<p> Your password is: <?php echo ($password) ? $password : '' ; ?></p>

<h2> Generate a new Password</h2>

<form method= "POST" action= "index.php"  >
<div >

	<label name="count">Number of words </label> </td>
	<input type= "text" id= "count" name="count"> <br> 
	<label name="uppercase">Uppercase first letter </label>
	<input type= "checkbox" name="uppercase" value="Checkbox" <?php echo ($uppercase? 'checked="checked"': '') ; ?> > <br> 
	<label name="symbol">Include a symbol</label>
	<input type= "checkbox" name="symbol" value="symbol" <?php echo ($symbol? 'checked="checked"': '') ; ?> > <br> 
	<label name="number">Include a number </label></td>
	<input type= "checkbox" name="number" value="number"<?php echo ($number? 'checked="checked"': '') ; ?>  > <br> 
		

</div>

<input type = "submit" name="Submit" value="Submit"/><br> 



</form>

	<hr>



<p><img src=""></p>

<hr>

</div>