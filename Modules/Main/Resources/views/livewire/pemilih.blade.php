<div>
    {{-- @include('livewire.create') --}}
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


        {{-- <div class="alert alert-success" style="margin-top:30px;">x

        </div> --}}
    @endif
    {{-- <table class="table table-bordered mt-5">
        <thead>
            <tr>
                <th>No.</th>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $value)
            <tr>
                <td>{{ $value->id }}</td>
                <td>{{ $value->name }}</td>
                <td>{{ $value->email }}</td>
                <td>
                <button data-toggle="modal" data-target="#updateModal" wire:click="edit({{ $value->id }})" class="btn btn-primary btn-sm">Edit</button>
                <button wire:click="delete({{ $value->id }})" class="btn btn-danger btn-sm">Delete</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $users->links() }}
</div> --}}
<div class="card-body border-bottom py-3">
    <div class="d-flex">
        <div class="text-muted">
            {{-- Show
            <div class="mx-2 d-inline-block">
                <input type="text" class="form-control form-control-sm" value="8" size="3">
            </div>
            entries --}}
        </div>
        <div class="ml-auto text-muted">
            Search:
            <div class="ml-2 d-inline-block">
                <input wire:model="search" type="text" class="form-control form-control-sm" placeholder="cari Nama atau NIK">
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
                <th>Asal Calon</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($calonPemilih as $pemilih)
            <tr>
                <td><span class="text-muted">{{ $pemilih->no_dps }}</span></td>
                <td><a href="#" class="text-reset"  data-toggle="modal" data-target="#updateModal" wire:click="edit({{ $pemilih->id }})" tabindex="-1">{{ $pemilih->nama }}</a>
                </td>
                <td>{{ $pemilih->tempat_lahir }}, {{ \Carbon\Carbon::parse($pemilih->tgl_lahir)->format('d-m-Y') }}</td>
                <td><a href="#" class="text-reset"  data-toggle="modal" data-target="#updateModal" wire:click="edit({{ $pemilih->id }})" tabindex="-1">{{ $pemilih->nik }}</a></td>
                <td>{{ $pemilih->dusun }}</td>
                <td>{{ $pemilih->rt }}</td>
                <td>{{ $pemilih->rw }}</td>
                {{-- <td>{{ $pemilih->desa }}</td> --}}
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
                        <a href="#" class="btn btn-icon btn-primary"  data-toggle="modal" data-target="#updateModal" wire:click="edit({{ $pemilih->id }})" tabindex="-1">
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
                            {{-- <button type="submit" class="btn btn-icon btn-danger" onclick="return confirm(&quot;Click Ok to delete Calon Pemilih.&quot;)">
                            </button> --}}
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
