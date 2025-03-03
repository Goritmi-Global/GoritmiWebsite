<template>
    <div class="main-container">
        <link
            href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
            rel="stylesheet"
        />
        <header>
            <nav
                class="navbar navbar-expand-lg navbar-dark text-white d-none d-lg-block c-top-bar-section c-theme-bg-color"
            >
                <div class="container">
                    <!-- Navbar toggle button -->

                    <!-- Navbar links -->
                    <div class="collapse navbar-collapse" id="navbarTop">
                        <div class="c-top-nav-bar">
                            <!-- Left-aligned social links -->
                            <div>
                                <span v-if="tiktok_link">
                                    <a
                                        :href="tiktok_link"
                                        rel="noopener noreferrer"
                                        target="_blank"
                                    >
                                        <i
                                            class="bi bi-tiktok ms-3 text-white"
                                        ></i>
                                    </a>
                                </span>
                                <span v-if="instagram_link">
                                    <a
                                        :href="instagram_link"
                                        rel="noopener noreferrer"
                                        target="_blank"
                                    >
                                        <i
                                            class="bi bi-instagram ms-3 text-white"
                                        ></i>
                                    </a>
                                </span>
                                <span v-if="facebook_link">
                                    <a
                                        :href="facebook_link"
                                        rel="noopener noreferrer"
                                        target="_blank"
                                    >
                                        <i
                                            class="bi bi-facebook ms-3 me-3 text-white"
                                        ></i>
                                    </a>
                                </span>
                                <!-- <a :href="'mailto:' + email" class="contact text-white">
                            {{ email }}
                        </a> -->
                            </div>
                        </div>

                        <!-- Right side dropdowns -->
                        <div class="collapse navbar-collapse" id="navbarTop">
                            <!-- Right side dropdowns -->
                            <ul class="navbar-nav mb-2 mb-lg-0 ms-auto">
                                <!-- Call Us dropdown -->

                                <!-- Login dropdown -->
                                <!-- <li class="nav-item dropdown">
                            
                            <a
                                v-if="logged_in_user"
                                class="nav-link dropdown-toggle"
                                href="#"
                                role="button"
                                id="dropdownMenuLink"
                                data-bs-toggle="dropdown"
                                aria-expanded="false"
                            >
                                {{ logged_in_user.name }}
                            </a>
                            <a
                                v-else
                                ref="openLoginModal"
                                data-bs-toggle="modal"
                                data-bs-target="#loginModal"
                                class="nav-link text-decoration-none text-white c-pointer"
                                @click="clearFields"
                            >
                                {{ ("Login") }}
                            </a>

                         
                            <ul
                                class="dropdown-menu dropdown-menu-end"
                                aria-labelledby="dropdownMenuLink"
                            >
                                <li v-if="logged_in_user">
                                    <a class="dropdown-item" href="/dashboard">
                                        <i class="bi bi-speedometer me-1"></i>
                                        Dashboard
                                    </a>
                                </li>
                                <li v-if="logged_in_user">
                                    <a
                                        class="dropdown-item"
                                        href="#"
                                        @click="logOut"
                                    >
                                        <i
                                            class="bi bi-box-arrow-right me-2"
                                        ></i>
                                        Log out
                                    </a>
                                </li>
                            </ul>
                        </li> -->

                                <li
                                    class="c-top-bar-section-inside-navbar c-theme-text-color"
                                >
                                    <!-- <span v-if="youtube_link">
                                <a :href="youtube_link">
                                    <i
                                        class="bi bi-youtube me-4"
                                    ></i>
                                </a>
                            </span>
                            <span v-if="instagram_link">
                                <a :href="instagram_link">
                                    <i
                                        class="bi bi-instagram me-4"
                                    ></i>
                                </a>
                            </span>
                            <span v-if="facebook_link">
                                <a :href="facebook_link">
                                    <i
                                        class="bi bi-facebook me-3"
                                    ></i>
                                </a>
                            </span> -->

                                    <a
                                        :href="'mailto:' + email"
                                        class="contact text-white"
                                    >
                                        {{ email }}
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>

            <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
                <div class="container">
                    <a class="navbar-brand" href="/"
                        ><img
                            class="logo"
                            src="https://goritmi.co.uk/wp-content/uploads/2024/12/Goritmi-Logo-08-e1735209981940-300x115.png"
                    /></a>
                    <button
                        class="navbar-toggler"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent"
                        aria-expanded="false"
                        aria-label="Toggle navigation"
                    >
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div
                        class="collapse navbar-collapse justify-content-end"
                        id="navbarSupportedContent"
                    >
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active link-light" href="/"
                                    >Home</a
                                >
                            </li>
                            <li class="nav-item">
                                <a
                                    class="nav-link active link-light"
                                    href="/about"
                                    >About</a
                                >
                            </li>
                            <li class="nav-item">
                                <a
                                    class="nav-link active link-light"
                                    href="/services"
                                    >Services</a
                                >
                            </li>
                            <li class="nav-item">
                                <a
                                    class="nav-link active link-light"
                                    href="/contact"
                                    >Contact Us</a
                                >
                            </li>
                            <!-- <li class="nav-item">
                                <a
                                    class="nav-link active link-light"
                                    href="/clients"
                                    >Clients</a
                                >
                            </li> -->
                        </ul>
                    </div>
                    <!-- <a
                        href="#"
                        class="btn quote-btn border bg-primary link-light"
                        >Get A Quote →</a
                    > -->
                </div>
            </nav>
        </header>

        <main>
            <!-- added other pages code here -->
            <slot></slot>
        </main>

        <footer class="bg-secondary text-white pt-5 pb-4 mt-3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12 mb-4">
                        <img
                            src="images/logo1.png"
                            alt="Goritmi Logo"
                            class="img-fluid mb-2"
                            width="190"
                        />
                        <p class="small">
                            Boost your business with smart digital solutions
                            tailored to meet market demands and enhance customer
                            and employee satisfaction.
                        </p>
                    </div>

                    <!-- Menu -->
                    <div class="col-lg-2 col-md-4 col-sm-6 mb-4">
                        <h5 class="fw-bold">Menu</h5>
                        <ul class="list-unstyled">
                            <li>
                                <a
                                    href="/"
                                    class="text-white text-decoration-none"
                                    >Home</a
                                >
                            </li>
                            <li>
                                <a
                                    href="#"
                                    class="text-white text-decoration-none"
                                    >About Us</a
                                >
                            </li>
                            <li>
                                <a
                                    href="#"
                                    class="text-white text-decoration-none"
                                    >Services</a
                                >
                            </li>
                            <li>
                                <a
                                    href="#"
                                    class="text-white text-decoration-none"
                                    >Career</a
                                >
                            </li>
                            <li>
                                <a
                                    href="#"
                                    class="text-white text-decoration-none v"
                                    >Portfolio</a
                                >
                            </li>
                            <li>
                                <a
                                    href="#"
                                    class="text-white text-decoration-none"
                                    >FAQs</a
                                >
                            </li>
                        </ul>
                    </div>

                    <!-- Services -->
                    <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                        <h5 class="fw-bold">Services</h5>
                        <ul class="list-unstyled">
                            <li>
                                <a
                                    href="#"
                                    class="text-white text-decoration-none"
                                    >Design Services</a
                                >
                            </li>
                            <li>
                                <a
                                    href="#"
                                    class="text-white text-decoration-none"
                                    >Development Solutions</a
                                >
                            </li>
                            <li>
                                <a
                                    href="#"
                                    class="text-white text-decoration-none"
                                    >Social Media Excellence</a
                                >
                            </li>
                            <li>
                                <a
                                    href="#"
                                    class="text-white text-decoration-none"
                                    >eCommerce Transformation</a
                                >
                            </li>
                            <li>
                                <a
                                    href="#"
                                    class="text-white text-decoration-none"
                                    >Comprehensive IT Support</a
                                >
                            </li>
                        </ul>
                    </div>

                    <!-- Contact Us -->
                    <div class="col-lg-3 col-md-4 col-sm-12 mb-4">
                        <h5 class="fw-bold">Contact Us</h5>
                        <p>
                            <i class="fas fa-envelope"></i> info@goritmi.co.uk
                        </p>
                        <p><i class="fas fa-phone"></i> +44 7858 870913</p>
                    </div>
                </div>
            </div>

            <!-- Copyright -->
            <div class="text-end border-top pt-3">
                <p class="mb-0 small">
                    &copy; 2025 Goritmi. All Rights Reserved.
                </p>
            </div>
        </footer>

        <a
            ref="back_top_top"
            href="#"
            class="back-to-top d-flex align-items-center justify-content-center"
            ><i class="bi bi-arrow-up-short theme-text-color"></i
        ></a>
    </div>
