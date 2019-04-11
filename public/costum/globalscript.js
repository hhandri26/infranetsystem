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

function CrudUpload1(url, url_upload, obj_id){
    var CSRF_TOKEN  = $('meta[name="csrf-token"]').attr('content');
        $.ajax({
            url: url,
            type: 'POST',
            data: {_token: CSRF_TOKEN},
            dataType: 'JSON',
             success: function (R) {
                if (R.msg_type=='success'){
                    var prefik  =R.sid;
                    upload(obj_id,prefik, url_upload);
                }else{
                    Alert(R.msg_type,R.msg);
                }

            }

        });
}

function upload(obj_id,prefik,url_upload){
        var form_data   = new FormData();
        var url         =url_upload+'&prefik='+prefik;
        var img         =document.getElementById(obj_id);
        var files       =img.files;
        var i           =0;
        var n           =1;
        var CSRF_TOKEN  = $('meta[name="csrf-token"]').attr('content');
        while ( i < files.length) {
            var file = files[i];        
            form_data.append('file[]', files[i]);
            i++;
            n++;
        }
        form_data.append('_token', CSRF_TOKEN);
        if (i>0){
            $.ajax({
                url: url,
                data: form_data,
                type: 'POST',
                contentType: false,
                processData: false,
                success: function (R) {
                    Alert(R.msg_type,R.msg);
                    if (R.msg_type!='error'){
                        Alert(R.msg_type,R.msg);
                        window.location.href = R.refresh;
                    }
                   
                 },
                error: function (request, status, error) {Alert(R.msg_type,R.msg);}
            });     
            
        }
        return n   
    }

