<?php

/* ProjetSymfony2Bundle:Home:homeMoniteur.html.twig */
class __TwigTemplate_ec8b8025ee3bc1e2bd836273d3e5f3f6bedd5a9055801e62db3b9019118607e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        try {
            $this->parent = $this->env->loadTemplate("ProjetSymfony2Bundle::layout4.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(2);

            throw $e;
        }

        $this->blocks = array(
            'saif' => array($this, 'block_saif'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ProjetSymfony2Bundle::layout4.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_saif($context, array $blocks = array())
    {
        // line 6
        echo "     <table  width=\"100%\" class=\"table table-striped\">

        <tr>
        <thead>


        <th>Lieu du RDV</th>
        <th>Date du RDV</th>
        <th>Nombre d'heure</th>
        
  <th>Action</th>


    </tr>

</thead>

<tbody>



    ";
        // line 27
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rdvs"]) ? $context["rdvs"] : $this->getContext($context, "rdvs")));
        foreach ($context['_seq'] as $context["key"] => $context["rdv"]) {
            // line 28
            echo "        <tr>




            <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["rdv"], "lieu", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["rdv"], "date", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["rdv"], "nbreHeure", array()), "html", null, true);
            echo "</td>
             <td><a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("projet_symfony2_supprimer_rdv", array("id" => $this->getAttribute($context["rdv"], "idRdv", array()))), "html", null, true);
            echo "\"><span class=\"label label-danger\" >Supprimer</span></a></td>
            
            



        </tr>

    <tbody>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['rdv'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "    

</table>
";
        // line 49
        echo "
";
        // line 51
        echo " 
    <div class=\"col-lg-3 col-xs-6 active\">
     <a href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("projet_symfony2_ajouter_rdv");
        echo "\"><button class=\"btn btn-block btn-primary btn-flat\">Ajouter un RDV</button></a>
     

    
</div>

    
    ";
    }

    public function getTemplateName()
    {
        return "ProjetSymfony2Bundle:Home:homeMoniteur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 53,  109 => 51,  106 => 49,  101 => 45,  85 => 36,  81 => 35,  77 => 34,  73 => 33,  66 => 28,  62 => 27,  39 => 6,  36 => 5,  11 => 2,);
    }
}
