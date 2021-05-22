@extends('admin.admin-layout')


@section('content')
     
   <div class="container mt-5">
       <h4>CONTACT PAGE INFORMATION</h4>
       <div class="row mt-5">
        <table class="table">
            <thead>

                <th scope="col" class="table-th">
                  USER NAME
                </th>
                <th scope="col" class="table-th">
                MOBILE NUMBER
                </th>
                <th scope="col" class="table-th">
                    EMAIL
                </th>
                <th scope="col" class="table-th">
                 SUBJECT
                </th>
                <th scope="col" class="table-th">
                 MESSAGE
                </th>
            </thead>

            <tbody>
                @foreach ($contact as $contact)
                <tr>
                    <td>
                        {{$contact->Coname}}                    </td>
                    <td>
             
                        {{$contact->Comobile}}                    </td>
                    <td>
                        {{$contact->Coemail}}                    </td>
                    <td>
                        {{$contact->Cosubject}}                    </td>
                    <td>
                     {{$contact->Comessage}}
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
       </div>
   </div>


@endsection