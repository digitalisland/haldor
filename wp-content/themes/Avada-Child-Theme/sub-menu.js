
 jQuery(document).ready(function($) {
    
     $('#menu .sub-menu-open').click(function(e) {
        $(this).toggleClass('active');
        if ($(this).parent().children('.sub-menu:first').is(':hidden')) {
            $(this).parent().children('.sub-menu:first').slideDown(200);
        } else {
            if ($(this).parent().children('.sub-menu:first').slideUp(200)); 
       }

         e.preventDefault();
     });


 //});



//jQuery(document).ready(function($) {
    // desktop 
    //$('#menu .sub-menu-open').click(function(e) {
   
      //  $(this).toggleClass('flip');
      //  const $current = $(this).parent().children('.sub-menu:first');
      //  const $subMenu = $(this).parents('.menu-item-has-children').children('.sub-menu');
      //  const $others = $('.nav-haldor .sub-menu').not($subMenu)
      
        // console.log($subMenu)
       // console.log({$current, $others})
       // $others.hide(200)
        
       // if ($current.is(':hidden')) {
        //    $current.slideDown(400);
        //} else {
         //   $current.slideUp(400); 
        //}

       // e.preventDefault();
    //});


      //Open first submenu and stays open until second submenu opens 
     //$('.menu-item-has-children').hover(function() {
     //$(this).find('.sub-menu:first').stop(true, true).fadeIn(200);
     //  },
     //  function(event) {
      //  if(event.target.closest('.sub-menu')) {
      //    return
      //  }
      //  $(this).find('.sub-menu:first').stop(true, true).delay(200).fadeOut(400);
     //});  
      //Close all submenus when moving mouse out of menu
     //$('.nav-haldor').hover( 
       
      // function(event) {
       
      //  $(this).find('.sub-menu').stop(true, true).delay(200).fadeOut(400);
     //});  
     
   
});


