jQuery.noConflict();

(function($, window, document){
	var onReady = function(){
		var typedJS = function($scope){
			$scope = typeof $scope === 'undefined'? $(document.body) : $scope;

			var typed_texts = $scope.find('.a13ree-written-headline');

			if(typed_texts.length){
				var start_typing = function(heading){
					var block         = $(heading),
						writing_area  = block.find('.written-lines'),
						block_strings = writing_area.text().split('\n'),
						is_loop       = block.data('loop') == 1,
						speed         = block.data('speed');

					//skip if it was initialized already
					if(writing_area.data('typed')){
						return;
					}

					writing_area
						.removeClass('elementor-screen-only')
						.empty()
						.typed({
						strings: block_strings,
						startDelay: 500,
						typeSpeed: parseInt(speed, 10),
						loop: is_loop
					});

					};

				typed_texts.each( function(){
					var _this = this;
					//native version
					if(typeof Waypoint === 'function'){
						//noinspection JSUnusedGlobalSymbols
						new Waypoint({
							element: _this,
							handler: function(){
								console.log('bottom-in-view');
								start_typing(this.element);
								//fire only once
								this.destroy();
							},
							offset: 'bottom-in-view'
						});
					}
					//jQuery version
					else if(typeof jQuery.waypoints === 'function'){
						$(this).waypoint( $.proxy(start_typing, this, this, 0),{ offset: 'bottom-in-view', triggerOnce:true } );
					}
					//no waypoints script available
					else{
						start_typing();
					}
				} );
			}
		};

		typedJS();

		if(typeof elementorFrontend !== 'undefined' && typeof elementorFrontend.hooks !== 'undefined'){
			elementorFrontend.hooks.addAction( 'frontend/element_ready/writing-effect-headline.default', function( $scope ) {
				typedJS($scope);
			} );
		}
	};

	$(document).ready(onReady);
})(jQuery, window, document);