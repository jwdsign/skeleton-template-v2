    new UISearch( document.getElementById( 'sb-search' ) );

    $(function() {
    $('#nav-button').click(function() {
    $(this).toggleClass('nav-toggled');
    $('#mobile_menu, #wrapper').toggleClass('nav-toggled');
    })
    });

    $(document).ready(function() {
    $("#owl-example").owlCarousel({
    navigation : false, // Show next and prev buttons
    autoPlay : true,
    responsive : true,
    slideSpeed : 300,
    paginationSpeed : 400,
    singleItem:true
    });
    });

    $(document).ready(function() {
    $("#owl-post").owlCarousel({
    navigation : false, // Show next and prev buttons
    autoPlay : true,
    responsive : true,
    slideSpeed : 300,
    paginationSpeed : 400,
    singleItem:true
    });
    });

    $(document).ready(function(){
    $("#main .container").fitVids();
    });

    $(document).ready(function() {  
    $("#portfolio-list").filterable();
    });