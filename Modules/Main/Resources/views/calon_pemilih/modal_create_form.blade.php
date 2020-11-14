
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-warning">Pemilih Tambahan</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" action="{{ route('calon_pemilihs.calon_pemilih.store') }}" accept-charset="UTF-8" id="create_calon_pemilih_form" name="create_calon_pemilih_form" class="form-horizontal">
            {{ csrf_field() }}
            <div class="modal-body">
                @include ('main::calon_pemilih.form', [
                            'calonPemilih' => null,
                            ])
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
