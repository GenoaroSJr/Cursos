<template>
  <div id="app">
    <Navbar/>
    <Eventos/>
  </div>
</template>

<script>
import Navbar from './components/Navbar.vue';
import Eventos from './components/Eventos.vue';

export default {
  name: 'App',
  components: {
    Navbar,
    Eventos
  }
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
