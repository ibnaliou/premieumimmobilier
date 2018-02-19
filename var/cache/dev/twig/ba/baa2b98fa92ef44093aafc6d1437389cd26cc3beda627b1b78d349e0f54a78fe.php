<?php

/* PremiumBundle::acceuil.html.twig */
class __TwigTemplate_fd89bec4f6c91bac8f76b28107fa0cf2a146dcb385735b8f8d4f1b47c002e892 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'slide' => array($this, 'block_slide'),
            'recherche' => array($this, 'block_recherche'),
            'offre' => array($this, 'block_offre'),
            'apropos' => array($this, 'block_apropos'),
            'partenaires' => array($this, 'block_partenaires'),
            'galerie' => array($this, 'block_galerie'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b32b99194a4769c82576769f810b48b7b3e9ee91b5a09eaecdc53ba0c5c45cba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b32b99194a4769c82576769f810b48b7b3e9ee91b5a09eaecdc53ba0c5c45cba->enter($__internal_b32b99194a4769c82576769f810b48b7b3e9ee91b5a09eaecdc53ba0c5c45cba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PremiumBundle::acceuil.html.twig"));

        $__internal_947fa87bd90affb11f8d0cdb9efc70ba467fbd6720c11ba49fc0085561300fdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_947fa87bd90affb11f8d0cdb9efc70ba467fbd6720c11ba49fc0085561300fdb->enter($__internal_947fa87bd90affb11f8d0cdb9efc70ba467fbd6720c11ba49fc0085561300fdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PremiumBundle::acceuil.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>Premium Immobilier</title>
    
        <link href=";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic|Playfair+Display:400,400italic,700,700italic,900,900italic"), "html", null, true);
        echo "rel='stylesheet' type='text/css'>
        <script defer src=";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://use.fontawesome.com/releases/v5.0.6/js/all.js"), "html", null, true);
        echo "></script>
        <!-- Bootstrap -->
        

        
 <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/font-awesome.min.css"), "html", null, true);
        echo " rel=\"stylesheet\">
 

        <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/owl.carousel.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/owl.theme.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/owl.transitions.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/cs-select.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap-datepicker3.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/freepik.hotels.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">




        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src=";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/html5shiv.min.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/respond.min.js"), "html", null, true);
        echo "></script>
        <![endif]-->
        <script src=";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/modernizr.custom.min.js"), "html", null, true);
        echo "></script>
    </head>
    <body>
  
        
        
            ";
        // line 43
        $this->displayBlock('header', $context, $blocks);
        // line 102
        echo "



  ";
        // line 106
        $this->displayBlock('slide', $context, $blocks);
        // line 151
        $this->displayBlock('recherche', $context, $blocks);
        // line 206
        $this->displayBlock('offre', $context, $blocks);
        // line 304
        echo "        ";
        $this->displayBlock('apropos', $context, $blocks);
        // line 332
        echo "
";
        // line 333
        $this->displayBlock('partenaires', $context, $blocks);
        // line 367
        $this->displayBlock('galerie', $context, $blocks);
        // line 419
        $this->displayBlock('footer', $context, $blocks);
        // line 510
        echo "        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src=";
        // line 511
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 512
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 513
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/owl.carousel.min.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 514
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jssor.slider.mini.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 515
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/classie.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 516
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/selectFx.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 517
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-datepicker.min.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 518
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/starrr.min.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 519
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/nivo-lightbox.min.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 520
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.shuffle.min.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 521
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("http://maps.google.com/maps/api/js?sensor=true"), "html", null, true);
        echo "></script>
        <script src=";
        // line 522
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/gmaps.min.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 523
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.parallax-1.1.3.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 524
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/script.js"), "html", null, true);
        echo "></script>
    </body>
