<?php

if(isset($_POST['button1']))
{
header("location: https://api.thingspeak.com/update?api_key=9VV7F5VS2UX3JF9G&field1=1");
header("location: index.php?switch=ON");
}
else
{
	header("location: https://api.thingspeak.com/update?api_key=9VV7F5VS2UX3JF9G&field1=0");
	// header("location: index.php?switch=OFF");

}