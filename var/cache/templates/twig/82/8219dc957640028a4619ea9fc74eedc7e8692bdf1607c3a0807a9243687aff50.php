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

/* __string_template__78c85bc9328826ee3ddb0086f5334016538d8e600263949152c3a48cfddd877a */
class __TwigTemplate_1d23be1e47f30613dd79155098a702ac4d93d91394bc6644cc6d15344cfa3144 extends \Twig\Template
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
        echo "<table width=\"600\" style=\" font-family: Helvetica, Arial, sans-serif; border-collapse: separate;\" rel=\"min-width: 800px; font-family: Helvetica, Arial, sans-serif; border-collapse: separate;\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\">
<tbody>
<tr style=\"vertical-align: top;\">
    <td>
        <table width=\"100%;\" cellspacing=\"0\" border=\"0\" style=\"border-collapse: separate; font-family: Helvetica, Arial, sans-serif;\">
        <tbody>
        <tr>
            <td width=\"50%\" style=\"padding: 0px; padding-bottom: 10px; padding-right: 40px; vertical-align: top; font-family: Helvetica, Arial, sans-serif;\">
                ";
        // line 9
        if (twig_get_attribute($this->env, $this->source, ($context["pickup_point"] ?? null), "is_selected", [], "any", false, false, false, 9)) {
            // line 10
            echo "                ";
            echo $this->extensions['Tygh\Twig\TwigCoreExtension']->snippetFunction($this->env, $context, "pickup_point");
            echo "
                ";
        } else {
            // line 12
            echo "                ";
            echo $this->extensions['Tygh\Twig\TwigCoreExtension']->snippetFunction($this->env, $context, "ship_to");
            echo "
                ";
        }
        // line 14
        echo "            </td>
            <td width=\"50%\" style=\"padding: 0px; padding-bottom: 10px; padding-left: 40px; -webkit-print-color-adjust: exact; vertical-align: top; font-family: Helvetica, Arial, sans-serif;\">
                <p style=\"color: #787878; font-size: 14px; font-family: Helvetica, Arial, sans-serif; padding-bottom: 5px; margin: 0px;\">
                    <span style=\"color: #444444; font-weight: bold; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase;\">";
        // line 17
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "order_date");
        echo "</span>  ";
        echo twig_get_attribute($this->env, $this->source, ($context["o"] ?? null), "timestamp", [], "any", false, false, false, 17);
        echo "
                </p>
                <p style=\"color: #787878; font-size: 14px; font-family: Helvetica, Arial, sans-serif; padding-bottom: 5px; margin: 0px;\">
                    <span style=\"color: #444444; font-weight: bold; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase;\">";
        // line 20
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "payment");
        echo "</span>  ";
        echo twig_get_attribute($this->env, $this->source, ($context["p"] ?? null), "payment", [], "any", false, false, false, 20);
        echo "
                </p>
                <p style=\"color: #787878; font-size: 14px; font-family: Helvetica, Arial, sans-serif; padding-bottom: 5px; margin: 0px;\">
                    <span style=\"color: #444444; font-weight: bold; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase;\">";
        // line 23
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "shipping");
        echo "</span>  ";
        echo twig_get_attribute($this->env, $this->source, ($context["o"] ?? null), "shippings_method", [], "any", false, false, false, 23);
        echo "
                </p>
                ";
        // line 25
        if (twig_get_attribute($this->env, $this->source, ($context["o"] ?? null), "tracking_number", [], "any", false, false, false, 25)) {
            // line 26
            echo "                <p style=\"color: #787878; font-size: 14px; font-family: Helvetica, Arial, sans-serif; padding-bottom: 5px; margin: 0px;\">
                    <span style=\"color: #444444; font-weight: bold; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase;\">";
            // line 27
            echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "tracking_number");
            echo "</span>  ";
            echo twig_get_attribute($this->env, $this->source, ($context["o"] ?? null), "tracking_number", [], "any", false, false, false, 27);
            echo "
                </p>
                ";
        }
        // line 30
        echo "            </td>
        </tr>
        </tbody>
        </table>
    </td>
</tr>
<tr>
    <td style=\"padding: 0px;\">
        ";
        // line 38
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->snippetFunction($this->env, $context, "products_table");
        echo "
    </td>
