<!DOCTYPE html>
<html>
	<head>
		<title>Hoi</title>
		<link rel="stylesheet" href="./stylesheet/basic.css">
		<link rel="stylesheet" href="./stylesheet/animations.css">
		<meta charset="UTF-8">
		<!--jQuery-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<link rel="stylesheet" href="./stylesheet/jquery-ui.css" />
		<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>
	</head>
	<body>
		<header id="home">
			<div id="headerContent">
				<h1>REST</h1>
				<h3>REpresentational State Transfer</h3>
				<ul id='headerList'>
					<li><a href="#home" id="homeLink">Home</a></li>
					<li class="seperator"></li>
					<li><a href="#what" id="whatLink">Wat is REST?</a></li>
					<li class="seperator"></li>
					<li><a href="#" id="altLink">Alternatieven</a></li>
					<li class="seperator"></li>
					<li><a href="#" id="originLink">Ontstaan</a></li>
					<li class="seperator"></li>
					<li><a href="#" id="appLink">Toepassingen</a></li>
				</ul>
				<ul id="homeList" class="subList" style='display:block;'>
					<li></li>
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
			</div>
		</header>
		<main>
			<section id="what">
				<h1>Wat is REST?</h1>
				<h3>Stapsgewijze opbouw REST architectuur</h3>
				<div id="accordion">
					<ul>
						<li><a href="#firstHeader">First header</a></li>
						<li><a href="#secondHeader">Second header</a></li>
					</ul>
					<div id="firstHeader">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed tincidunt eros, at porta massa. Mauris nec purus ac tortor fermentum elementum eget a lorem. Vivamus at vehicula ex. Vestibulum sollicitudin lacus at tempor laoreet. Proin rutrum fringilla orci a fermentum. Cras vulputate nec nisi id volutpat. Quisque hendrerit bibendum mauris, eget porta velit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Interdum et malesuada fames ac ante ipsum primis in faucibus. Integer feugiat hendrerit sapien. Fusce eleifend libero et nunc porttitor consequat. Aenean pulvinar id leo eget tempus.</p>
					</div>
					<div id="secondHeader">
						<p>Sed sagittis rhoncus laoreet. Aenean in purus sit amet ante rutrum convallis quis fringilla orci. Quisque metus sapien, tincidunt ut venenatis quis, semper sit amet nisl. Morbi imperdiet odio gravida, blandit mauris id, tincidunt ex. Etiam a dui at eros feugiat mollis. Quisque volutpat lorem pretium, posuere tellus et, vestibulum est. Etiam eu erat finibus, tristique mauris nec, consectetur tortor. Aliquam luctus ullamcorper porttitor. Praesent gravida pulvinar scelerisque. Sed fermentum, velit in venenatis semper, nunc nisl venenatis dui, vel mattis arcu metus sed turpis. Aliquam tempor tristique odio in sodales.</p>
					</div>
				</div>
			</section>
		</main>
		<footer>
			
		</footer>

		<script>
			$("#accordion").tabs();
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