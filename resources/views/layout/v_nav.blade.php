<ul class="sidebar-menu" data-widget="tree">
    <li class="header">MAIN NAVIGATION</li>
    <li class="{{ request()->is ('/') ? 'active' : '' }}"><a href="/"><i class="fa fa-home"></i> <span>Home</span></a></li>
    <li class="{{ request()->is ('suhu') ? 'active' : '' }}"><a href="/suhu"><i class="fa fa-tint"></i> <span>Suhu</span></a></li>
    <li class="{{ request()->is ('nutrisi') ? 'active' : '' }}"><a href="/nutrisi"><i class="fa fa-th-large"></i> <span>Nutrisi</span></a></li>
    <li class="{{ request()->is ('ph') ? 'active' : '' }}"><a href="/ph"><i class="fa fa-spinner"></i> <span>PH</span></a></li>
    <li class="{{ request()->is ('intensitas') ? 'active' : '' }}"><a href="/intensitas"><i class="fa fa-cloud"></i> <span>Intensitas Cahaya</span></a></li>
    <li class="{{ request()->is ('citra') ? 'active' : '' }}"><a href="/citra"><i class="fa fa-camera"></i> <span>Citra</span></a></li>
    <li class="treeview">
      <a href="#">
        <i class="fa fa-share"></i> <span>Tombol Otomatis</span>
        <span class="pull-right-container">
        </span>
      </a>
    </li>
  </ul>
