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
.wpcf7-not-valid-tip {
    color: white !important;
}

.wpcf7-response-output {
    color: white !important;
}

.wpcf7-submit {
    background-color: #ffffff; /* Background color */
    color: #000000; /* Text color */
    border: 2px solid #000000; /* Border color */
    padding: 10px 20px; /* Padding around the text */
    font-size: 16px; /* Font size */
    font-weight: bold; /* Font weight */
    cursor: pointer; /* Cursor change on hover */
}

/* eto style sa hover */
.wpcf7-submit:hover {
    background-color: #000000; 
    color: #ffffff; 
    border: 2px solid #ffffff; 
}
</style>