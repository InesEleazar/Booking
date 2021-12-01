@extends('layouts.layout')

@section('content')
<head>
<script src="https://kit.fontawesome.com/3d4ab85bd2.js" crossorigin="anonymous"></script>
</head>
<form action="{{route('booking.save')}}" method="POST">
  @csrf
  <p class="container mt-5 h2">Account Information</p>
  <p class="container p2">Fill up the needed information to continue</p>
  <div class="container mt-3">
    <div class="row">
      <div class="col-sm-4 h6">
        <label for="fname">Surname</label><br>
        <input type="text" class="form-control" id="sname" name="sname" placeholder="Enter your surname"><br>
      </div>
      <div class="col-sm-4 h6">
        <label for="fname">First name</label><br>
        <input type="text" class="form-control" id="fname" name="fname"><br>
      </div>
      <div class="col-sm-4 h6">
        <label for="fname">Middle name</label><br>
        <input type="text" class="form-control" id="mname" name="mname"><br>     
      </div>
      <br>
      <div class="col-sm-4 h6">
        <label for="birthday">Birthday</label><br>
        <input type="date" class="form-control" id="birthday" name="birthday"><br>
      </div>
      <div class="col-sm-4 h6">
        <label for="age">Age:</label><br>
        <input type="number" class="form-control" id="age" name="age" min="1" max="150"><br>
      </div>
    </div>
  </div>
  <p class="container mt-3 h4">
      Address
  </p> 
  <div class="container mt-3">
    <div class="row">
      <div class="col-sm-4 h6">
        <label for="street">Street Name</label><br>
        <input type="text" class="form-control" id="street" name="street"><br>
      </div>
      <div class="col-sm-4 h6">
        <label for="city">City</label><br>
        <input type="text" class="form-control" id="city" name="city"><br>
      </div>
      <div class="col-sm-4 h6">
        <label for="code">Postal Code</label><br>
        <input type="text" class="form-control" id="code" name="code" maxlength="4" size="4"><br>       
      </div>
    </div>
  </div>
  <p class="container mt-3 h4">
      Contacts
  </p> 
  <div class="container mt-3">
    <div class="row">
      <div class="col-sm-4 h6">
        <label for="num">Telephone Number</label><br>
        <input type="number" class="form-control" id="tnum" name="tnum" maxlength="8" size="8"><br> 
      </div>
      <div class="col-sm-4 h6">
        <label for="num">Mobile Number</label><br>
        <input type="number" class="form-control" id="mnum" name="mnum" maxlength="11" size="11"><br> 
      </div>
      <div class="col-sm-4 h6">
        <label for="email">Email</label><br>
        <input type="email" class="form-control" id="email" name="email"><br>   
      </div>
    </div>
  </div>
  <p class="container mt-3 h4">
      Incase of Emergency Please Contact the following:
  </p> 
  <div class="container mt-3">
    <div class="row">
      <div class="col-sm-4 h6">
        <label for="fullname">Full name</label><br>
        <input type="text" class="form-control" id="fullname" name="fullname"><br>
      </div>
      <div class="col-sm-4 h6">
        <label for="num">Mobile Number</label><br>
        <input type="number" class="form-control" id="emergency" name="emergency"  maxlength="11" size="11"><br> 
      </div>
      <div class="col-sm-4 h6">
        <label for="relationship">Relationship</label><br>
        <input type="text" class="form-control" id="relationship" name="relationship"><br>     
      </div>
    </div>
  </div>

  
  <div class="container">
  <div class="row">
    <div class="col-sm">
     
    </div>
    <div class="col-sm">
      <div class="container mt-5">
        <div class="row justify-content-center">
          <button type="submit" class="btn btn-success  btn-block" >SUBMIT</button>
        </div>
      </div>
    </div>
    <div class="col-sm">
      <div class="container mt-5">
        <div class="row justify-content-center">
          <a href="{{route('booking.show')}}" class="btn btn-info  btn-block" >SHOW BOOKING LIST </a>
        </div>
      </div>
    </div>
    <div class="col-sm">

    </div>
  </div>
</div>
</form>
@endsection
