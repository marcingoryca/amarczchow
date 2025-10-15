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

/* @PrestaShop/Admin/Improve/Design/ImageSettings/Blocks/delete_image_type.html.twig */
class __TwigTemplate_b0a25cebc3227a1e3e5ccbe6c5adaf32 extends Template
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
        // line 25
        yield "
";
        // line 26
        yield from $this->loadTemplate("@PrestaShop/Admin/Improve/Design/ImageSettings/Blocks/delete_image_type.html.twig", "@PrestaShop/Admin/Improve/Design/ImageSettings/Blocks/delete_image_type.html.twig", 26, "602536613")->unwrap()->yield(CoreExtension::merge($context, ["id" => (CoreExtension::getAttribute($this->env, $this->source,         // line 27
($context["grid"] ?? null), "id", [], "any", false, false, false, 27) . "_grid_delete_image_type_modal"), "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Are you sure you want to delete this image setting?", [], "Admin.Design.Feature"), "closable" => true, "closeLabel" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel", [], "Admin.Actions"), "actions" => [["type" => "button", "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete", [], "Admin.Actions"), "class" => "btn btn-danger btn-lg js-submit-delete-image-type"]]]));
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/Improve/Design/ImageSettings/Blocks/delete_image_type.html.twig";
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
        return array (  46 => 27,  45 => 26,  42 => 25,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@PrestaShop/Admin/Improve/Design/ImageSettings/Blocks/delete_image_type.html.twig", "/home/host246071/domains/amarczchow.pl/public_html/ps/src/PrestaShopBundle/Resources/views/Admin/Improve/Design/ImageSettings/Blocks/delete_image_type.html.twig");
    }
}


/* @PrestaShop/Admin/Improve/Design/ImageSettings/Blocks/delete_image_type.html.twig */
class __TwigTemplate_b0a25cebc3227a1e3e5ccbe6c5adaf32___602536613 extends Template
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
            'delete_image_type_form' => [$this, 'block_delete_image_type_form'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 26
        return "@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig", "@PrestaShop/Admin/Improve/Design/ImageSettings/Blocks/delete_image_type.html.twig", 26);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 37
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 38
        yield "    <div class=\"modal-body\">
      <p>";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("If you delete this image format, the theme won't be able to use it anymore. This will result in a degraded experience on your front office.", [], "Admin.Design.Notification"), "html", null, true);
        yield "</p>
      ";
        // line 40
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["deleteImageTypeForm"] ?? null), 'form_start');
        yield "
      <div class=\"form-wrapper w-100 p-0 mt-4\">
        ";
        // line 42
        yield from $this->unwrap()->yieldBlock('delete_image_type_form', $context, $blocks);
        // line 54
        yield "      </div>
      ";
        // line 55
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["deleteImageTypeForm"] ?? null), 'form_end');
        yield "
    </div>
  ";
        yield from [];
    }

    // line 42
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_delete_image_type_form(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 43
        yield "          <div class=\"d-flex align-items-center\">
            <div class=\"bold\">
              ";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["deleteImageTypeForm"] ?? null), "delete_images_files_too", [], "any", false, false, false, 45), 'label', ["label_attr" => ["class" => "m-0"]]);
        yield "
            </div>
            <div class=\"col-sm\">
              ";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["deleteImageTypeForm"] ?? null), "delete_images_files_too", [], "any", false, false, false, 48), 'widget');
        yield "
            </div>
          </div>

          ";
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["deleteImageTypeForm"] ?? null), 'rest');
        yield "
        ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/Improve/Design/ImageSettings/Blocks/delete_image_type.html.twig";
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
        return array (  172 => 52,  165 => 48,  159 => 45,  155 => 43,  148 => 42,  140 => 55,  137 => 54,  135 => 42,  130 => 40,  126 => 39,  123 => 38,  116 => 37,  105 => 26,  46 => 27,  45 => 26,  42 => 25,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@PrestaShop/Admin/Improve/Design/ImageSettings/Blocks/delete_image_type.html.twig", "/home/host246071/domains/amarczchow.pl/public_html/ps/src/PrestaShopBundle/Resources/views/Admin/Improve/Design/ImageSettings/Blocks/delete_image_type.html.twig");
    }
}
