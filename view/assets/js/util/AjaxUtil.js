class AjaxUtil {
	static executa(url, data, funBeforeSend, funDataSuccess, funComplete, funDataError = null){
		var dataJSON = {
			"dataPost" : JSON.stringify(data)
		};
		$.ajax({
			url : URLUtil.getURLCompleta(url),
			cache : false,
			data : dataJSON,
			type : 'POST',
			datatype : 'JSON',
			beforeSend : function() {
				console.log("============= BeforeSend Ajax Request =============");
				console.log(data);
				funBeforeSend();
			},
			success : function(data) {
				console.log("============= Success Ajax Request =============");
				console.log(data);
				if(data.error){
					if(funDataError != null){
						funDataError(data);
					}else{
						MessageUtil.exibeMsgData(data);
					}
				}else{
					if (funDataSuccess != null) {
						funDataSuccess(data);
					}
				}
			},
			error : function(xhr, ajaxOptions, thrownError) {
				console.log("============= Error Ajax Request =============");
				console.log((thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText));
				swal({
					title : 'Ooopss tivemos um grande problema',
					type : 'error',
					html : xhr.responseText
				});
			},
			complete : function() {
				console.log("============= Complete Ajax Request =============");
				if (funComplete != null) {
					funComplete();
				}
			}
		});
	}
}