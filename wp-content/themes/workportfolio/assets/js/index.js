workportfolio = {}

function init() {
    workportfolio.toggles.init()
    workportfolio.scroll.init()
}

workportfolio.toggles = {
    init: function () {
        this.toggle()
    },

    toggle: function () {
        document.querySelector('.mobile_menu').querySelectorAll('.menu-item-has-children').forEach(el => {
            el.setAttribute('data-toggle', '')
            el.querySelector('.sub-menu').setAttribute('data-toggle-item', '')
        })

        document.querySelectorAll('[data-toggle-target]').forEach(el => {
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
                if (parent) {
                    parent.querySelectorAll('[data-toggle]').forEach(el => {
                        if (el === item) {
                            return
                        }

                        el.classList.remove('active')
                        el.querySelector('[data-toggle-item]').classList.remove('active')
                    })
                }

                item.classList.toggle('active')
                item.querySelector('[data-toggle-item]').classList.toggle('active')
                break
        }
    }
}

workportfolio.scroll = {
    position: 0,

    init: function () {
        this.position = window.scrollY
        this.scroll()
        this.headerHandler()
    },

    scroll: function () {
        document.addEventListener('scroll', () => this.scrollsHandler())
    },

    scrollsHandler: function () {
        this.position = window.scrollY

        this.headerHandler()
    },

    headerHandler: function () {
        const header = document.querySelector('header')

        if (this.position > 50) {
            header.classList.add('activeHeader')
        } else {
            header.classList.remove('activeHeader')
        }
    }
}


document.addEventListener('DOMContentLoaded', () => { init() }, false);

