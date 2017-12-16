function slickSlider(){
	$('.slider').slick({
	  infinite: true,
	  autoplay: true,
	  arrows: true,
	  dots: true
	});
}

function magnificPopup(){
	$('.lightbox').magnificPopup({
			type: "image",
			gallery: {
					enabled: true,
					tPrev: "Vorheriges (Linke Pfeiltaste)",
					tNext: "Nächstes (Rechte Pfeiltaste)",
					tCounter: "%curr% von %total%"
			},
			tClose: "Schließen (Esc)",
			tLoading: "Lädt",
			image: {
					tError: '<a href="%url%">Das Bild</a> konnte nicht geladen werden.'
			},
			ajax: {
					tError: '<a href="%url%">Die Anfrage</a> ist fehlgeschlagen.'
			}
	});
}

function mmenu(){
		$("#menu").mmenu();
}

function isotopes(){
	$('.grid').isotope({
		// options
		itemSelector: '.grid-item',
		layoutMode: 'fitRows'
	});
}

function clipboardJS(){
		new Clipboard('.btn');
}

function info(){
	swal({
		title: 'Information',
		type: 'info',
		html:
			'Version: 3.0.0-alpha <br>' +
			'Developer: Julian Seidl <br>' +
			'<br>' +
			'Github: <a href="https://github.com/Thejuse/CMS-Installer">CMS-Installer</a> <br>' +
			'Web: <a href="https://www.installer.jseidl.at">www.installer.jseidl.at</a>',
		showCloseButton: true,
	})
}

function cookieConsent(){
	window.addEventListener("load", function(){
		window.cookieconsent.initialise({
		  "palette": {
			"popup": {
			  "background": "#212121",
			  "text": "#ffffff"
			},
			"button": {
			  "background": "#606060",
			  "text": "#ffffff"
			}
		  },
		  "showLink": false,
		  "theme": "edgeless",
		  "content": {
			"message": "Diese Webseite verwendet Cookies, um die Bedienfreundlichkeit zu erhöhen.",
			"dismiss": "OK"
		  }
	})});
}

function masonry(){
    $('.grid').masonry({
        // options
        itemSelector: '.grid-item',
        columnWidth: 200
    });
}

function scrollDown(){
	$('.scroll-trigger').click(function(){
			$('html, body').animate({
					scrollTop: $(this).offset().top + 'px'
			}, 'slow');
			return this;
	});
}

$(document).ready(function() {
	// slickSlider();
	// magnificPopup();
	// cookieConsent();
	// mmenu();
	// isotopes();
	// alert();
    // clipboardJS();
		// masonry();
		scrollDown();
});