<div class="page-header text-white d-print-none">
    @include('main::livewire.create')
</div>

<div class="row row-deck row-cards">
<div class="col-12">

    <div class="card">
        <div class="card-body">
            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
            <div>
            @include('main::livewire.update')

            @if (session()->has('message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <div class="row align-items-center">
                    <div class="col">
                        <strong>
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><circle cx="12" cy="12" r="9"></circle><line x1="9" y1="9" x2="9.01" y2="9"></line><line x1="15" y1="9" x2="15.01" y2="9"></line><path d="M8 13a4 4 0 1 0 8 0m0 0h-8"></path></svg>
                        </strong>
                        {{ session('message') }}
                    </div>
                    <div class="col-auto ml-auto">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><circle cx="12" cy="12" r="9"></circle><path d="M10 10l4 4m0 -4l-4 4"></path></svg>
                        </button>
                    </div>
                </div>
            </div>


            @endif
            <div class="card-body border-bottom py-3">
                <div class="d-flex">
                    <div class="text-muted">
                    </div>
                    <div class="ml-auto text-muted">
                        Search:
                        <div class="ml-2 d-inline-block">
                            <input wire:model.debounce.1000="search" type="text" class="form-control form-control-sm" placeholder="cari Nama atau NIK">
                        </div>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table card-table table-vcenter text-nowrap datatable">
                    <thead>
                        <tr>
                            <th class="w-1">No.</th>
                            <th>Nama</th>
                            <th>TTL</th>
                            <th>Nik</th>
                            <th>Dusun</th>
                            <th>Rt</th>
                            <th>Rw</th>
                            <th>Desa/Kelr</th>
                            <th>Asal Calon</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($calonPemilih as $pemilih)
                        <tr>
                        <td><span class="text-muted">{{ $pemilih->id }}</span></td>
                            <td><a href="#" class="text-reset" data-toggle="modal" data-target="#updateModal" wire:click="edit({{ $pemilih->id }})" tabindex="-1">{{ $pemilih->nama }}</a>
                            </td>
                            <td>{{ $pemilih->tempat_lahir }}, {{ \Carbon\Carbon::parse($pemilih->tgl_lahir)->format('d-m-Y') }}</td>
                            <td><a href="#" class="text-reset"  data-toggle="modal" data-target="#updateModal" wire:click="edit({{ $pemilih->id }})" tabindex="-1">{{ $pemilih->nik }}</a></td>
                            <td>{{ $pemilih->dusun }}</td>
                            <td>{{ $pemilih->rt }}</td>
                            <td>{{ $pemilih->rw }}</td>
                            <td>{{ $pemilih->desa }}</td>
                            <td>
                                @if($pemilih->status == 1)
                                <span class="badge bg-indigo">DPS</span>
                                @elseif($pemilih->status == 7)
                                <span class="badge bg-lime">Tambahan</span>
                                @else
                                <span class="badge bg-warning">DPS (TM)</span>
                                @endif
                            </td>
                            <td class="text-right">
                                <div class="btn-group" role="group" aria-label="Aksi">
                                <a href="#" class="btn btn-icon btn-primary" data-toggle="modal" data-target="#updateModal" wire:click="edit({{ $pemilih->id }})" tabindex="-1" title="Pemilih No. {{$pemilih->id}}">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M9 7h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3"></path><path d="M9 15h3l8.5 -8.5a1.5 1.5 0 0 0 -3 -3l-8.5 8.5v3"></path>
                                            <line x1="16" y1="5" x2="19" y2="8"></line>
                                        </svg>
                                    </a>
                                    <button wire:click="delete({{ $pemilih->id }})" class="btn btn-icon btn-danger">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path><rect x="4" y="4" width="16" height="16" rx="2"></rect><path d="M10 10l4 4m0 -4l-4 4"></path>
                                        </svg>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="card-footer d-flex align-items-center">
                {{$calonPemilih->onEachSide(1)->links()}}
            </div>
        </div>
    </div>
</div>
</div>


