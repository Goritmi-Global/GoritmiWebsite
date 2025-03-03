<template>
    <section class="solutions-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12 text-center text-md-start">
                    <h1>
                        Our <span class="c-theme-text-color">Solutions</span>
                    </h1>
                    <p class="c-description">
                        Goritmi is a leading software development company that
                        creates robust software solutions for startups and
                        established businesses. Embrace the demands of the
                        modern era and transform your business with innovative,
                        cutting-edge digital solutions.
                    </p>
                </div>
            </div>

            <div class="row g-3">
                <div
                    v-for="(solution, index) in solutions"
                    :key="index"
                    class="col-md-4"
                >
                    <div
                        class="card h-100 solution-card"
                        @mouseover="hoveredIndex = index"
                        @mouseleave="hoveredIndex = null"
                        :class="{ [solution.borderClass]: hoveredIndex === index }"
                    >
                        <div
                            class="card-body text-center d-flex flex-column align-items-center justify-content-center"
                        >
                            <!-- Image -->
                            <img
                                :src="solution.image"
                                class="solution-image"
                                width="80px"
                                height="76px"
                                alt="Icon"
                            />

                            <!-- Name & Paragraph (Toggle on hover) -->
                            <div class="solution-text">
                                <h5
                                    v-if="hoveredIndex !== index"
                                    class="solution-title mt-3"
                                    :class="solution.textClass"
                                >
                                    <b> {{ solution.name }}</b>
                                </h5>
                                <p
                                    v-if="hoveredIndex === index"
                                    class="solution-description text-muted"
                                >
                                    {{ solution.description }}
                                </p>
                            </div>

                            <!-- Button -->
                            <a
                                :href="solution.link"
                                class="btn c-theme-button see-more-btn"
                                >See More</a
                            >
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
            hoveredIndex: null, // Track hovered index
            solutions: [
                {
                    name: "Goritmi Active",
                    image: "/images/ProductActiveLogo.png",
                    description:
                        "Goritmi Active Simplify healthcare with smart scheduling, digital prescriptions, and real-time patient monitoring.",
                    textClass: "c-theme-text-color",
                    borderClass: "border-primary",
                    link: "/productA/details",
                },
                {
                    name: "Goritmi Balance",
                    image: "/images/ProductBetaLogo.png",
                    description:
                        "Goritmi Balance Manage financial transactions, track expenses, and generate insightful reports with ease.",
                    textClass: "text-success",
                    borderClass: "border-success",
                    link: "/productB/details",
                },
                {
                    name: "Goritmi Connect",
                    image: "/images/ProductConnectLogo.png",
                    description:
                        "Goritmi Connect Enhance team collaboration and communication with our seamless networking solution.",
                    textClass: "text-warning",
                    borderClass: "border-warning",
                    link: "/productC/details",
                },
            ],
        };
    },
};
</script>

<style scoped>
.solutions-section {
    padding: 20px;
    background-color: #fff;
}

.solution-card {
    position: relative;
    overflow: hidden;
    transition: all 0.3s ease-in-out;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    border: 2px solid transparent;
    border-radius: 10px;
}

/* Add scale effect on hover */
.solution-card:hover {
    transform: scale(1.05);
}

/* Apply border color on hover */
.border-primary {
    border-color: #296fb6 !important;
}
.border-success {
    border-color: #28a745 !important;
}
.border-warning {
    border-color: #ffc107 !important;
}

/* Image transition */
.solution-image {
    transition: transform 0.3s ease-in-out;
}

/* Move image up when hovering */
.solution-card:hover .solution-image {
    transform: translateY(-1px);
}

/* Text section */
.solution-text {
    position: relative; 
}

/* Name & Description toggle */
.solution-title,
.solution-description {
    transition: opacity 0.3s ease-in-out;
    width: 100%;
}

.solution-title {
    opacity: 1;
}

.solution-description {
    opacity: 0;
}

/* Hover effect */
.solution-card:hover .solution-title {
    opacity: 0;
}

.solution-card:hover .solution-description {
    opacity: 1;
}

/* Adjust button position on hover */
 

.solution-card:hover .see-more-btn {
    transform: translateY(5px);
}

h1 {
    text-transform: uppercase;
    font-size: 2.5rem;
    font-weight: bold;
}
</style>
