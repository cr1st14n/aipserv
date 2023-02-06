<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels" />
    <meta name="twitter:creator" content="@themepixels" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Bracket" />
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard." />
    <meta name="twitter:image" content="http://themepixels.me/bracket/img/bracket-social.png" />

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/bracket" />
    <meta property="og:title" content="Bracket" />
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard." />

    <meta property="og:image" content="http://themepixels.me/bracket/img/bracket-social.png" />
    <meta property="og:image:secure_url" content="http://themepixels.me/bracket/img/bracket-social.png" />
    <meta property="og:image:type" content="image/png" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="600" />

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard." />
    <meta name="author" content="ThemePixels" />

    <title>NAABOL | PUBLICACIÓN DE INFORMACIÓN AERONAUTICA</title>

    <!-- vendor css -->
    <link href="{{ asset('resources/template/lib/font-awesome/css/font-awesome.css') }}" rel="stylesheet" />
    <link href="{{ asset('resources/template/lib/Ionicons/css/ionicons.css') }}" rel="stylesheet" />
    <link href="{{ asset('resources/template/lib/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
    <link href="{{ asset('resources/template/lib/jquery-switchbutton/jquery.switchButton.css') }}" rel="stylesheet" />

    <!-- Bracket CSS -->
    <link rel="stylesheet" href="{{ asset('resources/template/css/bracket.css') }}" />
    <link href="{{ asset('resources/template/lib/SpinKit/spinkit.css') }}" rel="stylesheet" />
</head>

