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

/* __string_template__c78399f245e8de10e63c011d28ba89872e5cab89657f7c9fe9c18ce1dba6774b */
class __TwigTemplate_6f9c551e19db20127e14a781e6289eb09f6de838fa7a4bbc7ae127dd64c8c958 extends \Twig\Template
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
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "vendor_debt_payout.weekly_digest_of_debtors.subject", ["[marketplace_name]" => ($context["marketplace_name"] ?? null)]);
    }

    public function getTemplateName()
    {
        return "__string_template__c78399f245e8de10e63c011d28ba89872e5cab89657f7c9fe9c18ce1dba6774b";
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
        return new Source("", "__string_template__c78399f245e8de10e63c011d28ba89872e5cab89657f7c9fe9c18ce1dba6774b", "");
    }
}
