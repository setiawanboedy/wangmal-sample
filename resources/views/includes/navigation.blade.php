<div class="sidebar-header">
	<div class="d-flex justify-content-between">
		<div class="logo">
			<a href="{{ route('dashboard') }}">{{ config('app.name') }}</a>
		</div>
		<div class="toggler">
			<a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
		</div>
	</div>
</div>
<div class="sidebar-menu">
	<ul class="menu">
		<li class="sidebar-title">Menu</li>

		<li class="sidebar-item {{ request()->is('dashboard*') ? 'active' : '' }}">
			<a href="{{ route('dashboard') }}" class='sidebar-link'>
				<i class="bi bi-grid-fill"></i>
				<span>Dashboard</span>
			</a>
		</li>

		<li class="sidebar-title"><i class="bi bi-menu-button-wide"></i></li>

		<li class="sidebar-item">
			<a href="#" class='sidebar-link'>
				<i class="bi bi-people-fill"></i>
				<span>Pelajar</span>
			</a>
		</li>

		<li class="sidebar-item ">
			<a href="#" class='sidebar-link'>
				<i class="bi bi-bookmark-fill"></i>
				<span>Kelas</span>
			</a>
		</li>

		<li class="sidebar-item">
			<a href="#" class='sidebar-link'>
				<i class="bi bi-briefcase-fill"></i>
				<span>Jurusan</span>
			</a>
		</li>

		<li class="sidebar-item has-sub">
			<a href="#" class='sidebar-link'>
				<i class="bi bi-cash-stack"></i>
				<span>Kas</span>
			</a>
			<ul class="submenu">
				<li class="submenu-item">
					<a href="#">Kas Minggu Ini</a>
				</li>
				<li class="submenu-item">
					<a href="#">Filter Kas</a>
				</li>
			</ul>
		</li>

		<li class="sidebar-item">
			<a href="#" class='sidebar-link'>
				<i class="bi bi-file-earmark-spreadsheet-fill"></i>
				<span>Laporan</span>
			</a>
		</li>

		<li class="sidebar-item {{ request()->is('teams*') ? 'active' : '' }}">
			<a href="{{ route('teams.show', Auth::user()->currentTeam->id) }}" class='sidebar-link'>
				<i class="bi bi-person-badge-fill"></i>
				<span>Teams</span>
			</a>
		</li>

		<li class="sidebar-item">
			<form method="POST" action="{{ route('logout') }}" id="logout"  x-data>
				@csrf

				<a href="{{ route('logout') }}" class='sidebar-link' @click.prevent="$root.submit();">
					<i class="bi bi-box-arrow-left"></i>
					<span>Logout</span>
				</a>
			</form>
		</li>

	</ul>
</div>
<button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
