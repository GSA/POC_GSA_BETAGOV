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

/* themes/contrib/uswds_base/templates/form/form-element.html.twig */
class __TwigTemplate_f364554270cdfa592ebf39d181c85028 extends Template
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
        // line 51
        $context["classes"] = ["form-item", "js-form-item", ("form-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 54
($context["type"] ?? null), 54, $this->source))), ("js-form-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 55
($context["type"] ?? null), 55, $this->source))), ("form-item-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 56
($context["name"] ?? null), 56, $this->source))), ("js-form-item-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 57
($context["name"] ?? null), 57, $this->source))), ((!CoreExtension::inFilter(        // line 58
($context["title_display"] ?? null), ["after", "before"])) ? ("form-no-label") : ("")), (((        // line 59
($context["disabled"] ?? null) == "disabled")) ? ("form-disabled") : ("")), ((        // line 60
($context["is_form_group"] ?? null)) ? ("form-group") : ("")), (((        // line 61
($context["type"] ?? null) == "radio")) ? ("radio") : ("")), (((        // line 62
($context["type"] ?? null) == "checkbox")) ? ("checkbox") : ("")), (((        // line 63
($context["type"] ?? null) == "autocomplete")) ? ("form-autocomplete") : ("")), ((        // line 64
($context["has_error"] ?? null)) ? ("error has-error") : (""))];
        // line 68
        $context["description_classes"] = ["description", "help-block", (((        // line 71
($context["description_display"] ?? null) == "invisible")) ? ("usa-sr-only") : (""))];
        // line 74
        yield "<div";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 74), 74, $this->source), "html", null, true);
        yield ">
  ";
        // line 75
        if (CoreExtension::inFilter(($context["label_display"] ?? null), ["before", "invisible"])) {
            // line 76
            yield "    ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 76, $this->source), "html", null, true);
            yield "
  ";
        }
        // line 78
        yield "  ";
        if (( !Twig\Extension\CoreExtension::testEmpty(($context["prefix"] ?? null)) ||  !Twig\Extension\CoreExtension::testEmpty(($context["suffix"] ?? null)))) {
            // line 79
            yield "  <div class=\"usa-input-group\">
    ";
        }
        // line 81
        yield "  ";
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["prefix"] ?? null))) {
            // line 82
            yield "    <span class=\"field-prefix usa-input-prefix\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["prefix"] ?? null), 82, $this->source), "html", null, true);
            yield "</span>
  ";
        }
        // line 84
        yield "  ";
        if (((($context["description_display"] ?? null) == "before") && CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 84))) {
            // line 85
            yield "    <div";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 85), "addClass", [($context["description_classes"] ?? null)], "method", false, false, true, 85), 85, $this->source), "html", null, true);
            yield ">
      ";
            // line 86
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 86), 86, $this->source), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 89
        yield "  ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 89, $this->source), "html", null, true);
        yield "
  ";
        // line 90
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["suffix"] ?? null))) {
            // line 91
            yield "    <span class=\"field-suffix usa-input-suffix\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["suffix"] ?? null), 91, $this->source), "html", null, true);
            yield "</span>
  ";
        }
        // line 93
        yield "    ";
        if (( !Twig\Extension\CoreExtension::testEmpty(($context["prefix"] ?? null)) ||  !Twig\Extension\CoreExtension::testEmpty(($context["suffix"] ?? null)))) {
            // line 94
            yield "  </div>
  ";
        }
        // line 96
        yield "  ";
        if ((($context["label_display"] ?? null) == "after")) {
            // line 97
            yield "    ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 97, $this->source), "html", null, true);
            yield "
  ";
        }
        // line 99
        yield "
  ";
        // line 100
        if (($context["errors"] ?? null)) {
            // line 101
            yield "    <div class=\"usa-error-message\" role=\"alert\">
      ";
            // line 102
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["errors"] ?? null), 102, $this->source), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 105
        yield "
  ";
        // line 106
        if ((CoreExtension::inFilter(($context["description_display"] ?? null), ["after", "invisible"]) && CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 106))) {
            // line 107
            yield "    <div";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 107), "addClass", [($context["description_classes"] ?? null)], "method", false, false, true, 107), 107, $this->source), "html", null, true);
            yield ">
      ";
            // line 108
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 108), 108, $this->source), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 111
        yield "</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["type", "name", "title_display", "disabled", "is_form_group", "has_error", "description_display", "attributes", "label_display", "label", "prefix", "suffix", "description", "children", "errors"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/contrib/uswds_base/templates/form/form-element.html.twig";
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
        return array (  162 => 111,  156 => 108,  151 => 107,  149 => 106,  146 => 105,  140 => 102,  137 => 101,  135 => 100,  132 => 99,  126 => 97,  123 => 96,  119 => 94,  116 => 93,  110 => 91,  108 => 90,  103 => 89,  97 => 86,  92 => 85,  89 => 84,  83 => 82,  80 => 81,  76 => 79,  73 => 78,  67 => 76,  65 => 75,  60 => 74,  58 => 71,  57 => 68,  55 => 64,  54 => 63,  53 => 62,  52 => 61,  51 => 60,  50 => 59,  49 => 58,  48 => 57,  47 => 56,  46 => 55,  45 => 54,  44 => 51,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/contrib/uswds_base/templates/form/form-element.html.twig", "/app/web/themes/contrib/uswds_base/templates/form/form-element.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 51, "if" => 75);
        static $filters = array("clean_class" => 54, "escape" => 74);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape'],
                [],
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
