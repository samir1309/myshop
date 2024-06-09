	<!-- Left sidebar START -->
    <div class="col-xl-3">
				<!-- Responsive offcanvas body START -->
				<div class="offcanvas-xl offcanvas-end" tabindex="-1" id="offcanvasSidebar">
					<!-- Offcanvas header -->
					<div class="offcanvas-header bg-light">
						<h5 class="offcanvas-title" id="offcanvasNavbarLabel">پروفایل من</h5>
						<button  type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#offcanvasSidebar" aria-label="Close"></button>
					</div>
				
					<!-- Offcanvas body -->
					<div class="offcanvas-body p-3 p-xl-0">
						<div class="bg-dark border rounded-3 p-3 w-100">
							<!-- Dashboard menu -->
							<div class="list-group list-group-dark list-group-borderless collapse-list">
								<a class="list-group-item active" href="{{route('panel.dashboard')}}"><i class="bi bi-ui-checks-grid fa-fw me-2"></i>داشبورد</a>
								<a class="list-group-item" href=""><i class="bi bi-basket fa-fw me-2"></i>لیست دوره ها</a>
								<a class="list-group-item" href=""><i class="bi bi-cart-check fa-fw me-2"></i>موردعلاقه ها</a>
								<a class="list-group-item" href="{{route('panel.edit')}}"><i class="bi bi-pencil-square fa-fw me-2"></i>ویرایش پروفایل</a>
								<a class="list-group-item" href=""><i class="bi bi-gear fa-fw me-2"></i>سفارشات</a>
								<!-- Collapse menu -->
								<a class="list-group-item text-danger bg-danger-soft-hover" href="{{route('panel.logout')}}" onclick="logoutSuccessMessage()"><i class="fas fa-sign-out-alt fa-fw me-2"></i>خروج</a>
							</div>
						</div>
					</div>
				</div>
				<!-- Responsive offcanvas body END -->
			</div>

	
			<!-- Left sidebar END -->