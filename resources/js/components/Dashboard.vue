<template>
        <div>
            <app-navbar></app-navbar>
            <app-navbar-second></app-navbar-second>
            <div class="main-content">
                <router-view></router-view>
            </div>
        </div>
</template>
<script>
import Navbar from "@/js/components/includes/Navbar";
import SecondNavBar from "@/js/components/includes/SecondNavBar";

export default {
  components: {
    "app-navbar": Navbar,
    "app-navbar-second": SecondNavBar
  }
};
</script>
