
			document.getElementById('buttonlink1').addEventListener('click', function() {
				var ts_api_key = "9VV7F5VS2UX3JF9G";
				var url = "http://api.thingspeak.com/update?api_key=9VV7F5VS2UX3JF9G&field1=1"
				$.getJSON(url, function(data) {
					console.log(data);
				});
			});
		
			document.getElementById('buttonlink2').addEventListener('click', function() {
				var ts_api_key = "9VV7F5VS2UX3JF9G";
				var url = "http://api.thingspeak.com/update?api_key=9VV7F5VS2UX3JF9G&field1=0"
				$.getJSON(url, function(data) {
					console.log(data);
				});
			});

			function getThingSpeakLightState() 
			{
				var ts_channel_id = 992259;
				var xhttp = new XMLHttpRequest();
				xhttp.onreadystatechange = function() 
				{
					if (this.readyState == 4 && this.status == 200)
					 {
						var myObj = JSON.parse(this.responseText);
						if (myObj.field1 == 1) 
						{
							document.getElementById("LIGHTState").innerHTML = "ON";
						}
						else 
						{
							document.getElementById("LIGHTState").innerHTML = "OFF";
						}
					}
				};
				xhttp.open("GET", "https://api.thingspeak.com/channels/" + ts_channel_id + "/fields/1/last.json", true);
				xhttp.send();
			}