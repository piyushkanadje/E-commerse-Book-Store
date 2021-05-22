@extends('admin.admin-layout')

@section('content')
<form action="/priceupdate" method="POST">
    @csrf
    <div class="container">
        <div class="row mt-5">
           <h5>EDIT PRICE ACCORDING TO UNIVERSITY AND COURSE</h5> 
           
        </div>
        <div class="row my-2">
            
            <div class="col-md-4 col-sm-12 col-12">
                <input type="hidden" name="priceid" value="{{$data->id}}">
                <label for="university">University / Institute</label><br>
                <select name="university" class="select-inp">
                    
                    <option value="{{$data->universityName}}">{{$data->universityName}}</option> 
                    @foreach ($university as $uni )
                    <option value="{{$uni->universityName}}">{{$uni->universityName}}</option> 
                    @endforeach
                </select>
            </div>
            <div class="col-md-4 col-sm-12 col-12">
                <label for="cource">Course</label><br>
                <select name="course" class="select-inp">
                    <option value="{{$data->courseName}}" class="select-inp">{{$data->courseName}}</option>
                    @foreach ($course as $cor )
                    <option value="{{$cor->courseName}}">{{$cor->courseName}}</option> 
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row mt-5 ">
            <div class="col-md-6 col-sm-12 col-12">
                <div class="form-group">
                    <label for="price" class="">Enter Price</label>
                    <input type="number" name="price" value="{{$data->price}}" class="form-control input" aria-describedby=""
                        placeholder="Enter Price">
                    @error('price')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>
        <button id="btn-submit" onclick="return testalert();" type="submit" class="btn btn-primary">DONE</button>
    </div>
</form>


@endsection