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

/* @PrestaShop/Admin/Improve/Design/ImageSettings/form-regenerate-thumbnails.html.twig */
class __TwigTemplate_e4f2f50a0316e757f98834719dcd26b0 extends Template
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
            'form_regenerate_thumbnails_widget' => [$this, 'block_form_regenerate_thumbnails_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 25
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["regenThumbnailsForm"] ?? null), ["@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig"], true);
        // line 26
        yield "
";
        // line 27
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["regenThumbnailsForm"] ?? null), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_image_settings_regenerate_thumbnails")]);
        yield "
  <div class=\"card\">
    <h3 class=\"card-header\">
      <i class=\"material-icons\">image</i>
      ";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Regenerate thumbnails", [], "Admin.Design.Feature"), "html", null, true);
        yield "
    </h3>
    <div class=\"alert alert-warning mx-3 mt-3 mb-0\">
      ";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Be careful! Depending on the options selected, former manually uploaded thumbnails might be erased and replaced by automatically generated thumbnails.", [], "Admin.Design.Notification"), "html", null, true);
        yield "
      <br />
      ";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Also, regenerating thumbnails for all existing images can take several minutes, please be patient.", [], "Admin.Design.Notification"), "html", null, true);
        yield "
    </div>
    <div class=\"card-body\">
      <div class=\"form-wrapper\">
        ";
        // line 40
        yield from $this->unwrap()->yieldBlock('form_regenerate_thumbnails_widget', $context, $blocks);
        // line 43
        yield "      </div>
    </div>
    <div class=\"card-footer clearfix\">
      <div class=\"d-inline-flex float-right\">
        <button
          class=\"btn btn-primary btn-confirm-form\"
          id=\"regenerate-thumbnails-button\"
          data-confirm-message=\"";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Regenerate thumbnails for the selected images? With the \"erase\" option enabled, the previously selected thumbnails will be deleted.", [], "Admin.Design.Notification"), "html", null, true);
        yield "\"
          data-confirm-title=\"";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Regenerate thumbnails", [], "Admin.Design.Feature"), "html", null, true);
        yield "\"
          data-confirm-cancel=\"";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel", [], "Admin.Actions"), "html", null, true);
        yield "\"
          data-confirm-apply=\"";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Regenerate thumbnails", [], "Admin.Actions"), "html", null, true);
        yield "\"
        >";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Regenerate thumbnails", [], "Admin.Actions"), "html", null, true);
        yield "</button>
      </div>
    </div>
  </div>
";
        // line 58
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["regenThumbnailsForm"] ?? null), 'form_end');
        yield "
";
        yield from [];
    }

    // line 40
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_regenerate_thumbnails_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 41
        yield "          ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["regenThumbnailsForm"] ?? null), 'rest');
        yield "
        ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/Improve/Design/ImageSettings/form-regenerate-thumbnails.html.twig";
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
        return array (  121 => 41,  114 => 40,  107 => 58,  100 => 54,  96 => 53,  92 => 52,  88 => 51,  84 => 50,  75 => 43,  73 => 40,  66 => 36,  61 => 34,  55 => 31,  48 => 27,  45 => 26,  43 => 25,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@PrestaShop/Admin/Improve/Design/ImageSettings/form-regenerate-thumbnails.html.twig", "/home/host246071/domains/amarczchow.pl/public_html/ps/src/PrestaShopBundle/Resources/views/Admin/Improve/Design/ImageSettings/form-regenerate-thumbnails.html.twig");
    }
}
