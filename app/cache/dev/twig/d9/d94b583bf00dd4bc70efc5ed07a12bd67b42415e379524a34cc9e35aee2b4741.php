<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_dc299907750dd540fda82d87b1a0847e4cb2e277a3f4c22bd666b8fbdcada273 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a83dcb03f78928884c4f59741b5078ac19a34101095e0c323bb7548b1bc36a6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a83dcb03f78928884c4f59741b5078ac19a34101095e0c323bb7548b1bc36a6c->enter($__internal_a83dcb03f78928884c4f59741b5078ac19a34101095e0c323bb7548b1bc36a6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a83dcb03f78928884c4f59741b5078ac19a34101095e0c323bb7548b1bc36a6c->leave($__internal_a83dcb03f78928884c4f59741b5078ac19a34101095e0c323bb7548b1bc36a6c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d2588023d81d9ca2c7d1bb9914c134d462097a196daa0a42e8468756aeb0dc9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2588023d81d9ca2c7d1bb9914c134d462097a196daa0a42e8468756aeb0dc9f->enter($__internal_d2588023d81d9ca2c7d1bb9914c134d462097a196daa0a42e8468756aeb0dc9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d2588023d81d9ca2c7d1bb9914c134d462097a196daa0a42e8468756aeb0dc9f->leave($__internal_d2588023d81d9ca2c7d1bb9914c134d462097a196daa0a42e8468756aeb0dc9f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d7eb3d1214e744ff60da3e247c6f5e2a59240bb99ceb459356e87de1f3903ebc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7eb3d1214e744ff60da3e247c6f5e2a59240bb99ceb459356e87de1f3903ebc->enter($__internal_d7eb3d1214e744ff60da3e247c6f5e2a59240bb99ceb459356e87de1f3903ebc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 8, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_d7eb3d1214e744ff60da3e247c6f5e2a59240bb99ceb459356e87de1f3903ebc->leave($__internal_d7eb3d1214e744ff60da3e247c6f5e2a59240bb99ceb459356e87de1f3903ebc_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d3074cce24d9a0445d3f08dc17a799f7e8b17ff6791bbdc71a7aa7d8f55666df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3074cce24d9a0445d3f08dc17a799f7e8b17ff6791bbdc71a7aa7d8f55666df->enter($__internal_d3074cce24d9a0445d3f08dc17a799f7e8b17ff6791bbdc71a7aa7d8f55666df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_d3074cce24d9a0445d3f08dc17a799f7e8b17ff6791bbdc71a7aa7d8f55666df->leave($__internal_d3074cce24d9a0445d3f08dc17a799f7e8b17ff6791bbdc71a7aa7d8f55666df_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'TwigBundle::layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include 'TwigBundle:Exception:exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/home/joheras/corredoresporlarioja/corredoresporlarioja/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
