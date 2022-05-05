<template>
   <v-app-bar
    color='#F2CA80'
    dense
    elevation="3"
    prominent
    >
    <v-spacer />
    <v-toolbar-title class="white--text">{{title}}</v-toolbar-title>
    <v-spacer />
    </v-app-bar>
</template>

<script>
    export default {
        props : ['title'],
        data: () => ({
          links: [
            {id: 1, title: '<',link: '/'},

          ],
          mini: false,
        }),
    }
</script>


<style scoped>
    .v-app-bar-title__content {
        width: 100% !important;
    }
</style>