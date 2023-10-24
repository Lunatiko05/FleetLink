<!DOCTYPE html>
<html>
<head>
  <title>FleetLink</title>
  <link rel="stylesheet" href="style.css">

  <style>
    body {
      margin: 0;
      padding: 0;
      display: flex;
      flex-direction: row;
    }

    .faq-image {
      flex: 1;
      background-image: url('{{ asset('images/881.jpg') }}');
      background-size: cover;
      background-repeat: no-repeat;
      height: 100vh;
    }

    .faq-content {
      flex: 1;
      max-width: 800px;
      margin: 20px;
      margin-top: 20px;
      background-color: #007BFF;
      border-radius: 20px;
      padding: 20px;
      overflow: auto;
      max-height: 100%;
    }

    .header-links {
      display: flex;
      justify-content: flex-end;
      align-items: center;
      margin-right: 20px;
      color: white;
    }

    .header-link {
      color: white;
      text-decoration: none;
      cursor: pointer;
      font-weight: bold;
      position: relative;
      transition: color 0.3s, background-color 0.3s, transform 0.3s;
      padding: 5px 10px;
      border-radius: 10px;
      pointer-events: none;
      font-family:Montserrat;
    }

    .header-button {
      background-color: white;
      color: gray;
      padding: 10px 5px;
      border: none;
      border-radius: 5px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-weight:bold;
      line-height: 1; 
    }

    .header-button:hover {
      background-color: lightblue;
      }
    .header-link:hover {
      background-color: white; /* Dark blue background on hover */
      color: gray; /* White font color on hover */
      transform: scale(1.1); /* Scale up on hover */
    }

    .header-image {
      width: 100px; /* Adjust the width as needed */
      height: auto; /* Maintain aspect ratio */
      margin-right: 30px; /* Add margin to separate the image from content */
      justify-content: flex-start; /* Align elements to the right */
      margin-right:330px;
    }

    .faq-title {
      text-align: center;
      font-size: 30px;
      margin-bottom: 20px;
      color: #fff;
      font-family: 'Montserrat', sans-serif;
      font-weight: bold;
    }

    .faq-list {
      list-style-type: none;
      padding: 0;
      padding-top: 20px;
    }

    .faq-item {
      border: 1px solid #ccc;
      border-radius: 20px;
      margin-bottom: 20px;
      background-color: #fff;
      cursor: pointer;
      transition: background-color 0.3s, transform 0.3s;
      font-family: 'Roboto', sans-serif;
      font-weight: bold;
    }

    .faq-item:hover {
      background-color: lightblue;
      transform: scale(1.03);
      margin-right: 20px;
    }

    .faq-item.accordion:hover {
      background-color: lightblue;
    }

    .faq-item .accordion {
      width: 100%;
      padding: 10px;
      background-color: #fff;
      border: 1px solid #ccc;
      cursor: pointer;
      color: #555;
      font-size: 20px;
      border-radius: 20px;
    }

    .faq-item .collapse {
      padding: 10px;
      display: none;
      transition: transform 0.3s ease-in-out
      overflow: hidden;
      max-height: 0;
    }

    .faq-item.open .collapse {
      display: block;
      border-radius: 20px;
      max-height: 300px;
    }

    .arrow {
      float: right;
      transition: transform 0.3s;
    }

    .faq-item.open .arrow {
      transform: rotate(90deg);
    }
  </style>
</head>
<body>
  <div class="faq-image"></div>
  <div class="faq-content">
    <div class="header-links">
      <img src="{{ asset('images/FleetLink).png') }}" alt="FleetLink Logo" class="header-image">
      <a href="{{ route('FleetLink') }}" class="header-link">Home</a>
      <a href="{{ route('FAQs') }}" class="header-link">FAQs</a>
      <a href="{{ route('about-us') }}" class="header-button">AboutUs</a>
    </div>
    <h1 class="faq-title">FAQs</h1>
    <ul class="faq-list">
      <li class="faq-item">
        <div class="accordion">What is FleetLink?<span class="arrow">▶</span></div>
        <div class="collapse">
          FleetLink is a cutting-edge solution that helps agencies track and manage their fleet. It provides real-time information on vehicle location.
        </div>
      </li>
      <li class="faq-item">
        <div class="accordion">What are the benefits of using FleetLink?<span class="arrow">▶</span></div>
        <div class="collapse">
          FleetLink can help agencies reduce fuel costs, improve vehicle utilization, and promote driver safety. It can also help agencies comply with government regulations.
        </div>
      </li>
      <li class="faq-item">
        <div class="accordion">How does FleetLink work?<span class="arrow">▶</span></div>
        <div class="collapse">
          FleetLink uses GPS and cellular technology to track and transmit vehicle data to our database.
        </div>
      </li>
      <li class="faq-item">
        <div class="accordion">What are some examples of how FleetLink can be used?<span class="arrow">▶</span></div>
        <div class="collapse">
          <p>🚓 Track the location of vehicles in real-time.</p>
          <p>📻 Provides a reliable means of communication.</p>
          <p>📊 Generate reports on vehicle performance.</p>
          <p>🔔 Receive alerts when vehicles need attention.</p>
        </div>
      </li>
      <li class="faq-item">
        <div class="accordion">How does FleetLink protect my privacy?<span class="arrow">▶</span></div>
        <div class="collapse">
        <p>🔒 Data encryption: All FleetLink data is encrypted at rest and in transit. This means that even if someone were to gain unauthorized access to your data, they would not be able to read it.</p>
        <p>🔑 Access control: FleetLink users can only access the data that they are authorized to see. This is controlled through a role-based access control system.</p>
        <p> 🔍 Audit logging: FleetLink keeps track of all user activity in audit logs. This allows you to see who accessed your data and when.</p>
        <p> 📁 Data retention policy: FleetLink only retains your data for as long as it is necessary for business purposes. Once your data is no longer needed, it is securely deleted.</p>
        </div>
      </li>
    </ul>
  </div>
  <script>
    var accordions = document.querySelectorAll(".accordion");
    for (var i = 0; i < accordions.length; i++) {
      accordions[i].addEventListener("click", function() {
        var parent = this.parentNode;
        parent.classList.toggle("open");
      });
    }
  </script>
</body>
</html>
