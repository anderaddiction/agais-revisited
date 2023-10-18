jQuery(document).ready(function($) {

    /**** Variable Global ****/
    var token       = $('meta[name="csrf-token"]').attr('content');
    var modalWindow = $('#modal');
    var modalBody   = $('.modal-body');
    var modalTitle  = $('.modal-title');
    var buttonModal = $('.button');
    var dataTable   = $("#dataTable");
    var changeable  = $("#changeable :selected").val();

    /**** Close Modal ****/
    $('.close-button').on('click',function(event) {
        /* Act on the event */
        event.preventDefault();
        modalWindow.modal('toggle');
    });

    /***************
     * Swal.mixin  *
     ***************/
	const Toast = Swal.mixin({
	  	toast				: true,
	  	position 			: 'top',
	  	showConfirmButton	: false,
	  	timer 				: 3000,
	  	timerProgressBar 	: true,
	})

	/***********
     * CREATE *
     ***********/
    $(document).on('click', '.btn-create', function(event) {
     	event.preventDefault();
        var route = $('#route').attr('href');

        /*Mostrando la vista Create*/
        $.ajax({
            url: route,
            headers: {'X-CSRF-Token': token},
        })
        .done(function(data) {
            modalWindow.modal('show');
            modalTitle.text('Formulario de Registro');
            buttonModal.text('Crear');
            buttonModal.show();
            buttonModal.addClass('btn-save');
            buttonModal.removeClass('btn-update');
            modalBody.html(data).show();

            /*Proceso de Formulario de Registro*/
            $('.btn-save').click(function(event) {
                /* Act on the event */
                var form  = $('#form');
                var route = form.attr('action');
                var formData = new FormData(document.querySelector("#form"));
                //console.log(formData);
                $.ajax({
                    url: route,
                    type: 'POST',
                    headers: {'X-CSRF-Token': token},
                    //data: form.serialize(),
                    data:formData,
                    cache:false,
                    contentType: false,
                    processData: false,
                })
                .done(function(data) {
                    $('#form')[0].reset();
                    modalWindow.modal('toggle');
                    dataTable.DataTable().ajax.reload();
                    $("#reload").load(window.location.href + "#reload");
                    Toast.fire(
                        '',
                        'Datos registrados exitosamente',
                        'success'
                    )
                    //console.log("success");
                })
                .fail(function(data) {
                    /*Mostando validaciónn de formulario*/
                    var errors = data.responseJSON;
                    if ($.isEmptyObject(errors) == false)
                    {
                        $.each(errors.errors, function(key, value) {
                            var ErrorID = '#' + key +'Error';
                            $(ErrorID).removeClass('d-none');
                            $(ErrorID).text(value).show();
                            $('.required').addClass('is-invalid');
                        });
                    }
                    console.log(data);
                });
            });
        });
    });

    /***********
     * SHOW *
     ***********/
    $('body').on('click', '.btn-show', function(event) {
        event.preventDefault();
        var route = $(this).attr('href');

        $.ajax({
            url: route,
            headers: {'X-CSRF-Token': token},
        })
        .done(function(data) {
            modalWindow.modal('show');
            modalTitle.text("Tabla de Registro");
            buttonModal.hide();
            modalBody.html(data).show();
        });
    });

    /***********
     * UPDATE *
    ***********/
    $(document).on('click', '.btn-edit', function(event) {
        //Act on the event
        event.preventDefault();
        /*Obtengo la ruta de la vista editar*/
        var route = $(this).attr('href');

        /*Mostramos la vista editar*/
        $.ajax({
            url: route,
            headers: {'X-CSRF-Token': token},
        })
        .done(function(data) {
            modalWindow.modal('show');
            buttonModal.show();
            buttonModal.text('Actualizar');
            buttonModal.addClass('btn-update');
            buttonModal.removeClass("btn-save");
            modalTitle.text('Formulario de Actualización');
            modalBody.html(data).show();
            dataTable.DataTable().ajax.reload();

            /*Porceso del formulario de actualización*/
            $(document).on('click', '.btn-update', function(event) {
                event.preventDefault();
                var form = $("#form")
                var route = form.attr('action');
                var formData = new FormData(document.querySelector("#form"));

                $.ajax({
                    url: route,
                    type: 'POST',
                    headers: {'X-CSRF-Token': token},
                    //data: form.serialize(),
                    data: formData,
                    cache:false,
                    contentType: false,
                    processData: false,
                })
                .done(function(data) {
                    modalWindow.modal('toggle');
                    $('#form')[0].reset();
                    dataTable.DataTable().ajax.reload();
                    $("#reload").load(window.location.href + "#reload");
                    Toast.fire(
                        '',
                        'Datos actualizados exitosamente',
                        'success'
                    )
                })
                .fail(function(data) {
                    /*Mostrar validaciones de formulario de actualización*/
                    var errors = data.responseJSON;
                    if ($.isEmptyObject(errors) == false)
                    {
                        $.each(errors.errors, function(key, value) {
                            var ErrorID = '#' + key +'Error';
                            $(ErrorID).removeClass('d-none');
                            $(ErrorID).text(value).show();
                            $('.required').addClass('is-invalid');
                        });
                    }
                    console.log('error');
                });
            });
        });
    });

	/***********
     * DELETE *
     ***********/
	$(document).on('click', '.btn-delete', function(event) {
		event.preventDefault();
        var route = $(this).attr('href');
        // console.log(route);
        // $.ajax({
        //     type: 'POST',
        //     url: route,
        //     headers: { 'X-CSRF-Token': token },
        //     data: {"_method":"DELETE"},
        // })
        // .done(function() {
        //     dataTable.DataTable().ajax.reload();
        //     // Toast.fire(
        //     //     '',
        //     //     'Tu data ha sido eliminada',
        //     //     'success'
        //     // )
        // });

		Swal.fire({
  			title: '¿Estas seguro?',
  			text: "¡No podrás volver a recuperar esta data!",
  			icon: 'warning',
  			showCancelButton: true,
  			confirmButtonColor: '#3085d6',
  			cancelButtonColor: '#d33',
  			confirmButtonText: '¡Si, borralo!'
		}).then((result) => {
  			if (result.isConfirmed) {
				$.ajax({
					url: route,
                    type: 'POST',
                    data: {"_method":"DELETE"},
					headers: {'X-CSRF-Token': token}
				})
				.done(function() {
					dataTable.DataTable().ajax.reload();
					Swal.fire({
                        position: 'top-center',
                        icon: 'success',
                        title: '¡Datos eliminados correctamente!',
                        showConfirmButton: false,
                        timer: 1500
                        })
				});
  			}
		})
	});

    /********************
    * MULTIPLE DELETING *
    *********************/

    //Check all registers or one
    $('#check-master').on('click', function(e) {
        if($(this).is(':checked',true))
        {
            $(".sub_check").prop('checked', true);
        }else {
            $(".sub_check").prop('checked',false);
        }
    });

    //Delete all
    $(document).on('click', '.btn-delete-all', function(event) {
        event.preventDefault();
        /* Act on the event */
        var allVals = [];
        var route   = $('.sub_check').data('route');
        var id      = $('.sub_check').data('id');

        $(".sub_check:checked").each(function() {
            allVals.push($(this).attr('data-id'));
        });

        if(allVals.length <=0)
        {
            Toast.fire(
                '',
                'Selecciona por lo menos un elemento',
                'warning'
            )
        }else{
            Swal.fire({
                title: '¿Estas seguro?',
                text: "¡No podrás volver a recuperar esta data!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: '¡Si, borralo!'
            }).then((result) => {
                if (result.isConfirmed) {
                    var join_selected_values = allVals.join(",");
                    $.ajax({
                        url: route,
                        type: 'DELETE',
                        headers: {'X-CSRF-Token': token},
                        data: 'ids='+join_selected_values,
                    })
                    .done(function() {
                        dataTable.DataTable().ajax.reload();
                        $('#check-master').prop('checked',false);
                        Toast.fire(
                            '',
                            'Tu data ha sido eliminada',
                            'success'
                        );
                    });
                }
            });
        }
    });

    /******************************
    * DELETED ELEMENTS RECOVERING *
    *******************************/
    $(document).on('click', '.btn-recover', function(event) {
        event.preventDefault();
        /* Act on the event */
        var route  = $(this).attr('href');

        $.ajax({
            url: route,
            type: 'GET',
            headers: {'X-CSRF-Token': token},
        })
        .done(function() {
            dataTable.DataTable().ajax.reload();
        });
    });
});
