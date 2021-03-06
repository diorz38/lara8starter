
<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
    <label for="name" class="col-md-2 control-label">Name</label>
    <div class="col-md-10">
        <input class="form-control" name="name" type="text" id="name" value="{{ old('name', optional($user)->name) }}" minlength="1" maxlength="255" required="true" placeholder="Enter name here...">
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
    <label for="email" class="col-md-2 control-label">Email</label>
    <div class="col-md-10">
        <input class="form-control" name="email" type="text" id="email" value="{{ old('email', optional($user)->email) }}" minlength="1" maxlength="255" required="true" placeholder="Enter email here...">
        {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('role') ? 'has-error' : '' }}">
    <label for="parent_id" class="col-md-2 control-label">Role</label>
    <div class="col-md-10">
        <select class="form-control" id="role" name="role">
        	    <option value="" style="display: none;" {{ old('role', $user_role ?: '') == '' ? 'selected' : '' }} disabled selected>pilih Role</option>
        	@foreach ($roles as $item)
			    <option value="{{ $item->id }}" {{ old('role',  $user_role) == $item->id ? 'selected' : '' }}>
			    	{{ $item->name }}
			    </option>
			@endforeach
        </select>

        {!! $errors->first('parent_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('plain_password') ? 'has-error' : '' }}">
    <label for="password" class="col-md-2 control-label">Password</label>
    <div class="col-md-10">
        <input class="form-control" name="plain_password" type="text" id="plain_password" value="{{ old('plain_password', optional($user)->plain_password) }}" minlength="1" maxlength="191" placeholder="Enter password here...">
        {!! $errors->first('plain_password', '<p class="help-block">:message</p>') !!}
    </div>
</div>
