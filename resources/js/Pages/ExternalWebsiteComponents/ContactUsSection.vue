<template>
    <div class="container py-5">
        <div class="container">
            <div class="row d-flex align-items-stretch g-0 ">
                <div
                    class="col-md-6 col-lg-6 col-sm-12 border shadow bg-dark h-100 p-3"  
                >
                    <h1 class="text-white mt-3 ">
                        Request A Free <br /><span class="c-theme-text-color"
                            >Consultation</span
                        >
                    </h1>
                    <form>
                        <div class="row mb-4">
                            <div class="col-md-6 mb-3">
                                <label class="form-label"></label>
                                <input
                                    type="text"
                                    class="form-control"
                                    placeholder="First Name"
                                />
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label"></label>
                                <input
                                    type="text"
                                    class="form-control"
                                    placeholder="Last Name"
                                />
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label"></label>
                                <input
                                    type="email"
                                    class="form-control"
                                    placeholder="Email"
                                />
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label"></label>
                                <input
                                    type="text"
                                    class="form-control"
                                    placeholder="Contact No"
                                />
                            </div>
                            <div class="col-12 mb-3">
                                <label class="form-label"></label>
                                <textarea
                                    class="form-control"
                                    rows="4"
                                    placeholder="Your message"
                                ></textarea>
                            </div>
                            <div class="col-12">
                                <button
                                    type="submit"
                                    class="btn c-theme-button "
                                >
                                    Send Message
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-md-6 col-lg-6 col-sm-12">
                    <div
                        class="contact-info h-100 d-flex align-items-center p-3"
                    >
                    <div class="contact-info-content">
                            <h2>
                                HAVE A PROJECT? <br />
                                <strong>GET IN TOUCH.</strong>
                            </h2>
                            <p>
                                <strong class="text-black"
                                    >THINK WE DO NEXT.</strong
                                >
                            </p>
                            <p>
                                Our team will contact you within one business
                                day.
                            </p>
                            <p>
                                We will conduct an initial discussion to
                                understand your requirements.
                            </p>
                            <p>
                                Our analysts and developers will assess the
                                project scope.
                            </p>
                            <p>
                                We will collaboratively propose the next steps.
                            </p>
                            <p>
                                All information exchanges are secure and
                                confidential.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            form: {
                firstName: "",
                lastName: "",
                email: "",
                contact: "",
                message: "",
            },
        };
    },
    methods: {
        submitForm() {
            console.log("Form submitted:", this.form);
            alert("Your consultation request has been sent successfully!");
        },
    },
};
</script>

<style scoped>
.contact-info {
    position: relative;
    background: url("images/consultation.png") no-repeat center center/cover;
    color: #fff;
    padding: 40px;
    text-align: left;
}
    
.contact-info::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    
    background: rgba(41, 111, 182, 0.7); /* Blue Overlay */

}
.contact-info-content {
    position: relative;
    z-index: 2;
}
</style>
