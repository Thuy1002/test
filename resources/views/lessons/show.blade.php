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
    <section style="background-color: #eee;">
        <div class="container my-5 py-5">
          <div class="row d-flex justify-content-center">
            <div class="col-md-12 col-lg-10 col-xl-8">
              <div class="card">

                <div class="card-footer py-3 border-0" style="background-color: #f8f9fa;">
                  <div class="d-flex flex-start w-100">
                    <img class="rounded-circle shadow-1-strong me-3"
                      src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(19).webp" alt="avatar" width="40"
                      height="40" />
                    <div class="form-outline w-100">
                      <textarea class="form-control" id="textAreaExample" rows="4" placeholder="Comment..."
                        style="background: #fff;"></textarea>

                    </div>
                  </div>
                  <div class="float-end mt-2 pt-1">
                    <button type="button" class="btn btn-primary btn-sm">Post comment</button>
                    <button type="button" class="btn btn-outline-primary btn-sm">Cancel</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
@endsection
