<?php

/* AppCorredoresRiojaBundle:Organizacion:organizaciones1.html.twig */
class __TwigTemplate_9d243915a1186a4d2f3bea9d04f2eacf0127571aa5172802a688467851753d78 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppCorredoresRiojaBundle:Default:base.html.twig", "AppCorredoresRiojaBundle:Organizacion:organizaciones1.html.twig", 1);
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
        $__internal_a1a036754ea1031727873ae01b62e7859f74fa6944d4504e3700c8826f0a9541 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1a036754ea1031727873ae01b62e7859f74fa6944d4504e3700c8826f0a9541->enter($__internal_a1a036754ea1031727873ae01b62e7859f74fa6944d4504e3700c8826f0a9541_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppCorredoresRiojaBundle:Organizacion:organizaciones1.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1a036754ea1031727873ae01b62e7859f74fa6944d4504e3700c8826f0a9541->leave($__internal_a1a036754ea1031727873ae01b62e7859f74fa6944d4504e3700c8826f0a9541_prof);

    }

    // line 3
    public function block_pestanias($context, array $blocks = array())
    {
        $__internal_b01109a436775de86d8218a536aa354ed6fe385091e5d80cbb687ce3d3c186c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b01109a436775de86d8218a536aa354ed6fe385091e5d80cbb687ce3d3c186c0->enter($__internal_b01109a436775de86d8218a536aa354ed6fe385091e5d80cbb687ce3d3c186c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pestanias"));

        // line 4
        echo "    <div class=\"barra_menus\">\t
      <div class=\"pestanias\">
        <div class=\"grupoPestanias\">
            <div class=\"pestaniaNoSel\"><a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("portada");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("zonacorredores"), "html", null, true);
        echo "</a></div>
\t  <div class=\"pestaniaSel\"><a href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("organizacion_portada");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("zonaorganizadores"), "html", null, true);
        echo "</a></div>
          <div class=\"pestaniaNoSel\"><a href=\"../../admin\">Intranet</a></div>
        </div>
      </div>
";
        
        $__internal_b01109a436775de86d8218a536aa354ed6fe385091e5d80cbb687ce3d3c186c0->leave($__internal_b01109a436775de86d8218a536aa354ed6fe385091e5d80cbb687ce3d3c186c0_prof);

    }

    // line 14
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d89c227e4226e7365c2d8a55688cb2de2c4121b348bb061ddc57dd058cf9402c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d89c227e4226e7365c2d8a55688cb2de2c4121b348bb061ddc57dd058cf9402c->enter($__internal_d89c227e4226e7365c2d8a55688cb2de2c4121b348bb061ddc57dd058cf9402c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 15
        echo " <div id=\"menu\" >
        <ul>
          <li>
            <a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("organizacion_portada");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("portada"), "html", null, true);
        echo "<br/></a>
          </li>
          <li>
            <a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("organizacion_perfil");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("perfil"), "html", null, true);
        echo "<br/></a>
          </li>
          <li>
        <a href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("anadir_carrera");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("anadircarrera"), "html", null, true);
        echo "<br/></a>
          </li>
          <li>
        <a href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modificarcarreras");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("modificarcarrera"), "html", null, true);
        echo "<br/></a>
          </li>
           <!--<li>
        <a href=\"";
        // line 30
        echo "\">Actualizar Clasificaciones<br/></a>
          </li>-->
          <li>
          ";
        // line 33
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 33, $this->getSourceContext()); })()), "user", array()) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ORGANIZADOR"))) {
            echo "  
            <a href=\"";
            // line 34
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("organizacion_logout");
            echo "\">Logout<br/></a>
            ";
        } else {
            // line 36
            echo "            <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("organizacion_login");
            echo "\">Login<br/></a>
            ";
        }
        // line 38
        echo "          </li>
        </ul>
        <div style=\"clear: left;\"></div>
      </div>
    </div>     
";
        
        $__internal_d89c227e4226e7365c2d8a55688cb2de2c4121b348bb061ddc57dd058cf9402c->leave($__internal_d89c227e4226e7365c2d8a55688cb2de2c4121b348bb061ddc57dd058cf9402c_prof);

    }

    public function getTemplateName()
    {
        return "AppCorredoresRiojaBundle:Organizacion:organizaciones1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 38,  123 => 36,  118 => 34,  114 => 33,  109 => 30,  101 => 27,  93 => 24,  85 => 21,  77 => 18,  72 => 15,  66 => 14,  52 => 8,  46 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"AppCorredoresRiojaBundle:Default:base.html.twig\" %}

{% block pestanias %}
    <div class=\"barra_menus\">\t
      <div class=\"pestanias\">
        <div class=\"grupoPestanias\">
            <div class=\"pestaniaNoSel\"><a href=\"{{path('portada')}}\">{{ 'zonacorredores' | trans }}</a></div>
\t  <div class=\"pestaniaSel\"><a href=\"{{ path('organizacion_portada') }}\">{{ 'zonaorganizadores' | trans }}</a></div>
          <div class=\"pestaniaNoSel\"><a href=\"../../admin\">Intranet</a></div>
        </div>
      </div>
{% endblock %}

{% block menu %}
 <div id=\"menu\" >
        <ul>
          <li>
            <a href=\"{{ path('organizacion_portada') }}\">{{ 'portada' | trans }}<br/></a>
          </li>
          <li>
            <a href=\"{{ path('organizacion_perfil') }}\">{{ 'perfil' | trans }}<br/></a>
          </li>
          <li>
        <a href=\"{{ path('anadir_carrera') }}\">{{ 'anadircarrera' | trans }}<br/></a>
          </li>
          <li>
        <a href=\"{{ path('modificarcarreras') }}\">{{ 'modificarcarrera' | trans }}<br/></a>
          </li>
           <!--<li>
        <a href=\"{# path('actualizar_clasificaciones') #}\">Actualizar Clasificaciones<br/></a>
          </li>-->
          <li>
          {% if app.user and is_granted('ROLE_ORGANIZADOR') %}  
            <a href=\"{{ path('organizacion_logout') }}\">Logout<br/></a>
            {% else %}
            <a href=\"{{ path('organizacion_login') }}\">Login<br/></a>
            {% endif %}
          </li>
        </ul>
        <div style=\"clear: left;\"></div>
      </div>
    </div>     
{% endblock %}    ", "AppCorredoresRiojaBundle:Organizacion:organizaciones1.html.twig", "/home/joheras/Symfony/corredoresporlarioja/corredoresporlarioja/src/App/CorredoresRiojaBundle/Resources/views/Organizacion/organizaciones1.html.twig");
    }
}
