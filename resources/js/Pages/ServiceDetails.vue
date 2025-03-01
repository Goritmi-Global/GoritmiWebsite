<template>
  <div class="bg-white">
    <div class="container">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <h1 class="fw-bold c-theme-text-color">
                        Custom Mobile Application
                        <span class="text-black">Development</span>
                    </h1>
                    <p class="c-theme-text-color">
                        Crafting engaging and robust mobile apps to transform
                        your business on the go.
                    </p>
                    <h4 class="btn btn-primary text-white rounded-6 mt-4">
                        Get a Free Consultation
                    </h4>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <img
                        src="/images/app.png"
                        alt=""
                        class="img-fluid"
                        width="501px"
                        height="501px"
                    />
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <!-- Image Section -->
            <div class="text-black fw-bold">
                <h1>
                    Why Choose Our Mobile App Development
                    <br>
                    <span class="c-theme-text-color">Solutions?</span>
                </h1>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 text-center">
                <img
                    src="/images/Balance2.png"
                    alt=""
                    class="img-fluid"
                    width="507px"
                    height="507px"
                />
            </div>
            <!-- Text Content Section -->
            <div class="col-lg-6 col-md-6 col-sm-12">
                <h2 class="c-theme-text-color">At Goritmi,</h2>
                <p class="text-muted">
                    we design and develop mobile applications that are not only
                    visually stunning but also performance-driven and
                    SEO-optimized. Our solutions empower businesses to engage
                    users seamlessly in IOS and Android platforms.
                </p>

                <h4 class="c-theme-text-color fw-bold">Key Features</h4>
                <ul class="text-black">
                    <li>
                        <strong>Custom App Design:</strong> Tailored interfaces
                        that response with your brand and user needs
                    </li>
                    <li>
                        <strong>Cross-Platform & Native Development:</strong>
                        Expertise in both native and cross-platform solutions
                        for optional performance.
                    </li>
                    <li>
                        <strong>SEO & App Store Optimization (ASO):</strong>
                        Strategies and boost visibility and downloads.
                    </li>
                    <li>
                        <strong>Scalability & Security:</strong> Robust
                        architectures built to grow your business.
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!--WEB FEATURES-->
    <div class="bg-white">
    <div class="container mt-5 py-4">
        <div class="fw-bold">
            <h1 class="text-black ms-5 mb-4">
                Our Web Development <span class="c-theme-text-color">Features</span>
            </h1>
        </div>

        <div class="features-container">
            <div
                v-for="(feature, index) in features"
                :key="index"
                class="feature-card"
            >
                <div class="c-feature-icon">
                    <div v-html="feature.icon" class="c-feature-icon"></div>
                </div>
                <h5 class="title">{{ feature.title }}</h5>
                <p v-if="feature.description" class="c-feature-description">
                    {{ feature.description }}
                </p>
            </div>
        </div>
    </div>
    </div>
 
    <div class="container mt-5 py-4">
      <div class="fw-bold">
        <h1>Our Process & <span class="c-theme-text-color">Technology</span></h1>
        </div>

        <h1 class="mb-5 c-theme-text-color">Our Mobile App Development Process</h1>
        
        <div class="row justify-content-center align-items-center">
            <div class="col-md-3 text-center">
                <div class="circle">
                    <div class="step-number mb-4">01</div>
                    <h6 class="c-theme-text-color">Discovery & Consultation</h6>
                    <p class="small">
                        Understand your business objectives and app requirements
                    </p>
                </div>
            </div>
            <div class="col-md-1 arrow">&#8595;</div>
            <div class="col-md-3 text-center">
                <div class="circle">
                    <div class="step-number mb-4">02</div>
                    <h6 class="c-theme-text-color">Design & Prototyping</h6>
                    <p class="small">
                        Develop wireframes and interactive prototypes
                    </p>
                </div>
            </div>
            <div class="col-md-1 arrow">&#8595;</div>
            <div class="col-md-3 text-center">
                <div class="circle">
                    <div class="step-number mb-4">03</div>
                    <h6 class="c-theme-text-color">Development</h6>
                    <p class="small">Build the app using agile methodologies</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center align-items-center mt-4">
            <div class="col-md-3 text-center">
                <div class="circle">
                    <div class="step-number mb-4">04</div>
                    <h6 class="c-theme-text-color">Testing & QA</h6>
                    <p class="small">
                        Thorough testing for usability and security
                    </p>
                </div>
            </div>
            <div class="col-md-1 arrow">&#8595;</div>
            <div class="col-md-3 text-center">
                <div class="circle">
                    <div class="step-number mb-4">05</div>
                    <h6 class="c-theme-text-color">Launch & Post-Launch Support</h6>
                    <p class="small">Seamless deployment and maintenance</p>
                </div>
            </div>
        </div>
        <h4 class="mb-5 c-theme-text-color">Technology Stack Notes</h4>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis,
            consequatur.
        </p>
        <div class="">
            <img
                src="images/Licon1.png"
                class=""
                alt="Program Icon"
                width="49px"
                height="44px"
            />
            <img
                src="images/kotlin.png"
                class="ms-4"
                alt="Kotlin"
                width="49px"
                height="44px"
            />
            <img
                src="images/react.png"
                class="ms-4"
                alt="React"
                width="49px"
                height="44px"
            />
            <img
                src="images/flutter.png"
                class="ms-4"
                alt="Flutter"
                width="49px"
                height="44px"
            />
        </div>
    </div>

    <div class="container mt-5 py-4">
        <div>
            <h2 class="fw-bold mb-5">
                Our Portfolio & Success <br />
                <span class="c-theme-text-color">Stories</span>
            </h2>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <img src="images/mobiles.png" class="shadow c-image" alt="" />
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="mt-5">
                    <h2 class="fw-bold">
                        Smart Workforce <br />
                        <span class="c-theme-text-color">Manager Application</span>
                    </h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Dolores quidem omnis sed aut dignissimos repellat
                        assumenda fuga, quae vero ducimus! Ducimus sunt
                        doloremque nihil cupiditate et reprehenderit inventore
                        obcaecati. Porro explicabo impedit earum mollitia?
                    </p>
                    <button
                        class="text-white bg-primary fw-bold rounded border-primary"
                    >
                        Case Study
                    </button>
                    <button
                        class="c-theme-text-color bg-white fw-bold border-primary rounded"
                    >
                        Contact Us
                    </button>
                </div>
            </div>
        </div>
    </div>

    
    
