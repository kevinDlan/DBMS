<?php 
    include('layouts/header.php')
?>
<!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <h1>Qu'est ce qu'un <span>SGBD</span> ?
      </h1>
      <h2>La veille technologique du Système de Gestion de Base de Données</h2>
    </div>
  </section><!-- End Hero -->
  <main id="main">
    <!-- ======= About Section ======= -->

    <section id="about" class="about section-bg">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <img src="assets/img/about.jpeg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center"="fade-up"-delay="100">
            <p style="justify-content: stretch;">
              <!-- Le Système de Gestion de Gase de Données (SGBD) ou SGBD en anglais fait référence à la technologie de stockage et de récupération des données des utilisateurs avec la plus grande efficacité ainsi que des mesures de sécurité appropriées. Ce didacticiel explique les bases du SGBD telles que son architecture, les modèles de données, les schémas de données, l'indépendance des données, le modèle E-R, le modèle de relation, la conception de base de données relationnelle, le stockage et la structure des fichiers et bien plus encore. -->
              Les Systèmes de Gestion de Base de Données (SGBD) ou DBMS en anglais sont les logiciels intermédiaires entre les utilisateurs et les bases de données. 
            L'ensemble SGBD et base de données est destiné à permettre le stockage de données d'une
             manière offrant de nombreux avantages par rapport à un enregistrement conventionnel dans
              des fichiers. Il permet d'obtenir et de modifier rapidement des données, de les partager
               entre plusieurs usagers. Il garantit l'absence de redondance, l'intégrité, la confidentialité
                et la pérennité des données tout en donnant des moyens d'éviter les éventuels conflits de 
                modification et en cachant les détails du format de fichier des bases de données 
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->  <br><br>

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">
        <div class="section-title1">
          <h3>Les différents type de SGBD</h3>
          <p>
            Selon leur construction et les possibilités qu'ils offrent, 
            les SGBD peuvent être dit <strong>hiérarchiques</strong>, <strong>relationnels</strong>, <strong>orientés objet</strong>, 
            <strong>objet-relationnels</strong>, <strong>XML/RDF</strong> ou <strong>mixtes</strong>. Ils peuvent être distribués, 
            centralisés ou embarqués et peuvent être spatiaux. 
            Ils se différencient également par la taille des bases de données qu'ils peuvent manipuler. 
            La majorité des SGBD sont de type relationnel : ils manipulent des bases de données 
            conformément au modèle de données relationnel.
          </p>
          <ul>
            <li><p>
              <strong>SGBD Relationnel</strong> : Selon ce modèle, 
              les données sont placées dans des tables avec lignes et colonnes et n'importe quelle donnée 
              contenue dans la base de données peut être retrouvée à l'aide du nom de la table, 
              du nom de la colonne et de la clé primaire. Le modèle relationnel est destiné à assurer 
              l'indépendance des données et à offrir les moyens de contrôler la cohérence et d'éviter 
              la redondance. 
              Il permet de manipuler les données comme des ensembles en effectuant des opérations de la 
              théorie des ensembles. Les règles de cohérence qui s'appliquent aux bases de données 
              relationnelles sont l'absence de redondance ou de nul des clés primaires, 
              et l'intégrité référentielle11.
            </p></li>
            <li><p>
              <strong>SGBD Hiérarchique</strong> : Une base de données hiérarchique est une base de données dont le système de gestion 
              lie les enregistrements dans une structure arborescente où chaque enregistrement n'a qu'un seul 
              possesseur. 
              Elle a été utilisée dans les premiers systèmes de gestion de base de données de type mainframe et a 
              été inventée par la NASA.
            </p></li>
            <li>
              <p>
                <strong>SGBD orienté objet et objet-relationnel</strong> : Les SGBD orientés objet sont un 
                sujet de recherche depuis 
                1980, lorsque sont apparus les premiers langages de programmation orientée objet. 
                Ils sont destinés à offrir les fonctionnalités des SGBD à des langages orientés objet et 
                permettre le stockage persistant des objets. Les objets sont manipulés en utilisant les 
                possibilités natives des langages orientés objet et une interface de programmation permet 
                d'exploiter les fonctionnalités du SGBD. Celui-ci est équipé des mécanismes nécessaires pour 
                permettre l'utilisation des possibilités d'encapsulation, d'héritage et de polymorphisme des 
                langages de programmation orientée objet12,13. Les SGBD objet-relationnel offrent à 
                la fois les possibilités des SGBD orientés objet et ceux des SGBD relationnels14.
              </p>
            </li>
            <li><p>
              <strong>SGBD à base de XML ou RDF</strong> : Une base de données XML Native (NXD en anglais) est une base de 
              données qui s'appuie sur le modèle de données fourni par XML. Elle utilise typiquement des 
              langages de requête XML comme XPath ou XQuery. 
              Une extension possible est une base RDF, avec le langage d'interrogation SPARQL.
            </p></li>
            <li>
              <p>
                <strong>SGBD mixte</strong> : De tels SGBD utilisent les différents paradigmes évoqués ci-dessus.
              </p>
            </li>
            <li>
              <p>
                <strong>SGBD centralisé ou distribué</strong> : Un SGBD est dit centralisé lorsque 
                le logiciel contrôle l'accès à une base de données placée sur un 
                ordinateur unique. Il est dit distribué lorsqu'il contrôle l'accès à des données qui sont dispersées entre plusieurs ordinateurs. Dans cette construction, un logiciel est placé sur chacun des ordinateurs, et les différents ordinateurs utilisent des moyens de communication pour coordonner les opérations. Le fait que les informations sont dispersées est caché à l'utilisateur, 
                et celles-ci sont présentées comme si elles se trouvaient à une seule place
              </p>
            </li>
            <li>
              <p>
                <strong>SGBD embarqué</strong> : Une base de données embarquée (anglais embedded) est un SGBD 
                sous forme de composant logiciel qui peut être incorporé dans un logiciel 
                applicatif. Contrairement à un SGBD client-serveur dans lequel un processus 
                traite les requêtes, un modèle embarqué se compose de bibliothèques logicielles 
                liées par liaison dynamique avec le logiciel qui utilise le SGBD. Dans ce type de SGBD, 
                la base de données est souvent composée d'un fichier unique dont le format est identique 
                quelles que soient les caractéristiques de l'ordinateur utilisé. Bien que le SGBD offre de 
                nombreux avantages par rapport à un enregistrement sur fichier, ces derniers sont souvent préférés aux SGBD, 
                qui ont la réputation d'être des logiciels lourds, encombrants et compliqués à installer
              </p>
            </li>
            <li>
              <p>
                <strong> SGBD spatial</strong> : Les applications informatiques telles que les systèmes 
                d'information géographiques et les outils de conception assistée par ordinateur 
                utilisent des SGBD de type spatial. Ce type de logiciel permet le stockage d'informations 
                géométriques telles que des points, des lignes, des surfaces et des volumes. Ils comportent 
                des fonctions permettant de retrouver une information sur la base de caractéristiques géométriques 
                telles que les coordonnées ou la dimension. Le langage de requête du SGBD permet la manipulation 
                d'informations de géométrie tels que lignes, points ou polygones ; 
                le SGBD met en œuvre les algorithmes et les structures de fichiers nécessaire
              </p>
            </li>
          </ul>
        </div><br><br>
        <div class="row">
          <div class="col-lg-6 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="icon-box">
             
              <h4><a href="">Propriétés ACID  </a></h4>
              <p>Un SGBD moderne est plus réaliste et utilise des entités du monde réel pour concevoir son architecture. Il utilise également le comportement et les attributs. Par exemple, une base de données scolaire peut utiliser les élèves comme une entité et leur âge comme un attribut.</p>
            </div>
          </div>

          <div class="col-lg-6 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="icon-box">
              <h4><a href="">Accès multi-utilisateur et simultané  </a></h4>
              <p>Le SGBD prend en charge l'environnement multi-utilisateur et leur permet d'accéder et de manipuler des données en parallèle. Bien qu'il existe des restrictions sur les transactions lorsque les utilisateurs tentent de traiter le même élément de données, mais les utilisateurs n'en sont toujours pas conscients.</p>
            </div>
          </div>

          <div class="col-lg-6 col-md-6 d-flex align-items-stretch mt-4 ">
            <div class="icon-box">
              <h4><a href="">Vues multiples </a></h4>
              <p>Le SGBD offre plusieurs vues pour différents utilisateurs. Un utilisateur qui est dans le département des ventes aura une vue de la base de données différente de celle d'une personne travaillant dans le département de production. Cette fonctionnalité permet aux utilisateurs d'avoir une vue concentrée de la base de données en fonction de leurs besoins.</p>
            </div>
          </div>

          <div class="col-lg-6 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <h4><a href="">Sécurité </a></h4>
              <p>Des fonctionnalités telles que les vues multiples offrent une sécurité dans une certaine mesure où les utilisateurs ne peuvent pas accéder aux données d'autres utilisateurs et services. Le SGBD propose des méthodes pour imposer des contraintes lors de la saisie des données dans la base de données et de leur récupération à un stade ultérieur. </p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End of service Section -->
    
    <section id="portfolio" class="portfolio">
      <div class="container">
         <div class="section-title1">
          <h3>Quelque SGBD</h3>
    <ul>
 <li><a href="#">Microsoft Access</a></li>
 <li><a href="">SQL Server</a></li> 
 <li><a href="">MySQL</a></li>
 <li><a href="">Oracle Database</a></li>
</ul>
<ol> 
</ol>
        </div>
        </div>
      </div>
    </section>
  </main><!-- End #main -->
  <!-- ======= Footer ======= -->
<?php 
   include('layouts/footer.php') 
?>