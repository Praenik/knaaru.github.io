$(document).ready( () => {
    const btnItalic = document.getElementById('italic')
    btnItalic.onclick = () => {
        $('textarea').select( () => {
            $(this).attr('style', 'font-style: italic;')
        })
    }
})