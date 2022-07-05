<template>
    <div class="min-h-screen bg-gray-100 flex flex-col justify-center sm:py-12">
        <div class="p-10 xs:p-0 mx-auto md:w-full md:max-w-md">
            <h1 class="font-bold text-center text-2xl mb-5">Your Logo</h1>
            <div class="bg-white shadow w-full rounded-lg divide-y divide-gray-200">
                <div class="px-5 py-7">

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
</template>

<script>
import SimpleInput from "../../../global/components/formFields/SimpleInput";

export default {
    name: "RegistrationGrid",
    components: {SimpleInput},
    props: {
        username: String
    },
    data() {
        return {
            input: {
                email: '',
                password: '',
                reEnteredPassword: '',
            },
            errorMessage: {
                email: '',
                password: '',
                reEnteredPassword: '',
            },
        }
    },
    methods: {
        submit() {
            if (this.isEmailValid()) {
                console.log('Can be submitted')
            }
        },

        isEmailValid() {
            if (this.input.email === '') {
                this.errorMessage.email = 'This field is required';
                return false;
            } else if (!this.input.email.includes('@')) {
                this.errorMessage.email = 'Must be a valid email';
                return false;
            } else {
                this.errorMessage.email = '';
                return true;
            }
        }
    }
}
</script>

<style scoped>

</style>
