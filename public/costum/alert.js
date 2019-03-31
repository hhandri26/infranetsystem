function AlertCheck(text,url){
	 swal({
                title: 'Apakah Anda Yakin',
                text: text,
                type: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Ya, Save!',
                cancelButtonText: 'No, cancel!',
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger m-l-10',
                buttonsStyling: false
            }).then(function () {
                CrudAjax(url);
            },function (dismiss) {
                if (dismiss === 'cancel') {
                    swal(
                        'Cancelled',
                        'Your imaginary file is safe :)',
                        'error'
                    )
                }
            })
}

function Alert(salert,msg){
	swal(
            {
                title 				:salert,
                text 				:msg,
                type 				:salert,
                confirmButtonColor 	:'#4fa7f3'
            }
        )
}