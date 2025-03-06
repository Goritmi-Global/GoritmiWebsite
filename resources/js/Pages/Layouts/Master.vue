<template>
    <div class="main-container">
        <link
            href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
            rel="stylesheet"
        />
        <header>
            <!-- Top Bar -->
            <nav
                v-if="showTopBar"
                class="navbar navbar-expand-lg navbar-dark text-white d-none d-lg-block c-top-bar-section c-theme-bg-color"
            >
                <div class="container">
                    <div class="c-top-nav-bar">
                        <div>
                            <span v-if="linked_in">
                                <a :href="linked_in" target="_blank">
                                    <i class="bi bi-linkedin ms-3 text-white"></i>

                                </a>
                            </span>
                            <span v-if="instagram_link">
                                <a :href="instagram_link" target="_blank">
                                    <i
                                        class="bi bi-instagram ms-3 text-white"
                                    ></i>
                                </a>
                            </span>
                            <span v-if="facebook_link">
                                <a :href="facebook_link" target="_blank">
                                    <i
                                        class="bi bi-facebook ms-3 me-3 text-white"
                                    ></i>
                                </a>
                            </span>
                        </div>
                    </div>
                </div>
            </nav>

            <!-- Sticky Second Navbar -->
            <nav
                ref="stickyNav"
                class="navbar navbar-expand-lg navbar-dark bg-secondary nav-fixed"
                :class="{ 'sticky-navbar': isSticky }"
            >
                <div class="container">
                    <a class="navbar-brand" href="/">
                        <img
        class="logo"
        :src="isSticky ? 'images/logo1.png' : 'images/logo.png'"
        alt="Goritmi Logo"
    />
                    </a>
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
                            
                            <!-- Services Dropdown -->
                            <li class="nav-item dropdown">
                                <a
                                    class="nav-link dropdown-toggle link-light"
                                    href="#"
                                    id="servicesDropdown"
                                    role="button"
                                    data-bs-toggle="dropdown"
                                    aria-expanded="false"
                                >
                                    Services
                                </a>
                                <ul
                                    class="dropdown-menu"
                                    aria-labelledby="servicesDropdown"
                                >
                                    <li>
                                        <a
                                            class="dropdown-item"
                                            href="/web-development"
                                            >Website Development</a
                                        >
                                    </li>
                                    <li>
                                        <a
                                            class="dropdown-item"
                                            href="/app-development"
                                            >App Development</a
                                        >
                                    </li>
                                    <li>
                                        <a
                                            class="dropdown-item"
                                            href="/hosting-and-support"
                                            >Hosting and Support</a
                                        >
                                    </li>
                                </ul>
                            </li>

                            <!-- Products Dropdown -->
                            <li class="nav-item dropdown">
                                <a
                                    class="nav-link dropdown-toggle link-light"
                                    href="#"
                                    id="productsDropdown"
                                    role="button"
                                    data-bs-toggle="dropdown"
                                    aria-expanded="false"
                                >
                                    Solutions
                                </a>
                                <ul
                                    class="dropdown-menu"
                                    aria-labelledby="productsDropdown"
                                >
                                    <li>
                                        <a
                                            class="dropdown-item"
                                            href="/goritmi-active"
                                            >Goritmi Active</a
                                        >
                                    </li>
                                    <li>
                                        <a
                                            class="dropdown-item"
                                            href="/goritmi-balance"
                                            >Goritmi Balance</a
                                        >
                                    </li>
                                    <li>
                                        <a
                                            class="dropdown-item"
                                            href="/goritmi-connect"
                                            >Goritmi Connect</a
                                        >
                                    </li>
                                </ul>
                            </li>
                            
                            <li class="nav-item">
                                <a
                                    class="nav-link active link-light"
                                    href="/contact"
                                    >Contact Us</a
                                >
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        <main>
            <!-- added other pages code here -->
            <slot></slot>
        </main>

        <footer class="bg-secondary text-white py-5 mt-3">
            <div class="container">
                <div class="row">
                    <!-- Logo & Company Info -->
                    <div class="col-lg-4 col-md-12 mb-4">
                        <img
                            src="/images/logo1.png"
                            alt="Goritmi Logo"
                            class="img-fluid mb-2"
                            width="290"
                        />
                        <p class="small text-white-50">
                            Boost your business with smart digital solutions
                            tailored to meet market demands and enhance customer
                            and employee satisfaction.
                        </p>
                    </div>

                    <!-- Quick Links -->
                    <div class="col-lg-2 col-md-4 col-sm-6 mb-4">
                        <h5 class="fw-bold">Menu</h5>
                        <ul class="list-unstyled">
                            <li>
                                <a
                                    href="/"
                                    class="text-white-50 text-decoration-none"
                                    >Home</a
                                >
                            </li>

                            <li>
                                <a
                                    href="/services"
                                    class="text-white-50 text-decoration-none"
                                    >Services</a
                                >
                            </li>
                            <li>
                                <a
                                    href="/about"
                                    class="text-white-50 text-decoration-none"
                                    >About Us</a
                                >
                            </li>
                            <li>
                                <a
                                    href="/contact"
                                    class="text-white-50 text-decoration-none"
                                    >Contact Us</a
                                >
                            </li>
                            <!-- <li><a href="#" class="text-white-50 text-decoration-none">Career</a></li>
                    <li><a href="#" class="text-white-50 text-decoration-none">Portfolio</a></li>
                    <li><a href="#" class="text-white-50 text-decoration-none">FAQs</a></li> -->
                        </ul>
                    </div>

                    <!-- Services -->
                    <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                        <h5 class="fw-bold">Solution & Services</h5>
                        <ul class="list-unstyled">
                            <li>
                                <a
                                    class="text-white-50 text-decoration-none"
                                    href="/goritmi-active"
                                    >Goritmi Active</a
                                >
                            </li>
                            <li>
                                <a
                                    class="text-white-50 text-decoration-none"
                                    href="/goritmi-balance"
                                    >Goritmi Balance</a
                                >
                            </li>
                            <li>
                                <a
                                    class="text-white-50 text-decoration-none"
                                    href="/goritmi-connect"
                                    >Goritmi Connect</a
                                >
                            </li>
                            <li>
                                <a
                                    href="/web-development"
                                    class="text-white-50 text-decoration-none"
                                    >Website Development
                                </a>
                            </li>
                            <li>
                                <a
                                    href="/app-development"
                                    class="text-white-50 text-decoration-none"
                                    >App Development</a
                                >
                            </li>

                            <li>
                                <a
                                    href="/hosting-and-development"
                                    class="text-white-50 text-decoration-none"
                                    >Hosting & Support</a
                                >
                            </li>
                        </ul>
                    </div>

                    <!-- Contact Us -->
                    <div class="col-lg-3 col-md-4 col-sm-12 mb-4">
                        <h5 class="fw-bold">Contact Us</h5>
                        <address class="text-white-50">
                            <p>
                                <i class="fas fa-envelope me-2"></i
                                >info@goritmi.co.uk
                            </p>
                            <p>
                                <i class="fas fa-phone me-2"></i>+44 116 488 2896
                            </p>
                        </address>
                    </div>
                </div>

                <!-- Copyright -->
                <div class="border-top pt-3 text-center text-md-end">
                    <p class="mb-0 small text-white-50">
                        &copy; 2025 Goritmi. All Rights Reserved.
                    </p>
                </div>
            </div>
        </footer>

        <a
            ref="back_top_top"
            href="#"
            class="back-to-top d-flex align-items-center justify-content-center c-theme-bg-color"
            ><i class="bi bi-arrow-up-short"></i
        ></a>
    </div>
