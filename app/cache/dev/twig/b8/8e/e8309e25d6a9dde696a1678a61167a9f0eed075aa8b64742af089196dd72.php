<?php

/* DMWDemoBundle:Articulos:ver_articulos.html.twig */
class __TwigTemplate_b88ee8309e25d6a9dde696a1678a61167a9f0eed075aa8b64742af089196dd72 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Symfony - AJAX";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
<div id=\"articulos\"></div>
<a id=\"link_articulos\" href=\"#\">Cargar articulos</a>

";
    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        // line 13
        echo "<script>

\$(document).ready(function(){
        \$('#link_articulos').click(function(){
                \$('#articulos').load('";
        // line 17
        echo $this->env->getExtension('routing')->getPath("articulo_listar");
        echo "');
        });
});

</script>
";
    }

    public function getTemplateName()
    {
        return "DMWDemoBundle:Articulos:ver_articulos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 17,  50 => 13,  47 => 12,  39 => 6,  36 => 5,  30 => 3,);
    }
}
