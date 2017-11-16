<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">PLYFOOD Restaurant</a>

    </div>
    
  <ul class="nav navbar-nav navbar-right">
   <li>
 <?php if ($this->session->userdata('id') == TRUE) :?>
<h4 style="color:white;"><?= anchor('Clogin/logout','Logout'); ?></h4>
 <?php else: ?>
        <h4 style="color:white;"><?= anchor('Clogin','Login'); ?></h4>
        <?php endif; ?>
        </li>
        
      </ul>
    
  </div>
</nav>