
@extends('layout.crud')

@section('title')
Welcome to Show 
@endsection
@section('content')



<div class="container-fluid">
  <h1 class="text-center display-4"> Show  All Employee</h1>
<div class="alert alert-info"></div>


  <table class="table">
      <tr>
          <th>ID</th>
          <th>Name</th>
          <th>UserName</th>
          <th>Email</th>
          <th>Phone</th>
          <th>Address</th>
          <th>Department</th>
          <th>Photo</th>
          <th>Gender</th>
          <th colspan="2">Action</th>
      </tr>
      @foreach($Employee as $finals)
      <tr>
          <td>{{$finals->id}}</td>
          <td>{{$finals->name}}</td>
          <td>{{$finals->username}}</td>
          <td>{{$finals->email}}</td>
          <td>{{$finals->phone}}</td>
          <td>{{$finals->address}}</td>
          <td>{{$finals->department}}</td>
          <td>{{$finals->photo}}</td>
          <td>{{$finals->gender}}</td>
         
          <td>
          <a href="{{ url('editpage/'.$finals->id) }}" class="btn btn-outline-info">Edit</a></td>
              <!-- <a href="#" class="btn btn-success btn-sm" >show</a> -->
             <td> <a href="{{url('deletepage/'.$finals->id)}}" onclick="return confirm('Are you sure to delete this item?')" class="btn btn-danger btn-sm">Delete</a>
        </td>
</tr>
@endforeach
     
  </table>
  </div>
@endsection