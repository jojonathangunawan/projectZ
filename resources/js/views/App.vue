<template>
  <v-app>
      <v-navigation-drawer app></v-navigation-drawer>
      <v-app-bar app></v-app-bar>
      <v-content>
          <v-container fluid>
              <router-link tag="li" to="/">Home</router-link>
              <router-link tag="li" to="/about">About</router-link>
              <!--The most important thing here-->
              <router-view></router-view>
          </v-container>
      </v-content>
      <v-footer app></v-footer>
  </v-app>
</template>

<script>
    export default {}
</script>

<style scoped>

</style>
