@extends('_layouts.app')

@section('body')
<div id="desktop" style="background-image: url('/assets/images/wallpaper.jpg');" class="p-5 bg-cover h-screen flex items-center">
	<div id="msn-window" style="width:400px" class="rounded-md p-0.5 bg-gradient-to-b from-blue-gray-200 via-blue-gray-50 to-blue-gray-200 shadow mx-auto h-min">
		<div id="msn-window-header" class="cursor-default">
			<div id="msn-window-header-menu" class="rounded-md flex justify-between items-center mb-2 bg-gradient-to-b from-blue-gray-300 via-transparent to-transparent">
				<div class="flex">
					<span class="flex rounded-full border border-blue-gray-300 mr-1 bg-blue-gray-100">
						<img src="/assets/images/icons/unfold-more-horizontal.svg" width="16" />
					</span>
					<span style="max-width: 40px;" class="p-0.5 mr-2">
						<img src="/assets/images/logos/msn.svg" />
					</span>
					<div class="text-xs font-bold">Messenger</div>
				</div>
				<div class="flex mr-1 text-blue-gray-500">
					<img src="/assets/images/icons/window-minimize.svg" width="13" />
					<img src="/assets/images/icons/window-maximize.svg" width="13" />
					<img src="/assets/images/icons/close-thick.svg" width="13" />
				</div>
			</div>
			<div id="msn-window-header-profile"
				class="p-0.5 rounded bg-gradient-to-t from-blue-gray-300 via-transparent to-transparent">
					<x-user-card
						name="{{ $page->user->name }}"
						display="{{ $page->user->display }}"
						status="{{ $page->user->status }}"
						listening="{{ $page->user->listening }}"
					/>
			</div>
		</div>
		<div id="msn-window-body" class="mt-1">
			<div class="p-0.5 bg-gradient-to-b from-blue-gray-300 via-transparent rounded">
				<div class="p-0.5 bg-gradient-to-b from-blue-gray-100 via-transparent" x-data="{ friendsListExpanded: true }">
					<div class="rounded pb-2">
						<div class="ml-0.5">
							<input type="checkbox" id="cbox1" class="toggle" x-on:click="friendsListExpanded = ! friendsListExpanded" />
							<label for="cbox1" class="cursor-pointer">
								<span class="flex w-max">
									<div class="flex mr-2 rounded-sm border border-blue-gray-500 bg-gradient-to-b from-blue-gray-50 to-blue-gray-300 text-blue-gray-500">
										<img x-show="!friendsListExpanded" src="/assets/images/icons/plus-thick.svg" width="13" />
										<img x-show="friendsListExpanded" src="/assets/images/icons/minus-thick.svg" width="13" />
									</div>
									<p class="text-xs font-bold">Online ({{ count($page->user['friends']) }})</p>
								</span>
							</label>
						</div>
						<table x-show="friendsListExpanded" class="text-xs w-full">
							@foreach ($page->user['friends'] as $friend)
								<x-friends-list-item name="{{ $friend->name }}" display="{{ $friend->display }}" listening="{{ $friend->listening }}"/>
							@endforeach
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection