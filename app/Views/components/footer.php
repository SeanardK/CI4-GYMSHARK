<footer class="bg-white border-t-2">
  <div class="container px-[50px] py-[100px]">
    <div class="flex justify-between pb-[50px]">
      <div>
        <img src="/images/logo.png" class="h-[32px] mb-[25px]" alt="">
        <p class="text-xl max-w-[400px]">Gymshark is a British fitness apparel and accessories manufacturer and retailer
        </p>
      </div>

      <form>
        <p class="text-xl font-semibold mb-[24px]">SUBSCRIBE NEWSLETTER</p>
        <input class="rounded-full border p-[14px] w-[300px]" name="email" placeholder="Enter your email address" />
        <button
          class="rounded-full bg-black p-[14px] px-[30px] hover:scale-105 transition-all text-white font-bold ml-[12px]"
          type="submit">SUBSCRIBE</button>
      </form>
    </div>

    <div class="flex justify-between">
      <?php
      $menu_list = [
        "CATEGORIES" => [
          "MEN",
          "WOMAN",
          "ACCESSORIES"
        ],
        "PRODUCTS" => [
          "T-shirt & tops",
          "hoodies",
          "jackets",
          "short",
          "pants",
        ],
        "HELP" => [
          "faq",
          "delivery inforamtion",
          "returns policy",
          "orders",
          "submit a fake",
        ]
      ];

      $key = key($menu_list);

      foreach ($menu_list as $key => $values) {
        echo "<div>";
        echo "
        <p class='font-semibold text-xl mb-[24px] uppercase'>$key</p>";

        foreach ($values as $value) {
          echo "<p class='mb-[12px]'><a class='text-lg uppercase'>$value</a></p>";
        }

        echo "</div>";
      }
      ?>
    </div>
  </div>

  <div class="bg-[#161616]">
    <div class="container px-[50px] py-6">
      <p class="text-white">©2024 | Gymshark Limited | All Rights Reserved. | United We Sweat</p>
    </div>
  </div>

</footer>

</body>

</html>