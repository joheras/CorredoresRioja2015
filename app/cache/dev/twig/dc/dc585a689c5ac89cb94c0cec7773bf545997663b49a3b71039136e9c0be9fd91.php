<?php

/* SonataAdminBundle:Pager:results.html.twig */
class __TwigTemplate_d1ab66168c39153d3ed8e32804046366e90789ef468b0965191acb80fd1996a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Pager:base_results.html.twig", "SonataAdminBundle:Pager:results.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Pager:base_results.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8fc09d3070b1c32da76694ecc85d90436818207c09c5428439f2e50607c1b9bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fc09d3070b1c32da76694ecc85d90436818207c09c5428439f2e50607c1b9bd->enter($__internal_8fc09d3070b1c32da76694ecc85d90436818207c09c5428439f2e50607c1b9bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:results.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8fc09d3070b1c32da76694ecc85d90436818207c09c5428439f2e50607c1b9bd->leave($__internal_8fc09d3070b1c32da76694ecc85d90436818207c09c5428439f2e50607c1b9bd_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:results.html.twig";
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

{% extends 'SonataAdminBundle:Pager:base_results.html.twig' %}
", "SonataAdminBundle:Pager:results.html.twig", "/home/joheras/corredoresporlarioja/corredoresporlarioja/vendor/sonata-project/admin-bundle/Resources/views/Pager/results.html.twig");
    }
}
