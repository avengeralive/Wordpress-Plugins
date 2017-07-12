<?
/**
*	@pachage VeliyevPlugins
*	@version 1.0
*/
/*
Plugin name: Cleaner Calculator
Plugin URL: http://aliveliyev.com
Description: Плагин калькулятора для уборщиков
Author: Ali S. Veliyev
Author URI: http://aliveliyev.com
*/

function cleaner_calc()
{
	global $wpdb;
	$tarif = $wpdb->get_results( "SELECT * FROM ".$wpdb->prefix."calc_tarif" );
	$services = $wpdb->get_results( "SELECT * FROM ".$wpdb->prefix."calc_services" );
	$options = $wpdb->get_results( "SELECT * FROM ".$wpdb->prefix."calc_options" );
?>
<link rel="stylesheet" href="/wp-content/plugins/cleaner-calculator/styles.css">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<script type="text/javascript" src="/wp-content/plugins/cleaner-calculator/script.js"></script>
<script type="text/javascript">
	jQuery(function(){
		jQuery("#date").datepicker({ minDate: 0 });
	});
</script>

<h2>1. Выберите подходящую услугу:</h2>

<ul id="serv_types">
	<li><a id="kvartiri" class="active">Уборка квартир</a></li>
	<li><a id="kotedji">Уборка котеджей</a></li>
	<li><a id="remont">Уборка после ремонта</a></li>
</ul>

<ul id="remont_types" style="display: none;">
	<li><a id="kvartiri_remont">Уборка квартир</a></li>
	<li><a id="kotedji_remont">Уборка котеджей</a></li>
</ul>
<h2>2. Выберите площадь, м²:</h2>

<div id="kvartiri_square_block">
	<input class="kvartiri_square" id="kvartiri_square_49" name="kvartiri_square" type="radio" value="49" checked> до 49
	<input class="kvartiri_square" id="kvartiri_square_99" name="kvartiri_square" type="radio" value="99"> 50-99
	<input class="kvartiri_square" id="kvartiri_square_149" name="kvartiri_square" type="radio" value="149"> 100-149
	<input class="kvartiri_square" id="kvartiri_square_200" name="kvartiri_square" type="radio" value="200"> 150-200
</div>
<div id="kotedji_square_block" style="display: none;">
	<input class="kotedji_square" id="kotedji_square_199" name="kotedji_square" type="radio" value="199" checked> до 199
	<input class="kotedji_square" id="kotedji_square_249" name="kotedji_square" type="radio" value="249"> 200-249
	<input class="kotedji_square" id="kotedji_square_299" name="kotedji_square" type="radio" value="299"> 250-299
	<input class="kotedji_square" id="kotedji_square_349" name="kotedji_square" type="radio" value="349"> 300-349
</div>

<h2>3. Выберите тариф:</h2>

<div class="tarif" id="tarif_kvartiri_49">
	<ul>
		<? for ($i = 0; $i <= 2; $i++) { ?>
		<li><strong><? echo $tarif[$i]->title; ?></strong><p><? echo $tarif[$i]->price; ?> руб.<br><? echo $tarif[$i]->hour; ?> час. <? echo $tarif[$i]->minute; ?> мин. / <? echo $tarif[$i]->description; ?> чел.</p><a id="tarif_<? echo $tarif[$i]->id; ?>" data-hour="<? echo $tarif[$i]->hour; ?>" data-minute="<? echo $tarif[$i]->minute; ?>" data-price="<? echo $tarif[$i]->price; ?>" data-people="<? echo $tarif[$i]->description; ?>">Заказать</a></li>
		<? } ?>
	</ul>
</div>
<div class="tarif" id="tarif_kvartiri_99" style="display: none;">
	<ul>
		<? for ($i = 3; $i <= 5; $i++) { ?>
		<li><strong><? echo $tarif[$i]->title; ?></strong><p><? echo $tarif[$i]->price; ?> руб.<br><? echo $tarif[$i]->hour; ?> час. <? echo $tarif[$i]->minute; ?> мин. / <? echo $tarif[$i]->description; ?> чел.</p><a id="tarif_<? echo $tarif[$i]->id; ?>" data-hour="<? echo $tarif[$i]->hour; ?>" data-minute="<? echo $tarif[$i]->minute; ?>" data-price="<? echo $tarif[$i]->price; ?>" data-people="<? echo $tarif[$i]->description; ?>">Заказать</a></li>
		<? } ?>
	</ul>
</div>
<div class="tarif" id="tarif_kvartiri_149" style="display: none;">
	<ul>
		<? for ($i = 6; $i <= 8; $i++) { ?>
		<li><strong><? echo $tarif[$i]->title; ?></strong><p><? echo $tarif[$i]->price; ?> руб.<br><? echo $tarif[$i]->hour; ?> час. <? echo $tarif[$i]->minute; ?> мин. / <? echo $tarif[$i]->description; ?> чел.</p><a id="tarif_<? echo $tarif[$i]->id; ?>" data-hour="<? echo $tarif[$i]->hour; ?>" data-minute="<? echo $tarif[$i]->minute; ?>" data-price="<? echo $tarif[$i]->price; ?>" data-people="<? echo $tarif[$i]->description; ?>">Заказать</a></li>
		<? } ?>
	</ul>
</div>
<div class="tarif" id="tarif_kvartiri_200" style="display: none;">
	<ul>
		<? for ($i = 9; $i <= 11; $i++) { ?>
		<li><strong><? echo $tarif[$i]->title; ?></strong><p><? echo $tarif[$i]->price; ?> руб.<br><? echo $tarif[$i]->hour; ?> час. <? echo $tarif[$i]->minute; ?> мин. / <? echo $tarif[$i]->description; ?> чел.</p><a id="tarif_<? echo $tarif[$i]->id; ?>" data-hour="<? echo $tarif[$i]->hour; ?>" data-minute="<? echo $tarif[$i]->minute; ?>" data-price="<? echo $tarif[$i]->price; ?>" data-people="<? echo $tarif[$i]->description; ?>">Заказать</a></li>
		<? } ?>
	</ul>
</div>

<div class="tarif" id="tarif_kotedji_199" style="display: none;">
	<ul>
		<? for ($i = 12; $i <= 14; $i++) { ?>
		<li><strong><? echo $tarif[$i]->title; ?></strong><p><? echo $tarif[$i]->price; ?> руб.<br><? echo $tarif[$i]->hour; ?> час. <? echo $tarif[$i]->minute; ?> мин. / <? echo $tarif[$i]->description; ?> чел.</p><a id="tarif_<? echo $tarif[$i]->id; ?>" data-hour="<? echo $tarif[$i]->hour; ?>" data-minute="<? echo $tarif[$i]->minute; ?>" data-price="<? echo $tarif[$i]->price; ?>" data-people="<? echo $tarif[$i]->description; ?>">Заказать</a></li>
		<? } ?>
	</ul>
</div>
<div class="tarif" id="tarif_kotedji_249" style="display: none;">
	<ul>
		<? for ($i = 15; $i <= 17; $i++) { ?>
		<li><strong><? echo $tarif[$i]->title; ?></strong><p><? echo $tarif[$i]->price; ?> руб.<br><? echo $tarif[$i]->hour; ?> час. <? echo $tarif[$i]->minute; ?> мин. / <? echo $tarif[$i]->description; ?> чел.</p><a id="tarif_<? echo $tarif[$i]->id; ?>" data-hour="<? echo $tarif[$i]->hour; ?>" data-minute="<? echo $tarif[$i]->minute; ?>" data-price="<? echo $tarif[$i]->price; ?>" data-people="<? echo $tarif[$i]->description; ?>">Заказать</a></li>
		<? } ?>
	</ul>
</div>
<div class="tarif" id="tarif_kotedji_299" style="display: none;">
	<ul>
		<? for ($i = 18; $i <= 20; $i++) { ?>
		<li><strong><? echo $tarif[$i]->title; ?></strong><p><? echo $tarif[$i]->price; ?> руб.<br><? echo $tarif[$i]->hour; ?> час. <? echo $tarif[$i]->minute; ?> мин. / <? echo $tarif[$i]->description; ?> чел.</p><a id="tarif_<? echo $tarif[$i]->id; ?>" data-hour="<? echo $tarif[$i]->hour; ?>" data-minute="<? echo $tarif[$i]->minute; ?>" data-price="<? echo $tarif[$i]->price; ?>" data-people="<? echo $tarif[$i]->description; ?>">Заказать</a></li>
		<? } ?>
	</ul>
</div>
<div class="tarif" id="tarif_kotedji_349" style="display: none;">
	<ul>
		<? for ($i = 21; $i <= 23; $i++) { ?>
		<li><strong><? echo $tarif[$i]->title; ?></strong><p><? echo $tarif[$i]->price; ?> руб.<br><? echo $tarif[$i]->hour; ?> час. <? echo $tarif[$i]->minute; ?> мин. / <? echo $tarif[$i]->description; ?> чел.</p><a id="tarif_<? echo $tarif[$i]->id; ?>" data-hour="<? echo $tarif[$i]->hour; ?>" data-minute="<? echo $tarif[$i]->minute; ?>" data-price="<? echo $tarif[$i]->price; ?>" data-people="<? echo $tarif[$i]->description; ?>">Заказать</a></li>
		<? } ?>
	</ul>
</div>

<div class="tarif" id="tarif_remont_kvartiri_49" style="display: none;">
	<ul>
		<? for ($i = 24; $i <= 26; $i++) { ?>
		<li><strong><? echo $tarif[$i]->title; ?></strong><p><? echo $tarif[$i]->price; ?> руб.<br><? echo $tarif[$i]->hour; ?> час. <? echo $tarif[$i]->minute; ?> мин. / <? echo $tarif[$i]->description; ?> чел.</p><a id="tarif_<? echo $tarif[$i]->id; ?>" data-hour="<? echo $tarif[$i]->hour; ?>" data-minute="<? echo $tarif[$i]->minute; ?>" data-price="<? echo $tarif[$i]->price; ?>" data-people="<? echo $tarif[$i]->description; ?>">Заказать</a></li>
		<? } ?>
	</ul>
</div>
<div class="tarif" id="tarif_remont_kvartiri_99" style="display: none;">
	<ul>
		<? for ($i = 27; $i <= 29; $i++) { ?>
		<li><strong><? echo $tarif[$i]->title; ?></strong><p><? echo $tarif[$i]->price; ?> руб.<br><? echo $tarif[$i]->hour; ?> час. <? echo $tarif[$i]->minute; ?> мин. / <? echo $tarif[$i]->description; ?> чел.</p><a id="tarif_<? echo $tarif[$i]->id; ?>" data-hour="<? echo $tarif[$i]->hour; ?>" data-minute="<? echo $tarif[$i]->minute; ?>" data-price="<? echo $tarif[$i]->price; ?>" data-people="<? echo $tarif[$i]->description; ?>">Заказать</a></li>
		<? } ?>
	</ul>
</div>
<div class="tarif" id="tarif_remont_kvartiri_149" style="display: none;">
	<ul>
		<? for ($i = 30; $i <= 32; $i++) { ?>
		<li><strong><? echo $tarif[$i]->title; ?></strong><p><? echo $tarif[$i]->price; ?> руб.<br><? echo $tarif[$i]->hour; ?> час. <? echo $tarif[$i]->minute; ?> мин. / <? echo $tarif[$i]->description; ?> чел.</p><a id="tarif_<? echo $tarif[$i]->id; ?>" data-hour="<? echo $tarif[$i]->hour; ?>" data-minute="<? echo $tarif[$i]->minute; ?>" data-price="<? echo $tarif[$i]->price; ?>" data-people="<? echo $tarif[$i]->description; ?>">Заказать</a></li>
		<? } ?>
	</ul>
</div>
<div class="tarif" id="tarif_remont_kvartiri_200" style="display: none;">
	<ul>
		<? for ($i = 33; $i <= 35; $i++) { ?>
		<li><strong><? echo $tarif[$i]->title; ?></strong><p><? echo $tarif[$i]->price; ?> руб.<br><? echo $tarif[$i]->hour; ?> час. <? echo $tarif[$i]->minute; ?> мин. / <? echo $tarif[$i]->description; ?> чел.</p><a id="tarif_<? echo $tarif[$i]->id; ?>" data-hour="<? echo $tarif[$i]->hour; ?>" data-minute="<? echo $tarif[$i]->minute; ?>" data-price="<? echo $tarif[$i]->price; ?>" data-people="<? echo $tarif[$i]->description; ?>">Заказать</a></li>
		<? } ?>
	</ul>
</div>

<div class="tarif" id="tarif_remont_kotedji_199" style="display: none;">
	<ul>
		<? for ($i = 36; $i <= 38; $i++) { ?>
		<li><strong><? echo $tarif[$i]->title; ?></strong><p><? echo $tarif[$i]->price; ?> руб.<br><? echo $tarif[$i]->hour; ?> час. <? echo $tarif[$i]->minute; ?> мин. / <? echo $tarif[$i]->description; ?> чел.</p><a id="tarif_<? echo $tarif[$i]->id; ?>" data-hour="<? echo $tarif[$i]->hour; ?>" data-minute="<? echo $tarif[$i]->minute; ?>" data-price="<? echo $tarif[$i]->price; ?>" data-people="<? echo $tarif[$i]->description; ?>">Заказать</a></li>
		<? } ?>
	</ul>
</div>
<div class="tarif" id="tarif_remont_kotedji_249" style="display: none;">
	<ul>
		<? for ($i = 39; $i <= 41; $i++) { ?>
		<li><strong><? echo $tarif[$i]->title; ?></strong><p><? echo $tarif[$i]->price; ?> руб.<br><? echo $tarif[$i]->hour; ?> час. <? echo $tarif[$i]->minute; ?> мин. / <? echo $tarif[$i]->description; ?> чел.</p><a id="tarif_<? echo $tarif[$i]->id; ?>" data-hour="<? echo $tarif[$i]->hour; ?>" data-minute="<? echo $tarif[$i]->minute; ?>" data-price="<? echo $tarif[$i]->price; ?>" data-people="<? echo $tarif[$i]->description; ?>">Заказать</a></li>
		<? } ?>
	</ul>
</div>
<div class="tarif" id="tarif_remont_kotedji_299" style="display: none;">
	<ul>
		<? for ($i = 42; $i <= 44; $i++) { ?>
		<li><strong><? echo $tarif[$i]->title; ?></strong><p><? echo $tarif[$i]->price; ?> руб.<br><? echo $tarif[$i]->hour; ?> час. <? echo $tarif[$i]->minute; ?> мин. / <? echo $tarif[$i]->description; ?> чел.</p><a id="tarif_<? echo $tarif[$i]->id; ?>" data-hour="<? echo $tarif[$i]->hour; ?>" data-minute="<? echo $tarif[$i]->minute; ?>" data-price="<? echo $tarif[$i]->price; ?>" data-people="<? echo $tarif[$i]->description; ?>">Заказать</a></li>
		<? } ?>
	</ul>
</div>
<div class="tarif" id="tarif_remont_kotedji_349" style="display: none;">
	<ul>
		<? for ($i = 45; $i <= 47; $i++) { ?>
		<li><strong><? echo $tarif[$i]->title; ?></strong><p><? echo $tarif[$i]->price; ?> руб.<br><? echo $tarif[$i]->hour; ?> час. <? echo $tarif[$i]->minute; ?> мин. / <? echo $tarif[$i]->description; ?> чел.</p><a id="tarif_<? echo $tarif[$i]->id; ?>" data-hour="<? echo $tarif[$i]->hour; ?>" data-minute="<? echo $tarif[$i]->minute; ?>" data-price="<? echo $tarif[$i]->price; ?>" data-people="<? echo $tarif[$i]->description; ?>">Заказать</a></li>
		<? } ?>
	</ul>
</div>

<a id="tarif_more">Показать подробное описание тарифов</a>
<div id="tarifmoreinfo" style="display: none;">
	<? $desc = $wpdb->get_results('SELECT post_content FROM '.$wpdb->prefix.'posts WHERE ID = 185');  echo $desc[0]->post_content; ?>
</div>

<a id="additional"><h2>4. Выберите дополнительные услуги: <span>Показать</span></h2></a>
<div id="additional-block" style="display: none;">
	<table>
		<? foreach($services as $key=>$service) { ?>
		<tr>
			<td style="max-width: 200px;"><? echo $service->title; ?></td>
			<td><? echo $service->price; ?> руб.</td>
			<td><? echo $service->hour; ?> час. <? echo $service->minute; ?> мин</td>
			
			<td class="quant_box"><a class="service-plus" data-id="<? echo $service->id; ?>" data-price="<? echo $service->price; ?>" data-hour="<? echo $service->hour; ?>" data-minute="<? echo $service->minute; ?>">+</a><input disabled onkeypress='return event.charCode >= 48 && event.charCode <= 57' type="text" class="quantity" id="service_<? echo $service->id; ?>_cnt" value="1"><a class="service-minus" data-id="<? echo $service->id; ?>" data-price="<? echo $service->price; ?>" data-hour="<? echo $service->hour; ?>" data-minute="<? echo $service->minute; ?>">-</a></td>
			<td><a class="service_click" id="service_click_<? echo $service->id; ?>" data-id="<? echo $service->id; ?>" data-price="<? echo $service->price; ?>" data-hour="<? echo $service->hour; ?>" data-minute="<? echo $service->minute; ?>">Заказать</td>
		</tr>
		<? } ?>
	</table>
</div>

<h2>5. Дата и время уборки</h2>
<label class="date-of-clean">Дата уборки <input type="text" id="date"></label>
<label class="time-wrap">Время уборки<br> 
	<select id="time">
		<option>8:00</option>
		<option>8:30</option>
		<option>9:00</option>
		<option>9:30</option>
		<option>10:00</option>
		<option>10:30</option>
		<option>11:00</option>
		<option>11:30</option>
		<option>12:00</option>
		<option>12:30</option>
		<option>13:00</option>
		<option>13:30</option>
		<option>14:00</option>
		<option>14:30</option>
		<option>15:00</option>
		<option>15:30</option>
		<option>16:00</option>
		<option>16:30</option>
		<option>17:00</option>
		<option>17:30</option>
		<option>18:00</option>
	</select>
</label>

<h2>6. Удаленность от МКАД</h2>
<select id="mkad_kvartiri">
	<option value="1">В пределах МКАД</option>
	<option value="5">До 5 км.</option>
	<option value="10">От 5 до 10 км.</option>
	<option value="11">Свыше 10 км.</option>
</select>
<select id="mkad_kotedji" style="display: none;">
	<option value="1">В пределах МКАД</option>
	<option value="30">До 30 км.</option>
	<option value="31">Свыше 30 км.</option>
</select>

<h2>7. Cкидочная карта</h2>
<label class="check-subscribe"><input type="checkbox" id="discount" value="<? echo $options[0]->discount; ?>"><span class="ico-checkbox"><i></i></span>У меня есть клубная карта</label>
		
<div id="total-price">
	<div class="left">
		<div class="h3">ИТОГО:</div>
		<p class="price">Стоимость: <span><span id="total">0</span> руб.</span></p>
		<p class="discount">Скидка: <span><span id="discount_id">0</span> руб.</span></p>
		<p class="price">Цена со скидкой: <span><span id="totaldisc">0</span> руб.</span></p>
		<p class="price">Продолжительность уборки:  <span><span id="total_hours">0</span> ч. <span id="total_minutes">0</span> мин.</span></p>
		<p class="price-minimal">Минимальная стоимость заказа: <span>2 000 руб.</span></p>				
		<p class="price-minimal devlivery-manager" style="display:none; color: #EC790B;">Точную стоимость уточняйте у менеджеров</p>
		<p class="price"><strong>Подтверждение заявок осуществляется с 9-00 до 21-00.</strong></p>
	</div>
	<div class="right" style="display: none;">
		<a id="order">ОФОРМИТЬ ЗАЯВКУ</a><br>
	</div>
</div>


<div id="modal-back"></div>
<div class="modal-repetition" id="zakaz">
	<a id="zakaz_close">Закрыть</a>
	<form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="POST">
		<input type="hidden" name="action" value="contact_form">
		<input type="hidden" name="redirect" value="<? echo get_page_link(); ?>">
		<input type="hidden" name="package_id" id="package_id">
		<input type="hidden" name="ord_date" id="ord_date">
		<input type="hidden" name="ord_time" id="ord_time">
		<div id="add_servs"></div>
		<label>Имя*: <input type="text" name="name"></label><br>
		<label>Телефон: <input type="text" name="phone"></label><br>
		<input type="submit" name="submit_order" value="Оформить заявку">
	</form>
</div>

<?
}