<body>
    <!-- ########## START: LEFT PANEL ########## -->
    <div class="br-logo">
        <a href=""><span>[</span>NAABOL<span>]</span></a>
    </div>
    <div class="br-sideleft overflow-y-auto">
        <label class="sidebar-label pd-x-15 mg-t-20">Navigation</label>
        <div class="br-sideleft-menu">
            @if (Auth::User()->usu_tipoCuenta != 'cliente')
                <a onclick="view_home_user()" href="#" class="br-menu-link">
                    <div class="br-menu-item">
                        <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
                        <span class="menu-item-label">Administrar</span>
                    </div>
                    <!-- menu-item -->
                </a><!-- br-menu-link -->
            @endif
            <a onclick="funAct(1)" href="#" class="br-menu-link">
                <div class="br-menu-item">
                    <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
                    <span class="menu-item-label">Portada AIP</span>
                </div>
                <!-- menu-item -->
            </a><!-- br-menu-link -->
            <a href="#" class="br-menu-link">
                <div class="br-menu-item">
                    <i class="menu-item-icon icon ion-ios-filing-outline tx-24"></i>
                    <span class="menu-item-label">Generalidades</span>
                    <i class="menu-item-arrow fa fa-angle-down"></i>
                </div>
                <!-- menu-item -->
            </a><!-- br-menu-link -->
            <ul class="br-menu-sub nav flex-column">
                <li class="nav-item">
                    <a onclick="funAct(10)" href="#" class="nav-link">Gen 0</a>
                </li>
                <li class="nav-item">
                    <a onclick="funAct(11)" href="#" class="nav-link">Gen 1</a>
                </li>
                <li class="nav-item">
                    <a onclick="funAct(12)" href="#" class="nav-link">Gen 2</a>
                </li>
                <li class="nav-item">
                    <a onclick="funAct(13)" href="#" class="nav-link">Gen 3</a>
                </li>
                <li class="nav-item">
                    <a onclick="funAct(14)" href="#" class="nav-link">Gen 4</a>
                </li>
            </ul>
            <a href="#" class="br-menu-link">
                <div class="br-menu-item">
                    <i class="menu-item-icon icon ion-ios-filing-outline tx-24"></i>
                    <span class="menu-item-label">En Ruta</span>
                    <i class="menu-item-arrow fa fa-angle-down"></i>
                </div>
                <!-- menu-item -->
            </a><!-- br-menu-link -->
            <ul class="br-menu-sub nav flex-column">
                <li class="nav-item">
                    <a onclick="funAct(20)" href="#" class="nav-link">Enr 0</a>
                </li>
                <li class="nav-item">
                    <a onclick="funAct(21)" href="#" class="nav-link">Enr 1</a>
                </li>
                <li class="nav-item">
                    <a onclick="funAct(22)" href="#" class="nav-link">Enr 2</a>
                </li>
                <li class="nav-item">
                    <a onclick="funAct(23)" href="#" class="nav-link">Enr 3</a>
                </li>
                <li class="nav-item">
                    <a onclick="funAct(24)" href="#" class="nav-link">Enr 4</a>
                </li>
                <li class="nav-item">
                    <a onclick="funAct(25)" href="#" class="nav-link">Enr 5</a>
                </li>
                <li class="nav-item">
                    <a onclick="funAct(26)" href="#" class="nav-link">Enr 6</a>
                </li>
            </ul>
            <a href="#" class="br-menu-link">
                <div class="br-menu-item">
                    <i class="menu-item-icon ion-ios-redo-outline tx-24"></i>
                    <span class="menu-item-label">Aerodromos</span>
                    <i class="menu-item-arrow fa fa-angle-down"></i>
                </div>
                <!-- menu-item -->
            </a><!-- br-menu-link -->
            <ul class="br-menu-sub nav flex-column">
                <li class="nav-item">
                    <a onclick="funAct(30)" href="#" class="nav-link">Ad 0</a>
                </li>
                <li class="nav-item">
                    <a onclick="funAct(31)" href="#" class="nav-link">Ad 1</a>
                </li>
            </ul>
            <a href="#" class="br-menu-link">
                <div class="br-menu-item">
                    <i class="menu-item-icon ion-ios-redo-outline tx-24"></i>
                    <span class="menu-item-label">AD 2 INTL</span>
                    <i class="menu-item-arrow fa fa-angle-down"></i>
                </div>
                <!-- menu-item -->
            </a><!-- br-menu-link -->
            <ul class="br-menu-sub nav flex-column">
                <li class="nav-item">
                    <a onclick="funAct(33)" href="#" class="nav-link">SLCB</a>
                </li>
                <li class="nav-item">
                    <a onclick="funAct(34)" href="#" class="nav-link">SLLP</a>
                </li>
                <li class="nav-item">
                    <a onclick="funAct(35)" href="#" class="nav-link">SLVR</a>
                </li>
            </ul>
            <a href="#" class="br-menu-link">
                <div class="br-menu-item">
                    <i class="menu-item-icon ion-ios-redo-outline tx-24"></i>
                    <span class="menu-item-label">AD 2 NTL</span>
                    <i class="menu-item-arrow fa fa-angle-down"></i>
                </div>
                <!-- menu-item -->
            </a><!-- br-menu-link -->
            <ul class="br-menu-sub nav flex-column">
                <li class="nav-item">
                    <a onclick="funAct('SLAG')" href="#" class="nav-link">SLAG</a>
                </li>
                <li class="nav-item">
                    <a onclick="funAct('SLAL')" href="#" class="nav-link">SLAL</a>
                </li>
                <li class="nav-item">
                    <a onclick="funAct('SLAP')" href="#" class="nav-link">SLAP</a>
                </li>
                <li class="nav-item">
                    <a onclick="funAct('SLAS')" href="#" class="nav-link">SLAS</a>
                </li>
                <li class="nav-item">
                    <a onclick="funAct('SLBJ')" href="#" class="nav-link">SLBJ</a>
                </li>
                <li class="nav-item">
                    <a onclick="funAct('SLCA')" href="#" class="nav-link">SLCA</a>
                </li>
                <li class="nav-item">
                    <a onclick="funAct('SLCC')" href="#" class="nav-link">SLCC</a>
                </li>
                <li class="nav-item">
                    <a onclick="funAct('SLCO')" href="#" class="nav-link">SLCO</a>
                </li>
                <li class="nav-item">
                    <a onclick="funAct('SLCP')" href="#" class="nav-link">SLCP</a>
                </li>
                <li class="nav-item">
                    <a onclick="funAct('SLET')" href="#" class="nav-link">SLET</a>
                </li>
                <li class="nav-item">
                    <a onclick="funAct('SLGM')" href="#" class="nav-link">SLGM</a>
                </li>
                <li class="nav-item">
                    <a onclick="funAct('SLHI')" href="#" class="nav-link">SLHI</a>
                </li>
                <li class="nav-item">
                    <a onclick="funAct('SLJE')" href="#" class="nav-link">SLJE</a>
                </li>
                <li class="nav-item">
                    <a onclick="funAct('SLJO')" href="#" class="nav-link">SLJO</a>
                </li>
                <li class="nav-item">
                    <a onclick="funAct('SLJV')" href="#" class="nav-link">SLJV</a>
                </li>
                <li class="nav-item">
                    <a onclick="funAct('SLMG')" href="#" class="nav-link">SLMG</a>
                </li>
                <li class="nav-item">
                    <a onclick="funAct('SLOR')" href="#" class="nav-link">SLOR</a>
                </li>
                <li class="nav-item">
                    <a onclick="funAct('SLPO')" href="#" class="nav-link">SLPO</a>
                </li>
                <li class="nav-item">
                    <a onclick="funAct('SLPS')" href="#" class="nav-link">SLPS</a>
                </li>
                <li class="nav-item">
                    <a onclick="funAct('SLRA')" href="#" class="nav-link">SLRA</a>
                </li>
                <li class="nav-item">
                    <a onclick="funAct('SLRB')" href="#" class="nav-link">SLRB</a>
                </li>
                <li class="nav-item">
                    <a onclick="funAct('SLRI')" href="#" class="nav-link">SLRI</a>
                </li>
                <li class="nav-item">
                    <a onclick="funAct('SLRQ')" href="#" class="nav-link">SLRQ</a>
                </li>
                <li class="nav-item">
                    <a onclick="funAct('SLRY')" href="#" class="nav-link">SLRY</a>
                </li>
                <li class="nav-item">
                    <a onclick="funAct('SLSA')" href="#" class="nav-link">SLSA</a>
                </li>
                <li class="nav-item">
                    <a onclick="funAct('SLSB')" href="#" class="nav-link">SLSB</a>
                </li>
                <li class="nav-item">
                    <a onclick="funAct('SLSI')" href="#" class="nav-link">SLSI</a>
                </li>
                <li class="nav-item">
                    <a onclick="funAct('SLSM')" href="#" class="nav-link">SLSM</a>
                </li>
                <li class="nav-item">
                    <a onclick="funAct('SLSR')" href="#" class="nav-link">SLSR</a>
                </li>
                <li class="nav-item">
                    <a onclick="funAct('SLSV')" href="#" class="nav-link">SLSV</a>
                </li>
                <li class="nav-item">
                    <a onclick="funAct('SLTI')" href="#" class="nav-link">SLTI</a>
                </li>
                <li class="nav-item">
                    <a onclick="funAct('SLTJ')" href="#" class="nav-link">SLTJ</a>
                </li>
                <li class="nav-item">
                    <a onclick="funAct('SLTR')" href="#" class="nav-link">SLTR</a>
                </li>
                <li class="nav-item">
                    <a onclick="funAct('SLUY')" href="#" class="nav-link">SLUY</a>
                </li>
                <li class="nav-item">
                    <a onclick="funAct('SLVG')" href="#" class="nav-link">SLVG</a>
                </li>
                <li class="nav-item">
                    <a onclick="funAct('SLVM')" href="#" class="nav-link">SLVM</a>
                </li>
                <li class="nav-item">
                    <a onclick="funAct('SLYA')" href="#" class="nav-link">SLYA</a>
                </li>
            </ul>
            <a href="#" class="br-menu-link">
                <div class="br-menu-item">
                    <i class="menu-item-icon ion-ios-redo-outline tx-24"></i>
                    <span class="menu-item-label">Suplementos</span>
                    <i class="menu-item-arrow fa fa-angle-down"></i>
                </div>
                <!-- menu-item -->
            </a><!-- br-menu-link -->
            <ul class="br-menu-sub nav flex-column">
                <li class="nav-item">
                    <a onclick="funAct('SUP_A')" href="#" class="nav-link">SUP A</a>
                </li>
                <li class="nav-item">
                    <a onclick="funAct('SUP_C')" href="#" class="nav-link">SUP C</a>
                </li>
            </ul>
            <a onclick="funAct('AIC')" href="#" class="br-menu-link">
                <div class="br-menu-item">
                    <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
                    <span class="menu-item-label">AIC</span>
                </div>
                <!-- menu-item -->
            </a><!-- br-menu-link -->
        </div>
        <br />
    </div>
    <!-- br-sideleft -->
    <!-- ########## END: LEFT PANEL ########## -->

    <!-- ########## START: HEAD PANEL ########## -->
    <div class="br-header">
        <div class="br-header-left">
            <div class="navicon-left hidden-md-down">
                <a id="btnLeftMenu" href=""><i class="icon ion-navicon-round"></i></a>
            </div>
        </div>
        <!-- br-header-left -->
        <div class="br-header-right">
            <nav class="nav">

                <div class="dropdown">
                    <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
                        <span class="logged-name hidden-md-down">{{ Auth::User()->usu_nombre }}</span>
                        <img src="http://via.placeholder.com/64x64" class="wd-32 rounded-circle" alt="" />
                        <span class="square-10 bg-success"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-header wd-200">
                        <ul class="list-unstyled user-profile-nav">
                            <li>
                                <a href="#" id="btn_logout"><i class="icon ion-power"></i> Cerrar Sessión</a>
                            </li>
                        </ul>
                    </div>
                    <!-- dropdown-menu -->
                </div>
                <!-- dropdown -->
            </nav>

            <!-- navicon-right -->
        </div>
        <!-- br-header-right -->
    </div>
    <!-- br-header -->
    <!-- ########## END: HEAD PANEL ########## -->

    <!-- ########## START: RIGHT PANEL ########## -->
    <div class="br-sideright">
        <ul class="nav nav-tabs sidebar-tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" role="tab" href="#contacts"><i
                        class="icon ion-ios-contact-outline tx-24"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" role="tab" href="#attachments"><i
                        class="icon ion-ios-folder-outline tx-22"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" role="tab" href="#calendar"><i
                        class="icon ion-ios-calendar-outline tx-24"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" role="tab" href="#settings"><i
                        class="icon ion-ios-gear-outline tx-24"></i></a>
            </li>
        </ul>
        <!-- sidebar-tabs -->

        <!-- Tab panes -->
        <div class="tab-content">
            <div class="tab-pane pos-absolute a-0 mg-t-60 overflow-y-auto active" id="contacts" role="tabpanel">
                <label class="sidebar-label pd-x-25 mg-t-25">Online Contacts</label>
                <div class="contact-list pd-x-10">
                    <a href="" class="contact-list-link new">
                        <div class="d-flex">
                            <div class="pos-relative">
                                <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle"
                                    alt="" />
                                <div class="contact-status-indicator bg-success bd-br-primary"></div>
                            </div>
                            <div class="contact-person">
                                <p class="mg-b-0">Marilyn Tarter</p>
                                <span class="tx-12 op-5 d-inline-block">Clemson, CA</span>
                            </div>
                            <span class="tx-info tx-12"><span class="square-8 bg-info rounded-circle"></span> 1
                                new</span>
                        </div>
                        <!-- d-flex -->
                    </a><!-- contact-list-link -->
                    <a href="" class="contact-list-link">
                        <div class="d-flex">
                            <div class="pos-relative">
                                <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle"
                                    alt="" />
                                <div class="contact-status-indicator bg-success bd-br-primary"></div>
                            </div>
                            <div class="mg-l-10">
                                <p class="mg-b-0">Belinda Connor</p>
                                <span class="tx-12 op-5 d-inline-block">Fort Kent, ME</span>
                            </div>
                        </div>
                        <!-- d-flex -->
                    </a><!-- contact-list-link -->
                    <a href="" class="contact-list-link new">
                        <div class="d-flex">
                            <div class="pos-relative">
                                <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle"
                                    alt="" />
                                <div class="contact-status-indicator bg-success bd-br-primary"></div>
                            </div>
                            <div class="contact-person">
                                <p class="mg-b-0">Britanny Cevallos</p>
                                <span class="tx-12 op-5 d-inline-block">Shiboygan Falls, WI</span>
                            </div>
                            <span class="tx-info tx-12"><span class="square-8 bg-info rounded-circle"></span> 3
                                new</span>
                        </div>
                        <!-- d-flex -->
                    </a><!-- contact-list-link -->
                    <a href="" class="contact-list-link new">
                        <div class="d-flex">
                            <div class="pos-relative">
                                <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle"
                                    alt="" />
                                <div class="contact-status-indicator bg-success bd-br-primary"></div>
                            </div>
                            <div class="contact-person">
                                <p class="mg-b-0">Brandon Lawrence</p>
                                <span class="tx-12 op-5 d-inline-block">Snohomish, WA</span>
                            </div>
                            <span class="tx-info tx-12"><span class="square-8 bg-info rounded-circle"></span> 1
                                new</span>
                        </div>
                        <!-- d-flex -->
                    </a><!-- contact-list-link -->
                    <a href="" class="contact-list-link">
                        <div class="d-flex">
                            <div class="pos-relative">
                                <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle"
                                    alt="" />
                                <div class="contact-status-indicator bg-success bd-br-primary"></div>
                            </div>
                            <div class="contact-person">
                                <p class="mg-b-0">Andrew Wiggins</p>
                                <span class="tx-12 op-5 d-inline-block">Springfield, MA</span>
                            </div>
                        </div>
                        <!-- d-flex -->
                    </a><!-- contact-list-link -->
                    <a href="" class="contact-list-link">
                        <div class="d-flex">
                            <div class="pos-relative">
                                <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle"
                                    alt="" />
                                <div class="contact-status-indicator bg-success bd-br-primary"></div>
                            </div>
                            <div class="contact-person">
                                <p class="mg-b-0">Theodore Gristen</p>
                                <span class="tx-12 op-5 d-inline-block">Nashville, TN</span>
                            </div>
                        </div>
                        <!-- d-flex -->
                    </a><!-- contact-list-link -->
                    <a href="" class="contact-list-link">
                        <div class="d-flex">
                            <div class="pos-relative">
                                <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle"
                                    alt="" />
                                <div class="contact-status-indicator bg-success bd-br-primary"></div>
                            </div>
                            <div class="contact-person">
                                <p class="mg-b-0">Deborah Miner</p>
                                <span class="tx-12 op-5 d-inline-block">North Shore, CA</span>
                            </div>
                        </div>
                        <!-- d-flex -->
                    </a><!-- contact-list-link -->
                </div>
                <!-- contact-list -->

                <label class="sidebar-label pd-x-25 mg-t-25">Offline Contacts</label>
                <div class="contact-list pd-x-10">
                    <a href="" class="contact-list-link">
                        <div class="d-flex">
                            <div class="pos-relative">
                                <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle"
                                    alt="" />
                                <div class="contact-status-indicator bg-gray-500 bd-br-primary"></div>
                            </div>
                            <div class="contact-person">
                                <p class="mg-b-0">Marilyn Tarter</p>
                                <span class="tx-12 op-5 d-inline-block">Clemson, CA</span>
                            </div>
                        </div>
                        <!-- d-flex -->
                    </a><!-- contact-list-link -->
                    <a href="" class="contact-list-link">
                        <div class="d-flex">
                            <div class="pos-relative">
                                <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle"
                                    alt="" />
                                <div class="contact-status-indicator bg-gray-500 bd-br-primary"></div>
                            </div>
                            <div class="mg-l-10">
                                <p class="mg-b-0">Belinda Connor</p>
                                <span class="tx-12 op-5 d-inline-block">Fort Kent, ME</span>
                            </div>
                        </div>
                        <!-- d-flex -->
                    </a><!-- contact-list-link -->
                    <a href="" class="contact-list-link">
                        <div class="d-flex">
                            <div class="pos-relative">
                                <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle"
                                    alt="" />
                                <div class="contact-status-indicator bg-gray-500 bd-br-primary"></div>
                            </div>
                            <div class="contact-person">
                                <p class="mg-b-0">Britanny Cevallos</p>
                                <span class="tx-12 op-5 d-inline-block">Shiboygan Falls, WI</span>
                            </div>
                        </div>
                        <!-- d-flex -->
                    </a><!-- contact-list-link -->
                    <a href="" class="contact-list-link">
                        <div class="d-flex">
                            <div class="pos-relative">
                                <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle"
                                    alt="" />
                                <div class="contact-status-indicator bg-gray-500 bd-br-primary"></div>
                            </div>
                            <div class="contact-person">
                                <p class="mg-b-0">Brandon Lawrence</p>
                                <span class="tx-12 op-5 d-inline-block">Snohomish, WA</span>
                            </div>
                        </div>
                        <!-- d-flex -->
                    </a><!-- contact-list-link -->
                    <a href="" class="contact-list-link">
                        <div class="d-flex">
                            <div class="pos-relative">
                                <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle"
                                    alt="" />
                                <div class="contact-status-indicator bg-gray-500 bd-br-primary"></div>
                            </div>
                            <div class="contact-person">
                                <p class="mg-b-0">Andrew Wiggins</p>
                                <span class="tx-12 op-5 d-inline-block">Springfield, MA</span>
                            </div>
                        </div>
                        <!-- d-flex -->
                    </a><!-- contact-list-link -->
                    <a href="" class="contact-list-link">
                        <div class="d-flex">
                            <div class="pos-relative">
                                <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle"
                                    alt="" />
                                <div class="contact-status-indicator bg-gray-500 bd-br-primary"></div>
                            </div>
                            <div class="contact-person">
                                <p class="mg-b-0">Theodore Gristen</p>
                                <span class="tx-12 op-5 d-inline-block">Nashville, TN</span>
                            </div>
                        </div>
                        <!-- d-flex -->
                    </a><!-- contact-list-link -->
                    <a href="" class="contact-list-link">
                        <div class="d-flex">
                            <div class="pos-relative">
                                <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle"
                                    alt="" />
                                <div class="contact-status-indicator bg-gray-500 bd-br-primary"></div>
                            </div>
                            <div class="contact-person">
                                <p class="mg-b-0">Deborah Miner</p>
                                <span class="tx-12 op-5 d-inline-block">North Shore, CA</span>
                            </div>
                        </div>
                        <!-- d-flex -->
                    </a><!-- contact-list-link -->
                </div>
                <!-- contact-list -->
            </div>
            <!-- #contacts -->

            <div class="tab-pane pos-absolute a-0 mg-t-60 overflow-y-auto" id="attachments" role="tabpanel">
                <label class="sidebar-label pd-x-25 mg-t-25">Recent Attachments</label>
                <div class="media-file-list">
                    <div class="media">
                        <div
                            class="pd-10 bg-primary wd-50 ht-60 tx-center d-flex align-items-center justify-content-center">
                            <i class="fa fa-file-image-o tx-28 tx-white"></i>
                        </div>
                        <div class="media-body">
                            <p class="mg-b-0 tx-13">IMG_43445</p>
                            <p class="mg-b-0 tx-12 op-5">JPG Image</p>
                            <p class="mg-b-0 tx-12 op-5">1.2mb</p>
                        </div>
                        <!-- media-body -->
                        <a href="" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
                    </div>
                    <!-- media -->
                    <div class="media mg-t-20">
                        <div
                            class="pd-10 bg-purple wd-50 ht-60 tx-center d-flex align-items-center justify-content-center">
                            <i class="fa fa-file-video-o tx-28 tx-white"></i>
                        </div>
                        <div class="media-body">
                            <p class="mg-b-0 tx-13">VID_6543</p>
                            <p class="mg-b-0 tx-12 op-5">MP4 Video</p>
                            <p class="mg-b-0 tx-12 op-5">24.8mb</p>
                        </div>
                        <!-- media-body -->
                        <a href="" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
                    </div>
                    <!-- media -->
                    <div class="media mg-t-20">
                        <div
                            class="pd-10 bg-success wd-50 ht-60 tx-center d-flex align-items-center justify-content-center">
                            <i class="fa fa-file-word-o tx-28 tx-white"></i>
                        </div>
                        <div class="media-body">
                            <p class="mg-b-0 tx-13">Tax_Form</p>
                            <p class="mg-b-0 tx-12 op-5">Word Document</p>
                            <p class="mg-b-0 tx-12 op-5">5.5mb</p>
                        </div>
                        <!-- media-body -->
                        <a href="" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
                    </div>
                    <!-- media -->
                    <div class="media mg-t-20">
                        <div
                            class="pd-10 bg-warning wd-50 ht-60 tx-center d-flex align-items-center justify-content-center">
                            <i class="fa fa-file-pdf-o tx-28 tx-white"></i>
                        </div>
                        <div class="media-body">
                            <p class="mg-b-0 tx-13">Getting_Started</p>
                            <p class="mg-b-0 tx-12 op-5">PDF Document</p>
                            <p class="mg-b-0 tx-12 op-5">12.7mb</p>
                        </div>
                        <!-- media-body -->
                        <a href="" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
                    </div>
                    <!-- media -->
                    <div class="media mg-t-20">
                        <div
                            class="pd-10 bg-warning wd-50 ht-60 tx-center d-flex align-items-center justify-content-center">
                            <i class="fa fa-file-pdf-o tx-28 tx-white"></i>
                        </div>
                        <div class="media-body">
                            <p class="mg-b-0 tx-13">Introduction</p>
                            <p class="mg-b-0 tx-12 op-5">PDF Document</p>
                            <p class="mg-b-0 tx-12 op-5">7.7mb</p>
                        </div>
                        <!-- media-body -->
                        <a href="" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
                    </div>
                    <!-- media -->
                    <div class="media mg-t-20">
                        <div
                            class="pd-10 bg-primary wd-50 ht-60 tx-center d-flex align-items-center justify-content-center">
                            <i class="fa fa-file-image-o tx-28 tx-white"></i>
                        </div>
                        <div class="media-body">
                            <p class="mg-b-0 tx-13">IMG_43420</p>
                            <p class="mg-b-0 tx-12 op-5">JPG Image</p>
                            <p class="mg-b-0 tx-12 op-5">2.2mb</p>
                        </div>
                        <!-- media-body -->
                        <a href="" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
                    </div>
                    <!-- media -->
                    <div class="media mg-t-20">
                        <div
                            class="pd-10 bg-primary wd-50 ht-60 tx-center d-flex align-items-center justify-content-center">
                            <i class="fa fa-file-image-o tx-28 tx-white"></i>
                        </div>
                        <div class="media-body">
                            <p class="mg-b-0 tx-13">IMG_43447</p>
                            <p class="mg-b-0 tx-12 op-5">JPG Image</p>
                            <p class="mg-b-0 tx-12 op-5">3.2mb</p>
                        </div>
                        <!-- media-body -->
                        <a href="" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
                    </div>
                    <!-- media -->
                    <div class="media mg-t-20">
                        <div
                            class="pd-10 bg-purple wd-50 ht-60 tx-center d-flex align-items-center justify-content-center">
                            <i class="fa fa-file-video-o tx-28 tx-white"></i>
                        </div>
                        <div class="media-body">
                            <p class="mg-b-0 tx-13">VID_6545</p>
                            <p class="mg-b-0 tx-12 op-5">AVI Video</p>
                            <p class="mg-b-0 tx-12 op-5">14.8mb</p>
                        </div>
                        <!-- media-body -->
                        <a href="" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
                    </div>
                    <!-- media -->
                    <div class="media mg-t-20">
                        <div
                            class="pd-10 bg-success wd-50 ht-60 tx-center d-flex align-items-center justify-content-center">
                            <i class="fa fa-file-word-o tx-28 tx-white"></i>
                        </div>
                        <div class="media-body">
                            <p class="mg-b-0 tx-13">Secret_Document</p>
                            <p class="mg-b-0 tx-12 op-5">Word Document</p>
                            <p class="mg-b-0 tx-12 op-5">4.5mb</p>
                        </div>
                        <!-- media-body -->
                        <a href="" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
                    </div>
                    <!-- media -->
                </div>
                <!-- media-list -->
            </div>
            <!-- #history -->
            <div class="tab-pane pos-absolute a-0 mg-t-60 overflow-y-auto" id="calendar" role="tabpanel">
                <label class="sidebar-label pd-x-25 mg-t-25">Time &amp; Date</label>
                <div class="pd-x-25">
                    <h2 id="brTime" class="tx-white tx-lato mg-b-5"></h2>
                    <h6 id="brDate" class="tx-white tx-light op-3"></h6>
                </div>

                <label class="sidebar-label pd-x-25 mg-t-25">Events Calendar</label>
                <div class="datepicker sidebar-datepicker"></div>

                <label class="sidebar-label pd-x-25 mg-t-25">Event Today</label>
                <div class="pd-x-25">
                    <div class="list-group sidebar-event-list mg-b-20">
                        <div class="list-group-item">
                            <div>
                                <h6 class="tx-white tx-13 mg-b-5 tx-normal">
                                    Roven's 32th Birthday
                                </h6>
                                <p class="mg-b-0 tx-white tx-12 op-2">2:30PM</p>
                            </div>
                            <a href="" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
                        </div>
                        <!-- list-group-item -->
                        <div class="list-group-item">
                            <div>
                                <h6 class="tx-white tx-13 mg-b-5 tx-normal">
                                    Regular Workout Schedule
                                </h6>
                                <p class="mg-b-0 tx-white tx-12 op-2">7:30PM</p>
                            </div>
                            <a href="" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
                        </div>
                        <!-- list-group-item -->
                    </div>
                    <!-- list-group -->

                    <a href="" class="btn btn-block btn-outline-secondary tx-uppercase tx-11 tx-spacing-2">+
                        Add Event</a>
                    <br />
                </div>
            </div>
            <div class="tab-pane pos-absolute a-0 mg-t-60 overflow-y-auto" id="settings" role="tabpanel">
                <label class="sidebar-label pd-x-25 mg-t-25">Quick Settings</label>

                <div class="pd-y-20 pd-x-25 tx-white">
                    <h6 class="tx-13 tx-normal">Sound Notification</h6>
                    <p class="op-5 tx-13">
                        Play an alert sound everytime there is a new notification.
                    </p>
                    <div class="pos-relative">
                        <input type="checkbox" name="checkbox" class="switch-button" checked />
                    </div>
                </div>

                <div class="pd-y-20 pd-x-25 tx-white">
                    <h6 class="tx-13 tx-normal">2 Steps Verification</h6>
                    <p class="op-5 tx-13">
                        Sign in using a two step verification by sending a verification
                        code to your phone.
                    </p>
                    <div class="pos-relative">
                        <input type="checkbox" name="checkbox2" class="switch-button" />
                    </div>
                </div>

                <div class="pd-y-20 pd-x-25 tx-white">
                    <h6 class="tx-13 tx-normal">Location Services</h6>
                    <p class="op-5 tx-13">Allowing us to access your location</p>
                    <div class="pos-relative">
                        <input type="checkbox" name="checkbox3" class="switch-button" />
                    </div>
                </div>

                <div class="pd-y-20 pd-x-25 tx-white">
                    <h6 class="tx-13 tx-normal">Newsletter Subscription</h6>
                    <p class="op-5 tx-13">
                        Enables you to send us news and updates send straight to your
                        email.
                    </p>
                    <div class="pos-relative">
                        <input type="checkbox" name="checkbox4" class="switch-button" checked />
                    </div>
                </div>

                <div class="pd-y-20 pd-x-25 tx-white">
                    <h6 class="tx-13 tx-normal">Your email</h6>
                    <div class="pos-relative">
                        <input type="email" name="email"
                            class="form-control form-control-inverse transition pd-y-10" value="janedoe@domain.com" />
                    </div>
                </div>

                <div class="pd-y-20 pd-x-25">
                    <h6 class="tx-13 tx-normal tx-white mg-b-20">More Settings</h6>
                    <a href=""
                        class="btn btn-block btn-outline-secondary tx-uppercase tx-11 tx-spacing-2">Account
                        Settings</a>
                    <a href=""
                        class="btn btn-block btn-outline-secondary tx-uppercase tx-11 tx-spacing-2">Privacy
                        Settings</a>
                </div>
            </div>
        </div>
        <!-- tab-content -->
    </div>
    <!-- br-sideright -->
    <!-- ########## END: RIGHT PANEL ########## --->
    #toolbar=0
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
        <div class="br-pageheader pd-y-15 pd-l-20"></div>

        <div class="br-pagebody">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div id="pagID1"></div>

                        <embed src="resources/pdf/PORTADA.pdf#toolbar=0" type="" id="pdfPag"
                            width="100%" height="800" />
                    </div>
                </div>
            </div>
        </div>
        <!-- br-pagebody -->
    </div>
    <!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->

    <script src="{{ asset('resources/template/lib/jquery/jquery.js') }}"></script>
    <script src="{{ asset('resources/template/lib/popper.js/popper.js') }}"></script>
    <script src="{{ asset('resources/template/lib/bootstrap/bootstrap.js') }}"></script>
    <script src="{{ asset('resources/template/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js') }}"></script>
    <script src="{{ asset('resources/template/lib/moment/moment.js') }}"></script>
    <script src="{{ asset('resources/template/lib/jquery-ui/jquery-ui.js') }}"></script>
    <script src="{{ asset('resources/template/lib/jquery-switchbutton/jquery.switchButton.js') }}"></script>
    <script src="{{ asset('resources/template/lib/peity/jquery.peity.js') }}"></script>

    <script src="{{ asset('resources/template/js/bracket.js') }}"></script>
    <script src="{{ asset('resources/template/js/App1.js') }}"></script>
    <script src="{{ asset('resources/js/App1.js') }}"></script>
    <script src="{{ asset('resources/js/inicio.js') }}"></script>
</body>

</html>
