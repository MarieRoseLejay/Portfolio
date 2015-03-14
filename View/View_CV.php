<?php
	include('View_Entete.php');

	include('View_Menu.php');
	
    echo'
		<section class="corps" id="corps_CV"> 
            <h1> Curriculum Vitae </h1>
			<hr>
			
			<!-- Entête de présentation-->
			<section>
				<!-- adresse -->
				<aside>
					Marie-Rose LEJAY <br/>
					384 avenue Adolphe Alphand <br/>
					34080 MONTPELLIER <br/>
					06 89 78 94 63 <br/>
					marierose.lejay@gmail.com <br/>
					28 ans
				</aside>
				<!-- titre -->
				<article><h2> Analyste Programmeuse </h2></article>
				<!-- photo -->
				<aside><img> photo </img></aside>
			</section>
            
			<!-- Expérience professionnelle -->
			<section>
				<!-- Titre section -->
				<aside>
					<hr>
					<h2> Expérience professionnelle </h2>
					<hr>
				</aside>
				</article>
					<table style="width:100%">
						<!-- classement par mission -->
						<tr>
							<!-- période -->
							<td> 2012-14 </br> (26 mois) </td>
							<!-- entreprise -->
							<td class="entreprise"> SOPRA GROUP (Informatique, Groupe, C.A. 1,3 Ma€) </td>
							<!-- poste -->
							<td class="poste"> Ingénieure Développement </td>
						</tr>
						<!-- descriptif missions -->
						<tr><td></td>
							<td class="mission"> Maintenance corrective opérationnelle, support, développements </td>
						</tr>
						<tr><td></td>
							<td><ul>
									<li class="détail"> Mission Conseil Général 59 maintenance corrective et opérationnelle chez le client 
									(septembre à août, 11 mois) : </li>
									<li> Support quotidien de niveau 1 à niveau 3 (assistance téléphonique, résolution de bugs, développements
									correctifs) sur un ensemble défini d\'applications sur le domaine DAS (aide à l\'enfance), </li>
									<li> Développements de correctifs ou d\'évolutions en vba et java script pour des applications clients, </li>
									<li> Réalisation et passage de scripts d\'extraction de données en sql, </li>
									<li> Qualification, </li>
									<li> Rédaction de la documentation utilisateur, </li>
									<li> Maintien et mise à jour de l\'outil de référencement des bugs récurrents,</li>
									
									<li class="détail"> Mission Kits en centre de service (chez le client septembre à avril, 8 mois) : </li>
									<li> Formation fonctionnelle à la version business – ecommerce d\'Oracle Atg, </li>
									<li> Réunions client, </li>
									<li> Définition des processus de fonctionnement du projet côté client, </li>
									<li> Utilisation service now, mantis </li>
									
									<li class="détail"> Mission Kits en centre de service (chez Sopra, septembre à février, 8 mois) : </li>
									<li> Développements et qualifications de scripts en sql et pl/sql, </li>
									<li> Utilisation de Svn (versioning du code), Sql+, passage de scripts sous Unix, </li>
									<li> Qualifications, recettes, </li>
									<li> Support niveau 3 : recherche et résolution d\'erreurs (calculs entre différentes tables d\'un même schéma,
									…), </li>
									
									<li class="détail"> Mission Vallourec (2 semaines) : </li>
									<li> Développement java (messages d\'erreur), </li>
									<li> Utilisation d\'Eclipse </li>
								</ul>
							</td>
						</tr>
							
							
							<td> 2010-11 </br> (11 mois) </td>
							<td> 2010 </br> (4 mois) </td>
							<td> 2009 </br> (6 mois) </td>
							<td> 2008-09 </br> (7 mois) </td>
							<td> 2008 </br> (5 mois) </td>
							<td> 2007-08 </br> (7 mois) </td>
							<td> 2007 </br> (3 mois) </td>
							<td> 2005-06 </br> (1,5 mois </br> 1 mois) </td>
						</tr>
						<!-- descriptif missions -->
						<tr>
							<td class="entreprise"> AQUILAB (Informatique santé, PE, C.A. 2 M€) </td>
							<td></td>
							<td class="entreprise"> TOITVERT (Toiture végétalisée, TPE, C.A. 582 K€) </td>
							<td></td>
							<td class="entreprise"></td>
							<td></td>
						</tr>
						<!-- poste -->
						<tr>
							<td>Eve</td>
							<td>Jackson</td>
							<td>94</td>
						</tr>
					</table> 
				</article>
				
				<aside></aside>
			</section>
			
			<!-- Autres Compétences -->
			<section>
				<!-- Titre section -->
				<aside>
					<hr>
					<h2> Autres Compétences </h2>
					<hr>
				</aside>
				<!-- Catégories -->
				<aside></aside>
				<!-- Compétences -->
				<article>
					
					<h3> Informatique </h3>
					<h3> Environnement </h3>
					<h3> Autre </h3>
				</article>
			</section>
			
			<!-- Formations -->
			<section>
				<!-- Titre section -->
				<aside>
					<hr>
					<h2> Formations </h2>
					<hr>
				</aside>
				<!-- année -->
				<aside></aside>
				<!-- intitulé et matières -->
				<article></article>
				<!-- organisme -->
				<aside></aside>
			</section>
			
			<!-- Informations Complémentaires -->
			<section>
				<!-- Titre section -->
				<aside>
					<hr>
					<h2> Informations Complémentaires </h2>
					<hr>
				</aside>
				<!-- catégorie -->
				<aside></aside>
				<!-- détail -->
				<article></article>
			</section>
			<p> Vous  pouvez aussi télécharger mon cv au format pdf <i class="fa fa-file-pdf-o"></i></p>
			
			<!-- Réseaux sociaux -->
			<aside class="liens"> Vous pouvez aussi me retrouver sur : 
				<br>
				<a href="https://fr.linkedin.com/"> <img id="linkedin" src="/Images/linkedin2.png" alt="Linkedin"/> </a>      
				<a href="https://secure.viadeo.com/fr/signin"> <img id="viadeo" src="/Images/viadeo.png" alt="Viadeo"/> </a> 
			</aside>
		</section>
	';
		
	include('View_PiedPage.php');