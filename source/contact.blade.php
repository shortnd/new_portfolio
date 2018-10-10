@extends('_layouts.inner')

@section('Page-Title', 'Contact')

@section('page-title', 'Contact')
@section('page-subtitle', 'Ask me questions or anything')

@section('body')
    <h2 class="text-rouge text-2xl text-center">Contact Me</h2>
    <form class="flex flex-col w-100" action="">
      <div class="mb-4">
        <label class="mb-2 font-bold block font-lg text-grey-darker" for="name">Name:</label>
        <input class="shadow px-2 py-3 border appearance-none rounded w-full leading-tight focus:outline-none focus:shadow-outline" type="text" name="name" id="name" placeholder="Name" required>
      </div>
      <div class="mb-4">
        <label class="mb-2 font-bold block font-lg text-grey-darker" for="email">Email:</label>
        <input class="shadow px-2 py-3 border appearance-none rounded w-full leading-tight focus:outline-none focus:shadow-outline" type="email" name="email" id="email" placeholder="Email" required>
      </div>
      <div class="mb-6">
        <label class="mb-2 font-bold block font-lg text-grey-darker w-full" for="message">Message:</label>
        <textarea class="shadow border appearance-none rounded w-full px-2 py-2 leading-tight resize-none focus:outline-none focus:shadow-outline" name="message" id="message" cols="30" rows="10" placeholder="Enter your message here" required></textarea>
      </div>
      <div class="mb-6">
        <button class="px-3 py-2 bg-rouge border-rouge text-white font-semibold border rounded hover:bg-transparent hover:text-rouge" type="submit">Submit</button>
        <button class="px-3 py-2 bg-transparent border-red-darker text-red-darker font-semibold border rounded hover:bg-red-darker hover:text-white" type="reset">Reset</button>
      </div>
    </form>
@endsection