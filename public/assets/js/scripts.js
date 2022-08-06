var _____WB$wombat$assign$function_____ = function(name) {return (self._wb_wombat && self._wb_wombat.local_init && self._wb_wombat.local_init(name)) || self[name]; };
if (!self.__WB_pmw) { self.__WB_pmw = function(obj) { this.__WB_source = obj; return this; } }
{
  let window = _____WB$wombat$assign$function_____("window");
  let self = _____WB$wombat$assign$function_____("self");
  let document = _____WB$wombat$assign$function_____("document");
  let location = _____WB$wombat$assign$function_____("location");
  let top = _____WB$wombat$assign$function_____("top");
  let parent = _____WB$wombat$assign$function_____("parent");
  let frames = _____WB$wombat$assign$function_____("frames");
  let opener = _____WB$wombat$assign$function_____("opener");

if ( typeof ( CRUMINA ) === 'undefined' ) {
    var CRUMINA = { };
}
CRUMINA.submit = {
    $forms: null,
    init: function () {
        this.$forms = jQuery( 'form.crumina-submit' );

        this.addEventListeners();
    },
    addEventListeners: function () {
        var _this = this;

        this.$forms.each( function () {
            var $self = jQuery( this );

            $self.on( 'submit', function ( event ) {
                event.preventDefault();
            } );

            $self.validate( {
                submitHandler: function () {
                    _this.run( $self );
                }
            } );
        } );
    },
    run: function ( $form ) {
        jQuery.ajax( {
            url: $form.attr( 'action' ),
            dataType: 'json',
            type: 'POST',
            data: {
                nonce: $form.data( 'nonce' ),
                type: $form.data( 'type' ),
                inputs: $form.serialize()
            },
            success: function ( response ) {
                if ( response.success ) {
                    $form[0].reset();
                    swal( {
                        title: 'Success!',
                        text: response.message,
                        type: 'success'
                    } );
                } else {
                    swal( {
                        title: 'Error!',
                        text: response.message,
                        type: 'error'
                    } );
                }
            },
            error: function ( jqXHR, textStatus ) {
                swal( {
                    title: 'Error!',
                    text: textStatus,
                    type: 'error'
                } );
            }
        } );
    }
};

jQuery( document ).ready( function () {
    CRUMINA.submit.init();
} );

}
/*
     FILE ARCHIVED ON 19:00:43 Sep 04, 2020 AND RETRIEVED FROM THE
     INTERNET ARCHIVE ON 14:00:24 Aug 05, 2022.
     JAVASCRIPT APPENDED BY WAYBACK MACHINE, COPYRIGHT INTERNET ARCHIVE.

     ALL OTHER CONTENT MAY ALSO BE PROTECTED BY COPYRIGHT (17 U.S.C.
     SECTION 108(a)(3)).
*/
/*
playback timings (ms):
  captures_list: 3432.286
  exclusion.robots: 0.14
  exclusion.robots.policy: 0.128
  cdx.remote: 0.097
  esindex: 0.012
  LoadShardBlock: 100.327 (3)
  PetaboxLoader3.datanode: 198.841 (5)
  CDXLines.iter: 21.336 (3)
  load_resource: 298.395 (2)
  PetaboxLoader3.resolve: 165.624 (2)
*/