@extends('layouts.admin.master')
@section('controller', 'User')
@section('action', 'Add')
@section('content')
<div class="col-lg-7" style="padding-bottom:120px">
    <form action="{{ route('users.store') }}" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group has-feedback{{ $errors->has('txtUsername') ? ' has-error' : (count($errors) > 0 ? ' has-success' : '') }}">
            <label class="control-label">Username</label>
            <input class="form-control" name="txtUsername" value="{{ old('txtUsername') }}" placeholder="Please Enter Username" />
            @if (count($errors) > 0)
            <span class="glyphicon glyphicon-{{ $errors->has('txtUsername') ? 'remove' : 'ok' }} form-control-feedback"></span>
            @endif
            @foreach ($errors->get('txtUsername') as $message)
            <span class="help-block">{{ $message }}</span>
            @endforeach
        </div>
        <div class="form-group has-feedback{{ $errors->has('txtPass') ? ' has-error' : (count($errors) > 0 ? ' has-success' : '') }}">
            <label class="control-label">Password</label>
            <input type="password" class="form-control" name="txtPass" value="{{ old('txtPass') }}" placeholder="Please Enter Password" />
            @if (count($errors) > 0)
            <span class="glyphicon glyphicon-{{ $errors->has('txtPass') ? 'remove' : 'ok' }} form-control-feedback"></span>
            @endif
            @foreach ($errors->get('txtPass') as $message)
            <span class="help-block">{{ $message }}</span>
            @endforeach
        </div>
        <div class="form-group has-feedback{{ $errors->has('txtRePass') ? ' has-error' : (count($errors) > 0 ? ' has-success' : '') }}">
            <label class="control-label">RePassword</label>
            <input type="password" class="form-control" name="txtRePass" value="{{ old('txtRePass') }}" placeholder="Please Enter RePassword" />
            @if (count($errors) > 0)
            <span class="glyphicon glyphicon-{{ $errors->has('txtRePass') ? 'remove' : 'ok' }} form-control-feedback"></span>
            @endif
            @foreach ($errors->get('txtRePass') as $message)
            <span class="help-block">{{ $message }}</span>
            @endforeach
        </div>
        <div class="form-group has-feedback{{ $errors->has('txtEmail') ? ' has-error' : (count($errors) > 0 ? ' has-success' : '') }}">
            <label class="control-label">Email</label>
            <input type="email" class="form-control" name="txtEmail" value="{{ old('txtEmail') }}" placeholder="Please Enter Email" />
            @if (count($errors) > 0)
            <span class="glyphicon glyphicon-{{ $errors->has('txtEmail') ? 'remove' : 'ok' }} form-control-feedback"></span>
            @endif
            @foreach ($errors->get('txtEmail') as $message)
            <span class="help-block">{{ $message }}</span>
            @endforeach
        </div>
        <div class="form-group has-feedback{{ $errors->has('rdoLevel') ? ' has-error' : (count($errors) > 0 ? ' has-success' : '') }}">
            <label class="control-label">User Level</label>
            <label class="radio-inline">
                <input name="rdoLevel" value="{{ ADMIN }}" checked="" type="radio">Admin
            </label>
            <label class="radio-inline">
                <input name="rdoLevel" value="{{ MEMBER }}" type="radio">Member
            </label>
            @if (count($errors) > 0)
            <span class="glyphicon glyphicon-{{ $errors->has('rdoLevel') ? 'remove' : 'ok' }} form-control-feedback" style="top: -8px;"></span>
            @endif
            @foreach ($errors->get('rdoLevel') as $message)
            <span class="help-block">{{ $message }}</span>
            @endforeach
        </div>
        <button type="submit" class="btn btn-warning">
            User Add <span class="glyphicon glyphicon-send"></span>
        </button>
    </form>
</div>
@endsection