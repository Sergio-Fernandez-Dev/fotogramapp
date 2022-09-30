<script setup>
import { RouterView } from "vue-router";
</script>

<template>
  <header class="header">
    <h1 class="header__h1">Fotogramapp</h1>
  </header>
  <main class="main">
    <RouterView />
  </main>
  <footer class="footer">Sergio Fernández Fernández</footer>
</template>

<style lang="scss">
.header {
  width: 100%;
  height: 5rem;
  background-color: $black-color;
  @include flex($direction: row);
  &__h1 {
    font-family: $logo-font-family;
    font-size: map-get($map: $font-size, $key: "lg");
    color: map-get($map: $color, $key: "primary");
    cursor: default;
  }
}

.footer {
  width: 100%;
  max-width: $max-width;
  height: 7.2rem;
  border-top: 0.1rem solid map-get($map: $color, $key: "border");
  font-size: map-get($map: $font-size, $key: "md");
  @include flex($direction: row);
}
</style>
