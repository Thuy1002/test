@extends('layouts.master')
@section('title', 'khóa học')
@section('title-heading', 'Chỉnh sửa Chương học')
@section('content')

    <form action="{{route('lessons.update',$lessons->id)}}" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="_method" value="PUT">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">title</label>

            <input type="text" class="form-control" name="title"
                value="{{ isset($lessons) ? $lessons->title : old('title') }}">

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Content </label>
            <input type="text" name="order" class="form-control"
                value="{{ isset($lessons) ? $lessons->content : old('content') }}">

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">video_part </label>
            <input type="text" name="order" class="form-control"
                value="{{ isset($lessons) ? $lessons->video_part : old('video_part') }}">

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">lession_type </label>
            <input type="text" name="order" class="form-control"
                value="{{ isset($lessons) ? $lessons->lession_type : old('lession_type') }}">

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">attachment </label>
            <input type="text" name="attachment" class="form-control"
                value="{{ isset($lessons) ? $lessons->content : old('attachment') }}">

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">guard </label>
            <input type="text" name="order" class="form-control"
                value="{{ isset($lessons) ? $lessons->guard : old('guard') }}">

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">order </label>
            <input type="text" name="order" class="form-control"
                value="{{ isset($lessons) ? $lessons->order : old('order') }}">

        </div>
        <div class="form-group">
            <label for="">Tên chương học</label>
            <select style="width: 160px;" name="id_chapters" id="" class="form-control" required="required">
                <option value=" ">Chương học</option> 
                @foreach ($chapter as $d)
                    <option {{ $d->id == $lessons->id_chapters?'selected':''}}  value="{{ $d->id }}">{{ $d->title }}</option>
                @endforeach
            </select>
        </div>
       
        
      
        <div class="form-group">
            <label for="">Status</label>
            <input type="radio" name="status" value="1"
                {{ isset($lessons) && $lessons->status == 1 ? 'checked' : '' }}>Hiện
            <input type="radio" name="status" value="0" {{ isset($lessons) && $lessons->status == 0 ? 'checked' : '' }}>Ẩn
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
