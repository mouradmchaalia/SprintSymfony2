<?php

/* ProjetSymfony2Bundle:Moniteur:liste_moniteurs.html.twig */
class __TwigTemplate_2d83a936a93934d91deb2caf5300a5e9019a4b2e30cf089bebf00b5999c4d33c extends Twig_Template
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
        echo "Liste Moniteur";
    }

    // line 6
    public function block_section1($context, array $blocks = array())
    {
        echo "<span class=\"glyphicon glyphicon-th-list\" aria-hidden=\"true\"> </span> Liste Moniteur    ";
    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        // line 11
        echo "



    <form method=\"POST\" action=\"\">

        <input type=\"text\"  name=\"search\" width=\"800\" placeholder=\" Tapez un nom\"/>

        <input type=\"submit\"  value=\"rechercher\" />


    </form>

    <br>
    <br>






    <table  width=\"100%\" class=\"table table-striped\">

        <tr>
        <thead>


        <th>Nom Moniteur</th>
        <th>Prenom Moniteur</th>
        <th>Date de naissance</th>
        <th>Email Moniteur</th>
        <th>Adresse</th>
        <th>Numèro de téléphone</th>
        <th>Action</th>




    </tr>

</thead>

<tbody>



    ";
        // line 57
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["moniteurs"]) ? $context["moniteurs"] : $this->getContext($context, "moniteurs")));
        foreach ($context['_seq'] as $context["key"] => $context["moniteur"]) {
            // line 58
            echo "        <tr>




            <td>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["moniteur"], "nom", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["moniteur"], "prenom", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["moniteur"], "dateDeNaissance", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($context["moniteur"], "email", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["moniteur"], "adresse", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["moniteur"], "numTel", array()), "html", null, true);
            echo "</td>
            <td><a href=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("projet_symfony2_supprimer_moniteur", array("id" => $this->getAttribute($context["moniteur"], "idMoniteur", array()))), "html", null, true);
            echo "\"><span class=\"label label-danger\" >Supprimer</span></a></td>



        </tr>

    <tbody>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['moniteur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "    

</table>
";
        // line 80
        echo "
";
        // line 82
        echo "

<div class=\"col-lg-3 col-xs-6 active\">
     <a href=\"/PISYMFONY/web/app_dev.php/permik/ajouter_moniteur\"><button class=\"btn btn-block btn-primary btn-flat\">Ajouter un moniteur</button></a>
     

    
</div>

";
    }

    public function getTemplateName()
    {
        return "ProjetSymfony2Bundle:Moniteur:liste_moniteurs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 82,  155 => 80,  150 => 76,  136 => 69,  132 => 68,  128 => 67,  124 => 66,  120 => 65,  116 => 64,  112 => 63,  105 => 58,  101 => 57,  53 => 11,  50 => 10,  44 => 6,  38 => 5,  11 => 1,);
    }
}
