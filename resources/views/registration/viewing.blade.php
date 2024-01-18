<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
      /* Custom CSS styles */
      body {
        margin: 20px;
      }

      .custom-table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
      }

      .custom-table th, .custom-table td {
        border: 1px solid black;
        padding: 8px;
        text-align: left;
      }

      .custom-table th {
        background-color: #007bff; /* Bootstrap primary color */
        color: #fff;
      }
    </style>
  </head>
  <body>
    <div>
      <table class="custom-table">
        <tr>
          <th>id</th>
          <th>name</th>
          <th>email</th>
          <th>contact</th>
          <th>date of birth</th>
          <th>password</th>
          <th>role</th>
          <th>Action</th>
        </tr>
        @foreach ($registrations as $registration )
        <tr>
          <td>{{ $registration ->id}}</td>
          <td>{{ $registration ->name}}</td>
          <td>{{ $registration ->email}}</td>
          <td>{{ $registration ->contact}}</td>
          <td>{{ $registration ->dob}}</td>
          <td>{{ $registration ->password}}</td>
          <td>{{ $registration ->role}}</td>
          <td align="center">
            <a href="{{url('/registration/delete/')}}/{{$registration->id}}">
                <button class="btn btn-danger">Delete</button>
            </a>
            <a href="{{route('red.edit',['id' =>$registration->id])}}">
                <button class="btn btn-primary">Edit</button>
            </a>
          </td>
        </tr>
        @endforeach
      </table>
    </div>
  </body>
</html>
