jQuery( document ).ready(function() {
    console.log( "ready!" );
    jQuery( "#navbar-brand" )[0].style.color = 'white'; /*tạo chữ màu trắng cho menu ngang chính*/
    for(i=0; i<jQuery("#pcb-menu ul li").length;i++){
        jQuery("#pcb-menu ul li")[i].id = "menu-tab-" +i;
    }
    jQuery("#menu-pcb-menu li")[0].className += ' active';
    jQuery('.menu-tab-0').show();
    setInterval(function(){ markert_dynamic(); }, 3000);
});
/*tạo hiệu ứng di chuột qua đổi màu: nền trắng và vạch cam*/
jQuery( "#menu-primary a" ).on({
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
jQuery("#menu-pcb-menu li").click(function(){
    jQuery("#menu-pcb-menu li").each(function(){
        var vitri = this.className.toString().search("active"); /*Tìm vị trí của chữ 'active' thì lấy chuỗi className từ đầu đến đây trừ đi 1 đơn vị*/
        this.className = this.className.toString().slice(0, vitri-1);
    });
    /*Sau đó thì thêm class active vào vị trí chuột bấm, OK,DONE!*/
    if(this.className.toString().search('active') < 0) this.className = this.className + ' active';
    jQuery(".pcb_tab_form form").hide();
    jQuery('.'+this.id).show();
});

function markert_dynamic(){
    jQuery(".section-data div.data").eq(0).slideUp(1000, function(){
        jQuery(".section-data div.data").eq(0).insertAfter(jQuery(".section-data div.data:last-child"));    
        jQuery(".section-data div.data:last-child").show();    
    });
    
}
