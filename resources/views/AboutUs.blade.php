<!DOCTYPE html>
<html>
<head>
  <title>FleetLink</title>
  <style>
    #container {
      display: flex;
      flex-direction: row;
    }

    #left-side {
      width: 50%;
      background-color: white;
      padding: 10px;
      display: flex;
      justify-content: center; /* Center horizontally */
      align-items: center; /* Center vertically */
    }

    #right-side {
      width: 75%;
      background-color: blue;
      padding: 10px;
      height: 100vh; /* Set the height to 100vh for full viewport height */
      overflow: auto;
    }

    header {
      font-size: 24px;
      font-weight: bold;
      color: white;
    }

    main {
      color: white;
    }

    section {
      color: white;
      margin-left: 50px;
      margin-right: 50px;
      text-align: justify;
    }

    footer {
      color: white;
    }

    .social-media {
      list-style-type: none;
      padding: 0;
    }

    .social-media li {
      display: inline-block;
      margin-right: 10px;
    }

    .social-media a {
      color: white;
    }

    .social-media img {
      width: 30px; /* Adjust this value for the desired width */
      height: 30px; /* Adjust this value for the desired height */
    }

    nav {
      padding-top: 10px;
    }

    nav ul {
      list-style-type: none;
      padding: 0;
    }

    nav li {
      display: inline-block;
      margin-right: 10px;
    }

    nav a {
      color: white;
    }

    h2 {
      font-size: 18px; /* You can adjust the font size as needed */
      margin-top: 50px; /* Add margin to push the h2 elements down */
      font-family: 'Montserrat', sans-serif;
      font-weight: bold;
    }

    p {
      font-family: 'Roboto', sans-serif;
    }

    #scrollTopButton {
      display: none;
      position: fixed;
      bottom: 20px;
      right: 20px;
      z-index: 1;
      background-color: #007BFF;
      color: white;
      border: none;
      border-radius: 5px;
      padding: 10px;
      cursor: pointer;
    }

    #scrollTopButton:hover {
      background-color: #0056b3;
    }

    #top-navigation {
      position: sticky;
      top: 0;
      z-index: 100;
      background-color: blue;
      display: flex;
      justify-content: flex-end;
      align-items: center;
      margin-top:30px;
    }

    .text-navigation, .button-navigation {
      margin-right: 10px;
      color: white;
      text-decoration: none;
      font-weight: bold;
      font-size: 14px;
    }

    .button-navigation {
      padding: 10px 20px;
      background-color: #007BFF;
      border-radius: 5px;
      cursor: pointer;
      font-family: 'Montserrat', sans-serif;
      pointer-events: none;
    }

    .button-navigation:hover {
      background-color: #0056b3;
    }

    .text-navigation:hover {
            background-color: #007BFF; /* Dark blue background on hover */
            color: #fff; /* White font color on hover */
            transform: scale(1.1); /* Scale up on hover */
        }
  </style>
</head>
<body>
  <div id="container">
    <div id="left-side">
      <img src="{{ asset('images/FleetLink_Logo.png') }}" alt="FleetLink Logo">
    </div>
    <div id="right-side">
      <div id="top-navigation">
        <a href="{{ route('FAQs') }}" class="text-navigation" style="margin-right: 20px;">FAQs</a>
        <a href="{{ route('about-us') }}" class="button-navigation">About Us</a>
      </div>
      <header>
      </header>
      <section>
        <h2>🤝 Your Trusted Fleet Management Partner</h2>
        <p>At FleetLink, we provide cutting-edge solutions for Police Department Fleet Management. We understand how important a well-managed fleet is to the safety and efficiency of law enforcement operations.</p>
      </section>
      <section>
        <h2>🎯 Our Mission</h2>
        <p>FleetLink empowers law enforcement agencies to maintain and operate their vehicle fleets at the highest standards, enhancing safety, performance, and cost-effectiveness.</p>
      </section>
      <section>
        <h2>🚓 Why Choose FleetLink?</h2>
        <p><b>Comprehensive Solutions: </b> We provide comprehensive fleet management solutions to law enforcement agencies, enhancing safety, performance, and cost-effectiveness.</p>
        <p><b>Reliable Support:</b> FleetLink's team of experts provides exceptional support to ensure your fleet operates at its best.</p>
        <p><b>Cutting-Edge Technology:</b> FleetLink uses the latest technology to provide real-time insights and control over your fleet, streamlining operations and reducing downtime.</p>
        <p><b>Cost Efficiency:</b> We understand budget constraints. Our solutions optimize resources, cutting operational costs, and directing resources where needed most.</p>
      </section>
      <section>
        <h2>🌟 Your Success, Our Commitment</h2>
        <p>At FleetLink, we're more than just a fleet management system. We're your dedicated partner in ensuring the success of your law enforcement agency. Join us on the journey to safer, more efficient police fleet operations and make a real difference in your community today.</p>
      </section>
      <section>
        <h2>✉️ Contact Us</h2>
        <p>Have questions or ready to learn more about FleetLink? Contact our team today. We're here to assist you in taking your fleet management to the next level.</p>
        <p>📞Contact Number: 09123456789</p>
        <p>or reach us at our social media platforms,</p>
      </section>
      <footer>
        <ul class="social-media">
          <li><a href="https://facebook.com/"><img src="{{ asset('images/facebook.png') }}" alt="Facebook"></a></li>
          <li><a href="mailto:kananalis05@gmail.com"><img src="{{ asset('images/email.png') }}" alt="Email"></a></li>
          <li><a href="https://twitter.com/"><img src="{{ asset('images/twitter.png') }}" alt="Twitter"></a></li>
        </ul>
      </footer>
      <button id="scrollTopButton">Back to Top</button>
    </div>
  </div>
</body>
</html>
