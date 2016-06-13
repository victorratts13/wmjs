<?php
require_once 'credentials.class.php';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <link href="styles/style.css" rel="stylesheet" type="text/css" />
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
        <title>Mining via Javascript and WebGL</title>
      <script>
         var g_user = '<?php echo $username ?>';
         var g_password = '<?php echo $password ?>';
         var g_url = '<?php echo $url ?>';
         var g_port = '<?php echo $port ?>';
      </script>

      <SCRIPT src="js/jquery-1.11.0.min.js"></SCRIPT>
      <SCRIPT src="js/sha256.js"></SCRIPT>
      <SCRIPT src="js/util.js"></SCRIPT>
      <SCRIPT src="js/work-manager.js"></SCRIPT>
      <SCRIPT src="js/glminer.js"></SCRIPT>
    </head>

    <BODY class="body">
        <div id="control" class="cont">
          <h1 class="font">Web Miner JavaScript V1.0</h1><br />
          Mine Method:
    		<input type="radio" name="method" value="js" checked="checked"> Javascript
    		<input type="radio" name="method" value="jsworker"> WebWorker
    		<input type="radio" name="method" value="webgl"> WebGL
    		<br />WebGL Threads: <INPUT id="threads" value="1024"/>
    		<br /><input type="checkbox" id="testmode">
   		    Testmode<br><br><button id="start" onclick="begin_mining(); document.getElementById('start').style.display = 'none';">Start</button>
            <a href="index.php"><button id="stop">stop</button></a>
    </div>
		<br />
        <table width="1248" border="0">
          <tr>
            <td>pool:</td>
            <td><?php echo "<a href='$url:$port'>$url:$port</a>"; ?></td>
            <td colspan="2">&nbsp;</td>
            <td width="876" rowspan="6"><?php include('class/credits.php'); ?></td>
          </tr>
          <tr>
            <td width="190">Total Hashes:</td>
            <td width="152"><input id="total-hashes" /></td>
            <td colspan="2">&nbsp;</td>
          </tr>
          <tr>
            <td>Hash/s:</td>
            <td><input id="hashes-per-second" /></td>
            <td colspan="2">&nbsp;</td>
          </tr>
          <tr>
            <td>Target/Difficulty:</td>
            <td><input id="target" /></td>
            <td colspan="2">&nbsp;</td>
          </tr>
          <tr>
            <td>undermined block:</td>
            <td><input id="golden-ticket" /></td>
            <td colspan="2">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="4"><textarea name="info" id="info" style="width: 350px; height: 250px;"></textarea></td>
          </tr>
        </table>
        <table width="200" border="0">
          <tr>
            <td>&nbsp;</td>
          </tr>
    </table>
    </BODY>

</html>
