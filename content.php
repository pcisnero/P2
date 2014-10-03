


<div id="container" class= "well well-lg" >
<h2 class="page-header"> Super Password Generator</h2>

<p class = "mypassword"> Your password is: <?php echo ($password) ? $password : '' ; ?></p>

<h2 class="title2"> Generate a new Password</h2>

<form method= "POST" action= "index.php"  >


<div >
<table>
	
	<tbody>
		<tr>
			<td class ="labels1"><label name="count">Number of words </label> </td>
			<td class ="inputs"><input type= "text" id= "count" name="count"> <br> </td>
			<td class ="Addtext"> Max Words 20, but think about it... You dont really need a 20 words password!!</td>
		</tr>
		<tr>
			<td class ="labels2"><label name="uppercase">Uppercase first letter </label></td>
			<td class ="inputs"><input type= "checkbox" name="uppercase" value="Checkbox" <?php echo ($uppercase? 'checked="checked"': '') ; ?> > <br> </td>
			<td class ="Addtext">Not strong enough, we will add an Uppercase to your Password</td>
			
		</tr>
		<tr>
			<td class ="labels3"><label name="symbol">Include a symbol</label></td>
			<td class ="inputs"><input type= "checkbox" name="symbol" value="symbol" <?php echo ($symbol? 'checked="checked"': '') ; ?> > <br> </td>
			<td class ="Addtext"> Yes!!! Include a symbol!!! </td>
			
		</tr>
<tr>
			<td class ="labels4"><label name="number">Include a number </label></td>
			<td class ="inputs"><input type= "checkbox" name="number" value="number"<?php echo ($number? 'checked="checked"': '') ; ?>  > <br>  </td>
			<td class ="Addtext"> Randomly selected number </td>
			
		</tr>


	</tbody>
</table>
	

</div>
<hr>

<input type = "submit" name="Submit" value="Submit"/><br> 

<hr>


</form>


<footer>
  <p>Posted by: Patricia Cisneros Fernandez</p>
  <p>Contact information: <a href="pcisnerosfernandez@g.harvard.edu">
  pcisnerosfernandez@g.harvard.edu</a>.</p>
</footer>

	<hr>



</body>

<hr>

</div>