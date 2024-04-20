<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion shadow" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center mt-3 mb-4" href="index.html">
    <div class="sidebar-brand-text mx-3"><img src="{{ asset('images/ptsiap_logo.png') }}"></div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<li class="nav-item mb-2">
    <a class="nav-link" href="{{ url('/') }}">
        <span class="material-symbols-outlined">lists</span>
        <span>Operator</span>
    </a>
</li>
<li class="nav-item mb-2" id="steambox-menu">
    <a class="nav-link" href="{{ url('/steambox') }}">
        <span class="material-symbols-outlined">grid_view</span>
        <span>Rekap Steambox</span>
    </a>
</li>
<li class="nav-item mb-2" id="pemasakan-menu">
    <a class="nav-link" href="{{ url('/pemasakan') }}">
        <span class="material-symbols-outlined">stacks</span>
        <span>Pemasakan</span>
    </a>
</li>
<li class="nav-item mb-2" id="resep-menu">
    <a class="nav-link" href="{{ url('/resep') }}">
        <span class="material-symbols-outlined">assignment</span>
        <span>Resep</span>
    </a>
</li>
<li class="nav-item mb-2" id="logproduksi-menu">
    <a class="nav-link" href="{{ url('/logproduksi') }}">
        <span class="material-symbols-outlined">find_in_page</span>
        <span>Log Produksi</span>
    </a>
</li>
<li class="nav-item mb-2" id="logmaintenance-menu">
    <a class="nav-link" href="{{ url('/logmaintenance') }}">
        <span class="material-symbols-outlined">pages</span>
        <span>Log Maintenance</span>
    </a>
</li>
<li class="nav-item mb-2" id="logaktivitas-menu">
    <a class="nav-link" href="{{ url('/logaktivitas') }}">
        <span class="material-symbols-outlined">group</span>
        <span>Log Aktivitas</span>
    </a>
</li>

</ul>
<!-- End of Sidebar -->