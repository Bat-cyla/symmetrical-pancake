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
class __TwigTemplate_5399b4736ed17ec74372bac50458f65757d7cd02f72303d79e70639e6eb6859c extends \Twig\Template
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
        return new Source("{{ company_name }}: {{ __(\"cp_otp_code_notification_subj\") }}", "__string_template__c48f7a93f6f0b9b9a8b357784dea2362a9aa5e34923ced026bae16912e287e5f", "");
    }
}
