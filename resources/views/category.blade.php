@extends('partials.skeleton', ['pageTitle' => 'Monica blog'])

@section('content')

<div class="bb bt b--gray-monica mb3">
  <div class="mw8 center">
    <div class="cf ph3">
      <div class="fl w-100">
        <p class="pv2"><a href="{{ url('/blog') }}">Blog index</a> > {{ $category->name }}</p>
      </div>
    </div>
  </div>
</div>

<div class="mw8 center ph3">
  <div class="cf">
    <div class="fl w-70-ns w-100 mb4">
      @foreach ($posts as $post)
      <article class="mb5">
        <h2 class="mt0 mb0"><a href="{{ url('/blog/'.$post->slug) }}">{{ $post->title }}</a></h2>
        <ul class="pl0 f6 black-60">
          <li class="di mr3">
            <svg class="mw0 relative" width="16px" height="17px" viewBox="0 0 38 41" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="top: 3px; margin-right: 3px">
              <defs></defs>
              <g id="Symbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g id="9E" fill="#1A1919">
                  <path d="M34.95,35.735 C34.94,37.445 33.81,37.729 33.15,37.745 C33.15,37.745 6.19,37.75 5.02,37.751 C4.49,37.751 4.07,37.603 3.77,37.31 C3.34,36.881 3.12,36.08 3.12,35.002 C3.12,34.021 3.12,23.93 3.12,16.87 L34.96,16.87 C34.96,23.65 34.97,33.338 34.95,35.735 Z M3.12,9.993 C3.12,8.425 3.72,7.753 5.13,7.745 C5.26,7.744 6.34,7.744 8.01,7.743 L8.01,9.948 C8.01,10.776 8.68,11.448 9.51,11.448 C10.33,11.448 11.01,10.776 11.01,9.948 L11.01,7.743 C11.65,7.743 12.33,7.743 13.04,7.743 C17.43,7.743 22.8,7.743 26.84,7.743 L26.84,9.948 C26.84,10.776 27.51,11.448 28.34,11.448 C29.17,11.448 29.84,10.776 29.84,9.948 L29.84,7.743 C31.65,7.743 32.81,7.743 32.85,7.744 C33.58,7.769 34.1,7.955 34.43,8.316 C34.9,8.82 34.97,9.639 34.96,9.896 C34.96,9.929 34.96,9.963 34.96,9.997 C34.96,10.054 34.96,11.584 34.96,13.87 L3.12,13.87 C3.12,11.546 3.12,9.995 3.12,9.995 C3.12,9.994 3.12,9.993 3.12,9.993 Z M37.96,10.031 C37.97,9.617 37.97,7.755 36.67,6.315 C36.05,5.635 34.91,4.811 32.9,4.745 C32.69,4.745 31.54,4.745 29.84,4.744 L29.84,2.448 C29.84,1.62 29.17,0.948 28.34,0.948 C27.51,0.948 26.84,1.62 26.84,2.448 L26.84,4.744 C22.13,4.744 15.67,4.743 11.01,4.743 L11.01,2.448 C11.01,1.62 10.33,0.948 9.51,0.948 C8.68,0.948 8.01,1.62 8.01,2.448 L8.01,4.744 C6.33,4.744 5.24,4.744 5.12,4.745 C2.7,4.759 0.11,6.146 0.12,9.997 C0.12,10.244 0.13,33.477 0.12,34.995 C0.12,36.921 0.63,38.414 1.65,39.432 C2.52,40.295 3.68,40.751 5.01,40.751 C5.02,40.751 5.02,40.751 5.02,40.751 C6.2,40.75 33.15,40.745 33.14,40.745 C33.15,40.745 33.15,40.745 33.15,40.745 C35.07,40.745 37.93,39.417 37.95,35.755 C37.98,32.054 37.96,11.064 37.96,10.031 L37.96,10.031 Z M17.16,31.166 C17.16,32.176 17.98,32.994 18.99,32.994 C20,32.994 20.82,32.176 20.82,31.166 C20.82,30.156 20,29.338 18.99,29.338 C17.98,29.338 17.16,30.156 17.16,31.166 Z M7.8,31.166 C7.8,32.176 8.62,32.994 9.63,32.994 C10.64,32.994 11.46,32.176 11.46,31.166 C11.46,30.156 10.64,29.338 9.63,29.338 C8.62,29.338 7.8,30.156 7.8,31.166 Z M26.52,31.166 C26.52,32.176 27.34,32.994 28.35,32.994 C29.36,32.994 30.18,32.176 30.18,31.166 C30.18,30.156 29.36,29.338 28.35,29.338 C27.34,29.338 26.52,30.156 26.52,31.166 Z M17.16,22.916 C17.16,23.926 17.98,24.744 18.99,24.744 C20,24.744 20.82,23.926 20.82,22.916 C20.82,21.906 20,21.088 18.99,21.088 C17.98,21.088 17.16,21.906 17.16,22.916 Z M26.52,22.916 C26.52,23.926 27.34,24.744 28.35,24.744 C29.36,24.744 30.18,23.926 30.18,22.916 C30.18,21.906 29.36,21.088 28.35,21.088 C27.34,21.088 26.52,21.906 26.52,22.916 Z"></path>
                </g>
              </g>
            </svg>
            {{ $post->created_at->format('M d Y') }}
          </li>
          <li class="di">
            <svg class="mw0 relative" width="21px" height="17px" viewBox="0 0 41 34" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="top: 3px; margin-right: 3px">
              <defs></defs>
              <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g id="H" transform="translate(-721.000000, -5.000000)" fill="#1A1919">
                  <g id="6H" transform="translate(721.000000, 5.000000)">
                    <path d="M3.353,3.55 L3.353,29.25 C3.369,29.79 3.611,30.73 5.059,30.77 C8.5,30.86 36.197,30.81 36.476,30.81 C37.274,30.78 37.688,30.24 37.688,29.19 L37.687,10.59 C37.688,10.55 37.686,9.99 37.338,9.64 C37.073,9.38 36.615,9.24 35.979,9.24 C32.645,9.24 18.681,9.19 18.681,9.19 C18.296,9.19 17.926,9.04 17.648,8.77 L12.208,3.55 L3.353,3.55 Z M20.905,33.83 C13.831,33.83 6.666,33.81 4.98,33.77 C1.576,33.68 0.348,31.02 0.353,29.25 L0.353,2.05 C0.353,1.23 1.024,0.55 1.853,0.55 L12.812,0.55 C13.199,0.55 13.571,0.7 13.85,0.97 L19.292,6.19 C21.999,6.2 33.061,6.24 35.979,6.24 C37.844,6.24 38.933,6.97 39.518,7.58 C40.728,8.85 40.693,10.48 40.686,10.66 L40.688,29.19 C40.688,30.96 39.998,32.01 39.42,32.59 C38.23,33.77 36.686,33.81 36.479,33.81 C36.476,33.81 36.474,33.81 36.471,33.81 C35.887,33.81 28.447,33.83 20.905,33.83 L20.905,33.83 Z"></path>
                  </g>
                </g>
              </g>
            </svg>
            <a href="{{ url('blog/category/'.$post->category->slug) }}">{{ $post->category->name }}</a>
          </li>
        </ul>
        {!! $post->post !!}
      </article>
      @endforeach

      {{ $posts->links('vendor.pagination.default') }}
    </div>

    <div class="fl w-30-ns w-100 pl5-ns mb4 mb0-ns">
      @include('partials.blog_sidebar', ['categories' => $categories])
    </div>
  </div>
</div>

@endsection
