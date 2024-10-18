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

/* themes/contrib/uswds_base/templates/navigation/menu--secondary_menu.html.twig */
class __TwigTemplate_d24b459848c1301e5e85a41783cd3f27 extends Template
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
        // line 8
        yield "
";
        // line 13
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::callMacro($macros["menus"], "macro_menu_links", [($context["items"] ?? null), 0, ($context["footer_style"] ?? null), ($context["attributes"] ?? null)], 13, $context, $this->getSourceContext()));
        yield "

";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["_self", "items", "footer_style", "attributes", "search_item"]);        yield from [];
    }

    // line 15
    public function macro_menu_links($__items__ = null, $__menu_level__ = null, $__attributes__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = [
            "items" => $__items__,
            "menu_level" => $__menu_level__,
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 16
            yield "  ";
            $macros["menus"] = $this;
            // line 17
            yield "  ";
            if (($context["items"] ?? null)) {
                // line 18
                yield "
    <ul class=\"usa-nav__secondary-links\">

      ";
                // line 21
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["search_item"] ?? null), 21, $this->source));
                yield "
      ";
                // line 22
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 23
                    yield "        ";
                    if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 23), "getOption", ["attributes"], "method", false, false, true, 23)) {
                        // line 24
                        yield "          ";
                        $context["link_attributes"] = $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 24), "getOption", ["attributes"], "method", false, false, true, 24), 24, $this->source));
                        // line 25
                        yield "        ";
                    } else {
                        // line 26
                        yield "          ";
                        $context["link_attributes"] = $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute();
                        // line 27
                        yield "        ";
                    }
                    // line 28
                    yield "
        ";
                    // line 29
                    if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 29), "isRouted", [], "any", false, false, true, 29) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 29), "routeName", [], "any", false, false, true, 29) == "<nolink>"))) {
                        // line 30
                        yield "          ";
                        $context["menu_item_type"] = "nolink";
                        // line 31
                        yield "        ";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 31), "isRouted", [], "any", false, false, true, 31) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 31), "routeName", [], "any", false, false, true, 31) == "<button>"))) {
                        // line 32
                        yield "          ";
                        $context["menu_item_type"] = "button";
                        // line 33
                        yield "        ";
                    } else {
                        // line 34
                        yield "          ";
                        $context["menu_item_type"] = "link";
                        // line 35
                        yield "        ";
                    }
                    // line 36
                    yield "
        ";
                    // line 37
                    $context["link_attributes"] = CoreExtension::getAttribute($this->env, $this->source, ($context["link_attributes"] ?? null), "addClass", [($context["menu_item_type"] ?? null)], "method", false, false, true, 37);
                    // line 38
                    yield "
        ";
                    // line 39
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "in_active_trail", [], "any", false, false, true, 39)) {
                        // line 40
                        yield "          ";
                        $context["link_attributes"] = CoreExtension::getAttribute($this->env, $this->source, ($context["link_attributes"] ?? null), "addClass", ["usa-current"], "method", false, false, true, 40);
                        // line 41
                        yield "        ";
                    }
                    // line 42
                    yield "        <li class=\"usa-nav__secondary-item\">
          ";
                    // line 43
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 43), 43, $this->source), $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 43), 43, $this->source), $this->sandbox->ensureToStringAllowed(($context["link_attributes"] ?? null), 43, $this->source)), "html", null, true);
                    yield "
        </li>
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 46
                yield "
    </ul>
  ";
            }
            // line 49
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
        return "themes/contrib/uswds_base/templates/navigation/menu--secondary_menu.html.twig";
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
        return array (  162 => 49,  157 => 46,  148 => 43,  145 => 42,  142 => 41,  139 => 40,  137 => 39,  134 => 38,  132 => 37,  129 => 36,  126 => 35,  123 => 34,  120 => 33,  117 => 32,  114 => 31,  111 => 30,  109 => 29,  106 => 28,  103 => 27,  100 => 26,  97 => 25,  94 => 24,  91 => 23,  87 => 22,  83 => 21,  78 => 18,  75 => 17,  72 => 16,  58 => 15,  49 => 13,  46 => 8,  44 => 7,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/contrib/uswds_base/templates/navigation/menu--secondary_menu.html.twig", "/app/web/themes/contrib/uswds_base/templates/navigation/menu--secondary_menu.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 7, "macro" => 15, "if" => 17, "for" => 22, "set" => 24);
        static $filters = array("raw" => 21, "escape" => 43);
        static $functions = array("create_attribute" => 24, "link" => 43);

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'if', 'for', 'set'],
                ['raw', 'escape'],
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
