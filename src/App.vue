<script lang="ts">
import { defineComponent, ref } from 'vue';
import { Icon } from '@iconify/vue';
import wallpaperUrl from './assets/images/wallpaper.jpg';

export default defineComponent({
  components: {
    Icon
  },
  setup() {

    const user = ref({
      display: 'verdades.png',
      name: 'otoniieel',
      status: 'Online',
      listening: 'Beautiful Day - U2',
      friendsListExpanded: true,
      friends: [
        {
          name: ".o0×X×0o. fantasiiasrootas .o0×X×0o.",
          status: 'Online',
        },
        {
          name: "•?((¯°·._.• ρąɲďɨţą •._.·°¯))؟•",
          status: 'Online',

        },
        {
          display: 'dog.jpg',
          name: "Alex",
          status: 'Online',
          listening: 'Sk8er Boi - Avril Lavigne',
        },
        {
          display: 'sombra.jpg',
          name: `zOna emOpunK`,
          nameIcons: ['/icons/brheart.png', '/icons/cigarette.gif'],
          status: 'Online',
          listening: null,
        },
        {
          name: `quierO esKpar¡¡¡`,
          nameIcons: ['/icons/angry.png'],
          status: 'Online',
          listening: 'Escapar - Kudai',
        },
        {
          name: `dAnCe wIt ThE deViL`,
          nameIcons: ['/icons/note.png', '/icons/note.png'],
          status: 'Online',
          listening: null,
        },
      ]
    });
    const desktop = `background-image: url(${wallpaperUrl});`;
    return { desktop, user }
  }
})
</script>

<template>
  <div id="desktop" :style="desktop" class="p-5 bg-cover h-screen flex items-center">
    <div
      id="msn-window"
      class="rounded-md border border-blue-gray-300 p-0.5 bg-gradient-to-b from-blue-gray-200 via-blue-gray-50 to-blue-gray-200 shadow-black shadow-md mx-auto w-400px h-min"
    >
      <div id="msn-window-header">
        <div
          id="msn-window-header-menu"
          class="rounded-md flex justify-between items-center mb-2 bg-gradient-to-b from-blue-gray-300 via-transparent to-transparent"
        >
          <div class="flex">
            <button class="flex rounded-full border border-blue-gray-300 mr-1 bg-blue-gray-100">
              <Icon icon="mdi:unfold-more-horizontal" />
            </button>
            <a href="#" style="max-width: 40px;" class="p-0.5 mr-2">
              <img src="./assets/logos/msn.svg" />
            </a>
            <div class="text-xs font-bold">Messenger</div>
          </div>
          <div class="flex mr-1 text-blue-gray-500">
            <Icon icon="mdi:window-minimize" width="13" />
            <Icon icon="mdi:window-maximize" width="13" />
            <Icon icon="mdi:close-thick" width="13" />
          </div>
        </div>
        <div
          id="msn-window-header-profile"
          class="p-0.5 rounded bg-gradient-to-t from-blue-gray-300 via-transparent to-transparent"
        >
          <div class="flex p-0.5 bg-gradient-to-t from-blue-gray-100 via-transparent rounded">
            <div class="mr-2 w-15">
              <img :src="`/displays/${user.display}`" class="rounded border border-blue-gray-100" />
            </div>
            <div>
              <div class="flex">
                <span class="text-sm font-bold mr-1">{{ user.name }}</span>
                <span class="text-xs text-blue-gray-500">({{ user.status }})</span>
                <button class="flex self-center">
                  <Icon icon="mdi:chevron-down" width="13" />
                </button>
              </div>
              <div class="text-xs flex">
                <div class="w-3 mr-1 self-center">
                  <img src="/icons/headphones.png" />
                </div>
                <a href="#" class="text-blue-500 underline">{{ user.listening }}</a>
              </div>
              <div class="text-xs mt-1 flex cursor-default">
                <div class="mr-3 flex items-center">
                  <div class="w-3 mr-1">
                    <img src="/icons/email.png" />
                  </div>
                  <span>(2)</span>
                </div>
                <div class="mr-3 flex">
                  <div class="w-3 mr-1 self-center">
                    <img src="/icons/users.png" />
                  </div>
                  <span>My Space</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="msn-window-body" class="mt-1">
        <div class="p-0.5 bg-gradient-to-b from-blue-gray-300 via-transparent rounded">
          <div class="p-0.5 bg-gradient-to-b from-blue-gray-100 via-transparent">
            <div class="rounded pb-2 rounded">
              <div class="ml-0.5">
                <input type="checkbox" id="cbox1" class="toggle" v-model="user.friendsListExpanded" />
                <label for="cbox1" class="cursor-pointer">
                  <span class="flex w-max">
                    <div
                      class="flex mr-2 rounded-sm border border-blue-gray-500 bg-gradient-to-b from-blue-gray-50 to-blue-gray-300 text-blue-gray-500"
                    >
                      <Icon icon="mdi:plus-thick" width="13" />
                    </div>
                    <p class="text-xs font-bold">Online ({{ user.friends.length }})</p>
                  </span>
                  <span class="flex w-max">
                    <div
                      class="flex mr-2 rounded-sm border border-blue-gray-500 bg-gradient-to-b from-blue-gray-50 to-blue-gray-300 text-blue-gray-500"
                    >
                      <Icon icon="mdi:minus-thick" width="13" />
                    </div>
                    <p class="text-xs font-bold">Online ({{ user.friends.length }})</p>
                  </span>
                </label>
              </div>
              <table v-if="user.friendsListExpanded" class="text-xs cursor-default w-full">
                <tr v-for="(friend,index) in user.friends" :key="index" class="flex mb-0.5 ml-6">
                  <td class="pr-1.5">
                    <div class="w-3" v-if="friend.display">
                      <img :src="`/displays/${friend.display}`" class="rounded rounded-sm" />
                    </div>
                    <div class="w-3" v-else>
                      <img src="/icons/user.png" />
                    </div>
                  </td>
                  <td class="flex">
                    <span>{{ friend.name }}</span>
                    <span
                      class="w-3 self-center"
                      v-for="(icon,index) in friend.nameIcons"
                      :key="index"
                    >
                      <img :src="icon" />
                    </span>
                    <span class="ml-1.5 flex" v-if="friend.listening">
                      <div class="w-3 mr-1 self-center">
                        <img src="/icons/headphones.png" />
                      </div>
                      <a href="#" class="text-blue-500 underline">{{ friend.listening }}</a>
                    </span>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- <div id="msn-conversation"></div> -->
  </div>
</template>