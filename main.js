$(function () {
	$("#derivation").accordion({
		heightStyle: "content"
	});
	$(document).tooltip();

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

	$('a').click(function(){
	    $('html, body').animate({
	        scrollTop: $( $.attr(this, 'href') ).offset().top
	    }, 400);
	});
	$('#scrollToTop').click(function () {
		$('html, body').animate({
			scrollTop: 0
		}, 400);
	});
	$(document).scroll(function() {
		var y = $(this).scrollTop();
		if (y > (window.innerHeight * 1.3)) {
			$('#topMenu').fadeIn();
		}
		else {
			$('#topMenu').fadeOut();
		}
	});

	$("#flickrSearch").selectmenu({
		change: function (event, data) {
			loadFlickrImages(data.item.value)
		}
	});

	loadFlickrImages('webservice');
});

function hideSubMenus() {
	var subMenus = document.getElementsByClassName("subList");
	var i = 0;

	for(i = 0; i < subMenus.length; i++) {
		subMenus[i].style.display = 'none';
	}
}

function loadFlickrImages(search) {
	$("#flickrPhotos").html('');

	$.getJSON('https://api.flickr.com/services/rest/?method=flickr.photos.search&api_key=3c195123945140651a8151c7d4cfbd0b&text=' + search + '&per_page=10&format=json&nojsoncallback=1', function (data) {
		$.each( data.photos.photo, function (key, val) {
			var baseLink = 'https://farm' + val.farm + '.staticflickr.com/' + val.server + '/' + val.id + '_' + val.secret;
			$("#flickrPhotos").append('<a href="' + baseLink + '.jpg" class="flickrLink" target="_blank"><img src="' + baseLink + '_q.jpg" alt="hoi" /></a>');
		});
	});
}