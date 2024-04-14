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
        <i class="fas fa-fw fa-th-large"></i>
        <span>Operator</span></a>
</li>
<li class="nav-item mb-2" id="steambox-menu">
    <a class="nav-link" href="{{ url('/steambox') }}">
        <i class="fas fa-fw fa-th-large"></i>
        <span>Rekap Steambox</span></a>
</li>
<li class="nav-item mb-2" id="pemasakan-menu">
    <a class="nav-link" href="{{ url('/pemasakan') }}">
        <i class="fas fa-fw fa-layer-group"></i>
        <span>Pemasakan</span></a>
</li>

</ul>
<!-- End of Sidebar -->