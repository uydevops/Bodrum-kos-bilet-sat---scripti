/*!
   --------------------------------
   Eensta - Instagram jQuery Plugin
   --------------------------------
   + https://github.com/tsiger/eensta
   + version 0.1
   + Copyright 2014 Gerasimos Tsiamalos
   + Licensed under the MIT license
*/

;(function ( $, window, document, undefined ) {
	
	'use strict';
	
	var pluginName = 'eensta',
		defaults = {
			client_id: null,
			username: null,
			linkable: true,
			how_many: 5
		};

	function Plugin ( element, options ) {
		this.element = element;
		this.settings = $.extend( {}, defaults, options );
		this._defaults = defaults;
		this._name = pluginName;
		this.init();
	}

	$.extend(Plugin.prototype, {
		init: function () {
		
			// Let's make our settings available in here
			var _self = this;

			// Let's grab our container
			var _container = $(_self.element);
			
			
			// We do need to specify a user and a client id otherwise this little fella won't run
			if (_self.settings.username !== null && _self.settings.client_id !== null) {
				
				// Let's grab our user
				$.ajax({
					type: 'GET',
					url: 'https://api.instagram.com/v1/users/search?q='+_self.settings.username+'&client_id='+_self.settings.client_id+'&callback=?',
					dataType: 'jsonp',
					success: function(user_data) {

						// Everything alright?
						if (user_data.meta.code === 200) {
	
							// Hm, more than 1 users. Let's grab the one we need
							for(var i = 0; i < user_data.data.length; i++) {
								var check_user = user_data.data[i];
								
								//Once we have our user, let's grab his images (based on user settings)
								if (_self.settings.username === check_user.username) {
									$.ajax({
										type: 'GET',
										url: 'https://api.instagram.com/v1/users/'+check_user.id+'/media/recent/?client_id='+_self.settings.client_id+'&count='+_self.settings.how_many+'&callback=?',
										dataType: 'jsonp',
										success: function(media_data) {
	
											// Everything alright?
											if(media_data.meta.code === 200) {
												for(var j = 0; j < media_data.data.length; j++) {
													var media_type = media_data.data[j];
													
													// Just the images, p'lease.
													if(media_type.type === 'image') {
													
														var item = '';
														
														// Do you want links?
														if (_self.settings.linkable) {
															item = '<li class="eensta-item"><a href="'+media_data.data[j].link+'"><img src="'+media_type.images.standard_resolution.url+'" /></a></li>';
														}
														else {
															item = '<li class="eensta-item"><img src="'+media_type.images.standard_resolution.url+'" /></li>';	
														}
														_container.append(item);
														
													}
												}
											}
										}
									}); // Media AJAX Call
								}
							}  
						} // If (user_data.meta.code === 200)
					}
				});	// User AJAX Call
			}
			else {
				_container.append('Eensta Error: You need to specify a <strong>username</strong> and a <strong>client id</strong>');
			}
		}
	});

	$.fn[ pluginName ] = function ( options ) {
		this.each(function() {
			if ( !$.data( this, 'plugin_' + pluginName ) ) {
				$.data( this, 'plugin_' + pluginName, new Plugin( this, options ) );
			}
		});
		return this;
	};

})( jQuery, window, document );