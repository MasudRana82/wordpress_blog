( function( api ) {

	// Extends our custom "designer-services" section.
	api.sectionConstructor['designer-services'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );