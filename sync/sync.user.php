<?
//--------------------------------------------------------------------------------------------------
//include files
//--------------------------------------------------------------------------------------------------
require_once('inc.sync.php');
require_once('func.user.php');
//--------------------------------------------------------------------------------------------------
//main program
//--------------------------------------------------------------------------------------------------
 print 'hello, here we go ';
    user_sync();  
  user_activate();  
  user_deactivate(); 
   user_add();
//--------------------------------------------------------------------------------------------------
echo('<br>User proces terminated');
//--------------------------------------------------------------------------------------------------

//redirect to next sync step
//header("Location: http://86.39.161.68/sync/sync.class.php");



?>
