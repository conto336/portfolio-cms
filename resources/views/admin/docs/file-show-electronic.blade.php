@extends('adminlte::page')

@section('title', '- Lista de archivos')

@section('css')


    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('vendor/plugins/data-tables/CSS/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/plugins/data-tables/CSS/responsive.bootstrap4.min.css') }}">
    <style>
        p {
            display: block;
        }

        table {
            overflow-x: auto;
        }

        table td {
            max-width: 150px;
            white-space: nowrap;
            text-overflow: ellipsis;
            word-break: break-all !important;
            overflow: hidden !important;
            vertical-align: middle !important;
            /* 
                                            word-wrap: break-word !important;
                                            max-width: 400px; */
        }

        #electronic td {
            white-space: inherit;
            overflow: hidden;
            vertical-align: middle !important;
        }

        .modal-content {
            top: 50px;
        }

    </style>
@stop

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <p class="text-center text-primary"><strong>Lista de archivos en el servidor</strong>.</p>
    @if (session()->has('success'))
        <div class="text-center">
            <div class="alert alert-success alert-dismissable">
                {{ session()->get('success') }}
                <button type="button" class="close" data-dismiss="alert">&times;</button>
            </div>
        </div>
    @endif

    @livewire('table-documents')

@stop

@section('footer')

    <div class="pull-right hidden-xs">
        <b>Version</b> 1.0
    </div>
    <strong>Copyright © {{ date('Y') }} Deptarmento de Tecnología UNAN-MANAGUA.</strong> All rights reserved.

@stop

@section('js')
    <script src="{{ asset('vendor/swetalert2/sweetalert2.all.min.js') }}"></script>
    <script src="{{ asset('vendor/plugins/data-tables/JS/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendor/plugins/data-tables/JS/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('vendor/plugins/data-tables/JS/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('vendor/plugins/data-tables/JS/responsive.bootstrap4.min.js') }}"></script>
    <script>
        function table(id) {
            $(id).DataTable({
                responsive: true,
                autoWidth: false,
                /* "sScrollY": "200px",
                "bScrollCollapse": true,
                "bPaginate": false,
                "bJQueryUI": true,
                "aoColumnDefs": [{
                    "sWidth": "10%",
                    "aTargets": [-1]
                }], */
                "language": {
                    "lengthMenu": "Mostrar _MENU_ registros por página",
                    "zeroRecords": "Ningun resultado - intenta con otro!",
                    "info": "Mostrando la  página _PAGE_ de _PAGES_",
                    "infoEmpty": "No records available",
                    "infoFiltered": "(filtrado de _MAX_ registros totales)",
                    "search": "Buscar:",
                    "paginate": {
                        "next": ">",
                        "previous": "<",
                    }
                },

            });
        }

        function actions(id) {
            $(id).click(function(e) {
                if (e.target.classList.contains("fa-recycle")) {
                    e.preventDefault();

                    const swalWithBootstrapButtons = Swal.mixin({
                        customClass: {
                            confirmButton: "btn btn-success ml-2",
                            cancelButton: "btn btn-danger",
                        },
                        buttonsStyling: false,
                    });

                    swalWithBootstrapButtons
                        .fire({
                            title: "Estas seguro?",
                            text: "Esta acción no se podra deshacer",
                            icon: "warning",
                            showCancelButton: true,
                            confirmButtonText: "Borrar",
                            cancelButtonText: "Cancelar",
                            reverseButtons: true,
                        })
                        .then((result) => {
                            if (result.isConfirmed) {
                                swalWithBootstrapButtons
                                    .fire("Borrado!", "Archivo borrado", "success")
                                    .then((result) => {
                                        if (result.isConfirmed) {
                                            e.originalEvent.path[2].submit();
                                        }
                                    });
                            } else if (
                                result.dismiss === Swal.DismissReason.cancel
                            ) {
                                swalWithBootstrapButtons.fire(
                                    "Cancelado",
                                    "Has cancelado la operación :)",
                                    "error"
                                );
                            }
                        });
                }
                if (e.target.classList.contains("btn-danger")) {
                    e.preventDefault();

                    const swalWithBootstrapButtons = Swal.mixin({
                        customClass: {
                            confirmButton: "btn btn-success ml-2",
                            cancelButton: "btn btn-danger",
                        },
                        buttonsStyling: false,
                    });

                    swalWithBootstrapButtons
                        .fire({
                            title: "Estas seguro?",
                            text: "Esta acción no se podra deshacer",
                            icon: "warning",
                            showCancelButton: true,
                            confirmButtonText: "Borrar",
                            cancelButtonText: "Cancelar",
                            reverseButtons: true,
                        })
                        .then((result) => {
                            if (result.isConfirmed) {
                                swalWithBootstrapButtons
                                    .fire("Borrado!", "Archivo borrado", "success")
                                    .then((result) => {
                                        if (result.isConfirmed) {
                                            e.originalEvent.path[1].submit();
                                        }
                                    });
                            } else if (
                                result.dismiss === Swal.DismissReason.cancel
                            ) {
                                swalWithBootstrapButtons.fire(
                                    "Cancelado",
                                    "Has cancelado la operación :)",
                                    "error"
                                );
                            }
                        });
                }
            });
        }
        $(document).ready(function() {
            actions("#tableElectronica");
            table('#electronic');
        });
    </script>
@stop
