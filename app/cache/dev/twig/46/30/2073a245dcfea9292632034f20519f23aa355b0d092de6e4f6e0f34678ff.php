<?php

/* ProjetSymfony2Bundle:tableau:tableauDeBord.html.twig */
class __TwigTemplate_46302073a245dcfea9292632034f20519f23aa355b0d092de6e4f6e0f34678ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("ProjetSymfony2Bundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'section1' => array($this, 'block_section1'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ProjetSymfony2Bundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Dashbord";
    }

    // line 6
    public function block_section1($context, array $blocks = array())
    {
        echo "<span class=\"glyphicon glyphicon-th-list\" aria-hidden=\"true\"> </span> Information Générale    ";
    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        // line 11
        echo " <p>        </p>
        
<div class=\"col-lg-3 col-xs-12\">
              <!-- small box -->
              <div class=\"small-box bg-aqua\">
                <div class=\"inner\">
                  <h3>";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["candidat"]) ? $context["candidat"] : $this->getContext($context, "candidat")), "html", null, true);
        echo "</h3>
                  <p>Candidat inscrit</p>
                </div>
                <div class=\"icon\">
                  <i class=\"ion ion-person-add\"></i>
                </div>
                <a href=\"#\" class=\"small-box-footer\">More info <i class=\"fa fa-arrow-circle-right\"></i></a>
              </div>   
            </div>
                     
                  
<div class=\"col-lg-3 col-xs-12\">
              <!-- small box -->
              <div class=\"small-box bg-yellow\">
                <div class=\"inner\">
                  <h3>";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["moniteur"]) ? $context["moniteur"] : $this->getContext($context, "moniteur")), "html", null, true);
        echo "</h3>
                  <p>Moniteur inscrit</p>
                </div>
                <div class=\"icon\">
                  <i class=\"ion ion-person-add\"></i>
                </div>
                <a href=\"#\" class=\"small-box-footer\">More info <i class=\"fa fa-arrow-circle-right\"></i></a>
              </div>
            </div>  
                  
<div class=\"col-lg-3 col-xs-12\">
              <!-- small box -->
              <div class=\"small-box bg-red\">
                <div class=\"inner\">
                  <h3>";
        // line 46
        echo twig_escape_filter($this->env, (isset($context["responsable"]) ? $context["responsable"] : $this->getContext($context, "responsable")), "html", null, true);
        echo "</h3>
                  <p>Responsable inscrit</p>
                </div>
                <div class=\"icon\">
                  <i class=\"ion ion-person-add\"></i>
                </div>
                <a href=\"#\" class=\"small-box-footer\">More info <i class=\"fa fa-arrow-circle-right\"></i></a>
              </div>
            </div>     
              
                  <div class=\"col-lg-3 col-xs-6\">
              <!-- small box -->
              <div class=\"small-box bg-green\">
                <div class=\"inner\">
                  <h3>1</h3>
                  <p>Statistiques</p>
                </div>
                <div class=\"icon\">
                  <i class=\"ion ion-pie-graph\"></i>
                </div>
                <a href=\"#\" class=\"small-box-footer\">More info <i class=\"fa fa-arrow-circle-right\"></i></a>
              </div>
            </div>

";
    }

    public function getTemplateName()
    {
        return "ProjetSymfony2Bundle:tableau:tableauDeBord.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 46,  79 => 32,  61 => 17,  53 => 11,  50 => 10,  44 => 6,  38 => 5,  11 => 1,);
    }
}
