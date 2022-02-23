<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title></title>
  </head>
  <body>
    <form action = "page2.php" method ="POST">
    Nom : <input name = 'nom' type = 'text' /> <br>
    Prénom : <input name = 'prenom' type = 'text' /> <br>
    Civilité : <label> <input name = 'civilite' type = 'radio' value= 'G' /> Garçon </label>
               <label> <input name = 'civilite' type = 'radio' value= 'F' /> Fille </label><br>
    Classe :
    <select name = 'classe' >
    	<option value = 'ginf1'>ginf1 </option>
    	<option value = 'ginf2'>ginf2 </option>
    	<option value = 'ginf3'>ginf3 </option>
    </select ><br>
    <input name = 'button' type = 'submit' />

    </form>

  </body>
</html>
