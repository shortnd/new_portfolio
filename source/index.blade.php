@extends('_layouts.master')

@section('body')
<main id="main" class="mt-16 md:w-4/5 container mx-auto text-grey-darkest sm:w-full px-2">
  <section class="container mx-auto mb-8 -mt-24 px-3 sm:px-6 md:px-12 xl:px-32">
    <div class="bg-gray-100 shadow-md text-xl p-6 sm:p-8 rounded">
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
        <article class="w-full sm:flex bg-white shadow mb-6 p-3 sm:p-6">
          <a href="#" target="_blank" rel="noopener noreferrer" title="Hooligan Hymnal" class="border border-gray-300">
            Hooligan Hymnal
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
        <article class="w-full sm:flex bg-white shadow mb-6 p-3 sm:p-6">
          <a href="#" target="_blank" rel="noopener noreferrer" title="School Latchkey" class="border border-gray-300">
            School Latchkey
          </a>
          <div class="sm:w-3/4 sm:ml-6 mt-6 sm:mt-0">
            <h3 class="flex mb-3">
              <a href="#" target="_blank" rel="noopener noreferrer" title="View School Latchkey on Github" class="mr-4">
                <i class="fab fa-github" aria-hidden="true"></i>
                School Latchkey
              </a>
            </h3>
            <p>
              Info about School Latchkey...
            </p>
          </div>
        </article>
        <article class="w-full sm:flex bg-white shadow mb-6 p-3 sm:p-6">
          <a href="#" target="_blank" rel="noopener noreferrer" title="Laravel Mini-CRM" class="border border-gray-300">
            Laravel Mini-CRM
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
              Info about Laravel Mini-CRM...
            </p>
          </div>
        </article>
        <details class="w-full">
          <summary class="w-full cursor-pointer outline-none sm:text-center py-1">
            See more projects
          </summary>
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
            <li class="px-2">Responsive Design</li>
          </ul>
        </div>
      </section>
    </div>
    <div id="about" class="border-t border-rouge py-10">
      <h2 class="text-4xl tracking-wide mb-6 text-rouge font-marker">About Me</h2>
      <section class="sm:flex sm:ml-6">
        <div class="sm:w-3/4 sm:ml-6 mt-6 sm:mt-0">
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi nam quia error voluptates illum libero, velit
            debitis modi non ullam repellat dolorem, perferendis nemo temporibus soluta iure accusamus quae molestias.
          </p>
          <p class="mt-3">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint quidem laboriosam placeat nisi enim? Fuga
            illum dolorem dolores dolorum provident, commodi quia vel quaerat tempora ipsa. Consequatur qui architecto
            hic!
          </p>
        </div>
      </section>
      <section class="sm:flex sm:ml-6 mt-12">
        <div class="sm:w-3/4 sm:mr-8 mb-8 sm:mb-0">
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam suscipit vitae magni, voluptatibus
            laudantium officia nihil fugit est expedita debitis sit pariatur tempore soluta ipsum tenetur temporibus
            quia nesciunt. Atque!
          </p>
          <p class="mt-3">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores nam tempora nemo aperiam facere?
            Doloremque ad pariatur, cum nihil maxime recusandae, hic qui asperiores minima molestias facilis vero
            laboriosam dolore.
          </p>
        </div>
      </section>
    </div>
    <div id="contact" class="border-t border-rouge py-10">
      <h2 class="text-4xl tracking-wide mb-6 text-rouge font-marker">Contact</h2>
      <section class="sm:flex sm:flex-wrap mx-1 sm:mx-6">
        <div class="sm:w-1/2 sm:pr-3 pb-3">
          <a href="#" target="_blank" rel="noopener noreferrer"
            class="block flex items-center bg-white hover:bg-gray-100 shadow p-3">
            <i class="fab fa-linkedin text-2xl text-icon-linkedin rounded border-gray-300 mr-2 p-1"
              aria-hidden="true"></i>
            LinkedIn
          </a>
        </div>
        <div class="sm:w-1/2 pb-3">
          <a href="#" target="_blank" rel="noopener noreferrer"
            class="block flex items-center bg-white hover:bg-gray-100 shadow p-3">
            <i class="fab fa-twitter text-2xl rounded border-gray-300 mr-2 bg-icon-twitter text-white p-1"
              aria-hidden="true"></i>
            Twitter
          </a>
        </div>
        <div class="sm:w-1/2 sm:pr-3 pb-3">
          <a href="#" target="_blank" rel="noopener noreferrer"
            class="block flex items-center bg-white hover:bg-gray-100 shadow p-3">
            <i class="fab fa-github text-2xl rounded bg-gray-900 mr-2 text-white p-1" aria-hidden="true""></i>
            Github
          </a>
        </div>
        <div class=" sm:w-1/2 pb-3">
              <a href="#" target="_blank" rel="noopener noreferrer"
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
