@extends('main::layouts.main')

@push('page-js')
<script type="text/javascript">
    window.livewire.on('pemilihStore', () => {
        $('#createModal').modal('hide');
        $('#updateModal').modal('hide');
    });

</script>
{{-- <script>
    var checked = $('input[name="syarat[]"]:checked').length;
    alert(checked);

    if (checked == 0) {
        return false;
    } else {
        return true;
    }

</script> --}}
@endpush

@section('content')
<div class="container-xl">
    @livewire('pemilih')
</div>
    @endsection
