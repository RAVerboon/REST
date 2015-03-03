$(function () {
	$("#derivation").accordion({
		heightStyle: "content"
	});
	$("#soapProcessingList").accordion({
		heightStyle: "content"
	});
	$(document).tooltip();

	$("#whatLink").hover(function() {
		hideSubMenus();
		$("#whatList").css('display', 'block');
		$("#whatList").addClass('animated fadeInDown');
	});
	$("#soapLink").hover(function() {
		hideSubMenus();
		$("#soapList").css('display', 'block');
		$("#soapList").addClass('animated fadeInDown');
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
	$(document).scroll(function() {
		var y = $(this).scrollTop();
		if (y > (window.innerHeight * 1.3)) {
			$("#topMenu").stop();
			$('#topMenu').fadeIn();
		}
		else {
			$("#topMenu").stop();
			$('#topMenu').fadeOut();
		}
	});

	$("#flickrSearch").selectmenu({
		change: function (event, data) {
			loadFlickrImages(data.item.value)
		}
	});

	$("#flickrSearch-button").css('float', 'right');

	loadFlickrImages('rest+api');
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

	$.getJSON('https://api.flickr.com/services/rest/?method=flickr.photos.search&api_key=c976425001782b9e0bef4353505cb095&text=' + search + '&sort=interestingness-desc&per_page=10&format=json&nojsoncallback=1', function (data) {
		$.each( data.photos.photo, function (key, val) {
			var baseLink = 'https://farm' + val.farm + '.staticflickr.com/' + val.server + '/' + val.id + '_' + val.secret;
			$("#flickrPhotos").append('<a href="' + baseLink + '.jpg" class="flickrLink" target="_blank"><img src="' + baseLink + '_q.jpg" alt="hoi" /></a>');
		});
	});
}