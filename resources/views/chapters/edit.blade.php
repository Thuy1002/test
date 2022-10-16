@extends('layouts.admin.master')
@section('title', 'khóa học')
@section('title-heading', 'Chỉnh sửa Chương học')
@section('content')

    <form action="{{route('chapters.update',$chapters->id)}}" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="_method" value="PUT">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">title</label>

            <input type="text" class="form-control" name="title"
                value="{{ isset($chapters) ? $chapters->title : old('title') }}">

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">order </label>
            <input type="text" name="order" class="form-control"
                value="{{ isset($chapters) ? $chapters->content : old('content') }}">

        </div>
        <div class="form-group">
            <label for="">Tên Khóa học</label>

            <select style="width: 160px;" name="id_courses" id="" class="form-control" required="required">
                <option value=" {{-- {{DB::table('danh_muc')->where('id','=',$objitem_sp->id_danhmuc)->first()->ten_danhmuc}} --}}">Khóa học</option> 
                @foreach ($courses as $d)
                    <option {{ $d->id == $chapters->id_courses?'selected':''}}  value="{{ $d->id }}">{{ $d->title }}</option>
                @endforeach
            </select>
        </div>
       
        
      
        <div class="form-group">
            <label for="">Status</label>
            <input type="radio" name="status" value="1"
                {{ isset($chapters) && $chapters->status == 1 ? 'checked' : '' }}>Hiện
            <input type="radio" name="status" value="0" {{ isset($chapters) && $chapters->status == 0 ? 'checked' : '' }}>Ẩn
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
