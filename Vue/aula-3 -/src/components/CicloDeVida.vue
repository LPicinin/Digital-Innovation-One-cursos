<template>
  <div>
    <h2>Titulo</h2>
  </div>
</template>

<script>
export default {
  name: "CicloDeVida",
  data() {
    return {
      hello: "world",
    };
  },

  beforeCreate() {
    console.log(`Before created CicloDeVida ${this.hello}`);
  },
  created() {
    console.log(`Created CicloDeVida ${this.hello}`);
    //Geralmente as chamadas API são usadas aqui
  },
  beforeMount() {
    console.log(`Before mount CicloDeVida ${this.$el}`); //não tem acesso ao this.$el
  },
  mounted() {
    console.log(`Mount CicloDeVida`);
    console.log(this.$el);
  },

  beforeDestroy() {
    console.log("Before destroy CicloDeVida");
  },
  destroyed() {
    console.log("Destroyed CicloDeVida");
  },
};
</script>

<style>
</style>