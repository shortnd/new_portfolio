<template>
  <header>
    <a href="#main" id="skip" tabindex="0">SKIP TO CONTENT</a>
    <nav class="navbar">
      <a class="navbar-brand" href="/">Collin O.</a>
      <ul class="nav pull-right">
        <li class="nav-item">
          <nuxt-link class="nav-link" to="/about">About</nuxt-link>
        </li>
        <li class="nav-item">
          <nuxt-link class="nav-link dropdown-toggle" to="/projects" data-toggle="dropdown">Projects</nuxt-link>
          <ul class="dropdown-menu">
            <li class="dropdown-item">
              <nuxt-link to="/projects/1">Project 1</nuxt-link>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
  </header>
</template>

<script>
export default {

}
</script>

<style>
#skip{
  position: fixed;
  top: 150px;
  left: -100%;
  text-decoration: none!important;
  transition: all .2s ease;
}
#skip:focus{
  left:200px;
}
</style>
