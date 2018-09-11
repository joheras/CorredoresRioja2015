<?php

/* AppCorredoresRiojaBundle:Default:base.html.twig */
class __TwigTemplate_b0f871b6c4bf793f9f9599c0766ed6c9da54d8273d092154582bbd48c48cc7fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'English' => array($this, 'block_English'),
            'Español' => array($this, 'block_Español'),
            'pestanias' => array($this, 'block_pestanias'),
            'menu' => array($this, 'block_menu'),
            'migas' => array($this, 'block_migas'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0d593ab2483a661281ce1cf5eefd69ebecda45f57c98d72216c58a6205071f21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d593ab2483a661281ce1cf5eefd69ebecda45f57c98d72216c58a6205071f21->enter($__internal_0d593ab2483a661281ce1cf5eefd69ebecda45f57c98d72216c58a6205071f21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppCorredoresRiojaBundle:Default:base.html.twig"));

        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.01//EN\" \"http://www.w3.org/TR/html4/strict.dtd\">
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" lang=\"es-ES\">
        <title>Bienvenido a Carreras por La Rioja</title>
        <meta name=\"description\" content=\"Aplicación de prueba de Desarrollo de Aplicaciones para Internet; Máster en Informática; Universidad de La Rioja.\" lang=\"es-ES\">
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo " 

    </head>

    <body >
        <div class=\"logo\">Carreras por La Rioja</div>

        <div class=\"sombra\">
            <div class=\"nucleo\">
                <div id=\"lang\">
                    
                    ";
        // line 20
        $context["locale"] = twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 20, $this->getSourceContext()); })()), "request", array()), "locale", array());
        // line 21
        echo "
                    ";
        // line 22
        if (((isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new Twig_Error_Runtime('Variable "locale" does not exist.', 22, $this->getSourceContext()); })()) == "es")) {
            // line 23
            echo "                        Español &nbsp; | &nbsp;
                        ";
            // line 24
            $this->displayBlock('English', $context, $blocks);
            echo "English</a>
                    ";
        } elseif ((        // line 25
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new Twig_Error_Runtime('Variable "locale" does not exist.', 25, $this->getSourceContext()); })()) == "en")) {
            // line 26
            echo "                       ";
            $this->displayBlock('Español', $context, $blocks);
            echo "Español</a> &nbsp; | &nbsp;
                        English
                    ";
        }
        // line 29
        echo "                </div>
            </div>
        </div>

    ";
        // line 33
        $this->displayBlock('pestanias', $context, $blocks);
        echo "    

";
        // line 35
        $this->displayBlock('menu', $context, $blocks);
        echo "    


<div class=\"sombra\">
    <div class=\"nucleo\">
        <div id=\"migas\">
        ";
        // line 41
        $this->displayBlock('migas', $context, $blocks);
        // line 42
        echo "
    </div>



    <div class=\"contenido\">
        ";
        // line 48
        $this->displayBlock('body', $context, $blocks);
        echo " 
    </div>
    <div class=\"clear\"></div>  
    <div class=\"separa\"></div>

    <div class=\"pie\">
        <span class=\"pie_izda\">
            <a href=\"mailto:jonathan.heras@unirioja.es\">";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("contacto"), "html", null, true);
        echo "</a> </span>
        <span class=\"pie_dcha\">
            &copy; 2015 Jónathan Heras Vicente  </span>
        <div class=\"clear\"></div>  
    </div>

</div>
</body>
</html>

