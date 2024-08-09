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

/* __string_template__f2ccad373e0713398ba5cda7482a84633cdf4b2763b16579cf9221a635028a94 */
class __TwigTemplate_414b3f0d4a194d9a9f384140664c7bef8c0a11ad53c09f4b7416fe892f041867 extends \Twig\Template
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
        echo ($context["company_name"] ?? null);
        echo ": ";
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "new_profile_notification");
    }

    public function getTemplateName()
    {
        return "__string_template__f2ccad373e0713398ba5cda7482a84633cdf4b2763b16579cf9221a635028a94";
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
        return new Source("", "__string_template__f2ccad373e0713398ba5cda7482a84633cdf4b2763b16579cf9221a635028a94", "");
    }
}
