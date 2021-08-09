<template>
  <div id="app">
    <button @click="increment">Click ButtonInLine {{ count }} times</button>
    {{ y }}
  </div>
</template>

<script>
export default {
  name: "App",
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
  computed:{

  }
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
