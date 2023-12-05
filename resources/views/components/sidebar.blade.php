<header class="sidebar">
    <button class="menu-btn">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 19"
            style="fill: rgba(0, 0, 0, 1);">
            <path d="M4 6h16v2H4zm0 5h16v2H4zm0 5h16v2H4z"></path>
        </svg>
    </button>
    <div class="logo">
        <img src="{{ asset('/images/logo.png') }}" alt="tunas.png" width="60px">
        <div>
            <h3>SMK Tunas Harapan Pati</h3>
            <p>Disiplin, Terampil, Siap Kerja</p>
        </div>
    </div>
    <div class="navbar">
        <nav>
            <ul>
                <li class="{{ $title == 'dashboard' ? 'active' : '' }}">
                    <a href="/">
                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="34" viewBox="0 0 35 34"
                            fill="none">
                            <path
                                d="M12.3333 32H8.88889C5.08426 32 2 28.8985 2 25.0727V14.1753C2 11.753 3.25827 9.50656 5.31836 8.25106L13.9295 3.00309C16.1241 1.66564 18.8759 1.66564 21.0705 3.00309L29.6816 8.25106C31.7417 9.50656 33 11.753 33 14.1753V25.0727C33 28.8985 29.9157 32 26.1111 32H22.6667M12.3333 32V25.0727C12.3333 22.2032 14.6464 19.8772 17.5 19.8772C20.3535 19.8772 22.6667 22.2032 22.6667 25.0727V32M12.3333 32H22.6667"
                                stroke="black" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <span>Beranda</span>
                    </a>
                </li>
                <li class="{{ $title == 'presensi' ? 'active' : '' }}">
                    <a href="{{ route('presensi.index') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="27" viewBox="0 0 35 27"
                            fill="none">
                            <path
                                d="M20.2667 23.9521H4.76674C3.05466 23.9521 1.66675 22.8543 1.66675 21.5V4.33496C1.66675 2.98067 3.05466 1.88281 4.76674 1.88281H29.5667C31.2788 1.88281 32.6667 2.98067 32.6667 4.33496V15.3696"
                                stroke="black" stroke-width="3" stroke-linecap="round" />
                            <path d="M1.66675 6.78711H32.6667" stroke="black" stroke-width="3" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M6.31677 4.34645L6.33137 4.33362" stroke="black" stroke-width="3"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M10.9668 4.34645L10.9814 4.33362" stroke="black" stroke-width="3"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M15.6166 4.34645L15.6312 4.33362" stroke="black" stroke-width="3"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M28.7917 25.1782V17.8217M28.7917 17.8217L24.9167 20.8869M28.7917 17.8217L32.6667 20.8869"
                                stroke="black" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <span>Presensi</span>
                    </a>
                    @if ($title == 'presensi')
                        <x-presensi.menu />
                    @endif
                </li>
                <li>
                    <a href="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="30" viewBox="0 0 36 30"
                            fill="none">
                            <path
                                d="M2.66675 6.1416V14.3154C2.66675 14.3154 2.66675 18.4023 14.7223 18.4023C26.7778 18.4023 26.7778 14.3154 26.7778 14.3154V6.1416"
                                stroke="black" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M14.7223 2.05469C26.7778 2.05469 26.7778 6.1416 26.7778 6.1416C26.7778 6.1416 26.7778 10.2285 14.7223 10.2285C2.66675 10.2285 2.66675 6.1416 2.66675 6.1416C2.66675 6.1416 2.66675 2.05469 14.7223 2.05469Z"
                                stroke="black" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M14.7223 26.5762C2.66675 26.5762 2.66675 22.4893 2.66675 22.4893V14.3154"
                                stroke="black" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M28.5001 26.5762C30.4025 26.5762 31.9445 25.3564 31.9445 23.8516C31.9445 22.3468 30.4025 21.127 28.5001 21.127C27.8727 21.127 27.2846 21.2596 26.7779 21.4915C25.7483 21.9626 25.0557 22.843 25.0557 23.8516C25.0557 24.8601 25.7483 25.7405 26.7779 26.2116C27.2846 26.4435 27.8727 26.5762 28.5001 26.5762Z"
                                stroke="black" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M28.5002 27.9384C31.3537 27.9384 33.6668 26.1087 33.6668 23.8515C33.6668 21.5943 31.3537 19.7646 28.5002 19.7646C25.6466 19.7646 23.3335 21.5943 23.3335 23.8515C23.3335 26.1087 25.6466 27.9384 28.5002 27.9384Z"
                                stroke="black" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"
                                stroke-dasharray="1.6 10.66" />
                        </svg>
                        <span>Data Presensi</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="11" height="17" viewBox="0 0 11 17"
                            fill="none">
                            <path d="M2 2L8.5 8.5L2 15" stroke="black" stroke-width="4" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </a>
                </li>
            </ul>
        </nav>
        @if ($title != 'dashboard')
            <div class="footer">
                <div class="time">
                    <span id="timestamp">07:00:00</span>
                    <span id="date" align="right">11-11-2023</span>
                </div>
            </div>
        @endif
    </div>
</header>
