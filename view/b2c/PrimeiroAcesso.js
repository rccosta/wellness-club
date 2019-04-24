class PrimeiroAcesso {
	
	static inicia(){
		$("#primeiroAcessoForm #file1, #primeiroAcessoForm #file2, #primeiroAcessoForm #file3").change(function() {
			PrimeiroAcesso.fileIndex = $(this).data().fileindex;
			$("#primeiroAcessoForm #message").empty();
			var file = this.files[0];
			var imagefile = file.type;
			var match= ["image/jpeg","image/jpg"];
			if(!((imagefile==match[0]) || (imagefile==match[1]) || (imagefile==match[2]))) {
				$("#primeiroAcessoForm #message").html("<div role='alert' class='alert alert-warning'><strong>Atenção!</strong>  São aceitos apenas arquivos no formato jpg de no maximo 500kb</div>");
				return false;
			} else {
				var reader = new FileReader();
				reader.onload = imageIsLoaded;
				reader.readAsDataURL(this.files[0]);
			}
		});
		function imageIsLoaded(e) {
			$('#primeiroAcessoForm #previewing_' + PrimeiroAcesso.fileIndex).attr('src', e.target.result);
			switch (PrimeiroAcesso.fileIndex) {
				case 1 :
					$('#primeiroAcessoForm #xFotoFrente').val(e.target.result);
					break;
				case 2 :
					$('#primeiroAcessoForm #xFotoPerfil').val(e.target.result);
					break;
				case 3 :
					$('#primeiroAcessoForm #xFotoCostas').val(e.target.result);
					break;
				default :
					break;
			}
		};
		
		$('#btnConfirmar').on('click', function(event) {
			event.preventDefault();
			PrimeiroAcesso.onConfirmar();
		});
		
		$('#vPesoInicial, #vPesoDesejado').mask("#.##0,000", {
			reverse : true
		});
		
		$('#dInicio').mask('00/00/0000');
	}
	
	static onConfirmar(){
		var form = $('#primeiroAcessoForm');
		form.parsley().validate();
		if (form.parsley().isValid()) {
			var postObj = new Object();
			postObj.classe = 'PrimeiroAcessoService';
			postObj.metodo = 'onConfirmar';
			postObj.data = $('#primeiroAcessoForm').serializeObject();
			AjaxUtil.executa('src/service/AjaxService.php', postObj, function() {
				// Before Send
				URLUtil.blockPage();
			}, function(data) {
				// Data Success
				// Exibe Msg
				swal({
					title : "",
					text : data.msg,
					type : data.tipoMsg
				}).then(function() {
					URLUtil.navegaPagina('b2c/home/#/b2c/index/');
				});
			}, function() {
				// Complete
				URLUtil.unblockPage();
			});
		}
	}
}