function cleaner_calc_kvartiri()
{
	global $wpdb;
	$tarif = $wpdb->get_results( "SELECT * FROM ".$wpdb->prefix."calc_tarif" );
	$services = $wpdb->get_results( "SELECT * FROM ".$wpdb->prefix."calc_services" );
	$options = $wpdb->get_results( "SELECT * FROM ".$wpdb->prefix."calc_options" );
?>
<link rel="stylesheet" href="/wp-content/plugins/cleaner-calculator/styles.css">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<script type="text/javascript" src="/wp-content/plugins/cleaner-calculator/script.js"></script>
<script type="text/javascript">
	jQuery(function(){
		jQuery("#date").datepicker({ minDate: 0 });
	});
</script>

<h2>1. Выберите площадь, м²:</h2>
<div id="kvartiri" class="active"></div>
<div id="kvartiri_square_block">
	<input class="kvartiri_square" id="kvartiri_square_49" name="kvartiri_square" type="radio" value="49" checked> до 49
	<input class="kvartiri_square" id="kvartiri_square_99" name="kvartiri_square" type="radio" value="99"> 50-99
	<input class="kvartiri_square" id="kvartiri_square_149" name="kvartiri_square" type="radio" value="149"> 100-149
	<input class="kvartiri_square" id="kvartiri_square_200" name="kvartiri_square" type="radio" value="200"> 150-200
</div>

<h2>2. Выберите тариф:</h2>

<div class="tarif" id="tarif_kvartiri_49">
	<ul>
		<? for ($i = 0; $i <= 2; $i++) { ?>
		<li><strong><? echo $tarif[$i]->title; ?></strong><p><? echo $tarif[$i]->price; ?> руб.<br><? echo $tarif[$i]->hour; ?> час. <? echo $tarif[$i]->minute; ?> мин. / <? echo $tarif[$i]->description; ?> чел.</p><a id="tarif_<? echo $tarif[$i]->id; ?>" data-hour="<? echo $tarif[$i]->hour; ?>" data-minute="<? echo $tarif[$i]->minute; ?>" data-price="<? echo $tarif[$i]->price; ?>" data-people="<? echo $tarif[$i]->description; ?>">Заказать</a></li>
		<? } ?>
	</ul>
</div>
<div class="tarif" id="tarif_kvartiri_99" style="display: none;">
	<ul>
		<? for ($i = 3; $i <= 5; $i++) { ?>
		<li><strong><? echo $tarif[$i]->title; ?></strong><p><? echo $tarif[$i]->price; ?> руб.<br><? echo $tarif[$i]->hour; ?> час. <? echo $tarif[$i]->minute; ?> мин. / <? echo $tarif[$i]->description; ?> чел.</p><a id="tarif_<? echo $tarif[$i]->id; ?>" data-hour="<? echo $tarif[$i]->hour; ?>" data-minute="<? echo $tarif[$i]->minute; ?>" data-price="<? echo $tarif[$i]->price; ?>" data-people="<? echo $tarif[$i]->description; ?>">Заказать</a></li>
		<? } ?>
	</ul>
</div>
<div class="tarif" id="tarif_kvartiri_149" style="display: none;">
	<ul>
		<? for ($i = 6; $i <= 8; $i++) { ?>
		<li><strong><? echo $tarif[$i]->title; ?></strong><p><? echo $tarif[$i]->price; ?> руб.<br><? echo $tarif[$i]->hour; ?> час. <? echo $tarif[$i]->minute; ?> мин. / <? echo $tarif[$i]->description; ?> чел.</p><a id="tarif_<? echo $tarif[$i]->id; ?>" data-hour="<? echo $tarif[$i]->hour; ?>" data-minute="<? echo $tarif[$i]->minute; ?>" data-price="<? echo $tarif[$i]->price; ?>" data-people="<? echo $tarif[$i]->description; ?>">Заказать</a></li>
		<? } ?>
	</ul>
</div>
<div class="tarif" id="tarif_kvartiri_200" style="display: none;">
	<ul>
		<? for ($i = 9; $i <= 11; $i++) { ?>
		<li><strong><? echo $tarif[$i]->title; ?></strong><p><? echo $tarif[$i]->price; ?> руб.<br><? echo $tarif[$i]->hour; ?> час. <? echo $tarif[$i]->minute; ?> мин. / <? echo $tarif[$i]->description; ?> чел.</p><a id="tarif_<? echo $tarif[$i]->id; ?>" data-hour="<? echo $tarif[$i]->hour; ?>" data-minute="<? echo $tarif[$i]->minute; ?>" data-price="<? echo $tarif[$i]->price; ?>" data-people="<? echo $tarif[$i]->description; ?>">Заказать</a></li>
		<? } ?>
	</ul>
</div>

<a id="tarif_more">Показать подробное описание тарифов</a>
<div id="tarifmoreinfo" style="display: none;">
	<? $desc = $wpdb->get_results('SELECT post_content FROM '.$wpdb->prefix.'posts WHERE ID = 185');  echo $desc[0]->post_content; ?>
</div>

<a id="additional"><h2>3. Выберите дополнительные услуги: <span>Показать</span></h2></a>
<div id="additional-block" style="display: none;">
	<table>
		<? foreach($services as $key=>$service) { ?>
		<tr>
			<td style="max-width: 200px;"><? echo $service->title; ?></td>
			<td><? echo $service->price; ?> руб.</td>
			<td><? echo $service->hour; ?> час. <? echo $service->minute; ?> мин</td>
			
			<td class="quant_box"><a class="service-plus" data-id="<? echo $service->id; ?>" data-price="<? echo $service->price; ?>" data-hour="<? echo $service->hour; ?>" data-minute="<? echo $service->minute; ?>">+</a><input disabled onkeypress='return event.charCode >= 48 && event.charCode <= 57' type="text" class="quantity" id="service_<? echo $service->id; ?>_cnt" value="1"><a class="service-minus" data-id="<? echo $service->id; ?>" data-price="<? echo $service->price; ?>" data-hour="<? echo $service->hour; ?>" data-minute="<? echo $service->minute; ?>">-</a></td>
			<td><a class="service_click" id="service_click_<? echo $service->id; ?>" data-id="<? echo $service->id; ?>" data-price="<? echo $service->price; ?>" data-hour="<? echo $service->hour; ?>" data-minute="<? echo $service->minute; ?>">Заказать</td>
		</tr>
		<? } ?>
	</table>
</div>

<h2>4. Дата и время уборки</h2>
<label class="date-of-clean">Дата уборки <input type="text" id="date"></label>
<label class="time-wrap">Время уборки<br> 
	<select id="time">
		<option>8:00</option>
		<option>8:30</option>
		<option>9:00</option>
		<option>9:30</option>
		<option>10:00</option>
		<option>10:30</option>
		<option>11:00</option>
		<option>11:30</option>
		<option>12:00</option>
		<option>12:30</option>
		<option>13:00</option>
		<option>13:30</option>
		<option>14:00</option>
		<option>14:30</option>
		<option>15:00</option>
		<option>15:30</option>
		<option>16:00</option>
		<option>16:30</option>
		<option>17:00</option>
		<option>17:30</option>
		<option>18:00</option>
	</select>
</label>

<h2>5. Удаленность от МКАД</h2>
<select id="mkad_kvartiri">
	<option value="1">В пределах МКАД</option>
	<option value="5">До 5 км.</option>
	<option value="10">От 5 до 10 км.</option>
	<option value="11">Свыше 10 км.</option>
</select>

<h2>6. Cкидочная карта</h2>
<label class="check-subscribe"><input type="checkbox" id="discount" value="<? echo $options[0]->discount; ?>"><span class="ico-checkbox"><i></i></span>У меня есть клубная карта</label>
		
<div id="total-price">
	<div class="left">
		<div class="h3">ИТОГО:</div>
		<p class="price">Стоимость: <span><span id="total">0</span> руб.</span></p>
		<p class="discount">Скидка: <span><span id="discount_id">0</span> руб.</span></p>
		<p class="price">Цена со скидкой: <span><span id="totaldisc">0</span> руб.</span></p>
		<p class="price">Продолжительность уборки:  <span><span id="total_hours">0</span> ч. <span id="total_minutes">0</span> мин.</span></p>
		<p class="price-minimal">Минимальная стоимость заказа: <span>2 000 руб.</span></p>				
		<p class="price-minimal devlivery-manager" style="display:none; color: #EC790B;">Точную стоимость уточняйте у менеджеров</p>
		<p class="price"><strong>Подтверждение заявок осуществляется с 9-00 до 21-00.</strong></p>
	</div>
	<div class="right" style="display: none;">
		<a id="order">ОФОРМИТЬ ЗАЯВКУ</a><br>
	</div>
</div>


<div id="modal-back"></div>
<div class="modal-repetition" id="zakaz">
	<a id="zakaz_close">Закрыть</a>
	<form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="POST">
		<input type="hidden" name="action" value="contact_form">
		<input type="hidden" name="redirect" value="<? echo get_page_link(); ?>">
		<input type="hidden" name="package_id" id="package_id">
		<input type="hidden" name="ord_date" id="ord_date">
		<input type="hidden" name="ord_time" id="ord_time">
		<div id="add_servs"></div>
		<label>Имя*: <input type="text" name="name"></label><br>
		<label>Телефон: <input type="text" name="phone"></label><br>
		<input type="submit" name="submit_order" value="Оформить заявку">
	</form>
</div>

<?
}


