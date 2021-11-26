import Glide from '@glidejs/glide'
import '../scss/app.scss'

var glide = new Glide('#hero', {
    type: 'carousel',
    focusAt: 'center',
    startAt: 5,
    perView: 1,
    autoplay: 4000,
    animationDuration: 3000,
})
glide.mount()

