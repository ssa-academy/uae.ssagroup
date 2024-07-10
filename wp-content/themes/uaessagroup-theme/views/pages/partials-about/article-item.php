
<div class="bg-customWhite md:mx-4 mx-2">
    <div class="w-full md:h-[500px] min-h-96 text-customWhite p-5 bg-cover flex flex-col justify-end" style="background:linear-gradient(180deg, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.8) 100%), url('<?= $thumbnail ?>');
            background-size: cover">
        <div class="inline-flex justify-between mb-3">
            <p class="text-[12px] font-[600] leading-[22px] text-customDark bg-customWhite px-5 rounded-xl"><?= $pill ?></p>
            <p class="text-[14px] font-[400] leading-[22px] text-customGray2 italic"><?= $date ?></p>
        </div>
        <p class="text-[14px] font-[700] leading-[24px] text-justify max-h-12 text-ellipsis line-clamp-2"><?= $description ?></p>
     </div>
</div>