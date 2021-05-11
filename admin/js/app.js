$(document).ready( () => {
    const path = window.location.pathname.replace('/admin/', '')
    $('.sidebar_link.active').removeClass('active')
    $(`.sidebar_link[href="${path}"]`).addClass('active')
})