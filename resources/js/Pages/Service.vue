<template>
    <div>
        <!-- Hero Section -->
        <div class="c-about">
            <div class="container">
                <div class="row align-items-center">
                    <!-- About Content -->
                      
                </div>
            </div>
        </div>

        <!-- Services Section -->
        <ServicesSection :title_first_part="'What'" :title_last_part="'we Offer'"/>
        <ProductsSection />
        <!-- Meet Our Team -->
        
        <ContactUsSection />
    </div>
</template>

<script>
import Master from "./Layouts/Master.vue";
import ServicesSection from "./ExternalWebsiteComponents/Services.vue";
import ContactUsSection from "./ExternalWebsiteComponents/ContactUsSection.vue";
import ProductsSection from "./ExternalWebsiteComponents/Products.vue";

export default {
    layout: Master,
    components: { ServicesSection, ContactUsSection,ProductsSection },
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
    background: url("images/serviceMain.png") no-repeat center center/cover;
    min-height: 400px;
    display: flex;
    justify-content: center;
    color: white;
    padding: 60px 0;
    position: relative;
}

.c-about::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5);
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
