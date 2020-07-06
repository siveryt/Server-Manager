<?php error_reporting(E_ERROR | E_PARSE);if($_SESSION["login"]){?>
    <div class="toolbar">
    Thank you to <a href="https://crafatar.com">Crafatar</a> for providing avatars. And thank you to MineTheCube for creating <a href=https://gist.github.com/MineTheCube/034eff1b664b18e98658>Minecraft API</a>
    </div>
    <main> 
        <div class="player">
            <img height=75 src="https://crafatar.com/avatars/8bb85881-3853-4e71-b7ac-0a0412e4b1ec"><section class=player_Text><h2>_Sivery</h2><br/>UUID: 8bb85881-3853-4e71-b7ac-0a0412e4b1ec<br/><form method=POST><input type=hidden name=content value="player"><input type=hidden value=addop name=action><input id=addop type=submit value="Add OP"></form>&nbsp;<form method=POST><input type=hidden name=content value="player"><input type=hidden value=remop name=action><input id=remop type=submit value="Remove OP"></form>&nbsp;<form method=POST><input type=hidden name=content value="player"><input type=hidden value=addwl name=action><input id=addwl type=submit value="Add Whitelist"></form>&nbsp;<form method=POST><input type=hidden name=content value="player"><input type=hidden value=remwl name=action><input id=remwl type=submit value="Remove Whielist"></form></section>
        </div>
        
    </main>
<?php }else echo("Log-In before accesing the page! <a href=../index.php>Start</a>"); ?>