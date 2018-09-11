<?php

/* knp_menu_base.html.twig */
class __TwigTemplate_9fa738f5f456f25522b1209005d8a7af41661d6f3de94a1893e7b6114e2621f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d925ea4a40e024e58c073ddc06b52613403d6509a69ba07393fcbbd71a4ee51b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d925ea4a40e024e58c073ddc06b52613403d6509a69ba07393fcbbd71a4ee51b->enter($__internal_d925ea4a40e024e58c073ddc06b52613403d6509a69ba07393fcbbd71a4ee51b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 1, $this->getSourceContext()); })()), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_d925ea4a40e024e58c073ddc06b52613403d6509a69ba07393fcbbd71a4ee51b->leave($__internal_d925ea4a40e024e58c073ddc06b52613403d6509a69ba07393fcbbd71a4ee51b_prof);

    }

    public function getTemplateName()
    {
        return "knp_menu_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if options.compressed %}{{ block('compressed_root') }}{% else %}{{ block('root') }}{% endif %}
", "knp_menu_base.html.twig", "/home/joheras/Symfony/corredoresporlarioja/corredoresporlarioja/vendor/knplabs/knp-menu/src/Knp/Menu/Resources/views/knp_menu_base.html.twig");
    }
}
