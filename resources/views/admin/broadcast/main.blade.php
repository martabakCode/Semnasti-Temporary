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
        </div>
        <!-- row -->


        <div class="row">
            <div class="col-xl-12 col-xxl-12">
                <form action="{{ route('admin.broadcast.store') }}" method="post">
                    @csrf
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Form Broadcast Message</h4>
                        </div>
                        <div class="card-body">
                            <div id="smartwizard" class="form-wizard order-create">
                                <ul class="nav nav-wizard">
                                    <li>
                                        <a class="nav-link" href="#general">
                                            <span>1</span>
                                        </a>
                                    </li>
                                    {{-- <li>
                                        <a class="nav-link" href="#button_config">
                                            <span>2</span>
                                        </a>
                                    </li> --}}
                                    <li>
                                        <a class="nav-link" href="#registrant_list">
                                            <span>2</span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div id="general" class="tab-pane" role="tabpanel">
                                        <h5>Konfirgurasi Pesan</h5>
                                        <hr>
                                        <div class="row">
                                            <div class="col-lg-12 mb-2">
                                                <div class="form-group">
                                                    <label class="text-label">Judul Broadcast*</label>
                                                    <input type="text" name="title" class="form-control"
                                                        placeholder="" required>
                                                    <small class="text-danger">Jangan males isi, ben memudahkan
                                                        identifikasi data</small>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-2">
                                                <div class="form-group">
                                                    <label class="text-label">Template Pesan*</label>
                                                    <select class="form-control select2" name="message_template"
                                                        id="message_template" required>
                                                        <option value=""></option>
                                                        <option value="event_detail">Kirim Detail Acara</option>
                                                        <option value="payment_reminder">Ingatkan Pembayaran</option>
                                                        <option value="arrival_confirmation">Kirim Konfirmasi Kedatangan</option>
                                                        <option value="congratulation">Selamat Telah Menjadi Peserta</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 mb-3">
                                                <div class="form-group">
                                                    <label class="text-label">Format Pesan*</label>
                                                    <textarea name="message_format" class="form-control" id="" cols="5" rows="10" required></textarea>
                                                    
                                                </div>
                                            </div>
                                            <div class="col-lg-12 mb-3">
                                                <p>Panduan Variable Pesan</p>
                                                <div class="row">
                                                    <div class="col-xl-6 col-md-12 col-sm-12">
                                                        <div class="table-responsive">
                                                            <table class="table table-bordered">
                                                                <tr>
                                                                    <th>Kode</th>
                                                                    <th>Keterangan</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>{code}</td>
                                                                    <td>Kode Pendaftaran</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>{name}</td>
                                                                    <td>Nama Pendaftar</td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-md-12 col-sm-12">
                                                        <div class="table-responsive">
                                                            <table class="table table-bordered">
                                                                <tr>
                                                                    <th>Kode</th>
                                                                    <th>Keterangan</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>{origin}</td>
                                                                    <td>Asal Pendaftar</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>{phone_number}</td>
                                                                    <td>Whatsapp Pendaftar</td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="button_config" class="tab-pane" role="tabpanel" hidden>
                                        <h5>Konfirgurasi Tombol Daftar Aksi</h5>
                                        <hr>
                                        <div class="row">
                                            <div class="col-lg-12 mb-2">
                                                <p>Daftar Aksi</p>
                                                <div class="form-group">

                                                    @foreach (\Facades\App\Services\WhatsappService::getSection() as $sectionName => $section)
                                                    <div class="form-check mb-2">
                                                        <input type="checkbox" class="form-check-input" name="list[]" id="{{ $sectionName }}" value="{{ $sectionName }}">
                                                        <label class="form-check-label" for="{{ $sectionName }}">{{ $section['title'] }}</label>
                                                    </div>
                                                    @endforeach
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="registrant_list" class="tab-pane" role="tabpanel">
                                        <h5>Konfirgurasi Daftar Penerima</h5>
                                        <div class="form-group mb-0">
                                            <label for="label-text">Pilih Cepat : </label>
                                            <label class="radio-inline text-black mr-3"><input type="radio" name="optradio"> Yang Sudah Konfirmasi Kedatangan</label>
                                            <label class="radio-inline text-black mr-3"><input type="radio" name="optradio"> Yang Belum Konfirmasi Kedatangan</label>
                                            <label class="radio-inline text-black mr-3"><input type="radio" name="optradio"> Yang Sudah Lunas</label>
                                            <label class="radio-inline text-black mr-3"><input type="radio" name="optradio"> Yang Belum Lunas</label>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-12">
                                            </div>
                                            @foreach ($registrants as $registrant)
                                                <div class="col-xl-3 col-md-3 col-sm-12 mb-2">
                                                    <div class="custom-control custom-checkbox mb-3">
                                                        <input type="checkbox" class="custom-control-input registrant "
                                                            name="registrant_id[]" id="reg-{{ $registrant->name }}"
                                                            value="{{ $registrant->id }}">
                                                        <label class="custom-control-label"
                                                            for="reg-{{ $registrant->name }}">
                                                            {{ $registrant->name }}
                                                            <br>
                                                            {{ $registrant->phone_number }}
                                                            <br>
                                                            <small
                                                                class="text-{{ $registrant->arrival_confirmation == 0 ? 'danger' : 'success' }}">({{ $registrant->arrival_confirmation == 0 ? 'Belum Konfirmasi Kedatangan' : 'Sudah Konfirmasi Kedatangan' }})</small>
                                                            <br>
                                                            <small
                                                                class="text-{{ $registrant->payment_status == 'pending' ? 'danger' : 'success' }}">({{ $registrant->payment_status == 'pending' ? 'Belum Lunas' : 'Lunas' }})</small>
                                                        </label>
                                                    </div>
                                                </div>
                                            @endforeach
                                            <div class="col-12" style="padding-right: 2rem;">
                                                <button class="btn btn-warning"
                                                    style="float:right;border-radius: .25rem; font-weight: 400; min-width: 180px">Proses
                                                    Broadcast</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="table" class="display min-w850" style="width: 100%!important">
                                <thead>
                                    <tr>
                                        <th>Kode</th>
                                        <th>Judul</th>
                                        <th>Tipe</th>
                                        <th>Jumlah Penerima</th>

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

    </div>

    <div class="modal fade" id="detailModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Detail Broadcast</h5>
                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="table-responsive">
                        <table id="detailTable" class="display min-w850" style="width: 100%!important">
                            <thead>
                                <tr>
                                    <th>Kepada</th>
                                    <th>Whatsapp</th>
                                    <th>Dengan CTA</th>
                                    <th>Kirim Faktur</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger light" data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.repeater/1.2.1/jquery.repeater.min.js"></script> --}}
    <script src="https://unpkg.com/jquery.repeater@1.2.1/jquery.repeater.js"></script>
    <script>
        $(document).ready(function() {
            window.page_url = window.base_url + `admin/{{ $action }}`;
            window.form = $('#form');
            window.serialize = form.serializeArray();
            window.serialize.push({
                name: "id",
                value: ""
            });
            let broadcast_id;

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
                        data: 'title'
                    },
                    {
                        data: 'type'
                    },

                    {
                        data: 'message',
                        render: function(value, row, data) {
                            return `${value.length} Penerima`;
                        }
                    },

                    {
                        data: 'id',
                        render: function(value, row, data) {
                            return `
                                <button type="button" class="btn btn-primary detailButton" data-id="${value}">Detail</button>
                            `;
                        }
                    }

                ],
            });


            /** Repeater */
            $('.repeater').repeater({
                defaultValues: {},
                show: function() {
                    $('.tab-content').attr('style', 'null');
                    $(this).slideDown();
                },
                hide: function(deleteElement) {
                    $(this).slideUp(deleteElement);
                    // if (confirm('Are you sure you want to delete this element?')) {
                    // }
                },
                ready: function(setIndexes) {

                }
            });

            /** Template */
            const template = {
                event_detail: "Terima kasih telah mendaftar sebagai peserta di acara SEMNASTI 2023!\n\nBerikut adalah detail kegiatannya :\nTanggal: *{{ config('event.date') }}*\nWaktu: {{ config('event.time') }}\nTempat: {{ config('event.place') }}\n\n*Sebelum hadir pada acara tersebut, peserta diwajibkan untuk melakukan konfirmasi dengan klik tombol konfirmasi dibawah ini untuk berkomitmen hadir.*\n\n_Kuota terbatas hanya untuk 300 peserta pertama yang telah sukses melakukan pembayaran dan konfirmasi kedatangan._\n\nJika kamu memerlukan bantuan atau informasi lebih lanjut silahkan lanjutkan chat dengan nomor ini atau ke instagram @isDitya_\n\n*Terima kasih*",
                payment_reminder: "jangan lupa untuk melunasi tagihan pembayaran anda untuk event SEMNASTI 2023\n\n*Berikut cara langkah melakukan pembayaran:*\n1. *Transfer dana ke salah satu bank dibawah ini*\n BCA\n 0092057516\n A/n Bagas Aditya Mahendra\n\n Dana\n 089506373551\n A/n Bagas Aditya Mahendra\n\n Gopay\n 089506373551\n A/n Bagas Aditya Mahendra\n2. *Kirimkan bukti transfer ke nomor ini*\n3. *Klik tombol konfirmasi dibawah untuk meminta validasi pembayaran oleh admin*\n\n_Kuota terbatas hanya untuk 300 peserta pertama yang telah sukses melakukan pembayaran dan konfirmasi kedatangan._\n\nJika kamu memerlukan bantuan atau informasi lebih lanjut silahkan lanjutkan chat dengan nomor ini atau ke instagram @isDitya_\n\n*Terima kasih*",
                arrival_confirmation: "Isi dewe",
                conggratulation: "Isi dewe"
            };
            $('select[name="message_template"]').on('change', function() {
                let val = $(this).val();

                $('textarea[name="message_format"]').text(template[val]);
            })

            function setBroadcastId(id) {
                broadcast_id = id;
            }

            function getBroadcastId() {
                return broadcast_id;
            }

            /** Detail */
            $("#table tbody").on("click", ".detailButton", function () {
                $("#detailModal").modal("show");

                var data = window.table.row($(this).parents("tr")).data();
                // console.log(data);
                setBroadcastId(data.id);
                if(!window.detailTableWindow) {
                    window.detailTableWindow = $('#detailTable').DataTable({
                        stateSave: true,
                        processing: true,
                        serverSide: true,
                        ajax: {
                            url: `{{ route('admin.' . $action . '.data.detail') }}`,
                            type: 'GET',
                            data: function(d){
                                d.broadcast_id = getBroadcastId();
                            }
                        },
                        columns: [
                            {
                                data: 'registrant.name'
                            },
                            {
                                data: 'phone_number'
                            },
                            {
                                data: 'with_button',
                                render: function(value, data, row) {
                                    if(value) {
                                        return "Ya";
                                    } else {
                                        return "Tidak";
                                    }
                                }
                            },
                            {
                                data: 'send_invoice',
                                render: function(value, data, row) {
                                    if(value) {
                                        return "Ya";
                                    } else {
                                        return "Tidak";
                                    }
                                }
                            },
                            {
                                data: 'status'
                            },
    
    
                        ],
                    });
                    console.log(window.detailTableWindow);
                } else {
                    console.log(window.detailTableWindow);

                    $('#detailTable').DataTable().ajax.reload();
                }
            });
        });
    </script>
@endsection
