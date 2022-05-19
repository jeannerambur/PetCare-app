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
            slide: ['https://pet-care-ecv.s3.eu-west-3.amazonaws.com/images/logov2.png', 'https://pet-care-ecv.s3.eu-west-3.amazonaws.com/images/oeil.png'],
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