@extends('layouts.main')
@section('container')
    <div class="home">
        <div class="hero">
            <h3>GKE Imanuel Putussibau</h3>
        </div>
        <div class="features feature-1">
            <a href="/posts">
                <h4>News</h4>
                <p>Click here for read more news!</p>
            </a>
        </div>
        <div class="features feature-2">
            <a href="/renungans">
                <h4>Meditations</h4>
                <p>Click here for read more meditations!</p>
            </a>
        </div>
        <div class="gallery">
            <div class="gal-dir">
                <a href="/galleries">
                    <h4>Galleries</h4>
                    <p>Click here for see more moments!</p>
                </a>
            </div>
            <ul class="gal-link">
                <li><img src="/images/gal1.jpg" alt=""></li>
                <li><img src="/images/gal2.jpg" alt=""></li>
                <li><img src="/images/gal3.jpg" alt=""></li>
                <li><img src="/images/gal4.jpg" alt=""></li>
                <li><img src="/images/gal5.jpg" alt=""></li>
                <li><img src="/images/gal6.jpg" alt=""></li>
                <li><img src="/images/gal7.jpg" alt=""></li>
                <li><img src="/images/gal8.jpg" alt=""></li>
                <li><img src="/images/gal9.jpg" alt=""></li>
            </ul>
        </div>
    </div>
@endsection