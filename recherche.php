<?php
    require_once("User/user_id.php");
$ch=isset($_GET['search']) ? $_GET['search'] : die();
?>
<!DOCTYPE html>
<html lang="en">
  <head> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Labo Riadi</title>

    <!-- Bootstrap CSS -->    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
  </head>
  <body>
  <!-- container section start -->
  <section id="container" class="">
      <!--header start-->
      
      <header class="header dark-bg">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="" data-placement="bottom"><i class="icon_menu"></i></div>
            </div>

            <!--logo start-->
            <a href="evenements.php" class="logo">Laboratoire <span class="lite">Riadi</span></a>
            <!--logo end-->

            <div class="nav search-row" id="top_menu">
                <!--  search form start -->
                <ul class="nav top-menu">                    
                    <li>
                        <form method="GET" action="recherche.php" class="navbar-form">
                            <input class="form-control" name="search" placeholder="Search" type="text">
                        </form>
                    </li>                    
                </ul>
                <!--  search form end -->                
            </div>

            <div class="top-nav notification-row">                
                <!-- notificatoin dropdown start-->
                <ul class="nav pull-right top-menu">
                <?php 
                  if($_SESSION['user_session']!=0)
                  {
                    require_once("User/user_id.php");
                    echo "<li class='dropdown'>";
                        echo "<a data-toggle='dropdown' class='dropdown-toggle' href='#'>";
                            echo "<span class='profile-ava'>";
                                echo "<img alt='' src='img/admin.jpg'>";
                            echo "</span>";
                            echo "<span class='username'>";
                            print($userRow['user_name']);
                            echo "</span>";
                            echo "<b class='caret'></b>";
                        echo "</a>";
                        echo "<ul class='dropdown-menu extended logout'>";
                            echo "<div class='log-arrow-up'></div>";
                            echo "<li class='eborder-top'>";
                                echo "<a href='profil2.php'><i class='icon_profile'></i> Mon Profil</a>";
                            echo "</li>";
                            echo "<li>";
                                echo "<a href='#'><i class='icon_mail_alt'></i> Mes Messages</a>";
                            echo "</li>";
                            echo "<li>";
                                echo "<a href='#'><i class='icon_chat_alt'></i> Contact</a>";
                            echo "</li>";
                            echo "<li>";
                                echo "<a href='logout.php?logout=true'><i class='icon_key_alt'></i> Deconnecter</a>";
                                //echo "<a href='evenements.php?logout'><i class='icon_key_alt'></i> Deconnecter</a>";
                            echo "</li>";
                            echo "<li>";
                                echo "<a href='#'><i class=''></i> Documentation</a>";
                            echo "</li>";
                        echo "</ul>";
                    echo"</li>";
                }
                else
                {
                  echo "<li>";
                   echo "<a href='login.php'><i class='icon_key_alt'></i>connecter</a>";
                } echo "</li>";
                ?>
                    <!-- user login dropdown end -->
                </ul>
                <!-- notificatoin dropdown end-->
            </div>
      </header>      
      <!--header end-->

      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu">   

                  <?php
                  if($_SESSION['user_session']!=0)
                  {
                  echo "<li>";
                  echo "<a class='' href='acceuil.php?ident={$userRow['user_id']}'>"; 
                  echo "<i class='icon_house_alt'></i>";
                  echo "<span>Acceuil</span>";
                  echo "</a>";
                  echo "</li>";

                  echo "<li>";
                  echo "<a class='' href='projets.php'>";
                  echo "<i class='icon_building'></i>";
                  echo "<span>Projets</span>";
                  echo "</a>";
                  echo "</li>";

                  }
                  ?>

                  <li>
                  <a class="" href="evenements.php">
                  <i class="icon_calendar"></i>
                  <span>Evénements</span>
                  </a>
                  </li>               
                  <li>    

                  <?php
                  if($_SESSION['user_session']!=0)
                  {
                  echo "<li>";                    
                      echo "<a class='' href='membres.php'>";
                          echo "<i class='icon_group'></i>";
                          echo "<span>Membres</span>";
                      echo "</a>";
                  echo "</li>";
                  }
                  ?>
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class=" icon_menu-square_alt2"></i>
                          <span>Présentation</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="a_propos_de_riadi.php">A Propos de Riadi</a></li>                          
                          <li><a class="" href="historique.php">Historique</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_search_alt"></i>
                          <span>Recherche</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                     <ul class="sub">
                          <li><a class="" href="axes_de_recherche.php">Axes de Recherche</a></li>
                          <li><a class="" href="productions_scientifiques.php"><h5>Productions Scientifiques</h5></a></li>
                      </ul>
                  </li>

                  <li>                    
                      <a class="" href="cooperations_et_partenariats.php">
                          <i class="icon_piechart"></i>
                          <span>Coopérations et</span>
                          <span> Partenariats</span>
                      </a>
                  </li>
                   <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_globe-2"></i>
                          <span>Conférences</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                        <ul class="sub">                          
                            <li><a class="" href="http://www.core.edu.au">CORE/ERA</a></li>
                                 </ul>
                          </li>
                  </li> 

