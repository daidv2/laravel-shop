@extends('layouts.admin.master')
@section('controller', 'User')
@section('action', 'Edit')
@section('content')
<form action="{{ route('users.update', $data->id) }}" method="POST">
    <input type="hidden" name="_method" value="PUT">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group">
        <label>Username</label>
        <input class="form-control" name="txtUsername" value="{{ $data->username }}" disabled />
    </div>
    <div class="form-group{{ $errors->has('txtPass') ? ' has-error' : (count($errors) > 0 ? ' has-success' : '') }}">
        <label>Password</label>
        <input type="password" class="form-control" name="txtPass" value="{{ old('txtPass') }}" placeholder="Please Enter Password" />
        @if (count($errors) > 0)
        <span class="glyphicon glyphicon-{{ $errors->has('txtPass') ? 'remove' : 'ok' }} form-control-feedback"></span>
        @endif
        @foreach ($errors->get('txtPass') as $message)
        <span class="help-block">{{ $message }}</span>
        @endforeach
    </div>
    <div class="form-group{{ $errors->has('txtRePass') ? ' has-error' : (count($errors) > 0 ? ' has-success' : '') }}">
        <label>RePassword</label>
        <input type="password" class="form-control" name="txtRePass" value="{{ old('txtRePass') }}" placeholder="Please Enter RePassword" />
        @if (count($errors) > 0)
        <span class="glyphicon glyphicon-{{ $errors->has('txtRePass') ? 'remove' : 'ok' }} form-control-feedback"></span>
        @endif
        @foreach ($errors->get('txtRePass') as $message)
        <span class="help-block">{{ $message }}</span>
        @endforeach
    </div>
    <div class="form-group{{ $errors->has('txtEmail') ? ' has-error' : (count($errors) > 0 ? ' has-success' : '') }}">
        <label>Email</label>
        <input type="email" class="form-control" name="txtEmail" value="{{ old('txtEmail', $data->email) }}"placeholder="Please Enter Email" />
        @if (count($errors) > 0)
        <span class="glyphicon glyphicon-{{ $errors->has('txtEmail') ? 'remove' : 'ok' }} form-control-feedback"></span>
        @endif
        @foreach ($errors->get('txtEmail') as $message)
        <span class="help-block">{{ $message }}</span>
        @endforeach
    </div>
    @if($curren_user->level == SUPERADMIN)
    <div class="form-group{{ $errors->has('rdoLevel') ? ' has-error' : (count($errors) > 0 ? ' has-success' : '') }}">
        <label>User Level</label>
        <label class="radio-inline">
            <input name="rdoLevel" value="{{ MEMBER }}"
            @if($data->level == MEMBER)
            checked="checked"
            @endif
            type="radio">Member
        </label>
        <label class="radio-inline">
            <input name="rdoLevel" value="{{ ADMIN }}"
            @if($data->level == ADMIN)
            checked="checked"
            @endif
            type="radio">Admin
        </label>
        <label class="radio-inline">
            <input name="rdoLevel" value="{{ SUPERADMIN }}"
            @if($data->level == SUPERADMIN)
            checked="checked"
            @endif
            type="radio">SuperAdmin
        </label>
        @if (count($errors) > 0)
        <span class="glyphicon glyphicon-{{ $errors->has('rdoLevel') ? 'remove' : 'ok' }} form-control-feedback" style="top: -8px;"></span>
        @endif
        @foreach ($errors->get('rdoLevel') as $message)
        <span class="help-block">{{ $message }}</span>
        @endforeach
    </div>
    @endif
    <button type="submit" class="btn btn-primary">User Edit</button>
    <button type="reset" class="btn btn-default">Reset</button>
</form>
@endsection