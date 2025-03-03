<template>
    <div>
        <div class="c-contact position-relative">
            <div class="bg-overlay"></div>
            <div class="container text-center py-5 position-relative">
                <h1 class="text-white fw-bold">
                    Contact <span class="text-dark">Us</span>
                </h1>
               
            </div>
        </div>
        
        <div class="container c-top mt-5">
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="border shadow bg-dark p-4 rounded h-100">
                        <h1 class="text-white mt-3 ps-lg-5 text-center text-lg-start">
                            Request A Free <br /><span class="c-theme-text-color">Consultation</span>
                        </h1>
                        <form>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <input type="text" class="form-control" placeholder="First Name:" required />
                                </div>
                                <div class="col-md-6 mb-3">
                                    <input type="text" class="form-control" placeholder="Last Name:" required />
                                </div>
                                <div class="col-md-6 mb-3">
                                    <input type="email" class="form-control" placeholder="Email:" required />
                                </div>
                                <div class="col-md-6 mb-3">
                                    <input type="tel" class="form-control" placeholder="Contact No:" required />
                                </div>
                                <div class="col-12 mb-3">
                                    <textarea class="form-control" rows="4" placeholder="Your message:" required></textarea>
                                </div>
                                <div class="col-12 text-center">
                                    <button type="submit" class="btn btn-primary w-100">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <div class="contact-info p-4 rounded h-100 d-flex align-items-center">
                        <div class="w-100">
                            <iframe class="gmap_iframe w-100" height="350" frameborder="0" scrolling="no"
                                src="https://maps.google.com/maps?width=100%&amp;height=350&amp;hl=en&amp;q=Leicester&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
                            </iframe>
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
    setup() {}
};
</script>

<style>
.c-contact {
    text-align: center;
    width: 100%;
    height: 504px;
    padding-top: 100px;
    background: url('/images/contactus.png') no-repeat center center/cover;
   
  
}

.bg-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.116);
}

.c-top {
    margin-top: -50px;
}

.gmap_iframe {
    border-radius: 8px;
}

@media (max-width: 768px) {
    .c-contact {
        height: auto;
        padding: 50px 0;
    }
}
</style>