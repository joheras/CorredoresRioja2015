<?php

/* AppCorredoresRiojaBundle:Default:registro.html.twig */
class __TwigTemplate_a7fbda066b3f439a3683c99b301c71450d7b0eed8c863ec647a3e08a27ae1669 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppCorredoresRiojaBundle:Default:corredores1.html.twig", "AppCorredoresRiojaBundle:Default:registro.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
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
        $__internal_037b624c86138f1c7d6237c58eaa6fa4dafb556b1b1db58cad00cf49fee596c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_037b624c86138f1c7d6237c58eaa6fa4dafb556b1b1db58cad00cf49fee596c1->enter($__internal_037b624c86138f1c7d6237c58eaa6fa4dafb556b1b1db58cad00cf49fee596c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppCorredoresRiojaBundle:Default:registro.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_037b624c86138f1c7d6237c58eaa6fa4dafb556b1b1db58cad00cf49fee596c1->leave($__internal_037b624c86138f1c7d6237c58eaa6fa4dafb556b1b1db58cad00cf49fee596c1_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0485537aa28c4f2a2fc40eb4816b588439427f313e0aba47416b132569899126 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0485537aa28c4f2a2fc40eb4816b588439427f313e0aba47416b132569899126->enter($__internal_0485537aa28c4f2a2fc40eb4816b588439427f313e0aba47416b132569899126_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/appcorredoresrioja/css/formulario.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\" type=\"text/css\">
";
        
        $__internal_0485537aa28c4f2a2fc40eb4816b588439427f313e0aba47416b132569899126->leave($__internal_0485537aa28c4f2a2fc40eb4816b588439427f313e0aba47416b132569899126_prof);

    }

    // line 8
    public function block_English($context, array $blocks = array())
    {
        $__internal_b421fd2ede6d33a67158b91c9a53bec8b780ada4784a40b7f47d0dac9958f844 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b421fd2ede6d33a67158b91c9a53bec8b780ada4784a40b7f47d0dac9958f844->enter($__internal_b421fd2ede6d33a67158b91c9a53bec8b780ada4784a40b7f47d0dac9958f844_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "English"));

        echo "<a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("registro.en");
        echo "\">";
        
        $__internal_b421fd2ede6d33a67158b91c9a53bec8b780ada4784a40b7f47d0dac9958f844->leave($__internal_b421fd2ede6d33a67158b91c9a53bec8b780ada4784a40b7f47d0dac9958f844_prof);

    }

    // line 9
    public function block_Español($context, array $blocks = array())
    {
        $__internal_b7ccaaeda68226c98523dc1e9c00aa64f153cb089fcb6c27d9575af49123900f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7ccaaeda68226c98523dc1e9c00aa64f153cb089fcb6c27d9575af49123900f->enter($__internal_b7ccaaeda68226c98523dc1e9c00aa64f153cb089fcb6c27d9575af49123900f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Español"));

        echo "<a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("registro.es");
        echo "\">";
        
        $__internal_b7ccaaeda68226c98523dc1e9c00aa64f153cb089fcb6c27d9575af49123900f->leave($__internal_b7ccaaeda68226c98523dc1e9c00aa64f153cb089fcb6c27d9575af49123900f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_3e7e29766dc4b51f01883baaddd4aa453fa47ce499a8a0d53f49fd6bf47b5de7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e7e29766dc4b51f01883baaddd4aa453fa47ce499a8a0d53f49fd6bf47b5de7->enter($__internal_3e7e29766dc4b51f01883baaddd4aa453fa47ce499a8a0d53f49fd6bf47b5de7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "        <div class=\"clear\"> </div>   
    <h1>Nuevo corredor</h1>
    <form action=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("registro");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new Twig_Error_Runtime('Variable "formulario" does not exist.', 14, $this->getSourceContext()); })()), 'enctype');
        echo ">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new Twig_Error_Runtime('Variable "formulario" does not exist.', 15, $this->getSourceContext()); })()), 'widget');
        echo "
    <input class=\"button\" type=\"submit\" value=\"Registro\"/>
   
    </form>
    <div class=\"clear\"> </div>   
";
        
        $__internal_3e7e29766dc4b51f01883baaddd4aa453fa47ce499a8a0d53f49fd6bf47b5de7->leave($__internal_3e7e29766dc4b51f01883baaddd4aa453fa47ce499a8a0d53f49fd6bf47b5de7_prof);

    }

    public function getTemplateName()
    {
        return "AppCorredoresRiojaBundle:Default:registro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 15,  95 => 14,  91 => 12,  85 => 11,  71 => 9,  57 => 8,  48 => 5,  43 => 4,  37 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"AppCorredoresRiojaBundle:Default:corredores1.html.twig\" %}

{% block stylesheets %}
    {{ parent() }}
    <link href=\"{{ asset('bundles/appcorredoresrioja/css/formulario.css')}}\" rel=\"stylesheet\" media=\"all\" type=\"text/css\">
{% endblock %}

{% block English %}<a href=\"{{ path('registro.en') }}\">{% endblock %}
{% block Español %}<a href=\"{{ path('registro.es') }}\">{% endblock %}

{% block body %}
        <div class=\"clear\"> </div>   
    <h1>Nuevo corredor</h1>
    <form action=\"{{ path('registro') }}\" method=\"post\" {{ form_enctype(formulario) }}>
    {{ form_widget(formulario) }}
    <input class=\"button\" type=\"submit\" value=\"Registro\"/>
   
    </form>
    <div class=\"clear\"> </div>   
{% endblock %} ", "AppCorredoresRiojaBundle:Default:registro.html.twig", "/home/joheras/corredoresporlarioja/corredoresporlarioja/src/App/CorredoresRiojaBundle/Resources/views/Default/registro.html.twig");
    }
}
