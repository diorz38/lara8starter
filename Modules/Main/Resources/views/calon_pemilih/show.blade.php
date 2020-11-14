@extends('main::layouts.main')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Calon Pemilih' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('calon_pemilihs.calon_pemilih.destroy', $calonPemilih->id) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('calon_pemilihs.calon_pemilih.index') }}" class="btn btn-primary" title="Show All Calon Pemilih">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('calon_pemilihs.calon_pemilih.create') }}" class="btn btn-success" title="Create New Calon Pemilih">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('calon_pemilihs.calon_pemilih.edit', $calonPemilih->id ) }}" class="btn btn-primary" title="Edit Calon Pemilih">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Calon Pemilih" onclick="return confirm(&quot;Click Ok to delete Calon Pemilih.?&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>User</dt>
            <dd>{{ optional($calonPemilih->user)->name }}</dd>
            <dt>No Tps</dt>
            <dd>{{ $calonPemilih->no_tps }}</dd>
            <dt>No Dps</dt>
            <dd>{{ $calonPemilih->no_dps }}</dd>
            <dt>Nama</dt>
            <dd>{{ $calonPemilih->nama }}</dd>
            <dt>Jkel</dt>
            <dd>{{ $calonPemilih->jkel }}</dd>
            <dt>Tempat Lahir</dt>
            <dd>{{ $calonPemilih->tempat_lahir }}</dd>
            <dt>Tgl Lahir</dt>
            <dd>{{ $calonPemilih->tgl_lahir }}</dd>
            <dt>Status Kawin</dt>
            <dd>{{ $calonPemilih->status_kawin }}</dd>
            <dt>Nik</dt>
            <dd>{{ $calonPemilih->nik }}</dd>
            <dt>Dusun</dt>
            <dd>{{ $calonPemilih->dusun }}</dd>
            <dt>Rt</dt>
            <dd>{{ $calonPemilih->rt }}</dd>
            <dt>Rw</dt>
            <dd>{{ $calonPemilih->rw }}</dd>
            <dt>Desa</dt>
            <dd>{{ $calonPemilih->desa }}</dd>
            <dt>Syarat</dt>
            <dd>{{ implode('; ', $calonPemilih->syarat) }}</dd>
            <dt>Status</dt>
            <dd>{{ $calonPemilih->status }}</dd>

        </dl>

    </div>
</div>

@endsection
