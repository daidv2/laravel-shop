@extends('layouts.site.app')

@section('content')
<div class="container">
    <br>
    <h2 class="error404"><span>Error 404!</span></h2>
    <br><br>
    <div class="container centeralign">
        <img src="{{ asset('themes/img/error-404.png') }}" alt="Error 404 not found" title="Error 404 not found">
        <br><br><br>
        <h2 class="font48"> We are Sorry !!!</h2>
        <h2>The page you are looking for could not found. <br> Please Check Top Menu.</h2>
    </div>
</div>
@endsection