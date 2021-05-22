@extends('user.user-layout')


@section('content')


    <div class="raise-body img-fluid">
        <div class="container raise-container">
            <div class="card shadow">
                <div class="card-body">
                    <header class="my-5 text-center">
                        <p class="raise-head">Raise your Query here...</p>
                    </header>
                    <form action="{{ route('query.create') }}" method="POST" class="main-form">
                        @csrf
                        <div class="form-group my-3 ">
                            <label for="subject" class="text-secondary raise-label">Subject</label>
                            <input type="text" name="subject" class="raise-input inputbg" placeholder="Subject">
                            @error('subject')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        </div>
                        <div class="form-group my-3 ">
                            <label for="message" class="text-secondary raise-label">Message</label>
                            <textarea id="" name="message" class="raise-textarea inputbg"
                                placeholder="Write your message / query here.."></textarea>
                                @error('message')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group text-center">
                            <button class="btn-p btn-c btn" style="width: 30%;" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
    <hr>
    <div class="container">
        <h4 class="mt-5 ">Query History
        </h4>
        <div class="col-md-12" style="display: flex; padding-left:0px;">                            
            <img class="img-res mb-4" src="/images/current.PNG" alt="" />                          
    </div>
        <table class="table mt-5" id="tableDta">
            <thead>
                <th scope="col" class="table-th">RAISED ON</th>
                <th scope="col" class="table-th">QUERY SUBJECT</th>
                <th scope="col" class="table-th"> QUERY DETAILS</th>
            </thead>
            <tbody>

                @foreach ($userdata as $user)
                    <tr>
                        <td>{{ $user->created_at}}</td>
                        <td>{{ $user->subject }}</td>
                        <td>{{ $user->message }}</td>
                    </tr>
                @endforeach

            </tbody>
        </table>

    </div>

    <script>
        $(document).ready( function () {
            
              $('#tableDta').DataTable({
                "responsive": true, 
              }
                
                );
            });
    </script>

@stop
