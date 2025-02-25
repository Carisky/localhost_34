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

/* default/template/blog/article.twig */
class __TwigTemplate_22e7a04b3d3d28ecc88a6f584fce9e6d extends Template
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
<div id=\"blog\" class=\"blog-article\">
\t<div class=\"heading-image posr df fdc jcc ta3\">
\t\t<div class=\"container\">
\t\t\t<div class=\"breadcrumbs ta3 posr\">
\t\t\t";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 7
            echo "\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 7)) {
                // line 8
                echo "\t\t\t\t<span>";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 8);
                echo "</span>
\t\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 9
$context["loop"], "index", [], "any", false, false, false, 9) != 2)) {
                // line 10
                echo "\t\t\t\t<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 10);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 10);
                echo "</a>
\t\t\t\t<i>/</i>
\t\t\t\t";
            }
            // line 13
            echo "\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "\t\t\t</div>
\t\t\t<h1 class=\"heading-title posr ta\">";
        // line 15
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t\t</div>
\t\t<div class=\"placeholder ta3\"></div>
\t\t<div class=\"inner posa ta3\">
\t\t\t<img srcset=\"";
        // line 19
        echo ($context["image1"] ?? null);
        echo " 1600w, ";
        echo ($context["image"] ?? null);
        echo " 3600w\" src=\"";
        echo ($context["image"] ?? null);
        echo "\" alt=\"\" class=\"posa ta3\">
\t\t</div>
\t\t<div class=\"image-mob\" style=\"background-image:url('";
        // line 21
        echo ($context["image2"] ?? null);
        echo "')\"></div>
\t</div>
\t<div class=\"container\">
\t\t<article>
\t\t\t<div class=\"content\">";
        // line 25
        echo ($context["description"] ?? null);
        echo "</div>
\t\t</article>
\t</div>\t
\t";
        // line 28
        if (($context["articles"] ?? null)) {
            // line 29
            echo "\t<h3 class=\"article-title2 cnt\">Może Ci się spodobać również</h3>
\t<div class=\"slider nr-articles owl-carousel\" data-slider>
\t\t";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 32
                echo "\t\t<div class=\"article-slide top";
                echo twig_get_attribute($this->env, $this->source, $context["article"], "top", [], "any", false, false, false, 32);
                echo " ta\">
\t\t\t<div class=\"inner\">
\t\t\t\t<div class=\"image posr\">
\t\t\t\t\t<div class=\"inner posa pp df aic jcc\">
\t\t\t\t\t\t<img src=\"";
                // line 36
                echo twig_get_attribute($this->env, $this->source, $context["article"], "thumb", [], "any", false, false, false, 36);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["article"], "name", [], "any", false, false, false, 36);
                echo "\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"title\">";
                // line 39
                echo twig_get_attribute($this->env, $this->source, $context["article"], "name", [], "any", false, false, false, 39);
                echo "</div>
\t\t\t\t<a href=\"";
                // line 40
                echo twig_get_attribute($this->env, $this->source, $context["article"], "href", [], "any", false, false, false, 40);
                echo "\" class=\"pp posa\"></a>
\t\t\t</div>
\t\t</div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo " 
\t</div>
\t";
        }
        // line 46
        echo "\t";
        echo ($context["content_top"] ?? null);
        echo "
\t";
        // line 47
        echo ($context["column_left"] ?? null);
        echo "
\t";
        // line 48
        echo ($context["column_right"] ?? null);
        echo "
\t";
        // line 49
        echo ($context["content_bottom"] ?? null);
        echo "
</div>
";
        // line 51
        echo ($context["footer"] ?? null);
        echo "
<script src=\"/catalog/view/theme/noir/js/owl.carousel.min.js\"></script>
<script>
var img_ratio = ";
        // line 54
        echo ($context["ratio"] ?? null);
        echo ",
\tw_width = \$(window).width(),
\thih = \$('.heading-image').outerHeight();

\$(window).resize(function() {
\tw_width = \$(window).width();
\tif(w_width > 767) location.reload();
});

function setHeading() {
\tif(!img_ratio) return;
\tif(w_width < 768) return;
\tif(\$(window).scrollTop() > 20) {
\t\tvar imh =  w_width * (img_ratio - 0.5);
\t\t\$('.heading-image').css('height', '50vw');
\t\t\$('.heading-image img').css('top', '-'+imh+'px');
\t} else {
\t\t\$('.heading-image').css('height', hih+'px');
\t\t\$('.heading-image img').css('top', 0);
\t}
}

if(\$('[data-slider]').length) {
\t\$('[data-slider]').owlCarousel({
\t\tloop:true,
\t\tdots: false,
\t\tautoplay:true,
\t\tautoplayTimeout:5000,
\t\tautoplaySpeed: 1000,
\t\tautoplayHoverPause:true,
\t\tresponsive:{
\t\t\t0:{
\t\t\t\titems:1,
\t\t\t},
\t\t\t421:{
\t\t\t\titems:2,
\t\t\t},
\t\t\t600:{
\t\t\t\titems:3,
\t\t\t},
\t\t\t1000:{
\t\t\t\titems:4,
\t\t\t},
\t\t\t1350:{
\t\t\t\titems:5,
\t\t\t}
\t\t}
\t});
}
</script>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "default/template/blog/article.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 54,  190 => 51,  185 => 49,  181 => 48,  177 => 47,  172 => 46,  167 => 43,  157 => 40,  153 => 39,  145 => 36,  137 => 32,  133 => 31,  129 => 29,  127 => 28,  121 => 25,  114 => 21,  105 => 19,  98 => 15,  95 => 14,  81 => 13,  72 => 10,  70 => 9,  65 => 8,  62 => 7,  45 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/blog/article.twig", "");
    }
}
