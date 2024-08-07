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

/* __string_template__63f2f97151912936b87c8a3ef00eb010f954d1e7d8dd889d783ac5253829a9e8 */
class __TwigTemplate_9c9cc616fd2b92a68262645fd3e3ff5973b24b31007feac55f43e70eefda96e9 extends \Twig\Template
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
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "recover_password_subj");
    }

    public function getTemplateName()
    {
        return "__string_template__63f2f97151912936b87c8a3ef00eb010f954d1e7d8dd889d783ac5253829a9e8";
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
        return new Source("", "__string_template__63f2f97151912936b87c8a3ef00eb010f954d1e7d8dd889d783ac5253829a9e8", "");
    }
}
