<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/e')) {
            // portada.en
            if ($pathinfo === '/en/welcome') {
                return array (  '_controller' => 'App\\CorredoresRiojaBundle\\Controller\\DefaultController::indexAction',  '_locale' => 'en',  '_route' => 'portada.en',);
            }

            // portada.es
            if ($pathinfo === '/es/portada') {
                return array (  '_controller' => 'App\\CorredoresRiojaBundle\\Controller\\DefaultController::indexAction',  '_locale' => 'es',  '_route' => 'portada.es',);
            }

            // show_carreras.en
            if ($pathinfo === '/en/runners/races') {
                return array (  '_controller' => 'App\\CorredoresRiojaBundle\\Controller\\DefaultController::carrerasAction',  '_locale' => 'en',  '_route' => 'show_carreras.en',);
            }

            // show_carreras.es
            if ($pathinfo === '/es/corredores/carreras') {
                return array (  '_controller' => 'App\\CorredoresRiojaBundle\\Controller\\DefaultController::carrerasAction',  '_locale' => 'es',  '_route' => 'show_carreras.es',);
            }

            // show_carrera.en
            if (0 === strpos($pathinfo, '/en/runners/race') && preg_match('#^/en/runners/race/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'show_carrera.en')), array (  '_controller' => 'App\\CorredoresRiojaBundle\\Controller\\DefaultController::carreraAction',  '_locale' => 'en',));
            }

            // show_carrera.es
            if (0 === strpos($pathinfo, '/es/corredores/carreras') && preg_match('#^/es/corredores/carreras/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'show_carrera.es')), array (  '_controller' => 'App\\CorredoresRiojaBundle\\Controller\\DefaultController::carreraAction',  '_locale' => 'es',));
            }

            // show_organizacion.en
            if (0 === strpos($pathinfo, '/en/runners/en/organizations') && preg_match('#^/en/runners/en/organizations/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'show_organizacion.en')), array (  '_controller' => 'App\\CorredoresRiojaBundle\\Controller\\DefaultController::organizacionAction',  '_locale' => 'en',));
            }

            // show_organizacion.es
            if (0 === strpos($pathinfo, '/es/corredores/organizacion') && preg_match('#^/es/corredores/organizacion/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'show_organizacion.es')), array (  '_controller' => 'App\\CorredoresRiojaBundle\\Controller\\DefaultController::organizacionAction',  '_locale' => 'es',));
            }

            // show_miscarreras.en
            if ($pathinfo === '/en/runners/myraces') {
                return array (  '_controller' => 'App\\CorredoresRiojaBundle\\Controller\\DefaultController::miscarrerasAction',  '_locale' => 'en',  '_route' => 'show_miscarreras.en',);
            }

            // show_miscarreras.es
            if ($pathinfo === '/es/corredores/miscarreras') {
                return array (  '_controller' => 'App\\CorredoresRiojaBundle\\Controller\\DefaultController::miscarrerasAction',  '_locale' => 'es',  '_route' => 'show_miscarreras.es',);
            }

            // registro.en
            if ($pathinfo === '/en/runners/register') {
                return array (  '_controller' => 'App\\CorredoresRiojaBundle\\Controller\\DefaultController::registroAction',  '_locale' => 'en',  '_route' => 'registro.en',);
            }

            // registro.es
            if ($pathinfo === '/es/corredores/registro') {
                return array (  '_controller' => 'App\\CorredoresRiojaBundle\\Controller\\DefaultController::registroAction',  '_locale' => 'es',  '_route' => 'registro.es',);
            }

            // corredor_login.en
            if ($pathinfo === '/en/runners/login') {
                return array (  '_controller' => 'App\\CorredoresRiojaBundle\\Controller\\DefaultController::loginAction',  '_locale' => 'en',  '_route' => 'corredor_login.en',);
            }

            // corredor_login.es
            if ($pathinfo === '/es/corredores/login') {
                return array (  '_controller' => 'App\\CorredoresRiojaBundle\\Controller\\DefaultController::loginAction',  '_locale' => 'es',  '_route' => 'corredor_login.es',);
            }

            // corredor_login_check.en
            if ($pathinfo === '/en/runners/login_check') {
                return array (  '_locale' => 'en',  '_route' => 'corredor_login_check.en',);
            }

            // corredor_login_check.es
            if ($pathinfo === '/es/corredores/login_check') {
                return array (  '_locale' => 'es',  '_route' => 'corredor_login_check.es',);
            }

            // corredor_logout.en
            if ($pathinfo === '/en/runners/logout') {
                return array (  '_locale' => 'en',  '_route' => 'corredor_logout.en',);
            }

            // corredor_logout.es
            if ($pathinfo === '/es/corredores/logout') {
                return array (  '_locale' => 'es',  '_route' => 'corredor_logout.es',);
            }

            // inscribir_corredor.en
            if (0 === strpos($pathinfo, '/en/runners/race-register') && preg_match('#^/en/runners/race\\-register/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'inscribir_corredor.en')), array (  '_controller' => 'App\\CorredoresRiojaBundle\\Controller\\DefaultController::inscribirAction',  '_locale' => 'en',));
            }

            // inscribir_corredor.es
            if (0 === strpos($pathinfo, '/es/corredores/inscribir') && preg_match('#^/es/corredores/inscribir/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'inscribir_corredor.es')), array (  '_controller' => 'App\\CorredoresRiojaBundle\\Controller\\DefaultController::inscribirAction',  '_locale' => 'es',));
            }

            // desapuntar_corredor.en
            if (0 === strpos($pathinfo, '/en/runners/quit') && preg_match('#^/en/runners/quit/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'desapuntar_corredor.en')), array (  '_controller' => 'App\\CorredoresRiojaBundle\\Controller\\DefaultController::desapuntarAction',  '_locale' => 'en',));
            }

            // desapuntar_corredor.es
            if (0 === strpos($pathinfo, '/es/corredores/desapuntar') && preg_match('#^/es/corredores/desapuntar/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'desapuntar_corredor.es')), array (  '_controller' => 'App\\CorredoresRiojaBundle\\Controller\\DefaultController::desapuntarAction',  '_locale' => 'es',));
            }

            // corredor_perfil.en
            if ($pathinfo === '/en/runners/profile') {
                return array (  '_controller' => 'App\\CorredoresRiojaBundle\\Controller\\DefaultController::perfilAction',  '_locale' => 'en',  '_route' => 'corredor_perfil.en',);
            }

            // corredor_perfil.es
            if ($pathinfo === '/es/corredores/perfil') {
                return array (  '_controller' => 'App\\CorredoresRiojaBundle\\Controller\\DefaultController::perfilAction',  '_locale' => 'es',  '_route' => 'corredor_perfil.es',);
            }

            // organizacion_login.en
            if ($pathinfo === '/en/organizations/login') {
                return array (  '_controller' => 'App\\CorredoresRiojaBundle\\Controller\\OrganizacionController::loginAction',  '_locale' => 'en',  '_route' => 'organizacion_login.en',);
            }

            // organizacion_login.es
            if ($pathinfo === '/es/organizaciones/login') {
                return array (  '_controller' => 'App\\CorredoresRiojaBundle\\Controller\\OrganizacionController::loginAction',  '_locale' => 'es',  '_route' => 'organizacion_login.es',);
            }

            // organizacion_login_check.en
            if ($pathinfo === '/en/organizations/login_check') {
                return array (  '_locale' => 'en',  '_route' => 'organizacion_login_check.en',);
            }

            // organizacion_login_check.es
            if ($pathinfo === '/es/organizaciones/login_check') {
                return array (  '_locale' => 'es',  '_route' => 'organizacion_login_check.es',);
            }

            // organizacion_logout.en
            if ($pathinfo === '/en/organizations/logout') {
                return array (  '_locale' => 'en',  '_route' => 'organizacion_logout.en',);
            }

            // organizacion_logout.es
            if ($pathinfo === '/es/organizaciones/logout') {
                return array (  '_locale' => 'es',  '_route' => 'organizacion_logout.es',);
            }

            // organizacion_registro.en
            if ($pathinfo === '/en/organizations/register') {
                return array (  '_controller' => 'App\\CorredoresRiojaBundle\\Controller\\OrganizacionController::registroAction',  '_locale' => 'en',  '_route' => 'organizacion_registro.en',);
            }

            // organizacion_registro.es
            if ($pathinfo === '/es/organizaciones/registro') {
                return array (  '_controller' => 'App\\CorredoresRiojaBundle\\Controller\\OrganizacionController::registroAction',  '_locale' => 'es',  '_route' => 'organizacion_registro.es',);
            }

            // organizacion_portada.en
            if ($pathinfo === '/en/organizations') {
                return array (  '_controller' => 'App\\CorredoresRiojaBundle\\Controller\\OrganizacionController::portadaAction',  '_locale' => 'en',  '_route' => 'organizacion_portada.en',);
            }

            // organizacion_portada.es
            if ($pathinfo === '/es/organizaciones') {
                return array (  '_controller' => 'App\\CorredoresRiojaBundle\\Controller\\OrganizacionController::portadaAction',  '_locale' => 'es',  '_route' => 'organizacion_portada.es',);
            }

            // organizacion_perfil.en
            if ($pathinfo === '/en/organizations/profile') {
                return array (  '_controller' => 'App\\CorredoresRiojaBundle\\Controller\\OrganizacionController::perfilAction',  '_locale' => 'en',  '_route' => 'organizacion_perfil.en',);
            }

            // organizacion_perfil.es
            if ($pathinfo === '/es/organizaciones/perfil') {
                return array (  '_controller' => 'App\\CorredoresRiojaBundle\\Controller\\OrganizacionController::perfilAction',  '_locale' => 'es',  '_route' => 'organizacion_perfil.es',);
            }

            // anadir_carrera.en
            if ($pathinfo === '/en/organizations/new_race') {
                return array (  '_controller' => 'App\\CorredoresRiojaBundle\\Controller\\OrganizacionController::nuevaCarreraAction',  '_locale' => 'en',  '_route' => 'anadir_carrera.en',);
            }

            // anadir_carrera.es
            if ($pathinfo === '/es/organizaciones/nueva_carrera') {
                return array (  '_controller' => 'App\\CorredoresRiojaBundle\\Controller\\OrganizacionController::nuevaCarreraAction',  '_locale' => 'es',  '_route' => 'anadir_carrera.es',);
            }

            // modificar_carrera.en
            if (0 === strpos($pathinfo, '/en/organizations/modify_race') && preg_match('#^/en/organizations/modify_race/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'modificar_carrera.en')), array (  '_controller' => 'App\\CorredoresRiojaBundle\\Controller\\OrganizacionController::modificarCarreraAction',  '_locale' => 'en',));
            }

            // modificar_carrera.es
            if (0 === strpos($pathinfo, '/es/organizaciones/modificar_carrera') && preg_match('#^/es/organizaciones/modificar_carrera/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'modificar_carrera.es')), array (  '_controller' => 'App\\CorredoresRiojaBundle\\Controller\\OrganizacionController::modificarCarreraAction',  '_locale' => 'es',));
            }

            // modificarcarreras.en
            if ($pathinfo === '/en/organizations/modify_races') {
                return array (  '_controller' => 'App\\CorredoresRiojaBundle\\Controller\\OrganizacionController::modificarCarrerasAction',  '_locale' => 'en',  '_route' => 'modificarcarreras.en',);
            }

            // modificarcarreras.es
            if ($pathinfo === '/es/organizaciones/modificar_carreras') {
                return array (  '_controller' => 'App\\CorredoresRiojaBundle\\Controller\\OrganizacionController::modificarCarrerasAction',  '_locale' => 'es',  '_route' => 'modificarcarreras.es',);
            }

        }

        // home
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'home');
            }

            return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'portada',  '_route' => 'home',);
        }

        if (0 === strpos($pathinfo, '/admin')) {
            // sonata_admin_redirect
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sonata_admin_redirect');
                }

                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'sonata_admin_dashboard',  'permanent' => 'true',  '_route' => 'sonata_admin_redirect',);
            }

            // sonata_admin_dashboard
            if ($pathinfo === '/admin/dashboard') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::dashboardAction',  '_route' => 'sonata_admin_dashboard',);
            }

            if (0 === strpos($pathinfo, '/admin/core')) {
                // sonata_admin_retrieve_form_element
                if ($pathinfo === '/admin/core/get-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:retrieveFormFieldElementAction',  '_route' => 'sonata_admin_retrieve_form_element',);
                }

                // sonata_admin_append_form_element
                if ($pathinfo === '/admin/core/append-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:appendFormFieldElementAction',  '_route' => 'sonata_admin_append_form_element',);
                }

                // sonata_admin_short_object_information
                if (0 === strpos($pathinfo, '/admin/core/get-short-object-description') && preg_match('#^/admin/core/get\\-short\\-object\\-description(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_admin_short_object_information')), array (  '_controller' => 'sonata.admin.controller.admin:getShortObjectDescriptionAction',  '_format' => 'html',));
                }

                // sonata_admin_set_object_field_value
                if ($pathinfo === '/admin/core/set-object-field-value') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:setObjectFieldValueAction',  '_route' => 'sonata_admin_set_object_field_value',);
                }

            }

            // sonata_admin_search
            if ($pathinfo === '/admin/search') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::searchAction',  '_route' => 'sonata_admin_search',);
            }

            // sonata_admin_retrieve_autocomplete_items
            if ($pathinfo === '/admin/core/get-autocomplete-items') {
                return array (  '_controller' => 'sonata.admin.controller.admin:retrieveAutocompleteItemsAction',  '_route' => 'sonata_admin_retrieve_autocomplete_items',);
            }

            if (0 === strpos($pathinfo, '/admin/app/corredoresriojadomain')) {
                if (0 === strpos($pathinfo, '/admin/app/corredoresriojadomain/c')) {
                    if (0 === strpos($pathinfo, '/admin/app/corredoresriojadomain/corredor')) {
                        // admin_app_corredoresriojadomain_corredor_list
                        if ($pathinfo === '/admin/app/corredoresriojadomain/corredor/list') {
                            return array (  '_controller' => 'App\\CorredoresRiojaBundle\\Controller\\CorredorAdminController::listAction',  '_sonata_admin' => 'app.corredoresriojabundle.admin.corredor',  '_sonata_name' => 'admin_app_corredoresriojadomain_corredor_list',  '_route' => 'admin_app_corredoresriojadomain_corredor_list',);
                        }

                        // admin_app_corredoresriojadomain_corredor_create
                        if ($pathinfo === '/admin/app/corredoresriojadomain/corredor/create') {
                            return array (  '_controller' => 'App\\CorredoresRiojaBundle\\Controller\\CorredorAdminController::createAction',  '_sonata_admin' => 'app.corredoresriojabundle.admin.corredor',  '_sonata_name' => 'admin_app_corredoresriojadomain_corredor_create',  '_route' => 'admin_app_corredoresriojadomain_corredor_create',);
                        }

                        // admin_app_corredoresriojadomain_corredor_batch
                        if ($pathinfo === '/admin/app/corredoresriojadomain/corredor/batch') {
                            return array (  '_controller' => 'App\\CorredoresRiojaBundle\\Controller\\CorredorAdminController::batchAction',  '_sonata_admin' => 'app.corredoresriojabundle.admin.corredor',  '_sonata_name' => 'admin_app_corredoresriojadomain_corredor_batch',  '_route' => 'admin_app_corredoresriojadomain_corredor_batch',);
                        }

                        // admin_app_corredoresriojadomain_corredor_edit
                        if (preg_match('#^/admin/app/corredoresriojadomain/corredor/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_corredoresriojadomain_corredor_edit')), array (  '_controller' => 'App\\CorredoresRiojaBundle\\Controller\\CorredorAdminController::editAction',  '_sonata_admin' => 'app.corredoresriojabundle.admin.corredor',  '_sonata_name' => 'admin_app_corredoresriojadomain_corredor_edit',));
                        }

                        // admin_app_corredoresriojadomain_corredor_delete
                        if (preg_match('#^/admin/app/corredoresriojadomain/corredor/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_corredoresriojadomain_corredor_delete')), array (  '_controller' => 'App\\CorredoresRiojaBundle\\Controller\\CorredorAdminController::deleteAction',  '_sonata_admin' => 'app.corredoresriojabundle.admin.corredor',  '_sonata_name' => 'admin_app_corredoresriojadomain_corredor_delete',));
                        }

                        // admin_app_corredoresriojadomain_corredor_show
                        if (preg_match('#^/admin/app/corredoresriojadomain/corredor/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_corredoresriojadomain_corredor_show')), array (  '_controller' => 'App\\CorredoresRiojaBundle\\Controller\\CorredorAdminController::showAction',  '_sonata_admin' => 'app.corredoresriojabundle.admin.corredor',  '_sonata_name' => 'admin_app_corredoresriojadomain_corredor_show',));
                        }

                        // admin_app_corredoresriojadomain_corredor_export
                        if ($pathinfo === '/admin/app/corredoresriojadomain/corredor/export') {
                            return array (  '_controller' => 'App\\CorredoresRiojaBundle\\Controller\\CorredorAdminController::exportAction',  '_sonata_admin' => 'app.corredoresriojabundle.admin.corredor',  '_sonata_name' => 'admin_app_corredoresriojadomain_corredor_export',  '_route' => 'admin_app_corredoresriojadomain_corredor_export',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/app/corredoresriojadomain/carrera')) {
                        // admin_app_corredoresriojadomain_carrera_list
                        if ($pathinfo === '/admin/app/corredoresriojadomain/carrera/list') {
                            return array (  '_controller' => 'App\\CorredoresRiojaBundle\\Controller\\CarreraAdminController::listAction',  '_sonata_admin' => 'app.corredoresriojabundle.admin.carrera',  '_sonata_name' => 'admin_app_corredoresriojadomain_carrera_list',  '_route' => 'admin_app_corredoresriojadomain_carrera_list',);
                        }

                        // admin_app_corredoresriojadomain_carrera_create
                        if ($pathinfo === '/admin/app/corredoresriojadomain/carrera/create') {
                            return array (  '_controller' => 'App\\CorredoresRiojaBundle\\Controller\\CarreraAdminController::createAction',  '_sonata_admin' => 'app.corredoresriojabundle.admin.carrera',  '_sonata_name' => 'admin_app_corredoresriojadomain_carrera_create',  '_route' => 'admin_app_corredoresriojadomain_carrera_create',);
                        }

                        // admin_app_corredoresriojadomain_carrera_batch
                        if ($pathinfo === '/admin/app/corredoresriojadomain/carrera/batch') {
                            return array (  '_controller' => 'App\\CorredoresRiojaBundle\\Controller\\CarreraAdminController::batchAction',  '_sonata_admin' => 'app.corredoresriojabundle.admin.carrera',  '_sonata_name' => 'admin_app_corredoresriojadomain_carrera_batch',  '_route' => 'admin_app_corredoresriojadomain_carrera_batch',);
                        }

                        // admin_app_corredoresriojadomain_carrera_edit
                        if (preg_match('#^/admin/app/corredoresriojadomain/carrera/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_corredoresriojadomain_carrera_edit')), array (  '_controller' => 'App\\CorredoresRiojaBundle\\Controller\\CarreraAdminController::editAction',  '_sonata_admin' => 'app.corredoresriojabundle.admin.carrera',  '_sonata_name' => 'admin_app_corredoresriojadomain_carrera_edit',));
                        }

                        // admin_app_corredoresriojadomain_carrera_delete
                        if (preg_match('#^/admin/app/corredoresriojadomain/carrera/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_corredoresriojadomain_carrera_delete')), array (  '_controller' => 'App\\CorredoresRiojaBundle\\Controller\\CarreraAdminController::deleteAction',  '_sonata_admin' => 'app.corredoresriojabundle.admin.carrera',  '_sonata_name' => 'admin_app_corredoresriojadomain_carrera_delete',));
                        }

                        // admin_app_corredoresriojadomain_carrera_show
                        if (preg_match('#^/admin/app/corredoresriojadomain/carrera/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_corredoresriojadomain_carrera_show')), array (  '_controller' => 'App\\CorredoresRiojaBundle\\Controller\\CarreraAdminController::showAction',  '_sonata_admin' => 'app.corredoresriojabundle.admin.carrera',  '_sonata_name' => 'admin_app_corredoresriojadomain_carrera_show',));
                        }

                        // admin_app_corredoresriojadomain_carrera_export
                        if ($pathinfo === '/admin/app/corredoresriojadomain/carrera/export') {
                            return array (  '_controller' => 'App\\CorredoresRiojaBundle\\Controller\\CarreraAdminController::exportAction',  '_sonata_admin' => 'app.corredoresriojabundle.admin.carrera',  '_sonata_name' => 'admin_app_corredoresriojadomain_carrera_export',  '_route' => 'admin_app_corredoresriojadomain_carrera_export',);
                        }

                    }

                }

                if (0 === strpos($pathinfo, '/admin/app/corredoresriojadomain/organizacion')) {
                    // admin_app_corredoresriojadomain_organizacion_list
                    if ($pathinfo === '/admin/app/corredoresriojadomain/organizacion/list') {
                        return array (  '_controller' => 'App\\CorredoresRiojaBundle\\Controller\\OrganizacionAdminController::listAction',  '_sonata_admin' => 'app.corredoresriojabundle.admin.organizacion',  '_sonata_name' => 'admin_app_corredoresriojadomain_organizacion_list',  '_route' => 'admin_app_corredoresriojadomain_organizacion_list',);
                    }

                    // admin_app_corredoresriojadomain_organizacion_create
                    if ($pathinfo === '/admin/app/corredoresriojadomain/organizacion/create') {
                        return array (  '_controller' => 'App\\CorredoresRiojaBundle\\Controller\\OrganizacionAdminController::createAction',  '_sonata_admin' => 'app.corredoresriojabundle.admin.organizacion',  '_sonata_name' => 'admin_app_corredoresriojadomain_organizacion_create',  '_route' => 'admin_app_corredoresriojadomain_organizacion_create',);
                    }

                    // admin_app_corredoresriojadomain_organizacion_batch
                    if ($pathinfo === '/admin/app/corredoresriojadomain/organizacion/batch') {
                        return array (  '_controller' => 'App\\CorredoresRiojaBundle\\Controller\\OrganizacionAdminController::batchAction',  '_sonata_admin' => 'app.corredoresriojabundle.admin.organizacion',  '_sonata_name' => 'admin_app_corredoresriojadomain_organizacion_batch',  '_route' => 'admin_app_corredoresriojadomain_organizacion_batch',);
                    }

                    // admin_app_corredoresriojadomain_organizacion_edit
                    if (preg_match('#^/admin/app/corredoresriojadomain/organizacion/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_corredoresriojadomain_organizacion_edit')), array (  '_controller' => 'App\\CorredoresRiojaBundle\\Controller\\OrganizacionAdminController::editAction',  '_sonata_admin' => 'app.corredoresriojabundle.admin.organizacion',  '_sonata_name' => 'admin_app_corredoresriojadomain_organizacion_edit',));
                    }

                    // admin_app_corredoresriojadomain_organizacion_delete
                    if (preg_match('#^/admin/app/corredoresriojadomain/organizacion/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_corredoresriojadomain_organizacion_delete')), array (  '_controller' => 'App\\CorredoresRiojaBundle\\Controller\\OrganizacionAdminController::deleteAction',  '_sonata_admin' => 'app.corredoresriojabundle.admin.organizacion',  '_sonata_name' => 'admin_app_corredoresriojadomain_organizacion_delete',));
                    }

                    // admin_app_corredoresriojadomain_organizacion_show
                    if (preg_match('#^/admin/app/corredoresriojadomain/organizacion/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_corredoresriojadomain_organizacion_show')), array (  '_controller' => 'App\\CorredoresRiojaBundle\\Controller\\OrganizacionAdminController::showAction',  '_sonata_admin' => 'app.corredoresriojabundle.admin.organizacion',  '_sonata_name' => 'admin_app_corredoresriojadomain_organizacion_show',));
                    }

                    // admin_app_corredoresriojadomain_organizacion_export
                    if ($pathinfo === '/admin/app/corredoresriojadomain/organizacion/export') {
                        return array (  '_controller' => 'App\\CorredoresRiojaBundle\\Controller\\OrganizacionAdminController::exportAction',  '_sonata_admin' => 'app.corredoresriojabundle.admin.organizacion',  '_sonata_name' => 'admin_app_corredoresriojadomain_organizacion_export',  '_route' => 'admin_app_corredoresriojadomain_organizacion_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/app/corredoresriojadomain/participante')) {
                    // admin_app_corredoresriojadomain_participante_list
                    if ($pathinfo === '/admin/app/corredoresriojadomain/participante/list') {
                        return array (  '_controller' => 'App\\CorredoresRiojaBundle\\Controller\\ParticipanteAdminController::listAction',  '_sonata_admin' => 'app.corredoresriojabundle.admin.participantes',  '_sonata_name' => 'admin_app_corredoresriojadomain_participante_list',  '_route' => 'admin_app_corredoresriojadomain_participante_list',);
                    }

                    // admin_app_corredoresriojadomain_participante_create
                    if ($pathinfo === '/admin/app/corredoresriojadomain/participante/create') {
                        return array (  '_controller' => 'App\\CorredoresRiojaBundle\\Controller\\ParticipanteAdminController::createAction',  '_sonata_admin' => 'app.corredoresriojabundle.admin.participantes',  '_sonata_name' => 'admin_app_corredoresriojadomain_participante_create',  '_route' => 'admin_app_corredoresriojadomain_participante_create',);
                    }

                    // admin_app_corredoresriojadomain_participante_batch
                    if ($pathinfo === '/admin/app/corredoresriojadomain/participante/batch') {
                        return array (  '_controller' => 'App\\CorredoresRiojaBundle\\Controller\\ParticipanteAdminController::batchAction',  '_sonata_admin' => 'app.corredoresriojabundle.admin.participantes',  '_sonata_name' => 'admin_app_corredoresriojadomain_participante_batch',  '_route' => 'admin_app_corredoresriojadomain_participante_batch',);
                    }

                    // admin_app_corredoresriojadomain_participante_edit
                    if (preg_match('#^/admin/app/corredoresriojadomain/participante/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_corredoresriojadomain_participante_edit')), array (  '_controller' => 'App\\CorredoresRiojaBundle\\Controller\\ParticipanteAdminController::editAction',  '_sonata_admin' => 'app.corredoresriojabundle.admin.participantes',  '_sonata_name' => 'admin_app_corredoresriojadomain_participante_edit',));
                    }

                    // admin_app_corredoresriojadomain_participante_delete
                    if (preg_match('#^/admin/app/corredoresriojadomain/participante/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_corredoresriojadomain_participante_delete')), array (  '_controller' => 'App\\CorredoresRiojaBundle\\Controller\\ParticipanteAdminController::deleteAction',  '_sonata_admin' => 'app.corredoresriojabundle.admin.participantes',  '_sonata_name' => 'admin_app_corredoresriojadomain_participante_delete',));
                    }

                    // admin_app_corredoresriojadomain_participante_show
                    if (preg_match('#^/admin/app/corredoresriojadomain/participante/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_corredoresriojadomain_participante_show')), array (  '_controller' => 'App\\CorredoresRiojaBundle\\Controller\\ParticipanteAdminController::showAction',  '_sonata_admin' => 'app.corredoresriojabundle.admin.participantes',  '_sonata_name' => 'admin_app_corredoresriojadomain_participante_show',));
                    }

                    // admin_app_corredoresriojadomain_participante_export
                    if ($pathinfo === '/admin/app/corredoresriojadomain/participante/export') {
                        return array (  '_controller' => 'App\\CorredoresRiojaBundle\\Controller\\ParticipanteAdminController::exportAction',  '_sonata_admin' => 'app.corredoresriojabundle.admin.participantes',  '_sonata_name' => 'admin_app_corredoresriojadomain_participante_export',  '_route' => 'admin_app_corredoresriojadomain_participante_export',);
                    }

                }

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
