
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-warning">Pemilih Tambahan</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" action="{{ route('calon_pemilihs.calon_pemilih.store') }}" accept-charset="UTF-8" id="create_calon_pemilih_form" name="create_calon_pemilih_form" class="form-horizontal">
            {{ csrf_field() }}
            <div class="modal-body">

                <div class="modal-body">

                    <input class="form-control" name="user_id" type="hidden" id="user_id" value="{{ old('user_id', \Auth::id()) }}">
                    <div class="row">
                        <div class="col-3">
                            <div class="form-group {{ $errors->has('no_tps') ? 'is-invalid' : '' }}">
                                <label for="no_tps" class="col-md-6 control-label">No Tps</label>
                                <div class="col-md-12">
                                    <input class="form-control" name="no_tps" type="text" id="no_tps" value="{{ old('no_tps') }}" maxlength="11" placeholder="Enter no tps here...">
                                    {!! $errors->first('no_tps', '<class="invalid-feedback">:message</p>') !!}
                                </div>
                            </div>
                        </div>
                        <div class="col-9">
                            <div class="form-group {{ $errors->has('nik') ? 'is-invalid' : '' }}">
                                <label for="nik" class="col-md-6 control-label">NIK</label>
                                <div class="col-md-12">
                                    <input class="form-control" name="nik" type="text" id="nik" value="{{ old('nik') }}" minlength="1" maxlength="16" required="true" placeholder="Enter nik here...">
                                    {!! $errors->first('nik', '<class="invalid-feedback">:message</p>') !!}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group {{ $errors->has('nama') ? 'is-invalid' : '' }}">
                        <label for="nama" class="col-md-10 control-label">Nama</label>
                        <div class="col-md-12">
                            <input class="form-control" name="nama" type="text" id="nama" value="{{ old('nama') }}" minlength="1" maxlength="37" required="true" placeholder="Enter nama here...">
                            {!! $errors->first('nama', '<class="invalid-feedback">:message</p>') !!}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group {{ $errors->has('jkel') ? 'is-invalid' : '' }}">
                                <label for="jkel" class="col-md-10 control-label">Jkel</label>
                                <div class="col-md-12">
                                    <div class="radio">
                                        <label for="jkel_lk">
                                            <input id="jkel_lk" class="" name="jkel" type="radio" value="LK" required="true" {{ old('jkel') == 'LK' ? 'checked' : '' }}>
                                            Laki-laki
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label for="jkel_pr">
                                            <input id="jkel_pr" class="" name="jkel" type="radio" value="PR" required="true" {{ old('jkel') == 'PR' ? 'checked' : '' }}>
                                            Perempuan
                                        </label>
                                    </div>

                                    {!! $errors->first('jkel', '<class="invalid-feedback">:message</p>') !!}
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group {{ $errors->has('status_kawin') ? 'is-invalid' : '' }}">
                                <label for="status_kawin" class="col-md-10 control-label">Status Kawin</label>
                                <div class="col-md-12">
                                    <div class="radio">
                                        <label for="status_kawin_tk">
                                            <input id="status_kawin_tk" class="" name="status_kawin" type="radio" value="TK" required="true" {{ old('status_kawin') == 'TK' ? 'checked' : '' }}>
                                            Tidak kawin
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label for="status_kawin_k">
                                            <input id="status_kawin_k" class="" name="status_kawin" type="radio" value="K" required="true" {{ old('status_kawin') == 'K' ? 'checked' : '' }}>
                                            Kawin
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label for="status_kawin_cm">
                                            <input id="status_kawin_cm" class="" name="status_kawin" type="radio" value="CM" required="true" {{ old('status_kawin') == 'CM' ? 'checked' : '' }}>
                                            Cerai Mati
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label for="status_kawin_ch">
                                            <input id="status_kawin_ch" class="" name="status_kawin" type="radio" value="CH" required="true" {{ old('status_kawin') == 'CH' ? 'checked' : '' }}>
                                            Cerai Hidup
                                        </label>
                                    </div>

                                    {!! $errors->first('status_kawin', '<class="invalid-feedback">:message</p>') !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="form-group {{ $errors->has('tempat_lahir') ? 'is-invalid' : '' }}">
                                <label for="tempat_lahir" class="col-md-10 control-label">Tempat Lahir</label>
                                <div class="col-md-12">
                                    <input class="form-control" name="tempat_lahir" type="text" id="tempat_lahir" value="{{ old('tempat_lahir') }}" minlength="1" maxlength="18" required="true" placeholder="Enter tempat lahir here...">
                                    {!! $errors->first('tempat_lahir', '<class="invalid-feedback">:message</p>') !!}
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group {{ $errors->has('tgl_lahir') ? 'is-invalid' : '' }}">
                                <label for="tgl_lahir" class="col-md-10 control-label">Tgl Lahir</label>
                                <div class="col-md-12">
                                    <input class="form-control" name="tgl_lahir" type="date" id="tgl_lahir" value="{{ old('tgl_lahir') }}" required="true" placeholder="dd-mm-yyyy" max="2020-12-31">
                                    {!! $errors->first('tgl_lahir', '<class="invalid-feedback">:message</p>') !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hr-text">Alamat</div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group {{ $errors->has('dusun') ? 'is-invalid' : '' }}">
                                <label for="dusun" class="col-md-10 control-label">Dusun</label>
                                <div class="col-md-12">
                                    <input class="form-control" name="dusun" type="text" id="dusun" value="{{ old('dusun') }}" minlength="1" maxlength="16" required="true" placeholder="Enter dusun here...">
                                    {!! $errors->first('dusun', '<class="invalid-feedback">:message</p>') !!}
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group {{ $errors->has('rt') ? 'is-invalid' : '' }}">
                                        <label for="rt" class="col-md-10 control-label">Rt</label>
                                        <div class="col-md-12">
                                            <input class="form-control" name="rt" type="text" id="rt" value="{{ old('rt') }}" minlength="1" maxlength="3" required="true" placeholder="Enter rt here...">
                                            {!! $errors->first('rt', '<class="invalid-feedback">:message</p>') !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group {{ $errors->has('rw') ? 'is-invalid' : '' }}">
                                        <label for="rw" class="col-md-10 control-label">Rw</label>
                                        <div class="col-md-12">
                                            <input class="form-control" name="rw" type="text" id="rw" value="{{ old('rw') }}" minlength="1" maxlength="3" required="true" placeholder="Enter rw here...">
                                            {!! $errors->first('rw', '<class="invalid-feedback">:message</p>') !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('desa') ? 'is-invalid' : '' }}">
                        <label for="desa" class="col-md-10 control-label">Desa</label>
                        <div class="col-md-12">
                            <input class="form-control" name="desa" type="text" id="desa" value="{{ old('desa') }}" minlength="1" maxlength="25" required="true" placeholder="Enter desa here...">
                            {!! $errors->first('desa', '<class="invalid-feedback">:message</p>') !!}
                        </div>
                    </div>
                    <div class="hr-text">Syarat & Status Pemilih</div>
                    <label class="form-label">Syarat</label>
                    <div class="form-selectgroup-boxes row mb-3" ID="Form2" aria-required="true">
                        <div class="col-lg-6">
                            <label class="form-selectgroup-item">
                                <input type="checkbox" id="syarat_1" name="syarat[]" value="1" {{ in_array('1', old('syarat') ?: []) ? 'checked' : '' }} class="form-selectgroup-input">
                                <span class="form-selectgroup-label d-flex align-items-center p-3">
                                <span class="mr-3">
                                    <span class="form-selectgroup-check"></span>
                                </span>
                                <span class="form-selectgroup-label-content">
                                    <span class="d-block text-muted">Berumur 17 (tujuh belas) <b>tahun atau lebih</b> pada hari pemilihan.</span>
                                </span>
                                </span>
                            </label>
                        </div>
                        <div class="col-lg-6">
                            <label class="form-selectgroup-item">
                                <input id="syarat_2" name="syarat[]" type="checkbox" value="2" {{ in_array('2', old('syarat') ?: []) ? 'checked' : '' }} class="form-selectgroup-input">
                                <span class="form-selectgroup-label d-flex align-items-center p-3">
                                <span class="mr-3">
                                    <span class="form-selectgroup-check"></span>
                                </span>
                                <span class="form-selectgroup-label-content">
                                    <span class="d-block text-muted">Nyata-nyata tidak sedang terganggu jiwa/ingatannya.</span>
                                </span>
                                </span>
                            </label>
                        </div>
                        <div class="col-lg-6">
                            <label class="form-selectgroup-item">
                                <input id="syarat_3" name="syarat[]" type="checkbox" value="3" {{ in_array('3', old('syarat') ?: []) ? 'checked' : '' }} class="form-selectgroup-input">
                                <span class="form-selectgroup-label d-flex align-items-center p-3">
                                <span class="mr-3">
                                    <span class="form-selectgroup-check"></span>
                                </span>
                                <span class="form-selectgroup-label-content">
                                    <span class="d-block text-muted">Tidak sedang dicabut hak pilihnya berdasarkan putusan pengadilan yang telah memperoleh kekuatan hukum tetap.</span>
                                </span>
                                </span>
                            </label>
                        </div>
                        <div class="col-lg-6">
                            <label class="form-selectgroup-item">
                                <input id="syarat_4" name="syarat[]" type="checkbox" value="4" {{ in_array('4', old('syarat') ?: []) ? 'checked' : '' }} class="form-selectgroup-input">
                                <span class="form-selectgroup-label d-flex align-items-center p-3">
                                <span class="mr-3">
                                    <span class="form-selectgroup-check"></span>
                                </span>
                                <span class="form-selectgroup-label-content">
                                    <span class="d-block text-muted">Berdomisili di desa {{$nama_desa}} sekurang-kurangnya 6 (enam) bulan sebelum disahkannya Daftar Pemilih Sementara yang dibuktikan dengan Kartu Tanda Penduduk Elektronik (e-KTP) atau surat keterangan penduduk dari Dinas Kependudukan dan Catatan Sipil Kabupaten Karawang dan/atau kartu keluarga.</span>
                                </span>
                                </span>
                            </label>
                        </div>
                        <div class="col-lg-6">
                            <label class="form-selectgroup-item">
                                <input id="syarat_5" name="syarat[]" type="checkbox" value="5" {{ in_array('5', old('syarat') ?: []) ? 'checked' : '' }} class="form-selectgroup-input">
                                <span class="form-selectgroup-label d-flex align-items-center p-3">
                                <span class="mr-3">
                                    <span class="form-selectgroup-check"></span>
                                </span>
                                <span class="form-selectgroup-label-content">
                                    <span class="d-block text-muted">Bukan anggota TNI/Polri</span>
                                </span>
                                </span>
                            </label>
                        </div>
                    </div>

                    <div class="mb-3" id="tmbl-status">
                        <label class="form-check form-switch">
                            <input id="status_7" name="status" value="7" required="true" class="form-check-input" type="checkbox" {{ old('status') == '7' ? 'checked' : '' }}>
                            <span class="form-check-label">MEMENUHI SYARAT SEBAGAI PEMILIH TAMBAHAN</span>
                        </label>
                    </div>

                </div>

            </div>
            <div class="modal-footer">
                <button class="btn btn-link link-secondary" data-dismiss="modal">
                    Batal
                </button>
                <button type="submit" class="btn btn-primary ml-auto">
                    Simpan
                </button>
            </div>

            </form>
        </div>
