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

/* extension/module/nr_wholesale.twig */
class __TwigTemplate_a94e205e34e9b8f1aa003971095da259 extends Template
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
        echo ($context["header"] ?? null);
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form-module\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 17
        if (($context["error_warning"] ?? null)) {
            // line 18
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 22
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 24
        echo ($context["text_edit"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 27
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-module\" class=\"form-horizontal\">
\t\t\t<div class=\"form-group\">
\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 29
        echo ($context["entry_status"] ?? null);
        echo "</label>
\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t  <select name=\"module_nr_wholesale_status\" id=\"input-status\" class=\"form-control\">
\t\t\t\t\t";
        // line 32
        if (($context["module_nr_wholesale_status"] ?? null)) {
            // line 33
            echo "\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"0\">";
            // line 34
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t";
        } else {
            // line 36
            echo "\t\t\t\t\t<option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            // line 37
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t";
        }
        // line 39
        echo "\t\t\t\t  </select>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 43
        echo ($context["entry_discount"] ?? null);
        echo ", %</label>
\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t<input type=\"number\" name=\"module_nr_wholesale_discount\" value=\"";
        // line 45
        echo ($context["module_nr_wholesale_discount"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_discount"] ?? null);
        echo "\" class=\"form-control\" />
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 49
        echo ($context["entry_sum1"] ?? null);
        echo "</label>
\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t<input type=\"number\" name=\"module_nr_wholesale_sum1\" value=\"";
        // line 51
        echo ($context["module_nr_wholesale_sum1"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_sum1"] ?? null);
        echo "\" class=\"form-control\" />
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 55
        echo ($context["entry_discount1"] ?? null);
        echo ", %</label>
\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t<input type=\"number\" name=\"module_nr_wholesale_discount1\" value=\"";
        // line 57
        echo ($context["module_nr_wholesale_discount1"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_discount1"] ?? null);
        echo "\" class=\"form-control\" />
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 61
        echo ($context["entry_sum2"] ?? null);
        echo "</label>
\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t<input type=\"number\" name=\"module_nr_wholesale_sum2\" value=\"";
        // line 63
        echo ($context["module_nr_wholesale_sum2"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_sum2"] ?? null);
        echo "\" class=\"form-control\" />
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 67
        echo ($context["entry_discount2"] ?? null);
        echo ", %</label>
\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t<input type=\"number\" name=\"module_nr_wholesale_discount2\" value=\"";
        // line 69
        echo ($context["module_nr_wholesale_discount2"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_discount2"] ?? null);
        echo "\" class=\"form-control\" />
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 73
        echo ($context["entry_sum3"] ?? null);
        echo "</label>
\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t<input type=\"number\" name=\"module_nr_wholesale_sum3\" value=\"";
        // line 75
        echo ($context["module_nr_wholesale_sum3"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_sum3"] ?? null);
        echo "\" class=\"form-control\" />
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 79
        echo ($context["entry_discount3"] ?? null);
        echo ", %</label>
\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t<input type=\"number\" name=\"module_nr_wholesale_discount3\" value=\"";
        // line 81
        echo ($context["module_nr_wholesale_discount3"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_discount3"] ?? null);
        echo "\" class=\"form-control\" />
\t\t\t\t</div>
\t\t\t</div>
        </form>
      </div>
    </div>
  </div>
</div>
";
        // line 89
        echo ($context["footer"] ?? null);
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "extension/module/nr_wholesale.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  243 => 89,  230 => 81,  225 => 79,  216 => 75,  211 => 73,  202 => 69,  197 => 67,  188 => 63,  183 => 61,  174 => 57,  169 => 55,  160 => 51,  155 => 49,  146 => 45,  141 => 43,  135 => 39,  130 => 37,  125 => 36,  120 => 34,  115 => 33,  113 => 32,  107 => 29,  102 => 27,  96 => 24,  92 => 22,  84 => 18,  82 => 17,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/nr_wholesale.twig", "");
    }
}