<!--                   <li>
                      <a class="" href="projets.php">
                          <i class="icon_building"></i>
                          <span>Projets</span>
                      </a>
                  </li>
 -->                  
<!--                   <li class="sub-menu ">
                      <a href="javascript:;" class="">
                          <i class="icon_documents_alt"></i>
                          <span>Pages</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">                          
                          <li><a class="" href="profil.php">Profil</a></li>
                          <li><a class="" href="login.php"><span>Login Page</span></a></li>
                      </ul>
                  </li>
 -->                  
                  <li class="sub-menu ">
                      <a href="javascript:;" class="">
                          <i class="icon_link"></i>
                          <span>Liens</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">                          
                          <li><a class="" href="http://www.ensi.rnu.tn">Ensi</a></li>
                          <li><a class="" href="http://www.uma.rnu.tn/"><span>Université</span></a></li>
                       </ul>
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->

      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <div class="row">
                <div class="col-lg-12">
                            <h3 class="page-header"><i class="fa fa fa-bars"></i>Recherche</h3>
                            <ol class="breadcrumb">
                                <li><i class="fa fa-home"></i><a href="evenements.php">Acceuil</a></li>
                                <li><i class=""></i><a href="#">Recherche</a></li>
                                <?php
                                echo "<li><i class=''></i>\"$ch\"</li>";
                                ?>
                            </ol>
                        </div>
              </div>
              <div class="row">
                <?php 
                //$chaine = $member->search($ch);
                //echo "$chaine" ;
                //print_r($chaine);

        try
           {
            $stmt1=$member->runQuery("SELECT user_id, user_name, joining_date, user_email , Office , Position FROM _Membres WHERE user_name = '$ch'");
             
            $stmt1->execute();
             
            $row1 = $stmt1->fetch(PDO::FETCH_ASSOC);

            $num1 = $stmt1->rowCount();

             $user_id = $row1['user_id'];
              $user_name = $row1['user_name'];
             // $joining_date = $row['joining_date'];
              $user_email = $row1['user_email'];
             // $Office = $row['Office'];
              $Position = $row1['Position'];
            }

        catch(PDOException $exception){
            die();
        }

            if($num1>0){
                //while ($row1 = $stmt1->fetch(PDO::FETCH_ASSOC)) {
                  //extract($row1) ;
              echo "<div class='col-lg-2'>";
                    echo "<a href='http://localhost/labo-user_2/index91.php?ident={$user_id}' ><h2 style='color : black'>{$user_name}</h2></a>";
                    echo "<h5 style='color : black'>{$Position}</h5>";
                    echo "<h6 style='color : black'>{$user_email}</h6>";
                    
              echo "</div>";
              //echo "<div class='col-lg-6'>";
              //echo "<h5 style='color : black'>{$Position}</h5>";
              //echo "</div>";
                  //}
                }        


            $stmt=$member->runQuery("SELECT id , id_inscrit , Type , Contenu , Titre , date_creation FROM _blog
                                    WHERE Type='$ch'
                                       or Titre='$ch'
                                       or id_inscrit = '$user_id'
                                    ORDER BY Type DESC ");
            //$stmt->bindParam(1, $id_inscrit);
            $stmt->execute();
            $num = $stmt->rowCount();
            if($num>0){
              $ok=true;
              echo "<div class='col-lg-8'>";
              echo "<ol>";
              
              while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                extract($row) ;
                                
                            if($ok||$Type2!=$Type)
                              {

                                echo "<br/>";
                                echo "<h3>{$Type} :</h3>" ; $ok=false ;
                              }
                              $Type2=$Type ;
                            if($Contenu!=" "&&$Contenu!="")
                              {
                                echo "<li>{$Titre}</li>";
                                echo "<h6>{$Contenu}</h6>";
                               }

                          }
                          
                        }
echo "</ol>";
echo "</div>";


        if($num==0&&$num1==0)
        {
          echo "\"$ch\" n'est pas trouvé <br/> ";

            echo "<div class='nav search-row' id='top_menu'>";
                echo "<ul class='nav top-menu'>  ";                  
                    echo "<li>";
                        echo "<form method='GET' action='recherche.php' class='navbar-form'>";
                            echo "<input class='form-control' name='search' placeholder='Search' type='text'>";
                       echo "</form>";
                   echo "</li> ";                    
                echo "</ul>";
            echo "</div>";
        }

                ?>
              </div>

      </section>
      </section>
      <!--main content end-->
  </section>
  <!-- container section end -->
    <!-- javascripts -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script><!--custome script for all page-->
    <script src="js/scripts.js"></script>


 </body>
</html>