function cleaner_calc_kotedji()
{
	global $wpdb;
	$tarif = $wpdb->get_results( "SELECT * FROM ".$wpdb->prefix."calc_tarif" );
	$services = $wpdb->get_results( "SELECT * FROM ".$wpdb->prefix."calc_services" );
	$options = $wpdb->get_results( "SELECT * FROM ".$wpdb->prefix."calc_options" );
?>
<link rel="stylesheet" href="/wp-content/plugins/cleaner-calculator/styles.css">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<script type="text/javascript" src="/wp-content/plugins/cleaner-calculator/script.js"></script>
<script type="text/javascript">
	jQuery(function(){
		jQuery("#date").datepicker({ minDate: 0 });
	});
</script>

<h2>1. Выберите площадь, м²:</h2>
<div id="kotedji" class="active"></div>
<div id="kotedji_square_block">
	<input class="kotedji_square" id="kotedji_square_199" name="kotedji_square" type="radio" value="199" checked> до 199
	<input class="kotedji_square" id="kotedji_square_249" name="kotedji_square" type="radio" value="249"> 200-249
	<input class="kotedji_square" id="kotedji_square_299" name="kotedji_square" type="radio" value="299"> 250-299
	<input class="kotedji_square" id="kotedji_square_349" name="kotedji_square" type="radio" value="349"> 300-349
</div>

<h2>2. Выберите тариф:</h2>

<div class="tarif" id="tarif_kotedji_199">
	<ul>
		<? for ($i = 12; $i <= 14; $i++) { ?>
		<li><strong><? echo $tarif[$i]->title; ?></strong><p><? echo $tarif[$i]->price; ?> руб.<br><? echo $tarif[$i]->hour; ?> час. <? echo $tarif[$i]->minute; ?> мин. / <? echo $tarif[$i]->description; ?> чел.</p><a id="tarif_<? echo $tarif[$i]->id; ?>" data-hour="<? echo $tarif[$i]->hour; ?>" data-minute="<? echo $tarif[$i]->minute; ?>" data-price="<? echo $tarif[$i]->price; ?>" data-people="<? echo $tarif[$i]->description; ?>">Заказать</a></li>
		<? } ?>
	</ul>
</div>
<div class="tarif" id="tarif_kotedji_249" style="display: none;">
	<ul>
		<? for ($i = 15; $i <= 17; $i++) { ?>
		<li><strong><? echo $tarif[$i]->title; ?></strong><p><? echo $tarif[$i]->price; ?> руб.<br><? echo $tarif[$i]->hour; ?> час. <? echo $tarif[$i]->minute; ?> мин. / <? echo $tarif[$i]->description; ?> чел.</p><a id="tarif_<? echo $tarif[$i]->id; ?>" data-hour="<? echo $tarif[$i]->hour; ?>" data-minute="<? echo $tarif[$i]->minute; ?>" data-price="<? echo $tarif[$i]->price; ?>" data-people="<? echo $tarif[$i]->description; ?>">Заказать</a></li>
		<? } ?>
	</ul>
</div>
<div class="tarif" id="tarif_kotedji_299" style="display: none;">
	<ul>
		<? for ($i = 18; $i <= 20; $i++) { ?>
		<li><strong><? echo $tarif[$i]->title; ?></strong><p><? echo $tarif[$i]->price; ?> руб.<br><? echo $tarif[$i]->hour; ?> час. <? echo $tarif[$i]->minute; ?> мин. / <? echo $tarif[$i]->description; ?> чел.</p><a id="tarif_<? echo $tarif[$i]->id; ?>" data-hour="<? echo $tarif[$i]->hour; ?>" data-minute="<? echo $tarif[$i]->minute; ?>" data-price="<? echo $tarif[$i]->price; ?>" data-people="<? echo $tarif[$i]->description; ?>">Заказать</a></li>
		<? } ?>
	</ul>
</div>
<div class="tarif" id="tarif_kotedji_349" style="display: none;">
	<ul>
		<? for ($i = 21; $i <= 23; $i++) { ?>
		<li><strong><? echo $tarif[$i]->title; ?></strong><p><? echo $tarif[$i]->price; ?> руб.<br><? echo $tarif[$i]->hour; ?> час. <? echo $tarif[$i]->minute; ?> мин. / <? echo $tarif[$i]->description; ?> чел.</p><a id="tarif_<? echo $tarif[$i]->id; ?>" data-hour="<? echo $tarif[$i]->hour; ?>" data-minute="<? echo $tarif[$i]->minute; ?>" data-price="<? echo $tarif[$i]->price; ?>" data-people="<? echo $tarif[$i]->description; ?>">Заказать</a></li>
		<? } ?>
	</ul>
</div>

<a id="tarif_more">Показать подробное описание тарифов</a>
<div id="tarifmoreinfo" style="display: none;">
	<? $desc = $wpdb->get_results('SELECT post_content FROM '.$wpdb->prefix.'posts WHERE ID = 185');  echo $desc[0]->post_content; ?>
</div>

<a id="additional"><h2>3. Выберите дополнительные услуги: <span>Показать</span></h2></a>
<div id="additional-block" style="display: none;">
	<table>
		<? foreach($services as $key=>$service) { ?>
		<tr>
			<td style="max-width: 200px;"><? echo $service->title; ?></td>
			<td><? echo $service->price; ?> руб.</td>
			<td><? echo $service->hour; ?> час. <? echo $service->minute; ?> мин</td>
			
			<td class="quant_box"><a class="service-plus" data-id="<? echo $service->id; ?>" data-price="<? echo $service->price; ?>" data-hour="<? echo $service->hour; ?>" data-minute="<? echo $service->minute; ?>">+</a><input disabled onkeypress='return event.charCode >= 48 && event.charCode <= 57' type="text" class="quantity" id="service_<? echo $service->id; ?>_cnt" value="1"><a class="service-minus" data-id="<? echo $service->id; ?>" data-price="<? echo $service->price; ?>" data-hour="<? echo $service->hour; ?>" data-minute="<? echo $service->minute; ?>">-</a></td>
			<td><a class="service_click" id="service_click_<? echo $service->id; ?>" data-id="<? echo $service->id; ?>" data-price="<? echo $service->price; ?>" data-hour="<? echo $service->hour; ?>" data-minute="<? echo $service->minute; ?>">Заказать</td>
		</tr>
		<? } ?>
	</table>
</div>

<h2>4. Дата и время уборки</h2>
<label class="date-of-clean">Дата уборки <input type="text" id="date"></label>
<label class="time-wrap">Время уборки<br> 
	<select id="time">
		<option>8:00</option>
		<option>8:30</option>
		<option>9:00</option>
		<option>9:30</option>
		<option>10:00</option>
		<option>10:30</option>
		<option>11:00</option>
		<option>11:30</option>
		<option>12:00</option>
		<option>12:30</option>
		<option>13:00</option>
		<option>13:30</option>
		<option>14:00</option>
		<option>14:30</option>
		<option>15:00</option>
		<option>15:30</option>
		<option>16:00</option>
		<option>16:30</option>
		<option>17:00</option>
		<option>17:30</option>
		<option>18:00</option>
	</select>
</label>

<h2>5. Удаленность от МКАД</h2>
<select id="mkad_kotedji">
	<option value="1">В пределах МКАД</option>
	<option value="30">До 30 км.</option>
	<option value="31">Свыше 30 км.</option>
</select>

<h2>6. Cкидочная карта</h2>
<label class="check-subscribe"><input type="checkbox" id="discount" value="<? echo $options[0]->discount; ?>"><span class="ico-checkbox"><i></i></span>У меня есть клубная карта</label>
		
<div id="total-price">
	<div class="left">
		<div class="h3">ИТОГО:</div>
		<p class="price">Стоимость: <span><span id="total">0</span> руб.</span></p>
		<p class="discount">Скидка: <span><span id="discount_id">0</span> руб.</span></p>
		<p class="price">Цена со скидкой: <span><span id="totaldisc">0</span> руб.</span></p>
		<p class="price">Продолжительность уборки:  <span><span id="total_hours">0</span> ч. <span id="total_minutes">0</span> мин.</span></p>
		<p class="price-minimal">Минимальная стоимость заказа: <span>2 000 руб.</span></p>				
		<p class="price-minimal devlivery-manager" style="display:none; color: #EC790B;">Точную стоимость уточняйте у менеджеров</p>
		<p class="price"><strong>Подтверждение заявок осуществляется с 9-00 до 21-00.</strong></p>
	</div>
	<div class="right" style="display: none;">
		<a id="order">ОФОРМИТЬ ЗАЯВКУ</a><br>
	</div>
</div>


<div id="modal-back"></div>
<div class="modal-repetition" id="zakaz">
	<a id="zakaz_close">Закрыть</a>
	<form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="POST">
		<input type="hidden" name="action" value="contact_form">
		<input type="hidden" name="redirect" value="<? echo get_page_link(); ?>">
		<input type="hidden" name="package_id" id="package_id">
		<input type="hidden" name="ord_date" id="ord_date">
		<input type="hidden" name="ord_time" id="ord_time">
		<div id="add_servs"></div>
		<label>Имя*: <input type="text" name="name"></label><br>
		<label>Телефон: <input type="text" name="phone"></label><br>
		<input type="submit" name="submit_order" value="Оформить заявку">
	</form>
</div>

<?
}


