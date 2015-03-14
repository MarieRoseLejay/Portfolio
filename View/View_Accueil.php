<?php
	include('View_Entete.php');

	include('View_Menu.php');
	
    echo'
		<section class="corps" id="corps_Accueil"> 
            <h1> Accueil </h1>
            <hr>
			<p class="texte">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi 
            ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit 
            in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui 
            officia deserunt mollit anim id est laborum."</p>
			
			<aside class="liens"> Vous pouvez aussi me retrouver sur : 
				<br>
				<a href="https://fr.linkedin.com/"> <img id="linkedin" src="/Images/linkedin2.png" alt="Linkedin"/> </a>      
				<a href="https://secure.viadeo.com/fr/signin"> <img id="viadeo" src="/Images/viadeo.png" alt="Viadeo"/> </a> 
			</aside>
		</section>
	';
		
	include('View_PiedPage.php');
