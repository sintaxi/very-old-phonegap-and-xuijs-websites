<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
  "http://www.w3.org/TR/html4/strict.dtd">
<html>
  <head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <title>XUI | javascript micro-framework</title>
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
      <div id="head">
        <h1 class="title"><a href="<?= $APP_ROOT ?>">XUI</a></h1>
        <?php @ require_once ("views/shared/nav.php"); ?>        
      </div>
      
      <div id="content">
        <?php @ require_once ("views/$page"); ?>  
      </div>
    </div>
  </body>
</html>