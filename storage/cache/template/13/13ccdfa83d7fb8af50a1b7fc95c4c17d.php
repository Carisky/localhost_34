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

/* default/template/checkout/buy.twig */
class __TwigTemplate_86719d51454941b801972f6bc764229b extends Template
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
<div id=\"checkout-checkout\" class=\"page-wrapper container\">
\t<h1 class=\"page-title cnt\">";
        // line 3
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t<div class=\"cat-short-description cnt\">";
        // line 4
        echo ($context["heading_subtitle"] ?? null);
        echo "</div>
\t<form id=\"checkout\">
        <div class=\"checkout-cart\">
            <h2 class=\"product-title2\">";
        // line 7
        echo ($context["text_cart"] ?? null);
        echo "</h2>
            <div class=\"checkout-cart-list\" data-cart>
                ";
        // line 9
        if (($context["products"] ?? null)) {
            // line 10
            echo "                    <ul class=\"cart-products\">
                        ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 12
                echo "                            <li class=\"cart-item\">
                                <div class=\"product-image\">
                                    ";
                // line 14
                if (twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 14)) {
                    // line 15
                    echo "                                        <img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 15);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 15);
                    echo "\" width=\"50\" height=\"50\">
                                    ";
                }
                // line 17
                echo "                                </div>
                                <div class=\"product-details\">
                                    <div class=\"product-name\">";
                // line 19
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 19);
                echo "</div>
                                    <div class=\"product-quantity\">x";
                // line 20
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 20);
                echo "</div>
                                    <div class=\"product-price\">";
                // line 21
                echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 21);
                echo "</div>
                                </div>
                            </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "                    </ul>
                ";
        } else {
            // line 27
            echo "                    <p>Корзина пуста</p>
                ";
        }
        // line 29
        echo "            </div>
\t\t<div class=\"checkout-main df jcsb\">
\t\t\t<div class=\"column left-col\">
\t\t\t\t<h2 class=\"product-title2\">";
        // line 32
        echo ($context["text_your_details"] ?? null);
        echo "</h2>
\t\t\t\t<div class=\"checkout-profile\" data-address>";
        // line 33
        echo ($context["address"] ?? null);
        echo "</div>
\t\t\t</div>
\t\t\t<div class=\"column right-col\">
\t\t\t\t<h2 class=\"column product-title2\">";
        // line 36
        echo ($context["text_shipping_method"] ?? null);
        echo "</h2>
\t\t\t\t<div class=\"checkout-shipping\" data-shipping>";
        // line 37
        echo ($context["shipping"] ?? null);
        echo "</div>
\t\t\t\t<h2 class=\"column product-title2\">";
        // line 38
        echo ($context["text_payment_method"] ?? null);
        echo "</h2>
\t\t\t\t<div class=\"checkout-payment\" data-payment>";
        // line 39
        echo ($context["payment"] ?? null);
        echo "</div>
\t\t\t\t<h2 class=\"column product-title2\">";
        // line 40
        echo ($context["text_totals"] ?? null);
        echo "</h2>
\t\t\t\t<div class=\"checout-codes\">
\t\t\t\t";
        // line 42
        echo ($context["coupon"] ?? null);
        echo ($context["reward"] ?? null);
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"checkout-totals\" data-totals>";
        // line 44
        echo ($context["totals"] ?? null);
        echo "</div>
\t\t\t\t<div class=\"form-block\" data-error=\"agree\">
\t\t\t\t\t<label class=\"checkbox large-box df small-text\">
\t\t\t\t\t\t<input type=\"checkbox\" name=\"agree\" value=\"1\"";
        // line 47
        echo ((($context["agree"] ?? null)) ? (" checked") : (""));
        echo ">
\t\t\t\t\t\t<b></b>
\t\t\t\t\t\t<div>Zapoznałem się i akceptuję Regulamin Sklepu Internetowego, Politykę Prywatności w celu realizacji zamówienia. *</div>
\t\t\t\t\t</label>
\t\t\t\t\t<div class=\"form-error\"></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"confirm df jce\">
\t\t\t\t\t<button type=\"button\" class=\"btn df aic jcc\" onclick=\"save()\">
\t\t\t\t\t\tZamawiam
\t\t\t\t\t\t<svg width=\"24\" height=\"27\"><use xlink:href=\"/catalog/view/theme/noir/img/sprite.svg#cart\"></use></svg>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</form>
\t<div id=\"payment\" style=\"display:none;\"></div>
</div>
";
        // line 64
        echo ($context["footer"] ?? null);
        echo "
