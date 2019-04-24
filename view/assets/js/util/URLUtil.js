class URLUtil {
	
	static getBaseURL(){
		return document.getElementById('url_sistema').value;
	}
	
	static getURLCompleta(urlParcial){
		var baseurl = document.getElementById('url_sistema').value;
		return (baseurl + urlParcial);
	}
	
	static navegaPagina(urlParcial) {
		window.location.href = URLUtil.getURLCompleta(urlParcial);
	}
	
	static navegaPagina(urlParcial, data) {
		if(data !== undefined && data.msg !== ''){
			var args = data.tipoModal + '|' + data.tipoMsg + '|' + data.msg;
			urlParcial += '?token=' + btoa(args);
		}
		window.location.href = URLUtil.getURLCompleta(urlParcial);
	}
	
	static navegaPaginaNewTab(urlParcial) {
		var win = window.open(URLUtil.getURLCompleta(urlParcial), '_blank');
		win.focus();
	}
	
	static getUrlParameter(sParam){
		var sPageURL = decodeURIComponent(window.location.search.substring(1)), sURLVariables = sPageURL.split('&'), sParameterName, i;
		for (i = 0; i < sURLVariables.length; i++) {
			sParameterName = sURLVariables[i].split('=');

			if (sParameterName[0] === sParam) {
				return sParameterName[1] === undefined ? true : sParameterName[1];
			}
		}
	}
	
	static navegaPaginaHash(hash) {
		window.location.hash = hash;
	}
	
	static atualizaPaginaAJax(hash, onBefore = null) {
		var newHash = hash.substring(1);
        if (newHash) {
            $('#content').load(URLUtil.getURLCompleta(newHash), function() {
            	if(onBefore != null){
            		onBefore();
            	}
            });
        };
	}
	
	static onAtualizaDIV(divID, urlContent, onBefore = null) {
		console.log(('Atualizando div ' + divID + ' ...'));
		$(divID).load(URLUtil.getURLCompleta(urlContent), function() {
			if(onBefore != null){
				onBefore();
			}
		});
	}
	
	static onAtualizaModal(modalID, urlContent, onBefore = null, title = '') {
		console.log(('Atualizando modal ' + modalID + ' ...'));
		$((modalID + ' .modal-title')).html(title);
		$((modalID + ' .modal-body')).load(URLUtil.getURLCompleta(urlContent), function(){
			$(modalID).off('show.bs.modal');
			$(modalID).off('shown.bs.modal');
			if(onBefore != null){
				onBefore();
			}
		});
	}
	
	static criaCookie(nome, valor, exp_dias) {
	    var d = new Date();
	    d.setTime(d.getTime() + (exp_dias*24*60*60*1000));
	    var expires = "expires="+ d.toUTCString();
	    document.cookie = nome + "=" + valor + ";" + expires + ";path=/";
	}
	
	static getCookie(nome) {
	    var name = nome + "=";
	    var decodedCookie = decodeURIComponent(document.cookie);
	    var ca = decodedCookie.split(';');
	    for(var i = 0; i <ca.length; i++) {
	        var c = ca[i];
	        while (c.charAt(0) == ' ') {
	            c = c.substring(1);
	        }
	        if (c.indexOf(name) == 0) {
	            return c.substring(name.length, c.length);
	        }
	    }
	    return "";
	}
	
	static blockPage(){
		$.blockUI({ message: '<div class="row"><div class="col-sm-12"><div class="preloader3 loader-block"><div class="circ1 loader-primary loader-lg"></div><div class="circ2 loader-primary loader-lg"></div><div class="circ3 loader-primary loader-lg"></div><div class="circ4 loader-primary loader-lg"></div></div></div></div>', css: { backgroundColor: 'transparent', border: 'none'}, overlayCSS: { opacity:.1 }});
	}
	
	static unblockPage(){
		$.unblockUI();
	}
}