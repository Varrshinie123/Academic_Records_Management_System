<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>About Us-Clinique Beaute Naturelle</title>
    <!-- SEO Meta Tags-->
    <meta name="description" content="Clinique Beaute Naturelle">
    <meta name="keywords" content="bootstrap, business, corporate, coworking space, services, creative agency, dashboard, e-commerce, mobile app showcase, saas, multipurpose, product landing, shop, software, ui kit, web studio, landing, dark mode, html5, css3, javascript, gallery, slider, touch, creative">
    <meta name="author" content="Arnab">
    <!-- Viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon and Touch Icons-->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="assets/favicon/site.webmanifest">
    <link rel="mask-icon" color="#6366f1" href="assets/favicon/safari-pinned-tab.svg">
    <meta name="msapplication-TileColor" content="#080032">
    <meta name="msapplication-config" content="assets/favicon/browserconfig.xml">
    <meta name="theme-color" content="white">
    <!-- Theme mode-->
    <script>
      let mode = window.localStorage.getItem('mode'),
          root = document.getElementsByTagName('html')[0];
      if (mode !== undefined && mode === 'dark') {
        root.classList.add('dark-mode');
      } else {
        root.classList.remove('dark-mode');
      }
      
      
    </script>
    <!-- Page loading styles-->
    <style>
      .page-loading {
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 100%;
        -webkit-transition: all .4s .2s ease-in-out;
        transition: all .4s .2s ease-in-out;
        background-color: #fff;
        opacity: 0;
        visibility: hidden;
        z-index: 9999;
      }
      .dark-mode .page-loading {
        background-color: #121519;
      }
      .page-loading.active {
        opacity: 1;
        visibility: visible;
      }
      .page-loading-inner {
        position: absolute;
        top: 50%;
        left: 0;
        width: 100%;
        text-align: center;
        -webkit-transform: translateY(-50%);
        transform: translateY(-50%);
        -webkit-transition: opacity .2s ease-in-out;
        transition: opacity .2s ease-in-out;
        opacity: 0;
      }
      .page-loading.active > .page-loading-inner {
        opacity: 1;
      }
      .page-loading-inner > span {
        display: block;
        font-family: 'Inter', sans-serif;
        font-size: 1rem;
        font-weight: normal;
        color: #6f788b;
      }
      .dark-mode .page-loading-inner > span {
        color: #fff;
        opacity: .6;
      }
      .page-spinner {
        display: inline-block;
        width: 2.75rem;
        height: 2.75rem;
        margin-bottom: .75rem;
        vertical-align: text-bottom;
        background-color: #d7dde2; 
        border-radius: 50%;
        opacity: 0;
        -webkit-animation: spinner .75s linear infinite;
        animation: spinner .75s linear infinite;
      }
      .dark-mode .page-spinner {
        background-color: rgba(255,255,255,.25);
      }
      @-webkit-keyframes spinner {
        0% {
          -webkit-transform: scale(0);
          transform: scale(0);
        }
        50% {
          opacity: 1;
          -webkit-transform: none;
          transform: none;
        }
      }
      @keyframes spinner {
        0% {
          -webkit-transform: scale(0);
          transform: scale(0);
        }
        50% {
          opacity: 1;
          -webkit-transform: none;
          transform: none;
        }
      }
      
    </style>
    <!-- Page loading scripts-->
    <script>
      (function () {
        window.onload = function () {
          const preloader = document.querySelector('.page-loading');
          preloader.classList.remove('active');
          setTimeout(function () {
            preloader.remove();
          }, 1500);
        };
      })();
      
    </script>
    <!-- Import Google Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet" id="google-font">
    <!-- Vendor styles-->
    <link rel="stylesheet" media="screen" href="assets/vendor/swiper/swiper-bundle.min.css"/>
    <link rel="stylesheet" media="screen" href="assets/vendor/simplebar/dist/simplebar.min.css"/>
    <link rel="stylesheet" media="screen" href="assets/vendor/lightgallery/css/lightgallery-bundle.min.css"/>
    <!-- Main Theme Styles + Bootstrap-->
    <link rel="stylesheet" media="screen" href="assets/css/theme.min.css">
  </head>
  <!-- Body-->
  <body>

