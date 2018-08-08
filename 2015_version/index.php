<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
<head>
    <title>Albert Haque</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Albert Haque">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="">
    <meta name="keywords" content="albert,haque,stanford,computer,science,artificial,intelligence,ut austin,texas">

    <link rel="icon" href="favicon.ico" type="image/x-icon"/>
    <link href='//fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="./css/isotope.css" media="screen"/>
    <link rel="stylesheet" href="./js/fancybox/jquery.fancybox.css" type="text/css" media="screen"/>
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/main-theme.css">
    <link rel="stylesheet" href="./css/responsive-slider.css">
    <link rel="stylesheet" href="./css/animate.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/skin.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type="text/javascript">
        var onReturnCallback = function (response) {
            $.post('secure.php',
                    {
                        gre: response,
                        page: 'homepage',
                    },
                    function (data, status) {
                        document.getElementById("recaptcha-protected").innerHTML = data;
                    });  // end of post
        }; // end of onReturnCallback
    </script>
</head>

<body>
<div class="header">
    <section id="header" class="appear">
        <div class="navbar navbar-fixed-top" role="navigation"
             data-0="line-height:100px; height:100px; background-color:rgba(0,7,45,0.6);"
             data-300="line-height:60px; height:60px; background-color:rgba(0,7,45,.9);">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="fa fa-bars color-white"></span>
                </button>
                <h1><a class="navbar-brand" href="//www.albert.cm" data-0="line-height:95px;"
                       data-300="line-height:55px;">Albert Haque
                </a></h1>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav" data-0="margin-top:26px;" data-300="margin-top:8px;">
                    <li><a href="#about">About</a></li>
                    <li><a href="#work">Industry</a></li>
                    <li><a href="#education">Education</a></li>
                    <li><a href="#projects">Projects</a></li>
                    <li><a href="#research">Research</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </section>
</div>

<section class="featured">
    <div id="index">
        <div class="responsive-slider" data-spy="responsive-slider" data-autoplay="true">
            <div class="slides" data-group="slides">
                <ul>
                    <li>
                        <div class="slide-body" data-group="slide" data-length="700">
                            <img src="./img/pose.gif" alt="">
                            <div id="jumbotron-twitch" class="caption header" data-animate="slideAppearUpToDown"
                                 data-delay="300" data-length="300">
                                <h2>Deep learning meets human anatomy</h2>
                                <div class="caption-sub" data-animate="slideAppearDownToUp" data-delay="900"
                                     data-length="300"><h4><span>
                Improving the Xbox Kinect algorithm with deep learning</span></h4></div>
                                <div class="caption-sub" data-animate="slideAppearLeftToRight" data-delay="600"
                                     data-length="300">
                                    <h3><a class="btn btn-default btn-lg" href="./projects/viewpoint_3d_pose/"
                                           role="button">Learn more</a></h3></div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="slide-body" data-group="slide" data-length="100">
                            <img src="./img/jumbo_tpp.jpg" alt="">
                            <div id="jumbotron-twitch" class="caption header" data-animate="slideAppearDownToUp"
                                 data-delay="500" data-length="300">
                                <h2>Twitch Plays Pokemon, Machine Learns Twitch</h2>
                                <div class="caption-sub" data-animate="slideAppearUpToDown" data-delay="800"
                                     data-length="400"><h4><span>Detecting trolls with 38 million chat messages on twitch.tv</span>
                                </h4></div>
                                <div class="caption-sub" data-animate="slideAppearRightToLeft" data-delay="1200"
                                     data-length="400"><a href="https://github.com/ahaque/twitch-troll-detection"
                                                          class="btn btn-default btn-lg" role="button">Download the code
                                    and dataset »</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="slide-body" data-group="slide" data-length="400">
                            <img src="./img/faces.jpg" alt="">
                            <div id="jumbotron-faces" class="caption header" data-animate="slideAppearUpToDown"
                                 data-delay="500" data-length="300">
                                <h2>Personality at face value</h2>
                                <div class="caption-sub" data-animate="slideAppearDownToUp" data-delay="1200"
                                     data-length="400"><h4><span>
                Three million Facebook photos offer insight into facial features shared by extroverts. No, it's not the smile.</span>
                                </h4></div>
                                <div class="caption-sub" data-animate="slideAppearLeftToRight" data-delay="800"
                                     data-length="300"><h3><a class="btn btn-default btn-lg" role="button">More info
                                    coming soon</a></h3></div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <a class="slider-control left" href="#" data-jump="prev"><i class="fa fa-angle-left fa-2x"></i></a>
            <a class="slider-control right" href="#" data-jump="next"><i class="fa fa-angle-right fa-2x"></i></a>
        </div>
    </div>
