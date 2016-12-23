<?php

/* ProjetSymfony2Bundle::layout4.html.twig */
class __TwigTemplate_e3cc80a6e1afb6fa11caaa229e302cf334b0cbcb2c7a61765103c974e153d2e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'formulaire' => array($this, 'block_formulaire'),
            'saif' => array($this, 'block_saif'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <!-- Basic Page Needs
    ================================================== -->
     
    <meta charset=\"utf-8\">
    <!--[if IE]><meta http-equiv=\"x-ua-compatible\" content=\"IE=9\" /><![endif]-->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>Permik - Votre auto-ecole chez-vous</title>
    <meta name=\"description\" content=\"Permik\">
    <meta name=\"keywords\" content=\"bootstrap theme, portfolio template, digital agency, onepage, mobile responsive, spirit8, free website, free theme, themeforces themes, themeforces wordpress themes, themeforces bootstrap theme\">
    <meta name=\"author\" content=\"ThemeForces.com\">
                

   
    
    <!-- Favicons
    ================================================== -->
    <link rel=\"shortcut icon\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template3/img/favicon.ico"), "html", null, true);
        echo "\" type=\"image/x-icon\">
    <link rel=\"apple-touch-icon\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template3/img/apple-touch-icon.png"), "html", null, true);
        echo "\" type=\"image/x-icon\">
    <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template3/img/apple-touch-icon-72x72.png"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template3/img/apple-touch-icon-114x114.png"), "html", null, true);
        echo "\">

    <!-- Bootstrap -->
    <link rel=\"stylesheet\" type=\"text/css\"  href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template3/css/bootstrap.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template3/fonts/font-awesome/css/font-awesome.css"), "html", null, true);
        echo "\">

    <!-- Slider
    ================================================== -->
    <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template3/css/owl.carousel.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\" type=\"text/css\">
    <link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template3/css/owl.theme.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\" type=\"text/css\">

    <!-- Stylesheet
    ================================================== -->
    <link rel=\"stylesheet\" type=\"text/css\"  href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template3/css/style.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template3/css/responsive.css"), "html", null, true);
        echo "\">

    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,700,300,600,800,400' rel='stylesheet' type='text/css'>

    <script type=\"text/javascript\" src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template3/js/modernizr.custom.js"), "html", null, true);
        echo "\"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
      <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
  </head>
  <body>
      
       
         
    <!-- Navigation
    ==========================================-->
    <nav id=\"tf-menu\" class=\"navbar navbar-default navbar-fixed-top\">
      <div class=\"container\">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
            <span class=\"sr-only\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a class=\"navbar-brand\" href=\"index.html\">PermiK</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
        

            ";
        // line 74
        $this->displayBlock('formulaire', $context, $blocks);
        // line 77
        echo "                 <div>
            ";
        // line 78
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 79
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                <a href=\"";
            // line 80
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                    <div> </div>
                    ";
            // line 82
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                </a>
            ";
        } else {
            // line 85
            echo "                <div> </div>
                <a href=\"";
            // line 86
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
            ";
        }
        // line 88
        echo "        </div>

        ";
        // line 90
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 91
            echo "            <div> </div>
            ";
            // line 92
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 93
                echo "                <div class=\"flash-";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
                    ";
                // line 94
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 97
            echo "            <div> </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "        <div> </div>
          <ul class=\"nav navbar-nav navbar-right\">
            <li><a href=\"#tf-home\" class=\"page-scroll\">Home</a></li>
            <li><a href=\"#tf-about\" class=\"page-scroll\">Gérer vos Rendez-vous</a></li>
           
            <li><a href=\"#tf-contact\" class=\"page-scroll\">Contact</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

    <!-- Home Page
    ==========================================-->
    <div id=\"tf-home\" class=\"text-center\">
        <div class=\"overlay\">
            <div class=\"content\">
                <h1>Bienvenue sur <strong><span class=\"color\">PermiK</span></strong></h1>
                <a href=\"#tf-about\" class=\"fa fa-angle-down page-scroll\"></a>
            </div>
        </div>
    </div>

    <!-- About Us Page
    ==========================================-->
    <div id=\"tf-about\">";
        // line 123
        $this->displayBlock('saif', $context, $blocks);
        // line 125
        echo "    </div>

    <!-- Team Page
    ==========================================-->
    
    <!-- Services Section
    ==========================================-->
    

    
    <!-- Contact Section
    ==========================================-->
    <div id=\"tf-contact\" class=\"text-center\">
        <div class=\"container\">

            <div class=\"row\">
                <div class=\"col-md-8 col-md-offset-2\">

                    <div class=\"section-title center\">
                        <h2>Feel free to <strong>contact us</strong></h2>
                        <div class=\"line\">
                            <hr>
                        </div>
                        <div class=\"clearfix\"></div>
                        <small><em>Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</em></small>            
                    </div>

                    <form>
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <div class=\"form-group\">
                                   
                                    <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"Enter email\">
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"form-group\">
                                   
                                   <input type=\"password\" class=\"form-control\" id=\"exampleInputPassword1\" placeholder=\"Password\">
                                </div>
                            </div>
                        </div>
                        <div class=\"form-group\">
                        
                            <textarea class=\"form-control\" rows=\"3\"></textarea>
                        </div>
                        
                        <button type=\"submit\" class=\"btn tf-btn btn-default\">Submit</button>
                    </form>

                </div>
            </div>

        </div>
    </div>

    <nav id=\"footer\">
        <div class=\"container\">
            <div class=\"pull-left fnav\">
                <p>ALL RIGHTS RESERVED. COPYRIGHT © 2014. Designed by <a href=\"https://dribbble.com/shots/1817781--FREEBIE-Spirit8-Digital-agency-one-page-template\">Revolucion</a> and Coded by <a href=\"https://dribbble.com/jennpereira\">Revolucion</a></p>
            </div>
            <div class=\"pull-right fnav\">
                <ul class=\"footer-social\">
                    <li><a href=\"www.facebook.com/permik\"><i class=\"fa fa-facebook\"></i></a></li>
                    <li><a href=\"www.dribbble.com\"><i class=\"fa fa-dribbble\"></i></a></li>
                    <li><a href=\"www.google-plus/mouradmcha\"><i class=\"fa fa-google-plus\"></i></a></li>
                    <li><a href=\"www.twitter.com\"><i class=\"fa fa-twitter\"></i></a></li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script type=\"text/javascript\" src=\"js/jquery.1.11.1.js\"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type=\"text/javascript\" src=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template3/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template3/js/SmoothScroll.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template3/js/jquery.isotope.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 206
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template3/js/owl.carousel.js"), "html", null, true);
        echo "\"></script>

    <!-- Javascripts
    ================================================== -->
    <script type=\"text/javascript\" src=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template3/js/main.js"), "html", null, true);
        echo "\"></script>

  </body>
</html>";
    }

    // line 74
    public function block_formulaire($context, array $blocks = array())
    {
        // line 75
        echo "    
                ";
    }

    // line 123
    public function block_saif($context, array $blocks = array())
    {
        // line 124
        echo "        ";
    }

    public function getTemplateName()
    {
        return "ProjetSymfony2Bundle::layout4.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  344 => 124,  341 => 123,  336 => 75,  333 => 74,  325 => 210,  318 => 206,  313 => 204,  309 => 203,  305 => 202,  226 => 125,  224 => 123,  198 => 99,  191 => 97,  182 => 94,  177 => 93,  173 => 92,  170 => 91,  166 => 90,  162 => 88,  155 => 86,  152 => 85,  146 => 82,  141 => 80,  136 => 79,  134 => 78,  131 => 77,  129 => 74,  94 => 42,  86 => 37,  82 => 36,  75 => 32,  71 => 31,  64 => 27,  60 => 26,  54 => 23,  50 => 22,  46 => 21,  42 => 20,  21 => 1,);
    }
}
