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
                                        <th>Name</th>
                                        <th>Email</th>
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

                            <div class="form-group" field="email">
                                <label for="email" class="control-label">Email:</label>
                                <input type="email" class="form-control" id="email" name="email">
                                <div class="error text-danger"></div>
                            </div>

                            <div class="form-group" field="password">
                                <label for="password" class="control-label">Kata Sandi:</label>
                                <input type="password" class="form-control" id="password" name="password">
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
                        data: 'id',
                        render: function(value, row, data) {
                            return `#${value}`;
                        }
                    },
                    {
                        data: 'name'
                    },
                    {
                        data: 'email'
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
        })
    </script>
@endsection
