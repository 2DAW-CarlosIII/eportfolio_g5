<x-navbar />

<section id="header" class="px-8 py-20 bg-[#0d0e11] relative items-center overflow-hidden max-h-[900px]">
    
    <div class="flex flex-col gap-6 items-center text-white mx-auto w-full max-w-5xl">
      <div class="flex gap-4 items-center">
        <div class="flex gap-1">
          <i class="bi bi-star-fill text-yellow-400"></i>
          <i class="bi bi-star-fill text-yellow-400"></i>
          <i class="bi bi-star-fill text-yellow-400"></i>
          <i class="bi bi-star-fill text-yellow-400"></i>
          <i class="bi bi-star-fill text-yellow-400"></i>
        </div>
        <span class="text-xs text-gray-400">
          4.8/5 (45k reviews)
        </span>
      </div>
      <h1 class="text-5xl font-semibold tracking-tighter text-center">
        adipisicing elit<br> quia eius ratione natus.
      </h1>
      <strong class="font-normal text-xl text-center">
        Lorem ipsum, dolor sit amet consectetur<br> adipisicing elit quia eius ratione natus.
      </strong>
      <form action="index.php" method="post" class="flex gap-4 items-center">
        <input name="email" type="email" placeholder="Enter your email"
          class="border border-gray-700 focus:outline-none px-4 py-1 bg-[#ebebeb]/5 rounded-xl">
        <input type="submit" class="cursor-pointer bg-[#cff245] text-black px-4 py-1 rounded-xl" value="Join Waitlist">
      </form>
      <small class="text-xs px-2 text-center">
        By clicking Join Waitlist you're confirming that you agree with our <a href="#" class="underline">Terms and
          Conditions</a>.
      </small>
      <div class="mt-20">
        <img src="{{ asset('sendit/images/hero-black.png') }}" class="mx-auto w-full max-w-[1000px] rounded shadow-2xl" alt="">
      </div>
    </div>
</section>
