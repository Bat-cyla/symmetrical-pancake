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

/* __string_template__36b31d0b0104d185b8adb72417ed445f9c1786651f5bef5472a23d3dd200e9b2 */
class __TwigTemplate_7fb0c1f0b697742d0796f46a6b691cf2773858e0a5ae7c74d404421193fa03a1 extends \Twig\Template
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
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "cp_otp_code_email_text", ["[code]" => ($context["code"] ?? null)]);
        echo "<br /><br />
";
        // line 3
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->snippetFunction($this->env, $context, "footer");
    }

    public function getTemplateName()
    {
        return "__string_template__36b31d0b0104d185b8adb72417ed445f9c1786651f5bef5472a23d3dd200e9b2";
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
        return new Source("{{ snippet(\"header\") }}
{{ __(\"cp_otp_code_email_text\", {\"[code]\": code}) }}<br /><br />
{{ snippet(\"footer\") }}", "__string_template__36b31d0b0104d185b8adb72417ed445f9c1786651f5bef5472a23d3dd200e9b2", "");
    }
}
