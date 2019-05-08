<?php 
use App\Http\Controllers\Controller;
$mainnavservice = Controller::mainNav();

?>
<header>
            <div class="top_header desktop_topheader">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="contact_top">
                                <a class="call_no" href="#"><i class="fas fa-phone-square"></i> 600544549 </a>
                                <a href="#"><i class="fas fa-envelope"></i> info@uaetechnician.ae</a>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <a class="contact_no" href="#">600544549 <span>Call Us</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="navbar navbar-expand-lg navbar-light custom_nav offcanvas-desktop">
                <div class="container">
                    <a class="navbar-brand" href="#"><img width="95px" src="<?php echo e(URL::asset('images/frontend_images/images/logo.svg')); ?>"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                  
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto">
                                    <li class="nav-item active">
                                        <a class="nav-link" id="dropdown1" href="#">HOME <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" id="dropdown2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">DATA RECOVERY</a>
                                        <ul class="dropdown-menu" aria-labelledby="dropdown2">
                                            <li class="dropdown-item" href="#"><a>Action 2 A</a></li>
                                            <li class="dropdown-item" href="#"><a>Action 2 B</a></li>
                                            <li class="dropdown-item" href="#"><a>Action 2 C</a></li>
                                            <li class="dropdown-item dropdown">
                                                <a class="dropdown-toggle" id="dropdown2-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown2.1</a>
                                                <ul class="dropdown-menu" aria-labelledby="dropdown2-1">
                                                    <li class="dropdown-item" href="#"><a>Action 2.1 A</a></li>
                                                    <li class="dropdown-item" href="#"><a>Action 2.1 B</a></li>
                                                    <li class="dropdown-item" href="#"><a>Action 2.1 C</a></li>
                                                    <li class="dropdown-item dropdown">
                                                        <a class="dropdown-toggle" id="dropdown2-1-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown2.1.1</a>
                                                        <ul class="dropdown-menu" aria-labelledby="dropdown2-1-1">
                                                            <li class="dropdown-item" href="#"><a>Action 2.1.1 A</a></li>
                                                            <li class="dropdown-item" href="#"><a>Action 2.1.1 B</a></li>
                                                            <li class="dropdown-item" href="#"><a>Action 2.1.1 C</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown-item dropdown">
                                                        <a class="dropdown-toggle" id="dropdown2-1-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown2.1.2</a>
                                                        <ul class="dropdown-menu" aria-labelledby="dropdown2-1-2">
                                                            <li class="dropdown-item" href="#"><a>Action 2.1.2 A</a></li>
                                                            <li class="dropdown-item" href="#"><a>Action 2.1.2 B</a></li>
                                                            <li class="dropdown-item" href="#"><a>Action 2.1.2 C</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    
                                    <li class="nav-item">
                                        <a class="nav-link" href="#" target="_blank">OUR SERVICES</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#" target="_blank">BRAND REPAIRS</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#" target="_blank">APPLE REPAIRS</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#" target="_blank">SOLUTIONS</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#" target="_blank">RENTAL SERVICE</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#" target="_blank">PACKAGES</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#" target="_blank">BLOG</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#" target="_blank">SHOP</a>
                                    </li>

                                    
                                    
                                </ul>
                      
                    </div>
                </div>
            </nav>
    </header>
<?php /**PATH D:\uaetechnicianne\UAETechnician.com\resources\views/layouts/frontLayout/header_design.blade.php ENDPATH**/ ?>