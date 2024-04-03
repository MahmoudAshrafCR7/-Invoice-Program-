<!-- main-header opened -->
			<div class="main-header sticky side-header nav nav-item">
				<div class="container-fluid">
					<div class="main-header-left ">
						<div class="responsive-logo">
							<a href="<?php echo e(url('/' . $page='index')); ?>"><img src="<?php echo e(URL::asset('assets/img/brand/logo.png')); ?>" class="logo-1" alt="logo"></a>
							<a href="<?php echo e(url('/' . $page='index')); ?>"><img src="<?php echo e(URL::asset('assets/img/brand/logo-white.png')); ?>" class="dark-logo-1" alt="logo"></a>
							<a href="<?php echo e(url('/' . $page='index')); ?>"><img src="<?php echo e(URL::asset('assets/img/brand/favicon.png')); ?>" class="logo-2" alt="logo"></a>
							<a href="<?php echo e(url('/' . $page='index')); ?>"><img src="<?php echo e(URL::asset('assets/img/brand/favicon.png')); ?>" class="dark-logo-2" alt="logo"></a>
						</div>
						<div class="app-sidebar__toggle" data-toggle="sidebar">
							<a class="open-toggle" href="#"><i class="header-icon fe fe-align-left" ></i></a>
							<a class="close-toggle" href="#"><i class="header-icons fe fe-x"></i></a>
						</div>
						<div class="main-header-center mr-3 d-sm-none d-md-none d-lg-block">
							<input class="form-control" placeholder="Search for anything..." type="search"> <button class="btn"><i class="fas fa-search d-none d-md-block"></i></button>
						</div>
					</div>
					<div class="main-header-right">
						<ul class="nav">
							<li class="">
								<div class="dropdown  nav-itemd-none d-md-flex">
									<a href="#" class="d-flex  nav-item nav-link pl-0 country-flag1" data-toggle="dropdown" aria-expanded="false">
										<span class="avatar country-Flag mr-0 align-self-center bg-transparent"><img src="<?php echo e(URL::asset('assets/img/flags/us_flag.jpg')); ?>" alt="img"></span>
										<div class="my-auto">
											<strong class="mr-2 ml-2 my-auto">English</strong>
										</div>
									</a>
									<div class="dropdown-menu dropdown-menu-left dropdown-menu-arrow" x-placement="bottom-end">
										<a href="#" class="dropdown-item d-flex ">
											<span class="avatar  ml-3 align-self-center bg-transparent"><img src="<?php echo e(URL::asset('assets/img/flags/french_flag.jpg')); ?>" alt="img"></span>
											<div class="d-flex">
												<span class="mt-2">French</span>
											</div>
										</a>
										<a href="#" class="dropdown-item d-flex">
											<span class="avatar  ml-3 align-self-center bg-transparent"><img src="<?php echo e(URL::asset('assets/img/flags/germany_flag.jpg')); ?>" alt="img"></span>
											<div class="d-flex">
												<span class="mt-2">Germany</span>
											</div>
										</a>
										<a href="#" class="dropdown-item d-flex">
											<span class="avatar ml-3 align-self-center bg-transparent"><img src="<?php echo e(URL::asset('assets/img/flags/italy_flag.jpg')); ?>" alt="img"></span>
											<div class="d-flex">
												<span class="mt-2">Italy</span>
											</div>
										</a>
										<a href="#" class="dropdown-item d-flex">
											<span class="avatar ml-3 align-self-center bg-transparent"><img src="<?php echo e(URL::asset('assets/img/flags/russia_flag.jpg')); ?>" alt="img"></span>
											<div class="d-flex">
												<span class="mt-2">Russia</span>
											</div>
										</a>
										<a href="#" class="dropdown-item d-flex">
											<span class="avatar  ml-3 align-self-center bg-transparent"><img src="<?php echo e(URL::asset('assets/img/flags/spain_flag.jpg')); ?>" alt="img"></span>
											<div class="d-flex">
												<span class="mt-2">spain</span>
											</div>
										</a>
									</div>
								</div>
							</li>
						</ul>





                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check("الاشعارات")): ?>
                      <div class="dropdown nav-item main-header-notification">
                            <a class="new nav-link" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg><span class=" pulse"></span></a>
                            <div class="dropdown-menu">
                                <div class="menu-header-content bg-primary text-right">
                                    <div class="d-flex">
                                        <h6 class="dropdown-title mb-1 tx-15 text-white font-weight-semibold">الاشعارات</h6>
                                        <span class="badge badge-pill badge-warning mr-auto my-auto float-left"><a href="\MarkAsRead_all">تعين قراءة الكل</a></span>
                                    </div>
                                    <p class="dropdown-title-text subtext mb-0 text-white op-6 pb-0 tx-12">
                                        <h6 id="notifications_count" style="color: yellow"><?php echo e(auth()->user()->unreadNotifications->count()); ?>

                                        </h6>
                                    </p>
                                </div>
                                <?php $__currentLoopData = auth()->user()->unreadNotifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="main-notification-list Notification-scroll">
                                    <a class="d-flex p-3 border-bottom" href="<?php echo e(url('InvoicesDetails')); ?>/<?php echo e($notification->data['id']); ?>">
                                        <div class="notifyimg bg-pink mt-2">
                                            <i class="la la-file-alt text-white"></i>
                                        </div>
                                        <div class="mr-3">
                                                <h5 class="notification-label mb-1">
                                                    <?php echo e($notification->data['title']); ?> <?php echo e($notification->data['user']); ?>

                                                </h5>
                                            <div class="notification-subtext"><?php echo e($notification->created_at); ?></div>
                                        </div>
                                    </a>
                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </div>
                        </div>
                        <?php endif; ?>




						<div class="nav nav-item  navbar-nav-right ml-auto">
                            <div class="dropdown main-profile-menu nav nav-item nav-link">
								<a class="profile-user d-flex" href=""><i style="font-size: 23px" class=" fas fa-user"></i></a>
								<div class="dropdown-menu">
									<div class="main-header-profile bg-primary p-3">
										<div class="d-flex wd-100p">
											<div class="main-img-user"><img src="<?php echo e(URL::asset('assets/img/faces/18.jpg')); ?>" class=""></div>
											<div class="mr-3 my-auto">
												<h6><?php echo e(Auth::user()->name); ?></h6><span><?php echo e(Auth::user()->email); ?></span>
											</div>
										</div>
									</div>
									<a class="dropdown-item" href=""><i class="bx bx-user-circle"></i>Profile</a>
									<a class="dropdown-item" href=""><i class="bx bx-cog"></i> Edit Profile</a>
									<a class="dropdown-item" href=""><i class="bx bxs-inbox"></i>Inbox</a>
									<a class="dropdown-item" href=""><i class="bx bx-envelope"></i>Messages</a>
									<a class="dropdown-item" href=""><i class="bx bx-slider-alt"></i> Account Settings</a>
                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                    onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i
                                    class="bx bx-log-out"></i>تسجيل خروج</a>
                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                    <?php echo csrf_field(); ?>
                                    </form>
                               </div>
							</div>

						</div>
					</div>
				</div>
			</div>
<!-- /main-header -->
<?php /**PATH D:\Invoices\resources\views/layouts/main-header.blade.php ENDPATH**/ ?>