</html>";
        
        $__internal_b32b99194a4769c82576769f810b48b7b3e9ee91b5a09eaecdc53ba0c5c45cba->leave($__internal_b32b99194a4769c82576769f810b48b7b3e9ee91b5a09eaecdc53ba0c5c45cba_prof);

        
        $__internal_947fa87bd90affb11f8d0cdb9efc70ba467fbd6720c11ba49fc0085561300fdb->leave($__internal_947fa87bd90affb11f8d0cdb9efc70ba467fbd6720c11ba49fc0085561300fdb_prof);

    }

    // line 43
    public function block_header($context, array $blocks = array())
    {
        $__internal_c40514ba8e6c75172f8107d995798e5768222a1be025d3f4980425cc953c312b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c40514ba8e6c75172f8107d995798e5768222a1be025d3f4980425cc953c312b->enter($__internal_c40514ba8e6c75172f8107d995798e5768222a1be025d3f4980425cc953c312b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_85ef62edf122ffc05bd41809954014a79d3d757ca7ec797ff1879cc58c3fb0f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85ef62edf122ffc05bd41809954014a79d3d757ca7ec797ff1879cc58c3fb0f0->enter($__internal_85ef62edf122ffc05bd41809954014a79d3d757ca7ec797ff1879cc58c3fb0f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 44
        echo "
        <header class=\"header transp sticky\"> <!-- available class for header: .sticky .center-content .transp -->
            <nav class=\"navbar navbar-inverse\">
                <div class=\"container\">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                        <a class=\"navbar-brand\" href=\"#\"><img src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/Capture.PNG"), "html", null, true);
        echo "\" id=\"logo\"alt=\"logo\"></a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                        <ul class=\"nav navbar-nav navbar-right\">
                            <li class=\"active\"><a href=\"index.html\">ACCEUIL</a></li>
                            <li class=\"\"><a href=\"#apropos\">A PROPOS</a></li>
                            <li class=\"dropdown\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">LOUER <span class=\"caret\"></span></a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"#\">Maisons</a></li>
                                    <li><a href=\"#\">Chambres</a></li>
                                    <li><a href=\"#\">Bureaus</a></li>
                                    <li><a href=\"#\">Appartements</a></li>
                                    <li><a href=\"#\">Studios</a></li>
                                    <li><a href=\"#\">Parking</a></li>
                                </ul>
                            </li>
                            <li class=\"dropdown\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">CATALOGUE<span class=\"caret\"></span></a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"#\">NOS BUREAUX</a></li>
                                    <li><a href=\"#\">NOS MAISONS</a></li>
                                    <li><a href=\"#\">NOS CHAMBRES</a></li>
                                    <li><a href=\"#\">NOS APPARTEMENTS</a></li>
                                    <li><a href=\"#\">NOS STUDIOS</a></li>
                                    <li><a href=\"#\">NOS PARKING</a></li>
                                </ul>
                            </li>
                            <li><a href=\"#\">Espace Clients</a></li>
                            <li><a href=\"#\">Contact</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                    <div class=\"mg-search-box-cont pull-right\">
                        <a href=\"#\" class=\"mg-search-box-trigger\"><i class=\"fa fa-search\"></i></a>
                        <div class=\"mg-search-box\">
                            <form>
                                <input type=\"text\" name=\"s\" class=\"form-control\" placeholder=\"rechercher\">
                                <button type=\"submit\" class=\"btn btn-main\"><i class=\"fa fa-search\"></i></button>
                            </form>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </nav>
        </header>
";
        
        $__internal_85ef62edf122ffc05bd41809954014a79d3d757ca7ec797ff1879cc58c3fb0f0->leave($__internal_85ef62edf122ffc05bd41809954014a79d3d757ca7ec797ff1879cc58c3fb0f0_prof);

        
        $__internal_c40514ba8e6c75172f8107d995798e5768222a1be025d3f4980425cc953c312b->leave($__internal_c40514ba8e6c75172f8107d995798e5768222a1be025d3f4980425cc953c312b_prof);

    }

    // line 106
    public function block_slide($context, array $blocks = array())
    {
        $__internal_f06c5785b163a6cad8dfeb29119d25b3acb017247ef56957e9fb55420b84d960 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f06c5785b163a6cad8dfeb29119d25b3acb017247ef56957e9fb55420b84d960->enter($__internal_f06c5785b163a6cad8dfeb29119d25b3acb017247ef56957e9fb55420b84d960_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slide"));

        $__internal_39e9a790b2db38d7de4ad64c33b8029781a41cfd0eabc912755e80f453a08071 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39e9a790b2db38d7de4ad64c33b8029781a41cfd0eabc912755e80f453a08071->enter($__internal_39e9a790b2db38d7de4ad64c33b8029781a41cfd0eabc912755e80f453a08071_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slide"));

        // line 107
        echo "        <div id=\"mega-slider\" class=\"carousel slide \" data-ride=\"carousel\">
            <!-- Indicators -->
            <ol class=\"carousel-indicators\">
                <li data-target=\"#mega-slider\" data-slide-to=\"0\" class=\"active\"></li>
                <li data-target=\"#mega-slider\" data-slide-to=\"1\"></li>
                <li data-target=\"#mega-slider\" data-slide-to=\"2\"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class=\"carousel-inner\" role=\"listbox\">
                <div class=\"item active beactive\">
                    <img src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/slide1.JPG"), "html", null, true);
        echo "\" id=\"slide\"alt=\"...\">
                    <div class=\"carousel-caption\">
                        <img src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/stars.png"), "html", null, true);
        echo "\" alt=\"\">
                        <h2>Bienvenue a Premium Immobilier</h2>
                        <p>Notre agence est le N°1 DE L'IMMOBILIER.</p>
                    </div>
                </div>
                <div class=\"item\">
                    <img src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/slide2.jpg"), "html", null, true);
        echo "\" id=\"slide\" alt=\"...\">
                    <div class=\"carousel-caption\">
                        <img src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/stars.png"), "html", null, true);
        echo "\" alt=\"\">
                        <h2>Avec Premium</h2>
                        <p>Vous etes toujours satisfait.</p>
                    </div>
                </div>
                <div class=\"item\">
                    <img src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/slide3.jpg"), "html", null, true);
        echo "\" id=\"slide\" alt=\"...\">
                    <div class=\"carousel-caption\">
                        <img src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/stars.png"), "html", null, true);
        echo "\" alt=\"\">
                        <h2>Premium offre</h2>
                        <p>aussi des villas de lux bien équipés.</p>
                    </div>
                </div>
            </div>
            

            <!-- Controls -->
            <a class=\"left carousel-control\" href=\"#mega-slider\" role=\"button\" data-slide=\"prev\">
            </a>
            <a class=\"right carousel-control\" href=\"#mega-slider\" role=\"button\" data-slide=\"next\">
            </a>
        </div>
        ";
        
        $__internal_39e9a790b2db38d7de4ad64c33b8029781a41cfd0eabc912755e80f453a08071->leave($__internal_39e9a790b2db38d7de4ad64c33b8029781a41cfd0eabc912755e80f453a08071_prof);

        
        $__internal_f06c5785b163a6cad8dfeb29119d25b3acb017247ef56957e9fb55420b84d960->leave($__internal_f06c5785b163a6cad8dfeb29119d25b3acb017247ef56957e9fb55420b84d960_prof);

    }

    // line 151
    public function block_recherche($context, array $blocks = array())
    {
        $__internal_47de1f89e50a90f9deaff28fb001a95c36b6435661015d8c007d0eee1c890ffe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47de1f89e50a90f9deaff28fb001a95c36b6435661015d8c007d0eee1c890ffe->enter($__internal_47de1f89e50a90f9deaff28fb001a95c36b6435661015d8c007d0eee1c890ffe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "recherche"));

        $__internal_a7bbce5539dd7e4ccb23a5328823f79950062ba13c61fd593146938b6f5c9c3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7bbce5539dd7e4ccb23a5328823f79950062ba13c61fd593146938b6f5c9c3e->enter($__internal_a7bbce5539dd7e4ccb23a5328823f79950062ba13c61fd593146938b6f5c9c3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "recherche"));

        // line 152
        echo "        <div class=\"mg-book-now\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-3\">
                        <h2 class=\"mg-bn-title\">Rechercher<span class=\"mg-bn-big\">Pour louer selon la disponibilité</span></h2>
                    </div>
                    <div class=\"col-md-9\">
                        <div class=\"mg-bn-forms\">
                            <form method=\"post\" action=\"";
        // line 160
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("search_bien");
        echo "\">
                                <div class=\"row\">
                                    <div class=\"col-md-3 col-xs-2\">
                                        <div class=\"input-group date mg-check-in\">
                                            <div class=\"input-group-addon\"><i class=\"fas fa-money-bill-alt\"></i></div>
                                            <input name=\"budget\" type=\"number\" class=\"form-control\" id=\"budget\" placeholder=\"Budget min\">
                                        </div>
                                    </div>
                                    
                                    
                                    <div class=\"col-md-5\">
                                        <div class=\"row\">
                                            <div class=\"col-xs-6\">
                                                <select name=\"typebien\" class=\"cs-select cs-skin-elastic\">
                                                    <option value=\"\" disabled selected>Type de Bien</option>
                                                    ";
        // line 175
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["types"] ?? $this->getContext($context, "types")));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 176
            echo "                                                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["type"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["type"], "libelle", array()), "html", null, true);
            echo "</option>
                                                    
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 179
        echo "                                                </select>
                                            </div>
                                            <div class=\"col-xs-6\">
                                            
                                                <select name=\"localite\" class=\"cs-select cs-skin-elastic\">
                                                    <option value=\"\" disabled selected>Localité <i class=\"fas fa-angle-down\"></i></option>
                                                    ";
        // line 185
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["localites"] ?? $this->getContext($context, "localites")));
        foreach ($context['_seq'] as $context["_key"] => $context["localite"]) {
            // line 186
            echo "                                                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["localite"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["localite"], "libelle", array()), "html", null, true);
            echo "</option>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['localite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 188
        echo "                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-3\">
                                        <button name=\"rechercher\" type=\"submit\" class=\"btn btn-main btn-block\">Rechercher</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>


                   
                </div>
            </div>
        </div>
        ";
        
        $__internal_a7bbce5539dd7e4ccb23a5328823f79950062ba13c61fd593146938b6f5c9c3e->leave($__internal_a7bbce5539dd7e4ccb23a5328823f79950062ba13c61fd593146938b6f5c9c3e_prof);

        
        $__internal_47de1f89e50a90f9deaff28fb001a95c36b6435661015d8c007d0eee1c890ffe->leave($__internal_47de1f89e50a90f9deaff28fb001a95c36b6435661015d8c007d0eee1c890ffe_prof);

    }

    // line 206
    public function block_offre($context, array $blocks = array())
    {
        $__internal_f04a3ba15ecec42bf0dd8074de4afd21e3c9ebaf55a7de0ddbfb5b4362114226 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f04a3ba15ecec42bf0dd8074de4afd21e3c9ebaf55a7de0ddbfb5b4362114226->enter($__internal_f04a3ba15ecec42bf0dd8074de4afd21e3c9ebaf55a7de0ddbfb5b4362114226_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "offre"));

        $__internal_944f6d5e8f418c873a0d13e9c8b9d253bd471f762c69297c9ab034f9c0ba83d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_944f6d5e8f418c873a0d13e9c8b9d253bd471f762c69297c9ab034f9c0ba83d4->enter($__internal_944f6d5e8f418c873a0d13e9c8b9d253bd471f762c69297c9ab034f9c0ba83d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "offre"));

        // line 207
        echo "        <div class=\"mg-best-rooms\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"mg-sec-title\">
                            <h2>NOS OFFRES</h2>
                            <p>Louer votre bien immobilier vide ou meublé, quel choix faire?</p><br>
                             Premium Immobilier est le votre!
                        </div>
                        
                        ";
        // line 217
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["biens"] ?? $this->getContext($context, "biens")));
        foreach ($context['_seq'] as $context["_key"] => $context["bien"]) {
            // line 218
            echo "                        <div class=\"row\">
                            <div class=\"col-sm-4\">
                                <figure class=\"mg-room\">
                                    <img src=\"";
            // line 221
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/bureau.jpeg"), "html", null, true);
            echo "\" alt=\"img11\" id=\"\" class=\"img-responsive\">
                                    <figcaption>
                                        <h2>";
            // line 223
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "nomBien", array()), "html", null, true);
            echo "</h2>
                                        <div class=\"mg-room-rating\"><i class=\"fa fa-star\"></i> 5.00</div>
                                        <div class=\"mg-room-price\">";
            // line 225
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "prixlocation", array()), "html", null, true);
            echo "</div>
                                        <p>";
            // line 226
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "description", array()), "html", null, true);
            echo "</p>
                                        <a href=\"#\" class=\"btn btn-link\">Voir Détails <i class=\"fa fa-angle-double-right\"></i></a>
                                        <a href=\"#\" class=\"btn btn-main\">Réserver</a>
                                    </figcaption>           
                                </figure>
                            </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bien'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 233
        echo "                            <div class=\"col-sm-4\">
                                <figure class=\"mg-room\">
                                    <img src=\"";
        // line 235
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/villa1.jpeg"), "html", null, true);
        echo "\" alt=\"img11\" id=\"villa\" class=\"img-responsive\">
                                    <figcaption>
                                        <h2>Villa</h2>
                                        <div class=\"mg-room-rating\"><i class=\"fa fa-star\"></i> 5.00</div>
                                        <div class=\"mg-room-price\">500 000f</div>
                                        <p>Villa neuf à Ngor derrière la gendarmerie.</p>
                                        <a href=\"#\" class=\"btn btn-link\">Voir Détails<i class=\"fa fa-angle-double-right\"></i></a>
                                        <a href=\"#\" class=\"btn btn-main\">Réserver</a>
                                    </figcaption>           
                                </figure>
                            </div>
                            <div class=\"col-sm-4\">
                                <figure class=\"mg-room\">
                                    <img src=\"";
        // line 248
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/apart.jpg"), "html", null, true);
        echo "\" alt=\"img11\" id=\"apart\" class=\"img-responsive\">
                                    <figcaption>
                                        <h2>Appartements</h2>
                                        <div class=\"mg-room-rating\"><i class=\"fa fa-star\"></i> 5.00</div>
                                        <div class=\"mg-room-price\">300 000/mois</div>
                                        <p>Appartements à l'immeuble Yoro Lam.</p>
                                        <a href=\"#\" class=\"btn btn-link\">Voir Détails <i class=\"fa fa-angle-double-right\"></i></a>
                                        <a href=\"#\" class=\"btn btn-main\">Réserver</a>
                                    </figcaption>           
                                </figure>
                            </div>
                            <div class=\"col-sm-4\">
                                <figure class=\"mg-room\">
                                    <img src=\"";
        // line 261
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/r1.jpg"), "html", null, true);
        echo "\" alt=\"img11\" id=\"apart\"class=\"img-responsive\">
                                    <figcaption>
                                        <h2>Villa R 1</h2>
                                        <div class=\"mg-room-rating\"><i class=\"fa fa-star\"></i> 5.00</div>
                                        <div class=\"mg-room-price\">1 000 000/mois</div>
                                        <p>une très belle villa R+1 à vendre aux almadies titre foncier elle est très bien placé et accessible sécurisé elle comprend 7 chambres.</p>
                                        <a href=\"#\" class=\"btn btn-link\">Voir Détails <i class=\"fa fa-angle-double-right\"></i></a>
                                        <a href=\"#\" class=\"btn btn-main\">Réserver</a>
                                    </figcaption>           
                                </figure>
                            </div>
                            <div class=\"col-sm-4\">
                                <figure class=\"mg-room\">
                                    <img src=\"";
        // line 274
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/im.jpeg"), "html", null, true);
        echo "\" alt=\"img11\" id=\"apart\"class=\"img-responsive\">
                                    <figcaption>
                                        <h2>Des appartements meublés et non meublés</h2>
                                        <div class=\"mg-room-rating\"><i class=\"fa fa-star\"></i> 5.00</div>
                                        <div class=\"mg-room-price\"></div>
                                        <p>A L'immeuble Khadim Rassoul de Hann.</p>
                                        <a href=\"#\" class=\"btn btn-link\">Voir Détails <i class=\"fa fa-angle-double-right\"></i></a>
                                        <a href=\"#\" class=\"btn btn-main\">Réserver</a>
                                    </figcaption>           
                                </figure>
                            </div>
                            <div class=\"col-sm-4\">
                                <figure class=\"mg-room\">
                                    <img src=\"";
        // line 287
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/chambre.jpeg"), "html", null, true);
        echo "\" alt=\"img11\" id=\"apart\"class=\"img-responsive\">
                                    <figcaption>
                                        <h2>Chambres</h2>
                                        <div class=\"mg-room-rating\"><i class=\"fa fa-star\"></i> 5.00</div>
                                        <div class=\"mg-room-price\">60 000/mois</div>
                                        <p>Des chambres équipés et non équipés selon votre choix et selon votre budget</p>
                                        <a href=\"#\" class=\"btn btn-link\">Voir Détails <i class=\"fa fa-angle-double-right\"></i></a>
                                        <a href=\"#\" class=\"btn btn-main\">Réserver</a>
                                    </figcaption>           
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        ";
        
        $__internal_944f6d5e8f418c873a0d13e9c8b9d253bd471f762c69297c9ab034f9c0ba83d4->leave($__internal_944f6d5e8f418c873a0d13e9c8b9d253bd471f762c69297c9ab034f9c0ba83d4_prof);

        
        $__internal_f04a3ba15ecec42bf0dd8074de4afd21e3c9ebaf55a7de0ddbfb5b4362114226->leave($__internal_f04a3ba15ecec42bf0dd8074de4afd21e3c9ebaf55a7de0ddbfb5b4362114226_prof);

    }

    // line 304
    public function block_apropos($context, array $blocks = array())
    {
        $__internal_8d28e9bcaaa9e301aff11c3caa14e3fc50384471b5079946dac2d411d38f221d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d28e9bcaaa9e301aff11c3caa14e3fc50384471b5079946dac2d411d38f221d->enter($__internal_8d28e9bcaaa9e301aff11c3caa14e3fc50384471b5079946dac2d411d38f221d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "apropos"));

        $__internal_c7f6028aaa2e562be0ff1144fb247dc4e032f8f8497e34e999331cb97423af4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7f6028aaa2e562be0ff1144fb247dc4e032f8f8497e34e999331cb97423af4a->enter($__internal_c7f6028aaa2e562be0ff1144fb247dc4e032f8f8497e34e999331cb97423af4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "apropos"));

        // line 305
        echo "         <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <hr>
                </div>
            </div>
        </div> -->
        <div class=\"mg-about parallax\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <h2 class=\"mg-sec-left-title\" id=\"apropos\">A PROPOS DE PREMIUM IMMOBILIER</h2>
                        <p>PREMIUM IMMOBILIER® est une entreprise de professionnels maitrisant les cadres réglementaires du secteur de l’immobilier au Sénégal. PREMIUM IMMOBILIER®, une référence en transaction immobilière de tout ordre, vous propose des services personnalisés de gérance, de location de vos biens immobiliers. Avec un concept immobilier novateur, propre à l’Afrique, en parfaite adéquation aux réalités africaines, PREMIUM IMMOBILIER® s’appuie sur le leadership féminin. Soucieux de votre confiance, il vous assure un suivi complet et personnalisé dans la réalisation de vos projets tel que la location du premier chez soi, la location du premier bureau ou le premier investissement immobilier en pérennisant vos acquis. Avec une expérience cumulée de plusieurs années dans le secteur, PREMIUM IMMOBILIER® met à votre disposition une équipe professionnelle pour le traitement de toutes vos demandes dans un délai record de 72 h. Grâce à notre réseau de plus de 25 agences partenaires, nous vous offrons les meilleurs choix en clientèle et produit avec toute la réactivité requise dans la prise en charge des demandes...</p>
                    </div>
                    <div class=\"col-md-5\">
                        <div id=\"pub\" class=\"video-responsive\">
                        <video width=\"600\" height=\"375\" controls >
                                <source src=\"";
        // line 322
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("video/om.mp4"), "html", null, true);
        echo "\" type=\"video/mp4\">
                                
                             </video>
                             
                        </div>
                    </div>
                </div>
            </div>
        </div>
        ";
        
        $__internal_c7f6028aaa2e562be0ff1144fb247dc4e032f8f8497e34e999331cb97423af4a->leave($__internal_c7f6028aaa2e562be0ff1144fb247dc4e032f8f8497e34e999331cb97423af4a_prof);

        
        $__internal_8d28e9bcaaa9e301aff11c3caa14e3fc50384471b5079946dac2d411d38f221d->leave($__internal_8d28e9bcaaa9e301aff11c3caa14e3fc50384471b5079946dac2d411d38f221d_prof);

    }

    // line 333
    public function block_partenaires($context, array $blocks = array())
    {
        $__internal_fdf9a3ce8ed8f6316602c69556d0916e9d98830f0df4ee24916f342f156bed03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdf9a3ce8ed8f6316602c69556d0916e9d98830f0df4ee24916f342f156bed03->enter($__internal_fdf9a3ce8ed8f6316602c69556d0916e9d98830f0df4ee24916f342f156bed03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "partenaires"));

        $__internal_6c0ab9cf7c04731f641e41d6ab539a7ed5259757e5915cb85b4d4218ba85a619 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c0ab9cf7c04731f641e41d6ab539a7ed5259757e5915cb85b4d4218ba85a619->enter($__internal_6c0ab9cf7c04731f641e41d6ab539a7ed5259757e5915cb85b4d4218ba85a619_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "partenaires"));

        // line 334
        echo "        <div class=\"mg-testi-partners parallax\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <h2 class=\"mg-sec-left-title\">Vision et Mission</h2>
                        <div class=\"mg-testimonial-slider\" id=\"mg-testimonial-slider\">
                            <blockquote>
                                <p>Chez Premium Immobilier nous croyons au traitement de tout collaborateur avec respect et nous intégrons l'honnêteté, l'intégrité et l'éthique dans tous les aspects du fonctionnement de l'entreprise.</p>
                                <footer>Premium Immobilier</footer>
                            </blockquote>
                            <blockquote>
                                <p>La stratégie de Premium Immobilier est bâtie sur un objectif précis qui est de devenir à court terme le chef de file du secteur immobilier sous-régional et un acteur clé de l'industrie en fournissant des services exceptionnels, innovants, rentables et de qualité qui dépassent les attentes des clients et partenaires.</p>
                                <footer>Premium Immobilier</footer>
                            </blockquote>
                            <blockquote>
                                <p>Notre mission est de construire une relation à long terme avec tous nos clients et partenaires en nous basant sur un modèle d'affaire ancré sur la créativité et la technologie de pointe.</p>
                                <footer>Premium Immobilier</footer>
                            </blockquote>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <h2 class=\"mg-sec-left-title\">Nos Partenaires</h2>
                        <ul class=\"mg-part-logos\" id=\"mg-part-logos\">
                            <li><img src=\"";
        // line 357
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/orangemoney.png"), "html", null, true);
        echo "\" id=\"parte\" alt=\"Partner Logo\"></li>
                            <li><img src=\"";
        // line 358
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/wari.jpeg"), "html", null, true);
        echo "\" id=\"parte\" alt=\"Partner Logo\"></li>
                            <li><img src=\"";
        // line 359
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/sg.png"), "html", null, true);
        echo "\" id=\"parte\" alt=\"Partner Logo\"></li>
                            <li><img src=\"";
        // line 360
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/visa.png"), "html", null, true);
        echo "\" id=\"parte\" alt=\"Partner Logo\"></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        ";
        
        $__internal_6c0ab9cf7c04731f641e41d6ab539a7ed5259757e5915cb85b4d4218ba85a619->leave($__internal_6c0ab9cf7c04731f641e41d6ab539a7ed5259757e5915cb85b4d4218ba85a619_prof);

        
        $__internal_fdf9a3ce8ed8f6316602c69556d0916e9d98830f0df4ee24916f342f156bed03->leave($__internal_fdf9a3ce8ed8f6316602c69556d0916e9d98830f0df4ee24916f342f156bed03_prof);

    }

    // line 367
    public function block_galerie($context, array $blocks = array())
    {
        $__internal_32aeafe196fc63bc06d1184e3ba1fc960fcf75a7fdda365f6f6ab1c7cc62bae4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32aeafe196fc63bc06d1184e3ba1fc960fcf75a7fdda365f6f6ab1c7cc62bae4->enter($__internal_32aeafe196fc63bc06d1184e3ba1fc960fcf75a7fdda365f6f6ab1c7cc62bae4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "galerie"));

        $__internal_2accd7258a9fc5779b08319357ddf5724b122e1e052d97b9694abb7a7aa3703f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2accd7258a9fc5779b08319357ddf5724b122e1e052d97b9694abb7a7aa3703f->enter($__internal_2accd7258a9fc5779b08319357ddf5724b122e1e052d97b9694abb7a7aa3703f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "galerie"));

        // line 368
        echo "        <div class=\"mg-news-gallery\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-5\">
                        <h2 class=\"mg-sec-left-title\">A LA UNE</h2>
                        <ul class=\"mg-recnt-posts\">
                            <li>
                                <div class=\"mg-recnt-post\">
                                    <div class=\"mg-rp-date\">27 <div class=\"mg-rp-month\">may</div></div>
                                    <h3><a href=\"#\">Immeuble de 7 etages</a></h3>
                                    <p>Au VDN</p>
                                </div>
                            </li>
                            <li>
                                <div class=\"mg-recnt-post\">
                                    <div class=\"mg-rp-date\">27 <div class=\"mg-rp-month\">may</div></div>
                                    <h3><a href=\"#\">A Standard Blog Post</a></h3>
                                    <p>Nostram virtutem poterimus quoddam praesertim legendos libero exhorrescere saluti...</p>
                                </div>
                            </li>
                            <li>
                                <div class=\"mg-recnt-post\">
                                    <div class=\"mg-rp-date\">27 <div class=\"mg-rp-month\">may</div></div>
                                    <h3><a href=\"#\">A Standard Blog Post</a></h3>
                                    <p>Nostram virtutem poterimus quoddam praesertim legendos libero exhorrescere saluti...</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class=\"col-md-7\">
                        <h2 class=\"mg-sec-left-title\">Nos Biens</h2>

                        <div class=\"mg-gallery-container\">
                            <ul class=\"mg-gallery\" id=\"mg-gallery\">
                                    
                                <li><img src=\"";
        // line 403
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/apart.jpg"), "html", null, true);
        echo "\" id=\"gal\" alt=\"Partner Logo\"></li>
                                <li><img src=\"";
        // line 404
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/bureau.jpg"), "html", null, true);
        echo "\" id=\"gal\" alt=\"Partner Logo\"></li>
                                <li><img src=\"";
        // line 405
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/chambre.jpeg"), "html", null, true);
        echo "\" id=\"gal\" alt=\"Partner Logo\"></li>
                                <li><img src=\"";
        // line 406
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/im.jpeg"), "html", null, true);
        echo "\" id=\"gal\" alt=\"Partner Logo\"></li>
                                <li><img src=\"";
        // line 407
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/slide1.JPG"), "html", null, true);
        echo "\" id=\"gal\" alt=\"Partner Logo\"></li>
                                <li><img src=\"";
        // line 408
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/slide2.jpg"), "html", null, true);
        echo "\" id=\"gal\" alt=\"Partner Logo\"></li>
                            </ul>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div> 
          
        
