<script setup>
import IconPencil from "../../icons/IconPencil.vue";
import IconTrash from "../../icons/IconTrash.vue";
</script>

<template>
  <section class="menu">
    <div class="menu__option">
      <IconPencil />
      <p>Editar el título de la foto</p>
    </div>
    <div class="menu__option">
      <IconTrash />
      <p>Eliminar la foto</p>
    </div>
  </section>
</template>

<style lang="scss" scoped></style>