</section>

<section id="about" class="section clearfix appear">
    <div class="container">
        <div class="about">
            <div class="row mar-top5">
                <div class="col-md-offset-3 col-md-6 wow bounceIn" data-animation-delay="5">
                    <div class="section-header">
                        <h2 class="section-heading animated">About</h2>
                        <p>Short introduction with some external links.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="row-slider">
                    <div class="col-md-6 mar-bot wow rotateInDownLeft" data-animation-delay="10s">
                        <br><img alt="" class="img-responsive img-thumbnail" src="./img/photos/1.jpg" width="100%"
                                 height="350"/>
                    </div>
                </div>
                <div class="col-md-6 mar-top10 wow rotateInUpLeft" data-animation-delay="10s">
                    <div class="company mar-left10">
                        <p style="font-family: 'Roboto', serif;"><b>
                            I'm currently a CS grad student at <a href="http://stanford.edu/">Stanford</a> studying
                            artificial intelligence.
                            My advisor is <a href="http://vision.stanford.edu/feifeili/">Fei-Fei Li</a>.
                            I did my undergrad at the <a href="http://www.utexas.edu/">University of Texas at Austin</a>.</b>
                        </p>
                        <p>
                            I'm part of the <a href="http://vision.stanford.edu/">Computer Vision Lab</a> (<a
                                href="http://ai.stanford.edu/">SAIL)</a>
                            where I work on distributed computer vision systems.
                            I generally TA the graduate-level <a href="http://cs229.stanford.edu/info.html">machine
                            learning</a>
                            and <a href="http://cs231n.stanford.edu">deep learning</a> courses.
                            Some of my interests are:
                        </p>
                    </div>
                    <div class="list-style">
                        <div class="row">
                            <div class="col-lg-6 col-sm-6 col-xs-12">
                                <ul>
                                    <li>Machine Learning</li>
                                    <li>Computer Vision</li>
                                    <li>Social Modeling</li>
                                </ul>
                            </div>
                            <div class="col-lg-6 col-sm-6 col-xs-12">
                                <ul>
                                    <li>Deep Learning</li>
                                    <li>Video Understanding</li>
                                    <li>3D Vision</li>
                                </ul>
                            </div>
                        </div>
                    </div> <!-- list -->
                </div> <!-- right content -->
            </div>    <!-- row -->
        </div> <!-- about -->
    </div> <!-- container -->
</section> <!-- about -->

<section class="section section-parallax-format" data-speed="5" data-type="background" id="parallax-graph">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="align-center">
                    <div class="testimonial pad-top40 pad-bot40 clearfix"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="work" class="section pad-bot5 bg-white appear clearfix">
    <div class="container">
        <div class="row mar-bot5">
            <div class="col-md-offset-3 col-md-6">
                <div class="section-header">
                    <h2 class="section-heading animated">Industry Experience</h2>
                    <p>Places and teams I've worked with.</p>
                </div>
            </div>
        </div>
        <div class="row mar-bot-40">
            <div class="col-sm-4">
                <div class="align-center">
                    <img src="./img/company/facebook.png" width="100%">
                    Data Scientist, <b>Ads Targeting</b>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="align-center">
                    <img src="./img/company/microsoft.png" width="100%">
                    Program Manager, <b>Ads Relevance &amp; Revenue</b>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="align-center">
                    <img src="./img/company/google.png" width="100%">
                    Software Engineer, <b>Ads Serving</b>
                </div>
            </div>
        </div>
        <div class="row mar-bot-40">
            <div class="col-sm-12 mar-bot-40"><br><br><br></div>
        </div>
    </div>
