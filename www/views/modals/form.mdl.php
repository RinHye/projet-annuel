<pre>
<?php //print_r($config);?>
<?php print_r($errors);?>
</pre>

<form method="<?php echo $config["config"]["method"]?>" action="<?php echo $config["config"]["action"]?>">
		
	<?php foreach ($config["input"] as $name => $params):?>
		
		<?php if($params["type"] == "date" || $params["type"] == "text" || $params["type"] == "email" || $params["type"] == "password" || $params["type"] == "hidden"):?>

			<input 
				value="<?php echo $params["value"]; ?>"
				type="<?php echo $params["type"];?>" 
				name="<?php echo $name;?>"
				placeholder="<?php echo $params["placeholder"];?>"
				<?php echo (isset($params["required"]))?"required='required'":"";?>
				><br>

		<?php endif;?>

	<?php endforeach;?>

	<input type="submit" value="<?php echo $config["config"]["submit"];?>">

</form>