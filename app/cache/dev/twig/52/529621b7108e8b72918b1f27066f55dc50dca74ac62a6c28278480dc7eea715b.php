<?php

/* SonataAdminBundle:CRUD:list_string.html.twig */
class __TwigTemplate_4e10986d60aa6f799af81771a056fecbe943ed86fd9cb7d3d5f8428e27c1917d extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 12, $this->getSourceContext()); })()), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f1b5582d9d3aca7bbe921f77463cfabab0bb5d53e58136ee115ea8358801f982 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1b5582d9d3aca7bbe921f77463cfabab0bb5d53e58136ee115ea8358801f982->enter($__internal_f1b5582d9d3aca7bbe921f77463cfabab0bb5d53e58136ee115ea8358801f982_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f1b5582d9d3aca7bbe921f77463cfabab0bb5d53e58136ee115ea8358801f982->leave($__internal_f1b5582d9d3aca7bbe921f77463cfabab0bb5d53e58136ee115ea8358801f982_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_string.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  9 => 12,);
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
", "SonataAdminBundle:CRUD:list_string.html.twig", "/home/joheras/corredoresporlarioja/corredoresporlarioja/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_string.html.twig");
    }
}
