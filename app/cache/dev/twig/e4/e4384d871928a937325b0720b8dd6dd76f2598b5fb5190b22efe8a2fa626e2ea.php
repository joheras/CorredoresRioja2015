<?php

/* AppCorredoresRiojaBundle:Default:organizador.html.twig */
class __TwigTemplate_a2dcbafe331413ef904b18deb5daf69c1f629e02c576c7283ed7fdfec2866f2e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppCorredoresRiojaBundle:Default:corredores1.html.twig", "AppCorredoresRiojaBundle:Default:organizador.html.twig", 1);
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
        $__internal_e4f3f2c813c4f650612867c02469124110750f2af85aea80f9335c58999ffae0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4f3f2c813c4f650612867c02469124110750f2af85aea80f9335c58999ffae0->enter($__internal_e4f3f2c813c4f650612867c02469124110750f2af85aea80f9335c58999ffae0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppCorredoresRiojaBundle:Default:organizador.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4f3f2c813c4f650612867c02469124110750f2af85aea80f9335c58999ffae0->leave($__internal_e4f3f2c813c4f650612867c02469124110750f2af85aea80f9335c58999ffae0_prof);

    }

    // line 3
    public function block_migas($context, array $blocks = array())
    {
        $__internal_4de301e23300ee49a9d9e39845717a822eabd43b74c134fbb10725a4ba97ce98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4de301e23300ee49a9d9e39845717a822eabd43b74c134fbb10725a4ba97ce98->enter($__internal_4de301e23300ee49a9d9e39845717a822eabd43b74c134fbb10725a4ba97ce98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "migas"));

        // line 4
        echo "    <div class=\"clear\"></div> 
";
        
        $__internal_4de301e23300ee49a9d9e39845717a822eabd43b74c134fbb10725a4ba97ce98->leave($__internal_4de301e23300ee49a9d9e39845717a822eabd43b74c134fbb10725a4ba97ce98_prof);

    }

    // line 7
    public function block_English($context, array $blocks = array())
    {
        $__internal_2bc3dcc621a9068039e866042137f57f7d0003eec0bd336fa523d703790f259e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bc3dcc621a9068039e866042137f57f7d0003eec0bd336fa523d703790f259e->enter($__internal_2bc3dcc621a9068039e866042137f57f7d0003eec0bd336fa523d703790f259e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "English"));

        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_organizacion.en", array("slug" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["organizacion"]) || array_key_exists("organizacion", $context) ? $context["organizacion"] : (function () { throw new Twig_Error_Runtime('Variable "organizacion" does not exist.', 7, $this->getSourceContext()); })()), "slug", array()))), "html", null, true);
        echo "\">";
        
        $__internal_2bc3dcc621a9068039e866042137f57f7d0003eec0bd336fa523d703790f259e->leave($__internal_2bc3dcc621a9068039e866042137f57f7d0003eec0bd336fa523d703790f259e_prof);

    }

    // line 8
    public function block_Español($context, array $blocks = array())
    {
        $__internal_c0be8980543244d41e167dd6453a66f6938075cbc8252f0cb642f1577dbf35ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0be8980543244d41e167dd6453a66f6938075cbc8252f0cb642f1577dbf35ff->enter($__internal_c0be8980543244d41e167dd6453a66f6938075cbc8252f0cb642f1577dbf35ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Español"));

        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_organizacion.es", array("slug" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["organizacion"]) || array_key_exists("organizacion", $context) ? $context["organizacion"] : (function () { throw new Twig_Error_Runtime('Variable "organizacion" does not exist.', 8, $this->getSourceContext()); })()), "slug", array()))), "html", null, true);
        echo "\">";
        
        $__internal_c0be8980543244d41e167dd6453a66f6938075cbc8252f0cb642f1577dbf35ff->leave($__internal_c0be8980543244d41e167dd6453a66f6938075cbc8252f0cb642f1577dbf35ff_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_4520b2ca2a32d7ccc2e7197b9f357f5f87ed7e6aa01472e050b6dee744f4e9ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4520b2ca2a32d7ccc2e7197b9f357f5f87ed7e6aa01472e050b6dee744f4e9ce->enter($__internal_4520b2ca2a32d7ccc2e7197b9f357f5f87ed7e6aa01472e050b6dee744f4e9ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    <div class=\"centro\">
        <h1>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["organizacion"]) || array_key_exists("organizacion", $context) ? $context["organizacion"] : (function () { throw new Twig_Error_Runtime('Variable "organizacion" does not exist.', 12, $this->getSourceContext()); })()), "nombre", array()), "html", null, true);
        echo "</h1>
        <p>";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["organizacion"]) || array_key_exists("organizacion", $context) ? $context["organizacion"] : (function () { throw new Twig_Error_Runtime('Variable "organizacion" does not exist.', 13, $this->getSourceContext()); })()), "nombre", array()), "html", null, true);
        echo "</p>
        <p><a href=\"mailto:";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["organizacion"]) || array_key_exists("organizacion", $context) ? $context["organizacion"] : (function () { throw new Twig_Error_Runtime('Variable "organizacion" does not exist.', 14, $this->getSourceContext()); })()), "email", array()), "html", null, true);
        echo "\">Contacta</a></p>
        <p>Carreras organizadas:</p>
        <ol>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["carreras"]) || array_key_exists("carreras", $context) ? $context["carreras"] : (function () { throw new Twig_Error_Runtime('Variable "carreras" does not exist.', 17, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["carrera"]) {
            // line 18
            echo "            <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_carrera", array("slug" => twig_get_attribute($this->env, $this->getSourceContext(), $context["carrera"], "slug", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["carrera"], "nombre", array()), "html", null, true);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['carrera'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "    
        </ol>
    </div>





    <div class=\"clear\"> </div>   
";
        
        $__internal_4520b2ca2a32d7ccc2e7197b9f357f5f87ed7e6aa01472e050b6dee744f4e9ce->leave($__internal_4520b2ca2a32d7ccc2e7197b9f357f5f87ed7e6aa01472e050b6dee744f4e9ce_prof);

    }

    public function getTemplateName()
    {
        return "AppCorredoresRiojaBundle:Default:organizador.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 19,  106 => 18,  102 => 17,  96 => 14,  92 => 13,  88 => 12,  85 => 11,  79 => 10,  65 => 8,  51 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"AppCorredoresRiojaBundle:Default:corredores1.html.twig\" %}

{% block migas %}
    <div class=\"clear\"></div> 
{% endblock %}

{% block English %}<a href=\"{{ path('show_organizacion.en',{'slug':organizacion.slug}) }}\">{% endblock %}
{% block Español %}<a href=\"{{ path('show_organizacion.es',{'slug':organizacion.slug}) }}\">{% endblock %}

{% block body %}
    <div class=\"centro\">
        <h1>{{ organizacion.nombre }}</h1>
        <p>{{ organizacion.nombre }}</p>
        <p><a href=\"mailto:{{ organizacion.email }}\">Contacta</a></p>
        <p>Carreras organizadas:</p>
        <ol>
        {% for carrera in carreras %}
            <li><a href=\"{{ path('show_carrera',{'slug':carrera.slug}) }}\">{{ carrera.nombre }}</a></li>
        {% endfor %}    
        </ol>
    </div>





    <div class=\"clear\"> </div>   
{% endblock %} ", "AppCorredoresRiojaBundle:Default:organizador.html.twig", "/home/joheras/Symfony/corredoresporlarioja/corredoresporlarioja/src/App/CorredoresRiojaBundle/Resources/views/Default/organizador.html.twig");
    }
}
