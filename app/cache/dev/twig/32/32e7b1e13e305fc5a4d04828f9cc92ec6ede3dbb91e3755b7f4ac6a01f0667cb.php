<?php

/* SonataAdminBundle:CRUD:base_edit.html.twig */
class __TwigTemplate_464ad98f182fb94aaffed531d6ee05a0acd8e88757019231c0700967d73c7751 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $_trait_0 = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit_form.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 33);
        // line 33
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."SonataAdminBundle:CRUD:base_edit_form.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        if (!isset($_trait_0_blocks["form"])) {
            throw new Twig_Error_Runtime(sprintf('Block "form" is not defined in trait "SonataAdminBundle:CRUD:base_edit_form.html.twig".'));
        }

        $_trait_0_blocks["parentForm"] = $_trait_0_blocks["form"]; unset($_trait_0_blocks["form"]);

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'title' => array($this, 'block_title'),
                'navbar_title' => array($this, 'block_navbar_title'),
                'actions' => array($this, 'block_actions'),
                'tab_menu' => array($this, 'block_tab_menu'),
                'form' => array($this, 'block_form'),
            )
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) || array_key_exists("base_template", $context) ? $context["base_template"] : (function () { throw new Twig_Error_Runtime('Variable "base_template" does not exist.', 12, $this->getSourceContext()); })()), "SonataAdminBundle:CRUD:base_edit.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a0053941921732145af484e3efc17d24ca2dffb6c0d596d2ac82a9d82f434be5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0053941921732145af484e3efc17d24ca2dffb6c0d596d2ac82a9d82f434be5->enter($__internal_a0053941921732145af484e3efc17d24ca2dffb6c0d596d2ac82a9d82f434be5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_edit.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0053941921732145af484e3efc17d24ca2dffb6c0d596d2ac82a9d82f434be5->leave($__internal_a0053941921732145af484e3efc17d24ca2dffb6c0d596d2ac82a9d82f434be5_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_b16638edd622f3df17ea05cd04db62f7ea8629f597a7a7076ea0222688c2f70d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b16638edd622f3df17ea05cd04db62f7ea8629f597a7a7076ea0222688c2f70d->enter($__internal_b16638edd622f3df17ea05cd04db62f7ea8629f597a7a7076ea0222688c2f70d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 15
        echo "    ";
        // line 16
        echo "    ";
        if ( !(null === ((array_key_exists("objectId", $context)) ? (_twig_default_filter((isset($context["objectId"]) || array_key_exists("objectId", $context) ? $context["objectId"] : (function () { throw new Twig_Error_Runtime('Variable "objectId" does not exist.', 16, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 16, $this->getSourceContext()); })()), "id", array(0 => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 16, $this->getSourceContext()); })())), "method"))) : (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 16, $this->getSourceContext()); })()), "id", array(0 => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 16, $this->getSourceContext()); })())), "method"))))) {
            // line 17
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_edit", array("%name%" => twig_truncate_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 17, $this->getSourceContext()); })()), "toString", array(0 => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 17, $this->getSourceContext()); })())), "method"), 15)), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        } else {
            // line 19
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_create", array(), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        }
        
        $__internal_b16638edd622f3df17ea05cd04db62f7ea8629f597a7a7076ea0222688c2f70d->leave($__internal_b16638edd622f3df17ea05cd04db62f7ea8629f597a7a7076ea0222688c2f70d_prof);

    }

    // line 23
    public function block_navbar_title($context, array $blocks = array())
    {
        $__internal_0757ac0c9b494c9cd94a30b77cdf7f6ba1f6d47c6a96844535aec1c65ae0c1dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0757ac0c9b494c9cd94a30b77cdf7f6ba1f6d47c6a96844535aec1c65ae0c1dc->enter($__internal_0757ac0c9b494c9cd94a30b77cdf7f6ba1f6d47c6a96844535aec1c65ae0c1dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        // line 24
        echo "    ";
        $this->displayBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_0757ac0c9b494c9cd94a30b77cdf7f6ba1f6d47c6a96844535aec1c65ae0c1dc->leave($__internal_0757ac0c9b494c9cd94a30b77cdf7f6ba1f6d47c6a96844535aec1c65ae0c1dc_prof);

    }

    // line 27
    public function block_actions($context, array $blocks = array())
    {
        $__internal_a4cb8657c875f8f1ec881f6dbf0a018726b79a417eca7497f27ce4d01e6b364e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4cb8657c875f8f1ec881f6dbf0a018726b79a417eca7497f27ce4d01e6b364e->enter($__internal_a4cb8657c875f8f1ec881f6dbf0a018726b79a417eca7497f27ce4d01e6b364e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 28
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 28)->display($context);
        
        $__internal_a4cb8657c875f8f1ec881f6dbf0a018726b79a417eca7497f27ce4d01e6b364e->leave($__internal_a4cb8657c875f8f1ec881f6dbf0a018726b79a417eca7497f27ce4d01e6b364e_prof);

    }

    // line 31
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_6f27b2bbed59084a8707148bf58d13c1c0bdb571dd18bf391cdc07ec3c6d94c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f27b2bbed59084a8707148bf58d13c1c0bdb571dd18bf391cdc07ec3c6d94c2->enter($__internal_6f27b2bbed59084a8707148bf58d13c1c0bdb571dd18bf391cdc07ec3c6d94c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 31, $this->getSourceContext()); })()), "sidemenu", array(0 => (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new Twig_Error_Runtime('Variable "action" does not exist.', 31, $this->getSourceContext()); })())), "method"), array("currentClass" => "active", "template" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 31, $this->getSourceContext()); })()), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        
        $__internal_6f27b2bbed59084a8707148bf58d13c1c0bdb571dd18bf391cdc07ec3c6d94c2->leave($__internal_6f27b2bbed59084a8707148bf58d13c1c0bdb571dd18bf391cdc07ec3c6d94c2_prof);

    }

    // line 35
    public function block_form($context, array $blocks = array())
    {
        $__internal_42b3b65e2b120b132cecb67c44505437662df846b574c034deca4fd46c1be591 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42b3b65e2b120b132cecb67c44505437662df846b574c034deca4fd46c1be591->enter($__internal_42b3b65e2b120b132cecb67c44505437662df846b574c034deca4fd46c1be591_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 36
        echo "    ";
        $this->displayBlock("parentForm", $context, $blocks);
        echo "
";
        
        $__internal_42b3b65e2b120b132cecb67c44505437662df846b574c034deca4fd46c1be591->leave($__internal_42b3b65e2b120b132cecb67c44505437662df846b574c034deca4fd46c1be591_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 36,  124 => 35,  112 => 31,  105 => 28,  99 => 27,  89 => 24,  83 => 23,  72 => 19,  66 => 17,  63 => 16,  61 => 15,  55 => 14,  40 => 12,  12 => 33,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends base_template %}

{% block title %}
    {# NEXT_MAJOR: remove default filter #}
    {% if objectId|default(admin.id(object)) is not null %}
        {{ \"title_edit\"|trans({'%name%': admin.toString(object)|truncate(15) }, 'SonataAdminBundle') }}
    {% else %}
        {{ \"title_create\"|trans({}, 'SonataAdminBundle') }}
    {% endif %}
{% endblock %}

{% block navbar_title %}
    {{ block('title') }}
{% endblock %}

{%- block actions -%}
    {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}
{%- endblock -%}

{% block tab_menu %}{{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': sonata_admin.adminPool.getTemplate('tab_menu_template')}, 'twig') }}{% endblock %}

{% use 'SonataAdminBundle:CRUD:base_edit_form.html.twig' with form as parentForm %}

{% block form %}
    {{ block('parentForm') }}
{% endblock %}
", "SonataAdminBundle:CRUD:base_edit.html.twig", "/home/joheras/corredoresporlarioja/corredoresporlarioja/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_edit.html.twig");
    }
}
