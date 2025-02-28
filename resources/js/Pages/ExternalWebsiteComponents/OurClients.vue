<template>
    <section class="clients-section">
        <div class="container">
            <h1>
                Our <span class="c-theme-text-color">Clients</span> 
            </h1>
            <div class="logos" @mouseover="pauseMarquee" @mouseleave="resumeMarquee">
                <div class="logos-slide" ref="logosSlide">
                    <img v-for="(client, index) in clients" :key="index" :src="client.image" :alt="client.name" />
                    <img v-for="(client, index) in clients" :key="'duplicate-' + index" :src="client.image" :alt="client.name" />
                </div>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    data() {
        return {
            clients: [
                { name: "Sprinkle", image: "images/brand1.png" },
                { name: "Cloudera", image: "images/cloudera.png" },
                { name: "Informatica", image: "images/brand2.png" },
                { name: "Infor", image: "images/infor.png" },
                { name: "AWS", image: "images/brand4.png" },
                { name: "Temenos", image: "images/temenos.png" },
                { name: "Microsoft", image: "images/brand3.png" },
                { name: "Formpipe", image: "images/formpipe.png" }
            ]
        };
    },
    methods: {
        pauseMarquee() {
            this.$refs.logosSlide.style.animationPlayState = "paused";
        },
        resumeMarquee() {
            this.$refs.logosSlide.style.animationPlayState = "running";
        }
    }
};
</script>

<style scoped>
.clients-section {
    padding: 40px 20px;
    background-color: #fff;
  
}

 

.logos {
    overflow: hidden;
    white-space: nowrap;
    position: relative;
    display: flex;
    align-items: center;
    max-width: 100%;
}

.logos-slide {
    display: flex;
    animation: marquee 10s linear infinite;
    width: fit-content;
}

.logos-slide img {
    max-height: 80px;
    margin: 0 15px;
    transition: transform 0.3s ease-in-out;
}

.logos-slide img:hover {
    transform: scale(1.1);
}

/* Continuous Marquee Effect */
@keyframes marquee {
    0% { transform: translateX(0); }
    100% { transform: translateX(-50%); }
}
h1 {
    text-transform: uppercase;
    font-size: 2.5rem;
    font-weight: bold;
}
</style>
