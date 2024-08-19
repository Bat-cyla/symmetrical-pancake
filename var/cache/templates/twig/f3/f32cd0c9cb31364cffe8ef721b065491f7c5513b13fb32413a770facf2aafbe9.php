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

/* __string_template__c310ec1162b97a72adc17d0c7f637fbd664d57d8e83e309a36d2fb1769293284 */
class __TwigTemplate_30b14f38529e222ffb09ca9457c21a82c2573b0236c516063a7d7010038c0d01 extends \Twig\Template
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
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->snippetFunction($this->env, $context, "header", ["title" => $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "low_stock_subj", ["[product]" => ((($context["product"] ?? null) . " #") . ($context["product_id"] ?? null))])]);
        echo "

    <table class=\"info\">
      <tr>
        <td>";
        // line 5
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "product");
        echo ":</td>
        <td>";
        // line 6
        echo ($context["product"] ?? null);
        echo "</td>
      </tr>
      <tr>
        <td>";
        // line 9
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "id");
        echo ":</td>
        <td>";
        // line 10
        echo ($context["product_id"] ?? null);
        echo "</td>
      </tr>
      <tr>
        <td>";
        // line 13
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "sku");
        echo ":</td>
        <td>";
        // line 14
        echo ($context["product_code"] ?? null);
        echo "</td>
      </tr>
      <tr>
        <td>";
        // line 17
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "qty");
        echo ":</td>
        <td><b>";
        // line 18
        echo ($context["new_qty"] ?? null);
        echo "</b></td>
      </tr>
      ";
        // line 20
        if (($context["product_options"] ?? null)) {
            // line 21
            echo "      <tr>
        <td colspan=\"2\">";
            // line 22
            echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "product_options");
            echo ":
          <br>
          <hr>
        </td>
      </tr>
      ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["product_options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 28
                echo "      <tr>
        <td>";
                // line 29
                echo twig_get_attribute($this->env, $this->source, $context["option"], "option_name", [], "any", false, false, false, 29);
                echo ":</td>
        <td>";
                // line 30
                echo twig_get_attribute($this->env, $this->source, $context["option"], "variant_name", [], "any", false, false, false, 30);
                echo "</td>
      </tr>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo " ";
        }
        // line 33
        echo "    </table>

";
        // line 35
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->snippetFunction($this->env, $context, "footer");
    }

    public function getTemplateName()
    {
        return "__string_template__c310ec1162b97a72adc17d0c7f637fbd664d57d8e83e309a36d2fb1769293284";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 35,  119 => 33,  116 => 32,  107 => 30,  103 => 29,  100 => 28,  96 => 27,  88 => 22,  85 => 21,  83 => 20,  78 => 18,  74 => 17,  68 => 14,  64 => 13,  58 => 10,  54 => 9,  48 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__c310ec1162b97a72adc17d0c7f637fbd664d57d8e83e309a36d2fb1769293284", "");
    }
}
