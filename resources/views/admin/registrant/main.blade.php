{{-- Extends layout --}}
@extends('admin.layout.default')

{{-- Content --}}
@section('content')
    <div class="container-fluid">
        <div class="page-titles d-flex flex-row justify-content-between align-items-center">
            <div>
                {{-- <h4>{{ $page_title }}</h4> --}}
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Master Data</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">{{ ucfirst($action) }}</a></li>
                </ol>
            </div>
            <div>
                <a type="button" class="btn btn-primary create"
                href="{{ route('admin.registrant.export') }}">Download xlsx</a>
                <button type="button" class="btn btn-primary create" data-toggle="modal"
                    data-target="#formModal">Tambah</button>
            </div>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="table" class="display min-w850" style="width: 100%!important">
                                <thead>
                                    <tr>
                                        <th>Kode</th>
                                        <th>Nama</th>
                                        <th>WhatsApp</th>
                                        <th>Asal Instansi</th>
                                        <th>Tanggal Pesan</th>
                                        <th>Konfirmasi Kedatangan</th>
                                        <th>Status Pembayaran</th>
                                        <th>Kedatangan Hari H</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="exampleModalLabel1">Form {{ $page_title }}</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <form id="form" method="POST" action="{{ route('admin.' . $action . '.store') }}">
                            <div class="form-group" field="name">
                                <label for="name" class="control-label">Nama:</label>
                                <input type="text" class="form-control" id="name" name="name">
                                <div class="error text-danger"></div>
                            </div>
                            <div class="form-group" field="origin">
                                <label for="origin" class="control-label">Asal Instansi:</label>
                                <input type="origin" class="form-control" id="origin" name="origin">
                                <div class="error text-danger"></div>
                            </div>
                            <div class="form-group" field="phone_number">
                                <label for="phone_number" class="control-label">Whatsapp:</label>
                                <input type="phone_number" class="form-control" id="phone_number" name="phone_number"
                                    value="62">
                                <small>Dimulai dengan 62</small>
                                <div class="error text-danger"></div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                        <button type="button" id="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            window.page_url = window.base_url + `admin/{{ $action }}`;
            window.form = $('#form');
            window.serialize = form.serializeArray();
            window.serialize.push({
                name: "id",
                value: ""
            });

            console.log(window.serialize);

            window.table = $('#table').DataTable({
                stateSave: true,
                processing: true,
                serverSide: true,
                ajax: {
                    url: `{{ route('admin.' . $action . '.data') }}`,
                    type: 'GET',
                },
                columns: [{
                        data: 'code',
                        render: function(value, row, data) {
                            return `#${value}`;
                        }
                    },
                    {
                        data: 'name'
                    },
                    {
                        data: 'phone_number'
                    },
                    {
                        data: 'origin'
                    },
                    {
                        data: 'created_at'
                    },
                    {
                        data: 'arrival_confirmation',
                        render: function(value, row, data) {
                            let checked_1 = data.arrival_confirmation == 1 ? 'checked="true"' : '';
                            let checked_0 = data.arrival_confirmation == 0 ? 'checked="true"' : '';

                            let option = `<div class="form-group mb-0">
                                <label class="radio-inline mr-3"><input type="radio" class="update_status" name="arrival_confirmation" data-id="${data.id}" value="1" ${checked_1}> Datang</label>
                                <label class="radio-inline mr-3"><input type="radio" class="update_status" name="arrival_confirmation" data-id="${data.id}" value="0" ${checked_0}> Tidak Datang</label>
                            </div>`;

                            if (value == 1) {
                                return `<div class="badge badge-sm badge-primary">Datang</div> ${option}`;
                            } else if (value == 0) {
                                return `<div class="badge badge-sm badge-warning">Tidak Datang</div> ${option}`;
                            } else if (value == null) {
                                return `<div class="badge badge-sm badge-warning">Belum Konfirmasi</div> ${option}`;
                            }
                        }
                    },
                    {
                        data: 'payment_status',
                        render: function(value, row, data) {
                            let checked_1 = data.payment_status == 'success' ? 'checked="true"' :
                            '';

                            let option = `<div class="form-group mb-0">
                                <label class="radio-inline mr-3"><input type="radio" class="update_status" name="payment_status" data-id="${data.id}" value="success" ${checked_1}> Lunas</label>
                            </div>`;

                            if (value == 'success') {
                                return `<div class="badge badge-sm badge-success">Terbayar</div>`;
                            } else {
                                return `<div class="badge badge-sm badge-warning">Menunggu</div> ${option}`;
                            }
                        }
                    },
                    {
                        data: 'arrival_status',
                        render: function(value, row, data) {
                            let checked_1 = data.arrival_status == 1 ? 'checked="true"' : '';
                            let checked_0 = data.arrival_status == 0 ? 'checked="true"' : '';

                            let option = `<div class="form-group mb-0">
                                <label class="radio-inline mr-3"><input type="radio" class="update_status" name="arrival_status" data-id="${data.id}" value="1" ${checked_1}> Sudah Datang</label>
                            </div>`;

                            return option;
                        }
                    },
                    {
                        data: 'id',
                        render: function(value, row, data) {
                            return `
                                <button type="button" class="btn btn-primary update">Edit</button>
                                <button type="button" class="btn btn-danger delete">Hapus</button>
                            `;
                        }
                    }

                ],
            });

            $("#table tbody").on("click", 'input[type="radio"]', function() {
                const e = $(this);
                // alert(e.attr('name'));

                $.ajax({
                    type: "post",
                    url: `${window.page_url}/custom-update/${e.attr('data-id')}`,
                    data: {
                        field: e.attr('name'),
                        value: e.val()
                    },
                    success: function(res) {
                        $("#table").DataTable().ajax.reload();
                        Swal.fire(
                            "Oke!",
                            "Data sudah diperbarui.",
                            "success"
                        );
                    },
                });
            });


        });
    </script>
@endsection
