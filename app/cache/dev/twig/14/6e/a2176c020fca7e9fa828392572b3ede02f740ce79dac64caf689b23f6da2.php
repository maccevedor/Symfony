<?php

/* DMWDemoBundle:Notice:noticeView.html.twig */
class __TwigTemplate_146ea2176c020fca7e9fa828392572b3ede02f740ce79dac64caf689b23f6da2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "isXmlHttpRequest")) ? ("DMWDemoBundle::layout_ajax.html.twig") : ("DMWDemoBundle::layout.html.twig")));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<div>
    <h2>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notice"]) ? $context["notice"] : $this->getContext($context, "notice")), "title"), "html", null, true);
        echo "</h2>
    <p>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notice"]) ? $context["notice"] : $this->getContext($context, "notice")), "content"), "html", null, true);
        echo "</p>
</div>
";
    }

    public function getTemplateName()
    {
        return "DMWDemoBundle:Notice:noticeView.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 8,  32 => 7,  29 => 6,  26 => 5,);
    }
}
