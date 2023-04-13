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
  <div class="row">
    <div class="col-xl-12">
      <div class="table-responsive">
        <table id="example2" class="table card-table display dataTablesCard">
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
              <th>Cust. ID</th>
              <th>Date Join</th>
              <th>Customer Name</th>
              <th>Ticket Ordered </th>
              <th>Location</th>
              <th>Last Order</th>
              <th>Total Spent</th>
              <th></th>
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
              <td>#0012451</td>
              <td>21/11/2017</td>
              <td>Bella Simatupang</td>
              <td>
                <span class="text-nowrap">The Powerfull Concert <br>Festival London 2020</span>
              </td>
              <td>Sydney, Australia</td>
              <td>04/08/2020<br>12:34 AM</td>
              <td><span class="text-primary">$623,55</span></td>
              <td>
                <div class="d-flex align-items-center">
                  <a href="javascript:void(0)" class="mr-4">
                    <i class="las la-pencil-alt scale-2"></i>
                  </a>
                  <a href="javascript:void(0)">
                    <i class="las la-trash-alt scale-2 text-danger"></i>
                  </a>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="checkbox mr-0 align-self-center">
                  <div class="custom-control custom-checkbox ">
                    <input type="checkbox" class="custom-control-input" id="customCheckBox3" required="">
                    <label class="custom-control-label" for="customCheckBox3"></label>
                  </div>
                </div>
              </td>
              <td>#0012451</td>
              <td>21/11/2017</td>
              <td>Olivia Brownlee</td>
              <td>
                <span class="text-nowrap">The Powerfull Concert <br>Festival London 2020</span>
              </td>
              <td>Medan, Indonesia</td>
              <td>04/08/2020<br>12:34 AM</td>
              <td><span class="text-primary">$246,45</span></td>
              <td>
                <div class="d-flex align-items-center">
                  <a href="javascript:void(0)" class="mr-4">
                    <i class="las la-pencil-alt scale-2"></i>
                  </a>
                  <a href="javascript:void(0)">
                    <i class="las la-trash-alt scale-2 text-danger"></i>
                  </a>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="checkbox mr-0 align-self-center">
                  <div class="custom-control custom-checkbox ">
                    <input type="checkbox" class="custom-control-input" id="customCheckBox4" required="">
                    <label class="custom-control-label" for="customCheckBox4"></label>
                  </div>
                </div>
              </td>
              <td>#0012451</td>
              <td>21/11/2017</td>
              <td>Cive Slauw</td>
              <td>
                <span class="text-nowrap">The Story of Danau Toba <br>(Musical Drama)</span>
              </td>
              <td>London, United Kingdom</td>
              <td>04/08/2020<br>12:34 AM</td>
              <td><span class="text-primary">$1,300</span></td>
              <td>
                <div class="d-flex align-items-center">
                  <a href="javascript:void(0)" class="mr-4">
                    <i class="las la-pencil-alt scale-2"></i>
                  </a>
                  <a href="javascript:void(0)">
                    <i class="las la-trash-alt scale-2 text-danger"></i>
                  </a>
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
              <td>#0012451</td>
              <td>21/11/2017</td>
              <td>Andrew Stevano</td>
              <td>
                <span class="text-nowrap">The Story of Danau Toba <br>(Musical Drama)</span>
              </td>
              <td>Sydney, Australia</td>
              <td>04/08/2020<br>12:34 AM</td>
              <td><span class="text-primary">$623,55</span></td>
              <td>
                <div class="d-flex align-items-center">
                  <a href="javascript:void(0)" class="mr-4">
                    <i class="las la-pencil-alt scale-2"></i>
                  </a>
                  <a href="javascript:void(0)">
                    <i class="las la-trash-alt scale-2 text-danger"></i>
                  </a>
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
              <td>#0012451</td>
              <td>21/11/2017</td>
              <td>James Roberto</td>
              <td>
                <span class="text-nowrap">The Powerfull Concert  <br>Festival London 2020</span>
              </td>
              <td>Sydney, Australia</td>
              <td>04/08/2020<br>12:34 AM</td>
              <td><span class="text-primary">$1,300</span></td>
              <td>
                <div class="d-flex align-items-center">
                  <a href="javascript:void(0)" class="mr-4">
                    <i class="las la-pencil-alt scale-2"></i>
                  </a>
                  <a href="javascript:void(0)">
                    <i class="las la-trash-alt scale-2 text-danger"></i>
                  </a>
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
              <td>#0012451</td>
              <td>21/11/2017</td>
              <td>Kevin Hurt</td>
              <td>
                <span class="text-nowrap">The Powerfull Concert <br>Festival London 2020</span>
              </td>
              <td>Medan, Indonesia</td>
              <td>04/08/2020<br>12:34 AM</td>
              <td><span class="text-primary">$623,66</span></td>
              <td>
                <div class="d-flex align-items-center">
                  <a href="javascript:void(0)" class="mr-4">
                    <i class="las la-pencil-alt scale-2"></i>
                  </a>
                  <a href="javascript:void(0)">
                    <i class="las la-trash-alt scale-2 text-danger"></i>
                  </a>
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
              <td>#0012451</td>
              <td>21/11/2017</td>
              <td>Kevin Hurt</td>
              <td>
                <span class="text-nowrap">The Powerfull Concert <br>Festival London 2020</span>
              </td>
              <td>Medan, Indonesia</td>
              <td>04/08/2020<br>12:34 AM</td>
              <td><span class="text-primary">$623,55</span></td>
              <td>
                <div class="d-flex align-items-center">
                  <a href="javascript:void(0)" class="mr-4">
                    <i class="las la-pencil-alt scale-2"></i>
                  </a>
                  <a href="javascript:void(0)">
                    <i class="las la-trash-alt scale-2 text-danger"></i>
                  </a>
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
              <td>#0012451</td>
              <td>21/11/2017</td>
              <td>Sanuel Jakson</td>
              <td>
                <span class="text-nowrap">The Story of Danau Toba <br>(Musical Drama)</span>
              </td>
              <td>Jakarta, Indonesia</td>
              <td>04/08/2020<br>12:34 AM</td>
              <td><span class="text-primary">$56,125</span></td>
              <td>
                <div class="d-flex align-items-center">
                  <a href="javascript:void(0)" class="mr-4">
                    <i class="las la-pencil-alt scale-2"></i>
                  </a>
                  <a href="javascript:void(0)">
                    <i class="las la-trash-alt scale-2 text-danger"></i>
                  </a>
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
              <td>#0012451</td>
              <td>21/11/2017</td>
              <td>Bella Simatupang</td>
              <td>
                <span class="text-nowrap">The Powerfull Concert <br>Festival London 2020</span>
              </td>
              <td>Sydney, Australia</td>
              <td>04/08/2020<br>12:34 AM</td>
              <td><span class="text-primary">$623,55</span></td>
              <td>
                <div class="d-flex align-items-center">
                  <a href="javascript:void(0)" class="mr-4">
                    <i class="las la-pencil-alt scale-2"></i>
                  </a>
                  <a href="javascript:void(0)">
                    <i class="las la-trash-alt scale-2 text-danger"></i>
                  </a>
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
              <td>#0012451</td>
              <td>21/11/2017</td>
              <td>Bella Simatupang</td>
              <td>
                <span class="text-nowrap">The Powerfull Concert <br>Festival London 2020</span>
              </td>
              <td>Sydney, Australia</td>
              <td>04/08/2020<br>12:34 AM</td>
              <td><span class="text-primary">$623,55</span></td>
              <td>
                <div class="d-flex align-items-center">
                  <a href="javascript:void(0)" class="mr-4">
                    <i class="las la-pencil-alt scale-2"></i>
                  </a>
                  <a href="javascript:void(0)">
                    <i class="las la-trash-alt scale-2 text-danger"></i>
                  </a>
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
              <td>#0012451</td>
              <td>21/11/2017</td>
              <td>Bella Simatupang</td>
              <td>
                <span class="text-nowrap">The Powerfull Concert <br>Festival London 2020</span>
              </td>
              <td>Sydney, Australia</td>
              <td>04/08/2020<br>12:34 AM</td>
              <td><span class="text-primary">$623,55</span></td>
              <td>
                <div class="d-flex align-items-center">
                  <a href="javascript:void(0)" class="mr-4">
                    <i class="las la-pencil-alt scale-2"></i>
                  </a>
                  <a href="javascript:void(0)">
                    <i class="las la-trash-alt scale-2 text-danger"></i>
                  </a>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>


@endsection			