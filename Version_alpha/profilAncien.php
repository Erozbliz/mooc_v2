<?php
    session_start();
    include '_include/connect.inc.php';
  //  echo $_SESSION["id_user"];
    try { 
        $select3 = $bdd->prepare("SELECT nom,prenom,email,pseudo,pays FROM user WHERE id_user = ".$_SESSION["id_user"]."");
        $select3->execute();
        $lignes3 = $select3->fetchAll();
        $nom = $lignes3[0]["nom"];
        $prenom = $lignes3[0]["prenom"];
        $email = $lignes3[0]["email"];
        $pseudo  = $lignes3[0]["pseudo"];
        $pays =  $lignes3[0]["pays"];
    } catch (Exception $e) { 
        echo $e->errorMessage();
        echo "->erreur";
    }
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>MOOC chapitre </title>

    <!-- Bootstrap core CSS -->

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="fonts/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="css/custom.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/maps/jquery-jvectormap-2.0.1.css" />
    <link href="css/icheck/flat/green.css" rel="stylesheet" />
    <link href="css/floatexamples.css" rel="stylesheet" type="text/css" />

    <script src="js/jquery.min.js"></script>
    <script src="js/nprogress.js"></script>
    <script>
        NProgress.start();
    </script>
    
    <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>


<body class="nav-md">

    <div class="container body">


        <div class="main_container">

            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">

                    <div class="navbar nav_title" style="border: 0;">
                        <a href="index.php" class="site_title"><i class="glyphicon glyphicon-education"></i> <span>MOOCs</span></a>
                    </div>
                    <div class="clearfix"></div>

                    <!-- menu prile quick info -->
                    <div class="profile">
                        <div class="profile_pic">
                            <img src="images/user.png" alt="..." class="img-circle profile_img">
                        </div>
                        <div class="profile_info">
                            <span>MOOC,</span>
                            <h2>Comment faire un CV d'ingénieur</h2>
                        </div>
                    </div>
                    <!-- /menu prile quick info -->

                    <br />

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

                        <div class="menu_section">
                            <h3>Chapitre</h3>
                            <ul class="nav side-menu">
                                <li><a><i class="fa fa-home"></i> Chapitre 1<br> Identité<span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="">Nom Prénom</a>
                                        </li>
                                        <li><a href="">Adresse</a>
                                        </li>
                                        <li><a href="">Télephone</a>
                                        </li>
                                        <li><a href="">Mail</a>
                                        </li>
                                        <li><a href="">Date de naissance</a>
                                        </li>
                                        <li><a href="">Nationnalité</a>
                                        </li>
                                        <li><a href="">Social</a>
                                        </li>
                                        <li><a href="">Evaluation</a>
                                        </li>
                                    </ul>
                                </li>
                                 <li><a><i class="fa fa-home"></i> Chapitre 2 <br> Formation<span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="">Date</a>
                                        </li>
                                        <li><a href="">Intitulé</a>
                                        </li>
                                        <li><a href="">sigles</a>
                                        </li>
                                        <li><a href="">Lieu</a>
                                        </li>
                                        <li><a href="">Spé.</a>
                                        </li>
                                        <li><a href="">Autre info</a>
                                        </li>
                                        <li><a href="">Evaluation</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="menu_section">
                            <h3>Menu</h3>
                            <ul class="nav side-menu">
                                <li><a><i class="fa fa-question-circle"></i> Autre <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                       <!-- <li><a href="e_commerce.html">E-commerce</a>
                                        </li>
                                        <li><a href="projects.html">Projects</a>
                                        </li>
                                        <li><a href="project_detail.html">Project Detail</a>
                                        </li>
                                        <li><a href="contacts.html">Contacts</a>
                                        </li>
                                        <li><a href="profile.html">Profile</a>
                                        </li>
                                    -->
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-wrench"></i> Paramètres <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">

                                    </ul>
                                </li>
                                <li><a><i class="fa fa-envelope"></i> Tchat <span class="label label-success pull-right">Coming Soon</span></a>
                                </li>
                            </ul>
                        </div>

                    </div>
                    <!-- /sidebar menu -->

                    <!-- /menu footer buttons -->
                    <div class="sidebar-footer hidden-small">
                        <a data-toggle="tooltip" data-placement="top" title="Settings">
                            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                            <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Lock">
                            <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Logout">
                            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                        </a>
                    </div>
                    <!-- /menu footer buttons -->
                </div>
            </div>

            <!-- top navigation -->
            <div class="top_nav">

                <div class="nav_menu">
                    <nav class="" role="navigation">
                        <div class="nav toggle">
                            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                        </div>

                        <ul class="nav navbar-nav navbar-right">
                            <li class="">
                                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <img src="images/user.png" alt="">John Doe
                                    <span class=" fa fa-angle-down"></span>
                                </a>
                                <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
                                    <li><a href="javascript:;">Profil</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <span class="badge bg-red pull-right">50%</span>
                                            <span>Réglages</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">Aide</a>
                                    </li>
                                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i>Déconnexion</a>
                                    </li>
                                </ul>
                            </li>

                            <li role="presentation" class="dropdown">
                                <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-envelope-o"></i>
                                    <span class="badge bg-green">6</span>
                                </a>
                                <ul id="menu1" class="dropdown-menu list-unstyled msg_list animated fadeInDown" role="menu">
                                    <li>
                                        <a>
                                            <span class="image">
                                        <img src="images/img.jpg" alt="Profile Image" />
                                    </span>
                                            <span>
                                        <span>John Smith</span>
                                            <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where... 
                                    </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a>
                                            <span class="image">
                                        <img src="images/img.jpg" alt="Profile Image" />
                                    </span>
                                            <span>
                                        <span>John Smith</span>
                                            <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where... 
                                    </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a>
                                            <span class="image">
                                        <img src="images/img.jpg" alt="Profile Image" />
                                    </span>
                                            <span>
                                        <span>John Smith</span>
                                            <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where... 
                                    </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a>
                                            <span class="image">
                                        <img src="images/img.jpg" alt="Profile Image" />
                                    </span>
                                            <span>
                                        <span>John Smith</span>
                                            <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where... 
                                    </span>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="text-center">
                                            <a>
                                                <strong><a href="inbox.html">See All Alerts</strong>
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                    </nav>
                </div>

            </div>
            <!-- /top navigation -->


            <!-- page content -->
               <!-- page content -->
            <div class="right_col" role="main">

                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>Mon profil</h3>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Modifier mon profil <small>sub title</small></h2>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">

                                    <form class="form-horizontal form-label-left"  action="_model/profil_update_user" method="post" id="myform1">

                                        <!--<span class="section">Informations personnelles</span> -->

                                        <div class="item form-group"> 
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Nom <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="1" name="name" value=<?php echo $nom ?> required="required" type="text">
                                            </div>
                                        </div> 
                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="surname">Prénom <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="surname" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="1" name="surname" value=<?php echo $prenom ?> required="required" type="text">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pseudo">Pseudo <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="pseudo" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="1" name="pseudo" value=<?php echo $pseudo ?> required="required" type="text">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="email" id="email" name="email" placeholder=<?php echo $email ?> required="required" class="form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>
                                         <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="occupation">Pays <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                              <select class="form-control" id="exampleSelect1" name="selectPays">
                                                  <option value="AF">Afghanistan</option>
                                                  <option value="AX">Åland Islands</option>
                                                  <option value="AL">Albania</option>
                                                  <option value="DZ">Algeria</option>
                                                  <option value="AS">American Samoa</option>
                                                  <option value="AD">Andorra</option>
                                                  <option value="AO">Angola</option>
                                                  <option value="AI">Anguilla</option>
                                                  <option value="AQ">Antarctica</option>
                                                  <option value="AG">Antigua and Barbuda</option>
                                                  <option value="AR">Argentina</option>
                                                  <option value="AM">Armenia</option>
                                                  <option value="AW">Aruba</option>
                                                  <option value="AU">Australia</option>
                                                  <option value="AT">Austria</option>
                                                  <option value="AZ">Azerbaijan</option>
                                                  <option value="BS">Bahamas</option>
                                                  <option value="BH">Bahrain</option>
                                                  <option value="BD">Bangladesh</option>
                                                  <option value="BB">Barbados</option>
                                                  <option value="BY">Belarus</option>
                                                  <option value="BE">Belgium</option>
                                                  <option value="BZ">Belize</option>
                                                  <option value="BJ">Benin</option>
                                                  <option value="BM">Bermuda</option>
                                                  <option value="BT">Bhutan</option>
                                                  <option value="BO">Bolivia, Plurinational State of</option>
                                                  <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                                  <option value="BA">Bosnia and Herzegovina</option>
                                                  <option value="BW">Botswana</option>
                                                  <option value="BV">Bouvet Island</option>
                                                  <option value="BR">Brazil</option>
                                                  <option value="IO">British Indian Ocean Territory</option>
                                                  <option value="BN">Brunei Darussalam</option>
                                                  <option value="BG">Bulgaria</option>
                                                  <option value="BF">Burkina Faso</option>
                                                  <option value="BI">Burundi</option>
                                                  <option value="KH">Cambodia</option>
                                                  <option value="CM">Cameroon</option>
                                                  <option value="CA">Canada</option>
                                                  <option value="CV">Cape Verde</option>
                                                  <option value="KY">Cayman Islands</option>
                                                  <option value="CF">Central African Republic</option>
                                                  <option value="TD">Chad</option>
                                                  <option value="CL">Chile</option>
                                                  <option value="CN">China</option>
                                                  <option value="CX">Christmas Island</option>
                                                  <option value="CC">Cocos (Keeling) Islands</option>
                                                  <option value="CO">Colombia</option>
                                                  <option value="KM">Comoros</option>
                                                  <option value="CG">Congo</option>
                                                  <option value="CD">Congo, the Democratic Republic of the</option>
                                                  <option value="CK">Cook Islands</option>
                                                  <option value="CR">Costa Rica</option>
                                                  <option value="CI">Côte d'Ivoire</option>
                                                  <option value="HR">Croatia</option>
                                                  <option value="CU">Cuba</option>
                                                  <option value="CW">Curaçao</option>
                                                  <option value="CY">Cyprus</option>
                                                  <option value="CZ">Czech Republic</option>
                                                  <option value="DK">Denmark</option>
                                                  <option value="DJ">Djibouti</option>
                                                  <option value="DM">Dominica</option>
                                                  <option value="DO">Dominican Republic</option>
                                                  <option value="EC">Ecuador</option>
                                                  <option value="EG">Egypt</option>
                                                  <option value="SV">El Salvador</option>
                                                  <option value="GQ">Equatorial Guinea</option>
                                                  <option value="ER">Eritrea</option>
                                                  <option value="EE">Estonia</option>
                                                  <option value="ET">Ethiopia</option>
                                                  <option value="FK">Falkland Islands (Malvinas)</option>
                                                  <option value="FO">Faroe Islands</option>
                                                  <option value="FJ">Fiji</option>
                                                  <option value="FI">Finland</option>
                                                  <option value="FR" selected>France</option>
                                                  <option value="GF">French Guiana</option>
                                                  <option value="PF">French Polynesia</option>
                                                  <option value="TF">French Southern Territories</option>
                                                  <option value="GA">Gabon</option>
                                                  <option value="GM">Gambia</option>
                                                  <option value="GE">Georgia</option>
                                                  <option value="DE">Germany</option>
                                                  <option value="GH">Ghana</option>
                                                  <option value="GI">Gibraltar</option>
                                                  <option value="GR">Greece</option>
                                                  <option value="GL">Greenland</option>
                                                  <option value="GD">Grenada</option>
                                                  <option value="GP">Guadeloupe</option>
                                                  <option value="GU">Guam</option>
                                                  <option value="GT">Guatemala</option>
                                                  <option value="GG">Guernsey</option>
                                                  <option value="GN">Guinea</option>
                                                  <option value="GW">Guinea-Bissau</option>
                                                  <option value="GY">Guyana</option>
                                                  <option value="HT">Haiti</option>
                                                  <option value="HM">Heard Island and McDonald Islands</option>
                                                  <option value="VA">Holy See (Vatican City State)</option>
                                                  <option value="HN">Honduras</option>
                                                  <option value="HK">Hong Kong</option>
                                                  <option value="HU">Hungary</option>
                                                  <option value="IS">Iceland</option>
                                                  <option value="IN">India</option>
                                                  <option value="ID">Indonesia</option>
                                                  <option value="IR">Iran, Islamic Republic of</option>
                                                  <option value="IQ">Iraq</option>
                                                  <option value="IE">Ireland</option>
                                                  <option value="IM">Isle of Man</option>
                                                  <option value="IL">Israel</option>
                                                  <option value="IT">Italy</option>
                                                  <option value="JM">Jamaica</option>
                                                  <option value="JP">Japan</option>
                                                  <option value="JE">Jersey</option>
                                                  <option value="JO">Jordan</option>
                                                  <option value="KZ">Kazakhstan</option>
                                                  <option value="KE">Kenya</option>
                                                  <option value="KI">Kiribati</option>
                                                  <option value="KP">Korea, Democratic People's Republic of</option>
                                                  <option value="KR">Korea, Republic of</option>
                                                  <option value="KW">Kuwait</option>
                                                  <option value="KG">Kyrgyzstan</option>
                                                  <option value="LA">Lao People's Democratic Republic</option>
                                                  <option value="LV">Latvia</option>
                                                  <option value="LB">Lebanon</option>
                                                  <option value="LS">Lesotho</option>
                                                  <option value="LR">Liberia</option>
                                                  <option value="LY">Libya</option>
                                                  <option value="LI">Liechtenstein</option>
                                                  <option value="LT">Lithuania</option>
                                                  <option value="LU">Luxembourg</option>
                                                  <option value="MO">Macao</option>
                                                  <option value="MK">Macedonia, the former Yugoslav Republic of</option>
                                                  <option value="MG">Madagascar</option>
                                                  <option value="MW">Malawi</option>
                                                  <option value="MY">Malaysia</option>
                                                  <option value="MV">Maldives</option>
                                                  <option value="ML">Mali</option>
                                                  <option value="MT">Malta</option>
                                                  <option value="MH">Marshall Islands</option>
                                                  <option value="MQ">Martinique</option>
                                                  <option value="MR">Mauritania</option>
                                                  <option value="MU">Mauritius</option>
                                                  <option value="YT">Mayotte</option>
                                                  <option value="MX">Mexico</option>
                                                  <option value="FM">Micronesia, Federated States of</option>
                                                  <option value="MD">Moldova, Republic of</option>
                                                  <option value="MC">Monaco</option>
                                                  <option value="MN">Mongolia</option>
                                                  <option value="ME">Montenegro</option>
                                                  <option value="MS">Montserrat</option>
                                                  <option value="MA">Morocco</option>
                                                  <option value="MZ">Mozambique</option>
                                                  <option value="MM">Myanmar</option>
                                                  <option value="NA">Namibia</option>
                                                  <option value="NR">Nauru</option>
                                                  <option value="NP">Nepal</option>
                                                  <option value="NL">Netherlands</option>
                                                  <option value="NC">New Caledonia</option>
                                                  <option value="NZ">New Zealand</option>
                                                  <option value="NI">Nicaragua</option>
                                                  <option value="NE">Niger</option>
                                                  <option value="NG">Nigeria</option>
                                                  <option value="NU">Niue</option>
                                                  <option value="NF">Norfolk Island</option>
                                                  <option value="MP">Northern Mariana Islands</option>
                                                  <option value="NO">Norway</option>
                                                  <option value="OM">Oman</option>
                                                  <option value="PK">Pakistan</option>
                                                  <option value="PW">Palau</option>
                                                  <option value="PS">Palestinian Territory, Occupied</option>
                                                  <option value="PA">Panama</option>
                                                  <option value="PG">Papua New Guinea</option>
                                                  <option value="PY">Paraguay</option>
                                                  <option value="PE">Peru</option>
                                                  <option value="PH">Philippines</option>
                                                  <option value="PN">Pitcairn</option>
                                                  <option value="PL">Poland</option>
                                                  <option value="PT">Portugal</option>
                                                  <option value="PR">Puerto Rico</option>
                                                  <option value="QA">Qatar</option>
                                                  <option value="RE">Réunion</option>
                                                  <option value="RO">Romania</option>
                                                  <option value="RU">Russian Federation</option>
                                                  <option value="RW">Rwanda</option>
                                                  <option value="BL">Saint Barthélemy</option>
                                                  <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
                                                  <option value="KN">Saint Kitts and Nevis</option>
                                                  <option value="LC">Saint Lucia</option>
                                                  <option value="MF">Saint Martin (French part)</option>
                                                  <option value="PM">Saint Pierre and Miquelon</option>
                                                  <option value="VC">Saint Vincent and the Grenadines</option>
                                                  <option value="WS">Samoa</option>
                                                  <option value="SM">San Marino</option>
                                                  <option value="ST">Sao Tome and Principe</option>
                                                  <option value="SA">Saudi Arabia</option>
                                                  <option value="SN">Senegal</option>
                                                  <option value="RS">Serbia</option>
                                                  <option value="SC">Seychelles</option>
                                                  <option value="SL">Sierra Leone</option>
                                                  <option value="SG">Singapore</option>
                                                  <option value="SX">Sint Maarten (Dutch part)</option>
                                                  <option value="SK">Slovakia</option>
                                                  <option value="SI">Slovenia</option>
                                                  <option value="SB">Solomon Islands</option>
                                                  <option value="SO">Somalia</option>
                                                  <option value="ZA">South Africa</option>
                                                  <option value="GS">South Georgia and the South Sandwich Islands</option>
                                                  <option value="SS">South Sudan</option>
                                                  <option value="ES">Spain</option>
                                                  <option value="LK">Sri Lanka</option>
                                                  <option value="SD">Sudan</option>
                                                  <option value="SR">Suriname</option>
                                                  <option value="SJ">Svalbard and Jan Mayen</option>
                                                  <option value="SZ">Swaziland</option>
                                                  <option value="SE">Sweden</option>
                                                  <option value="CH">Switzerland</option>
                                                  <option value="SY">Syrian Arab Republic</option>
                                                  <option value="TW">Taiwan, Province of China</option>
                                                  <option value="TJ">Tajikistan</option>
                                                  <option value="TZ">Tanzania, United Republic of</option>
                                                  <option value="TH">Thailand</option>
                                                  <option value="TL">Timor-Leste</option>
                                                  <option value="TG">Togo</option>
                                                  <option value="TK">Tokelau</option>
                                                  <option value="TO">Tonga</option>
                                                  <option value="TT">Trinidad and Tobago</option>
                                                  <option value="TN">Tunisia</option>
                                                  <option value="TR">Turkey</option>
                                                  <option value="TM">Turkmenistan</option>
                                                  <option value="TC">Turks and Caicos Islands</option>
                                                  <option value="TV">Tuvalu</option>
                                                  <option value="UG">Uganda</option>
                                                  <option value="UA">Ukraine</option>
                                                  <option value="AE">United Arab Emirates</option>
                                                  <option value="GB">United Kingdom</option>
                                                  <option value="US">United States</option>
                                                  <option value="UM">United States Minor Outlying Islands</option>
                                                  <option value="UY">Uruguay</option>
                                                  <option value="UZ">Uzbekistan</option>
                                                  <option value="VU">Vanuatu</option>
                                                  <option value="VE">Venezuela, Bolivarian Republic of</option>
                                                  <option value="VN">Viet Nam</option>
                                                  <option value="VG">Virgin Islands, British</option>
                                                  <option value="VI">Virgin Islands, U.S.</option>
                                                  <option value="WF">Wallis and Futuna</option>
                                                  <option value="EH">Western Sahara</option>
                                                  <option value="YE">Yemen</option>
                                                  <option value="ZM">Zambia</option>
                                                  <option value="ZW">Zimbabwe</option>
                                              </select>
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="occupation">Occupation <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                              <select class="form-control" id="exampleSelect2" name="selectJob">
                                                <option value="Etudiant">Etudiant</option>
                                                <option value="En recherche d'emploi">En recherche d'emploi</option>
                                                <option value="Actif">Actif</option>
                                              </select>
                                            </div>
                                        </div>
                                            <?php  
                                            if ((isset($_SESSION['id_user'])) && (!empty($_SESSION['id_user'])))
                                            {
                                                echo ("<input id='idUser' type='hidden' name='idUser' value='".$_SESSION['id_user']."'");
                                            }else{
                                                echo "erreur de session";
                                            }
                                            ?>
                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-6 col-md-offset-3">
                                                <button id="send" type="submit" class="btn btn-success">Confirmer</button>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Modifier mot de passe <small>sub title</small></h2>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">

                                    <form class="form-horizontal form-label-left" action="_model/profil_update_password" method="post" id="myform2" novalidate>

                                        <!-- <span class="section">Informations personnelles</span> -->
                                        

                                        <div class="item form-group">
                                            <label for="password" class="control-label col-md-3">Ancien mot de passe</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="oldPassword" type="password" name="oldPassword" data-validate-length-range="4" class="form-control col-md-7 col-xs-12" required="required">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label for="password" class="control-label col-md-3">Nouveau mot de passe</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="newPassword" type="password" name="newPassword" data-validate-length-range="4" class="form-control col-md-7 col-xs-12" required="required">
                                            </div>
                                        </div>


                                        <?php  
                                        if ((isset($_SESSION['id_user'])) && (!empty($_SESSION['id_user'])))
                                        {
                                            echo ("<input id='idUser' type='hidden' name='idUser' value='".$_SESSION['id_user']."'");
                                        }else{
                                            echo "erreur de session";
                                        }
                                        ?>
                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-6 col-md-offset-3">
                                                <button id="send" type="submit" class="btn btn-success">Confirmer</button>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            <!-- /page content -->
        </div>

    </div>

    <div id="custom_notifications" class="custom-notifications dsp_none">
        <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
        </ul>
        <div class="clearfix"></div>
        <div id="notif-group" class="tabbed_notifications"></div>
    </div>

    <!-- jQuery -->
