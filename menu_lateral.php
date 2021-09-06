<aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li>
                            <!-- User Profile-->
                            <div class="user-profile d-flex no-block dropdown mt-3">
                                <div class="user-pic"><img src="assets/images/users/1.jpg" alt="users" class="rounded-circle" width="40" /></div>
                                <div class="user-content hide-menu ml-2">
                                    <a href="javascript:void(0)" class="" id="Userdd" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <h5 class="mb-0 user-name font-medium"><?php print $my_nome ?> <i class="fa fa-angle-down"></i></h5>
                                        <span class="op-5 user-email"><?php print $my_username ?></span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="Userdd">
                                        <a class="dropdown-item" href="perfil.php"><i class="ti-user mr-1 ml-1"></i> Meu Perfil</a>
                                        <a class="dropdown-item" href="central_financeira.php"><i class="ti-wallet mr-1 ml-1"></i> Central Financeira</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="logout.php"><i class="fa fa-power-off mr-1 ml-1"></i> Sair</a>
                                    </div>
                                </div>
                            </div>
                            <!-- End User Profile-->
                        </li>
                        
                        <!-- User Profile-->
                        
                        
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-blur"></i><span class="hide-menu">Financeiro </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="central_financeira.php" class="sidebar-link"><i class="mdi mdi-format-line-style"></i><span class="hide-menu"> Central Financeira </span></a></li>
                                <li class="sidebar-item"><a href="saque.php" class="sidebar-link"><i class="mdi mdi-clock-alert"></i><span class="hide-menu"> Saques </span></a></li>
                                <li class="sidebar-item"><a href="meus_pacotes.php" class="sidebar-link"><i class="mdi mdi-view-grid"></i><span class="hide-menu"> Investimentos </span></a></li>
                                
                                <li class="sidebar-item"><a href="#" class="sidebar-link"><i class="mdi mdi-view-module"></i><span class="hide-menu"> Premium - Block </span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-hexagon-multiple"></i><span class="hide-menu">Minha Rede </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="indicacao_direta.php" class="sidebar-link"><i class="mdi mdi-account-plus"></i><span class="hide-menu"> Indicados Diretos <span class="label label-danger float-right">New</span> </span></a></li>
                                <li class="sidebar-item"><a href="minhas_geracoes.php" class="sidebar-link"><i class="mdi mdi-account-multiple-plus"></i><span class="hide-menu"> Minhas Gerações <span class="label label-danger float-right">New</span> </span></a></li>
                               <li class="sidebar-item"><a href="#" class="sidebar-link"><i class="mdi mdi-format-float-right"></i><span class="hide-menu"> Rede Exterior Block </span></a></li>
                                
                            </ul>
                        </li>
                        
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fab fa-maxcdn"></i><span class="hide-menu">Mercado Pago </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="mercado_pago_saldo_atividade_financeiras.php?pag=criptografado" class="sidebar-link"><i class="mdi mdi-format-list-bulleted-type"></i><span class="hide-menu"> Saldo & Extrato </span></a></li>
                                <li class="sidebar-item"><a href="mercado_pago_enviar_dinheiro.php?pag=criptografado" class="sidebar-link"><i class="fas fa-dollar-sign"></i><span class="hide-menu"> Enviar Dinheiro </span></a></li>
                                <li class="sidebar-item"><a href="mercado_pago_recarregar_celular.php?pag=criptografado" class="sidebar-link"><i class="fas fa-mobile-alt"></i><span class="hide-menu"> Recarregar Celular </span></a></li>
								<li class="sidebar-item"><a href="mercado_pago_vale-transportes.php?pag=criptografado" class="sidebar-link"><i class="fas fa-train"></i><span class="hide-menu"> Recarregar Vale Transporte </span></a></li>
								<li class="sidebar-item"><a href="mercado_pago_pagar_conta.php?pag=criptografado" class="sidebar-link"><i class="mdi mdi-barcode-scan"></i><span class="hide-menu"> Pagar Boletos </span></a></li>
								 <li class="sidebar-item"><a href="mercado_pago.php?pag=criptografado" class="sidebar-link"><i class="fas fa-credit-card"></i><span class="hide-menu"> Pedir Meu Cartão  </span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-wallet"></i><span class="hide-menu">Comprar P/ Investimento </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="pacotes.php" class="sidebar-link"><i class="mdi mdi-square-inc-cash"></i><span class="hide-menu"> Até 50 MIl </span></a></li>
                                <li class="sidebar-item"><a href="#" class="sidebar-link"><i class="mdi mdi-language-swift"></i><span class="hide-menu"> +  50 Mil </span></a></li>
                            </ul>
                        </li>
                        
                        
                       
                        
                        
                        
                        <li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i> <span class="hide-menu">Configurações</span></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="perfil.php" aria-expanded="false"><i class="mdi mdi-account-card-details"></i><span class="hide-menu">Meu Perfil</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="logout.php" aria-expanded="false"><i class="mdi mdi-directions"></i><span class="hide-menu">Sair</span></a></li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>