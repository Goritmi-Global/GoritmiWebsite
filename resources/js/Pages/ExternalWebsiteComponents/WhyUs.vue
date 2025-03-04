<template>
    <section class="approach-section">
        <div class="container">
            <div class="mb-5">
                <h1>
                    OUR APPROACHES <br />
                    TO <span class="c-theme-text-color">SOLVE A PROBLEM.</span>
                </h1>
                
                <p class="text-muted">
                    Goritmi follows every possible method to solve problems for our clients and help them in their business.
                </p>
            </div>

            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 align-items-stretch">
                <div v-for="(approach, index) in approaches" :key="index" class="col">
                    <div class="approach-card shadow-sm p-4 d-flex flex-column h-100">
                        <h1 class="approach-number">{{ approach.number }}</h1>
                        <img :src="approach.icon" :alt="approach.title" class="approach-icon c-theme-text-color" />
                        <div class="flex-grow-1">
                            <h5 class="approach-title">
                                <span class="fw-bold">{{ approach.mainTitle }}</span>
                                <br />
                                <span class="c-theme-text-color">{{ approach.highlight }}</span>
                            </h5>
                            <p class="text-muted">{{ approach.description }}</p>
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
            approaches: [
                { number: "01.", icon: "images/icon 1.png", mainTitle: "Customer-Centric", highlight: "Approach", description: "We put our customers at the heart of everything we do. Our solutions are tailored to your business needs." },
                { number: "02.", icon: "images/icon 2.png", mainTitle: "Tailored", highlight: "Solutions", description: "We craft bespoke solutions to enhance efficiency, streamline processes, and drive growth." },
                { number: "03.", icon: "images/icon.png", mainTitle: "Over 30 Years of", highlight: "Experience", description: "With decades of expertise, we help businesses achieve digital transformation successfully." },
                { number: "04.", icon: "images/icon 4.png", mainTitle: "Dedicated", highlight: "Support", description: "Our expert support ensures seamless troubleshooting, training, and optimization when needed." },
                { number: "05.", icon: "images/icon 5.png", mainTitle: "Innovation & Cutting-Edge", highlight: "Technology", description: "We leverage the latest advancements to create intuitive and scalable software solutions." },
                { number: "06.", icon: "images/icon 6.png", mainTitle: "Reliability &", highlight: "Trust", description: "We value integrity, transparency, and professionalism, building long-term client relationships." }
            ]
        };
    }
};
</script>

<style scoped>
.approach-section {
    background-color: #f8f9fa;
    padding: 50px 0;
}

.approach-card {
    position: relative;
    background: white;
    border-radius: 0.50rem;
    padding: 20px;
    transition: transform 0.3s ease;
    display: flex;
    flex-direction: column;
}

.approach-card:hover {
    transform: translateY(-5px);
}

.approach-number {
    font-size: 2.5rem;
    color: #d3d3d3;
    font-weight: 700;
    position: absolute;
    top: 10px;
    left: 15px;
}

.approach-icon {
    width: 80px;
    height: 80px;
    position: absolute;
    top: 15px;
    right: 15px;
    opacity: 0.5; /* Reduced opacity */
    transition: opacity 0.3s ease-in-out;
}

.approach-card:hover .approach-icon {
    opacity: 1; /* Full opacity on hover */
}


.approach-title {
    font-size: 1.3rem;
    margin-top: 50px;
}
 

.flex-grow-1 {
    flex-grow: 1;
}
h1 {
    font-size: 2.5rem;
    font-weight: bold;
}
</style>
