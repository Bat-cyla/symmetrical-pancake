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

/* __string_template__4de042256e216367dc298ac27d28e24d14b1af12d2835a4117febd96075a3866 */
class __TwigTemplate_67974efd27f7ada96fc4a92dc6969da202ce99aff3dc9f7496b8735308f184db extends \Twig\Template
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
        if (twig_get_attribute($this->env, $this->source, ($context["products_table"] ?? null), "rows", [], "any", false, false, false, 1)) {
            // line 2
            echo "<table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" style=\"border-top: 3px solid #444; color: #444;  text-transofrm: uppercase; border-collapse: separate; font-family: Helvetica, Arial, sans-serif;\">
    <tbody>
        <tr style=\"font-size: 12px; font-family: Helvetica, Arial, sans-serif; font-weight: bold; text-transform: uppercase; text-align: center; vertical-aling: top;\">
            ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["products_table"] ?? null), "headers", [], "any", false, false, false, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["header"]) {
                // line 6
                echo "                <td style=\"padding:10px; font-family: Helvetica, Arial, sans-serif;\">";
                echo $context["header"];
                echo "</td>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['header'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            echo "        </tr>
        ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["products_table"] ?? null), "rows", [], "any", false, false, false, 9));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 10
                echo "            <tr style=\"font-size: 14px; font-family: Helvetica, Arial, sans-serif; font-weight: normal; text-transform: uppercase; text-align: center; vertical-aling: middle;\">
                ";
                // line 11
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["row"]);
                foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                    // line 12
                    echo "                    <td style=\"padding:10px 0px; border-bottom: 1px solid #ebebeb; font-family: Helvetica, Arial, sans-serif;\">";
                    echo $context["column"];
                    echo "</td>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 14
                echo "            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "    </tbody>
</table>
";
        }
    }

    public function getTemplateName()
    {
        return "__string_template__4de042256e216367dc298ac27d28e24d14b1af12d2835a4117febd96075a3866";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 16,  80 => 14,  71 => 12,  67 => 11,  64 => 10,  60 => 9,  57 => 8,  48 => 6,  44 => 5,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__4de042256e216367dc298ac27d28e24d14b1af12d2835a4117febd96075a3866", "");
    }
}
