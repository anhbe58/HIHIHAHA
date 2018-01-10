var $j = jQuery.noConflict();
// $j is now an alias to the jQuery function; creating the new alias is optional.
$j( document ).ready(function() {
    console.log( "ready!" );
    $j( "#navbar-brand" )[0].style.color = 'white';
});
$j( "#menu-primary a" ).on({
    mouseenter: function() {
        console.log( "hovered over a div" );
        this.style.color = "#373D41";
        this.parentNode.style.backgroundColor = "white";
        this.style.textShadow = 'none';
        this.style.borderBottomColor='#ff8b12';
    },
    mouseleave: function() {
        console.log( "mouse left a div" );
        this.style.color = "white";
        this.parentNode.style.backgroundColor = "transparent";
        this.style.borderBottomColor='transparent';
    },
    click: function() {
        console.log( "clicked on a div" );
    }
});