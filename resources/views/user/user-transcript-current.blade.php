@extends('user.user-layout')

@section('content')
<div class="container">
   {{-- {{ dd($userdata)}} --}}
    <h2 class="my-3 titleu">Transcript Orders</h2>
    
    <div class="navigation-admin mt-2">
        <span class="mr-2 ">
            <a href="/user-transcript-current " class="nav-li activeli  " style="font-size:25px;">Current</a>
            
        </span>
        <span class="ml-5">
            <a href="/user-transcript-previous" class="nav-li "  style="font-size:25px;">Previous</a>
        </span>
        <div class="col-md-12 mb-4" style="display: flex; padding-left:0px;">                            
            <img class="img-res" src="/images/capture.PNG" alt="" />                          
    </div>
    </div>
    <table class="table" id="tableDta">
        <thead>
            <th scope="col " class="table-th">
                ORDERED ON
            </th>
            <th scope="col " class="table-th">
                UNIVERSITY/INSTITUTE
            </th>
            
            <th scope="col " class="table-th">
                COURSE
            </th>
            <th scope="col " class="table-th">
                PASSING YEAR
            </th>
            <th scope="col " class="table-th">
                NO OF SETS
            </th>
            <th scope="col " class="table-th">
            PRICE
            </th>
        </thead>
        <tbody>
            @foreach ($userdata as $user )
            <tr>
                <td>{{$user->created_at}}</td>
                <td>@foreach ($university as $uni)
                    @if ($uni->id == $user->university)
                        {{ $uni->universityName }}
                    @endif
                @endforeach</td>
                <td>{{$user->course}}</td>
                <td>{{$user->passing}}</td>
                <td>{{$user->sets}}</td>
                <td>{{$user->price}}</td>
            </tr> 
            @endforeach
        </tbody>

    </table>
    

</div>
<script src="//cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready( function () {
        $('#tableDta').DataTable({
            "responsive": true, 
          }
            
            );

} );
</script>



@stop