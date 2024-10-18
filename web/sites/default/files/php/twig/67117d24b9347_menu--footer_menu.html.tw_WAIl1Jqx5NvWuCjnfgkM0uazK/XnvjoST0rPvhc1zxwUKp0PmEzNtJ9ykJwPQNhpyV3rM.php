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

/* themes/contrib/uswds_base/templates/navigation/menu--footer_menu.html.twig */
class __TwigTemplate_4d55fe06b35ecc39e8e8a7c0bd7d147e extends Template
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
        // line 7
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 12
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::callMacro($macros["menus"], "macro_menu_links", [($context["items"] ?? null), 0, ($context["footer_style"] ?? null), ($context["attributes"] ?? null)], 12, $context, $this->getSourceContext()));
        yield "

";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["_self", "items", "footer_style", "attributes", "menu_level"]);        yield from [];
    }

    // line 14
    public function macro_menu_links($__items__ = null, $__menu_level__ = null, $__footer_style__ = null, $__attributes__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = [
            "items" => $__items__,
            "menu_level" => $__menu_level__,
            "footer_style" => $__footer_style__,
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 15
            yield "  ";
            $macros["menus"] = $this;
            // line 16
            yield "  ";
            if (($context["items"] ?? null)) {
                // line 17
                yield "
    ";
                // line 18
                if (((($context["footer_style"] ?? null) == "big") && (($context["menu_level"] ?? null) == 0))) {
                    // line 19
                    yield "      <div class=\"tablet:grid-col-12\">
    ";
                } elseif (((                // line 20
($context["footer_style"] ?? null) == "slim") && (($context["menu_level"] ?? null) == 0))) {
                    // line 21
                    yield "        <div class=\"tablet:grid-col-8\">
    ";
                }
                // line 23
                yield "    ";
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 24
                    yield "              <nav class=\"usa-footer__nav\">
    ";
                }
                // line 26
                yield "
    ";
                // line 27
                if (((($context["menu_level"] ?? null) == 0) && (($context["footer_style"] ?? null) == "big"))) {
                    // line 28
                    yield "              <div class=\"grid-row grid-gap-4\">
    ";
                }
                // line 30
                yield "
    ";
                // line 31
                if (((($context["menu_level"] ?? null) == 0) && (($context["footer_style"] ?? null) != "big"))) {
                    // line 32
                    yield "      <ul class=\"add-list-reset grid-row grid-gap\">
    ";
                } elseif ((                // line 33
($context["footer_style"] ?? null) != "big")) {
                    // line 34
                    yield "      <ul class=\"usa-unstyled--list\">
    ";
                }
                // line 36
                yield "
    ";
                // line 37
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 38
                    yield "      ";
                    if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 38), "getOption", ["attributes"], "method", false, false, true, 38)) {
                        // line 39
                        yield "        ";
                        $context["link_attributes"] = $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 39), "getOption", ["attributes"], "method", false, false, true, 39), 39, $this->source));
                        // line 40
                        yield "      ";
                    } else {
                        // line 41
                        yield "        ";
                        $context["link_attributes"] = $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute();
                        // line 42
                        yield "      ";
                    }
                    // line 43
                    yield "
      ";
                    // line 44
                    if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 44), "isRouted", [], "any", false, false, true, 44) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 44), "routeName", [], "any", false, false, true, 44) == "<nolink>"))) {
                        // line 45
                        yield "        ";
                        $context["menu_item_type"] = "nolink";
                        // line 46
                        yield "      ";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 46), "isRouted", [], "any", false, false, true, 46) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 46), "routeName", [], "any", false, false, true, 46) == "<button>"))) {
                        // line 47
                        yield "        ";
                        $context["menu_item_type"] = "button";
                        // line 48
                        yield "      ";
                    } else {
                        // line 49
                        yield "        ";
                        $context["menu_item_type"] = "link";
                        // line 50
                        yield "      ";
                    }
                    // line 51
                    yield "
      ";
                    // line 52
                    $context["link_attributes"] = CoreExtension::getAttribute($this->env, $this->source, ($context["link_attributes"] ?? null), "addClass", [($context["menu_item_type"] ?? null)], "method", false, false, true, 52);
                    // line 53
                    yield "
      ";
                    // line 54
                    if (((($context["menu_level"] ?? null) == 0) && (($context["footer_style"] ?? null) == "big"))) {
                        // line 55
                        yield "        <div class=\"mobile-lg:grid-col-6 desktop:grid-col\">
          <section class=\"usa-footer__primary-content usa-footer__primary-content--collapsible\">
            ";
                        // line 57
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 57), 57, $this->source), $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 57), 57, $this->source), $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["link_attributes"] ?? null), "addClass", ["usa-footer__primary-link"], "method", false, false, true, 57), "addClass", ["text-bold"], "method", false, false, true, 57), 57, $this->source)), "html", null, true);
                        yield "
            <ul class=\"usa-list usa-list--unstyled\">
              ";
                        // line 59
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 59)) {
                            // line 60
                            yield "                ";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::callMacro($macros["menus"], "macro_menu_links", [CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 60), 1, ($context["footer_style"] ?? null), ($context["link_attributes"] ?? null)], 60, $context, $this->getSourceContext()));
                            yield "
              ";
                        }
                        // line 62
                        yield "            </ul>
          </section>
        </div>
      ";
                    } elseif ((                    // line 65
($context["footer_style"] ?? null) == "big")) {
                        // line 66
                        yield "        <li class=\"usa-footer__secondary-link\">
            ";
                        // line 67
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 67), 67, $this->source), $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 67), 67, $this->source), $this->sandbox->ensureToStringAllowed(($context["link_attributes"] ?? null), 67, $this->source)), "html", null, true);
                        yield "
        </li>
      ";
                    } elseif ((                    // line 69
($context["footer_style"] ?? null) == "medium")) {
                        // line 70
                        yield "        <li class=\"mobile-lg:grid-col-4 desktop:grid-col-2 usa-footer__primary-content\">
            ";
                        // line 71
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 71), 71, $this->source), $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 71), 71, $this->source), $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["link_attributes"] ?? null), "addClass", ["usa-footer__primary-link"], "method", false, false, true, 71), 71, $this->source)), "html", null, true);
                        yield "
        </li>
      ";
                    } else {
                        // line 74
                        yield "        <li class=\"mobile-lg:grid-col-6 desktop:grid-col-auto usa-footer__primary-content\">
            ";
                        // line 75
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 75), 75, $this->source), $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 75), 75, $this->source), $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["link_attributes"] ?? null), "addClass", ["usa-footer__primary-link"], "method", false, false, true, 75), 75, $this->source)), "html", null, true);
                        yield "
        </li>
      ";
                    }
                    // line 78
                    yield "    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 79
                yield "
    ";
                // line 80
                if (((($context["footer_style"] ?? null) == "big") && (($context["menu_level"] ?? null) == 0))) {
                    // line 81
                    yield "      </div>
    ";
                } elseif (((                // line 82
($context["footer_style"] ?? null) == "slim") && (($context["menu_level"] ?? null) == 0))) {
                    // line 83
                    yield "      </div>
    ";
                }
                // line 85
                yield "    ";
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 86
                    yield "      </nav>
    ";
                }
                // line 88
                yield "
    ";
                // line 89
                if (((($context["menu_level"] ?? null) == 0) && (($context["footer_style"] ?? null) == "big"))) {
                    // line 90
                    yield "      </div>
    ";
                }
                // line 92
                yield "
    ";
                // line 93
                if (((($context["menu_level"] ?? null) == 0) && (($context["footer_style"] ?? null) != "big"))) {
                    // line 94
                    yield "      </ul>
    ";
                } elseif ((                // line 95
($context["footer_style"] ?? null) != "big")) {
                    // line 96
                    yield "      </ul>
    ";
                }
                // line 98
                yield "
  ";
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/contrib/uswds_base/templates/navigation/menu--footer_menu.html.twig";
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
        return array (  277 => 98,  273 => 96,  271 => 95,  268 => 94,  266 => 93,  263 => 92,  259 => 90,  257 => 89,  254 => 88,  250 => 86,  247 => 85,  243 => 83,  241 => 82,  238 => 81,  236 => 80,  233 => 79,  227 => 78,  221 => 75,  218 => 74,  212 => 71,  209 => 70,  207 => 69,  202 => 67,  199 => 66,  197 => 65,  192 => 62,  186 => 60,  184 => 59,  179 => 57,  175 => 55,  173 => 54,  170 => 53,  168 => 52,  165 => 51,  162 => 50,  159 => 49,  156 => 48,  153 => 47,  150 => 46,  147 => 45,  145 => 44,  142 => 43,  139 => 42,  136 => 41,  133 => 40,  130 => 39,  127 => 38,  123 => 37,  120 => 36,  116 => 34,  114 => 33,  111 => 32,  109 => 31,  106 => 30,  102 => 28,  100 => 27,  97 => 26,  93 => 24,  90 => 23,  86 => 21,  84 => 20,  81 => 19,  79 => 18,  76 => 17,  73 => 16,  70 => 15,  55 => 14,  46 => 12,  44 => 7,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/contrib/uswds_base/templates/navigation/menu--footer_menu.html.twig", "/app/web/themes/contrib/uswds_base/templates/navigation/menu--footer_menu.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 7, "macro" => 14, "if" => 16, "for" => 37, "set" => 39);
        static $filters = array("escape" => 57);
        static $functions = array("create_attribute" => 39, "link" => 57);

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'if', 'for', 'set'],
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
