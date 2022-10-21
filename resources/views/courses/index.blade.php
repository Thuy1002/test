@extends('layouts.master')
@section('title',"khóa học")
@section('title-heading', "danh sách khóa học")
@section('content')
    <table class="table table-separate table-head-custom table-checkable" data-loading>
        <thead>
        <tr>
            <th>id</th>
            <th>Title</th>
            <th>Content</th>
            <th>Price</th>
            <th>Discount</th>
            <th>Imgage</th>
            <th>Video</th>
            {{-- <th>View</th>
            <th>status</th> --}}
            <th>Action</th>
        </tr>
        </thead>
        @foreach ($courses as $a)
            <tbody show-list>
            <tr>
                <th>{{ $a->id }}</th>
                <th>{{ $a->title }}</th>
                <th>{{ $a->content }}</th>
                <th>{{ $a->price }}</th>
                <th>{{ $a->discount }}</th>
                <th><img style="    width: 100px;" src=" {{ asset('images/'.$a->img) }}" alt=""></th>
                <th><a href="">{{ $a->video }}</a></th>
                {{-- <th>{{ $a->view }}</th>
                <th>{{ $a->status }}</th> --}}
                <th style="display: flex">
                    <form action="{{url('courses/'.$a->id)}}" method="post">
                        @csrf
                        <input type="hidden" name="_method" value="DELETE">
                        <button class="btn btn-danger">Xóa</button>
                    </form>

                    <a href="{{route('courses.edit',$a->id)}}" class="btn btn-success">Update</a></th>
            </tr>
            </tbody>
        @endforeach
    </table>
@endsection
