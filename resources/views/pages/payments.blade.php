<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="pb-3">
                <x-primary-button>
                    <a href="{{ route('export.payments') }}">
                        {{ __('Export as Excel Sheet') }}
                    </a>
                </x-primary-button>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900" style="overflow: auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col"
                                    class="px-2 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    #
                                </th>
                                <th scope="col"
                                    class="px-2 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Student Name
                                </th>
                                <th scope="col"
                                    class="px-2 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Parent Name
                                </th>
                                <th scope="col"
                                    class="px-2 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Whatsapp Number
                                </th>
                                <th scope="col"
                                    class="px-2 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Parent Email
                                </th>
                                <th scope="col"
                                    class="px-2 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    School Name
                                </th>
                                <th scope="col"
                                    class="px-2 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Age
                                </th>
                                <th scope="col"
                                    class="px-2 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Payment ID
                                </th>
                                <th scope="col"
                                    class="px-2 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Course
                                </th>
                                <th scope="col"
                                    class="px-2 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Amount
                                </th>
                                <th scope="col"
                                    class="px-2 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Time slot
                                </th>
                                <th scope="col"
                                    class="px-2 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Promo
                                </th>
                                <th scope="col"
                                    class="px-2 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Date
                                </th>
                                <th scope="col"
                                    class="px-2 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Status
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">

                            <?php $count = 1; ?>
                            @foreach ($payments as $i)
                                <tr>
                                    <td class="px-2 py-2 whitespace-nowrap">{{ $count }}</td>
                                    <td class="px-2 py-2 whitespace-nowrap">{{ $i->student_name }}</td>
                                    <td class="px-2 py-2 whitespace-nowrap">{{ $i->parent_name }}</td>
                                    <td class="px-2 py-2 whitespace-nowrap">{{ $i->parent_number }}</td>
                                    <td class="px-2 py-2 whitespace-nowrap">{{ $i->parent_email }}</td>
                                    <td class="px-2 py-2 whitespace-nowrap">{{ $i->school_name }}</td>
                                    <td class="px-2 py-2 whitespace-nowrap">{{ $i->age }}yrs</td>
                                    <td class="px-2 py-2 whitespace-nowrap">{{ $i->payment_id }}</td>
                                    <td class="px-2 py-2 whitespace-nowrap">{{ $i->course }}</td>
                                    <td class="px-2 py-2 whitespace-nowrap">{{ $i->price }} EGP</td>
                                    <?php
                                    if (preg_match('/Sec-([\d]+):.*?([\d]+:[\d]+-[ \d]+:[\d]+ [ap]m)/', $i->time, $matches)) {
                                        $section = 'Sec-' . $matches[1];
                                        $time = $matches[2];
                                    }
                                    ?>
                                    <td class="px-2 py-2 whitespace-nowrap">
                                        @if ($i->time)
                                            <div style="width: 107px">
                                                {{ "$section" }}
                                                <br>
                                                {{ "$time\n" }}
                                            </div>
                                        @else
                                            Not Selected
                                        @endif
                                    </td>
                                    <td class="px-2 py-2 whitespace-nowrap">{{ $i->promo === null ? '--' : $i->promo }}
                                    </td>
                                    <td class="px-2 py-2 whitespace-nowrap">
                                        <span style="width: 110px;display: block">
                                            {{ $i->updated_at }}
                                        </span>
                                    </td>
                                    <td class="px-2 py-2 whitespace-nowrap">{{ $i->status }}</td>
                                </tr>
                                <?php $count++; ?>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $payments->links() }}
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
