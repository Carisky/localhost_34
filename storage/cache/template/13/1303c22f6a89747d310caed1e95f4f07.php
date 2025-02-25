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

/* default/template/blog/category.twig */
class __TwigTemplate_1e76c907869fae1d5614ece5d35652e8 extends Template
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
<div id=\"blog\" class=\"page-wrapper container\">
\t<div class=\"breadcrumbs df fww\">
    ";
        // line 4
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
            // line 5
            echo "\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 5)) {
                // line 6
                echo "\t\t<span>";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 6);
                echo "</span>
\t\t";
            } else {
                // line 8
                echo "\t\t<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 8);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 8);
                echo "</a>
\t\t<i>/</i>
\t\t";
            }
            // line 11
            echo "    ";
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
        // line 12
        echo "\t</div>
\t<div class=\"blog-listing\">
\t\t<div class=\"blog-top\">
\t\t\t<h1 class=\"page-title\">";
        // line 15
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t\t\t";
        // line 16
        if (($context["description"] ?? null)) {
            // line 17
            echo "\t\t\t<div class=\"blog-category-description\">";
            echo ($context["description"] ?? null);
            echo "</div>
\t\t\t";
        }
        // line 19
        echo "\t\t</div>
\t\t";
        // line 20
        if (($context["articles"] ?? null)) {
            // line 21
            echo "\t\t<div class=\"blog-row df fww jcsb\">
\t\t\t";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                echo " 
\t\t\t<div class=\"blog-item posr ";
                // line 23
                echo (((twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 23) % 2 != 0)) ? ("odd") : ("even"));
                echo "\">
\t\t\t\t<div class=\"blog-image posr\">
\t\t\t\t\t<div class=\"inner posa pp df aic jcc\">
\t\t\t\t\t\t<img src=\"";
                // line 26
                echo twig_get_attribute($this->env, $this->source, $context["article"], "thumb", [], "any", false, false, false, 26);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["article"], "name", [], "any", false, false, false, 26);
                echo "\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<h4>";
                // line 29
                echo twig_get_attribute($this->env, $this->source, $context["article"], "name", [], "any", false, false, false, 29);
                echo "</h4>
\t\t\t\t<a class=\"pp posa\" href=\"";
                // line 30
                echo twig_get_attribute($this->env, $this->source, $context["article"], "href", [], "any", false, false, false, 30);
                echo "\"></a>
\t\t\t</div>
\t\t\t";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "\t\t</div>
\t\t";
            // line 34
            echo ($context["pagination"] ?? null);
            echo "
\t\t";
        } else {
            // line 36
            echo "\t\t<p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
\t\t";
        }
        // line 38
        echo "\t\t";
        echo ($context["content_top"] ?? null);
        echo "
\t</div>
\t";
        // line 40
        echo ($context["content_bottom"] ?? null);
        echo "
\t";
        // line 41
        echo ($context["column_right"] ?? null);
        echo "
";
        // line 42
        echo ($context["column_left"] ?? null);
        echo "
</div>
";
        // line 44
        echo ($context["footer"] ?? null);
        echo "
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "default/template/blog/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 44,  199 => 42,  195 => 41,  191 => 40,  185 => 38,  179 => 36,  174 => 34,  171 => 33,  154 => 30,  150 => 29,  142 => 26,  136 => 23,  117 => 22,  114 => 21,  112 => 20,  109 => 19,  103 => 17,  101 => 16,  97 => 15,  92 => 12,  78 => 11,  69 => 8,  63 => 6,  60 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/blog/category.twig", "");
    }
}
