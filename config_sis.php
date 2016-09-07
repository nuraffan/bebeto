<?php 
session_start();
require( "management/database.php" );

function dbConnect()
	{
	//error_reporting(E_ALL ^ E_DEPRECATED);
		global $dbHost, $dbUser, $dbPasswd, $dbName;
		mysql_connect( $dbHost, $dbUser, $dbPasswd ) or error( mysql_error() );
		mysql_select_db( $dbName );
	}
function error( $error )
	{
    echo "<body background=\"exptextb.jpg\">\n";
    echo "<p align=\"center\" style=\"margin-top: 0; margin-bottom: 0\">&nbsp;</p>\n";
    echo "<div align=\"center\">\n";
    echo "<center>\n";
    echo "<table border=\"1\" cellpadding=\"0\" cellspacing=\"0\" style=\"border-collapse: collapse\" bordercolor=\"#FF0000\" width=\"533\" id=\"AutoNumber1\">\n";
    echo " <tr>\n";
    echo " <td bgcolor=\"#FFFFFF\">\n";
    echo " <p align=\"center\" style=\"margin-top: 0; margin-bottom: 0\"><b>\n";
    echo " <font face=\"Arial\" size=\"5\">Error !!!</font></b></p>\n";
    echo " <p align=\"center\" style=\"margin-top: 0; margin-bottom: 0\">&nbsp;</p>\n";
    echo " <p align=\"center\" style=\"margin-top: 0; margin-bottom: 0\"><b>\n";
    echo " <font color=\"#FF0000\">$error</font></b></p>\n";
    echo " <p align=\"center\" style=\"margin-top: 0; margin-bottom: 0\">&nbsp;</p>\n";
    echo " <p align=\"center\" style=\"margin-top: 0; margin-bottom: 0\">\n";
    echo " <a href=\"javascript:history.back()\">back</a></td>\n";
    echo " </tr>\n";
    echo "</table>\n";
    echo "</center>\n";
    echo "</div>\n";

	exit;
	}

function rupiah($rp)
       {
	        $rupiah = "";
	        $p = strlen($rp);
	        while($p > 3)
	        {
	             $rupiah = "." . substr($rp,-3) . $rupiah;
		     $l = strlen($rp) - 3;
		     $rp = substr($rp,0,$l);
		     $p = strlen($rp);
	        }
	       $rupiah = "Rp " . $rp . $rupiah . ",-";
	       return $rupiah;
        }

function verifyUser()
	{
  	  //session_start();
          if ($_SESSION['username1'] && $_SESSION['password1'])
             {
              $result=mysql_query( "SELECT username, passwd FROM affiliasi WHERE username='$_SESSION[username1]' AND BINARY passwd='$_SESSION[password1]'" ) or error( "Login failed, please contact adminstrator" ) ;
              if( mysql_num_rows( $result ) == 1 )
                 return true;
		}
              return false;
	}


function verifyCustomer()
	{
  	  session_start();
          if ($_SESSION['email'] && $_SESSION['password'])
             {
              dbConnect();
              $result1=mysql_query( "SELECT email, passwd FROM customer WHERE email='$_SESSION[email]' AND BINARY passwd='$_SESSION[password]'" ) or error( "Login failed, please contact adminstrator" ) ;
              if( mysql_num_rows( $result1 ) == 1 )
                 return true;
		}
              return false;
	}
 

function verifyAdmin()
     {
	 error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
	if(!isset($_SESSION)) 
    { 
	session_start();
	}
		if ($_SESSION['admin_Name'] && $_SESSION['admin_Passwd'])
		{
		    dbConnect();
			$result=mysql_query( "SELECT user_admin, passwd_admin FROM admin_affiliasi WHERE user_admin='$_SESSION[admin_Name]' AND BINARY passwd_admin='$_SESSION[admin_Passwd]'" ) or error( "Ops .... Login failed !!!!!!" ) ;
			if( mysql_num_rows( $result ) == 1 ) return true;
		}
		return false;
	 }



function sentMail( $from, $to, $subject, $body )
	{
		$headers  = "MIME-Version: 1.0\r\n";
		$headers .= "Content-type: text/plain; charset=ios-8859-1\r\n";
		$headers .= "From: {$from}\r\n";
		$result = @mail( $to, $subject, $body, $headers );
		if( $result ) return true;
		else return false;
	}
	
function displayHeader( $title = "" )
	{
		global $ADVT_NAME, $PAGE_BG_COLOR, $PAGE_BG_IMAGE;
		echo "\n<html>\n";
		echo "<head>\n";
		echo "<title>$title</title>\n";
		echo "<link rel=\"stylesheet\" href=\"style.css\" type=\"text/css\">\n";
		echo "</head>\n\n";
		echo "<body bgcolor=\"$PAGE_BG_COLOR\" background=\"$PAGE_BG_IMAGE\">\n\n";
		echo "<center><h2>$ADVT_NAME</h2></center>\n";
	}	

function displayFooter()
	{
		echo "<p align=\"center\"><a href=\"#\" target=\"_blank\"><img src=\"images/power.jpg\" width=\"150\" height=\"50\" border=\"0\" alt=\"gopatra\"></a></p>\n";
		echo "<p align=\"center\"><small>This Website Development by <a href=\"http://www.gopatra.id\">gopatra.id</a> </small></p>\n\n";
		echo "</body>\n";
		echo "</html>\n";
		exit;
	}	


?>