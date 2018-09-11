<?php

/* SonataAdminBundle:CRUD:list__batch.html.twig */
class __TwigTemplate_81df1e24bb9fe162e0ca46cec20c8ebd327166c2b246d5f37ff2f9001f63cf47 extends Twig_Template
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
        $__internal_ba1e567daaae99fd1f7291752c9d12a6afe899cdd55f46a60957b282a522395c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba1e567daaae99fd1f7291752c9d12a6afe899cdd55f46a60957b282a522395c->enter($__internal_ba1e567daaae99fd1f7291752c9d12a6afe899cdd55f46a60957b282a522395c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__batch.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba1e567daaae99fd1f7291752c9d12a6afe899cdd55f46a60957b282a522395c->leave($__internal_ba1e567daaae99fd1f7291752c9d12a6afe899cdd55f46a60957b282a522395c_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_202a3279e6fb267f464ee2bbb8e2b85a5e954ab88f0c58c42915cdaf72412bc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_202a3279e6fb267f464ee2bbb8e2b85a5e954ab88f0c58c42915cdaf72412bc7->enter($__internal_202a3279e6fb267f464ee2bbb8e2b85a5e954ab88f0c58c42915cdaf72412bc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <input type=\"checkbox\" name=\"idx[]\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 15, $this->getSourceContext()); })()), "id", array(0 => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 15, $this->getSourceContext()); })())), "method"), "html", null, true);
        echo "\">
";
        
        $__internal_202a3279e6fb267f464ee2bbb8e2b85a5e954ab88f0c58c42915cdaf72412bc7->leave($__internal_202a3279e6fb267f464ee2bbb8e2b85a5e954ab88f0c58c42915cdaf72412bc7_prof);

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
", "SonataAdminBundle:CRUD:list__batch.html.twig", "/home/joheras/corredoresporlarioja/corredoresporlarioja/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list__batch.html.twig");
    }
}
