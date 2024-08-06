{{-- <!DOCTYPE html>
<html>

<head>
    <title>Register</title>
</head>

<body>
    <h1>Register</h1>

    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div>
            <label for="firstName">First Name</label>
            <input type="text" name="firstName" id="firstName" value="{{ old('firstName') }}" required>
            @error('firstName')
                <span>{{ $message }}</span>
            @enderror
        </div>

        <div>
            <label for="lastName">Last Name</label>
            <input type="text" name="lastName" id="lastName" value="{{ old('lastName') }}" required>
            @error('lastName')
                <span>{{ $message }}</span>
            @enderror
        </div>

        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="{{ old('email') }}" required>
            @error('email')
                <span>{{ $message }}</span>
            @enderror
        </div>

        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" required>
            @error('password')
                <span>{{ $message }}</span>
            @enderror
        </div>

        <div>
            <label for="password_confirmation">Confirm Password</label>
            <input type="password" name="password_confirmation" id="password_confirmation" required>
        </div>

        <button type="submit">Register</button>
    </form>

    <a href="{{ route('login') }}" class="button">Login</a>

</body>

</html> --}}


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bright future</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <!--============ HEADER ==========-->
    <header class="header" id="header">
        <nav class="nav">
            <a href="{{ route('home') }}" class="logo">BF.</a>
            <div class="nav-menu">
                <ul class="nav-list">

                    {{-- <li class="nav-item">
                        <a href="#" class="nav__link">Create Account</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav__link active-links">Debit Request</a>
                    </li> --}}

                </ul>
            </div>
        </nav>
    </header>
    <main class="main">
        <section class="form-field">
            <div class="container">
                <div class="title">Create Account</div>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="user-details">
                        <div class="input-box">
                            <span class="details">First Name</span>
                            {{-- <input type="text" placeholder="Enter your firstname" required> --}}

                            <input type="text" name="firstName" id="firstName" value="{{ old('firstName') }}"
                                placeholder="Enter your firstname" required>
                            @error('firstName')
                                <span style="color: red">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="input-box">
                            <span class="details">Last Name</span>
                            {{-- <input type="text" placeholder="Enter your lastname" required> --}}

                            <input type="text" name="lastName" id="lastName" value="{{ old('lastName') }}"
                                placeholder="Enter your lastname" required>
                            @error('lastName')
                                <span style="color: red">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="input-box">
                            <span class="details">Email</span>
                            {{-- <input type="email" placeholder="Enter your email" required> --}}

                            <input type="email" name="email" id="email" value="{{ old('email') }}"
                                placeholder="Enter your email" required>
                            @error('email')
                            <span style="color: red">{{ $message }}</span>
                            @enderror
                        </div>
                        {{-- <div class="input-box">
                            <span class="details">Phone Number</span>
                            <input type="text" placeholder="" required>
                        </div> --}}
                        <div class="input-box">
                            <span class="details">Password</span>
                            {{-- <input type="text" placeholder="" required> --}}

                            <input type="password" name="password" id="password" placeholder="**********"  required>
                            @error('password')
                            <span style="color: red">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="input-box">
                            <span class="details">Confirm Password</span>
                            {{-- <input type="text" placeholder="" required> --}}

                            <input type="password" name="password_confirmation" id="password_confirmation" placeholder="*********" required>
                        </div>

                    </div>

                    <div class="buttons">
                        <input type="submit" value="Register" disabled>
                    </div>
                    <div class="account">
                        <p class="dont">Already have an account? <span><a href="{{ route('login') }}">Login</a></span></p>
                    </div>
                </form>
            </div>
        </section>

    </main>
</body>

</html>
