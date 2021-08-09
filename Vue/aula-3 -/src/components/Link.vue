<template>
  <div>
      <a :href="url">Site</a><!--ou <a v-bind:href="url">Site</a>-->
  </div>
</template>

<script>
export default {
    name: 'Link',
    data(){
        return {
            url: 'www.google.com'
        }
    }
}
</script>

<style>

</style>