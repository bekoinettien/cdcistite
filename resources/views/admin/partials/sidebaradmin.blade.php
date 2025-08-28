<aside class="app-sidebar  shadow" data-bs-theme="dark" style="background-color: rgb(9, 9, 88)">
        <!--begin::Sidebar Brand-->
        <div class="sidebar-brand">
          <!--begin::Brand Link-->
          <a href="./index.html" class="brand-link">
            <!--begin::Brand Image-->
            <img
              src="{{ asset('images/logo1.png') }}"
              alt="AdminLTE Logo"
              class="brand-image opacity-75 shadow"
            />
            <!--end::Brand Image-->
            <!--begin::Brand Text-->
            <span class="brand-text fw-light">CDCI</span>
            <!--end::Brand Text-->
          </a>
          <!--end::Brand Link-->
        </div>
        <!--end::Sidebar Brand-->
        <!--begin::Sidebar Wrapper-->
        <div class="sidebar-wrapper">
          <nav class="mt-2">
            <!--begin::Sidebar Menu-->
            <ul
              class="nav sidebar-menu flex-column"
              data-lte-toggle="treeview"
              role="menu"
              data-accordion="false"
            >
              <li class="nav-item menu-open">
                <a href="#" class="nav-link active">
                  <i class="nav-icon bi bi-speedometer"></i>
                  <p>
                    Tableau de bord
                    <i class="nav-arrow bi bi-chevron-right"></i>
                  </p>
                </a>
                
              </li>
              <li class="nav-header">Gestion des Pages</li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon bi bi-box-arrow-in-right"></i>
                  <p>
                    Accueil
                    <i class="nav-arrow bi bi-chevron-right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="/accueil" class="nav-link">
                          <i class='fa fa-code'></i>
                          <p>Ajouter un slide Accueil</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="/listeadminaccueil" class="nav-link">
                          <i class='fa fa-book'></i>
                          <p>Liste des Slides</p>
                        </a>
                      </li>

                      <li class="nav-item">
                        <a href="/listepromotions" class="nav-link">
                          <i class='fa fa-bullhorn'></i>
                          <p>Ajouter une promotion</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="/listeadminpromotions" class="nav-link">
                         <i class='fa fa-feed'></i>
                          <p>Liste des Promotions</p>
                        </a>
                      </li>

                      <li class="nav-item">
                        <a href="/listeactivites" class="nav-link">
                          <i class='fa fa-file-text'></i>
                          <p>Ajouter une activités</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="/listeadminactivites" class="nav-link">
                         <i class='fa fa-bell'></i>
                          <p>Liste des Activités</p>
                        </a>
                      </li>
                    
                  </li>
                </ul>
              </li>
              <hr style="border: 1px solid white; margin: 10px 0;">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon bi bi-box-arrow-in-right"></i>
                  <p>
                    About
                    <i class="nav-arrow bi bi-chevron-right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="/listeabout" class="nav-link">
                          <i class='fa fa-code'></i>
                          <p>Ajouter un slide About</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="/listeadminabout" class="nav-link">
                          <i class='fa fa-book'></i>
                          <p>Liste des Slides</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="/listeaboutsection" class="nav-link">
                          <i class='fa fa-book'></i>
                          <p>Ajouter une Section</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="/listeadminaboutsection" class="nav-link">
                          <i class='fa fa-book'></i>
                          <p>Liste des Sections</p>
                        </a>
                      </li>
                  </li>
                </ul>
              </li>

              <hr style="border: 1px solid white; margin: 10px 0;">

              <li class="nav-header">Gestion des sites</li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon bi bi-box-seam-fill"></i>
                  <p>
                    Site de Gros
                    <i class="nav-arrow bi bi-chevron-right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ route('listeadmingros') }}" class="nav-link">
                      <p>Liste des gros</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="/gros" class="nav-link">
                      <p>Ajouter un site Gros</p>
                    </a>
                  </li>
                  
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon bi bi-clipboard-fill"></i>
                  <p>
                    Site de Demi Gros
                    <span class="nav-badge badge text-bg-secondary me-3"></span>
                    <i class="nav-arrow bi bi-chevron-right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ route('listeadmindemi') }}" class="nav-link">
                      <p>Liste des Demi Gros</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="/demi" class="nav-link">
                      <p>Ajouter un site Demi Gros</p>
                    </a>
                  </li>
                  </li>
                  
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon bi bi-table"></i>
                  <p>
                    Site de King Cash
                    <i class="nav-arrow bi bi-chevron-right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ route('listeadminking') }}" class="nav-link">
                      <p>Liste des King Cash</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="/king" class="nav-link">
                      <p>Ajouter une site King Cash</p>
                    </a>
                  </li>
                </ul>
              </li>
              <hr style="border: 1px solid white; margin: 10px 0;">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon bi bi-table"></i>
                  <p>
                    Nos Actualités
                    <i class="nav-arrow bi bi-chevron-right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="/listeadminactualite" class="nav-link">
                      <p>Liste des Actualités</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="/actualite" class="nav-link">
                      <p>Ajouter une Actualité</p>
                    </a>
                  </li>
                </ul>
              </li>

              <li class="nav-header">Utilisateurs</li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon bi bi-box-arrow-in-right"></i>
                  <p>
                    Auth
                    <i class="nav-arrow bi bi-chevron-right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">

                      <li class="nav-item">
                        <a href="/login" class="nav-link">
                          <i class='fa fa-users'></i>
                          <p>Login</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="/users" class="nav-link">
                          <i class='fa fa-user-plus'></i>
                          <p>Register</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="/listeuser" class="nav-link">
                          <i class='fa fa-user-plus'></i>
                          <p>Liste des Utilisateurs</p>
                        </a>
                      </li>
                  </li>
                </ul>
              </li>
              
              
            </ul>
            <!--end::Sidebar Menu-->
          </nav>
        </div>
        <!--end::Sidebar Wrapper-->
      </aside>