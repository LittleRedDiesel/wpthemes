scnShortcodeMeta = {
	attributes : [ {
		label : "Style",
		id : "type",
		help : "Select which type of pricing table you would like to use.",
		controlType : "select-control",
		selectValues : [ '', 'no-space' ],
		defaultValue : '',
		defaultText : 'Default'
	}, {
		label : "Columns",
		id : "content",
		controlType : "column-control"
	} ],
	customMakeShortcode : function(b) {
		var a = b.data, type = b.type;

		type = ' type =" '+type+'"';

		if (!a)
			return "";
		b = a.numColumns;
		var c = a.content;
		a = [ "0", "one", "two", "three", "four", "five", 'six' ];
		var x = [ "0", "0", "half", "third", "fourth", "fifth", 'sixth' ];
		var f = x[b];
		c = c.split("|");
		var g = "";
		for ( var h in c) {
			var d = jQuery.trim(c[h]);
			if (d.length > 0) {
				var e = a[d.length] + '_' + f;
				if (b == 4 && d.length == 2)
					e = "one-half";

				var z = e;
				var selected = "";
				if (h == 0) {
					e += "  first ";
					selected = "selected";
				}

				g += "[dt_sc_"
						+ e
						+ "] "
						+ "<br>[pricing-table-item heading='Heading' button_text='Buy Now' button_size='small' button_link='#' price='$15' per='/month' "
						+ selected + "]<br>" + "<ul>" + "<li>Text</li>"
						+ "<li>Text</li>" + "<li>Text</li>" + "</ul>"
						+ "[/pricing-table-item]<br>" + " [/dt_sc_" + z
						+ "] <br/>";
			}
		}

		return "[pricing-table " + type + "]<br>" + g + "<br>[/pricing-table]";
	}
};