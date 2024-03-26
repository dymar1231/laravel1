<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Travel agency</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

  <!-- Styles -->
  <style>
    /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
    html {
      line-height: 1.15;
      -webkit-text-size-adjust: 100%
    }

    body {
      margin: 0
    }

    a {
      background-color: transparent
    }

    [hidden] {
      display: none
    }

    html {
      font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
      line-height: 1.5
    }

    *,
    :after,
    :before {
      box-sizing: border-box;
      border: 0 solid #e2e8f0
    }

    a {
      color: inherit;
      text-decoration: inherit
    }

    svg,
    video {
      display: block;
      vertical-align: middle
    }

    video {
      max-width: 100%;
      height: auto
    }

    .bg-white {
      --bg-opacity: 1;
      background-color: #fff;
      background-color: rgba(255, 255, 255, var(--bg-opacity))
    }

    .bg-gray-100 {
      --bg-opacity: 1;
      background-color: #f7fafc;
      background-color: rgba(247, 250, 252, var(--bg-opacity))
    }

    .border-gray-200 {
      --border-opacity: 1;
      border-color: #edf2f7;
      border-color: rgba(237, 242, 247, var(--border-opacity))
    }

    .border-t {
      border-top-width: 1px
    }

    .flex {
      display: flex
    }

    .grid {
      display: grid
    }

    .hidden {
      display: none
    }

    .items-center {
      align-items: center
    }

    .justify-center {
      justify-content: center
    }

    .font-semibold {
      font-weight: 600
    }

    .h-5 {
      height: 1.25rem
    }

    .h-8 {
      height: 2rem
    }

    .h-16 {
      height: 4rem
    }

    .text-sm {
      font-size: .875rem
    }

    .text-lg {
      font-size: 1.125rem
    }

    .leading-7 {
      line-height: 1.75rem
    }

    .mx-auto {
      margin-left: auto;
      margin-right: auto
    }

    .ml-1 {
      margin-left: .25rem
    }

    .mt-2 {
      margin-top: .5rem
    }

    .mr-2 {
      margin-right: .5rem
    }

    .ml-2 {
      margin-left: .5rem
    }

    .mt-4 {
      margin-top: 1rem
    }

    .ml-4 {
      margin-left: 1rem
    }

    .mt-8 {
      margin-top: 2rem
    }

    .ml-12 {
      margin-left: 3rem
    }

    .-mt-px {
      margin-top: -1px
    }

    .max-w-6xl {
      max-width: 72rem
    }

    .min-h-screen {
      min-height: 100vh
    }

    .overflow-hidden {
      overflow: hidden
    }

    .p-6 {
      padding: 1.5rem
    }

    .py-4 {
      padding-top: 1rem;
      padding-bottom: 1rem
    }

    .px-6 {
      padding-left: 1.5rem;
      padding-right: 1.5rem
    }

    .pt-8 {
      padding-top: 2rem
    }

    .fixed {
      position: fixed
    }

    .relative {
      position: relative
    }

    .top-0 {
      top: 0
    }

    .right-0 {
      right: 0
    }

    .shadow {
      box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06)
    }

    .text-center {
      text-align: center
    }

    .text-gray-200 {
      --text-opacity: 1;
      color: #edf2f7;
      color: rgba(237, 242, 247, var(--text-opacity))
    }

    .text-gray-300 {
      --text-opacity: 1;
      color: #e2e8f0;
      color: rgba(226, 232, 240, var(--text-opacity))
    }

    .text-gray-400 {
      --text-opacity: 1;
      color: #cbd5e0;
      color: rgba(203, 213, 224, var(--text-opacity))
    }

    .text-gray-500 {
      --text-opacity: 1;
      color: #a0aec0;
      color: rgba(160, 174, 192, var(--text-opacity))
    }

    .text-gray-600 {
      --text-opacity: 1;
      color: #718096;
      color: rgba(113, 128, 150, var(--text-opacity))
    }

    .text-gray-700 {
      --text-opacity: 1;
      color: #4a5568;
      color: rgba(74, 85, 104, var(--text-opacity))
    }

    .text-gray-900 {
      --text-opacity: 1;
      color: #1a202c;
      color: rgba(26, 32, 44, var(--text-opacity))
    }

    .underline {
      text-decoration: underline
    }

    .antialiased {
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale
    }

    .w-5 {
      width: 1.25rem
    }

    .w-8 {
      width: 2rem
    }

    .w-auto {
      width: auto
    }

    .grid-cols-1 {
      grid-template-columns: repeat(1, minmax(0, 1fr))
    }

    @media (min-width:640px) {
      .sm\:rounded-lg {
        border-radius: .5rem
      }

      .sm\:block {
        display: block
      }

      .sm\:items-center {
        align-items: center
      }

      .sm\:justify-start {
        justify-content: flex-start
      }

      .sm\:justify-between {
        justify-content: space-between
      }

      .sm\:h-20 {
        height: 5rem
      }

      .sm\:ml-0 {
        margin-left: 0
      }

      .sm\:px-6 {
        padding-left: 1.5rem;
        padding-right: 1.5rem
      }

      .sm\:pt-0 {
        padding-top: 0
      }

      .sm\:text-left {
        text-align: left
      }

      .sm\:text-right {
        text-align: right
      }
    }

    @media (min-width:768px) {
      .md\:border-t-0 {
        border-top-width: 0
      }

      .md\:border-l {
        border-left-width: 1px
      }

      .md\:grid-cols-2 {
        grid-template-columns: repeat(2, minmax(0, 1fr))
      }
    }

    @media (min-width:1024px) {
      .lg\:px-8 {
        padding-left: 2rem;
        padding-right: 2rem
      }
    }

    @media (prefers-color-scheme:dark) {
      .dark\:bg-gray-800 {
        --bg-opacity: 1;
        background-color: #2d3748;
        background-color: rgba(45, 55, 72, var(--bg-opacity))
      }

      .dark\:bg-gray-900 {
        --bg-opacity: 1;
        background-color: #1a202c;
        background-color: rgba(26, 32, 44, var(--bg-opacity))
      }

      .dark\:border-gray-700 {
        --border-opacity: 1;
        border-color: #4a5568;
        border-color: rgba(74, 85, 104, var(--border-opacity))
      }

      .dark\:text-white {
        --text-opacity: 1;
        color: #fff;
        color: rgba(255, 255, 255, var(--text-opacity))
      }

      .dark\:text-gray-400 {
        --text-opacity: 1;
        color: #cbd5e0;
        color: rgba(203, 213, 224, var(--text-opacity))
      }

      .dark\:text-gray-500 {
        --tw-text-opacity: 1;
        color: #6b7280;
        color: rgba(107, 114, 128, var(--tw-text-opacity))
      }
    }
  </style>

  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f2f2f2;
    }

    .nav {

      background-color: #444;
      padding: 5px;
      text-align: center;
      position: fixed;
      width: 100%;
      top: 0;
      left: 0;
      z-index: 1000;
    }

    .center {
      font-style: italic;
      text-align: center;
      color: white;
      margin-top: -25px;
      margin-bottom: -15px;
      font-size: 20px;
      width: 100%;
    }


    input {
      padding: 5px;
      margin-right: 10px;
      border-radius: 15px;

    }

    form {
      margin-top: 50px;
      /* Отступ для предотвращения перекрытия контента формы */
    }

    input {
      padding: 5px;
      margin-right: 10px;
      border-radius: 15px;
    }

    .tour-container {
      margin-top: 50px;
      width: 100%;
      display: flex;
      flex-direction: column;
      align-items: center;
      padding: 20px;
    }


    .tour {
      width: 70%;
      margin: 10px;
      background-color: white;
      text-align: center;
      justify-content: center;
      border-radius: 25px;
      padding: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      box-sizing: border-box;

    }

    .tour img {
      width: 90%;
      height: 250px;
      border-radius: 20px;
      position: relative;
      display: block;
      margin-left: auto;
      margin-top: auto;
      margin-right: auto;
    }

    .tour h3 {
      margin-top: 10px;
    }

    .tour button {
      background-color: #4caf50;
      color: white;
      padding: 5px 10px;
      border: none;
      border-radius: 3px;
      cursor: pointer;
    }

    .container-select {
      display: flex;
      justify-content: center;
      align-items: center;
    }

    section {
      display: flex;
      flex-direction: column;
      align-items: center;

    }
    .select-wrapper {
      position: fixed;
      top: 70px;

    }

    .container {
      display: flex;
      justify-content: space-around;
      flex-wrap: wrap;
    }

    .custom-select {
      width: 150px;
      padding: 10px;
      font-size: 16px;
      top: 50px;
      margin-top: 10px;
      border: 1px solid #ccc;
      border-radius: 50px;
      background-color: #fff;
      margin-left: -350px;
    }

    .h3 {
      text-align: center;
      margin-top: -50px;
    }

    .button-container {
      margin-bottom: 20px;
      text-align: right;
      margin-top: 20px;
      margin-right: 30px;
    }

    .cancel-btn {
      display: inline-block;
      padding: 10px 20px;
      text-decoration: none;
      background-color: #ccc;
      color: #000;
      border: 1px solid #999;
      border-radius: 50px;

    }

    .cancel-btn:hover {
      background-color: #999;
    }

    .log-in-btn {
      margin-right: -100px;
      border-radius: 50px;
      padding: 5px;
      margin-left: 1%;
      font-size: 15px;
    }
    .log-in-btn:hover{
      background-color: #a8bd4a;
    }
  </style>

