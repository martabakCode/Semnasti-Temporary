<!--**********************************
  Sidebar start
***********************************-->
<div class="deznav">
    <div class="deznav-scroll">
        <a href="javascript:void(0)" class="add-menu-sidebar" data-toggle="modal" data-target="#addOrderModalside">+ Peserta
            Baru</a>
        <ul class="metismenu" id="menu">
            <li>
                <a class="ai-icon" href="{{ route('admin.dahsboard') }}" aria-expanded="false">
                    <i class="flaticon-381-networking"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
            </li>
			<li>
                <a class="ai-icon" href="{{ route('admin.user') }}" aria-expanded="false">
                    <i class="flaticon-381-networking"></i>
                    <span class="nav-text">Pengguna</span>
                </a>
			</li>

            <li>
                <a class="ai-icon" href="{{ route('admin.registrant') }}" aria-expanded="false">
                    <i class="flaticon-381-networking"></i>
                    <span class="nav-text">Peserta</span>
                </a>
			</li>
            <li>
                <a class="ai-icon" href="{{ route('admin.broadcast') }}" aria-expanded="false">
                    <i class="flaticon-381-networking"></i>
                    <span class="nav-text">Broadcast</span>
                </a>
			</li>
        </ul>
        <div class="copyright">
            <p><strong>SEMNASTI <script>document.write(new Date().getFullYear())</script></strong>&copy; <script>document.write(new Date().getFullYear())</script><a href="http://hmtiudinus.org" target="_blank" style="text-decoration: none; color: #33475B;"> HMTI UDINUS</a> - Hak cipta dilindungi</p>
            {{-- <p>Made with <span class="heart"></span> by DexignZone</p> --}}
        </div>
    </div>
</div>
<!--**********************************
  Sidebar end
***********************************-->
