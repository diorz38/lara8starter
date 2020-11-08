@extends('backend::layouts.master')

@push('page-script')
<script>
    $(document).ready(function(){
            $("#users-table").DataTable({
                serverSide: true,
                ajax: "{{ route('users_laratable') }}",
                order: [[1, "asc"]],
                columns: [
                    { name: 'serial_no', orderable: false, searchable: false},
                    { name: 'name' },
                    { name: 'email' },
                    { name: 'roles', orderable: false},
                    { name: 'action', orderable: false, searchable:false},
                ],
            });
        });
</script>
@endpush

@section('content')
<div class="content-wrapper">
    <div class="col-12 col-md-10 offset-md-1">
        @if(Session::has('success_message'))
        <div class="alert alert-success">
            <i class="t-ok"></i>
            {!! session('success_message') !!}

            <button type="button" class="close" data-dismiss="alert" aria-label="close">
                <span aria-hidden="true">&times;</span>
            </button>

        </div>
        @endif
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div
                        class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                        <h4 class="card-title">Users Table</h4>
                        <a href="{{ route('users.user.create') }}" class="btn btn-sm btn-success"
                            title="Create New User">
                            <i class="ti-plus icon-md mb-0 mb-md-3 mb-xl-0"></i>
                        </a>
                    </div>
                    <p class="card-description">
                        Add class <code>.table-striped</code>
                    </p>
                    @if(count($users) == 0)
                    <div class="panel-body text-center">
                        <h4>No Users Available.</h4>
                    </div>
                    @else
                    <div class="table-responsive">
                        <table id="users-table" class="table table-striped table-sm" style="width:100%">
                            <thead class="thead-dark">
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th></th>
                                </tr>
                            </thead>

                        </table>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
