<?php

/* SonataBlockBundle:Block:block_base.html.twig */
class __TwigTemplate_6a3ebb9d12a541df42620e0b5640162eaf87bffda5978862be0514b6608e62bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_059db64ff248241341ecb36380b49bd7a87a5e7d5eab0f7aa5cf4574dd307f36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_059db64ff248241341ecb36380b49bd7a87a5e7d5eab0f7aa5cf4574dd307f36->enter($__internal_059db64ff248241341ecb36380b49bd7a87a5e7d5eab0f7aa5cf4574dd307f36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

        // line 11
        echo "<div id=\"cms-block-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["block"]) || array_key_exists("block", $context) ? $context["block"] : (function () { throw new Twig_Error_Runtime('Variable "block" does not exist.', 11, $this->getSourceContext()); })()), "id", array()), "html", null, true);
        echo "\" class=\"cms-block cms-block-element\">
    ";
        // line 12
        $this->displayBlock('block', $context, $blocks);
        // line 13
        echo "</div>
";
        
        $__internal_059db64ff248241341ecb36380b49bd7a87a5e7d5eab0f7aa5cf4574dd307f36->leave($__internal_059db64ff248241341ecb36380b49bd7a87a5e7d5eab0f7aa5cf4574dd307f36_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_b842dd99e867f390b59df6f63eab87bf70aeee7da02b8caf3249cc99d3422430 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b842dd99e867f390b59df6f63eab87bf70aeee7da02b8caf3249cc99d3422430->enter($__internal_b842dd99e867f390b59df6f63eab87bf70aeee7da02b8caf3249cc99d3422430_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_b842dd99e867f390b59df6f63eab87bf70aeee7da02b8caf3249cc99d3422430->leave($__internal_b842dd99e867f390b59df6f63eab87bf70aeee7da02b8caf3249cc99d3422430_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 12,  30 => 13,  28 => 12,  23 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}
<div id=\"cms-block-{{ block.id }}\" class=\"cms-block cms-block-element\">
    {% block block %}EMPTY CONTENT{% endblock %}
</div>
", "SonataBlockBundle:Block:block_base.html.twig", "/home/joheras/Symfony/corredoresporlarioja/corredoresporlarioja/vendor/sonata-project/block-bundle/Resources/views/Block/block_base.html.twig");
    }
}
