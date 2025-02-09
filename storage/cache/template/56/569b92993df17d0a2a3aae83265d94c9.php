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

/* catalog/view/template/common/footer.twig */
class __TwigTemplate_d395eff92bfc7efe656b27a3262f4d8c extends Template
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
\t<link href=\"catalog/view/stylesheet/common/footer.css\" type=\"text/css\" rel=\"stylesheet\"/>
</head>

<footer>
\t<div class=\"desktop\">
\t\t<div class=\"footer-top\">
\t\t\t<div class=\"footer-list\">
\t\t\t\t<div class=\"footer-logo\">
\t\t\t\t\t<img src=\"image/catalog/assets/white_logo.svg\">
\t\t\t\t</div>
\t\t\t\t<div class=\"social-networks\">
\t\t\t\t\t<div><img src=\"image/catalog/assets/allegro_icon.svg\"/></div>
\t\t\t\t\t<div><img src=\"image/catalog/assets/instagram_icon.svg\"/></div>
\t\t\t\t\t<div><img src=\"image/catalog/assets/facebook_icon.svg\"/></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"footer-list\">
\t\t\t\t<a href=\"\">O NAS</a>
\t\t\t\t<a href=\"\">SKLEP</a>
\t\t\t\t<a href=\"\">HURTOWNIA</a>
\t\t\t\t<a href=\"\">WSPÓŁPRACA</a>
\t\t\t</div>
\t\t\t<div class=\"footer-list\">
\t\t\t\t<a href=\"\">REGULAMIN SKLEPU</a>
\t\t\t\t<a href=\"\">NAJCZĘŚCIEJ ZADAWANE PYTANIA</a>
\t\t\t\t<a href=\"\">KOSZT I SPOSÓB DOSTAWY</a>
\t\t\t\t<a href=\"\">KONTAKT</a>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"footer-separator\"></div>
\t\t<div class=\"footer-bottom\">
\t\t\t<div>
\t\t\t\tCopyright 2023. Wszelkie prawa zastrzeżone.
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"footer-mobile\">
\t\t<div class=\"top\">
\t\t\t<img src=\"image/catalog/assets/white_logo.svg\">
\t\t</div>
\t\t<div class=\"midle\">
\t\t\t<div class=\"footer-list\">
\t\t\t\t<a href=\"\">O NAS</a>
\t\t\t\t<a href=\"\">SKLEP</a>
\t\t\t\t<a href=\"\">HURTOWNIA</a>
\t\t\t\t<a href=\"\">WSPÓŁPRACA</a>
\t\t\t</div>
\t\t\t<div class=\"footer-list\">
\t\t\t\t<a href=\"\">REGULAMIN SKLEPU</a>
\t\t\t\t<a href=\"\">NAJCZĘŚCIEJ ZADAWANE PYTANIA</a>
\t\t\t\t<a href=\"\">KOSZT I SPOSÓB DOSTAWY</a>
\t\t\t\t<a href=\"\">KONTAKT</a>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"bottom\">
\t\t\t<div class=\"social-networks\">
\t\t\t\t<div><img src=\"image/catalog/assets/allegro_icon.svg\"/></div>
\t\t\t\t<div><img src=\"image/catalog/assets/instagram_icon.svg\"/></div>
\t\t\t\t<div><img src=\"image/catalog/assets/facebook_icon.svg\"/></div>
\t\t\t</div>
\t\t</div>
\t</div>
</footer>
";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/common/footer.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/common/footer.twig", "C:\\OSPanel\\domains\\localhost\\catalog\\view\\template\\common\\footer.twig");
    }
}
