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

/* default/template/common/footer.twig */
class __TwigTemplate_65bb05c169e4e2ed10ce93bdbd96d25e extends Template
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
        echo "<footer>
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
\t\t\t\t<a href=\"index.php?route=common/about_us\">O NAS</a>
\t\t\t\t<a href=\"index.php?route=common/shop\">SKLEP</a>
\t\t\t\t<a href=\"index.php?route=common/wholesale\">HURTOWNIA</a>
\t\t\t\t<a href=\"index.php?route=common/workwithus\">WSPÓŁPRACA</a>
\t\t\t</div>
\t\t\t<div class=\"footer-list\">
\t\t\t\t<a href=\"\">REGULAMIN SKLEPU</a>
\t\t\t\t<a href=\"\">NAJCZĘŚCIEJ ZADAWANE PYTANIA</a>
\t\t\t\t<a href=\"\">KOSZT I SPOSÓB DOSTAWY</a>
\t\t\t\t<a href=\"index.php?route=common/contact\">KONTAKT</a>
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
\t\t\t\t<a href=\"index.php?route=common/about_us\">O NAS</a>
\t\t\t\t<a href=\"index.php?route=common/shop\">SKLEP</a>
\t\t\t\t<a href=\"index.php?route=common/wholesale\">HURTOWNIA</a>
\t\t\t\t<a href=\"index.php?route=common/workwithus\">WSPÓŁPRACA</a>
\t\t\t</div>
\t\t\t<div class=\"footer-list\">
\t\t\t\t<a href=\"\">REGULAMIN SKLEPU</a>
\t\t\t\t<a href=\"\">NAJCZĘŚCIEJ ZADAWANE PYTANIA</a>
\t\t\t\t<a href=\"\">KOSZT I SPOSÓB DOSTAWY</a>
\t\t\t\t<a href=\"index.php?route=common/contact\">KONTAKT</a>
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
\t";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 61
            echo "\t\t <script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "</footer>
";
    }

    public function getTemplateName()
    {
        return "default/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 63,  102 => 61,  98 => 60,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/footer.twig", "");
    }
}
