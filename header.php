<!-- Logout DropDown -->
    <li class="nav-item dropdown no-arrow">
        <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="d-none d-lg-inline me-2 text-gray-600 small"><?php echo $_SESSION['name'].' '.$_SESSION['surname'] ?></span>
			<img class="border rounded-circle img-profile" src="https://i.pinimg.com/originals/a3/9c/1e/a39c1e2636f0f319bc4a46d06ebed079.jpg">
		</a>
            <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in">
				<a class="dropdown-item" href="userProfile.php"><i class="fas fa-user fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Profile</a>
            <div class="dropdown-divider"></div><a class="dropdown-item" href="logout.php"><i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Logout</a>
			</div>
		</div>
    </li>