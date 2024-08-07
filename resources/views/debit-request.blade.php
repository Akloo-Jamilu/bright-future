{{-- <!DOCTYPE html>
<html>
<head>
    <title>Debit Request</title>
</head>
<body>
    <h1>Debit Request</h1>
    <!-- Add your form for creating a debit request here -->
</body>
</html> --}}













{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Business</title>
</head>
<body>
    <h1>Create Business</h1>
    <form method="POST" action="/create-account" enctype="multipart/form-data" id="create-business-form">
        @csrf
        <input type="text" name="firstName" placeholder="First Name" required>
        <input type="text" name="lastName" placeholder="Last Name" required>

        <select name="countryShort" required>
            <option value="NG">Nigeria</option>
            <!-- Add other countries as needed -->
        </select>

        <select name="idType" required>
            <option value="identityCard">Identity Card</option>
            <option value="passport">Passport</option>
            <option value="driverLicense">Driver License</option>
            <!-- Add other ID types as needed -->
        </select>
        <input type="file" name="idFile" accept=".jpeg,.png,.pdf" required>

        <select name="poaType" required>
            <option value="utilityBill">Utility Bill</option>
            <option value="bankStatement">Bank Statement</option>
            <!-- Add other POA types as needed -->
        </select>
        <input type="file" name="poaFile" required>

        <button type="submit">Create Business</button>
    </form>

    <script>
        document.getElementById('create-business-form').addEventListener('submit', function(event) {
            const idFile = document.querySelector('input[name="idFile"]').files[0];
            const poaFile = document.querySelector('input[name="poaFile"]').files[0];
            const maxFileSize = 500 * 1024; // 500 KB

            if (idFile.size > maxFileSize || poaFile.size > maxFileSize) {
                alert('File size must be less than 500KB');
                event.preventDefault();
            }
        });
    </script>
</body>
</html> --}}


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css" />
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
            <section class="form-fields">
                <div class="containers">
                 <div class="title">Debit Request</div>
                 <form action="#">
                     <div class="user-detail">
                         <div class="input-box">
                             <span class="details">Account Number</span>
                             <input type="text" placeholder="Account Number" required>
                         </div>
                         
                         <div class="input-box">
                             <span class="details">Amount</span>
                             <input type="text" placeholder="Amount" required>
                         </div>
                         <div class="input-box">
                             <span class="details">Destination IBAN</span>
                             <input type="text" placeholder="Destination IBAN" required>
                         </div>
                         <div class="input-boxs">
                             <span class="details">Destination country</span>
                         </div>
                         <div class="column">
                             <div class="select-box">
                                 <select>
                                     <option hidden>Select a country</option>
                                     <option>American</option>
                                     <option>Belgium</option>
                                     <option>Nigeria</option>
                                     <option>Kenya</option>
                                     <option>Germany</option>
                                     <option>London</option>
                                     <option>Argentina</option>
                                 </select>
                             </div>
                         </div>
                         <div class="input-box">
                             <span class="details">Destination Bank</span>
                             <input type="text" placeholder="Destination Bank" required>
                         </div>
                         <div class="input-box">
                             <span class="details">Reference</span>
                             <input type="text" placeholder="" required>
                         </div>
                         <div class="input-box">
                             <span class="details">Reason</span>
                             <textarea name="my_textarea" id=""></textarea>
                         </div>
                     </div>
                     
                     <div class="buttons">
                         <input type="submit" value="Submit">
                     </div>
                 </form>
                </div> 
             </section>
        </div>
    </div>
</body>


</html>
