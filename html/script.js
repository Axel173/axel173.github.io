$(document).ready(function()
{
    $('.section_item_wrapper').on('click', function(){
        $(this).toggleClass('active');
        $(this).find('.product_section_menu').slideToggle(300);
        return false;
    });
});