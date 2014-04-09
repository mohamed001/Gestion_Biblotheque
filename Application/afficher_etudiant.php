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
   <td width="155" bgcolor="#01B0F0" ><p class="menu01" ><a href="index.php">Accueil</a></p></td>
    <td width="155"  background="images/b_fon_a.gif" ><p class="menu01"><a href="gestion_etudiants.php">Etudiant</a></p></td>
    <td width="155" bgcolor="#01B0F0" ><p class="menu01"><a href="gestion_livress.php">Livre</a></p></td>
    <td bgcolor="#01B0F0" width="155"><p class="menu01" ><a href="gestion_prets.php">Prêt</a></p></td>
    
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
      <tr><td height="70" />
        
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
	
	
	$result1=mysql_query(" select etudiant.*, filiere.libelle_filiere,niveau.libelle_niveau from etudiant, filiere, niveau where etudiant.id_niveau=niveau.id_niveau and etudiant.id_filiere=filiere.id_filiere and etudiant.cne=" .$_POST["cne"]);
																																																										   if($result1)
	  { if($ligne = mysql_fetch_row($result1))
	  
          {
		   
        echo '
           <form action=\'afficher_etudiant.php\'  method="post">
           <table width="100%" border="0">
  <tr>
    <td width="40%">CNE</td>
    <td width="405"><input type="text" width="300" name="cne" value="'.$ligne[0].'"/></td>
  </tr>
  <tr>
    <td>Nom</td>
    <td><input type="text" width="300" name="nom" value="'.$ligne[3].'" /></td>
  </tr>
  
  <tr>
    <td>Prenom</td>
    <td><input type="text"width="300" name="prenom" value="'.$ligne[4].'"  /></td>
  </tr>
  <tr>
    <td>Date naissance</td>
    <td><input type="date" width="300" name="date_naissance" value="'.$ligne[5].'"/></td>
  </tr>
  <tr>
    <td>Sexe</td>
    <td>
<input type="radio" name="sexe" value="F" id="F"
'; if($ligne[6]=="F" || $ligne[6]=="f") {echo ' checked="checked" ';  } echo '/> <label for="F">F</label>
<input type="radio" name="sexe" value="M" id="M"  '; if($ligne[6]=="M" || $ligne[6]=="m") {echo ' checked="checked" ';} echo ' /><label for="M">M</label></td>
  </tr>


  <tr>
    <td>Formation</td>
    <td>Cycle d\'ingénieur </td>
  </tr>
  <tr>
    <td>Filiere</td>
    <td><select name="filiere">';
      
  $link= mysql_pconnect('localhost', 'root', '');
if (!$link) {
   die('Impossible de se connecter : ' . mysql_error());
}
$bdd= mysql_select_db('gestion_bibliotheque_fstt', $link);
if (!$bdd) {
   die ('Impossible de sélectionner la base de données : ' . mysql_error());}
   

 
 
$sql = " SELECT libelle_filiere FROM filiere WHERE id_formation=4 "; 
$result = mysql_query($sql) or die("Requete pas comprise"); 
while ($row=mysql_fetch_array($result)) 
{  if($row[0]==$ligne[7])
{echo"<option value=".$row[0]." selected=\"selected\" >$row[0]</option>"; }
else 
{echo"<option value=".$row[0]." >$row[0]</option>"; }
} 
 
 echo '
    </select></td>
  </tr>
   <tr>
    <td>Niveau</td>
    <td><select name="niveau">
 ';
  $link= mysql_pconnect('localhost', 'root', '');
if (!$link) {
   die('Impossible de se connecter : ' . mysql_error());
}
$bdd= mysql_select_db('gestion_bibliotheque_fstt', $link);
if (!$bdd) {
   die ('Impossible de sélectionner la base de données : ' . mysql_error());}
   

 
 
$sql = " SELECT libelle_niveau FROM niveau "; 
$result = mysql_query($sql) or die("Requete pas comprise"); 
while ($row=mysql_fetch_array($result)) 
{ if($row[0]==$ligne[8])
{ 
	echo"<option  selected=\"selected\" >$row[0]</option>"; }
else 
{echo"<option  >$row[0]</option>"; }
} 
echo '
</select></td>
  </tr>
  <tr ></tr>
  <tr>
  <td></td><td><table width="406" height="30"><tr><td width="215"><input type="submit" value="Modifier" name="modifier" align="center" /></td><td width="179"><input type="submit" value="Supprimer" name="supprimer" align="right" /></td></tr></table></td></tr>
</table>
       </form>    
      ' ;} else 
	  echo "cet etudiant n existe pas dans notre base de données";}}
      
      
      
      
      
      
if( isset($_POST['modifier'])){
	
	
	
	
		
	$result1="update etudiant set  Id_filiere=(select id_filiere from filiere where id_formation=4 and libelle_filiere='".$_POST["filiere"]."'), Id_niveau=(select id_niveau from niveau where libelle_niveau='".$_POST["niveau"]."'),nom_etudiant='".$_POST["nom"]."',prenom_etudiant='".$_POST["prenom"]."',date_naissance='".date($_POST["date_naissance"])."',sexe='".date($_POST["date_naissance"])."' where cne=". $_POST["cne"].";" ;
if(mysql_query($result1))

		   {
			   ?> 
			    <script type="text/javascript">   alert('l\'étudiant a été bien modifié avec succées')</script> 
                <script type="text/javascript">document.location="gestion_etudiants.php"</script>
				<?php }
           else {  echo 'non modifié';
		   ?> <script type="text/javascript">   alert('Erreur,l\'étudiant n\'a pas été  modifié ')</script>
		   <script type="text/javascript">document.location="rechercher_etudiant.php"</script><?php }}
		 
 

if( isset($_POST['supprimer'])){
		
	$result1="delete from etudiant where cne=". $_POST["cne"];
if(mysql_query($result1))
//if(mysqli_query($bdd,'INSERT INTO etudiant(CNE, Id_filiere, Id_niveau) VALUES ('.$cne.',4,3)'))
		   {
			   ?> 
			    <script type="text/javascript">   alert('bien supprimé')</script> 
				<?php }
           else {  
		   ?> <script type="text/javascript">   alert('non supprimé')</script><?php }}
		 
 ?>
      
      
      
      
         
           
           
           
           
 </td>
      </tr>
      <tr>
        <td height="49"><table width="200" border="0">
  
</table>
</td>
      </tr>
      <tr>
        <td height="0"></td>
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