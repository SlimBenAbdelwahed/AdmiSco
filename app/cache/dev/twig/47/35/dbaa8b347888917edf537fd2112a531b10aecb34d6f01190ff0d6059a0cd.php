<?php

/* AdmiScoBundle::standard_layout.html.twig */
class __TwigTemplate_4735dbaa8b347888917edf537fd2112a531b10aecb34d6f01190ff0d6059a0cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'notice' => array($this, 'block_notice'),
            'actions' => array($this, 'block_actions'),
            'sonata_admin_content' => array($this, 'block_sonata_admin_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        $context["_preview"] = $this->renderBlock("preview", $context, $blocks);
        // line 12
        $context["_form"] = $this->renderBlock("form", $context, $blocks);
        // line 13
        $context["_show"] = $this->renderBlock("show", $context, $blocks);
        // line 14
        $context["_list_table"] = $this->renderBlock("list_table", $context, $blocks);
        // line 15
        $context["_list_filters"] = $this->renderBlock("list_filters", $context, $blocks);
        // line 16
        $context["_side_menu"] = $this->renderBlock("side_menu", $context, $blocks);
        // line 17
        $context["_content"] = $this->renderBlock("content", $context, $blocks);
        // line 18
        $context["_title"] = $this->renderBlock("title", $context, $blocks);
        // line 19
        $context["_breadcrumb"] = $this->renderBlock("breadcrumb", $context, $blocks);
        // line 20
        echo "<!DOCTYPE html>
<html class=\"no-js\">
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />

        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

        ";
        // line 27
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 38
        echo "
        ";
        // line 39
        $this->displayBlock('javascripts', $context, $blocks);
        // line 50
        echo "
        <title>
            ";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Admin", array(), "SonataAdminBundle"), "html", null, true);
        echo "

            ";
        // line 54
        if ( !twig_test_empty((isset($context["_title"]) ? $context["_title"] : $this->getContext($context, "_title")))) {
            // line 55
            echo "                ";
            echo (isset($context["_title"]) ? $context["_title"] : $this->getContext($context, "_title"));
            echo "
            ";
        } else {
            // line 57
            echo "                ";
            if (array_key_exists("action", $context)) {
                // line 58
                echo "                    -
                    ";
                // line 59
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "breadcrumbs", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"));
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
                foreach ($context['_seq'] as $context["label"] => $context["uri"]) {
                    // line 60
                    echo "                        ";
                    if ( !$this->getAttribute($context["loop"], "first", array())) {
                        // line 61
                        echo "                            &gt;
                        ";
                    }
                    // line 63
                    echo "                        ";
                    echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                    echo "
                    ";
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
                unset($context['_seq'], $context['_iterated'], $context['label'], $context['uri'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 65
                echo "                ";
            }
            // line 66
            echo "            ";
        }
        // line 67
        echo "        </title>
    </head>
    <body class=\"sonata-bc ";
        // line 69
        if (twig_test_empty((isset($context["_side_menu"]) ? $context["_side_menu"] : $this->getContext($context, "_side_menu")))) {
            echo "sonata-ba-no-side-menu";
        }
        echo "\">
        ";
        // line 71
        echo "
      

        <div class=\"container-fluid\">
            ";
        // line 75
        if (( !twig_test_empty((isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : $this->getContext($context, "_breadcrumb"))) || array_key_exists("action", $context))) {
            // line 76
            echo "                <ul class=\"breadcrumb\">
                    ";
            // line 77
            if (twig_test_empty((isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : $this->getContext($context, "_breadcrumb")))) {
                // line 78
                echo "                        ";
                if (array_key_exists("action", $context)) {
                    // line 79
                    echo "                            ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "breadcrumbs", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"));
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
                    foreach ($context['_seq'] as $context["label"] => $context["uri"]) {
                        // line 80
                        echo "                                ";
                        if ( !$this->getAttribute($context["loop"], "last", array())) {
                            // line 81
                            echo "                                    <li>
                                        ";
                            // line 82
                            if ( !twig_test_empty($context["uri"])) {
                                // line 83
                                echo "                                            <a href=\"";
                                echo twig_escape_filter($this->env, $context["uri"], "html", null, true);
                                echo "\">";
                                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                                echo "</a>
                                        ";
                            } else {
                                // line 85
                                echo "                                            ";
                                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                                echo "
                                        ";
                            }
                            // line 87
                            echo "                                        <span class=\"divider\">/</span>
                                    </li>
                                ";
                        } else {
                            // line 90
                            echo "                                    <li class=\"active\">";
                            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                            echo "</li>
                                ";
                        }
                        // line 92
                        echo "                            ";
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
                    unset($context['_seq'], $context['_iterated'], $context['label'], $context['uri'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 93
                    echo "                        ";
                }
                // line 94
                echo "                    ";
            } else {
                // line 95
                echo "                        ";
                echo (isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : $this->getContext($context, "_breadcrumb"));
                echo "
                    ";
            }
            // line 97
            echo "                </ul>
            ";
        }
        // line 99
        echo "
            ";
        // line 100
        $this->displayBlock('notice', $context, $blocks);
        // line 110
        echo "
            <div style=\"float: right\">
                ";
        // line 112
        $this->displayBlock('actions', $context, $blocks);
        // line 113
        echo "            </div>

            ";
        // line 115
        if (( !twig_test_empty((isset($context["_title"]) ? $context["_title"] : $this->getContext($context, "_title"))) || array_key_exists("action", $context))) {
            // line 116
            echo "                <div class=\"page-header\">
                    <h1>
                        ";
            // line 118
            if ( !twig_test_empty((isset($context["_title"]) ? $context["_title"] : $this->getContext($context, "_title")))) {
                // line 119
                echo "                            ";
                echo (isset($context["_title"]) ? $context["_title"] : $this->getContext($context, "_title"));
                echo "
                        ";
            } elseif (            // line 120
array_key_exists("action", $context)) {
                // line 121
                echo "                            ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "breadcrumbs", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"));
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
                foreach ($context['_seq'] as $context["label"] => $context["uri"]) {
                    // line 122
                    echo "                                ";
                    if ($this->getAttribute($context["loop"], "last", array())) {
                        // line 123
                        echo "                                    ";
                        echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                        echo "
                                ";
                    }
                    // line 125
                    echo "                            ";
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
                unset($context['_seq'], $context['_iterated'], $context['label'], $context['uri'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 126
                echo "                        ";
            }
            // line 127
            echo "                    </h1>
                </div>
            ";
        }
        // line 130
        echo "
            <div class=\"row-fluid\">
                ";
        // line 132
        if ( !twig_test_empty((isset($context["_side_menu"]) ? $context["_side_menu"] : $this->getContext($context, "_side_menu")))) {
            // line 133
            echo "                    <div class=\"sidebar span2\">
                        <div class=\"well sonata-ba-side-menu\" style=\"padding: 8px 0;\">";
            // line 134
            echo (isset($context["_side_menu"]) ? $context["_side_menu"] : $this->getContext($context, "_side_menu"));
            echo "</div>
                    </div>
                ";
        }
        // line 137
        echo "
                <div class=\"content ";
        // line 138
        echo (( !twig_test_empty((isset($context["_side_menu"]) ? $context["_side_menu"] : $this->getContext($context, "_side_menu")))) ? (" span10") : ("span12"));
        echo "\">
                ";
        // line 139
        $this->displayBlock('sonata_admin_content', $context, $blocks);
        // line 167
        echo "                </div>


            </div>

           
        </div>
    </body>
</html>
";
    }

    // line 27
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 28
        echo "            <!-- jQuery code -->
            <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonatajquery/themes/flick/jquery-ui-1.8.16.custom.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />

            <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\"  />
            <link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/bootstrap/css/bootstrap-responsive.min.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />

            <!-- base application asset -->
            <link rel=\"stylesheet\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/css/layout.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
            <link rel=\"stylesheet\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/css/colors.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
        ";
    }

    // line 39
    public function block_javascripts($context, array $blocks = array())
    {
        // line 40
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonatajquery/jquery-1.8.3.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonatajquery/jquery-ui-1.8.23.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonatajquery/jquery-ui-i18n.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

            <script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

            <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/qtip/jquery.qtip-1.0.0-rc3.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/jquery/jquery.form.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/base.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        ";
    }

    // line 100
    public function block_notice($context, array $blocks = array())
    {
        // line 101
        echo "                ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(array(0 => "success", 1 => "error", 2 => "info", 3 => "warning"));
        foreach ($context['_seq'] as $context["_key"] => $context["notice_level"]) {
            // line 102
            echo "                    ";
            $context["session_var"] = ("sonata_flash_" . $context["notice_level"]);
            // line 103
            echo "                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => (isset($context["session_var"]) ? $context["session_var"] : $this->getContext($context, "session_var"))), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
                // line 104
                echo "                        <div class=\"alert ";
                echo twig_escape_filter($this->env, ("alert-" . $context["notice_level"]), "html", null, true);
                echo "\">
                            ";
                // line 105
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["flash"], array(), "SonataAdminBundle"), "html", null, true);
                echo "
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 108
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notice_level'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        echo "            ";
    }

    // line 112
    public function block_actions($context, array $blocks = array())
    {
    }

    // line 139
    public function block_sonata_admin_content($context, array $blocks = array())
    {
        // line 140
        echo "
                    ";
        // line 141
        if ( !twig_test_empty((isset($context["_preview"]) ? $context["_preview"] : $this->getContext($context, "_preview")))) {
            // line 142
            echo "                        <div class=\"sonata-ba-preview\">";
            echo (isset($context["_preview"]) ? $context["_preview"] : $this->getContext($context, "_preview"));
            echo "</div>
                    ";
        }
        // line 144
        echo "
                    ";
        // line 145
        if ( !twig_test_empty((isset($context["_content"]) ? $context["_content"] : $this->getContext($context, "_content")))) {
            // line 146
            echo "                        <div class=\"sonata-ba-content\">";
            echo (isset($context["_content"]) ? $context["_content"] : $this->getContext($context, "_content"));
            echo "</div>
                    ";
        }
        // line 148
        echo "
                    ";
        // line 149
        if ( !twig_test_empty((isset($context["_show"]) ? $context["_show"] : $this->getContext($context, "_show")))) {
            // line 150
            echo "                        <div class=\"sonata-ba-show\">";
            echo (isset($context["_show"]) ? $context["_show"] : $this->getContext($context, "_show"));
            echo "</div>
                    ";
        }
        // line 152
        echo "
                    ";
        // line 153
        if ( !twig_test_empty((isset($context["_form"]) ? $context["_form"] : $this->getContext($context, "_form")))) {
            // line 154
            echo "                        <div class=\"sonata-ba-form\">";
            echo (isset($context["_form"]) ? $context["_form"] : $this->getContext($context, "_form"));
            echo "</div>
                    ";
        }
        // line 156
        echo "
                    ";
        // line 157
        if (( !twig_test_empty((isset($context["_list_table"]) ? $context["_list_table"] : $this->getContext($context, "_list_table"))) ||  !twig_test_empty((isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters"))))) {
            // line 158
            echo "                        <div class=\"sonata-ba-filter\">
                            ";
            // line 159
            echo (isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters"));
            echo "
                        </div>
                        <div class=\"sonata-ba-list\">
                            ";
            // line 162
            echo (isset($context["_list_table"]) ? $context["_list_table"] : $this->getContext($context, "_list_table"));
            echo "
                        </div>
                    ";
        }
        // line 165
        echo "
                ";
    }

    public function getTemplateName()
    {
        return "AdmiScoBundle::standard_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  530 => 165,  524 => 162,  518 => 159,  515 => 158,  513 => 157,  510 => 156,  504 => 154,  502 => 153,  499 => 152,  493 => 150,  491 => 149,  488 => 148,  482 => 146,  480 => 145,  477 => 144,  471 => 142,  469 => 141,  466 => 140,  463 => 139,  458 => 112,  454 => 109,  448 => 108,  439 => 105,  434 => 104,  429 => 103,  426 => 102,  421 => 101,  418 => 100,  412 => 48,  408 => 47,  404 => 46,  399 => 44,  394 => 42,  390 => 41,  385 => 40,  382 => 39,  376 => 36,  372 => 35,  366 => 32,  362 => 31,  357 => 29,  354 => 28,  351 => 27,  338 => 167,  336 => 139,  332 => 138,  329 => 137,  323 => 134,  320 => 133,  318 => 132,  314 => 130,  309 => 127,  306 => 126,  292 => 125,  286 => 123,  283 => 122,  265 => 121,  263 => 120,  258 => 119,  256 => 118,  252 => 116,  250 => 115,  246 => 113,  244 => 112,  240 => 110,  238 => 100,  235 => 99,  231 => 97,  225 => 95,  222 => 94,  219 => 93,  205 => 92,  199 => 90,  194 => 87,  188 => 85,  180 => 83,  178 => 82,  175 => 81,  172 => 80,  154 => 79,  151 => 78,  149 => 77,  146 => 76,  144 => 75,  138 => 71,  132 => 69,  128 => 67,  125 => 66,  122 => 65,  105 => 63,  101 => 61,  98 => 60,  81 => 59,  78 => 58,  75 => 57,  69 => 55,  67 => 54,  62 => 52,  58 => 50,  56 => 39,  53 => 38,  51 => 27,  42 => 20,  40 => 19,  38 => 18,  36 => 17,  34 => 16,  32 => 15,  30 => 14,  28 => 13,  26 => 12,  24 => 11,);
    }
}
