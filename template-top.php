<!doctype html>
<html class="no-js" lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1"/>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="apple-mobile-web-app-title" content="Project SafeMed"/>
    <meta property="og:image" content="images/safemed-icon.jpg"/>
    <meta property="og:title" content="Project SafeMed"/>
    <meta property="og:site_name" content="Project SafeMed"/>
    <meta property="og:url" content="http://safemed.org"/>
    <meta property="og:description"
          content="SafeMed: A joint venture between University of Tennessee Health Science Center (UTHSC) and Methodist LeBonheur HealthCare"/>
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-71447945-1', 'auto');
        ga('send', 'pageview');

    </script>
    <title><?php echo $pagename; ?> | Project SafeMed</title>
    <link rel="shortcut icon" href="favicon.ico?v=5"/>
    <link rel="apple-touch-icon" href="images/safemed-icon.jpg">
    <link rel="stylesheet" href="css/safemed.css"/>
    <link rel="stylesheet" href="bower_components/fontawesome/css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Short+Stack' rel='stylesheet' type='text/css'>
    <script src="bower_components/modernizr/modernizr.js"></script>
</head>
<body>
<!-- Header --><!--Hero Image-->
<header class="hero medium-text-left small-text-center">
    <a href="/" title="Home">
        <div class="columns logo-background">
            <div class="row">
                <div class="columns small-4">
                    <img src="images/safemed-logo.png" alt="safemed logo"/>
                </div>
                <div class="columns small-8 large-12">
                    <h2>Making sure all parts of your&nbsp;care fit&nbsp;together</h2>
                </div>
            </div>
        </div>
    </a>
</header>
<div class="contain-to-grid sticky">
    <nav class="top-bar" data-topbar="data-topbar" role="navigation">
        <ul class="title-area">
            <li class="name">
                <h1><a href="/" title="Home"><i class="fa fa-home fa-2x home-icon"></i></a></h1>
            </li>
            <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
            <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
        </ul>
        <section class="top-bar-section">
            <!-- Right Nav Section -->
            <ul class="left">
                <li class="has-dropdown">
                    <a href="#">About</a>
                    <ul class="dropdown">
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="program-model.php">Program Model</a>
                            <ul>
                                <li><a class="link-word" href="documents/safemed-protocols-and-procedures.docx">Protocols and Procedures</a></li>
                                <li><a class="link-pdf" href="documents/safemed-recruitment-material.pdf">Recruitment Material</a></li>
                                <li><a href="program-model.php#job-descriptions">Job Descriptions</a></li>
                                <li><a href="program-model.php#staff-training">Staff Training</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="has-dropdown">
                    <a href="#">Success Stories</a>
                    <ul class="dropdown">
                        <li><a href="program-successes.php">Program Successes</a></li>
                    </ul>
                </li>
                <li class="has-dropdown">
                    <a href="#">Provider Tools</a>
                    <ul class="dropdown">
                        <li><a href="assessments.php">Assessments</a></li>
                        <li><a href="stoplight-tool-kits.php">Stoplight Tool Kits</a></li>
                        <li><a href="program-support.php">Program Support</a></li>
                        <li><a href="collaboration.php">Collaboration</a></li>
                    </ul>
                </li>
                <li>
                    <a href="publications-bibliography.php">Publications/Bibliography</a>
                </li>
            </ul>
        </section>
    </nav>
</div>
<!-- End Header -->