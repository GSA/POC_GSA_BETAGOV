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

/* themes/contrib/uswds_base/templates/layout/page.html.twig */
class __TwigTemplate_fded0a189cf0b100bcfece40f894e4d5 extends Template
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
            'government_banner' => [$this, 'block_government_banner'],
            'header' => [$this, 'block_header'],
            'hero' => [$this, 'block_hero'],
            'main' => [$this, 'block_main'],
            'breadcrumb' => [$this, 'block_breadcrumb'],
            'highlighted' => [$this, 'block_highlighted'],
            'help' => [$this, 'block_help'],
            'sidebar_first' => [$this, 'block_sidebar_first'],
            'content' => [$this, 'block_content'],
            'sidebar_second' => [$this, 'block_sidebar_second'],
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 51
        if (($context["government_banner"] ?? null)) {
            // line 52
            yield "  ";
            yield from $this->unwrap()->yieldBlock('government_banner', $context, $blocks);
        }
        // line 58
        yield "
<div class=\"usa-overlay\"></div>

";
        // line 61
        yield from $this->unwrap()->yieldBlock('header', $context, $blocks);
        // line 118
        yield "
";
        // line 119
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "hero", [], "any", false, false, true, 119)) {
            // line 120
            yield "  ";
            yield from $this->unwrap()->yieldBlock('hero', $context, $blocks);
        }
        // line 128
        yield "
";
        // line 129
        yield from $this->unwrap()->yieldBlock('main', $context, $blocks);
        // line 186
        yield "
";
        // line 187
        yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["government_banner", "page", "header_classes", "header_basic", "header_extended", "uswds_images", "main_classes", "footer_classes", "display_footer_primary", "footer_style", "footer_slim", "footer_phone", "footer_email", "display_footer_secondary", "display_footer_agency", "footer_agency_url", "footer_agency_logo", "footer_agency_name", "facebook", "twitter", "instagram", "linkedin", "youtube", "rss", "contact_center", "phone", "email"]);        yield from [];
    }

    // line 52
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_government_banner(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 53
        yield "    <section class=\"usa-banner\" aria-label=\"Official website of the United States government\">
      ";
        // line 54
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["government_banner"] ?? null), 54, $this->source), "html", null, true);
        yield "
    </section>
  ";
        yield from [];
    }

    // line 61
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 62
        yield "  <header class=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_classes"] ?? null), 62, $this->source), "html", null, true);
        yield "\" id=\"header\" role=\"banner\">

  ";
        // line 64
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_top", [], "any", false, false, true, 64)) {
            // line 65
            yield "    <div class=\"usa-banner-inner\">
      ";
            // line 66
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_top", [], "any", false, false, true, 66), 66, $this->source), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 69
        yield "
  ";
        // line 70
        if (($context["header_basic"] ?? null)) {
            // line 71
            yield "  <div class=\"usa-nav-container\">
    ";
        }
        // line 73
        yield "
    ";
        // line 74
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 74), 74, $this->source), "html", null, true);
        yield "

    <nav class=\"usa-nav\" role=\"navigation\">
      ";
        // line 77
        if (($context["header_extended"] ?? null)) {
            // line 78
            yield "      <div class=\"usa-nav__inner\">
        ";
        }
        // line 80
        yield "
        <button type=\"button\" class=\"usa-nav__close\">
          <img src=\"";
        // line 82
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["uswds_images"] ?? null), 82, $this->source), "html", null, true);
        yield "usa-icons/close.svg\" alt=\"close\"/>
        </button>

        ";
        // line 85
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "mobile_menu", [], "any", false, false, true, 85)) {
            // line 86
            yield "          <div class=\"usa-nav-mobile\">
            ";
            // line 87
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "mobile_menu", [], "any", false, false, true, 87), 87, $this->source), "html", null, true);
            yield "
          </div>
        ";
        }
        // line 90
        yield "
        ";
        // line 91
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "mobile_menu", [], "any", false, false, true, 91)) {
            // line 92
            yield "        <div class=\"usa-nav-desktop\">
          ";
        }
        // line 94
        yield "
          ";
        // line 95
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 95)) {
            // line 96
            yield "            ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 96), 96, $this->source), "html", null, true);
            yield "
          ";
        }
        // line 98
        yield "
          ";
        // line 99
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 99)) {
            // line 100
            yield "            ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 100), 100, $this->source), "html", null, true);
            yield "
          ";
        }
        // line 102
        yield "
          ";
        // line 103
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "mobile_menu", [], "any", false, false, true, 103)) {
            // line 104
            yield "        </div>
        ";
        }
        // line 106
        yield "
        ";
        // line 107
        if (($context["header_extended"] ?? null)) {
            // line 108
            yield "      </div>
      ";
        }
        // line 110
        yield "    </nav>

    ";
        // line 112
        if (($context["header_basic"] ?? null)) {
            // line 113
            yield "  </div>
  ";
        }
        // line 115
        yield "
