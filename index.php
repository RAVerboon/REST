<html>
	<head>
		<title>Hoi</title>
		<link rel="stylesheet" href="./stylesheet/basic.css">
		<link rel="stylesheet" href="./stylesheet/animations.css">
		<!--jQuery-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	</head>
	<body>
		<header id="home">
			<h1>REST</h1>
			<h3>REpresentational State Transfer</h3>
			<ul id='headerList'>
				<li><a href="#home" id="homeLink">Home</a></li>
				<li class="seperator"></li>
				<li><a href="#" id="whatLink">Wat is REST?</a></li>
				<li class="seperator"></li>
				<li><a href="#" id="altLink">Alternatieven</a></li>
				<li class="seperator"></li>
				<li><a href="#" id="originLink">Ontstaan</a></li>
				<li class="seperator"></li>
				<li><a href="#" id="appLink">Toepassingen</a></li>
			</ul>
			<ul id="whatList" class="subList">
				<li>Inleiding</li>
				<li class="seperator"></li>
				<li>Daarom</li>
				<li class="seperator"></li>
				<li>Vind ik</li>
				<li class="seperator"></li>
				<li>REST leuk</li>
			</ul>
			<ul id="altList" class="subList">
				<li>Inleiding</li>
				<li class="seperator"></li>
				<li>SOAP</li>
				<li class="seperator"></li>
				<li>WSDL</li>
			</ul>
			<ul id="originList" class="subList">
				<li>Heel</li>
				<li class="seperator"></li>
				<li>Vroegah</li>
				<li class="seperator"></li>
				<li>Er was eens</li>
			</ul>
			<ul id="appList" class="subList">
				<li>Web services</li>
				<li class="seperator"></li>
				<li>Big Data</li>
				<li class="seperator"></li>
				<li>In de cloud</li>
				<li class="seperator"></li>
				<li>API</li>
			</ul>
		</header>
		<main>
		</main>
		<footer>
			
		</footer>

		<script>
			$("#whatLink").hover(function() {
				hideSubMenus();
				$("#whatList").css('display', 'block');
				$("#whatList").addClass('animated fadeInDown');
			});
			$("#altLink").hover(function() {
				hideSubMenus();
				$("#altList").css('display', 'block');
				$("#altList").addClass('animated fadeInDown');
			});
			$("#originLink").hover(function() {
				hideSubMenus();
				$("#originList").css('display', 'block');
				$("#originList").addClass('animated fadeInDown');
			});
			$("#appLink").hover(function() {
				hideSubMenus();
				$("#appList").css('display', 'block');
				$("#appList").addClass('animated fadeInDown');
			});

			function hideSubMenus() {
				var subMenus = document.getElementsByClassName("subList");
				var i = 0;

				for(i = 0; i < subMenus.length; i++) {
					subMenus[i].style.display = 'none';
				}
			}
		</script>
	</body>
</html>