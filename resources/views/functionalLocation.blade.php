@extends('layouts.main')

@section('title', 'Functional Location')

@section('css_page')
    <!-- BEGIN VENDOR CSS-->
    <!-- END VENDOR CSS-->

    <!-- BEGIN Page Level CSS-->
    <style>
        /* width */
        ::-webkit-scrollbar {
            width: 5px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: #c8c8c8;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #555;
        }
    </style>
    <!-- END Page Level CSS-->
@endsection

@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Subheader-->
        <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
            <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                <!--begin::Info-->
                <div class="d-flex align-items-center flex-wrap mr-2">
                    <!--begin::Page Title-->
                    <span class="text-muted font-weight-bold mr-4">
                        <i class="fa fa-layer-group text-primary"></i>
                    </span>
                    <!--end::Page Title-->
                    <!--begin::Actions-->
                    <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-4 bg-gray-200"></div>
                    <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Functional Location</h5>
                    <!--end::Actions-->
                </div>
                <!--end::Info-->
                <!--begin::Toolbar-->
                <!--end::Toolbar-->
            </div>
        </div>
        <!--end::Subheader-->
        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container">
                <!--begin::Notice-->
                <!--end::Notice-->
                <!--begin::Card-->
                <div class="card card-custom gutter-b">
                    <div class="card-header flex-wrap py-3">
                        <div class="card-title">
                            <h3 class="card-label">Data Functional Location</h3>
                                <span class="d-block text-muted pt-2 font-size-sm"></span></h3>
                        </div>
                        <div class="card-toolbar">
                            <!--begin::Button-->
                            @can('functional-location-C')
                                <button id="addMenu" name="addMenu" class="btn btn-primary font-weight-bolder">
                                    <span class="svg-icon svg-icon-md">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg-->
                                        <!--end::Svg Icon-->
                                    </span>New Record</a>
                                </button>
                        @endcan
                        <!--end::Button-->
                        </div>
                    </div>
                    <div class="card-body">
                        <!--begin: Search Form-->
                        <!--begin::Search Form-->
                        <div class="mb-7">
                            <div class="row align-items-center">
                                <div class="col-lg-9 col-xl-8">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 my-2 my-md-0">
                                            <div class="input-icon">
                                                <input type="text" class="form-control" placeholder="Search..."
                                                    id="kt_datatable_search_query"/>
                                                <span>
                                                        <i class="flaticon2-search-1 text-muted"></i>
                                                    </span>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <a href="#" class="btn btn-light-primary px-6 font-weight-bold">Search</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end::Search Form-->
                        <!--end: Search Form-->
                        <!--begin: Datatable-->
                        <div class="datatable datatable-bordered datatable-head-custom " id="kt_datatable_menu"></div>
                        <!--end: Datatable-->
                    </div>
                </div>
                <!--end::Card-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Entry-->
    </div>

    <!--begin:Modal-->
    <div class="modal fade" id="modalMenu" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalMenuTitle">Create Functional Location</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close"></i>
                    </button>
                </div>
                <!--begin:Form-->
                <form role="form" class="form" name="formmenus" id="formmenus" enctype="multipart/formdata" method="">
                    <div class="modal-body" style="height: 500px;">
                        <div class="mb-7">
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Functional Location:</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" id="functional_location" name="functional_location"
                                        placeholder="e.g: JSP-3201"/>
                                    <span class="form-text text-muted">Masukkan Functional Location</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Description:</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" id="description" name="description"
                                        placeholder="e.g: AREA PENAMBANGAN BAHAN BAKU"/>
                                    <span class="form-text text-muted">Masukkan Description</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Costcenter:</label>
                                <div class="col-lg-9">
                                    <select class="form-control select2" name="costcenter" id="costcenter" style="width: 100%;">
                                        <option class="form-control" value=''>Select Costcenter</option>
                                        @foreach($costcenter as $code)
                                                <option class="form-control" value='{{$code["id"]}}'> {{$code['id']}} - {{$code['directorat']}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Area:</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" id="area" name="area"
                                        placeholder="e.g: AREA"/>
                                    <span class="form-text text-muted">Masukkan Area</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Company:</label>
                                <div class="col-lg-9">
                                    <select class="form-control select2" name="company" id="company" style="width: 100%;">
                                        <option class="form-control" value=''>Select Company</option>
                                        @foreach($company as $code)
                                                <option class="form-control" value='{{$code["company"]}}'> {{$code['company']}} - {{$code['description']}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Plant:</label>
                                <div class="col-lg-9">
                                    <select class="form-control select2" name="plant" id="plant" style="width: 100%;">
                                        <option class="form-control" value=''>Select Plant</option>
                                        @foreach($plant as $code)
                                                <option class="form-control" value='{{$code["id"]}}'> {{$code['id']}} - {{$code['plant']}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Parenth 1:</label>
                                <div class="col-lg-9">
                                    <select class="form-control select2" name="parenth1" id="parenth1" style="width: 100%;">
                                        <option class="form-control" value=''>Select Parenth 1</option>
                                        <option value="1">Parenth 1</option>
                                        <option value="2">Parenth 2</option>
                                        <option value="3">Parenth 3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Status:</label>
                                <div class="col-lg-9">
                                    <select class="form-control select2" name="status" id="status" style="width: 100%;">
                                        <option class="form-control" value=''>Select Status</option>
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal"><i
                                    class="fa fa-times"></i>Cancel
                        </button>
                        @can(['functional-location-C' , 'functional-location-U'])
                            <button type="submit" id="saveMenu" data-id="" class="btn btn-primary font-weight-bold">
                                <i class="fa fa-save"></i> Save changes
                            </button>
                        @endcan
                    </div>
                </form>
                <!--end:Form-->
            </div>
        </div>
    </div>
    <!--end:Modal-->

@endsection

@section('js_page')
    <!--begin::Page Vendors(used by this page)-->
    <!--end::Page Vendors-->
    <!--begin::Page Scripts(used by this page)-->
    <!--end::Page Scripts-->

    <script type="text/javascript">

        $(document).ready(function () {

            $('.select2').select2();

            var datatable = $('#kt_datatable_menu');

            @can('functional-location-R')

            datatable.KTDatatable({
                // datasource definition
                data: {
                    type: 'remote',
                    source: {
                        read: {
                            url: '/functional-location/list',
                            method: 'GET',
                        }
                    },
                    pageSize: 10,
                },
                // layout definition
                layout: {
                    scroll: false, // enable/disable datatable scroll both horizontal and vertical when needed.
                    footer: false // display/hide footer
                },
                // column sorting
                sortable: true,
                pagination: true,
                search: {
                    input: $('#kt_datatable_search_query'),
                    key: 'generalSearch'
                },
                // columns definition
                columns: [{
                        field: 'functional_location',
                        title: 'Functional Location',
                    }, {
                        field: 'description',
                        title: 'Description',
                    }, {
                        field: 'costcenter',
                        title: 'Costcenter',
                    }, {
                        field: 'area',
                        title: 'Area',
                    }, {
                        field: 'company',
                        title: 'Company',
                    }, {
                        field: 'plant',
                        title: 'Plant',
                    }, {
                        field: 'parenth1',
                        title: 'Parenth 1',
                        template: function(r){
                            if(r.parenth1 == 1){
                                return 'Parenth 1';
                            }else if(r.parenth1 == 2){
                                return 'Parenth 2';
                            }else if(r.parenth1 == 3){
                                return 'Parenth 3';
                            }
                        },
                    }, {
                        field: 'status',
                        title: 'Status',  
                        textAlign : 'center',
                        template: function(r){
                            if(r.status == 1){
                                return '<span class="badge badge-success">Active</span>';
                            }else{
                                return '<span class="badge badge-danger">Inactive</span>';
                            }
                        },
                    }, {
                        field: 'Actions',
                        title: 'Actions',
                        sortable: false,
                        width: 70,
                        autoHide: false,
                        overflow: 'visible',
                        template: function (row) {
                            return "<center>" +
                                    @can('functional-location-U')
                                        "<button type='button' class='edits btn btn-sm btn-icon btn-outline-warning ' title='Edit' data-toggle='tooltip' data-id=" + row.id + " ><i class='fa fa-edit'></i> </button>  " +
                                    @endcan
                                    @can('functional-location-D')
                                        "<button type='button' class='deletes btn-sm btn btn-icon btn-outline-danger' title='Delete' data-toggle='tooltip' alt='' data-id=" + row.id+ " ><i class='fa fa-trash'></i></button>  " +
                                    @endcan
                                        "</center>";
                        },
                    }
                ],

            });

            @endcan

            @can('functional-location-C')
            $(document).on('click', '#addMenu', function () {
                $("#saveMenu").data("id", "");
                $('#modalMenuTitle').text('Create Functional Location');
                $('#modalMenu').modal('show');
                $(`.form-control`).removeClass('is-invalid');
                $(`.invalid-feedback`).remove();
                let form = document.forms.formmenus; // <form name="formmenus"> element
                form.reset();
            });

            @endcan

            @can('functional-location-U')
            $(document).on('click', '.edits', function () {
                $.ajax({
                    type: 'GET', // define the type of HTTP verb we want to use (POST for our form)
                    url: './functional-location/' + $(this).data('id'), // the url where we want to POST
                    beforeSend: function () {
                        let form = document.forms.formmenus; // <form name="formmenus"> element
                        form.reset();
                        $(`.form-control`).removeClass('is-invalid');
                        $(`.invalid-feedback`).remove();
                    }
                }).done(function (res) {
                    let form = document.forms.formmenus; // <form name="formmenus"> element
                    console.log(res.success);
                    if (res.success) {
                        showtoastr('success', res.message);
                        $(form.elements.functional_location).val(res.data.functional_location);
                        $(form.elements.description).val(res.data.description);
                        $(form.elements.area).val(res.data.area);
                        $(form.elements.costcenter).val(res.data.costcenter).trigger('change');
                        $(form.elements.company).val(res.data.company).trigger('change');
                        $(form.elements.plant).val(res.data.plant).trigger('change');
                        $(form.elements.parenth1).val(res.data.parenth1).trigger('change');
                        $(form.elements.status).val(res.data.status).trigger('change');
                        // $('#').val(res.data.company_code);
                        // $('#company_name').val(res.data.company_name);
                        // var index = $('#parent_company_code').get(res.data.company_code).selectedIndex;
                        // $('#parent_company_code option:eq(' + index + ')').remove();
                        $("#saveMenu").data( "id", res.data.id);
                    }
                }).fail(function (data) {
                    show_toastr('error', data.responseJSON.status, data.responseJSON.message);
                    $.each(data.responseJSON.errors, function (index, value) {
                        show_toastr('error', index, value);
                    });
                }).always(function () {
                    $('#modalMenuTitle').text('Edit Data Functional Location');
                    $('#modalMenu').modal('show');
                });
            });

            @endcan

            @can(['functional-location-C', 'functional-location-U'])
            $('#formmenus').submit(function (e) {
                e.preventDefault();
                var formData = new FormData($("#formmenus")[0]);
                // var formData = $('#formmenus').serializeArray(); // our data object
                var method = "POST";
                let menuID = $("#saveMenu").data("id");
                
                if (typeof menuID == "undefined" || menuID == "") {
                    var url = `./functional-location`;
                } else {
                    var url = `./functional-location/${menuID}/update`;
                }
                // var url = (menuID != "" || menuID != undefined) ? `./costcenter${menuID}/update` : `./costcenter`;

                $.ajax({
                    type: method, // define the type of HTTP verb we want to use (POST for our form)
                    url: url, // the url where we want to POST
                    data: formData,
                    dataType: 'JSON', // what type of data do we expect back from the server
                    contentType: false,
                    processData: false,
                    beforeSend: function () {
                        $(`.form-control`).removeClass('is-invalid');
                        $(`.invalid-feedback`).remove();
                        $('#saveMenu').attr('disabled', true).html("<i class='fa fa-spinner fa-spin'></i> processing");
                    }
                }).done(function (data) {
                    $("#modalMenu").modal('hide');
                    showtoastr('success', data.message);
                    $("#saveMenu").data("id", "");
                    $("#formmenus")[0].reset();
                    menuID = "";
                    let form = document.forms.formmenus; // <form name="formmenus"> element
                    form.reset();
                    datatable.reload();
                }).fail(function (data) {
                    show_toastr('error', data.responseJSON.status, data.responseJSON.message);
                    $.each(data.responseJSON.errors, function (index, value) {
                        if ($(`input[name='${index}']`)) {
                            $(`input[name='${index}']`).addClass(`is-invalid`);
                            $(`input[name='${index}']`).after(`<div class="invalid-feedback">${value}</div>`);
                        }
                        show_toastr('error', index, value);
                    });
                }).always(function () {
                    $('#saveMenu').attr('disabled', false).html("<i class='fa fa-save'></i> Save");
                });
            });
            @endcan

            @can('functional-location-D')
            $(document).on('click', '.deletes', function () {
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                })
                    .then(isConfirm => {
                    if(isConfirm.isConfirmed
            )
                {
                    $.ajax({
                        type: 'DELETE', // define the type of HTTP verb we want to use (POST for our form)
                        url: './functional-location/' + $(this).data('id'), // the url where we want to POST
                    })
                        .done(function (data) {
                            showtoastr('success', data.message);
                        })
                        .fail(function (data) {
                            show_toastr('error', data.responseJSON.status, data.responseJSON.message);
                            $.each(data.responseJSON.messages, function (index, value) {
                                show_toastr('error', index, value);
                            });
                        })
                        .always(function () {
                            datatable.reload();
                        });
                }
            else
                {
                    show_toastr('error', 'internal Server Error');
                }
            })
                ;
            });
            @endcan

        });


    </script>

@endsection
