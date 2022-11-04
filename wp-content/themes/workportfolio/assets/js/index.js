workportfolio = {}

workportfolio.toggles = {
    init: function() {
        this.toggle()
    },

    toggle: function() {
        document.querySelectorAll('[data-toggle-target]').forEach( el => {
            el.addEventListener('click', () => {
                this.toggleHandler(el)
            })
        })
    },

    toggleHandler: function (el) {
        const target = el
        const parent = target.closest('[data-parent-toggle]')
        const item = target.closest('[data-toggle]')
        const toggleType = target.dataset.type

        switch (toggleType) {
        case ('accordion'):
            parent.querySelectorAll('[data-toggle]').forEach(el => {
                if (el === item) {
                    return
                }

                el.classList.remove('active')
            })
            
            item.classList.toggle('active')
            console.log(parent, '$parent');
        break
        }
    }
}

document.addEventListener( 'DOMContentLoaded', () => { init() }, false );

