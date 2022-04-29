@extends('layout.crud')

@section('content')
<div class="container">
      <h1 class="text-center display-4">Edit Employee Detail</h1>

      <form method="POST"  action="{{url('updatestudent/'.$employee->id)}}">
          @csrf
          
      <div class="form-group">
          <label for="name">Name</label>
          <input type="text" name="name" value="{{$employee->name}}" class="form-control">
      </div>

      <div class="form-group">
          <label for="username">UserName</label>
          <input type="text" name="username" value="{{$employee->username}}" class="form-control">
      </div>

      <div class="form-group">
          <label for="email">Email</label>
          <input type="email" name="email" value="{{$employee->email}}" class="form-control">
      </div>

      <div class="form-group">
          <label for="phone">Phone</label>
          <input type="text" name="phone" value="{{$employee->phone}}" class="form-control">
      </div>

      <div class="form-group">
          <label for="address">Address</label>
          <input type="text" name="address" value="{{$employee->address}}" class="form-control">
      </div>
      <div class="from-group">
      <label for="department">Department</label>
  <select class="custom-select" id="inputGroupSelect04" name="department" >
    <option selected>Choose...</option>
    <option value="Information Technology" {{ $employee->department == 'Information Technology' ? 'selected' : '' }}>Information Technology</option>
    <option value="Software Engneering" {{ $employee->department == 'Software Engneering' ? 'selected' : '' }}>Software Engneering</option>
    <option value="Computer Science" {{ $employee->department == 'Computer Science' ? 'selected' : '' }}>Computer Science</option>
  </select>
</div>
<label class="form-check" >Gender:</label>
            <div class="">
             <input type="radio" name="gender"  value="Male" {{ $employee->gender == 'Male' ? 'checked' : ''}} > male<br>
             <input type="radio" name="gender"value="Female"    {{ $employee->gender == 'Female' ? 'checked' : ''}}  > female<br>              
            </div>
      <div class="form-group">
          <input type="submit"  class="btn btn-primary"/>
      </div> 

      </form>
    </div>

<!-- <div class="container">
<h1 class="text-center display-3">Edit  Detail</h1>
<form method="post" action="">
    @csrf
    @method('put')
    
    <div class="form-group">
    <label>Enter Edit Name</label>
    <input class="form-control" type="text" value="" name="title" />
</div>

<div class="form-group">
    <label>Enter Edit Name</label>
    <input class="form-control" type="text" value="" name="title" />
</div>

    <input type="submit" value="Save Data" />
</div>
</form>
</div>  -->
@endsection