</template>

<script>
import Master from "./Layouts/Master.vue";

export default {
    layout: Master,

    data() {
        return {
            features: [
                {
                    title: "Custom Mobile UI/UX Design",
                    description:
                        "Streamline appointments, prescriptions, and patient monitoring while enabling real-time communication with clinicians.",
                    icon: `<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24">
             <path fill="white" d="M12 2a10 10 0 0 0-10 10 10 10 0 0 0 10 10 10 10 0 0 0 10-10A10 10 0 0 0 12 2zm0 18a8 8 0 1 1 0-16 8 8 0 0 1 0 16zm1-11h-2V7h2v2zm0 2v6h-2v-6h2z"/>
           </svg>`,
                },
                {
                    title: "Native & Cross-Platform Development",
                    description:
                        "Enhance user experience across multiple devices and operating systems with seamless app functionality.",
                    icon: `<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24">
             <path fill="white" d="M4 4h16v2H4V4zm0 6h16v2H4v-2zm0 6h16v2H4v-2z"/>
           </svg>`,
                },
                {
                    title: "App Store Optimization (ASO)",
                    description:
                        "Improve visibility and ranking in app stores through strategic keyword optimization and engaging UI design.",
                    icon: `<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24">
             <path fill="white" d="M12 2L3 7l9 5 9-5-9-5zm0 5l9 5-9 5-9-5 9-5zm0 10l9 5-9 5-9-5 9-5z"/>
           </svg>`,
                },
                {
                    title: "Robust Backend Integration",
                    description:
                        "Ensure secure, scalable, and efficient backend services for smooth app performance and data management.",
                    icon: `<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24">
             <path fill="white" d="M3 3h18v6h-2V5H5v14h14v-4h2v6H3V3zm8 8h2v4h-2v-4zm-4 2h2v2H7v-2zm8-2h2v4h-2v-4zm4-2h2v6h-2v-6z"/>
           </svg>`,
                },
                {
                    title: "Performance & Security",
                    description:
                        "Optimize app performance while ensuring top-tier security measures to protect user data.",
                    icon: `<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24">
             <path fill="white" d="M12 2L3 7v4c0 5 3 10 9 12 6-2 9-7 9-12V7l-9-5zm0 2l7 4v3c0 4-2 8-7 10-5-2-7-6-7-10V8l7-4zm0 4c-2 0-4 2-4 4 0 3 3 6 4 6s4-3 4-6c0-2-2-4-4-4z"/>
           </svg>`,
                },
            ],
        };
    },
};
</script>

