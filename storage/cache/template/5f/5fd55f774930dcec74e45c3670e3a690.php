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

/* default/template/product/category.twig */
class __TwigTemplate_7a1ed7c58c737d3d1abfa88d252efced extends Template
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

<div class=\"shop container\">
  ";
        // line 4
        if (($context["breadcrumbs"] ?? null)) {
            // line 5
            echo "    <ul class=\"breadcrumb\">
      ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
                // line 7
                echo "        <li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 7);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 7);
                echo "</a></li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            echo "    </ul>
  ";
        }
        // line 11
        echo "
  <!-- Меню категорий -->
  <div class=\"categories-list\">
    <ul>
      ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 16
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 16);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 16);
            echo "</a></li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "    </ul>
  </div>

  <!-- Заголовок категории -->
  <h1>";
        // line 22
        echo ($context["heading_title"] ?? null);
        echo "</h1>
  <div class=\"category-description\">
    ";
        // line 24
        echo ($context["description"] ?? null);
        echo "
  </div>

  <!-- Список товаров -->
  <div class=\"products-list\">
    ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 30
            echo "      <div class=\"product-card\">
        <a href=\"";
            // line 31
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 31);
            echo "\">
          <img src=\"";
            // line 32
            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 32);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 32);
            echo "\" />
          <h3>";
            // line 33
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 33);
            echo "</h3>
        </a>
        <p class=\"price\">";
            // line 35
            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 35);
            echo "</p>
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "  </div>

  <!-- Пагинация -->
  <div class=\"pagination\">
    ";
        // line 42
        echo ($context["pagination"] ?? null);
        echo "
  </div>
</div>

";
        // line 46
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "default/template/product/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 46,  144 => 42,  138 => 38,  129 => 35,  124 => 33,  118 => 32,  114 => 31,  111 => 30,  107 => 29,  99 => 24,  94 => 22,  88 => 18,  77 => 16,  73 => 15,  67 => 11,  63 => 9,  52 => 7,  48 => 6,  45 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/product/category.twig", "");
    }
}
