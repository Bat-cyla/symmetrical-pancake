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

/* __string_template__3cf3293ef8a2059f12f033c5e025912d60e41f40ff63c7a26d0b8b4c20bb395e */
class __TwigTemplate_e62891ba7b516f4588f76ff4defd1c09f0219a9253afe2d1f0a8ffd62997ca7b extends \Twig\Template
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
        echo "<table>
<tbody>
<tr>
    <td rowspan=\"2\" style=\"padding-right: 20px; font-family: Helvetica, Arial, sans-serif;\" width=\"20%\">";
        // line 4
        echo twig_get_attribute($this->env, $this->source, ($context["p"] ?? null), "image", [], "any", false, false, false, 4);
        echo "
    </td>
    <td style=\"vertical-align: middle; text-align: left;\" width=\"80%\"><span style=\"font-family: Helvetica, Arial, sans-serif; text-transfrom: uppercase; \"><strong style=\"font-weight: bold;\"><a href=\"";
        // line 6
        echo twig_get_attribute($this->env, $this->source, ($context["p"] ?? null), "product_url", [], "any", false, false, false, 6);
        echo "\">";
        echo twig_get_attribute($this->env, $this->source, ($context["p"] ?? null), "name", [], "any", false, false, false, 6);
        echo "</a></strong></span>
    </td>
</tr>
<tr>
    <td style=\"vertical-align: top; text-align: left; font-family: Helvetica, Arial, sans-serif;\"><span style=\"font-size: 11px; font-weight: normal; font-family: Helvetica, Arial, sans-serif; color: #a8a8a8; \">";
        // line 10
        if (twig_get_attribute($this->env, $this->source, ($context["p"] ?? null), "product_code", [], "any", false, false, false, 10)) {
            echo twig_get_attribute($this->env, $this->source, ($context["p"] ?? null), "product_code", [], "any", false, false, false, 10);
            echo "<br> ";
        }
        if (twig_get_attribute($this->env, $this->source, ($context["p"] ?? null), "options", [], "any", false, false, false, 10)) {
            echo twig_get_attribute($this->env, $this->source, ($context["p"] ?? null), "options", [], "any", false, false, false, 10);
        }
        echo "</span>
    </td>
</tr>
</tbody>
</table>";
    }

    public function getTemplateName()
    {
        return "__string_template__3cf3293ef8a2059f12f033c5e025912d60e41f40ff63c7a26d0b8b4c20bb395e";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 10,  47 => 6,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__3cf3293ef8a2059f12f033c5e025912d60e41f40ff63c7a26d0b8b4c20bb395e", "");
    }
}
