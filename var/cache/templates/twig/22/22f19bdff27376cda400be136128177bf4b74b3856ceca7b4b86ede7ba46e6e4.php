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

/* __string_template__e8b1c2b01be063d8d9cd168f8e74ad515ebd3f61696a690d36a3cd5e64b287c7 */
class __TwigTemplate_493076bfa5d0652c84025bf671956b08d9df6ec8ef92fe93197bf576a87cff36 extends \Twig\Template
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
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "vendor_plans.revenue_exceeded_subj");
    }

    public function getTemplateName()
    {
        return "__string_template__e8b1c2b01be063d8d9cd168f8e74ad515ebd3f61696a690d36a3cd5e64b287c7";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__e8b1c2b01be063d8d9cd168f8e74ad515ebd3f61696a690d36a3cd5e64b287c7", "");
    }
}
