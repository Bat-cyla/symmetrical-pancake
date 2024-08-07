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

/* __string_template__7cdec2b47c1325f2cdb9e0887c050377192b2dd661ffd3fa1aa9ebf76ce69b09 */
class __TwigTemplate_ed531355bc086a81aa88c83547e6c0cadfc68100c58c2d2ac8cf309ab17bc909 extends \Twig\Template
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
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->snippetFunction($this->env, $context, "header", ["title" => $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "recover_password_subj")]);
        echo "

    ";
        // line 3
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "text_confirm_passwd_recovery");
        echo ":
    <br />
    <br />

    <a href=\"";
        // line 7
        echo ($context["url"] ?? null);
        echo "\">";
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->punyDecodeFilter(($context["url"] ?? null));
        echo "</a>

";
        // line 9
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->snippetFunction($this->env, $context, "footer");
    }

    public function getTemplateName()
    {
        return "__string_template__7cdec2b47c1325f2cdb9e0887c050377192b2dd661ffd3fa1aa9ebf76ce69b09";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 9,  49 => 7,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__7cdec2b47c1325f2cdb9e0887c050377192b2dd661ffd3fa1aa9ebf76ce69b09", "");
    }
}
