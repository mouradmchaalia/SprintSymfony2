<?php

/* ProjetSymfony2Bundle:Rdv:liste_rdvs.html.twig */
class __TwigTemplate_7ddc73e3bc14f3507ef2e2e26d52b987c8ccd830c1f9ba9c3e0d58e351b94b19 extends Twig_Template
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
        echo "Liste Rdv";
    }

    // line 6
    public function block_section1($context, array $blocks = array())
    {
        echo "<span class=\"glyphicon glyphicon-th-list\" aria-hidden=\"true\"> </span> Liste Rdv    ";
    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        // line 11
        echo "
    
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
        // line 34
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rdvs"]) ? $context["rdvs"] : $this->getContext($context, "rdvs")));
        foreach ($context['_seq'] as $context["key"] => $context["rdv"]) {
            // line 35
            echo "        <tr>




            <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["rdv"], "lieu", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["rdv"], "date", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["rdv"], "nbreHeure", array()), "html", null, true);
            echo "</td>
            
            
            



        </tr>

    <tbody>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['rdv'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "    

</table>
";
        // line 56
        echo "
";
        // line 58
        echo " 

";
    }

    public function getTemplateName()
    {
        return "ProjetSymfony2Bundle:Rdv:liste_rdvs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 58,  119 => 56,  114 => 52,  97 => 42,  93 => 41,  89 => 40,  82 => 35,  78 => 34,  53 => 11,  50 => 10,  44 => 6,  38 => 5,  11 => 1,);
    }
}
