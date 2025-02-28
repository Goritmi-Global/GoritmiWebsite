<template>
    <div class="container my-5">
        <h1 class="text-uppercase fw-bold text-center">
            Our Happy <span class="c-theme-text-color">Clients Review</span>
        </h1>
        <div class="row g-4 mt-3">
            <div v-for="(review, index) in reviews" :key="index" class="col-md-3">
                <div class="review-card">
                    <div class="profile">
                        <img :src="review.image" :alt="review.name" />
                        <div>
                            <div class="profile-text">{{ review.name }}</div>
                            <small class="text-muted">{{ review.designation }}</small>
                        </div>
                    </div>
                    <div class="stars mt-2">
                        <i v-for="star in 5" :key="star" class="fas fa-star" :class="{ 'text-warning': star <= review.rating, 'text-muted': star > review.rating }"></i>
                    </div>
                    <p class="mt-3 text-muted">{{ review.comment }}</p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import StarRating from "vue-star-rating";
export default {
    components: {
        StarRating
    },
    data() {
        return {
            reviews: [
                {
                    name: "John Doe",
                    designation: "CEO, Company",
                    image: "/images/pic.jpeg",
                    rating: 5,
                    comment: "Lorem Ipsum is simply dummy text of the printing and typesetting industry..."
                },
                {
                    name: "Jane Smith",
                    designation: "Marketing Head",
                    image: "/images/pic.jpeg",
                    rating: 5,
                    comment: "Lorem Ipsum is simply dummy text of the printing and typesetting industry..."
                },
                {
                    name: "Alex Johnson",
                    designation: "Entrepreneur",
                    image: "/images/pic.jpeg",
                    rating: 4,
                    comment: "Lorem Ipsum is simply dummy text of the printing and typesetting industry..."
                },
                {
                    name: "Sarah Lee",
                    designation: "Product Manager",
                    image: "/images/pic.jpeg",
                    rating: 5,
                    comment: "Lorem Ipsum is simply dummy text of the printing and typesetting industry..."
                }
            ]
        };
    }
};
</script>

<style scoped>
.review-card {
    background: #fff;
    padding: 20px;
    border-radius: 12px;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s;
}

.review-card:hover {
    transform: translateY(-5px);
}

.profile {
    display: flex;
    align-items: center;
    gap: 10px;
}

.profile img {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    object-fit: cover;
}

.profile-text {
    font-weight: bold;
}

.stars i {
    font-size: 14px;
}

h1 {
    text-transform: uppercase;
    font-size: 2.5rem;
    font-weight: bold;
}
</style>
