<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FleetLink</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <style>
        /* Add CSS styles here */
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #87CEEB; /* Light blue color */
            color: #fff;
            text-align: right; /* Align all content to the right */
            padding: 15px 20px; /* Adjust padding for more space */
            border-radius: 20px; /* Rounded corners for all sides */
            margin-left: 20px;
            margin-right: 20px;
            margin-top: 10px;
            display: flex;
            justify-content: space-between; /* Move content to the left and right */
            align-items: center;
        }

        header img {
            max-height: 100px; /* Increase the maximum height for a larger logo */
            margin-left: 20px; /* Move the logo to the left */
        }

        .header-links {
            text-align: right; /* Align the links to the right */
            margin-left: auto; /* Push the links to the right-most edge */
            margin-right: 10px; /* Add some spacing between links and the button */
            display: flex; /* Display links as a flex container */
        }

        .header-link {
            color: #777; /* Gray font color */
            text-decoration: none;
            cursor: pointer;
            font-weight: bold; /* Bold font weight */
            position: relative; /* Position for hover effect */
            transition: color 0.3s, background-color 0.3s, transform 0.3s; /* Smooth transition for color, background-color, and transform */
            padding: 5px 10px; /* Padding for the rectangular shape */
            border-radius: 10px; /* Rounded corners for the rectangular shape */
            margin-top:6px;
        }

        .header-link:hover {
            background-color: #007BFF; /* Dark blue background on hover */
            color: #fff; /* White font color on hover */
            transform: scale(1.1); /* Scale up on hover */
        }

        .header-button {
            background-color: #007BFF; /* Blue color for the button */
            color: #fff;
            padding: 10px 20px; /* Adjust padding for button size */
            border: none;
            border-radius: 5px; /* Rounded corners for the button */
            text-align: center;
            text-decoration: none;
            display: inline-block;
            margin-left:5px;
            font-weight:bold;
        }

        .header-button:hover {
         background-color: #0056b3; /* Button hover background color */
}

        section {
            background-color: #D3D3D3; /* Gray background color for the second section */
            height: 250px; /* Set the height to 250px */
            margin-left: 20px;
            margin-right: 20px;
            margin-top: 20px; /* Add margin to separate it from the header */
            border-radius: 20px; /* Rounded corners for the section */
            display: flex;
            justify-content: space-between; /* Move content to the left and right */
            align-items: center; /* Center content vertically */
            padding: 0 20px; /* Add padding to the left and right */
            flex-direction: row-reverse; /* Arrange elements horizontally in reverse order */
            position: relative; /* Add relative positioning */
        }

        .section-content {
            flex: 1; /* Expand to fill available space */
        }

        .side-content {
            display: flex;
            flex-direction: column;
            align-items: flex-start; /* Align items to the left */
        }

        .tagline {
            text-align: left; /* Align tagline to the left */
            font-size: 2.0rem; /* Adjust font size as needed */
            margin-bottom: 10px; /* Add margin below the tagline */
            text-indent: 0;
            font-family: 'Montserrat', sans-serif; /* Use Montserrat font */
            font-weight: bold; /* Make it bold */
            color: #333333;
            margin-left: 150px; /* Add spacing between text and arrow */

        }

        .login-button {
            background-color: #007BFF; /* Blue color for the button */
            color: #fff;
            padding: 10px 20px; /* Adjust padding for button size */
            border: none;
            border-radius: 5px; /* Rounded corners for the button */
            text-align: center;
            text-decoration: none;
            display: inline-block;
            margin-left: 150px; /* Add spacing between text and arrow */

        }

        .login-button:hover {
         background-color: #0056b3; /* Button hover background color */
}

        .login-button::after {
            content: '→'; /* Add right arrow after the button text */

        }

        p {
            font-size: 0.8rem; /* Adjust font size for the added sentence */
            color: #333333;
            margin-left: 150px; /* Add spacing between text and arrow */
        }

        h1 {
            font-size: 2rem;
            margin: 20px 0;
            color: #333;
        }

        .right-image {
            max-height: 250px; /* Set the maximum height of the image */
            position: absolute;
            top: 0;
            right: 0;
            transform: translateY(-5%);
            margin-right: 200px; /* Adjust the margin */
        }

        .center-bottom-sentence {
            text-align: left;
            font-size: 1rem;
            color: #333;
            position: absolute;
            bottom: 0;
            left: 37%;
            transform: translateY(-30px); /* Move the sentence upward by 100px */,
            transform: translateX(1000px);
            font-weight: bold; /* Make it bold */
            color: #333333;
            margin-right: 100px;
            z-index: 1;
        }

        .small-text {
            font-size: 0.8rem;
            color: #333;
            text-align: center;
            position: absolute;
            bottom: 0;
            right: 42%;
            transform: translateX(500%);
            transform: translateY(-5px);
            color: #333333;

            margin-left: 150px;
        }

        /* Styles for the third section with images, captions, and descriptions */
        .third-section {
            display: flex;
            justify-content: space-between;
            padding: 20px;
            background-color: transparent;
        }

        .image-container {
            flex: 1;
            text-align: center;
        }

        .image-container img {
            max-width: 100%;
            height: auto;
        }

        .caption {
            font-weight: bold;
            margin-top: 10px;
        }

        .caption p {
            font-size: 0.8rem;
            margin-right: 200px; /* Adjust the margin */
            
        }
        /* Add this to your existing CSS styles */
       .image-container {
              max-width: 100px; /* Set the maximum width to your desired size */
              max-height: 100px; /* Set the maximum height to your desired size */
              display: block; /* Ensure the image behaves as a block element */
              margin: 0 auto; /* Center the image horizontally within its container */
              text-align: center;
              transform: translateY(-70px);
}
.header-link1{
    pointer-events: none;
    color: #777; /* Gray font color */
            text-decoration: none;
            cursor: pointer;
            font-weight: bold; /* Bold font weight */
            position: relative; /* Position for hover effect */
            transition: color 0.3s, background-color 0.3s, transform 0.3s; /* Smooth transition for color, background-color, and transform */
            padding: 5px 10px; /* Padding for the rectangular shape */
            border-radius: 10px; /* Rounded corners for the rectangular shape */
            margin-top:6px;
}
            
    </style>
