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

/* __string_template__47cfe1b2def3d2a0f2ed8458ad089f8436b89eba1160216462d2b7308899b88c */
class __TwigTemplate_1d17b1b48f127bc813d56e2394f2bfd5761e3f7517fdaba8d1f5fb14006322d2 extends \Twig\Template
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
        echo "<p style=\"text-align: center; font-family: Helvetica, Arial, sans-serif;\"><strong style=\"font-weight: bold;\">";
        echo twig_get_attribute($this->env, $this->source, ($context["p"] ?? null), "amount", [], "any", false, false, false, 1);
        echo "</strong></p>";
    }

    public function getTemplateName()
    {
        return "__string_template__47cfe1b2def3d2a0f2ed8458ad089f8436b89eba1160216462d2b7308899b88c";
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
        return new Source("", "__string_template__47cfe1b2def3d2a0f2ed8458ad089f8436b89eba1160216462d2b7308899b88c", "");
    }
}
