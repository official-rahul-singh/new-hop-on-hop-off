<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hop on Hop Off</title>
    <link rel="preload" href="assets/font/poppins-v22-latin-regular.woff2" fetchpriority="highest" as="font"
        crossorigin="">
    <link rel="preload" href="assets/font/poppins-v22-latin-500.woff2" fetchpriority="highest" as="font" crossorigin="">
    <link rel="preload" href="assets/font/poppins-v22-latin-600.woff2" fetchpriority="highest" as="font" crossorigin="">
    <link rel="preload" href="assets/font/poppins-v22-latin-700.woff2" fetchpriority="highest" as="font" crossorigin="">
    <style type="text/css">
        @font-face {
            font-display: swap;
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 400;
            src: url('assets/font/poppins-v22-latin-regular.woff2') format('woff2');
        }

        @font-face {
            font-display: swap;
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 500;
            src: url('assets/font/poppins-v22-latin-500.woff2') format('woff2');
        }

        @font-face {
            font-display: swap;
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 600;
            src: url('assets/font/poppins-v22-latin-600.woff2') format('woff2');
        }

        @font-face {
            font-display: swap;
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 700;
            src: url('assets/font/poppins-v22-latin-700.woff2') format('woff2');
        }
    </style>
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/common.css">
    <link rel="stylesheet" href="assets/css/footer.css">
</head>

