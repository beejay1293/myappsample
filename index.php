<script type="text/javascript">
	
function load(Thediv, thefile) {
	if(window.XMLHttpRequest) {
		xmlhttp = new XMLHttpRequest();
	}else{
		xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
	}



	xmlhttp.onreadystatechange = function() {
		if(xmlhttp.readyState == 4 && xmlhttp.status ==200){
			document.getElementById(Thediv).innerHTML = xmlhttp.responseText;
		}
	}

	xmlhttp.open('GET', thefile, true);
	xmlhttp.send();
}

</script>

  

  <!DOCTYPE html>
  <html>
  <head>
  	<title></title>
  </head>
  <body>
  <input type="submit" name="submit" value="submit" onclick="load('anotherdiv', 'include.php');">

  <div id="anotherdiv"></div>
  </body>
  </html>