</tr>
<tr>
    <td style=\"padding: 0px; border-top: 2px solid #f5f5f5; padding-top: 10px; font-family: Helvetica, Arial, sans-serif;\">
        <table width=\"100%\" style=\"border-collapse: separate; font-family: Helvetica, Arial, sans-serif;\">
        <tbody>
        <tr>
            <td width=\"66%\" style=\"font-size: 14px; font-family: Helvetica, Arial, sans-serif; line-height: 21px; color: #444444; padding-right: 30px; vertical-align:top;\">
                ";
        // line 47
        if (twig_get_attribute($this->env, $this->source, ($context["o"] ?? null), "notes", [], "any", false, false, false, 47)) {
            // line 48
            echo "                <h2 style=\"margin: 0px; font-size: 22px; font-family: Helvetica, Arial, sans-serif; color: #444444; text-transform: uppercase; padding-bottom: 20px; border-bottom: 3px solid #e8e8e8; margin-bottom: 10px;\">";
            echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "customer_notes");
            echo "</h2>
                ";
            // line 49
            echo twig_get_attribute($this->env, $this->source, ($context["o"] ?? null), "notes", [], "any", false, false, false, 49);
            echo "
                                ";
        }
        // line 51
        echo "            </td>
            <td width=\"34%\" style=\"vertical-align: top; font-family: Helvetica, Arial, sans-serif;\">
                <table width=\"100%;\" style=\"font-size: 14px; font-family: Helvetica, Arial, sans-serif; color: #444;\">
                <tbody>
                    <tr style=\" vertical-align: top; font-family: Helvetica, Arial, sans-serif;\">
                        <td align=\"left\" style=\"padding-bottom: 20px; font-family: Helvetica, Arial, sans-serif;\">";
        // line 56
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "subtotal");
        echo "
                        </td>
                        <td align=\"right\" style=\"font-family: Helvetica, Arial, sans-serif;\">";
        // line 58
        echo twig_get_attribute($this->env, $this->source, ($context["o"] ?? null), "display_subtotal", [], "any", false, false, false, 58);
        echo "
                        </td>
                    </tr>
                    <tr style=\" vertical-align: top;\">
                        <td align=\"left\" style=\"padding-bottom: 20px; text-transform: uppercase; font-family: Helvetica, Arial, sans-serif;\">";
        // line 62
        echo twig_get_attribute($this->env, $this->source, ($context["o"] ?? null), "tax_name", [], "any", false, false, false, 62);
        echo "
                        </td>
                        <td align=\"right\" style=\"font-family: Helvetica, Arial, sans-serif;\">";
        // line 64
        echo twig_get_attribute($this->env, $this->source, ($context["o"] ?? null), "tax_total", [], "any", false, false, false, 64);
        echo "
                        </td>
                    </tr>
                    <tr style=\" vertical-align: top;\">
                        <td align=\"left\" style=\"padding-bottom: 20px; font-family: Helvetica, Arial, sans-serif;\">";
        // line 68
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "shipping");
        echo "
                        </td>
                        <td align=\"right\" style=\"font-family: Helvetica, Arial, sans-serif;\">";
        // line 70
        echo twig_get_attribute($this->env, $this->source, ($context["o"] ?? null), "display_shipping_cost", [], "any", false, false, false, 70);
        echo "
                        </td>
                    </tr>
                    <tr style=\" vertical-align: top;\">
                        <td style=\"padding-bottom: 20px; font-family: Helvetica, Arial, sans-serif;\" align=\"left\">";
        // line 74
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "payment_surcharge");
        echo "
                        </td>
                        <td style=\"font-family: Helvetica, Arial, sans-serif;\" align=\"right\">";
        // line 76
        echo twig_get_attribute($this->env, $this->source, ($context["o"] ?? null), "payment_surcharge", [], "any", false, false, false, 76);
        echo "
                        </td>
                    </tr>
                    <tr style=\" vertical-align: top; font-family: Helvetica, Arial, sans-serif;\">
                        <td align=\"left\" style=\"font-family: Helvetica, Arial, sans-serif;\">";
        // line 80
        if (twig_get_attribute($this->env, $this->source, ($context["o"] ?? null), "coupon_code", [], "any", false, false, false, 80)) {
            echo " <div style=\"padding-bottom: 20px; font-family: Helvetica, Arial, sans-serif;\"> ";
            echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "coupon");
            echo " </div> ";
        }
        // line 81
        echo "                        </td>
                        <td align=\"right\" style=\"font-family: Helvetica, Arial, sans-serif;\">";
        // line 82
        if (twig_get_attribute($this->env, $this->source, ($context["o"] ?? null), "coupon_code", [], "any", false, false, false, 82)) {
            echo " ";
            echo twig_get_attribute($this->env, $this->source, ($context["o"] ?? null), "coupon_code", [], "any", false, false, false, 82);
            echo " ";
        }
        // line 83
        echo "                        </td>
                    </tr>
                    <tr style=\" vertical-align: top; font-family: Helvetica, Arial, sans-serif;\">
                        <td align=\"left\" style=\"font-family: Helvetica, Arial, sans-serif;\">";
        // line 86
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["o"] ?? null), "raw", [], "any", false, false, false, 86), "discount", [], "any", false, false, false, 86)) {
            echo " <div style=\"padding-bottom: 20px; font-family: Helvetica, Arial, sans-serif;\"> ";
            echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "including_discount");
            echo " </div> ";
        }
        // line 87
        echo "                        </td>
                        <td align=\"right\" style=\"font-family: Helvetica, Arial, sans-serif;\">";
        // line 88
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["o"] ?? null), "raw", [], "any", false, false, false, 88), "discount", [], "any", false, false, false, 88)) {
            echo " ";
            echo twig_get_attribute($this->env, $this->source, ($context["o"] ?? null), "discount", [], "any", false, false, false, 88);
            echo " ";
        }
        // line 89
        echo "                        </td>
                    </tr>
                    <tr style=\" vertical-align: top; font-family: Helvetica, Arial, sans-serif;\">
                        <td align=\"left\" style=\"font-family: Helvetica, Arial, sans-serif;\">";
        // line 92
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["o"] ?? null), "raw", [], "any", false, false, false, 92), "subtotal_discount", [], "any", false, false, false, 92)) {
            echo " <div style=\"padding-bottom: 20px; font-family: Helvetica, Arial, sans-serif;\"> ";
            echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "order_discount");
            echo " </div> ";
        }
        // line 93
        echo "                        </td>
                        <td align=\"right\" style=\"font-family: Helvetica, Arial, sans-serif;\">";
        // line 94
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["o"] ?? null), "raw", [], "any", false, false, false, 94), "subtotal_discount", [], "any", false, false, false, 94)) {
            echo " ";
            echo twig_get_attribute($this->env, $this->source, ($context["o"] ?? null), "subtotal_discount", [], "any", false, false, false, 94);
            echo " ";
        }
        // line 95
        echo "                        </td>
                    </tr>
                    <tr style=\" vertical-align: top; font-size: 22px; font-weight: bold; font-family: Helvetica, Arial, sans-serif;\">
                        <td align=\"left\" style=\"padding-top: 20px; border-top: 1px solid #e8e8e8; font-size: 22px; font-family: Helvetica, Arial, sans-serif;\">";
        // line 98
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "total");
        echo "
                        </td>
                        <td align=\"right\" style=\"padding-top: 20px; border-top: 1px solid #e8e8e8; font-size: 22px; font-family: Helvetica, Arial, sans-serif;\">";
        // line 100
        echo twig_get_attribute($this->env, $this->source, ($context["o"] ?? null), "total", [], "any", false, false, false, 100);
        echo "
                        </td>
                    </tr>
                </tbody>
                </table>
            </td>
        </tr>
        </tbody>
        </table>
    </td>
</tr>
</tbody>
</table>";
    }

    public function getTemplateName()
    {
        return "__string_template__78c85bc9328826ee3ddb0086f5334016538d8e600263949152c3a48cfddd877a";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  256 => 100,  251 => 98,  246 => 95,  240 => 94,  237 => 93,  231 => 92,  226 => 89,  220 => 88,  217 => 87,  211 => 86,  206 => 83,  200 => 82,  197 => 81,  191 => 80,  184 => 76,  179 => 74,  172 => 70,  167 => 68,  160 => 64,  155 => 62,  148 => 58,  143 => 56,  136 => 51,  131 => 49,  126 => 48,  124 => 47,  112 => 38,  102 => 30,  94 => 27,  91 => 26,  89 => 25,  82 => 23,  74 => 20,  66 => 17,  61 => 14,  55 => 12,  49 => 10,  47 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__78c85bc9328826ee3ddb0086f5334016538d8e600263949152c3a48cfddd877a", "");
    }
}
