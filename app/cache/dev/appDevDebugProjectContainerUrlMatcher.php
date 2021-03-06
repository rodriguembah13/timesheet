<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === rtrim($pathinfo, '/')) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not__profiler_home;
                    } else {
                        return $this->redirect($rawPathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }
                not__profiler_home:

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ('/_profiler/purge' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/d')) {
            if (0 === strpos($pathinfo, '/departement')) {
                // departement_index
                if ('/departement' === rtrim($pathinfo, '/')) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not_departement_index;
                    } else {
                        return $this->redirect($rawPathinfo.'/', 'departement_index');
                    }

                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_departement_index;
                    }

                    return array (  '_controller' => 'Ballack\\TimeSheetBundle\\Controller\\DepartementController::indexAction',  '_route' => 'departement_index',);
                }
                not_departement_index:

                // departement_show
                if (preg_match('#^/departement/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_departement_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'departement_show')), array (  '_controller' => 'Ballack\\TimeSheetBundle\\Controller\\DepartementController::showAction',));
                }
                not_departement_show:

                // departement_new
                if ('/departement/new' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_departement_new;
                    }

                    return array (  '_controller' => 'Ballack\\TimeSheetBundle\\Controller\\DepartementController::newAction',  '_route' => 'departement_new',);
                }
                not_departement_new:

                // departement_edit
                if (preg_match('#^/departement/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_departement_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'departement_edit')), array (  '_controller' => 'Ballack\\TimeSheetBundle\\Controller\\DepartementController::editAction',));
                }
                not_departement_edit:

                // departement_delete
                if (preg_match('#^/departement/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_departement_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'departement_delete')), array (  '_controller' => 'Ballack\\TimeSheetBundle\\Controller\\DepartementController::deleteAction',));
                }
                not_departement_delete:

            }

            if (0 === strpos($pathinfo, '/dayferiee')) {
                // dayferiee_index
                if ('/dayferiee' === rtrim($pathinfo, '/')) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not_dayferiee_index;
                    } else {
                        return $this->redirect($rawPathinfo.'/', 'dayferiee_index');
                    }

                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_dayferiee_index;
                    }

                    return array (  '_controller' => 'Ballack\\TimeSheetBundle\\Controller\\DayFerieeController::indexAction',  '_route' => 'dayferiee_index',);
                }
                not_dayferiee_index:

                // dayferiee_show
                if (preg_match('#^/dayferiee/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_dayferiee_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'dayferiee_show')), array (  '_controller' => 'Ballack\\TimeSheetBundle\\Controller\\DayFerieeController::showAction',));
                }
                not_dayferiee_show:

                // dayferiee_new
                if ('/dayferiee/new' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_dayferiee_new;
                    }

                    return array (  '_controller' => 'Ballack\\TimeSheetBundle\\Controller\\DayFerieeController::newAction',  '_route' => 'dayferiee_new',);
                }
                not_dayferiee_new:

                // dayferiee_edit
                if (preg_match('#^/dayferiee/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_dayferiee_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'dayferiee_edit')), array (  '_controller' => 'Ballack\\TimeSheetBundle\\Controller\\DayFerieeController::editAction',));
                }
                not_dayferiee_edit:

                // dayferiee_delete
                if (preg_match('#^/dayferiee/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_dayferiee_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'dayferiee_delete')), array (  '_controller' => 'Ballack\\TimeSheetBundle\\Controller\\DayFerieeController::deleteAction',));
                }
                not_dayferiee_delete:

            }

        }

        if (0 === strpos($pathinfo, '/activite')) {
            // activite_index
            if ('/activite' === rtrim($pathinfo, '/')) {
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                    goto not_activite_index;
                } else {
                    return $this->redirect($rawPathinfo.'/', 'activite_index');
                }

                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_activite_index;
                }

                return array (  '_controller' => 'Ballack\\TimeSheetBundle\\Controller\\ActiviteController::indexAction',  '_route' => 'activite_index',);
            }
            not_activite_index:

            // activite_index_by_departement
            if ('/activite/departement' === $pathinfo) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_activite_index_by_departement;
                }

                return array (  '_controller' => 'Ballack\\TimeSheetBundle\\Controller\\ActiviteController::getActiviteByDepartementAction',  '_route' => 'activite_index_by_departement',);
            }
            not_activite_index_by_departement:

            // activite_show
            if (preg_match('#^/activite/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_activite_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'activite_show')), array (  '_controller' => 'Ballack\\TimeSheetBundle\\Controller\\ActiviteController::showAction',));
            }
            not_activite_show:

            // activite_new
            if ('/activite/new' === $pathinfo) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_activite_new;
                }

                return array (  '_controller' => 'Ballack\\TimeSheetBundle\\Controller\\ActiviteController::newAction',  '_route' => 'activite_new',);
            }
            not_activite_new:

            // activite_edit
            if (preg_match('#^/activite/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_activite_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'activite_edit')), array (  '_controller' => 'Ballack\\TimeSheetBundle\\Controller\\ActiviteController::editAction',));
            }
            not_activite_edit:

            // activite_delete
            if (preg_match('#^/activite/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_activite_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'activite_delete')), array (  '_controller' => 'Ballack\\TimeSheetBundle\\Controller\\ActiviteController::deleteAction',));
            }
            not_activite_delete:

            // activite_my
            if (preg_match('#^/activite/(?P<id>[^/]++)/mesActivites$#sD', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_activite_my;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'activite_my')), array (  '_controller' => 'Ballack\\TimeSheetBundle\\Controller\\ActiviteController::mesActiviteAction',));
            }
            not_activite_my:

            // activite_my_detail
            if (preg_match('#^/activite/(?P<id>[^/]++)/cat$#sD', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_activite_my_detail;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'activite_my_detail')), array (  '_controller' => 'Ballack\\TimeSheetBundle\\Controller\\ActiviteController::myDetailActiviteAction',));
            }
            not_activite_my_detail:

        }

        if (0 === strpos($pathinfo, '/employe')) {
            // employe_index
            if ('/employe' === rtrim($pathinfo, '/')) {
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                    goto not_employe_index;
                } else {
                    return $this->redirect($rawPathinfo.'/', 'employe_index');
                }

                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_employe_index;
                }

                return array (  '_controller' => 'Ballack\\TimeSheetBundle\\Controller\\EmployeController::indexAction',  '_route' => 'employe_index',);
            }
            not_employe_index:

            // employe_show
            if (preg_match('#^/employe/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_employe_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'employe_show')), array (  '_controller' => 'Ballack\\TimeSheetBundle\\Controller\\EmployeController::showAction',));
            }
            not_employe_show:

            // employe_new
            if ('/employe/new' === $pathinfo) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_employe_new;
                }

                return array (  '_controller' => 'Ballack\\TimeSheetBundle\\Controller\\EmployeController::newAction',  '_route' => 'employe_new',);
            }
            not_employe_new:

            // employe_edit
            if (preg_match('#^/employe/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_employe_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'employe_edit')), array (  '_controller' => 'Ballack\\TimeSheetBundle\\Controller\\EmployeController::editAction',));
            }
            not_employe_edit:

            // employe_upload
            if (preg_match('#^/employe/(?P<id>[^/]++)/upload$#sD', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_employe_upload;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'employe_upload')), array (  '_controller' => 'Ballack\\TimeSheetBundle\\Controller\\EmployeController::uploadAction',));
            }
            not_employe_upload:

            // employe_addImage
            if (preg_match('#^/employe/(?P<id>[^/]++)/image$#sD', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_employe_addImage;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'employe_addImage')), array (  '_controller' => 'Ballack\\TimeSheetBundle\\Controller\\EmployeController::addImageAction',));
            }
            not_employe_addImage:

            // employe_delete
            if (preg_match('#^/employe/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_employe_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'employe_delete')), array (  '_controller' => 'Ballack\\TimeSheetBundle\\Controller\\EmployeController::deleteAction',));
            }
            not_employe_delete:

            // employe_search
            if ('/employe/search' === $pathinfo) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_employe_search;
                }

                return array (  '_controller' => 'Ballack\\TimeSheetBundle\\Controller\\EmployeController::searchAction',  '_route' => 'employe_search',);
            }
            not_employe_search:

            // employe_role
            if (preg_match('#^/employe/(?P<id>[^/]++)/role$#sD', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_employe_role;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'employe_role')), array (  '_controller' => 'Ballack\\TimeSheetBundle\\Controller\\EmployeController::roleAction',));
            }
            not_employe_role:

            // employe_deleteRole
            if (preg_match('#^/employe/(?P<id>[^/]++)/(?P<role>[^/]++)/?$#sD', $pathinfo, $matches)) {
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                    goto not_employe_deleteRole;
                } else {
                    return $this->redirect($rawPathinfo.'/', 'employe_deleteRole');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'employe_deleteRole')), array (  '_controller' => 'Ballack\\TimeSheetBundle\\Controller\\EmployeController::deleteRoleAction',));
            }
            not_employe_deleteRole:

            // employe_addRole
            if (preg_match('#^/employe/(?P<id>[^/]++)/(?P<role>[^/]++)/add$#sD', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_employe_addRole;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'employe_addRole')), array (  '_controller' => 'Ballack\\TimeSheetBundle\\Controller\\EmployeController::addRoleAction',));
            }
            not_employe_addRole:

            // employe_profil
            if ('/employe/profil' === $pathinfo) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_employe_profil;
                }

                return array (  '_controller' => 'Ballack\\TimeSheetBundle\\Controller\\EmployeController::profilAction',  '_route' => 'employe_profil',);
            }
            not_employe_profil:

        }

        if (0 === strpos($pathinfo, '/projet')) {
            // projet_index
            if ('/projet' === rtrim($pathinfo, '/')) {
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                    goto not_projet_index;
                } else {
                    return $this->redirect($rawPathinfo.'/', 'projet_index');
                }

                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_projet_index;
                }

                return array (  '_controller' => 'Ballack\\TimeSheetBundle\\Controller\\ProjetController::indexAction',  '_route' => 'projet_index',);
            }
            not_projet_index:

            // projet_show
            if (preg_match('#^/projet/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_projet_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'projet_show')), array (  '_controller' => 'Ballack\\TimeSheetBundle\\Controller\\ProjetController::showAction',));
            }
            not_projet_show:

            // projet_new
            if ('/projet/new' === $pathinfo) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_projet_new;
                }

                return array (  '_controller' => 'Ballack\\TimeSheetBundle\\Controller\\ProjetController::newAction',  '_route' => 'projet_new',);
            }
            not_projet_new:

            // projet_edit
            if (preg_match('#^/projet/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_projet_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'projet_edit')), array (  '_controller' => 'Ballack\\TimeSheetBundle\\Controller\\ProjetController::editAction',));
            }
            not_projet_edit:

            // projet_delete
            if (preg_match('#^/projet/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_projet_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'projet_delete')), array (  '_controller' => 'Ballack\\TimeSheetBundle\\Controller\\ProjetController::deleteAction',));
            }
            not_projet_delete:

            // projet_addEmp
            if (preg_match('#^/projet/(?P<idE>[^/]++)/(?P<idP>[^/]++)/add$#sD', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_projet_addEmp;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'projet_addEmp')), array (  '_controller' => 'Ballack\\TimeSheetBundle\\Controller\\ProjetController::addEmpToProjetAction',));
            }
            not_projet_addEmp:

            // projet_affection
            if (preg_match('#^/projet/(?P<id>[^/]++)/affection$#sD', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_projet_affection;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'projet_affection')), array (  '_controller' => 'Ballack\\TimeSheetBundle\\Controller\\ProjetController::affectationAction',));
            }
            not_projet_affection:

            // projet_my
            if ('/projet/mesProjets' === $pathinfo) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_projet_my;
                }

                return array (  '_controller' => 'Ballack\\TimeSheetBundle\\Controller\\ProjetController::mesProjetAction',  '_route' => 'projet_my',);
            }
            not_projet_my:

        }

        if (0 === strpos($pathinfo, '/absence')) {
            // absence_index
            if ('/absence' === rtrim($pathinfo, '/')) {
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                    goto not_absence_index;
                } else {
                    return $this->redirect($rawPathinfo.'/', 'absence_index');
                }

                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_absence_index;
                }

                return array (  '_controller' => 'Ballack\\TimeSheetBundle\\Controller\\AbsenceController::indexAction',  '_route' => 'absence_index',);
            }
            not_absence_index:

            // absence_show
            if (preg_match('#^/absence/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_absence_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'absence_show')), array (  '_controller' => 'Ballack\\TimeSheetBundle\\Controller\\AbsenceController::showAction',));
            }
            not_absence_show:

            // absence_new
            if ('/absence/new' === $pathinfo) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_absence_new;
                }

                return array (  '_controller' => 'Ballack\\TimeSheetBundle\\Controller\\AbsenceController::newAction',  '_route' => 'absence_new',);
            }
            not_absence_new:

            // absence_edit
            if (preg_match('#^/absence/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_absence_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'absence_edit')), array (  '_controller' => 'Ballack\\TimeSheetBundle\\Controller\\AbsenceController::editAction',));
            }
            not_absence_edit:

            // absence_delete
            if (preg_match('#^/absence/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_absence_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'absence_delete')), array (  '_controller' => 'Ballack\\TimeSheetBundle\\Controller\\AbsenceController::deleteAction',));
            }
            not_absence_delete:

            // absence_my
            if ('/absence/myAbsence' === $pathinfo) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_absence_my;
                }

                return array (  '_controller' => 'Ballack\\TimeSheetBundle\\Controller\\AbsenceController::myAbsenceAction',  '_route' => 'absence_my',);
            }
            not_absence_my:

            if (0 === strpos($pathinfo, '/absence/validation')) {
                // validation
                if ('/absence/validation' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_validation;
                    }

                    return array (  '_controller' => 'Ballack\\TimeSheetBundle\\Controller\\AbsenceController::validationAction',  '_route' => 'validation',);
                }
                not_validation:

                // validation_final
                if ('/absence/validation_final' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_validation_final;
                    }

                    return array (  '_controller' => 'Ballack\\TimeSheetBundle\\Controller\\AbsenceController::validation_finalAction',  '_route' => 'validation_final',);
                }
                not_validation_final:

            }

            // validation_ok
            if (preg_match('#^/absence/(?P<id>[^/]++)/ok$#sD', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_validation_ok;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'validation_ok')), array (  '_controller' => 'Ballack\\TimeSheetBundle\\Controller\\AbsenceController::validation_okAction',));
            }
            not_validation_ok:

            // validation_non_ok
            if (preg_match('#^/absence/(?P<id>[^/]++)/nonok$#sD', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_validation_non_ok;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'validation_non_ok')), array (  '_controller' => 'Ballack\\TimeSheetBundle\\Controller\\AbsenceController::validation_non_okAction',));
            }
            not_validation_non_ok:

            // validation_attente
            if (preg_match('#^/absence/(?P<id>[^/]++)/attente$#sD', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_validation_attente;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'validation_attente')), array (  '_controller' => 'Ballack\\TimeSheetBundle\\Controller\\AbsenceController::validation_attenteAction',));
            }
            not_validation_attente:

            // validation_ok_final
            if (preg_match('#^/absence/(?P<id>[^/]++)/ok_final$#sD', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_validation_ok_final;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'validation_ok_final')), array (  '_controller' => 'Ballack\\TimeSheetBundle\\Controller\\AbsenceController::validation_final_okAction',));
            }
            not_validation_ok_final:

            // validation_attente_final
            if (preg_match('#^/absence/(?P<id>[^/]++)/attente_final$#sD', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_validation_attente_final;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'validation_attente_final')), array (  '_controller' => 'Ballack\\TimeSheetBundle\\Controller\\AbsenceController::validation_final_AttenteAction',));
            }
            not_validation_attente_final:

            // validation_nonOk_final
            if (preg_match('#^/absence/(?P<id>[^/]++)/nok_final$#sD', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_validation_nonOk_final;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'validation_nonOk_final')), array (  '_controller' => 'Ballack\\TimeSheetBundle\\Controller\\AbsenceController::validation_final_NonokAction',));
            }
            not_validation_nonOk_final:

        }

        if (0 === strpos($pathinfo, '/typeabsence')) {
            // typeabsence_index
            if ('/typeabsence' === rtrim($pathinfo, '/')) {
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                    goto not_typeabsence_index;
                } else {
                    return $this->redirect($rawPathinfo.'/', 'typeabsence_index');
                }

                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_typeabsence_index;
                }

                return array (  '_controller' => 'Ballack\\TimeSheetBundle\\Controller\\TypeAbsenceController::indexAction',  '_route' => 'typeabsence_index',);
            }
            not_typeabsence_index:

            // typeabsence_show
            if (preg_match('#^/typeabsence/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_typeabsence_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'typeabsence_show')), array (  '_controller' => 'Ballack\\TimeSheetBundle\\Controller\\TypeAbsenceController::showAction',));
            }
            not_typeabsence_show:

            // typeabsence_new
            if ('/typeabsence/new' === $pathinfo) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_typeabsence_new;
                }

                return array (  '_controller' => 'Ballack\\TimeSheetBundle\\Controller\\TypeAbsenceController::newAction',  '_route' => 'typeabsence_new',);
            }
            not_typeabsence_new:

            // typeabsence_edit
            if (preg_match('#^/typeabsence/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_typeabsence_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'typeabsence_edit')), array (  '_controller' => 'Ballack\\TimeSheetBundle\\Controller\\TypeAbsenceController::editAction',));
            }
            not_typeabsence_edit:

            // typeabsence_delete
            if (preg_match('#^/typeabsence/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_typeabsence_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'typeabsence_delete')), array (  '_controller' => 'Ballack\\TimeSheetBundle\\Controller\\TypeAbsenceController::deleteAction',));
            }
            not_typeabsence_delete:

        }

        if (0 === strpos($pathinfo, '/c')) {
            if (0 === strpos($pathinfo, '/client')) {
                // client_index
                if ('/client' === rtrim($pathinfo, '/')) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not_client_index;
                    } else {
                        return $this->redirect($rawPathinfo.'/', 'client_index');
                    }

                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_client_index;
                    }

                    return array (  '_controller' => 'Ballack\\TimeSheetBundle\\Controller\\ClientController::indexAction',  '_route' => 'client_index',);
                }
                not_client_index:

                // client_show
                if (preg_match('#^/client/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_client_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'client_show')), array (  '_controller' => 'Ballack\\TimeSheetBundle\\Controller\\ClientController::showAction',));
                }
                not_client_show:

                // client_new
                if ('/client/new' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_client_new;
                    }

                    return array (  '_controller' => 'Ballack\\TimeSheetBundle\\Controller\\ClientController::newAction',  '_route' => 'client_new',);
                }
                not_client_new:

                // client_edit
                if (preg_match('#^/client/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_client_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'client_edit')), array (  '_controller' => 'Ballack\\TimeSheetBundle\\Controller\\ClientController::editAction',));
                }
                not_client_edit:

                // client_delete
                if (preg_match('#^/client/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_client_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'client_delete')), array (  '_controller' => 'Ballack\\TimeSheetBundle\\Controller\\ClientController::deleteAction',));
                }
                not_client_delete:

            }

            if (0 === strpos($pathinfo, '/contrat')) {
                // contrat_index
                if ('/contrat' === rtrim($pathinfo, '/')) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not_contrat_index;
                    } else {
                        return $this->redirect($rawPathinfo.'/', 'contrat_index');
                    }

                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_contrat_index;
                    }

                    return array (  '_controller' => 'Ballack\\TimeSheetBundle\\Controller\\ContratController::indexAction',  '_route' => 'contrat_index',);
                }
                not_contrat_index:

                // contrat_show
                if (preg_match('#^/contrat/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_contrat_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'contrat_show')), array (  '_controller' => 'Ballack\\TimeSheetBundle\\Controller\\ContratController::showAction',));
                }
                not_contrat_show:

                // contrat_new
                if ('/contrat/new' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_contrat_new;
                    }

                    return array (  '_controller' => 'Ballack\\TimeSheetBundle\\Controller\\ContratController::newAction',  '_route' => 'contrat_new',);
                }
                not_contrat_new:

                // contrat_edit
                if (preg_match('#^/contrat/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_contrat_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'contrat_edit')), array (  '_controller' => 'Ballack\\TimeSheetBundle\\Controller\\ContratController::editAction',));
                }
                not_contrat_edit:

                // contrat_delete
                if (preg_match('#^/contrat/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_contrat_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'contrat_delete')), array (  '_controller' => 'Ballack\\TimeSheetBundle\\Controller\\ContratController::deleteAction',));
                }
                not_contrat_delete:

            }

        }

        if (0 === strpos($pathinfo, '/typecontrat')) {
            // typecontrat_index
            if ('/typecontrat' === rtrim($pathinfo, '/')) {
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                    goto not_typecontrat_index;
                } else {
                    return $this->redirect($rawPathinfo.'/', 'typecontrat_index');
                }

                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_typecontrat_index;
                }

                return array (  '_controller' => 'Ballack\\TimeSheetBundle\\Controller\\TypeContratController::indexAction',  '_route' => 'typecontrat_index',);
            }
            not_typecontrat_index:

            // typecontrat_show
            if (preg_match('#^/typecontrat/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_typecontrat_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'typecontrat_show')), array (  '_controller' => 'Ballack\\TimeSheetBundle\\Controller\\TypeContratController::showAction',));
            }
            not_typecontrat_show:

            // typecontrat_new
            if ('/typecontrat/new' === $pathinfo) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_typecontrat_new;
                }

                return array (  '_controller' => 'Ballack\\TimeSheetBundle\\Controller\\TypeContratController::newAction',  '_route' => 'typecontrat_new',);
            }
            not_typecontrat_new:

            // typecontrat_edit
            if (preg_match('#^/typecontrat/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_typecontrat_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'typecontrat_edit')), array (  '_controller' => 'Ballack\\TimeSheetBundle\\Controller\\TypeContratController::editAction',));
            }
            not_typecontrat_edit:

            // typecontrat_delete
            if (preg_match('#^/typecontrat/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_typecontrat_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'typecontrat_delete')), array (  '_controller' => 'Ballack\\TimeSheetBundle\\Controller\\TypeContratController::deleteAction',));
            }
            not_typecontrat_delete:

        }

        if (0 === strpos($pathinfo, '/overtime')) {
            // overtime_index
            if ('/overtime' === rtrim($pathinfo, '/')) {
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                    goto not_overtime_index;
                } else {
                    return $this->redirect($rawPathinfo.'/', 'overtime_index');
                }

                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_overtime_index;
                }

                return array (  '_controller' => 'Ballack\\TimeSheetBundle\\Controller\\OverTimeController::indexAction',  '_route' => 'overtime_index',);
            }
            not_overtime_index:

            // overtime_show
            if (preg_match('#^/overtime/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_overtime_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'overtime_show')), array (  '_controller' => 'Ballack\\TimeSheetBundle\\Controller\\OverTimeController::showAction',));
            }
            not_overtime_show:

            // overtime_new
            if ('/overtime/new' === $pathinfo) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_overtime_new;
                }

                return array (  '_controller' => 'Ballack\\TimeSheetBundle\\Controller\\OverTimeController::newAction',  '_route' => 'overtime_new',);
            }
            not_overtime_new:

            // overtime_edit
            if (preg_match('#^/overtime/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_overtime_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'overtime_edit')), array (  '_controller' => 'Ballack\\TimeSheetBundle\\Controller\\OverTimeController::editAction',));
            }
            not_overtime_edit:

            // overtime_delete
            if (preg_match('#^/overtime/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_overtime_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'overtime_delete')), array (  '_controller' => 'Ballack\\TimeSheetBundle\\Controller\\OverTimeController::deleteAction',));
            }
            not_overtime_delete:

            // overtime_my
            if ('/overtime/mesovertime' === $pathinfo) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_overtime_my;
                }

                return array (  '_controller' => 'Ballack\\TimeSheetBundle\\Controller\\OverTimeController::mesOvertimeAction',  '_route' => 'overtime_my',);
            }
            not_overtime_my:

            // overtime_validation
            if ('/overtime/validation' === $pathinfo) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_overtime_validation;
                }

                return array (  '_controller' => 'Ballack\\TimeSheetBundle\\Controller\\OverTimeController::validation_overtimeAction',  '_route' => 'overtime_validation',);
            }
            not_overtime_validation:

            // overtime_ok
            if (preg_match('#^/overtime/(?P<id>[^/]++)/ok$#sD', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_overtime_ok;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'overtime_ok')), array (  '_controller' => 'Ballack\\TimeSheetBundle\\Controller\\OverTimeController::validation_OkAction',));
            }
            not_overtime_ok:

            // overtime_nonOk
            if (preg_match('#^/overtime/(?P<id>[^/]++)/nonOk$#sD', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_overtime_nonOk;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'overtime_nonOk')), array (  '_controller' => 'Ballack\\TimeSheetBundle\\Controller\\OverTimeController::validation_NonOkAction',));
            }
            not_overtime_nonOk:

            // overtime_attente
            if (preg_match('#^/overtime/(?P<id>[^/]++)/attente$#sD', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_overtime_attente;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'overtime_attente')), array (  '_controller' => 'Ballack\\TimeSheetBundle\\Controller\\OverTimeController::validation_AttenteAction',));
            }
            not_overtime_attente:

        }

        // ballack_time_sheet_homepage
        if ('' === rtrim($pathinfo, '/')) {
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                goto not_ballack_time_sheet_homepage;
            } else {
                return $this->redirect($rawPathinfo.'/', 'ballack_time_sheet_homepage');
            }

            return array (  '_controller' => 'Ballack\\TimeSheetBundle\\Controller\\DefaultController::indexAction',  '_route' => 'ballack_time_sheet_homepage',);
        }
        not_ballack_time_sheet_homepage:

        if (0 === strpos($pathinfo, '/calendar')) {
            // ballack_time_sheet_calendar
            if ('/calendar' === $pathinfo) {
                return array (  '_controller' => 'Ballack\\TimeSheetBundle\\Controller\\DefaultController::calendarAction',  '_route' => 'ballack_time_sheet_calendar',);
            }

            // ballack_time_sheet_calendar_collegue
            if ('/calendar_collegue' === $pathinfo) {
                return array (  '_controller' => 'Ballack\\TimeSheetBundle\\Controller\\DefaultController::calendarCollegueAction',  '_route' => 'ballack_time_sheet_calendar_collegue',);
            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ('/login' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'fos_user.security.controller:loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ('/login_check' === $pathinfo) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'fos_user.security.controller:checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ('/logout' === $pathinfo) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'fos_user.security.controller:logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if ('/profile' === rtrim($pathinfo, '/')) {
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                    goto not_fos_user_profile_show;
                } else {
                    return $this->redirect($rawPathinfo.'/', 'fos_user_profile_show');
                }

                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                return array (  '_controller' => 'fos_user.profile.controller:showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ('/profile/edit' === $pathinfo) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'fos_user.profile.controller:editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if ('/register' === rtrim($pathinfo, '/')) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not_fos_user_registration_register;
                    } else {
                        return $this->redirect($rawPathinfo.'/', 'fos_user_registration_register');
                    }

                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_registration_register;
                    }

                    return array (  '_controller' => 'fos_user.registration.controller:registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ('/register/check-email' === $pathinfo) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'fos_user.registration.controller:checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'fos_user.registration.controller:confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ('/register/confirmed' === $pathinfo) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'fos_user.registration.controller:confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ('/resetting/request' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'fos_user.resetting.controller:requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ('/resetting/send-email' === $pathinfo) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'fos_user.resetting.controller:sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ('/resetting/check-email' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'fos_user.resetting.controller:checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'fos_user.resetting.controller:resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ('/profile/change-password' === $pathinfo) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'fos_user.change_password.controller:changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        if (0 === strpos($pathinfo, '/api')) {
            // indexapp_article_list
            if (0 === strpos($pathinfo, '/api/typeabsence_index_rest') && preg_match('#^/api/typeabsence_index_rest(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_indexapp_article_list;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'indexapp_article_list')), array (  '_controller' => 'Ballack\\TimeSheetBundle\\Controller\\TypeAbsenceRestController::indexAction',  '_format' => 'json',));
            }
            not_indexapp_article_list:

            // index2absence_rest_list
            if (0 === strpos($pathinfo, '/api/absence_rest') && preg_match('#^/api/absence_rest(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_index2absence_rest_list;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'index2absence_rest_list')), array (  '_controller' => 'Ballack\\TimeSheetBundle\\Controller\\TypeAbsenceRestController::index2Action',  '_format' => 'json',));
            }
            not_index2absence_rest_list:

            // new
            if (0 === strpos($pathinfo, '/api/new') && preg_match('#^/api/new(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_new;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'new')), array (  '_controller' => 'Ballack\\TimeSheetBundle\\Controller\\TypeAbsenceRestController::newAction',  '_format' => 'json',));
            }
            not_new:

            // show
            if (preg_match('#^/api/(?P<typeAbsence>[^/]++)/show(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PATCH') {
                    $allow[] = 'PATCH';
                    goto not_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'show')), array (  '_controller' => 'Ballack\\TimeSheetBundle\\Controller\\TypeAbsenceRestController::showAction',  '_format' => 'json',));
            }
            not_show:

            // edit
            if (preg_match('#^/api/(?P<typeAbsence>[^/]++)/edit(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit')), array (  '_controller' => 'Ballack\\TimeSheetBundle\\Controller\\TypeAbsenceRestController::editAction',  '_format' => 'json',));
            }
            not_edit:

            // delete
            if (preg_match('#^/api/(?P<typeAbsence>[^/\\.]++)(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete')), array (  '_controller' => 'Ballack\\TimeSheetBundle\\Controller\\TypeAbsenceRestController::deleteAction',  '_format' => 'json',));
            }
            not_delete:

            // get_absence_by_departementabsence_collegue_rest_list
            if (0 === strpos($pathinfo, '/api/absence_collegue_rest') && preg_match('#^/api/absence_collegue_rest(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_get_absence_by_departementabsence_collegue_rest_list;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_absence_by_departementabsence_collegue_rest_list')), array (  '_controller' => 'Ballack\\TimeSheetBundle\\Controller\\TypeAbsenceRestController::getAbsenceByDepartementAction',  '_format' => 'json',));
            }
            not_get_absence_by_departementabsence_collegue_rest_list:

            // indexemploye_list
            if (0 === strpos($pathinfo, '/api/employe_index_rest') && preg_match('#^/api/employe_index_rest(?:\\.(?P<_format>json))?$#sD', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_indexemploye_list;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'indexemploye_list')), array (  '_controller' => 'Ballack\\TimeSheetBundle\\Controller\\EmployeRestController::indexAction',  '_format' => 'json',));
            }
            not_indexemploye_list:

            // nelmio_api_doc_index
            if (0 === strpos($pathinfo, '/api/doc') && preg_match('#^/api/doc(?:/(?P<view>[^/]++))?$#sD', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_nelmio_api_doc_index;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'nelmio_api_doc_index')), array (  '_controller' => 'Nelmio\\ApiDocBundle\\Controller\\ApiDocController::indexAction',  'view' => 'default',));
            }
            not_nelmio_api_doc_index:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
