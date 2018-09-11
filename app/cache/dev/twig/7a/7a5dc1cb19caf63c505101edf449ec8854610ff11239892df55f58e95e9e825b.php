<?php

/* AppCorredoresRiojaBundle:Organizacion:login.html.twig */
class __TwigTemplate_987e558e6c8f0cb5155e3b488c33c1939bc24f0e77d7424b8ed5a81e2bf4296f extends Twig_Template
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
        $__internal_95da290678700e6545855611e53db8ff0607e1f70466bfd4ed2b4117ed731b74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95da290678700e6545855611e53db8ff0607e1f70466bfd4ed2b4117ed731b74->enter($__internal_95da290678700e6545855611e53db8ff0607e1f70466bfd4ed2b4117ed731b74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppCorredoresRiojaBundle:Organizacion:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_95da290678700e6545855611e53db8ff0607e1f70466bfd4ed2b4117ed731b74->leave($__internal_95da290678700e6545855611e53db8ff0607e1f70466bfd4ed2b4117ed731b74_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c3727a7926f4ed00a328413227e4045d79627a540d276cf0e3486196480577c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3727a7926f4ed00a328413227e4045d79627a540d276cf0e3486196480577c7->enter($__internal_c3727a7926f4ed00a328413227e4045d79627a540d276cf0e3486196480577c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/appcorredoresrioja/css/entrada.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\" type=\"text/css\">
";
        
        $__internal_c3727a7926f4ed00a328413227e4045d79627a540d276cf0e3486196480577c7->leave($__internal_c3727a7926f4ed00a328413227e4045d79627a540d276cf0e3486196480577c7_prof);

    }

    // line 8
    public function block_English($context, array $blocks = array())
    {
        $__internal_96e79713c2a40888a8e5ff637396cc8324d31dc9f10abb4e29ad74530692f83b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96e79713c2a40888a8e5ff637396cc8324d31dc9f10abb4e29ad74530692f83b->enter($__internal_96e79713c2a40888a8e5ff637396cc8324d31dc9f10abb4e29ad74530692f83b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "English"));

        echo "<a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("organizacion_login.en");
        echo "\">";
        
        $__internal_96e79713c2a40888a8e5ff637396cc8324d31dc9f10abb4e29ad74530692f83b->leave($__internal_96e79713c2a40888a8e5ff637396cc8324d31dc9f10abb4e29ad74530692f83b_prof);

    }

    // line 9
    public function block_Español($context, array $blocks = array())
    {
        $__internal_62951c4433b36607b894a84bf92469634074de53bf87fdee5e4489d2d992fbfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62951c4433b36607b894a84bf92469634074de53bf87fdee5e4489d2d992fbfc->enter($__internal_62951c4433b36607b894a84bf92469634074de53bf87fdee5e4489d2d992fbfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Español"));

        echo "<a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("organizacion_login.es");
        echo "\">";
        
        $__internal_62951c4433b36607b894a84bf92469634074de53bf87fdee5e4489d2d992fbfc->leave($__internal_62951c4433b36607b894a84bf92469634074de53bf87fdee5e4489d2d992fbfc_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_48b9452162d405dfab47dbde364463fed546688f2c70ae6f9445b2e10d747ef6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48b9452162d405dfab47dbde364463fed546688f2c70ae6f9445b2e10d747ef6->enter($__internal_48b9452162d405dfab47dbde364463fed546688f2c70ae6f9445b2e10d747ef6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_48b9452162d405dfab47dbde364463fed546688f2c70ae6f9445b2e10d747ef6->leave($__internal_48b9452162d405dfab47dbde364463fed546688f2c70ae6f9445b2e10d747ef6_prof);

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
{% endblock %} ", "AppCorredoresRiojaBundle:Organizacion:login.html.twig", "/home/joheras/corredoresporlarioja/corredoresporlarioja/src/App/CorredoresRiojaBundle/Resources/views/Organizacion/login.html.twig");
    }
}
