@extends('layouts.admin.master')
@section('controller', 'Product')
@section('action', 'Add')
@section('content')
<form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
    <div class="col-lg-7" style="padding-bottom:120px">
        @include('elements.error')
        {{ csrf_field() }}
        <div class="form-group">
            <label>Category Parent</label>
            <select class="form-control" name="sltParent">
                <option value="0">Please Choose Category</option>
                <?php \Common::cate_parent($parent, 0, '--', old('sltParent')); ?>
            </select>
        </div>
        <div class="form-group">
            <label>Name</label>
            <input class="form-control" name="txtName" value="{{ old('txtName') }}" placeholder="Please Enter Product Name"/>
        </div>
        <div class="form-group">
            <label>Price</label>
            <input class="form-control" name="txtPrice" value="{{ old('txtPrice') }}" placeholder="Please Enter Product Price"/>
        </div>
        <div class="form-group">
            <label>Intro</label>
            <textarea class="form-control" rows="3" name="txtIntro">{{ old('txtIntro') }}</textarea>
        </div>
        <div class="form-group">
            <label>Content</label>
            <textarea class="form-control" rows="3" name="txtContent">{{ old('txtContent') }}</textarea>
        </div>
        <div class="form-group">
            <label>Image</label>
            <input type="file" name="fImage">
        </div>
        <div class="form-group">
            <label>Product Keywords</label>
            <input class="form-control" name="txtKeywords" value="{{ old('txtKeywords') }}" placeholder="Please Enter Product Keywords"/>
        </div>
        <div class="form-group">
            <label>Product Description</label>
            <textarea class="form-control" rows="3" name="txtDescription">{{ old('txtDescription') }}</textarea>
        </div>
        <div class="form-group">
            <label>Product Status</label>
            <label class="radio-inline">
                <input name="rdoStatus" value="1" checked="" type="radio">Visible
            </label>
            <label class="radio-inline">
                <input name="rdoStatus" value="2" type="radio">Invisible
            </label>
        </div>
        <button type="submit" class="btn btn-primary">Product Add</button>
        <button type="reset" class="btn btn-default">Reset</button>
    </div>
    <div class="col-md-offset-1 col-md-4">
        @for($i = 1; $i <= 10; $i++)
        <div class="form-group">
            <label>Image Product Detail{{ $i }}</label>
            <input type="file" name="fProductDetail[]">
        </div>
        @endfor
    </div>
</form>
@endsection