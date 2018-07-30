( function( api ) {

    // Extends our custom "vw-charity-pro" section.
    api.sectionConstructor['vw-charity-pro'] = api.Section.extend( {

        // No events for this type of section.
        attachEvents: function () {},

        // Always make the section active.
        isContextuallyActive: function () {
            return true;
        }
    } );

} )( wp.customize );