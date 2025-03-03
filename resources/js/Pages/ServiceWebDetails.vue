<template>
    <div class="bg-white">
        <div class="container">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h1 class="fw-bold c-theme-text-color">
                            Custom Web Development
                            <span class="text-black">Services</span>
                        </h1>
                        <p class="c-theme-text-color">
                            Building high-performance, responsive websites to 
elevate your online presence.
                        </p>
                        <h4
                            class="btn c-theme-button text-white rounded-6 mt-4"
                        >
                            Get a Free Consultation
                        </h4>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <img
                            src="/images/webdev1.png"
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
                    Why Choose Our Web
                    <br />
                    <span class="c-theme-text-color">Web Development 
                        Solutions?</span>
                </h1>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 text-center">
                <img
                    src="/images/webdev2.png"
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
                     
we create tailored, scalable, and SEO-friendly websites that not only look great but also rank high on search engines. Our expert team crafts digital experiences that drive engagement, increase 
conversions, and build lasting brand impressions 
                </p>

                <h4 class="c-theme-text-color fw-bold">Key Features</h4>
                <ul class="text-black">
                    <li>
                        <strong>Custom Design:</strong> Unique layouts that reflect your brand identity
                    </li>
                    <li>
                        <strong>Responsive Development:</strong> Seamless performance across desktops, tablets, 
                            and smartphones.
                    </li>
                    <li>
                        <strong>SEO-Optimized Code: </strong>Built-in best practices to boost your search rankings.
                    </li>
                    <li>
                        <strong>E-Commerce & CMS Solutions:</strong> Tailored platforms to suit every business need.
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!--WEB FEATURES-->
    <div class="bg-white">
        <div class="container mt-5 py-4">
            <div class="fw-bold">
                <h1 class="text-black mb-4">
                    Our Web Development
                    <span class="c-theme-text-color">Features</span>
                </h1>
            </div>

            <div class="row g-1 justify-content-center">
                <div
                    v-for="(feature, index) in features"
                    :key="index"
                    class="col-2 d-flex justify-content-center"
                >
                    <div class="feature-card">
                        <div class="c-feature-icon">
                            <div
                                v-html="feature.icon"
                                class="c-feature-icon"
                            ></div>
                        </div>
                        <h5 class="title">{{ feature.title }}</h5>
                        <p
                            v-if="feature.description"
                            class="c-feature-description"
                        >
                            {{ feature.description }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5 py-4">
        <div class="fw-bold">
            <h1>
                Our Process & <span class="c-theme-text-color">Technology</span>
            </h1>
        </div>

        <h1 class="mb-5 c-theme-text-color">
            Our Mobile App Development Process
        </h1>
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="flow-container">
                    <!-- Step 1 -->
                    <div class="arrow">&#8594;</div>
                    <div class="circle">
                        <div class="step-number">01</div>
                        <h6
                            class="c-theme-text-color fw-bold mt-2 c-circle-title"
                        >
                        Consultation & Planning
                        </h6>
                        <p class="small c-circle-description">
                            Understanding your business goals 
                            and technical needs.
                        </p>
                    </div>

                    <!-- Step 2 -->
                    <div class="arrow">&#8594;</div>
                    <div class="circle">
                        <div class="step-number">02</div>
                        <h6
                            class="c-theme-text-color fw-bold mt-2 c-circle-title"
                        >
                            Design & Prototyping
                        </h6>
                        <p class="small c-circle-description">
                            Develop wireframes and interactive prototypes
                        </p>
                    </div>

                    <!-- Step 3 -->
                    <div class="arrow">&#8594;</div>
                    <div class="circle">
                        <div class="step-number">03</div>
                        <h6
                            class="c-theme-text-color fw-bold mt-2 c-circle-title"
                        >
                            Development
                        </h6>
                        <p class="small c-circle-description">
                            Building the site using agile and 
efficient coding practices.
                        </p>
                    </div>
                    <!-- Step 4 -->
                    <div class="arrow">&#8594;</div>
                    <div class="circle">
                        <div class="step-number">04</div>
                        <h6
                            class="c-theme-text-color fw-bold mt-2 c-circle-title"
                        >
                            Testing & QA
                        </h6>
                        <p class="small c-circle-description">
                            Understanding your business goals 
                            and technical needs.
                        </p>
                    </div>

                    <!-- Step 5 -->
                    <div class="arrow">&#8594;</div>
                    <div class="circle">
                        <div class="step-number">05</div>
                        <h6
                            class="c-theme-text-color fw-bold mt-2 c-circle-title"
                        >
                            Launch & Post-Launch Support
                        </h6>
                        <p class="small c-circle-description">
                            Seamless deployment with 
ongoing support.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-4">
            <h3 class="c-theme-text-color">Technology Stack Notes</h3>
            <p>Leveraging HTML5, CSS3, JavaScript frameworks, PHP, Laravel, and more to deliver robust and dynamic web solutions.</p>
            <img
                src="/images/phpLogo.png"
                class=""
                alt="Program Icon"
                width="59px"
               height="59px"
            />
            <img
                src="/images/jsLogo.png"
                class="ms-4"
                alt="Kotlin"
                width="49px"
               height="49px"
            />
            <img
                src="/images/htLogo.png"
                class="ms-4"
                alt="React"
                width="59px"
                height="59px"
            />
            <img
                src="/images/cssLogo.png"
                class="ms-4"
                alt="Flutter"
                width="59px"
                height="59px"
            />
        </div>
    </div>
    <!-- the, portfolio -->

    <div class="bg-white">
        <div class="container mt-5 py-4">
            <div>
                <h1 class="fw-bold mb-5">
                    Our Portfolio & Success <br />
                    <span class="c-theme-text-color">Stories</span>
                </h1>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <img
                        src="/images/mobiles.png"
                        class="shadow c-image"
                        alt=""
                    />
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="mt-5">
                        <h1 class="fw-bold">
                            Smart Workforce <br />
                            <span class="c-theme-text-color"
                                >Manager Application</span
                            >
                        </h1>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Dolores quidem omnis sed aut dignissimos
                            repellat assumenda fuga, quae vero ducimus! Ducimus
                            sunt doloremque nihil cupiditate et reprehenderit
                            inventore obcaecati. Porro explicabo impedit earum
                            mollitia?
                        </p>
                        <button class="btn c-theme-button">Case Study</button>
                    </div>
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
                    title: "Custom Web Design",
                    description:
                        "Streamline appointments, prescriptions, and patient monitoring while enabling real-time communication with clinicians.",
                    icon: `<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24">
             <path fill="white" d="M12 2a10 10 0 0 0-10 10 10 10 0 0 0 10 10 10 10 0 0 0 10-10A10 10 0 0 0 12 2zm0 18a8 8 0 1 1 0-16 8 8 0 0 1 0 16zm1-11h-2V7h2v2zm0 2v6h-2v-6h2z"/>
           </svg>`,
                },
                {
                    title: "Responsive & First Development",
                    description:
                        "Enhance user experience across multiple devices and operating systems with seamless app functionality.",
                    icon: `<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24">
             <path fill="white" d="M4 4h16v2H4V4zm0 6h16v2H4v-2zm0 6h16v2H4v-2z"/>
           </svg>`,
                },
                {
                    title: "E-Commerce & CMS Solutions",
                    description:
                        "Integrate secure payment gateways and user-friendly content management systems for a seamless user experience.",
                     
                    icon: `<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24">
             <path fill="white" d="M12 2L3 7l9 5 9-5-9-5zm0 5l9 5-9 5-9-5 9-5zm0 10l9 5-9 5-9-5 9-5z"/>
           </svg>`,
                },
                {
                    title: "SEO & Performance Optimization",
                    description:
                        "Boost your online visibility and user engagement with SEO-optimized content and fast-loading web pages.",
                     
                    icon: `<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24">
             <path fill="white" d="M3 3h18v6h-2V5H5v14h14v-4h2v6H3V3zm8 8h2v4h-2v-4zm-4 2h2v2H7v-2zm8-2h2v4h-2v-4zm4-2h2v6h-2v-6z"/>
           </svg>`,
                },
                {
                    title: "Security & Scalibility", 
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
    background: linear-gradient(to bottom, #296fb6, #2d7bc9);
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

@media (max-width: 768px) {
    .col-2 {
        flex: 0 0 100%;
        max-width: 100%;
    }
}

h1 {
    text-transform: uppercase;
    font-size: 2.5rem;
    font-weight: bold;
}
.circle {
    width: 200px;
    height: 200px;
    border-radius: 50%;
    border: 3px solid #2f6eb5;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
    background-color: white;
    padding: 15px;
    box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
    margin-bottom: 15px;
}
.step-number {
    background-color: #2f6eb5;
    color: white;
    padding: 10px 20px;
    border-radius: 50px;
    font-weight: bold;
    font-size: 20px;
}
.arrow {
    font-size: 40px;
    color: #2f6eb5;
    font-weight: bold;
    margin: 0 20px;
}
.flow-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    position: relative;
}
/* Hide arrows on mobile */
@media (max-width: 768px) {
    .arrow {
        display: none;
    }
    .circle {
        width: 200px;
        height: 200px;
    }
}

/* Initially hidden description */
.c-circle-description {
    opacity: 0;
    visibility: hidden;
    transition: opacity 0.3s ease-in-out, visibility 0.3s ease-in-out;
}

/* On hover, show description and hide title & number */
.circle:hover .step-number,
.circle:hover .c-circle-title {
    opacity: 0;
    visibility: hidden;
}

.circle:hover .c-circle-description {
    opacity: 1;
    visibility: visible;
}

.circle:hover {
    background-color: #2f6eb5;
    color: white;
}

/* Step Number */
.step-number {
    background-color: #2f6eb5;
    color: white;
    padding: 10px 20px;
    border-radius: 50px;
    font-weight: bold;
    font-size: 20px;
    transition: opacity 0.3s ease-in-out, transform 0.3s ease-in-out;
}

/* Step Title */
.c-circle-title {
    font-weight: bold;
    margin-top: 10px;
    transition: opacity 0.3s ease-in-out, transform 0.3s ease-in-out;
}

/* Description (Initially Hidden) */
.c-circle-description {
    opacity: 0;
    visibility: hidden;
    position: absolute;
    width: 80%;
    transition: opacity 0.3s ease-in-out, visibility 0.3s ease-in-out;
}

/* Hover Effects */
.circle:hover {
    background-color: #2f6eb5;
    color: white;
    transform: translateY(-10px);
}

/* Hide Title & Number, Show Description */
.circle:hover .step-number,
.circle:hover .c-circle-title {
    opacity: 0;
    transform: translateY(-10px);
}

.circle:hover .c-circle-description {
    opacity: 1;
    visibility: visible;
}

/* Responsive: Hide Arrows on Mobile */
@media (max-width: 768px) {
    .arrow {
        display: none;
    }
}
</style>
