@extends('mahasiswa.partials.main')


@section('content_admin')
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>Users <small>Some examples to get you started</small></h3>
        </div>

        <div class="title_right">
          <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-btn">
                <button class="btn btn-secondary" type="button">Go!</button>
              </span>
            </div>
          </div>
        </div>
      </div>

        <div class="col-md-12 col-sm-12 ">
          <div class="x_panel">
            <div class="x_title">
              <h2>KeyTable example <small>Users</small></h2>
              <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="#">Settings 1</a>
                      <a class="dropdown-item" href="#">Settings 2</a>
                    </div>
                </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
              </ul>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <div class="row">
                <div class="col-sm-12">
                  <div class="card-box table-responsive">
                    <p class="text-muted font-13 m-b-30">
                      KeyTable provides Excel like cell navigation on any table. Events (focus, blur, action etc) can be assigned to individual cells, columns, rows or all cells.
                    </p>

                    <table id="datatable-keytable" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>Id</th>
                          <th>Name</th>
                          <th>NIDN</th>
                          <th>Prodi Bimbingan</th>
                          <th>Bidang Kompetensi</th>
                          <th>Jabatan Fungsional</th>
                          <th>Kuota Bimbingan</th>
                        </tr>
                      </thead>


                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>M Adrian Alfarizi, M.Kom</td>
                          <td>08367848</td>
                          <td>Teknik Informatika</td>
                          <td>IoT</td>
                          <td>Asisten Ahli</td>
                          <td>14</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /page content -->
@endsection
