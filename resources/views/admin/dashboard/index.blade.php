{{-- Extends layout --}}
@extends('admin.layout.default')

{{-- Content --}}
@section('content')
<!-- row -->
<div class="container-fluid">
  <!-- Add Order -->
  <div class="modal fade" id="addOrderModalside">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Add Event</h5>
          <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label class="text-black font-w500">Event Name</label>
              <input type="text" class="form-control">
            </div>
            <div class="form-group">
              <label class="text-black font-w500">Event Date</label>
              <input type="date" class="form-control">
            </div>
            <div class="form-group">
              <label class="text-black font-w500">Description</label>
              <input type="text" class="form-control">
            </div>
            <div class="form-group">
              <button type="button" class="btn btn-primary">Create</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-xl-3 col-xxl-4">
      <div class="row">
        <div class="col-xl-12 col-md-6">
          <div class="card">
            <div class="card-header border-0 pb-0">
              <h4 class="fs-20">Pembayaran Peserta</h4>
            </div>
            <div class="card-body">
              <div id="donutChart"></div>
              <div class="d-flex justify-content-between mt-4">
                <div class="pr-2">
                  <svg width="20" height="8" viewBox="0 0 20 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="20" height="8" rx="4" fill="#214BB8"/>
                  </svg>
                  <h4 class="fs-18 text-black mb-1 font-w600" id="paid-payment">{{ $paid_registrant }}</h4>
                  <span class="fs-14">Lunas</span>
                </div>
                <div class="pr-2">
                  <svg width="20" height="8" viewBox="0 0 20 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="20" height="8" rx="4" fill="#45ADDA"/>
                  </svg>
                  <h4 class="fs-18 text-black mb-1 font-w600" id="pending-payment">{{ $payment_pending_registrant }}</h4>
                  <span class="fs-14">Belum Membayar</span>
                </div>
                {{-- <div class="">
                  <svg width="20" height="8" viewBox="0 0 20 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="20" height="8" rx="4" fill="#45ADDA"/>
                  </svg>
                  <h4 class="fs-18 text-black mb-1 font-w600">275</h4>
                  <span class="fs-14">Lunas</span>
                </div> --}}
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-12 col-md-6" hidden>
          <div class="card">
            <div class="card-header border-0 pb-0">
              <h4 class="fs-20">Latest Sales</h4>
              <select class="form-control style-1 default-select ">
                <option>This Week</option>
                <option>Next Week</option>
                <option>This Month</option>
                <option>Next Month</option>
              </select>
            </div>
            <div class="card-body pb-0 dz-scroll height630 loadmore-content" id="latestSalesContent">
              <div class="pb-3 mb-3 border-bottom">
                <p class="font-w600"><a href="{!! url('/event'); !!}" class="text-black">The Story’s of Danau Toba (Drama Theater)</a></p>
                <div class="d-flex align-items-end">
                  <img src="images/profile/20.jpg" alt="" width="42" class="rounded-circle mr-2">
                  <div class="mr-auto">
                    <h4 class="fs-14 mb-0"><a href="{!! url('/app-profile'); !!}" class="text-black">Steffany Humble</a></h4>
                    <span class="fs-12">2m ago</span>
                  </div>
                  <span class="badge badge-sm light badge-primary">4 Ticket</span>
                </div>
              </div>
              <div class="pb-3 mb-3 border-bottom">
                <p class="font-w600"><a href="{!! url('/event'); !!}" class="text-black">Envato Author SF Meetup</a></p>
                <div class="d-flex align-items-end">
                  <img src="images/profile/21.jpg" alt="" width="42" class="rounded-circle mr-2">
                  <div class="mr-auto">
                    <h4 class="fs-14 mb-0"><a href="app-profile.com" class="text-black">Jacob Swing Swing</a></h4>
                    <span class="fs-12">6h ago</span>
                  </div>
                  <span class="badge badge-sm light badge-primary">2 Ticket</span>
                </div>
              </div>
              <div class="pb-3 mb-3 border-bottom">
                <p class="font-w600"><a href="{!! url('/event'); !!}" class="text-black">Envato Atuhor Community Fun Hiking at Sibayak Mountaint</a></p>
                <div class="d-flex align-items-end">
                  <img src="images/profile/22.jpg" alt="" width="42" class="rounded-circle mr-2">
                  <div class="mr-auto">
                    <h4 class="fs-14 mb-0"><a href="app-profile.com" class="text-black">Robert Carloz</a></h4>
                    <span class="fs-12">10h ago</span>
                  </div>
                  <span class="badge badge-sm light badge-primary">1 Ticket</span>
                </div>
              </div>
              <div class="pb-3 mb-3 border-bottom">
                <p class="font-w600"><a href="{!! url('/event'); !!}" class="text-black">Indonesia Envato Authors National Meetup</a></p>
                <div class="d-flex align-items-end">
                  <img src="images/profile/23.jpg" alt="" width="42" class="rounded-circle mr-2">
                  <div class="mr-auto">
                    <h4 class="fs-14 mb-0"><a href="app-profile.com" class="text-black">Kevin Stefanus</a></h4>
                    <span class="fs-12">2m ago</span>
                  </div>
                  <span class="badge badge-sm light badge-primary">1 Ticket</span>
                </div>
              </div>
              <div class="pb-3 mb-3 border-bottom">
                <p class="font-w600"><a href="{!! url('/event'); !!}" class="text-black">Envato Author SF Meetup</a></p>
                <div class="d-flex align-items-end">
                  <img src="images/profile/21.jpg" alt="" width="42" class="rounded-circle mr-2">
                  <div class="mr-auto">
                    <h4 class="fs-14 mb-0"><a href="app-profile.com" class="text-black">Jacob Swing Swing</a></h4>
                    <span class="fs-12">6h ago</span>
                  </div>
                  <span class="badge badge-sm light badge-primary">2 Ticket</span>
                </div>
              </div>
            </div>
            <div class="card-footer text-center border-0">
              <a class="btn btn-primary btn-sm dz-load-more" id="latestSales" href="javascript:void(0)" rel="latest-sales">View More</a>
            </div>
          </div>
        </div>
      </div>
    </div>


    {{-- <div class="col-xl-9 col-xxl-8">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <div class="text-center">
                <img class="img img-responsive" style="width: 100%" src="https://cdn0-production-images-kly.akamaized.net/9M5lOagtmXUYPmbRePTURWNEEQI=/640x360/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/4009789/original/053316800_1651130665-andre-mouton-GBEHjsPQbEQ-unsplash.jpg" alt="">
                <h2 class="text-title mt-3 pl-5 pr-5">Tak Dapat Makanan, Monyet Buang Tas Turis Berisi Uang Rp22,4 Juta ke Jurang</h2>
              </div>
              <div>
                <p>nakal berulah. Ia menjambret tas seorang turis yang sedang berkunjung ke Provinsi Srisaket, timur laut Thailand, dan berharap bisa menemukan makanan.</p>

                <p>Setelah menggeledah isi tas, ia tak bisa menemukan makanan ringan yang dicarinya. Monyet tersebut lalu membuang tas jinjing berisi uang tunai senilai 50 ribu baht (sekitar Rp22,4 juta) ke tepi jurang.</p>

                <p>Perempuan pemilik tas berusia 55 tahun yang kebingungan akhirnya memanggil petugas hutam Taman Nasional Khao Pkra Wihan. Mereka tiba pukul 3 sore pada Kamis, 22 Desember 2022.</p>

                <p>Kepada petugas, dia menjelaskan bagaimana seekor monyet liar mengambil tasnya hingga melemparkannya dari tebing karena tak menemukan makanan. Ia pun memohon agar penjaga membantunya mengambil tas yang berisi banyak barang berharga dan dokumen pribadi pentin, selain uang tunai.</p>

                <p>Dikutip dari Daily Star, Senin (26/12/2022), para penjaga pun setuju dan mereka lalu mengatur untuk menyiarkan langsung misi penyelamatan itu melalui Facebook. Setelah menuruni tebing sekitar 100 meter, petugas berhasil menemukan tas dan barang-barang milik perempuan itu.</p>

                <p>Penjaga hutan bahkan menemukan banyak barang pengunjung lain yang hilang yang kemungkinan juga akibat ulah monyet liar. Sementara tas sudah dikembalikan kepada perempuan itu yang merasa sangat berterima kasih, petugas juga mengumpulkan barang-barang temuan dan berencana akan menyerahkannya kepada pemilik yang sah.</p>

                <p>Akibat insiden itu, peringatan kembali diberikan. Kepala Taman Nasional Khao Phra Wihan di Thailand mengingatkan bahwa monyet liar di daerah itu kerap berlaku agresif.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> --}}
  </div>

</div>

@endsection
