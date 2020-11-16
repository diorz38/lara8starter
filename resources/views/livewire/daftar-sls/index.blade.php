<div class="page-header text-white d-print-none">
    <div class="row align-items-center">
        <div class="col">
            <!-- Page pre-title -->
            <div class="page-pretitle">
                Overview
            </div>
            <h2 class="page-title">
                Navbar overlap layout
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
                    data-target="#modal-report">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <line x1="12" y1="5" x2="12" y2="19" />
                        <line x1="5" y1="12" x2="19" y2="12" /></svg>
                    Create new report
                </a>
                <a href="#" class="btn btn-primary d-sm-none btn-icon" data-toggle="modal"
                    data-target="#modal-report" aria-label="Create new report">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <line x1="12" y1="5" x2="12" y2="19" />
                        <line x1="5" y1="12" x2="19" y2="12" /></svg>
                </a>
            </div>
        </div>
    </div>
</div>
<div class="row row-deck row-cards">
    <div class="col-12">
        <div class="card">

            <div class="card-body border-bottom py-3">
                <div class="d-flex">
                    <div class="text-muted">
                    </div>
                    <div class="ml-auto text-muted">
                        Search:
                        <div class="ml-2 d-inline-block">
                            <input wire:model.debounce.1000="search" type="text" class="form-control form-control-sm"
                                placeholder="cari Nama atau NIK">
                        </div>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table card-table table-vcenter text-nowrap datatable">
                    <thead>
                        <tr>
                            <th class="w-1">ID</th>
                            <th>Dusun</th>
                            <th>RW</th>
                            <th>RT</th>
                            <th>Jumlah KK</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sls as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->dusun}}</td>
                                <td>{{$item->rw}}</td>
                                <td>{{$item->rt}}</td>
                                <td>{{$item->keluarga_count}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="card-footer d-flex align-items-center">
                    {{$sls->onEachSide(1)->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
