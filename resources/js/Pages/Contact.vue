<template>
    <div>
        <section class="c-contact text-center">
            <div class="container">
                <h1>Contact <span class="c-theme-text-color">Us</span></h1>
            </div>
        </section>

        <div class="container c-top mt-5">
            <div class="row g-4">
                <div
                    class="col-md-6 col-lg-6 col-sm-12 border shadow-lg bg-dark text-white p-4 rounded"
                >
                    <h2 class="fw-bold">
                        Request A Free <br /><span class="c-theme-text-color"
                            >Consultation</span
                        >
                    </h2>

                    <form>
                        <div class="row mb-4">
                            <div class="col-md-6 mb-3">
                                <input
                                    type="text"
                                    class="form-control"
                                    placeholder="First Name"
                                    required
                                />
                            </div>
                            <div class="col-md-6 mb-3">
                                <input
                                    type="text"
                                    class="form-control"
                                    placeholder="Last Name"
                                    required
                                />
                            </div>
                            <div class="col-md-6 mb-3">
                                <input
                                    type="email"
                                    class="form-control"
                                    placeholder="Email"
                                    required
                                />
                            </div>
                            <div class="col-md-6 mb-3">
                                <input
                                    type="text"
                                    class="form-control"
                                    placeholder="Contact No"
                                    required
                                />
                            </div>
                            <div class="col-12 mb-3">
                                <textarea
                                    class="form-control"
                                    rows="4"
                                    placeholder="Your message"
                                    required
                                ></textarea>
                            </div>
                            <div class="col-12">
                                <button
                                    type="submit"
                                    class="btn c-theme-button"
                                >
                                    Send Message
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

                <div
                    class="col-lg-6 d-flex flex-column justify-content-center align-items-center bg-light p-4 rounded shadow-lg"
                >
                    <h3 class="text-dark">Contact Information</h3>
                    <p>
                        Email:
                        <a href="mailto:info@goritmi.co.uk" class="text-dark"
                            >info@goritmi.co.uk</a
                        >
                    </p>
                    <p>
                        Phone:
                        <a href="tel:+441164882896" class="text-dark"
                            >+44 116 488 2896</a
                        >
                    </p>
                    <div class="social-icons mt-3">
                        <a
                            href="https://www.facebook.com/profile.php?id=61570754301545"
                            target="_blank"
                            class="me-3"
                            style="color: #1877f2"
                            ><i class="bi bi-facebook fa-2x"></i
                        ></a>
                        <a
                            href="https://www.instagram.com/goritmi.uk/profilecard/?igsh=NzJnc2wxMTB0ZmI1"
                            target="_blank"
                            class="me-3"
                            style="color: #e4405f"
                            ><i class="bi bi-instagram fa-2x"></i
                        ></a>
                        <a
                            href="https://www.linkedin.com/company/goritmi/"
                            target="_blank"
                            class="me-3"
                            style="color: #0a66c2"
                            ><i class="bi bi-linkedin fa-2x"></i
                        ></a>
                        <a
                            href="https://www.youtube.com/@GoritmiLtd"
                            target="_blank"
                            class="me-3"
                            style="color: #ff0000"
                            ><i class="bi bi-youtube fa-2x"></i
                        ></a>
                        <a
                            href="https://linktr.ee/goritmi"
                            target="_blank"
                            class="me-3"
                            style="color: #43b02a"
                            ><i class="bi bi-tree fa-2x"></i
                        ></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Master from "./Layouts/Master.vue";

export default {
    layout: Master,
    setup() {},
};
</script>

<style>
.c-contact {
    background: url("/images/about.png") no-repeat center center/cover;
    min-height: 300px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    padding: 60px 0;
}

.bg-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.4);
}

.c-top {
    margin-top: -50px;
}

.social-icons a {
    text-decoration: none;
    transition: color 0.3s ease;
}

@media (max-width: 768px) {
    .c-contact {
        height: auto;
        padding: 50px 0;
    }
}

h1 {
    text-transform: uppercase;
    font-size: 2.5rem;
    font-weight: bold;
}
</style>
