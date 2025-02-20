<form wire:submit.prevent="submit">
    @if (session()->has('success'))
        <div class="mb-4 text-green-600">
            {{ session('success') }}
        </div>
    @else
    <div class="mb-4">
        <label class="block mb-2 text-sm font-semibold" for="name">Full Name</label>
        <input type="text" id="name" wire:model="name" class="w-full p-3 text-sm border border-[1px] border-darkTheme text-darkText placeholder-darkTheme rounded shadow focus:outline-none focus:shadow-outline" placeholder="Enter Your Name" />
        @error('name') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
    </div>
    <div class="mb-4">
        <label class="block mb-2 text-sm font-semibold" for="email">Email</label>
        <input type="email" id="email" wire:model="email" class="w-full p-3 text-sm border border-[1px] border-darkTheme text-darkText placeholder-darkTheme rounded shadow focus:outline-none focus:shadow-outline" placeholder="Enter Your Email" />
        @error('email') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
    </div>
    <div class="mb-4">
        <label class="block mb-2 text-sm font-semibold" for="number">Mobile Number</label>
        <input type="number" id="number" wire:model="number" class="w-full p-3 text-sm border border-[1px] border-darkTheme text-darkText placeholder-darkTheme rounded shadow focus:outline-none focus:shadow-outline" placeholder="Enter Your number" />
        @error('number') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
    </div>
    <div class="mb-4">
        <label class="block mb-2 text-sm font-semibold" for="message">Message</label>
        <textarea id="message" wire:model="message" class="w-full p-3 text-sm border border-[1px] border-darkTheme text-darkText placeholder-darkTheme rounded shadow focus:outline-none focus:shadow-outline" placeholder="Enter Your Message"></textarea>
        @error('message') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
    </div>
    <div class="mb-4">
        <button class="w-full p-3 font-bold text-white bg-darkTheme rounded-full focus:outline-none" type="submit" wire:loading.attr="disabled" wire:loading.remove>
            Submit
        </button>
        <div wire:loading class="w-full p-3 font-bold text-white bg-darkTheme rounded-full focus:outline-none">Submitting...</div>
    </div>
        @endif
</form>