<body class="<?php echo $pageClass ?? ''; ?>">
    <div class="top-header">
        <div class="container d-flex flex-between">
            <div class="rating flex-center gap-10">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M8.402 1.014a.92.92 0 0 0-.827-.529.92.92 0 0 0-.826.529L4.903 4.897l-4.12.622a.92.92 0 0 0-.738.637.96.96 0 0 0 .226.96l2.99 3.026-.705 4.276a.95.95 0 0 0 .37.919c.284.208.66.235.97.067l3.682-2.01 3.682 2.01a.9.9 0 0 0 .97-.067.95.95 0 0 0 .37-.919l-.709-4.276 2.99-3.026a.95.95 0 0 0 .227-.96.93.93 0 0 0-.737-.637l-4.124-.622z"
                        fill="#FEC300" />
                </svg> 5.0 (415 reviews)
            </div>
            <div class="header-nav d-flex wrap">
                <div class="top-nav">
                    <a href="#">About Us</a>
                    <a href="#">Contact Us</a>
                    <a href="#" class="flex-center gap-10"><svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#a)" stroke="#fff" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path
                                    d="M2.583 1.672H6.25l1.833 4.583L5.792 7.63a10.1 10.1 0 0 0 4.583 4.584l1.375-2.292 4.583 1.833v3.667a1.834 1.834 0 0 1-1.833 1.833A14.667 14.667 0 0 1 .75 3.505a1.833 1.833 0 0 1 1.833-1.833m9.167 2.75a1.834 1.834 0 0 1 1.833 1.833M11.75.75a5.5 5.5 0 0 1 5.5 5.5" />
                            </g>
                            <defs>
                                <clipPath id="a">
                                    <path fill="#fff" d="M0 0h18v18H0z" />
                                </clipPath>
                            </defs>
                        </svg>Customer Support</a>
                </div>

                <div class="curr-lang-selector d-flex align-center" id="langBtn">
                    <div class="currency d-flex align-center">
                        <img src="assets/img/india.svg" alt="" class="img-fluid"> <span>INR</span>
                    </div>
                    <div class="language d-flex align-center">
                        English <svg width="8" height="5" viewBox="0 0 8 5" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M3.125 3.955a.57.57 0 0 0 .42.175q.244 0 .41-.175l2.95-2.95a.57.57 0 0 0 .175-.42q0-.244-.175-.41A.54.54 0 0 0 6.495 0a.57.57 0 0 0-.42.175L3.54 2.701 1.005.175A.57.57 0 0 0 .585 0q-.244 0-.41.175A.57.57 0 0 0 0 .595q0 .244.175.41z"
                                fill="#fff" fill-opacity=".8" />
                        </svg>
                    </div>
                </div>



            </div>
        </div>
    </div>
    <div class="header">
        <div class="container d-flex flex-between align-center">
            <a href="#" class="logo"><img src="assets/img/logo.svg" class="img-fluid" alt=""></a>
            <div class="header-right">
                <div class="search-button"><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M15.374 15.388 20 20m-2.667-9.333a6.667 6.667 0 1 1-13.333 0 6.667 6.667 0 0 1 13.333 0"
                            stroke="#000" stroke-width="1.667" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>

                <div class="header-search">
                    <div class="search-cancel-button"><svg width="20" height="20" viewBox="0 0 384 512" fill="#000"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3l105.4 105.3c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256z">
                            </path>
                        </svg></div>
                    <form action="" class="flex-center">
                        <button type="submit" class="flex-center"><svg width="18" height="19" viewBox="0 0 18 19"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="m11.847 12.358 3.903 3.892M13.5 8.375a5.625 5.625 0 1 1-11.25 0 5.625 5.625 0 0 1 11.25 0"
                                    stroke="#000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg></button>
                        <input type="search" class="global-search-input" placeholder="Search your city or tour...">
                    </form>
                </div>

                <nav>
                    <ul>
                        <li><a href="#"><svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="m19.02 11 1.013-1.75a.917.917 0 0 0-.335-1.252l-1.75-1.012V4.97a.917.917 0 0 0-.918-.917h-2.015l-1.011-1.75a.92.92 0 0 0-.914-.451.9.9 0 0 0-.338.115L11 2.98 9.25 1.967a.917.917 0 0 0-1.252.335l-1.012 1.75H4.97a.917.917 0 0 0-.917.918v2.015l-1.75 1.012a.915.915 0 0 0-.335 1.253L2.98 11l-1.012 1.748a.92.92 0 0 0 .334 1.254l1.75 1.011v2.016a.917.917 0 0 0 .917.917h2.017l1.012 1.75a.93.93 0 0 0 .794.46.9.9 0 0 0 .459-.125L11 19.02l1.75 1.012a.92.92 0 0 0 1.253-.334l1.01-1.751h2.017a.917.917 0 0 0 .916-.917v-2.015l1.751-1.012a.92.92 0 0 0 .335-1.254zM8.709 6.406a1.375 1.375 0 1 1 0 2.75 1.375 1.375 0 0 1 0-2.75m.275 8.8-1.467-1.1 5.5-7.333 1.467 1.1zm4.308.367a1.376 1.376 0 1 1 .002-2.752 1.376 1.376 0 0 1-.002 2.752"
                                        fill="#D60F0F" />
                                </svg> Offer</a></li>

                        <li class="dropdown"><a href="#"><svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M4.646 14.058 11 22l6.354-7.943a8.65 8.65 0 0 0 1.896-5.405V8.25a8.25 8.25 0 0 0-16.5 0v.402c0 1.965.669 3.871 1.896 5.406M11 11a2.75 2.75 0 1 0 0-5.5 2.75 2.75 0 0 0 0 5.5"
                                        fill="#D60F0F" />
                                </svg>Destinations</a>
                            <svg width="11" height="7" viewBox="0 0 11 7" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M4.635 5.865q.26.26.622.26a.8.8 0 0 0 .608-.26L10.24 1.49a.85.85 0 0 0 .26-.622.8.8 0 0 0-.26-.608.8.8 0 0 0-.608-.26.85.85 0 0 0-.622.26L5.25 4.006 1.49.26A.85.85 0 0 0 .868 0 .8.8 0 0 0 .26.26.85.85 0 0 0 0 .882q0 .362.26.608z"
                                    fill-opacity=".8" />
                            </svg>

                            <ul class="dropdown-menu">
                                <li><a href="#">Argentina</a></li>
                                <li><a href="#">Australia</a></li>
                                <li><a href="#">Austria</a></li>
                                <li><a href="#">Belgium</a></li>
                                <li><a href="#">Canada</a></li>
                            </ul>

                        </li>
                    </ul>
                    <a href="javascript:void(0)" id="myBtn" class="login-btn"><svg class="user" width="23" height="24"
                            viewBox="0 0 23 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M11.033 4.003h.111a4.15 4.15 0 0 1 3.707 2.42 4.1 4.1 0 0 1-.682 4.444 4.15 4.15 0 0 1-1.586 1.1 4.1 4.1 0 0 1-2.189.214 4.1 4.1 0 0 1-2.105-1.056 4.1 4.1 0 0 1-.203-5.797 4.15 4.15 0 0 1 2.947-1.325M5.88 13.352a5.04 5.04 0 0 1 2.218-.81c.31-.011.53.24.785.375 1.412.85 3.311.796 4.668-.144.178-.134.39-.25.621-.223a5.1 5.1 0 0 1 3.422 2.008c.244.312.452.653.596 1.023.055.149-.056.281-.131.4a8 8 0 0 1-.634.886c-.634.745-1.37 1.413-2.225 1.896-1.22.722-2.637 1.091-4.053 1.11h-.118c-.315-.016-.63-.018-.942-.066a8.1 8.1 0 0 1-4.005-1.642c-.793-.632-1.494-1.387-2.016-2.26a.39.39 0 0 1-.033-.37 5.14 5.14 0 0 1 1.847-2.183"
                                fill="#D60F0F" />
                        </svg> <span>Login/Signup</span></a>
                    <div class="cancel-button" onclick="toggleButtons()"><svg width="20" height="20"
                            viewBox="0 0 384 512" fill="#000" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3l105.4 105.3c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256z">
                            </path>
                        </svg></div>
                </nav>
               <div class="cart-container">
                 <div class="cart flex-center">
                    <span><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M7.3 5H22l-2 7H8.377M21 16H9L7 3H4m0 5H2m3 3H2m4 3H2m8 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0m11 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"
                                stroke="#000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg></span>
                    <span class="cart-no flex-center">0</span>
                </div>
                <div class="cart-content">
                    <div class="cart-header d-flex flex-between">
                        <div class="cart-title">Your Cart</div>
                        <span class="close-cart">×</span>
                    </div>
                    <div class="cart-body">
                       <div class="cart-card align-center">
                       
                           <a href="#" class="cart-img">
                             <img src="https://res.cloudinary.com/https-www-isango-com/image/upload/f_auto/t_p_card_v1/v1669179205/middle%20east/uae/dubai/dubai11_p_244_5c9e3b83-34cc-4e4b-bc16-09_p_244_d35b2d8b-806a-4ae6-9731-df22979a8f47.jpg" alt="" class="img-fluid">
                           </a>

                            <div class="cart-inner">
                               <a href="#" class="cart-card-title">Golden Tours: London Hop-On, Hop-Off Bus Tour</a>
                              <div class="cart-meta">
                                 <div class="cart-price">Rs 6670.80</div>
                                 <div class="d-flex align-center gap-10">
                                    <span class="delete"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18" width="18" height="18"><path d="M6.545 1.966A.9.9 0 0 1 7.4 1.35h3.203c.388 0 .732.248.855.616l.242.734h2.7a.9.9 0 1 1 0 1.8H3.6a.9.9 0 1 1 0-1.8h2.7zM3.6 5.85h10.8v8.55c0 .993-.807 1.8-1.8 1.8H5.4c-.993 0-1.8-.807-1.8-1.8zm2.475 1.8a.675.675 0 0 0-.675.675v5.4c0 .374.301.675.675.675s.675-.301.675-.675v-5.4a.675.675 0 0 0-.675-.675M9 7.65a.675.675 0 0 0-.675.675v5.4c0 .374.301.675.675.675s.675-.301.675-.675v-5.4A.675.675 0 0 0 9 7.65m2.925 0a.675.675 0 0 0-.675.675v5.4c0 .374.301.675.675.675s.675-.301.675-.675v-5.4a.675.675 0 0 0-.675-.675"/></svg></span>
                                    <span class="edit"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18" width="18" height="18"><path d="M2.824 11.733c.115-.41.332-.785.635-1.088l5.096-5.096.953-.953 2.925 2.925.953.953-.953.953-5.096 5.096a2.5 2.5 0 0 1-1.088.635L2.655 16.16c-.233.065-.487 0-.658-.175s-.237-.425-.172-.658zm1.564-.104a1.1 1.1 0 0 0-.262.467l-.679 2.444 2.444-.678c.18-.05.343-.143.478-.273l-1.985-1.96zm9.957-4.109L11.42 4.595l-.957-.953 1.263-1.263c.379-.382.896-.596 1.436-.596s1.058.213 1.437.596l1.004 1.004a2.034 2.034 0 0 1 0 2.875L14.34 7.521z"/></svg></span>
                                 </div>
                              </div>

                            </div>
                       
                       </div>
                           <div class="d-flex align-center flex-between">
                            <a href="#" class="checkout-button">checkout</a>
                            <div class="total-amt">
                               <span>Total:</span> Rs 6670.80
                            </div>
                           </div>
                    </div>
