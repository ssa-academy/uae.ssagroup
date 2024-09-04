<section class="min-h-max bg-customDark py-20">
    <div class="container px-5 grid gap-20">
        <div class="grid gap-5" data-aos="fade-up">
            <h1 class="text-xl font-bold font-poppins text-customWhite">How can we help you?</h1>
            <p class="text-sm text-customWhite">Leave your email address or phone number, and we will get in touch with you soon.</p>
        </div>
        <!-- <form action="" class="grid gap-5 lg:block lg:space-x-5 md:max-w-screen-md" data-aos="fade-up" data-aos-delay="200">
            <input type="text" placeholder="Your Email or Phone Number" class="w-full lg:max-w-[561px] lg:max-w-auto
            bg-customDark2 text-left text-[16px] font-[400] leading-[22px] text-white p-4 border border-customGray outline-none">
            <button type="submit" class="w-full lg:max-w-36 bg-customWhite text-[16px] font-semibold leading-[22px] text-customDark py-4 hover:text-customYellow hover:border hover:border-customYellow">Submit</button>
            <p class="text-center lg:text-right lg:px-10 lg:py-3 text-sm italic text-gray-400 px-3">By clicking the submit button, you agree to our terms and privacy policy.</p>
        </form> -->
        <div class="grid gap-5 lg:block lg:space-x-5 md:max-w-screen-md" data-aos="fade-up" data-aos-delay="200">
            <?php echo do_shortcode('[contact-form-7 id="370c672" title="Enquiry form"]'); ?>
        </div>
    </div>
    <div class="container px-5 mt-10" data-aos="fade-up" data-aos-delay="300">
        <div class="flex items-center gap-10 border-b border-customWhite py-9">
            <p class="text-sm italic text-gray-400 min-w-14">Contact</p>
            <p class="text-sm font-bold text-customWhite">+971 50 429 3546</p>
        </div>
        <div class="flex items-center gap-10 border-b border-customWhite py-9">
            <p class="text-sm italic text-gray-400 min-w-14">Email</p>
            <p class="text-sm font-bold text-customWhite">contact@ssagroup.com</p>
        </div>
        <div class="flex items-start gap-10 border-b border-customWhite py-9">
            <p class="text-sm italic text-gray-400 min-w-14 align-top">Address</p>
            <p class="text-sm font-bold text-customWhite lg:max-w-sm">Level 17, Office Tower, The World Trade Center Al Markaziya, Abu Dhabi P.O. Box 387.</p>
        </div>
    </div>
</section>


<style>
    /* styles ng contact form - 7 */
    .wpcf7-form>p {
        display: grid;
        gap: 1.25rem;
    }

    .wpcf7-not-valid-tip {
        color: white !important;
    }

    .wpcf7-response-output {
        color: white !important;
    }

    .wpcf7-email {
        width: 100%;
        background-color: #1f1f1f;
        text-align: left;
        font-size: 16px;
        color: #FAF9F6;
        padding: 1rem;
        border: 2px solid #2d3335;
        outline: 2px solid transparent;
        outline-offset: 2px;
    }

    .wpcf7-submit {
        width: 100%;
        background-color: #FAF9F6;
        font-size: 16px;
        font-weight: 600;
        color: #121212;
        padding: 1rem 0;
        border: 1px solid white;
    }

    /* eto style sa hover */
    .wpcf7-submit:hover {
        color: #fe9e14;
        border: 1px solid #fe9e14;
    }

    @media (min-width:1024px) {
        .wpcf7-form>p {
            display: block;
        }

        .wpcf7-email {
            max-width: 561px;
            padding-left: 2rem;
        }

        .wpcf7-submit {
            max-width: 9rem;
            margin-left: 1.25rem;
        }
    }
</style>