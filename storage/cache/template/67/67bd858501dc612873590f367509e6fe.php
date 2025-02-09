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

/* catalog/view/template/error/not_found.twig */
class __TwigTemplate_2a705bb8a99a3931403ec8473f573db9 extends Template
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
        echo "<head>
\t<link href=\"catalog/view/stylesheet/common/not_found.css\" type=\"text/css\" rel=\"stylesheet\"/>
</head>

";
        // line 5
        echo ($context["header"] ?? null);
        echo "
<div id=\"error-not-found\" class=\"container\">
\t<div class=\"not-found-page\">

\t\t<div class=\"element text\">4</div>
\t\t<div class=\"element image\">

\t\t\t<img src=\"image/catalog/assets/error_page.png\"/>
\t\t\t<div class=\"over\">
\t\t\t\t<div class=\"error\">Ojej! Coś poszło nie tak.
\t\t\t\t</div>
\t\t\t\t<div class=\"description\">
\t\t\t\t\t<p>Nie znaleziono żądanej strony lub strona nie istnieje.</p>
\t\t\t\t\t<p>Prosimy użyć menu lub opcji wyszukiwania w portalu.</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"element text\">4</div>

\t</div>
</div>
";
        // line 26
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/error/not_found.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 26,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/error/not_found.twig", "C:\\OSPanel\\domains\\localhost\\catalog\\view\\template\\error\\not_found.twig");
    }
}