</section>

<section class="section section-parallax-format" id="parallax-company" data-speed="8" data-type="background">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="align-center">
                    <div class="testimonial pad-top40 pad-bot40 clearfix"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="education" class="section appear clearfix">
    <div class="container">
        <div class="row mar-bot10">
            <div class="col-md-offset-3 col-md-6">
                <div class="section-header">
                    <h2 class="section-heading">Education</h2>
                    <p>Subjects I've studied over the years.</p>
                </div>
            </div>
        </div>

        <div class="row align-center mar-bot20">
            <div class="col-md-4">
                <div class="team-member">
                    <div class="profile-picture">
                        <figure><img src="img/edu/stanford.jpg" alt=""></figure>
                    </div>
                    <div class="team-detail">
                        <h2>2014-2016</h2>
                        <h4>Stanford University</h4>
                    </div>
                    <div class="team-bio">
                        MS, Computer Science<br>
                        Advisor: <a href="http://vision.stanford.edu/feifeili/">Fei-Fei Li</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="team-member">
                    <div class="profile-picture">
                        <figure><img src="img/edu/texas.jpg" alt=""></figure>
                    </div>
                    <div class="team-detail">
                        <h2>2010-2014</h2>
                        <h4>University of Texas</h4>
                    </div>
                    <div class="team-bio">
                        BS, Computer Science<br>
                        BBA, Finance (<a href="http://www.mccombs.utexas.edu/bhp">BHP</a>/<a
                            href="http://www.mccombs.utexas.edu/centers/aim/financial-analyst-program">FAP</a>)<br>
                        Advisor: <a href="http://www.cs.utexas.edu/~miranker/">Dan Miranker</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="team-member">
                    <div class="profile-picture">
                        <figure><img src="img/edu/northwestern.jpg" alt=""></figure>
                    </div>
                    <div class="team-detail">
                        <h2>2012</h2>
                        <h4>Northwestern University</h4>
                    </div>
                    <div class="team-bio">
                        Visiting Student<br>Coursework in Economics
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section-parallax-format" id="parallax-stanford" data-speed="10" data-type="background">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="align-center">
                    <div class="testimonial pad-top40 pad-bot40 clearfix"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="projects" class="section appear clearfix">
    <div class="container">
        <div class="row mar-bot40">
            <div class="col-md-offset-3 col-md-6">
                <div class="section-header">
                    <h2 class="section-heading animated" data-animation="bounceInUp">Projects</h2>
                    <p>A collection of side projects, research studies, and course assignments.</p>
                </div>
            </div>
        </div>

        <div class="row">
            <nav id="filter" class="col-md-12 text-center">
                <ul>
                    <li><a href="#" class="current btn-theme btn-small" data-filter="*">All</a></li>
                    <li><a href="#" class="btn-theme btn-small" data-filter=".ml"><i class="fa fa-sort"></i> Machine
                        Learning</a></li>
                    <li><a href="#" class="btn-theme btn-small" data-filter=".vision"><i class="fa fa-sort"></i>
                        Computer Vision</a></li>
                    <li><a href="#" class="btn-theme btn-small" data-filter=".db"><i class="fa fa-sort"></i>
                        Databases</a></li>
                    <li><a href="#" class="btn-theme btn-small" data-filter=".other"><i class="fa fa-sort"></i>
                        Other</a></li>
                </ul>
            </nav>
            <div class="col-md-12">
                <div class="row">
                    <div class="portfolio-items isotopeWrapper clearfix" id="3">

                        <article class="col-md-4 isotopeItem ml">
                            <div class="portfolio-item">
                                <div class="wow rotateInUpLeft" data-animation-delay="4.8s">
                                    <img src="img/projects/1.jpg" alt="welcome"/>
                                </div>
                                <div class="portfolio-desc align-center">
                                    <div class="folio-info">
                                        <h5>
                                            <a href="http://cs229.stanford.edu/proj2014/Albert%20Haque,%20Cardiac%20Dysrhythmia%20Detection%20with%20GPU-Accelerated%20Neural%20Networks.pdf">Deep
                                                learning for detecting cardiac arrhythmia</a></h5>
                                        <a href="http://cs229.stanford.edu/proj2014/Albert%20Haque,%20Cardiac%20Dysrhythmia%20Detection%20with%20GPU-Accelerated%20Neural%20Networks.pdf"
                                           class="fancybox"><i class="fa fa-external-link fa-2x"></i></a>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="col-md-4 isotopeItem other">
                            <div class="portfolio-item">
                                <div class="wow rotateInDownRight">
                                    <img src="img/projects/6.jpg" alt=""/>
                                </div>
                                <div class="portfolio-desc align-center">
                                    <div class="folio-info">
                                        <h5><a href="./dl/processor_scheduling_paper.pdf">Comparison of processor
                                            scheduling algorithms</a></h5>
                                        <a href="./dl/processor_scheduling_paper.pdf" class="fancybox"><i
                                                class="fa fa-external-link fa-2x"></i></a>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="col-md-4 isotopeItem ml">
                            <div class="portfolio-item">
                                <div class="wow bounceIn">
                                    <img src="img/projects/2.jpg" alt=""/>
                                </div>
                                <div class="portfolio-desc align-center">
                                    <div class="folio-info">
                                        <h5><a href="./img/projects/2.jpg" class="fancybox">Neural networks for named
                                            entity recognition</a></h5>
                                        <a href="./img/projects/2.jpg" class="fancybox"><i
                                                class="fa fa-external-link fa-2x"></i></a>
                                    </div>
                                </div>
                            </div>
                        </article>


                        <article class="col-md-4 isotopeItem ml vision">
                            <div class="portfolio-item">
                                <div class="wow rotateInDownRight">
                                    <img src="img/projects/3.jpg" alt=""/>
                                </div>
                                <div class="portfolio-desc align-center">
                                    <div class="folio-info">
                                        <h5><a href="./img/projects/3.jpg" class="fancybox">Human localization with RGB,
                                            wifi, and bluetooth</a></h5>
                                        <a href="./img/projects/3.jpg" class="fancybox"><i
                                                class="fa fa-external-link fa-2x"></i></a>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="col-md-4 isotopeItem ml">
                            <div class="portfolio-item">
                                <div class="wow rotateInUpLeft">
                                    <img src="img/projects/4.jpg" alt=""/>
                                </div>
                                <div class="portfolio-desc align-center">
                                    <div class="folio-info">
                                        <h5><a href="https://github.com/ahaque/twitch-troll-detection">Identifying
                                            trolls using unsupervised learning</a></h5>
                                        <a href="https://github.com/ahaque/twitch-troll-detection" class="fancybox"><i
                                                class="fa fa-external-link fa-2x"></i></a>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="col-md-4 isotopeItem other">
                            <div class="portfolio-item">
                                <div class="wow rotateInDownRight">
                                    <img src="img/projects/doodle_jump.jpg" alt=""/>
                                </div>
                                <div class="portfolio-desc align-center">
                                    <div class="folio-info">
                                        <h5><a href="https://github.com/ahaque/Doodle-Jump">Doodle Jump for PC</a></h5>
                                        <a href="https://github.com/ahaque/Doodle-Jump"><i
                                                class="fa fa-external-link fa-2x"></i></a>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="col-md-4 isotopeItem other">
                            <div class="portfolio-item">
                                <div class="wow rotateInUpLeft">
                                    <img src="img/projects/7.jpg" alt=""/>
                                </div>
                                <div class="portfolio-desc align-center">
                                    <div class="folio-info">
                                        <h5><a href="./dl/omega_presentation.pdf">Evolutionary selection pressure on
                                            codon substitution</a></h5>
                                        <a href="./dl/omega_presentation.pdf" class="fancybox"><i
                                                class="fa fa-external-link fa-2x"></i></a>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="col-md-4 isotopeItem db">
                            <div class="portfolio-item">
                                <div class="wow bounceIn">
                                    <img src="img/projects/8.jpg" alt=""/>
                                </div>
                                <div class="portfolio-desc align-center">
                                    <div class="folio-info">
                                        <h5><a href="./dl/Haque-Thesis-Presentation.pdf">A mapreduce database for
                                            storing and querying graphs</a></h5>
                                        <a href="./dl/Haque-Thesis-Presentation.pdf" class="fancybox"><i
                                                class="fa fa-external-link fa-2x"></i></a>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="col-md-4 isotopeItem db">
                            <div class="portfolio-item">
                                <div class="wow rotateInDownRight">
                                    <img src="img/projects/9.jpg" alt=""/>
                                </div>
                                <div class="portfolio-desc align-center">
                                    <div class="folio-info">
                                        <h5><a href="http://ribs.csres.utexas.edu/nosqlrdf/">Comparison of nosql
                                            databases for rdf graph data</a></h5>
                                        <a href="http://ribs.csres.utexas.edu/nosqlrdf/" class="fancybox"><i
                                                class="fa fa-external-link fa-2x"></i></a>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section pad-top40 pad-bot40 mar-bot20 section-parallax-format" id="parallax-research" data-speed="15"
         data-type="background">
    <div class="container ">
        <div class="align-center pad-top40 pad-bot40">
            <h4 class="color-white pad-top50"></h4>
        </div>
    </div>
