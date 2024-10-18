<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* themes/contrib/uswds_base/templates/navigation/menu--primary_menu.html.twig */
class __TwigTemplate_64050203c5748410389bdb3ca70d7005 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 22
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 27
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::callMacro($macros["menus"], "macro_menu_links", [($context["items"] ?? null), 0, ($context["megamenu"] ?? null), 0, null, ($context["duplicate_parent"] ?? null), null, ($context["mega_display_second"] ?? null), ($context["attributes"] ?? null)], 27, $context, $this->getSourceContext()));
        yield "

";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["_self", "items", "megamenu", "duplicate_parent", "mega_display_second", "attributes", "parent", "menu_level", "button_id", "loop"]);        yield from [];
    }

    // line 29
    public function macro_menu_links($__items__ = null, $__menu_level__ = null, $__megamenu__ = null, $__button_id__ = null, $__parent__ = null, $__duplicate_parent__ = null, $__region__ = null, $__mega_display_second__ = null, $__attributes__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = [
            "items" => $__items__,
            "menu_level" => $__menu_level__,
            "megamenu" => $__megamenu__,
            "button_id" => $__button_id__,
            "parent" => $__parent__,
            "duplicate_parent" => $__duplicate_parent__,
            "region" => $__region__,
            "mega_display_second" => $__mega_display_second__,
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 30
            yield "  ";
            $macros["menus"] = $this;
            // line 31
            yield "
  ";
            // line 32
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["parent"] ?? null), "url", [], "any", false, false, true, 32), "getOption", ["attributes"], "method", false, false, true, 32)) {
                // line 33
                yield "    ";
                $context["link_attributes"] = $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["parent"] ?? null), "url", [], "any", false, false, true, 33), "getOption", ["attributes"], "method", false, false, true, 33), 33, $this->source));
                // line 34
                yield "  ";
            } else {
                // line 35
                yield "    ";
                $context["link_attributes"] = $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute();
                // line 36
                yield "  ";
            }
            // line 37
            yield "  
  ";
            // line 38
            $context["menu_item_type"] = "link";
            // line 39
            yield "
  ";
            // line 40
            $context["link_attributes"] = CoreExtension::getAttribute($this->env, $this->source, ($context["link_attributes"] ?? null), "addClass", [($context["menu_item_type"] ?? null)], "method", false, false, true, 40);
            // line 41
            yield "
  ";
            // line 42
            if (($context["items"] ?? null)) {
                // line 43
                yield "
    ";
                // line 44
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 45
                    yield "      <ul class=\"usa-nav__primary usa-accordion\">
    ";
                } elseif ((                // line 46
($context["megamenu"] ?? null) && (($context["menu_level"] ?? null) == 1))) {
                    // line 47
                    yield "      <div id=\"extended-mega-nav-section-";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["button_id"] ?? null), 47, $this->source), "html", null, true);
                    yield "\" class=\"usa-nav__submenu usa-megamenu\" hidden=\"\">

      ";
                    // line 49
                    if (($context["duplicate_parent"] ?? null)) {
                        // line 50
                        yield "        <div class=\"grid-row grid-gap-4\">
          <div class=\"desktop:grid-col-3\">
            <div class=\"usa-nav__submenu-item\">
              <h3>";
                        // line 53
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["parent"] ?? null), "title", [], "any", false, false, true, 53), 53, $this->source), $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["parent"] ?? null), "url", [], "any", false, false, true, 53), 53, $this->source), $this->sandbox->ensureToStringAllowed(($context["link_attributes"] ?? null), 53, $this->source)), "html", null, true);
                        yield "</h3>
            </div>
          </div>
        </div>
      ";
                    }
                    // line 58
                    yield "
      <div class=\"grid-row grid-gap-4\">
    ";
                } else {
                    // line 61
                    yield "      <ul id=\"basic-nav-section-";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["button_id"] ?? null), 61, $this->source), "html", null, true);
                    yield "\" class=\"usa-nav__submenu";
                    if ((($context["menu_level"] ?? null) > 1)) {
                        yield "-list";
                    }
                    yield "\"";
                    if ((($context["menu_level"] ?? null) == 1)) {
                        yield " hidden=\"\"";
                    }
                    yield ">

      ";
                    // line 63
                    if ((($context["duplicate_parent"] ?? null) && (($context["megamenu"] ?? null) == 0))) {
                        // line 64
                        yield "        <li class=\"usa-nav__submenu-item\">
          ";
                        // line 65
                        $context["parent_link_title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                            // line 66
                            yield "            <span class=\"usa-nav__submenu-heading\">";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["parent"] ?? null), "title", [], "any", false, false, true, 66), 66, $this->source), "html", null, true);
                            yield "</span>
          ";
                            yield from [];
                        })())) ? '' : new Markup($tmp, $this->env->getCharset());
                        // line 68
                        yield "          ";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(($context["parent_link_title"] ?? null), 68, $this->source), $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["parent"] ?? null), "url", [], "any", false, false, true, 68), 68, $this->source), $this->sandbox->ensureToStringAllowed(($context["link_attributes"] ?? null), 68, $this->source)), "html", null, true);
                        yield "
        </li>
      ";
                    }
                    // line 71
                    yield "    ";
                }
                // line 72
                yield "
    ";
                // line 73
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 74
                    yield "      ";
                    if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 74), "getOption", ["attributes"], "method", false, false, true, 74)) {
                        // line 75
                        yield "        ";
                        $context["link_attributes"] = $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 75), "getOption", ["attributes"], "method", false, false, true, 75), 75, $this->source));
                        // line 76
                        yield "      ";
                    } else {
                        // line 77
                        yield "        ";
                        $context["link_attributes"] = $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute();
                        // line 78
                        yield "      ";
                    }
                    // line 79
                    yield "
      ";
                    // line 80
                    if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 80), "isRouted", [], "any", false, false, true, 80) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 80), "routeName", [], "any", false, false, true, 80) == "<nolink>"))) {
                        // line 81
                        yield "        ";
                        $context["menu_item_type"] = "nolink";
                        // line 82
                        yield "      ";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 82), "isRouted", [], "any", false, false, true, 82) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 82), "routeName", [], "any", false, false, true, 82) == "<button>"))) {
                        // line 83
                        yield "        ";
                        $context["menu_item_type"] = "button";
                        // line 84
                        yield "      ";
                    } else {
                        // line 85
                        yield "        ";
                        $context["menu_item_type"] = "link";
                        // line 86
                        yield "      ";
                    }
                    // line 87
                    yield "
      ";
                    // line 88
                    $context["link_attributes"] = CoreExtension::getAttribute($this->env, $this->source, ($context["link_attributes"] ?? null), "addClass", [($context["menu_item_type"] ?? null)], "method", false, false, true, 88);
                    // line 89
                    yield "
      ";
                    // line 90
                    if ((($context["megamenu"] ?? null) && (($context["menu_level"] ?? null) == 1))) {
                        // line 91
                        yield "        <div class=\"desktop:grid-col-3\">

        ";
                        // line 93
                        if ((($context["mega_display_second"] ?? null) && CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 93))) {
                            // line 94
                            yield "          <div class=\"usa-nav__submenu-item\">
            ";
                            // line 95
                            $context["link_title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                                // line 96
                                yield "              <span class=\"usa-nav__submenu-heading\">";
                                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 96), 96, $this->source), "html", null, true);
                                yield "</span>
            ";
                                yield from [];
                            })())) ? '' : new Markup($tmp, $this->env->getCharset());
                            // line 98
                            yield "            ";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(($context["link_title"] ?? null), 98, $this->source), $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 98), 98, $this->source), $this->sandbox->ensureToStringAllowed(($context["link_attributes"] ?? null), 98, $this->source)), "html", null, true);
                            yield "
          </div>
        ";
                        }
                        // line 101
                        yield "      ";
                    } else {
                        // line 102
                        yield "        <li class=\"";
                        if ((($context["menu_level"] ?? null) == 0)) {
                            yield "usa-nav__primary-item";
                        } else {
                            yield "usa-nav__submenu-item";
                        }
                        yield "\">
      ";
                    }
                    // line 104
                    yield "
      ";
                    // line 105
                    if (((($context["menu_level"] ?? null) == 0) && CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 105))) {
                        // line 106
                        yield "        <button type=\"button\" class=\"usa-accordion__button usa-nav__link ";
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "in_active_trail", [], "any", false, false, true, 106)) {
                            yield "usa-current";
                        }
                        yield "\" aria-expanded=\"false\" aria-controls=\"";
                        if (($context["megamenu"] ?? null)) {
                            yield "extended-mega-nav-section-";
                        } else {
                            yield "basic-nav-section-";
                        }
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 106), 106, $this->source), "html", null, true);
                        yield "\">
          <span>";
                        // line 107
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 107), 107, $this->source), "html", null, true);
                        yield "</span>
        </button>
      ";
                    }
                    // line 110
                    yield "
      ";
                    // line 111
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 111) && ((($context["megamenu"] ?? null) && (($context["menu_level"] ?? null) == 1)) || (($context["menu_level"] ?? null) == 0)))) {
                        // line 112
                        yield "        ";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::callMacro($macros["menus"], "macro_menu_links", [CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 112), (($context["menu_level"] ?? null) + 1), ($context["megamenu"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 112), $context["item"], ($context["duplicate_parent"] ?? null), null, ($context["mega_display_second"] ?? null), ($context["attributes"] ?? null)], 112, $context, $this->getSourceContext()));
                        yield "
      ";
                    } else {
                        // line 114
                        yield "        ";
                        if ((($context["megamenu"] ?? null) && (($context["menu_level"] ?? null) == 1))) {
                            // line 115
                            yield "          <div class=\"usa-nav__submenu-item\">
        ";
                        }
                        // line 117
                        yield "
        ";
                        // line 119
                        $context["item_classes"] = ["usa-nav__link", ((CoreExtension::getAttribute($this->env, $this->source,                         // line 121
$context["item"], "in_active_trail", [], "any", false, false, true, 121)) ? ("usa-current") : (""))];
                        // line 124
                        yield "
        ";
                        // line 125
                        if ((($context["menu_level"] ?? null) == 0)) {
                            // line 126
                            yield "          ";
                            $context["link_attributes"] = CoreExtension::getAttribute($this->env, $this->source, ($context["link_attributes"] ?? null), "addClass", [($context["item_classes"] ?? null)], "method", false, false, true, 126);
                            // line 127
                            yield "        ";
                        }
                        // line 128
                        yield "        ";
                        $context["link_title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                            // line 129
                            yield "          <span>";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 129), 129, $this->source), "html", null, true);
                            yield "</span>
        ";
                            yield from [];
                        })())) ? '' : new Markup($tmp, $this->env->getCharset());
                        // line 131
                        yield "        ";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(($context["link_title"] ?? null), 131, $this->source), $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 131), 131, $this->source), $this->sandbox->ensureToStringAllowed(($context["link_attributes"] ?? null), 131, $this->source)), "html", null, true);
                        yield "
        ";
                        // line 132
                        if ((($context["megamenu"] ?? null) && (($context["menu_level"] ?? null) == 1))) {
                            // line 133
                            yield "          </div>
        ";
                        }
                        // line 135
                        yield "      ";
                    }
                    // line 136
                    yield "
      ";
                    // line 137
                    if ((($context["megamenu"] ?? null) && (($context["menu_level"] ?? null) == 1))) {
                        // line 138
                        yield "        </div>
      ";
                    } else {
                        // line 140
                        yield "        </li>
      ";
                    }
                    // line 142
                    yield "
    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 144
                yield "
    ";
                // line 145
                if ((($context["megamenu"] ?? null) && (($context["menu_level"] ?? null) == 1))) {
                    // line 146
                    yield "      </div>
      </div>
    ";
                } else {
                    // line 149
                    yield "      </ul>
    ";
                }
                // line 151
                yield "
  ";
            }
            // line 153
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/contrib/uswds_base/templates/navigation/menu--primary_menu.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  420 => 153,  416 => 151,  412 => 149,  407 => 146,  405 => 145,  402 => 144,  387 => 142,  383 => 140,  379 => 138,  377 => 137,  374 => 136,  371 => 135,  367 => 133,  365 => 132,  360 => 131,  353 => 129,  350 => 128,  347 => 127,  344 => 126,  342 => 125,  339 => 124,  337 => 121,  336 => 119,  333 => 117,  329 => 115,  326 => 114,  320 => 112,  318 => 111,  315 => 110,  309 => 107,  295 => 106,  293 => 105,  290 => 104,  280 => 102,  277 => 101,  270 => 98,  263 => 96,  261 => 95,  258 => 94,  256 => 93,  252 => 91,  250 => 90,  247 => 89,  245 => 88,  242 => 87,  239 => 86,  236 => 85,  233 => 84,  230 => 83,  227 => 82,  224 => 81,  222 => 80,  219 => 79,  216 => 78,  213 => 77,  210 => 76,  207 => 75,  204 => 74,  187 => 73,  184 => 72,  181 => 71,  174 => 68,  167 => 66,  165 => 65,  162 => 64,  160 => 63,  146 => 61,  141 => 58,  133 => 53,  128 => 50,  126 => 49,  120 => 47,  118 => 46,  115 => 45,  113 => 44,  110 => 43,  108 => 42,  105 => 41,  103 => 40,  100 => 39,  98 => 38,  95 => 37,  92 => 36,  89 => 35,  86 => 34,  83 => 33,  81 => 32,  78 => 31,  75 => 30,  55 => 29,  46 => 27,  44 => 22,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/contrib/uswds_base/templates/navigation/menu--primary_menu.html.twig", "/app/web/themes/contrib/uswds_base/templates/navigation/menu--primary_menu.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 22, "macro" => 29, "if" => 32, "set" => 33, "for" => 73);
        static $filters = array("escape" => 47);
        static $functions = array("create_attribute" => 33, "link" => 53);

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'if', 'set', 'for'],
                ['escape'],
                ['create_attribute', 'link'],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
