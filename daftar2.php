<?php 

//require( "search.php" );
$nama=ltrim($_POST['nama']);
$email=ltrim($_POST['email']);
$telpon=ltrim($_POST['telpon']);
$passwd=ltrim($_POST['passwd']);

$ip = $_SERVER[REMOTE_ADDR];
//$time = time();

   //if ($_SESSION[codeee]!=$_POST['code']) error( "Ops ... !!! Code Salah coba ulangi lagi" );
   if( $email == "" ) error( "Email harus diisi !!!" );
   dbConnect();
   $result = mysql_query( "SELECT email FROM customer WHERE email='$email'" ) or error( mysql_error() );
   if( mysql_num_rows( $result ) >= 1 ) error( "Maaf !!! Email sudah ada pada database kami, gunakan email anda yang lainnya " );
   if( $nama == "" ) error( "Nama harus diisi !!!" );
   if( $telpon == "" ) error( "Telpon Harus Diisi !!!" );
   if( $passwd == "" ) error( "Password harus diisi !!!" );
   if ( !eregi( "^[0-9a-z]([-_.]?[0-9a-z])*@[0-9a-z]([-.]?[0-9a-z])*\\.[a-z]{2,3}$", $email ) ) error( "Oops !!!!.. data Email anda Invalid alias tidak sah !!!" );


   $nama1  =("$nama");
   $nama = strip_tags($nama1);
   $email1 =("$email");
   $email = strip_tags($email1);
   $telpon1 =("$telpon");
   $telpon = strip_tags($telpon1);
   $passwd1 =("$passwd");
   $passwd = strip_tags($passwd1);


   $nama1 =("$nama");
   $nama = ucwords($nama1);
   $email1 =("$email");
   $email = strtolower($email1);
   

   $nilai = mysql_query( "SELECT * FROM admin_affiliasi WHERE kode='$kode'" ) or error( mysql_error() );
   $data = mysql_fetch_array( $nilai );
   if( mysql_num_rows( $nilai ) != 1 ) error( "Ops ... ! Maaf Data administrator tidak ada, silahkan kontak pengelola website ini " );
   $HARGA_PRODUK = rupiah($data['harga_produk']);
   $AFFILIASI = $data['harga_produk'] * $data['bonus_affiliasi'] / 100;

  // $acak1=rand(1111,9999);
   //$acak2=rand(2222,6666);
   //$password=$acak1.$acak2;
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING)); 
   $paid="nopaid";
   $status="aktif";
   mysql_query( "INSERT INTO customer ( email, passwd, nama, alamat, telpon, rupiah_pembelian, nama_bank, cabang_bank, rekening, tanggal_transfer, tanggal_join, ip_add, username_sponsor, nama_sponsor, email_sponsor, paid, stat )
   Values ('$email','$passwd','$nama','$alamat','$telpon','$transfer_pembelian','','','','',current_date,'$ip','$_SESSION[session_sponsor]','$_SESSION[session_nama]','$_SESSION[session_email]','$paid','$status')") or error( mysql_error() );

   //require ("email/email_order.php");



?>