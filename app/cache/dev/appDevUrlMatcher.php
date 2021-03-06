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

        if (0 === strpos($pathinfo, '/images/586e0d6')) {
            // _assetic_586e0d6
            if ($pathinfo === '/images/586e0d6.ico') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '586e0d6',  'pos' => NULL,  '_format' => 'ico',  '_route' => '_assetic_586e0d6',);
            }

            // _assetic_586e0d6_0
            if ($pathinfo === '/images/586e0d6_favicon_1.ico') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '586e0d6',  'pos' => 0,  '_format' => 'ico',  '_route' => '_assetic_586e0d6_0',);
            }

        }

        if (0 === strpos($pathinfo, '/css/e12efce')) {
            // _assetic_e12efce
            if ($pathinfo === '/css/e12efce.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'e12efce',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_e12efce',);
            }

            if (0 === strpos($pathinfo, '/css/e12efce_')) {
                // _assetic_e12efce_0
                if ($pathinfo === '/css/e12efce_style_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'e12efce',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_e12efce_0',);
                }

                if (0 === strpos($pathinfo, '/css/e12efce_part_2_')) {
                    // _assetic_e12efce_1
                    if ($pathinfo === '/css/e12efce_part_2_bootstrap.min_1.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'e12efce',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_e12efce_1',);
                    }

                    // _assetic_e12efce_2
                    if ($pathinfo === '/css/e12efce_part_2_style_2.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'e12efce',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_e12efce_2',);
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/js/69cdddb')) {
            // _assetic_69cdddb
            if ($pathinfo === '/js/69cdddb.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '69cdddb',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_69cdddb',);
            }

            if (0 === strpos($pathinfo, '/js/69cdddb_')) {
                // _assetic_69cdddb_0
                if ($pathinfo === '/js/69cdddb_jquery-1.11.1.min_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '69cdddb',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_69cdddb_0',);
                }

                // _assetic_69cdddb_1
                if ($pathinfo === '/js/69cdddb_bootstrap.min_2.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '69cdddb',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_69cdddb_1',);
                }

                // _assetic_69cdddb_2
                if ($pathinfo === '/js/69cdddb_part_3_script_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '69cdddb',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_69cdddb_2',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/images/1c4149b')) {
            // _assetic_1c4149b
            if ($pathinfo === '/images/1c4149b.png') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '1c4149b',  'pos' => NULL,  '_format' => 'png',  '_route' => '_assetic_1c4149b',);
            }

            // _assetic_1c4149b_0
            if ($pathinfo === '/images/1c4149b_integral-vec_1.png') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '1c4149b',  'pos' => 0,  '_format' => 'png',  '_route' => '_assetic_1c4149b_0',);
            }

        }

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

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
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

        // integral_core_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'integral_core_homepage');
            }

            return array (  '_controller' => 'Integral\\CoreBundle\\Controller\\DefaultController::indexAction',  '_route' => 'integral_core_homepage',);
        }

        // integral_core_runpage
        if (0 === strpos($pathinfo, '/run') && preg_match('#^/run/(?P<integratingFunction>[^/]++)/(?P<lowerDomain>[^/]++)/(?P<upperDomain>[^/]++)/(?P<currentVariable>[^/]++)/(?P<computationTime>[^/]++)/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'integral_core_runpage');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'integral_core_runpage')), array (  '_controller' => 'Integral\\CoreBundle\\Controller\\DefaultController::runAction',));
        }

        // integral_core_getpage
        if ($pathinfo === '/calc') {
            return array (  '_controller' => 'Integral\\CoreBundle\\Controller\\DefaultController::calcAction',  '_route' => 'integral_core_getpage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
