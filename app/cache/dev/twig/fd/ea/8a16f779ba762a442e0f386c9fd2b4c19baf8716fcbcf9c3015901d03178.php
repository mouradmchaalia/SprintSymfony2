<?php

/* ProjetSymfony2Bundle:Default:index2.html.twig */
class __TwigTemplate_fdea8a16f779ba762a442e0f386c9fd2b4c19baf8716fcbcf9c3015901d03178 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("ProjetSymfony2Bundle::layout2.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

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

    // line 2
    public function block_firas($context, array $blocks = array())
    {
        // line 3
        echo "        <div id=\"googleMap\" style=\"width:500px;height:380px;\"></div>
";
    }

    public function getTemplateName()
    {
        return "ProjetSymfony2Bundle:Default:index2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 3,  36 => 2,  11 => 1,);
    }
}