</header>
";
        yield from [];
    }

    // line 120
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_hero(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 121
        yield "    <section class=\"usa-hero\">
      <div class=\"grid-container\">
        ";
        // line 123
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "hero", [], "any", false, false, true, 123), 123, $this->source), "html", null, true);
        yield "
      </div>
    </section>
  ";
        yield from [];
    }

    // line 129
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_main(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 130
        yield "  <main class=\"main-content usa-layout-docs usa-section ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_classes"] ?? null), 130, $this->source), "html", null, true);
        yield "\" role=\"main\"
        id=\"main-content\">

    <div class=\"grid-container\">

      ";
        // line 135
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 135) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 135)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 135))) {
            // line 136
            yield "        ";
            yield from $this->unwrap()->yieldBlock('breadcrumb', $context, $blocks);
            // line 141
            yield "
        ";
            // line 142
            yield from $this->unwrap()->yieldBlock('highlighted', $context, $blocks);
            // line 147
            yield "
        ";
            // line 149
            yield "        ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 149)) {
                // line 150
                yield "          ";
                yield from $this->unwrap()->yieldBlock('help', $context, $blocks);
                // line 155
                yield "        ";
            }
            // line 156
            yield "      ";
        }
        // line 157
        yield "
      <div class=\"grid-row grid-gap\">
        ";
        // line 159
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 159)) {
            // line 160
            yield "          ";
            yield from $this->unwrap()->yieldBlock('sidebar_first', $context, $blocks);
            // line 166
            yield "        ";
        }
        // line 167
        yield "
        ";
        // line 168
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 173
        yield "
        ";
        // line 174
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 174)) {
            // line 175
            yield "          ";
            yield from $this->unwrap()->yieldBlock('sidebar_second', $context, $blocks);
            // line 181
            yield "        ";
        }
        // line 182
        yield "      </div>
    </div>
  </main>
