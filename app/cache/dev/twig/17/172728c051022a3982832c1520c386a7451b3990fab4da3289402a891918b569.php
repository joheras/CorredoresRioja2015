<?php

/* SonataBlockBundle:Block:block_base.html.twig */
class __TwigTemplate_a28ea1071845f0a7a6dcffb8401082599dac4f51908228dfc5a314661c291d11 extends Twig_Template
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
        $__internal_3e2db15e74bc2268f85af7e9ae9d514496585e1029912d1963f211ea7448fff7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e2db15e74bc2268f85af7e9ae9d514496585e1029912d1963f211ea7448fff7->enter($__internal_3e2db15e74bc2268f85af7e9ae9d514496585e1029912d1963f211ea7448fff7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

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
        
        $__internal_3e2db15e74bc2268f85af7e9ae9d514496585e1029912d1963f211ea7448fff7->leave($__internal_3e2db15e74bc2268f85af7e9ae9d514496585e1029912d1963f211ea7448fff7_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_82ae8686e3e55eacc330a2cc0409ef060c8384c257abd4ecd94efe58fe8df997 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82ae8686e3e55eacc330a2cc0409ef060c8384c257abd4ecd94efe58fe8df997->enter($__internal_82ae8686e3e55eacc330a2cc0409ef060c8384c257abd4ecd94efe58fe8df997_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_82ae8686e3e55eacc330a2cc0409ef060c8384c257abd4ecd94efe58fe8df997->leave($__internal_82ae8686e3e55eacc330a2cc0409ef060c8384c257abd4ecd94efe58fe8df997_prof);

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
", "SonataBlockBundle:Block:block_base.html.twig", "/home/joheras/corredoresporlarioja/corredoresporlarioja/vendor/sonata-project/block-bundle/Resources/views/Block/block_base.html.twig");
    }
}
