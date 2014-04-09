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
	
	
	$result1=mysql_query(" select livre.*, sous_categorie.id_ss_categorie,fournisseur.id_fournisseur from livre,sous_categorie, fournisseur where livre.id_ss_categorie=sous_categorie.id_ss_categorie and livre.id_fournisseur=fournisseur.id_fournisseur and livre.ISBN=" .$_POST["isbn"]);
																																																										   if($result1)
	  { if($ligne = mysql_fetch_row($result1))
	  
          {
		   
        echo '
           <form action=\'modifier_livre.php\'  method="post">
           <table width="500" border="0">
  <tr>
    <td width="169">ISBN</td>
    <td width="405"><input type="text" width="300" name="isbn" value="'.$ligne[0].'"/></td>
  </tr>
  <tr>
    <td>Cote</td>
    <td><input type="text" width="300" name="cote" value="'.$ligne[4].'" /></td>
  </tr>
  
  <tr>
    <td>Titre</td>
    <td><input type="text"width="300" name="titre" value="'.$ligne[5].'"  /></td>
  </tr>
  <tr>
    <td>Sous-titre</td>
    <td><input type="text" width="300" name="ss_titre" value="'.$ligne[6].'"/></td>
  </tr>
  <tr>
    <td>Nombre Exemplaires</td>
    <td><input type="text" width="300" name="nbr_exp" value="'.$ligne[7].'" disabled/></td> 
  </tr>
  <tr>
    <td>Nombre Pages</td>
    <td><input type="text" width="300" name="nbr_pg" value="'.$ligne[8].'"/></td>             
  </tr>
  <tr>
    <td>Prix</td>
    <td><input type="text" width="300" name="prix" value="'.$ligne[9].'"/></td>             
  </tr>
  <tr>
    <td>materiel d\'accompagnement</td>
    <td><input type="text" width="300" name="materiel" value="'.$ligne[10].'"/></td>            
  </tr>
  <tr>
    <td>Mots cles</td>
    <td><input type="text" width="300" name="mot" value="'.$ligne[11].'"/></td>            
  </tr>
  <tr>
    <td>Langue de publication</td>
    <td><input type="text" width="300" name="lg_pub" value="'.$ligne[12].'"/></td>            
  </tr>
  <tr>
    <td>Langue originale</td>
    <td><input type="text" width="300" name="lg_ori" value="'.$ligne[13].'"/></td>            
  </tr>
  <tr>
    <td>date d\'edition</td>
    <td><input type="text" width="300" name="date" value="'.$ligne[14].'"/></td>            
  </tr>
  <tr>
    <td>Categorie</td>
    <td><select name="ss_catego">';
      
  $link= mysql_pconnect('localhost', 'root', '');
if (!$link) {
   die('Impossible de se connecter : ' . mysql_error());
}
$bdd= mysql_select_db('gestion_bibliotheque_fstt', $link);
if (!$bdd) {
   die ('Impossible de sélectionner la base de données : ' . mysql_error());}
   

 
 
$sql = " SELECT  libelle_ss_categorie FROM  sous_categorie"; 
$result = mysql_query($sql) or die("Requete pas comprise"); 
while ($row=mysql_fetch_array($result)) 
{  if($row[0]==$ligne[1])
{ 
	echo"<option  selected=\"selected\" >$row[0]</option>"; }
else 
{echo"<option  >$row[0]</option>"; }
} 
 
 echo '
    </select></td>
  </tr>
   <tr>
    <td>Fournisseur</td>
    <td><select name="four">
 ';
  $link= mysql_pconnect('localhost', 'root', '');
if (!$link) {
   die('Impossible de se connecter : ' . mysql_error());
}
$bdd= mysql_select_db('gestion_bibliotheque_fstt', $link);
if (!$bdd) {
   die ('Impossible de sélectionner la base de données : ' . mysql_error());}
   

 
$sql = " SELECT nom_fournisseur FROM fournisseur "; 
$result = mysql_query($sql) or die("Requete pas comprise"); 
while ($row=mysql_fetch_array($result)) 
{ if($row[0]==$ligne[2])
{ 
	echo"<option  selected=\"selected\" >$row[0]</option>"; }
else 
{echo"<option  >$row[0]</option>"; }
} 
echo '
</select></td>
  </tr>
    <tr>
    <td>Editeur</td>
    <td><select name="edit">
 ';
  $link= mysql_pconnect('localhost', 'root', '');
if (!$link) {
   die('Impossible de se connecter : ' . mysql_error());
}
$bdd= mysql_select_db('gestion_bibliotheque_fstt', $link);
if (!$bdd) {
   die ('Impossible de sélectionner la base de données : ' . mysql_error());}
   

 
$sql = " SELECT nom_editeur FROM editeur "; 
$result = mysql_query($sql) or die("Requete pas comprise"); 
while ($row=mysql_fetch_array($result)) 
{ if($row[0]==$ligne[3])
{ 
	echo"<option  selected=\"selected\" >$row[0]</option>"; }
else 
{echo"<option  >$row[0]</option>"; }
} 
echo '
</select></td>
  </tr>
  <tr height=""></tr>
  <tr>
  <td></td><td><table width="406" height="30"><tr><td width="215"><input type="submit" value="Modifier" name="modifier" align="center" /></td><td width="179"><input type="submit" value="Supprimer" name="supprimer" align="right" /></td></tr></table></td></tr>
</table>
       </form>    
      ' ;} else 
	  echo "ce livre n'existe pas dans notre base de données";}}
      
      
      
      
      
      
if( isset($_POST['modifier'])){
	
	
	
	
		
	$result1="UPDATE livre SET  id_ss_categorie=(select id_ss_categorie from sous_categorie where libelle_ss_categorie='".$_POST["ss_catego"]."'), id_fournisseur=(select id_fournisseur from fournisseur where nom_fournisseur='".$_POST["four"]."'),id_editeur=(select id_editeur from editeur where nom_editeur='".$_POST["edit"]."'),cote='".$_POST["cote"]."',titre='".$_POST["titre"]."',ss_titre='".($_POST["ss_titre"])."',nbre_pages=".($_POST["nbr_pg"]).",prix=".($_POST["prix"]).",materiel_accompagnement='".($_POST["materiel"])."',mots_cles='".($_POST["mot"])."',langue_publication='".($_POST["lg_pub"])."',langue_originale='".($_POST["lg_ori"])."',date_edition='".date($_POST["date"])."'  where ISBN=". $_POST["isbn"].";" ;
if(mysql_query($result1))

		   {
			   ?> 
			    <script type="text/javascript">   alert('le livre a été modifié avec succées')</script> 
                <script type="text/javascript">document.location="choix_exp_cat.php"</script>
				<?php }
           else {  echo 'non modifié';
		   ?> <script type="text/javascript">   alert('Erreur,le livre n\'a pas été  modifié ')</script>
		   <script type="text/javascript">document.location="recherche_livre.php"</script><?php }}
		 
 

if( isset($_POST['supprimer'])){
	$result1="DELETE  FROM livre where ISBN=".$_POST["isbn"];	
	$result2="DELETE  FROM exemplaire where ISBN=".$_POST["isbn"];
if(mysql_query($result1) && mysql_query($result2))
		   {
			   ?> 
			    <script type="text/javascript">   alert('Livre supprimé')</script> 
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