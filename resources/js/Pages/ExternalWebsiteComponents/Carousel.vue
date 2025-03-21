<template>
    <section>
        <Carousel
            v-bind="carouselConfig"
            :wrapAround="true"
            :transition="500"
            :autoplay="6000"
            :pauseAutoplayOnHover="true"
        >
            <Slide
                v-for="(slide, index) in slides"
                :key="index"
                :class="['carousel-item', slide.bgClass]"
            >
                <div class="carousel__content">
                    <div class="row">
                        <div class="col-md-12">
                            <strong class="text-white">{{
                                slide.top_text
                            }}</strong>
                            <h1 class="text-white">
                                {{ slide.main_text }} <br />
                                <span class="c-theme-text-color">{{
                                    slide.highlighted_text
                                }}</span>
                            </h1>
                            <p class="text-white">{{ slide.description }}</p>
                        </div>
                    </div>
                </div>
            </Slide>
            <template #addons>
                <!-- <Navigation /> -->
                <Pagination />
            </template>
        </Carousel>
    </section>
</template>

<script>
import "vue3-carousel/carousel.css";
import { Carousel, Slide, Pagination, Navigation } from "vue3-carousel";

export default {
    components: { Carousel, Slide, Pagination, Navigation },
    data() {
        return {
            carouselConfig: {
                itemsToShow: 1,

                wrapAround: true,
            },
            slides: [
                {
                    bgClass: "bg-image-1",
                    top_text: "Ready to Drive Growth?",
                    main_text: "Transform Your Business with Goritmi",
                     
                    description:
                        "We empower your business with innovative digital solutions that captivate customers and enhance efficiency.",
                },
                {
                    bgClass: "bg-image-2",
                    top_text:
                        "Enhance Patient Care with Seamless Digital Solutions",
                    main_text: "Goritmi Active - Smarter",
                    highlighted_text: "Health Management",
                    description:
                        "Seamless Appointments, Prescriptions & Patient Monitoring. Enhance patient monitoring while enabling real-time communication.",
                },
                {
                    bgClass: "bg-image-3",
                    top_text:
                        "Smarter Financial Management for Better Business",
                    main_text: "Goritmi Balance ",
                    highlighted_text: "Simplified Accounting",
                    description:
                        "Automate bookkeeping, manage cash flow & generate real-time reports for smarter financial decisions.",
                },
                {
                    bgClass: "bg-image-4",
                    top_text: "Goritmi Connect - Powerfull",
                    main_text: "CRM for Business Growth",
                    highlighted_text: "Simplified Accounting",
                    description:
                        "Track leads, Automate engagement and build lasting Customer relationship with all-in-one CRM.",
                },
            ],
        };
    },
};
</script>

<style scoped>
.carousel-item {
    height: 470px;
    display: flex;
    align-items: center;
    justify-content: flex-start;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    position: relative;
    padding-left: 6%;
}

.carousel__content {
    position: relative;
    z-index: 2;
    padding: 50px 0;
    text-align: left; /* Ensures all text is aligned to the left */
    width: 100%; /* Prevents text from centering due to flex properties */
    max-width: 600px; /* Adjust as needed */
}

.carousel-item::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(
        0,
        0,
        0,
        0.3
    ); /* Example: Semi-transparent black overlay */

    opacity: 0.9;
}

/* Background images */
.bg-image-1 {
    background-image: url("/images/carousel/transform-business.jpeg");
}
.bg-image-2 {
    background-image: url("/images/carousel/carousel_active.png");
}
.bg-image-3 {
    background-image: url("/images/carousel/carousel_balance.png");
}
.bg-image-4 {
    background-image: url("/images/carousel/carousel_connect.png");
}

h1 {
    text-transform: uppercase;
    font-size: 2.5rem;
    font-weight: bold;
}
</style>
