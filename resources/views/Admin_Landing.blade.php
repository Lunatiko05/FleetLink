<!DOCTYPE html>
<html>
<head>
  <title>FleetLink</title>
  <style>
    body {
      font-family: Montserrat, sans-serif;
      margin: 0;
      padding: 0;
      background-color: white;
      text-align: center;
    }

    .header {
      display: flex;
      align-items: center;
      background-color: skyblue;
      color: white;
      padding: 10px;
      border-radius: 10px;
      margin: 10px;
      display: flex;
  align-items: center;
  justify-content: flex-end;
    }

    .header img {
      width: 200px;
      height: 50px;
    
      margin-left: 0;
  margin-right: auto;
      
    }

    .container {
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }

    .header-button {
      background-color: blue;
      color: white;
      padding: 10px;
      margin-bottom: 10px;
      border: none;
      border-radius: 20px;
      width: 10%;
      cursor: pointer;
      margin-right: 10px;
    }

    .background-image {
      position: absolute;
      top: 20px;
      left: 0;
      width: 30%;
      height: 60%;
      z-index: 1;
      transform: translateX(870px) translateY(160px);
    }


    .text {
      font-size: 80px;
      color: Gray;
      margin-left: 20px;
      margin-right: 500px;
      margin-top: 150px;
      font-family: Montserrat;
      text-align:left;
      font-weight:bold;
    }

    .text1 {
      font-size: 25px;
      color: Black;
      margin-left: 20px;
      margin-right: 500px;
      margin-top: -70px;
      font-family: Roboto;
      text-align:left;
    }

    .text-navigation {
      margin-right: 10px;
      margin-right: 500px;
      color: white;
      text-decoration: none;
      font-weight: bold;
      font-size: 14px;
    }
    
  </style>
</head>
<body>
  <div class="header">
    <img src="{{ asset('images/FleetLink_Logo.png') }}" alt="Logo">
    
    <a href="{{ route('FAQs') }}" class="text-navigation" style="margin-right: 20px;">Vehicles</a>
    <a href="{{ route('FAQs') }}" class="text-navigation" style="margin-right: 20px;">Accounts</a>
    <a href="{{ route('FleetLink') }}" class="header-button">Signout</a>
  </div>
  <p class="text">Welcome Back Administrator, Kurt!</p>
  <p class="text1">Police Department Fleet Management System</p>
  <img src="{{ asset('images/382562-PC3L1F-590-modified.png') }}" alt="Background Image" class="background-image">
</body>
</html>
