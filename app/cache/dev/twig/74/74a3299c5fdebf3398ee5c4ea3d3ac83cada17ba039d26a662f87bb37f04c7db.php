<?php

/* AppCorredoresRiojaBundle:Default:base.html.twig */
class __TwigTemplate_6539bc078a587a928b05be0b55c5fe62dc89f2cbf540693487de480f04cd1044 extends Twig_Template
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
        $__internal_7428ceaa0b1e8eb51b193e0dba46099269de493213acaf424cbd839c899faf66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7428ceaa0b1e8eb51b193e0dba46099269de493213acaf424cbd839c899faf66->enter($__internal_7428ceaa0b1e8eb51b193e0dba46099269de493213acaf424cbd839c899faf66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppCorredoresRiojaBundle:Default:base.html.twig"));

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
        
        $__internal_7428ceaa0b1e8eb51b193e0dba46099269de493213acaf424cbd839c899faf66->leave($__internal_7428ceaa0b1e8eb51b193e0dba46099269de493213acaf424cbd839c899faf66_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d1ffc2e05ec3116723ce75d0fbf4c9dc2da77350a4cdcf54ef8b6006017916ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1ffc2e05ec3116723ce75d0fbf4c9dc2da77350a4cdcf54ef8b6006017916ba->enter($__internal_d1ffc2e05ec3116723ce75d0fbf4c9dc2da77350a4cdcf54ef8b6006017916ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/appcorredoresrioja/css/carrerasrioja.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\" type=\"text/css\">
        ";
        
        $__internal_d1ffc2e05ec3116723ce75d0fbf4c9dc2da77350a4cdcf54ef8b6006017916ba->leave($__internal_d1ffc2e05ec3116723ce75d0fbf4c9dc2da77350a4cdcf54ef8b6006017916ba_prof);

    }

    // line 24
    public function block_English($context, array $blocks = array())
    {
        $__internal_2cb78191566e062f00b3ba2cc535a9e8a423c9b7ecac646784528cdcd107238e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cb78191566e062f00b3ba2cc535a9e8a423c9b7ecac646784528cdcd107238e->enter($__internal_2cb78191566e062f00b3ba2cc535a9e8a423c9b7ecac646784528cdcd107238e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "English"));

        echo "<a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("portada.en");
        echo "\">";
        
        $__internal_2cb78191566e062f00b3ba2cc535a9e8a423c9b7ecac646784528cdcd107238e->leave($__internal_2cb78191566e062f00b3ba2cc535a9e8a423c9b7ecac646784528cdcd107238e_prof);

    }

    // line 26
    public function block_Español($context, array $blocks = array())
    {
        $__internal_64874eca50b17ae36f49541cad7350206241b8fa43c2987e4d6b05b69dd18ec6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64874eca50b17ae36f49541cad7350206241b8fa43c2987e4d6b05b69dd18ec6->enter($__internal_64874eca50b17ae36f49541cad7350206241b8fa43c2987e4d6b05b69dd18ec6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Español"));

        echo "<a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("portada.es");
        echo "\">";
        
        $__internal_64874eca50b17ae36f49541cad7350206241b8fa43c2987e4d6b05b69dd18ec6->leave($__internal_64874eca50b17ae36f49541cad7350206241b8fa43c2987e4d6b05b69dd18ec6_prof);

    }

    // line 33
    public function block_pestanias($context, array $blocks = array())
    {
        $__internal_80b103aeabf03ad3a9415d6cf1a124d4230a7e21fecd1f51453ca1264a512ca5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80b103aeabf03ad3a9415d6cf1a124d4230a7e21fecd1f51453ca1264a512ca5->enter($__internal_80b103aeabf03ad3a9415d6cf1a124d4230a7e21fecd1f51453ca1264a512ca5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pestanias"));

        
        $__internal_80b103aeabf03ad3a9415d6cf1a124d4230a7e21fecd1f51453ca1264a512ca5->leave($__internal_80b103aeabf03ad3a9415d6cf1a124d4230a7e21fecd1f51453ca1264a512ca5_prof);

    }

    // line 35
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f28b49a59429be88de09bcb700f99bbf1cf966c85fc632bb8ce9a6d0da820b98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f28b49a59429be88de09bcb700f99bbf1cf966c85fc632bb8ce9a6d0da820b98->enter($__internal_f28b49a59429be88de09bcb700f99bbf1cf966c85fc632bb8ce9a6d0da820b98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        
        $__internal_f28b49a59429be88de09bcb700f99bbf1cf966c85fc632bb8ce9a6d0da820b98->leave($__internal_f28b49a59429be88de09bcb700f99bbf1cf966c85fc632bb8ce9a6d0da820b98_prof);

    }

    // line 41
    public function block_migas($context, array $blocks = array())
    {
        $__internal_3236d56bb5181d94ed336f3cc3b036c93e6e35755abde4dba18ab458ff25a317 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3236d56bb5181d94ed336f3cc3b036c93e6e35755abde4dba18ab458ff25a317->enter($__internal_3236d56bb5181d94ed336f3cc3b036c93e6e35755abde4dba18ab458ff25a317_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "migas"));

        
        $__internal_3236d56bb5181d94ed336f3cc3b036c93e6e35755abde4dba18ab458ff25a317->leave($__internal_3236d56bb5181d94ed336f3cc3b036c93e6e35755abde4dba18ab458ff25a317_prof);

    }

    // line 48
    public function block_body($context, array $blocks = array())
    {
        $__internal_869f1552ea1961366f09be3871d415c12b4be6546aa19a4726c79bb671c5a2ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_869f1552ea1961366f09be3871d415c12b4be6546aa19a4726c79bb671c5a2ab->enter($__internal_869f1552ea1961366f09be3871d415c12b4be6546aa19a4726c79bb671c5a2ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " ";
        
        $__internal_869f1552ea1961366f09be3871d415c12b4be6546aa19a4726c79bb671c5a2ab->leave($__internal_869f1552ea1961366f09be3871d415c12b4be6546aa19a4726c79bb671c5a2ab_prof);

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

", "AppCorredoresRiojaBundle:Default:base.html.twig", "/home/joheras/corredoresporlarioja/corredoresporlarioja/src/App/CorredoresRiojaBundle/Resources/views/Default/base.html.twig");
    }
}
