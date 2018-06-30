<template>
  <div class="container-fluid">
    <about-me></about-me>
    <my-skills></my-skills>
    <my-portfolio></my-portfolio>
    <contact-me></contact-me>
  </div>
</template>

<script>
import AboutMe from '~/components/AboutMe';
import MySkills from '~/components/MySkills';
import MyPortfolio from '~/components/MyPortfolio';
import ContactMe from '~/components/Contact';
export default {
  components: {
    AboutMe,
    MySkills,
    MyPortfolio,
    ContactMe
  }
}
</script>

<style>

</style>
