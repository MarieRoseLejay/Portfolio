<?php
	include('View_Entete.php');

	include('View_Menu.php');
	
    echo'
		<section class="corps" id="corps_Accueil"> 
            <h1> Bienvenue ! </h1>
            <hr>
			<p class="texte">"Bonjour, </br> Vous êtes sur le portfolio de Marie-Rose Lejay. </br></br>
							Celui-ci a été réalisé dans le cadre du BTS Services informatiques aux organisations (SIO) 
							option solutions logicielles et applications métiers (SLAM). </br>
							Vous pourrez y consulter mon curriculum vitae ainsi que l\'ensemble de mes réalisations en informatique. "</p>
			
			<aside class="liens"> Vous pouvez aussi me retrouver sur : 
				<br>
				<a href="https://fr.linkedin.com/"> <img id="linkedin" src="../Images/linkedin2.png" alt="Linkedin"/> </a>      
				<a href="https://secure.viadeo.com/fr/signin"> <img id="viadeo" src="../Images/viadeo.png" alt="Viadeo"/> </a> 
			</aside>
		</section>
	';
		
	include('View_PiedPage.php');
