<!DOCTYPE html> 
<html> 
<head> 
	<title>My Page</title> 
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" href="css/themes/default/jquery.mobile-1.2.0.min.css" />
	<script src="js/jquery.js"></script>
	<script src="js/jquery.mobile-1.2.0.min.js"></script>
	
</head> 
<body> 

<div data-role="page" id="bar">

	<div data-role="header">
		<h1>Create an app</h1>
	</div><!-- /header -->

	<div data-role="content">	
		<ul data-role="listview" data-inset="true" data-filter="false">
			<li><a href="#custom-1" data-transition="slide">Custom</a></li>
			<li><a href="#">Art</a></li>
			<li><a href="#">Books</a></li>
			<li><a href="#">Business</a></li>
			<li><a href="#">Games</a></li>
			<li><a href="#">Medical</a></li>
			<li><a href="#">Health</a></li>
			<li><a href="#">Lifestyle</a></li>
			<li><a href="#">News</a></li>
			<li><a href="#">Productivity</a></li>
			<li><a href="#">Reference</a></li>
		</ul>		
	</div><!-- /content -->
	
	<div data-role="footer">
		<h4>Page Footer</h4>
	</div><!-- /footer -->
	
</div><!-- /page -->

<!-- Name the app -->
<div data-role="page" id="custom-1">

	<div data-role="header">
		<a href="#" data-rel="back" data-icon="arrow-l">Back</a>
		<h1>Step 1</h1>
		<a href="#custom-2" onclick="save_appName()" data-transition="slide" data-icon="arrow-r">Next</a>
	</div><!-- /header -->

	<div data-role="content">	

		<p>
		<form onsubmit="save_appName()">
			<label for="appname"><h3>Create an App Name:</h3></label> 
			<input type='text' name="appName" id="saveAppName"/> 
		</form>
		</p>

		<script> 
		function save_appName() {
		  var nameInput = document.getElementById("saveAppName");
		  localStorage.setItem("appName", nameInput.value); 
		  var storedNameValue = localStorage.getItem("appName"); 
		  alert("Your app is named: " + storedNameValue);
		  // etc..
		}
		</script>
		
	</div><!-- /content -->

	<div data-role="footer">
		<h4>Page Footer</h4>
	</div><!-- /footer -->
</div><!-- /page -->

<!-- Choose an icon -->
<div data-role="page" id="custom-2">

	<div data-role="header">
		<a href="#" data-rel="back" data-icon="arrow-l">Back</a>
		<h1>Step 2</h1>
		<a href="#custom-3" data-transition="slide" data-icon="arrow-r" onclick="save_appIcon()">Next</a>
	</div><!-- /header -->

	<div data-role="content">	
		<h3>Choose an app icon:</h3>
		
		<div data-role="fieldcontain">
		 	<fieldset data-role="controlgroup">
				<input type="radio" name="icon-choice-1" id="icon-choice-1" value="blueIcon">
				<label for="icon-choice-1">Blue icon</label>
				<input type="radio" name="icon-choice-1" id="icon-choice-2" value="redIcon" checked="checked">
				<label for="icon-choice-2">Red icon</label>
				<input type="radio" name="icon-choice-1" id="icon-choice-3" value="blueIcon">
				<label for="icon-choice-3">Green icon</label>
				<input type="radio" name="icon-choice-1" id="icon-choice-4" value="blueIcon">
				<label for="icon-choice-4">Purple icon</label>
				<input type="radio" name="icon-choice-1" id="icon-choice-5" value="blueIcon">
				<label for="icon-choice-5">Custom</label>
		    </fieldset>
		</div>
		
		<script> 
		function save_appIcon() {
		  var iconInput = $('input:radio:checked').val();
		  localStorage.setItem("appIcon", iconInput); 
		  var storedAppIconValue = localStorage.getItem("appIcon"); 
		  alert(storedAppIconValue + " app icon is saved!");
		  // etc..
		
		  // store to input
		
	      var storedNameValue = localStorage.getItem("appName");
	      $("#finalAppName").html(storedNameValue);
	
		  var storedAppIconValue = localStorage.getItem("appIcon");
	      $("#formAppIcon").val(storedAppIconValue);
		
		}
		</script>
		
	</div><!-- /content -->

	<div data-role="footer">
		<h4>Page Footer</h4>
	</div><!-- /footer -->
