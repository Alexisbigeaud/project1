@section("header")
  <div class="cover">
    <img src="../img/logo.PNG"/>
  </div>
  <div class="navigation">
    <a class="{{ Request::is('exercise4/connect') ? 'active' : '' }}"
      href="/exercise4/connect">Students informations</a>
    <a class="{{ Request::is('exercise4/create') ? 'active' : '' }}"
      href="/posts">Gallery of our school</a>
    <a class="{{ Request::is('exercise4/contact') ? 'active' : '' }}"
      href="/exercise4/contact">Contact</a>

    <a class="{{ Request::is('exercise4/crud') ? 'active' : '' }}"
    href="/students">Student management</a>

 
      
  </div>
@show

