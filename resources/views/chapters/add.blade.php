@extends('layouts.admin.master')
@section('title', 'khóa học')
@section('title-heading', 'Thêm mới chương học')
@section('content')

    <form action="{{route('chapters.store')}}" method="POST" enctype="multipart/form-data">

        @csrf
        <div class="mb-3">
            <label for="" class="form-label">title</label>

            <input type="text" class="form-control" name="title">

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Order </label>
            <input type="text" name="order" class="form-control">

        </div>
        <div class="form-group">
            <label for="">Tên khóa học</label>
            <select style="width: 160px;" name="id_courses" id="" class="form-control" required="required">
                <option value="">Khóa học</option>
                @foreach ($courses as $d)
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
