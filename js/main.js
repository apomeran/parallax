 function scroll(element, parent) {
            $(parent).animate({scrollTop: $(parent).scrollTop() + $(element).offset().top - $(parent).offset().top}, {duration: 'slow', easing: 'swing'});
            $('html,body').animate({scrollTop: $(parent).offset().top}, {duration: 2000, easing: 'swing'});
			}
