<!DOCTYPE html>

<html lang="en">

<head>

  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Employees</title>

  <link rel="stylesheet" href="{{ asset('css/styleemp.css') }}">

</head>

<body>



<div class="container">

  <h1>Employee</h1>



  <form action="/employeeview" method="POST" class="employee-form">

    @csrf

    

    <div class="form-group">

      <label for="name123">First Name:</label>

      <input type="text" id="name" name="f_name">

    </div>

        <div class="form-group">

      <label for="name123">Last Name:</label>

      <input type="text" id="name" name="l_name">

    </div>

        <div class="form-group">

      <label for="name123">Job:</label>

      <input type="text" id="name" name="j_job">

    </div>

    <div class="form-group">

      <label for="price123">Salary:</label>

      <input type="text" id="price" name="s_salary">

    </div>

    

    <button type="submit" class="btn-submit">Save</button>

  </form>



  <hr>



  <table class="employee-table">

    <thead>

      <tr>

        <th>ID</th>

        <th>First Name</th>

        <th>Last Name</th>

        <th>Job</th>

        <th>Salary</th>

      </tr>

    </thead>

    <tbody>

      @foreach($emps as $emp)

      <tr>

        <td>{{ $emp->id }}</td>

        <td>{{ $emp->first_name }}</td>

        <td>{{ $emp->last_name }}</td>

        <td>{{ $emp->job }}</td>

        <td>{{ $emp->salary }}</td>

      </tr>

      @endforeach

    </tbody>

  </table>

</div>



</body>

</html>