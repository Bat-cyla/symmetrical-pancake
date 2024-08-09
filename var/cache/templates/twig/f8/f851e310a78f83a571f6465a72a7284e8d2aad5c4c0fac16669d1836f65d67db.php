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

/* __string_template__c48f7a93f6f0b9b9a8b357784dea2362a9aa5e34923ced026bae16912e287e5f */
class __TwigTemplate_1491165087b19d8546d928ff8d958b455acd9dae131abc467b8f1dd24854e8e1 extends \Twig\Template
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
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "cp_otp_code_notification_subj");
    }

    public function getTemplateName()
    {
        return "__string_template__c48f7a93f6f0b9b9a8b357784dea2362a9aa5e34923ced026bae16912e287e5f";
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
        return new Source("", "__string_template__c48f7a93f6f0b9b9a8b357784dea2362a9aa5e34923ced026bae16912e287e5f", "");
    }
}