function cleaner_calc_remont()
{
	global $wpdb;
	$tarif = $wpdb->get_results( "SELECT * FROM ".$wpdb->prefix."calc_tarif" );
	$services = $wpdb->get_results( "SELECT * FROM ".$wpdb->prefix."calc_services" );
	$options = $wpdb->get_results( "SELECT * FROM ".$wpdb->prefix."calc_options" );
?>
<link rel="stylesheet" href="/wp-content/plugins/cleaner-calculator/styles.css">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<script type="text/javascript" src="/wp-content/plugins/cleaner-calculator/script.js"></script>
<script type="text/javascript">
	jQuery(function(){
		jQuery("#date").datepicker({ minDate: 0 });
	});
</script>

<h2>1. Выберите подходящую услугу:</h2>
<div id="remont" class="active"></div>
<ul id="remont_types">
	<li><a id="kvartiri_remont" class="active">Уборка квартир</a></li>
	<li><a id="kotedji_remont">Уборка котеджей</a></li>
</ul>
<h2>2. Выберите площадь, м²:</h2>

<div id="kvartiri_square_block">
	<input class="kvartiri_square" id="kvartiri_square_49" name="kvartiri_square" type="radio" value="49" checked> до 49
	<input class="kvartiri_square" id="kvartiri_square_99" name="kvartiri_square" type="radio" value="99"> 50-99
	<input class="kvartiri_square" id="kvartiri_square_149" name="kvartiri_square" type="radio" value="149"> 100-149
	<input class="kvartiri_square" id="kvartiri_square_200" name="kvartiri_square" type="radio" value="200"> 150-200
</div>
<div id="kotedji_square_block" style="display: none;">
	<input class="kotedji_square" id="kotedji_square_199" name="kotedji_square" type="radio" value="199" checked> до 199
	<input class="kotedji_square" id="kotedji_square_249" name="kotedji_square" type="radio" value="249"> 200-249
	<input class="kotedji_square" id="kotedji_square_299" name="kotedji_square" type="radio" value="299"> 250-299
	<input class="kotedji_square" id="kotedji_square_349" name="kotedji_square" type="radio" value="349"> 300-349
</div>

<h2>3. Выберите тариф:</h2>

<div class="tarif" id="tarif_remont_kvartiri_49">
	<ul>
		<? for ($i = 24; $i <= 26; $i++) { ?>
		<li><strong><? echo $tarif[$i]->title; ?></strong><p><? echo $tarif[$i]->price; ?> руб.<br><? echo $tarif[$i]->hour; ?> час. <? echo $tarif[$i]->minute; ?> мин. / <? echo $tarif[$i]->description; ?> чел.</p><a id="tarif_<? echo $tarif[$i]->id; ?>" data-hour="<? echo $tarif[$i]->hour; ?>" data-minute="<? echo $tarif[$i]->minute; ?>" data-price="<? echo $tarif[$i]->price; ?>" data-people="<? echo $tarif[$i]->description; ?>">Заказать</a></li>
		<? } ?>
	</ul>
</div>
<div class="tarif" id="tarif_remont_kvartiri_99" style="display: none;">
	<ul>
		<? for ($i = 27; $i <= 29; $i++) { ?>
		<li><strong><? echo $tarif[$i]->title; ?></strong><p><? echo $tarif[$i]->price; ?> руб.<br><? echo $tarif[$i]->hour; ?> час. <? echo $tarif[$i]->minute; ?> мин. / <? echo $tarif[$i]->description; ?> чел.</p><a id="tarif_<? echo $tarif[$i]->id; ?>" data-hour="<? echo $tarif[$i]->hour; ?>" data-minute="<? echo $tarif[$i]->minute; ?>" data-price="<? echo $tarif[$i]->price; ?>" data-people="<? echo $tarif[$i]->description; ?>">Заказать</a></li>
		<? } ?>
	</ul>
</div>
<div class="tarif" id="tarif_remont_kvartiri_149" style="display: none;">
	<ul>
		<? for ($i = 30; $i <= 32; $i++) { ?>
		<li><strong><? echo $tarif[$i]->title; ?></strong><p><? echo $tarif[$i]->price; ?> руб.<br><? echo $tarif[$i]->hour; ?> час. <? echo $tarif[$i]->minute; ?> мин. / <? echo $tarif[$i]->description; ?> чел.</p><a id="tarif_<? echo $tarif[$i]->id; ?>" data-hour="<? echo $tarif[$i]->hour; ?>" data-minute="<? echo $tarif[$i]->minute; ?>" data-price="<? echo $tarif[$i]->price; ?>" data-people="<? echo $tarif[$i]->description; ?>">Заказать</a></li>
		<? } ?>
	</ul>
</div>
<div class="tarif" id="tarif_remont_kvartiri_200" style="display: none;">
	<ul>
		<? for ($i = 33; $i <= 35; $i++) { ?>
		<li><strong><? echo $tarif[$i]->title; ?></strong><p><? echo $tarif[$i]->price; ?> руб.<br><? echo $tarif[$i]->hour; ?> час. <? echo $tarif[$i]->minute; ?> мин. / <? echo $tarif[$i]->description; ?> чел.</p><a id="tarif_<? echo $tarif[$i]->id; ?>" data-hour="<? echo $tarif[$i]->hour; ?>" data-minute="<? echo $tarif[$i]->minute; ?>" data-price="<? echo $tarif[$i]->price; ?>" data-people="<? echo $tarif[$i]->description; ?>">Заказать</a></li>
		<? } ?>
	</ul>
</div>

<div class="tarif" id="tarif_remont_kotedji_199" style="display: none;">
	<ul>
		<? for ($i = 36; $i <= 38; $i++) { ?>
		<li><strong><? echo $tarif[$i]->title; ?></strong><p><? echo $tarif[$i]->price; ?> руб.<br><? echo $tarif[$i]->hour; ?> час. <? echo $tarif[$i]->minute; ?> мин. / <? echo $tarif[$i]->description; ?> чел.</p><a id="tarif_<? echo $tarif[$i]->id; ?>" data-hour="<? echo $tarif[$i]->hour; ?>" data-minute="<? echo $tarif[$i]->minute; ?>" data-price="<? echo $tarif[$i]->price; ?>" data-people="<? echo $tarif[$i]->description; ?>">Заказать</a></li>
		<? } ?>
	</ul>
</div>
<div class="tarif" id="tarif_remont_kotedji_249" style="display: none;">
	<ul>
		<? for ($i = 39; $i <= 41; $i++) { ?>
		<li><strong><? echo $tarif[$i]->title; ?></strong><p><? echo $tarif[$i]->price; ?> руб.<br><? echo $tarif[$i]->hour; ?> час. <? echo $tarif[$i]->minute; ?> мин. / <? echo $tarif[$i]->description; ?> чел.</p><a id="tarif_<? echo $tarif[$i]->id; ?>" data-hour="<? echo $tarif[$i]->hour; ?>" data-minute="<? echo $tarif[$i]->minute; ?>" data-price="<? echo $tarif[$i]->price; ?>" data-people="<? echo $tarif[$i]->description; ?>">Заказать</a></li>
		<? } ?>
	</ul>
</div>
<div class="tarif" id="tarif_remont_kotedji_299" style="display: none;">
	<ul>
		<? for ($i = 42; $i <= 44; $i++) { ?>
		<li><strong><? echo $tarif[$i]->title; ?></strong><p><? echo $tarif[$i]->price; ?> руб.<br><? echo $tarif[$i]->hour; ?> час. <? echo $tarif[$i]->minute; ?> мин. / <? echo $tarif[$i]->description; ?> чел.</p><a id="tarif_<? echo $tarif[$i]->id; ?>" data-hour="<? echo $tarif[$i]->hour; ?>" data-minute="<? echo $tarif[$i]->minute; ?>" data-price="<? echo $tarif[$i]->price; ?>" data-people="<? echo $tarif[$i]->description; ?>">Заказать</a></li>
		<? } ?>
	</ul>
</div>
<div class="tarif" id="tarif_remont_kotedji_349" style="display: none;">
	<ul>
		<? for ($i = 45; $i <= 47; $i++) { ?>
		<li><strong><? echo $tarif[$i]->title; ?></strong><p><? echo $tarif[$i]->price; ?> руб.<br><? echo $tarif[$i]->hour; ?> час. <? echo $tarif[$i]->minute; ?> мин. / <? echo $tarif[$i]->description; ?> чел.</p><a id="tarif_<? echo $tarif[$i]->id; ?>" data-hour="<? echo $tarif[$i]->hour; ?>" data-minute="<? echo $tarif[$i]->minute; ?>" data-price="<? echo $tarif[$i]->price; ?>" data-people="<? echo $tarif[$i]->description; ?>">Заказать</a></li>
		<? } ?>
	</ul>
</div>

<a id="tarif_more">Показать подробное описание тарифов</a>
<div id="tarifmoreinfo" style="display: none;">
	<? $desc = $wpdb->get_results('SELECT post_content FROM '.$wpdb->prefix.'posts WHERE ID = 185');  echo $desc[0]->post_content; ?>
</div>

<a id="additional"><h2>4. Выберите дополнительные услуги: <span>Показать</span></h2></a>
<div id="additional-block" style="display: none;">
	<table>
		<? foreach($services as $key=>$service) { ?>
		<tr>
			<td style="max-width: 200px;"><? echo $service->title; ?></td>
			<td><? echo $service->price; ?> руб.</td>
			<td><? echo $service->hour; ?> час. <? echo $service->minute; ?> мин</td>
			
			<td class="quant_box"><a class="service-plus" data-id="<? echo $service->id; ?>" data-price="<? echo $service->price; ?>" data-hour="<? echo $service->hour; ?>" data-minute="<? echo $service->minute; ?>">+</a><input disabled onkeypress='return event.charCode >= 48 && event.charCode <= 57' type="text" class="quantity" id="service_<? echo $service->id; ?>_cnt" value="1"><a class="service-minus" data-id="<? echo $service->id; ?>" data-price="<? echo $service->price; ?>" data-hour="<? echo $service->hour; ?>" data-minute="<? echo $service->minute; ?>">-</a></td>
			<td><a class="service_click" id="service_click_<? echo $service->id; ?>" data-id="<? echo $service->id; ?>" data-price="<? echo $service->price; ?>" data-hour="<? echo $service->hour; ?>" data-minute="<? echo $service->minute; ?>">Заказать</td>
		</tr>
		<? } ?>
	</table>
</div>

<h2>5. Дата и время уборки</h2>
<label class="date-of-clean">Дата уборки <input type="text" id="date"></label>
<label class="time-wrap">Время уборки<br> 
	<select id="time">
		<option>8:00</option>
		<option>8:30</option>
		<option>9:00</option>
		<option>9:30</option>
		<option>10:00</option>
		<option>10:30</option>
		<option>11:00</option>
		<option>11:30</option>
		<option>12:00</option>
		<option>12:30</option>
		<option>13:00</option>
		<option>13:30</option>
		<option>14:00</option>
		<option>14:30</option>
		<option>15:00</option>
		<option>15:30</option>
		<option>16:00</option>
		<option>16:30</option>
		<option>17:00</option>
		<option>17:30</option>
		<option>18:00</option>
	</select>
</label>

<h2>6. Удаленность от МКАД</h2>
<select id="mkad_kvartiri">
	<option value="1">В пределах МКАД</option>
	<option value="5">До 5 км.</option>
	<option value="10">От 5 до 10 км.</option>
	<option value="11">Свыше 10 км.</option>
</select>
<select id="mkad_kotedji" style="display: none;">
	<option value="1">В пределах МКАД</option>
	<option value="30">До 30 км.</option>
	<option value="31">Свыше 30 км.</option>
</select>

<h2>8. Cкидочная карта</h2>
<label class="check-subscribe"><input type="checkbox" id="discount" value="<? echo $options[0]->discount; ?>"><span class="ico-checkbox"><i></i></span>У меня есть клубная карта</label>
		
<div id="total-price">
	<div class="left">
		<div class="h3">ИТОГО:</div>
		<p class="price">Стоимость: <span><span id="total">0</span> руб.</span></p>
		<p class="discount">Скидка: <span><span id="discount_id">0</span> руб.</span></p>
		<p class="price">Цена со скидкой: <span><span id="totaldisc">0</span> руб.</span></p>
		<p class="price">Продолжительность уборки:  <span><span id="total_hours">0</span> ч. <span id="total_minutes">0</span> мин.</span></p>
		<p class="price-minimal">Минимальная стоимость заказа: <span>2 000 руб.</span></p>				
		<p class="price-minimal devlivery-manager" style="display:none; color: #EC790B;">Точную стоимость уточняйте у менеджеров</p>
		<p class="price"><strong>Подтверждение заявок осуществляется с 9-00 до 21-00.</strong></p>
	</div>
	<div class="right" style="display: none;">
		<a id="order">ОФОРМИТЬ ЗАЯВКУ</a><br>
	</div>
</div>


<div id="modal-back"></div>
<div class="modal-repetition" id="zakaz">
	<a id="zakaz_close">Закрыть</a>
	<form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="POST">
		<input type="hidden" name="action" value="contact_form">
		<input type="hidden" name="redirect" value="<? echo get_page_link(); ?>">
		<input type="hidden" name="package_id" id="package_id">
		<input type="hidden" name="ord_date" id="ord_date">
		<input type="hidden" name="ord_time" id="ord_time">
		<div id="add_servs"></div>
		<label>Имя*: <input type="text" name="name"></label><br>
		<label>Телефон: <input type="text" name="phone"></label><br>
		<input type="submit" name="submit_order" value="Оформить заявку">
	</form>
</div>

<?
}





