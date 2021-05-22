@extends('admin.admin-layout')

@section('content')
    <div class="container">
        <div class="row">


            <div class="col-sm-6">
                <h5 class="mt-5">ADD UNIVERSITY
                </h5>
                <form method="post" action="{{ route('uni.create') }}">
                    @csrf
                    <div class="form-group">
                        <label for="university" class="form-label">UNIVERSITY NAME</label>
                        <input type="text" name="university" class="form-control" placeholder="Enter Name">
                        @error('university')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-p btn-c">Submit</button>
                </form>


            </div>
        </div>

        <h5 class="mt-5">University List</h5>
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
                        <th scope="col">University Name</th>
                        <th scope="col">Operations</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($unilist as $item)
                        <tr>
                            <th scope="row">{{ $item->id }}</th>
                            <td>{{ $item->universityName }}</td>

                            {{-- <!-- <td><a href="/delete/{{ $item->id }}" onclick="return confirm('Are you sure you want to delete this item?');"><i class="fa fa-trash"> </a></td> --> --}}
                            {{-- <td><button data-deletelink="/delete/{{ $item->id }}"
                                    onclick="deleteConfirmation({{ $item->id }})" data-id="{{ $item->id }}"><i
                                        class="fa fa-trash"></button></td> --}}
                            {{-- <td><a href="/unidelete/{{ $item->id }}" class="button" data-id="{{ $item->id }}"><i
                                        class="fa fa-trash"></a></td> --}}
                            <td><a href="/unidelete/{{ $item->id }}" class="button delete-confirm"><i
                                        class="fa fa-trash"></a></td>
                            <td><a href="/uniedit/{{ $item->id }}"><i class="fa fa-edit"> </a></td>
                        </tr>
                    @endforeach

                </tbody>

            </table>
        </div>
    </div>

    <script>
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
