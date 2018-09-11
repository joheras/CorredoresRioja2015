<?php

/* AppCorredoresRiojaBundle:Default:carreras.html.twig */
class __TwigTemplate_a2b81507d807722525122eceaffb718be5fd9d64923fbd1035b4c66b462f60da extends Twig_Template
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
        $__internal_faf1650b9d107220e7eb33aa3acd6b449568bd3383146b2bdfd1646b2c5db79d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_faf1650b9d107220e7eb33aa3acd6b449568bd3383146b2bdfd1646b2c5db79d->enter($__internal_faf1650b9d107220e7eb33aa3acd6b449568bd3383146b2bdfd1646b2c5db79d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppCorredoresRiojaBundle:Default:carreras.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_faf1650b9d107220e7eb33aa3acd6b449568bd3383146b2bdfd1646b2c5db79d->leave($__internal_faf1650b9d107220e7eb33aa3acd6b449568bd3383146b2bdfd1646b2c5db79d_prof);

    }

    // line 3
    public function block_English($context, array $blocks = array())
    {
        $__internal_7cde57b2fbbe56228d60c2304904333b982c0aff6982c71d2585c42e9d830ff9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cde57b2fbbe56228d60c2304904333b982c0aff6982c71d2585c42e9d830ff9->enter($__internal_7cde57b2fbbe56228d60c2304904333b982c0aff6982c71d2585c42e9d830ff9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "English"));

        echo "<a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_carreras", array("locale" => "en"));
        echo "\">";
        
        $__internal_7cde57b2fbbe56228d60c2304904333b982c0aff6982c71d2585c42e9d830ff9->leave($__internal_7cde57b2fbbe56228d60c2304904333b982c0aff6982c71d2585c42e9d830ff9_prof);

    }

    // line 4
    public function block_Español($context, array $blocks = array())
    {
        $__internal_0b0800e273e3b30e8859d2dd2d03b0602cb8f8c541ed6a46d84e80f55d6a2490 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b0800e273e3b30e8859d2dd2d03b0602cb8f8c541ed6a46d84e80f55d6a2490->enter($__internal_0b0800e273e3b30e8859d2dd2d03b0602cb8f8c541ed6a46d84e80f55d6a2490_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Español"));

        echo "<a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_carreras", array("locale" => "es"));
        echo "\">";
        
        $__internal_0b0800e273e3b30e8859d2dd2d03b0602cb8f8c541ed6a46d84e80f55d6a2490->leave($__internal_0b0800e273e3b30e8859d2dd2d03b0602cb8f8c541ed6a46d84e80f55d6a2490_prof);

    }

    // line 6
    public function block_migas($context, array $blocks = array())
    {
        $__internal_a5f1c8565e59435b494f0378adc54a3e7af7d98378bf153086baca80996a4d93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5f1c8565e59435b494f0378adc54a3e7af7d98378bf153086baca80996a4d93->enter($__internal_a5f1c8565e59435b494f0378adc54a3e7af7d98378bf153086baca80996a4d93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "migas"));

        // line 7
        echo "<div class=\"clear\"></div> 
";
        
        $__internal_a5f1c8565e59435b494f0378adc54a3e7af7d98378bf153086baca80996a4d93->leave($__internal_a5f1c8565e59435b494f0378adc54a3e7af7d98378bf153086baca80996a4d93_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_f96b10de0bfaafc9a2ac35556f2ee3fa6934da48bf0ae62a56d6d1fcf980aeae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f96b10de0bfaafc9a2ac35556f2ee3fa6934da48bf0ae62a56d6d1fcf980aeae->enter($__internal_f96b10de0bfaafc9a2ac35556f2ee3fa6934da48bf0ae62a56d6d1fcf980aeae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f96b10de0bfaafc9a2ac35556f2ee3fa6934da48bf0ae62a56d6d1fcf980aeae->leave($__internal_f96b10de0bfaafc9a2ac35556f2ee3fa6934da48bf0ae62a56d6d1fcf980aeae_prof);

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

{% block English %}<a href=\"{{ path('show_carreras', { 'locale': 'en' }) }}\">{% endblock %}
{% block Español %}<a href=\"{{ path('show_carreras', { 'locale': 'es' }) }}\">{% endblock %}

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
{% endblock %} ", "AppCorredoresRiojaBundle:Default:carreras.html.twig", "/home/joheras/Symfony/corredoresporlarioja/corredoresporlarioja/src/App/CorredoresRiojaBundle/Resources/views/Default/carreras.html.twig");
    }
}