<!-- <div class="empty-cart-message d-flex flex-center">
    <svg width="70" height="78" fill="none"> <path fill="#888" fill-rule="evenodd" d="m2.357 32.177.732 3.764a1.13 1.13 0 1 1-2.216.433L.14 32.609c-.891-4.581 2.577-8.87 7.23-8.87H62.63c4.597 0 8.053 4.194 7.254 8.738l-6.933 39.386C62.329 75.406 59.278 78 55.698 78H15.73c-3.438 0-6.41-2.398-7.179-5.767l-1.08-4.735a1.129 1.129 0 1 1 2.201-.504l1.08 4.735c.538 2.355 2.607 4.01 4.978 4.01h39.968c2.468 0 4.594-1.79 5.03-4.268l6.933-39.386C68.22 28.899 65.798 26 62.63 26H7.37c-3.206 0-5.638 2.965-5.013 6.177Z" clip-rule="evenodd"></path> <path fill="#888" d="M32.633 2.802a1.805 1.805 0 0 0-.489-2.496 1.786 1.786 0 0 0-2.485.49L11.027 28.684a1.805 1.805 0 0 0 .489 2.497A1.786 1.786 0 0 0 14 30.689L32.633 2.802ZM56.038 30.501a1.786 1.786 0 0 0 2.447-.657c.495-.86.203-1.96-.654-2.458L35.096 14.172a1.786 1.786 0 0 0-2.447.656c-.495.86-.203 1.96.654 2.459L56.038 30.5Z"></path> <path fill="#888" fill-rule="evenodd" d="M35.012 53.02c-.298.07-.663.362-.897.674-.514.683-1.412.76-2.008.17-.595-.588-.662-1.62-.148-2.303.477-.635 1.358-1.48 2.488-1.742a2.917 2.917 0 0 1 1.943.207c.67.319 1.247.882 1.727 1.643.46.731.319 1.752-.318 2.281-.637.53-1.527.366-1.988-.365-.237-.375-.42-.498-.51-.54a.412.412 0 0 0-.29-.025Z" clip-rule="evenodd"></path> <path fill="#888" d="M25.402 47.478a1.695 1.695 0 1 0-.002-3.389 1.695 1.695 0 0 0 .003 3.39ZM44.596 47.478c.936 0 1.693-.759 1.693-1.695a1.694 1.694 0 1 0-3.387 0c0 .936.758 1.695 1.694 1.695Z"></path></svg>
    <div class="cart-heading">Your cart is currently empty!</div>
    <p>You may check out all the available trips and book one that suits you.</p>
