const textArea = document.querySelectorAll('[data-autoresize]')

textArea.forEach(item => {
    item.addEventListener('focus', event => {
        let $this = event.target
        $this.style.height = '24px'
        $this.style.height = $this.scrollHeight + 'px'
        if ($this.style.height > '24px')
            $this.style.paddingBottom = '4px'
    })
})