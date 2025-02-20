<div class="w-full flex flex-col items-center p-4 relative">
    <div class=" w-full bg-white shadow-lg shadow-gray-300 rounded-md z-20">
        <div class="w-full rounded-md p-4 shadow-lg shadow-gray-300" style="background-color: whitesmoke">
            @if (session()->has('success'))
                <div class="mb-4 text-green-800 px-6">
                   * {{ session('success') }}
                </div>
            @else
                <form wire:submit.prevent="submit" class="grid lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-2 grid-cols-1 gap-2">
                    <div class="mb-4 w-full">
                        <label class="block mb-2 text-sm font-semibold" for="name">Name</label>
                        <input type="text" wire:model="name" class="w-full p-3 text-sm border border-[1px] border-darkTheme text-darkText placeholder-darkTheme rounded shadow focus:outline-none focus:shadow-outline" placeholder="Full Name" />
                        @error('name') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-4 w-full">
                        <label class="block mb-2 text-sm font-semibold" for="subject">Class</label>
                        <input type="text" wire:model="class" class="w-full p-3 text-sm border border-[1px] border-darkTheme text-darkText placeholder-darkTheme rounded shadow focus:outline-none focus:shadow-outline" placeholder="BA/ BSc/ BCom/ BCa" />
                        @error('class') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-4 w-full">
                        <label class="block mb-2 text-sm font-semibold" for="contact_number">Roll Number</label>
                        <input type="number" wire:model="roll_number" class="w-full p-3 text-sm border border-[1px] border-darkTheme text-darkText placeholder-darkTheme rounded shadow focus:outline-none focus:shadow-outline" placeholder="Roll Number" />
                        @error('roll_number') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-4 w-full">
                        <label class="block mb-2 text-sm font-semibold" for="contact_number">Phone Number</label>
                        <input type="number" wire:model="phone_number" class="w-full p-3 text-sm border border-[1px] border-darkTheme text-darkText placeholder-darkTheme rounded shadow focus:outline-none focus:shadow-outline" placeholder="Phone Number" />
                        @error('phone_number') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
                    </div>

                    <div class="mb-4 w-full">
                        <label class="block mb-2 text-sm font-semibold" for="email">Email</label>
                        <input type="email" wire:model="email" class="w-full p-3 text-sm border border-[1px] border-darkTheme text-darkText placeholder-darkTheme rounded shadow focus:outline-none focus:shadow-outline" placeholder="Email" />
                        @error('email') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-4 w-full">
                        <label class="block mb-2 text-sm font-semibold" for="permanent_address">Message</label>
                        <textarea wire:model="message" rows="1" class="w-full p-3 text-sm border border-[1px] border-darkTheme text-darkText placeholder-darkTheme rounded shadow focus:outline-none focus:shadow-outline" placeholder="Message"></textarea>
                        @error('message') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
                    </div>

                    <div class="mb-4 w-full lg:col-span-2 md:col-span-2 sm:col-span-2 col-span-1">
                        <button class="w-full p-3 font-bold text-white bg-darkTheme rounded-full focus:outline-none" type="submit" wire:loading.attr="disabled" wire:loading.remove>
                            Submit
                        </button>
                        <div wire:loading class="w-full p-3 font-bold text-white bg-darkTheme rounded-full focus:outline-none">Sending...</div>
                    </div>
                </form>
            @endif

        </div>
    </div>
</div>