</div><!-- /page -->


<!-- Choose IF statement -->
<div data-role="page" id="custom-3">

	<div data-role="header">
		<a href="#" data-rel="back" data-icon="arrow-l">Back</a>
		<h1>Step 3</h1>
		<a href="#custom-4" data-transition="slide" data-icon="arrow-r" onclick="">Next</a>
	</div><!-- /header -->

	<div data-role="content">	
		<h3>Choose a user:</h3>		
		
		Ingredients: My app allows <b><span id="app-user">[user]</span></b> to <b><span id="device-action">[do something with their phone]</span></b> <b><span id="app-content">[content]</span></b> and <b><span id="app-action">[action]</span></b>.
				
		<div data-role="fieldcontain">
		 	<fieldset data-role="controlgroup" id="radio">
				<input type="radio" name="user-1" id="radio-choice-1" value="1 person" checked="checked">
				<label for="radio-choice-1">1 person</label>
				<input type="radio" name="user-1" id="radio-choice-2" value="2 people">
				<label for="radio-choice-2">2 people</label>
				<input type="radio" name="user-1" id="radio-choice-3" value="2+ people">
				<label for="radio-choice-3">2+ people</label>
		    </fieldset>
		</div>
		
		<script> 
		
		$("input").click(function() {
			$("#app-user").html($('input[name=user-1]:checked').val()); 
		});

		</script>
		
	</div><!-- /content -->

	<div data-role="footer">
		<h4>Page Footer</h4>
	</div><!-- /footer -->
</div><!-- /page -->

<!-- Choose THIS variable -->
<div data-role="page" id="custom-4">

	<div data-role="header">
		<a href="#" data-rel="back" data-icon="arrow-l">Back</a>
		<h1>Step 4</h1>
		<a href="#custom-5" data-transition="slide" data-icon="arrow-r" onclick="">Next</a>
	</div><!-- /header -->

	<div data-role="content">	
			
			<h3>Choose what your device should do:</h3>

			Ingredients: My app allows <b><span id="app-user">1 person</span></b> to <b><span id="device-action">find</span></b> <b><span id="app-content">[content]</span></b> and <b><span id="app-action">[action]</span></b>.
			
		<div data-role="fieldcontain">
		 	<fieldset data-role="controlgroup">
				<input type="radio" name="device-1" id="radio-choice-1" value="blueIcon">
				<label for="radio-choice-1">Draw object (touch)</label>
				<input type="radio" name="device-1" id="radio-choice-2" value="redIcon" checked="checked">
				<label for="radio-choice-2">Find location (geolocation)</label>
				<input type="radio" name="device-1" id="radio-choice-3" value="blueIcon">
				<label for="radio-choice-3">Shake (accelerometer)</label>
				<input type="radio" name="device-1" id="radio-choice-4" value="redIcon">
				<label for="radio-choice-4">Take a photo (camera)</label>
				<input type="radio" name="device-1" id="radio-choice-5" value="redIcon">
				<label for="radio-choice-5">Take video (camera)</label>
		    </fieldset>
		</div>
		
		<script> 
		


		</script>
		
	</div><!-- /content -->

	<div data-role="footer">
		<h4>Page Footer</h4>
	</div><!-- /footer -->
</div><!-- /page -->

