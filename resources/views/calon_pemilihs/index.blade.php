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
                <a href="{{ route('calon_pemilihs.calon_pemilih.create') }}" class="btn btn-success" title="Create New Calon Pemilih">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
            </div>

        </div>

        @if(count($calonPemilihs) == 0)
            <div class="panel-body text-center">
                <h4>No Calon Pemilihs Available.</h4>
            </div>
        @else
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>User</th>
                            <th>No Tps</th>
                            <th>No Dps</th>
                            <th>Nama</th>
                            <th>Tempat Lahir</th>
                            <th>Tgl Lahir</th>
                            <th>Nik</th>
                            <th>Dusun</th>
                            <th>Rt</th>
                            <th>Rw</th>
                            <th>Desa</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($calonPemilihs as $calonPemilih)
                        <tr>
                            <td>{{ optional($calonPemilih->user)->name }}</td>
                            <td>{{ $calonPemilih->no_tps }}</td>
                            <td>{{ $calonPemilih->no_dps }}</td>
                            <td>{{ $calonPemilih->nama }}</td>
                            <td>{{ $calonPemilih->tempat_lahir }}</td>
                            <td>{{ $calonPemilih->tgl_lahir }}</td>
                            <td>{{ $calonPemilih->nik }}</td>
                            <td>{{ $calonPemilih->dusun }}</td>
                            <td>{{ $calonPemilih->rt }}</td>
                            <td>{{ $calonPemilih->rw }}</td>
                            <td>{{ $calonPemilih->desa }}</td>

                            <td>

                                <form method="POST" action="{!! route('calon_pemilihs.calon_pemilih.destroy', $calonPemilih->id) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                        <a href="{{ route('calon_pemilihs.calon_pemilih.show', $calonPemilih->id ) }}" class="btn btn-info" title="Show Calon Pemilih">
                                            <span class="glyphicon glyphicon-open" aria-hidden="true"></span>
                                        </a>
                                        <a href="{{ route('calon_pemilihs.calon_pemilih.edit', $calonPemilih->id ) }}" class="btn btn-primary" title="Edit Calon Pemilih">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        </a>

                                        <button type="submit" class="btn btn-danger" title="Delete Calon Pemilih" onclick="return confirm(&quot;Click Ok to delete Calon Pemilih.&quot;)">
                                            <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                        </button>
                                    </div>

                                </form>

                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>

        <div class="panel-footer">
            {!! $calonPemilihs->render() !!}
        </div>

        @endif

    </div>
@endsection
