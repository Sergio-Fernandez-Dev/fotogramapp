<script setup>
import { RouterLink, RouterView } from "vue-router";
</script>

<template>
  <header class="header">
    <nav class="nav">
      <RouterLink class="nav__link" to="/">Fotogramapp</RouterLink>
    </nav>
  </header>
  <main class="main">
    <RouterView />
  </main>
  <footer class="footer"></footer>
</template>

<style lang="scss">
.header {
  width: 100%;
  height: 7.6rem;
  background-color: map-get($map: $color, $key: "primary");
  @include flex($direction: row);
}

.nav {
  width: 1240px;
  height: 100%;
  padding: 0 3rem;
  @include flex($direction: row, $justify: "flex-start");
  &__link {
    color: white;
    font-family: $logo-font-family;
    font-size: map-get($map: $font-size, $key: "lg");
  }
}
</style>
