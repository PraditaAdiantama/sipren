@extends('layouts.default')

@section('content')
    <div class="container">
        <div id="logo">
            <img src="{{ asset('images/logo.png') }}" alt="Ini Logo" style="width: 200px;">
        </div>

        <div class="main-text">
            <h3>Sistem Presensi Siswa</h3>
            <h4>SMK Tunas Harapan Pati</h4>
        </div>

        <form class="login" method="POST" action="{{ route('auth.login') }}">
            @csrf
            <!-- input component -->
            <div class="input">
                <svg xmlns="http://www.w3.org/2000/svg" width="43" height="43" viewBox="0 0 53 53" fill="none">
                    <path
                        d="M14.75 40.6703V38.3203C14.75 31.831 20.0107 26.5703 26.5 26.5703C32.9893 26.5703 38.25 31.831 38.25 38.3203V40.6703"
                        stroke="black" stroke-width="5" stroke-linecap="round" />
                    <path
                        d="M26.5 26.5703C30.3937 26.5703 33.55 23.414 33.55 19.5203C33.55 15.6267 30.3937 12.4703 26.5 12.4703C22.6063 12.4703 19.45 15.6267 19.45 19.5203C19.45 23.414 22.6063 26.5703 26.5 26.5703Z"
                        stroke="black" stroke-width="5" stroke-linecap="round" stroke-linejoin="round" />
                    <path
                        d="M26.5 50.0703C39.4787 50.0703 50 39.549 50 26.5703C50 13.5916 39.4787 3.07031 26.5 3.07031C13.5213 3.07031 3 13.5916 3 26.5703C3 39.549 13.5213 50.0703 26.5 50.0703Z"
                        stroke="black" stroke-width="5" />
                </svg>
                <input type="text" placeholder="Username" name="username">
            </div>
            <!-- input component -->

            <!-- input component -->
            <div class="input">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 49 53" fill="none">
                    <path
                        d="M38.8333 26.5H43.85C45.0375 26.5 46 27.289 46 28.2625V48.2375C46 49.211 45.0375 50 43.85 50H5.15C3.96259 50 3 49.211 3 48.2375V28.2625C3 27.289 3.96259 26.5 5.15 26.5H10.1667M38.8333 26.5V14.75C38.8333 10.8333 35.9667 3 24.5 3C13.0333 3 10.1667 10.8333 10.1667 14.75V26.5M38.8333 26.5H10.1667"
                        stroke="black" stroke-width="5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <input type="password" placeholder="Password" name="password">
            </div>
            <!-- input component -->

            <div class="btn-parent">
                <button class="btn" type="submit">Login</button>
            </div>
        </form>
    </div>
@endsection
