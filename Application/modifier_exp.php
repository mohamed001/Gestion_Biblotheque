<?php
session_start();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Bibliotheque_FST TANGER</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link href="css/doc.css" rel="stylesheet" type="text/css" />
</head>

<body eftmargin=0 topmargin=0 marginheight="0" marginwidth="0" bgcolor="#ffffff">
<table border="0" cellspacing="0" cellpadding="0" width="101%" height="100%">
<tr valign="top" >
	<td width="50%"  background="images/bg.gif" bgcolor="#D6D6D6"><img src="images/px1.gif" width="1" height="1" alt="" border="0"></td>
	<td valign="bottom" background="images/bg_left.gif"><img src="images/bg_left.gif" alt="" width="17" height="16" border="0"></td>
	<td>
<table border="0" cellpadding="0" cellspacing="0" width="780" height="107">
<tr valign="bottom">
	<td width="160"><img src="images/fst_tanger.jpg" width="150" height="160" alt="" border="0" /></td>
	<td width="620"   background="images/bibliot.jpg" style=" background-repeat:repeat">
    
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <table width="620" border="1" bordercolor="#660000" height="40" cellpadding="0" cellspacing="0" background="">
  <tr valign="bottom">
   <td width="155" bgcolor="#01B0F0"  ><p class="menu01" ><a href="index.php">Accueil</a></p></td>
    <td width="155" bgcolor="#01B0F0" ><p class="menu01"><a href="gestion_etudiants.php">Etudiant</a></p></td>
    <td width="155"  background="images/b_fon_a.gif"><p class="menu01"><a href="gestion_livress.php">Livre</a></p></td>
    <td  width="155" bgcolor="#01B0F0"><p class="menu01" ><a href="gestion_prets.php">Prêt</a></p></td>
    
    <!--<td>
  but act -->
  <!-- /but act -->
      <!--<table width="110" border="0" cellpadding="0" cellspacing="0">
        <tr valign="bottom">
          <td><img  src="images/b_left_a.gif" alt="" width="10" height="30" border="0" /></td>
          <td   background="images/b_fon_a.gif"><p class="menu01" ><a href="Accueil.php">ACCUEIL</a></p></td>
          <td><img  src="images/b_right_a.gif" alt="" width="10" height="30" border="0" /></td>
          </tr>
        </table>
        </td>-->
    <!--<td>
       but 
      <table width="103" border="0" cellpadding="0" cellspacing="0">
        <tr valign="bottom">
          <td><img src="images/b_left.gif" alt="" width="10" height="30" border="0"></td>
          <td background="images/b_fon.gif"><p class="menu01"><a href="ecole.php">Etudiant</a></p></td>
          <td><img src="images/b_right.gif" alt="" width="10" height="30" border="0"></td>
          </tr>
        </table>-->
      <!-- /but 
      </td>-->
    <!--<td>
       but
      <table width="99" border="0" cellpadding="0" cellspacing="0">
        <tr valign="bottom">
          <td width="10"><img src="images/b_left.gif" alt="" width="10" height="30" border="0" /></td>
          <td width="73" background="images/b_fon.gif" bgcolor="#0099FF"><p class="menu01">Livre</p></td>
          <td width="16"><img src="images/b_right.gif" alt="" width="10" height="30" border="0" /></td>
          </tr>
        </table> -->
      <!-- /but 
      </td>-->
   <!-- <td>
   but 
  <table border="0" cellpadding="0" cellspacing="0">
<tr valign="bottom">
	<td><img src="images/b_left.gif" alt="" width="10" height="30" border="0"></td>
	<td background="images/b_fon.gif" width="100"><p class="menu01" ><a href="contact.php">Prêt</a></p></td>
	<td><img src="images/b_right.gif" alt="" width="10" height="30" border="0"></td>
</tr>
</table>-->
  <!-- /but 
      </td>-->
  </tr>
</table>
	</td>
</tr>
</table>
<table border="0" cellpadding="0" cellspacing="0" width="780" height="107">
<tr  >
	<td  background="images/b_fon_a.gif" width="160">
	 




</td>
	<td width="620" rowspan="0">

  <div>
    <img align="left" src="images/top01.gif" width="620" height="24" alt="" border="0" />
    <table width="500" border="0" class="left">
      <tr>
        
      </tr>
      <tr>
        <td height="49">
          <?php $link= mysql_pconnect('localhost', 'root', '');
