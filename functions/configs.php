<?php error_reporting(E_ERROR | E_PARSE);if($_SESSION["login"]){?>
    <div class="toolbar">
        
    </div>
    <main> 
        <h3>server.properties</h3>
        <form action=main.php method=POST>
        <table>
            <tr><td>Spawn protection: </td><td><input type=number name=spawn-protection value=16 placeholder="Spawn-protection"></td></tr>
            <tr><td>Force gamemode: </td><td><fieldset><input type=radio id=fgtrue name=force-gamemode value="true"><label for=fgtrue>Yes</label>&nbsp;<input type=radio id=fgfalse name=force-gamemode value="false"><label for=fgfalse>No</label></fieldset></td></tr>
            <tr><td>Allow nether: </td><td><fieldset><input type=radio id=antrue name=allow-nether value="true"><label for=antrue>Yes</label>&nbsp;<input type=radio id=anfalse name=allow-nether value="false"><label for=anfalse>No</label></fieldset></td></tr>
            <tr><td>Sync chunk writes: </td><td><fieldset><input type=radio id=scwtrue name=sync-chunk-writes value="true"><label for=scwtrue>Yes</label>&nbsp;<input type=radio id=scwfalse name=sync-chunk-writes value="false"><label for=scwfalse>No</label></fieldset></td></tr>
            <tr><td>Enforce whitelist: </td><td><fieldset><input type=radio id=ewtrue name=enforce-whitelist value="true"><label for=ewtrue>Yes</label>&nbsp;<input type=radio id=ewfalse name=enforce-whitelist value="false"><label for=ewfalse>No</label></fieldset></td></tr>
            <tr><td>Gamemode: </td><td><select name=gamemode><option value=0>Survival</option><option value=1>Creative</option><option value=2>Adventure</option><option value=3>Spectator</option></select></td></tr>
            <tr><td>Idle timeout: </td><td><input type=number name=player-idle-timeout value=0 placeholder="Idle timeout"></td></tr>
            <tr><td>Difficulty: </td><td><select name=difficulty><option value=peaceful>Peaceful</option><option value=easy>Easy</option><option value=normal>Normal</option><option value=hard>Hard</option></select></td></tr>
            <tr><td>Spawn NPCs: </td><td><fieldset><input type=radio id=sntrue name=spawn-npcs value="true"><label for=sntrue>Yes</label>&nbsp;<input type=radio id=snfalse name=spawn-npcs value="false"><label for=snfalse>No</label></fieldset></td></tr>
            <tr><td>Spawn animals: </td><td><fieldset><input type=radio id=satrue name=spawn-animals value="true"><label for=satrue>Yes</label>&nbsp;<input type=radio id=safalse name=spawn-animals value="false"><label for=safalse>No</label></fieldset></td></tr>
            <tr><td>Spawn monsters: </td><td><fieldset><input type=radio id=smtrue name=spawn-monsters value="true"><label for=smtrue>Yes</label>&nbsp;<input type=radio id=smfalse name=spawn-monsters value="false"><label for=smfalse>No</label></fieldset></td></tr>
            <tr><td>OP Level: </td><td><select name=op-permission-level><option value=1>1</option><option value=2>2</option><option value=3>3</option><option value=4>4</option></select></td></tr>
            <tr><td>PVP: </td><td><fieldset><input type=radio id=pvptrue name=pvp value="true"><label for=sntrue>Enabled</label>&nbsp;<input type=radio id=pvpfalse name=pvp value="false"><label for=pvpfalse>Disabled</label></fieldset></td></tr>
            <tr><td>Enitity range (in %): </td><td><input type=number name=entity-broadcast-range-percentage value=100 placeholder="Entity range in %"></td></tr>
            <tr><td>Snooper: </td><td><fieldset><input type=radio id=strue name=snooper-enabled value="true"><label for=strue>Yes</label>&nbsp;<input type=radio id=sfalse name=snooper-enabled value="false"><label for=sfalse>No</label></fieldset></td></tr>
            <tr><td>Hardcore: </td><td><fieldset><input type=radio id=htrue name=hardcore value="true"><label for=htrue>Yes</label>&nbsp;<input type=radio id=hfalse name=hardcore value="false"><label for=hfalse>No</label></fieldset></td></tr>
            <tr><td>Status: </td><td><fieldset><input type=radio id=stattrue name=enable-status value="true"><label for=stattrue>Enabled</label>&nbsp;<input type=radio id=statfalse name=enable-status value="false"><label for=statfalse>Disabled</label></fieldset></td></tr>
            <tr><td>Command blocks: </td><td><fieldset><input type=radio id=cbtrue name=enable-command-block value="true"><label for=cbtrue>Enabled</label>&nbsp;<input type=radio id=cbfalse name=enable-command-block value="false"><label for=cbfalse>Disabled</label></fieldset></td></tr>
            <tr><td>Players: </td><td><input type=number name=max-players value=20 placeholder="Max-Players"></td></tr>
            <tr><td>Compression: </td><td><input type=number name=network-compression-threshold value=256 placeholder="Compression"></td></tr>
            <tr><td>Function Level: </td><td><select name=function-permission-level><option value=1>1</option><option value=2>2</option><option value=3>3</option><option value=4>4</option></select></td></tr>
            <tr><td>Port: </td><td><input type=number name=server-port value=25565 placeholder="Port"></td></tr>
            <tr><td>Flying: </td><td><fieldset><input type=radio id=flytrue name=allow-flight value="true"><label for=flytrue>Allow</label>&nbsp;<input type=radio id=flyfalse name=allow-flight value="false"><label for=flyfalse>Deny</label></fieldset></td></tr>
            <tr><td>View distance: </td><td><input type=number name=view-distance value=10 placeholder="View distnace (chunks)"></td></tr>
            <tr><td>Maximal build height: </td><td><input type=number name=max-build-height value=256 placeholder="Maximal build height"></td></tr>
            <tr><td>Online-mode: </td><td><fieldset><input type=radio id=ontrue name=online-mode value="true"><label for=ontrue>True</label>&nbsp;<input type=radio id=onfalse name=online-mode value="false"><label for=onfalse>False</label></fieldset></td></tr>
            <tr><td>Native transport: </td><td><fieldset><input type=radio id=nttrue name=use-native-transport value="true"><label for=nttrue>Use</label>&nbsp;<input type=radio id=ntfalse name=use-native-transport value="false"><label for=ntfalse>Don't use</label></fieldset></td></tr>
            <tr><td>Proxy/VPN from Players: </td><td><fieldset><input type=radio id=proxytrue name=prevent-proxy-connections value="false"><label for=proxytrue>Allow</label>&nbsp;<input type=radio id=proxyfalse name=prevent-proxy-connections value="true"><label for=proxyfalse>Deny</label></fieldset></td></tr>
            <tr><td>MOTD: </td><td><input type=text name=motd placeholder="MotD"></td></tr>
            
            <input type=hidden name=content value="configs">
            <tr><td><input type=submit value="Save"></td></tr>
        </table>
        </form>
    </main>
<?php }else echo("Log-In before accesing the page! <a href=../index.php>Start</a>"); ?>