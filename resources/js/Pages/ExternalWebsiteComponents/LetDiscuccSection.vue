<template>
    <div class="c-background">
        <div class="container h-100 d-flex align-items-center hover-effect">
            <div class="row w-100 align-items-center">
                <div class="col-lg-9 col-md-8 col-sm-12 text-white">
                    <h1 class="fw-bold">
                        Let's discuss. How Your <br />
                        Brand Can <span class="c-theme-text-color">Be Created?</span>
                    </h1>
                    <p class="text-white">
                        Send us the features you are looking to build, and we shall advise on the next steps.
                    </p>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12 text-md-end text-center ">
                    <a href="/contact" class="btn c-theme-button btn-lg">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
.c-background {
    background: url("images/consultation.png") center/cover no-repeat;
    position: relative;
    height: 300px;
    display: flex;
    align-items: center;
}

.c-background::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.842); /* Dark overlay for better text visibility */
}

.container {
    position: relative;
    z-index: 1;
}
</style>
