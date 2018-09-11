<?php

/* SonataAdminBundle:CRUD:show.html.twig */
class __TwigTemplate_f575d59ef9bced6196be7787f165e093a06144e9335d596aed27a51179145388 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show.html.twig", "SonataAdminBundle:CRUD:show.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0a065e53e7bfba4c3f9a58ffeb5774cbf85af4ef9075ccaae50c62e1aa704e04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a065e53e7bfba4c3f9a58ffeb5774cbf85af4ef9075ccaae50c62e1aa704e04->enter($__internal_0a065e53e7bfba4c3f9a58ffeb5774cbf85af4ef9075ccaae50c62e1aa704e04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a065e53e7bfba4c3f9a58ffeb5774cbf85af4ef9075ccaae50c62e1aa704e04->leave($__internal_0a065e53e7bfba4c3f9a58ffeb5774cbf85af4ef9075ccaae50c62e1aa704e04_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show.html.twig";
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

{% extends 'SonataAdminBundle:CRUD:base_show.html.twig' %}
", "SonataAdminBundle:CRUD:show.html.twig", "/home/joheras/corredoresporlarioja/corredoresporlarioja/vendor/sonata-project/admin-bundle/Resources/views/CRUD/show.html.twig");
    }
}
