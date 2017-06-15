@extends('layouts.admin.master')
@section('controller', 'Category')
@section('action', 'List')
@section('content')
<div class="col-lg-12">
    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
        <tr align="center">
            <th>No</th>
            <th>Name</th>
            <th>Category Parent</th>
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
            <td>
                @if($item->parent_id)
                <?php
                    $parent = \DB::table('cates')->select('name')->where('id', $item->parent_id)->first();
                    echo $parent->name;
                ?>
                @else
                None
                @endif
            </td>
            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="{{ route('admin.cates.getDelete', $item->id) }}" onclick="return confirm('Are you sure delete?');">Delete</a></td>
            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{ route('admin.cates.getEdit', $item->id) }}">Edit</a></td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection