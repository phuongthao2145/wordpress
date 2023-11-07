jQuery(document).ready(function($) {
    $('body').on('mouseenter', '*', function() {
        var classes = $(this).attr('class');
        if (classes) {
            $(this).attr('title', 'Classes: ' + classes);
        }
    });
});


// jQuery(document).ready(function($) {
//     $('body').on('mouseenter', '*',function() {
//         var color = $(this).css('color');
//         var background = $(this).css('background');
//         if (color) {
//             $(this).attr('title', 'Color: ' + color);
//         }
//         else if (background) {
//             $(this).attr('title', 'Color background: ' + background);
//         }
//     });
// });

