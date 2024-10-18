<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <!-- Include Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-image: url('images/bg_1.jpg'); /* Background image */
            background-size: cover; /* Cover the entire viewport */
            background-position: center; /* Center the image */
            background-repeat: no-repeat; /* Prevent repeating the image */
            font-family: 'Poppins', sans-serif; /* Modern font */
        }
        .container {
            text-align: center;
            border: 1px solid #ddd;
            padding: 40px;
            border-radius: 15px; /* Rounded corners */
            background-color: rgba(255, 255, 255, 0.8); /* Transparent white */
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1); /* Softer shadow */
            max-width: 400px;
            width: 100%;
            transition: all 0.3s ease; /* Smooth transition */
        }
        h1, h2 {
            margin-bottom: 20px;
            color: #333; /* Darker text color */
        }
        label {
            font-weight: bold; /* Bold labels */
            display: block; /* Block display for better alignment */
            margin-bottom: 5px; /* Space between label and input */
            color: #333; /* Darker text color for labels */
        }
        input[type="text"],
        input[type="number"] {
            width: 100%; /* Full width inputs */
            padding: 10px; /* Padding inside inputs */
            margin-bottom: 20px; /* Space below inputs */
            border: 1px solid #ccc; /* Light border */
            border-radius: 5px; /* Rounded corners for inputs */
            transition: border-color 0.3s; /* Smooth border transition */
        }
        input[type="text"]:focus,
        input[type="number"]:focus {
            border-color: #007bff; /* Highlight border on focus */
            outline: none; /* Remove default outline */
        }
        button {
            background-color: #ff7f50; /* Orange button color */
            color: white; /* White text */
            border: none; /* No border */
            padding: 10px 20px; /* Padding around button text */
            border-radius: 5px; /* Rounded corners for button */
            cursor: pointer; /* Pointer cursor on hover */
            font-size: 16px; /* Larger text */
            transition: background-color 0.3s; /* Smooth background transition */
        }
        button:hover {
            background-color: #ff4500; /* Darker shade of orange on hover */
        }
        /* Error messages styling */
        .error-list {
            list-style-type: none; /* No bullets */
            padding: 0; /* Remove default padding */
            color: #dc3545; /* Bootstrap danger color */
            margin-top: 10px; /* Space above error messages */
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Welcome!</h2>
        <p>I'm excited to share my portfolio with you.</p>
        <p> Let's dive in! </p>
        <br>
        
        <!-- Form to collect username and age -->
        <form action="{{ url('/user-form') }}" method="POST">
            @csrf
            <div>
                <label for="username">Username (optional):</label>
                <input type="text" id="username" name="username">
            </div>
            <div>
                <label for="age">How old are you?</label>
                <input type="number" id="age" name="age" min="1" required>
            </div>
            <button type="submit">Submit</button>
        </form>

        <!-- Display validation errors -->
        @if ($errors->any())
            <div>
                <ul class="error-list">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Display alert message -->
        @if(session('alert'))
            <script>
                alert("{{ session('alert') }}");
            </script>
        @endif
    </div>
</body>
</html>
