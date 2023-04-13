{{-- Extends layout --}}
@extends('layout.default')



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
  <div class="d-flex flex-wrap mb-2 align-items-center justify-content-between">
    <div class="mb-3">
      <h6 class="fs-16 text-black font-w600 mb-0">568 Total Orders</h6>
      <span class="fs-14">Based your preferences</span>
    </div>
    <div class="event-tabs mb-3">
      <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" data-toggle="tab" href="#All" role="tab" aria-selected="true">
            All
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#Sold" role="tab" aria-selected="false">
            Sold
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#Refunded" role="tab" aria-selected="false">
            Refunded
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#Canceled" role="tab" aria-selected="false">
            Canceled
          </a>
        </li>
      </ul>
    </div>
    <div class="mb-3 d-flex">
      <select class="form-control style-2 default-select mr-3">
        <option>Newest</option>
        <option>Monthly</option>
        <option>Weekly</option>
      </select>
      <a href="javascript:void(0)" class="btn btn-primary text-nowrap"><i class="fa fa-file-text scale5 mr-3" aria-hidden="true"></i>Generate Report</a>
    </div>
  </div>
  
  <div class="row">
    <div class="col-xl-12">	
      <div class="tab-content">
        <div id="All" class="tab-pane active">
          <div class="table-responsive fs-14">
            <table class="table mb-4 dataTablesCard no-hover card-table fs-14" id="example5">
              <thead>
                <tr>
                  <th>
                    <div class="checkbox mr-0 align-self-center">
                      <div class="custom-control custom-checkbox ">
                        <input type="checkbox" class="custom-control-input" id="checkAll" required="">
                        <label class="custom-control-label" for="checkAll"></label>
                      </div>
                    </div>
                  </th>
                  <th style="width:250px;">Customer</th>
                  <th class="d-none d-lg-inline-block">Event NAME</th>
                  <th>Stars Review</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <div class="checkbox mr-0 align-self-center">
                      <div class="custom-control custom-checkbox ">
                        <input type="checkbox" class="custom-control-input" id="customCheckBox2" required="">
                        <label class="custom-control-label" for="customCheckBox2"></label>
                      </div>
                    </div>	
                  </td>
                  <td>
                    <div class="media align-items-center">
                      <img class="img-fluid rounded mr-3 d-none d-xl-inline-block" width="70" src="{{ asset('images/avatar/1.jpg') }}" alt="DexignZone">
                      <div class="media-body">
                        <h4 class="font-w600 mb-1 wspace-no"><a href="javascript:void(0)" class="text-black">Glee Smiley</a></h4>
                        <span>Sunday, 24 July 2020 04:55 PM</span>
                      </div>
                    </div>
                  </td>
                  <td class="d-none d-lg-table-cell">The Story of Danau Toba (Musical Drama)</td>
                  <td>
                    <span class="star-review d-inline-block mb-2 fs-16 wspace-no">
                      <i class="fa fa-star fs-16 text-orange"></i>
                      <i class="fa fa-star fs-16 text-orange"></i>
                      <i class="fa fa-star fs-16 text-orange"></i>
                      <i class="fa fa-star fs-16 text-orange"></i>
                      <i class="fa fa-star fs-16 text-gray"></i>
                    </span>
                    <p class="mb-0 d-none d-xl-inline-block">Karciz is one of the best vendors we've ever worked with. Thanks for your wonderful, helpful service across the board. It is greatly appreciated!</p>
                  </td>
                  <td>
                    <div class="d-flex">
                      <a href="javascript:;" class="btn btn-info btn-sm light px-4">Publish</a>
                      <a href="javascript:;" class="btn btn-danger  btn-sm light ml-2 px-4">Delete</a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="checkbox mr-0 align-self-center">
                      <div class="custom-control custom-checkbox ">
                        <input type="checkbox" class="custom-control-input" id="customCheckBox21" required="">
                        <label class="custom-control-label" for="customCheckBox21"></label>
                      </div>
                    </div>	
                  </td>
                  <td>
                    <div class="media align-items-center">
                      <img class="img-fluid rounded mr-3 d-none d-xl-inline-block" width="70" src="{{ asset('images/avatar/2.jpg') }}" alt="DexignZone">
                      <div class="media-body">
                        <h4 class="font-w600 mb-1 wspace-no"><a href="javascript:void(0)" class="text-black">Louis Jovanny</a></h4>
                        <span>Sunday, 24 July 2020 04:55 PM</span>
                      </div>
                    </div>
                  </td>
                  <td class="d-none d-lg-table-cell">The Story of Danau Toba (Musical Drama)</td>
                  <td>
                    <span class="star-review d-inline-block mb-2 fs-16 wspace-no">
                      <i class="fa fa-star fs-16 text-orange"></i>
                      <i class="fa fa-star fs-16 text-orange"></i>
                      <i class="fa fa-star fs-16 text-orange"></i>
                      <i class="fa fa-star fs-16 text-orange"></i>
                      <i class="fa fa-star fs-16 text-gray"></i>
                    </span>
                    <p class="mb-0 d-none d-xl-inline-block">Karciz is one of the best vendors we've ever worked with. Thanks for your wonderful, helpful service across the board. It is greatly appreciated!</p>
                  </td>
                  <td>
                    <div class="d-flex">
                      <a href="javascript:;" class="btn btn-info btn-sm light px-4">Publish</a>
                      <a href="javascript:;" class="btn btn-danger  btn-sm light ml-2 px-4">Delete</a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="checkbox mr-0 align-self-center">
                      <div class="custom-control custom-checkbox ">
                        <input type="checkbox" class="custom-control-input" id="customCheckBox22" required="">
                        <label class="custom-control-label" for="customCheckBox22"></label>
                      </div>
                    </div>		
                  </td>
                  <td>
                    <div class="media align-items-center">
                      <img class="img-fluid rounded mr-3 d-none d-xl-inline-block" width="70" src="{{ asset('images/avatar/3.jpg') }}" alt="DexignZone">
                      <div class="media-body">
                        <h4 class="font-w600 mb-1 wspace-no"><a href="javascript:void(0)" class="text-black">Cindy Hawkins</a></h4>
                        <span>Sunday, 24 July 2020 04:55 PM</span>
                      </div>
                    </div>
                  </td>
                  <td class="d-none d-lg-table-cell">The Story of Danau Toba (Musical Drama)</td>
                  <td>
                    <span class="star-review d-inline-block mb-2 fs-16 wspace-no">
                      <i class="fa fa-star fs-16 text-orange"></i>
                      <i class="fa fa-star fs-16 text-orange"></i>
                      <i class="fa fa-star fs-16 text-orange"></i>
                      <i class="fa fa-star fs-16 text-orange"></i>
                      <i class="fa fa-star fs-16 text-gray"></i>
                    </span>
                    <p class="mb-0 d-none d-xl-inline-block">Karciz is one of the best vendors we've ever worked with. Thanks for your wonderful, helpful service across the board. It is greatly appreciated!</p>
                  </td>
                  <td>
                    <div class="d-flex">
                      <a href="javascript:;" class="btn btn-info btn-sm light px-4">Publish</a>
                      <a href="javascript:;" class="btn btn-danger  btn-sm light ml-2 px-4">Delete</a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="checkbox mr-0 align-self-center">
                      <div class="custom-control custom-checkbox ">
                        <input type="checkbox" class="custom-control-input" id="customCheckBox23" required="">
                        <label class="custom-control-label" for="customCheckBox23"></label>
                      </div>
                    </div>	
                  </td>
                  <td>
                    <div class="media align-items-center">
                      <img class="img-fluid rounded mr-3 d-none d-xl-inline-block" width="70" src="{{ asset('images/avatar/4.jpg') }}" alt="DexignZone">
                      <div class="media-body">
                        <h4 class="font-w600 mb-1 wspace-no"><a href="javascript:void(0)" class="text-black">Glee Smiley</a></h4>
                        <span>Sunday, 24 July 2020 04:55 PM</span>
                      </div>
                    </div>
                  </td>
                  <td class="d-none d-lg-table-cell">The Story of Danau Toba (Musical Drama)</td>
                  <td>
                    <span class="star-review d-inline-block mb-2 fs-16 wspace-no">
                      <i class="fa fa-star fs-16 text-orange"></i>
                      <i class="fa fa-star fs-16 text-orange"></i>
                      <i class="fa fa-star fs-16 text-orange"></i>
                      <i class="fa fa-star fs-16 text-orange"></i>
                      <i class="fa fa-star fs-16 text-gray"></i>
                    </span>
                    <p class="mb-0 d-none d-xl-inline-block">Karciz is one of the best vendors we've ever worked with. Thanks for your wonderful, helpful service across the board. It is greatly appreciated!</p>
                  </td>
                  <td>
                    <div class="d-flex">
                      <a href="javascript:;" class="btn btn-info btn-sm light px-4">Publish</a>
                      <a href="javascript:;" class="btn btn-danger  btn-sm light ml-2 px-4">Delete</a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="checkbox mr-0 align-self-center">
                      <div class="custom-control custom-checkbox ">
                        <input type="checkbox" class="custom-control-input" id="customCheckBox211" required="">
                        <label class="custom-control-label" for="customCheckBox211"></label>
                      </div>
                    </div>	
                  </td>
                  <td>
                    <div class="media align-items-center">
                      <img class="img-fluid rounded mr-3 d-none d-xl-inline-block" width="70" src="{{ asset('images/avatar/2.jpg') }}" alt="DexignZone">
                      <div class="media-body">
                        <h4 class="font-w600 mb-1 wspace-no"><a href="javascript:void(0)" class="text-black">Louis Jovanny</a></h4>
                        <span>Sunday, 24 July 2020 04:55 PM</span>
                      </div>
                    </div>
                  </td>
                  <td class="d-none d-lg-table-cell">The Story of Danau Toba (Musical Drama)</td>
                  <td>
                    <span class="star-review d-inline-block mb-2 fs-16 wspace-no">
                      <i class="fa fa-star fs-16 text-orange"></i>
                      <i class="fa fa-star fs-16 text-orange"></i>
                      <i class="fa fa-star fs-16 text-orange"></i>
                      <i class="fa fa-star fs-16 text-orange"></i>
                      <i class="fa fa-star fs-16 text-gray"></i>
                    </span>
                    <p class="mb-0 d-none d-xl-inline-block">Karciz is one of the best vendors we've ever worked with. Thanks for your wonderful, helpful service across the board. It is greatly appreciated!</p>
                  </td>
                  <td>
                    <div class="d-flex">
                      <a href="javascript:;" class="btn btn-info btn-sm light px-4">Publish</a>
                      <a href="javascript:;" class="btn btn-danger  btn-sm light ml-2 px-4">Delete</a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="checkbox mr-0 align-self-center">
                      <div class="custom-control custom-checkbox ">
                        <input type="checkbox" class="custom-control-input" id="customCheckBox24" required="">
                        <label class="custom-control-label" for="customCheckBox24"></label>
                      </div>
                    </div>	
                  </td>
                  <td>
                    <div class="media align-items-center">
                      <img class="img-fluid rounded mr-3 d-none d-xl-inline-block" width="70" src="{{ asset('images/avatar/5.jpg') }}" alt="DexignZone">
                      <div class="media-body">
                        <h4 class="font-w600 mb-1 wspace-no"><a href="javascript:void(0)" class="text-black">Louis Jovanny</a></h4>
                        <span>Sunday, 24 July 2020 04:55 PM</span>
                      </div>
                    </div>
                  </td>
                  <td class="d-none d-lg-table-cell">The Story of Danau Toba (Musical Drama)</td>
                  <td>
                    <span class="star-review d-inline-block mb-2 fs-16 wspace-no">
                      <i class="fa fa-star fs-16 text-orange"></i>
                      <i class="fa fa-star fs-16 text-orange"></i>
                      <i class="fa fa-star fs-16 text-orange"></i>
                      <i class="fa fa-star fs-16 text-orange"></i>
                      <i class="fa fa-star fs-16 text-gray"></i>
                    </span>
                    <p class="mb-0 d-none d-xl-inline-block">Karciz is one of the best vendors we've ever worked with. Thanks for your wonderful, helpful service across the board. It is greatly appreciated!</p>
                  </td>
                  <td>
                    <div class="d-flex">
                      <a href="javascript:;" class="btn btn-info btn-sm light px-4">Publish</a>
                      <a href="javascript:;" class="btn btn-danger  btn-sm light ml-2 px-4">Delete</a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="checkbox mr-0 align-self-center">
                      <div class="custom-control custom-checkbox ">
                        <input type="checkbox" class="custom-control-input" id="customCheckBox25" required="">
                        <label class="custom-control-label" for="customCheckBox25"></label>
                      </div>
                    </div>	
                  </td>
                  <td>
                    <div class="media align-items-center">
                      <img class="img-fluid rounded mr-3 d-none d-xl-inline-block" width="70" src="{{ asset('images/avatar/6.jpg') }}" alt="DexignZone">
                      <div class="media-body">
                        <h4 class="font-w600 mb-1 wspace-no"><a href="javascript:void(0)" class="text-black">Cindy Hawkins</a></h4>
                        <span>Sunday, 24 July 2020 04:55 PM</span>
                      </div>
                    </div>
                  </td>
                  <td class="d-none d-lg-table-cell">The Story of Danau Toba (Musical Drama)</td>
                  <td>
                    <span class="star-review d-inline-block mb-2 fs-16 wspace-no wspace-no">
                      <i class="fa fa-star fs-16 text-orange"></i>
                      <i class="fa fa-star fs-16 text-orange"></i>
                      <i class="fa fa-star fs-16 text-orange"></i>
                      <i class="fa fa-star fs-16 text-orange"></i>
                      <i class="fa fa-star fs-16 text-gray"></i>
                    </span>
                    <p class="mb-0 d-none d-xl-inline-block">Karciz is one of the best vendors we've ever worked with. Thanks for your wonderful, helpful service across the board. It is greatly appreciated!</p>
                  </td>
                  <td>
                    <div class="d-flex">
                      <a href="javascript:;" class="btn btn-info btn-sm light px-4">Publish</a>
                      <a href="javascript:;" class="btn btn-danger  btn-sm light ml-2 px-4">Delete</a>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div id="Sold" class="tab-pane">
          <div class="table-responsive fs-14">
            <table class="table mb-4 dataTablesCard no-hover card-table fs-14" id="example4">
              <thead>
                <tr>
                  <th>
                    <div class="checkbox mr-0 align-self-center">
                      <div class="custom-control custom-checkbox ">
                        <input type="checkbox" class="custom-control-input" id="checkAll2" required="">
                        <label class="custom-control-label" for="checkAll2"></label>
                      </div>
                    </div>
                  </th>
                  <th style="width:250px;">Customer</th>
                  <th class="d-none d-lg-inline-block">Event NAME</th>
                  <th>Stars Review</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <div class="checkbox mr-0 align-self-center">
                      <div class="custom-control custom-checkbox ">
                        <input type="checkbox" class="custom-control-input" id="customCheckBox4" required="">
                        <label class="custom-control-label" for="customCheckBox4"></label>
                      </div>
                    </div>	
                  </td>
                  <td>
                    <div class="media align-items-center">
                      <img class="img-fluid rounded mr-3 d-none d-xl-inline-block" width="70" src="{{ asset('images/avatar/2.jpg') }}" alt="DexignZone">
                      <div class="media-body">
                        <h4 class="font-w600 mb-1 wspace-no"><a href="javascript:void(0)" class="text-black">Louis Jovanny</a></h4>
                        <span>Sunday, 24 July 2020 04:55 PM</span>
                      </div>
                    </div>
                  </td>
                  <td class="d-none d-lg-table-cell">The Story of Danau Toba (Musical Drama)</td>
                  <td>
                    <span class="star-review d-inline-block mb-2 fs-16 wspace-no">
                      <i class="fa fa-star fs-16 text-orange"></i>
                      <i class="fa fa-star fs-16 text-orange"></i>
                      <i class="fa fa-star fs-16 text-orange"></i>
                      <i class="fa fa-star fs-16 text-orange"></i>
                      <i class="fa fa-star fs-16 text-gray"></i>
                    </span>
                    <p class="mb-0 d-none d-xl-inline-block">Karciz is one of the best vendors we've ever worked with. Thanks for your wonderful, helpful service across the board. It is greatly appreciated!</p>
                  </td>
                  <td>
                    <div class="d-flex">
                      <a href="javascript:;" class="btn btn-info btn-sm light px-4">Publish</a>
                      <a href="javascript:;" class="btn btn-danger  btn-sm light ml-2 px-4">Delete</a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="checkbox mr-0 align-self-center">
                      <div class="custom-control custom-checkbox ">
                        <input type="checkbox" class="custom-control-input" id="customCheckBox5" required="">
                        <label class="custom-control-label" for="customCheckBox5"></label>
                      </div>
                    </div>		
                  </td>
                  <td>
                    <div class="media align-items-center">
                      <img class="img-fluid rounded mr-3 d-none d-xl-inline-block" width="70" src="{{ asset('images/avatar/3.jpg') }}" alt="DexignZone">
                      <div class="media-body">
                        <h4 class="font-w600 mb-1 wspace-no"><a href="javascript:void(0)" class="text-black">Cindy Hawkins</a></h4>
                        <span>Sunday, 24 July 2020 04:55 PM</span>
                      </div>
                    </div>
                  </td>
                  <td class="d-none d-lg-table-cell">The Story of Danau Toba (Musical Drama)</td>
                  <td>
                    <span class="star-review d-inline-block mb-2 fs-16 wspace-no">
                      <i class="fa fa-star fs-16 text-orange"></i>
                      <i class="fa fa-star fs-16 text-orange"></i>
                      <i class="fa fa-star fs-16 text-orange"></i>
                      <i class="fa fa-star fs-16 text-orange"></i>
                      <i class="fa fa-star fs-16 text-gray"></i>
                    </span>
                    <p class="mb-0 d-none d-xl-inline-block">Karciz is one of the best vendors we've ever worked with. Thanks for your wonderful, helpful service across the board. It is greatly appreciated!</p>
                  </td>
                  <td>
                    <div class="d-flex">
                      <a href="javascript:;" class="btn btn-info btn-sm light px-4">Publish</a>
                      <a href="javascript:;" class="btn btn-danger  btn-sm light ml-2 px-4">Delete</a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="checkbox mr-0 align-self-center">
                      <div class="custom-control custom-checkbox ">
                        <input type="checkbox" class="custom-control-input" id="customCheckBox6" required="">
                        <label class="custom-control-label" for="customCheckBox6"></label>
                      </div>
                    </div>	
                  </td>
                  <td>
                    <div class="media align-items-center">
                      <img class="img-fluid rounded mr-3 d-none d-xl-inline-block" width="70" src="{{ asset('images/avatar/4.jpg') }}" alt="DexignZone">
                      <div class="media-body">
                        <h4 class="font-w600 mb-1 wspace-no"><a href="javascript:void(0)" class="text-black">Glee Smiley</a></h4>
                        <span>Sunday, 24 July 2020 04:55 PM</span>
                      </div>
                    </div>
                  </td>
                  <td class="d-none d-lg-table-cell">The Story of Danau Toba (Musical Drama)</td>
                  <td>
                    <span class="star-review d-inline-block mb-2 fs-16 wspace-no">
                      <i class="fa fa-star fs-16 text-orange"></i>
                      <i class="fa fa-star fs-16 text-orange"></i>
                      <i class="fa fa-star fs-16 text-orange"></i>
                      <i class="fa fa-star fs-16 text-orange"></i>
                      <i class="fa fa-star fs-16 text-gray"></i>
                    </span>
                    <p class="mb-0 d-none d-xl-inline-block">Karciz is one of the best vendors we've ever worked with. Thanks for your wonderful, helpful service across the board. It is greatly appreciated!</p>
                  </td>
                  <td>
                    <div class="d-flex">
                      <a href="javascript:;" class="btn btn-info btn-sm light px-4">Publish</a>
                      <a href="javascript:;" class="btn btn-danger  btn-sm light ml-2 px-4">Delete</a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="checkbox mr-0 align-self-center">
                      <div class="custom-control custom-checkbox ">
                        <input type="checkbox" class="custom-control-input" id="customCheckBox7" required="">
                        <label class="custom-control-label" for="customCheckBox7"></label>
                      </div>
                    </div>	
                  </td>
                  <td>
                    <div class="media align-items-center">
                      <img class="img-fluid rounded mr-3 d-none d-xl-inline-block" width="70" src="{{ asset('images/avatar/2.jpg') }}" alt="DexignZone">
                      <div class="media-body">
                        <h4 class="font-w600 mb-1 wspace-no"><a href="javascript:void(0)" class="text-black">Louis Jovanny</a></h4>
                        <span>Sunday, 24 July 2020 04:55 PM</span>
                      </div>
                    </div>
                  </td>
                  <td class="d-none d-lg-table-cell">The Story of Danau Toba (Musical Drama)</td>
                  <td>
                    <span class="star-review d-inline-block mb-2 fs-16 wspace-no">
                      <i class="fa fa-star fs-16 text-orange"></i>
                      <i class="fa fa-star fs-16 text-orange"></i>
                      <i class="fa fa-star fs-16 text-orange"></i>
                      <i class="fa fa-star fs-16 text-orange"></i>
                      <i class="fa fa-star fs-16 text-gray"></i>
                    </span>
                    <p class="mb-0 d-none d-xl-inline-block">Karciz is one of the best vendors we've ever worked with. Thanks for your wonderful, helpful service across the board. It is greatly appreciated!</p>
                  </td>
                  <td>
                    <div class="d-flex">
                      <a href="javascript:;" class="btn btn-info btn-sm light px-4">Publish</a>
                      <a href="javascript:;" class="btn btn-danger  btn-sm light ml-2 px-4">Delete</a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="checkbox mr-0 align-self-center">
                      <div class="custom-control custom-checkbox ">
                        <input type="checkbox" class="custom-control-input" id="customCheckBox8" required="">
                        <label class="custom-control-label" for="customCheckBox8"></label>
                      </div>
                    </div>	
                  </td>
                  <td>
                    <div class="media align-items-center">
                      <img class="img-fluid rounded mr-3 d-none d-xl-inline-block" width="70" src="{{ asset('images/avatar/5.jpg') }}" alt="DexignZone">
                      <div class="media-body">
                        <h4 class="font-w600 mb-1 wspace-no"><a href="javascript:void(0)" class="text-black">Louis Jovanny</a></h4>
                        <span>Sunday, 24 July 2020 04:55 PM</span>
                      </div>
                    </div>
                  </td>
                  <td class="d-none d-lg-table-cell">The Story of Danau Toba (Musical Drama)</td>
                  <td>
                    <span class="star-review d-inline-block mb-2 fs-16 wspace-no">
                      <i class="fa fa-star fs-16 text-orange"></i>
                      <i class="fa fa-star fs-16 text-orange"></i>
                      <i class="fa fa-star fs-16 text-orange"></i>
                      <i class="fa fa-star fs-16 text-orange"></i>
                      <i class="fa fa-star fs-16 text-gray"></i>
                    </span>
                    <p class="mb-0 d-none d-xl-inline-block">Karciz is one of the best vendors we've ever worked with. Thanks for your wonderful, helpful service across the board. It is greatly appreciated!</p>
                  </td>
                  <td>
                    <div class="d-flex">
                      <a href="javascript:;" class="btn btn-info btn-sm light px-4">Publish</a>
                      <a href="javascript:;" class="btn btn-danger  btn-sm light ml-2 px-4">Delete</a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="checkbox mr-0 align-self-center">
                      <div class="custom-control custom-checkbox ">
                        <input type="checkbox" class="custom-control-input" id="customCheckBox9" required="">
                        <label class="custom-control-label" for="customCheckBox9"></label>
                      </div>
                    </div>	
                  </td>
                  <td>
                    <div class="media align-items-center">
                      <img class="img-fluid rounded mr-3 d-none d-xl-inline-block" width="70" src="{{ asset('images/avatar/6.jpg') }}" alt="DexignZone">
                      <div class="media-body">
                        <h4 class="font-w600 mb-1 wspace-no"><a href="javascript:void(0)" class="text-black">Cindy Hawkins</a></h4>
                        <span>Sunday, 24 July 2020 04:55 PM</span>
                      </div>
                    </div>
                  </td>
                  <td class="d-none d-lg-table-cell">The Story of Danau Toba (Musical Drama)</td>
                  <td>
                    <span class="star-review d-inline-block mb-2 fs-16 wspace-no wspace-no">
                      <i class="fa fa-star fs-16 text-orange"></i>
                      <i class="fa fa-star fs-16 text-orange"></i>
                      <i class="fa fa-star fs-16 text-orange"></i>
                      <i class="fa fa-star fs-16 text-orange"></i>
                      <i class="fa fa-star fs-16 text-gray"></i>
                    </span>
                    <p class="mb-0 d-none d-xl-inline-block">Karciz is one of the best vendors we've ever worked with. Thanks for your wonderful, helpful service across the board. It is greatly appreciated!</p>
                  </td>
                  <td>
                    <div class="d-flex">
                      <a href="javascript:;" class="btn btn-info btn-sm light px-4">Publish</a>
                      <a href="javascript:;" class="btn btn-danger  btn-sm light ml-2 px-4">Delete</a>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div id="Refunded" class="tab-pane">
          <div class="table-responsive fs-14">
            <table class="table mb-4 dataTablesCard no-hover card-table fs-14" id="example3">
              <thead>
                <tr>
                  <th>
                    <div class="checkbox mr-0 align-self-center">
                      <div class="custom-control custom-checkbox ">
                        <input type="checkbox" class="custom-control-input" id="checkAll3" required="">
                        <label class="custom-control-label" for="checkAll3"></label>
                      </div>
                    </div>
                  </th>
                  <th style="width:250px;">Customer</th>
                  <th class="d-none d-lg-inline-block">Event NAME</th>
                  <th>Stars Review</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <div class="checkbox mr-0 align-self-center">
                      <div class="custom-control custom-checkbox ">
                        <input type="checkbox" class="custom-control-input" id="customCheckBox85" required="">
                        <label class="custom-control-label" for="customCheckBox85"></label>
                      </div>
                    </div>	
                  </td>
                  <td>
                    <div class="media align-items-center">
                      <img class="img-fluid rounded mr-3 d-none d-xl-inline-block" width="70" src="{{ asset('images/avatar/5.jpg') }}" alt="DexignZone">
                      <div class="media-body">
                        <h4 class="font-w600 mb-1 wspace-no"><a href="javascript:void(0)" class="text-black">Louis Jovanny</a></h4>
                        <span>Sunday, 24 July 2020 04:55 PM</span>
                      </div>
                    </div>
                  </td>
                  <td class="d-none d-lg-table-cell">The Story of Danau Toba (Musical Drama)</td>
                  <td>
                    <span class="star-review d-inline-block mb-2 fs-16 wspace-no">
                      <i class="fa fa-star fs-16 text-orange"></i>
                      <i class="fa fa-star fs-16 text-orange"></i>
                      <i class="fa fa-star fs-16 text-orange"></i>
                      <i class="fa fa-star fs-16 text-orange"></i>
                      <i class="fa fa-star fs-16 text-gray"></i>
                    </span>
                    <p class="mb-0 d-none d-xl-inline-block">Karciz is one of the best vendors we've ever worked with. Thanks for your wonderful, helpful service across the board. It is greatly appreciated!</p>
                  </td>
                  <td>
                    <div class="d-flex">
                      <a href="javascript:;" class="btn btn-info btn-sm light px-4">Publish</a>
                      <a href="javascript:;" class="btn btn-danger  btn-sm light ml-2 px-4">Delete</a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="checkbox mr-0 align-self-center">
                      <div class="custom-control custom-checkbox ">
                        <input type="checkbox" class="custom-control-input" id="customCheckBox63" required="">
                        <label class="custom-control-label" for="customCheckBox63"></label>
                      </div>
                    </div>	
                  </td>
                  <td>
                    <div class="media align-items-center">
                      <img class="img-fluid rounded mr-3 d-none d-xl-inline-block" width="70" src="{{ asset('images/avatar/4.jpg') }}" alt="DexignZone">
                      <div class="media-body">
                        <h4 class="font-w600 mb-1 wspace-no"><a href="javascript:void(0)" class="text-black">Glee Smiley</a></h4>
                        <span>Sunday, 24 July 2020 04:55 PM</span>
                      </div>
                    </div>
                  </td>
                  <td class="d-none d-lg-table-cell">The Story of Danau Toba (Musical Drama)</td>
                  <td>
                    <span class="star-review d-inline-block mb-2 fs-16 wspace-no">
                      <i class="fa fa-star fs-16 text-orange"></i>
                      <i class="fa fa-star fs-16 text-orange"></i>
                      <i class="fa fa-star fs-16 text-orange"></i>
                      <i class="fa fa-star fs-16 text-orange"></i>
                      <i class="fa fa-star fs-16 text-gray"></i>
                    </span>
                    <p class="mb-0 d-none d-xl-inline-block">Karciz is one of the best vendors we've ever worked with. Thanks for your wonderful, helpful service across the board. It is greatly appreciated!</p>
                  </td>
                  <td>
                    <div class="d-flex">
                      <a href="javascript:;" class="btn btn-info btn-sm light px-4">Publish</a>
                      <a href="javascript:;" class="btn btn-danger  btn-sm light ml-2 px-4">Delete</a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="checkbox mr-0 align-self-center">
                      <div class="custom-control custom-checkbox ">
                        <input type="checkbox" class="custom-control-input" id="customCheckBox41" required="">
                        <label class="custom-control-label" for="customCheckBox41"></label>
                      </div>
                    </div>	
                  </td>
                  <td>
                    <div class="media align-items-center">
                      <img class="img-fluid rounded mr-3 d-none d-xl-inline-block" width="70" src="{{ asset('images/avatar/2.jpg') }}" alt="DexignZone">
                      <div class="media-body">
                        <h4 class="font-w600 mb-1 wspace-no"><a href="javascript:void(0)" class="text-black">Louis Jovanny</a></h4>
                        <span>Sunday, 24 July 2020 04:55 PM</span>
                      </div>
                    </div>
                  </td>
                  <td class="d-none d-lg-table-cell">The Story of Danau Toba (Musical Drama)</td>
                  <td>
                    <span class="star-review d-inline-block mb-2 fs-16 wspace-no">
                      <i class="fa fa-star fs-16 text-orange"></i>
                      <i class="fa fa-star fs-16 text-orange"></i>
                      <i class="fa fa-star fs-16 text-orange"></i>
                      <i class="fa fa-star fs-16 text-orange"></i>
                      <i class="fa fa-star fs-16 text-gray"></i>
                    </span>
                    <p class="mb-0 d-none d-xl-inline-block">Karciz is one of the best vendors we've ever worked with. Thanks for your wonderful, helpful service across the board. It is greatly appreciated!</p>
                  </td>
                  <td>
                    <div class="d-flex">
                      <a href="javascript:;" class="btn btn-info btn-sm light px-4">Publish</a>
                      <a href="javascript:;" class="btn btn-danger  btn-sm light ml-2 px-4">Delete</a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="checkbox mr-0 align-self-center">
                      <div class="custom-control custom-checkbox ">
                        <input type="checkbox" class="custom-control-input" id="customCheckBox52" required="">
                        <label class="custom-control-label" for="customCheckBox52"></label>
                      </div>
                    </div>		
                  </td>
                  <td>
                    <div class="media align-items-center">
                      <img class="img-fluid rounded mr-3 d-none d-xl-inline-block" width="70" src="{{ asset('images/avatar/3.jpg') }}" alt="DexignZone">
                      <div class="media-body">
                        <h4 class="font-w600 mb-1 wspace-no"><a href="javascript:void(0)" class="text-black">Cindy Hawkins</a></h4>
                        <span>Sunday, 24 July 2020 04:55 PM</span>
                      </div>
                    </div>
                  </td>
                  <td class="d-none d-lg-table-cell">The Story of Danau Toba (Musical Drama)</td>
                  <td>
                    <span class="star-review d-inline-block mb-2 fs-16 wspace-no">
                      <i class="fa fa-star fs-16 text-orange"></i>
                      <i class="fa fa-star fs-16 text-orange"></i>
                      <i class="fa fa-star fs-16 text-orange"></i>
                      <i class="fa fa-star fs-16 text-orange"></i>
                      <i class="fa fa-star fs-16 text-gray"></i>
                    </span>
                    <p class="mb-0 d-none d-xl-inline-block">Karciz is one of the best vendors we've ever worked with. Thanks for your wonderful, helpful service across the board. It is greatly appreciated!</p>
                  </td>
                  <td>
                    <div class="d-flex">
                      <a href="javascript:;" class="btn btn-info btn-sm light px-4">Publish</a>
                      <a href="javascript:;" class="btn btn-danger  btn-sm light ml-2 px-4">Delete</a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="checkbox mr-0 align-self-center">
                      <div class="custom-control custom-checkbox ">
                        <input type="checkbox" class="custom-control-input" id="customCheckBox74" required="">
                        <label class="custom-control-label" for="customCheckBox74"></label>
                      </div>
                    </div>	
                  </td>
                  <td>
                    <div class="media align-items-center">
                      <img class="img-fluid rounded mr-3 d-none d-xl-inline-block" width="70" src="{{ asset('images/avatar/2.jpg') }}" alt="DexignZone">
                      <div class="media-body">
                        <h4 class="font-w600 mb-1 wspace-no"><a href="javascript:void(0)" class="text-black">Louis Jovanny</a></h4>
                        <span>Sunday, 24 July 2020 04:55 PM</span>
                      </div>
                    </div>
                  </td>
                  <td class="d-none d-lg-table-cell">The Story of Danau Toba (Musical Drama)</td>
                  <td>
                    <span class="star-review d-inline-block mb-2 fs-16 wspace-no">
                      <i class="fa fa-star fs-16 text-orange"></i>
                      <i class="fa fa-star fs-16 text-orange"></i>
                      <i class="fa fa-star fs-16 text-orange"></i>
                      <i class="fa fa-star fs-16 text-orange"></i>
                      <i class="fa fa-star fs-16 text-gray"></i>
                    </span>
                    <p class="mb-0 d-none d-xl-inline-block">Karciz is one of the best vendors we've ever worked with. Thanks for your wonderful, helpful service across the board. It is greatly appreciated!</p>
                  </td>
                  <td>
                    <div class="d-flex">
                      <a href="javascript:;" class="btn btn-info btn-sm light px-4">Publish</a>
                      <a href="javascript:;" class="btn btn-danger  btn-sm light ml-2 px-4">Delete</a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="checkbox mr-0 align-self-center">
                      <div class="custom-control custom-checkbox ">
                        <input type="checkbox" class="custom-control-input" id="customCheckBox96" required="">
                        <label class="custom-control-label" for="customCheckBox96"></label>
                      </div>
                    </div>	
                  </td>
                  <td>
                    <div class="media align-items-center">
                      <img class="img-fluid rounded mr-3 d-none d-xl-inline-block" width="70" src="{{ asset('images/avatar/6.jpg') }}" alt="DexignZone">
                      <div class="media-body">
                        <h4 class="font-w600 mb-1 wspace-no"><a href="javascript:void(0)" class="text-black">Cindy Hawkins</a></h4>
                        <span>Sunday, 24 July 2020 04:55 PM</span>
                      </div>
                    </div>
                  </td>
                  <td class="d-none d-lg-table-cell">The Story of Danau Toba (Musical Drama)</td>
                  <td>
                    <span class="star-review d-inline-block mb-2 fs-16 wspace-no wspace-no">
                      <i class="fa fa-star fs-16 text-orange"></i>
                      <i class="fa fa-star fs-16 text-orange"></i>
                      <i class="fa fa-star fs-16 text-orange"></i>
                      <i class="fa fa-star fs-16 text-orange"></i>
                      <i class="fa fa-star fs-16 text-gray"></i>
                    </span>
                    <p class="mb-0 d-none d-xl-inline-block">Karciz is one of the best vendors we've ever worked with. Thanks for your wonderful, helpful service across the board. It is greatly appreciated!</p>
                  </td>
                  <td>
                    <div class="d-flex">
                      <a href="javascript:;" class="btn btn-info btn-sm light px-4">Publish</a>
                      <a href="javascript:;" class="btn btn-danger  btn-sm light ml-2 px-4">Delete</a>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div id="Canceled" class="tab-pane">
          <div class="table-responsive fs-14">
            <table class="table mb-4 dataTablesCard no-hover card-table fs-14" id="example2">
              <thead>
                <tr>
                  <th>
                    <div class="checkbox mr-0 align-self-center">
                      <div class="custom-control custom-checkbox ">
                        <input type="checkbox" class="custom-control-input" id="checkAll4" required="">
                        <label class="custom-control-label" for="checkAll4"></label>
                      </div>
                    </div>
                  </th>
                  <th style="width:250px;">Customer</th>
                  <th class="d-none d-lg-inline-block">Event NAME</th>
                  <th>Stars Review</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <div class="checkbox mr-0 align-self-center">
                      <div class="custom-control custom-checkbox ">
                        <input type="checkbox" class="custom-control-input" id="customCheckBox524" required="">
                        <label class="custom-control-label" for="customCheckBox524"></label>
                      </div>
                    </div>		
                  </td>
                  <td>
                    <div class="media align-items-center">
                      <img class="img-fluid rounded mr-3 d-none d-xl-inline-block" width="70" src="{{ asset('images/avatar/3.jpg') }}" alt="DexignZone">
                      <div class="media-body">
                        <h4 class="font-w600 mb-1 wspace-no"><a href="javascript:void(0)" class="text-black">Cindy Hawkins</a></h4>
                        <span>Sunday, 24 July 2020 04:55 PM</span>
                      </div>
                    </div>
                  </td>
                  <td class="d-none d-lg-table-cell">The Story of Danau Toba (Musical Drama)</td>
                  <td>
                    <span class="star-review d-inline-block mb-2 fs-16 wspace-no">
                      <i class="fa fa-star fs-16 text-orange"></i>
                      <i class="fa fa-star fs-16 text-orange"></i>
                      <i class="fa fa-star fs-16 text-orange"></i>
                      <i class="fa fa-star fs-16 text-orange"></i>
                      <i class="fa fa-star fs-16 text-gray"></i>
                    </span>
                    <p class="mb-0 d-none d-xl-inline-block">Karciz is one of the best vendors we've ever worked with. Thanks for your wonderful, helpful service across the board. It is greatly appreciated!</p>
                  </td>
                  <td>
                    <div class="d-flex">
                      <a href="javascript:;" class="btn btn-info btn-sm light px-4">Publish</a>
                      <a href="javascript:;" class="btn btn-danger  btn-sm light ml-2 px-4">Delete</a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="checkbox mr-0 align-self-center">
                      <div class="custom-control custom-checkbox ">
                        <input type="checkbox" class="custom-control-input" id="customCheckBox412" required="">
                        <label class="custom-control-label" for="customCheckBox412"></label>
                      </div>
                    </div>	
                  </td>
                  <td>
                    <div class="media align-items-center">
                      <img class="img-fluid rounded mr-3 d-none d-xl-inline-block" width="70" src="{{ asset('images/avatar/2.jpg') }}" alt="DexignZone">
                      <div class="media-body">
                        <h4 class="font-w600 mb-1 wspace-no"><a href="javascript:void(0)" class="text-black">Louis Jovanny</a></h4>
                        <span>Sunday, 24 July 2020 04:55 PM</span>
                      </div>
                    </div>
                  </td>
                  <td class="d-none d-lg-table-cell">The Story of Danau Toba (Musical Drama)</td>
                  <td>
                    <span class="star-review d-inline-block mb-2 fs-16 wspace-no">
                      <i class="fa fa-star fs-16 text-orange"></i>
                      <i class="fa fa-star fs-16 text-orange"></i>
                      <i class="fa fa-star fs-16 text-orange"></i>
                      <i class="fa fa-star fs-16 text-orange"></i>
                      <i class="fa fa-star fs-16 text-gray"></i>
                    </span>
                    <p class="mb-0 d-none d-xl-inline-block">Karciz is one of the best vendors we've ever worked with. Thanks for your wonderful, helpful service across the board. It is greatly appreciated!</p>
                  </td>
                  <td>
                    <div class="d-flex">
                      <a href="javascript:;" class="btn btn-info btn-sm light px-4">Publish</a>
                      <a href="javascript:;" class="btn btn-danger  btn-sm light ml-2 px-4">Delete</a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="checkbox mr-0 align-self-center">
                      <div class="custom-control custom-checkbox ">
                        <input type="checkbox" class="custom-control-input" id="customCheckBox745" required="">
                        <label class="custom-control-label" for="customCheckBox745"></label>
                      </div>
                    </div>	
                  </td>
                  <td>
                    <div class="media align-items-center">
                      <img class="img-fluid rounded mr-3 d-none d-xl-inline-block" width="70" src="{{ asset('images/avatar/2.jpg') }}" alt="DexignZone">
                      <div class="media-body">
                        <h4 class="font-w600 mb-1 wspace-no"><a href="javascript:void(0)" class="text-black">Louis Jovanny</a></h4>
                        <span>Sunday, 24 July 2020 04:55 PM</span>
                      </div>
                    </div>
                  </td>
                  <td class="d-none d-lg-table-cell">The Story of Danau Toba (Musical Drama)</td>
                  <td>
                    <span class="star-review d-inline-block mb-2 fs-16 wspace-no">
                      <i class="fa fa-star fs-16 text-orange"></i>
                      <i class="fa fa-star fs-16 text-orange"></i>
                      <i class="fa fa-star fs-16 text-orange"></i>
                      <i class="fa fa-star fs-16 text-orange"></i>
                      <i class="fa fa-star fs-16 text-gray"></i>
                    </span>
                    <p class="mb-0 d-none d-xl-inline-block">Karciz is one of the best vendors we've ever worked with. Thanks for your wonderful, helpful service across the board. It is greatly appreciated!</p>
                  </td>
                  <td>
                    <div class="d-flex">
                      <a href="javascript:;" class="btn btn-info btn-sm light px-4">Publish</a>
                      <a href="javascript:;" class="btn btn-danger  btn-sm light ml-2 px-4">Delete</a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="checkbox mr-0 align-self-center">
                      <div class="custom-control custom-checkbox ">
                        <input type="checkbox" class="custom-control-input" id="customCheckBox634" required="">
                        <label class="custom-control-label" for="customCheckBox634"></label>
                      </div>
                    </div>	
                  </td>
                  <td>
                    <div class="media align-items-center">
                      <img class="img-fluid rounded mr-3 d-none d-xl-inline-block" width="70" src="{{ asset('images/avatar/4.jpg') }}" alt="DexignZone">
                      <div class="media-body">
                        <h4 class="font-w600 mb-1 wspace-no"><a href="javascript:void(0)" class="text-black">Glee Smiley</a></h4>
                        <span>Sunday, 24 July 2020 04:55 PM</span>
                      </div>
                    </div>
                  </td>
                  <td class="d-none d-lg-table-cell">The Story of Danau Toba (Musical Drama)</td>
                  <td>
                    <span class="star-review d-inline-block mb-2 fs-16 wspace-no">
                      <i class="fa fa-star fs-16 text-orange"></i>
                      <i class="fa fa-star fs-16 text-orange"></i>
                      <i class="fa fa-star fs-16 text-orange"></i>
                      <i class="fa fa-star fs-16 text-orange"></i>
                      <i class="fa fa-star fs-16 text-gray"></i>
                    </span>
                    <p class="mb-0 d-none d-xl-inline-block">Karciz is one of the best vendors we've ever worked with. Thanks for your wonderful, helpful service across the board. It is greatly appreciated!</p>
                  </td>
                  <td>
                    <div class="d-flex">
                      <a href="javascript:;" class="btn btn-info btn-sm light px-4">Publish</a>
                      <a href="javascript:;" class="btn btn-danger  btn-sm light ml-2 px-4">Delete</a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="checkbox mr-0 align-self-center">
                      <div class="custom-control custom-checkbox ">
                        <input type="checkbox" class="custom-control-input" id="customCheckBox855" required="">
                        <label class="custom-control-label" for="customCheckBox855"></label>
                      </div>
                    </div>	
                  </td>
                  <td>
                    <div class="media align-items-center">
                      <img class="img-fluid rounded mr-3 d-none d-xl-inline-block" width="70" src="{{ asset('images/avatar/5.jpg') }}" alt="DexignZone">
                      <div class="media-body">
                        <h4 class="font-w600 mb-1 wspace-no"><a href="javascript:void(0)" class="text-black">Louis Jovanny</a></h4>
                        <span>Sunday, 24 July 2020 04:55 PM</span>
                      </div>
                    </div>
                  </td>
                  <td class="d-none d-lg-table-cell">The Story of Danau Toba (Musical Drama)</td>
                  <td>
                    <span class="star-review d-inline-block mb-2 fs-16 wspace-no">
                      <i class="fa fa-star fs-16 text-orange"></i>
                      <i class="fa fa-star fs-16 text-orange"></i>
                      <i class="fa fa-star fs-16 text-orange"></i>
                      <i class="fa fa-star fs-16 text-orange"></i>
                      <i class="fa fa-star fs-16 text-gray"></i>
                    </span>
                    <p class="mb-0 d-none d-xl-inline-block">Karciz is one of the best vendors we've ever worked with. Thanks for your wonderful, helpful service across the board. It is greatly appreciated!</p>
                  </td>
                  <td>
                    <div class="d-flex">
                      <a href="javascript:;" class="btn btn-info btn-sm light px-4">Publish</a>
                      <a href="javascript:;" class="btn btn-danger  btn-sm light ml-2 px-4">Delete</a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="checkbox mr-0 align-self-center">
                      <div class="custom-control custom-checkbox ">
                        <input type="checkbox" class="custom-control-input" id="customCheckBox696" required="">
                        <label class="custom-control-label" for="customCheckBox696"></label>
                      </div>
                    </div>	
                  </td>
                  <td>
                    <div class="media align-items-center">
                      <img class="img-fluid rounded mr-3 d-none d-xl-inline-block" width="70" src="{{ asset('images/avatar/6.jpg') }}" alt="DexignZone">
                      <div class="media-body">
                        <h4 class="font-w600 mb-1 wspace-no"><a href="javascript:void(0)" class="text-black">Cindy Hawkins</a></h4>
                        <span>Sunday, 24 July 2020 04:55 PM</span>
                      </div>
                    </div>
                  </td>
                  <td class="d-none d-lg-table-cell">The Story of Danau Toba (Musical Drama)</td>
                  <td>
                    <span class="star-review d-inline-block mb-2 fs-16 wspace-no wspace-no">
                      <i class="fa fa-star fs-16 text-orange"></i>
                      <i class="fa fa-star fs-16 text-orange"></i>
                      <i class="fa fa-star fs-16 text-orange"></i>
                      <i class="fa fa-star fs-16 text-orange"></i>
                      <i class="fa fa-star fs-16 text-gray"></i>
                    </span>
                    <p class="mb-0 d-none d-xl-inline-block">Karciz is one of the best vendors we've ever worked with. Thanks for your wonderful, helpful service across the board. It is greatly appreciated!</p>
                  </td>
                  <td>
                    <div class="d-flex">
                      <a href="javascript:;" class="btn btn-info btn-sm light px-4">Publish</a>
                      <a href="javascript:;" class="btn btn-danger  btn-sm light ml-2 px-4">Delete</a>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection			