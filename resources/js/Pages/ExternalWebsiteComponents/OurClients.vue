<template>
    <section class="clients-section">
        <div class="container">
            <h1>
                Our <span class="c-theme-text-color">Clients</span> 
            </h1>
            <div class="logos mt-3" @mouseover="pauseMarquee" @mouseleave="resumeMarquee">
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
                { name: "mehfoz memory", image: "images/clientsLogs/mehfoz.png" },
                { name: "printed", image: "images/clientsLogs/printed.png" },
                { name: "alaida", image: "images/clientsLogs/alaida.png" },
                { name: "Millinium spring water", image: "images/clientsLogs/Millinium spring water.png" },
                { name: "liv learn", image: "images/clientsLogs/liv_learn.png" },
                // { name: "Ittifaq Coal Company", image: "images/clientsLogs/Ittifaq.png" },
                { name: "sasclassic_h", image: "images/clientsLogs/sasclassic_h.png" },
                { name: "PIMMS Institute", image: "images/clientsLogs/pimms.png" },
                { name: "Alshamama", image: "images/clientsLogs/alshamama.png" },
                { name: "ttc-global", image: "images/clientsLogs/ttc-global.png" }
                  
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
