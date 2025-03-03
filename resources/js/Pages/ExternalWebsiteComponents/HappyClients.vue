<template>
    <section class="c-theme-bg-color p-4">
        <div class="container">
            <h1 class="text-uppercase text-white fw-bold">
                Our Happy Clients Review
            </h1>
            <Carousel
                :settings="CarouselSetting"
                :breakpoints="breakpoints"
                :autoplay="1000"
                :wrapAround="true"
                :transition="500"
                :pauseAutoplayOnHover="true"
            >
                <Slide v-for="(review, index) in reviews" :key="index">
                    <div class="review-card ms-2">
                        <div class="profile">
                            <img
                                :src="review.image"
                                :alt="review.name || 'Client Image'"
                            />
                            <div>
                                <div class="profile-text">
                                    {{ review.name }}
                                </div>
                                <small class="text-muted">{{
                                    review.designation
                                }}</small>
                            </div>
                        </div>
                        <div class="stars mt-2">
                            <i
                                v-for="star in 5"
                                :key="star"
                                class="bi bi-star-fill"
                                :class="{
                                    'text-warning': star <= review.rating,
                                    'text-muted': star > review.rating,
                                }"
                            ></i>
                        </div>
                        <p class="mt-3 text-muted">{{ review.comment }}</p>
                    </div>
                </Slide>
                <template #addons>
                    <Navigation />
                    <!-- <Pagination /> -->
                </template>
            </Carousel>
        </div>
    </section>
</template>

<script>
import "vue3-carousel/carousel.css";
import { Carousel, Slide, Pagination, Navigation } from "vue3-carousel";

export default {
    components: { Carousel, Slide, Pagination, Navigation },
    data() {
        return {
            CarouselSetting: {
                itemsToShow: 1.5,
                transition: "500",
                snapAlign: "center",
            },
            breakpoints: {
                1: {
                    itemsToShow: 1.2,
                    snapAlign: "center",
                    transition: "500",
                },
                // 700px and up
                576: {
                    itemsToShow: 2,
                    snapAlign: "center",
                    transition: "500",
                },
                992: {
                    itemsToShow: 2,
                    snapAlign: "center",
                    transition: "500",
                },
                // 1024 and up
                1200: {
                    itemsToShow: 3,
                    snapAlign: "center",
                    transition: "500",
                },
            },
            reviews: [
                {
                    name: "Michael Roberts",
                    designation: "CEO, TechWave Inc.",
                    image: "/images/default.jpg",
                    rating: 5,
                    comment:
                        "Partnering with this team has been a game-changer for our business. Their expertise and dedication to delivering top-notch solutions exceeded our expectations.",
                },
                {
                    name: "Emily Carter",
                    designation: "Head of Marketing, Bright Solutions",
                    image: "/images/default.jpg",
                    rating: 4,
                    comment:
                        "The team demonstrated outstanding professionalism and technical skills. Their solutions have streamlined our operations and enhanced our customer experience.",
                },
                {
                    name: "David Thompson",
                    designation: "Founder, StartUpX",
                    image: "/images/default.jpg",
                    rating: 5,
                    comment:
                        "From concept to execution, they delivered beyond what we envisioned. Their ability to understand our needs and translate them into a seamless solution was impressive.",
                },
                {
                    name: "Sophia Martinez",
                    designation: "Product Manager, InnovateCorp",
                    image: "/images/default.jpg",
                    rating: 4,
                    comment:
                        "A truly innovative team that delivers cutting-edge solutions. Their attention to detail and commitment to excellence set them apart in the industry.",
                },
            ],
        };
    },
};
</script>

<style scoped>
.review-card {
    background: #fff;
    padding: 20px;
    border-radius: 0.50rem;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    
    text-align: center;
    display: flex;
    flex-direction: column;
    height: 100%;
    max-width: 500px;
    margin: auto;
}

 

.profile {
    display: flex;
    align-items: center;
    gap: 12px;
}

.profile img {
    width: 55px;
    height: 55px;
    border-radius: 50%;
    object-fit: cover;
    border: 2px solid #ddd;
}

.profile-text {
    font-weight: bold;
    font-size: 1rem;
}

.stars i {
    font-size: 16px;
}

h1 {
    font-size: 2.5rem;
}

p {
    font-size: 0.95rem;
    line-height: 1.5;
    flex-grow: 1;
}
</style>
