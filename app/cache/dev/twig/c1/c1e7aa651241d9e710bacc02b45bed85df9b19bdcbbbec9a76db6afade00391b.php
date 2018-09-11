<?php

/* SonataAdminBundle:CRUD:list_string.html.twig */
class __TwigTemplate_246061ec5ee2d235086f591df0f64c2e12d0c781386cd1f2c34a7e31fcf01dab extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 12, $this->getSourceContext()); })()), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e00e242ceabb4e5ce052521118d9b3bb0aad38dc6740bd0f03cf16be0aa787b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e00e242ceabb4e5ce052521118d9b3bb0aad38dc6740bd0f03cf16be0aa787b1->enter($__internal_e00e242ceabb4e5ce052521118d9b3bb0aad38dc6740bd0f03cf16be0aa787b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e00e242ceabb4e5ce052521118d9b3bb0aad38dc6740bd0f03cf16be0aa787b1->leave($__internal_e00e242ceabb4e5ce052521118d9b3bb0aad38dc6740bd0f03cf16be0aa787b1_prof);

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
", "SonataAdminBundle:CRUD:list_string.html.twig", "/home/joheras/Symfony/corredoresporlarioja/corredoresporlarioja/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_string.html.twig");
    }
}
