workportfolio = {}

function init() {
    workportfolio.scroll.init()
    workportfolio.postSlider.init()
    workportfolio.toggles.init()
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
            el.addEventListener('click', (e) => {
                e.stopPropagation
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
            case ('toggleModal'):
                const currentTarget = target.dataset.toggleTarget

                if (currentTarget == 'postSlider') {
                    workportfolio.postSlider.currentImgIndx = 0
                    workportfolio.postSlider.start(target)
                    document.querySelector('body').classList.toggle('bodyLock')
                }

                document.querySelector(`[data-toggle=${currentTarget}]`).classList.toggle('hidden')
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

workportfolio.postSlider = {
    customPost: '',
    slidePrewArrow: '',
    slideNextArrow: '',
    imagesCount: 0,
    currentImgIndx: 0,
    images: [],
    postImagesSrc: [],

    init: function () {
        this.customPost = document.querySelector('[data-custom-post]')

        if (this.customPost) {
            this.postSliderHandler()
        }
    },

    postSliderHandler: function () {
        this.images = this.customPost.querySelector('.customPost_content').querySelectorAll('img')

        this.imagesCount = this.images.length
        this.postSliderCounter = this.customPost.querySelector('[post-slider-counter]')
        this.postSlider = this.customPost.querySelector('.postSlider')
        this.slidePrewArrow = this.customPost.querySelector('[data-slide-prev]')
        this.slideNextArrow = this.customPost.querySelector('[data-slide-next]')

        this.slidePrewArrow.addEventListener('click', this.getPrevImg.bind(this))
        this.slideNextArrow.addEventListener('click', this.getNextImg.bind(this))

        if (!this.imagesCount) {
            return
        }

        this.start()
    },

    start: function (tergetImg = null) {
        this.images.forEach((el, i) => {
            this.postImagesSrc.push(el.src)
            if (tergetImg === el) {
                this.currentImgIndx = i
            }

            el.dataset.toggleTarget = 'postSlider'
            el.dataset.type = 'toggleModal'

        })

        this.updateCounter()
        this.setPostSliderImages()
        this.triggerAnimation()
        this.disableArrow()
    },

    getPrevImg: function () {
        if (!this.currentImgIndx) {
            return
        }

        this.currentImgIndx--
        this.updateCounter()
        this.disableArrow()
        this.triggerAnimation()
        this.setPostSliderImages()
    },

    getNextImg: function () {
        if (this.imagesCount === this.currentImgIndx + 1) {
            return
        }

        this.currentImgIndx++
        this.updateCounter()
        this.disableArrow()
        this.triggerAnimation()
        this.setPostSliderImages()
    },

    triggerAnimation: function () {
        setTimeout(() => this.postSlider.classList.add('smooth'), 0)

        this.postSlider.classList.remove('smooth')
    },

    disableArrow: function () {
            if (!this.currentImgIndx) {
                this.slidePrewArrow.setAttribute('disabled', '')
                this.slideNextArrow.removeAttribute('disabled', '')
            } else if (this.imagesCount === this.currentImgIndx + 1) {
                this.slideNextArrow.setAttribute('disabled', '')
                this.slidePrewArrow.removeAttribute('disabled', '') 
            } else {
                this.slideNextArrow.removeAttribute('disabled', '')
                this.slidePrewArrow.removeAttribute('disabled', '') 
            }
    },

    setPostSliderImages: function () {
        this.postSlider.src = this.postImagesSrc[this.currentImgIndx]
    },

    updateCounter: function () {
        const countStr = this.currentImgIndx + 1 + ' / ' + this.imagesCount

        this.postSliderCounter.innerHTML = countStr
    }
}

document.addEventListener('DOMContentLoaded', () => { init() }, false)

