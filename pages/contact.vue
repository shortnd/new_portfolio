<template>
  <div class="container">
    <h1 class="title">
      Contact
    </h1>
    <div class="content">
      <form method="post" name="contact" action="/thank-you" netlify netlify-honeypot="bot-field">
        <input type="hidden" name="form-name" value="contact" />
        <p class="hidden">
          <label>Don't fill this out: <input name="bot-field"></label>
        </p>
        <label class="label" for="name">
        Name:
        </label>
        <input class="input" name="name" id="name" placeholder="Name" required aria-required="true"/>
        <label for="email" class="label">
          Email:
        </label>
        <input class="input" name="email" id="email" placeholder="email@email.com" type="email" required aria-required="true"/>
        <label class="label" for="message">
          Message:
        </label>
        <textarea class="textarea" name="message" id="message" placeholder="Enter your message here..." required aria-required="true"></textarea>
        <input class="button is-primary" type="submit" value="Send Message" />
      </form>
    </div>
    <a class="button is-link" href="/">Home</a>
  </div>
</template>

<script>
</script>

<style>
.hidden {
  display:none;
}
</style>
