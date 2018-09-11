<?php

/* @WebProfiler/Profiler/results.html.twig */
class __TwigTemplate_32bc328ee16d55fb9df5b3bf7900913e123cadf380b9562f937c936ddc6bfd74 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/results.html.twig", 1);
        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_527eab4dd7f186fc763d17b209e4c1ef168c4a0dab594603d37bc29d01bf6b2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_527eab4dd7f186fc763d17b209e4c1ef168c4a0dab594603d37bc29d01bf6b2f->enter($__internal_527eab4dd7f186fc763d17b209e4c1ef168c4a0dab594603d37bc29d01bf6b2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/results.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_527eab4dd7f186fc763d17b209e4c1ef168c4a0dab594603d37bc29d01bf6b2f->leave($__internal_527eab4dd7f186fc763d17b209e4c1ef168c4a0dab594603d37bc29d01bf6b2f_prof);

    }

    // line 3
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6efee366fc70bc07b31d89e40763dd90f9bb474dbdd9dc43073a1c69433b2fb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6efee366fc70bc07b31d89e40763dd90f9bb474dbdd9dc43073a1c69433b2fb9->enter($__internal_6efee366fc70bc07b31d89e40763dd90f9bb474dbdd9dc43073a1c69433b2fb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 4
        echo "    <h2>Search Results</h2>

    ";
        // line 6
        if ((isset($context["tokens"]) || array_key_exists("tokens", $context) ? $context["tokens"] : (function () { throw new Twig_Error_Runtime('Variable "tokens" does not exist.', 6, $this->getSourceContext()); })())) {
            // line 7
            echo "        <table>
            <thead>
                <tr>
                    <th scope=\"col\">Token</th>
                    <th scope=\"col\">IP</th>
                    <th scope=\"col\">Method</th>
                    <th scope=\"col\">URL</th>
                    <th scope=\"col\">Time</th>
                    <th scope=\"col\">Status</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tokens"]) || array_key_exists("tokens", $context) ? $context["tokens"] : (function () { throw new Twig_Error_Runtime('Variable "tokens" does not exist.', 19, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["elements"]) {
                // line 20
                echo "                    <tr>
                        <td><a href=\"";
                // line 21
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler", array("token" => twig_get_attribute($this->env, $this->getSourceContext(), $context["elements"], "token", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["elements"], "token", array()), "html", null, true);
                echo "</a></td>
                        <td>";
                // line 22
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["elements"], "ip", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 23
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["elements"], "method", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 24
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["elements"], "url", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 25
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["elements"], "time", array()), "r"), "html", null, true);
                echo "</td>
                        <td>
                        ";
                // line 27
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["elements"], "status_code", array(), "any", true, true) && twig_get_attribute($this->env, $this->getSourceContext(), $context["elements"], "status_code", array()))) {
                    // line 28
                    echo "                            ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["elements"], "status_code", array()), "html", null, true);
                    echo "
                        ";
                } else {
                    // line 30
                    echo "                            unknown
                        ";
                }
                // line 32
                echo "                        </td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['elements'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "            </tbody>
        </table>
    ";
        } else {
            // line 38
            echo "        <p>
            <em>The query returned no result.</em>
        </p>
    ";
        }
        // line 42
        echo "
";
        
        $__internal_6efee366fc70bc07b31d89e40763dd90f9bb474dbdd9dc43073a1c69433b2fb9->leave($__internal_6efee366fc70bc07b31d89e40763dd90f9bb474dbdd9dc43073a1c69433b2fb9_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/results.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 42,  115 => 38,  110 => 35,  102 => 32,  98 => 30,  92 => 28,  90 => 27,  85 => 25,  81 => 24,  77 => 23,  73 => 22,  67 => 21,  64 => 20,  60 => 19,  46 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block panel %}
    <h2>Search Results</h2>

    {% if tokens %}
        <table>
            <thead>
                <tr>
                    <th scope=\"col\">Token</th>
                    <th scope=\"col\">IP</th>
                    <th scope=\"col\">Method</th>
                    <th scope=\"col\">URL</th>
                    <th scope=\"col\">Time</th>
                    <th scope=\"col\">Status</th>
                </tr>
            </thead>
            <tbody>
                {% for elements in tokens %}
                    <tr>
                        <td><a href=\"{{ path('_profiler', { 'token': elements.token }) }}\">{{ elements.token }}</a></td>
                        <td>{{ elements.ip }}</td>
                        <td>{{ elements.method }}</td>
                        <td>{{ elements.url }}</td>
                        <td>{{ elements.time|date('r') }}</td>
                        <td>
                        {% if elements.status_code is defined and elements.status_code %}
                            {{ elements.status_code }}
                        {% else %}
                            unknown
                        {% endif %}
                        </td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    {% else %}
        <p>
            <em>The query returned no result.</em>
        </p>
    {% endif %}

{% endblock %}
", "@WebProfiler/Profiler/results.html.twig", "/home/joheras/corredoresporlarioja/corredoresporlarioja/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/results.html.twig");
    }
}
