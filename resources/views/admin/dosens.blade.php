@extends('admin.partials.main')


@section('content_admin')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3></h3>
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
                        <h2>Daftar Dosen</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box table-responsive">
                                    <table id="datatable-keytable" class="table table-striped table-bordered"
                                        style="width:100%">
                                        <a href="/dosens/create" class="btn btn-info">Tambah +</a>
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Nama Dosen</th>
                                                <th>NIDN</th>
                                                <th>Prodi Bimbingan</th>
                                                <th>Bidang Kompetensi</th>
                                                <th>Jabatan Fungsional</th>
                                                <th>Kuota Bimbingan</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>


                                        <tbody>
                                            @foreach ($dosens as $dosen)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $dosen->nama }}</td>
                                                    <td>{{ $dosen->nidn }}</td>
                                                    <td>{{ $dosen->prodi_bim }}</td>
                                                    <td>{{ $dosen->bidang_kom }}</td>
                                                    <td>{{ $dosen->jabatan }}</td>
                                                    <td>{{ $dosen->kuota_bim }}</td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <form action="/dosens/{{ $dosen->id }}" method="post">
                                                                @csrf
                                                                @method('delete')
                                                                <button type="submit"
                                                                    onclick="return confirm('Yakin Data Dosen Dihapus? ');"
                                                                    class="btn btn-danger">
                                                                    <i class="fa fa-trash"></i>
                                                                </button>
                                                            </form>
                                                            <a href="/dosens/{{ $dosen->id }}/edit"
                                                                class="btn btn-warning">
                                                                <i class="fa fa-edit"></i>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
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
