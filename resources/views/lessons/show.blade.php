@php
    use Illuminate\Support\Facades\DB;
@endphp
@extends('layouts.admin.master')
@section('title',"Bài học")
@section('title-heading', "Bài học")
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
       
            <tbody show-list>
            <tr>
                <th>{{ $lessons->id }}</th>
                <th>{{ $lessons->title }}</th>
                <th>{{ $lessons->content }}</th>
                <th>{{ $lessons->video_part }}</th>
                <th>{{ $lessons->lession_type }}</th>
                <th>{{ $lessons->attachment }}</th>
                <th>{{ $lessons->guard }}</th>
                <th>{{ $lessons->order }}</th>
                <th>  {{  DB::table('chapters')->where('id','=',$lessons->id_chapters)->first()->title}}</th>
                {{-- <th>{{ $a->view }}</th>
                <th>{{ $a->status }}</th> --}}
                {{-- <th style="display: flex">
                    <form action="{{url('lessons/'.$a->id)}}" method="post">
                        @csrf
                        <input type="hidden" name="_method" value="DELETE">
                        <button class="btn btn-danger">Xóa</button>
                    </form>
                    <a href="{{route('lessons.edit',$a->id)}}" class="btn btn-success">Update</a></th>
            </tr> --}}
            </tbody>
      
    </table>
@endsection
