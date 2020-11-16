@extends('main::layouts.main')

@section('content')

    @if(Session::has('success_message'))
        <div class="alert alert-success">
            <span class="glyphicon glyphicon-ok"></span>
            {!! session('success_message') !!}

            <button type="button" class="close" data-dismiss="alert" aria-label="close">
                <span aria-hidden="true">&times;</span>
            </button>

        </div>
    @endif

    <div class="panel panel-default">

        <div class="panel-heading clearfix">

            <div class="pull-left">
                <h4 class="mt-5 mb-5">Calon Pemilihs</h4>
            </div>

            <div class="btn-group btn-group-sm pull-right" role="group">
            </div>

        </div>

        @include('main::daftar_sls.LaratableDaftarSls')

    </div>
@endsection