</template>

<script>
import Multiselect from "@vueform/multiselect";

import AOS from "aos";
export default {
    mounted() {
        let mainJs = document.createElement("script");
        mainJs.setAttribute("src", "/assets/js/main.js");
        document.head.appendChild(mainJs);

        AOS.init();

        // preloader
        let preloader = this.$refs.preloader;
        if (preloader) {
            window.addEventListener("load", () => {
                preloader.remove();
            });
        }
    },
    components: {
        Multiselect,
    },
    created() {},

    data() {
        return {
            youtube_link: "www.youtube.com",
            tiktok_link: "www.tiktok.com",
            instagram_link: "www.instagram.com",
            facebook_link: "www.facebook.com",
            email: "goritmi.co.uk",
        };
    },
    methods: {},
};
</script>

<style>
@import url("public/backend/assets/vendor/bootstrap/css/bootstrap.min.css");
@import url("public/backend/assets/vendor/bootstrap-icons/bootstrap-icons.css");
@import url("public/backend/assets/vendor/boxicons/css/boxicons.min.css");
@import url("public/backend/assets/vendor/remixicon/remixicon.css");
@import url("public/backend/assets/vendor/simple-datatables/style.css");
@import url("public/backend/assets/css/style.css");
@import url("public/backend/assets/css/custom.css");

