<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_8e7cc763534780dcc7f5b009642617c7ab684ead66212887e2503c10913acaae extends Twig_Template
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
        $__internal_debdd5e449eac8dfc9a16b2897481bbc319e9d58937a7f1c5e14e05dd9055010 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_debdd5e449eac8dfc9a16b2897481bbc319e9d58937a7f1c5e14e05dd9055010->enter($__internal_debdd5e449eac8dfc9a16b2897481bbc319e9d58937a7f1c5e14e05dd9055010_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_debdd5e449eac8dfc9a16b2897481bbc319e9d58937a7f1c5e14e05dd9055010->leave($__internal_debdd5e449eac8dfc9a16b2897481bbc319e9d58937a7f1c5e14e05dd9055010_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_dc1ac40da845f4c57c52c554bd7727f5c22d2f1467d86757539572e99afdf1d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc1ac40da845f4c57c52c554bd7727f5c22d2f1467d86757539572e99afdf1d4->enter($__internal_dc1ac40da845f4c57c52c554bd7727f5c22d2f1467d86757539572e99afdf1d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_dc1ac40da845f4c57c52c554bd7727f5c22d2f1467d86757539572e99afdf1d4->leave($__internal_dc1ac40da845f4c57c52c554bd7727f5c22d2f1467d86757539572e99afdf1d4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3d4f0cda8de9e1e449294c3215c10388584d9a3e90e4237cb654cbd1eca3f8c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d4f0cda8de9e1e449294c3215c10388584d9a3e90e4237cb654cbd1eca3f8c9->enter($__internal_3d4f0cda8de9e1e449294c3215c10388584d9a3e90e4237cb654cbd1eca3f8c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 8, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_3d4f0cda8de9e1e449294c3215c10388584d9a3e90e4237cb654cbd1eca3f8c9->leave($__internal_3d4f0cda8de9e1e449294c3215c10388584d9a3e90e4237cb654cbd1eca3f8c9_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_871682501d8b957d815402f67d9e0da1c90fe0793b9126a025436788d714acc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_871682501d8b957d815402f67d9e0da1c90fe0793b9126a025436788d714acc7->enter($__internal_871682501d8b957d815402f67d9e0da1c90fe0793b9126a025436788d714acc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_871682501d8b957d815402f67d9e0da1c90fe0793b9126a025436788d714acc7->leave($__internal_871682501d8b957d815402f67d9e0da1c90fe0793b9126a025436788d714acc7_prof);

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
", "TwigBundle:Exception:exception_full.html.twig", "/home/joheras/Symfony/corredoresporlarioja/corredoresporlarioja/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
