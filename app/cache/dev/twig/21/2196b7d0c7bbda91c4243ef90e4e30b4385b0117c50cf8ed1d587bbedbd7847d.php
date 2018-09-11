<?php

/* AppCorredoresRiojaBundle:Organizacion:carreras.html.twig */
class __TwigTemplate_13eb4643d81236a6fc65a613dceb125d40ac6c140bdc3602110b4063db6a4ba0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppCorredoresRiojaBundle:Organizacion:organizaciones1.html.twig", "AppCorredoresRiojaBundle:Organizacion:carreras.html.twig", 1);
        $this->blocks = array(
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
        $__internal_1602753d7653698df0bcd852fcb10254d18358d929fc34819a6cb5ce81d0ca93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1602753d7653698df0bcd852fcb10254d18358d929fc34819a6cb5ce81d0ca93->enter($__internal_1602753d7653698df0bcd852fcb10254d18358d929fc34819a6cb5ce81d0ca93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppCorredoresRiojaBundle:Organizacion:carreras.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1602753d7653698df0bcd852fcb10254d18358d929fc34819a6cb5ce81d0ca93->leave($__internal_1602753d7653698df0bcd852fcb10254d18358d929fc34819a6cb5ce81d0ca93_prof);

    }

    // line 4
    public function block_English($context, array $blocks = array())
    {
        $__internal_1fd45cd54e5424d86051ff3a276ab72f31472b8ce30743b9b6bf89f87a48fd81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fd45cd54e5424d86051ff3a276ab72f31472b8ce30743b9b6bf89f87a48fd81->enter($__internal_1fd45cd54e5424d86051ff3a276ab72f31472b8ce30743b9b6bf89f87a48fd81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "English"));

        echo "<a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("organizacion_portada.en");
        echo "\">";
        
        $__internal_1fd45cd54e5424d86051ff3a276ab72f31472b8ce30743b9b6bf89f87a48fd81->leave($__internal_1fd45cd54e5424d86051ff3a276ab72f31472b8ce30743b9b6bf89f87a48fd81_prof);

    }

    // line 5
    public function block_Español($context, array $blocks = array())
    {
        $__internal_611ff755eebc65790245b9c50b51702e5af40b3723ecc9b76bc3ce0509199a7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_611ff755eebc65790245b9c50b51702e5af40b3723ecc9b76bc3ce0509199a7f->enter($__internal_611ff755eebc65790245b9c50b51702e5af40b3723ecc9b76bc3ce0509199a7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Español"));

        echo "<a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("organizacion_portada.es");
        echo "\">";
        
        $__internal_611ff755eebc65790245b9c50b51702e5af40b3723ecc9b76bc3ce0509199a7f->leave($__internal_611ff755eebc65790245b9c50b51702e5af40b3723ecc9b76bc3ce0509199a7f_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_b15abda2aef619a54d7e3a1a42c4baa696b4c3d9e961cfd6b469e3bd597361ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b15abda2aef619a54d7e3a1a42c4baa696b4c3d9e961cfd6b469e3bd597361ba->enter($__internal_b15abda2aef619a54d7e3a1a42c4baa696b4c3d9e961cfd6b469e3bd597361ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    
      ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 10, $this->getSourceContext()); })()), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["mensaje"]) {
            echo " 
       <p clas=\"info\">";
            // line 11
            echo twig_escape_filter($this->env, $context["mensaje"], "html", null, true);
            echo "</p> 
   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mensaje'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo " 
   
     <div class=\"clear\"></div>   
      ";
        // line 15
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 15, $this->getSourceContext()); })()), "user", array()) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ORGANIZADOR"))) {
            // line 16
            echo "     <h1>Bienvenido, estas son las carreras que has organizado</h1>
 ";
        }
        // line 17
        echo " 
 
 <h2>Carreras por disputar</h2>
 <div class=\"centro\"/>
 <ul>
     <li class=\"columna\">
         <ul>
 ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["carreraspordisputar"]) || array_key_exists("carreraspordisputar", $context) ? $context["carreraspordisputar"] : (function () { throw new Twig_Error_Runtime('Variable "carreraspordisputar" does not exist.', 24, $this->getSourceContext()); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["carrera"]) {
            // line 25
            echo "     
     <li class=\"celda\">
         <div class=\"parteCelda\">
             <img src=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("bundles/appcorredoresrioja/images/" . twig_get_attribute($this->env, $this->getSourceContext(), $context["carrera"], "imagen", array()))), "html", null, true);
            echo "\"/>
         </div>
         <div class=\"parteCelda2\">
             <h3><a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_carrera", array("slug" => twig_get_attribute($this->env, $this->getSourceContext(), $context["carrera"], "slug", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["carrera"], "nombre", array()), "html", null, true);
            echo "</a></h3>
             <p>";
            // line 32
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["carrera"], "fechacelebracion", array()), "Y/m/d h:m"), "html", null, true);
            echo "</p>
             <div style=\"float:right; padding:10px 5px\">
                      <a style=\"padding:5px 8px 5px 10px;background:#5C7E6D;color:#FFF\" 
                         href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modificar_carrera", array("slug" => twig_get_attribute($this->env, $this->getSourceContext(), $context["carrera"], "slug", array()))), "html", null, true);
            echo "\" ><span>Modificar</span> </a>
            </div>
         </div>    
     </li>
 ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 39
            echo "    
     <p>No hay carreras en esta categoría</p>
 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['carrera'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo " </ul>
     </li>
 </ul>
</div>
 <div class=\"clear\"></div>   
 <h2>Carreras disputadas</h2>
<div class=\"centro\"/>
 <ul>
     <li class=\"columna\">
         <ul>
 ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["carrerasdisputadas"]) || array_key_exists("carrerasdisputadas", $context) ? $context["carrerasdisputadas"] : (function () { throw new Twig_Error_Runtime('Variable "carrerasdisputadas" does not exist.', 52, $this->getSourceContext()); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["carrera"]) {
            // line 53
            echo "     <li class=\"celda\">
         <div class=\"parteCelda\">
             <img src=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("bundles/appcorredoresrioja/images/" . twig_get_attribute($this->env, $this->getSourceContext(), $context["carrera"], "imagen", array()))), "html", null, true);
            echo "\"/>
         </div>
         <div class=\"parteCelda2\">
             <h3><a href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_carrera", array("slug" => twig_get_attribute($this->env, $this->getSourceContext(), $context["carrera"], "slug", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["carrera"], "nombre", array()), "html", null, true);
            echo "</a></h3>
             <p>";
            // line 59
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["carrera"], "fechacelebracion", array()), "Y/m/d h:m"), "html", null, true);
            echo "</p>
             <div style=\"float:right; padding:10px 5px\">
                      <a style=\"padding:5px 8px 5px 10px;background:#5C7E6D;color:#FFF\" 
                         href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_carrera", array("slug" => twig_get_attribute($this->env, $this->getSourceContext(), $context["carrera"], "slug", array()))), "html", null, true);
            echo "\" ><span>Clasificaciones</span> </a>
            </div>
         </div>    
     </li>
  ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 66
            echo "    
     <p>No hay carreras en esta categoría</p>    
 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['carrera'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "         </ul>
 </li>
 </ul>
</div>
 <div class=\"clear\"></div>   
";
        
        $__internal_b15abda2aef619a54d7e3a1a42c4baa696b4c3d9e961cfd6b469e3bd597361ba->leave($__internal_b15abda2aef619a54d7e3a1a42c4baa696b4c3d9e961cfd6b469e3bd597361ba_prof);

    }

    public function getTemplateName()
    {
        return "AppCorredoresRiojaBundle:Organizacion:carreras.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 69,  202 => 66,  192 => 62,  186 => 59,  180 => 58,  174 => 55,  170 => 53,  165 => 52,  153 => 42,  145 => 39,  135 => 35,  129 => 32,  123 => 31,  117 => 28,  112 => 25,  107 => 24,  98 => 17,  94 => 16,  92 => 15,  87 => 12,  79 => 11,  73 => 10,  70 => 9,  64 => 8,  50 => 5,  36 => 4,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"AppCorredoresRiojaBundle:Organizacion:organizaciones1.html.twig\" %}


{% block English %}<a href=\"{{ path('organizacion_portada.en') }}\">{% endblock %}
{% block Español %}<a href=\"{{ path('organizacion_portada.es') }}\">{% endblock %}

                       
{% block body %}
    
      {% for mensaje in app.session.flashbag.get('info') %} 
       <p clas=\"info\">{{ mensaje }}</p> 
   {% endfor %} 
   
     <div class=\"clear\"></div>   
      {% if app.user and is_granted('ROLE_ORGANIZADOR') %}
     <h1>Bienvenido, estas son las carreras que has organizado</h1>
 {% endif %} 
 
 <h2>Carreras por disputar</h2>
 <div class=\"centro\"/>
 <ul>
     <li class=\"columna\">
         <ul>
 {% for carrera in carreraspordisputar %}
     
     <li class=\"celda\">
         <div class=\"parteCelda\">
             <img src=\"{{ asset('bundles/appcorredoresrioja/images/' ~ carrera.imagen) }}\"/>
         </div>
         <div class=\"parteCelda2\">
             <h3><a href=\"{{ path('show_carrera', {'slug':carrera.slug}) }}\">{{ carrera.nombre }}</a></h3>
             <p>{{ carrera.fechacelebracion | date('Y/m/d h:m') }}</p>
             <div style=\"float:right; padding:10px 5px\">
                      <a style=\"padding:5px 8px 5px 10px;background:#5C7E6D;color:#FFF\" 
                         href=\"{{ path('modificar_carrera', {'slug':carrera.slug}) }}\" ><span>Modificar</span> </a>
            </div>
         </div>    
     </li>
 {% else %}    
     <p>No hay carreras en esta categoría</p>
 {% endfor %}
 </ul>
     </li>
 </ul>
</div>
 <div class=\"clear\"></div>   
 <h2>Carreras disputadas</h2>
<div class=\"centro\"/>
 <ul>
     <li class=\"columna\">
         <ul>
 {% for carrera in carrerasdisputadas %}
     <li class=\"celda\">
         <div class=\"parteCelda\">
             <img src=\"{{ asset('bundles/appcorredoresrioja/images/' ~ carrera.imagen) }}\"/>
         </div>
         <div class=\"parteCelda2\">
             <h3><a href=\"{{ path('show_carrera', {'slug':carrera.slug}) }}\">{{ carrera.nombre }}</a></h3>
             <p>{{ carrera.fechacelebracion | date('Y/m/d h:m') }}</p>
             <div style=\"float:right; padding:10px 5px\">
                      <a style=\"padding:5px 8px 5px 10px;background:#5C7E6D;color:#FFF\" 
                         href=\"{{ path('show_carrera', {'slug':carrera.slug}) }}\" ><span>Clasificaciones</span> </a>
            </div>
         </div>    
     </li>
  {% else %}    
     <p>No hay carreras en esta categoría</p>    
 {% endfor %}
         </ul>
 </li>
 </ul>
</div>
 <div class=\"clear\"></div>   
{% endblock %} ", "AppCorredoresRiojaBundle:Organizacion:carreras.html.twig", "/home/joheras/corredoresporlarioja/corredoresporlarioja/src/App/CorredoresRiojaBundle/Resources/views/Organizacion/carreras.html.twig");
    }
}
