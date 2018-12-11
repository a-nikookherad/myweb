@csrf
<div class="form-group row">
    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

    <div class="col-md-6">
        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name"
               value="{{ old('name',isset($user->name)?$user->name:'') }}" required autofocus>

        @if ($errors->has('name'))
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
        @endif
    </div>
</div>

<div class="form-group row">
    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

    <div class="col-md-6">
        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
               value="{{ old('email',isset($user->email)?$user->email:'') }}" required>

        @if ($errors->has('email'))
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
        @endif
    </div>
</div>

<div class="form-group row">
    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

    <div class="col-md-6">
        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
               name="password" >

        @if ($errors->has('password'))
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
        @endif
    </div>
</div>

{{--<div class="form-group row">--}}
    {{--<label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>--}}

    {{--<div class="col-md-6">--}}
        {{--<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>--}}
    {{--</div>--}}
{{--</div>--}}

<div class="form-group row">
    <label for="role" class="col-md-4 col-form-label text-md-right">{{ __('Role') }}</label>
    <div class="col-md-6">
        <select id="role"  class="form-control" name="role" >
            <option value="admin" @if(isset($user->role)){{ $user->role == 'admin'?'selected':'' }}@endif>admin</option>
            <option value="customers" @if(isset($user->role)){{ $user->role == 'customers'?'selected':'' }}@endif>customers</option>
        </select>
    </div>
</div>

<div class="form-group row">
    <label for="active" class="col-md-4 col-form-label text-md-right">{{ __('Active') }}</label>

    <div class="col-md-6">
        <input id="avtive" type="checkbox" class="form-control" value="1" name="active" @if(isset($user->role)){{ !empty($user->active)?'checked':'' }}@endif>
    </div>
</div>