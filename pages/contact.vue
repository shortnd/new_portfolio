<template>
  <div class="container">
    <h1 class="title">
      Contact
    </h1>
    <div class="content">
      <form method="post" name="contact" netlify netlify-honeypot="bot-field">
        <input type="hidden" name="form-name" value="contact" />
        <p class="hidden">
          <label>Don't fill this out: <input name="bot-field"></label>
        </p>
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
</script>

<style>
.hidden {
  display:none;
}
</style>
