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

/* extension/payment/paypal/auth.twig */
class __TwigTemplate_9c6ec245b3d295caec13f2187a76517f extends Template
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
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\" class=\"payment-paypal\">
\t<div class=\"page-header\">
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"pull-right\">
\t\t\t\t<a href=\"";
        // line 6
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a>
\t\t\t</div>
\t\t\t<h1>";
        // line 8
        echo ($context["heading_title_main"] ?? null);
        echo "</h1>
\t\t\t<ul class=\"breadcrumb\">
\t\t\t\t";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "\t\t\t\t<li><a href=\"";
            echo (($__internal_compile_0 = $context["breadcrumb"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["href"] ?? null) : null);
            echo "\">";
            echo (($__internal_compile_1 = $context["breadcrumb"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["text"] ?? null) : null);
            echo "</a></li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "\t\t\t</ul>
\t\t</div>
\t</div>
\t<div class=\"container-fluid\">
\t\t";
        // line 17
        if (($context["error_warning"] ?? null)) {
            // line 18
            echo "\t\t<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "</div>
\t\t";
        }
        // line 20
        echo "\t\t";
        if (($context["text_version"] ?? null)) {
            // line 21
            echo "\t\t<div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
            echo ($context["text_version"] ?? null);
            echo "</div>
\t\t";
        }
        // line 23
        echo "\t\t<div class=\"panel panel-default panel-auth\">
\t\t\t<div class=\"panel-heading\">
\t\t\t\t<h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 25
        echo ($context["text_edit"] ?? null);
        echo "</h3>
\t\t\t</div>
\t\t\t<div class=\"panel-body\">
\t\t\t\t<div class=\"section-connect\">
\t\t\t\t\t<div class=\"icon icon-logo\"></div>
\t\t\t\t\t<div class=\"welcome\">";
        // line 30
        echo ($context["text_welcome"] ?? null);
        echo "</div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col col-sm-6 text-left\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input_authorization_type\">";
        // line 34
        echo ($context["entry_authorization_type"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t<select name=\"payment_paypal_authorization_type\" id=\"input_authorization_type\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t";
        // line 36
        if ((($context["authorization_type"] ?? null) == "automatic")) {
            // line 37
            echo "\t\t\t\t\t\t\t\t\t<option value=\"automatic\" selected=\"selected\">";
            echo ($context["text_automatic"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t<option value=\"manual\">";
            // line 38
            echo ($context["text_manual"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 40
            echo "\t\t\t\t\t\t\t\t\t<option value=\"automatic\">";
            echo ($context["text_automatic"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t<option value=\"manual\" selected=\"selected\">";
            // line 41
            echo ($context["text_manual"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t";
        }
        // line 43
        echo "\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col col-sm-6 text-left\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input_environment\">";
        // line 48
        echo ($context["entry_environment"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t<select name=\"payment_paypal_environment\" id=\"input_environment\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t";
        // line 50
        if ((($context["environment"] ?? null) == "production")) {
            // line 51
            echo "\t\t\t\t\t\t\t\t\t<option value=\"production\" selected=\"selected\">";
            echo ($context["text_production"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t<option value=\"sandbox\">";
            // line 52
            echo ($context["text_sandbox"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 54
            echo "\t\t\t\t\t\t\t\t\t<option value=\"production\">";
            echo ($context["text_production"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t<option value=\"sandbox\" selected=\"selected\">";
            // line 55
            echo ($context["text_sandbox"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t";
        }
        // line 57
        echo "\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"automatic-authorization ";
        // line 61
        if ((($context["authorization_type"] ?? null) == "manual")) {
            echo "hidden";
        }
        echo "\">
\t\t\t\t\t\t<a href=\"";
        // line 62
        echo (($__internal_compile_2 = (($__internal_compile_3 = ($context["configure_url"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[($context["environment"] ?? null)] ?? null) : null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["ppcp"] ?? null) : null);
        echo "\" target=\"_blank\" class=\"btn btn-primary button-connect-ppcp\" data-paypal-button=\"PPLtBlue\" data-paypal-onboard-complete=\"onBoardedCallback\">";
        echo ($context["button_connect"] ?? null);
        echo "</a>
\t\t\t\t\t\t<div class=\"checkout-express\">";
        // line 63
        echo ($context["text_checkout_express"] ?? null);
        echo "</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"manual-authorization ";
        // line 65
        if ((($context["authorization_type"] ?? null) == "automatic")) {
            echo "hidden";
        }
        echo "\">
\t\t\t\t\t\t<div class=\"form-group text-left\">
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input_merchant_id\">";
        // line 67
        echo ($context["entry_merchant_id"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t<input type=\"text\" name=\"payment_paypal_merchant_id\" value=\"\" id=\"input_merchant_id\" class=\"form-control\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group text-left\">
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input_client_id\">";
        // line 71
        echo ($context["entry_client_id"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t<input type=\"text\" name=\"payment_paypal_client_id\" value=\"\" id=\"input_client_id\" class=\"form-control\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group text-left\">
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input_client_secret\">";
        // line 75
        echo ($context["entry_client_secret"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<input type=\"password\" name=\"payment_paypal_client_secret\" value=\"\" id=\"input_client_secret\" class=\"form-control\" />
\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 79
        echo ($context["button_view"] ?? null);
        echo "\" class=\"btn btn-default view-password\" field_id=\"input_client_secret\"><i class=\"fa fa-eye\"></i></button>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"button-group\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary button-connect\" data-loading-text=\"";
        // line 85
        echo ($context["text_loading"] ?? null);
        echo "\">";
        echo ($context["button_connect"] ?? null);
        echo "</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"support\">";
        // line 89
        echo ($context["text_support"] ?? null);
        echo "</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<script src=\"https://www.paypal.com/webapps/merchantboarding/js/lib/lightbox/partner.js\"></script>
<script type=\"text/javascript\">

\$('#input_authorization_type').on('change', function() {
\tvar authorization_type = \$(this).val();
\t
\tif (authorization_type == 'automatic') {
\t\t\$('.automatic-authorization').removeClass('hidden');
\t\t\$('.manual-authorization').addClass('hidden');
\t} else {
\t\t\$('.automatic-authorization').addClass('hidden');
\t\t\$('.manual-authorization').removeClass('hidden');
\t}\t
});

\$('#input_environment').on('change', function() {
\tvar environment = \$(this).val();
\t
\tif (environment == 'production') {
\t\t\$('.button-connect-ppcp').attr('href', '";
        // line 114
        echo (($__internal_compile_4 = (($__internal_compile_5 = ($context["configure_url"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["production"] ?? null) : null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["ppcp"] ?? null) : null);
        echo "');
\t\t\$('.button-connect-express-checkout').attr('href', '";
        // line 115
        echo (($__internal_compile_6 = (($__internal_compile_7 = ($context["configure_url"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["production"] ?? null) : null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["express_checkout"] ?? null) : null);
        echo "');
\t} else {
\t\t\$('.button-connect-ppcp').attr('href', '";
        // line 117
        echo (($__internal_compile_8 = (($__internal_compile_9 = ($context["configure_url"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["sandbox"] ?? null) : null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["ppcp"] ?? null) : null);
        echo "');
\t\t\$('.button-connect-express_checkout').attr('href', '";
        // line 118
        echo (($__internal_compile_10 = (($__internal_compile_11 = ($context["configure_url"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["sandbox"] ?? null) : null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["express_checkout"] ?? null) : null);
        echo "');
\t}\t
});

\$('.payment-paypal').on('click', '.view-password', function(event) {
\tevent.preventDefault();
\t
\tif (\$('#' + \$(this).attr('field_id')).attr('type') == 'password') {
\t\t\$('#' + \$(this).attr('field_id')).attr('type', 'text');
\t} else {
\t\t\$('#' + \$(this).attr('field_id')).attr('type', 'password');
\t}
});

\$('.payment-paypal').on('click', '.button-connect', function() {\t
\tvar environment = \$('#input_environment').val();
\tvar client_id = \$('#input_client_id').val();
\tvar client_secret = \$('#input_client_secret').val();
\tvar merchant_id = \$('#input_merchant_id').val();
\t
\t\$('.payment-paypal .button-connect').prop('disabled', true).button('loading');\t
\t
\t\$.ajax({
\t\ttype: 'post',
\t\turl: '";
        // line 142
        echo ($context["connect_url"] ?? null);
        echo "',
\t\tdata: 'environment=' + environment + '&merchant_id=' + merchant_id + '&client_id=' + client_id + '&client_secret=' + client_secret,
\t\tdataType: 'json',
\t\tsuccess: function(json) {
\t\t\t\$('.payment-paypal .button-connect').prop('disabled', false).button('reset');\t
\t\t\t
\t\t\t\$('.payment-paypal .alert').remove();
\t\t\t\t\t\t
\t\t\tif (json['error'] && json['error']['warning']) {
\t\t\t\t\$('.payment-paypal > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t
\t\t\t\t\$('html, body').animate({scrollTop: \$('#content > .container-fluid .alert-danger').offset().top}, 'slow');
\t\t\t} else {
\t\t\t\tlocation.reload();
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\tconsole.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('.payment-paypal').on('click', '.button-agree', function() {\t
\t\$.ajax({
\t\ttype: 'post',
\t\turl: '";
        // line 167
        echo ($context["agree_url"] ?? null);
        echo "',
\t\tdata: '',
\t\tdataType: 'json',
\t\tsuccess: function(json) {
\t\t\t\$('.payment-paypal .alert').remove();
\t\t\t
\t\t\tif (json['success']) {
\t\t\t\t\$('.payment-paypal > .container-fluid').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i><button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button> ' + json['success'] + '</div>');
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\tconsole.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

function onBoardedCallback(authorization_code, shared_id) {
\tvar environment = \$('#input_environment').val();
\t
\t\$.ajax({
\t\turl: '";
        // line 187
        echo ($context["callback_url"] ?? null);
        echo "',
\t\ttype: 'post',
\t\tdata: 'environment=' + environment + '&authorization_code=' + authorization_code + '&shared_id=' + shared_id + '&seller_nonce=";
        // line 189
        echo ($context["seller_nonce"] ?? null);
        echo "',
\t\tdataType: 'json',
\t\tsuccess: function(json) {
\t\t\t
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\tconsole.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
}

</script>
";
        // line 201
        echo ($context["footer"] ?? null);
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "extension/payment/paypal/auth.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  384 => 201,  369 => 189,  364 => 187,  341 => 167,  313 => 142,  286 => 118,  282 => 117,  277 => 115,  273 => 114,  245 => 89,  236 => 85,  227 => 79,  220 => 75,  213 => 71,  206 => 67,  199 => 65,  194 => 63,  188 => 62,  182 => 61,  176 => 57,  171 => 55,  166 => 54,  161 => 52,  156 => 51,  154 => 50,  149 => 48,  142 => 43,  137 => 41,  132 => 40,  127 => 38,  122 => 37,  120 => 36,  115 => 34,  108 => 30,  100 => 25,  96 => 23,  90 => 21,  87 => 20,  81 => 18,  79 => 17,  73 => 13,  62 => 11,  58 => 10,  53 => 8,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/payment/paypal/auth.twig", "");
    }
}
