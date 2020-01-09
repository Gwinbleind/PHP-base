<!--<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>-->
<!--<link rel="stylesheet" href="css/calc.css">-->
<div id="core" @keyup="">
	<input v-model="window" type="text" name="num" disabled>
	<div class="container4">
		<div class="container3">
          <?php for ($i = 1; $i <= 9; $i++):?>
				 <input type="button" @click="valueClickHandler" value="<?=$i?>" class="button">
          <?endfor;?>
		</div>
		<div class="container3">
			<input type="button" @click="pointClickHandler" value="." class="button">
			<input type="button" @click="valueClickHandler" value="0" class="button">
			<input type="button" @click="calculateClickHandler" value="=" class="button">
		</div>
		<div class="container4">
			<input type="button" @click="operationClickHandler" value="/" class="button">
			<input type="button" @click="operationClickHandler" value="x" class="button">
			<input type="button" @click="operationClickHandler" value="+" class="button">
			<input type="button" @click="operationClickHandler" value="-" class="button">
		</div>
	</div>
</div>
<!--<script src="js/calc_vue.js"></script>-->