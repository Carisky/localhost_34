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
class __TwigTemplate_b05d66bd34f96c22e7632b4633d2a36e extends Template
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
        // line 12
        echo ($context["column_left"] ?? null);
        echo "
\t\t";
        // line 13
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 14
            echo "\t\t\t";
            $context["class"] = "col-sm-6";
            // line 15
            echo "\t\t";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 16
            echo "\t\t\t";
            $context["class"] = "col-sm-9";
            // line 17
            echo "\t\t";
        } else {
            // line 18
            echo "\t\t\t";
            $context["class"] = "col-sm-12";
            // line 19
            echo "\t\t";
        }
        // line 20
        echo "\t\t<div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">
\t\t\t";
        // line 21
        echo ($context["content_top"] ?? null);
        echo "

\t\t\t";
        // line 23
        echo ($context["content_bottom"] ?? null);
        echo "
\t\t</div>
\t\t";
        // line 25
        echo ($context["column_right"] ?? null);
        echo "
\t</div>
</div>
";
        // line 28
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
        return array (  96 => 28,  90 => 25,  85 => 23,  80 => 21,  75 => 20,  72 => 19,  69 => 18,  66 => 17,  63 => 16,  60 => 15,  57 => 14,  55 => 13,  51 => 12,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/information/information.twig", "");
    }
}