</section>

<section id="research" class="section appear clearfix">
    <div class="container pad-top10">
        <div class="row mar-bot10 ">
            <div class="col-md-offset-3 col-md-6">
                <div class="section-header">
                    <div class="wow bounceIn">
                        <h2 class="section-heading animated" data-animation="bounceInUp">Research</h2>
                        <p>An overview of my research interests, publications, etc.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="line-pricing-table wow rotateInDownRight" data-animation-delay="10s">
                <div class="pricing-table-wrap">
                    <ul>
                        <center><h3>Interests</h3></center>
                        <p align="center">
                            Reinforcement learning, human pose estimation, multimodal vision, video understanding,
                            activity prediction
                        </p>
                        <br>
                        <center><h3>Application Areas</h3></center>
                        <p align="center">
                            Medical diagnosis, healthcare environment monitoring, computational advertising, video
                            search and indexing
                        </p>
                    </ul>
                </div>
            </div>

            <div class="line-pricing-table wow rotateInUpRight" data-animation-delay="10s">
                <div class="pricing-table-wrap">
                    <ul>
                        <li class="line-head-row">
                            <center><h3>Past Groups</h3></center>
                        </li>
                        <p align="center"><a href="https://www.cs.utexas.edu/~miranker/mirankerLab.html">RiBS Lab</a>
                            (2012-14)<br>Department of Computer Science<br>University of Texas at Austin</p>
                        <p align="center"><a href="http://wilkelab.org/">Wilke Lab</a> (2013)<br>Department of
                            Integrative Biology<br>University of Texas at Austin</p>
                    </ul>
                </div>
            </div>
            <br/><br/>
        </div>
        <div class="col-md-8">
            <div class="line-pricing-table wow rotateInUpRight" data-animation-delay="10s">
                <div class="pricing-table-wrap">
                    <ul>
                        <li class="line-head-row">
                        </li>
                        <center><h3>Recent Papers</h3></center>

                        <li class="line-btn-row">
                        </li>
                        <ol align="left">
                            <li>
                                <strong>Towards Viewpoint Invariant 3D Human Pose Estimation</strong>.
                                A. Haque, B. Peng, Z. Luo, A. Alahi, S. Yeung, L. Fei-Fei. <a
                                    href="http://arxiv.org/abs/1603.07076">European Conference on Computer Vision (ECCV)</a>. 2016.
                                <a class="btn btn-primary btn-xs" href="http://arxiv.org/abs/1603.07076"><i
                                        class="fa fa-file-text" title="PDF"></i> PDF</a>
                                <a class="btn btn-primary btn-xs" href="./projects/viewpoint_3d_pose/"><i
                                        class="fa fa-mouse-pointer"></i> Website</a>
                            </li>
                            <li>
                                <strong>Recurrent Attention Models for Depth-Based Person Identification</strong>.
                                A. Haque, A. Alahi, L. Fei-Fei, <a href="http://cvpr2016.thecvf.com">Computer Vision and
                                Patter Recognition (CVPR)</a>. 2016.
                                <a class="btn btn-primary btn-xs"
                                   href="http://vision.stanford.edu/pdf/haque2016cvpr.pdf"><i class="fa fa-file-text"
                                                                                              title="PDF"></i> PDF</a>
                                <a class="btn btn-primary btn-xs" href="./projects/ram_person_id/"><i
                                        class="fa fa-mouse-pointer"></i> Website</a>
                            </li>
                            <li>
                                <strong>Vision-Based Hand Hygiene Monitoring in Hospitals</strong>.
                                S. Yeung, A. Alahi, Z. Luo, B. Peng, A. Haque, A. Singh, T. Platchek, A. Milstein, L.
                                Fei-Fei.
                                Workshop on Machine Learning in Healthcare, <a
                                    href="https://nips.cc/Conferences/2015/Schedule?type=Workshop">Neural Information
                                Processing Systems (NIPS)</a></strong>. 2015.</strong>
                            </li>
                            <li>
                                <strong>RGB-W: When Vision Meets Wireless</strong>. A. Alahi, A. Haque, and L. Fei-Fei.
                                <a href="http://pamitc.org/iccv15/program.php">International Conference on Computer
                                    Vision (ICCV)</a>. 2015.
                                <a class="btn btn-primary btn-xs"
                                   href="http://www.cv-foundation.org/openaccess/content_iccv_2015/papers/Alahi_RGB-W_When_Vision_ICCV_2015_paper.pdf"><i
                                        class="fa fa-file-text" title="PDF"></i> PDF</a>
                                <a class="btn btn-primary btn-xs" href="./projects/rgbw/"><i
                                        class="fa fa-mouse-pointer"></i> Website</a>
                            </li>

                            <li>
                                <strong>NoSQL Databases for RDF: An Empirical Evaluation.</strong>
                                P. Cudre-Mauroux, I. Enchev, S. Fundatureanu, P. Groth, A. Haque, A. Harth, F. Keppmann,
                                D. Miranker, J. Sequeda, and M. Wylot. <a href="http://iswc2013.semanticweb.org">International
                                Semantic Web Conference (ISWC)</a>. 2013.
                                <a class="btn btn-primary btn-xs" href="./dl/nosql_rdf_paper.pdf"><i
                                        class="fa fa-file-text" title="PDF"></i> PDF</a>
                                <a class="btn btn-primary btn-xs" href="http://ribs.csres.utexas.edu/nosqlrdf/"><i
                                        class="fa fa-mouse-pointer" title="Project Website"></i> Website</a>
                            </li>

                            <li>
                                <strong>A MapReduce Approach to NoSQL RDF Databases.</strong> A. Haque.<br>
                                The University of Texas at Austin. Report# HR-13-13 (honors theses). 2013.
                                <a class="btn btn-primary btn-xs" href="http://arxiv.org/abs/1601.01770"><i
                                        class="fa fa-file-text" title="PDF"></i> PDF</a>
                            </li>
                        </ol>
                    </ul>
                </div>
            </div>

            <div class="line-pricing-table wow rotateInUpLeft" data-animation-delay="10s">
                <div class="pricing-table-wrap" data-scrollreveal="enter top over 0.5s after 0.3s">
                    <ul align>
                        <li class="line-head-row">
                        </li>
                        <center><h3>Other Projects</h3></center>

                        <li class="line-btn-row">
                        </li>
                        <ol id="ol-space" align="left">
                            <li>
                                <strong>Unsupervised Context-Aware Anomaly Detection for Identifying Trolls in Streaming
                                    Data</strong>.
                                A. Haque. Course Project for Data Mining (CS 363D), University of Texas at Austin. May
                                2014.
                                <a class="btn btn-primary btn-xs" href="./dl/twitch_paper.pdf"><i
                                        class="fa fa-file-text" title="PDF"></i> PDF</a>
                                <a class="btn btn-primary btn-xs"
                                   href="https://github.com/ahaque/twitch-troll-detection"><i class="fa fa-github fa-lg"
                                                                                              title="Github"></i>
                                    Code</a>
                                <a class="btn btn-primary btn-xs" href="./dl/twitch_poster.pdf"><i
                                        class="fa fa-list-alt fa-lg" title="Poster"></i> Poster</a>
                            </li>

                        </ol>
                    </ul>
                </div>
            </div>
            <br/><br/>
        </div>
    </div>
