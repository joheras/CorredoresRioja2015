<?php

/* SonataAdminBundle::standard_layout.html.twig */
class __TwigTemplate_ce035e36daf2bb4b290cb0d34d51daebf484f3f8dfd578d79665f9228e88db34 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'html_attributes' => array($this, 'block_html_attributes'),
            'meta_tags' => array($this, 'block_meta_tags'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'sonata_javascript_config' => array($this, 'block_sonata_javascript_config'),
            'sonata_javascript_pool' => array($this, 'block_sonata_javascript_pool'),
            'sonata_head_title' => array($this, 'block_sonata_head_title'),
            'body_attributes' => array($this, 'block_body_attributes'),
            'sonata_header' => array($this, 'block_sonata_header'),
            'sonata_header_noscript_warning' => array($this, 'block_sonata_header_noscript_warning'),
            'logo' => array($this, 'block_logo'),
            'sonata_nav' => array($this, 'block_sonata_nav'),
            'sonata_breadcrumb' => array($this, 'block_sonata_breadcrumb'),
            'sonata_top_nav_menu' => array($this, 'block_sonata_top_nav_menu'),
            'sonata_top_nav_menu_add_block' => array($this, 'block_sonata_top_nav_menu_add_block'),
            'sonata_top_nav_menu_user_block' => array($this, 'block_sonata_top_nav_menu_user_block'),
            'sonata_wrapper' => array($this, 'block_sonata_wrapper'),
            'sonata_left_side' => array($this, 'block_sonata_left_side'),
            'sonata_side_nav' => array($this, 'block_sonata_side_nav'),
            'sonata_sidebar_search' => array($this, 'block_sonata_sidebar_search'),
            'side_bar_before_nav' => array($this, 'block_side_bar_before_nav'),
            'side_bar_nav' => array($this, 'block_side_bar_nav'),
            'side_bar_after_nav' => array($this, 'block_side_bar_after_nav'),
            'side_bar_after_nav_content' => array($this, 'block_side_bar_after_nav_content'),
            'sonata_page_content' => array($this, 'block_sonata_page_content'),
            'sonata_page_content_header' => array($this, 'block_sonata_page_content_header'),
            'sonata_page_content_nav' => array($this, 'block_sonata_page_content_nav'),
            'tab_menu_navbar_header' => array($this, 'block_tab_menu_navbar_header'),
            'sonata_admin_content_actions_wrappers' => array($this, 'block_sonata_admin_content_actions_wrappers'),
            'sonata_admin_content' => array($this, 'block_sonata_admin_content'),
            'notice' => array($this, 'block_notice'),
            'bootlint' => array($this, 'block_bootlint'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_070b90ce15337061ac1996f385d7a51ff0d5e3e5fbc29ff8f11a3544a3778ec5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_070b90ce15337061ac1996f385d7a51ff0d5e3e5fbc29ff8f11a3544a3778ec5->enter($__internal_070b90ce15337061ac1996f385d7a51ff0d5e3e5fbc29ff8f11a3544a3778ec5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::standard_layout.html.twig"));

        // line 11
        echo "
";
        // line 12
        $context["_preview"] = ((        $this->hasBlock("preview", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("preview", $context, $blocks))) : (null));
        // line 13
        $context["_form"] = ((        $this->hasBlock("form", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("form", $context, $blocks))) : (null));
        // line 14
        $context["_show"] = ((        $this->hasBlock("show", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("show", $context, $blocks))) : (null));
        // line 15
        $context["_list_table"] = ((        $this->hasBlock("list_table", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("list_table", $context, $blocks))) : (null));
        // line 16
        $context["_list_filters"] = ((        $this->hasBlock("list_filters", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("list_filters", $context, $blocks))) : (null));
        // line 17
        $context["_tab_menu"] = ((        $this->hasBlock("tab_menu", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("tab_menu", $context, $blocks))) : (null));
        // line 18
        $context["_content"] = ((        $this->hasBlock("content", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("content", $context, $blocks))) : (null));
        // line 19
        $context["_title"] = ((        $this->hasBlock("title", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("title", $context, $blocks))) : (null));
        // line 20
        $context["_breadcrumb"] = ((        $this->hasBlock("breadcrumb", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("breadcrumb", $context, $blocks))) : (null));
        // line 21
        $context["_actions"] = ((        $this->hasBlock("actions", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("actions", $context, $blocks))) : (null));
        // line 22
        $context["_navbar_title"] = ((        $this->hasBlock("navbar_title", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("navbar_title", $context, $blocks))) : (null));
        // line 23
        $context["_list_filters_actions"] = ((        $this->hasBlock("list_filters_actions", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("list_filters_actions", $context, $blocks))) : (null));
        // line 24
        echo "
<!DOCTYPE html>
<html ";
        // line 26
        $this->displayBlock('html_attributes', $context, $blocks);
        echo ">
    <head>
        ";
        // line 28
        $this->displayBlock('meta_tags', $context, $blocks);
        // line 33
        echo "
        ";
        // line 34
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 39
        echo "
        ";
        // line 40
        $this->displayBlock('javascripts', $context, $blocks);
        // line 88
        echo "
        <title>
        ";
        // line 90
        $this->displayBlock('sonata_head_title', $context, $blocks);
        // line 116
        echo "        </title>
    </head>
    <body ";
        // line 118
        $this->displayBlock('body_attributes', $context, $blocks);
        echo ">

    <div class=\"wrapper\">

        ";
        // line 122
        $this->displayBlock('sonata_header', $context, $blocks);
        // line 221
        echo "
        ";
        // line 222
        $this->displayBlock('sonata_wrapper', $context, $blocks);
        // line 355
        echo "    </div>

    ";
        // line 357
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 357, $this->getSourceContext()); })()), "adminPool", array()), "getOption", array(0 => "use_bootlint"), "method")) {
            // line 358
            echo "        ";
            $this->displayBlock('bootlint', $context, $blocks);
            // line 364
            echo "    ";
        }
        // line 365
        echo "
    </body>
