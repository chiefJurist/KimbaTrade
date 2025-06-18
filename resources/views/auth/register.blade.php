<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body>
    <div>
        <form action="" method="POST">
            @csrf

            <div>Create an Account</div>
            <div>Sign up with your email and get started</div>

            <div>Registration</div>

            <div>
                <div>
                    <input type="text" name="firstname" value="{{ old('name') }}" required placeholder="First Name">
                </div>
                <div>
                    <input type="text" name="lastname" value="{{ old('name') }}" required placeholder="Last Name">
                </div>
            </div>
            
            <div>
                <input type="email" name="email" value="{{ old('email') }}" required placeholder="Email address">
            </div>

            <div>
                <div>
                    <select id="countrySelect" name="country" required>
                        <option value="" disabled selected>Select your country</option>
                    </select>
                </div>
                <div>
                    <input type="tel" name="phone" id="phone-number" placeholder="phone number">
                </div>
            </div>

            <div>
                <div>
                    <select name="gender" id="gender" required>
                        <option value="" disabled selected>Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="others">Others</option>
                    </select>
                </div>
                <div>
                    <input type="text" name="address" placeholder="address">
                </div>
            </div>

            <div>
                <div>
                    <input type="password" name="password" required placeholder="Password">
                </div>
                <div>
                    <input type="password" name="password_confirmation" required placeholder="Confirm Password">
                </div>
            </div>
            
            <button type="submit" class="btn mt-4">Register</button>

            <!-- validate errors (Laravel automatically returns this if there were errors in the controller validation) -->
            @if($errors->any())
                <ul class="px-4 py-2 bg-red-100">
                    @foreach($errors->all() as $error)
                        <li class="my-2 text-red-500">{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
        </form>
    </div>
</body>
</html>