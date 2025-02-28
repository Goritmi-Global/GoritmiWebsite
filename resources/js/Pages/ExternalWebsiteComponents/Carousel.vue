<template>
    <section>
        <Carousel v-bind="carouselConfig">
            <Slide
                v-for="(slide, index) in slides"
                :key="index"
                :class="slide.bgClass"
            >
                <div class="carousel__item">
                    <div class="row">
                        <!-- Left Side: Text Content -->
                        <div class="col-md-12">
                            <strong class="text-white"
                                >Ready to Drive Growth?</strong
                            >
                            <h1 class="text-white">
                                Transform Your Business <br />
                                With
                                <span class="c-theme-text-color">Goritmi</span>
                            </h1>
                            <p class="text-white">
                                We will empower your business with innovative
                                digital solutions that captivate customers and
                                enhance efficiency.
                            </p>
                            <a
                                href="#"
                                class="btn quote-btn border bg-primary link-light"
                            >
                                Let's Discuss →
                            </a>
                        </div>

                        <!-- Right Side: Image -->
                        <!-- <div class="col-md-6 text-center">
                                <img
                                    :src="slide.image"
                                    class="img-fluid slide-image"
                                    :alt="slide.alt"
                                />
                            </div> -->
                    </div>
                </div>
            </Slide>

            <template #addons>
                <Navigation />
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
                    image: "/images/image1.png",
                    alt: "Business Transformation",
                    bgClass: "c-carousel-item-1",
                },
                {
                    image: "/images/code.png",
                    alt: "Code Development",
                    bgClass: "c-carousel-item-2",
                },
                {
                    image: "/images/window.png",
                    alt: "Business Solutions",
                    bgClass: "c-carousel-item-3",
                },
            ],
        };
    },
};
</script>

<style scoped>
/* Ensures consistent height for all slides */
.carousel__item {
    height: 600px;
    display: flex;
    align-items: center;
    justify-content: center;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    padding: 50px 0;
}

/* Background images (kept in CSS as per your request) */
.c-carousel-item-1 {
    background-image: url("/images/bg%201.png");
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
}

.c-carousel-item-2 {
    background-image: url("/images/bg%202.jpeg");
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
}

.c-carousel-item-3 {
    background-image: url("/images/bg%203.jpeg");
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
}

/* Makes text section perfectly aligned */
/* .content {
    max-width: 90%;
    margin: auto;
} */

/* Ensures images are uniform in size */
.slide-image {
    width: 100%;
    max-height: 450px;
    object-fit: cover;
    border-radius: 10px; /* Optional: Rounded corners */
}

/* Adjust button spacing */
.btn {
    margin-top: 20px;
}
h1 {
    text-transform: uppercase;
    font-size: 2.5rem;
    font-weight: bold;
}

 

.carousel__item::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.4); /* Black overlay with 50% opacity */
    z-index: 1;
}

.carousel__item * {
    position: relative;
    z-index: 2;
}

 

</style>
