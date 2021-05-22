@extends('admin.admin-layout')

@section('content')
    {{-- <div class="container">
        <div class="row">


            <div class="col-sm-6">
                <h5  class="mt-5">Add Course
                </h5>
                <form method="post" action="{{ route('cor.create') }}">
                    @csrf
                    <div class="col-md-4 col-sm-12 col-12">

                        <label for="university">University / Institute</label><br>
                        <select name="university" class="select-inp">
                            <option value="select-1">SELECT UNIVERSITY</option> 
                            {{-- @foreach ($university as $uni)
                            <option value="{{$uni->universityName}}">{{$uni->universityName}}</option> 
                            @endforeach --}}
    {{-- </select>
                    </div>
                    <div class="form-group ">
                        <label for="course" class="form-label">Course NAME</label>
                        <input type="text" name="course" class="form-control" placeholder="Enter Name">
                        @error('course')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>


            </div>
        </div> --}}
    <form action="{{ route('cor.create') }}" method="POST">
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
                        @foreach ($university as $uni)
                            <option value="{{ $uni->id }}">{{ $uni->universityName }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-4 col-sm-12 col-12">
                    <div class="form-group ">
                        <label for="course" class="form-label">Course NAME</label>
                        <input type="text" name="course" class="form-control" placeholder="Enter Name">
                        @error('course')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
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
            <button type="submit" class="btn btn-p btn-c ">DONE</button>
            <a href="/university" type="submit" class="btn btn-p btn-c  " style="width:200px;">ADD UNIVERSITIES</a>
        </div>
    </form>

    <div class="container">


        <h5 class="mt-5">Course List</h5>
        <div class="row">
            @if (Session::get('status'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ Session::get('status') }}
                    <!-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">Ok</button> -->
                </div>
            @endif
            <table class="table"   id="tableDta">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">university Name</th>
                        <th scope="col">Course Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Operations</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($corlist as $item)
                        <tr>
                            <th scope="row">{{ $item->id }}</th>
                            <td>
                                @foreach ($university as $uni )
                                @if ($uni->id == $item->university_id)
                                {{ $uni->universityName }}
                            @endif
                                @endforeach
                            
                            
                            
                            </td>
                            <td>{{ $item->courseName }}</td>
                            <td>{{ $item->price }}</td>
                            <td><a href="/cordelete/{{ $item->id }}" class="button delete-confirm"><i
                                        class="fa fa-trash"></a></td>
                            <td><a href="/coredit/{{ $item->id }}"><i class="fa fa-edit"> </a></td>
                        </tr>
                    @endforeach

                </tbody>

            </table>
        </div>
    </div>
    <script>
         $(document).ready( function () {
        
        $('#tableDta').DataTable({
          "responsive": true, 
        }
          
          );
      });
        $('.delete-confirm').on('click', function(event) {
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
