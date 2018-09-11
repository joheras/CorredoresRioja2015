<?php

/* AppCorredoresRiojaBundle:Default:miscarreras.html.twig */
class __TwigTemplate_46c4b204a3c7be2cb5f06bb7b18aea5a1e16264a50903c27c0620e87b24b8173 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppCorredoresRiojaBundle:Default:corredores1.html.twig", "AppCorredoresRiojaBundle:Default:miscarreras.html.twig", 1);
        $this->blocks = array(
            'migas' => array($this, 'block_migas'),
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
        $__internal_f305c2caaef94f530ae5463950ee30af03a44812444be358dc4ebe8c9a6d899e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f305c2caaef94f530ae5463950ee30af03a44812444be358dc4ebe8c9a6d899e->enter($__internal_f305c2caaef94f530ae5463950ee30af03a44812444be358dc4ebe8c9a6d899e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppCorredoresRiojaBundle:Default:miscarreras.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f305c2caaef94f530ae5463950ee30af03a44812444be358dc4ebe8c9a6d899e->leave($__internal_f305c2caaef94f530ae5463950ee30af03a44812444be358dc4ebe8c9a6d899e_prof);

    }

    // line 3
    public function block_migas($context, array $blocks = array())
    {
        $__internal_f864bfd2d86eda5e6702df1b6a28c39826a1fc696b9519e18609aa555f6d456c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f864bfd2d86eda5e6702df1b6a28c39826a1fc696b9519e18609aa555f6d456c->enter($__internal_f864bfd2d86eda5e6702df1b6a28c39826a1fc696b9519e18609aa555f6d456c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "migas"));

        // line 4
        echo "<div class=\"clear\"></div> 
";
        
        $__internal_f864bfd2d86eda5e6702df1b6a28c39826a1fc696b9519e18609aa555f6d456c->leave($__internal_f864bfd2d86eda5e6702df1b6a28c39826a1fc696b9519e18609aa555f6d456c_prof);

    }

    // line 7
    public function block_English($context, array $blocks = array())
    {
        $__internal_2fd05d5ed28215e99a09eeb8df58c0a00055d7524eb41d7355d6599478579579 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fd05d5ed28215e99a09eeb8df58c0a00055d7524eb41d7355d6599478579579->enter($__internal_2fd05d5ed28215e99a09eeb8df58c0a00055d7524eb41d7355d6599478579579_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "English"));

        echo "<a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_miscarreras.en");
        echo "\">";
        
        $__internal_2fd05d5ed28215e99a09eeb8df58c0a00055d7524eb41d7355d6599478579579->leave($__internal_2fd05d5ed28215e99a09eeb8df58c0a00055d7524eb41d7355d6599478579579_prof);

    }

    // line 8
    public function block_Español($context, array $blocks = array())
    {
        $__internal_0737a94c9eaed0c1936a9e0887b2473e9842758581838678949f269da3a1a825 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0737a94c9eaed0c1936a9e0887b2473e9842758581838678949f269da3a1a825->enter($__internal_0737a94c9eaed0c1936a9e0887b2473e9842758581838678949f269da3a1a825_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Español"));

        echo "<a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_miscarreras.es");
        echo "\">";
        
        $__internal_0737a94c9eaed0c1936a9e0887b2473e9842758581838678949f269da3a1a825->leave($__internal_0737a94c9eaed0c1936a9e0887b2473e9842758581838678949f269da3a1a825_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_653f70f557c0e8346f400ed2d95a5a736328458dd9195636033b2598444be01e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_653f70f557c0e8346f400ed2d95a5a736328458dd9195636033b2598444be01e->enter($__internal_653f70f557c0e8346f400ed2d95a5a736328458dd9195636033b2598444be01e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    
 ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 12, $this->getSourceContext()); })()), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["mensaje"]) {
            echo " 
       <p clas=\"info\">";
            // line 13
            echo twig_escape_filter($this->env, $context["mensaje"], "html", null, true);
            echo "</p> 
   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mensaje'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "    
    
 ";
        // line 16
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 16, $this->getSourceContext()); })()), "user", array()) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_CORREDOR"))) {
            // line 17
            echo "     <p> Hola ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 17, $this->getSourceContext()); })()), "user", array()), "name", array()), "html", null, true);
            echo ", a continuación se muestran las carreras en las que estás inscrito
         y las carreras que has disputado. </p>
 ";
        }
        // line 19
        echo "    
    
 <h2>Carreras por disputar</h2>
 <div class=\"centro\"/>
 <ul>
     <li class=\"columna\">
         <ul>
 ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["carreraspordisputar"]) || array_key_exists("carreraspordisputar", $context) ? $context["carreraspordisputar"] : (function () { throw new Twig_Error_Runtime('Variable "carreraspordisputar" does not exist.', 26, $this->getSourceContext()); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["carrera"]) {
            // line 27
            echo "     
     <li class=\"celda\">
         <div class=\"parteCelda\">
             <img src=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("bundles/appcorredoresrioja/images/" . twig_get_attribute($this->env, $this->getSourceContext(), $context["carrera"], "imagen", array()))), "html", null, true);
            echo "\"/>
         </div>
         <div class=\"parteCelda2\">
             <h3><a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_carrera", array("slug" => twig_get_attribute($this->env, $this->getSourceContext(), $context["carrera"], "slug", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["carrera"], "nombre", array()), "html", null, true);
            echo "</a></h3>
             <p>";
            // line 34
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["carrera"], "fechacelebracion", array()), "Y/m/d h:m"), "html", null, true);
            echo "</p>
             <div style=\"float:right; padding:10px 5px\">
                      <a style=\"padding:5px 8px 5px 10px;background:#5C7E6D;color:#FFF\" 
                         href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("desapuntar_corredor", array("slug" => twig_get_attribute($this->env, $this->getSourceContext(), $context["carrera"], "slug", array()))), "html", null, true);
            echo "\" ><span>Desapuntarse</span> </a>
            </div>
         </div>    
     </li>
 ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 41
            echo "    
     <p> No tienes carreras por disputar.</p>
 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['carrera'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
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
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["carrerasdisputadas"]) || array_key_exists("carrerasdisputadas", $context) ? $context["carrerasdisputadas"] : (function () { throw new Twig_Error_Runtime('Variable "carrerasdisputadas" does not exist.', 54, $this->getSourceContext()); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["carrera"]) {
            // line 55
            echo "     <li class=\"celda\">
         <div class=\"parteCelda\">
             <img src=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("bundles/appcorredoresrioja/images/" . twig_get_attribute($this->env, $this->getSourceContext(), $context["carrera"], "imagen", array()))), "html", null, true);
            echo "\"/>
         </div>
         <div class=\"parteCelda2\">
             <h3><a href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_carrera", array("slug" => twig_get_attribute($this->env, $this->getSourceContext(), $context["carrera"], "slug", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["carrera"], "nombre", array()), "html", null, true);
            echo "</a></h3>
             <p>";
            // line 61
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["carrera"], "fechacelebracion", array()), "Y/m/d h:m"), "html", null, true);
            echo "</p>
             <div style=\"float:right; padding:10px 5px\">
                      <a style=\"padding:5px 8px 5px 10px;background:#5C7E6D;color:#FFF\" 
                         href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_carrera", array("slug" => twig_get_attribute($this->env, $this->getSourceContext(), $context["carrera"], "slug", array()))), "html", null, true);
            echo "\" ><span>Clasificaciones</span> </a>
            </div>
         </div>    
     </li>
 ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 68
            echo "    
     <p> Todavía no has disputado ninguna carrera.</p>    
 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['carrera'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "         </ul>
 </li>
 </ul>
</div>
 <div class=\"clear\"></div>   
";
        
        $__internal_653f70f557c0e8346f400ed2d95a5a736328458dd9195636033b2598444be01e->leave($__internal_653f70f557c0e8346f400ed2d95a5a736328458dd9195636033b2598444be01e_prof);

    }

    public function getTemplateName()
    {
        return "AppCorredoresRiojaBundle:Default:miscarreras.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 71,  219 => 68,  209 => 64,  203 => 61,  197 => 60,  191 => 57,  187 => 55,  182 => 54,  170 => 44,  162 => 41,  152 => 37,  146 => 34,  140 => 33,  134 => 30,  129 => 27,  124 => 26,  115 => 19,  108 => 17,  106 => 16,  102 => 14,  94 => 13,  88 => 12,  85 => 11,  79 => 10,  65 => 8,  51 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"AppCorredoresRiojaBundle:Default:corredores1.html.twig\" %}

{% block migas %}
<div class=\"clear\"></div> 
{% endblock %}

{% block English %}<a href=\"{{ path('show_miscarreras.en') }}\">{% endblock %}
{% block Español %}<a href=\"{{ path('show_miscarreras.es') }}\">{% endblock %}
                       
{% block body %}
    
 {% for mensaje in app.session.flashbag.get('info') %} 
       <p clas=\"info\">{{ mensaje }}</p> 
   {% endfor %}    
    
 {% if app.user and is_granted('ROLE_CORREDOR') %}
     <p> Hola {{ app.user.name }}, a continuación se muestran las carreras en las que estás inscrito
         y las carreras que has disputado. </p>
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
                         href=\"{{ path('desapuntar_corredor', {'slug':carrera.slug}) }}\" ><span>Desapuntarse</span> </a>
            </div>
         </div>    
     </li>
 {% else %}    
     <p> No tienes carreras por disputar.</p>
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
     <p> Todavía no has disputado ninguna carrera.</p>    
 {% endfor %}
         </ul>
 </li>
 </ul>
</div>
 <div class=\"clear\"></div>   
{% endblock %} ", "AppCorredoresRiojaBundle:Default:miscarreras.html.twig", "/home/joheras/corredoresporlarioja/corredoresporlarioja/src/App/CorredoresRiojaBundle/Resources/views/Default/miscarreras.html.twig");
    }
}
