<template>
    <section>
        <div class="services-section">
            <div class="container">
                <div class="text-black c-sec">
                    <div class="row">
                        <div
                            class="col-md-8 col-sm-12 text-center text-md-start"
                        >
                            <div class="c-content">
                                <h1>
                                    {{ title_first_part }}
                                    <span class="c-theme-text-color">{{ title_last_part }}</span>
                                </h1>
                                <p class="c-description">
                                    Goritmi is a leading software development
                                    company that creates robust software
                                    solutions for startups and established
                                    businesses. Embrace the demands of the
                                    modern era and transform your business with
                                    innovative, cutting-edge digital solutions.
                                </p>
                            </div>
                        </div>
                         
                    </div>

                    <div class="row g-3">
                        <div
                            class="col-md-4"
                            v-for="(service, index) in services"
                            :key="index"
                        >
                            <div class="card service-card p-2">
                                <div
                                    class="card-body text-center justify-content-center"
                                >
                                    <svg
                                        height="80px"
                                        width="80px"
                                        viewBox="0 0 512 512"
                                    >
                                        <circle cx="256" cy="256" r="256" />
                                    </svg>
                                    <h5 class="mt-2 c-theme-text-color">
                                        <b>{{ service.title }}</b>
                                    </h5>
                                    <p class="text-muted">
                                        {{ service.description }}
                                    </p>
                                    <button class="btn btn-primary mt-4">
                                        See More
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    props:['title_first_part','title_last_part'],
    data() {
        return {
            services: [
                {
                    title: "Website Development",
                    description:
                        "Streamline appointments, prescriptions, and patient monitoring while enabling real-time communication with clinicians.",
                },
                {
                    title: "Mobile App Development",
                    description:
                        "Transform your ideas into powerful mobile applications that drive user engagement and business growth.",
                },
                {
                    title: "IT Consultancy",
                    description:
                        "Get expert guidance on technology strategies, digital transformation, and software solutions for your business.",
                },
            ],
        };
    },
};
</script>

<style scoped>
.services-section {
    padding: 20px;
    background-color: #f6f9ff;
}
/* Hover effect for service cards */
.service-card {
    transition: all 0.3s ease-in-out;
    border: 1px solid #ddd;
    border-radius: 10px;
    overflow: hidden;
}

.service-card:hover {
    transform: scale(1.05);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    border-color: #007bff;
}

/* Button Hover Effect */
.c-btn-sec {
    transition: all 0.3s ease-in-out;
}

.c-btn-sec:hover {
    background-color: #007bff;
    color: #fff;
    border-color: #007bff;
}
h1 {
    text-transform: uppercase;
    font-size: 2.5rem;
    font-weight: bold;
}
</style>
