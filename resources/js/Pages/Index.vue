<template>
    <div>
        
        <CarouselSection />
        <AboutSection />
        <ProductsSection />
        
   
        <ServicesSection :title_first_part="'Our'" :title_last_part="'Services'"/>

        <OurClientsSection />
        <NewsSection />
        <LetDiscuccSection />
        <WhyUsSection />
        <ContactUsSection />
        <!-- <HappyClientsSection /> -->

        
      
 
    </div>
</template>

<script>
import Master from "./Layouts/Master.vue";
import CarouselSection from "./ExternalWebsiteComponents/Carousel.vue";
import AboutSection from "./ExternalWebsiteComponents/AboutSection.vue";
import ProductsSection from "./ExternalWebsiteComponents/Products.vue";
import ServicesSection from "./ExternalWebsiteComponents/Services.vue";
import OurClientsSection from "./ExternalWebsiteComponents/OurClients.vue";
import NewsSection from "./ExternalWebsiteComponents/News.vue";
import WhyUsSection from "./ExternalWebsiteComponents/WhyUs.vue";
import LetDiscuccSection from "./ExternalWebsiteComponents/LetDiscuccSection.vue";
import HappyClientsSection from "./ExternalWebsiteComponents/HappyClients.vue";
import ContactUsSection from "./ExternalWebsiteComponents/ContactUsSection.vue";

export default {
    layout: Master,
    components: {
        CarouselSection,
        AboutSection,
        ProductsSection,
        ServicesSection,
        OurClientsSection,
        NewsSection,
        WhyUsSection,
        LetDiscuccSection,
        HappyClientsSection,
        ContactUsSection,
    },
    data() {
        return {};
    },
    setup() {},
};
</script>

<style>

.logos {
    overflow: hidden;
    white-space: nowrap;
    position: relative;
}

.logos-slide {
    display: flex;
    animation: scroll 20s linear infinite;
}

.logos-slide img {
    max-height: 80px;
    margin: 0 15px;
}

@keyframes scroll {
    from {
        transform: translateX(100%);
    }
    to {
        transform: translateX(-100%);
    }
}
.c-btn-sec {
    margin-top: 250px;
    margin-left: 50px;
}

.c-content {
    margin-top: 200px;
    margin-left: -20px;
}
.img-sec {
    margin-top: 130px;
    margin-left: 200px;
}
.main-sec {
    margin-top: 600px;
}
.c-sec {
    margin-top: -180px;
}
.c-background {
    position: relative;
    background: url("images/consultation.png") no-repeat center center/cover;
    color: #fff;
    padding: 40px;
    text-align: left;
}
.c-background::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(170, 174, 180, 0.7); /* Blue Overlay */
}
.c-background-content {
    position: relative;
    z-index: 2;
}
/* .heading{
          opacity: -5;
        } */
.icon {
    position: absolute;
    top: 20px;
    right: 20px;
    font-size: 40px;
    color: #007bff;
}
.review-card {
    border-radius: 10px;
    padding: 20px;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    background: #fff;
}
.profile {
    display: flex;
    align-items: center;
    gap: 10px;
}
.profile img {
    width: 40px;
    height: 40px;
    border-radius: 50%;
}
.profile-text {
    font-weight: bold;
    color: #0056b3;
}
.stars {
    color: #ffcc00;
}

</style>
