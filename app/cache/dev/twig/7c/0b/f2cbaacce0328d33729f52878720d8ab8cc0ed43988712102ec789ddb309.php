<?php

/* ProjetSymfony2Bundle:Candidat:liste_candidats.html.twig */
class __TwigTemplate_7c0bf2cbaacce0328d33729f52878720d8ab8cc0ed43988712102ec789ddb309 extends Twig_Template
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
        echo "Liste Candidat";
    }

    // line 6
    public function block_section1($context, array $blocks = array())
    {
        echo "<span class=\"glyphicon glyphicon-th-list\" aria-hidden=\"true\"> </span> Liste Candidat    ";
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


        <th>Nom Candidat</th>
        <th>Prenom Candidat</th>
        <th>Date de naissance</th>
        <th>Email Candidat</th>
        <th>Adresse</th>
        <th>Numèro de téléphone</th>
        <th>Action</th>




    </tr>

</thead>

<tbody>



    ";
        // line 52
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["candidats"]) ? $context["candidats"] : $this->getContext($context, "candidats")));
        foreach ($context['_seq'] as $context["key"] => $context["candidat"]) {
            // line 53
            echo "        <tr>




            <td>";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["candidat"], "nom", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["candidat"], "prenom", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["candidat"], "dateDeNaissance", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["candidat"], "email", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["candidat"], "adresse", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["candidat"], "numTel", array()), "html", null, true);
            echo "</td>
            <td><a href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("projet_symfony2_supprimer_candidat", array("id" => $this->getAttribute($context["candidat"], "idCandidat", array()))), "html", null, true);
            echo "\"><span class=\"label label-danger\" >Supprimer</span></a></td>



        </tr>

    <tbody>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['candidat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "    

</table>
";
        // line 75
        echo "
";
        // line 77
        echo " <div class=\"col-lg-3 col-xs-6 active\">
     <a href=\"";
        // line 78
        echo $this->env->getExtension('routing')->getPath("projet_symfony2_ajouter_candidat");
        echo "\"><button class=\"btn btn-block btn-primary btn-flat\">Ajouter un candidat</button></a>
     

    
</div>

";
    }

    public function getTemplateName()
    {
        return "ProjetSymfony2Bundle:Candidat:liste_candidats.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 78,  153 => 77,  150 => 75,  145 => 71,  131 => 64,  127 => 63,  123 => 62,  119 => 61,  115 => 60,  111 => 59,  107 => 58,  100 => 53,  96 => 52,  53 => 11,  50 => 10,  44 => 6,  38 => 5,  11 => 1,);
    }
}
