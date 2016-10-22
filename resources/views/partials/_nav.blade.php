<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">eR</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="{{Request::is('/') ? "active" : "" }}"><a href="#">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a class="" href="">About</a></li>
          <li><a href="#">Page 1-2</a></li>
          <li><a href="#">Page 1-3</a></li>
        </ul>
      </li>
      <li><a href="{{Request::is('/') ? "active" : "" }}">About</a></li>
    </ul>
     
  </div>
</nav>