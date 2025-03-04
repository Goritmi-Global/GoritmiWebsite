<template>
    <section class="about-section">
        <div class="container">
            <div class="text-black">
                <div class="row align-items-center">
                    <!-- About Content -->
                    <h1>About <span class="c-theme-text-color">Us</span></h1>
                    <div class="col-md-6 col-sm-12 text-center text-md-start">
                        <div class="content">
                            <p class="c-description">
                                At Goritmi, we empower businesses with tailored
                                digital solutions to enhance efficiency,
                                productivity, and innovation. Inspired by
                                Al-Khwarizmi's pioneering spirit, we
                                revolutionize how businesses harness technology,
                                shaping a smarter, more connected future. Our
                                name honors Al-Khwarizmi, the father of
                                algorithms, reflecting our commitment to
                                transformative digital solutions that blend
                                historical inspiration with modern innovation.
                                Goritmi's name pays homage to the legendary
                                mathematician Al-Khwarizmi, whose groundbreaking
                                contributions laid the foundation for modern
                                algorithms and computational thinking. Rooted in
                                this legacy, Goritmi was founded to bring
                                transformative digital solutions to businesses,
                                blending inspirat- ion from the past with
                                cutting-edge innovation.ored to your unique
                                needs, including branding, app development.
                            </p>
                        </div>
                    </div>

                    <!-- YouTube Video -->
                    <div class="col-md-6 col-sm-12 text-center">
                        <div>
                            <iframe
                                width="100%"
                                class="rounded-4"
                                height="315"
                                src="https://www.youtube.com/embed/AqZ8VYS6bP0"
                                title="Goritmi Introduction"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen
                            ></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
export default {};
</script>

<style scoped>
.about-section {
    padding: 20px;
}

.video-wrapper {
    max-width: 100%;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
}
h1 {
    text-transform: uppercase;
    font-size: 2.5rem;
    font-weight: bold;
}
</style>
