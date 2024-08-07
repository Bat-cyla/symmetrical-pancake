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

/* __string_template__2f1e167f136eaeb577d91a4056244881e138c433246fefc43f96b46bec44cd21 */
class __TwigTemplate_fb2f4a81ad5486f2687109934973f0cb9e2847b45c9cec613ce255093b467df7 extends \Twig\Template
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
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "vendor_plans.plan_payment");
    }

    public function getTemplateName()
    {
        return "__string_template__2f1e167f136eaeb577d91a4056244881e138c433246fefc43f96b46bec44cd21";
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
        return new Source("", "__string_template__2f1e167f136eaeb577d91a4056244881e138c433246fefc43f96b46bec44cd21", "");
    }
}
