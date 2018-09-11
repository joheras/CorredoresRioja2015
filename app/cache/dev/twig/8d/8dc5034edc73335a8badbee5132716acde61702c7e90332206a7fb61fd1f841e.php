<?php

/* AppCorredoresRiojaBundle:Default:corredores.html.twig */
class __TwigTemplate_469653a1e69dcb9cd913ef02870a6217ac7a80859a0dbf206678934f46f3c1fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppCorredoresRiojaBundle:Default:base.html.twig", "AppCorredoresRiojaBundle:Default:corredores.html.twig", 1);
        $this->blocks = array(
            'pestanias' => array($this, 'block_pestanias'),
            'menu' => array($this, 'block_menu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppCorredoresRiojaBundle:Default:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7665701691a2d56d4ffe8c961bf42f886dcaff0731a05b7c84c6214a0fe3e4be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7665701691a2d56d4ffe8c961bf42f886dcaff0731a05b7c84c6214a0fe3e4be->enter($__internal_7665701691a2d56d4ffe8c961bf42f886dcaff0731a05b7c84c6214a0fe3e4be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppCorredoresRiojaBundle:Default:corredores.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7665701691a2d56d4ffe8c961bf42f886dcaff0731a05b7c84c6214a0fe3e4be->leave($__internal_7665701691a2d56d4ffe8c961bf42f886dcaff0731a05b7c84c6214a0fe3e4be_prof);

    }

    // line 3
    public function block_pestanias($context, array $blocks = array())
    {
        $__internal_1b5c6ed69c391faa74219c87d6d3a4e95c7d94c41283d27a381f1fbca9e876ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b5c6ed69c391faa74219c87d6d3a4e95c7d94c41283d27a381f1fbca9e876ff->enter($__internal_1b5c6ed69c391faa74219c87d6d3a4e95c7d94c41283d27a381f1fbca9e876ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pestanias"));

        // line 4
        echo "    <div class=\"barra_menus\">\t
      <div class=\"pestanias\">
        <div class=\"grupoPestanias\">
            <div class=\"pestaniaSel\"><a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("portada");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("zonacorredores"), "html", null, true);
        echo "</a></div>
\t  <div class=\"pestaniaNoSel\"><a href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("organizacion_portada");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("zonaorganizadores"), "html", null, true);
        echo "</a></div>
          <div class=\"pestaniaNoSel\"><a href=\"../../admin\">Intranet</a></div>
        </div>
      </div>
";
        
        $__internal_1b5c6ed69c391faa74219c87d6d3a4e95c7d94c41283d27a381f1fbca9e876ff->leave($__internal_1b5c6ed69c391faa74219c87d6d3a4e95c7d94c41283d27a381f1fbca9e876ff_prof);

    }

    // line 14
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4e2282ebf220bdede023fbdc71477529098b5b42a35754e8bda19c675244c1a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e2282ebf220bdede023fbdc71477529098b5b42a35754e8bda19c675244c1a2->enter($__internal_4e2282ebf220bdede023fbdc71477529098b5b42a35754e8bda19c675244c1a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 15
        echo " <div id=\"menu\" >
        <ul>
          <li>
            <a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("portada");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("portada"), "html", null, true);
        echo "<br/></a>
          </li>
          <li>
            <a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_carreras");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("carreras"), "html", null, true);
        echo "<br/></a>
          </li>
          <li>
        <a href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_miscarreras");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("miscarreras"), "html", null, true);
        echo "<br/></a>
          </li>
          ";
        // line 26
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 26, $this->getSourceContext()); })()), "user", array()) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_CORREDOR"))) {
            echo " 
              <li><a href=\"";
            // line 27
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("corredor_perfil");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("perfil"), "html", null, true);
            echo "<br/></a></li>
          ";
        }
        // line 29
        echo "          <li>
            ";
        // line 30
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 30, $this->getSourceContext()); })()), "user", array()) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_CORREDOR"))) {
            echo "  
            <a href=\"";
            // line 31
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("corredor_logout");
            echo "\">Logout<br/></a>
            ";
        } else {
            // line 33
            echo "            <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("corredor_login");
            echo "\">Login<br/></a>
            ";
        }
        // line 35
        echo "          </li>
        </ul>
        <div style=\"clear: left;\"></div>
      </div>
    </div>     
";
        
        $__internal_4e2282ebf220bdede023fbdc71477529098b5b42a35754e8bda19c675244c1a2->leave($__internal_4e2282ebf220bdede023fbdc71477529098b5b42a35754e8bda19c675244c1a2_prof);

    }

    public function getTemplateName()
    {
        return "AppCorredoresRiojaBundle:Default:corredores.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 35,  123 => 33,  118 => 31,  114 => 30,  111 => 29,  104 => 27,  100 => 26,  93 => 24,  85 => 21,  77 => 18,  72 => 15,  66 => 14,  52 => 8,  46 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"AppCorredoresRiojaBundle:Default:base.html.twig\" %}

{% block pestanias %}
    <div class=\"barra_menus\">\t
      <div class=\"pestanias\">
        <div class=\"grupoPestanias\">
            <div class=\"pestaniaSel\"><a href=\"{{path('portada')}}\">{{ 'zonacorredores' | trans }}</a></div>
\t  <div class=\"pestaniaNoSel\"><a href=\"{{ path('organizacion_portada') }}\">{{ 'zonaorganizadores' | trans }}</a></div>
          <div class=\"pestaniaNoSel\"><a href=\"../../admin\">Intranet</a></div>
        </div>
      </div>
{% endblock %}

{% block menu %}
 <div id=\"menu\" >
        <ul>
          <li>
            <a href=\"{{ path('portada') }}\">{{ 'portada' | trans }}<br/></a>
          </li>
          <li>
            <a href=\"{{ path('show_carreras') }}\">{{ 'carreras' | trans }}<br/></a>
          </li>
          <li>
        <a href=\"{{ path('show_miscarreras') }}\">{{ 'miscarreras' | trans }}<br/></a>
          </li>
          {% if app.user and is_granted('ROLE_CORREDOR') %} 
              <li><a href=\"{{ path('corredor_perfil') }}\">{{ 'perfil' | trans }}<br/></a></li>
          {% endif %}
          <li>
            {% if app.user and is_granted('ROLE_CORREDOR') %}  
            <a href=\"{{ path('corredor_logout') }}\">Logout<br/></a>
            {% else %}
            <a href=\"{{ path('corredor_login') }}\">Login<br/></a>
            {% endif %}
          </li>
        </ul>
        <div style=\"clear: left;\"></div>
      </div>
    </div>     
{% endblock %}    ", "AppCorredoresRiojaBundle:Default:corredores.html.twig", "/home/joheras/corredoresporlarioja/corredoresporlarioja/src/App/CorredoresRiojaBundle/Resources/views/Default/corredores.html.twig");
    }
}
