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

/* @Modules/ps_mbo/views/templates/admin/controllers/module_catalog/cdc-error.html.twig */
class __TwigTemplate_dbda3ebe63999fe4f2fe742a44c64fcc extends Template
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
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 19
        yield "<div class=\"cdc-error-container\">
  <div class=\"cdc-error-content\">
    <div class=\"cdc-error-content-wrapper\">
      <h1 class=\"cdc-error-title\">
        ";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Oh no.. something went wrong", [], "Modules.Mbo.Global"), "html", null, true);
        yield "
      </h1>
      <p class=\"cdc-error-message\">
        ";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("There has been a problem on our side. Refresh your page and if the problem persists, try again later.", [], "Modules.Mbo.Global"), "html", null, true);
        yield "
      </p>
    </div>
    <div class=\"cdc-error-button-container\">
      <button class=\"cdc-error-button\" onclick=\"javascript:window.location.reload();\">
        ";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Refresh page", [], "Modules.Mbo.Global"), "html", null, true);
        yield "
      </button>
    </div>
  </div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Modules/ps_mbo/views/templates/admin/controllers/module_catalog/cdc-error.html.twig";
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
        return array (  62 => 31,  54 => 26,  48 => 23,  42 => 19,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@Modules/ps_mbo/views/templates/admin/controllers/module_catalog/cdc-error.html.twig", "/home/host246071/domains/amarczchow.pl/public_html/ps/modules/ps_mbo/views/templates/admin/controllers/module_catalog/cdc-error.html.twig");
    }
}
