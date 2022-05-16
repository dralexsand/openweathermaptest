<template>
  <div class="home">
      <h1>Home</h1>

  </div>
</template>

<script>

//import {mapGetters} from "vuex";

export default {
  name: 'home',
  components: {
    //HelloWorld
  },
  /*computed: {
    ...mapGetters({
      projects: 'projects/getProjects',
      user: 'users/getUserData'
    })
  },
  async mounted() {
    this.$store.dispatch('projects/fetchProjects', 257);
    this.$store.dispatch('users/fetchUserData', 257);
  }*/
}
</script>
<style scoped lang="scss">
a {
  text-decoration: none;
}
</style>