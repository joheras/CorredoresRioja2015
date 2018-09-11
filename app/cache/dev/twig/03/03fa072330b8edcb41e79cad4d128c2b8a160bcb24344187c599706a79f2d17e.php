<?php

/* AppCorredoresRiojaBundle:Organizacion:modificarcarreras.html.twig */
class __TwigTemplate_a7074619b77c41fa24cbb94047a9b7b23b22f1078a22df4d0c0ea6f5ea3d9f4c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppCorredoresRiojaBundle:Organizacion:organizaciones1.html.twig", "AppCorredoresRiojaBundle:Organizacion:modificarcarreras.html.twig", 1);
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
        $__internal_2babf697712cc5c2332becb3f44f3dfcb760ad330f98fb813894a313b2d2c45c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2babf697712cc5c2332becb3f44f3dfcb760ad330f98fb813894a313b2d2c45c->enter($__internal_2babf697712cc5c2332becb3f44f3dfcb760ad330f98fb813894a313b2d2c45c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppCorredoresRiojaBundle:Organizacion:modificarcarreras.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2babf697712cc5c2332becb3f44f3dfcb760ad330f98fb813894a313b2d2c45c->leave($__internal_2babf697712cc5c2332becb3f44f3dfcb760ad330f98fb813894a313b2d2c45c_prof);

    }

    // line 4
    public function block_English($context, array $blocks = array())
    {
        $__internal_c69bea8fe8dfbf08124c3f80dc260837b6b1baf205fc1780f44410a25120d97a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c69bea8fe8dfbf08124c3f80dc260837b6b1baf205fc1780f44410a25120d97a->enter($__internal_c69bea8fe8dfbf08124c3f80dc260837b6b1baf205fc1780f44410a25120d97a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "English"));

        echo "<a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modificarcarreras.en");
        echo "\">";
        
        $__internal_c69bea8fe8dfbf08124c3f80dc260837b6b1baf205fc1780f44410a25120d97a->leave($__internal_c69bea8fe8dfbf08124c3f80dc260837b6b1baf205fc1780f44410a25120d97a_prof);

    }

    // line 5
    public function block_Español($context, array $blocks = array())
    {
        $__internal_4f1a851d54328101cf22dbb804a506502a66f79342c7af829cb9edf508d2d1d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f1a851d54328101cf22dbb804a506502a66f79342c7af829cb9edf508d2d1d0->enter($__internal_4f1a851d54328101cf22dbb804a506502a66f79342c7af829cb9edf508d2d1d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Español"));

        echo "<a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modificarcarreras.es");
        echo "\">";
        
        $__internal_4f1a851d54328101cf22dbb804a506502a66f79342c7af829cb9edf508d2d1d0->leave($__internal_4f1a851d54328101cf22dbb804a506502a66f79342c7af829cb9edf508d2d1d0_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_0920d470fdf7ac4209f82450149e4af6c50b3d5f690d80fbbc10a36f3d9791d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0920d470fdf7ac4209f82450149e4af6c50b3d5f690d80fbbc10a36f3d9791d8->enter($__internal_0920d470fdf7ac4209f82450149e4af6c50b3d5f690d80fbbc10a36f3d9791d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            echo "     <p>Bienvenido, estas son las carreras que has organizado y todavía puedes modificar</p>
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
";
        
        $__internal_0920d470fdf7ac4209f82450149e4af6c50b3d5f690d80fbbc10a36f3d9791d8->leave($__internal_0920d470fdf7ac4209f82450149e4af6c50b3d5f690d80fbbc10a36f3d9791d8_prof);

    }

    public function getTemplateName()
    {
        return "AppCorredoresRiojaBundle:Organizacion:modificarcarreras.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 42,  145 => 39,  135 => 35,  129 => 32,  123 => 31,  117 => 28,  112 => 25,  107 => 24,  98 => 17,  94 => 16,  92 => 15,  87 => 12,  79 => 11,  73 => 10,  70 => 9,  64 => 8,  50 => 5,  36 => 4,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"AppCorredoresRiojaBundle:Organizacion:organizaciones1.html.twig\" %}


{% block English %}<a href=\"{{ path('modificarcarreras.en') }}\">{% endblock %}
{% block Español %}<a href=\"{{ path('modificarcarreras.es') }}\">{% endblock %}

                       
{% block body %}
    
      {% for mensaje in app.session.flashbag.get('info') %} 
       <p clas=\"info\">{{ mensaje }}</p> 
   {% endfor %} 
   
     <div class=\"clear\"></div>   
      {% if app.user and is_granted('ROLE_ORGANIZADOR') %}
     <p>Bienvenido, estas son las carreras que has organizado y todavía puedes modificar</p>
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
{% endblock %} ", "AppCorredoresRiojaBundle:Organizacion:modificarcarreras.html.twig", "/home/joheras/Symfony/corredoresporlarioja/corredoresporlarioja/src/App/CorredoresRiojaBundle/Resources/views/Organizacion/modificarcarreras.html.twig");
    }
}