<!-- Choose content -->
<div data-role="page" id="custom-5">

	<div data-role="header">
		<a href="#" data-rel="back" data-icon="arrow-l">Back</a>
		<h1>Step 5</h1>
		<a href="#custom-6" data-transition="slide" data-icon="arrow-r" onclick="">Next</a>
	</div><!-- /header -->

	<div data-role="content">	
		
		<h3>Choose the content.</h3>

		Ingredients: My app allows <b><span id="app-user">1 person</span></b> to <b><span id="device-action">find</span></b> <b><span id="app-content">restaurants</span></b> and <b><span id="app-action">[action]</span></b>.
				
		<div data-role="fieldcontain">
		 	<fieldset data-role="controlgroup">
				<input type="radio" name="content-1" id="radio-choice-1" value="blueIcon">
				<label for="radio-choice-1">Friend</label>
				<input type="radio" name="content-1" id="radio-choice-2" value="redIcon">
				<label for="radio-choice-2">Movie theater</label>
				<input type="radio" name="content-1" id="radio-choice-3" value="blueIcon">
				<label for="radio-choice-3">Subway stop</label>
				<input type="radio" name="content-1" id="radio-choice-4" value="redIcon" checked="checked">
				<label for="radio-choice-4">Restaurant</label>
				<input type="radio" name="content-1" id="radio-choice-5" value="redIcon">
				<label for="radio-choice-5">Custom</label>
		    </fieldset>
		</div>
		
		<script> 
		
		</script>
		
	</div><!-- /content -->

	<div data-role="footer">
		<h4>Page Footer</h4>
	</div><!-- /footer -->
</div><!-- /page -->

<!-- Choose Action/DO something statement -->
<div data-role="page" id="custom-6">

	<div data-role="header">
		<a href="#" data-rel="back" data-icon="arrow-l">Back</a>
		<h1>Step 6</h1>
		<a href="#custom-7" data-transition="slide" data-icon="arrow-r" onclick="">Next</a>
	</div><!-- /header -->

	<div data-role="content">	
		
		<h3>Choose an action.</h3>

		Ingredients: My app allows <b><span id="app-user">1 person</span></b> to <b><span id="device-action">find</span></b> <b><span id="app-content">restaurants</span></b> and <b><span id="app-action">view it</span></b>.
		
		<div data-role="fieldcontain">
		 	<fieldset data-role="controlgroup">
				<input type="radio" name="action-1" id="radio-choice-1" value="blueIcon" checked="checked">
				<label for="radio-choice-1">View it</label>
				<input type="radio" name="action-1" id="radio-choice-2" value="redIcon">
				<label for="radio-choice-2">Email it</label>
				<input type="radio" name="action-1" id="radio-choice-3" value="blueIcon">
				<label for="radio-choice-3">Text it</label>
				<input type="radio" name="action-1" id="radio-choice-4" value="redIcon">
				<label for="radio-choice-4">Tweet it</label>
		    </fieldset>
		</div>
		
		<script> 
		
		</script>
		
	</div><!-- /content -->

	<div data-role="footer">
		<h4>Page Footer</h4>
	</div><!-- /footer -->
</div><!-- /page -->


