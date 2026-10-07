(function () {
	'use strict';

	document.addEventListener('submit', function (event) {
		var form = event.target;

		if (!form.matches('.super-search')) {
			return;
		}

		var engine = form.querySelector('select').value;
		form.action = engine === 'bing'
			? 'https://www.bing.com/search'
			: 'https://www.google.com/search';
	});
}());
