@props([
  'name' => '',
  'emoticons' => [],
  'display' => '',
  'listening' => ''
])

<tr class="flex mb-0.5 ml-6 cursor-default">
  <td class="pr-1.5">
    @if (!empty($display))   
      <div class="w-3">
        <img src="{{ $display }}" class="rounded-sm" />
      </div>
    @else
      <div class="w-3">
        <img src="/assets/images/emoticons/user.png" />
      </div>
    @endif
  </td>
  <td class="flex">
    <span>{{ $name }}</span>

    @if (!empty($listening))    
      <span class="ml-1.5 flex">
        <div class="w-3 mr-1 self-center">
          <img src="/assets/images/emoticons/headphones.png" />
        </div>
        <a href="#" class="text-blue-500 underline">{{ $listening }}</a>
      </span>
    @endif
  </td>
</tr>