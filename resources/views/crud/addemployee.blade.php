@extends('layout.crud')

@section('title')
welcome to crud 
@endsection


@section('content')
<div class="container">
      <h1 class="text-center display-4">Add Employee Detail</h1>

      <form method="POST"  action="{{url('/savedata')}}">
          @csrf
          
      <div class="form-group">
          <label for="name">Name</label>
          <input type="text" name="name" class="form-control">
      </div>

      <div class="form-group">
          <label for="username">UserName</label>
          <input type="text" name="username" class="form-control">
      </div>

      <div class="form-group">
          <label for="email">Email</label>
          <input type="email" name="email" class="form-control">
      </div>

      <div class="form-group">
          <label for="phone">Phone</label>
          <input type="text" name="phone" class="form-control">
      </div>

      <div class="form-group">
      <label for="address">Address</label>
          <input type="text" name="address" class="form-control">
      </div>
      <div class="form-group">
    <label>Photo:</label>
    <input class="form-control" type="file" name="photo" />
    <span><p class="text-danger"></p></span>
</div>
      <!-- <label>Chose Image</label>
      <div class="custom-file">
  <input type="file" class="custom-file-input" id="customFile">
  <label class="custom-file-label" for="customFile">Choose file</label>
</div> -->

      <div class="from-group">
      <label for="department">Department</label>
  <select class="custom-select" id="inputGroupSelect04"  type="text" name="department">
    <option selected>Choose...</option>
    <option value="Information Technology" >Information Technology</option>
    <option value="Software Engneering">Software Engneering</option>
    <option value="Computer Science">Computer Science</option>
  </select>
</div>

<label class="col-md-2">Gender:</labe>
            <div class="col-md-6">
                 <input type=radio name="gender" value="Male" >Male</option>
                 <input type=radio name="gender" value="Female" >Female</option>            
            </div>

      <div class="form-group">
          <input type="submit"  class="btn btn-primary"/>
      </div> 

      </form>
    </div>

@endsection