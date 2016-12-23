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

        // my_app_user_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'my_app_user_homepage')), array (  '_controller' => 'MyApp\\UserBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/permik')) {
            // projet_symfony2_homepage
            if (0 === strpos($pathinfo, '/permik/hello') && preg_match('#^/permik/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'projet_symfony2_homepage')), array (  '_controller' => 'Projet\\Symfony2Bundle\\Controller\\DefaultController::indexAction',));
            }

            if (0 === strpos($pathinfo, '/permik/map')) {
                // projet_symfony2_homepagemap
                if ($pathinfo === '/permik/map') {
                    return array (  '_controller' => 'Projet\\Symfony2Bundle\\Controller\\DefaultController::indexAction',  '_route' => 'projet_symfony2_homepagemap',);
                }

                // projet_symfony2_homepagemape
                if ($pathinfo === '/permik/map1') {
                    return array (  '_controller' => 'Projet\\Symfony2Bundle\\Controller\\DefaultController::index2Action',  '_route' => 'projet_symfony2_homepagemape',);
                }

            }

            // projet_symfony2_affichage_candidat
            if ($pathinfo === '/permik/liste_candidats') {
                return array (  '_controller' => 'Projet\\Symfony2Bundle\\Controller\\CandidatController::listAction',  '_route' => 'projet_symfony2_affichage_candidat',);
            }

            // projet_symfony2_supprimer_candidat
            if (0 === strpos($pathinfo, '/permik/supprimer_candidats') && preg_match('#^/permik/supprimer_candidats/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'projet_symfony2_supprimer_candidat')), array (  '_controller' => 'Projet\\Symfony2Bundle\\Controller\\CandidatController::deleteAction',));
            }

            // projet_symfony2_ajouter_candidat
            if ($pathinfo === '/permik/ajouter_candidat') {
                return array (  '_controller' => 'Projet\\Symfony2Bundle\\Controller\\CandidatController::ajoutAction',  '_route' => 'projet_symfony2_ajouter_candidat',);
            }

            // projet_symfony2_affichage_moniteur
            if ($pathinfo === '/permik/liste_moniteurs') {
                return array (  '_controller' => 'Projet\\Symfony2Bundle\\Controller\\MoniteurController::listAction',  '_route' => 'projet_symfony2_affichage_moniteur',);
            }

            // projet_symfony2_supprimer_moniteur
            if (0 === strpos($pathinfo, '/permik/supprimer_moniteurs') && preg_match('#^/permik/supprimer_moniteurs/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'projet_symfony2_supprimer_moniteur')), array (  '_controller' => 'Projet\\Symfony2Bundle\\Controller\\MoniteurController::deleteAction',));
            }

            // projet_symfony2_ajouter_moniteur
            if ($pathinfo === '/permik/ajouter_moniteur') {
                return array (  '_controller' => 'Projet\\Symfony2Bundle\\Controller\\MoniteurController::ajoutAction',  '_route' => 'projet_symfony2_ajouter_moniteur',);
            }

            // projet_symfony2_affichage_responsable_auto_ecole
            if ($pathinfo === '/permik/liste_responsables') {
                return array (  '_controller' => 'Projet\\Symfony2Bundle\\Controller\\ResponsableAutoEcoleController::listAction',  '_route' => 'projet_symfony2_affichage_responsable_auto_ecole',);
            }

            // projet_symfony2_supprimer_responsable_auto_ecole
            if (0 === strpos($pathinfo, '/permik/supprimer_responsable') && preg_match('#^/permik/supprimer_responsable/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'projet_symfony2_supprimer_responsable_auto_ecole')), array (  '_controller' => 'Projet\\Symfony2Bundle\\Controller\\ResponsableAutoEcoleController::deleteAction',));
            }

            // projet_symfony2_ajouter_responsable_auto_ecole
            if ($pathinfo === '/permik/ajouter_responsable') {
                return array (  '_controller' => 'Projet\\Symfony2Bundle\\Controller\\ResponsableAutoEcoleController::ajoutAction',  '_route' => 'projet_symfony2_ajouter_responsable_auto_ecole',);
            }

            // projet_symfony2_tableau_de_bord
            if ($pathinfo === '/permik/tableau_de_bord') {
                return array (  '_controller' => 'Projet\\Symfony2Bundle\\Controller\\CandidatController::infCandidatAction',  '_route' => 'projet_symfony2_tableau_de_bord',);
            }

            // _graphePie
            if ($pathinfo === '/permik/pie') {
                return array (  '_controller' => 'Projet\\Symfony2Bundle\\Controller\\GrapheController::chartPieAction',  '_route' => '_graphePie',);
            }

            if (0 === strpos($pathinfo, '/permik/count')) {
                // stat_Candidat
                if ($pathinfo === '/permik/countCandidat') {
                    return array (  '_controller' => 'Projet\\Symfony2Bundle\\Controller\\CandidatController::infCandidatAction',  '_route' => 'stat_Candidat',);
                }

                // stat_Moniteur
                if ($pathinfo === '/permik/countMoniteur') {
                    return array (  '_controller' => 'Projet\\Symfony2Bundle\\Controller\\MoniteurController::infMoniteurAction',  '_route' => 'stat_Moniteur',);
                }

                // stat_Responsable
                if ($pathinfo === '/permik/countResponsable') {
                    return array (  '_controller' => 'Projet\\Symfony2Bundle\\Controller\\ResponsableAutoEcoleController::infResponsableAutoEcoleAction',  '_route' => 'stat_Responsable',);
                }

            }

            // projet_symfony2_affichage_rdv
            if ($pathinfo === '/permik/liste_rdvs') {
                return array (  '_controller' => 'Projet\\Symfony2Bundle\\Controller\\RdvController::listAction',  '_route' => 'projet_symfony2_affichage_rdv',);
            }

            if (0 === strpos($pathinfo, '/permik/home')) {
                // projet_symfony2_home
                if ($pathinfo === '/permik/home') {
                    return array (  '_controller' => 'Projet\\Symfony2Bundle\\Controller\\HomeController::homeAction',  '_route' => 'projet_symfony2_home',);
                }

                // homeCan
                if ($pathinfo === '/permik/homeCandidat') {
                    return array (  '_controller' => 'Projet\\Symfony2Bundle\\Controller\\RdvController::listRdvAction',  '_route' => 'homeCan',);
                }

                // homeMon
                if ($pathinfo === '/permik/homeMoniteur') {
                    return array (  '_controller' => 'Projet\\Symfony2Bundle\\Controller\\MoniteurController::homeMonAction',  '_route' => 'homeMon',);
                }

                // homeRes
                if ($pathinfo === '/permik/homeResponsable') {
                    return array (  '_controller' => 'Projet\\Symfony2Bundle\\Controller\\ResponsableAutoEcoleController::homeResAction',  '_route' => 'homeRes',);
                }

            }

            // projet_symfony2_supprimer_rdv
            if (0 === strpos($pathinfo, '/permik/supprimer_rdvs') && preg_match('#^/permik/supprimer_rdvs/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'projet_symfony2_supprimer_rdv')), array (  '_controller' => 'Projet\\Symfony2Bundle\\Controller\\MoniteurController::deleteRdvAction',));
            }

            // projet_symfony2_ajouter_rdv
            if ($pathinfo === '/permik/ajouter_rdvs') {
                return array (  '_controller' => 'Projet\\Symfony2Bundle\\Controller\\MoniteurController::AjoutRdvAction',  '_route' => 'projet_symfony2_ajouter_rdv',);
            }

            // projet_symfony2_Pdf
            if ($pathinfo === '/permik/pdf') {
                return array (  '_controller' => 'Projet\\Symfony2Bundle\\Controller\\CandidatController::indexpdfAction',  '_route' => 'projet_symfony2_Pdf',);
            }

            if (0 === strpos($pathinfo, '/permik/auth')) {
                // auth
                if ($pathinfo === '/permik/auth') {
                    return array (  '_controller' => 'Projet\\Symfony2Bundle\\Controller\\AuthController::lockAdAction',  '_route' => 'auth',);
                }

                // auth2
                if ($pathinfo === '/permik/auth2') {
                    return array (  '_controller' => 'Projet\\Symfony2Bundle\\Controller\\AuthController::lockAd2Action',  '_route' => 'auth2',);
                }

            }

            if (0 === strpos($pathinfo, '/permik/log')) {
                if (0 === strpos($pathinfo, '/permik/login')) {
                    // fos_user_security_login
                    if ($pathinfo === '/permik/login') {
                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                    }

                    // fos_user_security_check
                    if ($pathinfo === '/permik/login_check') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_fos_user_security_check;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                    }
                    not_fos_user_security_check:

                }

                // fos_user_security_logout
                if ($pathinfo === '/permik/logout') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
                }

            }

            if (0 === strpos($pathinfo, '/permik/profile')) {
                // fos_user_profile_show
                if (rtrim($pathinfo, '/') === '/permik/profile') {
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
                if ($pathinfo === '/permik/profile/edit') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
                }

            }

            if (0 === strpos($pathinfo, '/permik/re')) {
                if (0 === strpos($pathinfo, '/permik/register')) {
                    // fos_user_registration_register
                    if (rtrim($pathinfo, '/') === '/permik/register') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                    }

                    if (0 === strpos($pathinfo, '/permik/register/c')) {
                        // fos_user_registration_check_email
                        if ($pathinfo === '/permik/register/check-email') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_check_email;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                        }
                        not_fos_user_registration_check_email:

                        if (0 === strpos($pathinfo, '/permik/register/confirm')) {
                            // fos_user_registration_confirm
                            if (preg_match('#^/permik/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'HEAD'));
                                    goto not_fos_user_registration_confirm;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                            }
                            not_fos_user_registration_confirm:

                            // fos_user_registration_confirmed
                            if ($pathinfo === '/permik/register/confirmed') {
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

                if (0 === strpos($pathinfo, '/permik/resetting')) {
                    // fos_user_resetting_request
                    if ($pathinfo === '/permik/resetting/request') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_resetting_request;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                    }
                    not_fos_user_resetting_request:

                    // fos_user_resetting_send_email
                    if ($pathinfo === '/permik/resetting/send-email') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_fos_user_resetting_send_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                    }
                    not_fos_user_resetting_send_email:

                    // fos_user_resetting_check_email
                    if ($pathinfo === '/permik/resetting/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_resetting_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                    }
                    not_fos_user_resetting_check_email:

                    // fos_user_resetting_reset
                    if (0 === strpos($pathinfo, '/permik/resetting/reset') && preg_match('#^/permik/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
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
            if ($pathinfo === '/permik/profile/change-password') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_change_password;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
            }
            not_fos_user_change_password:

        }

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/demo')) {
            if (0 === strpos($pathinfo, '/demo/secured')) {
                if (0 === strpos($pathinfo, '/demo/secured/log')) {
                    if (0 === strpos($pathinfo, '/demo/secured/login')) {
                        // _demo_login
                        if ($pathinfo === '/demo/secured/login') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                        }

                        // _demo_security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_demo_security_check',);
                        }

                    }

                    // _demo_logout
                    if ($pathinfo === '/demo/secured/logout') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/demo/secured/hello')) {
                    // acme_demo_secured_hello
                    if ($pathinfo === '/demo/secured/hello') {
                        return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                    }

                    // _demo_secured_hello
                    if (preg_match('#^/demo/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',));
                    }

                    // _demo_secured_hello_admin
                    if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello_admin')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',));
                    }

                }

            }

            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
