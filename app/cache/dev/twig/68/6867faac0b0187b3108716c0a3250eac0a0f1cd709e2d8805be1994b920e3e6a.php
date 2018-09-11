<?php

/* SonataAdminBundle:CRUD:list__batch.html.twig */
class __TwigTemplate_73f7c96bcd695ada9e139a26a21a831d4acec6b80e9a15858bfb87a79c015c69 extends Twig_Template
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
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 12, $this->getSourceContext()); })()), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list__batch.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2ba956a6c62fe8333ea6f5cb3b0ea9e25e8508d170306f706f70d6b3e3c6c969 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ba956a6c62fe8333ea6f5cb3b0ea9e25e8508d170306f706f70d6b3e3c6c969->enter($__internal_2ba956a6c62fe8333ea6f5cb3b0ea9e25e8508d170306f706f70d6b3e3c6c969_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__batch.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ba956a6c62fe8333ea6f5cb3b0ea9e25e8508d170306f706f70d6b3e3c6c969->leave($__internal_2ba956a6c62fe8333ea6f5cb3b0ea9e25e8508d170306f706f70d6b3e3c6c969_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_a3166bdbb4d3122d27ecccf8c9ff5fda8e8630a3766aa6c4dd566f01ca9e76b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3166bdbb4d3122d27ecccf8c9ff5fda8e8630a3766aa6c4dd566f01ca9e76b2->enter($__internal_a3166bdbb4d3122d27ecccf8c9ff5fda8e8630a3766aa6c4dd566f01ca9e76b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <input type=\"checkbox\" name=\"idx[]\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 15, $this->getSourceContext()); })()), "id", array(0 => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 15, $this->getSourceContext()); })())), "method"), "html", null, true);
        echo "\">
";
        
        $__internal_a3166bdbb4d3122d27ecccf8c9ff5fda8e8630a3766aa6c4dd566f01ca9e76b2->leave($__internal_a3166bdbb4d3122d27ecccf8c9ff5fda8e8630a3766aa6c4dd566f01ca9e76b2_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__batch.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 15,  33 => 14,  18 => 12,);
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
    <input type=\"checkbox\" name=\"idx[]\" value=\"{{ admin.id(object) }}\">
{% endblock %}
", "SonataAdminBundle:CRUD:list__batch.html.twig", "/home/joheras/Symfony/corredoresporlarioja/corredoresporlarioja/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list__batch.html.twig");
    }
}
