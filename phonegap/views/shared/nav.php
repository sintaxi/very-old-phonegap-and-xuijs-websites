<div id="nav">
  <ul>
    <li<? if($page == "index.php"){ echo " class=\"selected\"";} ?>><a href="<?= $APP_ROOT ?>">Home</a></li>
    <li<? if($page == "why.php"){ echo " class=\"selected\"";} ?>><a href="<?= $APP_ROOT ?>why">Why?</a></li>
    <li<? if($page == "contribute.php"){ echo " class=\"selected\"";} ?>><a href="<?= $APP_ROOT ?>contribute">Contribute</a></li>
    <li class="wide_left <? if($page == "projects.php"){ echo "selected";} ?>"><a href="<?= $APP_ROOT ?>projects">Projects</a></li>
    <li class="wiki_link <? if($page == "wiki.php"){ echo "selected";} ?>"><a href="http://phonegap.pbwiki.com">Wiki</a></li>
    <li class="wide_right <? if($page == "contact.php"){ echo "selected";} ?>"><a href="<?= $APP_ROOT ?>contact">Contact</a></li>
  <ul>
</div>