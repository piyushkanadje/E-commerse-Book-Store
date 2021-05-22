@extends('admin.admin-layout')

@section('content')
    
<div class="container">
    <h4 class="my-3   ">QUERIES RAISE
    </h4>
    {{-- <div class="col-md-12 mb-3" style="display: flex; padding-left:0px;">                            
        <img src="/images/current.PNG" alt="" />                          
    </div> --}}
    <table class="table" id="tableDta">
        <thead>
            <th scope="col" class="table-th">USER NAME</th>
            <th scope="col" class="table-th">RAISED ON</th>
            <th scope="col" class="table-th">QUERY SUBJECT</th>
            <th scope="col" class="table-th"> QUERY DETAILS</th>
        </thead>
        <tbody>

            @foreach ($raise as $core)
                <tr>
                     <td>
                         
{{--                     
                        @foreach ($user as $uni)
                        @if ($uni->id == $user->name)
                            {{ $uni->universityName }}
                        @endif
                    @endforeach --}}
                    @foreach ($user as $users )
                    @if ($users->id == $core->userid)
                    {{ $users->name }}
                @endif
                    @endforeach
                    
                    </td>
                    <td>{{ $core->created_at}}</td>
                    <td>{{ $core->subject }}</td>
                    <td>{{ $core->message }}</td>
                </tr>
            @endforeach

        </tbody>
    </table>
    <script src="//cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready( function () {
        
        $('#tableDta').DataTable({
          "responsive": true, 
        }
          
          );
      });
    </script>
</div>



@endsection