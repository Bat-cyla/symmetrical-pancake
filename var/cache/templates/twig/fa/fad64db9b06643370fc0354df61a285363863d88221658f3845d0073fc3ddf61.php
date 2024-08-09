<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__022e6e03a98998825190d192824dbf7fcba071b8d403aac7243120e25cfc64a8 */
class __TwigTemplate_5b01361359a4ceb4ba64edaf2f9d929bd1a1b02dc4f3e32306a2b8308b79eb9a extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->snippetFunction($this->env, $context, "header");
        echo "
";
        // line 2
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "vendor_plans.revenue_exceeded_text", ["[vendor]" => twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "company", [], "any", false, false, false, 2), "[href]" => ($context["company_url"] ?? null), "[plan]" => twig_get_attribute($this->env, $this->source, ($context["plan"] ?? null), "plan", [], "any", false, false, false, 2)]);
        echo "
";
        // line 3
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->snippetFunction($this->env, $context, "footer");
    }

    public function getTemplateName()
    {
        return "__string_template__022e6e03a98998825190d192824dbf7fcba071b8d403aac7243120e25cfc64a8";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__022e6e03a98998825190d192824dbf7fcba071b8d403aac7243120e25cfc64a8", "");
    }
}
