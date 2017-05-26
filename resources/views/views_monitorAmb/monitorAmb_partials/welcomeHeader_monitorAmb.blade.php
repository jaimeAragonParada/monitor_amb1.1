<nav class="navbar navbar-default navBarHeader" >
<div class="container-fluid">
  <div class="navbar-header divLogo">    
    <img alt="" class="navbar-brand imgLogo" src="{{asset('images/logo.png')}}">
  </div>
  <div class="divForm">
    <form id="signin" class="navbar-form loginForm" role="form">
        <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input id="email" type="email" class="form-control" name="email" value="" placeholder="Email Address">                                        
        </div>

        <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
            <input id="password" type="password" class="form-control" name="password" value="" placeholder="Password">                                        
        </div>

        <button type="submit" class="btn btn-primary btnLoginP">Login</button>
        <button type="submit" class="btn btn-secundary btnLoginS">Registrarse</button>
    </form>
  </div>
</div>
</nav>

