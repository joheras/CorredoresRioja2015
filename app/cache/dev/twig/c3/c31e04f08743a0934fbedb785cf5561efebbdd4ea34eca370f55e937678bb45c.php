<?php

/* SonataAdminBundle:CRUD:edit.html.twig */
class __TwigTemplate_bc072a894575af5e913617df7ec904703333885846c6bff0d3f584fe56e9878a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit.html.twig", "SonataAdminBundle:CRUD:edit.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_134e6feb368cfeff5af47c8edaf815ae5579bd35bc6e736b78ddbec7c2e398c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_134e6feb368cfeff5af47c8edaf815ae5579bd35bc6e736b78ddbec7c2e398c7->enter($__internal_134e6feb368cfeff5af47c8edaf815ae5579bd35bc6e736b78ddbec7c2e398c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_134e6feb368cfeff5af47c8edaf815ae5579bd35bc6e736b78ddbec7c2e398c7->leave($__internal_134e6feb368cfeff5af47c8edaf815ae5579bd35bc6e736b78ddbec7c2e398c7_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends 'SonataAdminBundle:CRUD:base_edit.html.twig' %}
", "SonataAdminBundle:CRUD:edit.html.twig", "/home/joheras/corredoresporlarioja/corredoresporlarioja/vendor/sonata-project/admin-bundle/Resources/views/CRUD/edit.html.twig");
    }
}
