<?php
require( "search.php" );
require( "daftar2.php" );
?>
<HTML><HEAD>
<STYLE type=text/css>.adHeadline {FONT: bold 10pt Arial; COLOR: #0000ff; TEXT-DECORATION: underline}
.adText {FONT: 10pt Arial; COLOR: #000000; TEXT-DECORATION: none}  </STYLE>

<meta http-equiv="Content-Language" content="en-us">
<title>:: Script Website CMS Instant :: Membuat Website Dengan Cara Mudah Dan Simple</title>
<META content=Rasbany name=Author>
<META 
content="Membuat website canggih dengan script yang sederhana dan dalam waktu yang singkat." 
name=Keywords>
<META 
content="langkah mudah untuk membuat website anda dalam waktu yang singkat." 
name=Description>
<META content="index, follow" name=robots>
<LINK 
href="images/style.css" 
type=text/css rel=stylesheet>
<META content="Microsoft FrontPage 5.0" name=GENERATOR></HEAD>
<STYLE>BODY {
	SCROLLBAR-FACE-COLOR: #000000; SCROLLBAR-HIGHLIGHT-COLOR: #006699; SCROLLBAR-SHADOW-COLOR: #006699; SCROLLBAR-3DLIGHT-COLOR: #006699; SCROLLBAR-ARROW-COLOR: #ffffff ; SCROLLBAR-TRACK-COLOR: #C0C0C0; SCROLLBAR-DARKSHADOW-COLOR: #006699; SCROLLBAR-BASE-COLOR: #006699}
.lnk1:hover {
	COLOR: #0000fa; TEXT-DECORATION: none
}
.lnk:link {
	COLOR: #ffff00; TEXT-DECORATION: none
}

</STYLE>
<BODY bgColor=#999999 leftMargin=0 topMargin=0 marginwidth="0" marginheight="0">

<SCRIPT language=JavaScript type=text/javascript>
<!-- Script JAM dan TANGGAL
var day="";
var month="";
var ampm="";
var ampmhour="";
var myweekday="";
var year="";
mydate = new Date();
NextDay = mydate.getDate();
myday = mydate.getDay();
mymonth = mydate.getMonth();
myweekday= mydate.getDate();
weekday= myweekday;
myyear= mydate.getYear();
year = myyear;
myhours = mydate.getHours();
ampmhour  =  (myhours > 24) ? myhours - 12 : myhours;
ampm =  (myhours >= 12) ? ' PM' : ' AM';
mytime = mydate.getMinutes();
myminutes =  ((mytime < 10) ? ':0' : ':') + mytime;


if(myday == 0)
day = " Minggu, ";
else if(myday == 1)
day = " Senin, ";
else if(myday == 2)
day = " Selasa, ";
else if(myday == 3)
day = " Rabu, ";
else if(myday == 4)
day = " Kamis, ";
else if(myday == 5)
day = " Jum'at, ";
else if(myday == 6)
day = " Sabtu, ";
if(mymonth == 0) {
month = "Januari ";}
else if(mymonth ==1)
month = "Februari ";
else if(mymonth ==2)
month = "Maret ";
else if(mymonth ==3)
month = "April ";
else if(mymonth ==4)
month = "Mei ";
else if(mymonth ==5)
month = "Juni ";
else if(mymonth ==6)
month = "Juli ";
else if(mymonth ==7)
month = "Agustus ";
else if(mymonth ==8)
month = "September ";
else if(mymonth ==9)
month = "Oktober ";
else if(mymonth ==10)
month = "Nopember ";
else if(mymonth ==11)
month = "Desember ";
// End --></SCRIPT>
<A name=top></A>
<body background="images/back.jpg">
<TABLE cellSpacing=0 cellPadding=0 width=771 align=center border=0>
  <TBODY>
  <TR>
    <TD width="780">
      <TABLE cellSpacing=0 cellPadding=0 width="780" border=0>
        <TBODY>
        <TR>
          <TD width="780">
            <TABLE cellSpacing=0 cellPadding=0 width=780 border=0>
              <TBODY>
              <TR>
                <TD>
                <p align="center">
                
                  <? include "banner.php"; ?>
                </TD>
                </TR>
              <TR>
                <TD 
                background="images/h03.jpg" height=35>
                  <TABLE height=35 cellSpacing=0 cellPadding=0 width="108%" 
                  border=0>
                    <TBODY>
                    <TR>
                      <TD align=left width="23%">
                         &nbsp; &nbsp;<SCRIPT type=text/javascript>
document.write("<b><font size=1 color=#990000 face='verdana'>" + day + myweekday + " " + month+year)
                        </SCRIPT>
                      </TD>
                      <TD id=menuatas vAlign=center align=middle 
                        width="77%">&nbsp;</TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE></TD>
  <TR>
    <TD width="780">
      <TABLE cellSpacing=0 cellPadding=0 width="780" border=0>
        <TBODY>
        <TR>
          <TD vAlign=top width=173 bgColor=#f5f5f5 height=264>
            <p align="center">
            
            <?php include "menu.php"; ?>
            
            </TD>
          <TD vAlign=top bgColor=#ffffff width="607">
            <TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
              <TBODY>
              <TR>
                <TD vAlign=top 
                background="images/main5.jpg"><IMG 
                  height=14 
                  src="images/main4.jpg" 
                  width=15></TD></TR>
              <TR>
                <TD vAlign=top>
                  <TABLE height=100 cellSpacing=0 cellPadding=0 width="95%" 
                  border=0>
                    <TBODY>
                    <TR>
                      <TD vAlign=top width="3%"><IMG height=149 
                        src="images/main7.jpg" 
                        width=15> </TD>
                      <TD class=bodyteks vAlign=top width="97%">
                        <TABLE cellSpacing=0 cellPadding=0 width=563 border=0>
                          <TBODY>
                          <TR>
                            <TD width=275 height=20>&nbsp;</TD>
                            <TD align=right width=288 height=20>
                            <font face="Verdana" style="font-size: 8pt">
                            <span lang="id"><b>Presented By : <?php echo "$_SESSION[session_nama]" ?> </b>
                            </span></font></TD></TR>
                          <TR>
                            <TD class=namamenu width=563 bgColor=#e8e8e8 
                            colSpan=2 height=1></TD></TR></TBODY></TABLE>
                        <P>
                        <CENTER>
                        <TABLE style="BORDER-COLLAPSE: collapse" 
                        borderColor=#111111 cellSpacing=0 cellPadding=10 
                        width="100%" border=0>
       <TBODY>
                          <TR>
                            <TD>
							
							<input type="submit" value="JOIN AFFILIATE >>" name="Submit" src="affiliasi.php" style="font-family: Tahoma; font-size: 12px; border-style: outset; border-width: 2">
        <!--                      <p align="center"><i>
                  <font face="Arial" size="5" color="#CC0000"><span lang="id">T</span>ERIMA 
                              KASIH ATAS ORDER ANDA !!!</font></i></p>
                  <div align="center">
                    <center>
                    <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="553" id="AutoNumber3">
                      <tr>
                        <td width="553">
    <p style="margin-top: 0; margin-bottom: 0" align="center">
    <b>
    <font face="Verdana">Silahkan transfer biaya order pembelian :</font></b></p>
    <p style="margin-top: 0; margin-bottom: 0" align="center">
    <font face="Verdana" size="4" color="#FF0000"><?php echo "$HARGA_PRODUK" ?></font></p>
    <p style="margin-top: 0; margin-bottom: 0" align="center">&nbsp;</p>
    <p style="margin-top: 0; margin-bottom: 0" align="center">&nbsp;
    </p>
    <p style="margin-top: 0; margin-bottom: 0" align="center">
    <font face="Verdana" size="2">Ke Rekening <font color="#CC0000"> <b><?php echo"$data[bank_admin]" ?> 
    - <?php echo"$data[cabang_bank_admin]" ?></b></font></font></p>
    <p style="margin-top: 0; margin-bottom: 0" align="center">
    <font face="Verdana" size="2">Nomor Rekening <font color="#CC0000"> <b><?php echo"$data[rekening_admin]" ?></b></font></font></p>
    <p style="margin-top: 0; margin-bottom: 0" align="center">&nbsp;
    </p>
    <p style="margin-top: 0; margin-bottom: 0" align="center">
    <font color="#FF0000" face="Verdana"><b></b></font></p>
    <p style="margin-top: 0; margin-bottom: 0" align="center"><p style="margin-top: 0; margin-bottom: 0" align="center">
    <font face="Verdana" size="2" color="#FF0000">Setelah anda melakukan 
    transfer ke rekening <span lang="id">bank kami </span>diatas, selanjutnya silahkan <b>konfirmasikan</b> 
    ke kami dengan<u><b> klik URL dibawah ini</b></u></font><p style="margin-top: 0; margin-bottom: 0" align="center"><p style="margin-top: 0; margin-bottom: 0" align="center">
    <a href="<?php echo "$data[website]" ?>/konfirmasi.php?email=<?php echo "$email" ?>">
    <?php echo "$data[website]" ?>/konfirmasi.php?email=<?php echo "$email" ?></a><p style="margin-top: 0; margin-bottom: 0" align="center"></td>
                      </tr>
                    </table>
                    </center>
                  </div>
                  <hr color="#CC0000" size="1">
                  <p align="justify" style="margin-top: 0; margin-bottom: 0">&nbsp;</p>
                  <div align="center">
                    <center>
                    <table border="1" cellpadding="3" cellspacing="0" style="border-collapse: collapse" bordercolor="#008000" width="557" id="AutoNumber4">
                      <tr>
                        <td width="549">
                        <p align="center" style="margin-top: 0; margin-bottom: 0">
                        <b><font face="Verdana" size="4" color="#FF0000">
                        PERHATIAN !!!</font></b></p>
                        <p align="center" style="margin-top: 0; margin-bottom: 0">&nbsp;</p>
                        <p align="center" style="margin-top: 0; margin-bottom: 0">
                        <font face="Verdana" size="2" color="#FF0000">Untuk 
                        keterangan lebih lengkap, kami juga sudah mengirimkan 
                        email konfirmasi order ini kealamat email anda</font></p>
                        <p align="justify" style="margin-top: 0; margin-bottom: 0"></td>
                      </tr>
                    </table>
                    </center>
                  </div>
                  <p style="margin-top: 0; margin-bottom: 0" align="justify">&nbsp;</p>
                    <p style="margin-top: 0; margin-bottom: 0" align="center"><b>
                    <font face="Verdana" color="#008080" size="4">
                    <?php echo "$data[website]" ?></font></b></p>
                    <p style="margin-top: 0; margin-bottom: 0" align="center">
                    <font face="Verdana" style="font-size: 9pt; font-weight: 700">
                    <?php echo "$data[nama_admin]" ?></font></p>
                    <p style="margin-top: 0; margin-bottom: 0" align="center">
                    <font face="Verdana" style="font-size: 9pt">email :&nbsp;<b><?php echo "$data[email_admin]" ?></b></font></p>
                    <p style="margin-top: 0; margin-bottom: 0" align="center">
                    <font face="Verdana" style="font-size: 8pt"><?php echo "$data[alamat_admin]" ?></font></p>
                    <p style="margin-top: 0; margin-bottom: 0" align="center">
                    <font face="Verdana" style="font-size: 8pt">Phone : 
                    <?php echo "$data[telpon_admin]" ?></font></p>
                  <p style="margin-top: 0; margin-bottom: 0">&nbsp;</p>
                  <p style="margin-top: 0; margin-bottom: 0">&nbsp;</p>
                  <p style="margin-top: 0; margin-bottom: 0"><P style="margin-top: 0; margin-bottom: 0" align="center"> <BR></P>
             --->                 </TD></TR></TBODY></TABLE></CENTER>
                        <P align=right><a href="#top"><IMG 
                        height=30 
                        src="images/but_top.gif" 
                        width=30 border=0></a> 
              </P></TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE><BR><BR></TD></TR></TBODY></TABLE></TD>
			  
			  
  <TR>
    <TD class=footer vAlign=top height=88 width="780">
      <TABLE cellSpacing=0 cellPadding=0 width="100%" border=0 height="87">
        <TBODY>
        <TR>
          <TD class=footer 
          background="images/p5.gif" height="87">
            <P class=footer align=center><b>
            <font face="Geneva" color="#FFFF00" size="2"><span lang="id">
            Copyright © 2016 Gopatra.id All Rights Reserved - PT. Gopatra Karya Indonesia</span><BR><span lang="id">

            </font></b><BR>&nbsp;</P>
            <DIV align=center></DIV></TD></TR></TBODY></TABLE></TD>
</TBODY></TABLE><IMG 
height=1 src="" width=1 border=0>&nbsp;&nbsp; </BODY></HTML>