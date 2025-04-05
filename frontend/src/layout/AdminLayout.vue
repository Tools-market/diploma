<script setup lang="ts"></script>

<template>
  <div class="layout admin">
    <Header />
    <aside class="sidebar">Admin Sidebar</aside>
    <main class="main-content">
      <slot></slot>
    </main>
  </div>
</template>

<style scoped></style>
