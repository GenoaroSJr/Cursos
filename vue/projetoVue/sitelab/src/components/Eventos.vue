<template>
  <div class="hello">
    <div class="card">
      <div class="post">
        <h3>Hoje é dia: {{ date }}</h3>
        <p>mes:</p>
        <p>ano:</p>
      </div>
    </div>

    <div class="card" v-for="eventos in evento" v-bind:key="eventos.id">
      <div class="post">
        <h3>Evento:</h3>
        <p>{{ eventos.mensage }}</p>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Eventos",
  data() {
    return {
      date: new Date().getDay().toLocaleString(),
      msg: "Essa mensagem está vazia;",
      evento: [],
    };
  },

/*
  methods: {
    fetchEventos() {
      fetch("http://localhost:8081/")
        .then((res) => res.json())
        .then((res) => {
          this.evento = res.data;
          console.log(this.evento);
        });
    },
  }, */

  created() {
    this.fetchEventos();
  },
};
</script>


<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
h3 {
  margin: 40px 0 0;
}
ul {
  list-style-type: none;
  padding: 0;
}
li {
  display: inline-block;
  margin: 0 10px;
}
a {
  color: #42b983;
}
</style>
