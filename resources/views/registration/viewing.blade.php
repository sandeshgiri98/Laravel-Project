<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <style>   {
        height: 125vh;
        margin-top: 80px;
        padding: 30px;
        background-size: cover;
        font-family: sans-serif;
        }
        header {
        background-color: orange;
        position: fixed;
        left: 0;
        right: 0;
        top: 5px;
        height: 30px;
        display: flex;
        align-items: center;
        box-shadow: 0 0 25px 0 black;
        }
        header * {
        display: inline;
        }
        header li {
        margin: 20px;
        }
        header li a {
        color: blue;
        text-decoration: none;
        }
        </style>

        <header>
        <nav>
        <ul>
        <li>
        <a href="{{'/'}}"> Home </a>
        </li>
        <li>
        <a href="{{'/registration/register'}}"> Register </a>
        </li>
        <li>
        <a href="{{'/product/create'}}"> Create Form </a>
        </li>
        <li> <a href="{{'/registration/login'}}"> Login </a>
        </li>
        <li>
        <a href="{{'/viewing'}}"> View Data </a>
        </li>
        </ul>
        </nav>
      <div>
        <table border="1px solid black">
            <tr>
                <th>name</th>
                <th>email</th>
                <th>contact</th>
                <th>date of birth</th>
                <th>password</th>
                <th>role</th>
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
            </tr>

            @endforeach
        </table>
      </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
