<?php

/* ProjetSymfony2Bundle:Rdv:listRdvCandidat.html.twig */
class __TwigTemplate_7dd7e555f57541b43f168678292ce4cdb004796eb1dc68ad9e3dc712e314e58f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("ProjetSymfony2Bundle::layout3.html.twig");
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
        return "ProjetSymfony2Bundle::layout3.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_saif($context, array $blocks = array())
    {
        // line 4
        echo "
</form>
<center>
    <h2>La liste des Rendez-vous</h2><br>
<table  width=\"100%\" class=\"table table-striped\">

        <tr>
        <thead>


        <th>Lieu du RDV</th>
        <th>Date du RDV</th>
        <th>Nombre d'heure</th>
        



    </tr>

</thead>

<tbody>



    ";
        // line 29
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rdvs"]) ? $context["rdvs"] : $this->getContext($context, "rdvs")));
        foreach ($context['_seq'] as $context["key"] => $context["rdv"]) {
            // line 30
            echo "        <tr>




            <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["rdv"], "lieu", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["rdv"], "date", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["rdv"], "nbreHeure", array()), "html", null, true);
            echo "</td>
            
            
            



        </tr>

    <tbody>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['rdv'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "    

</table>
";
        // line 51
        echo "
";
        // line 53
        echo " 
</center>
       ";
    }

    public function getTemplateName()
    {
        return "ProjetSymfony2Bundle:Rdv:listRdvCandidat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 53,  107 => 51,  102 => 47,  85 => 37,  81 => 36,  77 => 35,  70 => 30,  66 => 29,  39 => 4,  36 => 3,  11 => 1,);
    }
}
