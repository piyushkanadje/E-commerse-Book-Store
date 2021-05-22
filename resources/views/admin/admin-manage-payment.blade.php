@extends('admin.admin-layout')

@section('content')
{{-- <style>
    #tableDta_wrapper{
        width: 100%;
    }
</style> --}}

<div class="container">

    <div class="row my-5">
        <div class="col-md-6 col-sm-12 col-12">
            <h2 class=" my-3">
                Manage Payments
            </h2>
            {{-- <form class="example" action="action_page.php">
                <img src="/images/mask.jpg" class="icon-img" alt="">
                <input type="search" class="input-field" placeholder="Search.." name="search">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form> --}}

        </div>
        <div class="col-md-6 col-sm-12 col-12 btn-c">
            <p class="pay ">
                
                    Total <br>
                    Payment
            
            </p>
        </div>
    </div>

    <div class="row my-5">
        <table class="table dataTable" id="tableDta">
            <thead>
                <th scope="col" class="table-th">PAYMENT DATE </th>
                <th scope="col" class="table-th">USERNAME </th>
                <th scope="col" class="table-th">UNIVERSITY / INSTITUTE</th>
                <th scope="col" class="table-th">TOTAL AMOUNT</th>
            </thead>
            <tbody>
                <tr>
                    <td>15.12.2020 </td>
                    <td>Sample Username </td>
                    <td>Sample University Name </td>
                    <td>₹ 9000.00</td>
                </tr>
                <tr>
                    <td>15.12.2020 </td>
                    <td>Sample Username </td>
                    <td>Sample University Name </td>
                    <td>₹ 9000.00</td>
                </tr>
                <tr>
                    <td>15.12.2020 </td>
                    <td>Sample Username </td>
                    <td>Sample University Name </td>
                    <td>₹ 9000.00</td>
                </tr>
                <tr>
                    <td>15.12.2020 </td>
                    <td>Sample Username </td>
                    <td>Sample University Name </td>
                    <td>₹ 9000.00</td>
                </tr>
                <tr>
                    <td>15.12.2020 </td>
                    <td>Sample Username </td>
                    <td>Sample University Name </td>
                    <td>₹ 9000.00</td>
                </tr>
                <tr>
                    <td>15.12.2020 </td>
                    <td>Sample Username </td>
                    <td>Sample University Name </td>
                    <td>₹ 9000.00</td>
                </tr>
                <tr>
                    <td>15.12.2020 </td>
                    <td>Sample Username </td>
                    <td>Sample University Name </td>
                    <td>₹ 9000.00</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

{{-- <script src="//cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script> --}}
<script>
//     $(document).ready( function () {
// $('#tableDta').DataTable();
// "responsive": true,
// } );
$(document).ready( function () {
        
        $('#tableDta').DataTable({
          "responsive": true, 
        }
          
          );
      });
</script>


@stop