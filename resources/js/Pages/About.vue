<template>
    <div>
        <!-- Hero Section -->
        <div class="c-about">
            <div class="container">
                <div class="row align-items-center">
                    <!-- About Content -->
                    <div class="col-md-6 text-md-start text-center">
                        <h1>About <span class="c-theme-text-color">Us</span></h1>
                        <p class="c-description">
                            Goritmi is a leading software development company
                            that creates robust software solutions for startups
                            and established businesses. Embrace the demands of
                            the modern era and transform your business with
                            innovative, cutting-edge digital solutions.
                        </p>
                    </div>

                    <!-- About Image -->
                    <div class="col-md-6 text-center">
                        <img
                            src="/images/scientist.png"
                            alt="Scientist Image"
                            class="img-fluid rounded shadow-lg"
                            width="418"
                            height="280"
                        />
                    </div>
                </div>
            </div>
        </div>

        <!-- Services Section -->
        <ServicesSection :title_first_part="'What'" :title_last_part="'we Offer'"/>

        <!-- Meet Our Team -->
        <div class="container">
            <h1>Meet <span class="c-theme-text-color">Our Team</span></h1>
            <p class="c-description">
                Goritmi is a leading software development company that creates
                robust software solutions for startups and established
                businesses. Embrace the demands of the modern era and transform
                your business with innovative, cutting-edge digital solutions.
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
                    name: "John Doe",
                    role: "Founder & CEO",
                    image: "images/img1.jpeg",
                },
                {
                    name: "Emily Davis",
                    role: "Marketing Head",
                    image: "images/img4.jpeg",
                },
                {
                    name: "Jane Smith",
                    role: "Co-Founder & CTO",
                    image: "images/img2.jpeg",
                },
                {
                    name: "Michael Lee",
                    role: "Lead Developer",
                    image: "images/img3.jpeg",
                },
                {
                    name: "Emily Davis",
                    role: "Marketing Head",
                    image: "images/img4.jpeg",
                },
                {
                    name: "Michael Lee",
                    role: "Lead Developer",
                    image: "images/img3.jpeg",
                },
                {
                    name: "John Doe",
                    role: "Founder & CEO",
                    image: "images/img1.jpeg",
                },
                {
                    name: "Jane Smith",
                    role: "Co-Founder & CTO",
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
