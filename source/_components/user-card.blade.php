@props([
  'name' => '',  
  'display' => '/assets/images/displays/dog.jpg',  
  'listening' => '',  
  'status' => ''
])

<div class="flex p-0.5 bg-gradient-to-t from-blue-gray-100 via-transparent rounded">
  <div class="mr-2">
    <img style="width: 60px" src="{{ $display }}" class="rounded border border-blue-gray-100" />
  </div>
  <div>
    <div class="flex">
      <span class="text-sm font-bold mr-1">{{ $name }}</span>
      <span class="text-xs text-blue-gray-500">({{ $status }})</span>
      <button class="flex self-center">
        <Icon icon="mdi:chevron-down" width="13" />
      </button>
    </div>
    <div class="text-xs flex">
      <div class="w-3 mr-1 self-center">
        <img src="/assets/images/emoticons/headphones.png" />
      </div>
      <a href="#" class="text-blue-500 underline">{{ $listening }}</a>
    </div>
    <div class="text-xs mt-1 flex cursor-default">
      <div class="mr-3 flex items-center">
        <div class="w-3 mr-1">
          <img src="/assets/images/emoticons/email.png" />
        </div>
        <span>(2)</span>
      </div>
      <div class="mr-3 flex">
        <div class="w-3 mr-1 self-center">
          <img src="/assets/images/emoticons/users.png" />
        </div>
        <span>My Space</span>
      </div>
    </div>
  </div>
</div>