scnShortcodeMeta = {
	attributes : [
			{
				label : "Type",
				id : "type",
				help : "Select which type of map you would like to use.",
				controlType : "select-control",
				selectValues : ['ROADMAP','SATELLITE','HYBRID','TERRAIN'],
				defaultValue : '',
				defaultText : ''
			},
			{
				label : "Width",
				id : "width",
				help : 'Type out the width of your map.',
			},
			{
				label : "Height",
				id : "height",
				help : 'Type out the height of your map.',
			},
			{
				label : "Zoom",
				id : "zoom",
				help : "Select an initial zoom value for your map.",
				controlType : "select-control",
				selectValues : ['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15'],
				defaultValue : '',
				defaultText : ''
			}],
	defaultContent : '<br>[marker address="105 Buckingham Street, Richmond VIC 3121, Australia"]Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at.[/marker]',
	shortcode : "map"
};