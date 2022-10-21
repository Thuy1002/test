@extends('layouts.master')
@section('title', 'khóa học')
@section('title-heading', 'Chỉnh sửa khóa học')
@section('content')

    <form action="{{route('courses.update',$courses->id)}}" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="_method" value="PUT">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">title</label>

            <input type="text" class="form-control" name="title"
                value="{{ isset($courses) ? $courses->title : old('title') }}">

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">content </label>
            <input type="text" name="content" class="form-control"
                value="{{ isset($courses) ? $courses->content : old('content') }}">

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">price </label>
            <input type="number" name="price" class="form-control"
                value="{{ isset($courses) ? $courses->price : old('price') }}">

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">discount </label>
            <input type="text" name="discount" class="form-control"
                value="{{ isset($courses) ? $courses->discount : old('discount') }}">

        </div>
        <div class="form-group">
            <label for="">Ảnh đại diện</label>
            <img style="    width: 100px;"  src="{{ asset('images/'.$courses->img) }}" alt="">
            <input type="file" name="img" >
        </div>
        <div class="form-group">
            <label for="">Video</label>
            <input type="text" name="video" value="{{ isset($courses) ? $courses->video : old('video') }}">
        </div>
        <div class="form-group">
            <label for="">Status</label>
            <input type="radio" name="status" value="1"
                {{ isset($courses) && $courses->status == 1 ? 'checked' : '' }}>Hiện
            <input type="radio" name="status" value="0" {{ isset($courses) && $courses->status == 0 ? 'checked' : '' }}>Ẩn
        </div>
        <div class="form-group">
            <label for="">view</label>
            <input type="text" name="view" value="{{ isset($courses) ? $courses->view : old('view') }}">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
