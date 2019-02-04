<template>
    <div class="main-content" v-cloak>

      <div class="container-fluid">
        <div  class=" row justify-content-center">
    <div class="col-md-6">
    <div class="justify-content-center">
                 <div class="card mt-5">

        <div class="card-body text-center">
            <h2 class="mb-2">
                Notifications
              </h2>
              <hr>
                  <div class="comment mb-3" v-for="(notification, index) in notifications" :key="index" >
                        <div class="row">
                          <div class="col-auto">

                            <!-- Avatar -->
                            <a class="avatar" href="profile-posts.html">
                              <img src="https://image.flaticon.com/icons/svg/1040/1040216.svg" alt="..." class="avatar-img rounded-circle">
                            </a>

                          </div>
                          <div class="col ml--2">

                            <!-- Body -->

                              <div class="row">
                                <div class="col-auto">

                                  <!-- Time -->
                                  <time class="comment-time">
                                    {{moment(notification.created_at).fromNow()}}
                                  </time>

                                </div>
                              </div> <!-- / .row -->

                              <!-- Text -->
                              <p class="comment-text">
                                    {{notification.data.message}}
                                  </p>


                          </div>
                        </div> <!-- / .row -->
                        <hr>
                      </div>


              </div>
                </div>
        </div>
</div>
        </div>
        </div>
      </div>
</template>
<script>
import {mapGetters} from 'vuex';
import store from '../store.js'

export default {
     computed: {
    ...mapGetters(['notifications'])
  },
    data: function () {
        return {
        }
    },
    mounted () {
        console.log(this.$store)
        console.log(this.notifications);
    }
}
</script>


