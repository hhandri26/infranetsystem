function CrudAjax(url){
	
  	var CSRF_TOKEN  = $('meta[name="csrf-token"]').attr('content');
        $.ajax({
            url: url,
            type: 'POST',
            data: {_token: CSRF_TOKEN},
            dataType: 'JSON',
            success: function (R) {
                if (R.msg_type=='success'){
                    Alert(R.msg_type,R.msg);
                    window.location.href = R.refresh;
                }else{
                    Alert(R.msg_type,R.msg);
                }

            }

        });
    	
}