/**
 * Custom JS.
 *
 * Custom JS scripts.
 *
 * @since 1.0.0
 */
 $( document ).ready(function() {

   // Loop through each menu to assign unique IDs for menu dropdowns
   var i = 1;

   $('ul li.menu-item-has-children').each(function(){
     var menuItem = $(this).find('> a'),
        subMenu = $(this).find('> ul');

     $(this).addClass('active');

     subMenu.addClass('collapse list-unstyled').attr('id', 'dropdown' + i);

     menuItem.on('click', function(){
       subMenu.addClass('show');
     });

     // Standard menu functionality
     // menuItem.addClass('dropdown-toggle').attr('data-toggle', 'collapse').attr('aria-expanded', 'true').attr('href', '#dropdown' + i);

     i++;
   });

   // If current menu item is in dropdown keep it open
   if($('.current-menu-item').parent().hasClass('sub-menu')){
     $('.current-menu-item').parent().addClass('show');
     // if current menu item is a parent to sub-items show them too
   } if($('.current-menu-item').children('ul').hasClass('sub-menu')){
     $('.current-menu-item').find('> ul').addClass('show');
   }

   // Download the page
    $('.savePage').on('click', function(e){
        e.preventDefault();
        $('.content .post-body').print();
    })

 });
