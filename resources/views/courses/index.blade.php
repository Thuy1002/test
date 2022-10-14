@extends('layouts.admin.master') 
@section('title',"khóa học")
@section('title-heading', "danh sách khóa học")
@section('content')
<table class="table table-separate table-head-custom table-checkable" data-loading>
    <thead>
        <tr>
            <th>id</th>
            <th>tiêu đề</th>
            <th>Tên người dùng</th>
            <th>Xử lý</th>
            <th>Tên người dùng</th>
            <th>Xử lý</th>
            <th>Tên người dùng</th>
            <th>Xử lý</th>
        </tr>
    </thead>
    @foreach ($courses as $a)
    <tbody show-list>
        <tr>
            <th>{{ $a->id }}</th>
            <th>{{ $a->title }}</th>
            <th>Xử lý</th>
            <th>Xử lý</th>
            <th>Xử lý</th>
            <th>Xử lý</th>
            <th>Xử lý</th>
            <th>Xử lý</th>
        </tr>
    </tbody>
    @endforeach
</table>
@endsection