if (!$link) {
   die('Impossible de se connecter : ' . mysql_error());
}
$bdd= mysql_select_db('gestion_bibliotheque_fstt', $link);
if (!$bdd) {
   die ('Impossible de sélectionner la base de données : ' . mysql_error());}
   

if( isset($_POST['rechercher'])){
	
	
	$result1=mysql_query(" select  exemplaire.* from  exemplaire where  exemplaire.code_barre=" .$_POST["code"]);
																																																										   if($result1)
	  { if($ligne = mysql_fetch_row($result1))
	  
          {
		   
        echo '
           <form action=\'modifier_exp.php\'  method="post">
           <table width="500" border="0">
  <tr>
    <td width="169">Code barre</td>
    <td width="405"><input type="text" width="300" name="cc" value="'.$ligne[0].'"/></td>
  </tr>
  <tr>
    <td>ISBN</td>
    <td><input type="text" width="300" name="isb" value="'.$ligne[1].'"/></td>
  </tr>
  
  <tr>
    <td>Code inventaire</td>
    <td><input type="text"width="300" name="inv" value="'.$ligne[2].'"  /></td>
  </tr>
  <tr height=""></tr>
  <tr>
  <td></td><td><table width="406" height="30"><tr><td width="215"><input type="submit" value="Modifier" name="modifier" align="center" /></td><td width="179"><input type="submit" value="Supprimer" name="supprimer" align="right" /></td></tr></table></td></tr>
</table>
       </form>    
      ' ;} else 
	  echo "cet exemplaire n'existe pas dans notre base de données";}}
          
if( isset($_POST['modifier'])){
	
	
	
	
		
	$result2="UPDATE  exemplaire SET  code_inventaire=".$_POST["inv"]."   where code_barre=". $_POST["cc"].";" ;
if(mysql_query($result2))

		   {
			   ?> 
			    <script type="text/javascript">   alert('l\'exemplaire a été bien modifié avec succées')</script> 
                <script type="text/javascript">document.location="choix_exp_cat.php"</script>
				<?php }
           else {  echo 'non modifié';
		   ?> <script type="text/javascript">   alert('Erreur,l\'exemplaire n\'a pas été  modifié ')</script>
		   <script type="text/javascript">document.location="recherche_livre.php"</script><?php }}
		 
 

if( isset($_POST['supprimer'])){
	$result="DELETE FROM exemplaire where code_barre=".$_POST["cc"];	
	$result3="UPDATE livre SET livre.nbre_exemplaire=livre.nbre_exemplaire-1 where livre.ISBN=".$_POST["isb"]." AND livre.nbre_exemplaire !=0";
if(mysql_query($result) && mysql_query($result3))
		   {
			   ?> 
			    <script type="text/javascript">   alert('l\'exemplaire a été supprimé')</script> 
				<script type="text/javascript">document.location="choix_exp_cat.php"</script>
				<?php }
           else {  
		   ?> <script type="text/javascript">   alert('non supprimé')</script>
		   <script type="text/javascript">document.location="choix_exp_cat.php"</script>
		   <?php }}
		 
 ?>
      
      
      
      
         
           
           
           
           
 </td>
      </tr>
      <tr>
        <td height="49"><table width="200" border="0">
  
</table>
</td>
      </tr>
      <tr>
        <td height="49"></td>
      </tr>
    </table>
   

  </div>
</td>
</tr>
<tr valign="bottom" bgcolor="#D0E0ED">
	<td  background="images/b_fon_a.gif"></td>
</tr>
</table>
<table border="0" cellpadding="0" cellspacing="0" width="600" height="64" background="images/fon_bot.gif">
<tr valign="top">
	<td>
<table border="0" cellpadding="0" cellspacing="0" width="780" background="">
<tr>
	<td width="285"><p class="menu02">Copyright &copy;2014 FSTT.ac.ma</p></td>
	<td width="495">&nbsp;</td>
</tr>
</table>
	</td>
</tr>
</table>
	</td>
	<td valign="bottom" background="images/bg_right.gif"><img src="images/bg_right.gif" alt="" width="17" height="16" border="0"></td>
	<td width="50%" background="images/bg.gif">&nbsp;</td>
</tr>
</table>
<img src="images/px1.gif" width="1" height="1" alt="" border="0">
</body>
</html>