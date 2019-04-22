class MessageUtil {
	
	static exibeMsg(msg, tipoMsg, tipoModal){
		if(tipoModal != "none"){
			if (tipoModal === "notify") {
				switch (tipoMsg) {
					case 'error':
						MessageUtil.onExibeNotifyError(msg);
						break;
					case 'warning':
						MessageUtil.onExibeNotifyWarning(msg);
						break;
					case 'info':
						MessageUtil.onExibeNotifyInfo(msg);
						break;
					case 'success':
						MessageUtil.onExibeNotifySucesso(msg);
						break;
					default:
						MessageUtil.onExibeNotifyInfo(msg);
						break;
				}
			} else {
				switch (tipoMsg) {
					case 'error':
						MessageUtil.onExibeSwalError(msg);
						break;
					case 'warning':
						MessageUtil.onExibeSwalWarning(msg);
						break;
					case 'info':
						MessageUtil.onExibeSwalInfo(msg);
						break;
					case 'success':
						MessageUtil.onExibeSwalSucesso(msg);
						break;
					default:
						MessageUtil.onExibeSwalInfo(msg);
						break;
				}
			}
		}
	}
	
	static exibeMsgData(data){
		var msg = data.msg;
		var tipoMsg = data.tipoMsg;
		var tipoModal = data.tipoModal;
		MessageUtil.exibeMsg(msg, tipoMsg, tipoModal);
	}
	
	static exibeMsgURL(){
		var token = URLUtil.getUrlParameter("token");
		if(token){
			var args = atob(token);
			var argsSplited = args.split("|");
			var tipoModal = argsSplited[0];
			var tipoMsg = argsSplited[1];
			var msg = argsSplited[2];
			MessageUtil.exibeMsg(msg, tipoMsg, tipoModal);
		}
	}
	
	static onExibeSwal(tipoMsg, msg, onBefore = null) {
		swal({
			allowEscapeKey: false,
			allowOutsideClick : false,
			title : '',
			html : msg,
			type : tipoMsg
		}).then(function() {
			if(onBefore != null) {
				onBefore();
			}
		});
	}
	static onExibeSwalSucesso(msg) {
		swal({title: '', type: 'success', html: msg});
	}
	
	static onExibeSwalWarning(msg) {
		swal({title: '', type: 'warning', html: msg});
	}
	
	static onExibeSwalInfo(msg) {
		swal({title: '', type: 'info', html: msg});
	}
	
	static onExibeSwalError(msg) {
		swal({title: '', type: 'error', html: msg});
	}
	
	static onExibeNotifySucesso(msg) {
		$.notify({message:( '😁 ' + msg)},
		{
			type: 'success',
			mouse_over: "pause",
			placement: {from: "top", align: "center"}, offset: 50, animate: {enter: 'animated bounceInDown', exit: 'animated bounceOutUp'}
		});
	}
	static onExibeNotifyWarning(msg) {
		$.notify({message:('😕 ' + msg)},
		{
			type: 'warning',
			mouse_over: "pause",
			placement: {from: "top", align: "center"}, offset: 50, animate: {enter: 'animated bounceInDown', exit: 'animated bounceOutUp'}
		});
	}
	
	static onExibeNotifyInfo(msg) {
		$.notify({message:('🤓 ' + msg)},
		{
			type: 'info',
			mouse_over: "pause",
			placement: {from: "top", align: "center"}, offset: 50, animate: {enter: 'animated bounceInDown', exit: 'animated bounceOutUp'}
		});
	}
	
	static onExibeNotifyError(msg) {
		$.notify({message:('😱 ' + msg)},
		{
			type: 'error',
			mouse_over: "pause",
			placement: {from: "top", align: "center"}, offset: 50, animate: {enter: 'animated bounceInDown', exit: 'animated bounceOutUp'}
		});
	}
}