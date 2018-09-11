<?php

/* AppCorredoresRiojaBundle:Default:login.html.twig */
class __TwigTemplate_dcabe77dac6b4ffee6031e16af10919383db7cd204e120524e37f81d51bf3172 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppCorredoresRiojaBundle:Default:corredores1.html.twig", "AppCorredoresRiojaBundle:Default:login.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'English' => array($this, 'block_English'),
            'Español' => array($this, 'block_Español'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppCorredoresRiojaBundle:Default:corredores1.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f975291b30b46916ef0c212ef6dc713249d59e3e714d163b508575b2e7903da9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f975291b30b46916ef0c212ef6dc713249d59e3e714d163b508575b2e7903da9->enter($__internal_f975291b30b46916ef0c212ef6dc713249d59e3e714d163b508575b2e7903da9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppCorredoresRiojaBundle:Default:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f975291b30b46916ef0c212ef6dc713249d59e3e714d163b508575b2e7903da9->leave($__internal_f975291b30b46916ef0c212ef6dc713249d59e3e714d163b508575b2e7903da9_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_089783ae8e866f59a7effe1ea540f410c523c127fbab2566f48631f3f56cc557 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_089783ae8e866f59a7effe1ea540f410c523c127fbab2566f48631f3f56cc557->enter($__internal_089783ae8e866f59a7effe1ea540f410c523c127fbab2566f48631f3f56cc557_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/appcorredoresrioja/css/entrada.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\" type=\"text/css\">
";
        
        $__internal_089783ae8e866f59a7effe1ea540f410c523c127fbab2566f48631f3f56cc557->leave($__internal_089783ae8e866f59a7effe1ea540f410c523c127fbab2566f48631f3f56cc557_prof);

    }

    // line 8
    public function block_English($context, array $blocks = array())
    {
        $__internal_525a4d9c1280d03eb74d3a44e93341f331b7b481ec2325967115c76b65942c05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_525a4d9c1280d03eb74d3a44e93341f331b7b481ec2325967115c76b65942c05->enter($__internal_525a4d9c1280d03eb74d3a44e93341f331b7b481ec2325967115c76b65942c05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "English"));

        echo "<a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("corredor_login.en");
        echo "\">";
        
        $__internal_525a4d9c1280d03eb74d3a44e93341f331b7b481ec2325967115c76b65942c05->leave($__internal_525a4d9c1280d03eb74d3a44e93341f331b7b481ec2325967115c76b65942c05_prof);

    }

    // line 9
    public function block_Español($context, array $blocks = array())
    {
        $__internal_6f5c8775609f1cc9ff53e5a47ad596f44752f15778658d9cb70f4a4cdd13e845 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f5c8775609f1cc9ff53e5a47ad596f44752f15778658d9cb70f4a4cdd13e845->enter($__internal_6f5c8775609f1cc9ff53e5a47ad596f44752f15778658d9cb70f4a4cdd13e845_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Español"));

        echo "<a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("corredor_login.es");
        echo "\">";
        
        $__internal_6f5c8775609f1cc9ff53e5a47ad596f44752f15778658d9cb70f4a4cdd13e845->leave($__internal_6f5c8775609f1cc9ff53e5a47ad596f44752f15778658d9cb70f4a4cdd13e845_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d4edb1a4a26f2f6cf8de2a3ef76f65228621fb9fa99e715b03655412aeff24da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4edb1a4a26f2f6cf8de2a3ef76f65228621fb9fa99e715b03655412aeff24da->enter($__internal_d4edb1a4a26f2f6cf8de2a3ef76f65228621fb9fa99e715b03655412aeff24da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    <div class=\"clear\"> </div>   
    
    <h1>Acceso de corredores registrados</h1>
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("corredor_login_check");
        echo "\" method=\"post\" class=\"izda\">
        <label for=\"username\">Username (DNI):</label>
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
            <p style=\"font-weight:bold; margin-top:5px\">Nuevo Corredor.</p>
            <p style=\"margin-top:5px;line-height:1.4em;\">Para poder inscribirte en las carreras es necesario registrarse. </p>
        </div>

        <div  class=\"registrob\">
            <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("registro");
        echo "\">REGISTRESE</a>
        </div> 
    </div>\t     
    <div class=\"clear\"> </div>   
";
        
        $__internal_d4edb1a4a26f2f6cf8de2a3ef76f65228621fb9fa99e715b03655412aeff24da->leave($__internal_d4edb1a4a26f2f6cf8de2a3ef76f65228621fb9fa99e715b03655412aeff24da_prof);

    }

    public function getTemplateName()
    {
        return "AppCorredoresRiojaBundle:Default:login.html.twig";
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
        return new Twig_Source("{% extends \"AppCorredoresRiojaBundle:Default:corredores1.html.twig\" %}

{% block stylesheets %}
    {{ parent() }}
    <link href=\"{{ asset('bundles/appcorredoresrioja/css/entrada.css')}}\" rel=\"stylesheet\" media=\"all\" type=\"text/css\">
{% endblock %}

{% block English %}<a href=\"{{ path('corredor_login.en') }}\">{% endblock %}
{% block Español %}<a href=\"{{ path('corredor_login.es') }}\">{% endblock %}

{% block body %}
    <div class=\"clear\"> </div>   
    
    <h1>Acceso de corredores registrados</h1>
    {% if error %}
        <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
    {% endif %}

     
    <form action=\"{{ path('corredor_login_check') }}\" method=\"post\" class=\"izda\">
        <label for=\"username\">Username (DNI):</label>
        <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" /> <br/>

        <label for=\"password\">Password:</label>
        <input type=\"password\" id=\"password\" name=\"_password\" /><br/>

        <button type=\"submit\">Login</button>
    </form>


    <div class=\"nuevo izda\">
        <div>
            <p style=\"font-weight:bold; margin-top:5px\">Nuevo Corredor.</p>
            <p style=\"margin-top:5px;line-height:1.4em;\">Para poder inscribirte en las carreras es necesario registrarse. </p>
        </div>

        <div  class=\"registrob\">
            <a href=\"{{ path('registro') }}\">REGISTRESE</a>
        </div> 
    </div>\t     
    <div class=\"clear\"> </div>   
{% endblock %} ", "AppCorredoresRiojaBundle:Default:login.html.twig", "/home/joheras/corredoresporlarioja/corredoresporlarioja/src/App/CorredoresRiojaBundle/Resources/views/Default/login.html.twig");
    }
}
