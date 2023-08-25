$(document).ready(function() {
    // Check if the user's theme preference is in local storage
    const themePreference = localStorage.getItem('theme');
    if (themePreference === 'dark') {
        $('body').addClass('dark');
        $('.theme').addClass('fa-sun').removeClass('fa-moon');
    } else {
        $('body').removeClass('dark');
        $('.theme').addClass('fa-moon').removeClass('fa-sun');
    }

    // Toggle theme when the theme button is clicked
    $('.theme').on('click', function() {
        if ($('body').hasClass('dark')) {
            $('body').removeClass('dark');
            $('.theme').addClass('fa-moon').removeClass('fa-sun');
            localStorage.setItem('theme', 'light');
        } else {
            $('body').addClass('dark');
            $('.theme').addClass('fa-sun').removeClass('fa-moon');
            localStorage.setItem('theme', 'dark');
        }
    });
});


function openMenu(action) {
    // $('.single-action-menu').addClass('collapsed')
    // $('.single-action-menu').addClass('fa-plus')
    // $('.single-action-menu').removeClass('fa-minus')


    let menu_id = action+'-menu';
    let icon_id = action+'-icon';
    $(`#${menu_id}`).toggleClass('collapsed')
    $(`#${icon_id}`).toggleClass('fa-plus')
    $(`#${icon_id}`).toggleClass('fa-minus')
}