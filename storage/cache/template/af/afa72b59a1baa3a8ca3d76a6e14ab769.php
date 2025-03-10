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

/* default/template/common/promotion.twig */
class __TwigTemplate_a5ba05c5ffca99b5141a83597721d866 extends Template
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
        echo "<div class=\"promotion-block\">
\t<div class=\"info\">
\t\t<p class=\"name\">
\t\t\tPROMOCJA
\t\t</p>
\t\t<p class=\"title\">
\t\t\t-10% rabatu z kodem
\t\t</p>
\t\t<p class=\"code\">
\t\t\tkarmel10
\t\t</p>
\t\t<a href=\"#\" class=\"link\">
\t\t\t<div id=\"promo-link\" class=\"content\">
\t\t\t\t<p class=\"text\">ZOBACZ PRODUKTY</p>
\t\t\t\t<img src=\"image/catalog/assets/arrow_right.svg\"/>
\t\t\t</div>
\t\t</a>
\t</div>
\t<div class=\"space\"></div>
\t<img src=\"image/catalog/assets/lemons_in_syrop.png\"/>
</div>

<div class=\"promotion-block-mobile\">
\t<div class=\"info\">
\t\t<p class=\"name\">
\t\t\tPROMOCJA
\t\t</p>
\t\t<p class=\"title\">
\t\t\t-10% rabatu z kodem
\t\t\t<span class=\"code\">
\t\t\t\tkarmel10
\t\t\t</span>
\t\t</p>
\t</div>
\t<img src=\"image/catalog/assets/lemons_in_syrop.png\"/>
\t<a href=\"#\" class=\"link\">
\t\t\t<div id=\"promo-link\" class=\"content\">
\t\t\t\t<p class=\"text\">ZOBACZ PRODUKTY</p>
\t\t\t\t<img src=\"image/catalog/assets/arrow_right.svg\"/>
\t\t\t</div>
\t\t</a>
</div>
";
    }

    public function getTemplateName()
    {
        return "default/template/common/promotion.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/promotion.twig", "");
    }
}
