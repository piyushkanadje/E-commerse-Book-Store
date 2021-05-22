@extends('admin.admin-layout')

@section('content')
    <div class="container">
        <div class="row mt-5">

        
        <div class="col-sm-6">
            <h5>EDIT COURSE
            </h5>
            <form method="post" action="/corupdate">
                @csrf
                <div class="form-group">
                    <label for="course" class="form-label">COURSE NAME</label>
                    <input type="hidden" name="id"   value="{{$data->id}}">
                    <input type="text" name="course"  value="{{$data->courseName}}" class="form-control" placeholder="Enter Name">
                    @error('course')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          
        </div>
    </div>
    

@endsection
