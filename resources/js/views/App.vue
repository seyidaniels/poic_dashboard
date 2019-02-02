<template>
  <div>
    <app-auth v-show="!this.$store.getters.isAuthenticated"></app-auth>

    <app-dashboard v-show="this.$store.getters.isAuthenticated"></app-dashboard>

  </div>
</template>
<script>
import Dashboard from "@/js/components/Dashboard";
import Auth from "@/js/components/Auth";
import store from '@/js/store' // your vuex store

export default {
  components: {
    "app-auth": Auth,
    "app-dashboard": Dashboard
  },
  data: function() {
    return {
    };
  },
  mounted () {
      console.log(
          this.$store
      )
  }
};
</script>
