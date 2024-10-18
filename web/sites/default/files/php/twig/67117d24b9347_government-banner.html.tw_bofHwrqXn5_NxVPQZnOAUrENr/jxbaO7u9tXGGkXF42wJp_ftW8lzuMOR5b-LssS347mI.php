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

/* themes/contrib/uswds_base/templates/uswds/government-banner.html.twig */
class __TwigTemplate_646c8078df407caad449cf329f4d7c7d extends Template
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
        // line 1
        $context["lock"] = ('' === $tmp = "  <span class=\"icon-lock\">
    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"52\" height=\"64\" viewBox=\"0 0 52 64\" class=\"usa-banner__lock-image\" role=\"img\" aria-labelledby=\"banner-lock-description\" focusable=\"false\">
      <title id=\"banner-lock-title\">Lock</title>
      <desc id=\"banner-lock-description\">Locked padlock</desc>
      <path fill=\"#000000\" fill-rule=\"evenodd\" d=\"M26 0c10.493 0 19 8.507 19 19v9h3a4 4 0 0 1 4 4v28a4 4 0 0 1-4 4H4a4 4 0 0 1-4-4V32a4 4 0 0 1 4-4h3v-9C7 8.507 15.507 0 26 0zm0 8c-5.979 0-10.843 4.77-10.996 10.712L15 19v9h22v-9c0-6.075-4.925-11-11-11z\"/>
    </svg>
  </span>
") ? '' : new Markup($tmp, $this->env->getCharset());
        // line 10
        yield "
<div class=\"usa-banner\">
  <div class=\"usa-accordion\">
    <header class=\"usa-banner__header\">
      <div class=\"usa-banner__inner\">
        <div class=\"grid-col-auto\">
          <img class=\"usa-banner__header-flag\" aria-hidden=\"true\" src=\"";
        // line 16
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["uswds_images"] ?? null), 16, $this->source), "html", null, true);
        yield "us_flag_small.png\" alt=\"\">
        </div>
        <div class=\"grid-col-fill tablet:grid-col-auto\" aria-hidden=\"true\">
          <p class=\"usa-banner__header-text\">";
        // line 19
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("An official website of the United States government"));
        yield "</p>
          <p class=\"usa-banner__header-action\" aria-hidden=\"true\">";
        // line 20
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Here's how you know"));
        yield "</p>
        </div>
        <button type=\"button\" class=\"usa-accordion__button usa-banner__button\" aria-expanded=\"false\" aria-controls=\"gov-banner\">
          <span class=\"usa-banner__button-text\">";
        // line 23
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Here's how you know"));
        yield "</span>
        </button>
      </div>
    </header>
    <div class=\"usa-banner__content usa-accordion__content\" id=\"gov-banner\" hidden=\"\">
      <div class=\"grid-row grid-gap-lg\">
        <div class=\"usa-banner__guidance tablet:grid-col-6\">
          <img class=\"usa-banner__icon usa-media-block__img\" src=\"";
        // line 30
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["uswds_images"] ?? null), 30, $this->source), "html", null, true);
        yield "icon-dot-gov.svg\" alt=\"Dot gov\">
          <div class=\"usa-media-block__body\">
            <p>
              <strong>";
        // line 33
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Official websites use .gov"));
        yield "</strong>
              <br>
              ";
        // line 35
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("A <strong>.gov</strong> website belongs to an official government organization in the United States."));
        yield "
            </p>
          </div>
        </div>
        <div class=\"usa-banner__guidance tablet:grid-col-6\">
          <img class=\"usa-banner__icon usa-media-block__img\" src=\"";
        // line 40
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["uswds_images"] ?? null), 40, $this->source), "html", null, true);
        yield "icon-https.svg\" alt=\"Https\">
          <div class=\"usa-media-block__body\">
            <p>
              <strong>";
        // line 43
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Secure .gov websites use HTTPS"));
        yield "</strong>
              <br>
              ";
        // line 45
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("A <strong>lock</strong> ("));
        yield " ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["lock"] ?? null), 45, $this->source), "html", null, true);
        yield " ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t(") or <strong>https://</strong> means you’ve safely connected to the .gov website. Share sensitive information only on official, secure websites."));
        yield "
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["uswds_images"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/contrib/uswds_base/templates/uswds/government-banner.html.twig";
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
        return array (  117 => 45,  112 => 43,  106 => 40,  98 => 35,  93 => 33,  87 => 30,  77 => 23,  71 => 20,  67 => 19,  61 => 16,  53 => 10,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/contrib/uswds_base/templates/uswds/government-banner.html.twig", "/app/web/themes/contrib/uswds_base/templates/uswds/government-banner.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1);
        static $filters = array("escape" => 16, "t" => 19);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['escape', 't'],
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
