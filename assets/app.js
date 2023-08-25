$('.theme').on('click', function() {
    $('.theme').toggleClass('fa-moon')
    $('.theme').toggleClass('fa-sun')
    $('body').toggleClass('dark')
})

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