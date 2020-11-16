<!-- Modal -->
<div wire:ignore.self class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg text-dark" role="document">
       <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title">No.DPS: {{$no_dps}} {{$pemilih_id}}</h5>
            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
        </div>
        {{-- <form method="POST" action="{{ route('calon_pemilihs.calon_pemilih.update', $calonPemilih->id) }}" id="edit_calon_pemilih_form" name="edit_calon_pemilih_form" accept-charset="UTF-8">
            {{ csrf_field() }}
            <input name="_method" type="hidden" value="PUT"> --}}
            <form>
                <div class="modal-body">

                    <div class="mb-3">
                        <label class="form-label">Validation States</label>
                        <input type="text" class="form-control is-valid mb-2" placeholder="Valid State..">
                        <input type="text" class="form-control is-invalid" placeholder="Invalid State..">
                        <div class="invalid-feedback">Invalid feedback</div>
                    </div>

                    <input class="form-control" name="user_id" wire:model="user_id" type="hidden" id="user_id" value="{{ old('user_id', $user_id) }}">
                    <input class="form-control" name="no_tps" wire:model="no_tps" type="hidden" id="no_dps" value="{{ old('no_dps', $no_dps) }}">
                    <div class="row">
                        <div class="col-3">
                            <div class="form-group {{ $errors->has('no_tps') ? 'has-error' : '' }}">
                                <label for="no_tps" class="col-md-6 control-label">No Tps</label>
                                <div class="col-md-12">
                                    <input class="form-control" name="no_tps" wire:model="no_tps" type="text" id="no_tps" value="{{ old('no_tps', $no_tps) }}" maxlength="11" placeholder="Enter no tps here...">
                                    @error('no_tps') <span class="text-danger">{{ $message }}</span>@enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-9">
                            <div class="form-group {{ $errors->has('nik') ? 'has-error' : '' }}">
                                <label for="nik" class="col-md-6 control-label">NIK</label>
                                <div class="col-md-12">
                                    <input class="form-control" name="nik" wire:model="nik" type="text" id="nik" value="{{ old('nik', $nik) }}" minlength="16" maxlength="16" required="true" placeholder="Enter nik here...">
                                    @error('nik') <span class="text-danger">{{ $message }}</span>@enderror
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group {{ $errors->has('nama') ? 'has-error' : '' }}">
                        <label for="nama" class="col-md-10 control-label">Nama</label>
                        <div class="col-md-12">
                            <input class="form-control" name="nama" wire:model="nama" type="text" id="nama" value="{{ old('nama', $nama) }}" minlength="1" maxlength="37" required="true" placeholder="Enter nama here...">
                            @error('nama') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group {{ $errors->has('jkel') ? 'has-error' : '' }}">
                                <label for="jkel" class="col-md-10 control-label">Jkel</label>
                                <div class="col-md-12">
                                    <div class="radio">
                                        <label for="jkel_lk">
                                            <input id="jkel_lk" class="" name="jkel" wire:model="jkel" type="radio" value="LK" required="true" {{ old('jkel', $jkel) == 'LK' ? 'checked' : '' }}>
                                            Laki-laki
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label for="jkel_pr">
                                            <input id="jkel_pr" class="" name="jkel" wire:model="jkel" type="radio" value="PR" required="true" {{ old('jkel', $jkel) == 'PR' ? 'checked' : '' }}>
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
                                            <input id="status_kawin_tk" class="" name="status_kawin" wire:model="status_kawin" type="radio" value="TK" required="true" {{ old('status_kawin', $status_kawin) == 'TK' ? 'checked' : '' }}>
                                            Tidak kawin
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label for="status_kawin_k">
                                            <input id="status_kawin_k" class="" name="status_kawin" wire:model="status_kawin" type="radio" value="K" required="true" {{ old('status_kawin', $status_kawin) == 'K' ? 'checked' : '' }}>
                                            Kawin
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label for="status_kawin_cm">
                                            <input id="status_kawin_cm" class="" name="status_kawin" wire:model="status_kawin" type="radio" value="CM" required="true" {{ old('status_kawin', $status_kawin) == 'CM' ? 'checked' : '' }}>
                                            Cerai Mati
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label for="status_kawin_ch">
                                            <input id="status_kawin_ch" class="" name="status_kawin" wire:model="status_kawin" type="radio" value="CH" required="true" {{ old('status_kawin', $status_kawin) == 'CH' ? 'checked' : '' }}>
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
                                    <input class="form-control" name="tempat_lahir" wire:model="tempat_lahir" type="text" id="tempat_lahir" value="{{ old('tempat_lahir', $tempat_lahir) }}" minlength="1" maxlength="18" required="true" placeholder="Enter tempat lahir here...">
                                    @error('tempat_lahir') <span class="text-danger">{{ $message }}</span>@enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group {{ $errors->has('tgl_lahir') ? 'has-error' : '' }}">
                                <label for="tgl_lahir" class="col-md-10 control-label">Tgl Lahir</label>
                                <div class="col-md-12">
                                    <input class="form-control" name="tgl_lahir" wire:model="tgl_lahir" type="date" id="tgl_lahir" value="{{ old('tgl_lahir', $tgl_lahir) }}" required="true" placeholder="dd-mm-yyyy" max="2020-12-31">
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
                                    <input class="form-control" name="dusun" wire:model="dusun" type="text" id="dusun" value="{{ old('dusun', $dusun) }}" minlength="1" maxlength="16" required="true" placeholder="Enter dusun here...">
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
                                            <input class="form-control" name="rt" wire:model="rt" type="text" id="rt" value="{{ old('rt', $rt) }}" minlength="1" maxlength="3" required="true" placeholder="Enter rt here...">
                                            @error('rt') <span class="text-danger">{{ $message }}</span>@enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group {{ $errors->has('rw') ? 'has-error' : '' }}">
                                        <label for="rw" class="col-md-10 control-label">Rw</label>
                                        <div class="col-md-12">
                                            <input class="form-control" name="rw" wire:model="rw" type="text" id="rw" value="{{ old('rw', $rw) }}" minlength="1" maxlength="3" required="true" placeholder="Enter rw here...">
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
                            <input class="form-control" name="desa" wire:model="desa" type="text" id="desa" value="{{ old('desa', $desa) }}" minlength="1" maxlength="25" required="true" placeholder="Enter desa here...">
                            @error('desa') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                    </div>
                    <div class="hr-text">Syarat & Status Pemilih</div>
                    <label class="form-label">Syarat</label>
                    @error('syarat') <span class="text-danger">{{ $message }}</span>@enderror
                    <div class="form-selectgroup-boxes row mb-3">
                        <div class="col-lg-6">
                            <label class="form-selectgroup-item">
                                <input type="checkbox" id="syarat_1" name="syarat[]" wire:model="syarat" value="1" {{ in_array('1', old('syarat', $syarat) ?: []) ? 'checked' : '' }} class="form-selectgroup-input">
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
                                <input id="syarat_2" name="syarat[]" type="checkbox" wire:model="syarat" value="2" {{ in_array('2', old('syarat', $syarat) ?: []) ? 'checked' : '' }} class="form-selectgroup-input">
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
                                <input id="syarat_3" name="syarat[]" type="checkbox" wire:model="syarat" value="3" {{ in_array('3', old('syarat', $syarat) ?: []) ? 'checked' : '' }} class="form-selectgroup-input">
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
                                <input id="syarat_4" name="syarat[]" type="checkbox" wire:model="syarat" value="4" {{ in_array('4', old('syarat', $syarat) ?: []) ? 'checked' : '' }} class="form-selectgroup-input">
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
                                <input id="syarat_5" name="syarat[]" type="checkbox" wire:model="syarat" value="5" {{ in_array('5', old('syarat', $syarat) ?: []) ? 'checked' : '' }} class="form-selectgroup-input">
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
                        @if($no_dps)
                        <div class="form-label">Status</div>
                        @error('status') <span class="text-danger">{{ $message }}</span>@enderror
                        <label class="form-check form-switch">
                            <input id="status_1" name="status" wire:model="status" value="1" required="true" class="form-check-input" type="radio" {{ old('status', $status) == '1' ? 'checked' : '' }}>
                            <span class="form-check-label">MEMENUHI SYARAT SEBAGAI PEMILIH</span>
                        </label>
                        <label class="form-check form-switch">
                            <input id="status_2" name="status" wire:model="status" value="2" required="true" class="form-check-input" type="radio" {{ old('status', $status) == '2' ? 'checked' : '' }}>
                            <span class="form-check-label">TIDAK MEMENUHI SYARAT</span>
                        </label>
                        <label class="form-check form-switch">
                            <input id="status_3" name="status" wire:model="status" value="3" required="true" class="form-check-input" type="radio" {{ old('status', $status) == '3' ? 'checked' : '' }}>
                            <span class="form-check-label">PINDAH TAPI IDENTITAS MASIH DI DESA {{$nama_desa}}</span>
                        </label>
                        <label class="form-check form-switch">
                            <input id="status_4" name="status" wire:model="status" value="4" required="true" class="form-check-input" type="radio" {{ old('status', $status) == '4' ? 'checked' : '' }}>
                            <span class="form-check-label">PEMILIH SUDAH TIDAK BERDOMISILI DI DESA {{$nama_desa}}</span>
                        </label>
                        <label class="form-check form-switch">
                            <input id="status_5" name="status" wire:model="status" value="5" required="true" class="form-check-input" type="radio" {{ old('status', $status) == '5' ? 'checked' : '' }}>
                            <span class="form-check-label">GANDA/DOUBLE</span>
                        </label>
                        <label class="form-check form-switch">
                            <input id="status_6" name="status" wire:model="status" value="6" required="true" class="form-check-input" type="radio" {{ old('status', $status) == '6' ? 'checked' : '' }}>
                            <span class="form-check-label">MENINGGAL DUNIA</span>
                        </label>
                        @endif
                        <label class="form-check form-switch">
                            <input id="status_7" name="status" wire:model="status" value="7" required="true" class="form-check-input" type="radio" {{ old('status', $status) == '7' ? 'checked' : '' }}>
                            <span class="form-check-label">MEMENUHI SYARAT SEBAGAI PEMILIH TAMBAHAN</span>
                        </label>
                    </div>

                </div>


            <div class="modal-footer">
                <button type="button" wire:click.prevent="cancel()" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" wire:click.prevent="update()" class="btn btn-primary" data-dismiss="modal">Save changes</button>
                {{-- <button wire:click.prevent="cancel()" class="btn btn-link link-secondary" data-dismiss="modal">
                    Batal
                </button>
                <button wire:click.prevent="update()" class="btn btn-primary ml-auto" data-dismiss="modal">
                    Simpan
                </button> --}}
            </div>
        </form>

            {{-- <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <input type="hidden" wire:model="user_id">
                        <label for="exampleFormControlInput1">Name</label>
                        <input type="text" class="form-control" wire:model="name" id="exampleFormControlInput1" placeholder="Enter Name">
                        @error('name') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput2">Email address</label>
                        <input type="email" class="form-control" wire:model="email" id="exampleFormControlInput2" placeholder="Enter Email">
                        @error('email') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" wire:click.prevent="cancel()" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" wire:click.prevent="update()" class="btn btn-primary" data-dismiss="modal">Save changes</button>
            </div> --}}
        </div>
    </div>
</div>