<!-- Start of IFTTT IDEA -->
<div data-role="page" id="custom-7">

	<div data-role="header">
		<a href="#" data-rel="back" data-icon="arrow-l">Back</a>
		<h1>Preview your app</h1>
		<a href="#bar" data-transition="pop">Done</a>
	</div><!-- /header -->

	<div data-role="content">	
		

			<?php
				$publishedAppName = $_POST["publishedAppName"];
				$location = $_POST["location"];
				$filepath = "files/" . $publishedAppName . ".html";
				$file =fopen($filepath, "w");
				$myHTML = 
					
					"<!DOCTYPE html> 
					<html> 
					<head> 
						<title>" . $_POST["publishedAppName"] . "</title> 
						<meta name='viewport' content='width=device-width, initial-scale=1'> 
						<link rel='stylesheet' href='../css/themes/default/jquery.mobile-1.2.0.min.css' />
						<script src='../js/jquery.js'></script>
						<script src='../js/jquery.mobile-1.2.0.min.js'></script>
						<script src='http://code.jquery.com/jquery-latest.js'></script>
						<link rel='apple-touch-icon-precomposed' href='../img/icon-red-57.png'>
						<script>

							function getLocation()
							  {
							  if (navigator.geolocation)
							    {
							    navigator.geolocation.getCurrentPosition(showPosition,showError);
							    }
							  else{x.innerHTML='Geolocation is not supported by this browser.';}
							  }
							
							function showPosition(position)
							  {
							  var latlon=position.coords.latitude+','+position.coords.longitude;
							  var latitude = position.coords.latitude;
							  var longitude = position.coords.longitude;

							  var img_url='http://maps.googleapis.com/maps/api/staticmap?center='
							  +latlon+'&zoom=14&size=400x300&sensor=false';
							  document.getElementById('mapholder').innerHTML='<img src=http://maps.googleapis.com/maps/api/staticmap?center='+latlon+'&zoom=14&size=400x300&sensor=false>';

							  // add Lat and Long to page
							  $('#latitude').html(latitude);
							  $('#longitude').html(longitude);

								$.getJSON('https://api.foursquare.com/v2/venues/search?ll='+latitude+','+longitude+'&query=restaurants&limit=10&client_id=2POUFAUU4ZBJ2MTDOY3S2YHR2NIT52FYW0LUTPHBMNTJFJNQ&client_secret=YFDZI1YWV3ZI5S5SPM2DZJEQIEBPIDJ5XFZBWTIKIQZVQNYM&v=20120101',
								    function(data) {
								        $.each(data.response.venues, function(i,venues){
								            content = '<p>' + venues.name + '</p>';
								            $(content).appendTo('#names');
								       });
								});


							  }
							
							function showError(error)
							  {
							  switch(error.code) 
							    {
							    case error.PERMISSION_DENIED:
							      x.innerHTML='User denied the request for Geolocation.'
							      break;
							    case error.POSITION_UNAVAILABLE:
							      x.innerHTML='Location information is unavailable.'
							      break;
							    case error.TIMEOUT:
							      x.innerHTML='The request to get user location timed out.'
							      break;
							    case error.UNKNOWN_ERROR:
							      x.innerHTML='An unknown error occurred.'
							      break;
							    }
							  }
							
						</script>
					</head> 
					<body> 

					<div data-role='page' id='bar'>

						<div data-role='header'>
							<h1> " . $_POST["publishedAppName"] . "
						</div><!-- /header -->

						<div data-role='content'>	
						      <p><b>My Location: <div id='latitude'></div> <div id='longitude'></div></b></p>
							  <div id='mapholder'></div>
							  <div id='names'></div>
							  <button onclick='getLocation()'>Find nearby restaurants</button>

						</div><!-- /content -->

						<div data-role='footer'>
							<h4>Page Footer</h4>
						</div><!-- /footer -->

					</div><!-- /page -->

					</body>
					</html>";
				fwrite($file, $myHTML);
				fclose($file);
			?>	
				

				
				<p><h3>App name:</h3> <div id="finalAppName"></div></p>
				<p><h3>App icon:</h3> <div id="finalAppIcon"></div></p>
				<p><h3>What your app does:</h3> My app allows <b><span id="app-user">1 person</span></b> to <b><span id="device-action">find</span></b> <b><span id="app-content">restaurants</span></b> and <b><span id="app-action">view it</span></b>.</p>
				
				<form action="<?php echo $PHP_SELF;?>" method="post" onsubmit="this.formAppName.value = document.getElementById('finalAppName').innerHTML;" data-ajax="false">
				    <input type="hidden" name="publishedAppName" id="formAppName" value="" />
				    <input type="submit" value="Publish" name="submit" />
				</form>
				
				<div id="rightside">
					<?php
		
							if ($handle = opendir('files/')) {
								//echo "Directory handle: $handle\n";
								
					
							while (false !== ($file = readdir($handle))) {
																
								$pieces = explode(".", $file);
								
									if ($file == '.') {
									    // echo 'true';
									}

									else if ($file == '..') {
									    // echo 'true';
									}

									else if ($file == '.DS_Store') {
									    // echo 'true';
									}

									else if ($file == '.html') {
									    // echo 'true';
									}
									
									else if ($file == $publishedAppName . '.html') {
										echo "<h3>Share the link to your app:</h3>";
										echo "<a href='files/" . $file . "' target='_blank'>" . $pieces[0] . "</a><br />";
									}
								}
								closedir($handle);
							}
					?> 
				</div>

		
	</div><!-- /content -->

	<div data-role="footer">
		<h4>Page Footer</h4>
	</div><!-- /footer -->
</div><!-- /page -->

</body>
</html>