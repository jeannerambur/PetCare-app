<template>
    <div>
        <slide :data="slide" />
    </div>
</template>

<script>
import slide from '@wyhaya/vue-slide'
export default {
    data() {
        return {
            slide: ['../../storage/images/1.jpg', '../../storage/images/2.jpg', '../../storage/images/3.jpg'],
            time: 3000,
            speed: 300,
            spot: true,
            type: 'ease',
            clockwise: true
        }
    },
    components: { slide }
}
</script>