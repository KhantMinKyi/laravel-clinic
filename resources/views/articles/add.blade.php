<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <style>
    label{
      font-weight:600;
    }
    .btn{
      margin-top:20px;
    }
    .header{
      text-align:center;
      font-weight:bold;
    }
    .div-sub-header{
      padding:10 0 10 0;
    }
    .sub-header{
      padding:20 20 20 0;
      font-weight:bold;
      border-top:2px solid black;
    }
  </style>
  </head>
<body>
@extends('layouts.app')
@section('content')
 <div class="container">
 @if($errors->any())
 <div class="alert alert-warning">
 <ol>
 @foreach($errors->all() as $error)
 <li>{{ $error }}</li>
 @endforeach
 </ol>
 </div>
 @endif
<H2 class="header">COVID-19 Vaccination Data</H2>
 <form method="post">
 @csrf
  <div class="row">
    <div class="form-group col-md-6">
      <label for="name">Name</label>
      <input type="text" class="form-control" id="name" placeholder="name" name="name">
    </div>
    <div class="form-group col-md-6">
      <label for="date">Date Of Birth</label>
      <input type="date" class="form-control" id="date" placeholder="date" value="YYYY MM DD" name="date_of_birth">
    </div>
  </div>
  <div class="row">
    <div class="form-group col-md-6">
      <label for="father name">Father Name</label>
      <input type="text" class="form-control" id="father name" placeholder="Father Name" name="father_name">
    </div>
    <div class="form-group col-md-6">
      <label for="Age">Age</label>
      <input type="number" class="form-control" id="Age" placeholder="age" min="1" max="100" name="Age">
    </div>
  </div>
  <div class="col-md-12">
        <label>Gender</label>
        <select class="form-select" name="Gender">
          @foreach($genders as $gender)
          <option value="{{ $gender['id'] }}">
            {{ $gender['name'] }}
          </option>
          @endforeach
        </select>
      </div>
      <div class="row">
        <div class="form-group col-md-6">
          <label for="nationality">Nationality</label>
          <input type="text" class="form-control" id="nationality" placeholder="Myanmar" name="nationality">
        </div>
        <div class="form-group col-md-6">
          <label for="phone">Phone</label>
          <input type="text" class="form-control" id="phone" placeholder="+95" name="phone">
        </div>
      </div>
      <div class="form-group col-md-12">
        <label for="address">Address</label>
        <input type="text" class="form-control" id="address" placeholder="Yangon" name="address">
      </div>
      <div class="row">
        <div class="form-group col-md-6">
          <label for="passport">Passport</label>
          <input type="text" class="form-control" id="passport" placeholder="Passport" name="passport">
        </div>
        <div class="form-group col-md-6">
          <label for="nrc">NRC</label>
          <input type="text" class="form-control" id="nrc" placeholder="NRC" name="nrc">
        </div>
      </div>
      <div class="div-sub-header">
        <h3 class="sub-header">1st Vaccination</h3>
      </div>
      <div class="row">
        <div class="form-group col-md-6">
          <label for="first_product_name">First Vaccination Name</label>
          <input type="text" class="form-control" id="first_product_name" placeholder="first vaccination name" name="first_product_name">
        </div>
        <div class="form-group col-md-6">
          <label for="first_product_no">First Vaccination Number</label>
          <input type="test" class="form-control" id="first_product_no" placeholder="first Vaccination Number" name="first_product_no">
        </div>
      </div>
      <div class="row">
        <div class="form-group col-md-6">
          <label for="first_vaccination_appointment">First Vaccination Appointment</label>
          <input type="date" class="form-control" id="first_vaccination_appointment" placeholder="first vaccination appointment" name="first_vaccination_appointment">
        </div>
        <div class="form-group col-md-6">
          <label for="first_vaccination_date">First Vaccination Date</label>
          <input type="date" class="form-control" id="first_vaccination_date" placeholder="first vaccination date" name="first_vaccination_date">
        </div>
      </div>
      <div class="row">
        <div class="form-group col-md-6">
          <label for="first_vaccinator">First Vaccinator</label>
          <input type="text" class="form-control" id="first_vaccinator" placeholder="first vaccinatior" name="first_vaccinator">
        </div>
        <div class="form-group col-md-6">
          <label for="first_vaccination_stte">First Vaccination SITE</label>
          <input type="test" class="form-control" id="first_vaccination_stte" placeholder="first vaccination stte" name="first_vaccination_stte">
        </div>
      </div>
      <div class="row">
        <div class="form-group col-md-6">
          <label for="first_remark">Remark</label>
          <input type="text" class="form-control" id="first_remark" placeholder="Remark" name="first_remark">
        </div>
      </div>
      <div class="form-check " >
        <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="first_completed">
        <label class="form-check-label" for="flexCheckDefault">
          Completed
        </label>
      </div>
      <div class="div-sub-header">
        <h3 class="sub-header">2nd Vaccination</h3>
      </div>
      <div class="row">
        <div class="form-group col-md-6">
          <label for="second_product_name">Second Vaccination Name</label>
          <input type="text" class="form-control" id="second_product_name" placeholder="second vaccination name" name="second_product_name">
        </div>
        <div class="form-group col-md-6">
          <label for="second_product_no">Second Vaccination Number</label>
          <input type="test" class="form-control" id="second_product_no" placeholder="second Vaccination Number" name="second_product_no">
        </div>
      </div>
      <div class="row">
        <div class="form-group col-md-6">
          <label for="second_vaccination_appointment">Second Vaccination Appointment</label>
          <input type="date" class="form-control" id="second_vaccination_appointment" placeholder="second vaccination appointment" name="second_vaccination_appointment">
        </div>
        <div class="form-group col-md-6">
          <label for="second_vaccination_date">Second Vaccination Date</label>
          <input type="date" class="form-control" id="second_vaccination_date" placeholder="second vaccination date" name="second_vaccination_date">
        </div>
      </div>
      <div class="row">
        <div class="form-group col-md-6">
          <label for="second_vaccinator">Second Vaccinator</label>
          <input type="text" class="form-control" id="second_vaccinator" placeholder="second vaccinatior" name="second_vaccinator">
        </div>
        <div class="form-group col-md-6">
          <label for="second_vaccination_stte">Second Vaccination SITE</label>
          <input type="test" class="form-control" id="second_vaccination_stte" placeholder="second vaccination stte" name="second_vaccination_stte">
        </div>
      </div>
      <div class="row">
        <div class="form-group col-md-6">
          <label for="second_remark">Remark</label>
          <input type="text" class="form-control" id="second_remark" placeholder="Remark" name="second_remark">
        </div>
      </div>
      <div class="form-check " >
        <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="second_completed">
        <label class="form-check-label" for="flexCheckDefault">
          Completed
        </label>
      </div>
      <div class="div-sub-header">
        <h3 class="sub-header">First Booster Vaccination</h3>
      </div>
      <div class="row">
        <div class="form-group col-md-6">
          <label for="booster_product_name">First Booster Vaccination Name</label>
          <input type="text" class="form-control" id="booster_product_name" placeholder="booster vaccination name" name="booster_product_name">
        </div>
        <div class="form-group col-md-6">
          <label for="booster_product_no">First Booster Vaccination Number</label>
          <input type="test" class="form-control" id="booster_product_no" placeholder="booster Vaccination Number" name="booster_product_no">
        </div>
      </div>
      <div class="row">
        <div class="form-group col-md-6">
          <label for="booster_vaccination_appointment">First Booster Vaccination Appointment</label>
          <input type="date" class="form-control" id="booster_vaccination_appointment" placeholder="booster vaccination appointment" name="booster_vaccination_appointment">
        </div>
        <div class="form-group col-md-6">
          <label for="booster_vaccination_date">First Booster Vaccination Date</label>
          <input type="date" class="form-control" id="booster_vaccination_date" placeholder="booster vaccination date" name="booster_vaccination_date">
        </div>
      </div>
      <div class="row">
        <div class="form-group col-md-6">
          <label for="booster_vaccinator">First Booster Vaccinator</label>
          <input type="text" class="form-control" id="booster_vaccinator" placeholder="booster vaccinatior" name="booster_vaccinator">
        </div>
        <div class="form-group col-md-6">
          <label for="booster_vaccination_stte">First Booster Vaccination SITE</label>
          <input type="test" class="form-control" id="booster_vaccination_stte" placeholder="booster vaccination stte" name="booster_vaccination_stte">
        </div>
      </div>
      <div class="row">
        <div class="form-group col-md-6">
          <label for="booster_remark">Remark</label>
          <input type="text" class="form-control" id="booster_remark" placeholder="Remark" name="booster_remark">
        </div>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="booster_completed">
        <label class="form-check-label" for="flexCheckDefault">
          Completed
        </label>
      </div>

      <div class="div-sub-header">
        <h3 class="sub-header">Second Booster Vaccination</h3>
      </div>
      <div class="row">
        <div class="form-group col-md-6">
          <label for="second_booster_product_name">Second Booster Vaccination Name</label>
          <input type="text" class="form-control" id="booster_product_name" placeholder="booster vaccination name" name="second_booster_product_name">
        </div>
        <div class="form-group col-md-6">
          <label for="second_booster_product_no">Second Booster Vaccination Number</label>
          <input type="test" class="form-control" id="booster_product_no" placeholder="booster Vaccination Number" name="second_booster_product_no">
        </div>
      </div>
      <div class="row">
        <div class="form-group col-md-6">
          <label for="second_booster_vaccination_appointment">Second Booster Vaccination Appointment</label>
          <input type="date" class="form-control" id="booster_vaccination_appointment" placeholder="booster vaccination appointment" name="second_booster_vaccination_appointment">
        </div>
        <div class="form-group col-md-6">
          <label for="second_booster_vaccination_date">Second Booster Vaccination Date</label>
          <input type="date" class="form-control" id="booster_vaccination_date" placeholder="booster vaccination date" name="second_booster_vaccination_date">
        </div>
      </div>
      <div class="row">
        <div class="form-group col-md-6">
          <label for="second_booster_vaccinator">Second Booster Vaccinator</label>
          <input type="text" class="form-control" id="booster_vaccinator" placeholder="booster vaccinatior" name="second_booster_vaccinator">
        </div>
        <div class="form-group col-md-6">
          <label for="second_booster_vaccination_stte">Second Booster Vaccination SITE</label>
          <input type="test" class="form-control" id="booster_vaccination_stte" placeholder="booster vaccination stte" name="second_booster_vaccination_stte">
        </div>
      </div>
      <div class="row">
        <div class="form-group col-md-6">
          <label for="second_booster_remark">Remark</label>
          <input type="text" class="form-control" id="booster_remark" placeholder="Remark" name="second_booster_remark">
        </div>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="second_booster_completed">
        <label class="form-check-label" for="flexCheckDefault">
          Completed
        </label>
      </div>
  <button type="submit" class="btn btn-info">Add Data</button>
</form>
 </div>
@endsection

</body>
</html>