<?php
        include('View_Entete.php');

        include('View_Menu.php');
        
    echo'
<section class="corps" id="corps_CV"> 
    <h1> Curriculum Vitae </h1>
    <hr>
    <section>
        <table id="entete">
            <tr><!-- Entête de présentation-->
                <td class="colonne1"><!-- adresse -->
                    <br/>
                    <p id="identite">Marie-Rose LEJAY </p>
                    <p id=adresse>384 avenue Adolphe Alphand <br/>
                    34080 MONTPELLIER <br/>
                    06 89 78 94 63 <br/>
                    marierose.lejay@gmail.com <br/>
                    28 ans</p>
                </td>
                <!-- titre -->
                <td class="colonne2" id="titre"><h2> Analyste Programmeuse </h2></td>
                <!-- photo -->
                <br/>
                <td class="colonne3"><img src="../Images/DSC01278_v8.jpg"> </img></td>
            </tr>
        </table>
        <table id="EP">
            <tr><!-- Expérience professionnelle -->
                <td class="section1"><hr class="trait"></td>
                <td class="section2"><h2> Expérience professionnelle </h2></td>
                <td class="section3"><hr class="trait"></td>
            </tr>
        </table>
        <table>
            <tr><!-- classement par mission -->
                <!-- période -->
                <td class="colonne1"> 2012-14 </br> (26 mois) </td>
                <td class="colonne2">
                    <!-- entreprise --> 
                    <h3>SOPRA GROUP (Informatique, Groupe, C.A. 1,3 Ma€)<h3>
                    <!-- descriptif missions -->
                    <h4 class="mission">Maintenance corrective opérationnelle, support, développements</h4>
                    <ul>
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
                <!-- poste -->
                <td class="colonne3"> Ingénieure Développement </td>
            </tr>
            <tr><!-- classement par mission -->
                <!-- période -->
                <td class="colonne1"> 2010-11 </br> (11 mois) </td>
                <td class="colonne2">
                    <!-- entreprise --> 
                    <h3>AQUILAB (Informatique santé, PE, C.A. 2 M€)<h3>
                    <!-- descriptif missions -->
                    <h4 class="mission">Animation du système de management de la qualité (ISO 9001 et 13485)</h4>
                    <ul>
                        <li> Maintien de la certification ISO 9001 et du marquage CE des produits permettant ainsi la poursuite de
                            leur vente,</li>
                        <li> Mise à jour du système qualité (actualisation des processus, désignation de nouveaux responsables
                            processus, mise à jour des documents qualités) </li>
                    </ul>
                </td>
                <!-- poste -->
                <td class="colonne3""> Assistante qualité </td>
            </tr>
            <tr><!-- classement par mission -->
                <!-- période -->
                <td class="colonne1"> 2010 </br> (4 mois) </td>
                <td class="colonne2">
                    <!-- entreprise --> 
                    <h3>TOITVERT (Toiture végétalisée, TPE, C.A. 582 K€)<h3>
                    <!-- descriptif missions -->
                    <h4 class="mission">Gestion de tâches logistiques, administratives et travaux connexes à la gestion d’une TPE</h4>
                    <ul>
                        <li>Suivi des commandes (devis, relances clients),</li>
                        <li> Gestion administrative (facturations, comptabilité allégée, DEB (contrôle comptabilité pour la douane)) </li>
                    </ul>
                </td>
                <!-- poste -->
                <td class="colonne3""> Assistante de direction </td>
            </tr>
            <tr><!-- classement par mission -->
                <!-- période -->
                <td class="colonne1"> 2009 </br> (6 mois) </td>
                <td class="colonne2">
                    <!-- entreprise --> 
                    <h3>SPIE (Electricité, Groupe, C.A. 3,75 Ma€)<h3>
                    <!-- descriptif missions -->
                    <h4 class="mission">Sensibilisation du personnel et mise en place de la démarche environnement au sein du service Ergonomie
                        et Mobilier Technique (E.M.T.) de SPIE</h4>
                    <ul>
                        <li> Formation du personnel à l\'environnement,</li>
                        <li> Création de supports de communication sur l\'environnement (newsletters hebdomadaires, entretiens de
                            5 minutes hebdomadaires, réunions de formation trimestrielles) </li>
                    </ul>
                </td>
                <!-- poste -->
                <td class="colonne3"> Responsable environnement </td>
            </tr>
            <tr><!-- classement par mission -->
                <!-- période -->
                <td class="colonne1">  2008-09 </br> (7 mois) </td>
                <td class="colonne2">
                    <!-- entreprise --> 
                    <h3>ALLIANCES (Réseau RSE)<h3>
                    <!-- descriptif missions -->
                    <h4 class="mission">Étude d’optimisation de la gestion des déchets des grandes surfaces du Nord-Pas-de-Calais</h4>
                    <ul>
                        <li> Benchmark des initiatives intéressantes de gestion des déchets,</li>
                        <li>  Réalisation d’un guide à destination des grandes surfaces</li>
                    </ul>
                </td>
                <!-- poste -->
                <td class="colonne3">  Chargée de mission</td>
            </tr>
            <tr><!-- classement par mission -->
                <!-- période -->
                <td class="colonne1"> 2008 </br> (5 mois) </td>
                <td class="colonne2">
                    <!-- entreprise --> 
                    <h3>ZinCo GmbH (Toiture végétalisée, GE, C.A. 14M€, Allemagne)<h3>
                    <!-- descriptif missions -->
                    <h4 class="mission">Recherche et développement au sujet du coefficient de ruissellement des toitures végétalisées</h4>
                    <ul>
                        <li> Rédaction de synthèses d\'expériences et d\'un rapport</li>
                    </ul>
                </td>
                <!-- poste -->
                <td class="colonne3"> Ingénieure R & D </td>
            </tr>
            <tr><!-- classement par mission -->
                <!-- période -->
                <td class="colonne1"> 2007-08 </br> (7 mois) </td>
                <td class="colonne2">
                    <!-- entreprise --> 
                    <h3>Ville de Tourcoing<h3>
                    <!-- descriptif missions -->
                    <h4 class="mission">Caractérisation des déchets des services et diminution du tout venant de la ville de Tourcoing</h4>
                    <ul>
                        <li> Conception, développement et mise en oeuvre du projet basé sur le travail en équipe</li>
                    </ul>
                </td>
                <!-- poste -->
                <td class="colonne3"> Chargée de mission environnement </td>
            </tr>
            <tr><!-- classement par mission -->
                <!-- période -->
                <td class="colonne1"> 2007 </br> (3 mois) </td>
                <td class="colonne2">
                    <!-- entreprise --> 
                    <h3>SNCF (Ferroviaire, Groupe, C.A. 16,3 Ma€)<h3>
                    <!-- descriptif missions -->
                    <h4 class="mission">Prise en compte de l’environnement dans la maîtrise de la végétation ferroviaire</h4>
                    <ul>
                        <li> Proposition de pistes d’amélioration concernant cette maîtrise</li>
                    </ul>
                </td>
                <!-- poste -->
                <td class="colonne3"> Technicienne environnement </td>
            </tr>
            <tr><!-- classement par mission -->
                <!-- période -->
                <td class="colonne1"> 2005-06 </br> (1,5 mois </br> 1 mois) </td>
                <td class="colonne2">
                    <!-- entreprise --> 
                    <h3>Laboratoire d’Eco-Toxicologie de l’UFR Sciences de Reims<h3>
                    <!-- descriptif missions -->
                    <h4 class="mission">Etude de la métallothionéine chez un bivalve d’eau douce, Dreissena polymorpha</h4>
                    <ul>
                        <li> Transfert du déséthylterbuméton à travers une colonne de sol</li>
                    </ul>
                </td>
                <!-- poste -->
                <td class="colonne3"> Aide laboratoire </td>
            </tr>
        </table>
        <table id="AC">
            <tr><!-- Autres Compétences -->
                <td class="section1"><hr class="trait"></td>
                <td class="section2"><h2> Autres Compétences </h2></td>
                <td class="section3"><hr class="trait"></td>
            </tr>
        </table>
        <table>
            <tr>
                <td class="colonne1">Informatique</td>
                <td class="colonne2"><ul><li>Java, python, php, javascript, html, css, vba, sql, plsql</li>
                        <li>Suite Microsoft Office, Access</li>
                        <li>Photoshop, Autocad,</li>
                        <li>Logiciels open source (Gimp, Open Office,...)</li></ul></td>
                <td class="colonne3"></td>
            </tr>
            <tr>
                <td class="colonne1"> Langues </td>
                <td class="colonne2"><ul><li>Anglais (courant),</li>
                        <li>Allemand (notions),</li>
                        <li>Espagnol (notions)</li></ul></td>
                <td class="colonne3"></td>
            </tr>
        </table>
        <table id="F">
            <tr><!-- Formations -->
                <td class="section1"><hr class="trait"></td>
                <td class="section2"><h2> Formations </h2></td>
                <td class="section3"><hr class="trait"></td>
            </tr>
        </table>
        <table>
            <tr><!-- année -->
                <td class="colonne1">2014</td>
                <!-- intitulé et matières -->
                <td class="colonne2"><h3>BTS Services Informatiques aux Organisations</h3>
                    <p>Java, Python, JavaScript, Php, HTML, SQL</p>
                </td>
                <!-- organisme -->
                <td class="colonne3">GRETA</td>
            </tr>
            <tr><!-- année -->
                <td class="colonne1">2012</td>
                <!-- intitulé et matières -->
                <td class="colonne2"><h3>Formation intensive au Java/JEE (1,5 mois)</h3>
                    <p>Java, JEE, HTML, JavaScript, SQL</p></td>
                <!-- organisme -->
                <td class="colonne3">IFOSUP</td>
            </tr>
            <tr><!-- année -->
                <td class="colonne1">2012</td>
                <!-- intitulé et matières -->
                <td class="colonne2"><h3>Formation à distance (3 mois)</h3>
                    <p>Energie et Développement durable et Energies renouvelables dans l\'habitat économe en énergie</p></td>
                <!-- organisme -->
                <td class="colonne3">CNAM</td>
            </tr>
            <tr><!-- année -->
                <td class="colonne1">2009</td>
                <!-- intitulé et matières -->
                <td class="colonne2"><h3>Master professionnel Expertise et Traitement en Environnement</h3>
                    <p>Formation généraliste en environnement (Management de la qualité, Gestion des risques...)</p></td>
                <!-- organisme -->
                <td class="colonne3">FLST / ISA Lille</td>
            </tr>
            <tr><!-- année -->
                <td class="colonne1">2007</td>
                <!-- intitulé et matières -->
                <td class="colonne2"><h3>Licence Environnement et Développement Durable</h3>
                    <p>Formation aux sciences du végétal et à la chimie environnementale (Protection des cultures, Ecologie...)</p></td>
                <!-- organisme -->
                <td class="colonne3">UFR Sciences Reims</td>
            </tr>
        </table>
        <table id="IC">
            <tr><!-- Informations Complémentaires -->
                <td class="section1"><hr class="trait"></td>
                <td class="section2"><h2> Informations Complémentaires </h2></td>
                <td class="section3"><hr class="trait"></td>
            </tr>
        </table>
        <table>
            <tr><!-- catégorie -->
                <td class="colonne1">Loisirs :</td>
                <!-- détail -->
                <td class="colonne2">Randonnée en montagne, Lecture (Science-fiction, Fantasy, …), Jeux vidéo</td>
                <td class="colonne3"></td>
            </tr>
            <tr><!-- catégorie -->
                <td class="colonne1">Autre : <br/><br/></td>
                <!-- détail -->
                <td class="colonne2">Permis B, véhicule personnel<br/><br/></td>
                <td class="colonne3"><br/><br/></td>
            </tr>
        </table> 
    </section>
    </br>
    <p> Vous  pouvez aussi télécharger mon cv au format pdf <i class="fa fa-file-pdf-o"></i></p>

    <!-- Réseaux sociaux -->
    <aside class="liens"> Vous pouvez aussi me retrouver sur : 
        <br>
        <a href="https://fr.linkedin.com/"> <img id="linkedin" src="../Images/linkedin2.png" alt="Linkedin"/> </a>      
        <a href="https://secure.viadeo.com/fr/signin"> <img id="viadeo" src="../Images/viadeo.png" alt="Viadeo"/> </a> 
    </aside>
</section>
';

include('View_PiedPage.php');