@extends('admin.admin-layout')



@section('content')
    <div class="container mt-5 ">
        <div class=" justify-content-center text-center">
            <h4  >Manage FAQ's</h4>
        </div>
        
        <div class="row justify-content-center">

            <form method="post" action=" {{ route('faq.create') }}">
                @csrf
                <div class="form-group">
                    <label for="title"></label>
                    <input style="width:500px" type="text" class="form-control" name="title" placeholder="Enter Faq Title">
                    @error('title')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="description"></label>
                    <input type="text" style="width:500px"  class="form-control" name="description" placeholder="Enter Faq Description">
                    @error('description')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="justify-content-center text-center">
                    <button type="submit" class="btn btn-p btn-c ">Submit</button>
                </div>
              
            </form>

        </div>
    </div>
    <div class="container">
        <h5 class="mt-5">FAQ'S List</h5>
        <div class="row">
            @if (Session::get('status'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ Session::get('status') }}
                    <!-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">Ok</button> -->
                </div>

            @endif
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Faq Title </th>
                        <th scope="col">Faq Description </th>
                        <th scope="col">Operations</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($unilist as $item)
                        <tr>
                            <th scope="row">{{ $item->id }}</th>
                            <td>{{ $item->faqtitle }}</td>
                            <td>{{ $item->faqdescription }}</td>

                            {{--
                            <!-- <td><a href="/delete/{{ $item->id }}" onclick="return confirm('Are you sure you want to delete this item?');"><i class="fa fa-trash"> </a></td> -->
                            --}}
                            {{-- <td><button data-deletelink="/delete/{{ $item->id }}"
                                    onclick="deleteConfirmation({{ $item->id }})" data-id="{{ $item->id }}"><i
                                        class="fa fa-trash"></button></td> --}}
                            {{--
                            <td><a href="/unidelete/{{ $item->id }}" class="button" data-id="{{ $item->id }}"><i
                                        class="fa fa-trash"></a></td> --}}
                        <td><a href="/faqdelete/{{$item->id}}" class="button delete-confirm"><i class="fa fa-trash"></a></td>
                          
                        <td><a href="/faqedit/{{ $item->id }}"><i class="fa fa-edit"> </a></td>
                        </tr>
                    @endforeach

                </tbody>

            </table>
        </div>

    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/es6-promise@4/dist/es6-promise.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/es6-promise@4/dist/es6-promise.auto.js"></script>
    {{-- <script type="text/javascript">
        function deleteConfirmation(id) {
          console.log('hello......' + "http://127.0.0.1:8000/cordelete" + id)
          Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
    
                    if (result.value) {
                            $.ajax({
                    url:"http://127.0.0.1:8000/cordelete/"+id,    //the page containing php script
                    type: "get",    //request type,
                    // dataType: 'json',
                    // data: {registration: "success", name: "xyz", email: "abc@gmail.com"},
                    success:function(result){
                      location.reload();
                    }
                });
    
                    }
                })
        } --}}
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
