<?php

/* ProjetSymfony2Bundle:Moniteur:ajouter_moniteur.html.twig */
class __TwigTemplate_2646d7be6f7c65296e374d5c7686042395aef051b3e23c5e3f36ea5c95630bf8 extends Twig_Template
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
        echo "Ajouter un Moniteur ";
    }

    // line 4
    public function block_section1($context, array $blocks = array())
    {
        echo "<span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"> </span> Ajouter un Moniteur    ";
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "



    <form  method=\"POST\">
        <fieldset>
            <legend>Coordonée Moniteur</legend>
            <div class=\"row\">
                <div class=\"col-md-4\">
                    <div class=\"form-group\">

                        <label >Nom Moniteur :</label>
                        <input type=\"text\" class=\"form-control\" name=\"NomMoniteur\" required=\"required\" placeholder=\"Entrer votre Nom\">

                        <label >Prenom Moniteur :</label>
                        <input type=\"text\" class=\"form-control\" name=\"PrenomMoniteur\" placeholder=\"Entrer votre Prenom\" required=\"required\">

                        <label >Adresse Moniteur :</label>
                        <input type=\"text\" class=\"form-control\" name=\"Adresse\" placeholder=\"Entrer votre Prenom\" required=\"required\">

                        <label >Numèro CIN :</label>
                        <input type=\"text\" class=\"form-control\" name=\"NumèroCIN\" required=\"required\" placeholder=\"Entrer votre Numèro de CIN\">

                        <label >Numèro téléphone :</label>
                        <input type=\"text\" class=\"form-control\" name=\"NumèroTéléphone\" required=\"required\" placeholder=\"Entrer votre Numèro de téléphone\">


                        <label >Date de naissance :</label>
                        <div class=\"input-group\">
                            <div class=\"input-group-addon\">
                                <i class=\"fa fa-calendar\"></i>
                            </div>
                            <input type=\"text\" name=\"DateDeNaissance\" data-mask=\"\" data-inputmask=\"'alias': 'dd/mm/yyyy'\" class=\"form-control\" placeholder=\"Entrer votre date de naissance\">
                        </div><!-- /.input group -->

                        <label >Email Moniteur :</label>
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
        return "ProjetSymfony2Bundle:Moniteur:ajouter_moniteur.html.twig";
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
