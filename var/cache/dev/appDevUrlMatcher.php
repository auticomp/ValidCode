<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // validcode_index
        if (rtrim($pathinfo, '/') === '/api/index') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_validcode_index;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'validcode_index');
            }

            return array (  '_controller' => 'api\\ValidCodeBundle\\Controller\\DefaultController::indexAction',  '_route' => 'validcode_index',);
        }
        not_validcode_index:

        if (0 === strpos($pathinfo, '/importacaolote')) {
            // importacaolote_index
            if (rtrim($pathinfo, '/') === '/importacaolote') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_importacaolote_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'importacaolote_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\ArquivoLoteController::indexAction',  '_route' => 'importacaolote_index',);
            }
            not_importacaolote_index:

            // importacaolote_new
            if ($pathinfo === '/importacaolote/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_importacaolote_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\ArquivoLoteController::newAction',  '_route' => 'importacaolote_new',);
            }
            not_importacaolote_new:

            // importacaolote_show
            if (preg_match('#^/importacaolote/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_importacaolote_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'importacaolote_show')), array (  '_controller' => 'AppBundle\\Controller\\ArquivoLoteController::showAction',));
            }
            not_importacaolote_show:

            // importacaolote_edit
            if (preg_match('#^/importacaolote/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_importacaolote_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'importacaolote_edit')), array (  '_controller' => 'AppBundle\\Controller\\ArquivoLoteController::editAction',));
            }
            not_importacaolote_edit:

            // importacaolote_delete
            if (preg_match('#^/importacaolote/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_importacaolote_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'importacaolote_delete')), array (  '_controller' => 'AppBundle\\Controller\\ArquivoLoteController::deleteAction',));
            }
            not_importacaolote_delete:

        }

        // login
        if ($pathinfo === '/Login') {
            return array (  '_controller' => 'AppBundle\\Controller\\AuthController::LoginAction',  '_route' => 'login',);
        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/dispositivo')) {
            // dispositivo_index
            if (rtrim($pathinfo, '/') === '/dispositivo') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_dispositivo_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'dispositivo_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\DispositivoController::indexAction',  '_route' => 'dispositivo_index',);
            }
            not_dispositivo_index:

            // dispositivo_new
            if ($pathinfo === '/dispositivo/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_dispositivo_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\DispositivoController::newAction',  '_route' => 'dispositivo_new',);
            }
            not_dispositivo_new:

            // dispositivo_show
            if (preg_match('#^/dispositivo/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_dispositivo_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'dispositivo_show')), array (  '_controller' => 'AppBundle\\Controller\\DispositivoController::showAction',));
            }
            not_dispositivo_show:

            // dispositivo_edit
            if (preg_match('#^/dispositivo/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_dispositivo_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'dispositivo_edit')), array (  '_controller' => 'AppBundle\\Controller\\DispositivoController::editAction',));
            }
            not_dispositivo_edit:

            // dispositivo_delete
            if (preg_match('#^/dispositivo/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_dispositivo_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'dispositivo_delete')), array (  '_controller' => 'AppBundle\\Controller\\DispositivoController::deleteAction',));
            }
            not_dispositivo_delete:

        }

        if (0 === strpos($pathinfo, '/empresa')) {
            // empresa_index
            if (rtrim($pathinfo, '/') === '/empresa') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_empresa_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'empresa_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\EmpresaController::indexAction',  '_route' => 'empresa_index',);
            }
            not_empresa_index:

            // empresa_new
            if ($pathinfo === '/empresa/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_empresa_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\EmpresaController::newAction',  '_route' => 'empresa_new',);
            }
            not_empresa_new:

            // empresa_show
            if (preg_match('#^/empresa/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_empresa_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'empresa_show')), array (  '_controller' => 'AppBundle\\Controller\\EmpresaController::showAction',));
            }
            not_empresa_show:

            // empresa_edit
            if (preg_match('#^/empresa/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_empresa_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'empresa_edit')), array (  '_controller' => 'AppBundle\\Controller\\EmpresaController::editAction',));
            }
            not_empresa_edit:

            // empresa_delete
            if (preg_match('#^/empresa/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_empresa_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'empresa_delete')), array (  '_controller' => 'AppBundle\\Controller\\EmpresaController::deleteAction',));
            }
            not_empresa_delete:

        }

        if (0 === strpos($pathinfo, '/itenslote')) {
            // itenslote_index
            if (rtrim($pathinfo, '/') === '/itenslote') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_itenslote_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'itenslote_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\ItensLoteController::indexAction',  '_route' => 'itenslote_index',);
            }
            not_itenslote_index:

            // itenslote_new
            if ($pathinfo === '/itenslote/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_itenslote_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\ItensLoteController::newAction',  '_route' => 'itenslote_new',);
            }
            not_itenslote_new:

            // itenslote_show
            if (preg_match('#^/itenslote/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_itenslote_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'itenslote_show')), array (  '_controller' => 'AppBundle\\Controller\\ItensLoteController::showAction',));
            }
            not_itenslote_show:

            // itenslote_edit
            if (preg_match('#^/itenslote/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_itenslote_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'itenslote_edit')), array (  '_controller' => 'AppBundle\\Controller\\ItensLoteController::editAction',));
            }
            not_itenslote_edit:

            // itenslote_delete
            if (preg_match('#^/itenslote/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_itenslote_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'itenslote_delete')), array (  '_controller' => 'AppBundle\\Controller\\ItensLoteController::deleteAction',));
            }
            not_itenslote_delete:

        }

        if (0 === strpos($pathinfo, '/l')) {
            if (0 === strpos($pathinfo, '/licenca')) {
                // licenca_index
                if (rtrim($pathinfo, '/') === '/licenca') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_licenca_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'licenca_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\LicencaUsoController::indexAction',  '_route' => 'licenca_index',);
                }
                not_licenca_index:

                // licenca_new
                if ($pathinfo === '/licenca/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_licenca_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\LicencaUsoController::newAction',  '_route' => 'licenca_new',);
                }
                not_licenca_new:

                // licenca_show
                if (preg_match('#^/licenca/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_licenca_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'licenca_show')), array (  '_controller' => 'AppBundle\\Controller\\LicencaUsoController::showAction',));
                }
                not_licenca_show:

                // licenca_edit
                if (preg_match('#^/licenca/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_licenca_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'licenca_edit')), array (  '_controller' => 'AppBundle\\Controller\\LicencaUsoController::editAction',));
                }
                not_licenca_edit:

                // licenca_delete
                if (preg_match('#^/licenca/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_licenca_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'licenca_delete')), array (  '_controller' => 'AppBundle\\Controller\\LicencaUsoController::deleteAction',));
                }
                not_licenca_delete:

            }

            if (0 === strpos($pathinfo, '/lote')) {
                // lote_index
                if (rtrim($pathinfo, '/') === '/lote') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_lote_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'lote_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\LoteController::indexAction',  '_route' => 'lote_index',);
                }
                not_lote_index:

                // lote_new
                if ($pathinfo === '/lote/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_lote_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\LoteController::newAction',  '_route' => 'lote_new',);
                }
                not_lote_new:

                // lote_show
                if (preg_match('#^/lote/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_lote_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'lote_show')), array (  '_controller' => 'AppBundle\\Controller\\LoteController::showAction',));
                }
                not_lote_show:

                // lote_edit
                if (preg_match('#^/lote/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_lote_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'lote_edit')), array (  '_controller' => 'AppBundle\\Controller\\LoteController::editAction',));
                }
                not_lote_edit:

                // lote_delete
                if (preg_match('#^/lote/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_lote_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'lote_delete')), array (  '_controller' => 'AppBundle\\Controller\\LoteController::deleteAction',));
                }
                not_lote_delete:

            }

        }

        if (0 === strpos($pathinfo, '/perfil')) {
            if (0 === strpos($pathinfo, '/perfilempresa')) {
                // perfilempresa_index
                if (rtrim($pathinfo, '/') === '/perfilempresa') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_perfilempresa_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'perfilempresa_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\PerfilEmpresaController::indexAction',  '_route' => 'perfilempresa_index',);
                }
                not_perfilempresa_index:

                // perfilempresa_new
                if ($pathinfo === '/perfilempresa/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_perfilempresa_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\PerfilEmpresaController::newAction',  '_route' => 'perfilempresa_new',);
                }
                not_perfilempresa_new:

                // perfilempresa_show
                if (preg_match('#^/perfilempresa/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_perfilempresa_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'perfilempresa_show')), array (  '_controller' => 'AppBundle\\Controller\\PerfilEmpresaController::showAction',));
                }
                not_perfilempresa_show:

                // perfilempresa_edit
                if (preg_match('#^/perfilempresa/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_perfilempresa_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'perfilempresa_edit')), array (  '_controller' => 'AppBundle\\Controller\\PerfilEmpresaController::editAction',));
                }
                not_perfilempresa_edit:

                // perfilempresa_delete
                if (preg_match('#^/perfilempresa/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_perfilempresa_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'perfilempresa_delete')), array (  '_controller' => 'AppBundle\\Controller\\PerfilEmpresaController::deleteAction',));
                }
                not_perfilempresa_delete:

            }

            if (0 === strpos($pathinfo, '/perfilusuario')) {
                // perfilusuario_index
                if (rtrim($pathinfo, '/') === '/perfilusuario') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_perfilusuario_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'perfilusuario_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\PerfilUsuarioController::indexAction',  '_route' => 'perfilusuario_index',);
                }
                not_perfilusuario_index:

                // perfilusuario_new
                if ($pathinfo === '/perfilusuario/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_perfilusuario_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\PerfilUsuarioController::newAction',  '_route' => 'perfilusuario_new',);
                }
                not_perfilusuario_new:

                // perfilusuario_show
                if (preg_match('#^/perfilusuario/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_perfilusuario_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'perfilusuario_show')), array (  '_controller' => 'AppBundle\\Controller\\PerfilUsuarioController::showAction',));
                }
                not_perfilusuario_show:

                // perfilusuario_edit
                if (preg_match('#^/perfilusuario/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_perfilusuario_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'perfilusuario_edit')), array (  '_controller' => 'AppBundle\\Controller\\PerfilUsuarioController::editAction',));
                }
                not_perfilusuario_edit:

                // perfilusuario_delete
                if (preg_match('#^/perfilusuario/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_perfilusuario_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'perfilusuario_delete')), array (  '_controller' => 'AppBundle\\Controller\\PerfilUsuarioController::deleteAction',));
                }
                not_perfilusuario_delete:

            }

        }

        // auth_login
        if ($pathinfo === '/Login') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_auth_login;
            }

            return array (  '_controller' => 'AppBundle\\Controller\\AuthController::loginAction',  '_route' => 'auth_login',);
        }
        not_auth_login:

        if (0 === strpos($pathinfo, '/usuarios')) {
            // usuarios_index
            if (rtrim($pathinfo, '/') === '/usuarios') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_usuarios_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'usuarios_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\UsuariosController::indexAction',  '_route' => 'usuarios_index',);
            }
            not_usuarios_index:

            // usuarios_show
            if (preg_match('#^/usuarios/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_usuarios_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuarios_show')), array (  '_controller' => 'AppBundle\\Controller\\UsuariosController::showAction',));
            }
            not_usuarios_show:

            // usuarios_new
            if ($pathinfo === '/usuarios/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_usuarios_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\UsuariosController::newAction',  '_route' => 'usuarios_new',);
            }
            not_usuarios_new:

            // usuarios_edit
            if (preg_match('#^/usuarios/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'PUT', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'PUT', 'HEAD'));
                    goto not_usuarios_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuarios_edit')), array (  '_controller' => 'AppBundle\\Controller\\UsuariosController::editAction',));
            }
            not_usuarios_edit:

            // usuarios_delete
            if (preg_match('#^/usuarios/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_usuarios_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuarios_delete')), array (  '_controller' => 'AppBundle\\Controller\\UsuariosController::deleteAction',));
            }
            not_usuarios_delete:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
