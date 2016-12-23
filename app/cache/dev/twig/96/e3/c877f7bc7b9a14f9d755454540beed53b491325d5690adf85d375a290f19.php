<?php

/* ProjetSymfony2Bundle:Candidat:pdf.html.twig */
class __TwigTemplate_96e3c877f7bc7b9a14f9d755454540beed53b491325d5690adf85d375a290f19 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
</br></br>
            <h2 align=\"center\">Liste des Candidats</h2>
            
            </br>
            </br>
            </br>
            

            <table border=\"2\" width=\"100%\">
                <tr>
                    <td> Prenom  </td>
                    <td> Nom </td>
                    <td> num cin </td>
                    <td> num tel </td>
                </tr>
               
                ";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["candidats"]) ? $context["candidats"] : $this->getContext($context, "candidats")));
        foreach ($context['_seq'] as $context["_key"] => $context["candidat"]) {
            // line 19
            echo "                    <tr>
                        <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["candidat"], "prenom", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["candidat"], "nom", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["candidat"], "numCin", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["candidat"], "numTel", array()), "html", null, true);
            echo "</td>
                        
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['candidat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "            </table>
<!DOCTYPE html>
<html>
<head>
<style>

h2 {
    color: firebrick;
    text-align: center;
    font-size: 50px;
    
}

td {
    font-family: \"Times New Roman\";
    font-size: 20px;
}

</style>
</head>
</html>";
    }

    public function getTemplateName()
    {
        return "ProjetSymfony2Bundle:Candidat:pdf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 27,  57 => 23,  53 => 22,  49 => 21,  45 => 20,  42 => 19,  38 => 18,  19 => 1,);
    }
}