</head>

<body class="antialiased">

  <div
    class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    @if (Route::has('login'))
    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
      @auth
      <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
      @else
      <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

      @if (Route::has('register'))
      <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
      @endif
      @endauth
    </div>
    @endif


    @foreach($errors->all() as $error)
    <div class="alert alert-danger" role="alert">
      {{$error}}
    </div>
    @endforeach


    <div class="container-select">
      <section>
        <form action="{{route('welcome.showtours')}}" method="get">
          @csrf
          <nav>
            <div class="select-wrapper">
              <select type="text" class="custom-select" name="category_name">
                @foreach($categories as $category)
                <option type="text" value="{{ $category->name }}">{{ $category->name }}</option>
                @endforeach
              </select>
              <input type="submit" name="selectbtn" value="Перейти">
            </div>
          </nav>
        </form>
      </section>
    </div>



    <form action="{{ route('welcome.store') }}" method="post">

      @csrf
      <nav class="nav">
        <header class="center">
          <p>Тур агентство</p>
        </header>

        <input type="text" name="tour_name" placeholder="Назва туру">
        <input type="text" name="price" placeholder="Ціна туру">
        <input type="number" name="days" placeholder="Кількість днів">
        <input type="text" name="phone_number" placeholder="Номер телефону">
        <input type="email" name="email" placeholder="Email">
        <input type="text" name="fullname" placeholder="Повне ім'я">
        <input type="submit" name="tourbtn" value="Додати">
        <button class="log-in-btn">
          <a href="{{ route('login') }}">Log in</a>
        </button>


      </nav>
    </form>


    <div class="container">

      <div class="tour-container">
        @foreach($tours as $tour)
        <div class="tour">
          <img src="{{ asset('/storage/' . $tour->image) }}" alt="{{ $tour->name }}">
          <h3>Назва: {{ $tour->name }}</h3>
          <p>Опис: {{ Str::limit($tour->description, 30, '...') }}</p>
          <p>Тривалість: {{ $tour->days }} днів</p>
          <p>Ціна: {{ $tour->price }}$</p>
          <button onclick="location.href='{{ route('welcome.show', $tour->id) }}'"
          type="button">Детальніше</button>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</body>


<footer>
  <div class="button-container"><a class="cancel-btn" href="{{route('welcome.create')}}">Додати пост</a></div>
  <h3 class="h3">Пости</h3>
  <div class="tour-container">
    @foreach($posts as $post)
    <div class="tour">
      <p>{{$post->name}}</p>
      <p>{{$post->description}}</p>
    </div>
    @endforeach
  </div>
</footer>

</html>