<script src="js/jquery.js"></script>

    <script src="js/bootstrap.min.js"></script>

    <!-- gauge js -->
    <script type="text/javascript" src="js/gauge/gauge.min.js"></script>
    <script type="text/javascript" src="js/gauge/gauge_demo.js"></script>
    <!-- chart js -->
    <script src="js/chartjs/chart.min.js"></script>
    <!-- bootstrap progress js -->
    <script src="js/progressbar/bootstrap-progressbar.min.js"></script>
    <script src="js/nicescroll/jquery.nicescroll.min.js"></script>
    <!-- icheck -->
    <script src="js/icheck/icheck.min.js"></script>
    <!-- daterangepicker -->
    <script type="text/javascript" src="js/moment.min.js"></script>
    <script type="text/javascript" src="js/datepicker/daterangepicker.js"></script>

    <script src="js/custom.js"></script>

    <!-- form validation -->
    <script src="js/validator/validator.js"></script>

    <!-- Validation -->
    <script src="js/jqueryvalidate/jquery.validate.min.js"></script>
    <script src="js/jqueryvalidate/additional-methods.min.js"></script>

    <script type="text/javascript">
// --------------- REGEX --------------------
$.validator.addMethod("usernameRegex", function(value, element) {
  return this.optional(element) || /^[a-z\u00E0-\u00FC_.+-]+$/i.test(value);
});
$.validator.addMethod("mailRegex", function(value, element) {
  return this.optional(element) || /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/i.test(value);
});
    
    // --------------- Login JqueryValidator ---------
    var login = $("#myform1");
    login.validate({
          //prendre le name
          errorElement: 'span',
          errorClass: 'help-block',
          highlight: function(element, errorClass, validClass) {
            $(element).closest('.form-group').addClass("has-error");
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).closest('.form-group').removeClass("has-error");
        },
        rules: {
            name: {
              required: true,
              usernameRegex: true,
              minlength: 2,
          },
          surname: {
              required: true,
              usernameRegex: true,
              minlength: 2,
          },
          pseudo : {
              required: true,
              minlength: 2,
          },
          email: {
              required: true,
              mailRegex: true,
              minlength: 3,
          },
          city:{
          required: true,
        },
      },
      messages: {
        email: {
            required: "email required",
        },
        surname : {
            required: "surname required",
        },
        name: {
            required: "name required",
        },
        name: {
            required: "name required",
        },
     }
    });
        // --------------- Login JqueryValidator ---------
    var myform2 = $("#myform2");
    myform2.validate({
          //prendre le name
          errorElement: 'span',
          errorClass: 'help-block',
          highlight: function(element, errorClass, validClass) {
            $(element).closest('.form-group').addClass("has-error");
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).closest('.form-group').removeClass("has-error");
        },
        rules: {
          oldPassword : {
              required: true,
              minlength: 4,
          },
          newPassword: {
              required: true,
              minlength: 4,
          },
      },
      messages: {
        oldPassword: {
            required: "Ancien mot de passe required",
        },
        newPassword : {
            required: "Nouveau mot de passe required",
        },
     }
    });
    </script>

    <!-- flot js -->
    <!--[if lte IE 8]><script type="text/javascript" src="js/excanvas.min.js"></script><![endif]-->
    <script type="text/javascript" src="js/flot/jquery.flot.js"></script>
    <script type="text/javascript" src="js/flot/jquery.flot.pie.js"></script>
    <script type="text/javascript" src="js/flot/jquery.flot.orderBars.js"></script>
    <script type="text/javascript" src="js/flot/jquery.flot.time.min.js"></script>
    <script type="text/javascript" src="js/flot/date.js"></script>
    <script type="text/javascript" src="js/flot/jquery.flot.spline.js"></script>
    <script type="text/javascript" src="js/flot/jquery.flot.stack.js"></script>
    <script type="text/javascript" src="js/flot/curvedLines.js"></script>
    <script type="text/javascript" src="js/flot/jquery.flot.resize.js"></script>

    <script>
        $(document).ready(function () {
            // [17, 74, 6, 39, 20, 85, 7]
            //[82, 23, 66, 9, 99, 6, 2]
            var data1 = [[gd(2012, 1, 1), 17], [gd(2012, 1, 2), 74], [gd(2012, 1, 3), 6], [gd(2012, 1, 4), 39], [gd(2012, 1, 5), 20], [gd(2012, 1, 6), 85], [gd(2012, 1, 7), 7]];
            var data2 = [[gd(2012, 1, 1), 82], [gd(2012, 1, 2), 23], [gd(2012, 1, 3), 66], [gd(2012, 1, 4), 9], [gd(2012, 1, 5), 119], [gd(2012, 1, 6), 6], [gd(2012, 1, 7), 9]];
            $("#canvas_dahs").length && $.plot($("#canvas_dahs"), [
                data1, data2
            ], {
                series: {
                    lines: {
                        show: false,
                        fill: true
                    },
                    splines: {
                        show: true,
                        tension: 0.4,
                        lineWidth: 1,
                        fill: 0.4
                    },
                    points: {
                        radius: 0,
                        show: true
                    },
                    shadowSize: 2
                },
                grid: {
                    verticalLines: true,
                    hoverable: true,
                    clickable: true,
                    tickColor: "#d5d5d5",
                    borderWidth: 1,
                    color: '#fff'
                },
                colors: ["rgba(38, 185, 154, 0.38)", "rgba(3, 88, 106, 0.38)"],
                xaxis: {
                    tickColor: "rgba(51, 51, 51, 0.06)",
                    mode: "time",
                    tickSize: [1, "day"],
                    //tickLength: 10,
                    axisLabel: "Date",
                    axisLabelUseCanvas: true,
                    axisLabelFontSizePixels: 12,
                    axisLabelFontFamily: 'Verdana, Arial',
                    axisLabelPadding: 10
                        //mode: "time", timeformat: "%m/%d/%y", minTickSize: [1, "day"]
                },
                yaxis: {
                    ticks: 8,
                    tickColor: "rgba(51, 51, 51, 0.06)",
                },
                tooltip: false
            });
            function gd(year, month, day) {
                return new Date(year, month - 1, day).getTime();
            }
        });
    </script>

    <!-- worldmap -->
    <script type="text/javascript" src="js/maps/jquery-jvectormap-2.0.1.min.js"></script>
    <script type="text/javascript" src="js/maps/gdp-data.js"></script>
    <script type="text/javascript" src="js/maps/jquery-jvectormap-world-mill-en.js"></script>
    <script type="text/javascript" src="js/maps/jquery-jvectormap-us-aea-en.js"></script>
    <script>
        $(function () {
            $('#world-map-gdp').vectorMap({
                map: 'world_mill_en',
                backgroundColor: 'transparent',
                zoomOnScroll: false,
                series: {
                    regions: [{
                        values: gdpData,
                        scale: ['#E6F2F0', '#149B7E'],
                        normalizeFunction: 'polynomial'
                    }]
                },
                onRegionTipShow: function (e, el, code) {
                    el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
                }
            });
        });
    </script>
    <!-- skycons -->
    <script src="js/skycons/skycons.js"></script>
    <script>
        var icons = new Skycons({
                "color": "#73879C"
            }),
            list = [
                "clear-day", "clear-night", "partly-cloudy-day",
                "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
                "fog"
            ],
            i;
        for (i = list.length; i--;)
            icons.set(list[i], list[i]);
        icons.play();
    </script>

    <!-- dashbord linegraph -->
    <script>
        var doughnutData = [
            {
                value: 30,
                color: "#455C73"
            },
            {
                value: 30,
                color: "#9B59B6"
            },
            {
                value: 60,
                color: "#BDC3C7"
            },
            {
                value: 100,
                color: "#26B99A"
            },
            {
                value: 120,
                color: "#3498DB"
            }
    ];
        var myDoughnut = new Chart(document.getElementById("canvas1").getContext("2d")).Doughnut(doughnutData);
    </script>
    <!-- /dashbord linegraph -->


  <script>
        // initialize the validator function
        validator.message['date'] = 'not a real date';
        // validate a field on "blur" event, a 'select' on 'change' event & a '.reuired' classed multifield on 'keyup':
        $('form')
            .on('blur', 'input[required], input.optional, select.required', validator.checkField)
            .on('change', 'select.required', validator.checkField)
            .on('keypress', 'input[required][pattern]', validator.keypress);
        $('.multi.required')
            .on('keyup blur', 'input', function () {
                validator.checkField.apply($(this).siblings().last()[0]);
            });
        // bind the validation to the form submit event
        //$('#send').click('submit');//.prop('disabled', true);
        /* Mis en commenataire car utilisation de jqueryvalidator
        $('form').submit(function (e) {
            e.preventDefault();
            var submit = true;
            // evaluate the form using generic validaing
            if (!validator.checkAll($(this))) {
                submit = false;
            }
            if (submit)
                this.submit();
            return false;
        });*/
    
    </script>

    <!-- datepicker -->
    <script type="text/javascript">
        $(document).ready(function () {
            var cb = function (start, end, label) {
                console.log(start.toISOString(), end.toISOString(), label);
                $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
                //alert("Callback has fired: [" + start.format('MMMM D, YYYY') + " to " + end.format('MMMM D, YYYY') + ", label = " + label + "]");
            }
            var optionSet1 = {
                startDate: moment().subtract(29, 'days'),
                endDate: moment(),
                minDate: '01/01/2012',
                maxDate: '12/31/2015',
                dateLimit: {
                    days: 60
                },
                showDropdowns: true,
                showWeekNumbers: true,
                timePicker: false,
                timePickerIncrement: 1,
                timePicker12Hour: true,
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                },
                opens: 'left',
                buttonClasses: ['btn btn-default'],
                applyClass: 'btn-small btn-primary',
                cancelClass: 'btn-small',
                format: 'MM/DD/YYYY',
                separator: ' to ',
                locale: {
                    applyLabel: 'Submit',
                    cancelLabel: 'Clear',
                    fromLabel: 'From',
                    toLabel: 'To',
                    customRangeLabel: 'Custom',
                    daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
                    monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                    firstDay: 1
                }
            };
            $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
            $('#reportrange').daterangepicker(optionSet1, cb);
            $('#reportrange').on('show.daterangepicker', function () {
                console.log("show event fired");
            });
            $('#reportrange').on('hide.daterangepicker', function () {
                console.log("hide event fired");
            });
            $('#reportrange').on('apply.daterangepicker', function (ev, picker) {
                console.log("apply event fired, start/end dates are " + picker.startDate.format('MMMM D, YYYY') + " to " + picker.endDate.format('MMMM D, YYYY'));
            });
            $('#reportrange').on('cancel.daterangepicker', function (ev, picker) {
                console.log("cancel event fired");
            });
            $('#options1').click(function () {
                $('#reportrange').data('daterangepicker').setOptions(optionSet1, cb);
            });
            $('#options2').click(function () {
                $('#reportrange').data('daterangepicker').setOptions(optionSet2, cb);
            });
            $('#destroy').click(function () {
                $('#reportrange').data('daterangepicker').remove();
            });
        });
    </script>
    <script>
        NProgress.done();
    </script>
    <!-- /datepicker -->
    <!-- /footer content -->
</body>

</html>