<?php

/* AppCorredoresRiojaBundle:Default:corredores1.html.twig */
class __TwigTemplate_8d586405b38ca4d0c86d5866d2dd6f23cc611190a1d93286a400000b411c41f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppCorredoresRiojaBundle:Default:base.html.twig", "AppCorredoresRiojaBundle:Default:corredores1.html.twig", 1);
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
        $__internal_6678e43424d293711e3d884df802fd052b8db4699ec693ba2c15fbf3a648cf7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6678e43424d293711e3d884df802fd052b8db4699ec693ba2c15fbf3a648cf7e->enter($__internal_6678e43424d293711e3d884df802fd052b8db4699ec693ba2c15fbf3a648cf7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppCorredoresRiojaBundle:Default:corredores1.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6678e43424d293711e3d884df802fd052b8db4699ec693ba2c15fbf3a648cf7e->leave($__internal_6678e43424d293711e3d884df802fd052b8db4699ec693ba2c15fbf3a648cf7e_prof);

    }

    // line 3
    public function block_pestanias($context, array $blocks = array())
    {
        $__internal_0f1907d1a4bc4cd06862f9c5e11a2180c958cb2abf4e285973da3723772989eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f1907d1a4bc4cd06862f9c5e11a2180c958cb2abf4e285973da3723772989eb->enter($__internal_0f1907d1a4bc4cd06862f9c5e11a2180c958cb2abf4e285973da3723772989eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pestanias"));

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
        
        $__internal_0f1907d1a4bc4cd06862f9c5e11a2180c958cb2abf4e285973da3723772989eb->leave($__internal_0f1907d1a4bc4cd06862f9c5e11a2180c958cb2abf4e285973da3723772989eb_prof);

    }

    // line 14
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0e9dca8bb6e8d369c52ca252c77e5badd7917d85783893ed364f0b58ddaf60ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e9dca8bb6e8d369c52ca252c77e5badd7917d85783893ed364f0b58ddaf60ab->enter($__internal_0e9dca8bb6e8d369c52ca252c77e5badd7917d85783893ed364f0b58ddaf60ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_0e9dca8bb6e8d369c52ca252c77e5badd7917d85783893ed364f0b58ddaf60ab->leave($__internal_0e9dca8bb6e8d369c52ca252c77e5badd7917d85783893ed364f0b58ddaf60ab_prof);

    }

    public function getTemplateName()
    {
        return "AppCorredoresRiojaBundle:Default:corredores1.html.twig";
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
{% endblock %}    ", "AppCorredoresRiojaBundle:Default:corredores1.html.twig", "/home/joheras/Symfony/corredoresporlarioja/corredoresporlarioja/src/App/CorredoresRiojaBundle/Resources/views/Default/corredores1.html.twig");
    }
}
