<?php

/* AppCorredoresRiojaBundle:Organizacion:nuevacarrera.html.twig */
class __TwigTemplate_5aa2135f386e1775d1fe2b89a5d00e25b130d66a71e3075f961fc58aa71066ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppCorredoresRiojaBundle:Organizacion:organizaciones1.html.twig", "AppCorredoresRiojaBundle:Organizacion:nuevacarrera.html.twig", 1);
        $this->blocks = array(
            'English' => array($this, 'block_English'),
            'Español' => array($this, 'block_Español'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppCorredoresRiojaBundle:Organizacion:organizaciones1.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e55240ead7f116fcc813144252b1c603ca20e84702ce943df78bfa38fa507c32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e55240ead7f116fcc813144252b1c603ca20e84702ce943df78bfa38fa507c32->enter($__internal_e55240ead7f116fcc813144252b1c603ca20e84702ce943df78bfa38fa507c32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppCorredoresRiojaBundle:Organizacion:nuevacarrera.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e55240ead7f116fcc813144252b1c603ca20e84702ce943df78bfa38fa507c32->leave($__internal_e55240ead7f116fcc813144252b1c603ca20e84702ce943df78bfa38fa507c32_prof);

    }

    // line 3
    public function block_English($context, array $blocks = array())
    {
        $__internal_9777225e6e31800fadce41b294cdb28f2650fd0f57a20f14633c20aa9d18de53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9777225e6e31800fadce41b294cdb28f2650fd0f57a20f14633c20aa9d18de53->enter($__internal_9777225e6e31800fadce41b294cdb28f2650fd0f57a20f14633c20aa9d18de53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "English"));

        echo "<a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("anadir_carrera.en");
        echo "\">";
        
        $__internal_9777225e6e31800fadce41b294cdb28f2650fd0f57a20f14633c20aa9d18de53->leave($__internal_9777225e6e31800fadce41b294cdb28f2650fd0f57a20f14633c20aa9d18de53_prof);

    }

    // line 4
    public function block_Español($context, array $blocks = array())
    {
        $__internal_e1ba11d9d312ee229d9793e2fa72d5bd67eae5c1cf4078818729b09113e423c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1ba11d9d312ee229d9793e2fa72d5bd67eae5c1cf4078818729b09113e423c7->enter($__internal_e1ba11d9d312ee229d9793e2fa72d5bd67eae5c1cf4078818729b09113e423c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Español"));

        echo "<a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("anadir_carrera.es");
        echo "\">";
        
        $__internal_e1ba11d9d312ee229d9793e2fa72d5bd67eae5c1cf4078818729b09113e423c7->leave($__internal_e1ba11d9d312ee229d9793e2fa72d5bd67eae5c1cf4078818729b09113e423c7_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5d346c3a02ab3ca0f25216d0b21723c233e54f97841677042478f25dd5c1edd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d346c3a02ab3ca0f25216d0b21723c233e54f97841677042478f25dd5c1edd6->enter($__internal_5d346c3a02ab3ca0f25216d0b21723c233e54f97841677042478f25dd5c1edd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/appcorredoresrioja/css/formulario.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\" type=\"text/css\">
";
        
        $__internal_5d346c3a02ab3ca0f25216d0b21723c233e54f97841677042478f25dd5c1edd6->leave($__internal_5d346c3a02ab3ca0f25216d0b21723c233e54f97841677042478f25dd5c1edd6_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_cae7e48b6bc8c3bc1422484e83833e7f47b56df995fd91535b7d51125f27f86f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cae7e48b6bc8c3bc1422484e83833e7f47b56df995fd91535b7d51125f27f86f->enter($__internal_cae7e48b6bc8c3bc1422484e83833e7f47b56df995fd91535b7d51125f27f86f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "        <div class=\"clear\"> </div>   
    <h1>Nueva Carrera</h1>
    <form action=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("anadir_carrera");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new Twig_Error_Runtime('Variable "formulario" does not exist.', 13, $this->getSourceContext()); })()), 'enctype');
        echo ">
    ";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new Twig_Error_Runtime('Variable "formulario" does not exist.', 14, $this->getSourceContext()); })()), 'widget');
        echo "
    <input class=\"button\" type=\"submit\" value=\"Crear carrera\"/>
   </form>
    <div class=\"clear\"> </div>   
";
        
        $__internal_cae7e48b6bc8c3bc1422484e83833e7f47b56df995fd91535b7d51125f27f86f->leave($__internal_cae7e48b6bc8c3bc1422484e83833e7f47b56df995fd91535b7d51125f27f86f_prof);

    }

    public function getTemplateName()
    {
        return "AppCorredoresRiojaBundle:Organizacion:nuevacarrera.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 14,  95 => 13,  91 => 11,  85 => 10,  76 => 7,  71 => 6,  65 => 5,  51 => 4,  37 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"AppCorredoresRiojaBundle:Organizacion:organizaciones1.html.twig\" %}

{% block English %}<a href=\"{{ path('anadir_carrera.en') }}\">{% endblock %}
{% block Español %}<a href=\"{{ path('anadir_carrera.es') }}\">{% endblock %}
{% block stylesheets %}
    {{ parent() }}
    <link href=\"{{ asset('bundles/appcorredoresrioja/css/formulario.css')}}\" rel=\"stylesheet\" media=\"all\" type=\"text/css\">
{% endblock %}

{% block body %}
        <div class=\"clear\"> </div>   
    <h1>Nueva Carrera</h1>
    <form action=\"{{ path('anadir_carrera') }}\" method=\"post\" {{ form_enctype(formulario) }}>
    {{ form_widget(formulario) }}
    <input class=\"button\" type=\"submit\" value=\"Crear carrera\"/>
   </form>
    <div class=\"clear\"> </div>   
{% endblock %} ", "AppCorredoresRiojaBundle:Organizacion:nuevacarrera.html.twig", "/home/joheras/Symfony/corredoresporlarioja/corredoresporlarioja/src/App/CorredoresRiojaBundle/Resources/views/Organizacion/nuevacarrera.html.twig");
    }
}
