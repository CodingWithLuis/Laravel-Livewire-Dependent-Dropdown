<div>
    <div class="col-span-6 sm:col-span-3">
        <label for="country" class="block text-sm font-medium text-gray-700">Country</label>
        <select id="country" name="country" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" wire:model="country">
            <option>--- Select a country ---</option>
            @foreach($countries as $country)
            <option value="{{$country->id}}">{{$country->name}}</option>
            @endforeach
        </select>
    </div>

    <div class="col-span-6 sm:col-span-3 mt-3">
        <label for="city" class="block text-sm font-medium text-gray-700">City</label>
        <select id="city" name="city" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" wire:model="city">
            @if($cities->count() == 0)
            <option>You have to select a country before</option>
            @endif
            @foreach($cities as $city)
            <option value="{{$city->id}}">{{$city->name}}</option>
            @endforeach
        </select>
    </div>
</div>
