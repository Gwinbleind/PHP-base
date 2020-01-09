<!--<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>-->
<div id="core">
	<input v-model="x" type="number" name="x">
	<select v-model="operation" name="operation">
		<option>/</option>
		<option>*</option>
		<option>-</option>
		<option>+</option>
	</select>
	<input v-model="y" type="number" name="y">
	<button type="button" @click="fetchRequest()"> = </button>
	<input v-model="result" type="number" name="result">
</div>
<!--<script src="js/calc_vue.js"></script>-->