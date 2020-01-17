@extends('_layouts.master')

@section('body')
<main id="main" class="mt-16 md:w-4/5 container mx-auto text-grey-darkest sm:w-full px-2">
  <section class="container mx-auto mb-8 -mt-24 px-3 sm:px-6 md:px-12 xl:px-32">
    <div class="bg-white shadow-md text-xl p-6 sm:p-8 rounded">
      <p>
        I'm a Junior Full-Stack Developer living in Detroit, MI who loves problem-solving, learning & sharing knowledge,
        and effective communication.
      </p>
    </div>
  </section>
  <div class="container mx-auto px-3 sm:px-6 md:px-12 xl:px-32">
    <div id="work" class="py-10">
      <h2 class="text-4xl tracking-wide mb-6 text-rouge font-marker">My Work</h2>
      <section class="sm:flex sm:flex-wrap mx-1 sm:mx-6">
        <article class="w-full sm:flex bg-white shadow mb-6 p-3 sm:p-6 border-b border-rouge">
          <a href="https://github.com/Chattahooligans" target="_blank" rel="noopener noreferrer" title="Hooligan Hymnal"
            class="border w-1/3">
            <img
              src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRaSX7jZkxLnxbe1i923fdE0i6zNvl_8EWlm9E2s4sUVx4mjbAE"
              alt="Hooligan Hymnal Megaphone Logo" />
          </a>
          <div class="sm:w-3/4 sm:ml-6 mt-6 sm:mt-0">
            <h3 class="flex mb-3">
              <a href="#" target="_blank" rel="noopener noreferrer" title="View Hooligan Hymnal on Github" class="mr-4">
                <i class="fab fa-github" aria-hidden="true"></i>
                Hooligan Hymnal
              </a>
            </h3>
            <p>
              I help contribute to an open source project for <a href="http://dcfc.com" target="_blank"
                rel="noopener noreferrer">DCFC</a> supporter group and other independant soccer supporter groups. The
              project consists of a frontend mobile app written in React-Native and an API/Admin CRUD Express server.
            </p>
          </div>
        </article>
        <article class="w-full sm:flex bg-white shadow mb-6 p-3 sm:p-6 border-b border-gold">
          <a href="https://github.com/shortnd/schoollatchkey" target="_blank" rel="noopener noreferrer"
            title="School Latchkey" class="border w-1/3">
            <img src="https://github.githubassets.com/images/modules/logos_page/GitHub-Mark.png"
              alt="Github logo for School Latchkey" />
          </a>
          <div class="sm:w-3/4 sm:ml-6 mt-6 sm:mt-0">
            <h3 class="flex mb-3">
              <a href="#" target="_blank" rel="noopener noreferrer" title="View School Latchkey on Github" class="mr-4">
                <i class="fab fa-github" aria-hidden="true"></i>
                School Latchkey
              </a>
            </h3>
            <p>
              School Latchkey is a <a href="https://laravel.com" target="_blank" rel="noopener noreferrer"
                title="Laravel">Laravel</a> app. It was created to help keep track of kids time in morning or after
              school latchkey. It was created to be multitenant so if other schools in the school district wanted to use
              it they could create there own school with there own users and children in seperate databases.
            </p>
          </div>
        </article>
        <article class="w-full sm:flex bg-white shadow mb-6 p-3 sm:p-6 border-b border-rouge">
          <a href="https://github.com/shortnd/laravel-mini-crm" target="_blank" rel="noopener noreferrer"
            title="Laravel Mini-CRM" class="border w-1/3">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/240px-Laravel.svg.png"
              alt="Laravel Mini-CRM Logo" />
          </a>
          <div class="sm:w-3/4 sm:ml-6 mt-6 sm:mt-0">
            <h3 class="flex mb-3">
              <a href="#" target="_blank" rel="noopener noreferrer" title="View Laravel Mini-CRM on Github"
                class="mr-4">
                <i class="fab fa-github" aria-hidden="true"></i>
                Laravel Mini-CRM
              </a>
            </h3>
            <p>
              This project was based off of the article from <a
                href="https://laraveldaily.com/test-junior-laravel-developer-sample-project/" target="_blank"
                rel="noopener noreferrer" title="How to Test Junior Laravel Developer Skills: Sample Project">Laravel
                Daily</a>. It is to show a basic understanding of how to create a CRUD application in Laravel at what he
              fells is a Junior Level.
            </p>
          </div>
        </article>
        <details class="w-full">
          <summary class="w-full cursor-pointer outline-none sm:text-center py-1">
            See more projects
          </summary>
          <h4>No Other Projects at this time</h4>
        </details>
      </section>
    </div>
    <div id="skills" class="border-t border-rouge py-10">
      <h2 class="text-4xl tracking-wide mb-6 text-rouge font-marker">Skill</h2>
      <section class="text-gray-800 mx-1 sm:mx-3">
        <ul class="hidden md:flex flex-wrap justify-between">
          <li class="px-2">HTML & CSS</li>
          <li class="px-2">Javascript</li>
          <li class="px-2">Bootstrap</li>
          <li class="px-2">TailwindCSS</li>
          <li class="px-2">Vue</li>
          <li class="px-2">React</li>
          <li class="px-2">Redux</li>
          <li class="px-2">React Native</li>
          <li class="px-2">Express</li>
          <li class="px-2">Node</li>
          <li class="px-2">Laravel</li>
          <li class="px-2">MongoDB</li>
          <li class="px-2">MySQL & PostgresSQL</li>
          <li class="px-2">Responsive Design</li>
          <li class="px-2">Accessibility</li>
          <li class="px-2">API Development</li>
          <li class="px-2">Bash</li>
        </ul>
        <div class="md:hidden clearfix" aria-hidden="false">
          <ul class="absolute">
            <li class="px-2">MySQL & PostgresSQL</li>
            <li class="px-2">API Development</li>
            <li class="px-2">TailwindCSS</li>
            <li class="px-2">HTML & CSS</li>
            <li class="px-2">Express</li>
            <li class="px-2">MongoDB</li>
            <li class="px-2">Redux</li>
            <li class="px-2">Bash</li>
          </ul>
          <ul class="float-right text-right">
            <li class="px-2">Vue</li>
            <li class="px-2">Node</li>
            <li class="px-2">React</li>
            <li class="px-2">Laravel</li>
            <li class="px-2">Bootstrap</li>
            <li class="px-2">Javascript</li>
            <li class="px-2">React Native</li>
            <li class="px-2">Accessibility</li>
            <li class="px-2">Responsive Design</li>
          </ul>
        </div>
      </section>
    </div>
    <div id="about" class="border-t border-rouge py-10">
      <h2 class="text-4xl tracking-wide mb-6 text-rouge font-marker">About Me</h2>
      <section class="sm:flex sm:ml-6">
        {{-- md:w-3/4 md:ml-6 --}}
        <div class="mt-6 sm:mt-0">
          <p>
            I grew up at the time computers were really starting to hit main stream, but didn't fall in love with them
            until late in high school. My best friend in high school gave me his gaming desktop for a few weeks while he
            was on vacation. While he was away it broke and I learned how to fix it. He then let me keep the computer
            and I started rebuilding it on my own. I then slowly learned about HTML/CSS to make some simple websites.
          </p>
          <p class="mt-3">
            I started going to my local community college for web design, but found out that it would take at least
            three+ years to complete the course how the school had it setup. I heard through some people of coding boot
            camps and decided to go to General Assembly, in Washington, DC. After that I have been working on side
            projects until I got my current job.
          </p>
        </div>
      </section>
      <section class="sm:flex sm:ml-6 mt-12">
        {{-- md:w-3/4 md:mr-8  --}}
        <div class="mb-8 sm:mb-0">
          <p>
            Currently I'm a Web Developer at <a href="https://revize.com" class="text-rouge" target="_blank"
              rel="noopener noreferrer" title="Revize Goverment Websites">revize</a>. I spend most of my days making
            websites for different
            Government Municipalities and other businesses. Most of my most recent experience comes from <a
              class="text-rouge" href="https://github.com/Chattahooligans" target="_blank" rel="noopener noreferrer"
              title="View Hooligan Hymnal on Github">Hooligan Hymnal</a> an
            open source solution for independent
            supporter groups. I got into this project because of my love for <a href="https://www.detcityfc.com/"
              target="_blank" rel="noopener noreferrer" title="Detroit City Football Club" class="text-rouge">DCFC</a>
            and being part of
            the <a href="https://noonelikes.us" target="_blank" rel="noopener noreferrer" class="text-rouge">Norther
              Guard</a>. This projects uses Express for the Admin
            Server, and a React Native Application for users to see different songs, players and announcements.
          </p>
          <p class="mt-3">
            When not programming I enjoy relaxing with my family, reading, watching talks, watching soccer, and going to
            watch <a href="https://www.detcityfc.com/" target="_blank" rel="noopener noreferrer"
              title="Detroit City Football Club" class="text-rouge">DCFC</a> in
            Hamtramck or at the Clubhouse.
          </p>
        </div>
      </section>
    </div>
    <div id="contact" class="border-t border-rouge py-10">
      <h2 class="text-4xl tracking-wide mb-6 text-rouge font-marker">Contact</h2>
      <section class="sm:flex sm:flex-wrap mx-1 sm:mx-6">
        <div class="sm:w-1/2 sm:pr-3 pb-3">
          <a href="https://www.linkedin.com/in/collin-o-connell-40a230132/" target="_blank" rel="noopener noreferrer"
            class="block flex items-center bg-white hover:bg-gray-100 shadow p-3">
            <i class="fab fa-linkedin text-2xl text-icon-linkedin rounded border-gray-300 mr-2 p-1"
              aria-hidden="true"></i>
            LinkedIn
          </a>
        </div>
        <div class="sm:w-1/2 pb-3">
          <a href="https://twitter.com/shortnd667" target="_blank" rel="noopener noreferrer"
            class="block flex items-center bg-white hover:bg-gray-100 shadow p-3">
            <i class="fab fa-twitter text-2xl rounded border-gray-300 mr-2 bg-icon-twitter text-white p-1"
              aria-hidden="true"></i>
            Twitter
          </a>
        </div>
        <div class="sm:w-1/2 sm:pr-3 pb-3">
          <a href="https://github.com/shortnd" target="_blank" rel="noopener noreferrer"
            class="block flex items-center bg-white hover:bg-gray-100 shadow p-3">
            <i class="fab fa-github text-2xl rounded bg-gray-900 mr-2 text-white p-1" aria-hidden="true""></i>
            Github
          </a>
        </div>
        <div class=" sm:w-1/2 pb-3">
              <a href="mailto:ococncol@gmail.com" target="_blank" rel="noopener noreferrer"
                class="block flex items-center bg-white hover:bg-gray-100 shadow p-3">
                <i class="fa fa-envelope text-2xl rounded bg-rouge mr-2 text-white p-1" aria-hidden="true"></i>
                Email
              </a>
        </div>
      </section>
    </div>
  </div>
</main>
@endsection
