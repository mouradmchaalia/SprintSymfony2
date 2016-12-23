<?php

/* ProjetSymfony2Bundle:Rdv:ajouter_rdv.html.twig */
class __TwigTemplate_7244354714abcccc0e6ef428f908e17c5a32b8ceacce007683a12af2f598c626 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("ProjetSymfony2Bundle::layout5.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'saif' => array($this, 'block_saif'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ProjetSymfony2Bundle::layout5.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_saif($context, array $blocks = array())
    {
        // line 3
        echo " <label >Lieu du rendez-vous :</label>
                        <input type=\"text\" class=\"form-control\" name=\"NomCandidat\" required=\"required\" placeholder=\"Entrer votre Nom\">

                        <label >Date du Rendez-vous :</label>
                        <input type=\"text\" class=\"form-control\" name=\"PrenomCandidat\" placeholder=\"Entrer votre Prenom\" required=\"required\">

                        <label >Adresse Candidat :</label>
                        <input type=\"text\" class=\"form-control\" name=\"Adresse\" placeholder=\"Entrer votre Prenom\" required=\"required\">
                        
                        ";
    }

    public function getTemplateName()
    {
        return "ProjetSymfony2Bundle:Rdv:ajouter_rdv.html.twig";
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
