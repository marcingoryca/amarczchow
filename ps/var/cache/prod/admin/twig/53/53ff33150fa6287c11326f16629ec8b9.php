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

/* @PrestaShop/Admin/Improve/Design/ImageSettings/index.html.twig */
class __TwigTemplate_869d52eff17c5e5f7e585fc1f5e8e637 extends Template
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

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'image_types_listing' => [$this, 'block_image_types_listing'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 25
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Improve/Design/ImageSettings/index.html.twig", 25);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 28
        yield "  <div class=\"alert alert-danger\">
    ";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("By default, all images settings are already installed in your store. Do not delete them, you will need it!", [], "Admin.Design.Help"), "html", null, true);
        yield "
  </div>

  ";
        // line 32
        yield from $this->unwrap()->yieldBlock('image_types_listing', $context, $blocks);
        // line 39
        yield "  ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@PrestaShop/Admin/Improve/Design/ImageSettings/form-settings.html.twig");
        yield "
  ";
        // line 40
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@PrestaShop/Admin/Improve/Design/ImageSettings/form-regenerate-thumbnails.html.twig");
        yield "
";
        yield from [];
    }

    // line 32
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_image_types_listing(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 33
        yield "     ";
        yield from $this->loadTemplate("@PrestaShop/Admin/Improve/Design/ImageSettings/index.html.twig", "@PrestaShop/Admin/Improve/Design/ImageSettings/index.html.twig", 33, "799540938")->unwrap()->yield(CoreExtension::merge($context, ["grid" => ($context["imageTypeGrid"] ?? null)]));
        // line 38
        yield "  ";
        yield from [];
    }

    // line 43
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 44
        yield "  ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
  <script src=\"";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/default/js/bundle/pagination.js"), "html", null, true);
        yield "\"></script>
  <script src=\"";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/image_settings.bundle.js"), "html", null, true);
        yield "\"></script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/Improve/Design/ImageSettings/index.html.twig";
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
        return array (  114 => 46,  110 => 45,  105 => 44,  98 => 43,  93 => 38,  90 => 33,  83 => 32,  76 => 40,  71 => 39,  69 => 32,  63 => 29,  60 => 28,  53 => 27,  42 => 25,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@PrestaShop/Admin/Improve/Design/ImageSettings/index.html.twig", "/home/host246071/domains/amarczchow.pl/public_html/ps/src/PrestaShopBundle/Resources/views/Admin/Improve/Design/ImageSettings/index.html.twig");
    }
}


/* @PrestaShop/Admin/Improve/Design/ImageSettings/index.html.twig */
class __TwigTemplate_869d52eff17c5e5f7e585fc1f5e8e637___799540938 extends Template
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

        $this->blocks = [
            'grid_panel_extra_content' => [$this, 'block_grid_panel_extra_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 33
        return "@PrestaShop/Admin/Common/Grid/grid_panel.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Common/Grid/grid_panel.html.twig", "@PrestaShop/Admin/Improve/Design/ImageSettings/index.html.twig", 33);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 34
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_grid_panel_extra_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 35
        yield "        ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@PrestaShop/Admin/Improve/Design/ImageSettings/Blocks/delete_image_type.html.twig");
        yield "
      ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/Improve/Design/ImageSettings/index.html.twig";
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
        return array (  192 => 35,  185 => 34,  174 => 33,  114 => 46,  110 => 45,  105 => 44,  98 => 43,  93 => 38,  90 => 33,  83 => 32,  76 => 40,  71 => 39,  69 => 32,  63 => 29,  60 => 28,  53 => 27,  42 => 25,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@PrestaShop/Admin/Improve/Design/ImageSettings/index.html.twig", "/home/host246071/domains/amarczchow.pl/public_html/ps/src/PrestaShopBundle/Resources/views/Admin/Improve/Design/ImageSettings/index.html.twig");
    }
}
