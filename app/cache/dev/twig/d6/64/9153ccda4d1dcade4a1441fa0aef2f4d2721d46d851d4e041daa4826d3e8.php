<?php

/* ProjetSymfony2Bundle:Home:homeResponsable.html.twig */
class __TwigTemplate_d6649153ccda4d1dcade4a1441fa0aef2f4d2721d46d851d4e041daa4826d3e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("ProjetSymfony2Bundle::layout6.html.twig");
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
        return "ProjetSymfony2Bundle::layout6.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_saif($context, array $blocks = array())
    {
        // line 5
        echo "     <table  width=\"100%\" class=\"table table-striped\">

        <tr>
        <thead>


        <th>Lieu du RDV</th>
        <th>Date du RDV</th>
        <th>Nombre d'heure</th>
        



    </tr>

</thead>

<tbody>



    ";
        // line 26
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rdvs"]) ? $context["rdvs"] : $this->getContext($context, "rdvs")));
        foreach ($context['_seq'] as $context["key"] => $context["rdv"]) {
            // line 27
            echo "        <tr>




            <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["rdv"], "lieu", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["rdv"], "date", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["rdv"], "nbreHeure", array()), "html", null, true);
            echo "</td>
            
            
            



        </tr>

    <tbody>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['rdv'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "    

</table>
";
        // line 48
        echo "
";
        // line 50
        echo " 
    
    
    ";
    }

    public function getTemplateName()
    {
        return "ProjetSymfony2Bundle:Home:homeResponsable.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 50,  103 => 48,  98 => 44,  81 => 34,  77 => 33,  73 => 32,  66 => 27,  62 => 26,  39 => 5,  36 => 4,  11 => 1,);
    }
}
