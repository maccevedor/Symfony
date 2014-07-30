<?php

/* DMWDemoBundle:Notice:index.html.twig */
class __TwigTemplate_8fccdbad4908e5b57e6e2dbbd46ce85ab2527cf2c694c614594e34c5c562821a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("DMWDemoBundle::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DMWDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "<div>
    <p>Noticias recientes</p>
    <ol>
        ";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["notices"]) ? $context["notices"] : $this->getContext($context, "notices")));
        foreach ($context['_seq'] as $context["index"] => $context["notice"]) {
            // line 9
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("DMWDemoBundle_noticeView", array("notice_id" => (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notice"]) ? $context["notice"] : $this->getContext($context, "notice")), "title"), "html", null, true);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['index'], $context['notice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "    </ol>
    <div id=\"notice_viewer\">
    ";
        // line 14
        echo "    </div>
</div>
";
    }

    // line 19
    public function block_javascripts($context, array $blocks = array())
    {
        // line 20
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo " ";
        // line 21
        echo "
<script type=\"text/javascript\">
\$(document).ready(function(){
    \$('a.notice_link').click(function(event){
        event.preventDefault(); //cancela el comportamiento por defecto
        \$('#notice_viewer').load(\$(this).attr('href')); //carga por ajax a la capa \"notice_viewer\"
    });
});
</script>
";
    }

    public function getTemplateName()
    {
        return "DMWDemoBundle:Notice:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 21,  65 => 20,  62 => 19,  56 => 14,  52 => 11,  41 => 9,  37 => 8,  32 => 5,  29 => 4,);
    }
}
