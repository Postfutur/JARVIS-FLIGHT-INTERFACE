<!DOCTYPE html>
<html>

<head>
    <Title>FLIGHT MODE</Title>
    <!-- <link rel="icon" href="../Pictures/favicon-1.ico" /> -->
    <link rel="Shortcut Icon" type="image/gif" href="PICTURES/favicon.gif">
    <!-- ou <link rel="icon" type="image/png" href="logo.png" /> -->
    <meta name="description" content="Une description de la page..." />
    <meta charset="utf-8">
    <meta name="description" content="Tout sur les apparitions muettes de la Banane Masquée dans le cinéma colombien des années 20 et 30." /> <!-- Utile -->
    <meta name|http-equiv="Mot-clé" content="Valeur" />
    <!-- Utilité Faible -->
    <!-- <meta name="author" content="Mary Poppins" /> -->
    <!-- Utilité Faible -->
    <!-- <meta name="copyright" content="© Supercalifragilisticexpialidocious Inc." /> -->
    <!-- <meta name="robots" content="index, follow, archive" />
<meta name="robots" content="all" /> -->
    <script type="text/javascript" src="jquery.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=3.0, user-scalable=yes" />
    <link href="./Css/Flight_Mode.css" rel="stylesheet">
    <link href="./Css/Time_Zone.css" rel="stylesheet">
    <link href="./Css/Spinner.css" rel="stylesheet">
</head>

<body onload="init();">
    <div class="Close_Flight_Mode_Button"><A href="Close_Flight_Mode.php">Logout Flight Mode</A></div>
    <div><?php include 'Helmet_Iron_Man.php'; ?></div>
    <div><?php include 'Add_On/Time_Zone/Time_Zone.php'; ?></div>
    <div><?php include 'Arc.php'; ?></div>
    <div><?php include 'Spinner.php'; ?></div>
    <!-- <div><?php /* include 'Add_On/Progress_Bar/Progress_Bar.php'; */ ?></div>  -->

    <script type="text/javascript">
        $(document).ready(function() {
            $('#menu-accordeon>li').click(function() {
                $(this).toggleClass('active');
                $(this).siblings().removeClass('active');
            })
        });
    </script>
    <!--<div id="Code"><? php/* include 'Code.php'; */ ?></div> -->
</body>

</html>