<?php
    
    require('process-form2.php');

    if (isset($formProcessed) && $formProcessed === true) {
        // Display a success message or perform other actions
        echo "Form submitted successfully!";
    }
    ?>
    <!-- Page loading spinner-->
    <div class="page-loading active">
      <div class="page-loading-inner">
        <div class="page-spinner"></div><span>Loading...</span>
      </div>
    </div>
    <!-- Page wrapper-->
    <main class="page-wrapper">
      <div class="dark-mode">
        <!-- Navbar. Remove 'fixed-top' class to make the navigation bar scrollable with the page-->
      <header class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <a href="#" class="navbar-brand">
            <span class="text-primary flex-shrink-0 me-2">
      <svg xmlns="http://www.w3.org/2000/svg" width="32" height="35" viewBox="491.733 456.347 96.252 168.5" xml:space="preserve">
        <g transform="translate(540 540)"/>
        <g transform="translate(540 540)"/>
        <path fill="#3f7fca" vector-effect="non-scaling-stroke" d="M565.002 460.936c-4.62 11.06 -19.88 22.89 -36.61 28.21 -23.73 7.63 -37.59 22.4 -36.61 38.99 0.35 5.39 0.77 6.58 1.61 4.48 4.69 -11.48 6.37 -14.14 12.04 -19.18 7.77 -6.86 18.69 -12.46 30.87 -15.75 10.36 -2.87 19.25 -8.47 24.64 -15.54 4.13 -5.46 10.85 -22.54 9.59 -24.57 -1.54 -2.45 -3.57 -1.19 -5.53 3.36z"/>
        <path fill="#3f7fca" vector-effect="non-scaling-stroke" d="M528.268 460.28c-7.7 3.08 -9.66 12.67 -3.85 19.46 4.83 5.81 11.2 5.88 17.22 0.28 10.78 -10.08 0.42 -25.34 -13.37 -19.74zm-2.781 42.419c-14.35 6.72 -13.65 5.6 -15.26 24.5 -3.29 38.71 11.83 77.21 36.75 93.73 8.68 5.74 13.37 4.97 5.67 -0.98 -37.66 -29.12 -46.13 -87.78 -16.94 -117.04 7 -7 4.34 -7 -10.22 -0.21z"/>
        <path fill="#3f7fca" vector-effect="non-scaling-stroke" d="M521.134 546.287c0 31.15 22.54 59.29 56.91 71.12 4.9 1.68 8.54 2.24 9.31 1.47 1.54 -1.54 0.07 -4.34 -2.31 -4.34 -3.71 0 -22.61 -10.15 -30.59 -16.45 -13.37 -10.5 -25.97 -32.83 -29.33 -52.29 -1.96 -10.85 -3.99 -10.57 -3.99 0.49z"/>
      </svg>
      <svg xmlns="http://www.w3.org/2000/svg" version="1.0" viewBox="0 0 267 40.764" width="267" height="40.764"><path fill="#ff914d" d="M12.846 22.032c-1.959 0 -3.457 -0.55 -4.492 -1.657 -1.042 -1.1 -1.56 -2.66 -1.56 -4.682 0 -0.994 0.158 -1.888 0.478 -2.676 0.317 -0.779 0.747 -1.44 1.305 -1.973A5.372 5.372 0 0 1 10.521 9.8a7.39 7.39 0 0 1 2.484 -0.413c0.509 0 0.963 0.049 1.37 0.129 0.423 0.061 0.795 0.151 1.114 0.255a4.6 4.6 0 0 1 0.796 0.286c0.207 0.111 0.358 0.192 0.447 0.255l-0.765 2.197a6.543 6.543 0 0 0 -1.336 -0.478 5.91 5.91 0 0 0 -1.657 -0.225 3.668 3.668 0 0 0 -1.244 0.225 2.65 2.65 0 0 0 -1.08 0.669 3.387 3.387 0 0 0 -0.734 1.178c-0.192 0.493 -0.286 1.084 -0.286 1.783 0 0.559 0.061 1.075 0.19 1.561 0.129 0.493 0.327 0.917 0.605 1.274 0.272 0.342 0.621 0.621 1.052 0.827 0.444 0.192 0.987 0.286 1.624 0.286a6.974 6.974 0 0 0 1.876 -0.223c0.255 -0.08 0.479 -0.158 0.671 -0.221l0.509 -0.225 0.765 2.166c-0.383 0.238 -0.925 0.447 -1.624 0.638a9.426 9.426 0 0 1 -2.452 0.286zm13.916 -2.612v2.356h-8.087V9.674h2.737v9.744h5.35zm1.765 -9.746h2.739v12.101h-2.739V9.674zm13.649 12.103a70.907 70.907 0 0 0 -2.548 -4.107 36.483 36.483 0 0 0 -2.898 -3.822v7.929h-2.674V9.675h2.231c0.382 0.382 0.802 0.851 1.274 1.401 0.46 0.559 0.931 1.148 1.401 1.783 0.485 0.638 0.964 1.299 1.432 1.974 0.487 0.685 0.939 1.336 1.37 1.974V9.673h2.706v12.101h-2.293zm5.109 -12.103h2.737v12.101h-2.737V9.674zm7.821 6.019c0 0.596 0.071 1.137 0.225 1.624 0.143 0.493 0.348 0.906 0.603 1.244 0.272 0.341 0.614 0.603 1.019 0.795 0.399 0.176 0.861 0.255 1.37 0.255 0.487 0 0.931 -0.081 1.34 -0.255 0.397 -0.192 0.74 -0.454 1.019 -0.795a3.73 3.73 0 0 0 0.636 -1.244 5.736 5.736 0 0 0 0.225 -1.624c0 -0.59 -0.081 -1.122 -0.225 -1.592a3.812 3.812 0 0 0 -0.636 -1.244 3.024 3.024 0 0 0 -1.019 -0.795 3.102 3.102 0 0 0 -1.34 -0.287c-0.509 0 -0.971 0.096 -1.37 0.286a2.917 2.917 0 0 0 -1.019 0.796 3.928 3.928 0 0 0 -0.603 1.244 5.34 5.34 0 0 0 -0.225 1.59zm9.235 0c0 0.876 -0.11 1.648 -0.317 2.323a5.854 5.854 0 0 1 -0.891 1.785 4.901 4.901 0 0 1 -1.34 1.274 5.502 5.502 0 0 1 -1.718 0.732 0.915 0.915 0 0 0 0.351 0.573c0.206 0.143 0.46 0.262 0.765 0.351a5.812 5.812 0 0 0 1.08 0.225c0.399 0.039 0.837 0.077 1.306 0.126l-0.57 1.974a12.694 12.694 0 0 1 -2.357 -0.255 6.125 6.125 0 0 1 -1.624 -0.605 3.326 3.326 0 0 1 -1.082 -0.957 3.915 3.915 0 0 1 -0.573 -1.305 6.523 6.523 0 0 1 -2.039 -0.575 5.31 5.31 0 0 1 -1.595 -1.244 6.171 6.171 0 0 1 -1.08 -1.91 7.696 7.696 0 0 1 -0.383 -2.514c0 -1.019 0.158 -1.919 0.478 -2.706a5.95 5.95 0 0 1 1.336 -1.974A5.028 5.028 0 0 1 55.999 9.8a6.711 6.711 0 0 1 4.648 0c0.741 0.255 1.385 0.66 1.944 1.211 0.55 0.534 0.972 1.194 1.274 1.974 0.317 0.787 0.478 1.688 0.478 2.706zm7.043 6.339a6.522 6.522 0 0 1 -2.231 -0.353 4.222 4.222 0 0 1 -1.528 -1.019 4.483 4.483 0 0 1 -0.892 -1.497 6.392 6.392 0 0 1 -0.286 -1.974V9.674h2.737v7.293c0 0.493 0.049 0.906 0.162 1.244a2.87 2.87 0 0 0 0.478 0.857 1.788 1.788 0 0 0 0.669 0.479c0.272 0.086 0.581 0.126 0.923 0.126 0.651 0 1.185 -0.2 1.592 -0.605 0.423 -0.423 0.638 -1.122 0.638 -2.101V9.674h2.739v7.515a5.85 5.85 0 0 1 -0.321 1.974 3.958 3.958 0 0 1 -0.891 1.528c-0.408 0.429 -0.923 0.755 -1.561 0.987 -0.636 0.232 -1.385 0.351 -2.227 0.351zm7.623 -0.255V9.675h8.186v2.262h-5.445v2.387h4.841v2.231h-4.841v2.93h5.828v2.293h-8.569zm0 0"/><g fill="#ff914d"/><path fill="#ff914d" d="M97.854 21.935c-0.684 0 -1.354 -0.022 -2.006 -0.061a14.58 14.58 0 0 1 -2.039 -0.287V9.833c0.55 -0.102 1.155 -0.176 1.814 -0.225a21.155 21.155 0 0 1 1.881 -0.095c0.765 0 1.464 0.061 2.1 0.19 0.655 0.111 1.22 0.303 1.689 0.575a2.745 2.745 0 0 1 1.082 1.049c0.272 0.43 0.413 0.957 0.413 1.595 0 0.978 -0.468 1.743 -1.401 2.293 0.765 0.302 1.281 0.699 1.56 1.209a3.43 3.43 0 0 1 0.417 1.688c0 1.274 -0.468 2.231 -1.402 2.868 -0.917 0.636 -2.286 0.953 -4.109 0.953zm-1.401 -5.444v3.118c0.207 0.049 0.429 0.081 0.669 0.097h0.765c0.806 0 1.45 -0.111 1.943 -0.351 0.509 -0.232 0.765 -0.669 0.765 -1.305 0 -0.55 -0.213 -0.942 -0.636 -1.179 -0.408 -0.255 -1.002 -0.383 -1.783 -0.383h-1.719zm0 -2.07h1.336c0.843 0 1.45 -0.102 1.814 -0.317 0.362 -0.207 0.541 -0.559 0.541 -1.052 0 -0.485 -0.19 -0.827 -0.57 -1.019 -0.368 -0.207 -0.917 -0.317 -1.657 -0.317 -0.217 0 -0.463 0.016 -0.734 0.03a9.375 9.375 0 0 0 -0.732 0.032v2.644zm9.116 7.356V9.675h8.186v2.262h-5.447v2.387h4.841v2.231h-4.841v2.93h5.83v2.293h-8.569zm18.724 0a17.384 17.384 0 0 0 -0.444 -1.274 83.354 83.354 0 0 1 -0.448 -1.336h-4.744c-0.152 0.447 -0.313 0.892 -0.479 1.336a29.904 29.904 0 0 0 -0.413 1.274h-2.833c0.46 -1.289 0.897 -2.49 1.305 -3.597a107.005 107.005 0 0 1 1.178 -3.154c0.399 -0.972 0.795 -1.895 1.178 -2.772a58.64 58.64 0 0 1 1.179 -2.579h2.609c0.383 0.827 0.766 1.688 1.148 2.579 0.399 0.876 0.795 1.8 1.178 2.772 0.383 0.978 0.775 2.031 1.179 3.154 0.423 1.107 0.857 2.307 1.305 3.597h-2.899zm-3.281 -9.361a21.722 21.722 0 0 1 -0.286 0.732l-0.382 1.052 -0.509 1.305c-0.176 0.468 -0.351 0.972 -0.541 1.498h3.441a24.887 24.887 0 0 0 -0.541 -1.498 21.626 21.626 0 0 0 -0.509 -1.305 31.073 31.073 0 0 0 -0.413 -1.052c-0.111 -0.317 -0.192 -0.559 -0.255 -0.734zm12.523 9.616a6.528 6.528 0 0 1 -2.231 -0.353 4.222 4.222 0 0 1 -1.528 -1.019 4.483 4.483 0 0 1 -0.891 -1.497 6.392 6.392 0 0 1 -0.287 -1.974V9.674h2.739v7.293c0 0.493 0.047 0.906 0.158 1.244a2.87 2.87 0 0 0 0.478 0.857 1.788 1.788 0 0 0 0.669 0.479c0.272 0.086 0.583 0.126 0.925 0.126 0.651 0 1.185 -0.2 1.59 -0.605 0.424 -0.423 0.638 -1.122 0.638 -2.101V9.674h2.739v7.515c0 0.726 -0.111 1.385 -0.317 1.974a3.958 3.958 0 0 1 -0.892 1.528 3.955 3.955 0 0 1 -1.56 0.987c-0.638 0.232 -1.385 0.351 -2.231 0.351zm16.606 -12.358v2.323h-3.663v9.777h-2.706v-9.775h-3.663V9.677h10.031zm1.763 12.103V9.675h8.182v2.262h-5.445v2.387h4.841v2.231h-4.841v2.93h5.828v2.293h-8.566zm0 0"/><g fill="#ff914d"/><path fill="#ff914d" d="M174.829 21.777a70.907 70.907 0 0 0 -2.548 -4.107 36.483 36.483 0 0 0 -2.898 -3.822v7.929h-2.675V9.675h2.227c0.383 0.382 0.806 0.851 1.274 1.401 0.463 0.559 0.931 1.148 1.402 1.783 0.485 0.638 0.964 1.299 1.432 1.974 0.485 0.685 0.939 1.336 1.37 1.974V9.673h2.706v12.101h-2.293zm13.226 0a17.384 17.384 0 0 0 -0.444 -1.274 83.354 83.354 0 0 1 -0.448 -1.336h-4.744c-0.151 0.447 -0.313 0.892 -0.479 1.336a29.904 29.904 0 0 0 -0.413 1.274h-2.833a397.9 397.9 0 0 1 1.305 -3.597 107.005 107.005 0 0 1 1.178 -3.154c0.399 -0.972 0.796 -1.895 1.179 -2.772a54.32 54.32 0 0 1 1.178 -2.579h2.609c0.383 0.827 0.766 1.688 1.148 2.579 0.399 0.876 0.796 1.8 1.179 2.772 0.382 0.978 0.771 2.031 1.178 3.154a114.24 114.24 0 0 1 1.305 3.597h-2.898zm-3.279 -9.361c-0.062 0.172 -0.158 0.413 -0.286 0.732 -0.111 0.302 -0.241 0.651 -0.383 1.052l-0.509 1.305c-0.176 0.468 -0.351 0.972 -0.541 1.498h3.441a24.887 24.887 0 0 0 -0.541 -1.498 21.626 21.626 0 0 0 -0.509 -1.305 31.073 31.073 0 0 0 -0.413 -1.052c-0.111 -0.317 -0.192 -0.559 -0.255 -0.734zm16.759 -2.742v2.323h-3.664v9.777h-2.706v-9.775h-3.663V9.677h10.031zm6.505 12.358a6.509 6.509 0 0 1 -2.227 -0.353 4.222 4.222 0 0 1 -1.528 -1.019 4.483 4.483 0 0 1 -0.892 -1.497 6.392 6.392 0 0 1 -0.286 -1.974V9.674h2.737v7.293c0 0.493 0.049 0.906 0.158 1.244 0.129 0.341 0.286 0.629 0.479 0.857a1.788 1.788 0 0 0 0.669 0.479c0.272 0.086 0.581 0.126 0.923 0.126 0.651 0 1.185 -0.2 1.592 -0.605 0.423 -0.423 0.638 -1.122 0.638 -2.101V9.674h2.737v7.515c0 0.726 -0.11 1.385 -0.317 1.974a3.958 3.958 0 0 1 -0.891 1.528c-0.408 0.429 -0.923 0.755 -1.561 0.987 -0.636 0.232 -1.385 0.351 -2.231 0.351zm11.161 -12.516c1.823 0 3.216 0.334 4.171 0.987 0.972 0.638 1.465 1.641 1.465 2.993 0 0.851 -0.207 1.546 -0.605 2.069 -0.383 0.534 -0.938 0.958 -1.657 1.274 0.232 0.303 0.487 0.651 0.765 1.052 0.272 0.383 0.541 0.789 0.796 1.211 0.255 0.429 0.493 0.876 0.734 1.336 0.253 0.447 0.485 0.892 0.699 1.336h-3.058a63.233 63.233 0 0 0 -0.669 -1.209c-0.238 -0.399 -0.468 -0.796 -0.7 -1.179a35.409 35.409 0 0 0 -0.699 -1.08 11.495 11.495 0 0 0 -0.7 -0.958h-1.336v4.428h-2.739V9.83a19.493 19.493 0 0 1 1.847 -0.22 16.45 16.45 0 0 1 1.688 -0.096zm0.158 2.323a5.667 5.667 0 0 0 -0.54 0.032c-0.151 0 -0.286 0.016 -0.413 0.03v3.281h0.765c1.019 0 1.752 -0.129 2.197 -0.383 0.444 -0.255 0.669 -0.685 0.669 -1.305 0 -0.59 -0.238 -1.019 -0.7 -1.274 -0.447 -0.255 -1.107 -0.383 -1.974 -0.383zm7.979 9.938V9.675h8.186v2.262h-5.445v2.387h4.841v2.231h-4.841v2.93h5.828v2.293h-8.569zm18.691 -2.357v2.356h-8.087V9.674h2.737v9.744h5.35zm9.853 0v2.356h-8.09V9.674h2.739v9.744h5.35zm1.763 2.357V9.675h8.182v2.262h-5.445v2.387h4.841v2.231h-4.841v2.93h5.828v2.293h-8.566zm0 0"/><path fill="#b6591f" d="M11.24 27.25v7.324h3.154v1.847H9.139v-9.173h2.1zm4.271 4.585c0 -1.34 0.448 -2.463 1.34 -3.376a4.485 4.485 0 0 1 3.281 -1.37c1.288 0 2.387 0.463 3.279 1.37 0.891 0.917 1.336 2.039 1.336 3.375 0 1.34 -0.447 2.469 -1.336 3.376 -0.876 0.916 -1.966 1.367 -3.281 1.367 -1.336 0 -2.444 -0.444 -3.313 -1.336 -0.876 -0.906 -1.305 -2.046 -1.305 -3.409zm2.262 0c0 0.492 0.071 0.938 0.225 1.336 0.143 0.382 0.397 0.715 0.765 0.987 0.382 0.279 0.836 0.413 1.367 0.413 0.781 0 1.37 -0.262 1.753 -0.795a3.22 3.22 0 0 0 0.605 -1.944 3.109 3.109 0 0 0 -0.605 -1.91c-0.408 -0.55 -0.988 -0.827 -1.753 -0.827 -0.747 0 -1.329 0.277 -1.752 0.827 -0.408 0.533 -0.605 1.17 -0.605 1.91zm10.509 -1.116v5.702h-2.101v-9.173h2.101l3.629 5.702h0.032v-5.699h2.07v9.173h-2.07l-3.663 -5.702zm7.586 -3.469h2.644a4.601 4.601 0 0 1 3.281 1.305c0.905 0.876 1.367 1.966 1.367 3.281 0 1.321 -0.463 2.41 -1.37 3.279 -0.891 0.876 -1.99 1.305 -3.281 1.305h-2.641v-9.173zm2.101 7.29h0.317c0.765 0 1.377 -0.255 1.849 -0.765 0.485 -0.509 0.74 -1.154 0.765 -1.943 0 -0.765 -0.247 -1.401 -0.734 -1.91a2.465 2.465 0 0 0 -1.879 -0.795h-0.317v5.411zm6.195 -2.705c0 -1.34 0.447 -2.463 1.336 -3.376a4.485 4.485 0 0 1 3.281 -1.37c1.288 0 2.389 0.463 3.279 1.37 0.892 0.917 1.336 2.039 1.336 3.375 0 1.34 -0.444 2.469 -1.336 3.376 -0.876 0.916 -1.966 1.367 -3.281 1.367 -1.336 0 -2.444 -0.444 -3.309 -1.336 -0.876 -0.906 -1.306 -2.046 -1.306 -3.409zm2.262 0c0 0.492 0.071 0.938 0.221 1.336 0.143 0.382 0.397 0.715 0.765 0.987 0.382 0.279 0.836 0.413 1.37 0.413 0.779 0 1.37 -0.262 1.752 -0.795a3.22 3.22 0 0 0 0.605 -1.944 3.109 3.109 0 0 0 -0.605 -1.91c-0.408 -0.55 -0.987 -0.827 -1.753 -0.827 -0.747 0 -1.329 0.277 -1.752 0.827 -0.405 0.533 -0.605 1.17 -0.605 1.91zm10.506 -1.116v5.702h-2.1v-9.173h2.1l3.633 5.702h0.03v-5.699h2.07v9.173h-2.07l-3.663 -5.702zm7.586 1.627h3.567v1.718h-3.567v-1.719zm10.296 2.194c0.317 0 0.62 -0.041 0.923 -0.126a2.629 2.629 0 0 0 0.669 -0.317l0.225 -0.129 0.891 1.783a1.853 1.853 0 0 0 -0.158 0.096l-0.351 0.192a2.842 2.842 0 0 1 -0.605 0.286 6.03 6.03 0 0 1 -0.861 0.162 5.964 5.964 0 0 1 -1.052 0.095 5.044 5.044 0 0 1 -4.267 -2.323 4.374 4.374 0 0 1 -0.699 -2.389c0 -0.651 0.135 -1.281 0.413 -1.879a4.637 4.637 0 0 1 1.082 -1.497 5.643 5.643 0 0 1 1.592 -1.019 4.881 4.881 0 0 1 1.879 -0.383c0.59 0 1.13 0.081 1.624 0.225 0.509 0.126 0.868 0.268 1.082 0.413l0.321 0.19 -0.892 1.783 -0.255 -0.158a4.575 4.575 0 0 0 -0.636 -0.255 2.816 2.816 0 0 0 -0.923 -0.158c-0.509 0 -0.972 0.087 -1.37 0.255a2.623 2.623 0 0 0 -0.923 0.669 2.706 2.706 0 0 0 -0.541 0.861 2.341 2.341 0 0 0 -0.192 0.923c0 0.7 0.255 1.33 0.765 1.879 0.527 0.559 1.285 0.827 2.262 0.827zm8.652 -7.29 3.696 9.173h-2.231l-0.669 -1.849h-3.503l-0.669 1.847h-2.262l3.696 -9.173h1.943zm0.066 5.506 -1.019 -2.675h-0.032l-1.019 2.675h2.07zm4.504 -5.506h3.281c0.867 0 1.576 0.237 2.131 0.699 0.575 0.468 0.861 1.148 0.861 2.039 0 0.66 -0.176 1.226 -0.509 1.688a2.785 2.785 0 0 1 -1.37 0.957l3.154 3.792h-2.675l-2.772 -3.633v3.629h-2.1v-9.173zm2.101 4.076h0.704a3.158 3.158 0 0 0 0.478 -0.097 1.048 1.048 0 0 0 0.417 -0.19 0.851 0.851 0 0 0 0.255 -0.351 1.105 1.105 0 0 0 0.126 -0.541 1.22 1.22 0 0 0 -0.126 -0.573 0.918 0.918 0 0 0 -0.255 -0.383 1.33 1.33 0 0 0 -0.417 -0.19 2.196 2.196 0 0 0 -0.478 -0.066 3.764 3.764 0 0 0 -0.478 -0.03h-0.225v2.419zm6.365 -4.076h2.644a4.601 4.601 0 0 1 3.281 1.305c0.906 0.876 1.37 1.966 1.37 3.281 0 1.321 -0.463 2.41 -1.37 3.279 -0.892 0.876 -1.991 1.305 -3.281 1.305h-2.644v-9.173zm2.104 7.29h0.317c0.765 0 1.377 -0.255 1.847 -0.765 0.487 -0.509 0.741 -1.154 0.765 -1.943 0 -0.765 -0.245 -1.401 -0.734 -1.91a2.465 2.465 0 0 0 -1.876 -0.795h-0.317v5.411zm8.708 -7.29v9.173h-2.101V27.25h2.101zm7.118 0v1.847h-3.184v1.814h2.962v1.814h-2.962v3.696h-2.105v-9.173h5.286zm6.808 0v1.847h-3.184v1.814h2.962v1.814h-2.962v3.696h-2.101v-9.173h5.285zm1.525 5.096h3.567v1.718h-3.567v-1.719zm13.001 4.076 -0.448 -5.449h-0.03l-1.879 5.382h-1.244l-1.876 -5.381h-0.062l-0.447 5.444h-2.07l0.796 -9.173h2.231l2.039 5.286 2.039 -5.286h2.231l0.827 9.173h-2.101zm10.479 -9.172v5.923c0 1.129 -0.309 1.973 -0.923 2.548 -0.596 0.57 -1.481 0.857 -2.644 0.857 -1.17 0 -2.062 -0.286 -2.676 -0.857 -0.62 -0.575 -0.923 -1.419 -0.923 -2.548v-5.924h2.104v5.32c0 0.724 0.11 1.233 0.348 1.528 0.232 0.302 0.614 0.444 1.148 0.444 0.527 0 0.906 -0.143 1.145 -0.444 0.232 -0.296 0.351 -0.806 0.351 -1.528v-5.32h2.07zm9.319 9.172 -0.448 -5.449h-0.03l-1.879 5.382h-1.244l-1.876 -5.381h-0.062l-0.447 5.444h-2.07l0.796 -9.173h2.231l2.039 5.286 2.039 -5.286h2.231l0.827 9.173h-2.101zm3.439 -9.172h2.833c0.868 0 1.561 0.19 2.07 0.57 0.509 0.368 0.765 0.947 0.765 1.753 0 0.938 -0.382 1.592 -1.145 1.974 1.288 0.238 1.943 1.012 1.943 2.323 0 0.765 -0.272 1.385 -0.795 1.849 -0.535 0.468 -1.268 0.699 -2.198 0.699h-3.471v-9.173zm2.101 3.597h0.158c0.463 0 0.806 -0.081 1.019 -0.255 0.231 -0.166 0.351 -0.43 0.351 -0.795 0 -0.615 -0.46 -0.925 -1.37 -0.925h-0.158v1.974zm0 3.949h0.638c1.019 0 1.528 -0.334 1.528 -1.019 0 -0.397 -0.129 -0.685 -0.383 -0.857 -0.255 -0.192 -0.636 -0.287 -1.145 -0.287h-0.638v2.165zm10.46 -7.546 3.692 9.173h-2.227l-0.669 -1.849h-3.506l-0.666 1.847h-2.262l3.696 -9.173h1.943zm0.062 5.506 -1.019 -2.675h-0.03l-1.019 2.675h2.069zm6.609 -5.506v9.173h-2.101V27.25h2.101zm0 0"/></svg>
 
    </span>
          </a>
          <div class="form-check form-switch mode-switch order-lg-2 me-3 me-lg-4 ms-auto" data-bs-toggle="mode">
            <input type="checkbox" class="form-check-input" id="theme-mode">
            <label for="theme-mode" class="form-check-label">
              <i class="ai-sun fs-lg"></i>
            </label>
            <label for="theme-mode" class="form-check-label">
              <i class="ai-moon fs-lg"></i>
            </label>
          </div>
          <div class="d-flex align-items-center order-lg-2 ms-auto">
            <a href="tel:+91 9930 2039 80" class="d-flex align-items-center text-decoration-none">
              <i class="ai-phone fs-3"></i>
              <div class="text-nowrap ps-2 d-none d-lg-block">
                <h6 class="fs-sm lh-1 mb-0">Call us</h6>
                <span class="text-body fs-xs">+91 9930203980</span>
              </div>
            </a>
          </div>
          <button type="button" class="navbar-toggler ms-3" data-bs-toggle="collapse" data-bs-target="#navbarCollapse4">
            <span class="navbar-toggler-icon"></span>
          </button>
          <nav class="collapse navbar-collapse" id="navbarCollapse4">
            <ul class="navbar-nav">
               <li class="nav-item"><a href="index.html" class="nav-link">Home</a></li>
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Procedures</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="procedures.html">Cosmetic Surgery</a></li>
                  <li><a class="dropdown-item" href="procedures2.html">Laser Surgery</a></li>
                  <li><a class="dropdown-item" href="procedures3.html">Non-Surgical Beauty</a></li>
                  <li ><a class="dropdown-item" href="procedures4.html">Cosmetic Gynaecology</a></li>
                </ul>
              </li>
              <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
              <li class="nav-item active"><a href="contacts-v1.php" class="nav-link">Contact us</a></li>
            </ul>
          </nav>
        </div>
      </header>
      </div>
      <!-- Page content-->
      <!-- Hero-->
      <section class="bg-dark dark-mode position-relative py-5">
        <div class="position-absolute top-0 start-0 w-100 h-100" style="background-image: url(assets/img/landing/conference/noise.png); mix-blend-mode: soft-light; opacity: 12%"></div>
        <div class="container position-relative zindex-2 py-md-3 py-lg-4 py-xl-5">
          <div class="row align-items-center justify-content-center pt-5 pb-2 pb-sm-3 mt-sm-4">
            <div class="col-10 col-sm-8 col-md-6 col-xl-5 offset-lg-1 offset-xl-2 order-md-2 pb-3 pb-md-0 mb-3 mb-sm-4 mb-md-0">
              <div class="swiper" data-swiper-options="{
              &quot;effect&quot;: &quot;creative&quot;,
              &quot;loop&quot;: true,
              &quot;allowTouchMove&quot;: false,
              &quot;speed&quot;: 450,
              &quot;autoplay&quot;: {
                &quot;delay&quot;: 6000,
                &quot;disableOnInteraction&quot;: false
              },
              &quot;creativeEffect&quot;: {
                &quot;prev&quot;: {
                  &quot;shadow&quot;: true,
                  &quot;translate&quot;: [&quot;-20%&quot;, 0, -1]
                },
                &quot;next&quot;: {
                  &quot;translate&quot;: [&quot;100%&quot;, 0, 0]
                }
              },
              &quot;thumbnails&quot;: {
                &quot;el&quot;: &quot;#thumbnails&quot;,
                &quot;images&quot;: [
                  &quot;assets/img/landing/conference/hero/th01.jpg&quot;,
                  &quot;assets/img/landing/conference/hero/th02.jpg&quot;,
                  &quot;assets/img/landing/conference/hero/th03.jpg&quot;
                ]
              }
            }" style="border-radius: 50%; border-bottom-right-radius: 0;">
                <div class="swiper-wrapper">
                  <!-- Item-->
                  <div class="swiper-slide">
                    <div class="position-relative overflow-hidden" style="border-bottom-left-radius: 50%; border-top-left-radius: 50%;"><img src="assets/img/landing/conference/hero/01.jpg" alt="Image">
                      <div class="d-flex align-items-end justify-content-end position-absolute start-0 bottom-0 w-100" style="height: 215px; background: linear-gradient(0deg, rgba(15, 17, 21, 0.8) 0%, rgba(16, 20, 24, 0) 100%);">
                        <div class="text-end pe-4 pb-4">
                          <h3 class="h5 mb-1">Dr Prashant Murugkar</h3>
                          <p class="fs-sm mb-0">Laser Cosmetic Surgeon</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <!-- Item-->
                  <div class="swiper-slide">
                    <div class="position-relative overflow-hidden" style="border-bottom-left-radius: 50%; border-top-left-radius: 50%;"><img src="assets/img/landing/conference/hero/03.jpg" alt="Image">
                      <div class="d-flex align-items-end justify-content-end position-absolute start-0 bottom-0 w-100" style="height: 215px; background: linear-gradient(0deg, rgba(15, 17, 21, 0.8) 0%, rgba(16, 20, 24, 0) 100%);">
                        <div class="text-end pe-4 pb-4">
                          <h3 class="h5 mb-1">Dr Harinakshi Murugkar</h3>
                          <p class="fs-sm mb-0">Cosmetic Gynaecology & Menopause Specialist</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Thumbnails-->
              <div class="swiper-thumbnails swiper-thumbnails-circle flex-nowrap justify-content-end pt-4" id="thumbnails"></div>
            </div>
            <div class="col-sm-10 col-md-6 col-lg-5 order-md-1">
              <div class="d-flex align-items-center lead pb-3 pb-sm-4 pb-lg-5 mb-2 mb-md-3 mb-lg-0 mb-xl-2">
                <div class="text-light">Doctors</div>
                <div class="text-warning mx-3 mx-sm-4">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 0L12.6798 4.12733C13.2879 7.81883 16.1812 10.7121 19.8727 11.3202L24 12L19.8727 12.6798C16.1812 13.2879 13.2879 16.1812 12.6798 19.8727L12 24L11.3202 19.8727C10.7121 16.1812 7.81882 13.2879 4.12733 12.6798L0 12L4.12733 11.3202C7.81883 10.7121 10.7121 7.81882 11.3202 4.12733L12 0Z"></path>
                  </svg>
                </div>
                <div class="text-light">Clinique Beaute Naturelle</div>
              </div>
              
              
              <p class="fs-lg pb-2 pb-sm-3 pb-md-4 pb-xl-5 mb-xl-2"> Dr Prashant is a board certified Plastic Surgeon (MCh and DNB) and a member of the Royal College of Surgeons of Edinburgh, UK.</p>
              <p class="fs-lg pb-2 pb-sm-3 pb-md-4 pb-xl-5 mb-xl-2"> Dr Harinakshi (MRCOG, MD, DGO, DFP) is a board certified Obstetrics and Gynaecology Consultant who specialises in Cosmetic Gynaecology, Hormonal and Menopausal Medicine</p>
              <div class="d-sm-flex"><a class="btn btn-lg btn-secondary w-100 w-md-auto mb-3 mb-sm-0 me-sm-3 me-lg-4" href="#bookvisit" data-scroll data-scroll-offset="120">Book Your Visit</a><a class="btn btn-lg btn-outline-light w-100 w-md-auto" href="tel:+919930203980"><i class="ai-phone me-2 ms-n2"></i>Call Now</a></div>
            </div>
          </div>
        </div>
      </section>
      <!-- Statistics-->
      <section class="bg-secondary position-relative py-4 py-md-5">
        <div class="container position-relative zindex-2">
          <div class="row row-cols-2 row-cols-md-4">
            <div class="col">
              <div class="py-3 my-lg-2 my-xl-3">
                <div class="text-dark display-4 mb-1">16</div>
                <p class="fs-xl mb-0">Speakers</p>
              </div>
            </div>
            <div class="col">
              <div class="py-3 ps-xl-4 my-lg-2 my-xl-3">
                <div class="text-dark display-4 mb-1">12+</div>
                <p class="fs-xl mb-0">Hours on stage</p>
              </div>
            </div>
            <div class="col d-flex justify-content-md-center">
              <div class="py-3 my-lg-2 my-xl-3">
                <div class="text-dark display-4 mb-1">1,5k</div>
                <p class="fs-xl mb-0">Offline attendees</p>
              </div>
            </div>
            <div class="col d-flex justify-content-md-end">
              <div class="py-3 pe-xl-4 my-lg-2 my-xl-3">
                <div class="text-dark display-4 mb-1">100%</div>
                <p class="fs-xl mb-0">Good times</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Target audience-->
      <section class="container pt-5 mt-xl-3 mt-xxl-5">
        <div class="row pt-1 pt-sm-3 pt-md-4 pt-lg-5 mt-xl-2">
          <div class="col-lg-4">
            <h2 class="h1 pb-1 pb-sm-2 mb-4">Reviews in various treatments</h2>
          </div>
          <div class="col-lg-8 col-xl-7 offset-xl-1">
            <div class="ps-lg-4 ps-xl-0">
              <div data-simplebar>
                <ul class="nav nav-tabs flex-nowrap mb-2" role="tablist">
                  <li class="nav-item"><a class="nav-link text-nowrap px-4 px-lg-3 px-xl-4 active" href="#designers" data-bs-toggle="tab" role="tab">
                    All treatments</a></li>
                  <li class="nav-item"><a class="nav-link text-nowrap px-4 px-lg-3 px-xl-4" href="#developers" data-bs-toggle="tab" role="tab">
                    Asian Rhinoplasty

                    </a></li>
                  <li class="nav-item"><a class="nav-link text-nowrap px-4 px-lg-3 px-xl-4" href="#managers" data-bs-toggle="tab" role="tab">
                    Botox</a></li>
                  <li class="nav-item"><a class="nav-link text-nowrap px-4 px-lg-3 px-xl-4" href="#marketers" data-bs-toggle="tab" role="tab">Laser Resurfacing</a></li>
                </ul>
              </div>
              <div class="tab-content py-2 pb-md-0 pt-sm-3 pt-lg-4 mb-4 mb-md-5">
                <div class="tab-pane fade show active" id="designers" role="tabpanel">
                  <ul class="fs-xl mb-0">
                    <li class="mb-1">Excellent treatment of thread veins with sclerotherapy. All the staff were very professional and put you at ease. Treatment was completed quickly and with minimum pain or discomfort. Pleased with the results.</li>
                    <li class="mb-1">Incredible experience with Dr Prashant Murugkar. I’m only 26 but he made me feel welcome had good banter and laughs within the lead up to the operation to remove my 3 moles. 2 of them were removed with the laser, and one large one cut out in my groin and stitched.</li>
                    <li class="mb-1">All stages went very well, including the consultation and procedure and post-procedure engagements. The Dr and his team were professional, helpful and always make themselves available to help.</li>
                    <li class="mb-1">Amazing treatment process and natural results as usual, I had lip and tear through fillers. No pain during the treatment, would totally recommend. The Dr is very friendly, professional and will listen to your needs.</li>
                  </ul>
                </div>
                <div class="tab-pane fade" id="developers" role="tabpanel">
                  <ul class="fs-xl mb-0">
                    <li class="mb-1">Very happy with sclerotherapy for thread veins, quick & minimum pain</li>
                    <li class="mb-1">Had visited Dr. Prashant Murugkar for RHINOPLASTY surgery. A true professional in his professional of Plastic & Cosmetic Surgery. His approach was +ve as he explained me the entire procedure involved in the surgery clearly. The post surgery result is fantastic & beyond my expectation. !!!!! GREAT NOSE JOB DONE by Dr. Prashant Murugkar.</li>
                    
                  </ul>
                </div>
                <div class="tab-pane fade" id="managers" role="tabpanel">
                  <ul class="fs-xl mb-0">
                    <li class="mb-1">Dr. Prashant is a great doctor, very professional . His consultation is very thorough and detailed. I like the effects of the administered treatment. I intend on returning for fillers and additional Botox when the time comes.</li>
                    <li class="mb-1">You come away from his clinic with a more relaxed and positive approach</li>
                    <li class="mb-1">You come away from his clinic with a more relaxed and positive approach</li>
                  </ul>
                </div>
                <div class="tab-pane fade" id="marketers" role="tabpanel">
                  <ul class="fs-xl mb-0">
                    <li class="mb-1">Recently had a mole removed with Dr Prashant, I cannot speak more highly of my experience at Cardiff branch. Extremely professional and put me at ease straight away, Highly recommended. Thanks again!</li>
                    
                  </ul>
                </div>
              </div><a class="btn btn-lg btn-primary w-100 w-sm-auto" href="https://www.realself.com/dr/prashant-murugkar-mumbai-india#reviews" data-scroll data-scroll-offset="120">Read More on RealSelf</a>
            </div>
          </div>
        </div>
      </section>
       
      
      
      <!-- Schedule-->
      <section class="container py-5 mb-lg-2 mt-lg-3 my-xl-4 my-xxl-5">
        <div class="d-md-flex align-items-center justify-content-between pt-2 pt-sm-3 pb-3 mt-md-3 mb-3 mb-lg-4">
          <div class="d-flex align-items-center mb-4 mb-md-0">
            <h2 class="h1 mb-0">Daily Timings</h2>
            <div class="text-warning flex-shrink-0 ps-sm-1 ms-3">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 0L12.6798 4.12733C13.2879 7.81883 16.1812 10.7121 19.8727 11.3202L24 12L19.8727 12.6798C16.1812 13.2879 13.2879 16.1812 12.6798 19.8727L12 24L11.3202 19.8727C10.7121 16.1812 7.81882 13.2879 4.12733 12.6798L0 12L4.12733 11.3202C7.81883 10.7121 10.7121 7.81882 11.3202 4.12733L12 0Z"></path>
              </svg>
            </div>
          </div>
          <ul class="nav nav-tabs flex-nowrap mb-0" role="tablist">
            <li class="nav-item me-1"><a class="nav-link px-3 px-sm-4 active" href="#dayOne" data-bs-toggle="tab" role="tab">SMC Medical Centre</a></li>
            <li class="nav-item"><a class="nav-link px-3 px-sm-4" href="#dayTwo" data-bs-toggle="tab" role="tab">KLS Memorial Hospital</a></li>
          </ul>
        </div>
        <div class="tab-content border-top border-bottom mb-3 mb-sm-4 mb-lg-5">
          <!-- Day 1 tab-->
          <div class="tab-pane fade show active" id="dayOne" role="tabpanel">
            <div class="row py-3 my-2 my-md-3">
              <div class="col-md-3">
                <div class="h6 mb-2 mb-md-0">11:00-20:00</div>
              </div>
              <div class="col-md-6">
                <h3 class="h4 mb-0">Mon - Sat at SMC Medical Centre</h3>
                <p class="pt-2 pt-md-3 mb-md-0">204, Second Floor, Fortune Sagar Building, Waterfield Road, Off Linking Rd, Above AKreations Luxury Salon, Mumbai – 400050</p>
              </div>
              <div class="col-md-3 text-md-end">
                <div class="d-inline-flex">
                  <div class="bg-light flex-shrink-0 rounded-circle position-relative zindex-4" style="padding: 3px;"><img class="rounded-circle" src="assets/img/avatar/th01.jpg" width="48" alt="dr prashant"></div>
                  <div class="bg-light flex-shrink-0 rounded-circle position-relative zindex-3 ms-n3" style="padding: 3px;"><img class="rounded-circle" src="assets/img/avatar/th02.jpg" width="48" alt="dr hariankshi"></div>
                </div>
              </div>
            </div>
            <hr>      
          </div>
          <!-- Day 2 tab-->
          <div class="tab-pane fade" id="dayTwo" role="tabpanel">
            <div class="row py-3 my-2 my-md-3">
              <div class="col-md-3">
                <div class="h6 mb-2 mb-md-0">11:00-20:00</div>
              </div>
              <div class="col-md-6">
                <h3 class="h4 mb-0">Tue,Thu & Sat at KLS Memorial Hospital</h3>
                <p class="pt-2 pt-md-3 mb-md-0">Narvir Tanaji Malusare Marg, Irla, Vile Parle West, Mumbai – 400056. </p>
              </div>
              <div class="col-md-3 text-md-end">
                <div class="d-inline-flex">
                  <div class="bg-light flex-shrink-0 rounded-circle position-relative zindex-4" style="padding: 3px;"><img class="rounded-circle" src="assets/img/avatar/th01.jpg" width="48" alt="Avatar"></div>
                  <div class="bg-light flex-shrink-0 rounded-circle position-relative zindex-4" style="padding: 3px;"><img class="rounded-circle" src="assets/img/avatar/th02.jpg" width="48" alt="Avatar"></div>
                </div>
              </div>
            </div>
            <hr>
           
          </div>
        </div>
      </section>
     
      
      <!-- Gallery-->
      <section class="container py-5 my-lg-3 my-xl-4 my-xxl-5">
        <div class="py-2 py-sm-3 py-md-4 my-md-2 my-xxl-3">
          <h2 class="h1 text-center pt-xxl-1">See our previous succesfull surgeries</h2>
          <p class="fs-lg text-center pb-3 mb-lg-4">Dr Prashant is bringing more than a decade of International Plastic Surgical expertise to help you look “Naturally Beautiful”.</p>
          <div class="gallery row g-3 g-md-4" data-video="true">
            <div class="col-sm-6">
              <div class="row g-3 g-md-4">
                <div class="col-6"><a class="gallery-item d-block card-hover zoom-effect" href="assets/img/landing/conference/gallery/01.jpg">
                    <div class="d-flex justify-content-center align-items-center position-absolute top-0 start-0 w-100 h-100 rounded-4 overflow-hidden zindex-2 opacity-0"><i class="ai-zoom-in fs-2 text-white position-relative zindex-2"></i>
                      <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-40"></div>
                    </div>
                    <div class="zoom-effect-wrapper rounded-4"><img class="zoom-effect-img" src="assets/img/landing/conference/gallery/th01.jpg" alt="Auditorium"></div></a></div>
                <div class="col-6"><a class="gallery-item d-block card-hover zoom-effect" href="assets/img/landing/conference/gallery/02.jpg">
                    <div class="d-flex justify-content-center align-items-center position-absolute top-0 start-0 w-100 h-100 rounded-4 overflow-hidden zindex-2 opacity-0"><i class="ai-zoom-in fs-2 text-white position-relative zindex-2"></i>
                      <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-40"></div>
                    </div>
                    <div class="zoom-effect-wrapper rounded-4"><img class="zoom-effect-img" src="assets/img/landing/conference/gallery/th02.jpg" alt="Comfortable chairs"></div></a></div>
                <div class="col-12"><a class="gallery-item d-block card-hover zoom-effect" href="https://www.youtube.com/watch?v=5-A8_ocajCM">
                    <div class="btn btn-icon btn-lg btn-primary rounded-circle pe-none position-absolute top-50 start-50 translate-middle zindex-3"><i class="ai-play-filled"></i></div>
                    <div class="position-absolute top-0 start-0 w-100 h-100 rounded-4 overflow-hidden zindex-2 opacity-0">
                      <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-40"></div>
                    </div>
                    <div class="zoom-effect-wrapper rounded-4"><img class="zoom-effect-img" src="assets/img/landing/conference/gallery/th05.jpg" alt="Conferece showreel"></div></a></div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="row g-3 g-md-4">
                <div class="col-6 order-sm-2"><a class="gallery-item d-block card-hover zoom-effect" href="assets/img/landing/conference/gallery/03.jpg">
                    <div class="d-flex justify-content-center align-items-center position-absolute top-0 start-0 w-100 h-100 rounded-4 overflow-hidden zindex-2 opacity-0"><i class="ai-zoom-in fs-2 text-white position-relative zindex-2"></i>
                      <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-40"></div>
                    </div>
                    <div class="zoom-effect-wrapper rounded-4"><img class="zoom-effect-img" src="assets/img/landing/conference/gallery/th03.jpg" alt="Whiteboard"></div></a></div>
                <div class="col-6 order-sm-3"><a class="gallery-item d-block card-hover zoom-effect" href="assets/img/landing/conference/gallery/04.jpg">
                    <div class="d-flex justify-content-center align-items-center position-absolute top-0 start-0 w-100 h-100 rounded-4 overflow-hidden zindex-2 opacity-0"><i class="ai-zoom-in fs-2 text-white position-relative zindex-2"></i>
                      <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-40"></div>
                    </div>
                    <div class="zoom-effect-wrapper rounded-4"><img class="zoom-effect-img" src="assets/img/landing/conference/gallery/th04.jpg" alt="Coffee break"></div></a></div>
                <div class="col-12 order-sm-1"><a class="gallery-item d-block card-hover zoom-effect" href="https://www.youtube.com/watch?v=Omr18ybhPKI">
                    <div class="btn btn-icon btn-lg btn-primary rounded-circle pe-none position-absolute top-50 start-50 translate-middle zindex-3"><i class="ai-play-filled"></i></div>
                    <div class="position-absolute top-0 start-0 w-100 h-100 rounded-4 overflow-hidden zindex-2 opacity-0">
                      <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-40"></div>
                    </div>
                    <div class="zoom-effect-wrapper rounded-4"><img class="zoom-effect-img" src="assets/img/landing/conference/gallery/th06.jpg" alt="Speaker on stage"></div></a></div>
              </div>
            </div>
          </div>
          <div class="text-center pb-lg-2 pb-xl-3 pb-xxl-3 pt-4 pt-md-5 mt-3 mt-md-0"><a class="btn btn-lg btn-outline-primary" href="#">See more<i class="ai-image ms-2"></i></a></div>
        </div>
      </section>
      <!-- Contact form-->
      <section class="bg-primary ignore-dark-mode position-relative py-5">
        <div class="bg-dark position-absolute top-0 start-0 w-100 h-100 opacity-5"></div>
        <div class="position-absolute top-0 start-0 w-100 h-100 opacity-15" style="background-image: url(assets/img/landing/conference/noise.png); mix-blend-mode: soft-light;"></div>
        <div class="container position-relative zindex-2 pt-sm-2 pb-3 py-md-4 py-lg-5">
          <div class="row align-items-center">
            <div class="col-md-6 col-lg-5 col-xxl-4 pb-2 pb-md-0 mb-4 mb-md-0">
              <div class="text-warning pb-3 mb-1 mb-md-2 mb-lg-3">
                <svg class="d-block" width="28" height="28" viewBox="0 0 28 28" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path d="M14 0L14.659 4.14233C15.4424 9.06596 20.2555 12.9977 26.4868 13.8042L28 14L26.4868 14.1958C20.2555 15.0023 15.4424 18.934 14.659 23.8577L14 28L13.341 23.8577C12.5576 18.934 7.74447 15.0023 1.51323 14.1958L0 14L1.51323 13.8042C7.74447 12.9977 12.5576 9.06596 13.341 4.14234L14 0Z"></path>
                </svg>
              </div>
              <h2 class="display-5 text-light mb-4 mb-md-5">Book your visit now</h2>
              <div class="d-flex align-items-center">
                <div class="d-flex me-3">
                  <div class="bg-white flex-shrink-0 rounded-circle position-relative zindex-4" style="padding: 3px;"><img class="rounded-circle" src="assets/img/avatar/th01.jpg" width="48" alt="Avatar"></div>
                  <div class="bg-white flex-shrink-0 rounded-circle position-relative zindex-3 ms-n3" style="padding: 3px;"><img class="rounded-circle" src="assets/img/avatar/th02.jpg" width="48" alt="Avatar"></div>
                </div>
                <p class="text-light mb-0">And get exciting offers<strong></strong> <span class='text-light opacity-70'></span></p>
              </div>
            </div>
            <div class="col-md-6 offset-lg-1 offset-xxl-2" id="bookvisit">
    <div class="card bg-white border-0 p-1 p-sm-2 p-lg-3">
        <form class="card-body needs-validation p-4"  method="POST" onsubmit="submitForm(event); return submitted;">
            <div class="mb-4">
                <label class="form-label fs-base" for="email">Email</label>
                <input class="form-control form-control-lg" type="email" placeholder="Email address" required id="email" name="email">
                <div class="invalid-feedback">Please provide a valid email address!</div>
            </div>
            <div class="mb-4">
                <label class="form-label fs-base" for="name">Name</label>
                <input class="form-control form-control-lg" type="text" placeholder="Your name" required id="name" name="name">
                <div class="invalid-feedback">Please enter your name!</div>
            </div>
            <div class="mb-4">
                <label class="form-label fs-base" for="message">Message</label>
                <textarea class="form-control form-control-lg" rows="5" placeholder="Your message" name="message" required id="message"></textarea>
                <div class="invalid-feedback">Please enter your message!</div>
            </div>
            <button class="btn btn-lg btn-warning" type="submit">Send request</button>
        </form>
    </div>
