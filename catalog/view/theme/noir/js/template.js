var loader = '<div id="loader"><div class="cssload-container"><div class="cssload-speeding-wheel"></div></div></div>',
	overlay = $('#overlay'),
	select_instances = [];

var setFooter = function(ind=0) {
	fh = $('.footer').outerHeight();
	$('.wrapper').css({'padding-bottom': (fh+ind)+'px'});
	$('.footer').css({'margin-top':'-'+fh+'px'});
}

function nrShowMessage(m, t = 0) {
	
	var html = '<div class="alert alert-'+(t ? 'success' : 'error')+'" data-alert>';
	html += '<span class="alert-image"></span>';
	html += '<div class="alert-message">'+m+'</div>';
	html += '</div>';
	$('#alert').html(html);
	Fancybox.show(
		[
			{
				src: '#alert',
				type: 'inline',
				
			}
		],
		{
			template: {
				closeButton: '<svg width="30" height="30" tabindex="-1"><use xlink:href="/catalog/view/theme/noir/img/sprite.svg#cross"></use></svg>',
				spinner: '',
			},
			dragToClose: false,
			trapFocus: false,
			placeFocusBack: false,
			hideScrollbar: false,
			on: {
				destroy: () => {$('#alert').html('');}
			}
		}
	);
}

function checkJson(json) {
	if(json.redirect == 1) {
		document.location.reload();
	} else if(json.redirect) {
		window.location.href = json.redirect;
	}
	if(json.warning) nrShowMessage(json.warning);
	if(json.log) console.log(json.log);
}

function register() {
	$('#sign-up .form-error').text('').hide();
	$('#sign-up .input-error').removeClass('input-error');
	$.ajax({
		url: 'index.php?route=account/register/nr_register',
		type: 'post',
		dataType: 'json',
		data: $('#sign-up form').serialize(),
		success: function(json) {
			checkJson(json);
			if(json.error) {
				$.each(json.error, function(i, v){
					if(v == 1) {
						$('[data-error="'+i+'"]').addClass('input-error');
					} else {
						$('[data-error="'+i+'"]').addClass('input-error').find('.form-error').text(v).show();
					}
				});
			}
		},
		error: function(data) {console.log(data.responseText);}
	});
}

function login() {
	$('#sign-in .form-error').text('').hide();
	$.ajax({
		url: 'index.php?route=account/login/nr_login',
		type: 'post',
		dataType: 'json',
		data: $('#sign-in form').serialize(),
		success: function(json) {
			checkJson(json);
			if(json.error) $('#sign-in .form-error').text(json.error).show();
		},
		error: function(data) {console.log(data.responseText);}
	});
}

function saveProfile() {
	$('#customer-profile .form-error').text('').hide();
	$('#customer-profile .input-error').removeClass('input-error');
	$.ajax({
		url: 'index.php?route=account/edit/nr_save',
		type: 'post',
		dataType: 'json',
		data: $('#customer-profile').serialize(),
		success: function(json) {
			//console.log(json); /////
			checkJson(json);
			if(json.error) {
				$.each(json.error, function(i, v){
					if(v == 1) {
						$('[data-error="'+i+'"]').addClass('input-error');
					} else {
						$('[data-error="'+i+'"]').addClass('input-error').find('.form-error').text(v).show();
					}
				});
			}
		},
		error: function(data) {console.log(data.responseText);}
	});
}

function getAddress(id = 0) {
	$('#address .form-error').text('').hide();
	$('#address .input-error').removeClass('input-error');
	$.ajax({
		url: 'index.php?route=account/address/nr_address_form&id='+id,
		success: function(data) {
			$('#address').html(data);
			Fancybox.show(
				[{
					src: '#address',
					type: 'inline',
				}],
				{
					dragToClose: false,
					trapFocus: false,
					placeFocusBack: false,
					hideScrollbar: false
				}
			);
			select_instances = [];
			$('#address').find('[data-nice-select]').each(function(i) {
				select_instances.push(NiceSelect.bind(this, {placeholder: $(this).data('nice-select')}));
			});
		},
		error: function(data) {console.log(data.responseText);}
	});
}

