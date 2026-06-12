<section id="contact-us" class="bg-white py-20 px-6 md:px-20">
  <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-12 bg-white shadow-xl rounded-2xl overflow-hidden">

    <!-- Left Side: Contact Info -->
    <div class="bg-neutral-900 text-gray-100 p-10 flex flex-col justify-center">
    

      <div class="mb-4">
        <span class="block font-semibold text-red-400">Phone:</span>
        <span>+8801711190343</span>
      </div>

      <div class="mb-4">
        <span class="block font-semibold text-red-400">Emails:</span>
        <div>mahfuz@nineteenalpha.com</div>
        <div>info@nineteenalpha.com</div>
      </div>

      <div>
        <span class="block font-semibold text-red-400 mb-2">Address:</span>
        <div class="flex justify-between items-center">
          <div>
            <div>House 908, Road 12 (west), Mirpur DOHS, Mirpur 1216, Bangladesh</div>
          </div>
          <div class="flex-shrink-0 ml-4">
            <img src="{{ asset('images/barcode.JPG') }}" alt="Colonel Syed Mahfuzur Rahman"
              class="w-24 h-24 object-cover shadow-lg rounded" />
          </div>
        </div>
      </div>
    </div>

    <!-- Right Side: Contact Form -->
    <div class="p-10 bg-white flex flex-col justify-center">
      <h2 class="text-2xl font-bold mb-6 text-gray-800 text-center">Contact Form</h2>

      @if (session('success'))
        <div class="mb-4 p-4 text-green-700 bg-green-100 rounded-xl border border-green-300">
          {{ session('success') }}
        </div>
      @endif

      @if ($errors->any())
        <div class="mb-4 p-4 text-red-700 bg-red-100 rounded-xl border border-red-300">
          <ul class="list-disc list-inside">
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif

      <form method="POST" action="{{ route('contact.submit') }}">
        @csrf
        <div class="mb-5">
          <label for="name" class="block text-gray-600 font-semibold mb-2">Name</label>
          <input type="text" name="name" id="name" placeholder="Your name"
            class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-red-400"
            required />
        </div>

        <div class="mb-5">
          <label for="email" class="block text-gray-600 font-semibold mb-2">Email</label>
          <input type="email" name="email" id="email" placeholder="Your email"
            class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-red-400"
            required />
        </div>

        <div class="mb-5">
          <label for="address" class="block text-gray-600 font-semibold mb-2">Message</label>
          <input type="text" name="address" id="address" placeholder="Your message"
            class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-red-400" />
        </div>

        <button type="submit"
          class="w-full mt-4 bg-red-600 text-white font-semibold py-3 rounded-xl hover:bg-red-700 transition">
          Submit
        </button>
      </form>
    </div>

  </div>
</section>
