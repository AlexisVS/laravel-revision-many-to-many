@extends("template.index")
@section('content')
  @foreach ($articles as $article)
    <div class="m-6">
      <div class="max-w-xl m-auto bg-gray-100 rounded-lg shadow-sm ">

        <div>
          <div class="py-4 mx-8 text-3xl sm:flex sm:items-center">
            <svg class="" xmlns=" http://www.w3.org/2000/svg" width="64" height="64">
              <defs>
                <linearGradient x1="0" y1="-21.333" y2="85.333" id="A" x2="64" gradientUnits="userSpaceOnUse">
                  <stop stop-color="#6b46c1" offset="0%" />
                  <stop stop-color="#b83280" offset="100%" />
                </linearGradient>
              </defs>
              <path
                d="M16 25.6c2.133-8.533 7.467-12.8 16-12.8 12.8 0 14.4 9.6 20.8 11.2 4.267 1.067 8-.533 11.2-4.8C61.867 27.733 56.533 32 48 32c-12.8 0-14.4-9.6-20.8-11.2-4.267-1.067-8 .533-11.2 4.8zM0 44.8C2.133 36.267 7.467 32 16 32c12.8 0 14.4 9.6 20.8 11.2 4.267 1.067 8-.533 11.2-4.8-2.133 8.533-7.467 12.8-16 12.8-12.8 0-14.4-9.6-20.8-11.2-4.267-1.067-8 .533-11.2 4.8z"
                fill="url(#A)" fill-rule="evenodd" />
            </svg>
            <h1 class="p-4 text-pink-700">{{ $article->title }}</h1>
          </div>
          <div class="flex space-x-2 mb-3 ml-8">
            @foreach ($article->tags as $articleTag)
              <a href="/tag/{{ $articleTag->id }}">
                <span
                  class="text-sm px-2 font-semibold bg-{{ Arr::random($colors) }}-500 text-white rounded-full py-0.5">
                  {{ $articleTag->name }}
                </span>
              </a>
            @endforeach
          </div>
          <div>
            <p class="px-8 pb-4 text-justify text-purple-700">{{ $article->description }}</p>
          </div>
        </div>
        <div class="relative">
          <div class="relative h-16 bg-gray-100">
            <h1
              class="absolute bottom-0 right-0 m-8 text-purple-700 cursor-pointer text-md hover:text-pink-700 hover:underline">
              Read full article</h1>
            <h1 class="absolute bottom-0 right-0 mx-8 my-3 text-sm text-gray-500">posted on 1st Oct.
              2020 |
              5
              min. read</h1>
          </div>
          <div
            class="absolute bottom-0 left-0 w-16 h-16 mb-8 ml-8 border-2 border-gray-200 rounded-full bg-gradient-to-r from-purple-700 to-pink-700">
            <svg class="pl-1 m-2 text-gray-100 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
              fill="black" width="40px" height="40px">
              <path d="M0 0h24v24H0z" fill="none" />
              <path
                d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z" />
            </svg>
          </div>
          <div class="h-16 text-gray-100 rounded-b-lg bg-gradient-to-r from-purple-700 to-pink-700">
            <h1
              class="absolute bottom-0 left-0 pb-4 pl-32 text-xl font-semibold cursor-pointer hover:underline sm:hover:no-underline sm:cursor-default">
              Nitish Kumar Sharma</h1>
            <div
              class="absolute bottom-0 right-0 hidden px-2 py-1 mx-8 my-4 text-sm text-gray-100 border-2 border-gray-100 border-solid rounded opacity-100 cursor-pointer sm:flex hover:opacity-75">
              <h2>view profile</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  @endforeach
  </div>

@endsection