function saveAddress() {
	$('[data-error]').removeClass('input-error').find('.form-error').text('').hide();
	$.ajax({
		url: 'index.php?route=account/address/nr_save',
		type: 'post',
		dataType: 'json',
		data: $('#address-form').serialize(),
		success: function(json) {
			checkJson(json);
			//console.log(json);
			if(json.error) {
				$.each(json.error, function(i, v){
					if(v == 1) {
						$('[data-error="'+i+'"]').addClass('input-error');
					} else {
						$('[data-error="'+i+'"]').addClass('input-error').find('.form-error').text(v).show();
					}
				});
			}
		},
		error: function(data) {console.log(data.responseText);}
	});
}

function minicartRefresh(n) {
	var ct = $('#cart-total');
	ct.text(n);
	if(n > 0) {
		ct.removeClass('hidden');
	} else {
		ct.addClass('hidden');
	}
	$('[data-cart-list]').load('index.php?route=common/nr_cart/cart_list');
}

var cart = {
	'add': function(product_id, q = 1) {
		$('body').append(loader);
		$.ajax({
			url: 'index.php?route=common/nr_cart/add',
			type: 'post',
			dataType: 'json',
			data: {
				product_id: product_id,
				quantity: q
			},
			success: function(json) {
				$('#loader').remove();
				if (json.error) console.log(json.error);
				if (json.success) {
					minicartRefresh(json.number_products);
					//nrShowMessage(json.success, 1);
				}
			},
			error: function(data) {
				$('#loader').remove();
				console.log(data.responseText);
			}
		});
	},
	'update': function (id, q) {
		$('body').append(loader);
		$.ajax({
			url: 'index.php?route=common/nr_cart/edit',
			type: 'post',
			data: {
				cart_id: id,
				quantity: q
			},
			success: function(data) {
				$('#loader').remove();
				if(data) minicartRefresh(data);
			},
			error: function(data) {
				$('#loader').remove();
				console.log(data.responseText);
			}
		});
	},
	'remove': function (id) {
		$('body').append(loader);
		$.ajax({
			url: 'index.php?route=checkout/cart/remove',
			type: 'post',
			dataType: 'json',
			data: {key: id},
			success: function(json) {
				$('#loader').remove();
				minicartRefresh(json.number_products);
			},
			error: function(data) {
				$('#loader').remove();
				console.log(data.responseText);
			}
		});
	}
}

$(document).find('[data-nice-select]').each(function(){
	NiceSelect.bind(this);
});

$(document).on('click', '[data-qnt-btn]', function(){
	var th = $(this),
		b = th.parents('[data-quantity]'),
		i = b.find('input'),
		v = parseInt(i.val());
	if(th.data('qnt-btn') > 0) {
		v++;
		if(b.data('max') > 0 && v > b.data('max')) return false;
	} else {
		v = v - 1;
		if(v < b.data('min')) return false;
	}
	i.val(v);
	if(th.parents('[data-cart-item]').length) cart.update(b.data('cart'), v);
	if(typeof(wholesaleUpdate) == 'function') wholesaleUpdate(b.parents('[data-product]'), v);
	if(typeof(cartUpdate) == 'function') cartUpdate(b.parents('[data-product]'), v);
});
$(document).on('input', '[data-input-quantity]', function(){
	var th = $(this),
		b = th.parents('[data-quantity]'),
		v = parseInt(th.val());
	if(v < b.data('min')) th.val(b.data('min'));
	if(b.data('max') > 0 && v > b.data('max')) th.val(b.data('max'));
	if(th.parents('[data-cart-item]').length) cart.update(b.data('cart'), v);
	if(typeof(wholesaleUpdate) == 'function') wholesaleUpdate(b.parents('[data-product]'), v);
	if(typeof(cartUpdate) == 'function') cartUpdate(b.parents('[data-product]'), v);
});

