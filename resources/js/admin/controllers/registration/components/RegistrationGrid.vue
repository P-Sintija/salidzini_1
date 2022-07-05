<template>
    <form>
        <div class="min-h-screen bg-gray-100 flex flex-col justify-center sm:py-12">
            <div class="p-10 xs:p-0 mx-auto md:w-full md:max-w-md">
                <h1 class="font-bold text-center text-2xl mb-5">Your Logo</h1>
                <div class="bg-white shadow w-full rounded-lg divide-y divide-gray-200">
                    <div class="px-5 py-7">

                        <simple-input
                            v-model="input.name"
                            field-id="name"
                            label="Name"
                            placeholder="Name"
                            type="text"
                            :required=true
                            :error-message="errorMessage.name"
                        />

                        <simple-input
                            v-model="input.email"
                            field-id="Email"
                            label="Email"
                            placeholder="Email"
                            type="text"
                            :required=true
                            :error-message="errorMessage.email"
                        />

                        <simple-input
                            v-model="input.password"
                            field-id="Password"
                            label="Password"
                            placeholder="Password"
                            type="password"
                            :required=true
                            :error-message="errorMessage.password"
                        />

                        <simple-input
                            v-model="input.reEnteredPassword"
                            field-id="re-enter-password"
                            label="Re Enter Password"
                            placeholder="Re Enter Password"
                            type="password"
                            :required=true
                            :error-message="errorMessage.reEnteredPassword"
                        />

                        <button type="button"
                                @click.prevent="submit"
                                class="transition duration-200 bg-blue-500 hover:bg-blue-600 focus:bg-blue-700
                            focus:shadow-sm focus:ring-4 focus:ring-blue-500 focus:ring-opacity-50 text-white
                            w-full py-2.5 rounded-lg text-sm shadow-sm hover:shadow-md font-semibold text-center
                            inline-block mt-2">
                            <span class="inline-block mr-2">Register</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <small-modal :modal-title="this.modalTitle" :modal-content="this.modalContent"></small-modal>


</template>

<script>
import SimpleInput from "../../../global/components/formFields/SimpleInput";
import SmallModal from "../../../global/components/modals/SmallModal";

export default {
    name: "RegistrationGrid",
    components: {SimpleInput, SmallModal},
    props: ['modalTitle', 'modalContent'],
    data() {
        return {
            input: {
                name: '',
                email: '',
                password: '',
                reEnteredPassword: '',
            },
            errorMessage: {
                name: '',
                email: '',
                password: '',
                reEnteredPassword: '',
            },
        }
    },
    mounted() {
        const modal = document.getElementById('small-modal');
        modal.classList.add('show')
        modal.classList.remove('hidden')
    },
    methods: {
        submit() {
            const data = {
                name: this.input.name,
                email: this.input.email,
                password: this.input.password,
                reEnteredPassword: this.input.reEnteredPassword,
            };

            axios.post("/admin/registration", data)
                .then(response => {
                    const modal = document.getElementById('small-modal');
                    modal.classList.add('show')
                    modal.classList.remove('hidden')
                })
                .catch(errors => {
                    let messages = errors.response.data.errors;
                    this.errorMessage.name = messages.name ? messages.name.toString() : '';
                    this.errorMessage.email = messages.email ? messages.email.toString() : '';
                    this.errorMessage.password = messages.password ? messages.password.toString() : '';
                    this.errorMessage.reEnteredPassword = messages.reEnteredPassword ? messages.reEnteredPassword.toString() : '';
                });
        },
    }
}
</script>

<style scoped>

</style>
