<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
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

        }

        if (0 === strpos($pathinfo, '/etudiant')) {
            // etudiant2
            if ($pathinfo === '/etudiant2') {
                return array (  '_controller' => 'Admin\\Bundle\\Controller\\EtudiantController::index2Action',  '_route' => 'etudiant2',);
            }

            // etudiant3
            if ($pathinfo === '/etudiant3') {
                return array (  '_controller' => 'Admin\\Bundle\\Controller\\EtudiantController::index3Action',  '_route' => 'etudiant3',);
            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        // admi_sco_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'admi_sco_homepage');
            }

            return array (  '_controller' => 'Admin\\Bundle\\Controller\\DefaultController::indexAction',  '_route' => 'admi_sco_homepage',);
        }

        if (0 === strpos($pathinfo, '/groupe')) {
            // groupe
            if (rtrim($pathinfo, '/') === '/groupe') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'groupe');
                }

                return array (  '_controller' => 'Admin\\Bundle\\Controller\\groupeController::indexAction',  '_route' => 'groupe',);
            }

            // groupe_show
            if (preg_match('#^/groupe/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'groupe_show')), array (  '_controller' => 'Admin\\Bundle\\Controller\\groupeController::showAction',));
            }

            // groupe_new
            if ($pathinfo === '/groupe/new') {
                return array (  '_controller' => 'Admin\\Bundle\\Controller\\groupeController::newAction',  '_route' => 'groupe_new',);
            }

            // groupe_create
            if ($pathinfo === '/groupe/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_groupe_create;
                }

                return array (  '_controller' => 'Admin\\Bundle\\Controller\\groupeController::createAction',  '_route' => 'groupe_create',);
            }
            not_groupe_create:

            // groupe_edit
            if (preg_match('#^/groupe/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'groupe_edit')), array (  '_controller' => 'Admin\\Bundle\\Controller\\groupeController::editAction',));
            }

            // groupe_update
            if (preg_match('#^/groupe/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_groupe_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'groupe_update')), array (  '_controller' => 'Admin\\Bundle\\Controller\\groupeController::updateAction',));
            }
            not_groupe_update:

            // groupe_delete
            if (preg_match('#^/groupe/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_groupe_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'groupe_delete')), array (  '_controller' => 'Admin\\Bundle\\Controller\\groupeController::deleteAction',));
            }
            not_groupe_delete:

        }

        if (0 === strpos($pathinfo, '/niveau')) {
            // niveau
            if (rtrim($pathinfo, '/') === '/niveau') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'niveau');
                }

                return array (  '_controller' => 'Admin\\Bundle\\Controller\\niveauController::indexAction',  '_route' => 'niveau',);
            }

            // niveau_show
            if (preg_match('#^/niveau/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'niveau_show')), array (  '_controller' => 'Admin\\Bundle\\Controller\\niveauController::showAction',));
            }

            // niveau_new
            if ($pathinfo === '/niveau/new') {
                return array (  '_controller' => 'Admin\\Bundle\\Controller\\niveauController::newAction',  '_route' => 'niveau_new',);
            }

            // niveau_create
            if ($pathinfo === '/niveau/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_niveau_create;
                }

                return array (  '_controller' => 'Admin\\Bundle\\Controller\\niveauController::createAction',  '_route' => 'niveau_create',);
            }
            not_niveau_create:

            // niveau_edit
            if (preg_match('#^/niveau/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'niveau_edit')), array (  '_controller' => 'Admin\\Bundle\\Controller\\niveauController::editAction',));
            }

            // niveau_update
            if (preg_match('#^/niveau/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_niveau_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'niveau_update')), array (  '_controller' => 'Admin\\Bundle\\Controller\\niveauController::updateAction',));
            }
            not_niveau_update:

            // niveau_delete
            if (preg_match('#^/niveau/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_niveau_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'niveau_delete')), array (  '_controller' => 'Admin\\Bundle\\Controller\\niveauController::deleteAction',));
            }
            not_niveau_delete:

        }

        if (0 === strpos($pathinfo, '/resultat')) {
            // resultat
            if (rtrim($pathinfo, '/') === '/resultat') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'resultat');
                }

                return array (  '_controller' => 'Admin\\Bundle\\Controller\\resultatController::indexAction',  '_route' => 'resultat',);
            }

            // resultat_show
            if (preg_match('#^/resultat/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'resultat_show')), array (  '_controller' => 'Admin\\Bundle\\Controller\\resultatController::showAction',));
            }

            // resultat_new
            if ($pathinfo === '/resultat/new') {
                return array (  '_controller' => 'Admin\\Bundle\\Controller\\resultatController::newAction',  '_route' => 'resultat_new',);
            }

            // resultat_create
            if ($pathinfo === '/resultat/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_resultat_create;
                }

                return array (  '_controller' => 'Admin\\Bundle\\Controller\\resultatController::createAction',  '_route' => 'resultat_create',);
            }
            not_resultat_create:

            // resultat_edit
            if (preg_match('#^/resultat/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'resultat_edit')), array (  '_controller' => 'Admin\\Bundle\\Controller\\resultatController::editAction',));
            }

            // resultat_update
            if (preg_match('#^/resultat/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_resultat_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'resultat_update')), array (  '_controller' => 'Admin\\Bundle\\Controller\\resultatController::updateAction',));
            }
            not_resultat_update:

            // resultat_delete
            if (preg_match('#^/resultat/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_resultat_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'resultat_delete')), array (  '_controller' => 'Admin\\Bundle\\Controller\\resultatController::deleteAction',));
            }
            not_resultat_delete:

        }

        if (0 === strpos($pathinfo, '/filiere')) {
            // filiere
            if (rtrim($pathinfo, '/') === '/filiere') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'filiere');
                }

                return array (  '_controller' => 'Admin\\Bundle\\Controller\\filiereController::indexAction',  '_route' => 'filiere',);
            }

            // filiere_show
            if (preg_match('#^/filiere/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'filiere_show')), array (  '_controller' => 'Admin\\Bundle\\Controller\\filiereController::showAction',));
            }

            // filiere_new
            if ($pathinfo === '/filiere/new') {
                return array (  '_controller' => 'Admin\\Bundle\\Controller\\filiereController::newAction',  '_route' => 'filiere_new',);
            }

            // filiere_create
            if ($pathinfo === '/filiere/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_filiere_create;
                }

                return array (  '_controller' => 'Admin\\Bundle\\Controller\\filiereController::createAction',  '_route' => 'filiere_create',);
            }
            not_filiere_create:

            // filiere_edit
            if (preg_match('#^/filiere/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'filiere_edit')), array (  '_controller' => 'Admin\\Bundle\\Controller\\filiereController::editAction',));
            }

            // filiere_update
            if (preg_match('#^/filiere/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_filiere_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'filiere_update')), array (  '_controller' => 'Admin\\Bundle\\Controller\\filiereController::updateAction',));
            }
            not_filiere_update:

            // filiere_delete
            if (preg_match('#^/filiere/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_filiere_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'filiere_delete')), array (  '_controller' => 'Admin\\Bundle\\Controller\\filiereController::deleteAction',));
            }
            not_filiere_delete:

        }

        if (0 === strpos($pathinfo, '/diplome')) {
            // diplome
            if (rtrim($pathinfo, '/') === '/diplome') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'diplome');
                }

                return array (  '_controller' => 'Admin\\Bundle\\Controller\\diplomeController::indexAction',  '_route' => 'diplome',);
            }

            // diplome_show
            if (preg_match('#^/diplome/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'diplome_show')), array (  '_controller' => 'Admin\\Bundle\\Controller\\diplomeController::showAction',));
            }

            // diplome_new
            if ($pathinfo === '/diplome/new') {
                return array (  '_controller' => 'Admin\\Bundle\\Controller\\diplomeController::newAction',  '_route' => 'diplome_new',);
            }

            // diplome_create
            if ($pathinfo === '/diplome/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_diplome_create;
                }

                return array (  '_controller' => 'Admin\\Bundle\\Controller\\diplomeController::createAction',  '_route' => 'diplome_create',);
            }
            not_diplome_create:

            // diplome_edit
            if (preg_match('#^/diplome/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'diplome_edit')), array (  '_controller' => 'Admin\\Bundle\\Controller\\diplomeController::editAction',));
            }

            // diplome_update
            if (preg_match('#^/diplome/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_diplome_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'diplome_update')), array (  '_controller' => 'Admin\\Bundle\\Controller\\diplomeController::updateAction',));
            }
            not_diplome_update:

            // diplome_delete
            if (preg_match('#^/diplome/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_diplome_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'diplome_delete')), array (  '_controller' => 'Admin\\Bundle\\Controller\\diplomeController::deleteAction',));
            }
            not_diplome_delete:

        }

        if (0 === strpos($pathinfo, '/etudiant')) {
            // etudiant
            if (rtrim($pathinfo, '/') === '/etudiant') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'etudiant');
                }

                return array (  '_controller' => 'Admin\\Bundle\\Controller\\EtudiantController::indexAction',  '_route' => 'etudiant',);
            }

            // etudiant_show
            if (preg_match('#^/etudiant/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'etudiant_show')), array (  '_controller' => 'Admin\\Bundle\\Controller\\EtudiantController::showAction',));
            }

            // etudiant_new
            if ($pathinfo === '/etudiant/new') {
                return array (  '_controller' => 'Admin\\Bundle\\Controller\\EtudiantController::newAction',  '_route' => 'etudiant_new',);
            }

            // etudiant_create
            if ($pathinfo === '/etudiant/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_etudiant_create;
                }

                return array (  '_controller' => 'Admin\\Bundle\\Controller\\EtudiantController::createAction',  '_route' => 'etudiant_create',);
            }
            not_etudiant_create:

            // etudiant_edit
            if (preg_match('#^/etudiant/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'etudiant_edit')), array (  '_controller' => 'Admin\\Bundle\\Controller\\EtudiantController::editAction',));
            }

            // etudiant_update
            if (preg_match('#^/etudiant/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_etudiant_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'etudiant_update')), array (  '_controller' => 'Admin\\Bundle\\Controller\\EtudiantController::updateAction',));
            }
            not_etudiant_update:

            // etudiant_delete
            if (preg_match('#^/etudiant/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_etudiant_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'etudiant_delete')), array (  '_controller' => 'Admin\\Bundle\\Controller\\EtudiantController::deleteAction',));
            }
            not_etudiant_delete:

        }

        // welcome
        if ($pathinfo === '/welcome') {
            return array (  '_controller' => 'Admin\\Bundle\\Controller\\DefaultController::welcomeAction',  '_route' => 'welcome',);
        }

        if (0 === strpos($pathinfo, '/enseignant')) {
            // enseignant
            if (rtrim($pathinfo, '/') === '/enseignant') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'enseignant');
                }

                return array (  '_controller' => 'Admin\\Bundle\\Controller\\EnseignantController::indexAction',  '_route' => 'enseignant',);
            }

            // enseignant_show
            if (preg_match('#^/enseignant/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'enseignant_show')), array (  '_controller' => 'Admin\\Bundle\\Controller\\EnseignantController::showAction',));
            }

            // enseignant_new
            if ($pathinfo === '/enseignant/new') {
                return array (  '_controller' => 'Admin\\Bundle\\Controller\\EnseignantController::newAction',  '_route' => 'enseignant_new',);
            }

            // enseignant_create
            if ($pathinfo === '/enseignant/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_enseignant_create;
                }

                return array (  '_controller' => 'Admin\\Bundle\\Controller\\EnseignantController::createAction',  '_route' => 'enseignant_create',);
            }
            not_enseignant_create:

            // enseignant_edit
            if (preg_match('#^/enseignant/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'enseignant_edit')), array (  '_controller' => 'Admin\\Bundle\\Controller\\EnseignantController::editAction',));
            }

            // enseignant_update
            if (preg_match('#^/enseignant/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_enseignant_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'enseignant_update')), array (  '_controller' => 'Admin\\Bundle\\Controller\\EnseignantController::updateAction',));
            }
            not_enseignant_update:

            // enseignant_delete
            if (preg_match('#^/enseignant/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_enseignant_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'enseignant_delete')), array (  '_controller' => 'Admin\\Bundle\\Controller\\EnseignantController::deleteAction',));
            }
            not_enseignant_delete:

        }

        if (0 === strpos($pathinfo, '/annee')) {
            // annee
            if (rtrim($pathinfo, '/') === '/annee') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'annee');
                }

                return array (  '_controller' => 'Admin\\Bundle\\Controller\\AnneeController::indexAction',  '_route' => 'annee',);
            }

            // annee_show
            if (preg_match('#^/annee/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'annee_show')), array (  '_controller' => 'Admin\\Bundle\\Controller\\AnneeController::showAction',));
            }

        }

        if (0 === strpos($pathinfo, '/s')) {
            if (0 === strpos($pathinfo, '/semestre')) {
                // semestre
                if (rtrim($pathinfo, '/') === '/semestre') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'semestre');
                    }

                    return array (  '_controller' => 'Admin\\Bundle\\Controller\\SemestreController::indexAction',  '_route' => 'semestre',);
                }

                // semestre_show
                if (preg_match('#^/semestre/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'semestre_show')), array (  '_controller' => 'Admin\\Bundle\\Controller\\SemestreController::showAction',));
                }

                // semestre_new
                if ($pathinfo === '/semestre/new') {
                    return array (  '_controller' => 'Admin\\Bundle\\Controller\\SemestreController::newAction',  '_route' => 'semestre_new',);
                }

                // semestre_create
                if ($pathinfo === '/semestre/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_semestre_create;
                    }

                    return array (  '_controller' => 'Admin\\Bundle\\Controller\\SemestreController::createAction',  '_route' => 'semestre_create',);
                }
                not_semestre_create:

                // semestre_edit
                if (preg_match('#^/semestre/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'semestre_edit')), array (  '_controller' => 'Admin\\Bundle\\Controller\\SemestreController::editAction',));
                }

                // semestre_update
                if (preg_match('#^/semestre/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_semestre_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'semestre_update')), array (  '_controller' => 'Admin\\Bundle\\Controller\\SemestreController::updateAction',));
                }
                not_semestre_update:

                // semestre_delete
                if (preg_match('#^/semestre/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_semestre_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'semestre_delete')), array (  '_controller' => 'Admin\\Bundle\\Controller\\SemestreController::deleteAction',));
                }
                not_semestre_delete:

            }

            if (0 === strpos($pathinfo, '/salle')) {
                // salle
                if (rtrim($pathinfo, '/') === '/salle') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'salle');
                    }

                    return array (  '_controller' => 'Admin\\Bundle\\Controller\\SalleController::indexAction',  '_route' => 'salle',);
                }

                // salle_show
                if (preg_match('#^/salle/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'salle_show')), array (  '_controller' => 'Admin\\Bundle\\Controller\\SalleController::showAction',));
                }

                // salle_new
                if ($pathinfo === '/salle/new') {
                    return array (  '_controller' => 'Admin\\Bundle\\Controller\\SalleController::newAction',  '_route' => 'salle_new',);
                }

                // salle_create
                if ($pathinfo === '/salle/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_salle_create;
                    }

                    return array (  '_controller' => 'Admin\\Bundle\\Controller\\SalleController::createAction',  '_route' => 'salle_create',);
                }
                not_salle_create:

                // salle_edit
                if (preg_match('#^/salle/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'salle_edit')), array (  '_controller' => 'Admin\\Bundle\\Controller\\SalleController::editAction',));
                }

                // salle_update
                if (preg_match('#^/salle/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_salle_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'salle_update')), array (  '_controller' => 'Admin\\Bundle\\Controller\\SalleController::updateAction',));
                }
                not_salle_update:

                // salle_delete
                if (preg_match('#^/salle/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_salle_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'salle_delete')), array (  '_controller' => 'Admin\\Bundle\\Controller\\SalleController::deleteAction',));
                }
                not_salle_delete:

            }

        }

        if (0 === strpos($pathinfo, '/emploi')) {
            // emploi
            if (rtrim($pathinfo, '/') === '/emploi') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'emploi');
                }

                return array (  '_controller' => 'Admin\\Bundle\\Controller\\EmploiController::indexAction',  '_route' => 'emploi',);
            }

            // emploi_show
            if (preg_match('#^/emploi/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'emploi_show')), array (  '_controller' => 'Admin\\Bundle\\Controller\\EmploiController::showAction',));
            }

            // emploi_new
            if ($pathinfo === '/emploi/new') {
                return array (  '_controller' => 'Admin\\Bundle\\Controller\\EmploiController::newAction',  '_route' => 'emploi_new',);
            }

            // emploi_create
            if ($pathinfo === '/emploi/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_emploi_create;
                }

                return array (  '_controller' => 'Admin\\Bundle\\Controller\\EmploiController::createAction',  '_route' => 'emploi_create',);
            }
            not_emploi_create:

            // emploi_edit
            if (preg_match('#^/emploi/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'emploi_edit')), array (  '_controller' => 'Admin\\Bundle\\Controller\\EmploiController::editAction',));
            }

            // emploi_update
            if (preg_match('#^/emploi/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_emploi_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'emploi_update')), array (  '_controller' => 'Admin\\Bundle\\Controller\\EmploiController::updateAction',));
            }
            not_emploi_update:

            // emploi_delete
            if (preg_match('#^/emploi/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_emploi_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'emploi_delete')), array (  '_controller' => 'Admin\\Bundle\\Controller\\EmploiController::deleteAction',));
            }
            not_emploi_delete:

        }

        if (0 === strpos($pathinfo, '/matiere')) {
            // matiere
            if (rtrim($pathinfo, '/') === '/matiere') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'matiere');
                }

                return array (  '_controller' => 'Admin\\Bundle\\Controller\\MatiereController::indexAction',  '_route' => 'matiere',);
            }

            // matiere_show
            if (preg_match('#^/matiere/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'matiere_show')), array (  '_controller' => 'Admin\\Bundle\\Controller\\MatiereController::showAction',));
            }

            // matiere_new
            if ($pathinfo === '/matiere/new') {
                return array (  '_controller' => 'Admin\\Bundle\\Controller\\MatiereController::newAction',  '_route' => 'matiere_new',);
            }

            // matiere_create
            if ($pathinfo === '/matiere/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_matiere_create;
                }

                return array (  '_controller' => 'Admin\\Bundle\\Controller\\MatiereController::createAction',  '_route' => 'matiere_create',);
            }
            not_matiere_create:

            // matiere_edit
            if (preg_match('#^/matiere/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'matiere_edit')), array (  '_controller' => 'Admin\\Bundle\\Controller\\MatiereController::editAction',));
            }

            // matiere_update
            if (preg_match('#^/matiere/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_matiere_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'matiere_update')), array (  '_controller' => 'Admin\\Bundle\\Controller\\MatiereController::updateAction',));
            }
            not_matiere_update:

            // matiere_delete
            if (preg_match('#^/matiere/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_matiere_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'matiere_delete')), array (  '_controller' => 'Admin\\Bundle\\Controller\\MatiereController::deleteAction',));
            }
            not_matiere_delete:

        }

        if (0 === strpos($pathinfo, '/etablissement')) {
            // etablissement
            if (rtrim($pathinfo, '/') === '/etablissement') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'etablissement');
                }

                return array (  '_controller' => 'Admin\\Bundle\\Controller\\EtablissementController::indexAction',  '_route' => 'etablissement',);
            }

            // etablissement_show
            if (preg_match('#^/etablissement/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'etablissement_show')), array (  '_controller' => 'Admin\\Bundle\\Controller\\EtablissementController::showAction',));
            }

            // etablissement_new
            if ($pathinfo === '/etablissement/new') {
                return array (  '_controller' => 'Admin\\Bundle\\Controller\\EtablissementController::newAction',  '_route' => 'etablissement_new',);
            }

            // etablissement_create
            if ($pathinfo === '/etablissement/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_etablissement_create;
                }

                return array (  '_controller' => 'Admin\\Bundle\\Controller\\EtablissementController::createAction',  '_route' => 'etablissement_create',);
            }
            not_etablissement_create:

            // etablissement_edit
            if (preg_match('#^/etablissement/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'etablissement_edit')), array (  '_controller' => 'Admin\\Bundle\\Controller\\EtablissementController::editAction',));
            }

            // etablissement_update
            if (preg_match('#^/etablissement/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_etablissement_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'etablissement_update')), array (  '_controller' => 'Admin\\Bundle\\Controller\\EtablissementController::updateAction',));
            }
            not_etablissement_update:

            // etablissement_delete
            if (preg_match('#^/etablissement/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_etablissement_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'etablissement_delete')), array (  '_controller' => 'Admin\\Bundle\\Controller\\EtablissementController::deleteAction',));
            }
            not_etablissement_delete:

        }

        if (0 === strpos($pathinfo, '/note')) {
            // note
            if (rtrim($pathinfo, '/') === '/note') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'note');
                }

                return array (  '_controller' => 'Admin\\Bundle\\Controller\\NoteController::indexAction',  '_route' => 'note',);
            }

            // note_show
            if (preg_match('#^/note/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'note_show')), array (  '_controller' => 'Admin\\Bundle\\Controller\\NoteController::showAction',));
            }

            // note_new
            if ($pathinfo === '/note/new') {
                return array (  '_controller' => 'Admin\\Bundle\\Controller\\NoteController::newAction',  '_route' => 'note_new',);
            }

            // note_create
            if ($pathinfo === '/note/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_note_create;
                }

                return array (  '_controller' => 'Admin\\Bundle\\Controller\\NoteController::createAction',  '_route' => 'note_create',);
            }
            not_note_create:

            // note_edit
            if (preg_match('#^/note/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'note_edit')), array (  '_controller' => 'Admin\\Bundle\\Controller\\NoteController::editAction',));
            }

            // note_update
            if (preg_match('#^/note/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_note_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'note_update')), array (  '_controller' => 'Admin\\Bundle\\Controller\\NoteController::updateAction',));
            }
            not_note_update:

            // note_delete
            if (preg_match('#^/note/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_note_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'note_delete')), array (  '_controller' => 'Admin\\Bundle\\Controller\\NoteController::deleteAction',));
            }
            not_note_delete:

        }

        if (0 === strpos($pathinfo, '/contact')) {
            // contact
            if (rtrim($pathinfo, '/') === '/contact') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'contact');
                }

                return array (  '_controller' => 'Admin\\Bundle\\Controller\\ContactController::indexAction',  '_route' => 'contact',);
            }

            // contact_show
            if (preg_match('#^/contact/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'contact_show')), array (  '_controller' => 'Admin\\Bundle\\Controller\\ContactController::showAction',));
            }

            // contact_new
            if ($pathinfo === '/contact/new') {
                return array (  '_controller' => 'Admin\\Bundle\\Controller\\ContactController::newAction',  '_route' => 'contact_new',);
            }

            // contact_create
            if ($pathinfo === '/contact/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_contact_create;
                }

                return array (  '_controller' => 'Admin\\Bundle\\Controller\\ContactController::createAction',  '_route' => 'contact_create',);
            }
            not_contact_create:

            // contact_edit
            if (preg_match('#^/contact/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'contact_edit')), array (  '_controller' => 'Admin\\Bundle\\Controller\\ContactController::editAction',));
            }

            // contact_update
            if (preg_match('#^/contact/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_contact_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'contact_update')), array (  '_controller' => 'Admin\\Bundle\\Controller\\ContactController::updateAction',));
            }
            not_contact_update:

            // contact_delete
            if (preg_match('#^/contact/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_contact_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'contact_delete')), array (  '_controller' => 'Admin\\Bundle\\Controller\\ContactController::deleteAction',));
            }
            not_contact_delete:

        }

        // response
        if ($pathinfo === '/response') {
            return array (  '_controller' => 'Admin\\Bundle\\Controller\\DefaultController::ContactAction',  '_route' => 'response',);
        }

        if (0 === strpos($pathinfo, '/a')) {
            if (0 === strpos($pathinfo, '/actualite')) {
                // actualite
                if (rtrim($pathinfo, '/') === '/actualite') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'actualite');
                    }

                    return array (  '_controller' => 'Admin\\Bundle\\Controller\\ActualiteController::indexAction',  '_route' => 'actualite',);
                }

                // actualite_show
                if (preg_match('#^/actualite/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'actualite_show')), array (  '_controller' => 'Admin\\Bundle\\Controller\\ActualiteController::showAction',));
                }

                // actualite_new
                if ($pathinfo === '/actualite/new') {
                    return array (  '_controller' => 'Admin\\Bundle\\Controller\\ActualiteController::newAction',  '_route' => 'actualite_new',);
                }

                // actualite_create
                if ($pathinfo === '/actualite/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_actualite_create;
                    }

                    return array (  '_controller' => 'Admin\\Bundle\\Controller\\ActualiteController::createAction',  '_route' => 'actualite_create',);
                }
                not_actualite_create:

                // actualite_edit
                if (preg_match('#^/actualite/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'actualite_edit')), array (  '_controller' => 'Admin\\Bundle\\Controller\\ActualiteController::editAction',));
                }

                // actualite_update
                if (preg_match('#^/actualite/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_actualite_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'actualite_update')), array (  '_controller' => 'Admin\\Bundle\\Controller\\ActualiteController::updateAction',));
                }
                not_actualite_update:

                // actualite_delete
                if (preg_match('#^/actualite/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_actualite_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'actualite_delete')), array (  '_controller' => 'Admin\\Bundle\\Controller\\ActualiteController::deleteAction',));
                }
                not_actualite_delete:

            }

            if (0 === strpos($pathinfo, '/admin')) {
                // admin
                if (rtrim($pathinfo, '/') === '/admin') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin');
                    }

                    return array (  '_controller' => 'Admin\\Bundle\\Controller\\AdminController::indexAction',  '_route' => 'admin',);
                }

                // admin_show
                if (preg_match('#^/admin/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_show')), array (  '_controller' => 'Admin\\Bundle\\Controller\\AdminController::showAction',));
                }

                // admin_new
                if ($pathinfo === '/admin/new') {
                    return array (  '_controller' => 'Admin\\Bundle\\Controller\\AdminController::newAction',  '_route' => 'admin_new',);
                }

                // admin_create
                if ($pathinfo === '/admin/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_create;
                    }

                    return array (  '_controller' => 'Admin\\Bundle\\Controller\\AdminController::createAction',  '_route' => 'admin_create',);
                }
                not_admin_create:

                // admin_edit
                if (preg_match('#^/admin/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_edit')), array (  '_controller' => 'Admin\\Bundle\\Controller\\AdminController::editAction',));
                }

                // admin_update
                if (preg_match('#^/admin/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_admin_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_update')), array (  '_controller' => 'Admin\\Bundle\\Controller\\AdminController::updateAction',));
                }
                not_admin_update:

                // admin_delete
                if (preg_match('#^/admin/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_admin_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_delete')), array (  '_controller' => 'Admin\\Bundle\\Controller\\AdminController::deleteAction',));
                }
                not_admin_delete:

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
