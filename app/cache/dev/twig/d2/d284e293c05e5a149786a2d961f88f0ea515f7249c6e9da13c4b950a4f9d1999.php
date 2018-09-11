<?php

/* knp_menu_base.html.twig */
class __TwigTemplate_2aac76fa4498017588881f6d8a12b720b68a67a6d691c403f0dca2b4d1036aaf extends Twig_Template
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
        $__internal_2610e622406ae1a9d0858e0df81a065bed69bcce79b405553ce10e659adca832 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2610e622406ae1a9d0858e0df81a065bed69bcce79b405553ce10e659adca832->enter($__internal_2610e622406ae1a9d0858e0df81a065bed69bcce79b405553ce10e659adca832_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 1, $this->getSourceContext()); })()), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_2610e622406ae1a9d0858e0df81a065bed69bcce79b405553ce10e659adca832->leave($__internal_2610e622406ae1a9d0858e0df81a065bed69bcce79b405553ce10e659adca832_prof);

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
", "knp_menu_base.html.twig", "/home/joheras/corredoresporlarioja/corredoresporlarioja/vendor/knplabs/knp-menu/src/Knp/Menu/Resources/views/knp_menu_base.html.twig");
    }
}
