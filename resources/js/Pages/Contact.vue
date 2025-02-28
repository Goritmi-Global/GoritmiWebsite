<template>
    <div>
        <div class="c-contact">
            <div class="container text-center py-5">
                <h1 class="c-theme-text-color fw-bold">
                    Contact <span class="text-dark">Us</span>
                </h1>
                <p class="text-muted">Home - Services</p>
            </div>
        </div>
        <div class="text-end img-top">
            <img
                src="images/ContactUs.svg"
                class="img-fluid"
                alt=""
                width="500"
            />
            <!-- <img src="images/client.png" class="img-fluid w-25" alt=""> -->
        </div>

        <div class="container c-top">
            <div class="row">
                <div
                    class="col-lg-6 col-md-12 col-sm-12 border shadow bg-dark h-100 p-4"
                >
                    <h1 class="text-white mt-3 ps-5">
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
                                    placeholder="First Name:"
                                />
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label"></label>
                                <input
                                    type="text"
                                    class="form-control"
                                    placeholder="Last Name:"
                                />
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label"></label>
                                <input
                                    type="email"
                                    class="form-control"
                                    placeholder="Email:"
                                />
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label"></label>
                                <input
                                    type="text"
                                    class="form-control"
                                    placeholder="Contact No:"
                                />
                            </div>
                            <div class="col-12 mb-3">
                                <label class="form-label"></label>
                                <textarea
                                    class="form-control"
                                    rows="4"
                                    placeholder="Your message:"
                                ></textarea>
                            </div>
                            <div class="col-12">
                                <button
                                    type="submit"
                                    class="btn btn-custom text-white bg-primary"
                                >
                                    Send Message
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-12 col-md-6">
                    <div
                        class="contact-info h-100 d-flex align-items-center p-4"
                    >
                        <div class="mapouter w-100">
                            <div class="gmap_canvas">
                                <iframe
                                    class="gmap_iframe"
                                    frameborder="0"
                                    scrolling="no"
                                    marginheight="0"
                                    marginwidth="0"
                                    src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=Leicester&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"
                                ></iframe
                                ><a href="https://sprunkiplay.com/"
                                    >Sprunki Game</a
                                >
                            </div>
                        </div>
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
    text-align: center;
    width: 100%;
    height: 384px;
    padding-top: 101px;
    left: -6px;
    background: rgb(41, 111, 182);
    background: linear-gradient(
        188deg,
        rgba(41, 111, 182, 1) 10%,
        rgba(255, 255, 255, 1) 45%
    );
}
.img-top {
    margin-top: -350px;
}
.gmap_iframe {
    height: 350px;
}
.c-top {
    margin-top: -50px;
}
.mapouter {
    position: relative;
    text-align: right;
    width: 600px;
    height: 400px;
}

.gmap_canvas {
    overflow: hidden;
    background: none !important;
    width: 600px;
    height: 400px;
}

.gmap_iframe {
    width: 600px !important;
    height: 400px !important;
}
</style>