</html>
";
        
        $__internal_070b90ce15337061ac1996f385d7a51ff0d5e3e5fbc29ff8f11a3544a3778ec5->leave($__internal_070b90ce15337061ac1996f385d7a51ff0d5e3e5fbc29ff8f11a3544a3778ec5_prof);

    }

    // line 26
    public function block_html_attributes($context, array $blocks = array())
    {
        $__internal_333982ca9a10b04c6ce1670c0f3956963ab73dc5dd2e0ab6e3c52a58fd16d29b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_333982ca9a10b04c6ce1670c0f3956963ab73dc5dd2e0ab6e3c52a58fd16d29b->enter($__internal_333982ca9a10b04c6ce1670c0f3956963ab73dc5dd2e0ab6e3c52a58fd16d29b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "html_attributes"));

        echo "class=\"no-js\"";
        
        $__internal_333982ca9a10b04c6ce1670c0f3956963ab73dc5dd2e0ab6e3c52a58fd16d29b->leave($__internal_333982ca9a10b04c6ce1670c0f3956963ab73dc5dd2e0ab6e3c52a58fd16d29b_prof);

    }

    // line 28
    public function block_meta_tags($context, array $blocks = array())
    {
        $__internal_68c5cc129ad0614f2bdfe14931eb5f78399719e8d9cf4a8fdb028136f8dd4173 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68c5cc129ad0614f2bdfe14931eb5f78399719e8d9cf4a8fdb028136f8dd4173->enter($__internal_68c5cc129ad0614f2bdfe14931eb5f78399719e8d9cf4a8fdb028136f8dd4173_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_tags"));

        // line 29
        echo "            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <meta charset=\"UTF-8\">
            <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        ";
        
        $__internal_68c5cc129ad0614f2bdfe14931eb5f78399719e8d9cf4a8fdb028136f8dd4173->leave($__internal_68c5cc129ad0614f2bdfe14931eb5f78399719e8d9cf4a8fdb028136f8dd4173_prof);

    }

    // line 34
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6555fa95dc9b7a3b4b361a7b223243054f65531d79deb9e226e0683dc9a07fa1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6555fa95dc9b7a3b4b361a7b223243054f65531d79deb9e226e0683dc9a07fa1->enter($__internal_6555fa95dc9b7a3b4b361a7b223243054f65531d79deb9e226e0683dc9a07fa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 35
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 35, $this->getSourceContext()); })()), "adminPool", array()), "getOption", array(0 => "stylesheets", 1 => array()), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["stylesheet"]) {
            // line 36
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($context["stylesheet"]), "html", null, true);
            echo "\">
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stylesheet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "        ";
        
        $__internal_6555fa95dc9b7a3b4b361a7b223243054f65531d79deb9e226e0683dc9a07fa1->leave($__internal_6555fa95dc9b7a3b4b361a7b223243054f65531d79deb9e226e0683dc9a07fa1_prof);

    }

    // line 40
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1c93070bd87950d5c752db917e629367d5fce756210ce8d02c9bf2b3bd464b1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c93070bd87950d5c752db917e629367d5fce756210ce8d02c9bf2b3bd464b1b->enter($__internal_1c93070bd87950d5c752db917e629367d5fce756210ce8d02c9bf2b3bd464b1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 41
        echo "            ";
        $this->displayBlock('sonata_javascript_config', $context, $blocks);
        // line 61
        echo "
            ";
        // line 62
        $this->displayBlock('sonata_javascript_pool', $context, $blocks);
        // line 67
        echo "
            ";
        // line 68
        $context["locale"] = twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 68, $this->getSourceContext()); })()), "request", array()), "locale", array());
        // line 69
        echo "            ";
        // line 70
        echo "            ";
        if ((twig_slice($this->env, (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new Twig_Error_Runtime('Variable "locale" does not exist.', 70, $this->getSourceContext()); })()), 0, 2) != "en")) {
            // line 71
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/sonatacore/vendor/moment/locale/" . twig_replace_filter(twig_lower_filter($this->env,             // line 73
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new Twig_Error_Runtime('Variable "locale" does not exist.', 73, $this->getSourceContext()); })())), array("_" => "-"))) . ".js")), "html", null, true);
            // line 75
            echo "\"></script>
            ";
        }
        // line 77
        echo "
            ";
        // line 79
        echo "            ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 79, $this->getSourceContext()); })()), "adminPool", array()), "getOption", array(0 => "use_select2"), "method")) {
            // line 80
            echo "                ";
            if (((isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new Twig_Error_Runtime('Variable "locale" does not exist.', 80, $this->getSourceContext()); })()) == "pt")) {
                $context["locale"] = "pt_PT";
            }
            // line 81
            echo "
                ";
            // line 83
            echo "                ";
            if ((twig_slice($this->env, (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new Twig_Error_Runtime('Variable "locale" does not exist.', 83, $this->getSourceContext()); })()), 0, 2) != "en")) {
                // line 84
                echo "                    <script src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/sonatacore/vendor/select2/select2_locale_" . twig_replace_filter((isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new Twig_Error_Runtime('Variable "locale" does not exist.', 84, $this->getSourceContext()); })()), array("_" => "-"))) . ".js")), "html", null, true);
                echo "\"></script>
                ";
            }
            // line 86
            echo "            ";
        }
        // line 87
        echo "        ";
        
        $__internal_1c93070bd87950d5c752db917e629367d5fce756210ce8d02c9bf2b3bd464b1b->leave($__internal_1c93070bd87950d5c752db917e629367d5fce756210ce8d02c9bf2b3bd464b1b_prof);

    }

    // line 41
    public function block_sonata_javascript_config($context, array $blocks = array())
    {
        $__internal_7f995aa59065320a440a4cafdafc95e1551a665f0f9b092daee73531e7df2d1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f995aa59065320a440a4cafdafc95e1551a665f0f9b092daee73531e7df2d1d->enter($__internal_7f995aa59065320a440a4cafdafc95e1551a665f0f9b092daee73531e7df2d1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_javascript_config"));

        // line 42
        echo "                <script>
                    window.SONATA_CONFIG = {
                        CONFIRM_EXIT: ";
        // line 44
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 44, $this->getSourceContext()); })()), "adminPool", array()), "getOption", array(0 => "confirm_exit"), "method")) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                        USE_SELECT2: ";
        // line 45
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 45, $this->getSourceContext()); })()), "adminPool", array()), "getOption", array(0 => "use_select2"), "method")) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                        USE_ICHECK: ";
        // line 46
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 46, $this->getSourceContext()); })()), "adminPool", array()), "getOption", array(0 => "use_icheck"), "method")) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                        USE_STICKYFORMS: ";
        // line 47
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 47, $this->getSourceContext()); })()), "adminPool", array()), "getOption", array(0 => "use_stickyforms"), "method")) {
            echo "true";
        } else {
            echo "false";
        }
        // line 48
        echo "                    };
                    window.SONATA_TRANSLATIONS = {
                        CONFIRM_EXIT: '";
        // line 50
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("confirm_exit", array(), "SonataAdminBundle"), "js"), "html", null, true);
        echo "'
                    };

                    // http://getbootstrap.com/getting-started/#support-ie10-width
                    if (navigator.userAgent.match(/IEMobile\\/10\\.0/)) {
                        var msViewportStyle = document.createElement('style');
                        msViewportStyle.appendChild(document.createTextNode('@-ms-viewport{width:auto!important}'));
                        document.querySelector('head').appendChild(msViewportStyle);
                    }
                </script>
            ";
        
        $__internal_7f995aa59065320a440a4cafdafc95e1551a665f0f9b092daee73531e7df2d1d->leave($__internal_7f995aa59065320a440a4cafdafc95e1551a665f0f9b092daee73531e7df2d1d_prof);

    }

    // line 62
    public function block_sonata_javascript_pool($context, array $blocks = array())
    {
        $__internal_c5653444109418be5c0d1c4fd9b430f454058473618a881aa45ec6de16fcbed2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5653444109418be5c0d1c4fd9b430f454058473618a881aa45ec6de16fcbed2->enter($__internal_c5653444109418be5c0d1c4fd9b430f454058473618a881aa45ec6de16fcbed2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_javascript_pool"));

        // line 63
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 63, $this->getSourceContext()); })()), "adminPool", array()), "getOption", array(0 => "javascripts", 1 => array()), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["javascript"]) {
            // line 64
            echo "                    <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($context["javascript"]), "html", null, true);
            echo "\"></script>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['javascript'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "            ";
        
        $__internal_c5653444109418be5c0d1c4fd9b430f454058473618a881aa45ec6de16fcbed2->leave($__internal_c5653444109418be5c0d1c4fd9b430f454058473618a881aa45ec6de16fcbed2_prof);

    }

    // line 90
    public function block_sonata_head_title($context, array $blocks = array())
    {
        $__internal_6220e00a211a9614075f24893984cfa03e830fcccd1d361ca4ae117a218ab080 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6220e00a211a9614075f24893984cfa03e830fcccd1d361ca4ae117a218ab080->enter($__internal_6220e00a211a9614075f24893984cfa03e830fcccd1d361ca4ae117a218ab080_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_head_title"));

        // line 91
        echo "            ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Admin", array(), "SonataAdminBundle"), "html", null, true);
        echo "

            ";
        // line 93
        if ( !twig_test_empty((isset($context["_title"]) || array_key_exists("_title", $context) ? $context["_title"] : (function () { throw new Twig_Error_Runtime('Variable "_title" does not exist.', 93, $this->getSourceContext()); })()))) {
            // line 94
            echo "                ";
            echo strip_tags((isset($context["_title"]) || array_key_exists("_title", $context) ? $context["_title"] : (function () { throw new Twig_Error_Runtime('Variable "_title" does not exist.', 94, $this->getSourceContext()); })()));
            echo "
            ";
        } else {
            // line 96
            echo "                ";
            if (array_key_exists("action", $context)) {
                // line 97
                echo "                    -
                    ";
                // line 98
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["breadcrumbs_builder"]) || array_key_exists("breadcrumbs_builder", $context) ? $context["breadcrumbs_builder"] : (function () { throw new Twig_Error_Runtime('Variable "breadcrumbs_builder" does not exist.', 98, $this->getSourceContext()); })()), "breadcrumbs", array(0 => (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 98, $this->getSourceContext()); })()), 1 => (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new Twig_Error_Runtime('Variable "action" does not exist.', 98, $this->getSourceContext()); })())), "method"));
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
                foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                    // line 99
                    echo "                        ";
                    if ( !twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "first", array())) {
                        // line 100
                        echo "                            ";
                        if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index", array()) != 2)) {
                            // line 101
                            echo "                                &gt;
                            ";
                        }
                        // line 104
                        $context["translation_domain"] = twig_get_attribute($this->env, $this->getSourceContext(), $context["menu"], "extra", array(0 => "translation_domain", 1 => "messages"), "method");
                        // line 105
                        $context["label"] = twig_get_attribute($this->env, $this->getSourceContext(), $context["menu"], "label", array());
                        // line 106
                        if ( !((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 106, $this->getSourceContext()); })()) === false)) {
                            // line 107
                            $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 107, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), $context["menu"], "extra", array(0 => "translation_params", 1 => array()), "method"), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 107, $this->getSourceContext()); })()));
                        }
                        // line 110
                        echo twig_escape_filter($this->env, (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 110, $this->getSourceContext()); })()), "html", null, true);
                        echo "
                        ";
                    }
                    // line 112
                    echo "                    ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 113
                echo "                ";
            }
            // line 114
            echo "            ";
        }
        // line 115
        echo "        ";
        
        $__internal_6220e00a211a9614075f24893984cfa03e830fcccd1d361ca4ae117a218ab080->leave($__internal_6220e00a211a9614075f24893984cfa03e830fcccd1d361ca4ae117a218ab080_prof);

    }

    // line 118
    public function block_body_attributes($context, array $blocks = array())
    {
        $__internal_b05ae6e91f1a6482308c6b1343f711680fae8bf2ed73e05e560a7dbbe0d54157 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b05ae6e91f1a6482308c6b1343f711680fae8bf2ed73e05e560a7dbbe0d54157->enter($__internal_b05ae6e91f1a6482308c6b1343f711680fae8bf2ed73e05e560a7dbbe0d54157_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        echo "class=\"sonata-bc skin-black fixed\"";
        
        $__internal_b05ae6e91f1a6482308c6b1343f711680fae8bf2ed73e05e560a7dbbe0d54157->leave($__internal_b05ae6e91f1a6482308c6b1343f711680fae8bf2ed73e05e560a7dbbe0d54157_prof);

    }

    // line 122
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_492587c5cad7f1b6e9499fcd4e67a9eb030dac2431ea4bc05dede7500dfaff35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_492587c5cad7f1b6e9499fcd4e67a9eb030dac2431ea4bc05dede7500dfaff35->enter($__internal_492587c5cad7f1b6e9499fcd4e67a9eb030dac2431ea4bc05dede7500dfaff35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        // line 123
        echo "            <header class=\"main-header\">
                ";
        // line 124
        $this->displayBlock('sonata_header_noscript_warning', $context, $blocks);
        // line 131
        echo "                ";
        $this->displayBlock('logo', $context, $blocks);
        // line 143
        echo "                ";
        $this->displayBlock('sonata_nav', $context, $blocks);
        // line 219
        echo "            </header>
        ";
        
        $__internal_492587c5cad7f1b6e9499fcd4e67a9eb030dac2431ea4bc05dede7500dfaff35->leave($__internal_492587c5cad7f1b6e9499fcd4e67a9eb030dac2431ea4bc05dede7500dfaff35_prof);

    }

    // line 124
    public function block_sonata_header_noscript_warning($context, array $blocks = array())
    {
        $__internal_27b652f39b6e1751c41c0927006b7d7ce6dcebed2b086e1993b4a190363c54ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27b652f39b6e1751c41c0927006b7d7ce6dcebed2b086e1993b4a190363c54ae->enter($__internal_27b652f39b6e1751c41c0927006b7d7ce6dcebed2b086e1993b4a190363c54ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header_noscript_warning"));

        // line 125
        echo "                    <noscript>
                        <div class=\"noscript-warning\">
                            ";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("noscript_warning", array(), "SonataAdminBundle"), "html", null, true);
        echo "
                        </div>
                    </noscript>
                ";
        
        $__internal_27b652f39b6e1751c41c0927006b7d7ce6dcebed2b086e1993b4a190363c54ae->leave($__internal_27b652f39b6e1751c41c0927006b7d7ce6dcebed2b086e1993b4a190363c54ae_prof);

    }

    // line 131
    public function block_logo($context, array $blocks = array())
    {
        $__internal_74cf943bd61fe5387ee02a6346104328d2e509c6d31fac809a80f8ee58b21728 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74cf943bd61fe5387ee02a6346104328d2e509c6d31fac809a80f8ee58b21728->enter($__internal_74cf943bd61fe5387ee02a6346104328d2e509c6d31fac809a80f8ee58b21728_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        // line 132
        echo "                    ";
        ob_start();
        // line 133
        echo "                        <a class=\"logo\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_admin_dashboard");
        echo "\">
                            ";
        // line 134
        if ((("single_image" == twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 134, $this->getSourceContext()); })()), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")) || ("both" == twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 134, $this->getSourceContext()); })()), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")))) {
            // line 135
            echo "                                <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 135, $this->getSourceContext()); })()), "adminPool", array()), "titlelogo", array())), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 135, $this->getSourceContext()); })()), "adminPool", array()), "title", array()), "html", null, true);
            echo "\">
                            ";
        }
        // line 137
        echo "                            ";
        if ((("single_text" == twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 137, $this->getSourceContext()); })()), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")) || ("both" == twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 137, $this->getSourceContext()); })()), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")))) {
            // line 138
            echo "                                <span>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 138, $this->getSourceContext()); })()), "adminPool", array()), "title", array()), "html", null, true);
            echo "</span>
                            ";
        }
        // line 140
        echo "                        </a>
                    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 142
        echo "                ";
        
        $__internal_74cf943bd61fe5387ee02a6346104328d2e509c6d31fac809a80f8ee58b21728->leave($__internal_74cf943bd61fe5387ee02a6346104328d2e509c6d31fac809a80f8ee58b21728_prof);

    }

    // line 143
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_6992cad2d3396c0e93ac2425468a431a62f4e70917fd3e9b79dc23869b079332 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6992cad2d3396c0e93ac2425468a431a62f4e70917fd3e9b79dc23869b079332->enter($__internal_6992cad2d3396c0e93ac2425468a431a62f4e70917fd3e9b79dc23869b079332_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        // line 144
        echo "                    <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                        <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                            <span class=\"sr-only\">Toggle navigation</span>
                        </a>

                        <div class=\"navbar-left\">
                            ";
        // line 150
        $this->displayBlock('sonata_breadcrumb', $context, $blocks);
        // line 189
        echo "                        </div>

                        ";
        // line 191
        $this->displayBlock('sonata_top_nav_menu', $context, $blocks);
        // line 217
        echo "                    </nav>
                ";
        
        $__internal_6992cad2d3396c0e93ac2425468a431a62f4e70917fd3e9b79dc23869b079332->leave($__internal_6992cad2d3396c0e93ac2425468a431a62f4e70917fd3e9b79dc23869b079332_prof);

    }

    // line 150
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_da80d133d41640a5302925b9db329db07c2991825ee9b96edce7c94dd9fd9a95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da80d133d41640a5302925b9db329db07c2991825ee9b96edce7c94dd9fd9a95->enter($__internal_da80d133d41640a5302925b9db329db07c2991825ee9b96edce7c94dd9fd9a95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        // line 151
        echo "                                <div class=\"hidden-xs\">
                                    ";
        // line 152
        if (( !twig_test_empty((isset($context["_breadcrumb"]) || array_key_exists("_breadcrumb", $context) ? $context["_breadcrumb"] : (function () { throw new Twig_Error_Runtime('Variable "_breadcrumb" does not exist.', 152, $this->getSourceContext()); })())) || array_key_exists("action", $context))) {
            // line 153
            echo "                                        <ol class=\"nav navbar-top-links breadcrumb\">
                                            ";
            // line 154
            if (twig_test_empty((isset($context["_breadcrumb"]) || array_key_exists("_breadcrumb", $context) ? $context["_breadcrumb"] : (function () { throw new Twig_Error_Runtime('Variable "_breadcrumb" does not exist.', 154, $this->getSourceContext()); })()))) {
                // line 155
                echo "                                                ";
                if (array_key_exists("action", $context)) {
                    // line 156
                    echo "                                                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["breadcrumbs_builder"]) || array_key_exists("breadcrumbs_builder", $context) ? $context["breadcrumbs_builder"] : (function () { throw new Twig_Error_Runtime('Variable "breadcrumbs_builder" does not exist.', 156, $this->getSourceContext()); })()), "breadcrumbs", array(0 => (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 156, $this->getSourceContext()); })()), 1 => (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new Twig_Error_Runtime('Variable "action" does not exist.', 156, $this->getSourceContext()); })())), "method"));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                        // line 157
                        $context["translation_domain"] = twig_get_attribute($this->env, $this->getSourceContext(), $context["menu"], "extra", array(0 => "translation_domain", 1 => "messages"), "method");
                        // line 158
                        $context["label"] = twig_get_attribute($this->env, $this->getSourceContext(), $context["menu"], "label", array());
                        // line 159
                        if ( !((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 159, $this->getSourceContext()); })()) === false)) {
                            // line 160
                            $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 160, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), $context["menu"], "extra", array(0 => "translation_params", 1 => array()), "method"), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 160, $this->getSourceContext()); })()));
                        }
                        // line 163
                        if ( !twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "last", array())) {
                            // line 164
                            echo "                                                            <li>
                                                                ";
                            // line 165
                            if ( !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), $context["menu"], "uri", array()))) {
                                // line 166
                                echo "                                                                    <a href=\"";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["menu"], "uri", array()), "html", null, true);
                                echo "\">
                                                                        ";
                                // line 167
                                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["menu"], "extra", array(0 => "safe_label", 1 => true), "method")) {
                                    // line 168
                                    echo (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 168, $this->getSourceContext()); })());
                                } else {
                                    // line 170
                                    echo twig_escape_filter($this->env, (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 170, $this->getSourceContext()); })()), "html", null, true);
                                }
                                // line 172
                                echo "                                                                    </a>
                                                                ";
                            } else {
                                // line 174
                                echo "                                                                    <span>";
                                echo twig_escape_filter($this->env, (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 174, $this->getSourceContext()); })()), "html", null, true);
                                echo "</span>
                                                                ";
                            }
                            // line 176
                            echo "                                                            </li>
                                                        ";
                        } else {
                            // line 178
                            echo "                                                            <li class=\"active\"><span>";
                            echo twig_escape_filter($this->env, (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 178, $this->getSourceContext()); })()), "html", null, true);
                            echo "</span></li>
                                                        ";
                        }
                        // line 180
                        echo "                                                    ";
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 181
                    echo "                                                ";
                }
                // line 182
                echo "                                            ";
            } else {
                // line 183
                echo "                                                ";
                echo (isset($context["_breadcrumb"]) || array_key_exists("_breadcrumb", $context) ? $context["_breadcrumb"] : (function () { throw new Twig_Error_Runtime('Variable "_breadcrumb" does not exist.', 183, $this->getSourceContext()); })());
                echo "
                                            ";
            }
            // line 185
            echo "                                        </ol>
                                    ";
        }
        // line 187
        echo "                                </div>
                            ";
        
        $__internal_da80d133d41640a5302925b9db329db07c2991825ee9b96edce7c94dd9fd9a95->leave($__internal_da80d133d41640a5302925b9db329db07c2991825ee9b96edce7c94dd9fd9a95_prof);

    }

    // line 191
    public function block_sonata_top_nav_menu($context, array $blocks = array())
    {
        $__internal_2a5067ec127b34667ced1e0220bb31d96a7df29156860645599c5af701bf4ce4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a5067ec127b34667ced1e0220bb31d96a7df29156860645599c5af701bf4ce4->enter($__internal_2a5067ec127b34667ced1e0220bb31d96a7df29156860645599c5af701bf4ce4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu"));

        // line 192
        echo "                            ";
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 192, $this->getSourceContext()); })()), "user", array()) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SONATA_ADMIN"))) {
            // line 193
            echo "                                <div class=\"navbar-custom-menu\">
                                    <ul class=\"nav navbar-nav\">
                                        ";
            // line 195
            $this->displayBlock('sonata_top_nav_menu_add_block', $context, $blocks);
            // line 203
            echo "                                        ";
            $this->displayBlock('sonata_top_nav_menu_user_block', $context, $blocks);
            // line 213
            echo "                                    </ul>
                                </div>
                            ";
        }
        // line 216
        echo "                        ";
        
        $__internal_2a5067ec127b34667ced1e0220bb31d96a7df29156860645599c5af701bf4ce4->leave($__internal_2a5067ec127b34667ced1e0220bb31d96a7df29156860645599c5af701bf4ce4_prof);

    }

    // line 195
    public function block_sonata_top_nav_menu_add_block($context, array $blocks = array())
    {
        $__internal_3e2ea41ea51ee075433a44bcd07f10075f38fe205fbf2ee166860248c578b30f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e2ea41ea51ee075433a44bcd07f10075f38fe205fbf2ee166860248c578b30f->enter($__internal_3e2ea41ea51ee075433a44bcd07f10075f38fe205fbf2ee166860248c578b30f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu_add_block"));

        // line 196
        echo "                                            <li class=\"dropdown\">
                                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                    <i class=\"fa fa-plus-square fa-fw\" aria-hidden=\"true\"></i> <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i>
                                                </a>
                                                ";
        // line 200
        $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 200, $this->getSourceContext()); })()), "adminPool", array()), "getTemplate", array(0 => "add_block"), "method"), "SonataAdminBundle::standard_layout.html.twig", 200)->display($context);
        // line 201
        echo "                                            </li>
                                        ";
        
        $__internal_3e2ea41ea51ee075433a44bcd07f10075f38fe205fbf2ee166860248c578b30f->leave($__internal_3e2ea41ea51ee075433a44bcd07f10075f38fe205fbf2ee166860248c578b30f_prof);

    }

    // line 203
    public function block_sonata_top_nav_menu_user_block($context, array $blocks = array())
    {
        $__internal_164a5ca47e87648d2b211a9aff4ac9748c447f465cb3e1200965c435ddbcf364 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_164a5ca47e87648d2b211a9aff4ac9748c447f465cb3e1200965c435ddbcf364->enter($__internal_164a5ca47e87648d2b211a9aff4ac9748c447f465cb3e1200965c435ddbcf364_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu_user_block"));

        // line 204
        echo "                                            <li class=\"dropdown user-menu\">
                                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                    <i class=\"fa fa-user fa-fw\" aria-hidden=\"true\"></i> <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i>
                                                </a>
                                                <ul class=\"dropdown-menu dropdown-user\">
                                                    ";
        // line 209
        $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 209, $this->getSourceContext()); })()), "adminPool", array()), "getTemplate", array(0 => "user_block"), "method"), "SonataAdminBundle::standard_layout.html.twig", 209)->display($context);
        // line 210
        echo "                                                </ul>
                                            </li>
                                        ";
        
        $__internal_164a5ca47e87648d2b211a9aff4ac9748c447f465cb3e1200965c435ddbcf364->leave($__internal_164a5ca47e87648d2b211a9aff4ac9748c447f465cb3e1200965c435ddbcf364_prof);

    }

    // line 222
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_a6e804d18f00bdbb97bca06e73c1547a1c9546f7ba1268f2eb62c9c10bf82197 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6e804d18f00bdbb97bca06e73c1547a1c9546f7ba1268f2eb62c9c10bf82197->enter($__internal_a6e804d18f00bdbb97bca06e73c1547a1c9546f7ba1268f2eb62c9c10bf82197_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 223
        echo "            ";
        $this->displayBlock('sonata_left_side', $context, $blocks);
        // line 255
        echo "
            <div class=\"content-wrapper\">
                ";
        // line 257
        $this->displayBlock('sonata_page_content', $context, $blocks);
        // line 353
        echo "            </div>
        ";
        
        $__internal_a6e804d18f00bdbb97bca06e73c1547a1c9546f7ba1268f2eb62c9c10bf82197->leave($__internal_a6e804d18f00bdbb97bca06e73c1547a1c9546f7ba1268f2eb62c9c10bf82197_prof);

    }

    // line 223
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_63262a1c4d4becf6e26ae26650465720e1fa1e47893c799ed2a61ce5ce420e3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63262a1c4d4becf6e26ae26650465720e1fa1e47893c799ed2a61ce5ce420e3e->enter($__internal_63262a1c4d4becf6e26ae26650465720e1fa1e47893c799ed2a61ce5ce420e3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        // line 224
        echo "                <aside class=\"main-sidebar\">
                    <section class=\"sidebar\">
                        ";
        // line 226
        $this->displayBlock('sonata_side_nav', $context, $blocks);
        // line 252
        echo "                    </section>
                </aside>
            ";
        
        $__internal_63262a1c4d4becf6e26ae26650465720e1fa1e47893c799ed2a61ce5ce420e3e->leave($__internal_63262a1c4d4becf6e26ae26650465720e1fa1e47893c799ed2a61ce5ce420e3e_prof);

    }

    // line 226
    public function block_sonata_side_nav($context, array $blocks = array())
    {
        $__internal_b93980383367523503f74af9e47d52e30dfa2095ccc7c2fc88b6d9eb84b97b41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b93980383367523503f74af9e47d52e30dfa2095ccc7c2fc88b6d9eb84b97b41->enter($__internal_b93980383367523503f74af9e47d52e30dfa2095ccc7c2fc88b6d9eb84b97b41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_side_nav"));

        // line 227
        echo "                            ";
        $this->displayBlock('sonata_sidebar_search', $context, $blocks);
        // line 239
        echo "
                            ";
        // line 240
        $this->displayBlock('side_bar_before_nav', $context, $blocks);
        // line 241
        echo "                            ";
        $this->displayBlock('side_bar_nav', $context, $blocks);
        // line 244
        echo "                            ";
        $this->displayBlock('side_bar_after_nav', $context, $blocks);
        // line 251
        echo "                        ";
        
        $__internal_b93980383367523503f74af9e47d52e30dfa2095ccc7c2fc88b6d9eb84b97b41->leave($__internal_b93980383367523503f74af9e47d52e30dfa2095ccc7c2fc88b6d9eb84b97b41_prof);

    }

    // line 227
    public function block_sonata_sidebar_search($context, array $blocks = array())
    {
        $__internal_5a66fcfaf41ac2ec6f42bbc5e527b852cdc227ccbdf6e1578d896bafb5054711 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a66fcfaf41ac2ec6f42bbc5e527b852cdc227ccbdf6e1578d896bafb5054711->enter($__internal_5a66fcfaf41ac2ec6f42bbc5e527b852cdc227ccbdf6e1578d896bafb5054711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_sidebar_search"));

        // line 228
        echo "                                <form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_admin_search");
        echo "\" method=\"GET\" class=\"sidebar-form\" role=\"search\">
                                    <div class=\"input-group custom-search-form\">
                                        <input type=\"text\" name=\"q\" value=\"";
        // line 230
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 230, $this->getSourceContext()); })()), "request", array()), "get", array(0 => "q"), "method"), "html", null, true);
        echo "\" class=\"form-control\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("search_placeholder", array(), "SonataAdminBundle"), "html", null, true);
        echo "\">
                                        <span class=\"input-group-btn\">
                                            <button class=\"btn btn-flat\" type=\"submit\">
                                                <i class=\"fa fa-search\" aria-hidden=\"true\"></i>
                                            </button>
                                        </span>
                                    </div>
                                </form>
                            ";
        
        $__internal_5a66fcfaf41ac2ec6f42bbc5e527b852cdc227ccbdf6e1578d896bafb5054711->leave($__internal_5a66fcfaf41ac2ec6f42bbc5e527b852cdc227ccbdf6e1578d896bafb5054711_prof);

    }

    // line 240
    public function block_side_bar_before_nav($context, array $blocks = array())
    {
        $__internal_787a79914eb87806661b17ed46161ac7b51e3dfe3510157f88a93de79ea359d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_787a79914eb87806661b17ed46161ac7b51e3dfe3510157f88a93de79ea359d7->enter($__internal_787a79914eb87806661b17ed46161ac7b51e3dfe3510157f88a93de79ea359d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_before_nav"));

        echo " ";
        
        $__internal_787a79914eb87806661b17ed46161ac7b51e3dfe3510157f88a93de79ea359d7->leave($__internal_787a79914eb87806661b17ed46161ac7b51e3dfe3510157f88a93de79ea359d7_prof);

    }

    // line 241
    public function block_side_bar_nav($context, array $blocks = array())
    {
        $__internal_32cd2b3b00b7eb4ec9a594c7b48a638dbef998a4f5e393efb5322d02056db048 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32cd2b3b00b7eb4ec9a594c7b48a638dbef998a4f5e393efb5322d02056db048->enter($__internal_32cd2b3b00b7eb4ec9a594c7b48a638dbef998a4f5e393efb5322d02056db048_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_nav"));

        // line 242
        echo "                                ";
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render("sonata_admin_sidebar", array("template" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 242, $this->getSourceContext()); })()), "adminPool", array()), "getTemplate", array(0 => "knp_menu_template"), "method")));
        echo "
                            ";
        
        $__internal_32cd2b3b00b7eb4ec9a594c7b48a638dbef998a4f5e393efb5322d02056db048->leave($__internal_32cd2b3b00b7eb4ec9a594c7b48a638dbef998a4f5e393efb5322d02056db048_prof);

    }

    // line 244
    public function block_side_bar_after_nav($context, array $blocks = array())
    {
        $__internal_44f865516aa6a72d48fd369607a0df70623a05b8bdaf637fa534fc3f0a891bac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44f865516aa6a72d48fd369607a0df70623a05b8bdaf637fa534fc3f0a891bac->enter($__internal_44f865516aa6a72d48fd369607a0df70623a05b8bdaf637fa534fc3f0a891bac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav"));

        // line 245
        echo "                                <p class=\"text-center small\" style=\"border-top: 1px solid #444444; padding-top: 10px\">
                                    ";
        // line 246
        $this->displayBlock('side_bar_after_nav_content', $context, $blocks);
        // line 249
        echo "                                </p>
                            ";
        
        $__internal_44f865516aa6a72d48fd369607a0df70623a05b8bdaf637fa534fc3f0a891bac->leave($__internal_44f865516aa6a72d48fd369607a0df70623a05b8bdaf637fa534fc3f0a891bac_prof);

    }

    // line 246
    public function block_side_bar_after_nav_content($context, array $blocks = array())
    {
        $__internal_0b8910f455051dc2586eab7c1767007158e3b4f8ff084130003c46333259fc8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b8910f455051dc2586eab7c1767007158e3b4f8ff084130003c46333259fc8a->enter($__internal_0b8910f455051dc2586eab7c1767007158e3b4f8ff084130003c46333259fc8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav_content"));

        // line 247
        echo "                                        <a href=\"https://sonata-project.org\" rel=\"noreferrer\" target=\"_blank\">sonata project</a>
                                    ";
        
        $__internal_0b8910f455051dc2586eab7c1767007158e3b4f8ff084130003c46333259fc8a->leave($__internal_0b8910f455051dc2586eab7c1767007158e3b4f8ff084130003c46333259fc8a_prof);

    }

    // line 257
    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_b8151f167d3ed15861e2ecec774eeaa5f12e2e79be3535455b47236d3065a2c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8151f167d3ed15861e2ecec774eeaa5f12e2e79be3535455b47236d3065a2c4->enter($__internal_b8151f167d3ed15861e2ecec774eeaa5f12e2e79be3535455b47236d3065a2c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 258
        echo "                    <section class=\"content-header\">

                        ";
        // line 260
        $this->displayBlock('sonata_page_content_header', $context, $blocks);
        // line 314
        echo "                    </section>

                    <section class=\"content\">
                        ";
        // line 317
        $this->displayBlock('sonata_admin_content', $context, $blocks);
        // line 351
        echo "                    </section>
                ";
        
        $__internal_b8151f167d3ed15861e2ecec774eeaa5f12e2e79be3535455b47236d3065a2c4->leave($__internal_b8151f167d3ed15861e2ecec774eeaa5f12e2e79be3535455b47236d3065a2c4_prof);

    }

    // line 260
    public function block_sonata_page_content_header($context, array $blocks = array())
    {
        $__internal_70164f5c4a8eb047dd0353530b65f103e780a971d21490fae4ddb6c9628e2513 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70164f5c4a8eb047dd0353530b65f103e780a971d21490fae4ddb6c9628e2513->enter($__internal_70164f5c4a8eb047dd0353530b65f103e780a971d21490fae4ddb6c9628e2513_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_header"));

        // line 261
        echo "                            ";
        $this->displayBlock('sonata_page_content_nav', $context, $blocks);
        // line 313
        echo "                        ";
        
        $__internal_70164f5c4a8eb047dd0353530b65f103e780a971d21490fae4ddb6c9628e2513->leave($__internal_70164f5c4a8eb047dd0353530b65f103e780a971d21490fae4ddb6c9628e2513_prof);

    }

    // line 261
    public function block_sonata_page_content_nav($context, array $blocks = array())
    {
        $__internal_f67bc98f8835086463027fd46b6fcef750d77c09e4ab71508e1b5a3ea16bd508 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f67bc98f8835086463027fd46b6fcef750d77c09e4ab71508e1b5a3ea16bd508->enter($__internal_f67bc98f8835086463027fd46b6fcef750d77c09e4ab71508e1b5a3ea16bd508_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_nav"));

        // line 262
        echo "                                ";
        if ((( !twig_test_empty((isset($context["_tab_menu"]) || array_key_exists("_tab_menu", $context) ? $context["_tab_menu"] : (function () { throw new Twig_Error_Runtime('Variable "_tab_menu" does not exist.', 262, $this->getSourceContext()); })())) ||  !twig_test_empty((isset($context["_actions"]) || array_key_exists("_actions", $context) ? $context["_actions"] : (function () { throw new Twig_Error_Runtime('Variable "_actions" does not exist.', 262, $this->getSourceContext()); })()))) ||  !twig_test_empty((isset($context["_list_filters_actions"]) || array_key_exists("_list_filters_actions", $context) ? $context["_list_filters_actions"] : (function () { throw new Twig_Error_Runtime('Variable "_list_filters_actions" does not exist.', 262, $this->getSourceContext()); })())))) {
            // line 263
            echo "                                    <nav class=\"navbar navbar-default\" role=\"navigation\">
                                        <div class=\"container-fluid\">
                                            ";
            // line 265
            $this->displayBlock('tab_menu_navbar_header', $context, $blocks);
            // line 272
            echo "
                                            <div class=\"navbar-collapse\">
                                                ";
            // line 274
            if ( !twig_test_empty((isset($context["_tab_menu"]) || array_key_exists("_tab_menu", $context) ? $context["_tab_menu"] : (function () { throw new Twig_Error_Runtime('Variable "_tab_menu" does not exist.', 274, $this->getSourceContext()); })()))) {
                // line 275
                echo "                                                    <div class=\"navbar-left\">
                                                        ";
                // line 276
                echo (isset($context["_tab_menu"]) || array_key_exists("_tab_menu", $context) ? $context["_tab_menu"] : (function () { throw new Twig_Error_Runtime('Variable "_tab_menu" does not exist.', 276, $this->getSourceContext()); })());
                echo "
                                                    </div>
                                                ";
            }
            // line 279
            echo "
                                                ";
            // line 280
            if ((((array_key_exists("admin", $context) && array_key_exists("action", $context)) && ((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new Twig_Error_Runtime('Variable "action" does not exist.', 280, $this->getSourceContext()); })()) == "list")) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 280, $this->getSourceContext()); })()), "listModes", array())) > 1))) {
                // line 281
                echo "                                                    <div class=\"nav navbar-right btn-group\">
                                                        ";
                // line 282
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 282, $this->getSourceContext()); })()), "listModes", array()));
                foreach ($context['_seq'] as $context["mode"] => $context["settings"]) {
                    // line 283
                    echo "                                                            <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 283, $this->getSourceContext()); })()), "generateUrl", array(0 => "list", 1 => twig_array_merge(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 283, $this->getSourceContext()); })()), "request", array()), "query", array()), "all", array()), array("_list_mode" => $context["mode"]))), "method"), "html", null, true);
                    echo "\" class=\"btn btn-default navbar-btn btn-sm";
                    if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 283, $this->getSourceContext()); })()), "getListMode", array(), "method") == $context["mode"])) {
                        echo " active";
                    }
                    echo "\"><i class=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["settings"], "class", array()), "html", null, true);
                    echo "\"></i></a>
                                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['mode'], $context['settings'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 285
                echo "                                                    </div>
                                                ";
            }
            // line 287
            echo "
                                                ";
            // line 288
            $this->displayBlock('sonata_admin_content_actions_wrappers', $context, $blocks);
            // line 304
            echo "
                                                ";
            // line 305
            if ( !twig_test_empty((isset($context["_list_filters_actions"]) || array_key_exists("_list_filters_actions", $context) ? $context["_list_filters_actions"] : (function () { throw new Twig_Error_Runtime('Variable "_list_filters_actions" does not exist.', 305, $this->getSourceContext()); })()))) {
                // line 306
                echo "                                                    ";
                echo (isset($context["_list_filters_actions"]) || array_key_exists("_list_filters_actions", $context) ? $context["_list_filters_actions"] : (function () { throw new Twig_Error_Runtime('Variable "_list_filters_actions" does not exist.', 306, $this->getSourceContext()); })());
                echo "
                                                ";
            }
            // line 308
            echo "                                            </div>
                                        </div>
                                    </nav>
                                ";
        }
        // line 312
        echo "                            ";
        
        $__internal_f67bc98f8835086463027fd46b6fcef750d77c09e4ab71508e1b5a3ea16bd508->leave($__internal_f67bc98f8835086463027fd46b6fcef750d77c09e4ab71508e1b5a3ea16bd508_prof);

    }

    // line 265
    public function block_tab_menu_navbar_header($context, array $blocks = array())
    {
        $__internal_93ddb50a4f9564f3f0453bb2f2b8fcc46b77e626a5b0bc197e82a3e1de7dd426 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93ddb50a4f9564f3f0453bb2f2b8fcc46b77e626a5b0bc197e82a3e1de7dd426->enter($__internal_93ddb50a4f9564f3f0453bb2f2b8fcc46b77e626a5b0bc197e82a3e1de7dd426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu_navbar_header"));

        // line 266
        echo "                                                ";
        if ( !twig_test_empty((isset($context["_navbar_title"]) || array_key_exists("_navbar_title", $context) ? $context["_navbar_title"] : (function () { throw new Twig_Error_Runtime('Variable "_navbar_title" does not exist.', 266, $this->getSourceContext()); })()))) {
            // line 267
            echo "                                                    <div class=\"navbar-header\">
                                                        <a class=\"navbar-brand\" href=\"#\">";
            // line 268
            echo (isset($context["_navbar_title"]) || array_key_exists("_navbar_title", $context) ? $context["_navbar_title"] : (function () { throw new Twig_Error_Runtime('Variable "_navbar_title" does not exist.', 268, $this->getSourceContext()); })());
            echo "</a>
                                                    </div>
                                                ";
        }
        // line 271
        echo "                                            ";
        
        $__internal_93ddb50a4f9564f3f0453bb2f2b8fcc46b77e626a5b0bc197e82a3e1de7dd426->leave($__internal_93ddb50a4f9564f3f0453bb2f2b8fcc46b77e626a5b0bc197e82a3e1de7dd426_prof);

    }

    // line 288
    public function block_sonata_admin_content_actions_wrappers($context, array $blocks = array())
    {
        $__internal_bc9cd2af61a025aa552241d9d5607e7146aafd547e44ac4dc0145d3f5d497de2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc9cd2af61a025aa552241d9d5607e7146aafd547e44ac4dc0145d3f5d497de2->enter($__internal_bc9cd2af61a025aa552241d9d5607e7146aafd547e44ac4dc0145d3f5d497de2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content_actions_wrappers"));

        // line 289
        echo "                                                    ";
        if ( !twig_test_empty(twig_trim_filter(twig_replace_filter((isset($context["_actions"]) || array_key_exists("_actions", $context) ? $context["_actions"] : (function () { throw new Twig_Error_Runtime('Variable "_actions" does not exist.', 289, $this->getSourceContext()); })()), array("<li>" => "", "</li>" => ""))))) {
            // line 290
            echo "                                                        <ul class=\"nav navbar-nav navbar-right\">
                                                        ";
            // line 291
            if ((twig_length_filter($this->env, twig_split_filter($this->env, (isset($context["_actions"]) || array_key_exists("_actions", $context) ? $context["_actions"] : (function () { throw new Twig_Error_Runtime('Variable "_actions" does not exist.', 291, $this->getSourceContext()); })()), "</a>")) > 2)) {
                // line 292
                echo "                                                            <li class=\"dropdown sonata-actions\">
                                                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                // line 293
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_actions", array(), "SonataAdminBundle"), "html", null, true);
                echo " <b class=\"caret\"></b></a>
                                                                <ul class=\"dropdown-menu\" role=\"menu\">
                                                                    ";
                // line 295
                echo (isset($context["_actions"]) || array_key_exists("_actions", $context) ? $context["_actions"] : (function () { throw new Twig_Error_Runtime('Variable "_actions" does not exist.', 295, $this->getSourceContext()); })());
                echo "
                                                                </ul>
                                                            </li>
                                                        ";
            } else {
                // line 299
                echo "                                                            ";
                echo (isset($context["_actions"]) || array_key_exists("_actions", $context) ? $context["_actions"] : (function () { throw new Twig_Error_Runtime('Variable "_actions" does not exist.', 299, $this->getSourceContext()); })());
                echo "
                                                        ";
            }
            // line 301
            echo "                                                        </ul>
                                                    ";
        }
        // line 303
        echo "                                                ";
        
        $__internal_bc9cd2af61a025aa552241d9d5607e7146aafd547e44ac4dc0145d3f5d497de2->leave($__internal_bc9cd2af61a025aa552241d9d5607e7146aafd547e44ac4dc0145d3f5d497de2_prof);

    }

    // line 317
    public function block_sonata_admin_content($context, array $blocks = array())
    {
        $__internal_c714fffce768bedddbcc4ffd8259b76c681a295660ff0d85b179cdd002a858d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c714fffce768bedddbcc4ffd8259b76c681a295660ff0d85b179cdd002a858d4->enter($__internal_c714fffce768bedddbcc4ffd8259b76c681a295660ff0d85b179cdd002a858d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content"));

        // line 318
        echo "
                            ";
        // line 319
        $this->displayBlock('notice', $context, $blocks);
        // line 322
        echo "
                            ";
        // line 323
        if ( !twig_test_empty((isset($context["_preview"]) || array_key_exists("_preview", $context) ? $context["_preview"] : (function () { throw new Twig_Error_Runtime('Variable "_preview" does not exist.', 323, $this->getSourceContext()); })()))) {
            // line 324
            echo "                                <div class=\"sonata-ba-preview\">";
            echo (isset($context["_preview"]) || array_key_exists("_preview", $context) ? $context["_preview"] : (function () { throw new Twig_Error_Runtime('Variable "_preview" does not exist.', 324, $this->getSourceContext()); })());
            echo "</div>
                            ";
        }
        // line 326
        echo "
                            ";
        // line 327
        if ( !twig_test_empty((isset($context["_content"]) || array_key_exists("_content", $context) ? $context["_content"] : (function () { throw new Twig_Error_Runtime('Variable "_content" does not exist.', 327, $this->getSourceContext()); })()))) {
            // line 328
            echo "                                <div class=\"sonata-ba-content\">";
            echo (isset($context["_content"]) || array_key_exists("_content", $context) ? $context["_content"] : (function () { throw new Twig_Error_Runtime('Variable "_content" does not exist.', 328, $this->getSourceContext()); })());
            echo "</div>
                            ";
        }
        // line 330
        echo "
                            ";
        // line 331
        if ( !twig_test_empty((isset($context["_show"]) || array_key_exists("_show", $context) ? $context["_show"] : (function () { throw new Twig_Error_Runtime('Variable "_show" does not exist.', 331, $this->getSourceContext()); })()))) {
            // line 332
            echo "                                <div class=\"sonata-ba-show\">";
            echo (isset($context["_show"]) || array_key_exists("_show", $context) ? $context["_show"] : (function () { throw new Twig_Error_Runtime('Variable "_show" does not exist.', 332, $this->getSourceContext()); })());
            echo "</div>
                            ";
        }
        // line 334
        echo "
                            ";
        // line 335
        if ( !twig_test_empty((isset($context["_form"]) || array_key_exists("_form", $context) ? $context["_form"] : (function () { throw new Twig_Error_Runtime('Variable "_form" does not exist.', 335, $this->getSourceContext()); })()))) {
            // line 336
            echo "                                <div class=\"sonata-ba-form\">";
            echo (isset($context["_form"]) || array_key_exists("_form", $context) ? $context["_form"] : (function () { throw new Twig_Error_Runtime('Variable "_form" does not exist.', 336, $this->getSourceContext()); })());
            echo "</div>
                            ";
        }
        // line 338
        echo "
                            ";
        // line 339
        if ( !twig_test_empty((isset($context["_list_filters"]) || array_key_exists("_list_filters", $context) ? $context["_list_filters"] : (function () { throw new Twig_Error_Runtime('Variable "_list_filters" does not exist.', 339, $this->getSourceContext()); })()))) {
            // line 340
            echo "                                <div class=\"row\">
                                    ";
            // line 341
            echo (isset($context["_list_filters"]) || array_key_exists("_list_filters", $context) ? $context["_list_filters"] : (function () { throw new Twig_Error_Runtime('Variable "_list_filters" does not exist.', 341, $this->getSourceContext()); })());
            echo "
                                </div>
                            ";
        }
        // line 344
        echo "
                            ";
        // line 345
        if ( !twig_test_empty((isset($context["_list_table"]) || array_key_exists("_list_table", $context) ? $context["_list_table"] : (function () { throw new Twig_Error_Runtime('Variable "_list_table" does not exist.', 345, $this->getSourceContext()); })()))) {
            // line 346
            echo "                                <div class=\"row\">
                                    ";
            // line 347
            echo (isset($context["_list_table"]) || array_key_exists("_list_table", $context) ? $context["_list_table"] : (function () { throw new Twig_Error_Runtime('Variable "_list_table" does not exist.', 347, $this->getSourceContext()); })());
            echo "
                                </div>
                            ";
        }
        // line 350
        echo "                        ";
        
        $__internal_c714fffce768bedddbcc4ffd8259b76c681a295660ff0d85b179cdd002a858d4->leave($__internal_c714fffce768bedddbcc4ffd8259b76c681a295660ff0d85b179cdd002a858d4_prof);

    }

    // line 319
    public function block_notice($context, array $blocks = array())
    {
        $__internal_44f3bd32085785d215591267aae19f83bff8ec1f8eab840d84d062cfe7d55bae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44f3bd32085785d215591267aae19f83bff8ec1f8eab840d84d062cfe7d55bae->enter($__internal_44f3bd32085785d215591267aae19f83bff8ec1f8eab840d84d062cfe7d55bae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "notice"));

        // line 320
        echo "                                ";
        $this->loadTemplate("SonataCoreBundle:FlashMessage:render.html.twig", "SonataAdminBundle::standard_layout.html.twig", 320)->display($context);
        // line 321
        echo "                            ";
        
        $__internal_44f3bd32085785d215591267aae19f83bff8ec1f8eab840d84d062cfe7d55bae->leave($__internal_44f3bd32085785d215591267aae19f83bff8ec1f8eab840d84d062cfe7d55bae_prof);

    }

    // line 358
    public function block_bootlint($context, array $blocks = array())
    {
        $__internal_e3defa3a82e5f6a421205c826459f8a85ecc2b477cf0b83b8d432727277e602d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3defa3a82e5f6a421205c826459f8a85ecc2b477cf0b83b8d432727277e602d->enter($__internal_e3defa3a82e5f6a421205c826459f8a85ecc2b477cf0b83b8d432727277e602d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bootlint"));

        // line 359
        echo "            ";
        // line 360
        echo "            <script type=\"text/javascript\">
                javascript:(function(){var s=document.createElement(\"script\");s.onload=function(){bootlint.showLintReportForCurrentDocument([], {hasProblems: false, problemFree: false});};s.src=\"https://maxcdn.bootstrapcdn.com/bootlint/latest/bootlint.min.js\";document.body.appendChild(s)})();
            </script>
        ";
        
        $__internal_e3defa3a82e5f6a421205c826459f8a85ecc2b477cf0b83b8d432727277e602d->leave($__internal_e3defa3a82e5f6a421205c826459f8a85ecc2b477cf0b83b8d432727277e602d_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::standard_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1263 => 360,  1261 => 359,  1255 => 358,  1248 => 321,  1245 => 320,  1239 => 319,  1232 => 350,  1226 => 347,  1223 => 346,  1221 => 345,  1218 => 344,  1212 => 341,  1209 => 340,  1207 => 339,  1204 => 338,  1198 => 336,  1196 => 335,  1193 => 334,  1187 => 332,  1185 => 331,  1182 => 330,  1176 => 328,  1174 => 327,  1171 => 326,  1165 => 324,  1163 => 323,  1160 => 322,  1158 => 319,  1155 => 318,  1149 => 317,  1142 => 303,  1138 => 301,  1132 => 299,  1125 => 295,  1120 => 293,  1117 => 292,  1115 => 291,  1112 => 290,  1109 => 289,  1103 => 288,  1096 => 271,  1090 => 268,  1087 => 267,  1084 => 266,  1078 => 265,  1071 => 312,  1065 => 308,  1059 => 306,  1057 => 305,  1054 => 304,  1052 => 288,  1049 => 287,  1045 => 285,  1030 => 283,  1026 => 282,  1023 => 281,  1021 => 280,  1018 => 279,  1012 => 276,  1009 => 275,  1007 => 274,  1003 => 272,  1001 => 265,  997 => 263,  994 => 262,  988 => 261,  981 => 313,  978 => 261,  972 => 260,  964 => 351,  962 => 317,  957 => 314,  955 => 260,  951 => 258,  945 => 257,  937 => 247,  931 => 246,  923 => 249,  921 => 246,  918 => 245,  912 => 244,  902 => 242,  896 => 241,  884 => 240,  866 => 230,  860 => 228,  854 => 227,  847 => 251,  844 => 244,  841 => 241,  839 => 240,  836 => 239,  833 => 227,  827 => 226,  818 => 252,  816 => 226,  812 => 224,  806 => 223,  798 => 353,  796 => 257,  792 => 255,  789 => 223,  783 => 222,  774 => 210,  772 => 209,  765 => 204,  759 => 203,  751 => 201,  749 => 200,  743 => 196,  737 => 195,  730 => 216,  725 => 213,  722 => 203,  720 => 195,  716 => 193,  713 => 192,  707 => 191,  699 => 187,  695 => 185,  689 => 183,  686 => 182,  683 => 181,  669 => 180,  663 => 178,  659 => 176,  653 => 174,  649 => 172,  646 => 170,  643 => 168,  641 => 167,  636 => 166,  634 => 165,  631 => 164,  629 => 163,  626 => 160,  624 => 159,  622 => 158,  620 => 157,  602 => 156,  599 => 155,  597 => 154,  594 => 153,  592 => 152,  589 => 151,  583 => 150,  575 => 217,  573 => 191,  569 => 189,  567 => 150,  559 => 144,  553 => 143,  546 => 142,  542 => 140,  536 => 138,  533 => 137,  525 => 135,  523 => 134,  518 => 133,  515 => 132,  509 => 131,  498 => 127,  494 => 125,  488 => 124,  480 => 219,  477 => 143,  474 => 131,  472 => 124,  469 => 123,  463 => 122,  451 => 118,  444 => 115,  441 => 114,  438 => 113,  424 => 112,  419 => 110,  416 => 107,  414 => 106,  412 => 105,  410 => 104,  406 => 101,  403 => 100,  400 => 99,  383 => 98,  380 => 97,  377 => 96,  371 => 94,  369 => 93,  363 => 91,  357 => 90,  350 => 66,  341 => 64,  336 => 63,  330 => 62,  312 => 50,  308 => 48,  302 => 47,  294 => 46,  286 => 45,  278 => 44,  274 => 42,  268 => 41,  261 => 87,  258 => 86,  252 => 84,  249 => 83,  246 => 81,  241 => 80,  238 => 79,  235 => 77,  231 => 75,  229 => 73,  227 => 71,  224 => 70,  222 => 69,  220 => 68,  217 => 67,  215 => 62,  212 => 61,  209 => 41,  203 => 40,  196 => 38,  187 => 36,  182 => 35,  176 => 34,  166 => 29,  160 => 28,  148 => 26,  138 => 365,  135 => 364,  132 => 358,  130 => 357,  126 => 355,  124 => 222,  121 => 221,  119 => 122,  112 => 118,  108 => 116,  106 => 90,  102 => 88,  100 => 40,  97 => 39,  95 => 34,  92 => 33,  90 => 28,  85 => 26,  81 => 24,  79 => 23,  77 => 22,  75 => 21,  73 => 20,  71 => 19,  69 => 18,  67 => 17,  65 => 16,  63 => 15,  61 => 14,  59 => 13,  57 => 12,  54 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% set _preview = block('preview') is defined ? block('preview')|trim : null %}
{% set _form = block('form') is defined ? block('form')|trim : null %}
{% set _show = block('show') is defined ? block('show')|trim : null %}
{% set _list_table = block('list_table') is defined ? block('list_table')|trim : null %}
{% set _list_filters = block('list_filters') is defined ? block('list_filters')|trim : null %}
{% set _tab_menu = block('tab_menu') is defined ? block('tab_menu')|trim : null %}
{% set _content = block('content') is defined ? block('content')|trim : null %}
{% set _title = block('title') is defined ? block('title')|trim : null %}
{% set _breadcrumb = block('breadcrumb') is defined ? block('breadcrumb')|trim : null %}
{% set _actions = block('actions') is defined ? block('actions')|trim : null %}
{% set _navbar_title = block('navbar_title') is defined ? block('navbar_title')|trim : null %}
{% set _list_filters_actions = block('list_filters_actions') is defined ? block('list_filters_actions')|trim : null %}

<!DOCTYPE html>
<html {% block html_attributes %}class=\"no-js\"{% endblock %}>
    <head>
        {% block meta_tags %}
            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <meta charset=\"UTF-8\">
            <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        {% endblock %}

        {% block stylesheets %}
            {% for stylesheet in sonata_admin.adminPool.getOption('stylesheets', []) %}
                <link rel=\"stylesheet\" href=\"{{ asset(stylesheet) }}\">
            {% endfor %}
        {% endblock %}

        {% block javascripts %}
            {% block sonata_javascript_config %}
                <script>
                    window.SONATA_CONFIG = {
                        CONFIRM_EXIT: {% if sonata_admin.adminPool.getOption('confirm_exit') %}true{% else %}false{% endif %},
                        USE_SELECT2: {% if sonata_admin.adminPool.getOption('use_select2') %}true{% else %}false{% endif %},
                        USE_ICHECK: {% if sonata_admin.adminPool.getOption('use_icheck') %}true{% else %}false{% endif %},
                        USE_STICKYFORMS: {% if sonata_admin.adminPool.getOption('use_stickyforms') %}true{% else %}false{% endif %}
                    };
                    window.SONATA_TRANSLATIONS = {
                        CONFIRM_EXIT: '{{ 'confirm_exit'|trans({}, 'SonataAdminBundle')|escape('js') }}'
                    };

                    // http://getbootstrap.com/getting-started/#support-ie10-width
                    if (navigator.userAgent.match(/IEMobile\\/10\\.0/)) {
                        var msViewportStyle = document.createElement('style');
                        msViewportStyle.appendChild(document.createTextNode('@-ms-viewport{width:auto!important}'));
                        document.querySelector('head').appendChild(msViewportStyle);
                    }
                </script>
            {% endblock %}

            {% block sonata_javascript_pool %}
                {% for javascript in sonata_admin.adminPool.getOption('javascripts', []) %}
                    <script src=\"{{ asset(javascript) }}\"></script>
                {% endfor %}
            {% endblock %}

            {% set locale = app.request.locale %}
            {# localize moment #}
            {% if locale[:2] != 'en' %}
                <script src=\"{{ asset(
                    'bundles/sonatacore/vendor/moment/locale/' ~
                    locale|lower|replace({'_':'-'}) ~
                    '.js'
                ) }}\"></script>
            {% endif %}

            {# localize select2 #}
            {% if sonata_admin.adminPool.getOption('use_select2') %}
                {% if locale == 'pt' %}{% set locale = 'pt_PT' %}{% endif %}

                {# omit default EN locale #}
                {% if locale[:2] != 'en' %}
                    <script src=\"{{ asset('bundles/sonatacore/vendor/select2/select2_locale_' ~ locale|replace({'_':'-'}) ~ '.js') }}\"></script>
                {% endif %}
            {% endif %}
        {% endblock %}

        <title>
        {% block sonata_head_title %}
            {{ 'Admin'|trans({}, 'SonataAdminBundle') }}

            {% if _title is not empty %}
                {{ _title|striptags|raw }}
            {% else %}
                {% if action is defined %}
                    -
                    {% for menu in breadcrumbs_builder.breadcrumbs(admin, action) %}
                        {% if not loop.first %}
                            {% if loop.index != 2 %}
                                &gt;
                            {% endif %}

                            {%- set translation_domain = menu.extra('translation_domain', 'messages') -%}
                            {%- set label = menu.label -%}
                            {%- if translation_domain is not same as(false) -%}
                                {%- set label = label|trans(menu.extra('translation_params', {}), translation_domain) -%}
                            {%- endif -%}

                            {{ label }}
                        {% endif %}
                    {% endfor %}
                {% endif %}
            {% endif %}
        {% endblock %}
        </title>
    </head>
    <body {% block body_attributes %}class=\"sonata-bc skin-black fixed\"{% endblock %}>

    <div class=\"wrapper\">

        {% block sonata_header %}
            <header class=\"main-header\">
                {% block sonata_header_noscript_warning %}
                    <noscript>
                        <div class=\"noscript-warning\">
                            {{ 'noscript_warning'|trans({}, 'SonataAdminBundle') }}
                        </div>
                    </noscript>
                {% endblock %}
                {% block logo %}
                    {% spaceless %}
                        <a class=\"logo\" href=\"{{ path('sonata_admin_dashboard') }}\">
                            {% if 'single_image' == sonata_admin.adminPool.getOption('title_mode') or 'both' == sonata_admin.adminPool.getOption('title_mode') %}
                                <img src=\"{{ asset(sonata_admin.adminPool.titlelogo) }}\" alt=\"{{ sonata_admin.adminPool.title }}\">
                            {% endif %}
                            {% if 'single_text' == sonata_admin.adminPool.getOption('title_mode') or 'both' == sonata_admin.adminPool.getOption('title_mode') %}
                                <span>{{ sonata_admin.adminPool.title }}</span>
                            {% endif %}
                        </a>
                    {% endspaceless %}
                {% endblock %}
                {% block sonata_nav %}
                    <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                        <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                            <span class=\"sr-only\">Toggle navigation</span>
                        </a>

                        <div class=\"navbar-left\">
                            {% block sonata_breadcrumb %}
                                <div class=\"hidden-xs\">
                                    {% if _breadcrumb is not empty or action is defined %}
                                        <ol class=\"nav navbar-top-links breadcrumb\">
                                            {% if _breadcrumb is empty %}
                                                {% if action is defined %}
                                                    {% for menu in breadcrumbs_builder.breadcrumbs(admin, action) %}
                                                        {%- set translation_domain = menu.extra('translation_domain', 'messages') -%}
                                                        {%- set label = menu.label -%}
                                                        {%- if translation_domain is not same as(false) -%}
                                                            {%- set label = label|trans(menu.extra('translation_params', {}), translation_domain) -%}
                                                        {%- endif -%}

                                                        {% if not loop.last %}
                                                            <li>
                                                                {% if menu.uri is not empty %}
                                                                    <a href=\"{{ menu.uri }}\">
                                                                        {% if menu.extra('safe_label', true) %}
                                                                            {{- label|raw -}}
                                                                        {% else %}
                                                                            {{- label -}}
                                                                        {% endif %}
                                                                    </a>
                                                                {% else %}
                                                                    <span>{{ label }}</span>
                                                                {% endif %}
                                                            </li>
                                                        {% else %}
                                                            <li class=\"active\"><span>{{ label }}</span></li>
                                                        {% endif %}
                                                    {% endfor %}
                                                {% endif %}
                                            {% else %}
                                                {{ _breadcrumb|raw }}
                                            {% endif %}
                                        </ol>
                                    {% endif %}
                                </div>
                            {% endblock sonata_breadcrumb %}
                        </div>

                        {% block sonata_top_nav_menu %}
                            {% if app.user and is_granted('ROLE_SONATA_ADMIN') %}
                                <div class=\"navbar-custom-menu\">
                                    <ul class=\"nav navbar-nav\">
                                        {% block sonata_top_nav_menu_add_block %}
                                            <li class=\"dropdown\">
                                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                    <i class=\"fa fa-plus-square fa-fw\" aria-hidden=\"true\"></i> <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i>
                                                </a>
                                                {% include sonata_admin.adminPool.getTemplate('add_block') %}
                                            </li>
                                        {% endblock %}
                                        {% block sonata_top_nav_menu_user_block %}
                                            <li class=\"dropdown user-menu\">
                                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                    <i class=\"fa fa-user fa-fw\" aria-hidden=\"true\"></i> <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i>
                                                </a>
                                                <ul class=\"dropdown-menu dropdown-user\">
                                                    {% include sonata_admin.adminPool.getTemplate('user_block') %}
                                                </ul>
                                            </li>
                                        {% endblock %}
                                    </ul>
                                </div>
                            {% endif %}
                        {% endblock %}
                    </nav>
                {% endblock sonata_nav %}
            </header>
        {% endblock sonata_header %}

        {% block sonata_wrapper %}
            {% block sonata_left_side %}
                <aside class=\"main-sidebar\">
                    <section class=\"sidebar\">
                        {% block sonata_side_nav %}
                            {% block sonata_sidebar_search %}
                                <form action=\"{{ path('sonata_admin_search') }}\" method=\"GET\" class=\"sidebar-form\" role=\"search\">
                                    <div class=\"input-group custom-search-form\">
                                        <input type=\"text\" name=\"q\" value=\"{{ app.request.get('q') }}\" class=\"form-control\" placeholder=\"{{ 'search_placeholder'|trans({}, 'SonataAdminBundle') }}\">
                                        <span class=\"input-group-btn\">
                                            <button class=\"btn btn-flat\" type=\"submit\">
                                                <i class=\"fa fa-search\" aria-hidden=\"true\"></i>
                                            </button>
                                        </span>
                                    </div>
                                </form>
                            {% endblock sonata_sidebar_search %}

                            {% block side_bar_before_nav %} {% endblock %}
                            {% block side_bar_nav %}
                                {{ knp_menu_render('sonata_admin_sidebar', {template: sonata_admin.adminPool.getTemplate('knp_menu_template')}) }}
                            {% endblock side_bar_nav %}
                            {% block side_bar_after_nav %}
                                <p class=\"text-center small\" style=\"border-top: 1px solid #444444; padding-top: 10px\">
                                    {% block side_bar_after_nav_content %}
                                        <a href=\"https://sonata-project.org\" rel=\"noreferrer\" target=\"_blank\">sonata project</a>
                                    {% endblock %}
                                </p>
                            {% endblock %}
                        {% endblock sonata_side_nav %}
                    </section>
                </aside>
            {% endblock sonata_left_side %}

            <div class=\"content-wrapper\">
                {% block sonata_page_content %}
                    <section class=\"content-header\">

                        {% block sonata_page_content_header %}
                            {% block sonata_page_content_nav %}
                                {% if _tab_menu is not empty or _actions is not empty or _list_filters_actions is not empty %}
                                    <nav class=\"navbar navbar-default\" role=\"navigation\">
                                        <div class=\"container-fluid\">
                                            {% block tab_menu_navbar_header %}
                                                {% if _navbar_title is not empty %}
                                                    <div class=\"navbar-header\">
                                                        <a class=\"navbar-brand\" href=\"#\">{{ _navbar_title|raw }}</a>
                                                    </div>
                                                {% endif %}
                                            {% endblock %}

                                            <div class=\"navbar-collapse\">
                                                {% if _tab_menu is not empty %}
                                                    <div class=\"navbar-left\">
                                                        {{ _tab_menu|raw }}
                                                    </div>
                                                {% endif %}

                                                {% if admin is defined and action is defined and action == 'list' and admin.listModes|length > 1 %}
                                                    <div class=\"nav navbar-right btn-group\">
                                                        {% for mode, settings in admin.listModes %}
                                                            <a href=\"{{ admin.generateUrl('list', app.request.query.all|merge({_list_mode: mode})) }}\" class=\"btn btn-default navbar-btn btn-sm{% if admin.getListMode() == mode %} active{% endif %}\"><i class=\"{{ settings.class }}\"></i></a>
                                                        {% endfor %}
                                                    </div>
                                                {% endif %}

                                                {% block sonata_admin_content_actions_wrappers %}
                                                    {% if _actions|replace({ '<li>': '', '</li>': '' })|trim is not empty %}
                                                        <ul class=\"nav navbar-nav navbar-right\">
                                                        {% if _actions|split('</a>')|length > 2 %}
                                                            <li class=\"dropdown sonata-actions\">
                                                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">{{ 'link_actions'|trans({}, 'SonataAdminBundle') }} <b class=\"caret\"></b></a>
                                                                <ul class=\"dropdown-menu\" role=\"menu\">
                                                                    {{ _actions|raw }}
                                                                </ul>
                                                            </li>
                                                        {% else %}
                                                            {{ _actions|raw }}
                                                        {% endif %}
                                                        </ul>
                                                    {% endif %}
                                                {% endblock sonata_admin_content_actions_wrappers %}

                                                {% if _list_filters_actions is not empty %}
                                                    {{ _list_filters_actions|raw }}
                                                {% endif %}
                                            </div>
                                        </div>
                                    </nav>
                                {% endif %}
                            {% endblock sonata_page_content_nav %}
                        {% endblock sonata_page_content_header %}
                    </section>

                    <section class=\"content\">
                        {% block sonata_admin_content %}

                            {% block notice %}
                                {% include 'SonataCoreBundle:FlashMessage:render.html.twig' %}
                            {% endblock notice %}

                            {% if _preview is not empty %}
                                <div class=\"sonata-ba-preview\">{{ _preview|raw }}</div>
                            {% endif %}

                            {% if _content is not empty %}
                                <div class=\"sonata-ba-content\">{{ _content|raw }}</div>
                            {% endif %}

                            {% if _show is not empty %}
                                <div class=\"sonata-ba-show\">{{ _show|raw }}</div>
                            {% endif %}

                            {% if _form is not empty %}
                                <div class=\"sonata-ba-form\">{{ _form|raw }}</div>
                            {% endif %}

                            {% if _list_filters is not empty %}
                                <div class=\"row\">
                                    {{ _list_filters|raw }}
                                </div>
                            {% endif %}

                            {% if _list_table is not empty %}
                                <div class=\"row\">
                                    {{ _list_table|raw }}
                                </div>
                            {% endif %}
                        {% endblock sonata_admin_content %}
                    </section>
                {% endblock sonata_page_content %}
            </div>
        {% endblock sonata_wrapper %}
    </div>

    {% if sonata_admin.adminPool.getOption('use_bootlint') %}
        {% block bootlint %}
            {# Bootlint - https://github.com/twbs/bootlint#in-the-browser #}
            <script type=\"text/javascript\">
                javascript:(function(){var s=document.createElement(\"script\");s.onload=function(){bootlint.showLintReportForCurrentDocument([], {hasProblems: false, problemFree: false});};s.src=\"https://maxcdn.bootstrapcdn.com/bootlint/latest/bootlint.min.js\";document.body.appendChild(s)})();
            </script>
        {% endblock %}
    {% endif %}

    </body>
</html>
", "SonataAdminBundle::standard_layout.html.twig", "/home/joheras/Symfony/corredoresporlarioja/corredoresporlarioja/vendor/sonata-project/admin-bundle/Resources/views/standard_layout.html.twig");
    }
}
