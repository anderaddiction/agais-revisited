// Create
$(document).on("click", ".btn-create", function (e) {
    e.preventDefault();
    var route = $(".btn-create").data("route");
    $.ajax({
        type: "GET",
        url: route,
        dataType: "html",
        success: function (data) {
            $("#myLargeModalLabel").html("Invoice Form");
            $(".modal-body").html(data);
            $(".bs-example-modal-lg").modal("show");
        },
    });
});

//Show
$(document).on("click", ".btn-show-crud", function (e) {
    var route = $(this).attr("data-route");
    var urlDataTable = $(this).attr("data-url");
    var module = $(this).attr("data-urlModule");
    $.ajax({
        type: "GET",
        url: route,
        success: function (response) {
            $(".bs-example-modal-xl").modal("show");
            $("#myExtraLargeModalLabel").html(module);
            $(".modal-body").html(response);
            $("#dataTableShow").DataTable({
                responsive: true,
                searching: false,
                paging: true,
                info: true,
                bDestroy: true,
                dom: "Bfrtip",
                columnDefs: [
                    {
                        targets: 0,
                        checkboxes: {
                            seletRow: true,
                        },
                    },
                ],
                lengthChange: false,
                buttons: [
                    {
                        text: '<i class="fas fa-plus" title="Agregar"></i>',
                        action: function (e, dt, node, config) {
                            window.location = module + "/create";
                        },
                        className: "btn-info",
                    },
                    {
                        text: '<i class="fas fa-trash" title="Eliminar"></i>',
                        action: function (e, dt, node, config) {
                            e.preventDefault();
                            var token = $('meta[name="csrf-token"]').attr(
                                "content"
                            );
                            var rows = $(".data-table-show")
                                .DataTable()
                                .column(0)
                                .checkboxes.selected();
                            var data = [];
                            if (rows.length == 0) {
                                Swal.fire({
                                    type: "warning",
                                    title: "Advertencia",
                                    text: "Debe seleccionar al menos un elemento",
                                    footer: "",
                                });

                                return;
                            }

                            $.each(rows, function (index, rowId) {
                                data.push(rowId);
                            });

                            console.log(data);

                            var url = module + "/" + data;
                            url = url.replace(":data", data);

                            Swal.fire({
                                title: "Are you sure?",
                                text: "You won't be able to revert this!",
                                icon: "warning",
                                showCancelButton: true,
                                confirmButtonText: "Yes, delete it!",
                                cancelButtonText: "No, cancel!",
                                confirmButtonClass: "btn btn-success mt-2",
                                cancelButtonClass: "btn btn-danger ms-2 mt-2",
                                buttonsStyling: false,
                            }).then(function (result) {
                                if (result.value) {
                                    $.ajax({
                                        type: "POST",
                                        url: url,
                                        headers: {
                                            "X-CSRF-Token": token,
                                        },
                                        data: {
                                            data: data,
                                            _method: "DELETE",
                                        },
                                        success: function (response) {
                                            $(".bs-example-modal-xl").modal(
                                                "hide"
                                            );
                                            $("#dataTable")
                                                .DataTable()
                                                .ajax.reload();
                                            Swal.fire({
                                                title: "Deleted!",
                                                text: response.success,
                                                icon: "success",
                                                confirmButtonColor: "#038edc",
                                            });
                                        },
                                    });
                                } else if (
                                    // Read more about handling dismissals
                                    result.dismiss === Swal.DismissReason.cancel
                                ) {
                                    Swal.fire({
                                        title: "Cancelled",
                                        text: "Your imaginary file is safe :)",
                                        icon: "error",
                                        confirmButtonColor: "#038edc",
                                    });
                                }
                            });
                        },
                        className: "btn-danger btn-massive-delete",
                    },
                    {
                        text: '<i class="fas fa-recycle" title="Papelera"></i>',
                        action: function (e, dt, node, config) {
                            window.location = "trashed";
                        },
                        className: "btn-success",
                    },
                    {
                        extend: "copyHtml5",
                        text: '<i class="fas fa-copy" title="Copiar"></i>',
                        titleAttr: "Copy",
                    },
                    {
                        extend: "csvHtml5",
                        text: '<i class="fas fa-file-csv" title="CSV"></i>',
                        titleAttr: "Csv",
                    },
                    {
                        extend: "excelHtml5",
                        text: '<i class="fas fa-file-excel" title="Excel"></i>',
                        titleAttr: "Excel",
                    },
                    {
                        extend: "pdfHtml5",
                        text: '<i class="fas fa-file-pdf" title="PDF"></i>',
                        titleAttr: "Pdf",
                    },
                    "colvis",
                ],
                language: {
                    url: "https://cdn.datatables.net/plug-ins/1.13.6/i18n/es-ES.json",
                    decimal: ",",
                    thousands: ".",
                },
                initComplete: function () {
                    $(".buttons-colvis").html(
                        '<i class="fas fa-eye" title="Visibilidad" /></div>'
                    );
                },
            });
        },
    });
});
