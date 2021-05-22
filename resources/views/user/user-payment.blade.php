@extends('user.user-layout')


@section('content')


<div class="container">
   
        <h2 class="my-3 titleu">Payments
        </h2>
        <table class="table dt-responsive" id="tableDta">
            <thead>
                <th scope="col" class="table-th">PAYMENT ON</th>
                <th scope="col" class="table-th">TRANSCRIPT DETAILS</th>
                <th scope="col" class="table-th">PAYEMENT MODE </th>
                <th scope="col" class="table-th">TOTAL AMOUNT </th>
                <th scope="col" class="table-th">PAYMENT STATUS </th>
            </thead>
            <tbody>
                <tr>
                    <td>
                        15.12.2020
                    </td>
                    <td>Sample University Name
                    </td>
                    <td>
                        Gpay</td>
                    <td>
                        ₹ 9000.00 </td>
                    <td>
                        COMPLETED</td>
                </tr>
                <tr>
                    <td>
                        15.12.2020
                    </td>
                    <td>Sample University Name
                    </td>
                    <td>
                        Gpay</td>
                    <td>
                        ₹ 9000.00 </td>
                    <td>
                        COMPLETED</td>
                </tr>
                <tr>
                    <td>
                        15.12.2020
                    </td>
                    <td>Sample University Name
                    </td>
                    <td>
                        Gpay</td>
                    <td>
                        ₹ 9000.00 </td>
                    <td>
                        COMPLETED</td>
                </tr>
                <tr>
                    <td>
                        15.12.2020
                    </td>
                    <td>Sample University Name
                    </td>
                    <td>
                        Gpay</td>
                    <td>
                        ₹ 9000.00 </td>
                    <td>
                        COMPLETED</td>
                </tr>
                
            </tbody>
        </table>

    
</div>
{{-- <script src="//cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script> --}}
<script>
    $(document).ready( function () {
        
          $('#tableDta').DataTable({
            "responsive": true, 
          }
            
            );
        });
</script>




@stop