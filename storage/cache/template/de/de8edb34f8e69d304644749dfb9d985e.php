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

/* default/template/common/categories_list.twig */
class __TwigTemplate_16a98cf19518293a5fcc3584984e71ac extends Template
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
        echo "<div class=\"categories-list\">
\t<div class=\"container\">
\t\t<img src=\"/image/catalog/assets/konfitury--2048x2048.png\"/>
\t\t<a href=\"/konfitury\">KONFITURY</a>
\t</div>
\t<div class=\"container\">
\t\t<img src=\"/image/catalog/assets/maluchy-2048x2048.png\"/>
\t\t<a href=\"/mini40g\">MALUCHY W  <br>SPICHLERZU</a>
\t</div>
\t<div class=\"container\">
\t\t<img src=\"/image/catalog/assets/Miody-2048x2048.png\"/>
\t\t<a href=\"/miody\">MIODY</a>
\t</div>
\t<div class=\"container\">
\t\t<img src=\"/image/catalog/assets/owoce-w-syropie-2048x2048.png\"/>
\t\t<a href=\"/owoce-w-syropie\">OWOCE W <br> SYROPIE</a>
\t</div>
\t<div class=\"container\">
\t\t<img src=\"/image/catalog/assets/przetwory.jpg\"/>
\t\t<a href=\"/przetwory-warzywne\">PRZETWORY <br> WARZYWNE</a>
\t</div>
\t<div class=\"container\">
\t\t<img src=\"/image/catalog/assets/syropy-2048x2048.png\"/>
\t<a href=\"/syropy\">SYROPY</a>
\t</div>
\t<div class=\"container\">
\t\t<img src=\"/image/catalog/assets/gift_packs.jpeg\"/>
\t<a href=\"/zestawy-prezentowe\">ZESTAWY <br> PREZENTOWE</a>
\t</div>
</div>

";
    }

    public function getTemplateName()
    {
        return "default/template/common/categories_list.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/categories_list.twig", "");
    }
}
