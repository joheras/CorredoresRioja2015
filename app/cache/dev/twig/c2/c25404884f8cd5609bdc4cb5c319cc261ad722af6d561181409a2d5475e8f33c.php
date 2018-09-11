<?php

/* AppCorredoresRiojaBundle:Default:portada.html.twig */
class __TwigTemplate_3aa4454840ceeee2d7828d7cf81fad5d8e9cd8e1c9bf1d3539aa89bf47b8abc1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppCorredoresRiojaBundle:Default:corredores.html.twig", "AppCorredoresRiojaBundle:Default:portada.html.twig", 1);
        $this->blocks = array(
            'migas' => array($this, 'block_migas'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppCorredoresRiojaBundle:Default:corredores.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8fcb7a2b18ae1080d89f01ec3703660576b2b8a066fd59bd00da227f3103aabb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fcb7a2b18ae1080d89f01ec3703660576b2b8a066fd59bd00da227f3103aabb->enter($__internal_8fcb7a2b18ae1080d89f01ec3703660576b2b8a066fd59bd00da227f3103aabb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppCorredoresRiojaBundle:Default:portada.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8fcb7a2b18ae1080d89f01ec3703660576b2b8a066fd59bd00da227f3103aabb->leave($__internal_8fcb7a2b18ae1080d89f01ec3703660576b2b8a066fd59bd00da227f3103aabb_prof);

    }

    // line 3
    public function block_migas($context, array $blocks = array())
    {
        $__internal_406bc9cf1785bbcfbba073170442ed4b6f51125070fb934d67ec32cc787edc24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_406bc9cf1785bbcfbba073170442ed4b6f51125070fb934d67ec32cc787edc24->enter($__internal_406bc9cf1785bbcfbba073170442ed4b6f51125070fb934d67ec32cc787edc24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "migas"));

        // line 4
        echo "<div class=\"clear\"></div> 
";
        
        $__internal_406bc9cf1785bbcfbba073170442ed4b6f51125070fb934d67ec32cc787edc24->leave($__internal_406bc9cf1785bbcfbba073170442ed4b6f51125070fb934d67ec32cc787edc24_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_0729209a32bade3870fbf0aef75aec4f7fb334ea9a39b2fd442667e9961cbbed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0729209a32bade3870fbf0aef75aec4f7fb334ea9a39b2fd442667e9961cbbed->enter($__internal_0729209a32bade3870fbf0aef75aec4f7fb334ea9a39b2fd442667e9961cbbed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "   ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 8, $this->getSourceContext()); })()), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["mensaje"]) {
            echo " 
       <p clas=\"info\">";
            // line 9
            echo twig_escape_filter($this->env, $context["mensaje"], "html", null, true);
            echo "</p> 
   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mensaje'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo " 
    
 <h1>Bienvenido a Carreras por La Rioja </h1>
 <p>Carreras por La Rioja es un sitio web donde corredores de todos los niveles pueden inscribirse en carreras organizadas en La Rioja. 
     A continuación se muestran algunas de las carreras a las que te puedes inscribir.</p>
 
 <div class=\"centro\"/>
 <ul>
     <li class=\"columna\">
         <ul>
 ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["carreras"]) || array_key_exists("carreras", $context) ? $context["carreras"] : (function () { throw new Twig_Error_Runtime('Variable "carreras" does not exist.', 20, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["carrera"]) {
            // line 21
            echo "     
     <li class=\"celda\">
         <div class=\"parteCelda\">
             <img src=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("bundles/appcorredoresrioja/images/" . twig_get_attribute($this->env, $this->getSourceContext(), $context["carrera"], "imagen", array()))), "html", null, true);
            echo "\"/>
         </div>
         <div class=\"parteCelda2\">
             <h3><a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_carrera", array("slug" => twig_get_attribute($this->env, $this->getSourceContext(), $context["carrera"], "slug", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["carrera"], "nombre", array()), "html", null, true);
            echo "</a></h3>
             <p>";
            // line 28
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["carrera"], "fechacelebracion", array()), "Y/m/d h:m"), "html", null, true);
            echo "</p>
             <div style=\"float:right; padding:10px 5px\">
                      <a style=\"padding:5px 8px 5px 10px;background:#5C7E6D;color:#FFF\" 
                         href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("inscribir_corredor", array("slug" => twig_get_attribute($this->env, $this->getSourceContext(), $context["carrera"], "slug", array()))), "html", null, true);
            echo "\" ><span>Inscríbete</span> </a>
            </div>
         </div>    
     </li>
 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['carrera'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "   </ul>
     </li>
 </ul>
</div>   
 
";
        
        $__internal_0729209a32bade3870fbf0aef75aec4f7fb334ea9a39b2fd442667e9961cbbed->leave($__internal_0729209a32bade3870fbf0aef75aec4f7fb334ea9a39b2fd442667e9961cbbed_prof);

    }

    public function getTemplateName()
    {
        return "AppCorredoresRiojaBundle:Default:portada.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 36,  109 => 31,  103 => 28,  97 => 27,  91 => 24,  86 => 21,  82 => 20,  70 => 10,  62 => 9,  55 => 8,  49 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"AppCorredoresRiojaBundle:Default:corredores.html.twig\" %}

{% block migas %}
<div class=\"clear\"></div> 
{% endblock %}
                                              
{% block body %}
   {% for mensaje in app.session.flashbag.get('info') %} 
       <p clas=\"info\">{{ mensaje }}</p> 
   {% endfor %} 
    
 <h1>Bienvenido a Carreras por La Rioja </h1>
 <p>Carreras por La Rioja es un sitio web donde corredores de todos los niveles pueden inscribirse en carreras organizadas en La Rioja. 
     A continuación se muestran algunas de las carreras a las que te puedes inscribir.</p>
 
 <div class=\"centro\"/>
 <ul>
     <li class=\"columna\">
         <ul>
 {% for carrera in carreras %}
     
     <li class=\"celda\">
         <div class=\"parteCelda\">
             <img src=\"{{ asset('bundles/appcorredoresrioja/images/' ~ carrera.imagen) }}\"/>
         </div>
         <div class=\"parteCelda2\">
             <h3><a href=\"{{ path('show_carrera', {'slug':carrera.slug}) }}\">{{ carrera.nombre }}</a></h3>
             <p>{{ carrera.fechacelebracion | date('Y/m/d h:m') }}</p>
             <div style=\"float:right; padding:10px 5px\">
                      <a style=\"padding:5px 8px 5px 10px;background:#5C7E6D;color:#FFF\" 
                         href=\"{{ path('inscribir_corredor', {'slug':carrera.slug}) }}\" ><span>Inscríbete</span> </a>
            </div>
         </div>    
     </li>
 {% endfor %}
   </ul>
     </li>
 </ul>
</div>   
 
{% endblock %}    ", "AppCorredoresRiojaBundle:Default:portada.html.twig", "/home/joheras/Symfony/corredoresporlarioja/corredoresporlarioja/src/App/CorredoresRiojaBundle/Resources/views/Default/portada.html.twig");
    }
}
