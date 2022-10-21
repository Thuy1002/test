@php
    use Illuminate\Support\Facades\DB;
@endphp
@extends('layouts.master')
@section('title',"Chương học")
@section('title-heading', "Danh sách chương học")
@section('content')
    <table class="table table-separate table-head-custom table-checkable" data-loading>
        <thead>
        <tr>
            <th>id</th>
            <th>Title</th>
            <th>order</th>
            <th>courses</th>
            <th>Action</th>
        </tr>
        </thead>
        @foreach ($chapters as $a)
            <tbody show-list>
            <tr>
                <th>{{ $a->id }}</th>
                <th>{{ $a->title }}</th>
                <th>{{ $a->order }}</th>
                <th>  {{  DB::table('courses')->where('id','=',$a->id_courses)->first()->title}}</th>
                {{-- <th>{{ $a->view }}</th>
                <th>{{ $a->status }}</th> --}}
                <th style="display: flex">
                    <form action="{{url('chapters/'.$a->id)}}" method="post">
                        @csrf
                        <input type="hidden" name="_method" value="DELETE">
                        <button class="btn btn-danger">Xóa</button>
                    </form>
                    <a href="{{route('chapters.edit',$a->id)}}" class="btn btn-success">Update</a></th>
            </tr>
            </tbody>
        @endforeach
    </table>
@endsection