</div> -->
                
                </div>
               </div>
                <div class="toggle-button" onclick="toggleButtons()">
                    <svg width="15" height="13" viewBox="0 0 15 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13.544 6.09H5.18M13.544 1H1m12.544 10.182H1" stroke="#D60F0F" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <!-- The login Modal start -->
    <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <span class="close">&times;</span>
            <div class="container tab-container">

                <div class="modal-tab d-flex">
                    <button class="tablinks active"> Login</button>
                    <button class="tablinks"> Signup</button>
                </div>

                <div class="tabcontent active">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="modal-img">
                                <img src="assets/img/login.webp" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <span class="form-heading d-flex flex-center sub-heading">Login</span>
                            <form action="" class="">
                                <input type="text" placeholder="User Name Or Email Address.." required>
                                <input type="password" placeholder="Password" required>
                                <div class="options">
                                    <label><input type="checkbox"> Remember Me</label>
                                    <a href="#" class="forgot-link">Lost Your Password?</a>
                                </div>
                                <div class="column-group">
                                    <button type="submit" class="">Login</button>
                                    <a href="#" class="guest-button"><svg class="user" width="23" height="24"
                                            viewBox="0 0 23 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M11.033 4.003h.111a4.15 4.15 0 0 1 3.707 2.42 4.1 4.1 0 0 1-.682 4.444 4.15 4.15 0 0 1-1.586 1.1 4.1 4.1 0 0 1-2.189.214 4.1 4.1 0 0 1-2.105-1.056 4.1 4.1 0 0 1-.203-5.797 4.15 4.15 0 0 1 2.947-1.325M5.88 13.352a5.04 5.04 0 0 1 2.218-.81c.31-.011.53.24.785.375 1.412.85 3.311.796 4.668-.144.178-.134.39-.25.621-.223a5.1 5.1 0 0 1 3.422 2.008c.244.312.452.653.596 1.023.055.149-.056.281-.131.4a8 8 0 0 1-.634.886c-.634.745-1.37 1.413-2.225 1.896-1.22.722-2.637 1.091-4.053 1.11h-.118c-.315-.016-.63-.018-.942-.066a8.1 8.1 0 0 1-4.005-1.642c-.793-.632-1.494-1.387-2.016-2.26a.39.39 0 0 1-.033-.37 5.14 5.14 0 0 1 1.847-2.183"
                                                fill="#D60F0F"></path>
                                        </svg>Continue as a guest</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="tabcontent">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="modal-img">
                                <img src="/assets/img/sign-up.webp" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <span class="form-heading d-flex flex-center sub-heading">Signup</span>
                            <form action="" class="">
                                <div class="row">
                                    <div class="col-12">
                                        <input type="text" placeholder="Email Address.." required>
                                    </div>
                                    <div class="col-lg-6"><input type="password" placeholder="Captcha Code.." required>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="captcha">
                                            <img src="assets/img/capture.webp" alt="" class="img-fluid">
                                            <img src="assets/img/refresh-icon.webp" alt="" class="refresh-icon">
                                        </div>
                                    </div>
                                </div>

                                <div class="column-group">
                                    <button type="submit" class="">Signup</button>
                                    <a href="#" class="guest-button"><svg class="user" width="23" height="24"
                                            viewBox="0 0 23 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M11.033 4.003h.111a4.15 4.15 0 0 1 3.707 2.42 4.1 4.1 0 0 1-.682 4.444 4.15 4.15 0 0 1-1.586 1.1 4.1 4.1 0 0 1-2.189.214 4.1 4.1 0 0 1-2.105-1.056 4.1 4.1 0 0 1-.203-5.797 4.15 4.15 0 0 1 2.947-1.325M5.88 13.352a5.04 5.04 0 0 1 2.218-.81c.31-.011.53.24.785.375 1.412.85 3.311.796 4.668-.144.178-.134.39-.25.621-.223a5.1 5.1 0 0 1 3.422 2.008c.244.312.452.653.596 1.023.055.149-.056.281-.131.4a8 8 0 0 1-.634.886c-.634.745-1.37 1.413-2.225 1.896-1.22.722-2.637 1.091-4.053 1.11h-.118c-.315-.016-.63-.018-.942-.066a8.1 8.1 0 0 1-4.005-1.642c-.793-.632-1.494-1.387-2.016-2.26a.39.39 0 0 1-.033-.37 5.14 5.14 0 0 1 1.847-2.183"
                                                fill="#D60F0F"></path>
                                        </svg>Continue as a guest</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- The login Modal end-->

    <!-- The login Modal start -->
    <div id="langModal" class="modal">
        <!-- Modal content -->

        <div class="modal-content">
            <span class="close">×</span>
            <span class="form-heading d-flex flex-center sub-heading">Select your Language / Currency
