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
      justify-content: space-between;
      background-color: skyblue;
      color: white;
      padding: 10px;
      border-radius: 10px;
      margin: 10px;
    }

    .header img {
      width: 200px;
      height: 50px;
      margin-left: 10px;
    }

    .container {
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }

    form {
      background-color: white;
      position: relative;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
      width: 300px;
      border: 1px solid gray;
      border-radius: 20px;
      transform: translateX(0px) translateY(-85px);
    }

    input[type="text"],
    input[type="password"] {
      width: 90%;
      padding: 10px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 20px;
    }

    .password-input {
      position: relative;
    }

    .password-input input[type="password"] {
      padding-right: 30px; /* Leave space for the eye icon */
    }

    .password-input .eye-icon {
      position: absolute;
      right: 10px;
      top: 50%;
      transform: translateY(-50%);
      cursor: pointer;
    }

    .login-button {
      background-color: blue;
      color: #fff;
      padding: 10px;
      margin-bottom: 10px;
      border: 1px solid #000;
      border-radius: 20px;
      width: 100%;
      cursor: pointer;
      transform: translateY(10px);
    }

    .forgot-password {
      text-align: right;
      font-size: 14px;
      margin-top: 10px;
      transform: translateY(-10px);
    }

    .forgot-password a {
      text-decoration: none;
      color: blue;
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
    }

    .background-image {
      position: absolute;
      top: 20px;
      left: 0;
      width: 20%;
      height: 20%;
      z-index: 1;
      transform: translateX(530px) translateY(405px);
    }

    .irregular-image {
      position: absolute;
      top: 20px;
      left: 0;
      width: 30%;
      height: 50%;
      z-index: -1;
      transform: translateX(470px) translateY(280px);
    }
  </style>
</head>
<body>
  <div class="header">
    <img src="{{ asset('images/FleetLink_Logo.png') }}" alt="Logo">
    <button class="header-button">Back</button>
  </div>
  <div class="container">
    <form action="/login">
      <h1>Login</h1>
      <input type="text" name="username" placeholder="Username">
      <div class="password-input">
        <input type="password" name="password" placeholder="Password" id="password">
        <i class="eye-icon" id="togglePassword">👁️</i>
      </div>
      <div class="forgot-password">
        <a href="#">Forgot Password?</a>
      </div>
      <a href="{{ route('Admin_Landing') }}" class="login-button">Login</a>
    </form>
  </div>
  <img src="{{ asset('images/111.png') }}" alt="Background Image" class="background-image">
  <img src="{{ asset('images/comrawpixel8630181-removebg-preview.png') }}" alt="Irregular Image" class="irregular-image">
</body>
<script>
  const togglePassword = document.getElementById('togglePassword');
  const passwordField = document.getElementById('password');

  togglePassword.addEventListener('click', () => {
    if (passwordField.type === 'password') {
      passwordField.type = 'text';
    } else {
      passwordField.type = 'password';
    }
  });
</script>
</html>
