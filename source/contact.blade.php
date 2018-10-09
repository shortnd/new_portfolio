@extends('_layouts.inner')

@section('body')
    <h2>Contact Me</h2>
    <form class="flex flex-col" action="">
      <label for="name">Name:</label>
      <input type="text" name="name" id="name" placeholder="Name">
      <label for="email">Email:</label>
      <input type="email" name="email" id="email" placeholder="Email">
      <label for="message">Message:</label>
      <textarea name="message" id="message" cols="30" rows="10" placeholder="Enter your message here"></textarea>
    </form>
@endsection