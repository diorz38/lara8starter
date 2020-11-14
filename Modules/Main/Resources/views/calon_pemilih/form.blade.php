<div class="modal-body">

    <div class="mb-3">
        <label class="form-label">Validation States</label>
        <input type="text" class="form-control is-valid mb-2" placeholder="Valid State..">
        <input type="text" class="form-control is-invalid" placeholder="Invalid State..">
        <div class="invalid-feedback">Invalid feedback</div>
    </div>

    <input class="form-control" name="user_id" type="hidden" id="user_id" value="{{ old('user_id', optional($calonPemilih)->user_id) }}">
    <input class="form-control" name="no_tps" type="hidden" id="no_dps" value="{{ old('no_dps', optional($calonPemilih)->no_dps) }}">
    <div class="row">
        <div class="col-3">
            <div class="form-group {{ $errors->has('no_tps') ? 'has-error' : '' }}">
                <label for="no_tps" class="col-md-6 control-label">No Tps</label>
                <div class="col-md-12">
                    <input class="form-control" name="no_tps" type="text" id="no_tps" value="{{ old('no_tps', optional($calonPemilih)->no_tps) }}" maxlength="11" placeholder="Enter no tps here...">
                    {!! $errors->first('no_tps', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
        </div>
        <div class="col-9">
            <div class="form-group {{ $errors->has('nik') ? 'has-error' : '' }}">
                <label for="nik" class="col-md-6 control-label">NIK</label>
                <div class="col-md-12">
                    <input class="form-control" name="nik" type="text" id="nik" value="{{ old('nik', optional($calonPemilih)->nik) }}" minlength="1" maxlength="16" required="true" placeholder="Enter nik here...">
                    {!! $errors->first('nik', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
        </div>
    </div>

    <div class="form-group {{ $errors->has('nama') ? 'has-error' : '' }}">
        <label for="nama" class="col-md-10 control-label">Nama</label>
        <div class="col-md-12">
            <input class="form-control" name="nama" type="text" id="nama" value="{{ old('nama', optional($calonPemilih)->nama) }}" minlength="1" maxlength="37" required="true" placeholder="Enter nama here...">
            {!! $errors->first('nama', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <div class="form-group {{ $errors->has('jkel') ? 'has-error' : '' }}">
                <label for="jkel" class="col-md-10 control-label">Jkel</label>
                <div class="col-md-12">
                    <div class="radio">
                        <label for="jkel_lk">
                            <input id="jkel_lk" class="" name="jkel" type="radio" value="LK" required="true" {{ old('jkel', optional($calonPemilih)->jkel) == 'LK' ? 'checked' : '' }}>
                            Laki-laki
                        </label>
                    </div>
                    <div class="radio">
                        <label for="jkel_pr">
                            <input id="jkel_pr" class="" name="jkel" type="radio" value="PR" required="true" {{ old('jkel', optional($calonPemilih)->jkel) == 'PR' ? 'checked' : '' }}>
                            Perempuan
                        </label>
                    </div>

                    {!! $errors->first('jkel', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="form-group {{ $errors->has('status_kawin') ? 'has-error' : '' }}">
                <label for="status_kawin" class="col-md-10 control-label">Status Kawin</label>
                <div class="col-md-12">
                    <div class="radio">
                        <label for="status_kawin_tk">
                            <input id="status_kawin_tk" class="" name="status_kawin" type="radio" value="TK" required="true" {{ old('status_kawin', optional($calonPemilih)->status_kawin) == 'TK' ? 'checked' : '' }}>
                            Tidak kawin
                        </label>
                    </div>
                    <div class="radio">
                        <label for="status_kawin_k">
                            <input id="status_kawin_k" class="" name="status_kawin" type="radio" value="K" required="true" {{ old('status_kawin', optional($calonPemilih)->status_kawin) == 'K' ? 'checked' : '' }}>
                            Kawin
                        </label>
                    </div>
                    <div class="radio">
                        <label for="status_kawin_cm">
                            <input id="status_kawin_cm" class="" name="status_kawin" type="radio" value="CM" required="true" {{ old('status_kawin', optional($calonPemilih)->status_kawin) == 'CM' ? 'checked' : '' }}>
                            Cerai Mati
                        </label>
                    </div>
                    <div class="radio">
                        <label for="status_kawin_ch">
                            <input id="status_kawin_ch" class="" name="status_kawin" type="radio" value="CH" required="true" {{ old('status_kawin', optional($calonPemilih)->status_kawin) == 'CH' ? 'checked' : '' }}>
                            Cerai Hidup
                        </label>
                    </div>

                    {!! $errors->first('status_kawin', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-8">
            <div class="form-group {{ $errors->has('tempat_lahir') ? 'has-error' : '' }}">
                <label for="tempat_lahir" class="col-md-10 control-label">Tempat Lahir</label>
                <div class="col-md-12">
                    <input class="form-control" name="tempat_lahir" type="text" id="tempat_lahir" value="{{ old('tempat_lahir', optional($calonPemilih)->tempat_lahir) }}" minlength="1" maxlength="18" required="true" placeholder="Enter tempat lahir here...">
                    {!! $errors->first('tempat_lahir', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="form-group {{ $errors->has('tgl_lahir') ? 'has-error' : '' }}">
                <label for="tgl_lahir" class="col-md-10 control-label">Tgl Lahir</label>
                <div class="col-md-12">
                    <input class="form-control" name="tgl_lahir" type="date" id="tgl_lahir" value="{{ old('tgl_lahir', optional($calonPemilih)->tgl_lahir) }}" required="true" placeholder="dd-mm-yyyy" max="2020-12-31">
                    {!! $errors->first('tgl_lahir', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
        </div>
    </div>
    <div class="hr-text">Alamat</div>
    <div class="row">
        <div class="col-6">
            <div class="form-group {{ $errors->has('dusun') ? 'has-error' : '' }}">
                <label for="dusun" class="col-md-10 control-label">Dusun</label>
                <div class="col-md-12">
                    <input class="form-control" name="dusun" type="text" id="dusun" value="{{ old('dusun', optional($calonPemilih)->dusun) }}" minlength="1" maxlength="16" required="true" placeholder="Enter dusun here...">
                    {!! $errors->first('dusun', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="row">
                <div class="col-6">
                    <div class="form-group {{ $errors->has('rt') ? 'has-error' : '' }}">
                        <label for="rt" class="col-md-10 control-label">Rt</label>
                        <div class="col-md-12">
                            <input class="form-control" name="rt" type="text" id="rt" value="{{ old('rt', optional($calonPemilih)->rt) }}" minlength="1" maxlength="3" required="true" placeholder="Enter rt here...">
                            {!! $errors->first('rt', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group {{ $errors->has('rw') ? 'has-error' : '' }}">
                        <label for="rw" class="col-md-10 control-label">Rw</label>
                        <div class="col-md-12">
                            <input class="form-control" name="rw" type="text" id="rw" value="{{ old('rw', optional($calonPemilih)->rw) }}" minlength="1" maxlength="3" required="true" placeholder="Enter rw here...">
                            {!! $errors->first('rw', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group {{ $errors->has('desa') ? 'has-error' : '' }}">
        <label for="desa" class="col-md-10 control-label">Desa</label>
        <div class="col-md-12">
            <input class="form-control" name="desa" type="text" id="desa" value="{{ old('desa', optional($calonPemilih)->desa) }}" minlength="1" maxlength="25" required="true" placeholder="Enter desa here...">
            {!! $errors->first('desa', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
    <div class="hr-text">Syarat & Status Pemilih</div>
    <label class="form-label">Syarat</label>
    <div class="form-selectgroup-boxes row mb-3" ID="Form2">
        <div class="col-lg-6">
            <label class="form-selectgroup-item">
                <input type="checkbox" id="syarat_1" name="syarat[]" value="1" {{ in_array('1', old('syarat', optional($calonPemilih)->syarat) ?: []) ? 'checked' : '' }} class="form-selectgroup-input">
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
                <input id="syarat_2" name="syarat[]" type="checkbox" value="2" {{ in_array('2', old('syarat', optional($calonPemilih)->syarat) ?: []) ? 'checked' : '' }} class="form-selectgroup-input">
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
                <input id="syarat_3" name="syarat[]" type="checkbox" value="3" {{ in_array('3', old('syarat', optional($calonPemilih)->syarat) ?: []) ? 'checked' : '' }} class="form-selectgroup-input">
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
                <input id="syarat_4" name="syarat[]" type="checkbox" value="4" {{ in_array('4', old('syarat', optional($calonPemilih)->syarat) ?: []) ? 'checked' : '' }} class="form-selectgroup-input">
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
                <input id="syarat_5" name="syarat[]" type="checkbox" value="5" {{ in_array('5', old('syarat', optional($calonPemilih)->syarat) ?: []) ? 'checked' : '' }} class="form-selectgroup-input">
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

    <div class="mb-3">
        @if(optional($calonPemilih)->no_dps)
        <div class="form-label">Toggle switches</div>
        <label class="form-check form-switch">
            <input id="status_1" name="status" value="1" required="true" class="form-check-input" type="radio" {{ old('status', optional($calonPemilih)->status) == '1' ? 'checked' : '' }}>
            <span class="form-check-label">MEMENUHI SYARAT SEBAGAI PEMILIH</span>
        </label>
        <label class="form-check form-switch">
            <input id="status_2" name="status" value="2" required="true" class="form-check-input" type="radio" {{ old('status', optional($calonPemilih)->status) == '2' ? 'checked' : '' }}>
            <span class="form-check-label">TIDAK MEMENUHI SYARAT</span>
        </label>
        <label class="form-check form-switch">
            <input id="status_3" name="status" value="3" required="true" class="form-check-input" type="radio" {{ old('status', optional($calonPemilih)->status) == '3' ? 'checked' : '' }}>
            <span class="form-check-label">PINDAH TAPI IDENTITAS MASIH DI DESA {{$nama_desa}}</span>
        </label>
        <label class="form-check form-switch">
            <input id="status_4" name="status" value="4" required="true" class="form-check-input" type="radio" {{ old('status', optional($calonPemilih)->status) == '4' ? 'checked' : '' }}>
            <span class="form-check-label">PEMILIH SUDAH TIDAK BERDOMISILI DI DESA {{$nama_desa}}</span>
        </label>
        <label class="form-check form-switch">
            <input id="status_5" name="status" value="5" required="true" class="form-check-input" type="radio" {{ old('status', optional($calonPemilih)->status) == '5' ? 'checked' : '' }}>
            <span class="form-check-label">GANDA/DOUBLE</span>
        </label>
        <label class="form-check form-switch">
            <input id="status_6" name="status" value="6" required="true" class="form-check-input" type="radio" {{ old('status', optional($calonPemilih)->status) == '6' ? 'checked' : '' }}>
            <span class="form-check-label">MENINGGAL DUNIA</span>
        </label>
        @endif
        <label class="form-check form-switch">
            <input id="status_7" name="status" value="7" required="true" class="form-check-input" type="radio" {{ old('status', optional($calonPemilih)->status) == '7' ? 'checked' : '' }}>
            <span class="form-check-label">MEMENUHI SYARAT SEBAGAI PEMILIH TAMBAHAN</span>
        </label>
    </div>

</div>
