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

/* __string_template__3faba0ca60ac619cd8b9491b376c22061be8f5e22fa3ae0fc286e3ca9b8d5bc3 */
class __TwigTemplate_45a60398cba0c2a5106b518ee5668d6939d5110b3d31c904c1ca5d1abed1a4c4 extends \Twig\Template
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
        echo "<h2 style=\"margin: 0px; font-size: 22px; font-family: Helvetica, Arial, sans-serif; color: #444444; text-transform: uppercase; margin-bottom: 15px; line-height: 1.5em; \">";
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "ship_to");
        echo "</h2>
    <p style=\"margin: 0px; font-size:14px; font-family: Helvetica, Arial, sans-serif; padding-bottom: 5px;\">
        <strong>";
        // line 3
        echo twig_get_attribute($this->env, $this->source, ($context["u"] ?? null), "firstname", [], "any", false, false, false, 3);
        echo " ";
        echo twig_get_attribute($this->env, $this->source, ($context["u"] ?? null), "lastname", [], "any", false, false, false, 3);
        echo "</strong>
    </p>
    <p style=\"margin: 0px; font-size:14px; font-family: Helvetica, Arial, sans-serif; padding-bottom: 5px;\">
        ";
        // line 6
        echo twig_get_attribute($this->env, $this->source, ($context["u"] ?? null), "s_address", [], "any", false, false, false, 6);
        echo " <br>";
        echo twig_get_attribute($this->env, $this->source, ($context["u"] ?? null), "s_address_2", [], "any", false, false, false, 6);
        echo "
    </p>
    <p style=\"margin: 0px; font-size:14px; font-family: Helvetica, Arial, sans-serif; padding-bottom: 5px;\">
        ";
        // line 9
        echo twig_get_attribute($this->env, $this->source, ($context["u"] ?? null), "s_city", [], "any", false, false, false, 9);
        echo ", ";
        echo twig_get_attribute($this->env, $this->source, ($context["u"] ?? null), "s_state_descr", [], "any", false, false, false, 9);
        echo " ";
        echo twig_get_attribute($this->env, $this->source, ($context["u"] ?? null), "s_zipcode", [], "any", false, false, false, 9);
        echo "
    </p>
    <p style=\"margin: 0px; font-size:14px; font-family: Helvetica, Arial, sans-serif; padding-bottom: 5px;\">
        ";
        // line 12
        echo twig_get_attribute($this->env, $this->source, ($context["u"] ?? null), "s_country_descr", [], "any", false, false, false, 12);
        echo "
    </p>
    <p style=\"margin: 0px; font-size:14px; font-family: Helvetica, Arial, sans-serif; padding-bottom: 5px;\">
        <span dir=\"ltr\">";
        // line 15
        echo twig_get_attribute($this->env, $this->source, ($context["u"] ?? null), "phone", [], "any", false, false, false, 15);
        echo "</span>
    </p>
";
    }

    public function getTemplateName()
    {
        return "__string_template__3faba0ca60ac619cd8b9491b376c22061be8f5e22fa3ae0fc286e3ca9b8d5bc3";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 15,  69 => 12,  59 => 9,  51 => 6,  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__3faba0ca60ac619cd8b9491b376c22061be8f5e22fa3ae0fc286e3ca9b8d5bc3", "");
    }
}