";
        
        $__internal_0d593ab2483a661281ce1cf5eefd69ebecda45f57c98d72216c58a6205071f21->leave($__internal_0d593ab2483a661281ce1cf5eefd69ebecda45f57c98d72216c58a6205071f21_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e8f9b5754eba0dd4ffdbb9ed43082e91d0d4d51a4186512e57baf82c88df6585 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8f9b5754eba0dd4ffdbb9ed43082e91d0d4d51a4186512e57baf82c88df6585->enter($__internal_e8f9b5754eba0dd4ffdbb9ed43082e91d0d4d51a4186512e57baf82c88df6585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/appcorredoresrioja/css/carrerasrioja.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\" type=\"text/css\">
        ";
        
        $__internal_e8f9b5754eba0dd4ffdbb9ed43082e91d0d4d51a4186512e57baf82c88df6585->leave($__internal_e8f9b5754eba0dd4ffdbb9ed43082e91d0d4d51a4186512e57baf82c88df6585_prof);

    }

    // line 24
    public function block_English($context, array $blocks = array())
    {
        $__internal_77b405dc94828dc52937300caa63f3220e4d3db88ba0d81a6409d63fbebc21e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77b405dc94828dc52937300caa63f3220e4d3db88ba0d81a6409d63fbebc21e3->enter($__internal_77b405dc94828dc52937300caa63f3220e4d3db88ba0d81a6409d63fbebc21e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "English"));

        echo "<a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("portada.en");
        echo "\">";
        
        $__internal_77b405dc94828dc52937300caa63f3220e4d3db88ba0d81a6409d63fbebc21e3->leave($__internal_77b405dc94828dc52937300caa63f3220e4d3db88ba0d81a6409d63fbebc21e3_prof);

    }

    // line 26
    public function block_Español($context, array $blocks = array())
    {
        $__internal_316e21cfa6abac9c26ca3a60e01f6765068da7061f5eeefbff19b509def7ae1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_316e21cfa6abac9c26ca3a60e01f6765068da7061f5eeefbff19b509def7ae1d->enter($__internal_316e21cfa6abac9c26ca3a60e01f6765068da7061f5eeefbff19b509def7ae1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Español"));

        echo "<a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("portada.es");
        echo "\">";
        
        $__internal_316e21cfa6abac9c26ca3a60e01f6765068da7061f5eeefbff19b509def7ae1d->leave($__internal_316e21cfa6abac9c26ca3a60e01f6765068da7061f5eeefbff19b509def7ae1d_prof);

    }

    // line 33
    public function block_pestanias($context, array $blocks = array())
    {
        $__internal_84ba7b48e2b7763f37498003cd4e7dd1e74097457c6a24ceee215921a96b3bca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84ba7b48e2b7763f37498003cd4e7dd1e74097457c6a24ceee215921a96b3bca->enter($__internal_84ba7b48e2b7763f37498003cd4e7dd1e74097457c6a24ceee215921a96b3bca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pestanias"));

        
        $__internal_84ba7b48e2b7763f37498003cd4e7dd1e74097457c6a24ceee215921a96b3bca->leave($__internal_84ba7b48e2b7763f37498003cd4e7dd1e74097457c6a24ceee215921a96b3bca_prof);

    }

    // line 35
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c9a20c461c6df60c25ad8a8c65bc13ba14cde08a1e5ed64ad1ddf81074181680 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9a20c461c6df60c25ad8a8c65bc13ba14cde08a1e5ed64ad1ddf81074181680->enter($__internal_c9a20c461c6df60c25ad8a8c65bc13ba14cde08a1e5ed64ad1ddf81074181680_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        
        $__internal_c9a20c461c6df60c25ad8a8c65bc13ba14cde08a1e5ed64ad1ddf81074181680->leave($__internal_c9a20c461c6df60c25ad8a8c65bc13ba14cde08a1e5ed64ad1ddf81074181680_prof);

    }

    // line 41
    public function block_migas($context, array $blocks = array())
    {
        $__internal_d4bf6d96d5b4a684f6acf33e6042ff78d98ccbd28a12c1b09d37f43f52460e4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4bf6d96d5b4a684f6acf33e6042ff78d98ccbd28a12c1b09d37f43f52460e4c->enter($__internal_d4bf6d96d5b4a684f6acf33e6042ff78d98ccbd28a12c1b09d37f43f52460e4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "migas"));

        
        $__internal_d4bf6d96d5b4a684f6acf33e6042ff78d98ccbd28a12c1b09d37f43f52460e4c->leave($__internal_d4bf6d96d5b4a684f6acf33e6042ff78d98ccbd28a12c1b09d37f43f52460e4c_prof);

    }

    // line 48
    public function block_body($context, array $blocks = array())
    {
        $__internal_e994e9e8df27f77fb31d0ead657061b254c4f832b0602ad389bf1d117f94fbc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e994e9e8df27f77fb31d0ead657061b254c4f832b0602ad389bf1d117f94fbc3->enter($__internal_e994e9e8df27f77fb31d0ead657061b254c4f832b0602ad389bf1d117f94fbc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " ";
        
        $__internal_e994e9e8df27f77fb31d0ead657061b254c4f832b0602ad389bf1d117f94fbc3->leave($__internal_e994e9e8df27f77fb31d0ead657061b254c4f832b0602ad389bf1d117f94fbc3_prof);

    }

    public function getTemplateName()
    {
        return "AppCorredoresRiojaBundle:Default:base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 48,  199 => 41,  188 => 35,  177 => 33,  163 => 26,  149 => 24,  139 => 8,  133 => 7,  115 => 55,  105 => 48,  97 => 42,  95 => 41,  86 => 35,  81 => 33,  75 => 29,  68 => 26,  66 => 25,  62 => 24,  59 => 23,  57 => 22,  54 => 21,  52 => 20,  39 => 9,  37 => 7,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.01//EN\" \"http://www.w3.org/TR/html4/strict.dtd\">
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" lang=\"es-ES\">
        <title>Bienvenido a Carreras por La Rioja</title>
        <meta name=\"description\" content=\"Aplicación de prueba de Desarrollo de Aplicaciones para Internet; Máster en Informática; Universidad de La Rioja.\" lang=\"es-ES\">
        {% block stylesheets %}
            <link href=\"{{ asset('bundles/appcorredoresrioja/css/carrerasrioja.css')}}\" rel=\"stylesheet\" media=\"all\" type=\"text/css\">
        {% endblock %} 

    </head>

    <body >
        <div class=\"logo\">Carreras por La Rioja</div>

        <div class=\"sombra\">
            <div class=\"nucleo\">
                <div id=\"lang\">
                    
                    {% set locale = app.request.locale %}

                    {% if locale == 'es' %}
                        Español &nbsp; | &nbsp;
                        {% block English %}<a href=\"{{ path('portada.en') }}\">{% endblock %}English</a>
                    {% elseif locale == 'en' %}
                       {% block Español %}<a href=\"{{ path('portada.es') }}\">{% endblock %}Español</a> &nbsp; | &nbsp;
                        English
                    {% endif %}
                </div>
            </div>
        </div>

    {% block pestanias %}{% endblock %}    

{% block menu %}{% endblock %}    


<div class=\"sombra\">
    <div class=\"nucleo\">
        <div id=\"migas\">
        {% block migas %}{% endblock %}

    </div>



    <div class=\"contenido\">
        {% block body %} {% endblock %} 
    </div>
    <div class=\"clear\"></div>  
    <div class=\"separa\"></div>

    <div class=\"pie\">
        <span class=\"pie_izda\">
            <a href=\"mailto:jonathan.heras@unirioja.es\">{{ 'contacto' | trans }}</a> </span>
        <span class=\"pie_dcha\">
            &copy; 2015 Jónathan Heras Vicente  </span>
        <div class=\"clear\"></div>  
    </div>

</div>
</body>
</html>

", "AppCorredoresRiojaBundle:Default:base.html.twig", "/home/joheras/Symfony/corredoresporlarioja/corredoresporlarioja/src/App/CorredoresRiojaBundle/Resources/views/Default/base.html.twig");
    }
}
