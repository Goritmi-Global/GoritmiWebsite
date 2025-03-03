<template>
    <div>
        <!-- Hero Section -->
        <section class="c-about text-center">
            <div class="container">
                <h1>About <span class="c-theme-text-color">Us</span></h1>
            </div>
        </section>

        <section class="about-section p-4">
            <div class="container">
                <div class="text-black">
                    <div class="row align-items-center">
                        <div
                            class="col-md-7 col-sm-12 text-center text-md-start"
                        >
                            <div class="content">
                                <p class="c-description">
                                    At Goritmi, we empower businesses with
                                    tailored digital solutions to enhance
                                    efficiency, productivity, and innovation.
                                    Inspired by Al-Khwarizmi's pioneering
                                    spirit, we revolutionize how businesses
                                    harness technology, shaping a smarter, more
                                    connected future. Our name honors
                                    Al-Khwarizmi, the father of algorithms,
                                    reflecting our commitment to transformative
                                    digital solutions that blend historical
                                    inspiration with modern innovation.
                                    Goritmi's name pays homage to the legendary
                                    mathematician Al-Khwarizmi, whose
                                    groundbreaking contributions laid the
                                    foundation for modern algorithms and
                                    computational thinking. Rooted in this
                                    legacy, Goritmi was founded to bring
                                    transformative digital solutions to
                                    businesses, blending inspirat- ion from the
                                    past with cutting-edge innovation.ored to
                                    your unique needs, including branding, app
                                    development, website design, software
                                    engineering, and more. Our mission is to
                                    empower businesses to increase efficiency
                                    and productivity, bridging the gap between
                                    ideas and impactful digital transfor-
                                    mations.
                                </p>
                            </div>
                        </div>

                        <!-- YouTube Video -->
                        <div class="col-md-5 col-sm-12 text-center">
                            <div>
                                <img
                                    src="/images/scientist.png"
                                    alt="Scientist Image"
                                    class="img-fluid rounded"
                                    width="618"
                                    height="280"
                                />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Services Section -->
        <!-- <ServicesSection :title_first_part="'What'" :title_last_part="'we Offer'"/> -->

        <!-- Meet Our Team -->
         <div class="bg-white p-2">
        <div class="container mt-5">
            <h1>Meet <span class="c-theme-text-color">Our Team</span></h1>
            <p class="c-description">
                At Goritmi, our team of skilled professionals is dedicated to
                developing robust software solutions for startups and
                established businesses. We embrace the challenges of the modern
                era, driving innovation and digital transformation with
                cutting-edge technology. Together, we build solutions that
                empower businesses to thrive in a rapidly evolving landscape.
            </p>

            <div class="row justify-content-center">
                <div
                    v-for="(member, index) in team"
                    :key="index"
                    class="col-lg-3 col-md-6 col-sm-12"
                >
                    <div class="card team-card shadow text-center">
                        <div class="card-body p-3">
                            <img
                                :src="member.image"
                                class="rounded-circle team-img"
                                :alt="member.name"
                            />
                            <h5 class="mt-3 c-theme-text-color">
                                <b>{{ member.name }}</b>
                            </h5>
                            <p class="text-muted">{{ member.role }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <ContactUsSection />
    </div>
</template>

<script>
import Master from "./Layouts/Master.vue";
import ServicesSection from "./ExternalWebsiteComponents/Services.vue";
import ContactUsSection from "./ExternalWebsiteComponents/ContactUsSection.vue";

export default {
    layout: Master,
    components: { ServicesSection, ContactUsSection },
    data() {
        return {
            team: [
                {
                    name: "M SHAH",
                    role: "Managing Director",
                    image: "images/team/abubakr.jpg",
                },
                {
                    name: "FARHAN SHAH",
                    role: "Business Development Manager",
                    image: "images/team/farhan.jpg",
                },
                {
                    name: "BILAL HUSSAIN",
                    role: "Web Team Lead",
                    image: "images/team/bilal.jpg",
                },
                {
                    name: "WASIM AHMAD",
                    role: "App Team Lead",
                    image: "images/img2.jpeg",
                },
                {
                    name: "CHASHMAN KHAN",
                    role: "UI/UX Designer",
                    image: "images/team/chashman.jpg",
                },
                {
                    name: "HAMZA KHAN",
                    role: "Web Designer",
                    image: "images/team/hamza.jpg",
                },
                {
                    name: "SHAKIR ULLAH",
                    role: "Mobile App Developer",
                    image: "images/img2.jpeg",
                },
                {
                    name: "AHSAN KHAN",
                    role: "Accounts Dealing Manager",
                    image: "images/img2.jpeg",
                },
            ],
        };
    },
};
</script>

<style scoped>
/* Hero Section */
.c-about {
    background: url("images/about.png") no-repeat center center/cover;
    min-height: 300px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    padding: 60px 0;
}
/* Team Cards */
.team-card {
    transition: all 0.3s ease-in-out;
    border: 1px solid #ddd;
    border-radius: 10px;
    overflow: hidden;
}

.team-card:hover {
    transform: scale(1.05);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
    border-color: #296fb6;
}

/* Team Images */
.team-img {
    width: 120px;
    height: 120px;
    object-fit: cover;
    border: 1px solid #296fb6;
    padding: 5px;
}

/* Responsive Text Styling */
h1 {
    text-transform: uppercase;
    font-size: 2.5rem;
    font-weight: bold;
}

.c-description {
    font-size: 1.1rem;
    color: #333;
    line-height: 1.6;
}
</style>
