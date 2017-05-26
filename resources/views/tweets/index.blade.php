<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/stylesheets/tweets.css') }}">
    <title>ねこったー</title>
  </head>
  <body>
    <header>
      <h1>ねこったー</h1>
    </header>
    <div class="contents">
      @foreach ($tweets as $tweet)
      <div class="message clearfix">
        <img src="{{ asset('assets/images/cat1.png') }}">
        <div class="message_box">
          <p class="user_name">
            野良猫1号
          </p>
          <p class="text">
            {{$tweet->text}}
          </p>
      </div>
    </div>
    @endforeach
    </div>
  </body>
</html>