function add_admin_menu_pages()
{
	add_options_page('Калькулятор уборщика', 'Калькулятор уборщика', 'manage_options', 'clean-calc', 'admin_menu_page');
}

function admin_menu_page()
{
	global $wpdb;
	
	if (isset($_POST['submit_tarif']))
	{
		for ($i=1; $i<=48; $i++)
		{
			$data['title'] = $_POST['tarif_'.$i.'_title'];
			$data['price'] = $_POST['tarif_'.$i.'_price'];
			$data['hour'] = $_POST['tarif_'.$i.'_hour'];
			$data['minute'] = $_POST['tarif_'.$i.'_minute'];
			$wpdb->update( $wpdb->prefix.'calc_tarif', $data, array('id'=>$i), $format = null, $where_format = null );
		}
	}
	
	if (isset($_POST['submit_service']))
	{
		foreach($_POST['service'] as $key=>$value)
		{
			if (isset($value['id']))
			{
				$data['title'] = $value['title'];
				$data['price'] = $value['price'];
				$data['hour'] = $value['hour'];
				$data['minute'] = $value['minute'];
				$wpdb->update( $wpdb->prefix.'calc_services', $data, array('id'=>$value['id']), $format = null, $where_format = null );
			}
			else
			{
				$data['title'] = $value['title'];
				$data['price'] = $value['price'];
				$data['hour'] = $value['hour'];
				$data['minute'] = $value['minute'];
				$wpdb->insert( $wpdb->prefix.'calc_services', $data, array('%s', '%s', '%d', '%d'));
			}
		}
	}
	
	if (isset($_POST['submit_option']))
	{
		$data['title'] = 'Скидка';
		$data['price'] = '0';
		$data['hour'] = 0;
		$data['minute'] = 0;
		$data['discount'] = $_POST['discount'];
		$wpdb->update( $wpdb->prefix.'calc_options', $data, array('id'=>1), $format = null, $where_format = null );
	}
	
	if (isset($_POST['submit_form']))
	{
		$data['title'] = 'Почта отправки обратного письма';
		$data['price'] = '0';
		$data['hour'] = 0;
		$data['minute'] = 0;
		$data['description'] = $_POST['description'];
		$wpdb->update( $wpdb->prefix.'calc_options', $data, array('id'=>2), $format = null, $where_format = null );
	}
	
	$tarif = $wpdb->get_results( "SELECT * FROM ".$wpdb->prefix."calc_tarif" );
	$services = $wpdb->get_results( "SELECT * FROM ".$wpdb->prefix."calc_services" );
	$options = $wpdb->get_results( "SELECT * FROM ".$wpdb->prefix."calc_options" );
?>
<h1>Редактирование цен в калькуляторе уборщика</h1>

<h2>Тарифы</h2>
<form action="/wp-admin/options-general.php?page=clean-calc" method="POST">
	<table>
		<tr rowspan="2">
			<th>Название тарифа</th>
			<th>Цена в рублях</th>
			<th colspan="2">Продолжительность</th>
		</tr>
		<tr>
			<th></th>
			<th></th>
			<th>Часы</th>
			<th>Минуты</th>
		</tr>
		<tr>
			<td colspan="4" style="text-align: center;">Уборка квартир до 49</td>
		</tr>
	<? for($i = 0; $i <= 2; $i++) { $value = $tarif[$i]; ?>
		<tr>
			<td><input type="text" name="tarif_<? echo $value->id; ?>_title" value="<? echo $value->title ?>"></td>
			<td><input type="text" name="tarif_<? echo $value->id; ?>_price" value="<? echo $value->price ?>" onkeypress='return event.charCode >= 48 && event.charCode <= 57'></td>
			<td><input type="text" name="tarif_<? echo $value->id; ?>_hour" value="<? echo $value->hour ?>" onkeypress='return event.charCode >= 48 && event.charCode <= 57'></td>
			<td><input type="text" name="tarif_<? echo $value->id; ?>_minute" value="<? echo $value->minute ?>" onkeypress='return event.charCode >= 48 && event.charCode <= 57'></td>
		</tr>
	<? } ?>
		<tr>
			<td colspan="4" style="text-align: center;">Уборка квартир 50-99</td>
		</tr>
	<? for($i = 3; $i <= 5; $i++) { $value = $tarif[$i]; ?>
		<tr>
			<td><input type="text" name="tarif_<? echo $value->id; ?>_title" value="<? echo $value->title ?>"></td>
			<td><input type="text" name="tarif_<? echo $value->id; ?>_price" value="<? echo $value->price ?>" onkeypress='return event.charCode >= 48 && event.charCode <= 57'></td>
			<td><input type="text" name="tarif_<? echo $value->id; ?>_hour" value="<? echo $value->hour ?>" onkeypress='return event.charCode >= 48 && event.charCode <= 57'></td>
			<td><input type="text" name="tarif_<? echo $value->id; ?>_minute" value="<? echo $value->minute ?>" onkeypress='return event.charCode >= 48 && event.charCode <= 57'></td>
		</tr>
	<? } ?>
		<tr>
			<td colspan="4" style="text-align: center;">Уборка квартир 100-149</td>
		</tr>
	<? for($i = 6; $i <= 8; $i++) { $value = $tarif[$i]; ?>
		<tr>
			<td><input type="text" name="tarif_<? echo $value->id; ?>_title" value="<? echo $value->title ?>"></td>
			<td><input type="text" name="tarif_<? echo $value->id; ?>_price" value="<? echo $value->price ?>" onkeypress='return event.charCode >= 48 && event.charCode <= 57'></td>
			<td><input type="text" name="tarif_<? echo $value->id; ?>_hour" value="<? echo $value->hour ?>" onkeypress='return event.charCode >= 48 && event.charCode <= 57'></td>
			<td><input type="text" name="tarif_<? echo $value->id; ?>_minute" value="<? echo $value->minute ?>" onkeypress='return event.charCode >= 48 && event.charCode <= 57'></td>
		</tr>
	<? } ?>
		<tr>
			<td colspan="4" style="text-align: center;">Уборка квартир 149-200</td>
		</tr>
	<? for($i = 9; $i <= 11; $i++) { $value = $tarif[$i]; ?>
		<tr>
			<td><input type="text" name="tarif_<? echo $value->id; ?>_title" value="<? echo $value->title ?>"></td>
			<td><input type="text" name="tarif_<? echo $value->id; ?>_price" value="<? echo $value->price ?>" onkeypress='return event.charCode >= 48 && event.charCode <= 57'></td>
			<td><input type="text" name="tarif_<? echo $value->id; ?>_hour" value="<? echo $value->hour ?>" onkeypress='return event.charCode >= 48 && event.charCode <= 57'></td>
			<td><input type="text" name="tarif_<? echo $value->id; ?>_minute" value="<? echo $value->minute ?>" onkeypress='return event.charCode >= 48 && event.charCode <= 57'></td>
		</tr>
	<? } ?>
		<tr>
			<td colspan="4" style="text-align: center;">Уборка котеджей до 199</td>
		</tr>
	<? for($i = 12; $i <= 14; $i++) { $value = $tarif[$i]; ?>
		<tr>
			<td><input type="text" name="tarif_<? echo $value->id; ?>_title" value="<? echo $value->title ?>"></td>
			<td><input type="text" name="tarif_<? echo $value->id; ?>_price" value="<? echo $value->price ?>" onkeypress='return event.charCode >= 48 && event.charCode <= 57'></td>
			<td><input type="text" name="tarif_<? echo $value->id; ?>_hour" value="<? echo $value->hour ?>" onkeypress='return event.charCode >= 48 && event.charCode <= 57'></td>
			<td><input type="text" name="tarif_<? echo $value->id; ?>_minute" value="<? echo $value->minute ?>" onkeypress='return event.charCode >= 48 && event.charCode <= 57'></td>
		</tr>
	<? } ?>
		<tr>
			<td colspan="4" style="text-align: center;">Уборка котеджей 199-249</td>
		</tr>
	<? for($i = 15; $i <= 17; $i++) { $value = $tarif[$i]; ?>
		<tr>
			<td><input type="text" name="tarif_<? echo $value->id; ?>_title" value="<? echo $value->title ?>"></td>
			<td><input type="text" name="tarif_<? echo $value->id; ?>_price" value="<? echo $value->price ?>" onkeypress='return event.charCode >= 48 && event.charCode <= 57'></td>
			<td><input type="text" name="tarif_<? echo $value->id; ?>_hour" value="<? echo $value->hour ?>" onkeypress='return event.charCode >= 48 && event.charCode <= 57'></td>
			<td><input type="text" name="tarif_<? echo $value->id; ?>_minute" value="<? echo $value->minute ?>" onkeypress='return event.charCode >= 48 && event.charCode <= 57'></td>
		</tr>
	<? } ?>
		<tr>
			<td colspan="4" style="text-align: center;">Уборка котеджей 250-299</td>
		</tr>
	<? for($i = 18; $i <= 20; $i++) { $value = $tarif[$i]; ?>
		<tr>
			<td><input type="text" name="tarif_<? echo $value->id; ?>_title" value="<? echo $value->title ?>"></td>
			<td><input type="text" name="tarif_<? echo $value->id; ?>_price" value="<? echo $value->price ?>" onkeypress='return event.charCode >= 48 && event.charCode <= 57'></td>
			<td><input type="text" name="tarif_<? echo $value->id; ?>_hour" value="<? echo $value->hour ?>" onkeypress='return event.charCode >= 48 && event.charCode <= 57'></td>
			<td><input type="text" name="tarif_<? echo $value->id; ?>_minute" value="<? echo $value->minute ?>" onkeypress='return event.charCode >= 48 && event.charCode <= 57'></td>
		</tr>
	<? } ?>
		<tr>
			<td colspan="4" style="text-align: center;">Уборка котеджей 300-349</td>
		</tr>
	<? for($i = 21; $i <= 23; $i++) { $value = $tarif[$i]; ?>
		<tr>
			<td><input type="text" name="tarif_<? echo $value->id; ?>_title" value="<? echo $value->title ?>"></td>
			<td><input type="text" name="tarif_<? echo $value->id; ?>_price" value="<? echo $value->price ?>" onkeypress='return event.charCode >= 48 && event.charCode <= 57'></td>
			<td><input type="text" name="tarif_<? echo $value->id; ?>_hour" value="<? echo $value->hour ?>" onkeypress='return event.charCode >= 48 && event.charCode <= 57'></td>
			<td><input type="text" name="tarif_<? echo $value->id; ?>_minute" value="<? echo $value->minute ?>" onkeypress='return event.charCode >= 48 && event.charCode <= 57'></td>
		</tr>
	<? } ?>
	
	
	
		<tr>
			<td colspan="4" style="text-align: center;">Уборка квартир после ремонта до 49</td>
		</tr>
	<? for($i = 24; $i <= 26; $i++) { $value = $tarif[$i]; ?>
		<tr>
			<td><input type="text" name="tarif_<? echo $value->id; ?>_title" value="<? echo $value->title ?>"></td>
			<td><input type="text" name="tarif_<? echo $value->id; ?>_price" value="<? echo $value->price ?>" onkeypress='return event.charCode >= 48 && event.charCode <= 57'></td>
			<td><input type="text" name="tarif_<? echo $value->id; ?>_hour" value="<? echo $value->hour ?>" onkeypress='return event.charCode >= 48 && event.charCode <= 57'></td>
			<td><input type="text" name="tarif_<? echo $value->id; ?>_minute" value="<? echo $value->minute ?>" onkeypress='return event.charCode >= 48 && event.charCode <= 57'></td>
		</tr>
	<? } ?>
		<tr>
			<td colspan="4" style="text-align: center;">Уборка квартир после ремонта 50-99</td>
		</tr>
	<? for($i = 27; $i <= 29; $i++) { $value = $tarif[$i]; ?>
		<tr>
			<td><input type="text" name="tarif_<? echo $value->id; ?>_title" value="<? echo $value->title ?>"></td>
			<td><input type="text" name="tarif_<? echo $value->id; ?>_price" value="<? echo $value->price ?>" onkeypress='return event.charCode >= 48 && event.charCode <= 57'></td>
			<td><input type="text" name="tarif_<? echo $value->id; ?>_hour" value="<? echo $value->hour ?>" onkeypress='return event.charCode >= 48 && event.charCode <= 57'></td>
			<td><input type="text" name="tarif_<? echo $value->id; ?>_minute" value="<? echo $value->minute ?>" onkeypress='return event.charCode >= 48 && event.charCode <= 57'></td>
		</tr>
	<? } ?>
		<tr>
			<td colspan="4" style="text-align: center;">Уборка квартир после ремонта 100-149</td>
		</tr>
	<? for($i = 30; $i <= 32; $i++) { $value = $tarif[$i]; ?>
		<tr>
			<td><input type="text" name="tarif_<? echo $value->id; ?>_title" value="<? echo $value->title ?>"></td>
			<td><input type="text" name="tarif_<? echo $value->id; ?>_price" value="<? echo $value->price ?>" onkeypress='return event.charCode >= 48 && event.charCode <= 57'></td>
			<td><input type="text" name="tarif_<? echo $value->id; ?>_hour" value="<? echo $value->hour ?>" onkeypress='return event.charCode >= 48 && event.charCode <= 57'></td>
			<td><input type="text" name="tarif_<? echo $value->id; ?>_minute" value="<? echo $value->minute ?>" onkeypress='return event.charCode >= 48 && event.charCode <= 57'></td>
		</tr>
	<? } ?>
		<tr>
			<td colspan="4" style="text-align: center;">Уборка квартир после ремонта 149-200</td>
		</tr>
	<? for($i = 33; $i <= 35; $i++) { $value = $tarif[$i]; ?>
		<tr>
			<td><input type="text" name="tarif_<? echo $value->id; ?>_title" value="<? echo $value->title ?>"></td>
			<td><input type="text" name="tarif_<? echo $value->id; ?>_price" value="<? echo $value->price ?>" onkeypress='return event.charCode >= 48 && event.charCode <= 57'></td>
			<td><input type="text" name="tarif_<? echo $value->id; ?>_hour" value="<? echo $value->hour ?>" onkeypress='return event.charCode >= 48 && event.charCode <= 57'></td>
			<td><input type="text" name="tarif_<? echo $value->id; ?>_minute" value="<? echo $value->minute ?>" onkeypress='return event.charCode >= 48 && event.charCode <= 57'></td>
		</tr>
	<? } ?>
		<tr>
			<td colspan="4" style="text-align: center;">Уборка котеджей после ремонта до 199</td>
		</tr>
	<? for($i = 36; $i <= 38; $i++) { $value = $tarif[$i]; ?>
		<tr>
			<td><input type="text" name="tarif_<? echo $value->id; ?>_title" value="<? echo $value->title ?>"></td>
			<td><input type="text" name="tarif_<? echo $value->id; ?>_price" value="<? echo $value->price ?>" onkeypress='return event.charCode >= 48 && event.charCode <= 57'></td>
			<td><input type="text" name="tarif_<? echo $value->id; ?>_hour" value="<? echo $value->hour ?>" onkeypress='return event.charCode >= 48 && event.charCode <= 57'></td>
			<td><input type="text" name="tarif_<? echo $value->id; ?>_minute" value="<? echo $value->minute ?>" onkeypress='return event.charCode >= 48 && event.charCode <= 57'></td>
		</tr>
	<? } ?>
		<tr>
			<td colspan="4" style="text-align: center;">Уборка котеджей после ремонта 199-249</td>
		</tr>
	<? for($i = 39; $i <= 41; $i++) { $value = $tarif[$i]; ?>
		<tr>
			<td><input type="text" name="tarif_<? echo $value->id; ?>_title" value="<? echo $value->title ?>"></td>
			<td><input type="text" name="tarif_<? echo $value->id; ?>_price" value="<? echo $value->price ?>" onkeypress='return event.charCode >= 48 && event.charCode <= 57'></td>
			<td><input type="text" name="tarif_<? echo $value->id; ?>_hour" value="<? echo $value->hour ?>" onkeypress='return event.charCode >= 48 && event.charCode <= 57'></td>
			<td><input type="text" name="tarif_<? echo $value->id; ?>_minute" value="<? echo $value->minute ?>" onkeypress='return event.charCode >= 48 && event.charCode <= 57'></td>
		</tr>
	<? } ?>
		<tr>
			<td colspan="4" style="text-align: center;">Уборка котеджей после ремонта 250-299</td>
		</tr>
	<? for($i = 42; $i <= 44; $i++) { $value = $tarif[$i]; ?>
		<tr>
			<td><input type="text" name="tarif_<? echo $value->id; ?>_title" value="<? echo $value->title ?>"></td>
			<td><input type="text" name="tarif_<? echo $value->id; ?>_price" value="<? echo $value->price ?>" onkeypress='return event.charCode >= 48 && event.charCode <= 57'></td>
			<td><input type="text" name="tarif_<? echo $value->id; ?>_hour" value="<? echo $value->hour ?>" onkeypress='return event.charCode >= 48 && event.charCode <= 57'></td>
			<td><input type="text" name="tarif_<? echo $value->id; ?>_minute" value="<? echo $value->minute ?>" onkeypress='return event.charCode >= 48 && event.charCode <= 57'></td>
		</tr>
	<? } ?>
		<tr>
			<td colspan="4" style="text-align: center;">Уборка котеджей после ремонта 300-349</td>
		</tr>
	<? for($i = 45; $i <= 47; $i++) { $value = $tarif[$i]; ?>
		<tr>
			<td><input type="text" name="tarif_<? echo $value->id; ?>_title" value="<? echo $value->title ?>"></td>
			<td><input type="text" name="tarif_<? echo $value->id; ?>_price" value="<? echo $value->price ?>" onkeypress='return event.charCode >= 48 && event.charCode <= 57'></td>
			<td><input type="text" name="tarif_<? echo $value->id; ?>_hour" value="<? echo $value->hour ?>" onkeypress='return event.charCode >= 48 && event.charCode <= 57'></td>
			<td><input type="text" name="tarif_<? echo $value->id; ?>_minute" value="<? echo $value->minute ?>" onkeypress='return event.charCode >= 48 && event.charCode <= 57'></td>
		</tr>
	<? } ?>
	</table>
	<input type="submit" name="submit_tarif" value="Сохранить">
</form>

<h2>Услуги</h2>

<form action="/wp-admin/options-general.php?page=clean-calc" method="POST">
	<table id="services">
	<? foreach($services as $key=>$value) { ?>
		<tr>
			<input type="hidden" name="service[<? echo $value->id; ?>][id]" value="<? echo $value->id ?>">
			<td><input type="text" name="service[<? echo $value->id; ?>][title]" value="<? echo $value->title ?>"></td>
			<td><input type="text" name="service[<? echo $value->id; ?>][price]" value="<? echo $value->price ?>" onkeypress='return event.charCode >= 48 && event.charCode <= 57'></td>
			<td><input type="text" name="service[<? echo $value->id; ?>][hour]" value="<? echo $value->hour ?>" onkeypress='return event.charCode >= 48 && event.charCode <= 57'></td>
			<td><input type="text" name="service[<? echo $value->id; ?>][minute]" value="<? echo $value->minute ?>" onkeypress='return event.charCode >= 48 && event.charCode <= 57'></td>
		</tr>
	<? } ?>
	<table>
	<a id="add_service" style="cursor: pointer;">Добавить сервис</a><br>
	<script type="text/javascript">
		jQuery(function(){
			res = 10000;
			jQuery("#add_service").click(function(){
				jQuery("#services").append('<tr><td><input type="text" name="service[' + res + '][title]"></td><td><input type="text" name="service[' + res + '][price]" onkeypress="return event.charCode >= 48 && event.charCode <= 57"></td><td><input type="text" name="service[' + res + '][hour]" onkeypress="return event.charCode >= 48 && event.charCode <= 57"></td><td><input type="text" name="service[' + res + '][minute]" onkeypress="return event.charCode >= 48 && event.charCode <= 57"></td></tr>');
				res++;
			});
		});
	</script>
	<input type="submit" name="submit_service" value="Сохранить">
</form>

<h2>Скидочная карта</h2>
<form action="/wp-admin/options-general.php?page=clean-calc" method="POST">
	<input type="text" name="discount" value="<? echo $options[0]->discount; ?>">
	<input type="submit" name="submit_option" value="Сохранить">
</form>

<h2>Отправка формы</h2>
<form action="/wp-admin/options-general.php?page=clean-calc" method="POST">
	<input type="text" name="description" value="<? echo $options[1]->description; ?>">
	<input type="submit" name="submit_form" value="Сохранить">
</form>
<?
}

