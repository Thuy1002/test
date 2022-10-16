@extends('layouts.admin.master')
@section('title', 'khóa học')
@section('title-heading', 'Thêm mới khóa học')
@section('content')

    <form action="{{route('courses.store')}}" method="POST" enctype="multipart/form-data">

        @csrf
        <div class="mb-3">
            <label for="" class="form-label">title</label>

            <input type="text" class="form-control" name="title">

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">content </label>
            <input type="text" name="content" class="form-control">

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">price </label>
            <input type="number" name="price" class="form-control">

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">discount </label>
            <input type="text" name="discount" class="form-control">

        </div>
        <div class="form-group">
            <label for="">Ảnh đại diện</label>
            <input type="file" name="img">
        </div>
        <div class="form-group">
            <label for="">Video</label>
            <input type="text" name="video">
        </div>
        <div class="form-group">
            <label for="">Status</label>
            <input type="radio" name="status" value="0">Ẩn
            <input type="radio" name="status" value="1">Hiện
        </div>
        <div class="form-group">
            <label for="">view</label>
            <input type="text" name="view">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
