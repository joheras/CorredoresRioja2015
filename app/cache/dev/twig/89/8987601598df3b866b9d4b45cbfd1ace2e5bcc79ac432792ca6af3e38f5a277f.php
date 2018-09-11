<?php

/* AppCorredoresRiojaBundle:Organizacion:login.html.twig */
class __TwigTemplate_55dd154ead94dd344021ef2d4346f74778b9d6bf963182f674808e2e8293a982 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppCorredoresRiojaBundle:Organizacion:organizaciones1.html.twig", "AppCorredoresRiojaBundle:Organizacion:login.html.twig", 1);
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
        $__internal_ea809b53bcd73690c4a724e98240132d6cde72db64d03975771181b5c50ada40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea809b53bcd73690c4a724e98240132d6cde72db64d03975771181b5c50ada40->enter($__internal_ea809b53bcd73690c4a724e98240132d6cde72db64d03975771181b5c50ada40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppCorredoresRiojaBundle:Organizacion:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea809b53bcd73690c4a724e98240132d6cde72db64d03975771181b5c50ada40->leave($__internal_ea809b53bcd73690c4a724e98240132d6cde72db64d03975771181b5c50ada40_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_24dc8a752d514e6d4367146853616ce9d27489f4301da80a50c9aa908fd6a471 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24dc8a752d514e6d4367146853616ce9d27489f4301da80a50c9aa908fd6a471->enter($__internal_24dc8a752d514e6d4367146853616ce9d27489f4301da80a50c9aa908fd6a471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/appcorredoresrioja/css/entrada.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\" type=\"text/css\">
";
        
        $__internal_24dc8a752d514e6d4367146853616ce9d27489f4301da80a50c9aa908fd6a471->leave($__internal_24dc8a752d514e6d4367146853616ce9d27489f4301da80a50c9aa908fd6a471_prof);

    }

    // line 8
    public function block_English($context, array $blocks = array())
    {
        $__internal_053e3aa1fa0f38459e346514bf98625306adebccd372f98e24b944db2cbe946b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_053e3aa1fa0f38459e346514bf98625306adebccd372f98e24b944db2cbe946b->enter($__internal_053e3aa1fa0f38459e346514bf98625306adebccd372f98e24b944db2cbe946b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "English"));

        echo "<a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("organizacion_login.en");
        echo "\">";
        
        $__internal_053e3aa1fa0f38459e346514bf98625306adebccd372f98e24b944db2cbe946b->leave($__internal_053e3aa1fa0f38459e346514bf98625306adebccd372f98e24b944db2cbe946b_prof);

    }

    // line 9
    public function block_Español($context, array $blocks = array())
    {
        $__internal_89e69daea02358a3125528123b9fba338ff30d40b836f09682045baae93c1f0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89e69daea02358a3125528123b9fba338ff30d40b836f09682045baae93c1f0e->enter($__internal_89e69daea02358a3125528123b9fba338ff30d40b836f09682045baae93c1f0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Español"));

        echo "<a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("organizacion_login.es");
        echo "\">";
        
        $__internal_89e69daea02358a3125528123b9fba338ff30d40b836f09682045baae93c1f0e->leave($__internal_89e69daea02358a3125528123b9fba338ff30d40b836f09682045baae93c1f0e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_3e0582664048a591c836b8b6e546fa4e87266a28eb36e9e7f3122d0d41d3329b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e0582664048a591c836b8b6e546fa4e87266a28eb36e9e7f3122d0d41d3329b->enter($__internal_3e0582664048a591c836b8b6e546fa4e87266a28eb36e9e7f3122d0d41d3329b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    <div class=\"clear\"> </div>   
    
    <h1>Acceso de organizaciones registradas</h1>
    ";
        // line 15
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 15, $this->getSourceContext()); })())) {
            // line 16
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 16, $this->getSourceContext()); })()), "messageKey", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 16, $this->getSourceContext()); })()), "messageData", array()), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 18
        echo "
     
    <form action=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("organizacion_login_check");
        echo "\" method=\"post\" class=\"izda\">
        <label for=\"username\">Username (Email):</label>
        <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 22, $this->getSourceContext()); })()), "html", null, true);
        echo "\" /> <br/>

        <label for=\"password\">Password:</label>
        <input type=\"password\" id=\"password\" name=\"_password\" /><br/>

        <button type=\"submit\">Login</button>
    </form>


    <div class=\"nuevo izda\">
        <div>
            <p style=\"font-weight:bold; margin-top:5px\">Nueva Organización.</p>
            <p style=\"margin-top:5px;line-height:1.4em;\">Para poder crear carreras es necesario registrarse. </p>
        </div>

        <div  class=\"registrob\">
            <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("organizacion_registro");
        echo "\">REGISTRESE</a>
        </div> 
    </div>\t     
    <div class=\"clear\"> </div>   
";
        
        $__internal_3e0582664048a591c836b8b6e546fa4e87266a28eb36e9e7f3122d0d41d3329b->leave($__internal_3e0582664048a591c836b8b6e546fa4e87266a28eb36e9e7f3122d0d41d3329b_prof);

    }

    public function getTemplateName()
    {
        return "AppCorredoresRiojaBundle:Organizacion:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 38,  113 => 22,  108 => 20,  104 => 18,  98 => 16,  96 => 15,  91 => 12,  85 => 11,  71 => 9,  57 => 8,  48 => 5,  43 => 4,  37 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"AppCorredoresRiojaBundle:Organizacion:organizaciones1.html.twig\" %}

{% block stylesheets %}
    {{ parent() }}
    <link href=\"{{ asset('bundles/appcorredoresrioja/css/entrada.css')}}\" rel=\"stylesheet\" media=\"all\" type=\"text/css\">
{% endblock %}

{% block English %}<a href=\"{{ path('organizacion_login.en') }}\">{% endblock %}
{% block Español %}<a href=\"{{ path('organizacion_login.es') }}\">{% endblock %}

{% block body %}
    <div class=\"clear\"> </div>   
    
    <h1>Acceso de organizaciones registradas</h1>
    {% if error %}
        <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
    {% endif %}

     
    <form action=\"{{ path('organizacion_login_check') }}\" method=\"post\" class=\"izda\">
        <label for=\"username\">Username (Email):</label>
        <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" /> <br/>

        <label for=\"password\">Password:</label>
        <input type=\"password\" id=\"password\" name=\"_password\" /><br/>

        <button type=\"submit\">Login</button>
    </form>


    <div class=\"nuevo izda\">
        <div>
            <p style=\"font-weight:bold; margin-top:5px\">Nueva Organización.</p>
            <p style=\"margin-top:5px;line-height:1.4em;\">Para poder crear carreras es necesario registrarse. </p>
        </div>

        <div  class=\"registrob\">
            <a href=\"{{ path('organizacion_registro') }}\">REGISTRESE</a>
        </div> 
    </div>\t     
    <div class=\"clear\"> </div>   
{% endblock %} ", "AppCorredoresRiojaBundle:Organizacion:login.html.twig", "/home/joheras/Symfony/corredoresporlarioja/corredoresporlarioja/src/App/CorredoresRiojaBundle/Resources/views/Organizacion/login.html.twig");
    }
}
