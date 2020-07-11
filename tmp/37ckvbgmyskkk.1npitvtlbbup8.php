<div id="wrapper">
        <div class="sidebar" data-color="purple" data-background-color="white" data-image="https://images.unsplash.com/photo-1513569771920-c9e1d31714af?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80">
            <div class="logo">
              <a class="simple-text logo-normal"  href="/home">
                <img class="img" src="/asset/img/logologo.png" width="150px;" />
              </a>
              <div class="card card-profile pt-5" style="margin-bottom:0px;background-color: transparent;box-shadow: none" >
               <div class="card-avatar">
                        <a href="#godknowspanel">
                          <img class="img" src="https://www.phcorner.net/styles/default/phcorner/logo/logo.og.png" />
                        </a>
                </div>
                <a href="#!" class="simple-text logo-normal">
                  <h3><b><?php echo $me->username; ?></b></h3>
              </a>
              </div>
              
            </div>
            <div class="sidebar-wrapper">
              <ul class="nav">
                <?php if ($me->type==1): ?>
                              
                                  <li class="nav-item">
                                      <a class="nav-link" href="/home/admin/server">
                                        <i class="material-icons">vpn_lock</i>
                                        <p>Server</p>
                                      </a>
                                  </li>
                                  <li class="nav-item">
                                      <a class="nav-link" href="/home/admin/seller">
                                        <i class="material-icons">people_outline</i>
                                        <p>Seller</p>
                                      </a>
                                  </li>
                              
                              <?php else: ?>
                                  <li class="nav-item">
                                      <a id="ssh" class="nav-link" href="/home/member/server">
                                        <i class="material-icons">vpn_lock</i>
                                        <p>Create SSH Account</p>
                                      </a>
                                  </li>
                              
                          <?php endif; ?>
                <li class="nav-item ">
                  <a class="nav-link" href="https://phcorner.net/forums">
                    <i class="material-icons">flag</i>
                    <p>PHCorner</p>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="/home/about">
                    <i class="material-icons">description</i>
                    <p>About</p>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="/logout">
                    <i class="material-icons">power_settings_new</i>
                    <p>Logout</p>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          
    <div class="main-panel">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
            <div class="container-fluid">
              <div class="navbar-wrapper">
              </div>
              <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="sr-only">Toggle navigation</span>
                <span class="navbar-toggler-icon icon-bar"></span>
                <span class="navbar-toggler-icon icon-bar"></span>
                <span class="navbar-toggler-icon icon-bar"></span>
              </button>
              
            </div>
          </nav>    
    <?php echo $this->render($subcontent,$this->mime,get_defined_vars()); ?>

    <footer class="footer">
        <div class="container-fluid">
          <nav class="float-left">
            <ul>
              <li>
                <a href="https://www.facebook.com/GodKnowsJhomz">
                  Godknows Jhomz
                </a>
              </li>
              <li>
                <a href="https://www.facebook.com/Csearfarf">
                  Csearfarf
                </a>
              </li>
              <li>
                <a href="https://www.facebook.com/WRRN.DVYRA">
                  DVYRA
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright float-right">
            &copy;
            <script>
              document.write(new Date().getFullYear())
            </script>, created with <i class="material-icons">favorite</i> by
            <a href="https://www.facebook.com/GodKnows-SSH-Panel-609440522819123/" target="_blank">Team PAYAMANN</a>
          </div>
        </div>
    </footer>
    </div>
</div>


