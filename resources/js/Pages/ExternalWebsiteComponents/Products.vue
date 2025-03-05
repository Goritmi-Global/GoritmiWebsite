<template>
    <section class="solutions-section pb-5">
        <div class="container">
            <!-- Title Section -->
            <div class="row">
                <div class="col-12 text-center text-md-start">
                    <h1>
                        Our <span class="c-theme-text-color">Solutions</span>
                    </h1>
                    <p class="c-description">
                        Goritmi is a leading software development company that creates robust software solutions for startups and established businesses. 
                        Embrace the demands of the modern era and transform your business with innovative, cutting-edge digital solutions.
                    </p>
                </div>
            </div>

            <!-- Solutions Cards -->
            <div class="row g-4">
                <div
                    v-for="(solution, index) in solutions"
                    :key="index"
                    class="col-md-4 d-flex"
                >
                    <div
                        class="card h-100 solution-card w-100"
                        @mouseover="hoveredIndex = index"
                        @mouseleave="hoveredIndex = null"
                        :class="{ [solution.borderClass]: hoveredIndex === index }"
                    >
                        <div class="card-body text-center d-flex flex-column align-items-center justify-content-center">
                            <!-- Image -->
                            <img
                                :src="solution.image"
                                class="solution-image"
                                width="80"
                                height="76"
                                alt="Icon"
                            />

                            <!-- Name & Description with Transition -->
                            <div class="solution-text">
                                <transition name="fade-slide" mode="out-in">
                                    <h5
                                        v-if="hoveredIndex !== index"
                                        class="solution-title mt-3"
                                        :class="solution.textClass"
                                        key="title"
                                    >
                                        <b>{{ solution.name }}</b>
                                    </h5>
                                    <p
                                        v-else
                                        class="solution-description text-muted"
                                        key="description"
                                    >
                                        {{ solution.description }}
                                    </p>
                                </transition>
                            </div>

                            <!-- Button -->
                            <a :href="solution.link" class="btn c-theme-button see-more-btn">
                                See More
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    data() {
        return {
            hoveredIndex: null,
            solutions: [
                {
                    name: "Goritmi Active",
                    image: "/images/ProductActiveLogo.png",
                    description: "Goritmi Active simplifies healthcare with smart scheduling, digital prescriptions, and real-time patient monitoring.",
                    textClass: "c-theme-text-color",
                    borderClass: "border-primary",
                    link: "/goritmi-active",
                },
                {
                    name: "Goritmi Balance",
                    image: "/images/ProductBetaLogo.png",
                    description: "Goritmi Balance helps you manage financial transactions, track expenses, and generate insightful reports with ease.",
                    textClass: "text-success",
                    borderClass: "border-success",
                    link: "/goritmi-balance",
                },
                {
                    name: "Goritmi Connect",
                    image: "/images/ProductConnectLogo.png",
                    description: "Goritmi Connect enhances team collaboration and communication with our seamless networking solution.",
                    textClass: "text-warning",
                    borderClass: "border-warning",
                    link: "/goritmi-connect",
                },
            ],
        };
    },
};
</script>

<style scoped>
.solutions-section {
    padding: 40px 20px;
    background-color: #fff;
}

/* Solution Cards */
.solution-card {
    position: relative;
    overflow: hidden;
    transition: transform 0.3s ease-in-out, border-color 0.3s ease-in-out;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    border: 2px solid transparent;
    border-radius: 10px;
}

/* Hover effect */
.solution-card:hover {
    transform: scale(1.05);
}

/* Border colors on hover */
.border-primary {
    border-color: #296fb6 !important;
}
.border-success {
    border-color: #28a745 !important;
}
.border-warning {
    border-color: #ffc107 !important;
}

/* Image hover effect */
.solution-image {
    transition: transform 0.3s ease-in-out;
}
.solution-card:hover .solution-image {
    transform: translateY(-5px);
}

/* Name & Description toggle with animation */
.solution-text {
    position: relative;
}

/* Vue Transition */
.fade-slide-enter-active,
.fade-slide-leave-active {
    transition: opacity 0.3s ease-in-out, transform 0.3s ease-in-out;
}

.fade-slide-enter-from {
    opacity: 0;
    transform: translateY(10px);
}

.fade-slide-leave-to {
    opacity: 0;
    transform: translateY(-10px);
}

/* Adjust button position on hover */
.solution-card:hover .see-more-btn {
    transform: translateY(5px);
}

/* Title */
h1 {
    text-transform: uppercase;
    font-size: 2.5rem;
    font-weight: bold;
}
</style>
