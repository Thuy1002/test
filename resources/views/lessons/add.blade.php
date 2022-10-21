@extends('layouts.master')
@section('title', 'khóa học')
@section('title-heading', 'Thêm mới chương học')
@section('content')

    <form action="{{ route('lessons.store') }}" method="POST" enctype="multipart/form-data">

        @csrf
        <div class="mb-3">
            <label for="" class="form-label">title</label>

            <input type="text" class="form-control" name="title">

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Content </label>
            <input type="text" name="content" class="form-control">

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">video_part </label>
            <input type="text" name="video_part" class="form-control">

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">lession_type </label>
            <input type="text" name="lession_type" class="form-control">

        </div>
        <div>
            <label for="exampleInputEmail1" class="form-label">attachment </label>
            <input type="text" name="attachment" class="form-control">
        </div>
       
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">guard </label>
            <input type="text" name="guard" class="form-control">

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">order </label>
            <input type="text" name="order" class="form-control">

        </div>

        <div class="form-group">
            <label for="">Tên Chương học</label>
            <select style="width: 160px;" name="id_chapters" id="" class="form-control" required="required">
                <option value="">Khóa học</option>
                @foreach ($chapter as $d)
                    <option value="{{ $d->id }}">{{ $d->title }}</option>
                @endforeach
            </select>
        </div>

        
        {{-- <div class="form-group">
            <label for="">Status</label>
            <input type="radio" name="status" value="0">Ẩn
            <input type="radio" name="status" value="1">Hiện
        </div> --}}
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
