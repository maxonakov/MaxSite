var registerBlockType = wp.blocks.registerBlockType,
	createElement = wp.element.createElement,
	decodeEntities = wp.htmlEntities.decodeEntities,
	ServerSideRender = wp.editor.ServerSideRender,
	InspectorControls = wp.blockEditor.InspectorControls,
	TextControl = wp.components.TextControl,
	SelectControl = wp.components.SelectControl,
	CheckboxControl = wp.components.CheckboxControl;

registerBlockType(hivepressBlock.type, {
	title: hivepressBlock.title,
	category: hivepressBlock.category,
	icon: createElement('svg', {
			width: 24,
			height: 24
		},
		createElement('path', {
			transform: 'translate(2,2)',
			d: 'M9.50012 3C10.3285 3 11.0001 2.32843 11.0001 1.5C11.0001 0.67157 10.3285 0 9.50012 0C8.67175 0 8.00012 0.67157 8.00012 1.5C8.00012 2.32843 8.67175 3 9.50012 3ZM4.9856 1.76981C4.68359 1.60202 4.31641 1.60202 4.0144 1.76981L0.514404 3.71426C0.196899 3.89062 0 4.22524 0 4.58841V8.41161C0 8.77477 0.196899 9.10939 0.514404 9.28576L4.0144 11.2302C4.31641 11.398 4.68359 11.398 4.9856 11.2302L8.32239 9.37644L5.45557 7.65636C5.19604 7.87101 4.86316 8 4.50012 8C3.67175 8 3.00012 7.32843 3.00012 6.5C3.00012 5.67157 3.67175 5 4.50012 5C5.32849 5 6.00012 5.67157 6.00012 6.5C6.00012 6.60238 5.98987 6.70237 5.97034 6.79899L8.98108 8.60545C8.99353 8.54229 9 8.47742 9 8.41161V4.58841C9 4.22524 8.8031 3.89062 8.4856 3.71426L4.9856 1.76981ZM10.6779 9.37648L13.5447 7.65639C13.8042 7.87103 14.1371 8 14.5001 8C15.3285 8 16.0001 7.32843 16.0001 6.5C16.0001 5.67157 15.3285 5 14.5001 5C13.6718 5 13.0001 5.67157 13.0001 6.5C13.0001 6.6024 13.0104 6.7024 13.0299 6.79903L10.019 8.60553C10.0066 8.54234 10.0001 8.47744 10.0001 8.41161V4.58841C10.0001 4.22524 10.197 3.89062 10.5145 3.71426L14.0145 1.76981C14.3165 1.60202 14.6838 1.60202 14.9858 1.76981L18.4858 3.71426C18.8032 3.89062 19.0001 4.22524 19.0001 4.58841V8.41161C19.0001 8.77477 18.8032 9.10939 18.4858 9.28576L14.9858 11.2302C14.6838 11.398 14.3165 11.398 14.0145 11.2302L10.6779 9.37648ZM9.00012 10.2778V13.5854C8.4176 13.7914 8.00024 14.3469 8.00024 15C8.00024 15.8284 8.67188 16.5 9.50024 16.5C10.3286 16.5 11.0002 15.8284 11.0002 15C11.0002 14.3468 10.5828 13.7912 10.0001 13.5853V10.2777L13.4858 12.2143C13.8032 12.3906 14.0001 12.7252 14.0001 13.0884V16.9116C14.0001 17.2748 13.8032 17.6094 13.4858 17.7858L9.98584 19.7302C9.68384 19.898 9.31653 19.898 9.01453 19.7302L5.51453 17.7858C5.19702 17.6094 5.00012 17.2748 5.00012 16.9116V13.0884C5.00012 12.7252 5.19702 12.3906 5.51453 12.2143L9.00012 10.2778ZM18.0001 13.5C18.0001 14.3284 17.3285 15 16.5001 15C15.6718 15 15.0001 14.3284 15.0001 13.5C15.0001 12.6716 15.6718 12 16.5001 12C17.3285 12 18.0001 12.6716 18.0001 13.5ZM2.50012 15C3.32849 15 4.00012 14.3284 4.00012 13.5C4.00012 12.6716 3.32849 12 2.50012 12C1.67175 12 1.00012 12.6716 1.00012 13.5C1.00012 14.3284 1.67175 15 2.50012 15Z'
		})
	),
	edit: function(props) {
		var controls = [];

		for (var blockType in hivepressBlocks) {
			if (hivepressBlocks[blockType].type === props.name) {
				var block = hivepressBlocks[blockType];

				for (var fieldName in block.settings) {
					var field = block.settings[fieldName],
						controlType = TextControl,
						controlProps = {
							id: block.type.replace('/', '-') + '-' + fieldName,
							label: field.label,
							value: props.attributes[fieldName],
							onChange: (value) => {
								var fieldName = event.target.id.split('-').pop(),
									values = {};

								if (value === true) {
									value = '1';
								} else if (value === false) {
									value = '';
								}

								values[fieldName] = value;

								props.setAttributes(values);
							},
						};

					if (field.type === 'number') {
						controlProps.type = 'number';
					} else if (field.type === 'select') {
						controlType = SelectControl;
						controlProps.options = [];

						for (var optionName in field.options) {
							controlProps.options.push({
								label: decodeEntities(field.options[optionName]),
								value: optionName,
							});
						}
					} else if (field.type === 'checkbox') {
						controlType = CheckboxControl;
						controlProps.checked = Boolean(props.attributes[fieldName]);
					}

					controls.push(createElement(controlType, controlProps));
				}

				break;
			}
		}

		return [
			createElement(ServerSideRender, {
				block: props.name,
				attributes: props.attributes,
			}),
			createElement(InspectorControls, {}, [controls]),
		];
	},
	save: function(props) {
		return null;
	},
});
