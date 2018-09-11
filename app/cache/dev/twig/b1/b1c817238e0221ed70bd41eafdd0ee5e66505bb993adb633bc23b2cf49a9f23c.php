<?php

/* AppCorredoresRiojaBundle:Default:carreras.html.twig */
class __TwigTemplate_1b84e2aa7d0ff956e07ff02dcdd6704fc29a9d426191cf923f197d78f703d610 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppCorredoresRiojaBundle:Default:corredores1.html.twig", "AppCorredoresRiojaBundle:Default:carreras.html.twig", 1);
        $this->blocks = array(
            'English' => array($this, 'block_English'),
            'Español' => array($this, 'block_Español'),
            'migas' => array($this, 'block_migas'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppCorredoresRiojaBundle:Default:corredores1.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_694aacad8e1b91bec7f48c9bfb99f5019efc7783d86d6f4a054a379fd5f8a8d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_694aacad8e1b91bec7f48c9bfb99f5019efc7783d86d6f4a054a379fd5f8a8d0->enter($__internal_694aacad8e1b91bec7f48c9bfb99f5019efc7783d86d6f4a054a379fd5f8a8d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppCorredoresRiojaBundle:Default:carreras.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_694aacad8e1b91bec7f48c9bfb99f5019efc7783d86d6f4a054a379fd5f8a8d0->leave($__internal_694aacad8e1b91bec7f48c9bfb99f5019efc7783d86d6f4a054a379fd5f8a8d0_prof);

    }

    // line 3
    public function block_English($context, array $blocks = array())
    {
        $__internal_21f270d8b3b81b986806551665e6629e1e009caa0bfbd5ac8de4e3dc1f16ec7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21f270d8b3b81b986806551665e6629e1e009caa0bfbd5ac8de4e3dc1f16ec7d->enter($__internal_21f270d8b3b81b986806551665e6629e1e009caa0bfbd5ac8de4e3dc1f16ec7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "English"));

        echo "<a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_carreras.en");
        echo "\">";
        
        $__internal_21f270d8b3b81b986806551665e6629e1e009caa0bfbd5ac8de4e3dc1f16ec7d->leave($__internal_21f270d8b3b81b986806551665e6629e1e009caa0bfbd5ac8de4e3dc1f16ec7d_prof);

    }

    // line 4
    public function block_Español($context, array $blocks = array())
    {
        $__internal_39cf7404d5e3fd17cc674a92570f70371edd5a648dd4fe94c4f8e8f0b681d17c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39cf7404d5e3fd17cc674a92570f70371edd5a648dd4fe94c4f8e8f0b681d17c->enter($__internal_39cf7404d5e3fd17cc674a92570f70371edd5a648dd4fe94c4f8e8f0b681d17c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Español"));

        echo "<a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_carreras.es");
        echo "\">";
        
        $__internal_39cf7404d5e3fd17cc674a92570f70371edd5a648dd4fe94c4f8e8f0b681d17c->leave($__internal_39cf7404d5e3fd17cc674a92570f70371edd5a648dd4fe94c4f8e8f0b681d17c_prof);

    }

    // line 6
    public function block_migas($context, array $blocks = array())
    {
        $__internal_4629a04a0e76461dbee584f80c99d0ca48a59fb8490acc9bfe3e81ff00e3ab35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4629a04a0e76461dbee584f80c99d0ca48a59fb8490acc9bfe3e81ff00e3ab35->enter($__internal_4629a04a0e76461dbee584f80c99d0ca48a59fb8490acc9bfe3e81ff00e3ab35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "migas"));

        // line 7
        echo "<div class=\"clear\"></div> 
