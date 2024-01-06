<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div style="width: 100%;display:flex;justify-content: center" class="p-5 mt-6">

                    <x-auth-session-status class="mb-4" :status="session('status')"/>

                    <form style="width: 70%" method="POST" action="{{ route('add.promo.code') }}">
                        @csrf

                        <div>
                            <x-input-label for="promo" :value="__('Promo Code')"/>
                            <x-text-input id="promo" class="block mt-1 w-full" type="text" name="promo"
                                          :value="old('promo')" required autofocus autocomplete="promo"/>
                            <x-input-error :messages="$errors->get('promo')" class="mt-2"/>
                        </div>

                        <!-- Password -->
                        <div class="mt-4">
                            <x-input-label for="percent" :value="__('Percent')"/>

                            <x-text-input id="percent" class="block mt-1 w-full"
                                          type="number"
                                          name="percent"
                                          required autocomplete="current-percent"/>

                            <x-input-error :messages="$errors->get('percent')" class="mt-2"/>
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button class="w-full flex justify-center">
                                {{ __('Add New') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>

                <div class="p-6 pt-1 text-gray-900" style="overflow: auto;display: flex;justify-content: center">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                        <tr>
                            <th scope="col"
                                class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                #
                            </th>
                            <th scope="col"
                                class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Code
                            </th>
                            <th scope="col"
                                class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Percent
                            </th>
                            <th scope="col"
                                class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Delete
                            </th>
                        </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">

                        <?php $count = 1; ?>
                        @foreach($promo_codes as $i)

                            <tr>
                                <td class="px-6 py-2 whitespace-nowrap">{{ $count }}</td>
                                <td class="px-6 py-2 whitespace-nowrap">{{ $i->promo }}</td>
                                <td class="px-6 py-2 whitespace-nowrap">%{{ $i->percent }}</td>
                                <td class="px-6 py-2 whitespace-nowrap">
                                    <button style="background-color: red ;border-radius: 12px;font-size: 15px"
                                            class="text-white font-bold py-2 px-4">
                                        <a href="{{route("delete.promo.code",$i->id)}}">
                                            Delete
                                        </a>
                                    </button>
                                </td>
                            </tr>
                                <?php $count++ ?>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
