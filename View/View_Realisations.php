<?php
	include('View_Entete.php');

	include('View_Menu.php');
	
    echo'
		<section class="corps" id="corps_Realisations">
            <h1> Titre </h1>
			<hr>
            <p class="text">"L\'ensemble des réalisations présentées dans cette page correspondent à des projets personnels réalisés dansle cadre du BTS SIO SLAM"</p>
			
			<div id="projet1">
				<div id="projet1_clos">
					<a href="#projet1_clos" class="ouvrir"> ouvrir <i class="fa fa-sort-desc" id="icone1"> </i></a>
					<a href="#projet1" class="fermer"> fermer <i class="fa fa-sort-asc" id="icone2"> </i></a>
					<article id="article1">
						<h2> Titre du projet </h2>
						<p> Description du projet </p>
					</article>
				</div>
			</div>
			
			
        </section>
	';
		
	include('View_PiedPage.php'); 