";
        
        $__internal_2accd7258a9fc5779b08319357ddf5724b122e1e052d97b9694abb7a7aa3703f->leave($__internal_2accd7258a9fc5779b08319357ddf5724b122e1e052d97b9694abb7a7aa3703f_prof);

        
        $__internal_32aeafe196fc63bc06d1184e3ba1fc960fcf75a7fdda365f6f6ab1c7cc62bae4->leave($__internal_32aeafe196fc63bc06d1184e3ba1fc960fcf75a7fdda365f6f6ab1c7cc62bae4_prof);

    }

    // line 419
    public function block_footer($context, array $blocks = array())
    {
        $__internal_a3f77308f613284999ccecfa46230efe8c7ae79d2987cad7240c4b4f6ff9f5fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3f77308f613284999ccecfa46230efe8c7ae79d2987cad7240c4b4f6ff9f5fe->enter($__internal_a3f77308f613284999ccecfa46230efe8c7ae79d2987cad7240c4b4f6ff9f5fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_67b8dfcf956f90d8648e248041819a126e4b3ee53d69f2f511d099e387c5d9b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67b8dfcf956f90d8648e248041819a126e4b3ee53d69f2f511d099e387c5d9b1->enter($__internal_67b8dfcf956f90d8648e248041819a126e4b3ee53d69f2f511d099e387c5d9b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 420
        echo "        <footer class=\"mg-footer\">
            <div class=\"mg-footer-widget\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-3 col-sm-6\">
                            <div class=\"widget\">
                                <h2 class=\"mg-widget-title\">Contactez-nous</h2>
                                <address>
                                    <strong>CTIC/DAKAR</strong><br>
                                    Rue 3 Berenger Feraud<br>
                                    SONATEL ACADEMY
                                </address>
                
                                <p>
                                    221 33 547 21 40<br>
                                    221 33 548 69 35
                                </p>
                
                                <p>
                                    <a href=\"mailto:\">premiumimmobilier.sn</a>
                                </p>
                            </div>
                        </div>
                        <div class=\"col-md-3 col-sm-6\">
                            <div class=\"widget\">
                                <h2 class=\"mg-widget-title\">Instagram</h2>
                                <ul class=\"mg-instagram\">
                                    <li><a href=\"\"><img src=\"";
        // line 447
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/1.png"), "html", null, true);
        echo "\" alt=\"\"></a></li>
                                    <li><a href=\"\"><img src=\"";
        // line 448
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/2.png"), "html", null, true);
        echo "\" alt=\"\"></a></li>
                                    <li><a href=\"\"><img src=\"";
        // line 449
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/3.png"), "html", null, true);
        echo "\" alt=\"\"></a></li>
                                    <li><a href=\"\"><img src=\"";
        // line 450
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/4.png"), "html", null, true);
        echo "\" alt=\"\"></a></li>
                                    <li><a href=\"\"><img src=\"";
        // line 451
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/5.png"), "html", null, true);
        echo "\" alt=\"\"></a></li>
                                    <li><a href=\"\"><img src=\"";
        // line 452
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/6.png"), "html", null, true);
        echo "\" alt=\"\"></a></li>
                                    <li><a href=\"\"><img src=\"";
        // line 453
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/7.png"), "html", null, true);
        echo "\" alt=\"\"></a></li>
                                    <li><a href=\"\"><img src=\"";
        // line 454
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/8.png"), "html", null, true);
        echo "\" alt=\"\"></a></li>
                            
                                </ul>
                            </div>
                        </div>
                        <div class=\"col-md-3 col-sm-6\">
                            <div class=\"widget\">
                                <h2 class=\"mg-widget-title\">Newsletter</h2>
                                <p>Inscrivez-vous à notre newsletter pour ne rien manquez sur nos offres.</p>
                                <form>
                                    <p>
                                        <input type=\"email\" class=\"form-control\" placeholder=\"Votre e-mail\">
                                    </p>
                                    <input type=\"submit\" class=\"btn btn-main\" value=\"S'inscrire\">
                                </form>
                            </div>
                        </div>
                        <div class=\"col-md-3 col-sm-6\">
                            <div class=\"widget\">
                                <h2 class=\"mg-widget-title\">Réseaux Sociaux</h2>
                                <p>Suivez-nous sur les réseaux sociaux.</p>
                                <ul class=\"mg-footer-social\">
                                    <li><a href=\"#\"><i class=\"fab fa-facebook\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fab fa-twitter-square\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fab fa-pinterest-square\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fab fa-google-plus\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-rss\"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"mg-copyright\">
                <div class=\"container\">
                    <div class=\"row\">
                        
                        <div class=\"col-md-6\">
                            <ul class=\"mg-footer-nav\">
                                <li><a href=\"#\">ACCEUIL</a></li>
                                <li><a href=\"#\">A PROPOS</a></li>
                                <li><a href=\"#\">LOUER</a></li>
                                <li><a href=\"#\">CATALOGUE</a></li>
                                <li><a href=\"#\">Espace Client</a></li>
                                <li><a href=\"#\">Contact</a></li>
                            </ul>
                        </div>
                        <div class=\"col-md-6\">
                            <p>&copy; 2018 <a href=\"http://www.sonatelacademy.sn\">Premium immobilier</a>. tout droits reservés.</p>
                        </div>
                    </div>
                </div>
            </div>
        
        </footer>
";
        
        $__internal_67b8dfcf956f90d8648e248041819a126e4b3ee53d69f2f511d099e387c5d9b1->leave($__internal_67b8dfcf956f90d8648e248041819a126e4b3ee53d69f2f511d099e387c5d9b1_prof);

        
        $__internal_a3f77308f613284999ccecfa46230efe8c7ae79d2987cad7240c4b4f6ff9f5fe->leave($__internal_a3f77308f613284999ccecfa46230efe8c7ae79d2987cad7240c4b4f6ff9f5fe_prof);

    }

    public function getTemplateName()
    {
        return "PremiumBundle::acceuil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  891 => 454,  887 => 453,  883 => 452,  879 => 451,  875 => 450,  871 => 449,  867 => 448,  863 => 447,  834 => 420,  825 => 419,  804 => 408,  800 => 407,  796 => 406,  792 => 405,  788 => 404,  784 => 403,  747 => 368,  738 => 367,  721 => 360,  717 => 359,  713 => 358,  709 => 357,  684 => 334,  675 => 333,  655 => 322,  636 => 305,  627 => 304,  600 => 287,  584 => 274,  568 => 261,  552 => 248,  536 => 235,  532 => 233,  519 => 226,  515 => 225,  510 => 223,  505 => 221,  500 => 218,  496 => 217,  484 => 207,  475 => 206,  448 => 188,  437 => 186,  433 => 185,  425 => 179,  413 => 176,  409 => 175,  391 => 160,  381 => 152,  372 => 151,  347 => 136,  342 => 134,  333 => 128,  328 => 126,  319 => 120,  314 => 118,  301 => 107,  292 => 106,  236 => 56,  222 => 44,  213 => 43,  200 => 524,  196 => 523,  192 => 522,  188 => 521,  184 => 520,  180 => 519,  176 => 518,  172 => 517,  168 => 516,  164 => 515,  160 => 514,  156 => 513,  152 => 512,  148 => 511,  145 => 510,  143 => 419,  141 => 367,  139 => 333,  136 => 332,  133 => 304,  131 => 206,  129 => 151,  127 => 106,  121 => 102,  119 => 43,  110 => 37,  105 => 35,  101 => 34,  90 => 26,  86 => 25,  82 => 24,  78 => 23,  74 => 22,  70 => 21,  66 => 20,  60 => 17,  56 => 16,  48 => 11,  44 => 10,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>Premium Immobilier</title>
    
        <link href={{asset ('https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic|Playfair+Display:400,400italic,700,700italic,900,900italic' )}}rel='stylesheet' type='text/css'>
        <script defer src={{ asset('https://use.fontawesome.com/releases/v5.0.6/js/all.js')}}></script>
        <!-- Bootstrap -->
        

        
 <link href=\"{{asset ('css/bootstrap.min.css')}}\" rel=\"stylesheet\">
        <link href=\"{{asset ('css/font-awesome.min.css')}} rel=\"stylesheet\">
 

        <link href=\"{{asset ('css/owl.carousel.css')}}\" rel=\"stylesheet\">
        <link href=\"{{asset ('css/owl.theme.css')}}\" rel=\"stylesheet\">
        <link href=\"{{asset ('css/owl.transitions.css')}}\" rel=\"stylesheet\">
        <link href=\"{{asset ('css/cs-select.css')}}\" rel=\"stylesheet\">
        <link href=\"{{asset ('css/bootstrap-datepicker3.min.css')}}\" rel=\"stylesheet\">
        <link href=\"{{asset ('css/freepik.hotels.css')}}\" rel=\"stylesheet\">
        <link href=\"{{asset ('css/style.css')}}\" rel=\"stylesheet\">




        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src={{asset ('js/html5shiv.min.js')}}></script>
        <script src={{asset ('js/respond.min.js')}}></script>
        <![endif]-->
        <script src={{asset ('js/modernizr.custom.min.js')}}></script>
    </head>
    <body>
  
        
        
            {% block header %}

        <header class=\"header transp sticky\"> <!-- available class for header: .sticky .center-content .transp -->
            <nav class=\"navbar navbar-inverse\">
                <div class=\"container\">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                        <a class=\"navbar-brand\" href=\"#\"><img src=\"{{ asset('images/Capture.PNG') }}\" id=\"logo\"alt=\"logo\"></a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                        <ul class=\"nav navbar-nav navbar-right\">
                            <li class=\"active\"><a href=\"index.html\">ACCEUIL</a></li>
                            <li class=\"\"><a href=\"#apropos\">A PROPOS</a></li>
                            <li class=\"dropdown\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">LOUER <span class=\"caret\"></span></a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"#\">Maisons</a></li>
                                    <li><a href=\"#\">Chambres</a></li>
                                    <li><a href=\"#\">Bureaus</a></li>
                                    <li><a href=\"#\">Appartements</a></li>
                                    <li><a href=\"#\">Studios</a></li>
                                    <li><a href=\"#\">Parking</a></li>
                                </ul>
                            </li>
                            <li class=\"dropdown\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">CATALOGUE<span class=\"caret\"></span></a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"#\">NOS BUREAUX</a></li>
                                    <li><a href=\"#\">NOS MAISONS</a></li>
                                    <li><a href=\"#\">NOS CHAMBRES</a></li>
                                    <li><a href=\"#\">NOS APPARTEMENTS</a></li>
                                    <li><a href=\"#\">NOS STUDIOS</a></li>
                                    <li><a href=\"#\">NOS PARKING</a></li>
                                </ul>
                            </li>
                            <li><a href=\"#\">Espace Clients</a></li>
                            <li><a href=\"#\">Contact</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                    <div class=\"mg-search-box-cont pull-right\">
                        <a href=\"#\" class=\"mg-search-box-trigger\"><i class=\"fa fa-search\"></i></a>
                        <div class=\"mg-search-box\">
                            <form>
                                <input type=\"text\" name=\"s\" class=\"form-control\" placeholder=\"rechercher\">
                                <button type=\"submit\" class=\"btn btn-main\"><i class=\"fa fa-search\"></i></button>
                            </form>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </nav>
        </header>
{% endblock %}




  {% block slide %}
        <div id=\"mega-slider\" class=\"carousel slide \" data-ride=\"carousel\">
            <!-- Indicators -->
            <ol class=\"carousel-indicators\">
                <li data-target=\"#mega-slider\" data-slide-to=\"0\" class=\"active\"></li>
                <li data-target=\"#mega-slider\" data-slide-to=\"1\"></li>
                <li data-target=\"#mega-slider\" data-slide-to=\"2\"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class=\"carousel-inner\" role=\"listbox\">
                <div class=\"item active beactive\">
                    <img src=\"{{ asset('images/slide1.JPG') }}\" id=\"slide\"alt=\"...\">
                    <div class=\"carousel-caption\">
                        <img src=\"{{ asset('images/stars.png') }}\" alt=\"\">
                        <h2>Bienvenue a Premium Immobilier</h2>
                        <p>Notre agence est le N°1 DE L'IMMOBILIER.</p>
                    </div>
                </div>
                <div class=\"item\">
                    <img src=\"{{ asset('images/slide2.jpg') }}\" id=\"slide\" alt=\"...\">
                    <div class=\"carousel-caption\">
                        <img src=\"{{ asset('images/stars.png') }}\" alt=\"\">
                        <h2>Avec Premium</h2>
                        <p>Vous etes toujours satisfait.</p>
                    </div>
                </div>
                <div class=\"item\">
                    <img src=\"{{ asset('images/slide3.jpg') }}\" id=\"slide\" alt=\"...\">
                    <div class=\"carousel-caption\">
                        <img src=\"{{ asset('images/stars.png') }}\" alt=\"\">
                        <h2>Premium offre</h2>
                        <p>aussi des villas de lux bien équipés.</p>
                    </div>
                </div>
            </div>
            

            <!-- Controls -->
            <a class=\"left carousel-control\" href=\"#mega-slider\" role=\"button\" data-slide=\"prev\">
            </a>
            <a class=\"right carousel-control\" href=\"#mega-slider\" role=\"button\" data-slide=\"next\">
            </a>
        </div>
        {% endblock %}
{% block recherche %}
        <div class=\"mg-book-now\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-3\">
                        <h2 class=\"mg-bn-title\">Rechercher<span class=\"mg-bn-big\">Pour louer selon la disponibilité</span></h2>
                    </div>
                    <div class=\"col-md-9\">
                        <div class=\"mg-bn-forms\">
                            <form method=\"post\" action=\"{{path('search_bien')}}\">
                                <div class=\"row\">
                                    <div class=\"col-md-3 col-xs-2\">
                                        <div class=\"input-group date mg-check-in\">
                                            <div class=\"input-group-addon\"><i class=\"fas fa-money-bill-alt\"></i></div>
                                            <input name=\"budget\" type=\"number\" class=\"form-control\" id=\"budget\" placeholder=\"Budget min\">
                                        </div>
                                    </div>
                                    
                                    
                                    <div class=\"col-md-5\">
                                        <div class=\"row\">
                                            <div class=\"col-xs-6\">
                                                <select name=\"typebien\" class=\"cs-select cs-skin-elastic\">
                                                    <option value=\"\" disabled selected>Type de Bien</option>
                                                    {%for type in  types %}
                                                    <option value=\"{{type.id}}\">{{type.libelle}}</option>
                                                    
                                                    {%endfor%}
                                                </select>
                                            </div>
                                            <div class=\"col-xs-6\">
                                            
                                                <select name=\"localite\" class=\"cs-select cs-skin-elastic\">
                                                    <option value=\"\" disabled selected>Localité <i class=\"fas fa-angle-down\"></i></option>
                                                    {%for localite in  localites %}
                                                    <option value=\"{{localite.id}}\">{{localite.libelle}}</option>
                                                    {%endfor%}
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-3\">
                                        <button name=\"rechercher\" type=\"submit\" class=\"btn btn-main btn-block\">Rechercher</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>


                   
                </div>
            </div>
        </div>
        {% endblock %}
{% block offre %}
        <div class=\"mg-best-rooms\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"mg-sec-title\">
                            <h2>NOS OFFRES</h2>
                            <p>Louer votre bien immobilier vide ou meublé, quel choix faire?</p><br>
                             Premium Immobilier est le votre!
                        </div>
                        
                        {%for bien in  biens %}
                        <div class=\"row\">
                            <div class=\"col-sm-4\">
                                <figure class=\"mg-room\">
                                    <img src=\"{{ asset('images/bureau.jpeg')}}\" alt=\"img11\" id=\"\" class=\"img-responsive\">
                                    <figcaption>
                                        <h2>{{bien.nomBien}}</h2>
                                        <div class=\"mg-room-rating\"><i class=\"fa fa-star\"></i> 5.00</div>
                                        <div class=\"mg-room-price\">{{bien.prixlocation}}</div>
                                        <p>{{bien.description}}</p>
                                        <a href=\"#\" class=\"btn btn-link\">Voir Détails <i class=\"fa fa-angle-double-right\"></i></a>
                                        <a href=\"#\" class=\"btn btn-main\">Réserver</a>
                                    </figcaption>           
                                </figure>
                            </div>
                            {%endfor%}
                            <div class=\"col-sm-4\">
                                <figure class=\"mg-room\">
                                    <img src=\"{{ asset('images/villa1.jpeg')}}\" alt=\"img11\" id=\"villa\" class=\"img-responsive\">
                                    <figcaption>
                                        <h2>Villa</h2>
                                        <div class=\"mg-room-rating\"><i class=\"fa fa-star\"></i> 5.00</div>
                                        <div class=\"mg-room-price\">500 000f</div>
                                        <p>Villa neuf à Ngor derrière la gendarmerie.</p>
                                        <a href=\"#\" class=\"btn btn-link\">Voir Détails<i class=\"fa fa-angle-double-right\"></i></a>
                                        <a href=\"#\" class=\"btn btn-main\">Réserver</a>
                                    </figcaption>           
                                </figure>
                            </div>
                            <div class=\"col-sm-4\">
                                <figure class=\"mg-room\">
                                    <img src=\"{{ asset('images/apart.jpg')}}\" alt=\"img11\" id=\"apart\" class=\"img-responsive\">
                                    <figcaption>
                                        <h2>Appartements</h2>
                                        <div class=\"mg-room-rating\"><i class=\"fa fa-star\"></i> 5.00</div>
                                        <div class=\"mg-room-price\">300 000/mois</div>
                                        <p>Appartements à l'immeuble Yoro Lam.</p>
                                        <a href=\"#\" class=\"btn btn-link\">Voir Détails <i class=\"fa fa-angle-double-right\"></i></a>
                                        <a href=\"#\" class=\"btn btn-main\">Réserver</a>
                                    </figcaption>           
                                </figure>
                            </div>
                            <div class=\"col-sm-4\">
                                <figure class=\"mg-room\">
                                    <img src=\"{{ asset('images/r1.jpg')}}\" alt=\"img11\" id=\"apart\"class=\"img-responsive\">
                                    <figcaption>
                                        <h2>Villa R 1</h2>
                                        <div class=\"mg-room-rating\"><i class=\"fa fa-star\"></i> 5.00</div>
                                        <div class=\"mg-room-price\">1 000 000/mois</div>
                                        <p>une très belle villa R+1 à vendre aux almadies titre foncier elle est très bien placé et accessible sécurisé elle comprend 7 chambres.</p>
                                        <a href=\"#\" class=\"btn btn-link\">Voir Détails <i class=\"fa fa-angle-double-right\"></i></a>
                                        <a href=\"#\" class=\"btn btn-main\">Réserver</a>
                                    </figcaption>           
                                </figure>
                            </div>
                            <div class=\"col-sm-4\">
                                <figure class=\"mg-room\">
                                    <img src=\"{{ asset('images/im.jpeg')}}\" alt=\"img11\" id=\"apart\"class=\"img-responsive\">
                                    <figcaption>
                                        <h2>Des appartements meublés et non meublés</h2>
                                        <div class=\"mg-room-rating\"><i class=\"fa fa-star\"></i> 5.00</div>
                                        <div class=\"mg-room-price\"></div>
                                        <p>A L'immeuble Khadim Rassoul de Hann.</p>
                                        <a href=\"#\" class=\"btn btn-link\">Voir Détails <i class=\"fa fa-angle-double-right\"></i></a>
                                        <a href=\"#\" class=\"btn btn-main\">Réserver</a>
                                    </figcaption>           
                                </figure>
                            </div>
                            <div class=\"col-sm-4\">
                                <figure class=\"mg-room\">
                                    <img src=\"{{ asset('images/chambre.jpeg')}}\" alt=\"img11\" id=\"apart\"class=\"img-responsive\">
                                    <figcaption>
                                        <h2>Chambres</h2>
                                        <div class=\"mg-room-rating\"><i class=\"fa fa-star\"></i> 5.00</div>
                                        <div class=\"mg-room-price\">60 000/mois</div>
                                        <p>Des chambres équipés et non équipés selon votre choix et selon votre budget</p>
                                        <a href=\"#\" class=\"btn btn-link\">Voir Détails <i class=\"fa fa-angle-double-right\"></i></a>
                                        <a href=\"#\" class=\"btn btn-main\">Réserver</a>
                                    </figcaption>           
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {% endblock %}
        {% block apropos %}
         <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <hr>
                </div>
            </div>
        </div> -->
        <div class=\"mg-about parallax\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <h2 class=\"mg-sec-left-title\" id=\"apropos\">A PROPOS DE PREMIUM IMMOBILIER</h2>
                        <p>PREMIUM IMMOBILIER® est une entreprise de professionnels maitrisant les cadres réglementaires du secteur de l’immobilier au Sénégal. PREMIUM IMMOBILIER®, une référence en transaction immobilière de tout ordre, vous propose des services personnalisés de gérance, de location de vos biens immobiliers. Avec un concept immobilier novateur, propre à l’Afrique, en parfaite adéquation aux réalités africaines, PREMIUM IMMOBILIER® s’appuie sur le leadership féminin. Soucieux de votre confiance, il vous assure un suivi complet et personnalisé dans la réalisation de vos projets tel que la location du premier chez soi, la location du premier bureau ou le premier investissement immobilier en pérennisant vos acquis. Avec une expérience cumulée de plusieurs années dans le secteur, PREMIUM IMMOBILIER® met à votre disposition une équipe professionnelle pour le traitement de toutes vos demandes dans un délai record de 72 h. Grâce à notre réseau de plus de 25 agences partenaires, nous vous offrons les meilleurs choix en clientèle et produit avec toute la réactivité requise dans la prise en charge des demandes...</p>
                    </div>
                    <div class=\"col-md-5\">
                        <div id=\"pub\" class=\"video-responsive\">
                        <video width=\"600\" height=\"375\" controls >
                                <source src=\"{{ asset('video/om.mp4')}}\" type=\"video/mp4\">
                                
                             </video>
                             
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {% endblock %}

{% block partenaires %}
        <div class=\"mg-testi-partners parallax\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <h2 class=\"mg-sec-left-title\">Vision et Mission</h2>
                        <div class=\"mg-testimonial-slider\" id=\"mg-testimonial-slider\">
                            <blockquote>
                                <p>Chez Premium Immobilier nous croyons au traitement de tout collaborateur avec respect et nous intégrons l'honnêteté, l'intégrité et l'éthique dans tous les aspects du fonctionnement de l'entreprise.</p>
                                <footer>Premium Immobilier</footer>
                            </blockquote>
                            <blockquote>
                                <p>La stratégie de Premium Immobilier est bâtie sur un objectif précis qui est de devenir à court terme le chef de file du secteur immobilier sous-régional et un acteur clé de l'industrie en fournissant des services exceptionnels, innovants, rentables et de qualité qui dépassent les attentes des clients et partenaires.</p>
                                <footer>Premium Immobilier</footer>
                            </blockquote>
                            <blockquote>
                                <p>Notre mission est de construire une relation à long terme avec tous nos clients et partenaires en nous basant sur un modèle d'affaire ancré sur la créativité et la technologie de pointe.</p>
                                <footer>Premium Immobilier</footer>
                            </blockquote>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <h2 class=\"mg-sec-left-title\">Nos Partenaires</h2>
                        <ul class=\"mg-part-logos\" id=\"mg-part-logos\">
                            <li><img src=\"{{ asset('images/orangemoney.png')}}\" id=\"parte\" alt=\"Partner Logo\"></li>
                            <li><img src=\"{{ asset('images/wari.jpeg')}}\" id=\"parte\" alt=\"Partner Logo\"></li>
                            <li><img src=\"{{ asset('images/sg.png')}}\" id=\"parte\" alt=\"Partner Logo\"></li>
                            <li><img src=\"{{ asset('images/visa.png')}}\" id=\"parte\" alt=\"Partner Logo\"></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        {% endblock %}
{% block galerie %}
        <div class=\"mg-news-gallery\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-5\">
                        <h2 class=\"mg-sec-left-title\">A LA UNE</h2>
                        <ul class=\"mg-recnt-posts\">
                            <li>
                                <div class=\"mg-recnt-post\">
                                    <div class=\"mg-rp-date\">27 <div class=\"mg-rp-month\">may</div></div>
                                    <h3><a href=\"#\">Immeuble de 7 etages</a></h3>
                                    <p>Au VDN</p>
                                </div>
                            </li>
                            <li>
                                <div class=\"mg-recnt-post\">
                                    <div class=\"mg-rp-date\">27 <div class=\"mg-rp-month\">may</div></div>
                                    <h3><a href=\"#\">A Standard Blog Post</a></h3>
                                    <p>Nostram virtutem poterimus quoddam praesertim legendos libero exhorrescere saluti...</p>
                                </div>
                            </li>
                            <li>
                                <div class=\"mg-recnt-post\">
                                    <div class=\"mg-rp-date\">27 <div class=\"mg-rp-month\">may</div></div>
                                    <h3><a href=\"#\">A Standard Blog Post</a></h3>
                                    <p>Nostram virtutem poterimus quoddam praesertim legendos libero exhorrescere saluti...</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class=\"col-md-7\">
                        <h2 class=\"mg-sec-left-title\">Nos Biens</h2>

                        <div class=\"mg-gallery-container\">
                            <ul class=\"mg-gallery\" id=\"mg-gallery\">
                                    
                                <li><img src=\"{{ asset('images/apart.jpg')}}\" id=\"gal\" alt=\"Partner Logo\"></li>
                                <li><img src=\"{{ asset('images/bureau.jpg')}}\" id=\"gal\" alt=\"Partner Logo\"></li>
                                <li><img src=\"{{ asset('images/chambre.jpeg')}}\" id=\"gal\" alt=\"Partner Logo\"></li>
                                <li><img src=\"{{ asset('images/im.jpeg')}}\" id=\"gal\" alt=\"Partner Logo\"></li>
                                <li><img src=\"{{ asset('images/slide1.JPG')}}\" id=\"gal\" alt=\"Partner Logo\"></li>
                                <li><img src=\"{{ asset('images/slide2.jpg')}}\" id=\"gal\" alt=\"Partner Logo\"></li>
                            </ul>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div> 
          
        
{% endblock %}
{% block footer %}
        <footer class=\"mg-footer\">
            <div class=\"mg-footer-widget\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-3 col-sm-6\">
                            <div class=\"widget\">
                                <h2 class=\"mg-widget-title\">Contactez-nous</h2>
                                <address>
                                    <strong>CTIC/DAKAR</strong><br>
                                    Rue 3 Berenger Feraud<br>
                                    SONATEL ACADEMY
                                </address>
                
                                <p>
                                    221 33 547 21 40<br>
                                    221 33 548 69 35
                                </p>
                
                                <p>
                                    <a href=\"mailto:\">premiumimmobilier.sn</a>
                                </p>
                            </div>
                        </div>
                        <div class=\"col-md-3 col-sm-6\">
                            <div class=\"widget\">
                                <h2 class=\"mg-widget-title\">Instagram</h2>
                                <ul class=\"mg-instagram\">
                                    <li><a href=\"\"><img src=\"{{ asset('images/1.png')}}\" alt=\"\"></a></li>
                                    <li><a href=\"\"><img src=\"{{ asset('images/2.png')}}\" alt=\"\"></a></li>
                                    <li><a href=\"\"><img src=\"{{ asset('images/3.png')}}\" alt=\"\"></a></li>
                                    <li><a href=\"\"><img src=\"{{ asset('images/4.png')}}\" alt=\"\"></a></li>
                                    <li><a href=\"\"><img src=\"{{ asset('images/5.png')}}\" alt=\"\"></a></li>
                                    <li><a href=\"\"><img src=\"{{ asset('images/6.png')}}\" alt=\"\"></a></li>
                                    <li><a href=\"\"><img src=\"{{ asset('images/7.png')}}\" alt=\"\"></a></li>
                                    <li><a href=\"\"><img src=\"{{ asset('images/8.png')}}\" alt=\"\"></a></li>
                            
                                </ul>
                            </div>
                        </div>
                        <div class=\"col-md-3 col-sm-6\">
                            <div class=\"widget\">
                                <h2 class=\"mg-widget-title\">Newsletter</h2>
                                <p>Inscrivez-vous à notre newsletter pour ne rien manquez sur nos offres.</p>
                                <form>
                                    <p>
                                        <input type=\"email\" class=\"form-control\" placeholder=\"Votre e-mail\">
                                    </p>
                                    <input type=\"submit\" class=\"btn btn-main\" value=\"S'inscrire\">
                                </form>
                            </div>
                        </div>
                        <div class=\"col-md-3 col-sm-6\">
                            <div class=\"widget\">
                                <h2 class=\"mg-widget-title\">Réseaux Sociaux</h2>
                                <p>Suivez-nous sur les réseaux sociaux.</p>
                                <ul class=\"mg-footer-social\">
                                    <li><a href=\"#\"><i class=\"fab fa-facebook\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fab fa-twitter-square\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fab fa-pinterest-square\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fab fa-google-plus\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-rss\"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"mg-copyright\">
                <div class=\"container\">
                    <div class=\"row\">
                        
                        <div class=\"col-md-6\">
                            <ul class=\"mg-footer-nav\">
                                <li><a href=\"#\">ACCEUIL</a></li>
                                <li><a href=\"#\">A PROPOS</a></li>
                                <li><a href=\"#\">LOUER</a></li>
                                <li><a href=\"#\">CATALOGUE</a></li>
                                <li><a href=\"#\">Espace Client</a></li>
                                <li><a href=\"#\">Contact</a></li>
                            </ul>
                        </div>
                        <div class=\"col-md-6\">
                            <p>&copy; 2018 <a href=\"http://www.sonatelacademy.sn\">Premium immobilier</a>. tout droits reservés.</p>
                        </div>
                    </div>
                </div>
            </div>
        
        </footer>
{% endblock %}
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src={{asset ('js/jquery.min.js')}}></script>
        <script src={{asset ('js/bootstrap.min.js')}}></script>
        <script src={{asset ('js/owl.carousel.min.js')}}></script>
        <script src={{asset ('js/jssor.slider.mini.js')}}></script>
        <script src={{asset ('js/classie.js')}}></script>
        <script src={{asset ('js/selectFx.js')}}></script>
        <script src={{asset ('js/bootstrap-datepicker.min.js')}}></script>
        <script src={{asset ('js/starrr.min.js')}}></script>
        <script src={{asset ('js/nivo-lightbox.min.js')}}></script>
        <script src={{asset ('js/jquery.shuffle.min.js')}}></script>
        <script src={{asset ('http://maps.google.com/maps/api/js?sensor=true')}}></script>
        <script src={{asset ('js/gmaps.min.js')}}></script>
        <script src={{asset ('js/jquery.parallax-1.1.3.js')}}></script>
        <script src={{asset ('js/script.js')}}></script>
    </body>
</html>", "PremiumBundle::acceuil.html.twig", "/var/www/html/Premium_Immobilier/src/PI/Premium_ImmobilierBundle/Resources/views/acceuil.html.twig");
    }
}
