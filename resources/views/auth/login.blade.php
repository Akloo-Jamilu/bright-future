{{-- <!DOCTYPE html>
<html>

<head>
    <title>Login</title>
</head>

<body>
    <h1>Login</h1>

    <form method="POST" action="{{ route('login') }}">
        @csrf
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

        <button type="submit">Login</button>
    </form>

    <a href="{{ route('register') }}" class="button">Register</a>
</body>

</html>
 --}}


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
            <div class="containers">
                <div class="title">Login</div>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="user-detail">
                        <div class="input-box">
                            <span class="details">Email</span>
                            {{-- <input type="text" placeholder="Enter your firstname" required> --}}

                            <input type="email" name="email" id="email"
                                value="{{ old('email') }}"placeholder="Enter your email address" required>
                            @error('email')
                                <span style="color: red">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="input-box">
                            <span class="details">Password</span>
                            {{-- <input type="text" placeholder="" required> --}}

                            <input type="password" name="password" id="password" placeholder="*******" required>
                            @error('password')
                            <span style="color: red">{{ $message }}</span>
                            @enderror
                        </div>


                    </div>

                    <div class="buttons">
                        <input type="submit" value="Login">
                    </div>
                    <div class="account">
                        <p class="dont">Don't have an account? <span><a
                                    href="{{ route('register') }}">Register</a></span></p>
                    </div>
                </form>
            </div>
        </section>

    </main>
</body>

</html>
