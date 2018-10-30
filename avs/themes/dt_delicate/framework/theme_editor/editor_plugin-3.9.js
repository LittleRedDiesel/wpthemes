(function(){

	var dummy_conent = "Lorem ipsum dolor sit amet, consectetur"
				+ " adipiscing elit. Morbi hendrerit elit turpis,"
				+ " a porttitor tellus sollicitudin at."
				+ " Class aptent taciti sociosqu ad litora "
				+ " torquent per conubia nostra,"
				+ " per inceptos himenaeos.";

	var dummy_tabs = '<br>[tab title="Tab 1"]'
					+ "<br>" + dummy_conent + "<br>" + '[/tab]' + "<br>"
					+ '[tab title="Tab 2"]' + "<br>"
					+ dummy_conent + "<br>" + '[/tab]' + "<br>"
					+ '[tab title="Tab 3"]' + "<br>"
					+ dummy_conent + "<br>" + '[/tab]<br>';


	// Add Shortcode button
	tinymce.PluginManager.add("mytheme_quicktags",function( editor , url ) { 

		editor.on('init', function() {
			editor.addCommand("scnOpenDialog", function(obj) {
				scnSelectedShortcodeType = obj.identifier;
				jQuery.get(url + "/dialog.php", function(b) {
					jQuery("#scn-dialog").remove();
					jQuery("body").append(b);
					jQuery("#scn-dialog").hide();
					var f = jQuery(window).width();
					b = jQuery(window).height();
					f = 720 < f ? 720 : f;
					f -= 80;
					b -= 84;
					tb_show("Insert Shortcode", "#TB_inline?width=800"+ "&height=400&inlineId=scn-dialog");
					jQuery("#scn-options h3:first").text("Customize the " + obj.title + " Shortcode");
				});
			});
		});

		editor.addButton('designthemes_sc_button',{
			title: "DT Shortcode",
			icon: "dt-icon",
			type: "menubutton",
			menu:[

				{ text:'Accordion',
					menu : [
						{ text: 'Default', onclick: function(e){
							e.stopPropagation();
							var content = '[accordion_group class=""]'
								+'<br>[toggle title="Accordion 1"]<br>'+ dummy_conent + "<br>[/toggle]"
								+'<br>[toggle title="Accordion 2"]<br>'+ dummy_conent + "<br>[/toggle]"
								+'<br>[toggle title="Accordion 3"]<br>'+ dummy_conent + "<br>[/toggle]"
								+"<br>[/accordion_group]";
								editor.insertContent(content);
							}
						},

						{ text: 'Framed', onclick: function(e){
							e.stopPropagation();
							var content = '[accordion_group class=""]'
								+'<br>[toggle_framed title="Accordion 1"]<br>'+ dummy_conent + "<br>[/toggle_framed]"
								+'<br>[toggle_framed title="Accordion 2"]<br>'+ dummy_conent + "<br>[/toggle_framed]"
								+'<br>[toggle_framed title="Accordion 3"]<br>'+ dummy_conent + "<br>[/toggle_framed]"
								+"<br>[/accordion_group]";
							editor.insertContent(content);
							}
						}
					]
				},

				{ text: 'Button',
					onclick: function(e) {
						e.stopPropagation();
						tinyMCE.activeEditor.execCommand("scnOpenDialog", {title: this.text() ,identifier: "button"});
					}
				},

				{ text: 'Block Quote',
					onclick: function(e){
						e.stopPropagation();
						tinyMCE.activeEditor.execCommand("scnOpenDialog", {title: this.text() ,identifier: "blockquote"});
					}
				},

				{ text: 'Box',
					onclick: function(e){
						e.stopPropagation();
						tinyMCE.activeEditor.execCommand("scnOpenDialog", {title: this.text() ,identifier: "box"});
					}
				},

				{ text: 'Column Layout', 
					onclick: function(e) {
						e.stopPropagation();
						tinyMCE.activeEditor.execCommand("scnOpenDialog", {title: this.text() ,identifier: "column"});
					}
				},

				{ text: 'Dividers',
					menu:[

						{ text: 'Clear', onclick: function(e){
							e.stopPropagation();
							editor.insertContent('[clear class=""/]');
						}},

						{ text: "Horizontal Rule",
							menu:[
								{ text:'With Top Link',
									onclick: function(e){
										editor.insertContent('[hr top="yes" class=""/]');
									}
								},
								{ text:'Without Top Link',
									onclick: function(e){
										editor.insertContent('[hr top="no" class=""/]');
									}
								}
							]
						},

						{ text: 'Small White Space', onclick: function(e){
							e.stopPropagation();
							editor.insertContent('[hr-invisible-small class=""/]');
						}},

						{ text: 'White Space', onclick: function(e){
							e.stopPropagation();
							editor.insertContent('[hr-invisible class=""/]');
						}},

						{ text: 'Dashed Line',
							menu:[
								{ text:'With Top Link',
									onclick: function(e){
										editor.insertContent('[hr-border top="yes" class=""/]');
									}
								},
								{ text:'Without Top Link',
									onclick: function(e){
										editor.insertContent('[hr-border top="no" class=""/]');
									}
								}
							]
						}
					]
				},

				{ text: 'Drop cap',
					onclick: function(e){
						e.stopPropagation();
						tinyMCE.activeEditor.execCommand("scnOpenDialog", {title: this.text() ,identifier: "dropcap"});
					}
				},

				{ text: 'Google Map',
					onclick: function(e){
						e.stopPropagation();
						tinyMCE.activeEditor.execCommand("scnOpenDialog", {title: this.text() ,identifier: "map"});
					}
				},

				{ text: 'Highlighter',
					onclick: function(e){
						e.stopPropagation();
						tinyMCE.activeEditor.execCommand("scnOpenDialog", {title: this.text() ,identifier: "highlighter"});
					}
				},

				{ text:'Pricing Table',
					onclick: function(e){
						e.stopPropagation();
						tinyMCE.activeEditor.execCommand("scnOpenDialog", {title: this.text() ,identifier: "pricingtable"});
					}
				},

				{ text: 'Pull Quote',
					onclick: function(e){
						e.stopPropagation();
						tinyMCE.activeEditor.execCommand("scnOpenDialog", {title: this.text() ,identifier: "pullquote"});
					}
				},

				{ text: 'Share',
					menu:[

						{ text: 'Twitter', 
							onclick: function(e){
								e.stopPropagation();
								editor.windowManager.open({
									title: 'Twitter',
									body:[
										{ type:'textbox', label:'Twitter username', name:'username'},
										{ type:'listbox', label:'Tweet Position', name:'layout', values:[
											{value:'none',text:'None'},{value:'vertical',text:'Vertical'},{value:'horizontal',text:'Horizontal'}] },
										{ type:'textbox', label:'Custom Text', name:'text'},
										{ type:'textbox', label:'Custom Url', name:'url'},
										{ type:'textbox', label:'Related Users', name:'related'},
										{ type:'listbox', label:'Language', name:'lang', values:[
											{value:'fr',text:'French'},	{value:'de',text:'German'},	{value:'it',text:'Italian'},
											{value:'ja',text:'Japanese'},	{value:'ko',text:'Korean'},	{value:'ru',text:'Russian'},{value:'es',text:'Spanish'}
										] }, 
									],
									onsubmit: function(e){
										var $out = "[twitter ";
										jQuery.each( e.data, function(key, value) {
											if(value !== "") {
												$out += ' ' + key + '="'+ value+'"';
											}
										});
										$out += "/]";
										editor.insertContent($out);
									}
								});
							}
						},

						{ text: 'Google Plus', 
							onclick: function(e){
								e.stopPropagation();
								editor.windowManager.open({
									title: 'Google Plus',
									body:[ 

										{ 
											type:'listbox', label:'Size', name:'size',
											values:[{value:'small', text:'Small'},{value:'standard', text:'Standard'},{value:'medium', text:'Medium'},{value:'tall', text:'Tall'} ]
										},

										{ type:'listbox', label:'Language', name:'lang',
											values:[ { value:"ar",text: "Arabic"}, { value:"bn",text: "Bengali"},{ value:"bg",text: "Bulgarian"},{ value:"ca",text: "Catalan"},{ value:"zh",text: "Chinese"},
												{ value:"zh_CN",text: "Chinese (China)"},{ value:"zh_HK",text: "Chinese (Hong Kong)"},{ value:"zh_TW",text: "Chinese (Taiwan)"},{ value:"hr",text: "Croation"},
												{ value:"cs",text: "Czech"},{ value:"da",text: "Danish"},{ value:"nl",text: "Dutch"},{ value:"en_IN",text: "English (India)"},{ value:"en_IE",text: "English (Ireland)"},
												{ value:"en_SG",text: "English (Singapore)"},{ value:"en_ZA",text: "English (South Africa)"},{ value:"en_GB",text: "English (United Kingdom)"},{ value:"fil",text: "Filipino"},
												{ value:"fi",text: "Finnish"},{ value:"fr",text: "French"},{ value:"de",text: "German"},{ value:"de_CH",text: "German (Switzerland)"},{ value:"el",text: "Greek"},{ value:"gu",text: "Gujarati"},
												{ value:"iw",text: "Hebrew"},{ value:"hi",text: "Hindi"},{ value:"hu",text: "Hungarian"},{ value:"in",text: "Indonesian"},{ value:"it",text: "Italian"},{ value:"ja",text: "Japanese"},
												{ value:"kn",text: "Kannada"},{ value:"ko",text: "Korean"},{ value:"lv",text: "Latvian"},{ value:"ln",text: "Lingala"},{ value:"lt",text: "Lithuanian"},{ value:"ms",text: "Malay"},
												{ value:"ml",text: "Malayalam"},{ value:"mr",text: "Marathi"},{ value:"no",text: "Norwegian"},{ value:"or",text: "Oriya"},{ value:"fa",text: "Persian"},{ value:"pl",text: "Polish"},
												{ value:"pt_BR",text: "Portugese (Brazil)"},{ value:"pt_PT",text: "Portugese (Portugal)"},{ value:"ro",text: "Romanian"},{ value:"ru",text: "Russian"},{ value:"sr",text: "Serbian"},
												{ value:"sk",text: "Slovak"},{ value:"sl",text: "Slovenian"},{ value:"es",text: "Spanish"},{ value:"sv",text: "Swedish"},{ value:"gsw",text: "Swiss German"},{ value:"ta",text: "Tamil"},
												{ value:"te",text: "Telugu"},{ value:"th",text: "Thai"},{ value:"tr",text: "Turkish"},{ value:"uk",text: "Ukranian"},{ value:"vi",text: "Vietnamese"}]
										},
									],
									onsubmit: function(e){
										var $out = "[googleplusone ";
										jQuery.each( e.data, function(key, value) {
											if(value !== "") {
												$out += ' ' + key + '="'+ value+'"';
											}
										});
										$out += "/]";
										editor.insertContent($out);
									}
								});
							}
						},

						{ text: 'Facebook', 
							onclick: function(e){
								e.stopPropagation();
								editor.windowManager.open({
									title: 'Facebook Like',
									body:[
										{
											type:'listbox',
											label:'Layout',
											name:'layout',
											values:[ {text:'Standard',value:'standard'},{text:'Box Count',value:'box_count'},{text:'Button Count',value:'button_count'} ]
										},
										{
											type:'listbox',
											label:'Add send button?',
											name:'send',
											values:[ {value:'true', text:'Yes'} ,{value:'false',text:'No'}]
										},
										{
											type:'listbox',
											label:'Show Faces?',
											name:'show_faces',
											values:[{value:'true', text:'Yes'} ,{value:'false',text:'No'}]
										},
										{
											type:'listbox',
											label:'Action',
											name:'action',
											values:[{text:'Like',value:'like'}, {text:'Recommend',value:'recommend'}]
										},
										{
											type:'listbox',
											label:'Font',
											name:'font',
											values:[
												{text:'Lucida Grande',value:'lucida+grande'},		{text:'Arial',value:'arial'},		{text:'Segoe Ui',value:'segoe+ui'},
												{text:'Tahoma',value:'tahoma'},		{text:'Trebuchet MS',value:'trebuchet+ms'},		{text:'Verdana',value:'verdana'},
											]
										},
										{
											type:'listbox',
											label:'Color Scheme',
											name:'colorscheme',
											values:[{text:'Dark',value:'dark'},{text:'Light',value:'light'}]
										}
									],
									onsubmit: function(e){
										var $out = "[fblike ";
										jQuery.each( e.data, function(key, value) {
											if(value !== "") {
												$out += ' ' + key + '="'+ value+'"';
											}
										});
										$out += "/]";
										editor.insertContent($out);
									}
								});
							}
						},

						{ text: 'Digg', 
							onclick: function(e){
								e.stopPropagation();
								editor.windowManager.open({
									title: 'Digg',
									body:[
										{ type:'listbox', label:'Layout', name:'layout',
											values:[	{text:'Wide',value:'DiggWide'},		{text:'Medium',value:'DiggMedium'},
														{text:'Compact',value:'DiggCompact'}, {text:'Icon',value:'DiggIcon'}]},
										{ type:'textbox', label:'Title', name:'title'},
										{ type:'textbox', label:'Custom URL', name:'url'},
										{ type:'textbox', label:'Article Type', name:'type'},
										{ type:'textbox', label:'Description', name:'description'},
										{ type:'listbox', label:'Disable related Stories?', name:'related',values:[ {value:'true', text:'Yes'} ,{value:'false',text:'No'}]}
									],
									onsubmit: function(e){
										var $out = "[digg ";
										jQuery.each( e.data, function(key, value) {
											if(value !== "") {
												$out += ' ' + key + '="'+ value+'"';
											}
										});
										$out += "/]";
										editor.insertContent($out);
									}
								});
							}
						},

						{ text: 'Stumbleupon', 
							onclick: function(e){
								e.stopPropagation();
								editor.windowManager.open({
									title: 'Stumbleupon',
									body:[
										{ type:'textbox', label:'Custom URL', name:'url'},
										{ type:'listbox', label:'Layout', name:'layout',
											values:[ {text:'Style 1',value:'1'}, {text:'Style 2',value:'2'}, {text:'Style 3',value:'3'},
												{text:'Style 4',value:'4'}, {text:'Style 5',value:'5'}, {text:'Style 6',value:'6'}]},
									],
									onsubmit: function(e){
										var $out = "[stumbleupon ";
										jQuery.each( e.data, function(key, value) {
											if(value !== "") {
												$out += ' ' + key + '="'+ value+'"';
											}
										});
										$out += "/]";
										editor.insertContent($out);
									}
								});
							}
						},

						{ text: 'LinkedIn', 
							onclick: function(e){
								editor.windowManager.open({
									title: 'LinkedIn',
									body:[
										{ type:'textbox', label:'Custom URL', name:'url'},
										{ type:'listbox', label:'Layout', name:'layout',
											values:[ {text:'Style 1',value:'1'}, {text:'Style 2',value:'2'}, {text:'Style 3',value:'3'}]},
									],
									onsubmit: function(e){
										var $out = "[linkedin ";
										jQuery.each( e.data, function(key, value) {
											if(value !== "") {
												$out += ' ' + key + '="'+ value+'"';
											}
										});
										$out += "/]";
										editor.insertContent($out);
									}
								});
							}
						},

						{ text: 'Pinterest', 
							onclick: function(e){
								editor.windowManager.open({
									title: 'Pinterest',
									body:[
										{ type:'textbox', label:'Custom Text', name:'text'},
										{ type:'listbox', label:'Layout', name:'layout',
											values:[ {text:'None',value:'none'}, {text:'Vertical',value:'vertical'}, {text:'Horizontal',value:'horizontal'}]},
										{ type:'textbox', label:'Image URL', name:'image'},
										{ type:'listbox', label:'Auto Prompt', name:'prompt',values:[ {value:'true', text:'Yes'} ,{value:'false',text:'No'}]}
									],
									onsubmit: function(e){
										var $out = "[pintrest  ";
										jQuery.each( e.data, function(key, value) {
											if(value !== "") {
												$out += ' ' + key + '="'+ value+'"';
											}
										});
										$out += "/]";
										editor.insertContent($out);
									}
								});
							}
						},

						{ text: 'Delicious', 
							onclick: function(e){
								e.stopPropagation();
								editor.insertContent('[delicious text="share"/]');
							}
						}
					]
				},

				{ text:'Tab',
					menu:[

						{ text:'Framed Horizontal',
							onclick: function(e){
								e.stopPropagation();
								editor.insertContent("[tabs_horizontal]" + dummy_tabs + "[/tabs_horizontal]");
							}
						},

						{ text:'Vertical',
							onclick: function(e){
								e.stopPropagation();
								editor.insertContent("[tabs_vertical]" + dummy_tabs + "[/tabs_vertical]");
							}
						},
					]
				},

				{ text: 'Team',
					onclick: function(e){
						e.stopPropagation();
						editor.windowManager.open({
							title : 'Add a Team Member',
							body:[
								{ type: 'textbox', name:'name', label:'Name'},
								{ type: 'textbox', name:'role', label:'Role'},
								{ type: 'textbox', name:'image', label:'Image url'},
								{ type: 'textbox', name:'twitter', label:'Twitter'},
								{ type: 'textbox', name:'skype', label:'Skype'},
								{ type: 'textbox', name:'linkedin', label:'Linkedin'},
								{ type: 'textbox', name:'facebook', label:'Facebook'},
								{ type: 'textbox', name:'flickr', label:'Flickr'},
								{ type: 'textbox', name:'google', label:'Google+'}
							],
							onsubmit: function(e) {
								var $out = "[team ";
								jQuery.each( e.data, function(key, value) {
									if(value !== "") {
										$out += ' ' + key + '="'+ value+'"';
                                    }
                  				});
								$out += "/]";
								editor.insertContent($out);
							}
						});
					}
				},

				{ text: 'Testimonial',
					onclick: function(e){
						e.stopPropagation();
						editor.insertContent('[testimonial name="" image=""] content comes here [/testimonial]');
					}
				},

				{ text:'Toggle',
					menu:[
						{
							text: 'Default',
							onclick: function(e){
								e.stopPropagation();
								editor.insertContent('[toggle title="Toggle 1"]<br>'+ dummy_conent + "<br>[/toggle]"
										+'<br>[toggle title="Toggle 2"]<br>'+ dummy_conent + "<br>[/toggle]"
										+'<br>[toggle title="Toggle 3"]<br>'+ dummy_conent + "<br>[/toggle]");
							}
						},

						{
							text: 'Framed',
							onclick: function(e){
								e.stopPropagation();
								editor.insertContent('[toggle_framed title="Toggle 1"]<br>'+ dummy_conent + "<br>[/toggle_framed]"
										+'<br>[toggle_framed title="Toggle 2"]<br>'+ dummy_conent + "<br>[/toggle_framed]"
										+'<br>[toggle_framed title="Toggle 3"]<br>'+ dummy_conent + "<br>[/toggle_framed]");
							}
						},
					]
				},

				{ text:'Tool tip',
					onclick: function(e){
						e.stopPropagation();
						tinyMCE.activeEditor.execCommand("scnOpenDialog", {title: this.text() ,identifier: "tooltip"});
					}
				},
			]
		});

	});// Add Shortcode button End
})();