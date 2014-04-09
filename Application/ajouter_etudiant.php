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
   <td width="155"  bgcolor="#01B0F0" ><p class="menu01" ><a href="index.php">Accueil</a></p></td>
    <td width="155" background="images/b_fon_a.gif" ><p class="menu01"><a href="gestion_etudiants.php">Etudiant</a></p></td>
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
	<td background="images/b_fon_a.gif" width="160">
	 




</td>
	<td width="620" rowspan="0">
<div align="center">
  <div>
    <img align="left" src="images/top01.gif" width="620" height="24" alt="" border="0" />
    <table width="500" border="0" class="left" height="300" >
      <tr>
        <th class="connexion" scope="col">Ajouter nouveau etudiant</th>
      </tr>
      <tr>
        <td  height="49"><form action='ajouter_etudiant.php'  method="post" >
        
        <table width="100%" height="100%" border="0" cellpadding="5">
  <tr>
    <td width="40%">CNE</td>
    <td width="405"><input type="text" width="100%" name="cne"/></td>
  </tr>
  <tr>
    <td>Nom</td>
    <td><input type="text" width="100%" name="nom"/></td>
  </tr>
  
  <tr>
    <td>Prenom</td>
    <td><input type="text" width="100%" name="prenom" /></td>
  </tr>
  <tr>
    <td>Date naissance</td>
    <td><input type="date" width="100%" name="date_naissance"/></td>
  </tr>
  <tr>
    <td>Sexe</td>
    <td>
<input type="radio" name="sexe" value="F" id="F"
checked="checked" /> <label for="F">F</label>
<input type="radio" name="sexe" value="M" id="M" /><label for="M">M</label></td>
  </tr>


  <tr>
    <td>Formation</td>
    <td><select name="formation" >
    <option>Cycle d'ingénieur</option>
    <option>DEUST</option>
    <option>LST</option>
    <option>MST</option></select> </td>
  </tr>
  <tr>
    <td>Filiere</td>
    <td><select name="filiere" >
      <?php 
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
{ 
echo"<option>$row[0]</option>"; 
} 
?>
    </select></td>
  </tr>
   <tr>
    <td>Niveau</td>
    <td><select name="niveau">
 <?php 
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
{ 
echo"<option>$row[0]</option>"; 
} 
?>
</select></td>
  </tr>
  <tr height=""></tr>
  <tr>
  <td></td><td><table width="100%" height="30"><tr><td width="215"><input type="reset" value="      Vider        " align="center"  width="100"/></td><td width="179"><input type="submit" value="Enregistrer" name="enregistrer" align="right" /></td></tr></table></td></tr>
</table>
        </form>
          <?php $link= mysql_pconnect('localhost', 'root', '');
if (!$link) {
   die('Impossible de se connecter : ' . mysql_error());
}
$bdd= mysql_select_db('gestion_bibliotheque_fstt', $link);
if (!$bdd) {
   die ('Impossible de sélectionner la base de données : ' . mysql_error());}
   

if( isset($_POST['enregistrer'])){
		
	$result1="INSERT INTO etudiant(CNE, Id_filiere, Id_niveau,nom_etudiant,prenom_etudiant,date_naissance,sexe) VALUES (". $_POST["cne"].",(select id_filiere from filiere where id_formation=4 and libelle_filiere='".$_POST["filiere"]."'),(select id_niveau from niveau where libelle_niveau='".$_POST["niveau"]."'),'".$_POST["nom"]."','".$_POST["prenom"]."','".date($_POST["date_naissance"])."','".$_POST["sexe"]."')";
if(mysql_query($result1))
//if(mysqli_query($bdd,'INSERT INTO etudiant(CNE, Id_filiere, Id_niveau) VALUES ('.$cne.',4,3)'))
		   {
			   ?> 
			    <script type="text/javascript">   alert('L\'étudiant a été ajouté avec succès')</script>
                  <script type="text/javascript">document.location="gestion_etudiants.php"</script> 
				<?php }
           else {  
		   ?> <script type="text/javascript">   alert('Erreur , L\'étudiant n\'a pas été ajouté ')</script>
		     <script type="text/javascript">document.location="gestion_etudiants.php"</script><?php }}
		 
 ?>
           
 </td>
      </tr>
      <tr>
        <td height="0"><table width="200" border="0">
  
</table>
</td>
      </tr>
      
    </table>
   

  </div>
</div></td>
</tr>
<tr valign="bottom" bgcolor="#D0E0ED">
	<td background="images/b_fon_a.gif" width="160"></td>
</tr>
</table>
<table border="0" cellpadding="0" cellspacing="0" width="620" height="64" background="images/fon_bot.gif">
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