function calc_install()
{
    global $wpdb;
	
	$services = $wpdb->prefix.'calc_services';
	$options = $wpdb->prefix.'calc_options';
	$tarif = $wpdb->prefix.'calc_tarif';
	
    $sql1 = 
	"
		CREATE TABLE IF NOT EXISTS `".$services."` (
		  `id` int(10) NOT NULL AUTO_INCREMENT,
		  `title` varchar(255) NOT NULL,
		  `hour` int(11) NOT NULL,
		  `minute` int(11) NOT NULL,
		  `price` varchar(255) NOT NULL,
		  `description` text NOT NULL,
		  `discount` int(11) NOT NULL,
		  PRIMARY KEY (`id`)
		) ENGINE=InnoDB DEFAULT CHARSET=utf8;
	";
	
	$sql2 = 
	"
		CREATE TABLE IF NOT EXISTS `".$options."` (
		  `id` int(10) NOT NULL AUTO_INCREMENT,
		  `title` varchar(255) NOT NULL,
		  `hour` int(11) NOT NULL,
		  `minute` int(11) NOT NULL,
		  `price` varchar(255) NOT NULL,
		  `description` text NOT NULL,
		  `discount` int(11) NOT NULL,
		  PRIMARY KEY (`id`)
		) ENGINE=InnoDB DEFAULT CHARSET=utf8;
	";
	
	$sql3 = 
	"
		CREATE TABLE IF NOT EXISTS `".$tarif."` (
		  `id` int(10) NOT NULL AUTO_INCREMENT,
		  `title` varchar(255) NOT NULL,
		  `hour` int(11) NOT NULL,
		  `minute` int(11) NOT NULL,
		  `price` varchar(255) NOT NULL,
		  `description` text NOT NULL,
		  `discount` int(11) NOT NULL,
		  PRIMARY KEY (`id`)
		) ENGINE=InnoDB DEFAULT CHARSET=utf8;
	";

    $wpdb->query($sql1);
    $wpdb->query($sql2);
    $wpdb->query($sql3);
	
	$wpdb->query("INSERT INTO `".$wpdb->prefix."calc_tarif` (title, hour, minute, price, description, discount) VALUES ('Стандарт', 3, 0, '2000', '1', 0);");
	$wpdb->query("INSERT INTO `".$wpdb->prefix."calc_tarif` (title, hour, minute, price, description, discount) VALUES ('Стандарт+', 6, 0, '5500', '1', 0);");
	$wpdb->query("INSERT INTO `".$wpdb->prefix."calc_tarif` (title, hour, minute, price, description, discount) VALUES ('Премиум', 5, 0, '11000', '2', 0);");

	$wpdb->query("INSERT INTO `".$wpdb->prefix."calc_tarif` (title, hour, minute, price, description, discount) VALUES ('Стандарт', 4, 0, '2250', '1', 0);");
	$wpdb->query("INSERT INTO `".$wpdb->prefix."calc_tarif` (title, hour, minute, price, description, discount) VALUES ('Стандарт+', 7, 0, '7000', '1', 0);");
	$wpdb->query("INSERT INTO `".$wpdb->prefix."calc_tarif` (title, hour, minute, price, description, discount) VALUES ('Премиум', 7, 0, '15000', '2', 0);");

	$wpdb->query("INSERT INTO `".$wpdb->prefix."calc_tarif` (title, hour, minute, price, description, discount) VALUES ('Стандарт', 4, 0, '2600', '1', 0);");
	$wpdb->query("INSERT INTO `".$wpdb->prefix."calc_tarif` (title, hour, minute, price, description, discount) VALUES ('Стандарт+', 8, 0, '9000', '2', 0);");
	$wpdb->query("INSERT INTO `".$wpdb->prefix."calc_tarif` (title, hour, minute, price, description, discount) VALUES ('Премиум', 8, 0, '20500', '3', 0);");

	$wpdb->query("INSERT INTO `".$wpdb->prefix."calc_tarif` (title, hour, minute, price, description, discount) VALUES ('Стандарт', 4, 30, '2900', '1', 0);");
	$wpdb->query("INSERT INTO `".$wpdb->prefix."calc_tarif` (title, hour, minute, price, description, discount) VALUES ('Стандарт+', 9, 0, '11500', '2', 0);");
	$wpdb->query("INSERT INTO `".$wpdb->prefix."calc_tarif` (title, hour, minute, price, description, discount) VALUES ('Премиум', 9, 0, '25000', '3', 0);");

	$wpdb->query("INSERT INTO `".$wpdb->prefix."calc_tarif` (title, hour, minute, price, description, discount) VALUES ('Стандарт', 6, 0, '4000', '1', 0);");
	$wpdb->query("INSERT INTO `".$wpdb->prefix."calc_tarif` (title, hour, minute, price, description, discount) VALUES ('Стандарт+', 5, 0, '8000', '2', 0);");
	$wpdb->query("INSERT INTO `".$wpdb->prefix."calc_tarif` (title, hour, minute, price, description, discount) VALUES ('Премиум', 8, 0, '12000', '4', 0);");

	$wpdb->query("INSERT INTO `".$wpdb->prefix."calc_tarif` (title, hour, minute, price, description, discount) VALUES ('Стандарт', 8, 0, '5000', '1', 0);");
	$wpdb->query("INSERT INTO `".$wpdb->prefix."calc_tarif` (title, hour, minute, price, description, discount) VALUES ('Стандарт+', 7, 0, '10000', '2', 0);");
	$wpdb->query("INSERT INTO `".$wpdb->prefix."calc_tarif` (title, hour, minute, price, description, discount) VALUES ('Премиум', 9, 0, '14800', '4', 0);");

	$wpdb->query("INSERT INTO `".$wpdb->prefix."calc_tarif` (title, hour, minute, price, description, discount) VALUES ('Стандарт', 8, 0, '6000', '2', 0);");
	$wpdb->query("INSERT INTO `".$wpdb->prefix."calc_tarif` (title, hour, minute, price, description, discount) VALUES ('Стандарт+', 5, 0, '12000', '3', 0);");
	$wpdb->query("INSERT INTO `".$wpdb->prefix."calc_tarif` (title, hour, minute, price, description, discount) VALUES ('Премиум', 8, 0, '18000', '5', 0);");

	$wpdb->query("INSERT INTO `".$wpdb->prefix."calc_tarif` (title, hour, minute, price, description, discount) VALUES ('Стандарт', 6, 0, '8000', '2', 0);");
	$wpdb->query("INSERT INTO `".$wpdb->prefix."calc_tarif` (title, hour, minute, price, description, discount) VALUES ('Стандарт+', 7, 0, '15500', '3', 0);");
	$wpdb->query("INSERT INTO `".$wpdb->prefix."calc_tarif` (title, hour, minute, price, description, discount) VALUES ('Премиум', 9, 0, '23000', '5', 0);");

	$wpdb->query("INSERT INTO `".$wpdb->prefix."calc_tarif` (title, hour, minute, price, description, discount) VALUES ('Стандарт', 4, 0, '7000', '2', 0);");
	$wpdb->query("INSERT INTO `".$wpdb->prefix."calc_tarif` (title, hour, minute, price, description, discount) VALUES ('Стандарт+', 6, 0, '8000', '2', 0);");
	$wpdb->query("INSERT INTO `".$wpdb->prefix."calc_tarif` (title, hour, minute, price, description, discount) VALUES ('Премиум', 7, 0, '9000', '3', 0);");

	$wpdb->query("INSERT INTO `".$wpdb->prefix."calc_tarif` (title, hour, minute, price, description, discount) VALUES ('Стандарт', 5, 0, '9000', '2', 0);");
	$wpdb->query("INSERT INTO `".$wpdb->prefix."calc_tarif` (title, hour, minute, price, description, discount) VALUES ('Стандарт+', 7, 0, '10000', '2', 0);");
	$wpdb->query("INSERT INTO `".$wpdb->prefix."calc_tarif` (title, hour, minute, price, description, discount) VALUES ('Премиум', 8, 0, '11500', '3', 0);");

	$wpdb->query("INSERT INTO `".$wpdb->prefix."calc_tarif` (title, hour, minute, price, description, discount) VALUES ('Стандарт', 7, 0, '13000', '3', 0);");
	$wpdb->query("INSERT INTO `".$wpdb->prefix."calc_tarif` (title, hour, minute, price, description, discount) VALUES ('Стандарт+', 8, 0, '14000', '3', 0);");
	$wpdb->query("INSERT INTO `".$wpdb->prefix."calc_tarif` (title, hour, minute, price, description, discount) VALUES ('Премиум', 9, 0, '15000', '4', 0);");

	$wpdb->query("INSERT INTO `".$wpdb->prefix."calc_tarif` (title, hour, minute, price, description, discount) VALUES ('Стандарт', 8, 0, '16500', '3', 0);");
	$wpdb->query("INSERT INTO `".$wpdb->prefix."calc_tarif` (title, hour, minute, price, description, discount) VALUES ('Стандарт+', 9, 0, '17500', '3', 0);");
	$wpdb->query("INSERT INTO `".$wpdb->prefix."calc_tarif` (title, hour, minute, price, description, discount) VALUES ('Премиум', 10, 0, '18500', '4', 0);");

	$wpdb->query("INSERT INTO `".$wpdb->prefix."calc_tarif` (title, hour, minute, price, description, discount) VALUES ('Стандарт', 8, 0, '17000', '3', 0);");
	$wpdb->query("INSERT INTO `".$wpdb->prefix."calc_tarif` (title, hour, minute, price, description, discount) VALUES ('Стандарт+', 9, 0, '18500', '3', 0);");
	$wpdb->query("INSERT INTO `".$wpdb->prefix."calc_tarif` (title, hour, minute, price, description, discount) VALUES ('Премиум', 10, 0, '20000', '4', 0);");

	$wpdb->query("INSERT INTO `".$wpdb->prefix."calc_tarif` (title, hour, minute, price, description, discount) VALUES ('Стандарт', 8, 0, '20500', '3', 0);");
	$wpdb->query("INSERT INTO `".$wpdb->prefix."calc_tarif` (title, hour, minute, price, description, discount) VALUES ('Стандарт+', 9, 0, '23000', '4', 0);");
	$wpdb->query("INSERT INTO `".$wpdb->prefix."calc_tarif` (title, hour, minute, price, description, discount) VALUES ('Премиум', 11, 0, '25000', '4', 0);");

	$wpdb->query("INSERT INTO `".$wpdb->prefix."calc_tarif` (title, hour, minute, price, description, discount) VALUES ('Стандарт', 8, 0, '23000', '4', 0);");
	$wpdb->query("INSERT INTO `".$wpdb->prefix."calc_tarif` (title, hour, minute, price, description, discount) VALUES ('Стандарт+', 12, 0, '25500', '4', 0);");
	$wpdb->query("INSERT INTO `".$wpdb->prefix."calc_tarif` (title, hour, minute, price, description, discount) VALUES ('Премиум', 11, 0, '28500', '5', 0);");

	$wpdb->query("INSERT INTO `".$wpdb->prefix."calc_tarif` (title, hour, minute, price, description, discount) VALUES ('Стандарт', 8, 0, '27500', '5', 0);");
	$wpdb->query("INSERT INTO `".$wpdb->prefix."calc_tarif` (title, hour, minute, price, description, discount) VALUES ('Стандарт+', 11, 0, '29000', '5', 0);");
	$wpdb->query("INSERT INTO `".$wpdb->prefix."calc_tarif` (title, hour, minute, price, description, discount) VALUES ('Премиум', 12, 0, '30500', '5', 0);");
	
	$wpdb->query("INSERT INTO `".$wpdb->prefix."calc_options` (title, hour, minute, price, description, discount) VALUES ('Скидка', 0, 0, '0', '0', 0);");
	$wpdb->query("INSERT INTO `".$wpdb->prefix."calc_options` (title, hour, minute, price, description, discount) VALUES ('Скидка', 0, 0, '0', 'mail@example.com', 0);");
	
	$wpdb->query("INSERT INTO `".$wpdb->prefix."calc_services` (title, hour, minute, price, description, discount) VALUES ('Свободное время', 1, 0, '650', '0', 0);");
	$wpdb->query("INSERT INTO `".$wpdb->prefix."calc_services` (title, hour, minute, price, description, discount) VALUES ('Мытье окон', 0, 15, '250', '0', 0);");
	$wpdb->query("INSERT INTO `".$wpdb->prefix."calc_services` (title, hour, minute, price, description, discount) VALUES ('Мытье москитной сетки', 0, 15, '100', '0', 0);");
	$wpdb->query("INSERT INTO `".$wpdb->prefix."calc_services` (title, hour, minute, price, description, discount) VALUES ('Глажка белья', 1, 0, '300', '0', 0);");
	$wpdb->query("INSERT INTO `".$wpdb->prefix."calc_services` (title, hour, minute, price, description, discount) VALUES ('Чистка кухни', 4, 0, '2700', '0', 0);");
	$wpdb->query("INSERT INTO `".$wpdb->prefix."calc_services` (title, hour, minute, price, description, discount) VALUES ('Чистка санузла', 3, 30, '2200', '0', 0);");
	$wpdb->query("INSERT INTO `".$wpdb->prefix."calc_services` (title, hour, minute, price, description, discount) VALUES ('Чистка духовки', 0, 30, '500', '0', 0);");
	$wpdb->query("INSERT INTO `".$wpdb->prefix."calc_services` (title, hour, minute, price, description, discount) VALUES ('Мытьё холодильника без размораживания', 0, 30, '500', '0', 0);");
	$wpdb->query("INSERT INTO `".$wpdb->prefix."calc_services` (title, hour, minute, price, description, discount) VALUES ('Мытьё холодильника с размораживанием', 1, 0, '800', '0', 0);");
	$wpdb->query("INSERT INTO `".$wpdb->prefix."calc_services` (title, hour, minute, price, description, discount) VALUES ('Удаление пыли и грязи с входной двери', 0, 15, '300', '0', 0);");
	$wpdb->query("INSERT INTO `".$wpdb->prefix."calc_services` (title, hour, minute, price, description, discount) VALUES ('Удаление пыли и грязи с дверных блоков', 0, 15, '200', '0', 0);");
	$wpdb->query("INSERT INTO `".$wpdb->prefix."calc_services` (title, hour, minute, price, description, discount) VALUES ('Влажная и сухая протирка осветительных приборов', 0, 20, '250', '0', 0);");
	$wpdb->query("INSERT INTO `".$wpdb->prefix."calc_services` (title, hour, minute, price, description, discount) VALUES ('Мытье батарей', 0, 20, '250', '0', 0);");
	$wpdb->query("INSERT INTO `".$wpdb->prefix."calc_services` (title, hour, minute, price, description, discount) VALUES ('Мытье отопительных труб', 0, 15, '150', '0', 0);");
	$wpdb->query("INSERT INTO `".$wpdb->prefix."calc_services` (title, hour, minute, price, description, discount) VALUES ('Мытье подоконников', 0, 10, '150', '0', 0);");
	$wpdb->query("INSERT INTO `".$wpdb->prefix."calc_services` (title, hour, minute, price, description, discount) VALUES ('Снятие и развеска штор/тюля', 0, 15, '250', '0', 0);");
	$wpdb->query("INSERT INTO `".$wpdb->prefix."calc_services` (title, hour, minute, price, description, discount) VALUES ('Уборка застекленных балконов и лоджий', 3, 0, '1500', '0', 0);");
	$wpdb->query("INSERT INTO `".$wpdb->prefix."calc_services` (title, hour, minute, price, description, discount) VALUES ('Доставка пылесоса и стремянки', 1, 0, '1000', '0', 0);");
	
	
}