";
        yield from [];
    }

    // line 136
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_breadcrumb(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 137
        yield "          <div class=\"grid-row\">
            ";
        // line 138
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 138), 138, $this->source), "html", null, true);
        yield "
          </div>
        ";
        yield from [];
    }

    // line 142
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_highlighted(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 143
        yield "          <div class=\"\">
            ";
        // line 144
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 144), 144, $this->source), "html", null, true);
        yield "
          </div>
        ";
        yield from [];
    }

    // line 150
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_help(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 151
        yield "            <div class=\"grid-row \">
              ";
        // line 152
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 152), 152, $this->source), "html", null, true);
        yield "
            </div>
          ";
        yield from [];
    }

    // line 160
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sidebar_first(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 161
        yield "            <div
              class=\"usa-layout-docs__sidenav desktop:grid-col-3 layout-sidebar-first\">
              ";
        // line 163
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 163), 163, $this->source), "html", null, true);
        yield "
            </div>
          ";
        yield from [];
    }

    // line 168
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 169
        yield "          <div class=\"usa-layout-docs__main desktop:grid-col-";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 169) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 169))) {
            yield "9";
        } else {
            yield "fill";
        }
        yield "\">
            ";
        // line 170
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 170), 170, $this->source), "html", null, true);
        yield "
          </div>";
        // line 172
        yield "        ";
        yield from [];
    }

    // line 175
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sidebar_second(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 176
        yield "            <div
              class=\"usa-layout-docs__sidenav desktop:grid-col-3 layout-sidebar-second\">
              ";
        // line 178
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 178), 178, $this->source), "html", null, true);
        yield "
            </div>
            ";
        yield from [];
    }

    // line 187
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 188
        yield "  <footer class=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_classes"] ?? null), 188, $this->source), "html", null, true);
        yield "\" role=\"contentinfo\">
    <div class=\"grid-container usa-footer__return-to-top\">
      <a href=\"#\">";
        // line 190
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Return to top"));
        yield "</a>
    </div>

    ";
        // line 193
        if (($context["display_footer_primary"] ?? null)) {
            // line 194
            yield "      <div class=\"usa-footer__primary-section\">

        <div class=\"usa-footer__primary-content\">
          ";
            // line 197
            if ((($context["footer_style"] ?? null) != "medium")) {
                // line 198
                yield "          <div class=\"grid-container\">
            <div class=\"grid-row grid-gap\">
              ";
            }
            // line 201
            yield "
              ";
            // line 202
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_menu", [], "any", false, false, true, 202)) {
                // line 203
                yield "                ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_menu", [], "any", false, false, true, 203), 203, $this->source), "html", null, true);
                yield "
              ";
            }
            // line 205
            yield "
              ";
            // line 206
            if ((($context["footer_slim"] ?? null) && (($context["footer_phone"] ?? null) || ($context["footer_email"] ?? null)))) {
                // line 207
                yield "                <div class=\"mobile-lg:grid-col-4\">
                  <address class=\"usa-footer__address\">
                    <div class=\"grid-row grid-gap mobile-lg:grid-gap-0\">

                      ";
                // line 211
                if (($context["footer_phone"] ?? null)) {
                    // line 212
                    yield "                        <div
                          class=\"grid-col-auto mobile-lg:grid-col-12 desktop:grid-col-auto\">
                          <div class=\"usa-footer-contact_info\">
                            <a
                              href=\"tel:";
                    // line 216
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_phone"] ?? null), 216, $this->source), "html", null, true);
                    yield "\">";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_phone"] ?? null), 216, $this->source), "html", null, true);
                    yield "</a>
                          </div>
                        </div>
                      ";
                }
                // line 220
                yield "
                      ";
                // line 221
                if (($context["footer_email"] ?? null)) {
                    // line 222
                    yield "                        <div
                          class=\"grid-col-auto mobile-lg:grid-col-12 desktop:grid-col-auto\">
                          <div class=\"usa-footer-contact_info\">
                            <a
                              href=\"mailto:";
                    // line 226
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_email"] ?? null), 226, $this->source), "html", null, true);
                    yield "\">";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_email"] ?? null), 226, $this->source), "html", null, true);
                    yield "</a>
                          </div>
                        </div>
                      ";
                }
                // line 230
                yield "                    </div>
                  </address>
                </div>
              ";
            }
            // line 234
            yield "
              ";
            // line 235
            if ((($context["footer_style"] ?? null) != "medium")) {
                // line 236
                yield "            </div>
          </div>
          ";
            }
            // line 239
            yield "
          ";
            // line 240
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 240)) {
                // line 241
                yield "            <div class=\"grid-container\">
              <div class=\"grid-row grid-gap\">
                <div class=\"grid-col-fill\">
                  ";
                // line 244
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 244), 244, $this->source), "html", null, true);
                yield "
                </div>
              </div>
            </div>
          ";
            }
            // line 249
            yield "        </div>

      </div>
    ";
        }
        // line 253
        yield "
    ";
        // line 254
        if (($context["display_footer_secondary"] ?? null)) {
            // line 255
            yield "      <div class=\"usa-footer__secondary-section\">
        <div class=\"grid-container\">
          <div class=\"grid-row grid-gap\">
            ";
            // line 258
            if (($context["display_footer_agency"] ?? null)) {
                // line 259
                yield "            <div
              class=\"usa-footer__logo grid-row mobile-lg:grid-col-6 mobile-lg:grid-gap-2\">

              ";
                // line 262
                if (($context["footer_agency_url"] ?? null)) {
                    // line 263
                    yield "              <a href=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_agency_url"] ?? null), 263, $this->source), "html", null, true);
                    yield "\">
              ";
                }
                // line 265
                yield "
                ";
                // line 266
                if (($context["footer_agency_logo"] ?? null)) {
                    // line 267
                    yield "                  <div class=\"mobile-lg:grid-col-auto\">
                    <img class=\"usa-footer__logo-img\"
                         src=\"";
                    // line 269
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_agency_logo"] ?? null), 269, $this->source), "html", null, true);
                    yield "\"
                         alt=\"";
                    // line 270
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Agency logo"));
                    yield "\">
                  </div>
                ";
                }
                // line 273
                yield "
                ";
                // line 274
                if (($context["footer_agency_name"] ?? null)) {
                    // line 275
                    yield "                  <div class=\"mobile-lg:grid-col-auto\">
                    <h3
                      class=\"usa-footer__logo-heading\">";
                    // line 277
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_agency_name"] ?? null), 277, $this->source), "html", null, true);
                    yield "</h3>
                  </div>
                ";
                }
                // line 280
                yield "
              ";
                // line 281
                if (($context["footer_agency_url"] ?? null)) {
                    // line 282
                    yield "              </a>
              ";
                }
                // line 284
                yield "
            </div>

            ";
                // line 287
                if ( !($context["footer_slim"] ?? null)) {
                    // line 288
                    yield "              <div class=\"usa-footer__contact-links desktop:grid-col-6\">
                ";
                    // line 289
                    if ((((((($context["facebook"] ?? null) || ($context["twitter"] ?? null)) || ($context["instagram"] ?? null)) || ($context["linkedin"] ?? null)) || ($context["youtube"] ?? null)) || ($context["rss"] ?? null))) {
                        // line 290
                        yield "                <div class=\"usa-footer__social-links grid-row grid-gap-1\">
                ";
                        // line 291
                        if (($context["facebook"] ?? null)) {
                            // line 292
                            yield "                  <div class=\"grid-col-auto\">
                  <a class=\"usa-social-link usa-social-link--facebook\" href=\"";
                            // line 293
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook"] ?? null), 293, $this->source), "html", null, true);
                            yield "\">
                    <img class=\"usa-social-link__icon\" src=\"";
                            // line 294
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["uswds_images"] ?? null), 294, $this->source), "html", null, true);
                            yield "usa-icons/facebook.svg\" alt=\"Facebook\">
                  </a>
                  </div>
                ";
                        }
                        // line 298
                        yield "
                ";
                        // line 299
                        if (($context["instagram"] ?? null)) {
                            // line 300
                            yield "                    <div class=\"grid-col-auto\">
                  <a class=\"usa-social-link usa-social-link--instagram\" href=\"";
                            // line 301
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["instagram"] ?? null), 301, $this->source), "html", null, true);
                            yield "\">
                    <img class=\"usa-social-link__icon\" src=\"";
                            // line 302
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["uswds_images"] ?? null), 302, $this->source), "html", null, true);
                            yield "usa-icons/instagram.svg\" alt=\"Instagram\">
                  </a>
                    </div>
                ";
                        }
                        // line 306
                        yield "
                ";
                        // line 307
                        if (($context["linkedin"] ?? null)) {
                            // line 308
                            yield "                    <div class=\"grid-col-auto\">
                  <a class=\"usa-social-link usa-social-link--linkedin\" href=\"";
                            // line 309
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin"] ?? null), 309, $this->source), "html", null, true);
                            yield "\">
                    <img class=\"usa-social-link__icon\" src=\"";
                            // line 310
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["uswds_images"] ?? null), 310, $this->source), "html", null, true);
                            yield "usa-icons/linkedin.svg\" alt=\"LinkedIn\">
                  </a>
                    </div>
                ";
                        }
                        // line 314
                        yield "
                ";
                        // line 315
                        if (($context["twitter"] ?? null)) {
                            // line 316
                            yield "                  <div class=\"grid-col-auto\">
                  <a class=\"usa-social-link usa-social-link--twitter\" href=\"";
                            // line 317
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter"] ?? null), 317, $this->source), "html", null, true);
                            yield "\">
                    <img class=\"usa-social-link__icon\" src=\"";
                            // line 318
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["uswds_images"] ?? null), 318, $this->source), "html", null, true);
                            yield "usa-icons/x.svg\" alt=\"Twitter\">
                  </a>
                  </div>
                ";
                        }
                        // line 322
                        yield "
                ";
                        // line 323
                        if (($context["youtube"] ?? null)) {
                            // line 324
                            yield "                    <div class=\"grid-col-auto\">
                  <a class=\"usa-social-link usa-social-link--youtube\" href=\"";
                            // line 325
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["youtube"] ?? null), 325, $this->source), "html", null, true);
                            yield "\">
                    <img class=\"usa-social-link__icon\" src=\"";
                            // line 326
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["uswds_images"] ?? null), 326, $this->source), "html", null, true);
                            yield "usa-icons/youtube.svg\" alt=\"YouTube\">
                  </a>
                    </div>
                ";
                        }
                        // line 330
                        yield "
                ";
                        // line 331
                        if (($context["rss"] ?? null)) {
                            // line 332
                            yield "                  <div class=\"grid-col-auto\">
                  <a class=\"usa-social-link usa-social-link--rss\" href=\"";
                            // line 333
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rss"] ?? null), 333, $this->source), "html", null, true);
                            yield "\">
                    <img class=\"usa-social-link__icon\" src=\"";
                            // line 334
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["uswds_images"] ?? null), 334, $this->source), "html", null, true);
                            yield "usa-icons/rss_feed.svg\" alt=\"RSS\">
                  </a>
                  </div>
                ";
                        }
                        // line 338
                        yield "                </div>
                ";
                    }
                    // line 340
                    yield "                ";
                    if (($context["contact_center"] ?? null)) {
                        // line 341
                        yield "                  <h3
                    class=\"usa-footer__contact-heading\">";
                        // line 342
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["contact_center"] ?? null), 342, $this->source), "html", null, true);
                        yield "</h3>
                ";
                    }
                    // line 344
                    yield "                <address class=\"usa-footer__address\">
                  <div class=\"usa-footer__contact-info grid-row grid-gap\">
                    ";
                    // line 346
                    if (($context["phone"] ?? null)) {
                        // line 347
                        yield "                      <div class=\"grid-col-auto\">
                        <a href=\"tel:";
                        // line 348
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["phone"] ?? null), 348, $this->source), "html", null, true);
                        yield "\">";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["phone"] ?? null), 348, $this->source), "html", null, true);
                        yield "</a>
                      </div>
                    ";
                    }
                    // line 351
                    yield "
                    ";
                    // line 352
                    if (($context["email"] ?? null)) {
                        // line 353
                        yield "                      <div class=\"grid-col-auto\">
                        <a href=\"mailto:";
                        // line 354
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["email"] ?? null), 354, $this->source), "html", null, true);
                        yield "\">";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["email"] ?? null), 354, $this->source), "html", null, true);
                        yield "</a>
                      </div>
                    ";
                    }
                    // line 357
                    yield "                  </div>
                </address>
              </div>
            ";
                }
                // line 361
                yield "
          </div>
          ";
            }
            // line 364
            yield "
          ";
            // line 365
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_secondary", [], "any", false, false, true, 365)) {
                // line 366
                yield "            <div class=\"grid-container\">
              <div class=\"grid-row grid-gap\">
                <div class=\"grid-col-fill\">
                  ";
                // line 369
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_secondary", [], "any", false, false, true, 369), 369, $this->source), "html", null, true);
                yield "
                </div>
              </div>
            </div>
          ";
            }
            // line 374
            yield "        </div>
      </div>
    ";
        }
        // line 377
        yield "
  </footer>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/contrib/uswds_base/templates/layout/page.html.twig";
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
        return array (  866 => 377,  861 => 374,  853 => 369,  848 => 366,  846 => 365,  843 => 364,  838 => 361,  832 => 357,  824 => 354,  821 => 353,  819 => 352,  816 => 351,  808 => 348,  805 => 347,  803 => 346,  799 => 344,  794 => 342,  791 => 341,  788 => 340,  784 => 338,  777 => 334,  773 => 333,  770 => 332,  768 => 331,  765 => 330,  758 => 326,  754 => 325,  751 => 324,  749 => 323,  746 => 322,  739 => 318,  735 => 317,  732 => 316,  730 => 315,  727 => 314,  720 => 310,  716 => 309,  713 => 308,  711 => 307,  708 => 306,  701 => 302,  697 => 301,  694 => 300,  692 => 299,  689 => 298,  682 => 294,  678 => 293,  675 => 292,  673 => 291,  670 => 290,  668 => 289,  665 => 288,  663 => 287,  658 => 284,  654 => 282,  652 => 281,  649 => 280,  643 => 277,  639 => 275,  637 => 274,  634 => 273,  628 => 270,  624 => 269,  620 => 267,  618 => 266,  615 => 265,  609 => 263,  607 => 262,  602 => 259,  600 => 258,  595 => 255,  593 => 254,  590 => 253,  584 => 249,  576 => 244,  571 => 241,  569 => 240,  566 => 239,  561 => 236,  559 => 235,  556 => 234,  550 => 230,  541 => 226,  535 => 222,  533 => 221,  530 => 220,  521 => 216,  515 => 212,  513 => 211,  507 => 207,  505 => 206,  502 => 205,  496 => 203,  494 => 202,  491 => 201,  486 => 198,  484 => 197,  479 => 194,  477 => 193,  471 => 190,  465 => 188,  458 => 187,  450 => 178,  446 => 176,  439 => 175,  434 => 172,  430 => 170,  421 => 169,  414 => 168,  406 => 163,  402 => 161,  395 => 160,  387 => 152,  384 => 151,  377 => 150,  369 => 144,  366 => 143,  359 => 142,  351 => 138,  348 => 137,  341 => 136,  333 => 182,  330 => 181,  327 => 175,  325 => 174,  322 => 173,  320 => 168,  317 => 167,  314 => 166,  311 => 160,  309 => 159,  305 => 157,  302 => 156,  299 => 155,  296 => 150,  293 => 149,  290 => 147,  288 => 142,  285 => 141,  282 => 136,  280 => 135,  271 => 130,  264 => 129,  255 => 123,  251 => 121,  244 => 120,  237 => 115,  233 => 113,  231 => 112,  227 => 110,  223 => 108,  221 => 107,  218 => 106,  214 => 104,  212 => 103,  209 => 102,  203 => 100,  201 => 99,  198 => 98,  192 => 96,  190 => 95,  187 => 94,  183 => 92,  181 => 91,  178 => 90,  172 => 87,  169 => 86,  167 => 85,  161 => 82,  157 => 80,  153 => 78,  151 => 77,  145 => 74,  142 => 73,  138 => 71,  136 => 70,  133 => 69,  127 => 66,  124 => 65,  122 => 64,  116 => 62,  109 => 61,  101 => 54,  98 => 53,  91 => 52,  85 => 187,  82 => 186,  80 => 129,  77 => 128,  73 => 120,  71 => 119,  68 => 118,  66 => 61,  61 => 58,  57 => 52,  55 => 51,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/contrib/uswds_base/templates/layout/page.html.twig", "/app/web/themes/contrib/uswds_base/templates/layout/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 51, "block" => 52);
        static $filters = array("escape" => 54, "t" => 190);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'block'],
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
