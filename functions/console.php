<?php error_reporting(E_ERROR | E_PARSE);if($_SESSION["login"]){?>
    <div class="toolbar">
        <input type=button value="Refresh console" onclick="location.reload();">
    </div>
    <main>
        <div class="console">
            <textarea cols=150 rows=25></textarea>
            <form action=main.php method=POST>
                <input type=text size=135 placeholder="Enter command">
                <input type=hidden name=content value="console">
                <input type=submit value="Send" id=send>
            </form>
        </div>
    </main>
<?php }else echo("Log-In before accesing the page! <a href=../index.php>Start</a>"); ?>