function calc_uninstall()
{
    global $wpdb;
	
	$services = $wpdb->prefix.'calc_services';
	$options = $wpdb->prefix.'calc_options';
	$tarif = $wpdb->prefix.'calc_tarif';
	
    $sql1 = "DROP TABLE `".$services."`;";
    $sql2 = "DROP TABLE `".$options."`;";
    $sql3 = "DROP TABLE `".$tarif."`;";
	
    $wpdb->query($sql1);
    $wpdb->query($sql2);
    $wpdb->query($sql3);

}


function send_email()
{
	if (isset($_POST['submit_order']))
	{
		global $wpdb;
		$tarif = $wpdb->get_results( "SELECT * FROM ".$wpdb->prefix."calc_tarif" );
		$services = $wpdb->get_results( "SELECT * FROM ".$wpdb->prefix."calc_services" );
		$options = $wpdb->get_results( "SELECT * FROM ".$wpdb->prefix."calc_options" );
		$adds = "";
		if (isset($_POST['service'])) foreach ($_POST['service'] as $key=>$val) $adds .= $services[$val-1]->title." | ";
		$to = $options[1]->description;
		$subject = 'Новая заявка';
		$message = '
Имя: '.$_POST['name'].'<br>
Телефон: '.$_POST['phone'].'<br>
Тариф: '.$tarif[$_POST['package_id'] - 1]->title.'<br>
Цена тарифа: '.$tarif[$_POST['package_id'] - 1]->price.' руб.<br>
Дополнительно: '.$adds.'<br>
		';
		$headers = array('Content-Type: text/html; charset=UTF-8');
		wp_mail($to, $subject, $message, $headers);
		wp_redirect($_POST['redirect']);
		exit;
	}
}

register_activation_hook( __FILE__, 'calc_install');
register_deactivation_hook( __FILE__, 'calc_uninstall');

add_action( 'admin_post_nopriv_contact_form', 'send_email' );
add_action( 'admin_post_contact_form', 'send_email' );


add_action('admin_menu', 'add_admin_menu_pages');
//add_action('init', 'calc_init');
add_shortcode('cleaner_calc', 'cleaner_calc');
add_shortcode('cleaner_calc_kvartiri', 'cleaner_calc_kvartiri');
add_shortcode('cleaner_calc_kotedji', 'cleaner_calc_kotedji');
add_shortcode('cleaner_calc_remont', 'cleaner_calc_remont');
?>