";
        
        $__internal_4629a04a0e76461dbee584f80c99d0ca48a59fb8490acc9bfe3e81ff00e3ab35->leave($__internal_4629a04a0e76461dbee584f80c99d0ca48a59fb8490acc9bfe3e81ff00e3ab35_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_e97c7c16983ec80215b59e8cd2b738d77809516259e221f6762dc6bd9e4f1e24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e97c7c16983ec80215b59e8cd2b738d77809516259e221f6762dc6bd9e4f1e24->enter($__internal_e97c7c16983ec80215b59e8cd2b738d77809516259e221f6762dc6bd9e4f1e24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo " <h1>Carreras por disputar</h1>
 <div class=\"centro\"/>
 <ul>
     <li class=\"columna\">
         <ul>
 ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["carreraspordisputar"]) || array_key_exists("carreraspordisputar", $context) ? $context["carreraspordisputar"] : (function () { throw new Twig_Error_Runtime('Variable "carreraspordisputar" does not exist.', 16, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["carrera"]) {
            // line 17
            echo "     
     <li class=\"celda\">
         <div class=\"parteCelda\">
             <img src=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("bundles/appcorredoresrioja/images/" . twig_get_attribute($this->env, $this->getSourceContext(), $context["carrera"], "imagen", array()))), "html", null, true);
            echo "\"/>
         </div>
         <div class=\"parteCelda2\">
             <h3><a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_carrera", array("slug" => twig_get_attribute($this->env, $this->getSourceContext(), $context["carrera"], "slug", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["carrera"], "nombre", array()), "html", null, true);
            echo "</a></h3>
             <p>";
            // line 24
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["carrera"], "fechacelebracion", array()), "Y/m/d h:m"), "html", null, true);
            echo "</p>
             <div style=\"float:right; padding:10px 5px\">
                      <a style=\"padding:5px 8px 5px 10px;background:#5C7E6D;color:#FFF\" 
                         href=\"";
            // line 27
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
        // line 32
        echo " </ul>
     </li>
 </ul>
</div>
 <div class=\"clear\"></div>   
 <h1>Carreras disputadas</h1>
<div class=\"centro\"/>
 <ul>
     <li class=\"columna\">
         <ul>
 ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["carrerasdisputadas"]) || array_key_exists("carrerasdisputadas", $context) ? $context["carrerasdisputadas"] : (function () { throw new Twig_Error_Runtime('Variable "carrerasdisputadas" does not exist.', 42, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["carrera"]) {
            // line 43
            echo "     <li class=\"celda\">
         <div class=\"parteCelda\">
             <img src=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("bundles/appcorredoresrioja/images/" . twig_get_attribute($this->env, $this->getSourceContext(), $context["carrera"], "imagen", array()))), "html", null, true);
            echo "\"/>
         </div>
         <div class=\"parteCelda2\">
             <h3><a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_carrera", array("slug" => twig_get_attribute($this->env, $this->getSourceContext(), $context["carrera"], "slug", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["carrera"], "nombre", array()), "html", null, true);
            echo "</a></h3>
             <p>";
            // line 49
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["carrera"], "fechacelebracion", array()), "Y/m/d h:m"), "html", null, true);
            echo "</p>
             <div style=\"float:right; padding:10px 5px\">
                      <a style=\"padding:5px 8px 5px 10px;background:#5C7E6D;color:#FFF\" 
                         href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_carrera", array("slug" => twig_get_attribute($this->env, $this->getSourceContext(), $context["carrera"], "slug", array()))), "html", null, true);
            echo "\" ><span>Clasificaciones</span> </a>
            </div>
         </div>    
     </li>
 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['carrera'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "         </ul>
 </li>
 </ul>
</div>
 <div class=\"clear\"></div>   
";
        
        $__internal_e97c7c16983ec80215b59e8cd2b738d77809516259e221f6762dc6bd9e4f1e24->leave($__internal_e97c7c16983ec80215b59e8cd2b738d77809516259e221f6762dc6bd9e4f1e24_prof);

    }

    public function getTemplateName()
    {
        return "AppCorredoresRiojaBundle:Default:carreras.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 57,  168 => 52,  162 => 49,  156 => 48,  150 => 45,  146 => 43,  142 => 42,  130 => 32,  119 => 27,  113 => 24,  107 => 23,  101 => 20,  96 => 17,  92 => 16,  85 => 11,  79 => 10,  71 => 7,  65 => 6,  51 => 4,  37 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"AppCorredoresRiojaBundle:Default:corredores1.html.twig\" %}

{% block English %}<a href=\"{{ path('show_carreras.en') }}\">{% endblock %}
{% block Español %}<a href=\"{{ path('show_carreras.es') }}\">{% endblock %}

{% block migas %}
<div class=\"clear\"></div> 
{% endblock %}
                       
{% block body %}
 <h1>Carreras por disputar</h1>
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
                         href=\"{{ path('inscribir_corredor', {'slug':carrera.slug}) }}\" ><span>Inscríbete</span> </a>
            </div>
         </div>    
     </li>
 {% endfor %}
 </ul>
     </li>
 </ul>
</div>
 <div class=\"clear\"></div>   
 <h1>Carreras disputadas</h1>
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
 {% endfor %}
         </ul>
 </li>
 </ul>
</div>
 <div class=\"clear\"></div>   
{% endblock %} ", "AppCorredoresRiojaBundle:Default:carreras.html.twig", "/home/joheras/corredoresporlarioja/corredoresporlarioja/src/App/CorredoresRiojaBundle/Resources/views/Default/carreras.html.twig");
    }
}
