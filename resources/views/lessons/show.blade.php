@php
    use Illuminate\Support\Facades\DB;
@endphp
@extends('layouts.master')
@section('title', 'Bài học')
@section('title-heading', 'Bài học')
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
                <th> {{ DB::table('chapters')->where('id', '=', $lessons->id_chapters)->first()->title }}</th>
        </tbody>
        <h4>Display Comments</h4>

        {{-- @include('lessons.commentsDisplay', ['comment' => $lessons->comment, 'id_lesson' => $lessons->id])

            <hr /> --}}
    </table>
    <section style="background-color: #eee;">
        <div class="container my-5 py-5">

            <div class="row d-flex justify-content-center">
                <div class="col-md-12 col-lg-10 col-xl-8">

                    <div class="card">
                        @foreach ($cmt as $item )
                        <li>{{$item->comment}}</li>


                        <form action="{{ route('reply', $item->id) }}" method="post">
                            @csrf
                            <div class="card-footer py-3 border-0" style="background-color: #f8f9fa;">
                                <div class="d-flex flex-start w-100">
                                    {{-- <input type="text" name="id_lesson" value="{{$lessons->id}}" > --}}
                                    <img class="rounded-circle shadow-1-strong me-3"
                                        src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(19).webp" alt="avatar"
                                        width="40" height="40" />
                                    <div class="form-outline w-100">
                                        <textarea class="form-control" name="replycmt" id="textAreaExample" rows="4" placeholder="Comment..."
                                            style="background: #fff;"></textarea>
                                        <input type=hidden name="id_lesson" value="{{ $item->id_lesson }}" />
                                    </div>

                                </div>
                                <div class="float-end mt-2 pt-1">
                                    <div class="form-group">

                                        <button type="submit">Add Comment</button>
                                    </div>
                                    <button type="button" class="btn btn-outline-primary btn-sm">Cancel</button>
                                </div>
                            </div>
                        </form>
                        @endforeach
                    </div>
                    <form action="{{ route('store') }}" method="post">
                        @csrf
                        <div class="card-footer py-3 border-0" style="background-color: #f8f9fa;">
                            <div class="d-flex flex-start w-100">
                                {{-- <input type="text" name="id_lesson" value="{{$lessons->id}}" > --}}
                                <img class="rounded-circle shadow-1-strong me-3"
                                    src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(19).webp" alt="avatar"
                                    width="40" height="40" />
                                <div class="form-outline w-100">
                                    <textarea class="form-control" name="comment" id="textAreaExample" rows="4" placeholder="Comment..."
                                        style="background: #fff;"></textarea>
                                    <input type=hidden name="id_lesson" value="{{ $lessons->id }}" />
                                </div>

                            </div>
                            <div class="float-end mt-2 pt-1">
                                <div class="form-group">

                                    <button type="submit">Add New Comment</button>
                                </div>
                                <button type="button" class="btn btn-outline-primary btn-sm">Cancel</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