</div>
</div>
</div>
</section>
<script type="text/javascript">
  var submitted = false;
  
  function showModal() {
      $('#modalId').modal('show'); //  form is submitted
      $('#gform')[0].reset(); // Reset the form
  }
  
  $('#gform').on('submit', function(e) {
      $('#gform *').fadeOut(2000);
      $('#gform').prepend('Your submission has been processed...');
  });
</script>

    </main>
    <footer class="footer py-5">
      <div class="container pt-md-2 pt-lg-3 pt-xl-4">
        <div class="row pb-5 pt-sm-2 mb-lg-2">
          <div class="col-md-12 col-lg-3 pb-2 pb-lg-0 mb-4 mb-lg-0"><a class="navbar-brand py-0 mb-3 mb-lg-4" href="index.html"><span class="text-primary flex-shrink-0 me-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="35" viewBox="491.733 456.347 96.252 168.5" xml:space="preserve">
              <g transform="translate(540 540)"/>
              <g transform="translate(540 540)"/>
              <path fill="#3f7fca" vector-effect="non-scaling-stroke" d="M565.002 460.936c-4.62 11.06 -19.88 22.89 -36.61 28.21 -23.73 7.63 -37.59 22.4 -36.61 38.99 0.35 5.39 0.77 6.58 1.61 4.48 4.69 -11.48 6.37 -14.14 12.04 -19.18 7.77 -6.86 18.69 -12.46 30.87 -15.75 10.36 -2.87 19.25 -8.47 24.64 -15.54 4.13 -5.46 10.85 -22.54 9.59 -24.57 -1.54 -2.45 -3.57 -1.19 -5.53 3.36z"/>
              <path fill="#3f7fca" vector-effect="non-scaling-stroke" d="M528.268 460.28c-7.7 3.08 -9.66 12.67 -3.85 19.46 4.83 5.81 11.2 5.88 17.22 0.28 10.78 -10.08 0.42 -25.34 -13.37 -19.74zm-2.781 42.419c-14.35 6.72 -13.65 5.6 -15.26 24.5 -3.29 38.71 11.83 77.21 36.75 93.73 8.68 5.74 13.37 4.97 5.67 -0.98 -37.66 -29.12 -46.13 -87.78 -16.94 -117.04 7 -7 4.34 -7 -10.22 -0.21z"/>
              <path fill="#3f7fca" vector-effect="non-scaling-stroke" d="M521.134 546.287c0 31.15 22.54 59.29 56.91 71.12 4.9 1.68 8.54 2.24 9.31 1.47 1.54 -1.54 0.07 -4.34 -2.31 -4.34 -3.71 0 -22.61 -10.15 -30.59 -16.45 -13.37 -10.5 -25.97 -32.83 -29.33 -52.29 -1.96 -10.85 -3.99 -10.57 -3.99 0.49z"/>
            </svg>
            </span><span class="text-nav">Clinique Beaute Naturelle</span></a>
            <p class="fs-sm pb-2 pb-lg-3 mb-3">Come to us if you are looking for Cosmetic treatments delivered by an expert using the latest International techniques.</p>
            <div class="d-flex"><a class="btn btn-icon btn-sm btn-secondary btn-facebook rounded-circle me-3" href="#"><i class="ai-facebook"></i></a><a class="btn btn-icon btn-sm btn-secondary btn-instagram rounded-circle me-3" href="#"><i class="ai-instagram"></i></a><a class="btn btn-icon btn-sm btn-secondary btn-linkedin rounded-circle" href="#"><i class="ai-linkedin"></i></a></div>
          </div>
          <div class="col-sm-3 col-lg-2 offset-xl-1 mb-4 mb-sm-0">
            <ul class="nav flex-column">
              <li><a class="nav-link py-1 px-0" href="index.html">Home</a></li>
              <li><a class="nav-link py-1 px-0" href="procedures.html">Procedures</a></li>
              <li><a class="nav-link py-1 px-0" href="about.html">About us</a></li>
              <li><a class="nav-link py-1 px-0" href="contacts-v1.html"> Contact Us</a></li>
            </ul>
          </div>
          <div class="col-sm-4 col-lg-2 mb-4 mb-sm-0">
            <ul class="nav flex-column">
              <li><a class="nav-link py-1 px-0" href="mailto:contact@example.com">beautydrin@gmail.com</a></li>
              <li><a class="nav-link py-1 px-0" href="tel:+919930203980">+91 9930203980</a></li>
              <li><a class="nav-link py-1 px-0" href="tel:+919619309035">+91 9619309035</a></li>
            </ul>
          </div>
          <div class="col-sm-5 col-lg-4 col-xl-3 offset-lg-1">
            <h3 class="h6 mb-2">Stay up to date</h3>
            <p class="fs-sm">Subscribe to our news and case studies</p>
            <div class="input-group input-group-sm">
              <input class="form-control" type="text" placeholder="Your email">
              <button class="btn btn-primary" type="button">Subscribe</button>
            </div>
          </div>
        </div>
        <p class="fs-sm mb-0"><span class="opacity-70">&copy; All rights reserved. Made by </span><a class="nav-link d-inline fw-normal p-0" href="https://arnab-afk.github.io/" target="_blank" rel="noopener">Arnab Bhowmik</a></p>
      </div>
    </footer>
    <!-- Back to top button--><a class="btn-scroll-top" href="#top" data-scroll>
      <svg viewBox="0 0 40 40" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <circle cx="20" cy="20" r="19" fill="none" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10"></circle>
      </svg><i class="ai-arrow-up"></i></a>
    <!-- Vendor scripts: js libraries and plugins-->
    <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/simplebar/dist/simplebar.min.js"></script>
    <script src="assets/vendor/lightgallery/lightgallery.min.js"></script>
    <script src="assets/vendor/lightgallery/plugins/video/lg-video.min.js"></script>
    <script src="assets/vendor/lightgallery/plugins/fullscreen/lg-fullscreen.min.js"></script>
    <script src="assets/vendor/lightgallery/plugins/zoom/lg-zoom.min.js"></script>
    <!-- Main theme script-->
    <script src="assets/js/theme.min.js"></script>
  </body>
</html>
