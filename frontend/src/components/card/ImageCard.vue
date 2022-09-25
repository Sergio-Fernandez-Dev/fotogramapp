<script setup>
import IconAddLocation from "@/components/icons/IconAddLocation.vue";
import IconOptions from "@/components/icons/IconOptions.vue";
import IconLocation from "@/components/icons/IconLocation.vue";

defineProps({
  url: String,
  title: String,
  location: String,
});
</script>

<template>
  <section class="card">
    <div class="card__img" :style="`background-image:url(${url})`"></div>
    <section class="card__buttons">
      <IconAddLocation />
      <IconOptions />
    </section>
    <section class="card__info">
      <h3 class="card__title">{{ title }}</h3>
      <div class="card__location">
        <IconLocation />
        {{ location }}
      </div>
    </section>
  </section>
</template>

<style lang="scss" scoped>
.card {
  height: 100%;
  &__img {
    height: 24rem;
    background-position: center;
    background-size: cover;
  }
}
</style>