</section>

<section id="section-map" class="clearfix">
    <div id="map"></div>
</section>

<section id="footer" class="section footer appear clearfix">
    <div class="container">
        <a name="contact" class="anchor"></a>
        <center>
            <p>
            <h2>Contact</h2>
            Ways to contact me and links to social media
            </p>
        </center>

        <div id="recaptcha-protected" align="center">
            <br>
            <form method="post">
                <div class="g-recaptcha" data-sitekey="6LduxRwTAAAAAJ4K1xk1B3svWbifdGiKfJBi1rsD"
                     data-callback="onReturnCallback" data-theme="dark"></div>
            </form>
            Click the box to show contact information
        </div>

        <div class="row align-center">
           <p align="center">Last Updated: <?php echo date("F d, Y", filemtime("index.php")) . "<br>" . date("c",
                filemtime("index.php")); ?></p>
        </div>
    </div>
</section>

<a href="#header" class="scrollup"><i class="fa fa-chevron-up"></i></a>
<script src="./js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
<script src="./js/jquery.js"></script>
<script src="./js/jquery.easing.1.3.js"></script>
<script src="./js/main.min.js"></script>
<script src="./js/jquery.isotope.min.js"></script>
<script src="./js/jquery.nicescroll.min.js"></script>
<script src="./js/fancybox/jquery.fancybox.pack.js"></script>
<script src="./js/skrollr.min.js"></script>
<script src="./js/jquery.scrollTo-1.4.3.1-min.js"></script>
<script src="./js/jquery.localscroll-1.2.7-min.js"></script>
<script src="./js/responsive-slider.js"></script>
<script src="./js/jquery.appear.js"></script>
<script src="./js/validate.js"></script>
<script src="./js/grid.js"></script>
<script src="./js/parallax.js"></script>
<script src="./js/main.js"></script>
<script type="text/javascript"
        src="//maps.googleapis.com/maps/api/js?key=AIzaSyA3Im-L0eHupZ1X4qCDFUCf80XNODeNJGM"></script>
<script type="text/javascript">
    // When the window has finished loading create our google map below
    google.maps.event.addDomListener(window, 'load', init);
    function init() {
        var mapOptions = {
            zoom: 11,
            center: new google.maps.LatLng(37.4292, -122.1381),
            styles: [{
                featureType: "all",
                elementType: "all",
                stylers: [
                    {invert_lightness: true},
                    {saturation: 10},
                    {lightness: 30},
                    {gamma: 0.5},
                    {hue: "#4A89FF"}]
            }]
        };
        var mapElement = document.getElementById('map');
        var map = new google.maps.Map(mapElement, mapOptions);
    }
</script>
<script src="js/wow.min.js"></script>
<script>
    wow = new WOW({}).init();
</script>
<script src='//www.google.com/recaptcha/api.js'></script>
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

    ga('create', 'UA-36983866-5', 'auto');
    ga('send', 'pageview');
</script>
</body>
</html>
