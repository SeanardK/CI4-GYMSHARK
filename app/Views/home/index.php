<?php echo view("components/header", ["title" => "Homepage"]); ?>
<?php echo view("components/notificationBar"); ?>
<?php echo view("components/navbar"); ?>
<?php echo view("components/banner", ["image" => "/images/banner-image.png"]); ?>

<!-- Product 1 -->
<section class="container px-[50px] py-[40px]">
  <div class="flex justify-between items-center">
    <h2 class="text-4xl font-bold">YOUR TRAINING ESSENTIAL</h2>

    <div>
      <button class="w-[35px] h-[35px] border rounded-full mx-1 border-black border-2 hover:scale-110 transition-all">
        <i class="fa-solid fa-arrow-left fa"></i>
      </button>

      <button
        class="w-[35px] h-[35px] border rounded-full mx-1 border-black border-2 hover:scale-110 focus:scale-110 transition-all">
        <i class="fa-solid fa-arrow-right fa"></i>
      </button>
    </div>
  </div>

  <div class="flex justify-center gap-[24px] mt-[16px]">
    <?php
    for ($i = 0; $i < 4; $i++) {
      echo "<div class='w-1/4 min-h-[200px]'>
      <img
        src='https://s3-alpha-sig.figma.com/img/01bc/45fc/cda3a3d3d3de8876f650c4852457efb7?Expires=1719792000&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=VFgYQSzI9hBGDs4ji0WpEtnineYgSthSfktaCuBMDaEIfqRFfg5UgNqxj2DP~WRF5jBzi~Xw9ekepHipSnCZem5hn8F02J0dN1FGfLq-JtLdY3ooapkjAQN9EoyUGMt3LWaiEfps7akU51M25oSGYWUiJQNLNdZYoQt-gdTKuMSXKuXKIsY-8EJ0mEhLwx1sLy66dQOSTUi6jtV1dytj7utLfZTQf7DGeZnbwBHmEkHF4WB-LWZUsBaD3gXLuIHHoAQngvI2zL-ogXC~3NDHlTZ3I83md4-1E1MvqjYu5qAEJvwm3FgWCuKZ26Xgwq5YVJKPwLbjdjr~bhtvW0dJoQ__'
        class='h-[425px] object-contain object-bottom bg-[#F4F4F4] rounded-md' />

      <div class='flex justify-between items-center mt-[16px]'>
        <p class='text-red text-[#C51212] font-semibold text-base'>20% OFF</p>

        <div class='flex justify-between items-center'>
          <p class='text-[#667085] mr-2 text-xl font-semibold'>$100</p>
          <p class='text-2xl font-semibold'>$80</p>
        </div>
      </div>

      <p class='font-semibold text-xl mt-2'>HYBRID WELLNESS T-SHIRT</p>
      <p class='text-lg'>Oversized Fit</p>
    </div>";
    }
    ?>
  </div>
</section>

<!-- Banner 2 -->
<section class="bg-[#F4F4F4] h-[420px] ">
  <div class="pl-[50px] relative w-full container flex items-center justify-between h-full">
    <div class="relative z-20">
      <p class="mb-[12px] text-lg font-semibold">2024</p>
      <h2 class="font-bold text-6xl mb-[32px] uppercase">new year, new me <br />
        with gymshark</h2>
      <button class="text-white min-w-[150px] px-6 py-3 text-base rounded-full bg-black">SHOP NOW</button>
    </div>

    <div class="absolute right-0 overflow-hidden">
      <img src="/images/banner2-image.png" class="relative z-10" alt="">
      <img src="/images/banner2-background.png" class="absolute left-1/2 -translate-x-1/2 -bottom-[10px] " alt="">
    </div>
  </div>
</section>

<!-- New Release -->
<section class="container px-[50px] py-[40px]">
  <div class="flex justify-between items-center">
    <h2 class="text-4xl font-bold">2024 NEW RELEASE</h2>

    <div>
      <button class="w-[35px] h-[35px] border rounded-full mx-1 border-black border-2 hover:scale-110 transition-all">
        <i class="fa-solid fa-arrow-left fa"></i>
      </button>

      <button
        class="w-[35px] h-[35px] border rounded-full mx-1 border-black border-2 hover:scale-110 focus:scale-110 transition-all">
        <i class="fa-solid fa-arrow-right fa"></i>
      </button>
    </div>
  </div>

  <div class="flex justify-center gap-[24px] mt-[16px]">
    <?php
    for ($i = 0; $i < 4; $i++) {
      echo "<div class='w-1/4 min-h-[200px]'>
      <img
        src='https://s3-alpha-sig.figma.com/img/01bc/45fc/cda3a3d3d3de8876f650c4852457efb7?Expires=1719792000&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=VFgYQSzI9hBGDs4ji0WpEtnineYgSthSfktaCuBMDaEIfqRFfg5UgNqxj2DP~WRF5jBzi~Xw9ekepHipSnCZem5hn8F02J0dN1FGfLq-JtLdY3ooapkjAQN9EoyUGMt3LWaiEfps7akU51M25oSGYWUiJQNLNdZYoQt-gdTKuMSXKuXKIsY-8EJ0mEhLwx1sLy66dQOSTUi6jtV1dytj7utLfZTQf7DGeZnbwBHmEkHF4WB-LWZUsBaD3gXLuIHHoAQngvI2zL-ogXC~3NDHlTZ3I83md4-1E1MvqjYu5qAEJvwm3FgWCuKZ26Xgwq5YVJKPwLbjdjr~bhtvW0dJoQ__'
        class='h-[425px] object-contain object-bottom bg-[#F4F4F4] rounded-md' />

      <div class='flex justify-between items-center mt-[16px]'>
        <p class='text-red text-[#C51212] font-semibold text-base'>20% OFF</p>

        <div class='flex justify-between items-center'>
          <p class='text-[#667085] mr-2 text-xl font-semibold'>$100</p>
          <p class='text-2xl font-semibold'>$80</p>
        </div>
      </div>

      <p class='font-semibold text-xl mt-2'>HYBRID WELLNESS T-SHIRT</p>
      <p class='text-lg'>Oversized Fit</p>
    </div>";
    }
    ?>
  </div>
</section>

<?php echo view("components/footer"); ?>