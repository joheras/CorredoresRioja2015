<?php

/* AppCorredoresRiojaBundle:Organizacion:registro.html.twig */
class __TwigTemplate_7c7741699dfa9d3a8f0885e538b6ec96a055e953795dc6f21b8c8d2bd856866b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppCorredoresRiojaBundle:Organizacion:organizaciones1.html.twig", "AppCorredoresRiojaBundle:Organizacion:registro.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'English' => array($this, 'block_English'),
            'Español' => array($this, 'block_Español'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppCorredoresRiojaBundle:Organizacion:organizaciones1.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f7b209545c1dc87987eca07b57c6569c63121f8be892078eb917bf8b059a19f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7b209545c1dc87987eca07b57c6569c63121f8be892078eb917bf8b059a19f8->enter($__internal_f7b209545c1dc87987eca07b57c6569c63121f8be892078eb917bf8b059a19f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppCorredoresRiojaBundle:Organizacion:registro.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7b209545c1dc87987eca07b57c6569c63121f8be892078eb917bf8b059a19f8->leave($__internal_f7b209545c1dc87987eca07b57c6569c63121f8be892078eb917bf8b059a19f8_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8bdafe2381157c18c749f1a688b504541a5684ee1e4515e01c9f9c8171a814ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bdafe2381157c18c749f1a688b504541a5684ee1e4515e01c9f9c8171a814ea->enter($__internal_8bdafe2381157c18c749f1a688b504541a5684ee1e4515e01c9f9c8171a814ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/appcorredoresrioja/css/formulario.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\" type=\"text/css\">
";
        
        $__internal_8bdafe2381157c18c749f1a688b504541a5684ee1e4515e01c9f9c8171a814ea->leave($__internal_8bdafe2381157c18c749f1a688b504541a5684ee1e4515e01c9f9c8171a814ea_prof);

    }

    // line 7
    public function block_English($context, array $blocks = array())
    {
        $__internal_4ea6d5cd5ea94ed4eb7ac9aaf1ffacacbf1c2a9fe47377b5d5cd75d2d2a7d335 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ea6d5cd5ea94ed4eb7ac9aaf1ffacacbf1c2a9fe47377b5d5cd75d2d2a7d335->enter($__internal_4ea6d5cd5ea94ed4eb7ac9aaf1ffacacbf1c2a9fe47377b5d5cd75d2d2a7d335_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "English"));

        echo "<a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("organizacion_registro.en");
        echo "\">";
        
        $__internal_4ea6d5cd5ea94ed4eb7ac9aaf1ffacacbf1c2a9fe47377b5d5cd75d2d2a7d335->leave($__internal_4ea6d5cd5ea94ed4eb7ac9aaf1ffacacbf1c2a9fe47377b5d5cd75d2d2a7d335_prof);

    }

    // line 8
    public function block_Español($context, array $blocks = array())
    {
        $__internal_c8b99f57a65967c5f300bffbc9c153a35028a72855fa2b0cd7f8cb6575f912b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8b99f57a65967c5f300bffbc9c153a35028a72855fa2b0cd7f8cb6575f912b9->enter($__internal_c8b99f57a65967c5f300bffbc9c153a35028a72855fa2b0cd7f8cb6575f912b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Español"));

        echo "<a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("organizacion_registro.es");
        echo "\">";
        
        $__internal_c8b99f57a65967c5f300bffbc9c153a35028a72855fa2b0cd7f8cb6575f912b9->leave($__internal_c8b99f57a65967c5f300bffbc9c153a35028a72855fa2b0cd7f8cb6575f912b9_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_5e7cf023d79ce95ec2f821554a5094ac48822b99bf04517c90d406572584017c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e7cf023d79ce95ec2f821554a5094ac48822b99bf04517c90d406572584017c->enter($__internal_5e7cf023d79ce95ec2f821554a5094ac48822b99bf04517c90d406572584017c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "        <div class=\"clear\"> </div>   
    <h1>Nueva Organización</h1>
    <form action=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("organizacion_registro");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new Twig_Error_Runtime('Variable "formulario" does not exist.', 13, $this->getSourceContext()); })()), 'enctype');
        echo ">
    ";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new Twig_Error_Runtime('Variable "formulario" does not exist.', 14, $this->getSourceContext()); })()), 'widget');
        echo "
    <input class=\"button\" type=\"submit\" value=\"Registro\"/>
   </form>
    <div class=\"clear\"> </div>   
";
        
        $__internal_5e7cf023d79ce95ec2f821554a5094ac48822b99bf04517c90d406572584017c->leave($__internal_5e7cf023d79ce95ec2f821554a5094ac48822b99bf04517c90d406572584017c_prof);

    }

    public function getTemplateName()
    {
        return "AppCorredoresRiojaBundle:Organizacion:registro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 14,  95 => 13,  91 => 11,  85 => 10,  71 => 8,  57 => 7,  48 => 5,  43 => 4,  37 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"AppCorredoresRiojaBundle:Organizacion:organizaciones1.html.twig\" %}

{% block stylesheets %}
    {{ parent() }}
    <link href=\"{{ asset('bundles/appcorredoresrioja/css/formulario.css')}}\" rel=\"stylesheet\" media=\"all\" type=\"text/css\">
{% endblock %}
{% block English %}<a href=\"{{ path('organizacion_registro.en') }}\">{% endblock %}
{% block Español %}<a href=\"{{ path('organizacion_registro.es') }}\">{% endblock %}

{% block body %}
        <div class=\"clear\"> </div>   
    <h1>Nueva Organización</h1>
    <form action=\"{{ path('organizacion_registro') }}\" method=\"post\" {{ form_enctype(formulario) }}>
    {{ form_widget(formulario) }}
    <input class=\"button\" type=\"submit\" value=\"Registro\"/>
   </form>
    <div class=\"clear\"> </div>   
{% endblock %} ", "AppCorredoresRiojaBundle:Organizacion:registro.html.twig", "/home/joheras/corredoresporlarioja/corredoresporlarioja/src/App/CorredoresRiojaBundle/Resources/views/Organizacion/registro.html.twig");
    }
}
