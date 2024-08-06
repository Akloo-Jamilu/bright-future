<!DOCTYPE html>
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
</html>
