@extends('layout.admin')

@push('styles')
    <link href="{{ asset('admin/datatable/datatables.css') }}" rel="stylesheet" type="text/css" />
@endpush

@section('content')
    <!--begin::Content wrapper-->
    <div class="d-flex flex-column flex-column-fluid">

        <!--begin::Toolbar-->
        <div id="kt_app_toolbar" class="app-toolbar pt-5">
            <!--begin::Toolbar container-->
            <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex align-items-stretch">
                <!--begin::Toolbar wrapper-->
                <div class="app-toolbar-wrapper d-flex flex-stack flex-wrap gap-4 w-100">
                    <!--begin::Page title-->
                    <div class="page-title d-flex flex-column gap-1 me-3 mb-2">
                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-separatorless fw-semibold mb-6">
                            <!--begin::Item-->
                            <li class="breadcrumb-item text-gray-700 fw-bold lh-1">
                                <a href="{{ route('dashboard') }}" class="text-gray-500">
                                    <i class="ki-duotone ki-home fs-3 text-gray-400 me-n1"></i>
                                </a>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item">
                                <i class="ki-duotone ki-right fs-4 text-gray-700 mx-n1"></i>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item text-gray-700">Gestion des invités</li>
                            <!--end::Item-->
                        </ul>
                        <!--end::Breadcrumb-->
                        <!--begin::Title-->
                        <h1 class="page-heading d-flex flex-column justify-content-center text-dark fw-bolder fs-1 lh-0">
                            Liste des invités</h1>
                        <!--end::Title-->
                    </div>
                    <!--end::Page title-->
                </div>
                <!--end::Toolbar wrapper-->
            </div>
            <!--end::Toolbar container-->
        </div>
        <!--end::Toolbar-->

        <!--begin::Content-->
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <!--begin::Content container-->
            <div id="kt_app_content_container" class="app-container container-fluid">

                @include('layout.alert')

                <!--begin::Card-->
                <div class="card">
                    <!--begin::Card header-->
                    <div class="card-header border-0 pt-6">
                        <!--begin::Card title-->
                        <div class="card-title">
                            <h2>Liste des inscriptions</h2>
                        </div>
                        <!--begin::Card title-->
                        <!--begin::Card toolbar-->
                        <div class="card-toolbar">
                            <!--begin::Toolbar-->
                            <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                                <!--begin::Add user-->
                                <a href="{{ route('export.registration') }}">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#securityModal">
                                        <i class="ki-duotone ki-cloud-download fs-2"></i>Exporter</button>
                                </a>
                                <!--end::Add user-->
                            </div>
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Card toolbar-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body py-4">
                        <!--begin::Table-->
                        <table class="table" id="attendee">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nom</th>
                                    <th>Prénom</th>
                                    <th>Email</th>
                                    <th>Téléphone</th>
                                    <th>Présence</th>
                                    <th>Table</th>
                                    <th>Date</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @foreach ($registrations as $registration)
                                    <tr>
                                        <td>{{ $i }}</td>
                                        <td>{{ $registration->attendee->last_name }}</td>
                                        <td>{{ $registration->attendee->first_name }}</td>
                                        <td>{{ $registration->attendee->email }}</td>
                                        <td>{{ $registration->attendee->phone }}</td>
                                        <td>{{ $registration->presence == 1 ? 'Oui' : 'Non' }}</td>
                                        <td>{{ $registration->number_table == '0' ? '-' : $registration->number_table }}
                                        </td>
                                        <td>{{ $registration->created_at }}</td>
                                        <td>
                                            <button style="padding: 10px !important" type="button"
                                                class="btn btn-primary modal_edit_action" data-bs-toggle="modal"
                                                data-id=" {{ $registration->id }} " data-bs-target="#cardModalView">
                                                Table
                                            </button>
                                            <button style="padding: 10px !important" type="button"
                                                class="btn btn-danger modal_delete_action" data-bs-toggle="modal"
                                                data-id=" {{ $registration->id }}" data-bs-target="#cardModalView">
                                                Supprimer
                                            </button>

                                        </td>
                                    </tr>
                                    @php
                                        $i++;
                                    @endphp
                                @endforeach
                                </tr>
                            </tbody>
                        </table>
                        <!--end::Table-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card-->
            </div>
            <!--end::Content container-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Content wrapper-->

    <div class="modal fade" id="cardModalView" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelOne"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('admin/datatable/datatables/jquery.dataTables.min.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('#attendee').DataTable({
                language: {
                    url: "https://cdn.datatables.net/plug-ins/1.10.25/i18n/French.json"
                },
                searching: true,
            });
        });

        $(document).on("click", ".modal_edit_action", function() {
            var id = $(this).data('id');

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                },
                type: "POST",
                url: "{{ route('get-registration') }}",
                dataType: 'json',
                data: {
                    "id": id,
                    "action": "edit",
                },
                success: function(data) {
                    //get data value params
                    var body = data.body;
                    //dynamic title
                    $('#cardModalView .modal-content').html(body); //url to delete item
                    $('#cardModalView').modal('show');
                }
            });

        });

        $(document).on("click", ".modal_delete_action", function() {
            var id = $(this).data('id');

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                },
                type: "POST",
                url: "{{ route('get-registration') }}",
                dataType: 'json',
                data: {
                    "id": id,
                    "action": "delete",
                },
                success: function(data) {
                    //get data value params
                    var body = data.body;
                    //dynamic title
                    $('#cardModalView .modal-content').html(body); //url to delete item
                    $('#cardModalView').modal('show');
                }
            });

        });
    </script>
@endpush
