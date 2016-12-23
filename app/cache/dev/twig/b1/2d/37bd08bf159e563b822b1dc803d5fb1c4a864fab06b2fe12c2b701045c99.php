<?php

/* ProjetSymfony2Bundle:Home:home.html.twig */
class __TwigTemplate_b12d37bd08bf159e563b822b1dc803d5fb1c4a864fab06b2fe12c2b701045c99 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        try {
            $this->parent = $this->env->loadTemplate("ProjetSymfony2Bundle::layout2.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(3);

            throw $e;
        }

        $this->blocks = array(
            'firas' => array($this, 'block_firas'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ProjetSymfony2Bundle::layout2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_firas($context, array $blocks = array())
    {
        // line 5
        echo "

    
        <div id=\"googleMap\" style=\"width:500px;height:380px;\"></div>

";
    }

    public function getTemplateName()
    {
        return "ProjetSymfony2Bundle:Home:home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 5,  36 => 4,  11 => 3,);
    }
}