";
        // line 65
        if (($context["map_key"] ?? null)) {
            // line 66
            echo "<script src=\"catalog/view/theme/noir/js/inpost.js\"></script>
<script src=\"https://maps.googleapis.com/maps/api/js?key=";
            // line 67
            echo ($context["map_key"] ?? null);
            echo "&callback=initMap\"></script>
<script src=\"https://unpkg.com/@googlemaps/markerclusterer/dist/index.min.js\"></script>

";
            // line 70
            $context["geoWidgetToken"] = "eyJhbGciOiJSUzI1NiIsInR5cCIgOiAiSldUIiwia2lkIiA6ICJzQlpXVzFNZzVlQnpDYU1XU3JvTlBjRWFveFpXcW9Ua2FuZVB3X291LWxvIn0.eyJleHAiOjIwMTM1NzA1OTcsImlhdCI6MTY5ODIxMDU5NywianRpIjoiZjFhZGIzMTMtZjMzYy00ZmNjLTlkMWMtYTAwOWU0MjAzNDVjIiwiaXNzIjoiaHR0cHM6Ly9sb2dpbi5pbnBvc3QucGwvYXV0aC9yZWFsbXMvZXh0ZXJuYWwiLCJzdWIiOiJmOjEyNDc1MDUxLTFjMDMtNGU1OS1iYTBjLTJiNDU2OTVlZjUzNTpiNmY4cEM5ZXNpS1l5YzZpOS1tWHV2eXd6M2dLOURBb0xBOS1SX0t4dXVVIiwidHlwIjoiQmVhcmVyIiwiYXpwIjoic2hpcHgiLCJzZXNzaW9uX3N0YXRlIjoiMjMxYzI4NjgtNzA0Ny00OTQ2LWJjOTktYjNkNjg2ZTkwNWU3Iiwic2NvcGUiOiJvcGVuaWQgYXBpOmFwaXBvaW50cyIsInNpZCI6IjIzMWMyODY4LTcwNDctNDk0Ni1iYzk5LWIzZDY4NmU5MDVlNyIsImFsbG93ZWRfcmVmZXJyZXJzIjoidGhlamFyLmNvbS5wbCIsInV1aWQiOiJlMTY0ZDg5Zi1kMmYxLTQyZDAtODcxMy05ZTAyYzUyNDllNmYifQ.pI2gaWrRkNXzr44Js8UWEqZzKZ-UpvR713S2lN8FZcJsyGSQJc8ImhERl4hOX77YsQG91fJ6MygYG4PtUc3bXnnlOcbGPOEgaQscwQC8jOEnY5fG-ilda_W_ENA48g1C0scXvJnFWhnextxDf1xKSZooKiz35j0UvFNeBN9LTSKE3G2RsunuNvRaJ0J9GtQm1uAfozTB7aRSpSdMeDploFGo6aFrMCohTNW84mX7rezDan8kcZw_wkWOOfpKDkE44TVPa-iwFnj6L6BA0ziFVGDkHWxxaTRCcsHiXCUam5uiYgxOZzbQQtsW8UgH4MgKe7NGS1SeDQTB0_VHi9BOiA";
            // line 71
            echo "
<div class=\"modal fade\" id=\"inpostGeoWidgetModal\" tabindex=\"-1\" role=\"dialog\">
    
</div>
";
            // line 75
            if (($context["inpostSandbox"] ?? null)) {
                // line 76
                echo "    ";
                $context["geoWidgetUrl"] = "https://sandbox-easy-geowidget-sdk.easypack24.net";
            } else {
                // line 78
                echo "    ";
                $context["geoWidgetUrl"] = "https://geowidget.inpost.pl";
            }
            // line 80
            echo "<link rel=\"stylesheet\" href=\"";
            echo ($context["geoWidgetUrl"] ?? null);
            echo "/inpost-geowidget.css\" />
<script src=\"";
            // line 81
            echo ($context["geoWidgetUrl"] ?? null);
            echo "/inpost-geowidget.js\" defer></script>


";
        }
        // line 85
        echo "<script>
