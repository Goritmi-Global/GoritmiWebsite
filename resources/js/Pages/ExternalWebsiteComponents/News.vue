<template>
    <section class="portfolio-section" data-aos="fade-up" data-aos-delay="200">
        <div class="container py-5 text-dark">
            <h1>
                RECENT PROJECTS <br />
                FROM <span class="c-theme-text-color">OUR PORTFOLIO</span>
            </h1>
            <p class="lead">
                Discover our latest projects showcasing innovation, efficiency,
                and modern solutions.
            </p>

            <div class="row align-items-center mt-5">
                <!-- Image Section -->
                <div class="col-md-6 text-center"  data-aos="fade-right" data-aos-delay="200">
                    <img
                        class="project-image c-theme-radius img-fluid hover-effect"
                        :src="project.image"
                        :alt="project.title"
                        width="500"
                    />
                </div>
                <!-- Text Section -->
                <div class="col-md-6"  data-aos="fade-left" data-aos-delay="200">
                    <h2>
                        {{ project.title }} <br />
                        <span class="c-theme-text-color">{{
                            project.subtitle
                        }}</span>
                    </h2>
                    <p class="mt-3 c-description">
                        {{ project.description }}
                    </p>
                    <!-- <div class="mt-4">
                        <a :href="project.caseStudyLink" class="btn c-theme-button fw-bold">
                            Case Study
                        </a>
                        <a :href="project.contactLink" class="btn c-theme-button fw-bold ms-3">
                            Contact Us
                        </a>
                    </div> -->
                </div>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    data() {
        return {
            project: {
                title: "Smart Workforce",
                subtitle: "Manager Application",
                description:
                    "Goritmi Unveils Cutting-Edge Workforce Management Solution Goritmi introduces an innovative workforce management solution designed to streamline operations, enhance productivity, and drive smarter decision-making for businesses. Powered by AI-driven insights, this platform helps organizations optimize workforce planning, minimize inefficiencies, and maximize employee engagement.With integrated scheduling tools, real-time time tracking, and advanced performance evaluation modules, employees can easily submit leave requests and communicate with managers from anywhere—enhancing transparency and collaboration. The platform also features predictive analytics, enabling businesses to anticipate workforce demands, reduce labor costs, and ensure compliance with labor laws and regulations.Whether you're a growing startup or a large enterprise, Goritmi's comprehensive workforce management solution empowers businesses to take full control of their operations, fostering a more efficient and productive work environment.",
                image: "images/project.png",
                caseStudyLink: "#",
                contactLink: "#",
            },
        };
    },
};
</script>

<style scoped>
.portfolio-section {
    background-color: #f8f9fa;
}

h1 {
    font-size: 2.5rem;
    font-weight: bold;
}

h2 {
    font-size: 2rem;
}

.project-image {
    max-width: 100%;
    height: auto;
}

p {
    font-size: 1rem;
    color: #555;
}
</style>
