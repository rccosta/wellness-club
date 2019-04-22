class Videoteca {
	
	static inicia() {
		$('.linkConteudo').on('click', function(event) {
			event.preventDefault();
			URLUtil.blockPage();
			URLUtil.onAtualizaDIV('#divLista', ('view/b2c/videoteca_lista.php?xCategoria=' + $(this).data().xcategoria), function(){URLUtil.unblockPage();});
		});
	}
}