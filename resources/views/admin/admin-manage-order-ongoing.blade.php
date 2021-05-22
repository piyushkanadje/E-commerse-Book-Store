@extends('admin.admin-layout')

@section('content')
<div class="container">
    <h2 class="my-3 ">Manage Orders</h2>
    <div class="navigation-admin mt-2">
        <span class="mr-3">
            <a href="/admin-manage-order-current" class="nav-li">Received</a>
        </span>
        <span class="mr-3">
            <a href="/admin-manage-order-ongoing" class="nav-li activeli">Inprogress</a>
        </span>
        <span class="mr-2">
            <a href="/admin-manage-order-completed" class="nav-li">Completed</a>
        </span>
        <div class="col-md-12" style="display: flex; padding-left:0px;">                            
            <img src="/images/ongoing.PNG" alt="" />                          
        </div>
    </div>

    <!-- <nav class="navigation-admin">
        <ul class="nav nav-l navbar-nav">
            <li class="nav-item nav-li ">
                <a href="" class="nav-link">Current</a>
            </li>
            <li class="nav-item nav-li">
                <a href="" class="nav-link">Ongoing</a>
            </li>
            <li class="nav-item nav-li">
                <a href="" class="nav-link">Completed</a>
            </li>
        </ul>
    </nav> -->
</div>
<div class="container my-3">
    <table class="table" id="tableDta">
        <thead>
         
                <th scope="col" class="table-th">
                ORDERED ON 
                </th>
                <th scope="col" class="table-th">
                ORDER NUMBER 
                </th>
                <th scope="col" class="table-th">
                ORDER BY 
                </th>
                <th scope="col" class="table-th">
                EMAIL
                </th>
                <th scope="col" class="table-th">
                TOTAL AMOUNT
                </th>
                <th class="table-th">
                    TRANSIT STATUS
                </th>
          

        </thead>

        <tbody>
            @foreach ($apply as $user)

            @if ($user->status=="Inprogess")
            <tr>
                <td>
                    {{ $user->created_at }}
                </td>
                <td>
         
                    {{$user->userid}}
                </td>
                <td>
                    {{ $user->name }}
                </td>
                <td>
                    {{ $user->email }}
                </td>
                <td>
                 {{ $user->price }}
                </td>
                <td>
                    <select name="status" id="status-{{$user->id}}" class="statusId" data-statusId="{{$user->id}}">
                        {{-- <option  value="Status Pending" >Status Pending</option> --}}
                        <option value="Received">Received</option>
                        <option value="Inprogess" selected>Inprogress</option>
                        <option value="Completed">Completed</option>
                      </select>
                </td>
            </tr>
                
            @endif
           
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
      
      $(".statusId").on("change", function(event) {
            
            $id=$(this).attr('id');
            $status = $('#'+$id).val();
            
        console.log("Status Changed---" + $status );
            $statusId=$(this).attr("data-statusId");
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: "/updateStatus",
                method: 'POST',
                data: {
                    "_token": "{{ csrf_token() }}",
                    'status': $status,
                    'statusId': $statusId,

                },
                success: function(data, status, xhr) {
                    // console.log("XHRData---" + JSON.stringify(data));

                    if (xhr.status == 250) {
                        alert(xhr.responseText);
                    }
                    if (xhr.status == 200) {
                       
                        location.reload();

                    }
                   
                }
            });

        });
</script>


@stop