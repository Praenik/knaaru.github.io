$(document).ready( () => {
    const path = window.location.pathname.replace('/admin/', '')
    $('.sidebar_link.active').removeClass('active')
    $(`.sidebar_link[href="${path}"]`).addClass('active')

    DecoupledEditor
        .create( document.querySelector( '#editor' ) )
        .then( editor => {
            const toolbarContainer = document.querySelector( '#toolbar-container' );

            toolbarContainer.appendChild( editor.ui.view.toolbar.element );
        } )
        .catch( error => {
            console.error( error );
        } );

    document.querySelector('button[name=add_btn]').addEventListener('click', () => {
        const text = document.querySelector('#editor > p').innerHTML
        document.querySelector('textarea').innerHTML = text
    })
})