<?php

/* AppCorredoresRiojaBundle:Organizacion:actualizacarrera.html.twig */
class __TwigTemplate_da6ba97058ce9654ab8e132fcbfd5640fe7dda91b2c40fad55d92ac55418a986 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppCorredoresRiojaBundle:Organizacion:organizaciones1.html.twig", "AppCorredoresRiojaBundle:Organizacion:actualizacarrera.html.twig", 1);
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
        $__internal_df92d78366a3ecbf5cee1c0ccff44f8640deb99c4c505c4e449e039ab6bae46b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df92d78366a3ecbf5cee1c0ccff44f8640deb99c4c505c4e449e039ab6bae46b->enter($__internal_df92d78366a3ecbf5cee1c0ccff44f8640deb99c4c505c4e449e039ab6bae46b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppCorredoresRiojaBundle:Organizacion:actualizacarrera.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df92d78366a3ecbf5cee1c0ccff44f8640deb99c4c505c4e449e039ab6bae46b->leave($__internal_df92d78366a3ecbf5cee1c0ccff44f8640deb99c4c505c4e449e039ab6bae46b_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e3186f64fdaf7df3fa1edeb4712705c1f5194732f29e246ea8c8b177ac474a5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3186f64fdaf7df3fa1edeb4712705c1f5194732f29e246ea8c8b177ac474a5a->enter($__internal_e3186f64fdaf7df3fa1edeb4712705c1f5194732f29e246ea8c8b177ac474a5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/appcorredoresrioja/css/formulario.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\" type=\"text/css\">
";
        
        $__internal_e3186f64fdaf7df3fa1edeb4712705c1f5194732f29e246ea8c8b177ac474a5a->leave($__internal_e3186f64fdaf7df3fa1edeb4712705c1f5194732f29e246ea8c8b177ac474a5a_prof);

    }

    // line 8
    public function block_English($context, array $blocks = array())
    {
        $__internal_674d2755e54ff92ca4b66aed96a6c461808ba27e1e99dc0bf34cef0c62bb9388 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_674d2755e54ff92ca4b66aed96a6c461808ba27e1e99dc0bf34cef0c62bb9388->enter($__internal_674d2755e54ff92ca4b66aed96a6c461808ba27e1e99dc0bf34cef0c62bb9388_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "English"));

        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modificar_carrera.en", array("slug" => (isset($context["slug"]) || array_key_exists("slug", $context) ? $context["slug"] : (function () { throw new Twig_Error_Runtime('Variable "slug" does not exist.', 8, $this->getSourceContext()); })()))), "html", null, true);
        echo "\">";
        
        $__internal_674d2755e54ff92ca4b66aed96a6c461808ba27e1e99dc0bf34cef0c62bb9388->leave($__internal_674d2755e54ff92ca4b66aed96a6c461808ba27e1e99dc0bf34cef0c62bb9388_prof);

    }

    // line 9
    public function block_Español($context, array $blocks = array())
    {
        $__internal_655804a02943ab0a5a1efdff6557ae9cd48d0d416f2a0bf8408f0071f9eb16cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_655804a02943ab0a5a1efdff6557ae9cd48d0d416f2a0bf8408f0071f9eb16cb->enter($__internal_655804a02943ab0a5a1efdff6557ae9cd48d0d416f2a0bf8408f0071f9eb16cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Español"));

        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modificar_carrera.es", array("slug" => (isset($context["slug"]) || array_key_exists("slug", $context) ? $context["slug"] : (function () { throw new Twig_Error_Runtime('Variable "slug" does not exist.', 9, $this->getSourceContext()); })()))), "html", null, true);
        echo "\">";
        
        $__internal_655804a02943ab0a5a1efdff6557ae9cd48d0d416f2a0bf8408f0071f9eb16cb->leave($__internal_655804a02943ab0a5a1efdff6557ae9cd48d0d416f2a0bf8408f0071f9eb16cb_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_5c738f04b1c653d9e4ec08ed768967e27da577512977315ae9d7c14e00ece223 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c738f04b1c653d9e4ec08ed768967e27da577512977315ae9d7c14e00ece223->enter($__internal_5c738f04b1c653d9e4ec08ed768967e27da577512977315ae9d7c14e00ece223_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    <div class=\"clear\"> </div>   
    <h1>Actualizar Carrera</h1>
    <form action=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modificar_carrera", array("slug" => (isset($context["slug"]) || array_key_exists("slug", $context) ? $context["slug"] : (function () { throw new Twig_Error_Runtime('Variable "slug" does not exist.', 14, $this->getSourceContext()); })()))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new Twig_Error_Runtime('Variable "formulario" does not exist.', 14, $this->getSourceContext()); })()), 'enctype');
        echo ">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new Twig_Error_Runtime('Variable "formulario" does not exist.', 15, $this->getSourceContext()); })()), 'widget');
        echo "
    <input class=\"button\" type=\"submit\" value=\"Actualizar carrera\"/>
   </form>
    <div class=\"clear\"> </div>   
";
        
        $__internal_5c738f04b1c653d9e4ec08ed768967e27da577512977315ae9d7c14e00ece223->leave($__internal_5c738f04b1c653d9e4ec08ed768967e27da577512977315ae9d7c14e00ece223_prof);

    }

    public function getTemplateName()
    {
        return "AppCorredoresRiojaBundle:Organizacion:actualizacarrera.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 15,  95 => 14,  91 => 12,  85 => 11,  71 => 9,  57 => 8,  48 => 5,  43 => 4,  37 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"AppCorredoresRiojaBundle:Organizacion:organizaciones1.html.twig\" %}

{% block stylesheets %}
    {{ parent() }}
    <link href=\"{{ asset('bundles/appcorredoresrioja/css/formulario.css')}}\" rel=\"stylesheet\" media=\"all\" type=\"text/css\">
{% endblock %}

{% block English %}<a href=\"{{ path('modificar_carrera.en',{'slug':slug}) }}\">{% endblock %}
{% block Español %}<a href=\"{{ path('modificar_carrera.es',{'slug':slug}) }}\">{% endblock %}

{% block body %}
    <div class=\"clear\"> </div>   
    <h1>Actualizar Carrera</h1>
    <form action=\"{{ path('modificar_carrera',{'slug':slug}) }}\" method=\"post\" {{ form_enctype(formulario) }}>
    {{ form_widget(formulario) }}
    <input class=\"button\" type=\"submit\" value=\"Actualizar carrera\"/>
   </form>
    <div class=\"clear\"> </div>   
{% endblock %} ", "AppCorredoresRiojaBundle:Organizacion:actualizacarrera.html.twig", "/home/joheras/Symfony/corredoresporlarioja/corredoresporlarioja/src/App/CorredoresRiojaBundle/Resources/views/Organizacion/actualizacarrera.html.twig");
    }
}
