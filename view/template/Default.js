class Default {
	
	static inicia(){
		/* Inicia hashnavigation */
		$(window).bind('hashchange', function(){
			URLUtil.blockPage();
			URLUtil.atualizaPaginaAJax(window.location.hash, function(){URLUtil.unblockPage();});
	    });
	    $(window).trigger('hashchange');
	}
}