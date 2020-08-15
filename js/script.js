window.onscroll = function()
{
	if( window.XMLHttpRequest ) {
		if (document.documentElement.scrollTop > 160 || self.pageYOffset > 160) {
			$('menu').style.position = 'fixed';
			$('menu').style.top = '0';
		} else if (document.documentElement.scrollTop < 160 || self.pageYOffset < 160) {
			$('menu').style.position = 'inherit';
			$('menu').style.top = '160px';
		}
	}
}