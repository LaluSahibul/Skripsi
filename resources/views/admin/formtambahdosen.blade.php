@extends('admin.partials.main')
@section('content_admin')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Tambah Dosen</h3>
                </div>

                <div class="title_right">
                    <div class="col-md-5 col-sm-5  form-group pull-right top_search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">Go!</button>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 col-sm-12 ">
                    <div class="x_panel">
                        <div class="x_content">
                            <br />
                            <form action="/dosens" method="post" id="demo-form2" data-parsley-validate
                                class="form-horizontal form-label-left">
                                @csrf
                                @method('post')
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="namadosen">Nama Dosen
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="text" id="namadosen" class="form-control" name="nama"
                                            value="{{ old('nama') }}">
                                        @error('nama')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="nidn">NIDN <span
                                            class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="text" id="nidn" class="form-control "
                                            name="nidn"value="{{ old('nidn') }}">
                                        @error('nidn')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="prodibimbingan">Prodi
                                        Bimbingan <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="text" id="prodibimbingan" class="form-control "
                                            name="prodi_bim"value="{{ old('prodi_bim') }}">
                                        @error('prodi_bim')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align"
                                        for="bidangkompetensi">Bidang Kompetensi <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="text" id="bidangkompetensi" class="form-control "
                                            name="bidang_kom"value="{{ old('bidang_kom') }}">
                                        @error('bidang_kom')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="jabatan">Jabatan
                                        Fungsional <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="text" id="jabatan" class="form-control "
                                            name="jabatan"value="{{ old('jabatan') }}">
                                        @error('jabatan')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="kuotabimbingan">Kuota
                                        Bimbingan <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col- sm-6 ">
                                        <input type="number" id="kuotabimbingan" class="form-control " name="kuota_bim"
                                            value="{{ old('kuota_bim') }}">
                                        @error('kuota_bim')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>

                                <div class="ln_solid"></div>
                                <div class="item form-group">
                                    <div class="col-md-6 col-sm-6 offset-md-3">
                                        <a href="/dosens" button class="btn btn-danger" type="button ">Batal</a>
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <!-- /page content -->
@endsection
