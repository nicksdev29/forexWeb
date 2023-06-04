
<html>
<head>
	<title>javascript date object 
		
	</title>
</head>

	<body>
		<div class="timebox">
			<h1>Tokyo</h1>
			<p id="tokyoTime"></p>			
		</div>

		<div class="timebox">
			<h1>Hong kong</h1>
			<p id="hongkongTime"></p>			
		</div>

		<div class="timebox">
			<h1>Mumbai</h1>
			<p id="mumbaiTime"></p>			
		</div>

		<div class="timebox">
			<h1>Dubai</h1>
			<p id="dubaiTime"></p>			
		</div>

		<div class="timebox">
			<h1>London</h1>
			<p id="londonTime"></p>			
		</div>

		

		<div class="timebox">
			<h1>New york</h1>
			<p id="newyorkTime"></p>			
		</div>

		
		
		<script>
			var getTokyoTime = function() {
				document.getElementById("tokyoTime").innerHTML = new Date() .toLocaleString("en-US",{timeZone:'Asia/Tokyo',timeStyle:'medium', hourCycle:'h24'});
			}
			getTokyoTime();
			setInterval(getTokyoTime,1000);

			var getHongkongTime = function() {
				document.getElementById("hongkongTime").innerHTML = new Date() .toLocaleString("en-US",{timeZone:'Asia/Hong_kong',timeStyle:'medium', hourCycle:'h24'});
			}
			getHongkongTime();
			setInterval(getHongkongTime,1000);

			var getMumbaiTime = function() {
				document.getElementById("mumbaiTime").innerHTML = new Date() .toLocaleString("en-US",{timeZone:'Asia/Kolkata',timeStyle:'medium', hourCycle:'h24'});
			}
			getMumbaiTime();
			setInterval(getMumbaiTime,1000);

			var getDubaiTime = function() {
				document.getElementById("dubaiTime").innerHTML = new Date() .toLocaleString("en-US",{timeZone:'Asia/Dubai',timeStyle:'medium', hourCycle:'h24'});
			}
			getDubaiTime();
			setInterval(getDubaiTime,1000);

			var getLondonTime = function() {
				document.getElementById("londonTime").innerHTML = new Date() .toLocaleString("en-US",{timeZone:'Europe/London',timeStyle:'medium', hourCycle:'h24'});
			}                                                           
			getLondonTime();
			setInterval(getLondonTime,1000);

			var getNewyorkTime = function() {
				document.getElementById("newyorkTime").innerHTML = new Date() .toLocaleString("en-US",{timeZone:'America/New_york',timeStyle:'medium', hourCycle:'h24'});
			}
			getNewyorkTime();
			setInterval(getNewyorkTime,1000);

			</script>


	</body> 
</html>
