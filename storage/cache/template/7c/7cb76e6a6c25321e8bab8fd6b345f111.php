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

/* default/template/information/information.twig */
class __TwigTemplate_48caea233c727879d641258b6de820c8 extends Template
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
        echo "
<div id=\"information-information\" class=\"container\">
\t<div class=\"breadcrumbs\">
\t\t<div>
\t\t\t<a class=\"link\" href=\"/\">Głowna</a>
\t\t\t<span>
\t\t\t\t/
\t\t\t</span>
\t\t\t<a class=\"link last\" href=\"/hurt\">Hurt</a>

\t\t</div>
\t</div>
\t<div class=\"row\">";
        // line 13
        echo ($context["column_left"] ?? null);
        echo "
\t\t";
        // line 14
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 15
            echo "\t\t\t";
            $context["class"] = "col-sm-6";
            // line 16
            echo "\t\t";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 17
            echo "\t\t\t";
            $context["class"] = "col-sm-9";
            // line 18
            echo "\t\t";
        } else {
            // line 19
            echo "\t\t\t";
            $context["class"] = "col-sm-12";
            // line 20
            echo "\t\t";
        }
        // line 21
        echo "\t\t<div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">
\t\t\t";
        // line 22
        echo ($context["content_top"] ?? null);
        echo "

\t\t\t";
        // line 24
        echo ($context["content_bottom"] ?? null);
        echo "
\t\t</div>
\t\t";
        // line 26
        echo ($context["column_right"] ?? null);
        echo "
\t</div>
</div>
";
        // line 29
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "default/template/information/information.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 29,  91 => 26,  86 => 24,  81 => 22,  76 => 21,  73 => 20,  70 => 19,  67 => 18,  64 => 17,  61 => 16,  58 => 15,  56 => 14,  52 => 13,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/information/information.twig", "");
    }
}
