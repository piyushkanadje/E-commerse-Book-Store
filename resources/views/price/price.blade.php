@extends('admin.admin-layout')


@section('content')
<form action="{{route('price.create')}}" method="POST">
    @csrf
    <div class="container">
        <div class="row mt-5">
           <h5>ADD PRICE ACCORDING TO UNIVERSITY AND COURSE</h5> 
           
        </div>
        <div class="row my-2">
            <div class="col-md-4 col-sm-12 col-12">

                <label for="university">University / Institute</label><br>
                <select name="university" class="select-inp">
                    <option value="select-1">SELECT UNIVERSITY</option> 
                    @foreach ($university as $uni )
                    <option value="{{$uni->universityName}}">{{$uni->universityName}}</option> 
                    @endforeach
                </select>
            </div>
            <div class="col-md-4 col-sm-12 col-12">
                <label for="cource">Course</label><br>
                <select name="course" class="select-inp">
                    <option value="select-1" class="select-inp">SELECT COURSE</option>
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
                    <input type="number" name="price" class="form-control input" aria-describedby=""
                        placeholder="Enter Price">
                    @error('price')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">DONE</button>
        <a href="/university" type="submit" class="btn btn-primary">ADD UNIVERSITIES</a>
        <a href="/course" type="submit" class="btn btn-primary">ADD COURSES</a>
    </div>
</form>

<div class="container">
    <div class="row">
        <h5 class="mt-5">LIST</h5>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">University Name</th>
                <th scope="col">Course Name</th>
                <th scope="col">Price</th>
                <th scope="col">Operations</th>
           
              </tr>
            </thead>
            <tbody>
              @foreach($price as $item)
              <tr>
                <th scope="row">{{$item->id}}</th>
                <td>{{$item->universityName}}</td>
                <td>{{$item->courseName}}</td>
                <td>{{$item->price}}</td>
                
                {{-- <!-- <td><a href="/delete/{{$item->id}}" onclick="return confirm('Are you sure you want to delete this item?');"><i class="fa fa-trash"> </a></td> --> --}}
                {{-- <td><button data-deletelink="/delete/{{$item->id}}" onclick="deleteConfirmation({{$item->id}})" data-id="{{$item->id}}"><i class="fa fa-trash"></button></td> --}}
                 
                {{-- <td><a href="/pricedelete/{{$item->id}}" class="button" data-id="{{$item->id}}"><i class="fa fa-trash"></a></td> --}}
                <td><a href="/pricedelete/{{$item->id}}" class="button delete-confirm"><i class="fa fa-trash"></a></td>
                <td><a href="/priceedit/{{$item->id}}"><i class="fa fa-edit"> </a></td>
              </tr>
              @endforeach
          
            </tbody>
            
          </table>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
<script src="https://cdn.jsdelivr.net/npm/es6-promise@4/dist/es6-promise.js"></script>
<script src="https://cdn.jsdelivr.net/npm/es6-promise@4/dist/es6-promise.auto.js"></script>
<script>
    $('.delete-confirm').on('click', function (event) {
      event.preventDefault();
     const url = $(this).attr('href');
     swal({
           title: 'Are you sure?',
           text: 'This record and it`s details will be permanantly deleted!',
           icon: 'warning',
            buttons: ["Cancel", "Yes!"],
           }).then(function(value) {
           if (value) {
          window.location.href = url;
                }
      });
});


</script>
@endsection