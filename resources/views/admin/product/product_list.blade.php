@extends('layouts.admin.master')
@section('controller', 'Product')
@section('action', 'List')
@section('content')
<div class="col-lg-12">
    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
        <tr align="center">
            <th>No</th>
            <th>Name</th>
            <th>Price</th>
            <th>Date</th>
            <th>Delete</th>
            <th>Edit</th>
        </tr>
        </thead>
        <tbody>
        <?php $no = 0; ?>
        @foreach($data as $item)
        <tr class="odd gradeX" align="center">
            <td>{{ ++$no }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ number_format($item->price, 0, ',', '.') }} VNĐ</td>
            <td>{{ $item->created_at->diffForHumans() }}</td>
            <td class="center">
                <form action="{{ route('products.destroy', $item->id) }}" method="POST">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <i class="fa fa-trash-o  fa-fw"></i>
                    <a href="javascript:void(0);" onclick="if(confirm('Are you sure delete?')){$(this).parent().submit();}">Delete</a>
                </form>
            </td>
            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{ route('products.edit', $item->id) }}">Edit</a></td>
        </tr>
        @endforeach
    </table>
</div>
@endsection