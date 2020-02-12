<script>
import Quill from 'quill';

export default {
	props:
		// value: {
		// 	type: String,
		// 	default: ''
		// },
		['height', 'value'],
	data() {
		return {
			editor: null
		};
	},
	computed: {
		getHeight() {
			return {
				height: `${this.height}px`
			};
		}
	},
	mounted() {
		this.editor = new Quill(this.$refs.editor, {
			modules: {
				toolbar: '#toolbar-container'
			},
			theme: 'snow'
		});

		this.editor.root.innerHTML = this.value;

		this.editor.on('text-change', () => this.update());
	},
	methods: {
		update() {
			this.$emit('input', this.editor.getText() ? this.editor.root.innerHTML : '');
		}
	}
};
</script>

<template>
  <div>
    <div id="toolbar-container" style="background-color: #B78743; color:white">
      <span class="ql-formats">
        <select class="ql-font"></select>
        <select class="ql-size"></select>
      </span>
      <span class="ql-formats">
        <button class="ql-bold"></button>
        <button class="ql-italic"></button>
        <button class="ql-underline"></button>
        <button class="ql-strike"></button>
      </span>
      <span class="ql-formats">
        <select class="ql-color"></select>
        <select class="ql-background"></select>
      </span>
      <span class="ql-formats">
        <button class="ql-script" value="sub"></button>
        <button class="ql-script" value="super"></button>
      </span>
      <span class="ql-formats">
        <button class="ql-header" value="1"></button>
        <button class="ql-header" value="2"></button>
        <button class="ql-blockquote"></button>
        <button class="ql-code-block"></button>
      </span>
      <span class="ql-formats">
        <button class="ql-list" value="ordered"></button>
        <button class="ql-list" value="bullet"></button>
        <button class="ql-indent" value="-1"></button>
        <button class="ql-indent" value="+1"></button>
      </span>
      <span class="ql-formats">
        <button class="ql-direction" value="rtl"></button>
        <select class="ql-align"></select>
      </span>
      <span class="ql-formats">
        <button class="ql-link"></button>
        <button class="ql-image"></button>
        <button class="ql-video"></button>
        <button class="ql-formula"></button>
      </span>
      <span class="ql-formats">
        <button class="ql-clean"></button>
      </span>
    </div>
    <div ref="editor" :style="getHeight"></div>
  </div>
</template>


