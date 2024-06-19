<nav class="sticky top-0 shadow-md relative z-[100] bg-white">
  <div class="h-[80px] px-[50px] max-w-[1440px] m-auto flex justify-between items-center">
    <!-- Gender Menu -->
    <div>
      <?php
      $gender_list = ["MEN", "WOMEN", "ACCESSORIES"];

      foreach ($gender_list as $item) {
        echo "<button class=' transition-all mx-1 hover:bg-neutral-200 py-2 px-2 rounded-md font-semibold'>$item</button>";
      }
      ?>
    </div>

    <!-- Logo -->
    <img src="/images/logo.png" class=" h-[25px] absolute left-1/2 -translate-x-1/2" alt="">

    <!-- Menu  -->
    <div>
      <?php
      $gender_list = ["SEARCH", "WISHLIST", "BAG"];

      foreach ($gender_list as $item) {
        echo "<button class=' transition-all mx-1 hover:bg-neutral-200 py-2 px-2 rounded-md font-semibold'>$item</button>";
      }
      ?>
    </div>
  </div>
</nav>