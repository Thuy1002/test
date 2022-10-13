@extends('layouts.admin.master') 
@section('title',"khóa học")
@section('title-heading', "danh sách khóa học")
@section('content')
<table class="table table-separate table-head-custom table-checkable" data-loading>
    <thead>
        <tr>
            <th>Tên người dùng</th>
            <th>Xử lý</th>
        </tr>
    </thead>
    <tbody show-list>

    </tbody>
</table>
@endsection