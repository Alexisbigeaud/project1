@section("header")
  <div class="cover">
    <img src="/img/LaravelLogo.jpg"/>
  </div>
  <div class="navigation">
    <a class="{{ Request::is('exercise4/connect') ? 'active' : '' }}"
      href="/exercise4/connect">Connect</a>
    <a class="{{ Request::is('exercise4/create') ? 'active' : '' }}"
      href="/exercise4/create">Create</a>
    <a class="{{ Request::is('exercise4/contact') ? 'active' : '' }}"
      href="/exercise4/contact">Contact</a>
  </div>
@show

