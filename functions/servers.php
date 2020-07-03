<?php error_reporting(E_ERROR | E_PARSE);if($_SESSION["login"]){?>
    <div class="toolbar">
        <form action=main.php method=POST><input type=hidden name=content value="servers"><input type=hidden name=toolbaraction value="add"><input type=submit value="+ Create Server"></form>
    </div>
    <main>
        <div class="server_S">
            <h1>NAME OF SERVER</h1>
            <h2>Max players: 20</h2>
            <h2>RAM: 5GB</h2>
            <h2>Software: Vanilla</h2>
            <h2>Version: 1.16.1</h2>
            <h2>Status: Not there</h2>
            <img></img>
            <h2>MOTD</h2>
            <form action=main.php method=POST><input type=hidden name=content value="servers"><input type=hidden name=serveraction value="delete"><input type=submit value="Delete Server"></form>
    </div>
    </main>
<?php }else echo("Log-In before accesing the page! <a href=../index.php>Start</a>"); ?>