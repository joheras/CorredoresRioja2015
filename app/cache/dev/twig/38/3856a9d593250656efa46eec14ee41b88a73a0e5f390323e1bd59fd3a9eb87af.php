<?php

/* AppCorredoresRiojaBundle:Default:carrera.html.twig */
class __TwigTemplate_56fdda041cc5b30900df6054c0b3ad92e248e6dbce74488a1f1d50ac0df5b5d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppCorredoresRiojaBundle:Default:corredores1.html.twig", "AppCorredoresRiojaBundle:Default:carrera.html.twig", 1);
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
        $__internal_df6d48de005797d3ea6bc8c34d20a16a53e591ab4608fe17ea977b74804f8028 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df6d48de005797d3ea6bc8c34d20a16a53e591ab4608fe17ea977b74804f8028->enter($__internal_df6d48de005797d3ea6bc8c34d20a16a53e591ab4608fe17ea977b74804f8028_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppCorredoresRiojaBundle:Default:carrera.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df6d48de005797d3ea6bc8c34d20a16a53e591ab4608fe17ea977b74804f8028->leave($__internal_df6d48de005797d3ea6bc8c34d20a16a53e591ab4608fe17ea977b74804f8028_prof);

    }

    // line 5
    public function block_English($context, array $blocks = array())
    {
        $__internal_5841c6f13a5580ffcfc71453a696a8ef52024c5ead626169d777972a05dc38d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5841c6f13a5580ffcfc71453a696a8ef52024c5ead626169d777972a05dc38d3->enter($__internal_5841c6f13a5580ffcfc71453a696a8ef52024c5ead626169d777972a05dc38d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "English"));

        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_carrera.en", array("slug" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["carrera"]) || array_key_exists("carrera", $context) ? $context["carrera"] : (function () { throw new Twig_Error_Runtime('Variable "carrera" does not exist.', 5, $this->getSourceContext()); })()), "organizador", array()), "slug", array()))), "html", null, true);
        echo "\">";
        
        $__internal_5841c6f13a5580ffcfc71453a696a8ef52024c5ead626169d777972a05dc38d3->leave($__internal_5841c6f13a5580ffcfc71453a696a8ef52024c5ead626169d777972a05dc38d3_prof);

    }

    // line 6
    public function block_Español($context, array $blocks = array())
    {
        $__internal_8538b0ad32865c2b92ea7a50c99e632b81415e013cee365a13585aba397d68e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8538b0ad32865c2b92ea7a50c99e632b81415e013cee365a13585aba397d68e9->enter($__internal_8538b0ad32865c2b92ea7a50c99e632b81415e013cee365a13585aba397d68e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Español"));

        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_carrera.es", array("slug" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["carrera"]) || array_key_exists("carrera", $context) ? $context["carrera"] : (function () { throw new Twig_Error_Runtime('Variable "carrera" does not exist.', 6, $this->getSourceContext()); })()), "organizador", array()), "slug", array()))), "html", null, true);
        echo "\">";
        
        $__internal_8538b0ad32865c2b92ea7a50c99e632b81415e013cee365a13585aba397d68e9->leave($__internal_8538b0ad32865c2b92ea7a50c99e632b81415e013cee365a13585aba397d68e9_prof);

    }

    // line 9
    public function block_migas($context, array $blocks = array())
    {
        $__internal_15bddff552f4e7551238c9d0b6a2e7742816f559614872e0192af2f444bec2ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15bddff552f4e7551238c9d0b6a2e7742816f559614872e0192af2f444bec2ae->enter($__internal_15bddff552f4e7551238c9d0b6a2e7742816f559614872e0192af2f444bec2ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "migas"));

        // line 10
        echo "        <div class=\"clear\"></div> 
    ";
        
        $__internal_15bddff552f4e7551238c9d0b6a2e7742816f559614872e0192af2f444bec2ae->leave($__internal_15bddff552f4e7551238c9d0b6a2e7742816f559614872e0192af2f444bec2ae_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_dd15ad20afd52bc248151d0f5491ce5079ac9c2d78388eae725ab4d1bbc00ce6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd15ad20afd52bc248151d0f5491ce5079ac9c2d78388eae725ab4d1bbc00ce6->enter($__internal_dd15ad20afd52bc248151d0f5491ce5079ac9c2d78388eae725ab4d1bbc00ce6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "        <div class=\"centro\">
            <h1>";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["carrera"]) || array_key_exists("carrera", $context) ? $context["carrera"] : (function () { throw new Twig_Error_Runtime('Variable "carrera" does not exist.', 15, $this->getSourceContext()); })()), "nombre", array()), "html", null, true);
        echo "</h1>
            <div class=\"parteCelda\">
                <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("bundles/appcorredoresrioja/images/" . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["carrera"]) || array_key_exists("carrera", $context) ? $context["carrera"] : (function () { throw new Twig_Error_Runtime('Variable "carrera" does not exist.', 17, $this->getSourceContext()); })()), "imagen", array()))), "html", null, true);
        echo "\"/>
            </div>
            <div class=\"parteCelda2\">
                <p>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["carrera"]) || array_key_exists("carrera", $context) ? $context["carrera"] : (function () { throw new Twig_Error_Runtime('Variable "carrera" does not exist.', 20, $this->getSourceContext()); })()), "descripcion", array()), "html", null, true);
        echo "</p>
                <p>Fecha celebración: ";
        // line 21
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["carrera"]) || array_key_exists("carrera", $context) ? $context["carrera"] : (function () { throw new Twig_Error_Runtime('Variable "carrera" does not exist.', 21, $this->getSourceContext()); })()), "fechacelebracion", array()), "Y/m/d h:m"), "html", null, true);
        echo "
                <p>Distancia: ";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["carrera"]) || array_key_exists("carrera", $context) ? $context["carrera"] : (function () { throw new Twig_Error_Runtime('Variable "carrera" does not exist.', 22, $this->getSourceContext()); })()), "distancia", array()), "html", null, true);
        echo "</p>
                <p>Organiza: <a href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_organizacion", array("slug" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["carrera"]) || array_key_exists("carrera", $context) ? $context["carrera"] : (function () { throw new Twig_Error_Runtime('Variable "carrera" does not exist.', 23, $this->getSourceContext()); })()), "organizador", array()), "slug", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["carrera"]) || array_key_exists("carrera", $context) ? $context["carrera"] : (function () { throw new Twig_Error_Runtime('Variable "carrera" does not exist.', 23, $this->getSourceContext()); })()), "organizador", array()), "nombre", array()), "html", null, true);
        echo "</a></p>  
            </div>
        </div>
        <div class=\"clear\"></div>   
        <div class=\"centro\">
            ";
        // line 28
        if ((twig_date_converter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["carrera"]) || array_key_exists("carrera", $context) ? $context["carrera"] : (function () { throw new Twig_Error_Runtime('Variable "carrera" does not exist.', 28, $this->getSourceContext()); })()), "fechalimiteinscripcion", array())) > twig_date_converter($this->env, "now"))) {
            // line 29
            echo "                <h3>Tienes hasta el  ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["carrera"]) || array_key_exists("carrera", $context) ? $context["carrera"] : (function () { throw new Twig_Error_Runtime('Variable "carrera" does not exist.', 29, $this->getSourceContext()); })()), "fechalimiteinscripcion", array()), "d \\d\\e M \\d\\e Y"), "html", null, true);
            echo " para inscribirte. </h3>
                <div style=\"float:right; padding:10px 5px\">
                    <a style=\"padding:5px 8px 5px 10px;background:#5C7E6D;color:#FFF\" 
                       href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("inscribir_corredor", array("slug" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["carrera"]) || array_key_exists("carrera", $context) ? $context["carrera"] : (function () { throw new Twig_Error_Runtime('Variable "carrera" does not exist.', 32, $this->getSourceContext()); })()), "slug", array()))), "html", null, true);
            echo "\" ><span>Inscríbete</span> </a>
                </div>
                <div class=\"clear\"></div>   
                <h3>Inscritos:</h3>
                ";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["corredores"]) || array_key_exists("corredores", $context) ? $context["corredores"] : (function () { throw new Twig_Error_Runtime('Variable "corredores" does not exist.', 36, $this->getSourceContext()); })()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["participante"]) {
                // line 37
                echo "                    ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["participante"], "corredor", array()), "nombre", array()), "html", null, true);
                echo "  ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["participante"], "corredor", array()), "apellidos", array()), "html", null, true);
                echo " <br/>
                ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 39
                echo "                    Todavía no hay inscritos en esta carrera.
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['participante'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo " 


            ";
        } else {
            // line 44
            echo "                <h3>Lo sentimos, ya no te puedes inscribir a esta carrera.</h3>   
                <div class=\"clear\"></div> 
                <h3>Clasificación:</h3>   
                <table>
                    <thead>
                        <tr>
                            <th>Posición</th>
                            <th>Nombre</th>
                            <th>Tiempo</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["corredores"]) || array_key_exists("corredores", $context) ? $context["corredores"] : (function () { throw new Twig_Error_Runtime('Variable "corredores" does not exist.', 56, $this->getSourceContext()); })()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["participante"]) {
                // line 57
                echo "                            <tr>
                                <td>
                                    ";
                // line 59
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index", array()), "html", null, true);
                echo "
                                </td>
                                <td>   
                                    ";
                // line 62
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["participante"], "corredor", array()), "nombre", array()), "html", null, true);
                echo "  ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["participante"], "corredor", array()), "apellidos", array()), "html", null, true);
                echo " <br/>
                                </td>
                                <th>
                                    ";
                // line 65
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["participante"], "tiempo", array()), "h:i:s"), "html", null, true);
                echo "
                                </th>
                            </tr>
                        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['participante'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo " 
                    </tbody>
                </table>

            ";
        }
        // line 73
        echo "        </div>





        <div class=\"clear\"> </div>   
    ";
        
        $__internal_dd15ad20afd52bc248151d0f5491ce5079ac9c2d78388eae725ab4d1bbc00ce6->leave($__internal_dd15ad20afd52bc248151d0f5491ce5079ac9c2d78388eae725ab4d1bbc00ce6_prof);

    }

    public function getTemplateName()
    {
        return "AppCorredoresRiojaBundle:Default:carrera.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 73,  232 => 68,  214 => 65,  206 => 62,  200 => 59,  196 => 57,  179 => 56,  165 => 44,  159 => 40,  152 => 39,  142 => 37,  137 => 36,  130 => 32,  123 => 29,  121 => 28,  111 => 23,  107 => 22,  103 => 21,  99 => 20,  93 => 17,  88 => 15,  85 => 14,  79 => 13,  71 => 10,  65 => 9,  51 => 6,  37 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"AppCorredoresRiojaBundle:Default:corredores1.html.twig\" %}



{% block English %}<a href=\"{{ path('show_carrera.en',{'slug':carrera.organizador.slug}) }}\">{% endblock %}
{% block Español %}<a href=\"{{ path('show_carrera.es',{'slug':carrera.organizador.slug}) }}\">{% endblock %}


    {% block migas %}
        <div class=\"clear\"></div> 
    {% endblock %}

    {% block body %}
        <div class=\"centro\">
            <h1>{{ carrera.nombre }}</h1>
            <div class=\"parteCelda\">
                <img src=\"{{ asset('bundles/appcorredoresrioja/images/' ~ carrera.imagen) }}\"/>
            </div>
            <div class=\"parteCelda2\">
                <p>{{ carrera.descripcion }}</p>
                <p>Fecha celebración: {{ carrera.fechacelebracion | date('Y/m/d h:m') }}
                <p>Distancia: {{ carrera.distancia }}</p>
                <p>Organiza: <a href=\"{{ path('show_organizacion',{'slug':carrera.organizador.slug}) }}\">{{ carrera.organizador.nombre }}</a></p>  
            </div>
        </div>
        <div class=\"clear\"></div>   
        <div class=\"centro\">
            {% if date(carrera.fechalimiteinscripcion) > date('now') %}
                <h3>Tienes hasta el  {{ carrera.fechalimiteinscripcion | date('d \\\\d\\\\e M \\\\d\\\\e Y') }} para inscribirte. </h3>
                <div style=\"float:right; padding:10px 5px\">
                    <a style=\"padding:5px 8px 5px 10px;background:#5C7E6D;color:#FFF\" 
                       href=\"{{ path('inscribir_corredor', {'slug':carrera.slug}) }}\" ><span>Inscríbete</span> </a>
                </div>
                <div class=\"clear\"></div>   
                <h3>Inscritos:</h3>
                {% for participante in corredores %}
                    {{ participante.corredor.nombre }}  {{ participante.corredor.apellidos }} <br/>
                {% else %}
                    Todavía no hay inscritos en esta carrera.
                {% endfor %} 


            {% else %}
                <h3>Lo sentimos, ya no te puedes inscribir a esta carrera.</h3>   
                <div class=\"clear\"></div> 
                <h3>Clasificación:</h3>   
                <table>
                    <thead>
                        <tr>
                            <th>Posición</th>
                            <th>Nombre</th>
                            <th>Tiempo</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for participante in corredores %}
                            <tr>
                                <td>
                                    {{ loop.index }}
                                </td>
                                <td>   
                                    {{ participante.corredor.nombre }}  {{ participante.corredor.apellidos }} <br/>
                                </td>
                                <th>
                                    {{ participante.tiempo | date('h:i:s')}}
                                </th>
                            </tr>
                        {% endfor %} 
                    </tbody>
                </table>

            {% endif %}
        </div>





        <div class=\"clear\"> </div>   
    {% endblock %} ", "AppCorredoresRiojaBundle:Default:carrera.html.twig", "/home/joheras/Symfony/corredoresporlarioja/corredoresporlarioja/src/App/CorredoresRiojaBundle/Resources/views/Default/carrera.html.twig");
    }
}