$(document).on('change', '#input-country', function() {
	var th = $(this),
		z = $(document).find('#input-zone');
	if(!z.length) return;
	
	$.ajax({
		url: 'index.php?route=account/account/country&country_id='+th.val(),
		dataType: 'json',
		success: function(json) {
			var html = '';
			if (json.zone && json.zone != '') {
				for (i = 0; i < json.zone.length; i++) {
					html += '<option value="' + json.zone[i]['zone_id'] + '">' + json.zone[i]['name'] + '</option>';
				}
			} else {
				html += '<option value="0" selected disabled>'+empty_zone_option+'</option>';
			}
			
			z.html(html);
			$.each(select_instances, function(i, v) {
				if(i == 1) v.update();
			});
		},
		error: function(data) {console.log(data.responseText);}
	});
});

$('[data-menu-toggle]').on('click', function() {
	var b = $('body');
	if(window.screen.width > 679) {
		if(b.hasClass('menu-open')) {
			$('#menu-overlay').fadeOut();
			$('#menu').fadeOut();
		} else {
			$('#menu-overlay').fadeIn();
			$('#menu').fadeIn();
		}
		b.toggleClass('menu-open');
	} else {
		b.addClass('menu-open');
	}
});

$('[data-menu-close]').on('click', function() {
	$('body').removeClass('menu-open');
	$('#menu-overlay').fadeOut();
});

$('[data-pannel-open]').on('click', function() {
	$('body').addClass('pannel-open');
	overlay.fadeIn();
});

$('[data-pannel-close]').on('click', function() {
	$('body').removeClass('pannel-open');
	overlay.fadeOut();
});

$('[data-product-trigger]').on('click', function() {
	var id = $(this).parents('tr').toggleClass('open').data('mobile-product'),
		b = $('#wholesale').find('[data-product="'+id+'"]');
	if(b.hasClass('open')) {
		b.slideUp();
	} else {
		if(b.find('.slideRowDown').length) {
			b.slideDown();
		} else {
			b.wrapInner('<div class="slideRowDown" style="display:none;" />');
			b.css('display', 'block');
			b.find('.slideRowDown').slideDown();
		}
	}
	b.toggleClass('open');
});

$('#cart').on('click', function() {
	$('body').addClass('open-cart');
	overlay.fadeIn();
});

$('[data-cart-close]').on('click', function() {
	$('body').removeClass('open-cart');
	overlay.fadeOut();
});

$('[data-jar]').on({
	mouseenter: function() {
		$('[data-hero]').addClass('animated');
	},
	mouseleave: function() {
		$('[data-hero]').removeClass('animated');
	}
});

$(document).on('click', '[data-close-popup]', function() {
	$(this).parents('.popup').find('.carousel__button.is-close').click();
});

$('#sign-up [name="customer_group_id"]').on('change', function() {
	if($('#sign-up [name="customer_group_id"]:checked').val() == 1) {
		$('#sign-up [data-hidden-inputs]').slideUp();
	} else {
		$('#sign-up [data-hidden-inputs]').slideDown();
	}
});

$('[data-order-trigger]').on('click',function(){
	var p = $(this).parents('[data-order-item]');
	if(p.hasClass('open')) {
		p.removeClass('open').find('[data-order-info]').slideUp();
	} else {
		p.addClass('open').find('[data-order-info]').slideDown();
	}
});

$('.menu-wrapper a').on({
	mouseenter: function() {
		$('#menu .berry').addClass('menu-hover');
	},
	mouseleave: function() {
		$('#menu .berry').removeClass('menu-hover');
	}
});

$(window).on('scroll', function() {
	if($(window).scrollTop() > 20) {
		$('body').addClass('scrolled');
	} else {
		$('body').removeClass('scrolled');
	}
	if(typeof(setHeading) == 'function') setHeading();
});

if($(window).scrollTop() > 20) {
	$('body').addClass('scrolled');
	if(typeof(setHeading) == 'function') setHeading();
}