\tfunction saveCoupon() {
\t\t\$(document).find('[data-error=\"coupon\"]').removeClass('input-error').find('.form-error').text('').hide();
\t\t\$('body').append(loader);
\t\t\$.ajax({
\t\t\turl: 'index.php?route=checkout/buy/save_coupon',
\t\t\ttype: 'post',
\t\t\tdataType: 'json',
\t\t\tdata: {
\t\t\t\tcoupon: \$(document).find('[name=\"coupon\"]').val(),
\t\t\t},
\t\t\tsuccess: function(json) {
\t\t\t\t\$('#loader').remove();
\t\t\t\tif (json.error)  \$(document).find('[data-error=\"coupon\"]').addClass('input-error').find('.form-error').text(json.error).show();
\t\t\t\tif (json.success) nrShowMessage(json.success, 1);
\t\t\t},
\t\t\terror: function(data) {
\t\t\t\t\$('#loader').remove();
\t\t\t\tconsole.log(data.responseText);
\t\t\t}
\t\t});
\t}
\t
\tfunction saveReward() {
\t\t\$(document).find('[data-error=\"reward\"]').removeClass('input-error').find('.form-error').text('').hide();
\t\t\$('body').append(loader);
\t\t\$.ajax({
\t\t\turl: 'index.php?route=checkout/buy/save_reward',
\t\t\ttype: 'post',
\t\t\tdataType: 'json',
\t\t\tdata: {
\t\t\t\treward: \$(document).find('[name=\"reward\"]').val(),
\t\t\t},
\t\t\tsuccess: function(json) {
\t\t\t\t\$('#loader').remove();
\t\t\t\tif (json.error)  \$(document).find('[data-error=\"reward\"]').addClass('input-error').find('.form-error').text(json.error).show();
\t\t\t\tif (json.success) {
\t\t\t\t\t\$(document).find('[data-points]').text(json.reward);
\t\t\t\t\tnrShowMessage(json.success, 1);
\t\t\t\t}
\t\t\t},
\t\t\terror: function(data) {
\t\t\t\t\$('#loader').remove();
\t\t\t\tconsole.log(data.responseText);
\t\t\t}
\t\t});
\t}
\t
\tfunction cartUpdate() {
\t\t\$('body').append(loader);
\t\t\$.ajax({
\t\t\turl: 'index.php?route=checkout/buy/refresh_cart',
\t\t\ttype: 'post',
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\t//console.log(json);
\t\t\t\t\$('#loader').remove();
\t\t\t\tcheckJson(json);
\t\t\t\t\$('[data-cart]').html(json.cart);
\t\t\t\t\$('[data-shipping]').html(json.shipping);
\t\t\t\t\$('[data-payment]').html(json.payment);
\t\t\t\t\$('[data-totals]').html(json.totals);
\t\t\t},
\t\t\terror: function(data) {
\t\t\t\t\$('#loader').remove();
\t\t\t\tconsole.log(data.responseText);
\t\t\t}
\t\t});
\t}
\t
\tfunction save() {
\t\t\$(document).find('[data-error]').removeClass('input-error').find('.form-error').text('').hide();
\t\t\$('body').append(loader);
\t\t\$.ajax({
\t\t\turl: 'index.php?route=checkout/buy/save_order',
\t\t\ttype: 'post',
\t\t\tdataType: 'json',
\t\t\tdata: \$('#checkout').serialize(),
\t\t\tsuccess: function(json) {
\t\t\t\t\$('#loader').remove();
\t\t\t\tcheckJson(json);
\t\t\t\tif(json.error) {
\t\t\t\t\t\$.each(json.error, function(i, v){
\t\t\t\t\t\t\$('[data-error=\"'+i+'\"]').addClass('input-error').find('.form-error').text(v).show();
\t\t\t\t\t});
\t\t\t\t} else if(json.payment) {
\t\t\t\t\t\$('#payment').html(json.payment).find('#button-confirm').click();
\t\t\t\t} else {
\t\t\t\t\tconsole.log(json);
\t\t\t\t}
\t\t\t},
\t\t\terror: function(data) {
\t\t\t\t\$('#loader').remove();
\t\t\t\tconsole.log(data.responseText);
\t\t\t}
\t\t});
\t}
\t
\t\$('[data-address]').on('change', '#input-address', function() {
\t\t\$('body').append(loader);
\t\t\$.ajax({
\t\t\turl: 'index.php?route=checkout/buy/change_address&address_id='+\$(this).val(),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\t\$('#loader').remove();
\t\t\t\tcheckJson(json);
\t\t\t\t\$('[data-address]').html(json.address);
\t\t\t\tNiceSelect.bind(document.getElementById('input-address'));
\t\t\t\tNiceSelect.bind(document.getElementById('input-zone'));
\t\t\t\t\$('[data-shipping]').html(json.shipping);
\t\t\t\t\$('[data-payment]').html(json.payment);
\t\t\t\t\$('[data-totals]').html(json.totals);
\t\t\t},
\t\t\terror: function(data) {
\t\t\t\t\$('#loader').remove();
\t\t\t\tconsole.log(data.responseText);
\t\t\t}
\t\t});
\t});
\t
\t\$('[data-address]').on('change', '#input-zone', function() {
\t\t\$('[data-address]').find('[name=\"address[city]\"]').val('');
\t\t\$('[data-address]').find('[name=\"address[address_1]\"]').val('');
\t\t\$('[data-address]').find('[name=\"address[postcode]\"]').val('');
\t\t\$('body').append(loader);
\t\t\$.ajax({
\t\t\turl: 'index.php?route=checkout/buy/change_zone&zone_id='+\$(this).val(),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\t\$('#loader').remove();
\t\t\t\tcheckJson(json);
\t\t\t\t\$('[data-shipping]').html(json.shipping);
\t\t\t\t\$('[data-payment]').html(json.payment);
\t\t\t\t\$('[data-totals]').html(json.totals);
\t\t\t},
\t\t\terror: function(data) {
\t\t\t\t\$('#loader').remove();
\t\t\t\tconsole.log(data.responseText);
\t\t\t}
\t\t});
\t});
\t
\t\$('[data-shipping]').on('change', 'input', function() {
\t\t\$('body').append(loader);
\t\t\$.ajax({
\t\t\turl: 'index.php?route=checkout/buy/change_shipping&code='+\$(this).filter(':checked').val(),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\t\$('#loader').remove();
\t\t\t\tcheckJson(json);
\t\t\t\t\$('[data-payment]').html(json.payment);
\t\t\t\t\$('[data-totals]').html(json.totals);
\t\t\t\t\$('body').append(json.s);
\t\t\t},
\t\t\terror: function(data) {
\t\t\t\t\$('#loader').remove();
\t\t\t\tconsole.log(data.responseText);
\t\t\t}
\t\t});
\t});
\t
\t\$('[data-payment]').on('change', 'input', function() {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=checkout/buy/change_payment&code='+\$(this).filter(':checked').val(),
\t\t\terror: function(data) {
\t\t\t\t\$('#loader').remove();
\t\t\t\tconsole.log(data.responseText);
\t\t\t}
\t\t});
\t});
\t
\tif(typeof(button) != 'function') {
\t\t\$.fn.button = function(s){return;}
\t}
\t
</script>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "default/template/checkout/buy.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 85,  216 => 81,  211 => 80,  207 => 78,  203 => 76,  201 => 75,  195 => 71,  193 => 70,  187 => 67,  184 => 66,  182 => 65,  178 => 64,  158 => 47,  152 => 44,  146 => 42,  141 => 40,  137 => 39,  133 => 38,  129 => 37,  125 => 36,  119 => 33,  115 => 32,  110 => 29,  106 => 27,  102 => 25,  92 => 21,  88 => 20,  84 => 19,  80 => 17,  72 => 15,  70 => 14,  66 => 12,  62 => 11,  59 => 10,  57 => 9,  52 => 7,  46 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/checkout/buy.twig", "");
    }
}
