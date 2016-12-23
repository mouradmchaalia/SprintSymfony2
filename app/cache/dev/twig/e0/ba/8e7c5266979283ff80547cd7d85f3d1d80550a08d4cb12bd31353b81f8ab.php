<?php

/* ProjetSymfony2Bundle::layout2.html.twig */
class __TwigTemplate_e0ba8e7c5266979283ff80547cd7d85f3d1d80550a08d4cb12bd31353b81f8ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'firas' => array($this, 'block_firas'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<!DOCTYPE html>
<html lang=\"en\">
<head>
    <script src=\"http://maps.googleapis.com/maps/api/js\"></script>
<script>
var myCenter=new google.maps.LatLng(36.8557735,10.2080458);
var marker;

function initialize()
{
var mapProp = {
  center:myCenter,
  zoom:15,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };

var map=new google.maps.Map(document.getElementById(\"googleMap\"),mapProp);

var marker=new google.maps.Marker({
  position:myCenter,
  animation:google.maps.Animation.BOUNCE
  });

marker.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>
    
\t<title></title>
\t<meta charset=\"utf-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
\t<link rel=\"stylesheet\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template2/css/reset.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\">
\t<link rel=\"stylesheet\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template2/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\">
\t<link rel=\"stylesheet\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template2/css/zerogrid.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\">
\t<link rel=\"stylesheet\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template2/css/responsive.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\">
\t<link href='";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://fonts.googleapis.com/css?family=PT+Sans"), "html", null, true);
        echo "' rel='stylesheet' type='text/css'>  
\t<script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template2/js/jquery-1.6.3.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t<script src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template2/js/cufon-yui.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t<script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template2/js/cufon-replace.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t<script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template2/js/PT_Sans_400.font.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t<script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template2/js/PT_Sans_italic_400.font.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script> 
\t<script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template2/js/Satisfy_400.font.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t<script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template2/js/NewsGoth_400.font.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t<script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template2/js/FF-cash.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script> 
\t<script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template2/js/script.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>  
\t<script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template2/js/tms-0.3.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t<script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template2/js/tms_presets.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t<script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template2/js/jquery.easing.1.3.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>\t 
\t<script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template2/js/easyTooltip.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template2/js/css3-mediaqueries.js"), "html", null, true);
        echo "\"></script>
\t<!--[if lt IE 7]>
\t<div style=' clear: both; text-align:center; position: relative;'>
\t\t<a href=\"http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode\">
\t\t\t<img src=\"http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg\" border=\"0\" height=\"42\" width=\"820\" alt=\"You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today.\" />
\t\t</a>
\t</div>
\t<![endif]-->
\t<!--[if lt IE 9]>
   \t\t<script type=\"text/javascript\" src=\"js/html5.js\"></script>
\t<![endif]-->
</head>
<body id=\"page1\">
\t<div class=\"extra\">
<!--==============================header=================================-->
\t\t<header>
\t\t\t<div class=\"menu-row\">
\t\t\t\t<div class=\"main zerogrid\">
\t\t\t\t\t<div class=\"col-full\">
\t\t\t\t\t\t<nav class=\"fleft\">
\t\t\t\t\t\t\t<ul class=\"services-menu\">
\t\t\t\t\t\t\t\t<li class=\"m1\"><a href=\"index.html\"></a></li>
\t\t\t\t\t\t\t\t<li class=\"m2\"><a href=\"contacts.html\"></a></li>
\t\t\t\t\t\t\t\t<li class=\"m3\"><a href=\"#\"></a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</nav>
\t\t\t\t\t\t<nav class=\"fright\">
\t\t\t\t\t\t\t<ul class=\"main-menu\">
\t\t\t\t\t\t\t\t<li class=\"active\"><a href=\"index.html\">Accueil</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"http://localhost/PISYMFONY/web/app_dev.php/permik/auth\">Candidat</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"http://localhost/PISYMFONY/web/app_dev.php/permik/auth\">Moniteur</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"http://localhost/PISYMFONY/web/app_dev.php/permik/auth\">Responsable</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"contacts.html\">Contacts</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<div class='response-menu'>
\t\t\t\t\t\t\t\t<div><img src='";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template2/images/menu2.png"), "html", null, true);
        echo "'/></div>
\t\t\t\t\t\t\t\t<select onchange=\"location=this.value\">
\t\t\t\t\t\t\t\t\t<option></option>
\t\t\t\t\t\t\t\t\t<option value=\"index.html\">Accueil</option>
\t\t\t\t\t\t\t\t\t<option value=\"about.html\">Candidat</option>
\t\t\t\t\t\t\t\t\t<option value=\"gallery.html\">Moniteur</option>
\t\t\t\t\t\t\t\t\t<option value=\"services.html\">Responsable</option>
\t\t\t\t\t\t\t\t\t
                                                                        <option value=\"contacts.html\">Contacts</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</nav>
\t\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"header-row\">
\t\t\t\t<div class=\"main zerogrid\">
\t\t\t\t\t<h1>
\t\t\t\t\t\t<a href=\"index.html\"><img src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template2/images/logo.png"), "html", null, true);
        echo "\" /></a>
\t\t\t\t\t\t<em>Votez pour l'avenir Votez pour PermiK</em>
\t\t\t\t\t</h1> 
\t\t\t\t\t<div class=\"slider-wrapper\">
\t\t\t\t\t\t<div class=\"slider\">
\t\t\t\t\t\t\t<ul class=\"items\">
\t\t\t\t\t\t\t\t<li><img src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template2/images/aut.jpg"), "html", null, true);
        echo "\" alt=\"\" /></li>
\t\t\t\t\t\t\t\t<li><img src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template2/images/cal.jpg"), "html", null, true);
        echo "\" alt=\"\" /></li>
\t\t\t\t\t\t\t\t<li><img src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template2/images/cou.jpg"), "html", null, true);
        echo "\" alt=\"\" /></li>
\t\t\t\t\t\t\t\t<li><img src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template2/images/per.jpg"), "html", null, true);
        echo "\" alt=\"\" /></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<ul class=\"pagination\">
\t\t\t\t\t\t\t<li><a href=\"#\">Auto école</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Rendez-vous</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Cours</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Examen</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"zerogrid\">
\t\t\t\t\t\t<div class=\"wrapper\">
\t\t\t\t\t\t\t<article class=\"col-1-3\">
\t\t\t\t\t\t\t\t<div class=\"wrap-col\">
\t\t\t\t\t\t\t\t\t<h4>Qui-sommes-nous</h4>
\t\t\t\t\t\t\t\t\tPermiK est un site Web developpé par l'équipe REVOLUTION qui a pour but d'aider les candidats aux examens à réussir leur épreuve.<br> Ce Travail est encadré par Madame Fatoum.
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</article>
\t\t\t\t\t\t\t<article class=\"col-1-3\">
\t\t\t\t\t\t\t\t<div class=\"wrap-col\">
\t\t\t\t\t\t\t\t\t<h4>Nos Membres</h4>
\t\t\t\t\t\t\t\t\tNotre équipe se compose de : <br>Mallek SaifAllah,Mchaalia Mourad<br>Abbes Firas,Thameur Ahlem<br>Helali Imen.
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</article>
\t\t\t\t\t\t\t<article class=\"col-1-3\">
\t\t\t\t\t\t\t\t<div class=\"wrap-col\">
\t\t\t\t\t\t\t\t\t<h4>About Theme</h4>
\t\t\t\t\t\t\t\t\tThis website template has several pages: <a class=\"link\" href=\"index.html\">Main Page</a>, <a class=\"link\" href=\"about.html\">About Us</a>, <a class=\"link\" href=\"gallery.html\">Our Gallery</a>, <a class=\"link\" href=\"services.html\">Our Services</a>, <a class=\"link\" href=\"contacts.html\">Contact Us</a> (please note that con tact us form – doesn’t work).
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</article>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>\t\t\t\t   
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t</header>
\t\t
<!--==============================content================================-->
\t\t<section id=\"content\">
\t\t\t<div class=\"main zerogrid\">
\t\t\t\t\t<div class=\"wrapper\">
\t\t\t\t\t\t<article class=\"col-2-3\">
                                                 
\t\t\t\t\t\t\t<div class=\"wrap-col\">
\t\t\t\t\t\t\t<h3>Localisez votre Auto école!</h3>
                                                           ";
        // line 162
        $this->displayBlock('firas', $context, $blocks);
        // line 163
        echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t</article>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"block\"></div>
\t\t</section>
\t</div>
\t
<!--==============================footer=================================-->
\t<footer>
\t\t<div class=\"footer-bg\">
\t\t\t<div class=\"main zerogrid\">
\t\t\t\t<div class=\"col-2-3\">
\t\t\t\t\t<div class=\"wrap-col\">
\t\t\t\t\t\t<span class=\"footer-text\"><a rel=\"nofollow\" href=\"http://www.zerotheme.com/\">Free Html5 Templates</a> by <a rel=\"nofollow\" href=\"http://www.templatemonster.com/\">TemplateMonster.com</a></span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-1-3\">
\t\t\t\t\t<div class=\"wrap-col\">
\t\t\t\t\t\t<ul class=\"list-services\">
\t\t\t\t\t\t\t<li>Follow Us:</li>
\t\t\t\t\t\t\t<li class=\"item-1\"><a class=\"tooltips\" title=\"facebook\" href=\"#\"></a></li>
\t\t\t\t\t\t\t<li class=\"item-2\"><a class=\"tooltips\" title=\"twitter\" href=\"#\"></a></li>
\t\t\t\t\t\t\t<li class=\"item-3\"><a class=\"tooltips\" title=\"picasa\" href=\"#\"></a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>\t\t\t\t
\t\t\t</div>
\t\t</div>
\t</footer>
\t<script type=\"text/javascript\"> Cufon.now(); </script>
\t<script type=\"text/javascript\">
\t\t\$(window).load(function() {
\t\t\t\$('.slider')._TMS({
\t\t\t\tduration:800,
\t\t\t\teasing:'easeOutQuad',
\t\t\t\tpreset:'simpleFade',
\t\t\t\tslideshow:7000,
\t\t\t\tbanners:false,
\t\t\t\tpauseOnHover:true,
\t\t\t\tpagination:'.pagination',
\t\t\t\tpagNums:false
\t\t\t});
\t\t});
\t</script>
</body>
</html>
";
    }

    // line 162
    public function block_firas($context, array $blocks = array())
    {
        echo "  ";
    }

    public function getTemplateName()
    {
        return "ProjetSymfony2Bundle::layout2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  313 => 162,  260 => 163,  258 => 162,  209 => 116,  205 => 115,  201 => 114,  197 => 113,  188 => 107,  165 => 87,  127 => 52,  123 => 51,  119 => 50,  115 => 49,  111 => 48,  107 => 47,  103 => 46,  99 => 45,  95 => 44,  91 => 43,  87 => 42,  83 => 41,  79 => 40,  75 => 39,  71 => 38,  67 => 37,  63 => 36,  59 => 35,  55 => 34,  20 => 1,);
    }
}
