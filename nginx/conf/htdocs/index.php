<?php
$mailname = $line = file('/etc/mailname')[0];
$mailname = str_replace(array("\n", "\r"), '', $mailname);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8 />
<title><?php echo $mailname ?></title>
<style type="text/css">
a:active,a:hover,a:link,a:visited{color:inherit;text-decoration:none;outline: 0;}body{overflow-y:scroll;background-color:#dfdfdf;font-family:"Lucida Sans Unicode","Lucida Grande",Sans-Serif;font-size:12px;color:#555}.box{background-color:#fff;width:530px;border-radius:5px;-moz-border-radius:5px;margin:30px auto;-moz-box-shadow:0 1px 10px 0 rgba(0,0,0,.25);-webkit-box-shadow:0 1px 10px 0 rgba(0,0,0,.25);box-shadow:0 1px 6px 0 rgba(0,0,0,.2);padding:30px 20px}.box h2{font-size:14px;color:#555}.box h3{font-size:12px;color:#555;text-align:center}.line{width:100%;height:1px;background-color:#d7d7d7}.boxselect{padding:11px 5px 12px 24px;background-color:#f2f2f2;border:1px solid #c8c8c8;width:335px;color:#838383;margin:20px auto;font-size:15px;text-align:center}.boxselect:hover{background-color:#fefefe}
</style>
</head>
<body>

<div class="box">
<h2>Webmail @ <?php echo $mailname ?></h2>
<div class="line"></div>
<a href="rc/"><div class="boxselect">
<img alt="Roundcube" src="data:image/png;base64,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" />
</div></a>

<h2>Administrator</h2>
<div class="line"></div>
<a href="pfadmin/"><div class="boxselect">
<img alt="Postfixadmin" src="data:image/png;base64,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" />
</div></a>
<a href="fcc/"><div class="boxselect">
<img alt="fcc" src="data:image/png;base64,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" />
</div></a>

<div class="line"></div>

<h3>Setup a mail <b>client</b> to use SMTP and IMAP</h3>
<img alt="Mail" src="data:image/png;base64,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" style="float:right" />
<p><b>IMAP</b> on <?php echo $mailname; ?><br />
<ul>
  <li>Port 143 STARTTLS</li>
  <li>Port 993 SSL</li>
</ul>
<b>SMTP</b> on <?php echo $mailname; ?><br />
<ul>
  <li>Port 587 STARTTLS</li>
  <li>Do not use Port 25 to submit mails</li>
</ul>
</p>
<div class="line"></div>

<h3>Health check</h3>
<a href="http://mxtoolbox.com/SuperTool.aspx?action=smtp:<?php echo `cat /etc/mailname` ?>" target="_blank">
<img alt="MXToolbox" src="data:image/png;base64,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" />
</a>
<br />
</div>
</body>
</html>
