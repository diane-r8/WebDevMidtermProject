<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Access Denied</title>
    <style>
        body {
            display: flex;
            flex-direction: column; /* Stack items vertically */
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #3b814f69; /* Semi-transparent gray background */
        }
        img {
            max-width: 50%; /* Limit the width of the image to 50% of the viewport */
            max-height: 50%; /* Limit the height of the image to 50% of the viewport */
            width: auto; /* Keep aspect ratio */
            height: auto; /* Keep aspect ratio */
            margin-bottom: 20px; /* Add space below the image */
        }
        a {
            padding: 10px 20px;
            background-color: #ff6f61; /* Button background color */
            color: white; /* Button text color */
            text-decoration: none; /* Remove underline */
            border-radius: 5px; /* Rounded corners */
            transition: background-color 0.3s; /* Smooth background color transition */
        }
        a:hover {
            background-color: #ff4a3b; /* Darker shade on hover */
        }
    </style>
</head>
<body>
    <img src="images/sorry.png" alt="Access Denied Image"> 
    <a href="{{ url('/user-form') }}">Go Back</a> <!-- Link to redirect to the welcome page -->
</body>
</html>
