<template>
<calendar :view="'month'"></calendar>
</template>

<script>
import Calendar from 'vue-calendar-mobile'

export default {
  components: {
    Calendar
  }
}
</script>