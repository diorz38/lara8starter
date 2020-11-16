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
    <div>
    @endif

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
                    @include('livewire.posts.create')
                </div>
            </div>
        </div>
    </div>

    @include('livewire.posts.update')
    {{-- @if(session()->has('message'))
        <div class="alert alert-success">{{ session('message') }}</div> --}}
        <div class="row row-deck row-cards">
            <div class="col-12">
                <div class="card">
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Gender</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
        	@foreach($sampledata as $data)
        	<tr>
        		<td>{{ $data->first_name }}</td>
        		<td>{{ $data->last_name }}</td>
        		<td>{{ $data->gender }}</td>
        		<td>
                    <button data-toggle="modal" data-target="#updateModal" class="btn btn-primary btn-sm" wire:click="edit({{ $data->id }})">Edit</button>
                    <button wire:click="delete({{ $data->id }})" class="btn btn-danger btn-sm">Delete</button>
                </td>
        	</tr>
        	@endforeach
        </tbody>

    </table>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>id</th>
                <th>NIK</th>
                <th>Nama</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
        	@foreach($calonpemilih as $data)
        	<tr>
        		<td>{{ $data->id }}</td>
        		<td>{{ $data->nik }}</td>
        		<td>{{ $data->nama }}</td>
        		<td>
                    {{-- <button data-toggle="modal" data-target="#updateModal" class="btn btn-primary btn-sm" wire:click="edit({{ $data->id }})">Edit</button>
                    <button wire:click="delete({{ $data->id }})" class="btn btn-danger btn-sm">Delete</button> --}}
                </td>
        	</tr>
        	@endforeach
        </tbody>

    </table>
    {{$calonpemilih->onEachSide(1)->links()}}
</div>
</div>
</div>
</div>
