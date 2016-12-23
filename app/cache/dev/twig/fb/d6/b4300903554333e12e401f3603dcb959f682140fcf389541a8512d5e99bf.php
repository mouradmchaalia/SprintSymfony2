<?php

/* ProjetSymfony2Bundle:Default:base.html.twig */
class __TwigTemplate_fbd6b4300903554333e12e401f3603dcb959f682140fcf389541a8512d5e99bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'container' => array($this, 'block_container'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<html>
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
</head>


 <body>
        ";
        // line 33
        $this->env->loadTemplate("ProjetSymfony2Bundle:Default:base.html.twig")->display($context);
        // line 34
        echo "        ";
        $this->displayBlock('container', $context, $blocks);
        // line 37
        echo "     </body>
</html>";
    }

    // line 34
    public function block_container($context, array $blocks = array())
    {
        // line 35
        echo "         
";
    }

    public function getTemplateName()
    {
        return "ProjetSymfony2Bundle:Default:base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 35,  64 => 34,  59 => 37,  56 => 34,  54 => 33,  20 => 1,);
    }
}
