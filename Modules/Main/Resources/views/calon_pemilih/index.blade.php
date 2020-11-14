@extends('main::layouts.main')

@push('page-js')
<script>
$checkboxes = $('#Form2 input:checkbox');
$checkboxes.on('click', checkboxes);

function checkboxes() {
    var allChecked = $checkboxes.not(':checked').length == 0;
    console.log(allChecked);
}
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
        {{-- <div class="alert alert-success">
            <span class="glyphicon glyphicon-ok"></span>
            {!! session('success_message') !!}

            <button type="button" class="close" data-dismiss="alert" aria-label="close">
                <span aria-hidden="true">&times;</span>
            </button>

        </div> --}}
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
                <div class="modal modal-blur fade" id="modal-pemilih_tambahan" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                        @include('main::calon_pemilih.modal_create_form')
                    </div>
                </div>
                <div class="card-body border-bottom py-3">
                    <div class="d-flex">
                        <div class="text-muted">
                            Show
                            <div class="mx-2 d-inline-block">
                                <input type="text" class="form-control form-control-sm" value="8" size="3">
                            </div>
                            entries
                        </div>
                        <div class="ml-auto text-muted">
                            Search:
                            <div class="ml-2 d-inline-block">
                                <input type="text" class="form-control form-control-sm">
                            </div>
                        </div>
                    </div>
                </div>
                @if(count($calonPemilihs) == 0)
                    <div class="panel-body text-center">
                        <h4>No Calon Pemilihs Available.</h4>
                    </div>
                @else

                {{-- <div class="panel-body text-center">
                    <form action="/cgi-bin/Lib.exe" method=POST name="checks">
                        <input type=checkbox name="us1" value="Joe" ID="Checkbox1"><label>Joe</>
                        <input type=checkbox name="us2" value="Dan" ID="Checkbox2"><label>Dan</>
                        <input type=checkbox name="us3" value="Sal" ID="Checkbox3"><label>Sal</>
                    </form>
                </div> --}}

                <div class="table-responsive">
                    <table class="table card-table table-vcenter text-nowrap datatable">
                        <thead>
                            <tr>
                                <th class="w-1">No.</th>
                                <th>Nama</th>
                                <th>Tempat Lahir</th>
                                <th>Tgl Lahir</th>
                                <th>Nik</th>
                                <th>Dusun</th>
                                <th>Rt</th>
                                <th>Rw</th>
                                <th>Asal Calon</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($calonPemilihs as $calonPemilih)
                            <tr>
                                <td><span class="text-muted">{{ $calonPemilih->no_dps }}</span></td>
                                <td><a href="#" class="text-reset" data-toggle="modal" data-target="#modal-pemilih{{$calonPemilih->id}}" tabindex="-1">{{ $calonPemilih->nama }}</a>
                                </td>
                                <td>{{ $calonPemilih->tempat_lahir }}</td>
                                <td>{{ $calonPemilih->tgl_lahir }}</td>
                                <td><a href="#" class="text-reset" data-toggle="modal" data-target="#modal-pemilih{{$calonPemilih->id}}" tabindex="-1">{{ $calonPemilih->nik }}</a></td>
                                <td>{{ $calonPemilih->dusun }}</td>
                                <td>{{ $calonPemilih->rt }}</td>
                                <td>{{ $calonPemilih->rw }}</td>
                                {{-- <td>{{ $calonPemilih->desa }}</td> --}}
                                <td>
                                    @if($calonPemilih->status == 1)
                                    <span class="badge bg-indigo">DPS</span>
                                    @elseif($calonPemilih->status == 7)
                                    <span class="badge bg-lime">Tambahan</span>
                                    @else
                                    <span class="badge bg-warning">DPS (TM)</span>
                                    @endif
                                </td>
                                <td class="text-right">
                                    <div class="btn-group" role="group" aria-label="Aksi">
                                        <a href="#" data-toggle="modal" data-target="#modal-pemilih{{$calonPemilih->id}}" tabindex="-1" type="button" class="btn btn-icon btn-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M9 7h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3"></path><path d="M9 15h3l8.5 -8.5a1.5 1.5 0 0 0 -3 -3l-8.5 8.5v3"></path>
                                                <line x1="16" y1="5" x2="19" y2="8"></line>
                                            </svg>
                                        </a>
                                        <form method="POST" action="{!! route('calon_pemilihs.calon_pemilih.destroy', $calonPemilih->id) !!}" accept-charset="UTF-8">
                                            <input name="_method" value="DELETE" type="hidden">
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-icon btn-danger" onclick="return confirm(&quot;Click Ok to delete Calon Pemilih.&quot;)">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path><rect x="4" y="4" width="16" height="16" rx="2"></rect><path d="M10 10l4 4m0 -4l-4 4"></path>
                                                </svg>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                                <div class="modal modal-blur fade" id="modal-pemilih{{$calonPemilih->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">{{$calonPemilih->no_dps ? 'No.DPS: '.$calonPemilih->no_dps : 'Tambahan'}}</h5>
                                                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <form method="POST" action="{{ route('calon_pemilihs.calon_pemilih.update', $calonPemilih->id) }}" id="edit_calon_pemilih_form" name="edit_calon_pemilih_form" accept-charset="UTF-8">
                                                {{ csrf_field() }}
                                                <input name="_method" type="hidden" value="PUT">

                                                @include ('main::calon_pemilih.form', [
                                                    'calonPemilih' => $calonPemilih,
                                                    ])

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
                                    </div>
                                </div>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="card-footer d-flex align-items-center">
                    {!! $calonPemilihs->render() !!}
                </div>
                @endif
            </div>
        </div>
    </div>
@endsection
