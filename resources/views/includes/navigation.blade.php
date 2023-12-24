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

		<li class="sidebar-item {{ request()->is('dashboard') ? 'active' : '' }}">
			<a href="{{ route('dashboard') }}" class='sidebar-link'>
				<i class="bi bi-grid-fill"></i>
				<span>Dashboard</span>
			</a>
		</li>

		<li class="sidebar-title"><i class="bi bi-menu-button-wide"></i></li>

        <li class="sidebar-item has-sub {{ request()->routeIs('masters.*') ? 'active' : '' }}">
			<a href="#" class='sidebar-link'>
				<i class="bi bi-briefcase-fill"></i>
				<span>Master Data</span>
			</a>
			<ul class="submenu {{ request()->routeIs('masters.*') ? 'active' : '' }}">
                <li class="submenu-item {{ request()->routeIs('masters.asbab.index') ? 'active' : '' }}">
					<a href="{{ route('masters.asbab.index') }}">Asbab</a>
				</li>
				<li class="submenu-item {{ request()->routeIs('masters.program.index') ? 'active' : '' }}">
					<a href="{{ route("masters.program.index") }}">Program</a>
				</li>
			</ul>
		</li>

		<li class="sidebar-item {{ request()->is('dashboard/donate*') ? 'active' : '' }}">
			<a href="{{ route('donate.index') }}" class='sidebar-link'>
				<i class="bi bi-cash-stack"></i>
				<span>Donasi</span>
			</a>
		</li>

		<li class="sidebar-item {{ request()->is('dashboard/report*') ? 'active' : '' }}">
			<a href="{{ route('report.index') }}" class='sidebar-link'>
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
