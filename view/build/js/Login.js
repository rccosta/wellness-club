class Login{
	static inicia() {
		
		$('#btnEnviar').on('click', function(event) {
			event.preventDefault();
			var dataPost = new Object();
			dataPost.classe = "LoginService"
			dataPost.metodo = "onLogin";
			dataPost.data = $("#form").serializeObject();
			AjaxUtil.executa('src/service/AjaxService.php', dataPost, function() {
				// Before Send
				// FormUtil.blockPanel('#panelLogin');
			}, function(data) {
				// Data Success
				if (data.error) {
					// Exibe Msg
					MessageUtil.exibeMsgData(data);
				} else {
					if(data.isConfigurado == 'S'){
						URLUtil.navegaPagina('index/');
					}else{
						URLUtil.navegaPagina('primeiro_acesso/');
					}
				}
			}, function() {
				// Complete
				// FormUtil.unblockPanel('#panelLogin');
			});
		});
	}
}