<template>
  <div id="app">
    <button @click="increment">Click ButtonInLine {{ count }} times</button>
    <CicloDeVida />
    <Aula3 />
    <Propriedades />
    <Loop />
    <VON />
  </div>
</template>

<script>
import CicloDeVida from "./components/CicloDeVida.vue";
import Aula3 from "./components/Aula3.vue";
import Propriedades from "./components/Propriedades.vue";
import Loop from "./components/Loop.vue";
import VON from "./components/On/Loop.vue";

export default {
  name: "App",
  components: {
    CicloDeVida,
    Aula3,
    Propriedades,
    Loop,
    VON,
  },
  data() {
    return {
      count: 0,
    };
  },
  mounted() {
    //this.$set(this.count, "y", 1);
    //this.count = { ...this.count, ...{ a: 1, b: 2 } };
  },
  methods: {
    increment() {
      this.count++;
    },
  },
  //parecidas commetodos, porem é um sistema baseado em cache
  computed: {},
};
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