</span>

            <!-- <div class="switch-dropdown">
                <label class="switch-label">Currency</label>
                <div class="switch-dropdown-wrapper" id="currencyWrapper">
                    <input type="text" id="searchCurrency" placeholder="Search Currency...">
                    <span class="switch-arrow" id="currencyArrow">▼</span>
                </div>
                <div class="list-box" id="currencyList">
                    <div class="list-option selected" data-value="INR">INR - Indian Rupee</div>
                    <div class="list-option" data-value="AED">AED - United Arab Emirates Dirham</div>
                    <div class="list-option" data-value="USD">USD - US Dollar</div>
                    <div class="list-option" data-value="GBP">GBP - Great Britain Pound</div>
                    <div class="list-option" data-value="EUR">EUR - Euro</div>
                </div>
            </div>

            <div class="switch-dropdown">
                <label class="switch-label">language</label>
                <div class="switch-dropdown-wrapper" id="languageWrapper">
                    <input type="text" id="searchLanguage" placeholder="Search Language...">
                    <span class="switch-arrow" id="languageArrow">▼</span>
                </div>
                <div class="list-box" id="languageList" style="display: block;">
                    <div class="list-option selected" data-value="ENG">ENG - English</div>
                    <div class="list-option" data-value="HIN">HIN - Hindi</div>
                    <div class="list-option" data-value="FRA">FRA - French</div>
                    <div class="list-option" data-value="GER">GER - German</div>
                    <div class="list-option" data-value="ESP">ESP - Spanish</div>
                </div>
            </div>

            <button class="primary-btn" id="applyBtn">Apply</button> -->


            
        </div>
    </div>
    <!-- The login Modal end-->