@extends('main::layouts.main')

@push('page-css')
<link rel="stylesheet" href="{{asset('css/dataTables.bootstrap4.min.css')}}">
@endpush

@push('page-js')
<script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
<script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('js/dataTables.bootstrap4.min.js')}}"></script>
<script>
    $(document).ready(function(){
        $("#keluarga-laratable").DataTable({
            // serverSide: true,
            ajax: "{{ route('keluarga_laratable_data') }}",
            columns: [
                { name: 'nkk' },
                { name: 'nik_kepala' },
                { name: 'kepala.nama' },
                { name: 'keluarga.members', searchable: false, orderable: false},
                { name: 'sls_id' },
            ],
        });
    });
</script>
@endpush

@section('content')

<div class="container-xl">

    @if(Session::has('success_message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <div class="row align-items-center">
            <div class="col">
                <strong>
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><circle cx="12" cy="12" r="9"></circle><line x1="9" y1="9" x2="9.01" y2="9"></line><line x1="15" y1="9" x2="15.01" y2="9"></line><path d="M8 13a4 4 0 1 0 8 0m0 0h-8"></path></svg>
                </strong>
                {!! session('success_message') !!}
            </div>
            <div class="col-auto ml-auto">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><circle cx="12" cy="12" r="9"></circle><path d="M10 10l4 4m0 -4l-4 4"></path></svg>
                </button>
            </div>
        </div>
    </div>
    @endif

    <!-- Page title -->
    <div class="page-header text-white d-print-none">
        <div class="row align-items-center">
            <div class="col">
                <!-- Page pre-title -->
                <div class="page-pretitle">
                    Pilkades
                </div>
                <h2 class="page-title">
                    Daftar Calon Pemilih
                </h2>
            </div>
            <!-- Page title actions -->
            <div class="col-auto ml-auto d-print-none">
                <div class="btn-list">
                    <span class="d-none d-sm-inline">
                        <a href="#" class="btn btn-white">
                            New view
                        </a>
                    </span>
                    <a href="#" class="btn btn-primary d-none d-sm-inline-block" data-toggle="modal"
                        data-target="#modal-pemilih_tambahan">
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
    </div>

    <div class="row row-deck row-cards">
        <div class="col-12">

            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="keluarga-laratable" class="table table-hover table-vcenter text-nowrap datatables">
                            <thead>
                                <tr>
                                    <th class="w-2">NKK</th>
                                    <th class="w-2">NIK KK</th>
                                    <th class="w-5">Kepala Keluarga</th>
                                    <th class="w-5">Anggota</th>
                                    {{-- <th class="w-2">Jml Penduduk</th> --}}
                                </tr>
                            </thead>
                        </table>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>

@endsection
