<x-doctor-dashboard>
    <div class="mt-6 w-full">
        <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 pr-10 lg:px-8">
            <div class="align-middle inline-block min-w-full shadow shadow-dashboard overflow-hidden bg-white  px-8 pt-3 rounded-bl-lg rounded-br-lg">
                @isset($patients)
                <div class="min-w-full mt-6">
                    <div class="bg-white">
                        @foreach ($patients as $item)
                        <h1 class="mt-20"><b> {{ $loop->index + 1 }}.</b>  </h1>
                        <ul>
                            <li class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                <div class="text-sm leading-5 text-pink-900">Patient's Name :  {{$item->name}}</div>
                            </li>
                            <div class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-500 text-sm leading-5">
                                <button class="px-5 py-2 border-pink-500 border text-pink-500 rounded transition duration-300 hover:bg-red-700 hover:text-white focus:outline-none">
                                    <a href="{{'/dashboard/doctor/chat/'.$item->patient_id }}">Message</a>
                                </button>
                            </div>
                        </ul>    
                        @endforeach
                    </div>
                </div>   
                @endisset
            </div>
        </div>
    </div>
</x-doctor-dashboard>
