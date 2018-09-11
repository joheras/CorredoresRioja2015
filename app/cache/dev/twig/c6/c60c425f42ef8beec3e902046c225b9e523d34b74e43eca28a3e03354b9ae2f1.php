<?php

/* SonataAdminBundle:CRUD:list.html.twig */
class __TwigTemplate_a852d86e7afca970b71e5fcb2936296bd6b361ce79060451a852eab12ab87fd9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list.html.twig", "SonataAdminBundle:CRUD:list.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3b51ad529f542acd85bede08bf61ac44ee4d7ca5a2cb6778d62b98287e795e77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b51ad529f542acd85bede08bf61ac44ee4d7ca5a2cb6778d62b98287e795e77->enter($__internal_3b51ad529f542acd85bede08bf61ac44ee4d7ca5a2cb6778d62b98287e795e77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b51ad529f542acd85bede08bf61ac44ee4d7ca5a2cb6778d62b98287e795e77->leave($__internal_3b51ad529f542acd85bede08bf61ac44ee4d7ca5a2cb6778d62b98287e795e77_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list.html.twig";
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

{% extends 'SonataAdminBundle:CRUD:base_list.html.twig' %}
", "SonataAdminBundle:CRUD:list.html.twig", "/home/joheras/corredoresporlarioja/corredoresporlarioja/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list.html.twig");
    }
}
