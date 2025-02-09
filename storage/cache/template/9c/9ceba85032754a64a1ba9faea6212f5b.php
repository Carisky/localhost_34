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

/* default/template/common/carousel.twig */
class __TwigTemplate_0e3e7b2fa947b73bd906f8a20305d3bc extends Template
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
\t<link href=\"catalog/view/theme/default/stylesheet/common/carousel.css\" type=\"text/css\" rel=\"stylesheet\"/>
</head>

<div class=\"carousel-desktop\">
\t<div class=\"carousel-lower\">
\t\t<div class=\"lower-text\">
\t\t\t<p class=\"line-1\">Spichlerz -</p>
\t\t\t<p class=\"line-2\">tradycyjne</p>
\t\t\t<p class=\"line-3\">jedzenie</p>
\t\t\t<p class=\"line-4\">Producent naturalnych konfitur, przetworów i syropów</p>
\t\t\t<a href=\"#\" class=\"link\">
\t\t\t\t<div class=\"content\">
\t\t\t\t\t<p class=\"text\">DO SKLEPU</p>
\t\t\t\t\t<img src=\"image/catalog/assets/arrow_right.svg\"/>
\t\t\t\t</div>
\t\t\t</a>
\t\t</div>
\t\t<div class=\"lower-background\">
\t\t\t<img id=\"carousel-bg\" src=\"image/catalog/assets/cherry_bg.png\" alt=\"Фон\"/>
\t\t</div>
\t</div>
\t<div class=\"carousel-upper\">
\t\t<div class=\"upper-slide active\">
\t\t\t<img src=\"image/catalog/assets/cherry.png\" alt=\"Товар 1\"/>
\t\t</div>
\t\t<div class=\"upper-slide\">
\t\t\t<img src=\"image/catalog/assets/honey.png\" alt=\"Товар 2\"/>
\t\t</div>
\t\t<div class=\"upper-slide\">
\t\t\t<img src=\"image/catalog/assets/chocolate.png\" alt=\"Товар 3\"/>
\t\t</div>
\t\t<div class=\"upper-slide\">
\t\t\t<img src=\"image/catalog/assets/currant.png\" alt=\"Товар 4\"/>
\t\t</div>
\t</div>
</div>

<div class=\"carousel-mobile\">
\t<div class=\"top\">
\t\t<div class=\"background\">
\t\t\t<img id=\"carousel-bg\" src=\"image/catalog/assets/cherry_bg.png\" alt=\"Фон\"/>
\t\t</div>
\t</div>
\t<div class=\"slider\">

\t\t<div class=\"slide\">
\t\t\t<img src=\"image/catalog/assets/cherry.png\" alt=\"Товар 1\"/>
\t\t</div>
\t</div>
\t<div class=\"bottom\">
\t\t<div class=\"text-mobile\">
\t\t\t<p class=\"line-1\">Spichlerz -</p>
\t\t\t<p class=\"line-2\">tradycyjne</p>
\t\t\t<p class=\"line-3\">jedzenie</p>
\t\t\t<p class=\"line-4\">Producent naturalnych konfitur,</p>
\t\t\t<p class=\"line-4\"> przetworów i syropów</p>
\t\t\t<a href=\"#\" class=\"link\">
\t\t\t\t<div class=\"content\">
\t\t\t\t\t<p class=\"text\">DO SKLEPU</p>
\t\t\t\t\t<img src=\"image/catalog/assets/arrow_right.svg\"/>
\t\t\t\t</div>
\t\t\t</a>
\t\t</div>

\t</div>
</div>

 <script type=\"text/javascript\" src=\"catalog/view/javascript/carousel/carousel.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "default/template/common/carousel.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/carousel.twig", "");
    }
}
