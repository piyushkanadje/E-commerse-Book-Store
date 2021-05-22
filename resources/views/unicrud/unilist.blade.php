@extends('admin.admin-layout')

@section('content')
<div class="container">
  <h1>University List</h1>
  <div class="row">
    @if(Session::get('status'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{Session::get('status')}}
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
        @foreach($unilist as $item)
        <tr>
          <th scope="row">{{$item->id}}</th>
          <td>{{$item->universityName}}</td>
          
          {{-- <!-- <td><a href="/delete/{{$item->id}}" onclick="return confirm('Are you sure you want to delete this item?');"><i class="fa fa-trash"> </a></td> --> --}}
          {{-- <td><button data-deletelink="/delete/{{$item->id}}" onclick="deleteConfirmation({{$item->id}})" data-id="{{$item->id}}"><i class="fa fa-trash"></button></td> --}}
           
          <td><a href="/delete/{{$item->id}}" class="button" data-id="{{$item->id}}"><i class="fa fa-trash"></a></td>
          <td><a href="/edit/{{$item->id}}"><i class="fa fa-edit"> </a></td>
        </tr>
        @endforeach
    
      </tbody>
      
    </table>
  </div>
</div>




@endsection