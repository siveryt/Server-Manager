<?php error_reporting(E_ERROR | E_PARSE);if($_SESSION["login"]){?>
    <div class="toolbar">
        
    </div>
    <main>
        <div class="world">
        <img height=75 src="https://crafatar.com/avatars/8bb85881-3853-4e71-b7ac-0a0412e4b1ec"><section class=world_Text><h2>WORLD NAME</h2><br/><form method=POST><input type=hidden name=content value="worlds"><input type=hidden value=setworld name=action><input type=hidden value="WORLD NAME" name=world><input id=setworld type=submit value="Set world"></form></form></section>
        </div>
    </main>
<?php }else echo("Log-In before accesing the page! <a href=../index.php>Start</a>"); ?>