<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Registration Form</title>
    <link rel="stylesheet" href="register.css">
    <style>
    .error {
        display: none;
        color: red;
        font-size: 12px;
        margin-top: 5px;
    }

    .error.active {
        display: block;
        border-radius: 3px;
        border-color: red;
    }
    </style>
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
</head>

<body>

    <div class="form-content">
        <form method="post" action="{{$url}}" class="form-horizontal" onsubmit="return validateForm()">
            @csrf
            @method('POST')
            <h3>{{$title}}</h3>

            <div class="textfield">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" required placeholder="Enter Your Name" value="{{$registration->name}}">
                <div class="error" id="name-error">Please enter a valid name</div>

                <label for="email">Email</label>
                <input type="email" id="email" name="email" required placeholder="Enter Your Email" value="{{$registration->email}}">
                <div class="error" id="email-error">Please enter a valid email address</div>

                <label for="contact">Contact No</label>
                <input type="tel" id="contact" name="contact" required placeholder="Enter Your Phone Number" maxlength="10" value="{{$registration->contact}}">
                <div class="error" id="contact-error">Please enter a valid phone number</div>

                <label for="dob">Date of birth</label>
                <input type="date" id="dob" name="dob" required value="{{$registration->dob}}">
                <div class="error" id="dob-error">Date of birth should be greater than 14.</div>

                <label for="password">Password</label>
                <input type="password" id="password" name="password" required placeholder="Use at least 8 characters with special characters and numbers" minlength="8" maxlength="16" value="{{$registration->password}}">
                <div class="error" id="password-error">Use at least 8 characters with special characters like @, !, or #, and numbers like 1, 2, or 3</div>

                {{-- <label for="repassword">Repassword</label>
                <input type="password" id="repassword" name="repassword" required placeholder="Confirm your password" minlength="8" maxlength="16">
                <div class="error" id="repassword-error">Password and Repassword don't match.</div> --}}

                <label for="role">Role</label>
                <select name="role" id="role" class="roles" required>
                    <option value="student" {{ $registration->role == 'student' ? 'selected' : '' }}>Student</option>
                    <option value="teacher" {{ $registration->role == 'teacher' ? 'selected' : '' }}>Teacher</option>
                    <!-- <option value="admin" {{ $registration->role == 'admin' ? 'selected' : '' }}>Admin</option> -->
                </select>
            </div>
            <input type="submit" name="submit" value="Submit" class="form-button">
        </form>
        <p class="register">Already have an account? <a href="{{route('reg.login')}}">Login</a></p>
    </div>


    <script src="{{ asset('js/script.js') }}"></script>


    <script>
    // Function to allow only numbers in the "Contact No" field
    document.getElementById("contact").addEventListener("input", function(event) {
        const input = event.target;
        input.value = input.value.replace(/\D/g, ''); // Remove non-numeric characters
    });

    // Function to allow only letters and spaces in the "Name" field
    document.getElementById("name").addEventListener("input", function(event) {
        const input = event.target;
        input.value = input.value.replace(/[^A-Za-z\s]/g, ''); // Remove non-letter characters
    });
    </script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>

</html>