<style>
.goritmi {
    width: 1293px;
    height: 401px;
    margin-left: 53px;
    display: flex;
}
.logo-sec {
    width: 212px;
    height: 367px;
}

.card-content {
    transition: all 0.3s ease-in-out;
}

.card-content p {
    opacity: 0;
    height: 0;
    transition: all 0.3s ease-in-out;
}

.c-balance h1 {
    margin-left: -100p;
}
.feature-box {
    border: 2px solid #296fb6;
    border-radius: 8px;
    padding: 20px;
    text-align: center;
    transition: 0.3s;
    background: white;
    width: 294px;
    height: 155px;
    display: flex;
    flex-direction: column;
    justify-content: center;
}
.feature-box h5 {
    color: #296fb6;
    font-weight: bold;
}
.section-heading {
    font-size: 24px;
    font-weight: bold;
}
.section-subheading {
    color: #296fb6;
    font-size: 22px;
    font-weight: bold;
}
.row.g-3 > div {
    display: flex;
}
.c-image {
    width: "563px";
    height: "372px";
    border-radius: 8px;
    margin-left: 80px;
}

.process-container {
    text-align: center;
    margin-top: 50px;
}
.circle {
    width: 253px;
    height: 253px;
    border: 3px solid #296fb6;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    font-size: 16px;
    font-weight: bol;
    text-align: center;
    margin: 20px auto;
    background-color: white;
    position: relative;
}
.circle .step-number {
    background-color: #296fb6;
    color: white;
    padding: 10px;
    border-radius: 50%;
    font-size: 20px;
}
.arrow {
    font-size: 100px;
    color: #296fb6;
    font-weight: bold;
}
.features-container {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 20px;
}

.feature-card {
    width: 220px;
    padding: 30px;
    text-align: center;
    background: linear-gradient(to bottom, #296fb6, #74b4fd);
    color: white;
    border-radius: 12px;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    position: relative;
    overflow: hidden;
    transition: background 0.4s ease, transform 0.3s ease;
}

/* On Hover: Lighten Background */
.feature-card:hover {
    background: linear-gradient(to bottom, #296fb6, #1d66af);
}

/* Icon and Title Wrapper */
.c-feature-icon,
.title {
    transition: transform 0.4s ease, opacity 0.4s ease;
}

/* Initially Centered */
.feature-card .c-feature-icon {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 70px;
    transition: transform 0.4s ease;
}

.c-feature-icon img {
    width: 50px;
    height: 50px;
}

/* Initially Centered */
.title {
    font-size: 1.2rem;
    font-weight: bold;
    margin-top: 15px;
    transform: translateY(30px);
    opacity: 1;
}

/* Hide Description Initially */
.c-feature-description {
    font-size: 0.9rem;
    opacity: 0;
    transform: translateY(10px);
    transition: opacity 0.4s ease, transform 0.4s ease;
}

/* Hover Effects: Move Icon & Title Up, Show Description */
.feature-card:hover .c-feature-icon,
.feature-card:hover .title {
    transform: translateY(-15px);
}

.feature-card:hover .c-feature-description {
    opacity: 1;
    transform: translateY(0px);
}

/* Reset on Mouse Leave */
.feature-card:not(:hover) .title {
    transform: translateY(30px);
}

.feature-card:not(:hover) .c-feature-description {
    opacity: 0;
    transform: translateY(10px);
}

h1 {
    text-transform: uppercase;
    font-size: 2.5rem;
    font-weight: bold;
}

</style>
