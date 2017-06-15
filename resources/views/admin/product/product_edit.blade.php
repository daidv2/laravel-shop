@extends('layouts.admin.master')
@section('controller', 'Product')
@section('action', 'Edit')
@section('content')
<style>
    .img-current{
        width: 150px;
        margin-top: 20px;
    }
    .img-detail{
        width: 120px;
        margin-bottom: 20px;
    }
    .btn-del{
        position: relative;
        top: -55px;
        padding: 7px 10px;
    }
    #insert{
        margin-top: 20px;
    }
</style>
<form action="{{ route('products.update', $data->id) }}" method="POST" enctype="multipart/form-data">
    <div class="col-lg-7" style="padding-bottom:120px">
        @include('elements.error')
        <input type="hidden" name="_method" value="PATCH">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <label>Category Parent</label>
            <select class="form-control" name="sltParent">
                <option value="0">Please Choose Category</option>
                <?php \Common::cate_parent($parent, 0, '--', old('sltParent', $data->cate_id)); ?>
            </select>
        </div>
        <div class="form-group">
            <label>Name</label>
            <input class="form-control" name="txtName" value="{{ old('txtName', $data->name) }}" placeholder="Please Enter Product Name"/>
        </div>
        <div class="form-group">
            <label>Price</label>
            <input class="form-control" name="txtPrice" value="{{ old('txtName', $data->price) }}" placeholder="Please Enter Product Price"/>
        </div>
        <div class="form-group">
            <label>Intro</label>
            <textarea class="form-control" rows="3" name="txtIntro">{{ old('txtIntro', $data->intro) }}</textarea>
        </div>
        <div class="form-group">
            <label>Content</label>
            <textarea class="form-control" rows="3" name="txtContent">{{ old('txtContent', $data->content) }}</textarea>
        </div>
        <div class="form-group">
            <label>Image</label>
            <input type="file" name="fImage">
            <img src="{{ asset($data->image) }}" alt="Image" class="img-current">
        </div>
        <div class="form-group">
            <label>Product Keywords</label>
            <input class="form-control" name="txtKeywords" value="{{ old('txtKeywords', $data->keywords) }}" placeholder="Please Enter Product Keywords"/>
        </div>
        <div class="form-group">
            <label>Product Description</label>
            <textarea class="form-control" rows="3" name="txtDescription">{{ old('txtDescription', $data->description) }}</textarea>
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
        <button type="submit" class="btn btn-primary">Product Edit</button>
        <button type="reset" class="btn btn-default">Reset</button>
    </div>
    <div class="col-md-offset-1 col-md-4">
        @foreach($data->product_images as $key => $item)
        <div id="img{{ $key }}" class="form-group">
            <img src="{{ asset($item->image) }}" id="{{ $item->id }}" alt="Image Detail{{ $key }}" class="img-detail">
            <a href="javascript:void(0);" class="btn-danger btn-circle btn-del"><i class="fa fa-times"></i></a>
        </div>
        @endforeach
        <button type="button" class="btn btn-primary" id="addImages">Add Images</button>
        <div id="insert"></div>
    </div>
</form>
@endsection