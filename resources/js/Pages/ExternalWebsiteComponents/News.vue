<template>
    <section class="portfolio-section">
        <div class="container py-5 text-dark">
            
                <h1>
                    RECENT PROJECTS <br />
                    FROM <span class="c-theme-text-color">OUR PORTFOLIO</span>
                </h1>
                <p class="lead">
                    Discover our latest projects showcasing innovation, efficiency, and modern solutions.
                </p>
           
            <div class="row align-items-center mt-5">
                <!-- Image Section -->
                <div class="col-md-6 text-center">
                    <img 
                        class="project-image c-theme-radius img-fluid  hover-effect" 
                        :src="project.image" 
                        :alt="project.title" 
                    />
                </div>
                <!-- Text Section -->
                <div class="col-md-6">
                    <h2>
                        {{ project.title }} <br />
                        <span class="c-theme-text-color">{{ project.subtitle }}</span>
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
                    "An innovative workforce management solution designed to streamline operations, enhance productivity, and improve decision-making for businesses. AI-driven insights to help organizations optimize their workforce, reduce operational inefficiencies, and maximize employee engagement. By integrating powerful scheduling tools, time tracking, and performance evaluation modules, submit leave requests, and communicate with their managers from anywhere, enhancing transparency and collaboration. Additionally, the platform supports predictive analytics, helping businesses anticipate workforce demands, reduce labor costs, and ensure compliance with labor laws and regulations. Whether you're a small startup or a large enterprise, this comprehensive solution empowers you to take control of workforce management, fostering a more efficient and productive work environment.",
                image: "images/project.png",
                caseStudyLink: "#",
                contactLink: "#"
            }
        };
    }
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
