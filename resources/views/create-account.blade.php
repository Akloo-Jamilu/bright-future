<!DOCTYPE html>
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
</html>
