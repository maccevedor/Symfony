<?php

/* DMWDemoBundle:Default:articulo.html.twig */
class __TwigTemplate_3b96716ee01c91645138df8df50886d07b2d7fccc45a86ebabeeff696170baaf extends Twig_Template
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
        echo "<h1>Articulo con ID ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["articulo"]) ? $context["articulo"] : $this->getContext($context, "articulo")), "id"), "html", null, true);
        echo "</h1>
<ul>
    <li>Titulo: ";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["articulo"]) ? $context["articulo"] : $this->getContext($context, "articulo")), "title"), "html", null, true);
        echo "</li>
    <li>Fecha de creacion: ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["articulo"]) ? $context["articulo"] : $this->getContext($context, "articulo")), "created"), "html", null, true);
        echo "</li>
</ul>";
    }

    public function getTemplateName()
    {
        return "DMWDemoBundle:Default:articulo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  25 => 3,  19 => 1,);
    }
}
