<?php
session_start();
  if (isset($_SESSION['usr_email'])){
    require 'navbar-logged.php';
  }
  else{
    require 'navbar.php';
  }
?><!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Companies</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <style media="screen">
    .navbar {
   font-family: Montserrat, sans-serif;
   margin-bottom: 0;
   background-color: #2d2d30;
   border: 0;
   font-size: 11px !important;
   letter-spacing: 4px;
   opacity: 0.9;
}
.navbar li a, .navbar .navbar-brand {
   color: #d5d5d5 !important;
}
.navbar-nav li a:hover {
   color: #fff !important;
}
.navbar-nav li.active a {
   color: #fff !important;
   background-color: #29292c !important;
}
.navbar-default .navbar-toggle {
   border-color: transparent;
}
html, body {
  height: 100%;
  width: 100%;
  margin: 0;
  font-family: 'Roboto', sans-serif;
}

.container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 15px;
  display: flex;
}
/* Columns */
.left-column {
  width: 65%;
  position: relative;
}

.right-column {
  width: 10%;
  margin-top: 60px;
}
/* Left Column */
.left-column img {
  display:block;
  width: 80%;
  position: absolute;
  left: 30px;
  top: 150px;
  right: 50px;
  transition: all 0.3s ease;
}

.left-column img.active {
  opacity: 1;
}
/* Company Description */
.company-description {
  border-bottom: 1px solid #E1E8EE;
  margin-bottom: 20px;
}
.company-description span {
  font-size: 12px;
  color: #358ED7;
  letter-spacing: 1px;
  text-transform: uppercase;
  text-decoration: none;
}
.company-description h1 {
  font-weight: 300;
  font-size: 52px;
  color: #43484D;
  letter-spacing: -2px;
}
.company-description p {
  font-size: 16px;
  font-weight: 300;
  color: #86939E;
  line-height: 24px;
}
.select-btn {
  display: inline-block;
  background-color: #7DC855;
  border-radius: 6px;
  font-size: 16px;
  color: #FFFFFF;
  text-decoration: none;
  padding: 12px 30px;
  transition: all .5s;
}
.select-btn:hover {
  background-color: #64af3d;
}
</style>
</head>
<body>


  <main class="container">

<!-- Left Column / Company logo -->
<div class="left-column">
  <img src="doc1.PNG" alt="CISCO">
</div>


<!-- Right Column -->
<div class="right-column">

  <!-- Company Description -->
  <div class="company-description">
    <span>IT and Networking</span>
    <h1>CISCO India</h1>
    <p>Cisco (NASDAQ: CSCO) is the worldwide technology leader that has been making the Internet work since 1984. Our people, products, and partners help society securely connect and seize tomorrow's digital opportunity today. Cisco commenced India operations in 1995. There are seven Sales Offices in the region - New Delhi, Mumbai, Bangalore, Chennai, Pune, Kolkata and Hyderabad. The Cisco Global Development Center is in Bangalore and is the largest outside the US. It houses Cisco's Research and Development (R&D), IT, Services and customer support teams and develops disruptive business models for Cisco to create new go-to-market channels, markets, processes and technologies for emerging markets. The Advanced Global Briefing Center located here showcases Cisco's latest technology solutions and proof-of-concepts.</p>
    <a href="https://www.cisco.com/c/en_in/index.html" target="_blank">Learn more</a>
  </div>
  <!-- Select Company -->
  <div class="select-company">
    <a href="company_dets/cisco.php" class="select-btn" value="cisco-btn">Select</a>
  </div>
</div>


</main>
</body>
</html>
