@extends('main::layouts.main')

@push('page-js')
<script type="text/javascript">
    window.livewire.on('userStore', () => {
        $('#exampleModal').modal('hide');
    });
</script>
@endpush

@section('content')
<div class="container-xl">
    <div class="page-header text-white d-print-none">
        @include('livewire.create')
    </div>

    <div class="row row-deck row-cards">
        <div class="col-12">

            <div class="card">
                    <div class="card-header">
                        <h2>Laravel Livewire Crud</h2>
                    </div>
                    <div class="card-body">
                        @if (session()->has('message'))
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                        @endif
                        @livewire('pemilih')
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
