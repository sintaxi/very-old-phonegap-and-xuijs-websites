<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
  "http://www.w3.org/TR/html4/strict.dtd">
<html>
  <head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <title>PhoneGap</title>
    <link id="css" href="<?= $APP_ROOT ?>stylesheets/main.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" charset="utf-8">
    (function(){
      var ua = navigator.userAgent;
      if(ua.match("iPhone") || ua.match("Android")){
        document.getElementById("css").href = "<?= $APP_ROOT ?>stylesheets/mobile.css";
        var meta = document.createElement("META");
        meta.setAttribute('content','width=320; initial-scale=1.0; maximum-scale=2.0;');
        meta.setAttribute('name','viewport');
        var n = document.getElementsByTagName('head')[0];
        n.appendChild(meta);
      }
    })();
    </script>
    <script src="<?= $APP_ROOT ?>javascripts/application.js" type="text/javascript"></script>
  </head>
  <body onload="setTimeout(scrollTo,0,0,0);">
    <div id="shell">
      <div id="head" class="wrap">
        <h1 class="title"><a href="<?= $APP_ROOT ?>">PhoneGap</a></h1>
        <?php @ require_once ("views/shared/nav.php"); ?>
      </div>
      <?php @ require_once ("views/$page"); ?>
    </div>
    <div id="foot">
      <div class="wrap">
        <form action="http://groups.google.com/group/phonegap/boxsubscribe" id="group">
          <img src="http://groups.google.com/groups/img/3nb/groups_bar.gif" height=26 width=132 alt="Google Groups">
          <label for="email">Email:</label>
          <input type=text name=email>
          <input type=submit name="sub" value="Subscribe">
        </form>
        <h4><a href="http://nitobi.com">a nitobi sponsored project</a></h4>
      </div>
    </div>
    <script src='http://www.google-analytics.com/ga.js' type='text/javascript'></script>
    <script type="text/javascript">
    var pageTracker = _gat._getTracker("UA-94271-11");
    pageTracker._initData();
    pageTracker._trackPageview();
    </script>
  </body>
</html>