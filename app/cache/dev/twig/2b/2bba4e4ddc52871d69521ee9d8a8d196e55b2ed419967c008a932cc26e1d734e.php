<?php

/* SonataAdminBundle:CRUD:list_time.html.twig */
class __TwigTemplate_12a650ceda2898ec3d3b047e5385bb912b9191901579e8e23115780c2979d5a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 12, $this->getSourceContext()); })()), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_time.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6d9a19cd26f39d38ea3fba8cc0f152a9ec2c2f26e9dd8b69c8a76580d4e03072 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d9a19cd26f39d38ea3fba8cc0f152a9ec2c2f26e9dd8b69c8a76580d4e03072->enter($__internal_6d9a19cd26f39d38ea3fba8cc0f152a9ec2c2f26e9dd8b69c8a76580d4e03072_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_time.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d9a19cd26f39d38ea3fba8cc0f152a9ec2c2f26e9dd8b69c8a76580d4e03072->leave($__internal_6d9a19cd26f39d38ea3fba8cc0f152a9ec2c2f26e9dd8b69c8a76580d4e03072_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_39877c7517c657c187a16af2ec40fc091a276abba477514d80ee96e0cce5a1b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39877c7517c657c187a16af2ec40fc091a276abba477514d80ee96e0cce5a1b0->enter($__internal_39877c7517c657c187a16af2ec40fc091a276abba477514d80ee96e0cce5a1b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 15, $this->getSourceContext()); })()))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 18, $this->getSourceContext()); })()), "H:i:s"), "html", null, true);
        }
        
        $__internal_39877c7517c657c187a16af2ec40fc091a276abba477514d80ee96e0cce5a1b0->leave($__internal_39877c7517c657c187a16af2ec40fc091a276abba477514d80ee96e0cce5a1b0_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_time.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 18,  41 => 16,  39 => 15,  33 => 14,  18 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends admin.getTemplate('base_list_field') %}

{% block field %}
    {%- if value is empty -%}
        &nbsp;
    {%- else -%}
        {{ value|date('H:i:s') }}
    {%- endif -%}
{% endblock %}
", "SonataAdminBundle:CRUD:list_time.html.twig", "/home/joheras/corredoresporlarioja/corredoresporlarioja/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_time.html.twig");
    }
}