</template>

<script>
import Multiselect from "@vueform/multiselect";

import AOS from "aos";
import "aos/dist/aos.css";
 
export default {
    mounted() {
        let bootstrapJs = document.createElement("script");
        bootstrapJs.setAttribute(
            "src",
            "/backend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"
        );
        document.head.appendChild(bootstrapJs);

        let mainJs = document.createElement("script");
        mainJs.setAttribute("src", "/backend/assets/js/main.js");
        document.head.appendChild(mainJs);

        AOS.init();

        // preloader
        let preloader = this.$refs.preloader;
        if (preloader) {
            window.addEventListener("load", () => {
                preloader.remove();
            });
        }
        window.addEventListener("scroll", this.handleScroll);
    },
    components: {
        Multiselect,
    },
    created() {},

    beforeUnmount() {
        window.removeEventListener("scroll", this.handleScroll);
    },
    data() {
        return {
            showTopBar: true,
            isSticky: false,
            youtube_link: "https://www.youtube.com/@GoritmiLtd",
            linked_in: "https://www.linkedin.com/company/goritmi",
            instagram_link: "https://www.instagram.com/goritmi.uk/profilecard/?igsh=NzJnc2wxMTB0ZmI1",
            facebook_link: "https://www.facebook.com/profile.php?id=61570754301545",
            email: "info@goritmi.co.uk",
        };
    },
    methods: {
        handleScroll() {
            const stickyNav = this.$refs.stickyNav;
            if (stickyNav) {
                const navTop = stickyNav.offsetTop;
                if (window.scrollY > navTop) {
                    this.isSticky = true;
                    this.showTopBar = false;
                } else {
                    this.isSticky = false;
                    this.showTopBar = true;
                }
            }
        },
    },
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
    width: 250px !important;
}

/* Custom Button */
.c-theme-button {
    background-color: #296fb6;
    color: white;
    font-size: 16px;
    font-weight: bold;
    padding: 5px 17px;
    border: 2px solid #296fb6;
    border-radius: 0.5rem !important;
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
.c-theme-button:focus,
.c-theme-button:active {
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

.carousel__next,
.carousel__prev {
    background: #296fb6 !important;
    color: white !important;
    border-radius: 50% !important;
}
.carousel__next:hover,
.carousel__prev:hover {
    color: white;
}
.c-theme-radius {
    border-radius: 0.5rem !important;
}

/* Hover effect for image */
.hover-effect {
    transition: transform 0.3s ease-in-out;
}

.hover-effect:hover {
    transform: scale(1.05); /* Slightly enlarges the image on hover */
}
 
/* Sticky Navbar */
.sticky-navbar {
    position: fixed; /* Changed from sticky to fixed */
    top: 0;
    left: 0;
    width: 100%;
    z-index: 1000;
    background-color: #296fb6 !important; /* Ensures visibility */
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Adds slight shadow */
    transition: all 0.3s ease-in-out;
}
.logo {
    width: 250px !important;
    transition: all 0.3s ease-in-out;
}

/* When Navbar Becomes Sticky */
.sticky-navbar .logo {
 
}

.c-top-bar-section {
    background-color: #296fb6;
    padding: 10px 0;
}


</style>
