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

/* __string_template__508c68959092f5f659ada14fb7f5293bbcb08ba5b09ba8760994b04325ca7065 */
class __TwigTemplate_f5aeddd369a58d7f70b653e4f5b75f3ecbc06da2bb650cbcff2fa4beea3949f7 extends \Twig\Template
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
        echo "
                ";
        // line 2
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->snippetFunction($this->env, $context, "header");
        echo "
";
        // line 3
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "vendor_debt_payout.weekly_digest_of_debtors.message", ["[href]" => ($context["href"] ?? null)]);
        echo "
<br /><br />
";
        // line 5
        if (($context["suspended_vendors"] ?? null)) {
            // line 6
            echo "    <b>";
            echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "vendor_debt_payout.list_of_vendors_got_suspended_label");
            echo "</b>
    <br /><br />
    <table width=\"50%\">
        <tr><th>";
            // line 9
            echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "vendor");
            echo "</th><th>";
            echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "vendor_debt_payout.debt_owned");
            echo "</th></tr>
        ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["suspended_vendors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["vendor"]) {
                // line 11
                echo "            <tr><td>";
                echo twig_get_attribute($this->env, $this->source, $context["vendor"], "company", [], "any", false, false, false, 11);
                echo "</td><td>";
                echo twig_get_attribute($this->env, $this->source, $context["vendor"], "debt", [], "any", false, false, false, 11);
                echo "</td></tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vendor'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "    </table>
";
        } else {
            // line 15
            echo "    <b>";
            echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "vendor_debt_payout.empty_list_of_vendors_got_suspended_label");
            echo "</b>
";
        }
        // line 17
        echo "<br /><br />
";
        // line 18
        if (($context["active_vendors"] ?? null)) {
            // line 19
            echo "    <b>";
            echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "vendor_debt_payout.list_of_vendors_got_suspended_and_paid_label");
            echo "</b>
    <br /><br />
    <table width=\"50%\">
        <tr><th>";
            // line 22
            echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "vendor");
            echo "</th><th>";
            echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "vendor_debt_payout.account_balance");
            echo "</th></tr>
        ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["active_vendors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["vendor"]) {
                // line 24
                echo "            <tr><td>";
                echo twig_get_attribute($this->env, $this->source, $context["vendor"], "company", [], "any", false, false, false, 24);
                echo "</td><td>";
                echo twig_get_attribute($this->env, $this->source, $context["vendor"], "balance", [], "any", false, false, false, 24);
                echo "</td></tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vendor'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "    </table>
";
        } else {
            // line 28
            echo "    <b>";
            echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "vendor_debt_payout.empty_list_of_vendors_got_suspended_and_paid_label");
            echo "</b>
";
        }
        // line 30
        echo "<br /><br />
<b>";
        // line 31
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "vendor_debt_payout.total_debts", ["[total_debt]" => ($context["total_debt"] ?? null)]);
        echo "</b>
";
        // line 32
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->snippetFunction($this->env, $context, "footer");
        echo "
            ";
    }

    public function getTemplateName()
    {
        return "__string_template__508c68959092f5f659ada14fb7f5293bbcb08ba5b09ba8760994b04325ca7065";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 32,  135 => 31,  132 => 30,  126 => 28,  122 => 26,  111 => 24,  107 => 23,  101 => 22,  94 => 19,  92 => 18,  89 => 17,  83 => 15,  79 => 13,  68 => 11,  64 => 10,  58 => 9,  51 => 6,  49 => 5,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__508c68959092f5f659ada14fb7f5293bbcb08ba5b09ba8760994b04325ca7065", "");
    }
}
