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

/* @PrestaShop/Admin/Improve/Design/ImageSettings/form-settings.html.twig */
class __TwigTemplate_1f8a6e2e508356e1e0802ea428581258 extends Template
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
            'form_image_settings_widget' => [$this, 'block_form_image_settings_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 25
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["configForm"] ?? null), ["@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig"], true);
        // line 26
        yield "
";
        // line 27
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["configForm"] ?? null), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_image_settings_save_settings")]);
        yield "
  <div class=\"card\">
    <h3 class=\"card-header\">
      <i class=\"material-icons\">settings</i>
      ";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Images generation options", [], "Admin.Design.Feature"), "html", null, true);
        yield "
    </h3>
    <div class=\"alert alert-info mx-3 mt-3 mb-0\">
      <p>";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("The original images of objects you create are almost never used, optimized thumbnails are used instead. In this section, you can define the formats of thumbnails and their quality.", [], "Admin.Design.Help"), "html", null, true);
        yield "</p>
      <p class=\"mb-3\">";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Most common setup is to have the base JPG/PNG format and one modern WebP or AVIF format - the browser will choose the format it likes the most.", [], "Admin.Design.Help"), "html", null, true);
        yield "</p>
      <p>";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Beware that to benefit from modern image formats, they must be supported by your theme.", [], "Admin.Design.Help"), "html", null, true);
        yield "</p>
    </div>
    <div class=\"card-body\">
      <div class=\"form-wrapper\">
        ";
        // line 40
        yield from $this->unwrap()->yieldBlock('form_image_settings_widget', $context, $blocks);
        // line 43
        yield "      </div>
    </div>
    <div class=\"card-footer clearfix\">
      <div class=\"d-inline-flex float-right\">
        <button class=\"btn btn-primary\" id=\"save-button\">";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Admin.Actions"), "html", null, true);
        yield "</button>
      </div>
    </div>
  </div>
";
        // line 51
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["configForm"] ?? null), 'form_end');
        yield "
";
        yield from [];
    }

    // line 40
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_image_settings_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 41
        yield "          ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["configForm"] ?? null), 'rest');
        yield "
        ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/Improve/Design/ImageSettings/form-settings.html.twig";
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
        return array (  105 => 41,  98 => 40,  91 => 51,  84 => 47,  78 => 43,  76 => 40,  69 => 36,  65 => 35,  61 => 34,  55 => 31,  48 => 27,  45 => 26,  43 => 25,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@PrestaShop/Admin/Improve/Design/ImageSettings/form-settings.html.twig", "/home/host246071/domains/amarczchow.pl/public_html/ps/src/PrestaShopBundle/Resources/views/Admin/Improve/Design/ImageSettings/form-settings.html.twig");
    }
}
