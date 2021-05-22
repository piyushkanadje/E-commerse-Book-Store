@extends('admin.admin-layout')

@section('content')
<div class="container">
    <h2 class="my-3 ">Manage Users</h2>
    <table class="table my-5" id="tableDta">
        <thead>
            <th scope="col" class="table-th">
                REGISTER ON DATE / TIME
            </th>
            <th scope="col"class="table-th">
                USENAME
            </th>
            <th scope="col"class="table-th">
                EMAIL ID
            </th>
        </thead>
        <tbody>
            @foreach ($user as $user )
                

            <tr>
                <td>
               {{$user->created_at}}
                </td>
                <td>
          {{$user->name}}
                </td>
                <td>
             {{$user->email}}
                </td>
            </tr>
            @endforeach   

        </tbody>
    </table>
</div>
<script src="//cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>\
<script>
   $(document).ready( function () {
        
        $('#tableDta').DataTable({
          "responsive": true, 
        }
          
          );
      });
</script>

@stop