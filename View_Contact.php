<?php
    include('View_Entete.php');
    include('View_Menu.php');
    
    //initialisation des variables
        $email=(string)"";
        $emailError="";
        $objet=(string)"";
        $objetError="";
        $objet=(string)"";
        $objetError="";
        $contenu=(string)"";
        $contenuError="";
        $envoi=(string)"";
        
    //Validation de la saisie
    if(isset($_POST['envoyer'])){
        //Vérification pour l'email
        $email = test_input($_POST['email']);
        if(empty($email)){
            $emailError = "Vous devez saisir une adresse mail !";
        }
        else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $emailError = "Vous devez saisir une adresse mail correcte !";
        }
        //Vérification pour l'objet
        $objet = test_input($_POST['objet']);
        if(empty($objet)){
            $objetError = "Vous devez indiquez un objet !";
        }

        //Vérification pour le contenu
        $contenu  = test_input($_POST['contenu']);
        if(empty($contenu)){
            $contenuError = "Vous devez saisir du contenu !";
        }
        $headers = 'From:'.$email;
        $envoi = mail('marie-rose.lejay@orange.fr',$objet,$contenu,$headers);
        
        if($envoi == TRUE){
            $envoi = 'Email envoyé !';
        }
        else {
            $envoi = 'Echec de l\'envoi' ;
        }
    }
    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>
<section class="corps" id="corps_Contact">
    <h1> Contact </h1>
    <hr>
    <p class="text">Si vous souhaitez me contacter veuillez remplir le formulaire ci-dessous : </p>
    <form name="contact" action ="View_Contact.php" method="post">
        <label>E-mail : </label><input type="text" name="email" class="input">
        <p class="error"><?php echo $emailError;?></p>
        <label>Objet : </label><input type="text" name="objet" class="input">
        <p class="error"><?php echo $objetError;?></p>
        <label>Contenu : </label><input type="text" name="contenu" class="input" id="contenu"/>
        <p class="error"><?php echo $envoi;?></p>
        <input type="submit" name="envoyer" value="Envoyer" id="submit">
        <p class="error"><?php echo $envoi;?></p>
    </form>
    <aside class="liens"> Vous pouvez aussi me retrouver sur : 
        <br>
        <a href="https://fr.linkedin.com/pub/marie-rose-lejay/43/2aa/a76"> <img id="linkedin" src="Images/linkedin2.png" alt="Linkedin"/> </a>      
        <a href="http://fr.viadeo.com/fr/profile/marie-rose.lejay"> <img id="viadeo" src="Images/viadeo.png" alt="Viadeo"/> </a> 
    </aside>
</section>
<?php include('View_PiedPage.php');