@import "toastr";

.c-description {
    text-align: justify;
}
.card {
    border-radius: 0.5rem !important;
}
.c-theme-text-color {
    color: #296fb6 !important;
}
.c-theme-bg-color {
    background-color: #296fb6 !important;
}
.c-theme-border {
    border: 1px solid #296fb6 !important;
}
.c-top-bar-section {
    display: block !important;
    color: white !important;
}
.logo {
    width: 170px !important;
}

 /* Custom Button */
 .c-theme-button {
            background-color: #296fb6;
            color: white;
            font-size: 16px;
            font-weight: bold;
            padding: 12px 24px;
            border: 2px solid #296fb6;
            border-radius: 8px;
            transition: all 0.3s ease-in-out;
            text-decoration: none;
            display: inline-block;
        }

        /* Hover Effect */
        .c-theme-button:hover {
            background-color: #1f5a8e;
            border-color: #1f5a8e;
            color: white;
        }

        /* Focus Effect */
        .c-theme-button:focus, .c-theme-button:active {
            outline: none;
            box-shadow: 0 0 8px rgba(41, 111, 182, 0.6);
            background-color: #1c5183;
            border-color: #1c5183;
        }

        /* Visited Link */
        .c-theme-button:visited {
            color: white;
        }

        /* Disabled State */
        .c-theme-button:disabled {
            background-color: #a0c4e8;
            border-color: #a0c4e8;
            color: white;
            cursor: not-allowed;
            opacity: 0.7;
        }
</style>
