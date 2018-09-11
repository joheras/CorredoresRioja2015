<?php

/* AppCorredoresRiojaBundle:Organizacion:nuevacarrera.html.twig */
class __TwigTemplate_767f93620f1b1092df285a467973bbd3a4b166e025b525ca17ee04dc122a8d52 extends Twig_Template
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
        $__internal_c37d317785396672b2efc688badb649a4187486600880e0a3c2d864d43112c8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c37d317785396672b2efc688badb649a4187486600880e0a3c2d864d43112c8d->enter($__internal_c37d317785396672b2efc688badb649a4187486600880e0a3c2d864d43112c8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppCorredoresRiojaBundle:Organizacion:nuevacarrera.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c37d317785396672b2efc688badb649a4187486600880e0a3c2d864d43112c8d->leave($__internal_c37d317785396672b2efc688badb649a4187486600880e0a3c2d864d43112c8d_prof);

    }

    // line 3
    public function block_English($context, array $blocks = array())
    {
        $__internal_aa1f5e889f31b5fea4d284db78bfd6d69ccd50be8efd7561aae643f76f98e8ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa1f5e889f31b5fea4d284db78bfd6d69ccd50be8efd7561aae643f76f98e8ec->enter($__internal_aa1f5e889f31b5fea4d284db78bfd6d69ccd50be8efd7561aae643f76f98e8ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "English"));

        echo "<a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("anadir_carrera.en");
        echo "\">";
        
        $__internal_aa1f5e889f31b5fea4d284db78bfd6d69ccd50be8efd7561aae643f76f98e8ec->leave($__internal_aa1f5e889f31b5fea4d284db78bfd6d69ccd50be8efd7561aae643f76f98e8ec_prof);

    }

    // line 4
    public function block_Español($context, array $blocks = array())
    {
        $__internal_c9e1e5370dbc500d1d04537f3315ef61f8fd5e001825893c17744d2f34067aa3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9e1e5370dbc500d1d04537f3315ef61f8fd5e001825893c17744d2f34067aa3->enter($__internal_c9e1e5370dbc500d1d04537f3315ef61f8fd5e001825893c17744d2f34067aa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Español"));

        echo "<a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("anadir_carrera.es");
        echo "\">";
        
        $__internal_c9e1e5370dbc500d1d04537f3315ef61f8fd5e001825893c17744d2f34067aa3->leave($__internal_c9e1e5370dbc500d1d04537f3315ef61f8fd5e001825893c17744d2f34067aa3_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7b451fe0e39f1272bef012573f46e1ffcb6d1cd9209296ad7dd0d6fa9d73d3b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b451fe0e39f1272bef012573f46e1ffcb6d1cd9209296ad7dd0d6fa9d73d3b6->enter($__internal_7b451fe0e39f1272bef012573f46e1ffcb6d1cd9209296ad7dd0d6fa9d73d3b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/appcorredoresrioja/css/formulario.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\" type=\"text/css\">
";
        
        $__internal_7b451fe0e39f1272bef012573f46e1ffcb6d1cd9209296ad7dd0d6fa9d73d3b6->leave($__internal_7b451fe0e39f1272bef012573f46e1ffcb6d1cd9209296ad7dd0d6fa9d73d3b6_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_9d8cb755f21be817eb205a953824449afab0db6bd2d866d501fa4b78eca649e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d8cb755f21be817eb205a953824449afab0db6bd2d866d501fa4b78eca649e9->enter($__internal_9d8cb755f21be817eb205a953824449afab0db6bd2d866d501fa4b78eca649e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9d8cb755f21be817eb205a953824449afab0db6bd2d866d501fa4b78eca649e9->leave($__internal_9d8cb755f21be817eb205a953824449afab0db6bd2d866d501fa4b78eca649e9_prof);

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
{% endblock %} ", "AppCorredoresRiojaBundle:Organizacion:nuevacarrera.html.twig", "/home/joheras/corredoresporlarioja/corredoresporlarioja/src/App/CorredoresRiojaBundle/Resources/views/Organizacion/nuevacarrera.html.twig");
    }
}
