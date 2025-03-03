<template>
    <section class="faq-section p-4 bg-white mt-5">
        <div class="container">
            <h1 class="text-uppercase fw-bold">
                <span class="c-theme-text-color">Frequently Asked Questions</span> (FAQs) 
            </h1>
            <div class="accordion mt-4" id="faqAccordion">
                <div class="accordion-item" v-for="(faq, index) in faqs" :key="index">
                    <h2 class="accordion-header" :id="'heading' + index">
                        <button
                            class="accordion-button"
                            :class="{ collapsed: activeIndex !== index }"
                            type="button"
                            @click="toggleFaq(index)"
                        >
                            {{ faq.question }}
                        </button>
                    </h2>
                    <div
                        :id="'collapse' + index"
                        class="accordion-collapse collapse"
                        :class="{ show: activeIndex === index }"
                        data-bs-parent="#faqAccordion"
                    >
                        <div class="accordion-body">{{ faq.answer }}</div>
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
            activeIndex: null,
            faqs: [
                {
                    question: "Can I manage both personal and business finances?",
                    answer: "Yes! Our platform allows you to handle both seamlessly with advanced financial tools.",
                },
                {
                    question: "Can I generate tax reports?",
                    answer: "Absolutely! You can generate detailed tax reports automatically within the dashboard.",
                },
                {
                    question: "Do you offer mobile support?",
                    answer: "Yes, our platform is fully responsive and has a mobile-friendly design for convenience.",
                },
                {
                    question: "Is my financial data secure?",
                    answer: "We prioritize security with encrypted data storage and multi-factor authentication.",
                },
            ],
        };
    },
    methods: {
        toggleFaq(index) {
            this.activeIndex = this.activeIndex === index ? null : index;
        },
    },
};
</script>

<style scoped>
.faq-section {
    background: #f8f9fa;
    border-radius: 8px;
    padding: 40px 20px;
}
.accordion-item {
    border: 1px solid #ddd;
    border-radius: 5px;
    overflow: hidden;
    margin-bottom: 10px;
}
.accordion-button {
    background-color: #fff;
    font-weight: bold;
    border: none;
    padding: 15px;
    width: 100%;
    text-align: left;
}
.accordion-button:focus {
    box-shadow: none;
}
.accordion-button:not(.collapsed) {
    background-color: #296fb6;
    color: #fff;
}
.accordion-body {
    padding: 15px;
    background: #fff;
}
</style>