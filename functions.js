var $j = jQuery.noConflict();
// $j is now an alias to the jQuery function; creating the new alias is optional.
$j( document ).ready(function() {
    console.log( "ready!" );
    $j( "#navbar-brand" )[0].style.color = 'white'; /*tạo chữ màu trắng cho menu ngang chính*/
    $j("#menu-pcb-menu li")[0].className += ' active';
/*    $j(".banner").on({
        mouseenter: function() {
        console.log( "hovered over a div" );
        this.animate({left: '10px'});
    },
    mouseleave: function() {
        console.log( "mouse left a div" );
        this.animate({right: '10px'});
    },
    click: function() {
        console.log( "clicked on a div" );
    }
    });*/
});
/*tạo hiệu ứng di chuột qua đổi màu: nền trắng và vạch cam*/
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
/*tạo hiệu ứng click vào menu trong slider*/
$j("#menu-pcb-menu li").click(function(){
    $j("#menu-pcb-menu li").each(function(){
        var vitri = this.className.toString().search("active"); /*Tìm vị trí của chữ 'active' thì lấy chuỗi className từ đầu đến đây trừ đi 1 đơn vị*/
        this.className = this.className.toString().slice(0, vitri-1);
    });
    /*Sau đó thì thêm class active vào vị trí chuột bấm, OK,DONE!*/
    if(this.className.toString().search('active') < 0) this.className = this.className + ' active';
})