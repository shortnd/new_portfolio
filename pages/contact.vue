<template>
  <div class="container">
    <h1 class="title">
      Contact
    </h1>
    <div class="content">
      <form action="" method="post" name="contact" netlify>
        <input type="hidden" name="form-name" value="contact" />
        <label class="label" for="name">
        Name:
        </label>
        <input class="input" name="name" id="name" />
        <label for="email" class="label">
          Email:
        </label>
        <input class="input" name="email" id="email"/>
        <label class="label" for="Message">
          Message:
        </label>
        <textarea class="textarea" name="message" id="message"></textarea>
        <input class="button is-primary" type="submit" value="Send Message" />
      </form>
    </div>
  </div>
</template>

<script>
export default {

}
</script>

<style>

</style>
