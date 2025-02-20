    <div class="w-full flex flex-col items-center p-4 relative">
        <div class=" w-full bg-white shadow-lg shadow-gray-300 rounded-md z-20">
            <div class="w-full rounded-md p-4 shadow-lg shadow-gray-300" style="background-color: whitesmoke">
                @if (session()->has('success'))
                    <div class="mb-4 text-green-600 px-6">
                        {{ session('success') }}
                    </div>
                @else
                    <form wire:submit.prevent="submit" class="grid lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-2 grid-cols-1 gap-2">
                        <div class="mb-4 w-full">
                            <label class="block mb-2 text-sm font-semibold" for="name">Name</label>
                            <input type="text" wire:model="name" class="w-full p-3 text-sm border border-[1px] border-darkTheme text-darkText placeholder-darkTheme rounded shadow focus:outline-none focus:shadow-outline" placeholder="Full Name Mr./ Ms" />
                            @error('name') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-4 w-full">
                            <label class="block mb-2 text-sm font-semibold" for="father_name">Father's Name</label>
                            <input type="text" wire:model="father_name" class="w-full p-3 text-sm border border-[1px] border-darkTheme text-darkText placeholder-darkTheme rounded shadow focus:outline-none focus:shadow-outline" placeholder="Father Name" />
                            @error('father_name') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-4 w-full">
                            <label class="block mb-2 text-sm font-semibold" for="subject">Subject</label>
                            <input type="text" wire:model="subject" class="w-full p-3 text-sm border border-[1px] border-darkTheme text-darkText placeholder-darkTheme rounded shadow focus:outline-none focus:shadow-outline" placeholder="BA/ BSc/ BCom/ BCa" />
                            @error('subject') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-4 w-full">
                            <label class="block mb-2 text-sm font-semibold" for="passing_year">Passing Year</label>
                            <input type="text" wire:model="passing_year" class="w-full p-3 text-sm border border-[1px] border-darkTheme text-darkText placeholder-darkTheme rounded shadow focus:outline-none focus:shadow-outline" placeholder="Year of pass out from college" />
                            @error('passing_year') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-4 w-full">
                            <label class="block mb-2 text-sm font-semibold" for="qualification">Qualification</label>
                            <input type="text" wire:model="qualification" class="w-full p-3 text-sm border border-[1px] border-darkTheme text-darkText placeholder-darkTheme rounded shadow focus:outline-none focus:shadow-outline" placeholder="Current Academic qualification" />
                            @error('qualification') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-4 w-full">
                            <label class="block mb-2 text-sm font-semibold" for="contact_number">Contact Number</label>
                            <input type="number" wire:model="contact_number" class="w-full p-3 text-sm border border-[1px] border-darkTheme text-darkText placeholder-darkTheme rounded shadow focus:outline-none focus:shadow-outline" placeholder="Contact Number" />
                            @error('contact_number') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-4 w-full">
                            <label class="block mb-2 text-sm font-semibold" for="whatsappNumber">Whatsapp Number</label>
                            <input type="number" wire:model="whatsappNumber" class="w-full p-3 text-sm border border-[1px] border-darkTheme text-darkText placeholder-darkTheme rounded shadow focus:outline-none focus:shadow-outline" placeholder="Whatsapp Number" />
                            @error('whatsappNumber') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-4 w-full">
                            <label class="block mb-2 text-sm font-semibold" for="email">Email</label>
                            <input type="email" wire:model="email" class="w-full p-3 text-sm border border-[1px] border-darkTheme text-darkText placeholder-darkTheme rounded shadow focus:outline-none focus:shadow-outline" placeholder="Email" />
                            @error('email') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-4 w-full">
                            <label class="block mb-2 text-sm font-semibold" for="permanent_address">Permanent Address</label>
                            <textarea wire:model="permanent_address" rows="1" class="w-full p-3 text-sm border border-[1px] border-darkTheme text-darkText placeholder-darkTheme rounded shadow focus:outline-none focus:shadow-outline" placeholder="Permanent Address"></textarea>
                            @error('permanent_address') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-4 w-full">
                            <label class="block mb-2 text-sm font-semibold" for="Employment_status">Employment Status</label>
                            <textarea wire:model="Employment_status" rows="1" class="w-full p-3 text-sm border border-[1px] border-darkTheme text-darkText placeholder-darkTheme rounded shadow focus:outline-none focus:shadow-outline" placeholder="Employment Status"></textarea>
                            @error('Employment_status') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-4 w-full lg:col-span-2 md:col-span-2 sm:col-span-2 col-span-1">
                            <label class="block mb-2 text-sm font-semibold" for="place_of_posting">If Govt. Job then Place of Posting</label>
                            <input type="text" wire:model="place_of_posting" class="w-full p-3 text-sm border border-[1px] border-darkTheme text-darkText placeholder-darkTheme rounded shadow focus:outline-none focus:shadow-outline" placeholder="If Govt. Job then Place of Posting and designation" />
                            @error('place_of_posting') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
                        </div>

                        <div class="mb-4 w-full lg:col-span-2 md:col-span-2 sm:col-span-2 col-span-1">
                            <div class="w-full rounded-md bg-white shadow-lg shadow-gray-200 p-2 ">
                                      <div> <span class="text-sm font-semibold">Account Name:</span> <span class="text-sm text-darkText italic">OSA</span></div>
                                      <div> <span class="text-sm font-semibold">Bank Name:</span> <span class="text-sm text-darkText italic">HP State Cooperative Bank Limited</span></div>
                                      <div> <span class="text-sm font-semibold">Bank Branch:</span> <span class="text-sm text-darkText italic">Saraswati Nagar (Jubal)</span></div>
                                      <div> <span class="text-sm font-semibold">Account No:</span> <span class="text-sm text-darkText italic">44810103500</span></div>
                                      <div> <span class="text-sm font-semibold">IFSC Code:</span> <span class="text-sm text-darkText italic">HPSC0000448</span></div>
                                      <div> <span class="text-sm font-semibold">Registration Fee:</span> <span class="text-sm text-darkText italic">Rs 100</span></div>
                            </div>
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
