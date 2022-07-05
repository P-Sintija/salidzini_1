<template>
    <div class="flex">
        <span v-if="required" class="mr-1 text-red-400">*</span>
        <label :for="fieldId"
               v-if="label"
               class="font-semibold text-sm text-gray-600 pb-1 block"
        >{{ label }}</label>
    </div>
    <input :id="fieldId"
           v-bind="$attrs"
           :value="modelValue"
           :placeholder="placeholder"
           @input="$emit('update:modelValue', $event.target.value)"
           class="border border-gray-200 rounded-lg px-3 py-2 mt-1 mb-5 text-sm w-full"
    >
    <span v-if="errorMessage"
          class="font-semibold text-sm text-red-400 pb-1 block -mt-2.5"
    >{{ errorMessage }}</span>
</template>

<script>
export default {
    name: "SimpleInput",
    props: {
        fieldId: {
            type: [String, Number],
            default: '',
        },
        required: {
            type: [Boolean],
            default: false
        },
        label: {
            type: String,
            default: ''
        },
        placeholder: {
            type: String,
            default: ''
        },
        errorMessage: {
            type: [String, Boolean],
            default: false
        },
        modelValue: {
            type: [String, Number],
            default: ''
        }
    },
}
</script>

<style scoped>

</style>
