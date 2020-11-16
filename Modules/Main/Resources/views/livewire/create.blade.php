<div class="row align-items-center">
    <div class="col">
        <div class="page-pretitle">
            Pilkades
        </div>
        <h2 class="page-title">
            Daftar Calon Pemilih
        </h2>
    </div>
    <div class="col-auto ml-auto d-print-none">
        <div class="btn-list">
            <a href="#" class="btn btn-primary d-none d-sm-inline-block" data-toggle="modal"
                data-target="#createModal">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <line x1="12" y1="5" x2="12" y2="19" />
                    <line x1="5" y1="12" x2="19" y2="12" /></svg>
                TAMBAHAN
            </a>
        </div>
    </div>
</div>

<div wire:ignore.self class="modal fade text-dark" id="createModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
       <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Tambahan</h5>
            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
        </div>
            <form>
                <div class="modal-body">

                    <form>
                    <input class="form-control" name="user_id" wire:model="user_id" type="hidden" id="create_user_id" value="{{ old('user_id', \Auth::id()) }}">
                    <div class="row">
                        <div class="col-3">
                            <div class="form-group {{ $errors->has('no_tps') ? 'has-error' : '' }}">
                                <label for="no_tps" class="col-md-6 control-label">No Tps</label>
                                <div class="col-md-12">
                                    <input class="form-control" name="no_tps" wire:model="no_tps" type="text" id="create_no_tps" value="{{ old('no_tps') }}" maxlength="2" placeholder="Enter no tps here...">
                                    @error('no_tps') <span class="text-danger">{{ $message }}</span>@enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-9">
                            <div class="form-group {{ $errors->has('nik') ? 'has-error' : '' }}">
                                <label for="nik" class="col-md-6 control-label">NIK</label>
                                <div class="col-md-12">
                                    <input class="form-control" name="nik" wire:model="nik" type="text" id="create_nik" value="{{ old('nik') }}" minlength="16" maxlength="16" required="true" placeholder="Enter nik here...">
                                    @error('nik') <span class="text-danger">{{ $message }}</span>@enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-group {{ $errors->has('nama') ? 'has-error' : '' }}">
                            <label for="nama" class="col-md-10 control-label">Nama</label>
                            <div class="col-md-12">
                                <input class="form-control" name="nama" wire:model="nama" type="text" id="create_nama" value="{{ old('nama') }}" minlength="1" maxlength="37" required="true" placeholder="Enter nama here...">
                                @error('nama') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-6">
                            <div class="form-group {{ $errors->has('jkel') ? 'has-error' : '' }}">
                                <label for="jkel" class="col-md-10 control-label">Jkel</label>
                                <div class="col-md-12">
                                    <div class="radio">
                                        <label for="jkel_lk">
                                            <input id="create_jkel_lk" class="" name="jkel" wire:model="jkel" type="radio" value="LK" required="true" {{ old('jkel') == 'LK' ? 'checked' : '' }}>
                                            Laki-laki
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label for="jkel_pr">
                                            <input id="create_jkel_pr" class="" name="jkel" wire:model="jkel" type="radio" value="PR" required="true" {{ old('jkel') == 'PR' ? 'checked' : '' }}>
                                            Perempuan
                                        </label>
                                    </div>

                                    @error('jkel') <span class="text-danger">{{ $message }}</span>@enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group {{ $errors->has('status_kawin') ? 'has-error' : '' }}">
                                <label for="status_kawin" class="col-md-10 control-label">Status Kawin</label>
                                <div class="col-md-12">
                                    <div class="radio">
                                        <label for="status_kawin_tk">
                                            <input id="create_status_kawin_tk" class="" name="status_kawin" wire:model="status_kawin" type="radio" value="TK" required="true" {{ old('status_kawin') == 'TK' ? 'checked' : '' }}>
                                            Tidak kawin
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label for="status_kawin_k">
                                            <input id="create_status_kawin_k" class="" name="status_kawin" wire:model="status_kawin" type="radio" value="K" required="true" {{ old('status_kawin') == 'K' ? 'checked' : '' }}>
                                            Kawin
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label for="status_kawin_cm">
                                            <input id="create_status_kawin_cm" class="" name="status_kawin" wire:model="status_kawin" type="radio" value="CM" required="true" {{ old('status_kawin') == 'CM' ? 'checked' : '' }}>
                                            Cerai Mati
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label for="status_kawin_ch">
                                            <input id="create_status_kawin_ch" class="" name="status_kawin" wire:model="status_kawin" type="radio" value="CH" required="true" {{ old('status_kawin') == 'CH' ? 'checked' : '' }}>
                                            Cerai Hidup
                                        </label>
                                    </div>

                                    @error('status_kawin') <span class="text-danger">{{ $message }}</span>@enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="form-group {{ $errors->has('tempat_lahir') ? 'has-error' : '' }}">
                                <label for="tempat_lahir" class="col-md-10 control-label">Tempat Lahir</label>
                                <div class="col-md-12">
                                    <input class="form-control" name="tempat_lahir" wire:model="tempat_lahir" type="text" id="create_tempat_lahir" value="{{ old('tempat_lahir') }}" minlength="1" maxlength="18" required="true" placeholder="Enter tempat lahir here...">
                                    @error('tempat_lahir') <span class="text-danger">{{ $message }}</span>@enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group {{ $errors->has('tgl_lahir') ? 'has-error' : '' }}">
                                <label for="tgl_lahir" class="col-md-10 control-label">Tgl Lahir</label>
                                <div class="col-md-12">
                                    <input class="form-control" name="tgl_lahir" wire:model="tgl_lahir" type="date" id="create_tgl_lahir" value="{{ old('tgl_lahir') }}" required="true" placeholder="dd-mm-yyyy" max="2020-12-31">
                                    @error('tgl_lahir') <span class="text-danger">{{ $message }}</span>@enderror
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
                                    <input class="form-control" name="dusun" wire:model="dusun" type="text" id="create_dusun" value="{{ old('dusun') }}" minlength="1" maxlength="16" required="true" placeholder="Enter dusun here...">
                                    @error('dusun') <span class="text-danger">{{ $message }}</span>@enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group {{ $errors->has('rt') ? 'has-error' : '' }}">
                                        <label for="rt" class="col-md-10 control-label">Rt</label>
                                        <div class="col-md-12">
                                            <input class="form-control" name="rt" wire:model="rt" type="text" id="create_rt" value="{{ old('rt') }}" minlength="1" maxlength="3" required="true" placeholder="Enter rt here...">
                                            @error('rt') <span class="text-danger">{{ $message }}</span>@enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group {{ $errors->has('rw') ? 'has-error' : '' }}">
                                        <label for="rw" class="col-md-10 control-label">Rw</label>
                                        <div class="col-md-12">
                                            <input class="form-control" name="rw" wire:model="rw" type="text" id="create_rw" value="{{ old('rw') }}" minlength="1" maxlength="3" required="true" placeholder="Enter rw here...">
                                            @error('rw') <span class="text-danger">{{ $message }}</span>@enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('desa') ? 'has-error' : '' }}">
                        <label for="desa" class="col-md-10 control-label">Desa</label>
                        <div class="col-md-12">
                            <input class="form-control" name="desa" wire:model="desa" type="text" id="create_desa" value="{{ old('desa') }}" minlength="1" maxlength="25" required="true" placeholder="Enter desa here...">
                            @error('desa') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                    </div>
                    <div class="hr-text">Syarat & Status Pemilih</div>
                    <label class="form-label">Syarat</label>
                    @error('syarat') <span class="text-danger">{{ $message }}</span>@enderror
                    <div class="form-selectgroup-boxes row mb-3">
                        <div class="col-lg-6">
                            <label class="form-selectgroup-item">
                                <input type="checkbox" id="create_syarat_1" name="syarat[]" wire:model="syarat" value="1" {{ in_array('1', old('syarat') ?: []) ? 'checked' : '' }} class="form-selectgroup-input">
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
                                <input id="create_syarat_2" name="syarat[]" type="checkbox" wire:model="syarat" value="2" {{ in_array('2', old('syarat') ?: []) ? 'checked' : '' }} class="form-selectgroup-input">
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
                                <input id="create_syarat_3" name="syarat[]" type="checkbox" wire:model="syarat" value="3" {{ in_array('3', old('syarat') ?: []) ? 'checked' : '' }} class="form-selectgroup-input">
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
                                <input id="create_syarat_4" name="syarat[]" type="checkbox" wire:model="syarat" value="4" {{ in_array('4', old('syarat') ?: []) ? 'checked' : '' }} class="form-selectgroup-input">
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
                                <input id="create_syarat_5" name="syarat[]" type="checkbox" wire:model="syarat" value="5" {{ in_array('5', old('syarat') ?: []) ? 'checked' : '' }} class="form-selectgroup-input">
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
                        <div class="form-label">Status</div>
                        @error('status') <span class="text-danger">{{ $message }}</span>@enderror
                        <label class="form-check form-switch">
                            <input id="create_status_1" name="status" wire:model="status" value="1" required="true" class="form-check-input" type="radio" {{ old('status') == '1' ? 'checked' : '' }}>
                            <span class="form-check-label">MEMENUHI SYARAT SEBAGAI PEMILIH</span>
                        </label>
                        <label class="form-check form-switch">
                            <input id="create_status_2" name="status" wire:model="status" value="2" required="true" class="form-check-input" type="radio" {{ old('status') == '2' ? 'checked' : '' }}>
                            <span class="form-check-label">TIDAK MEMENUHI SYARAT</span>
                        </label>
                        <label class="form-check form-switch">
                            <input id="create_status_3" name="status" wire:model="status" value="3" required="true" class="form-check-input" type="radio" {{ old('status') == '3' ? 'checked' : '' }}>
                            <span class="form-check-label">PINDAH TAPI IDENTITAS MASIH DI DESA {{$nama_desa}}</span>
                        </label>
                        <label class="form-check form-switch">
                            <input id="create_status_4" name="status" wire:model="status" value="4" required="true" class="form-check-input" type="radio" {{ old('status') == '4' ? 'checked' : '' }}>
                            <span class="form-check-label">PEMILIH SUDAH TIDAK BERDOMISILI DI DESA {{$nama_desa}}</span>
                        </label>
                        <label class="form-check form-switch">
                            <input id="create_status_5" name="status" wire:model="status" value="5" required="true" class="form-check-input" type="radio" {{ old('status') == '5' ? 'checked' : '' }}>
                            <span class="form-check-label">GANDA/DOUBLE</span>
                        </label>
                        <label class="form-check form-switch">
                            <input id="create_status_6" name="status" wire:model="status" value="6" required="true" class="form-check-input" type="radio" {{ old('status') == '6' ? 'checked' : '' }}>
                            <span class="form-check-label">MENINGGAL DUNIA</span>
                        </label>
                        <label class="form-check form-switch">
                            <input id="create_status_7" name="status" wire:model="status" value="7" required="true" class="form-check-input" type="radio" {{ old('status') == '7' ? 'checked' : '' }}>
                            <span class="form-check-label">MEMENUHI SYARAT SEBAGAI PEMILIH TAMBAHAN</span>
                        </label>
                    </div>

                </div>


            <div class="modal-footer">
                <button type="button" wire:click.prevent="cancel()" class="btn btn-link link-secondary" data-dismiss="modal">BATAL</button>
                <button type="button" wire:click="store()" class="btn btn-primary close-modal">SIMPAN</button>
            </div>
            </form>
        </div>
    </div>
</div>


