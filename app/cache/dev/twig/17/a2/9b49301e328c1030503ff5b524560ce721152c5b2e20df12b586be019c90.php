<?php

/* DMWDemoBundle:Articulos:new.html.twig */
class __TwigTemplate_17a29b49301e328c1030503ff5b524560ce721152c5b2e20df12b586be019c90 extends Twig_Template
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
        echo "<form action=\"";
        echo $this->env->getExtension('routing')->getPath("articulo_new");
        echo "\" method=\"post\">
    ";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <input type=\"submit\" />
</form>";
    }

    public function getTemplateName()
    {
        return "DMWDemoBundle:Articulos:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 2,  19 => 1,);
    }
}
