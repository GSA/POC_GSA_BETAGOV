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

/* themes/contrib/uswds_base/templates/block/block--search-form-block.html.twig */
class __TwigTemplate_3c2391c59f23c3c473f0ca5cb00b81f8 extends Template
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
        // line 29
        yield "<form class=\"usa-search usa-search--small\" action=\"/search/node\" method=\"get\" id=\"search-block-form\" accept-charset=\"UTF-8\">
  <div role=\"search\">
    ";
        // line 31
        if (( !Twig\Extension\CoreExtension::testEmpty(($context["title"] ?? null)) || ($context["required"] ?? null))) {
            // line 32
            yield "<label class=\"usa-sr-only\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 32, $this->source), "html", null, true);
            yield "</label>";
        }
        // line 34
        yield "
    <input class=\"usa-input\" id=\"extended-search-field-small\" type=\"search\" name=\"keys\" />
    <button class=\"usa-button\" type=\"submit\">
      <img src=\"";
        // line 37
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["uswds_images"] ?? null), 37, $this->source), "html", null, true);
        yield "usa-icons-bg/search--white.svg\" class=\"usa-search__submit-icon\" alt=\"Search\">
    </button>
  </div>
</form>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["title", "required", "uswds_images"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/contrib/uswds_base/templates/block/block--search-form-block.html.twig";
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
        return array (  60 => 37,  55 => 34,  50 => 32,  48 => 31,  44 => 29,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/contrib/uswds_base/templates/block/block--search-form-block.html.twig", "/app/web/themes/contrib/uswds_base/templates/block/block--search-form-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 31);
        static $filters = array("escape" => 32);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
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
