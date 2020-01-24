<!DOCTYPE html>
<html>
<body>

<h2>What Can JavaScript Do?</h2>

<p>JavaScript can change HTML attribute values.</p>

<p>In this case JavaScript changes the value of the src (source) attribute of an image.</p>

<input type="submit" onclick="document.getElementById('myImage').src='<?php echo base_url()?>/assets/images/bulbon.gif'" value="Turn on the light">

<img id="myImage" src="<?php echo base_url()?>/assets/images/bulboff.jpg" style="width:100px">

<input type="submit" onclick="document.getElementById('myImage').src='<?php echo base_url()?>/assets/images/bulboff.jpg'" value="Turn off the light">

</body>
</html>
