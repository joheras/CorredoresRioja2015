<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_67029c4edc92fbe5f5d6072e5757b743d57459c5af368cf3ce2fbaa5fbda03f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ac3b29cbe80597465039c2c359be6ff18c279d7128a94f3c48a15b6edf3c3b9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac3b29cbe80597465039c2c359be6ff18c279d7128a94f3c48a15b6edf3c3b9f->enter($__internal_ac3b29cbe80597465039c2c359be6ff18c279d7128a94f3c48a15b6edf3c3b9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac3b29cbe80597465039c2c359be6ff18c279d7128a94f3c48a15b6edf3c3b9f->leave($__internal_ac3b29cbe80597465039c2c359be6ff18c279d7128a94f3c48a15b6edf3c3b9f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0526a9628f5a22b1fd7c7666fd86753dd78fd4af78e0c75fc8ea87cc61edc1d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0526a9628f5a22b1fd7c7666fd86753dd78fd4af78e0c75fc8ea87cc61edc1d9->enter($__internal_0526a9628f5a22b1fd7c7666fd86753dd78fd4af78e0c75fc8ea87cc61edc1d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0526a9628f5a22b1fd7c7666fd86753dd78fd4af78e0c75fc8ea87cc61edc1d9->leave($__internal_0526a9628f5a22b1fd7c7666fd86753dd78fd4af78e0c75fc8ea87cc61edc1d9_prof);

    }

    // line 6
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8d2717ffb7495ee7e463df57e8e2b5832227d4b4f00f94575aef1d01e16f9fb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d2717ffb7495ee7e463df57e8e2b5832227d4b4f00f94575aef1d01e16f9fb3->enter($__internal_8d2717ffb7495ee7e463df57e8e2b5832227d4b4f00f94575aef1d01e16f9fb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 7
        echo "<span class=\"label\">
    <span class=\"icon\"><svg width=\"32\" height=\"32\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" x=\"0px\" y=\"0px\" viewBox=\"0 0 32 32\" enable-background=\"new 0 0 32 32\" xml:space=\"preserve\"><g><path fill=\"#3F3F3F\" d=\"M15 2c-1.1 0-2 0.9-2 2v25c0 1.1 0.9 2 2 2s2-0.9 2-2V4C17 2.9 16.1 2 15 2z\"/><path fill=\"#3F3F3F\" d=\"M30.7 8.2l-2.9-2.9C27.6 5.1 27.3 5 27 5h0h0h-9v8h9c0.3 0 0.6-0.1 0.8-0.3l2.9-2.9 C31.1 9.4 31.1 8.6 30.7 8.2z\"/><path fill=\"#3F3F3F\" d=\"M5 8L5 8C4.7 8 4.4 8.1 4.2 8.3l-2.9 2.9c-0.4 0.4-0.4 1.1 0 1.6l2.9 2.9C4.4 15.9 4.7 16 5 16h7V8H5L5 8z\"/><path fill=\"#3F3F3F\" d=\"M24.8 16.2c-0.2-0.2-0.3-0.2-0.5-0.2h0h0H18v6h6.2c0.2 0 0.4-0.1 0.5-0.2l2-2.2c0.3-0.3 0.3-0.9 0-1.2 L24.8 16.2z\"/></g></svg></span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8d2717ffb7495ee7e463df57e8e2b5832227d4b4f00f94575aef1d01e16f9fb3->leave($__internal_8d2717ffb7495ee7e463df57e8e2b5832227d4b4f00f94575aef1d01e16f9fb3_prof);

    }

    // line 13
    public function block_panel($context, array $blocks = array())
    {
        $__internal_152abfc89019a9582db068da9217afb24438895cba0e4369079e4784d3e5b85b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_152abfc89019a9582db068da9217afb24438895cba0e4369079e4784d3e5b85b->enter($__internal_152abfc89019a9582db068da9217afb24438895cba0e4369079e4784d3e5b85b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 14
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 14, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_152abfc89019a9582db068da9217afb24438895cba0e4369079e4784d3e5b85b->leave($__internal_152abfc89019a9582db068da9217afb24438895cba0e4369079e4784d3e5b85b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 14,  64 => 13,  53 => 7,  47 => 6,  36 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\"><svg width=\"32\" height=\"32\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" x=\"0px\" y=\"0px\" viewBox=\"0 0 32 32\" enable-background=\"new 0 0 32 32\" xml:space=\"preserve\"><g><path fill=\"#3F3F3F\" d=\"M15 2c-1.1 0-2 0.9-2 2v25c0 1.1 0.9 2 2 2s2-0.9 2-2V4C17 2.9 16.1 2 15 2z\"/><path fill=\"#3F3F3F\" d=\"M30.7 8.2l-2.9-2.9C27.6 5.1 27.3 5 27 5h0h0h-9v8h9c0.3 0 0.6-0.1 0.8-0.3l2.9-2.9 C31.1 9.4 31.1 8.6 30.7 8.2z\"/><path fill=\"#3F3F3F\" d=\"M5 8L5 8C4.7 8 4.4 8.1 4.2 8.3l-2.9 2.9c-0.4 0.4-0.4 1.1 0 1.6l2.9 2.9C4.4 15.9 4.7 16 5 16h7V8H5L5 8z\"/><path fill=\"#3F3F3F\" d=\"M24.8 16.2c-0.2-0.2-0.3-0.2-0.5-0.2h0h0H18v6h6.2c0.2 0 0.4-0.1 0.5-0.2l2-2.2c0.3-0.3 0.3-0.9 0-1.2 L24.8 16.2z\"/></g></svg></span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', {'token': token})) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/joheras/corredoresporlarioja/corredoresporlarioja/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
