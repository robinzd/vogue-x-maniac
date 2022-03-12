(function ($) {

	"use strict";

	$('nav .dropdown').hover(function () {
		var $this = $(this);
		$this.addClass('show');
		$this.find('> a').attr('aria-expanded', true);
		$this.find('.dropdown-menu').addClass('show');
	}, function () {
		var $this = $(this);
		$this.removeClass('show');
		$this.find('> a').attr('aria-expanded', false);
		$this.find('.dropdown-menu').removeClass('show');
	});

	const linkColor = document.querySelectorAll('.nav_link')


	function colorLink() {
		if (linkColor) {
			linkColor.forEach(l => l.classList.remove('active'))
			this.classList.add('active')
		}
	}
	linkColor.forEach(l => l.addEventListener('click', colorLink))

})(jQuery);
