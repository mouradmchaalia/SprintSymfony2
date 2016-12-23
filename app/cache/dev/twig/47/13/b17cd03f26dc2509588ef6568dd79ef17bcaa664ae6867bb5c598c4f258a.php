<?php

/* ProjetSymfony2Bundle:Responsable_auto_ecole:liste_responsables.html.twig */
class __TwigTemplate_4713b17cd03f26dc2509588ef6568dd79ef17bcaa664ae6867bb5c598c4f258a extends Twig_Template
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
        echo "Liste Responsable d'auto école";
    }

    // line 6
    public function block_section1($context, array $blocks = array())
    {
        echo "<span class=\"glyphicon glyphicon-th-list\" aria-hidden=\"true\"> </span> Liste Responsable d'auto école    ";
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


        <th>Nom Responsable d'auto école</th>
        <th>Prenom Responsable d'auto école</th>
        <th>Numèro de téléphone</th>
         <th>Numèro de CIN</th>
        <th>Email Responsable d'auto école</th>
        
        <th>Action</th>




    </tr>

</thead>

<tbody>



    ";
        // line 52
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["responsables"]) ? $context["responsables"] : $this->getContext($context, "responsables")));
        foreach ($context['_seq'] as $context["key"] => $context["responsable"]) {
            // line 53
            echo "        <tr>




            <td>";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["responsable"], "nom", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["responsable"], "prenom", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["responsable"], "numTel", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["responsable"], "numCin", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["responsable"], "email", array()), "html", null, true);
            echo "</td>
            
            <td><a href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("projet_symfony2_supprimer_responsable_auto_ecole", array("id" => $this->getAttribute($context["responsable"], "idResponsableAutoEcole", array()))), "html", null, true);
            echo "\"><span class=\"label label-danger\" >Supprimer</span></a></td>



        </tr>

    <tbody>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['responsable'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "    

</table>
";
        // line 75
        echo "
";
        // line 77
        echo "<div class=\"col-lg-3 col-xs-6 active\">
     <a href=\"/PISYMFONY/web/app_dev.php/permik/ajouter_responsable\"><button class=\"btn btn-block btn-primary btn-flat\">Ajouter un responsable</button></a>
     

    
</div>



";
    }

    public function getTemplateName()
    {
        return "ProjetSymfony2Bundle:Responsable_auto_ecole:liste_responsables.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 77,  147 => 75,  142 => 71,  128 => 64,  123 => 62,  119 => 61,  115 => 60,  111 => 59,  107 => 58,  100 => 53,  96 => 52,  53 => 11,  50 => 10,  44 => 6,  38 => 5,  11 => 1,);
    }
}
