@php
    use Illuminate\Support\Facades\DB;
@endphp
@extends('layouts.admin.master')
@section('title',"Bài học")
@section('title-heading', "Danh sách Bài học")
@section('content')
    <table class="table table-separate table-head-custom table-checkable" data-loading>
        <thead>
            
        <tr>
            <th>id</th>
            <th>Title</th>
            <th>content</th>
            <th>video_part</th>
            <th>lession type</th>
            <th>attachment</th>
            <th>guard</th>
            <th>order</th>
            <th>Chapter</th>
            <th>Action</th>
        </tr>
        </thead>
        @foreach ($lessons as $a)
            <tbody show-list>
            <tr>
                <th>{{ $a->id }}</th>
                <th>{{ $a->title }}</th>
                <th>{{ $a->content }}</th>
                <th>{{ $a->video_part }}</th>
                <th>{{ $a->lession_type }}</th>
                <th>{{ $a->attachment }}</th>
                <th>{{ $a->guard }}</th>
                <th>{{ $a->order }}</th>
                <th>  {{  DB::table('chapters')->where('id','=',$a->id_chapters)->first()->title}}</th>
                {{-- <th>{{ $a->view }}</th>
                <th>{{ $a->status }}</th> --}}
                <th style="display: flex">
                    <form action="{{url('lessons/'.$a->id)}}" method="post">
                        @csrf
                        <input type="hidden" name="_method" value="DELETE">
                        <button class="btn btn-danger">Xóa</button>
                    </form>
                    <a href="{{route('lessons.edit',$a->id)}}" class="btn btn-success">Update</a></th>
            </tr>
            </tbody>
        @endforeach
    </table>
@endsection
