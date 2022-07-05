<template>
    <div id="small-modal" tabindex="-1"
         class="hidden overflow-y-auto overflow-x-hidden fixed top-0 z-50 w-full h-modal h-full
         flex justify-center items-center bg-gray-900 bg-opacity-60">
        <div class="relative p-4 w-full max-w-md h-full h-auto">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex justify-between items-center p-5 rounded-t border-b border-gray-200">
                    <h3 class="text-xl font-medium text-gray-900 dark:text-white">
                        {{ this.modalTitle }}
                    </h3>
                    <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg
                            text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            @click.prevent="hideModal">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                  d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                  clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="px-6 py-8 space-y-6">
                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400" v-html="this.modalContent"></p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "SmallModal",
    props: {
        modalTitle: {
            type: String,
            default: '',
        },
        modalContent: {
            type: String,
            default: '',
        }
    },
    methods: {
        hideModal() {
            const modal = document.getElementById('small-modal');
            modal.classList.add('hidden')
            modal.classList.remove('show')
        }
    }
}
</script>

<style scoped>

</style>
