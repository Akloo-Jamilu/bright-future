{{-- <!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <style>
        body {
            display: flex;
            font-family: Arial, sans-serif;
        }
        .sidebar {
            width: 200px;
            background-color: #f4f4f4;
            padding: 20px;
            box-shadow: 2px 0 5px rgba(0,0,0,0.1);
        }
        .sidebar a {
            display: block;
            padding: 10px;
            margin: 10px 0;
            color: #333;
            text-decoration: none;
            background-color: #007bff;
            color: white;
            border-radius: 5px;
            text-align: center;
        }
        .sidebar a:hover {
            background-color: #0056b3;
        }
        .content {
            flex: 1;
            padding: 20px;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
        .header h1 {
            margin: 0;
        }
        .header .logout-button {
            background-color: #ff4b4b;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <a href="#" class="nav-link" data-url="{{ route('homeContent') }}">Home</a>
        <a href="#" class="nav-link" data-url="{{ route('createBusinessContent') }}">Create Business</a>
        <a href="#" class="nav-link" data-url="{{ route('debitRequestContent') }}">Debit Request</a>
    </div>
    <div class="content">
        <div class="header">
            <h1>Dashboard</h1>
            <div>
                Logged in as: {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: inline;">
                    @csrf
                    <button type="submit" class="logout-button">Logout</button>
                </form>
            </div>
        </div>
        <div id="content-area">
            @php
                $currentHour = now()->hour;
                $timeOfDay = 'morning';
                if ($currentHour >= 12 && $currentHour < 18) {
                    $timeOfDay = 'afternoon';
                } elseif ($currentHour >= 18) {
                    $timeOfDay = 'evening';
                }
            @endphp
            <p>Hello, {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}! Good {{ $timeOfDay }}.</p>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.nav-link').click(function(e) {
                e.preventDefault();
                var url = $(this).data('url');
                $('#content-area').load(url);
            });
        });
    </script>
</body>
</html> --}}


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
    rel="stylesheet"
  />
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet"
  />
  <link
    rel="stylesheet"
    href="https://unicons.iconscout.com/release/v4.0.8/css/line.css"
  />
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
 <div class="parle">
    <div class="sidebar">
        <div class="logos">BF.</div>
        <ul class="menu">
            <li class="{{ request()->routeIs('dashboard') ? 'act' : '' }}">
                <a href="{{ route('dashboard') }}">
                    <i class="fas fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="{{ request()->routeIs('createAccount') ? 'act' : '' }}">
                <a href="{{ route('createAccount') }}">
                    <i class="fas fa-user"></i>
                    <span>Create Account</span>
                </a>
            </li>
            <li class="{{ request()->routeIs('debitRequest') ? 'act' : '' }}">
                <a href="{{ route('debitRequest') }}">
                    <i class="fas fa-chart-bar"></i>
                    <span>Debit Request</span>
                </a>
            </li>
            <li class="logout">
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: inline;">
                    @csrf
                    <i class="fas fa-sign-out-alt"></i>
                    <button type="submit" class="logout-button">Logout</button>
                </form>

               
            </li>
        </ul>
    </div>
    <div class="main--content">
        <div class="header--wrapper">
            <div class="header--title">
                <span>Primary</span>
                <h4>Dashboard</h4>
            </div>
            <div class="user--info">
              <div class="search--box">
                  <i class="fa-solid fa-search"></i>
                  <input type="text" placeholder="Search">
              </div>
              <img src="./assets/istockphoto-950608328-612x612 1.png" alt="">
            </div>
        </div>

        <div class="card--container">
            <div id="content-area">
                @php
                    $currentHour = now()->hour;
                    $timeOfDay = 'morning';
                    if ($currentHour >= 12 && $currentHour < 18) {
                        $timeOfDay = 'afternoon';
                    } elseif ($currentHour >= 18) {
                        $timeOfDay = 'evening';
                    }
                @endphp
                <h4><p>Hello, {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}! Good {{ $timeOfDay }}.</p></h4>
                <br>
                <br>
            </div>
            <div class="card--wrapper">
                <div class="payment--card">
                    <div class="card--header">
                        <div class="amount">
                            <span class="tit">
                                Payment amount
                            </span>
                            <span class="amount--value">$500.00</span>
                        </div>
                        <i class="fas fa-dollar-sign icon"></i>
                    </div>
                    <span class="card-detail">**** **** **** 3484</span>
                </div>
                <div class="payment--card">
                    <div class="card--header">
                        <div class="amount">
                            <span class="tit">
                                Payment amount
                            </span>
                            <span class="amount--value">$500.00</span>
                        </div>
                        <i class="fas fa-dollar-sign icon"></i>
                    </div>
                    <span class="card-detail">**** **** **** 3484</span>
                </div>
                <div class="payment--card">
                    <div class="card--header">
                        <div class="amount">
                            <span class="tit">
                                Payment amount
                            </span>
                            <span class="amount--value">$500.00</span>
                        </div>
                        <i class="fas fa-dollar-sign icon"></i>
                    </div>
                    <span class="card-detail">**** **** **** 3484</span>
                </div>
            </div>
        </div>
        <div class="tabular--wrapper">
            <h3 class="main--title">Finance data</h3>
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>Amount</th>
                            <th>Account Name</th>
                            <th>Date Created</th>
                            <th>Status</th>
                        </tr>
                    </thead>    
                        <tbody>
                            <tr>
                                <td>
                                    $100,000
                                </td>
                                <td>
                                    Adam Sa'ad
                                </td>
                                <td>24th June 2024 10:00am</td>
                                <td>Pending</td>
                            </tr>
                            <tr>
                                <td>
                                    $400,000
                                </td>
                                <td>
                                    Jemilu Akloo
                                </td>
                                <td>25th June 2024 10:00pm</td>
                                <td>Pending</td>
                            </tr>
                            <tr>
                                <td>
                                    $100,000
                                </td>
                                <td>
                                    Mubarak Bello
                                </td>
                                <td>29th June 2024 12:00am</td>
                                <td>Pending</td>
                            </tr>
                        </tbody>
                </table>
            </div>
        </div>
    </div>
 </div>
</body>
</html>
