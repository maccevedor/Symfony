<?php

/* DMWDemoBundle:Articulos:listar.html.twig */
class __TwigTemplate_552dfdd138d487befaf04ec2665bea9fd608601e5a1a8747214b0d3bffe30699 extends Twig_Template
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
        echo "<h1>Listado de Articulos</h1>
<table border=\"1\">
    <tr>
        <th>ID</th>
        <th>Titulo</th>
        <th>Autor</th>
        <th>Fecha de Creacion</th>
    </tr>
    ";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articulos"]) ? $context["articulos"] : $this->getContext($context, "articulos")));
        foreach ($context['_seq'] as $context["_key"] => $context["articulo"]) {
            // line 10
            echo "    <tr>
        <td>";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["articulo"]) ? $context["articulo"] : $this->getContext($context, "articulo")), "id"), "html", null, true);
            echo "</td>
        <td>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["articulo"]) ? $context["articulo"] : $this->getContext($context, "articulo")), "title"), "html", null, true);
            echo "</td>
        <td>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["articulo"]) ? $context["articulo"] : $this->getContext($context, "articulo")), "author"), "html", null, true);
            echo "</td>
        <td>";
            // line 14
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["articulo"]) ? $context["articulo"] : $this->getContext($context, "articulo")), "created"), "d-m-Y"), "html", null, true);
            echo "</td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['articulo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "</table>";
    }

    public function getTemplateName()
    {
        return "DMWDemoBundle:Articulos:listar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 17,  48 => 14,  44 => 13,  40 => 12,  36 => 11,  33 => 10,  29 => 9,  19 => 1,);
    }
}
