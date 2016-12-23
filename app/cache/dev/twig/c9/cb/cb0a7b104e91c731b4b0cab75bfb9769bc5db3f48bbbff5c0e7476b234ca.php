<?php

/* ProjetSymfony2Bundle:Home:homeCandidat.html.twig */
class __TwigTemplate_c9cbcb0a7b104e91c731b4b0cab75bfb9769bc5db3f48bbbff5c0e7476b234ca extends Twig_Template
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
            'wael' => array($this, 'block_wael'),
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
        echo "    <h3>Rechercher </h3>
    <form  method=\"POST\" action=\"\" >
        date : <input type=\"text\" name=\"date\"/>
        <input type=\"submit\" value=\"Chercher\">
    </form>
    <h1>La liste des Rendez-vous</h1>
    <table border=\"\">
        <tr>
            <td> Lieu du Rendez-vous </td>
            <td> Date du Rendez-vous </td>
            <td> Nombre d'heure </td>


            ";
        // line 19
        echo "            ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rdvs"]) ? $context["rdvs"] : $this->getContext($context, "rdvs")));
        foreach ($context['_seq'] as $context["_key"] => $context["rdv"]) {
            // line 20
            echo "            <tr>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["rdv"], "lieu", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["rdv"], "date", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["rdv"], "nbreHeure", array()), "html", null, true);
            echo "</td>



            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rdv'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "    </tr>
</table>
";
    }

    // line 33
    public function block_wael($context, array $blocks = array())
    {
        // line 34
        echo "  hhhhh
    ";
    }

    public function getTemplateName()
    {
        return "ProjetSymfony2Bundle:Home:homeCandidat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 34,  89 => 33,  83 => 29,  71 => 23,  67 => 22,  63 => 21,  60 => 20,  55 => 19,  40 => 4,  37 => 3,  11 => 1,);
    }
}
