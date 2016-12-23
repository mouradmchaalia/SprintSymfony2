<?php

/* ProjetSymfony2Bundle:Responsable_auto_ecole:ajouter_responsable.html.twig */
class __TwigTemplate_7d285398b4bf9847d8d707d59f4e938f68a02732a1f7b9937d9bfdb4205fd90d extends Twig_Template
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Ajouter un Responsable d'auto école ";
    }

    // line 4
    public function block_section1($context, array $blocks = array())
    {
        echo "<span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"> </span> Ajouter un Responsable d'auto école    ";
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "



    <form  method=\"POST\">
        <fieldset>
            <legend>Coordonée Responsable d'auto école</legend>
            <div class=\"row\">
                <div class=\"col-md-4\">
                    <div class=\"form-group\">

                        <label >Nom Responsable d'auto école :</label>
                        <input type=\"text\" class=\"form-control\" name=\"Nomresp\" required=\"required\" placeholder=\"Entrer votre Nom\">

                        <label >Prenom Responsable d'auto école :</label>
                        <input type=\"text\" class=\"form-control\" name=\"Prenomresp\" placeholder=\"Entrer votre Prenom\" required=\"required\">

                        <label >Numèro CIN :</label>
                        <input type=\"text\" class=\"form-control\" name=\"NumèroCIN\" required=\"required\" placeholder=\"Entrer votre Numèro de CIN\">

                        <label >Numèro téléphone :</label>
                        <input type=\"text\" class=\"form-control\" name=\"NumèroTéléphone\" required=\"required\" placeholder=\"Entrer votre Numèro de téléphone\">

                        <label >Email Responsable d'auto école :</label>
                        <div class=\"input-group \">
                            <span class=\"input-group-addon\">
                                <span class=\"glyphicon glyphicon-envelope\"></span>
                            </span>
                            <input  name=\"Email\" class=\"form-control\" type=\"email\" placeholder=\"tapez votre Email\">
                        </div>

                        <label >Mot de passe :</label>
                        <div class=\"input-group \">
                            <span class=\"input-group-addon\">
                                <span class=\"glyphicon glyphicon-lock\"></span>
                            </span>
                            <input name=\"MotDePasse\" class=\"form-control\" type=\"password\" placeholder=\"tapez votre mot de passe\">
                        </div> 


                    </div>       

                    <button type=\"submit\" class=\"btn btn-default\">Submit</button>

                    <div class=\"col-md-8\"></div>
                </div>
        </fieldset>
    </form>






";
    }

    public function getTemplateName()
    {
        return "ProjetSymfony2Bundle:Responsable_auto_ecole:ajouter_responsable.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 9,  50 => 8,  44 => 4,  38 => 3,  11 => 1,);
    }
}