</head>
<body>
    <header>
        <img src="{{ asset('images/FleetLink_Logo.png') }}" alt="FleetLink Logo">
        <div class="header-links">
        <a href="{{ route('FAQs') }}" class="header-link1">Home</a> 
        <a href="{{ route('FAQs') }}" class="header-link">FAQs</a>
            <a href="{{ route('about-us') }}" class="header-button">About Us</a>
        </div>
        
        
    </header>
    <section>
        <div class="section-content">
            <!-- Content for the second section goes here -->
        </div>
        <div class="side-content">
            <div class="tagline">
                Fleets on sight,<br>
                Crimes out of sight.
            </div>
            <p>Police Department Fleet Management System</p>
            <a href="{{ route('Login') }}" class="login-button">Login →</a>
        </div>
        <img src="{{ asset('images/8249816.png') }}" alt="Police Logo" class="right-image">
        <div class="center-bottom-sentence">
            Manage and Connect to your fleet in one place.
        </div>
        <div class="small-text">
            Who is FleetLink suitable for?
        </div>
    </section>

    <!-- Third Section -->
    <section class="third-section">
        <div class="image-container">
        <img src="{{ asset('Images/policeman.png') }}" alt="Police Man">
            <div class="caption">
                <strong>Police Officers</strong>
            </div>
        </div>

        <div class="image-container">
        <img src="{{ asset('Images/support.png') }}" alt="Support">
            <div class="caption">
                <strong>Maintenance Team</strong>
            </div>
        </div>

        <div class="image-container">
        <img src="{{ asset('Images/admin.png') }}" alt="Admin">
            <div class="caption">
                <strong>Administrators</strong>
            </div>
        </div>
    </section>
    
    <!-- Your existing code below -->
</body>
</html>
