@extends('admin.admin-layout')

@section('content')
    <div class="container">
        <div class="row mt-5">

        
        <div class="col-sm-6">
            <h5>EDIT UNIVERSITY
            </h5>
            <form method="post" action="/universityupdate">
                @csrf
                <div class="form-group">
                    <label for="university" class="form-label">UNIVERSITY NAME</label>
                    <input type="hidden" name="id"   value="{{$data->id}}">
                    <input type="text" name="university"  value="{{$data->universityName}}" class="form-control" placeholder="Enter Name">
                    @error('university')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                </div>
                <button type="submit" class="btn btn-p btn-c">Submit</button>
            </form>
          
        </div>
    </div>
    

@endsection
