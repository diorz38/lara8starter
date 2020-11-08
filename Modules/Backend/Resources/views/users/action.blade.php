<form method="POST" action="{!! route('users.user.destroy', $user->id) !!}"
    accept-charset="UTF-8">
    <input name="_method" value="DELETE" type="hidden">
    {{ csrf_field() }}

    <div class="btn-group btn-group-sm pull-right" role="group">
        @permission('view.users')
        <a href="{{ route('users.user.show', $user->id ) }}" class="btn btn-info"
            title="Show User">
            <i class="ti-eye" aria-hidden="true"></i>
        </a>
        @endpermission

        @role('admin')
            <a href="{{ route('users.user.edit', $user->id ) }}" class="btn btn-warning"
                title="Edit User">
                <i class="ti-pencil-alt" aria-hidden="true"></i>
            </a>
            @if(\Auth::id() != $user->id)
            <button type="submit" class="btn btn-danger" title="Delete User"
                onclick="return confirm(&quot;Click Ok to delete User.&quot;)">
                <i class="ti-trash" aria-hidden="true"></i>
            </button>
            @endif
        @endrole
    </div>

</form>
