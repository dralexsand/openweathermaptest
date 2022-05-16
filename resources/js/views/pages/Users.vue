<template>
  <div class="container">

    <h1>Users</h1>

<!--    <div class="user" v-for="user in users.data" :key="user.id">
      <h2>{{ user.login }}</h2>
      <hr>
    </div>

    <div class="post" v-for="post in posts" :key="post.id">
      <h2>{{ post.title }}</h2>
      <h4>{{ post.body }}</h4>
      <hr>
    </div>-->

  </div>
</template>
<script>

import {mapGetters} from 'vuex'

export default {
  name: "users",
  /*computed: {
    ...mapGetters({
      posts: 'post/allPosts',
      users: 'users/getUsers',
    }),
    /!*getAllPosts() {
        return this.$store.getters['post/allPosts']
    },*!/
  },
  //computed: mapGetters(['post/allPosts']),
  async mounted() {
    this.$store.dispatch('post/fetchPosts');
    this.$store.dispatch('users/fetchUsers');
    this.showConfig();
  },
  methods: {
    showConfig() {
      console.log('showConfig init');
      //console.log(config.baseApiUrl);
      //console.log(process.env.VUE_APP_NOT_SECRET_CODE);
    }
  }*/
}
</script>
<style scoped>

</style>
