<table id="sls-laratable" class="table table-bordered table-striped" style="width:100%">
    <thead class="thead-dark">
        <tr>
            <th>id</th>
            <th>DUSUN</th>
            <th>RW</th>
            <th>RT</th>
            <th>NAMA</th>
        </tr>
    </thead>
</table>

@push('scripts')
    <script>
        $(document).ready(function(){
            $("#sls-laratable").DataTable({
                serverSide: true,
                ajax: "{{ route('sls.laratable.data') }}",
                columns: [
                    { name: 'id' },
                    { name: 'rw' },
                    { name: 'rt' },
                    { name: 'dusun' },
                ],
            });
        });
    </script>
@endpush
