jQuery(document).ready(function($){
  $(document).on('change', '.js-smart-autocomplete', function(){
    if( this.value == '___add_new_item___' ){
      var newValue = prompt( "Item Name: " );

      newValue = $.trim( newValue );

      if( newValue !== '' ){
        $('<option>', {
          text    : newValue,
          selected: true
        }).appendTo( this );
      }
    }
  });
});
