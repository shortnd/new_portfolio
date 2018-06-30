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
html {
  font-family: "Source Sans Pro", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
  font-size: 16px;
  word-spacing: 1px;
  -ms-text-size-adjust: 100%;
  -webkit-text-size-adjust: 100%;
  -moz-osx-font-smoothing: grayscale;
  -webkit-font-smoothing: antialiased;
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: border-box;
  margin: 0;
}

.button--green {
  display: inline-block;
  border-radius: 4px;
  border: 1px solid #3b8070;
  color: #3b8070;
  text-decoration: none;
  padding: 10px 30px;
}

.button--green:hover {
  color: #fff;
  background-color: #3b8070;
}

.button--grey {
  display: inline-block;
  border-radius: 4px;
  border: 1px solid #35495e;
  color: #35495e;
  text-decoration: none;
  padding: 10px 30px;
  margin-left: 15px;
}

.button--grey:hover {
  color: #fff;
  background-color: #35495e;
}
.container {
  min-height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  text-align: center;
  flex-direction: column;
}

.title {
  font-family: "Quicksand", "Source Sans Pro", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif; /* 1 */
  display: block;
  font-weight: 300;
  font-size: 100px;
  color: #35495e;
  letter-spacing: 1px;
}

.subtitle {
  font-weight: 300;
  font-size: 42px;
  color: #526488;
  word-spacing: 5px;
  padding-bottom: 15px;
}

.links {
  padding-top: 15px;
}
.content {
  width:90%;
  text-align:left;
}
textarea{
  margin-bottom: 15px;
}
</style>
