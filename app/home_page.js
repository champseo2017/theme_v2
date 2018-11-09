var colors = [
	{
		"hex": "#FFA07A",
	  "name": "Light Salmon"
  },
	{
		"hex": "#CD5C5C",
	  "name": "Indian Red"
  },
	{
		"hex": "#DC143C",
	  "name": "Crimson"
  },
	{
		"hex": "#20B2AA",
	  "name": "Light Sea Green"
  },
	{
		"hex": "#008B8B",
		"name": "Dark Cyan"
	},
	{
		"hex": "#4682B4",
	  "name": "Steel Blue"
  }
];

var ColorPickerSelect = {
	template: '<div class="wrapper-dropdown"><span @click="toggleDropdown()" v-html="selector"></span><ul class="dropdown" v-show="active"><li v-if="emptyOption" @click="setColor();"><span class="noColor" v-if="emptyOption !== \'true\'"></span> {{emptyOption === "true" ? "" : emptyOption}}</li><li v-for="color in colors" @click="setColor(color.hex, color.name)"><span :style="{background: color.hex}"></span> {{color.name}}</li></ul><input type="hidden" :name="inputId" :id="inputId" v-model="selectedColor"></div>',
	props: ['color-options', 'label', 'empty-option', 'input-id'],//must use kebab-case in html, camel case in JS
	data: function() {
		return {
			active: false,
			selectedColor: '',
			selectedColorName: '',
			colors: this.colorOptions,
			noSelection: true
			}
	},
	computed: {
		selector: function() {
			if(!this.selectedColor && !this.emptyOption) {
				return this.label;
			}
			else if(!this.selectedColor && this.emptyOption) {
				if(this.emptyOption === "true") {
					return this.label;
				}
				else if(this.emptyOption !== "true" && this.noSelection === false) {
					return '<span class="noColor"></span> ' + this.emptyOption;
				}
				else {
					return this.label;
				}
			}
			else {
				return '<span style="background: ' + this.selectedColor + '"></span> ' + this.selectedColorName;
			}
		}
	},
	methods: {
		setColor: function(color, colorName) {
			this.selectedColor = color;
			this.selectedColorName = colorName;
			this.active = false;
			this.noSelection = false;
			this.$emit('input', this.selectedColor);
		},
		toggleDropdown: function() {
			this.active = !this.active;
		},
	}
}
var change_color_sidebar = new Vue({
	el: '#post-18',
	data: {
		description: 'เปลียนสีพื้นหลังบทความ ใส่ชื่อสีพื้นหลัง',
		name : 'champ',
		colors: colors,
		selectedColorHex: '',
		selectedColorHex2: '',
		bgc: {
			backgroundColor: ''
		}
	},
	components: {
		'color-picker-select': ColorPickerSelect
	}
});




